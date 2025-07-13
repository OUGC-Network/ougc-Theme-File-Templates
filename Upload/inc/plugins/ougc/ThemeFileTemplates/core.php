<?php

/***************************************************************************
 *
 *    ougc Theme File Templates plugin (/inc/plugins/ougc/ThemeFileTemplates/core.php)
 *    Author: Omar Gonzalez
 *    Copyright: © 2025 Omar Gonzalez
 *
 *    Website: https://ougc.network
 *
 *    Allow edition of templates from within the file system.
 *
 ***************************************************************************
 ****************************************************************************
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 ****************************************************************************/

declare(strict_types=1);

namespace ougc\ThemeFileTemplates\Core;

use AbstractPdoDbDriver;
use DB_SQLite;

use ReflectionProperty;

use const ougc\ThemeFileTemplates\DEBUG;
use const ougc\ThemeFileTemplates\ROOT;
use const ougc\ThemeFileTemplates\SETTINGS;

function languageLoad(bool $isDataHandler = false): void
{
    global $lang;

    isset($lang->ougcThemeFileTemplates) || $lang->load('ougcThemeFileTemplates', $isDataHandler);
}

function addHooks(string $namespace): void
{
    global $plugins;

    $namespaceLowercase = strtolower($namespace);

    $definedUserFunctions = get_defined_functions()['user'];

    foreach ($definedUserFunctions as $callable) {
        $namespaceWithPrefixLength = strlen($namespaceLowercase) + 1;

        if (substr($callable, 0, $namespaceWithPrefixLength) == $namespaceLowercase . '\\') {
            $hookName = substr_replace($callable, '', 0, $namespaceWithPrefixLength);

            $priority = substr($callable, -2);

            $isNegative = substr($hookName, -3, 1) === '_';

            if (is_numeric(substr($hookName, -2))) {
                $hookName = substr($hookName, 0, -2);
            } else {
                $priority = 10;
            }

            if ($isNegative) {
                $plugins->add_hook($hookName, $callable, -$priority);
            } else {
                $plugins->add_hook($hookName, $callable, $priority);
            }
        }
    }
}

function getTemplateName(string $templateName = ''): string
{
    $templatePrefix = '';

    if ($templateName) {
        $templatePrefix = '_';
    }

    return "{$templatePrefix}{$templateName}";
}

function getTemplate(string $templateName = '', bool $enableHTMLComments = true): string
{
    global $templates;

    if (DEBUG) {
        $filePath = ROOT . "/templates/{$templateName}.html";

        $templateContents = file_get_contents($filePath);

        $templates->cache[getTemplateName($templateName)] = $templateContents;
    } elseif (my_strpos($templateName, '/') !== false) {
        $templateName = substr($templateName, strpos($templateName, '/') + 1);
    }

    return $templates->render(getTemplateName($templateName), true, $enableHTMLComments);
}

function getSetting(string $settingKey = ''): array|string|float|int|bool
{
    return SETTINGS[$settingKey] ?? false;
}

// control_object by Zinga Burga from MyBBHacks ( mybbhacks.zingaburga.com )
function control_object(&$obj, string $code): void
{
    static $cnt = 0;

    $newname = '_objcont_newpoints_' . (++$cnt);

    $objserial = serialize($obj);

    $classname = get_class($obj);

    $checkstr = 'O:' . strlen($classname) . ':"' . $classname . '":';

    $checkstr_len = strlen($checkstr);

    if (substr($objserial, 0, $checkstr_len) == $checkstr) {
        $vars = [];

        // grab resources/object etc, stripping scope info from keys
        foreach ((array)$obj as $k => $v) {
            if ($p = strrpos($k, "\0")) {
                $k = substr($k, $p + 1);
            }

            $vars[$k] = $v;
        }

        if (!empty($vars)) {
            $code .= '
					function ___setvars(&$a) {
						foreach($a as $k => &$v)
							$this->$k = $v;
					}
				';
        }

        eval('class ' . $newname . ' extends ' . $classname . ' {' . $code . '}');

        $obj = unserialize('O:' . strlen($newname) . ':"' . $newname . '":' . substr($objserial, $checkstr_len));

        if (!empty($vars)) {
            $obj->___setvars($vars);
        }
    }
    // else not a valid object or PHP serialize has changed
}

// explicit workaround for PDO, as trying to serialize it causes a fatal error (even though PHP doesn't complain over serializing other resources)
if ($GLOBALS['db'] instanceof AbstractPdoDbDriver) {
    $GLOBALS['AbstractPdoDbDriver_lastResult_prop'] = new ReflectionProperty('AbstractPdoDbDriver', 'lastResult');

    $GLOBALS['AbstractPdoDbDriver_lastResult_prop']->setAccessible(true);

    function control_db(string $code): void
    {
        global $db;

        $linkvars = [
            'read_link' => $db->read_link,
            'write_link' => $db->write_link,
            'current_link' => $db->current_link,
        ];

        unset($db->read_link, $db->write_link, $db->current_link);

        $lastResult = $GLOBALS['AbstractPdoDbDriver_lastResult_prop']->getValue($db);

        $GLOBALS['AbstractPdoDbDriver_lastResult_prop']->setValue($db, null); // don't let this block serialization

        control_object($db, $code);

        foreach ($linkvars as $k => $v) {
            $db->$k = $v;
        }

        $GLOBALS['AbstractPdoDbDriver_lastResult_prop']->setValue($db, $lastResult);
    }
} elseif ($GLOBALS['db'] instanceof DB_SQLite) {
    function control_db(string $code): void
    {
        global $db;

        $oldLink = $db->db;

        unset($db->db);

        control_object($db, $code);

        $db->db = $oldLink;
    }
} else {
    function control_db(string $code): void
    {
        control_object($GLOBALS['db'], $code);
    }
}