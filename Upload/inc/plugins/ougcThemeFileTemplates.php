<?php

/***************************************************************************
 *
 *    ougc Theme File Templates plugin (/inc/plugins/ougcThemeFileTemplates.php)
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

use function ougc\ThemeFileTemplates\Core\addHooks;
use function ougc\ThemeFileTemplates\Core\control_db;
use function ougc\ThemeFileTemplates\Core\control_object;
use function ougc\ThemeFileTemplates\Admin\pluginInformation;
use function ougc\ThemeFileTemplates\Admin\pluginActivation;
use function ougc\ThemeFileTemplates\Admin\pluginInstallation;
use function ougc\ThemeFileTemplates\Admin\pluginIsInstalled;
use function ougc\ThemeFileTemplates\Admin\pluginUninstallation;

use const ougc\ThemeFileTemplates\ROOT;

defined('IN_MYBB') || die('This file cannot be accessed directly.');

// You can uncomment the lines below to avoid storing some settings in the DB
define('ougc\ThemeFileTemplates\SETTINGS', [
    'importThemeFileName' => 'mybb_theme_1839.xml',
    'importOnInstallation' => false,
    // set this to any template set id, then visit the admin cp,
    // and edited templates will be updated to match the file system
    // stylesheets have to be imported manually for now
    'importToTemplateSetID' => 0,
]);

define('ougc\ThemeFileTemplates\DEBUG', true);

define('ougc\ThemeFileTemplates\ROOT', MYBB_ROOT . 'inc/plugins/ougc/ThemeFileTemplates');

require_once ROOT . '/core.php';

defined('PLUGINLIBRARY') || define('PLUGINLIBRARY', MYBB_ROOT . 'inc/plugins/pluginlibrary.php');

if (defined('IN_ADMINCP')) {
    require_once ROOT . '/admin.php';
    require_once ROOT . '/hooks/admin.php';

    addHooks('ougc\ThemeFileTemplates\Hooks\Admin');
} else {
    require_once ROOT . '/hooks/forum.php';

    addHooks('ougc\ThemeFileTemplates\Hooks\Forum');
}

require_once ROOT . '/hooks/shared.php';

addHooks('ougc\ThemeFileTemplates\Hooks\Shared');

function ougcThemeFileTemplates_info(): array
{
    return pluginInformation();
}

function ougcThemeFileTemplates_activate(): void
{
    pluginActivation();
}

function ougcThemeFileTemplates_install(): void
{
    pluginInstallation();
}

function ougcThemeFileTemplates_is_installed(): bool
{
    return pluginIsInstalled();
}

function ougcThemeFileTemplates_uninstall(): void
{
    pluginUninstallation();
}

global $templates;

if ($templates instanceof templates) {
    control_object(
        $templates,
        'function get($title, $eslashes = 1, $htmlcomments = 1)
{
    $filePath = \ougc\ThemeFileTemplates\ROOT . "/templates/" . $title . ".html";

    if (!file_exists($filePath)) {
        return parent::get($title, $eslashes, $htmlcomments);
    }

    $template = file_get_contents(\ougc\ThemeFileTemplates\ROOT . "/templates/" . $title . ".html") ?? "";

    $template = "<!-- start: " . $title . " -->\n{$template}\n<!-- end: " . $title . " -->";

    if ($eslashes) {
        $template = str_replace("\\\'", "\'", addslashes($template));
    }

    return $template;
}'
    );
}

control_db(
    'function query($string, $hide_errors=0, $write_query=0)
{
    if(str_contains($string, "SELECT stylesheet FROM")) {
        $string = str_replace("SELECT stylesheet", "SELECT name, stylesheet", $string);
    }
    
    return parent::query($string, $hide_errors, $write_query);
}'
);