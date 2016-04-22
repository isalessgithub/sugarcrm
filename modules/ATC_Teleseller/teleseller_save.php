<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

 global $current_user, $sugar_config;
        if(!is_admin($current_user)){
            sugar_die($GLOBALS['app_strings']['ERR_NOT_ADMIN']);
        }
    $button_list = array(
                         'log_call'=>'Log Call',
                         'no_result'=>'No Result',
                         'schedule_call'=>'Schedule Call',
                         'create_note'=>'Create Note'
                         );

	$listViewModuleName = $subpanelModuleName = "";
	$listViewModuleName = $_REQUEST['module_list'];
	$subpanelModuleName = $_REQUEST[$listViewModuleName.'_subpanel_list'];

	$c = new Configurator();

    if(!empty($listViewModuleName) && !empty($listViewModuleName) && $listViewModuleName != "ProspectLists")
    {
         foreach($button_list as $button_key => $button_value)
         {
			$listViewCheckBoxName = str_replace(" ","_",$listViewModuleName."_listview_".$button_key);
			if(array_key_exists($listViewCheckBoxName,$_REQUEST))
			{
                $c->config['teleseller'][$listViewModuleName]['listview'][$button_key]= 'true';
            }
 			else
			{
                $c->config['teleseller'][$listViewModuleName]['listview'][$button_key]= 'false';
			}
         }
    }
	if(isset($subpanelModuleName) && !empty($subpanelModuleName))
    {
		foreach($button_list as $button_key => $button_value)
         {
             $subpanelCheckBoxName = str_replace(" ","_",$listViewModuleName."_".$subpanelModuleName."_subpanel_".$button_key);
			if(array_key_exists($subpanelCheckBoxName,$_REQUEST))
			{
				$c->config['teleseller'][$listViewModuleName]['subpanel'][$subpanelModuleName][$button_key]= 'true';
			}
			else
			{
				$c->config['teleseller'][$listViewModuleName]['subpanel'][$subpanelModuleName][$button_key]= 'false';
			}
         }
	}

	$c->saveConfig();

    SugarApplication::redirect('index.php?module=Administration&action=index');