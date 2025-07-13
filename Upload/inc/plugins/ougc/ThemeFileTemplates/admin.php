<?php

/***************************************************************************
 *
 *    ougc Theme File Templates plugin (/inc/plugins/ougc/ThemeFileTemplates/admin.php)
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

namespace ougc\ThemeFileTemplates\Admin;

use DirectoryIterator;
use PluginLibrary;
use stdClass;

use function ougc\ThemeFileTemplates\Core\languageLoad;

use const ougc\ThemeFileTemplates\ROOT;

function pluginInformation(): array
{
    global $lang;

    languageLoad();

    return [
        'name' => 'ougc Theme File Templates',
        'description' => $lang->ougcThemeFileTemplatesDescription,
        'website' => 'https://ougc.network',
        'author' => 'Omar G.',
        'authorsite' => 'https://ougc.network',
        'version' => '1.0.0',
        'versioncode' => 1000,
        'compatibility' => '18*',
        'codename' => 'ougcThemeFileTemplates',
        'newpoints' => '3.1.0',
        'pl' => [
            'version' => 13,
            'url' => 'https://community.mybb.com/mods.php?action=view&pid=573'
        ]
    ];
}

function pluginActivation(): bool
{
    global $cache;

    $pluginInfo = pluginInformation();

    loadPluginLibrary();

    $plugins = $cache->read('ougc_plugins');

    if (!$plugins) {
        $plugins = [];
    }

    if (!isset($plugins['ThemeFileTemplates'])) {
        $plugins['ThemeFileTemplates'] = $pluginInfo['versioncode'];
    }

    /*~*~* RUN UPDATES START *~*~*/

    /*~*~* RUN UPDATES END *~*~*/

    $plugins['ThemeFileTemplates'] = $pluginInfo['versioncode'];

    $cache->update('ougc_plugins', $plugins);

    return true;
}

function pluginIsInstalled(): bool
{
    global $cache;

    $plugins = (array)$cache->read('ougc_plugins');

    return isset($plugins['ThemeFileTemplates']);
}

function pluginUninstallion(): bool
{
    global $cache;

    // Delete version from cache
    $plugins = (array)$cache->read('ougc_plugins');

    if (isset($plugins['ThemeFileTemplates'])) {
        unset($plugins['ThemeFileTemplates']);
    }

    if (!empty($plugins)) {
        $cache->update('ougc_plugins', $plugins);
    } else {
        $cache->delete('ougc_plugins');
    }

    return true;
}

function pluginLibraryRequirements(): stdClass
{
    return (object)pluginInformation()['pl'];
}

function loadPluginLibrary(): bool
{
    global $PL, $lang;

    languageLoad();

    $fileExists = file_exists(PLUGINLIBRARY);

    if ($fileExists && !($PL instanceof PluginLibrary)) {
        require_once PLUGINLIBRARY;
    }

    if (!$fileExists || $PL->version < pluginLibraryRequirements()->version) {
        flash_message(
            $lang->sprintf(
                $lang->ougcThemeFileTemplatesPluginLibrary,
                pluginLibraryRequirements()->url,
                pluginLibraryRequirements()->version
            ),
            'error'
        );

        admin_redirect('index.php?module=config-plugins');
    }

    return true;
}