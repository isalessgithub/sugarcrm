<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

if (!empty($_REQUEST['module'])
    && !empty($_REQUEST['entryPoint'])
    && $_REQUEST['entryPoint'] == 'getLinksForModule') {
    global $app_list_strings;
    require_once 'custom/Synolia/SynoGenerateDoc/SynoGenerateDocUtils.php';

    $return_links = array();
    $module = ucfirst(str_replace("syno_generate_doc_", "", $_REQUEST['module']));

    $moduleList = $app_list_strings["moduleList"];
    $valid_module = false;
    foreach ($app_list_strings["moduleList"] as $key => $value) {
        if (strtolower($key) == strtolower($module)) {
            $module = $key;
            $valid_module = true;
            break;
        }
    }

    if (!empty($module) &&  $module != "Home" &&  $valid_module == true) {
        $return_links = SynoGenerateDocUtils::getLinksForModule($module);
    }

    $json = getJSONobj();
    $return = $json->encode($return_links);

    ob_end_clean();
    ob_start();
    echo $return;
    $GLOBALS['log']->info('------------  '.__CLASS__.'::'.__FUNCTION__.' END ------------');
    sugar_cleanup(true);
    exit();
}

$GLOBALS['log']->fatal(__FILE__.' Unauthorise access');
SugarApplication::redirect('index.php');
