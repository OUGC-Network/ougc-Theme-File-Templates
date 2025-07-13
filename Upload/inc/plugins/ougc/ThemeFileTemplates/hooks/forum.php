<?php

/***************************************************************************
 *
 *    ougc Theme File Templates plugin (/inc/plugins/ougc/ThemeFileTemplates/hooks/forum.php)
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

namespace ougc\ThemeFileTemplates\Hooks\Forum;

use const ougc\ThemeFileTemplates\ROOT;

function global_intermediate(): void
{
    global $mybb, $theme, $db;
    global $stylesheets, $css_php_script_stylesheets;

    $theme_stylesheets = $already_loaded = [];

    $stylesheets = '';

    $stylesheet_scripts = ['global', basename($_SERVER['PHP_SELF'])];

    if (!empty($theme['color'])) {
        $stylesheet_scripts[] = $theme['color'];
    }

    $stylesheet_actions = ['global'];

    if (!empty($mybb->input['action'])) {
        $stylesheet_actions[] = $mybb->get_input('action');
    }

    foreach ($stylesheet_scripts as $stylesheet_script) {
        // Load stylesheets for global actions and the current action
        foreach ($stylesheet_actions as $stylesheet_action) {
            if (!$stylesheet_action) {
                continue;
            }

            if (!empty($theme['stylesheets'][$stylesheet_script][$stylesheet_action])) {
                // Actually add the stylesheets to the list
                foreach ($theme['stylesheets'][$stylesheet_script][$stylesheet_action] as $page_stylesheet) {
                    if (!empty($already_loaded[$page_stylesheet])) {
                        continue;
                    }

                    if (str_contains($page_stylesheet, 'css.php')) {
                        $stylesheet_url = $mybb->settings['bburl'] . '/' . $page_stylesheet;
                    } else {
                        $stylesheet_url = $mybb->get_asset_url($page_stylesheet);
                        if (file_exists(MYBB_ROOT . $page_stylesheet)) {
                            $stylesheet_url .= '?t=' . filemtime(MYBB_ROOT . $page_stylesheet);
                        }
                    }

                    if ($mybb->settings['minifycss']) {
                        $stylesheet_url = str_replace('.css', '.min.css', $stylesheet_url);
                    }

                    $fileName = basename($page_stylesheet);

                    $filePath = ROOT . '/stylesheets/' . $fileName;

                    if (str_contains($page_stylesheet, 'css.php')) {
                        // We need some modification to get it working with the displayorder
                        $query_string = parse_url($stylesheet_url, PHP_URL_QUERY);
                        $id = (int)my_substr($query_string, 11);
                        $query = $db->simple_select('themestylesheets', 'name', "sid={$id}");
                        $real_name = $db->fetch_field($query, 'name');
                        $theme_stylesheets[$real_name] = $id;
                    } elseif (file_exists($filePath)) {
                        $query = $db->simple_select('themestylesheets', 'sid', "name='{$fileName}'");

                        $theme_stylesheets[$fileName] = (int)$db->fetch_field($query, 'sid');
                    } else {
                        $theme_stylesheets[basename(
                            $page_stylesheet
                        )] = "<link type=\"text/css\" rel=\"stylesheet\" href=\"{$stylesheet_url}\" />\n";
                    }

                    $already_loaded[$page_stylesheet] = 1;
                }
            }
        }
    }
    unset($actions);

    $css_php_script_stylesheets = [];

    if (!empty($theme_stylesheets) && is_array($theme['disporder'])) {
        foreach ($theme['disporder'] as $style_name => $order) {
            if (!empty($theme_stylesheets[$style_name])) {
                if (is_int($theme_stylesheets[$style_name])) {
                    $css_php_script_stylesheets[] = $theme_stylesheets[$style_name];
                } else {
                    $stylesheets .= $theme_stylesheets[$style_name];
                }
            }
        }
    }

    if (!empty($css_php_script_stylesheets)) {
        $sheet = $mybb->settings['bburl'] . '/css.php?' . http_build_query([
                'stylesheet' => $css_php_script_stylesheets
            ]);

        $stylesheets .= "<link type=\"text/css\" rel=\"stylesheet\" href=\"{$sheet}\" />\n";
    }
}