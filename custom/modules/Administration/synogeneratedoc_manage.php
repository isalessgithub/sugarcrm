<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once "custom/Synolia/SynoGenerateDoc/Helper/ConfigManager.php";

global    $current_user, $beanList, $sugar_config, $current_language,
        $mod_strings, $beanList, $timedate, $app_strings, $app_list_strings, $moduleList;

if (!is_admin($current_user)) {
    sugar_die("Unauthorized access to administration.");
}

$sugar_smarty   = new Sugar_Smarty();

$enabled = array();
$disabled = array();
$banned = array("Home", "Calendar", "Reports", "Emails", "Forecasts", "KBDocuments");

if (isset($_REQUEST['process']) && $_REQUEST['process'] == 'true') {
    require_once 'modules/Configurator/Configurator.php';
    $enabled_mods = json_decode(html_entity_decode($_REQUEST['enabled_modules'], ENT_QUOTES));

    $configMods = array();
    if (!empty($enabled_mods)) {
        $configMods = array_diff($enabled_mods, $banned);
    }

    Synolia_SynoGenerateDoc_Helper_Helper_ConfigManager::setBddConfig('SynoGenerateDoc', "synogeneratedoc_installed_mods", $configMods);

    require 'custom/Synolia/SynoGenerateDoc/SynoGenerateDocUtils.php';
    SynoGenerateDocUtils::setModulesButton($enabled_mods, $banned);
}

//get the nb of templates available for each module
$db = $GLOBALS['db'];
$query = '  SELECT count(documents.id) as countDoc, documents_cstm.syno_doc_template_c
            FROM documents INNER JOIN documents_cstm ON documents.id = documents_cstm.id_c
            WHERE documents.deleted = 0 GROUP BY documents_cstm.syno_doc_template_c';
$res = $db->query($query);

$countDoc = array();
while ($row = $db->fetchByAssoc($res)) {
    $countDoc[ucfirst(str_replace('syno_generate_doc_', '', $row['syno_doc_template_c']))] = $row['countDoc'];
}

$configMods = Synolia_SynoGenerateDoc_Helper_Helper_ConfigManager::getBddConfig('SynoGenerateDoc', "synogeneratedoc_installed_mods");

if (!empty($configMods)) {
    foreach ($configMods as $module) {
        $enabled[] = array(
            'module' => $module,
            'label' => translate($module),
            'tplCount' => (isset($countDoc[$module]) ? $countDoc[$module] : 0),
        );
    }
}

if (empty($configMods)) {
    $configMods = array();
}

foreach ($moduleList as $module) {
    if (!in_array($module, $banned) && !in_array($module, $configMods)) {
        $disabled[] = array(
            'module' => $module,
            'label' => translate($module),
            'tplCount' => (isset($countDoc[$module]) ? $countDoc[$module] : 0),
        );
    }
}

$sugar_smarty->assign('enabled_mods', json_encode($enabled));
$sugar_smarty->assign('disabled_mods', json_encode($disabled));

$sugar_smarty->assign('configTitle', get_module_title('', $mod_strings['LBL_SYNOGENERATEDOC_TITLE'], false));
$sugar_smarty->assign('MOD', $mod_strings);
$sugar_smarty->assign('APP', $app_strings);
$sugar_smarty->assign('APP_LIST', $app_list_strings);
$sugar_smarty->assign('CONFIG', $sugar_config);

$tpl = 'custom/modules/Administration/synogeneratedoc_manage.tpl';
$sugar_smarty->display($tpl);
