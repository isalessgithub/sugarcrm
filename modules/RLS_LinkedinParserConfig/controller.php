<?php require_once('include/MVC/Controller/SugarController.php'); require_once('include/utils.php');
require_once('include/utils/file_utils.php'); require_once('config.php'); require_once('include/MVC/Controller/SugarController.php');
require_once('modules/ModuleBuilder/controller.php'); require_once('modules/ModuleBuilder/parsers/ParserFactory.php');
class RLS_LinkedinParserConfigController extends SugarController { public function action_save() {
 $V3d7030ad = array(); if (array_key_exists('list_order_modules_enable', $_REQUEST)) { $V3d7030ad['enable']
 = $_REQUEST['list_order_modules_enable']; } if (array_key_exists('list_order_modules_disabled', $_REQUEST)) {
 $V3d7030ad['disable'] = $_REQUEST['list_order_modules_disabled']; } $this->bean->list_order_modules_disabled_id
 = serialize($V3d7030ad); $V65390101 = array( 'accounts_duplicate', 'contacts_duplicate', 'leads_duplicate',
 'prospects_duplicate', 'rls_candidates_duplicate', ); foreach ($V65390101 as $V06e3d36f) { $V0668a287 = array();
if (array_key_exists('list_' . $V06e3d36f . '_enable', $_REQUEST)) { $V0668a287['enable'] = $_REQUEST['list_' . $V06e3d36f
 . '_enable']; } if (array_key_exists('list_' . $V06e3d36f . '_disabled', $_REQUEST)) { $V0668a287['disable'] = $_REQUEST['list_' . $V06e3d36f
 . '_disabled']; } $this->bean->$V06e3d36f = serialize($V0668a287); } $this->bean->list_order_modules_disabled_id
 = serialize($V3d7030ad); $this->bean->save(); } public function action_editview() { $this->view = 'edit';
} public function action_addLinkedinFields() { $this->set_fields(); } public function set_fields()
 { global $sugar_version, $db, $dictionary, $current_user, $sugar_flavor, $sugar_config; $V128a45e9 = $sugar_flavor;
if ($sugar_flavor == 'ENT') { $V128a45e9 = 'PRO'; } $V9ed1a2d3 = array( 'rls_industry_c' => array(
 'name' => 'rls_industry_c', 'label' => 'LBL_RLS_INDUSTRY', ), 'rls_linkedin_url_c' => array( 'name' => 'rls_linkedin_url_c',
 'label' => 'LBL_LINKEDIN_URL', ), 'rls_description2_c' => array( 'name' => 'rls_description2_c',
 'label' => 'LBL_DESCRIPTION2', ), 'rls_description3_c' => array( 'name' => 'rls_description3_c',
 'label' => 'LBL_DESCRIPTION3', ), 'rls_current_workplace_c' => array( 'name' => 'rls_current_workplace_c',
 'label' => 'LBL_CURRENT_WORKPLACE', ), 'rls_last_position_c' => array( 'name' => 'rls_last_position_c',
 'label' => 'LBL_LAST_POSITION', ), ); if ($V128a45e9 == 'CE' && array_key_exists('suitecrm_version', $sugar_config)
 ) { $V9ed1a2d3['photo'] = array( 'name' => 'photo', 'label' => 'LBL_PHOTO', ); } $V3c715346 = array(
 'rls_linkedine_url_c' => array( 'name' => 'rls_linkedine_url_c', 'label' => 'LBL_LINKEDINE_URL',
 ), ); $V09c34c68 = array( 'rls_industry_c' => array( 'name' => 'rls_industry_c', 'label' => 'LBL_RLS_INDUSTRY',
 ), 'rls_linkedin_url_c' => array( 'name' => 'rls_linkedin_url_c', 'label' => 'LBL_LINKEDIN_URL',
 ), 'rls_description2_c' => array( 'name' => 'rls_description2_c', 'label' => 'LBL_DESCRIPTION2',
 ), 'rls_description3_c' => array( 'name' => 'rls_description3_c', 'label' => 'LBL_DESCRIPTION3',
 ), 'rls_current_workplace_c' => array( 'name' => 'rls_current_workplace_c', 'label' => 'LBL_CURRENT_WORKPLACE',
 ), 'rls_last_position_c' => array( 'name' => 'rls_last_position_c', 'label' => 'LBL_LAST_POSITION',
 ), ); $V37cf8c1b = array(); foreach ($V9ed1a2d3 as $V3c6e0b8a => $V06e3d36f) { $V37cf8c1b[$V3c6e0b8a] = $V06e3d36f;
} $Vb1aa3935 = array(); foreach ($V3c715346 as $V3c6e0b8a => $V06e3d36f) { $Vb1aa3935[$V3c6e0b8a] = $V06e3d36f;
} $V450ecc22 = array(); foreach ($V09c34c68 as $V3c6e0b8a => $V06e3d36f) { $V450ecc22[$V3c6e0b8a] = $V06e3d36f;
} if (preg_match('/^6.*/', $sugar_version)) { foreach (array('Contacts', 'Leads', 'Prospects') as $module) {
 foreach (array('detailview', 'editview') as $view) { $this->addField2View($module, $V37cf8c1b, $view);
} } foreach (array('detailview', 'editview') as $view) { $this->addField2View('Notes', $Vb1aa3935, $view);
} foreach (array('detailview', 'editview') as $view) { $this->addField2View('Accounts', $V450ecc22, $view);
} } else { foreach (array('Contacts', 'Leads', 'Prospects') as $module) { $this->addField2View($module, $V37cf8c1b, 'recordview');
} $this->addField2View('Notes', $Vb1aa3935, 'recordview'); $this->addField2View('Accounts', $V450ecc22, 'recordview');
} $Vf7cc8e48 = array( 'module' => 'RLS_LinkedinParserConfig', 'action' => 'license' ); SugarApplication::redirect('index.php?'
 . http_build_query($Vf7cc8e48)); } public function addField2View($module, $V37cf8c1b, $view) { echo "<br /><b> Updating module $module view $view with custom fields.</b><br />";
$V3643b863 = ParserFactory::getParser($view, $module); if (!$V3643b863) { $GLOBALS['log']->fatal("No parser found for $module | $view");
} $Vf1965a85 = $V1afd3281 = 0; foreach ($V37cf8c1b as $V06e3d36f => $Vd7430912) { if (($V06e3d36f == 'linkedin_url_c')
 && (($view == 'recordview') || ($view == 'detailview')) ) { $V7f021a14 = $V3643b863->_viewdefs['panels'];
end($V7f021a14); reset($V7f021a14); $Vf5fb58d9 = key($V7f021a14); end($V3643b863->_viewdefs['panels'][$Vf5fb58d9]);
$Vcbb7df7a = key($V3643b863->_viewdefs['panels'][$Vf5fb58d9]); $Vcbb7df7a = $Vcbb7df7a + 1; $V3643b863->_viewdefs['panels'][$Vf5fb58d9][$Vcbb7df7a][0]
 = $Vd7430912; } else { $V3643b863->_viewdefs['panels']['LBL_LINKEDIN_CUSTOM_FIELDS_GROUP'][$Vf1965a85][$V1afd3281]
 = $Vd7430912; echo("<strong>$V06e3d36f</strong> field added to $module $view View.<br />"); $V1afd3281 = ($V1afd3281 > 0) ? 0 : 1;
if ($V1afd3281 === 0) { $Vf1965a85++; } } } $V3643b863->handleSave(false); } public function action_addLinkedinUrl()
 { global $sugar_version; if (preg_match('/^6.*/', $sugar_version)) { $view = 'detailview'; } else {
 $view = 'recordview'; } $Vd159ca37 = array('Accounts', 'Contacts', 'Leads', 'Prospects'); foreach ($Vd159ca37 as $module) {
 $V3643b863 = ParserFactory::getParser($view, $module); $Vd7430912 = array( 'name' => 'rls_linkedin_url_c',
 'label' => 'LBL_LINKEDIN_URL', ); $V7f021a14 = $V3643b863->_viewdefs['panels']; end($V7f021a14); reset($V7f021a14);
$Vf5fb58d9 = key($V7f021a14); end($V3643b863->_viewdefs['panels'][$Vf5fb58d9]); $Vcbb7df7a = key($V3643b863->_viewdefs['panels'][$Vf5fb58d9]);
$Vcbb7df7a = $Vcbb7df7a + 1; $V3643b863->_viewdefs['panels'][$Vf5fb58d9][$Vcbb7df7a][0] = $Vd7430912;
$V3643b863->handleSave(false); } $Vf7cc8e48 = array( 'module' => 'RLS_LinkedinParserConfig', 'action' => 'license'
 ); SugarApplication::redirect('index.php?' . http_build_query($Vf7cc8e48)); } } ?> 