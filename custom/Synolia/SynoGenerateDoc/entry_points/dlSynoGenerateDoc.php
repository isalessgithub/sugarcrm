<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

if (!empty($_REQUEST['module'])
    && !empty($_REQUEST['record'])
    && !empty($_REQUEST['syno_generate_doc_id'])
    && !empty($_REQUEST['entryPoint']) && $_REQUEST['entryPoint'] == 'dlSynoGenerateDoc') {
    require_once 'custom/Synolia/SynoGenerateDoc/SynoGenerateDoc.php';

    $returnType = SynoGenerateDoc::RETURN_DOWNLOAD;

    if (isset($_REQUEST['email_action']) && $_REQUEST['email_action'] == "EmailLayout") {
        $returnType = SynoGenerateDoc::RETURN_EMAIL;
    }

    SynoGenerateDoc::generateDoc($_REQUEST['syno_generate_doc_id'], $_REQUEST['module'], $_REQUEST['record'], $returnType);

    sugar_cleanup(true);
    exit;
}

$GLOBALS['log']->fatal(__FILE__.' Unauthorise access');
SugarApplication::redirect('index.php');
