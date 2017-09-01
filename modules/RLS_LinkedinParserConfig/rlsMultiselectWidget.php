<?php if (!defined('sugarEntry') || !sugarEntry) { die ('Not A Valid Entry Point'); } require_once('LinkedinParserSettingsClass.php');
 function getListOrderModulesDisabledHTML( $V1818d506, $V06e3d36f, $V2063c160, $view, $Vc86b44d4 = ''
) { global $app_list_strings; $LinkedinParserSettingsClass = new LinkedinParserSettingsClass($_REQUEST);
$settings = $LinkedinParserSettingsClass->getUserLinkedinSettings($V1818d506); $V2063c160 = $settings['modules'];
switch ($view) { case 'EditView': $Vfc35fdc7 = $LinkedinParserSettingsClass->getHtmlForMultiselectEnableModules($V2063c160);
break; default: $Vfc35fdc7 = $LinkedinParserSettingsClass->getHtmlForMultiselectEnableModulesDetail($V2063c160);
} return $Vfc35fdc7; } function getListDuplicateHTML($V1818d506, $V06e3d36f, $V2063c160, $view, $Vc86b44d4 = '')
{ global $app_list_strings; $V65390101 = array( 'accounts_duplicate' => 'Accounts', 'contacts_duplicate' => 'Contacts',
 'leads_duplicate' => 'Leads', 'prospects_duplicate' => 'Prospects', 'rls_candidates_duplicate' => 'rls_Candidates',
 ); $LinkedinParserSettingsClass = new LinkedinParserSettingsClass($_REQUEST); $V2063c160 = unserialize(htmlspecialchars_decode($V2063c160));
switch ($view) { case 'EditView': $Vfc35fdc7 = $LinkedinParserSettingsClass->getListDuplicateHTML($V2063c160,
 $V06e3d36f, $V65390101[$V06e3d36f]); break; default: $Vfc35fdc7 = $LinkedinParserSettingsClass->getListDuplicateHTMLDetail($V2063c160,
 $V06e3d36f, $V65390101[$V06e3d36f]); } return $Vfc35fdc7; } function Fbe2abffc() { global $app_list_strings;
$V87e68791 = array( 'job_status', 'job_status_list', ); $Vea228c39 = array_intersect_key($app_list_strings, array_flip($V87e68791));
return (!empty($Vea228c39)) ? reset($Vea228c39) : array(); } function getDefaultModuleSearchHTML( $V1818d506,
 $V06e3d36f, $V2063c160, $view, $Vc86b44d4 = '' ) { global $app_list_strings; $LinkedinParserSettingsClass = new LinkedinParserSettingsClass($_REQUEST);
$settings = $LinkedinParserSettingsClass->getUserLinkedinSettings($V1818d506); $V2063c160 = $settings['default_module_search'];
switch ($view) { case 'EditView': $Vfc35fdc7 = $LinkedinParserSettingsClass->getDefaultModuleSearchHTML($V2063c160);
break; default: $Vfc35fdc7 = $LinkedinParserSettingsClass->getDefaultModuleSearchHTMLDetail($V2063c160);
} return $Vfc35fdc7; } 