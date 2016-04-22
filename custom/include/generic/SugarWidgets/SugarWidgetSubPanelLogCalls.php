<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/generic/SugarWidgets/SugarWidgetField.php');

class SugarWidgetSubPanelLogCalls extends SugarWidgetField
{
	function displayHeaderCell(&$layout_def)
	{
		return 'Log Calls';
	}

	function displayList(&$layout_def)
	{
		global $app_strings, $sugar_config;
		$parent_record_id = $_REQUEST['record'];
		$parent_module = $_REQUEST['module'];

		//$action = 'DeleteRelationship';
		$record = $layout_def['fields']['ID'];
		$current_module=$layout_def['module'];
		
        $retStr ="<span style='white-space: nowrap'>"; //Encapsulate in span for IE7 to correctly handle nowrap
        if(isset($sugar_config['teleseller'][$parent_module]['subpanel'][$current_module]['log_call']) && $sugar_config['teleseller'][$parent_module]['subpanel'][$current_module]['log_call']=='true')
        {
            $icon_log_call = 'Log Call';
            $icon_log_call_html = SugarThemeRegistry::current()->getImage( 'accept_inline',
                'align="absmiddle" alt="' . $icon_log_call . '" border="0"');
			
			$iconLogCall = "<a href=\"javascript:LogCall('$current_module', '$record');\""
						. ' class="listViewTdToolsS1" title="' . $icon_log_call . '"'
						. " style='vertical-align:top'>$icon_log_call_html</a>";
			
            $retStr .= $iconLogCall;
        }
		
        if(isset($sugar_config['teleseller'][$parent_module]['subpanel'][$current_module]['no_result']) && $sugar_config['teleseller'][$parent_module]['subpanel'][$current_module]['no_result']=='true')
        {    
            $icon_no_result_call = 'No Result';
            $icon_no_result_call_html = SugarThemeRegistry::current()->getImage( 'decline_inline',
                'align="absmiddle" alt="' . $icon_no_result_call . '" border="0"');
			
            $iconNoResult = "<a href=\"javascript:NoResultCall('$current_module', '$record');\""
							. ' class="listViewTdToolsS1" title="' . $icon_no_result_call . '"'
							. " style='vertical-align:top'>$icon_no_result_call_html</a>";

            $retStr .= !empty($retStr)?"&nbsp;".$iconNoResult:$iconNoResult;
        }  
        if(isset($sugar_config['teleseller'][$parent_module]['subpanel'][$current_module]['schedule_call']) && $sugar_config['teleseller'][$parent_module]['subpanel'][$current_module]['schedule_call']=='true')
        {     
            $icon_schedule_call = 'Schedule Call';
            $icon_schedule_call_html = SugarThemeRegistry::current()->getImage( 'schedule_inline',
                'align="absmiddle" alt="' . $icon_schedule_call . '" border="0"');

			$iconScheduleCall = "<a href=\"javascript:ScheduleCall('$current_module', '$record');\""
								. ' class="listViewTdToolsS1" title="' . $icon_schedule_call . '"'
								. " style='vertical-align:top'>$icon_schedule_call_html</a>";
			
            $retStr .= (!empty($retStr))?"&nbsp;".$iconScheduleCall:$iconScheduleCall;
        }   
        if(isset($sugar_config['teleseller'][$parent_module]['subpanel'][$current_module]['create_note']) && $sugar_config['teleseller'][$parent_module]['subpanel'][$current_module]['create_note']=='true')
        {     
            $icon_create_note = 'Create Note';
            $icon_create_note_html = SugarThemeRegistry::current()->getImage( 'txt_image_inline',
                'align="absmiddle" alt="' . $icon_create_note . '" border="0"');
			
			$iconCreateNote = "<a href=\"javascript:CreateNote('$current_module', '$record');\""
								. ' class="listViewTdToolsS1" title="' . $icon_create_note . '"'
								. " style='vertical-align:top'>$icon_create_note_html</a>";

            $retStr .= (!empty($retStr))?"&nbsp;".$iconCreateNote:$iconCreateNote;
        }
		$retStr .=  "</span>"; //End span for IE7
        return $retStr;
	}
}
?>