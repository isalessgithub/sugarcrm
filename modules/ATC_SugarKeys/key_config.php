<?php

require_once('modules/ATC_SugarKeys/SugarKeys.php');
// require_once('modules/ATC_SugarKeys/KeyStrategy.php');

$sugar_smarty = new Sugar_Smarty();
$sugar_smarty->assign('mod', $mod_strings);
$sugar_smarty->assign('app', $app_strings);
$sugar_smarty->assign('action', $module_config_action);
$sugar_smarty->assign('module', $module_config_name);

$sugar_smarty->assign('has_return_action', "false");
if (isset($_REQUEST['return_action']) && !empty($_REQUEST['return_action'])) {
    $sugar_smarty->assign('return_action', $_REQUEST['return_action']);
    $sugar_smarty->assign('has_return_action', "true");
}

$sugar_smarty->assign('has_return_module', "false");
if (isset($_REQUEST['return_module']) && !empty($_REQUEST['return_module'])) {
    $sugar_smarty->assign('return_module', $_REQUEST['return_module']);
    $sugar_smarty->assign('has_return_module', "true");
}

$sugar_smarty->assign('has_return_record', "false");
if (isset($_REQUEST['record']) && !empty($_REQUEST['record'])) {
    $sugar_smarty->assign('return_record', $_REQUEST['record']);
    $sugar_smarty->assign('has_return_record', "true");
}

// $sugar_smarty->assign('strategies', KeyStrategy::get_available_strategies());
$admin = new Administration();
$admin->retrieveSettings();
if (isset($admin->settings[$module_config_shortname . '_licensekey'])) {
    $sugar_smarty->assign('licKey', $admin->settings[$module_config_shortname . '_licensekey']);
} else {
    $sugar_smarty->assign('licKey', '');
}

// if(isset($admin->settings['sugarkey_strategy'])){
//     $sugar_smarty->assign('strat', $admin->settings['sugarkey_strategy']);
// }
// else{
//     $sugar_smarty->assign('strat', '');
// }
$license_check = new SugarKeys($sugar_smarty, $module_config_shortname);
$license_check->set_sugar_template('modules/ATC_SugarKeys/SugarKeys.tpl');
$license_check->render();