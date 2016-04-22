<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/generic/SugarWidgets/SugarWidgetField.php');

class SugarWidgetSubPanelInfoButton extends SugarWidgetField
{
    function displayHeaderCell(&$layout_def)
    {
        return '';
    }

    function displayList(&$layout_def)
    {
        
        global $app_strings;
        
        
        $parent_record_id = $_REQUEST['record'];
        $parent_module = $_REQUEST['module'];

        //$action = 'DeleteRelationship';
        $record = $layout_def['fields']['ID'];
        $current_module=$layout_def['module'];
        
        $icon_info="Info";
        $icon_info_html = SugarThemeRegistry::current()->getImage( 'info_inline',
            'align="absmiddle" alt="' . $icon_info . '" border="0"');        


        //$icon_log_call = $app_strings['LNK_REMOVE'];
        /*$icon_log_call = 'Log Call';
        $icon_log_call_html = SugarThemeRegistry::current()->getImage( 'accept_inline',
            'align="absmiddle" alt="' . $icon_log_call . '" border="0"');
            
        $icon_no_result_call = 'No Result';
        $icon_no_result_call_html = SugarThemeRegistry::current()->getImage( 'decline_inline',
            'align="absmiddle" alt="' . $icon_log_call . '" border="0"');*/            

 
            
        //based on listview since that lets you select records
            $retStr = "<span style=\"position: relative;\" onmouseout=\"return SUGAR.util.clearAdditionalDetailsCall()\" onmouseover=\"lvg_dtails2('$current_module','$record')\" id=\"adspan_".$record."\">
            $icon_info_html</span>";
            
            //$retStr .= "<div id=\"overDiv\" style=\"position: absolute; visibility: hidden; z-index: 1000;\"></div>";
        
            /*$retStr .= "<a href=\"javascript:LogCall('$current_module', '$record');\"" 
            . ' class="listViewTdToolsS1" title="' . $icon_log_call . '"'
            . ">$icon_log_call_html</a>";
            
            $retStr .= "&nbsp;<a href=\"javascript:NoResultCall('$current_module', '$record');\"" 
            . ' class="listViewTdToolsS1" title="' . $icon_no_result_call . '"'
            . ">$icon_no_result_call_html</a>";*/
            
            
        return $retStr;
            

    }
}
?>