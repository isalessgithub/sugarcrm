<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$html_form = "";
if (!empty($_REQUEST['base_module']) && !empty($_REQUEST['base_id'])) {
    $db = DBManagerFactory::getInstance();

    $base_module = $_REQUEST['base_module'];
    $base_module = $db->quote(strtolower($base_module));

    $document = BeanFactory::getBean('Documents');
    $listing_result = $document->get_list('document_name ASC', ' syno_doc_template_c=\'syno_generate_doc_'.$base_module.'\' AND documents.status_id NOT IN (\'Draft\',\'Expired\')', 0, -99, -99);
    if ($listing_result['row_count'] > 0) {
        $html_pdf_template = '';
        $html_pdf_template .= '<select name="syno_generate_doc_id">';
        foreach ($listing_result['list'] as $list_item) {
            $html_pdf_template .= '<option value="'.$list_item->id.'">'.$list_item->document_name.'</option>';
        }
        $html_pdf_template .= '</select>';

        $html_form .= '<form action="index.php" method="POST" name="GenerateDoc" id="formSynoGenerateDoc">';
        $html_form .= '<div id="synogeneratedocInnerCont">
                        <table width="100%" border="1" cellspacing="0" cellpadding="0" class="edit view" style="width:300px;">
                        <tr>
                        <td align="right">
                        <span style="float:left">'.translate('SYNO_GENERATE_DOC_BUTTON').'</span>
                        <input type="button" class="button" value="X" onclick="document.getElementById(\'synogeneratedocCont\').style.display=\'none\';">
                        </td></tr>
                        <tr><td valign="top">';
        $html_form .= '<input type="hidden" name="module" value="'.$_REQUEST['base_module'].'">';
        $html_form .= '<input type="hidden" name="record" value="'.$_REQUEST['base_id'].'">';
        $html_form .= '<input type="hidden" name="entryPoint" value="dlSynoGenerateDoc">';
        $html_form .= '<input type="hidden" name="email_action" id="syno_email_action" value="">';
        $html_form .= $html_pdf_template;
        $html_form .= '</td></tr>';
        $html_form .= '<tr><td valign="top">';
        $html_form .= '&nbsp;</td></tr>';
        $html_form .= '<tr><td valign="top" style="text-align:right;">';
        $html_form .= '<input title="" class="button" type="submit" name="button" onclick="document.getElementById(\'syno_email_action\').value=\'\';" value="'.translate('SYNO_GENERATE_DOC_BUTTON').'">';
        $html_form .= '</td></tr>';

        global $current_user, $sugar_config;
        $userPref = $current_user->getPreference('email_link_type');
        $defaultPref = $sugar_config['email_default_client'];
        if ($userPref != '') {
            $client = $userPref;
        } else {
            $client = $defaultPref;
        }
        if ($client == 'sugar') {
            $html_form .= '<tr><td valign="top" style="text-align:right;">';
            $html_form .= '<input title="" class="button" type="submit" name="button" value="'.translate('SYNO_GENERATE_DOC_BUTTON_EMAIL').'" onclick="document.getElementById(\'syno_email_action\').value=\'EmailLayout\';">';
            $html_form .= '</td></tr>';
        }

        $html_form .= '</div></form>';

        echo $html_form;
        exit;
    }
}

$html_form .= '<form action="index.php" method="POST" name="GenerateDoc" id="formSynoGenerateDoc">';
$html_form .= '<div id="synogeneratedocInnerCont">
                        <table width="100%" border="1" cellspacing="0" cellpadding="0" class="edit view" style="width:300px;">
                        <tr>
                        <td align="right">
                        <span style="float:left">'.translate('SYNO_GENERATE_DOC_BUTTON').'</span>
                        <input type="button" class="button" value="X" onclick="document.getElementById(\'synogeneratedocCont\').style.display=\'none\';">
                        </td></tr>
                        <tr><td>&nbsp;</td></tr>
                        <td align="right">
                        <span style="float:left">'.translate('SYNO_GENERATE_DOC_NO_TEMPLATE').'</span>
                        </td></tr>
                        </table></div>';

echo $html_form;
exit;
