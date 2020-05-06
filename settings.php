<?php // vim: set et ts=4 sw=4 ai smartindent:

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * CKEditor admin settings
 *
 * @package    editor
 * @subpackage ckeditor
 * @copyright  2011 didier Belot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$ADMIN->add('editorsettings', new admin_category('editorckeditor', $editor->displayname, $editor->is_enabled() === false));

$settings = new admin_settingpage('editorsettingsckeditor', new lang_string('settings', 'editor_ckeditor'));
if ($ADMIN->fulltree) {
    require_once(__DIR__.'/lib.php');
    // toolbar definition
    $settings->add(new admin_setting_configtextarea('editor_ckeditor/toolbar', 
        get_string('toolbar','editor_ckeditor'), get_string('toolbarhelp','editor_ckeditor'), 
        ckeditor_texteditor::get_raw_toolbar(),PARAM_RAW,80,10));

    $stylesetname =  new admin_setting_configtext('editor_ckeditor/stylesetname',
        get_string('stylesetname','editor_ckeditor'), get_string('stylesetnamehelp','editor_ckeditor'),
        'default');
    $settings->add($stylesetname);

    $editorcss = new admin_setting_configfile('editor_ckeditor/editorcss',
        get_string('editorcss','editor_ckeditor'), get_string('editorcsshelp','editor_ckeditor'),
        '');
    //$editorcss->update_callback...
    $settings->add($editorcss);

    $skin =  new admin_setting_configtext('editor_ckeditor/skin',
        get_string('skin','editor_ckeditor'), get_string('skinhelp','editor_ckeditor'),
        'yui3');
    $settings->add( $skin );

    $extraplugins =  new admin_setting_configtext('editor_ckeditor/extraplugins',
        'Extra plugins','Comma separated list of additional plugins your site wants to load',
        //get_string('stylesetname','editor_ckeditor'), get_string('stylesetnamehelp','editor_ckeditor'),
        '');
    $settings->add($extraplugins);
}
$ADMIN->add('editorckeditor', $settings);
unset($settings);

// foreach (core_plugin_manager::instance()->get_plugins_of_type('ckeditor') as $plugin) {
    // /** @var \editor_ckeditor\plugininfo\ckeditor $plugin */
    // $plugin->load_settings($ADMIN, 'editorckeditor', $hassiteconfig);
// }

// CKEditor does not have standard settings page.
$settings = null;
