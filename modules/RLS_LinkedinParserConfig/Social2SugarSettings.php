<?php if (!is_admin($current_user)) { sugar_die("Unauthorized access to administration."); } require_once('LinkedinParserSettingsClass.php');
global $current_user, $app_strings, $app_list_strings; $LinkedinParserSettingsClass = new LinkedinParserSettingsClass($_REQUEST);
$LinkedinParserSettingsClass->saveLinkedinSettings(); $AdminLinkedinSettings = $LinkedinParserSettingsClass->getAdminLinkedinSettings();
require_once(dirname(__FILE__) . '/templates/LinkedinParserSettings.tpl'); 