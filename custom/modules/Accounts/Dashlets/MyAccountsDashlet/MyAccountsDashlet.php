<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/master-subscription-agreement
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2012 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/





require_once('include/Dashlets/DashletGeneric.php');


class MyAccountsDashlet extends DashletGeneric {
    function MyAccountsDashlet($id, $def = null) {
		global $current_user, $app_strings;
		require('custom/modules/Accounts/Dashlets/MyAccountsDashlet/MyAccountsDashlet.data.php');

        parent::__construct($id, $def);

        if(empty($def['title'])) $this->title = translate('LBL_HOMEPAGE_TITLE', 'Accounts');

        $this->searchFields = $dashletData['MyAccountsDashlet']['searchFields'];
        $this->columns = $dashletData['MyAccountsDashlet']['columns'];

        $this->seedBean = new Account();
    }

    /**
     * Overrides the generic process to include custom logic for email addresses,
     * since they are no longer stored in  a list view friendly manner.
     * (A record may have an undetermined number of email addresses).
     *
     * @param array $lvsParams
     */

	function process($lvsParams = array()) {
		global $sugar_config;
    	if (isset($this->displayColumns) && array_search('email1', $this->displayColumns) !== false) {
	    	$lvsParams['custom_select'] = ', email_address as email1';
	    	$lvsParams['custom_from'] = ' LEFT JOIN email_addr_bean_rel eabr ON eabr.deleted = 0 AND bean_module = \'Accounts\''
	    							  . ' AND eabr.bean_id = accounts.id AND primary_address = 1'
	    							  . ' LEFT JOIN email_addresses ea ON ea.deleted = 0 AND ea.id = eabr.email_address_id';
    	}

        if (isset($this->displayColumns) && array_search('parent_name', $this->displayColumns) !== false) {
	    	$lvsParams['custom_select'] = empty($lvsParams['custom_select']) ? ', a1.name as parent_name ' : $lvsParams['custom_select'] . ', a1.name as parent_name ';
	    	$lvsParams['custom_from'] = empty($lvsParams['custom_from']) ? ' LEFT JOIN accounts a1 on a1.id = accounts.parent_id' : $lvsParams['custom_from'] . ' LEFT JOIN accounts a1 on a1.id = accounts.parent_id';
    	}

    	parent::process($lvsParams);

		$current_module='Accounts';
		$parent_module='';
		for ($i=0;$i<sizeof($this->lvs->data['data']);$i++)
        {
			$record=$this->lvs->data['data'][$i]['ID'];

			$retStr = "<span style='white-space: nowrap'>"; //Encapsulate in span for IE7 to correctly handle nowrap

				if(isset($sugar_config['teleseller'][$current_module]['listview']['log_call']) && $sugar_config['teleseller'][$current_module]['listview']['log_call']=='true')
				{
					$icon_log_call = 'Log Call';
					$icon_log_call_html = SugarThemeRegistry::current()->getImage( 'accept_inline',
						'align="absmiddle" alt="' . $icon_log_call . '" border="0"');
					$retStr .= "<div id='$record'><a href=\"javascript:LogCall('$current_module', '$record');\""
								. ' class="listViewTdToolsS1" title="' . $icon_log_call . '"'
								. " style='vertical-align:top'>$icon_log_call_html</a>";
				}

				if(isset($sugar_config['teleseller'][$current_module]['listview']['no_result']) && $sugar_config['teleseller'][$current_module]['listview']['no_result']=='true')
				{
					$icon_no_result_call = 'No Result';
					$icon_no_result_call_html = SugarThemeRegistry::current()->getImage( 'decline_inline',
						'align="absmiddle" alt="' . $icon_no_result_call . '" border="0"');
					$retStr .= "&nbsp;<a href=\"javascript:NoResultCall('$current_module', '$record');\""
								. ' class="listViewTdToolsS1" title="' . $icon_no_result_call . '"'
								. " style='vertical-align:top'>$icon_no_result_call_html</a>";
				}

				if(isset($sugar_config['teleseller'][$current_module]['listview']['schedule_call']) && $sugar_config['teleseller'][$current_module]['listview']['schedule_call']=='true')
				{
					$icon_schedule_call = 'Schedule Call';
					$icon_schedule_call_html = SugarThemeRegistry::current()->getImage( 'schedule_inline',
						'align="absmiddle" alt="' . $icon_schedule_call . '" border="0"');
					$retStr .= "&nbsp;<a href=\"javascript:ScheduleCall('$current_module', '$record');\""
								. ' class="listViewTdToolsS1" title="' . $icon_schedule_call . '"'
								. " style='vertical-align:top'>$icon_schedule_call_html</a>";
				}

				if(isset($sugar_config['teleseller'][$current_module]['listview']['create_note']) && $sugar_config['teleseller'][$current_module]['listview']['create_note']=='true')
				{
					$icon_create_note = 'Create Note';
					$icon_create_note_html = SugarThemeRegistry::current()->getImage( 'txt_image_inline',
						'align="absmiddle" alt="' . $icon_create_note . '" border="0"');
					$retStr .= "&nbsp;<a href=\"javascript:CreateNote('$current_module', '$record');\""
						. ' class="listViewTdToolsS1" title="' . $icon_create_note . '"'
						. " style='vertical-align:top'>$icon_create_note_html</a></div>";
				}
                $retStr .=  "</span>"; //End span for IE7
				$this->lvs->data['data'][$i]['QUICK_DSP_BTNS']=$retStr;
		}
		echo "<script type='text/javascript' src='modules/ATC_Teleseller/javascript/ATC_JS/call_logging.js'></script>";
    }
}

?>
