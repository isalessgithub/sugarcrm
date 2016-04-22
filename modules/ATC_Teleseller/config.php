<?php
global $current_user;
require_once('modules/ATC_SugarKeys/SugarKeys.php');
//Admin Access only
if (!is_admin($current_user))
    sugar_die("Unauthorized access to administration.");

	// check for key
	$admin = new Administration();
	$sugar_smarty = new Sugar_Smarty();
	$admin->retrieveSettings();
	$licKey = '';
	if(array_key_exists('teleseller_licensekey', $admin->settings))
	{
	   $licKey = $admin->settings['teleseller_licensekey'];
	}
	else
	{
		$return_module = $_REQUEST['module'];
		$return_action = $_REQUEST['action'];
		SugarApplication::redirect('index.php?module=ATC_Teleseller&action=license_config&return_module='.$return_module.'&return_action='.$return_action);
	}

    global $app_list_strings, $mod_strings, $sugar_config;
    //Module Title
    echo getClassicModuleTitle("ATC_Teleseller", array("<a href='index.php?module=Administration&action=index'>" . translate('LBL_MODULE_NAME', 'ATC_Teleseller') . "</a>", $mod_strings['LBL_TELESELLER_CONFIG_SETUP_TITLE'], ), false);
    $sugar_smarty = new Sugar_Smarty();
    $sugar_smarty -> assign('MOD', $mod_strings);
    $sugar_smarty -> assign('APP', $app_strings);
    $listviewModuleList =  $app_list_strings['prospect_list_available_modules'];

    $availableButtonList = array('log_call'=>'Log Call',
                         'no_result'=>'No Result',
                         'schedule_call'=>'Schedule Call',
                         'create_note'=>'Create Note'
                         );

    unset($listviewModuleList['Users']);    //As users module not supported

    //if config array doesn't set
    if (!isset($sugar_config['teleseller'])) 
	{
		if (sugar_is_file("modules/ATC_Teleseller/teleseller_config.php"))
		{
			include_once("modules/ATC_Teleseller/teleseller_config.php");
			$c = new Configurator();
			$c->config['teleseller'] = $teleseller_config;
			$c->saveConfig();
		}
	}
	
    $listviewModuleRow = $subpanelModuleRow = '';
    foreach ($listviewModuleList as $moduleKey => $moduleValue)
    {
		if($moduleKey != "ProspectLists")
		{
			$listviewModuleRow .= "<div id='{$moduleKey}_listview_div' name='{$moduleKey}' style='display:none;'>";
			$listviewModuleRow .= ' <table width="100%" cellpadding="0" cellspacing="1" border="0" class="edit view">';
			foreach($availableButtonList as $ButtonKey => $ButtonValue)
			{
				$listViewCheckBoxName = str_replace(" ","_",$moduleKey."_listview_".$ButtonKey);
				switch($ButtonKey)
				{
					case 'log_call':
						$icon_log_call = 'Log Call';
						$icon_html = SugarThemeRegistry::current()->getImage( 'accept_inline',
						'align="absmiddle" alt="' . $icon_log_call . '" border="0"  width="19" height="18"');
						break;
					case 'no_result':
						$icon_log_call = 'Create Note';
						$icon_html = SugarThemeRegistry::current()->getImage( 'decline_inline',
						'align="absmiddle" alt="' . $icon_log_call . '" border="0"  width="19" height="18"');
						break;
				   case 'schedule_call':
						$icon_log_call = 'Schedule Call';
						$icon_html = SugarThemeRegistry::current()->getImage( 'schedule_inline',
						'align="absmiddle" alt="' . $icon_log_call . '" border="0"  width="19" height="18"');
						break;
				   case 'create_note':
						$icon_log_call = 'Log Call';
						$icon_html = SugarThemeRegistry::current()->getImage( 'txt_image_inline',
						'align="absmiddle" alt="' . $icon_log_call . '" border="0"  width="19" height="18"');
						break;
				}

				 $listviewModuleRow .= '
					<tr>
						<td scope="row" width="20%" nowrap>' .$icon_html."&nbsp;". $ButtonValue . '</td>';
					if (isset($sugar_config['teleseller'][$moduleKey]['listview'][$ButtonKey]) && $sugar_config['teleseller'][$moduleKey]['listview'][$ButtonKey] == 'true')
						$listviewModuleRow .= '<td width="80%" style="text-align:left">&nbsp;<input name="' . $listViewCheckBoxName . '" type="checkbox" checked="checked" value="true"></td>';
					else
						$listviewModuleRow .= '<td width="80%" style="text-align:left">&nbsp;<input name="' . $listViewCheckBoxName . '" type="checkbox" value="true"></td>';
					$listviewModuleRow .= '</tr>';
			}
			$listviewModuleRow .= '</table></div>';
		}
		
		$subpanelModuleList = array();
		if($moduleKey == "ProspectLists")
			$subpanelModuleList = array('Prospects'=>'Targets', 'Accounts'=>'Accounts','Contacts'=>'Contacts','Leads'=>'Leads');
		if($moduleKey == "Accounts")
			$subpanelModuleList = array('Contacts'=>'Contacts','Leads'=>'Leads');
		if($moduleKey == "Contacts")
			$subpanelModuleList = array('Leads'=>'Leads');
		if($moduleKey == "Leads" && $moduleKey == "Prospects")
			$subpanelModuleList = array();

		if($moduleKey != "Leads" && $moduleKey != "Prospects")
		{
			$i = 0;
			foreach($subpanelModuleList as $subpanelModuleKey => $subpanelModuleValue)
			{
				if($i == 0)
				{
					$subpanelModuleRow .= "<div id='{$moduleKey}_subpanel_div' name='{$moduleKey}_subpanel_div' style='display:none;'>";
					$subpanelModuleRow .= "<table width='100%' border='0' cellspacing='1' cellpadding='0' class='edit view'>
											<tr>
												<td width='20%' nowrap='' scope='row'>
													{$mod_strings['LBL_SELECT_SUBPANEL']}&nbsp;<img border='0' src='themes/default/images/helpInline.gif' onmouseover=\"return overlib('".$mod_strings['LBL_SELECT_SUBPANEL_HELP'].' '.$moduleValue." module.', FGCLASS, 'olFgClass', CGCLASS, 'olCgClass', BGCLASS, 'olBgClass', TEXTFONTCLASS, 'olFontClass', CAPTIONFONTCLASS, 'olCapFontClass', CLOSEFONTCLASS, 'olCloseFontClass', WIDTH, -1, NOFOLLOW, 'ol_nofollow' );\" onmouseout='return nd();'>
												</td>
												<td width='80%' style='text-align:left'>
												   <select id='{$moduleKey}_subpanel_list' name='{$moduleKey}_subpanel_list' onchange='toggle_value_subpanel();'>
													 ".get_select_options_with_id($subpanelModuleList,'')."
												   </select>
												</td>
											</tr>
										</table>";
				}
				$subpanelModuleRow .= " <div id='{$moduleKey}_{$subpanelModuleKey}_subpanel_div' name='{$moduleKey}_{$subpanelModuleKey}_subpanel_div' style='display:none;'><table width='100%' cellpadding='0' cellspacing='1' border='0' class='edit view'>";
				foreach($availableButtonList as $ButtonKey => $ButtonValue)
				{
					$subpanelCheckBoxName = str_replace(" ","_",$moduleKey."_".$subpanelModuleKey."_subpanel_".$ButtonKey);
					switch($ButtonKey)
					{
						case 'log_call':
							$icon_log_call = 'Log Call';
							$icon_html = SugarThemeRegistry::current()->getImage( 'accept_inline',
							'align="absmiddle" alt="' . $icon_log_call . '" border="0"  width="19" height="18"');
							break;
						case 'no_result':
							$icon_log_call = 'Create Note';
							$icon_html = SugarThemeRegistry::current()->getImage( 'decline_inline',
							'align="absmiddle" alt="' . $icon_log_call . '" border="0"  width="19" height="18"');
							break;
					   case 'schedule_call':
							$icon_log_call = 'Schedule Call';
							$icon_html = SugarThemeRegistry::current()->getImage( 'schedule_inline',
							'align="absmiddle" alt="' . $icon_log_call . '" border="0"  width="19" height="18"');
							break;
					   case 'create_note':
							$icon_log_call = 'Log Call';
							$icon_html = SugarThemeRegistry::current()->getImage( 'txt_image_inline',
							'align="absmiddle" alt="' . $icon_log_call . '" border="0"  width="19" height="18"');
							break;
					}

					 $subpanelModuleRow .= '
						<tr>
							<td scope="row" width="20%" nowrap>' .$icon_html."&nbsp;". $ButtonValue . '</td>';
						if (isset($sugar_config['teleseller'][$moduleKey]['subpanel'][$subpanelModuleKey][$ButtonKey]) && $sugar_config['teleseller'][$moduleKey]['subpanel'][$subpanelModuleKey][$ButtonKey] == 'true')
							$subpanelModuleRow .= '<td width="80%" style="text-align:left">&nbsp;<input name="' . $subpanelCheckBoxName . '" type="checkbox" checked="checked" value="true"></td>';
						else
							$subpanelModuleRow .= '<td width="80%" style="text-align:left">&nbsp;<input name="' . $subpanelCheckBoxName . '" type="checkbox" value="true"></td>';
						$subpanelModuleRow .= '</tr>';
				}
				$subpanelModuleRow .= "</table></div>";
				$i++;
			}
			$subpanelModuleRow .= "</div>";
		}
     }
	 $sugar_smarty -> assign("MODULE_LIST_OPTION", get_select_options_with_id($listviewModuleList,''));
	 $sugar_smarty -> assign("optionListviewDiv", $listviewModuleRow);
	 $sugar_smarty -> assign("optionSubpanelDiv", $subpanelModuleRow);

$javascript=<<<EOQ
        <script language='javascript'>
        toggle_value_listview();//Onload
        function toggle_value_listview(){
			var module = document.getElementById("module_list");
			if (!module) return false;
            var moduleValue = module.options[module.selectedIndex].value;

			var listViewAvailableModule = new Array("ProspectLists","Prospects","Accounts", "Contacts", "Leads");

			for(i=0; i<listViewAvailableModule.length; i++) {

				if(listViewAvailableModule[i] == moduleValue){
					if(listViewAvailableModule[i] != "ProspectLists"){
						if (document.getElementById(listViewAvailableModule[i]+'_listview_div')){
							document.getElementById(listViewAvailableModule[i]+'_listview_div').style.display='block';
						}
					}
					if(listViewAvailableModule[i] != "Leads" && listViewAvailableModule[i] != "Prospects"){
						if (document.getElementById(listViewAvailableModule[i]+'_subpanel_div')){
							document.getElementById(listViewAvailableModule[i]+'_subpanel_div').style.display='block';
						}
					}
				}else{
					if(listViewAvailableModule[i] != "ProspectLists"){
						if (document.getElementById(listViewAvailableModule[i]+'_listview_div')){
							document.getElementById(listViewAvailableModule[i]+'_listview_div').style.display='none';
						}
					}
					if(listViewAvailableModule[i] != "Leads" && listViewAvailableModule[i] != "Prospects"){
						if (document.getElementById(listViewAvailableModule[i]+'_subpanel_div')){
							document.getElementById(listViewAvailableModule[i]+'_subpanel_div').style.display='none';
						}
					}
				}
			}
			toggle_value_subpanel();
       }
	   function toggle_value_subpanel(){
			var module = document.getElementById("module_list");
			if (!module) return false;
			
            var moduleValue = module.options[module.selectedIndex].value;

			if(moduleValue == "ProspectLists")
				var subpanelAvailableModule = new Array("Prospects", "Accounts", "Contacts", "Leads");

			if(moduleValue == "Accounts")
				var subpanelAvailableModule = new Array("Contacts", "Leads");

			if(moduleValue == "Contacts")
				var subpanelAvailableModule = new Array("Leads");

			if(moduleValue != "Leads" && moduleValue != "Prospects"){
				var subpanel = document.getElementById(moduleValue+"_subpanel_list");
				if (!subpanel) return false;
				var subpanelValue = subpanel.options[subpanel.selectedIndex].value;

				for(i=0; i<subpanelAvailableModule.length; i++) {
					if(subpanelAvailableModule[i] == subpanelValue) {
						if (document.getElementById(moduleValue+'_'+subpanelAvailableModule[i]+'_subpanel_div')){
							document.getElementById(moduleValue+'_'+subpanelAvailableModule[i]+'_subpanel_div').style.display='block';
						}
					} else {
						if (document.getElementById(moduleValue+'_'+subpanelAvailableModule[i]+'_subpanel_div')){
							document.getElementById(moduleValue+'_'+subpanelAvailableModule[i]+'_subpanel_div').style.display='none';
						}
					}
				}
			}
       }
        </script>
EOQ;
    $sugar_smarty -> assign("javascript", $javascript);
	$sugar_smarty->display('modules/ATC_Teleseller/tpls/teleseller_config.tpl');

?>
