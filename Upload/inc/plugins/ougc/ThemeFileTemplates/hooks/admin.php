<?php

/***************************************************************************
 *
 *    ougc Theme File Templates plugin (/inc/plugins/ougc/ThemeFileTemplates/hooks/shared.php)
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

namespace ougc\ThemeFileTemplates\Hooks\Shared;

use MyBB;
use DirectoryIterator;

use function ougc\ThemeFileTemplates\Core\getSetting;

use const ougc\ThemeFileTemplates\ROOT;

function admin_load(): void
{
    $templateSetID = (int)getSetting('importToTemplateSetID');

    if ($templateSetID < 1) {
        return;
    }

    $templates = [];

    if (file_exists($templateDirectory = ROOT . '/templates')) {
        $templatesDirIterator = new DirectoryIterator($templateDirectory);

        foreach ($templatesDirIterator as $template) {
            if (!$template->isFile()) {
                continue;
            }

            $pathName = $template->getPathname();

            $pathInfo = pathinfo($pathName);

            if ($pathInfo['extension'] === 'html') {
                $templates[$pathInfo['filename']] = file_get_contents($pathName);
            }
        }
    }

    if (!$templates) {
        return;
    }

    global $mybb, $db;

    $masterTemplatesCache = [];

    $query = $db->simple_select('templates', 'title, template', "sid='-2'");

    while ($templateData = $db->fetch_array($query)) {
        $masterTemplatesCache[$templateData['title']] = $templateData['template'];
    }

    $modifiedTemplates = $errorTemplates = [];

    $db->delete_query('templates', "sid='{$templateSetID}'");

    foreach ($templates as $fileName => $templateContents) {
        if (!isset($masterTemplatesCache[$fileName]) || rtrim($templateContents) !== $masterTemplatesCache[$fileName]) {
            $modifiedTemplates[] = $fileName;


            // Are we trying to do malicious things in our template?
            if (check_template($templateContents)) {
                $errorTemplates[] = $fileName;

                continue;
            }

            $fileNameEscaped = $db->escape_string($fileName);

            $query = $db->simple_select(
                'templates',
                'tid, title, template, sid, version',
                "title='{$fileNameEscaped}'"
            );

            $templateData = $db->fetch_array($query);

            $insertData = [
                'title' => $fileNameEscaped,
                'sid' => $templateSetID,
                'template' => $db->escape_string(rtrim($templateContents)),
                'version' => $mybb->version_code,
                'status' => '',
                'dateline' => TIME_NOW
            ];

            // Make sure we have the correct tid associated with this template. If the user double submits then the tid could originally be the master template tid, but because the form is sumbitted again, the tid doesn't get updated to the new modified template one. This then causes the master template to be overwritten
            $query = $db->simple_select(
                'templates',
                'tid',
                "title='" . $db->escape_string(
                    $templateData['title']
                ) . "' AND (sid = '-2' OR sid = '{$templateData['sid']}')",
                ['order_by' => 'sid', 'order_dir' => 'desc', 'limit' => 1]
            );

            $templateData['tid'] = $db->fetch_field($query, 'tid');

            // Check to see if it's never been edited before (i.e. master) or if this a new template (i.e. we've renamed it)  or if it's a custom template
            $query = $db->simple_select(
                'templates',
                'sid',
                "title='" . $fileNameEscaped . "' AND (sid = '-2' OR sid = '{$templateSetID}' OR sid='{$templateData['sid']}')",
                ['order_by' => 'sid', 'order_dir' => 'desc']
            );

            $existingTemplateSetID = (int)($db->fetch_field($query, 'sid') ?? 0);

            $existingRows = (bool)$db->num_rows($query);

            if (($existingTemplateSetID === -2 && $existingRows) || !$existingRows) {
                $templateData['tid'] = $db->insert_query('templates', $insertData);
            } else {
                $db->update_query('templates', $insertData, "tid='{$templateData['tid']}' AND sid != '-2'");
            }
        }
    }

    echo '<pre>';

    if ($modifiedTemplates) {
        echo 'The following templates were updated:<br/>';

        print_r($modifiedTemplates);
    }

    if ($errorTemplates) {
        echo 'The following templates were NOT updated because they have errors:<br/>';

        print_r($errorTemplates);
    }

    echo '</pre>';
}

function admin_config_plugins_deactivate(): void
{
    global $mybb, $page;

    if (
        $mybb->get_input('action') !== 'deactivate' ||
        $mybb->get_input('plugin') !== 'ougcThemeFileTemplates' ||
        !$mybb->get_input('uninstall', MyBB::INPUT_INT)
    ) {
        return;
    }

    if ($mybb->request_method != 'post') {
        $page->output_confirm_action(
            'index.php?module=config-plugins&amp;action=deactivate&amp;uninstall=1&amp;plugin=ougcThemeFileTemplates'
        );
    }

    if ($mybb->get_input('no')) {
        admin_redirect('index.php?module=config-plugins');
    }
}