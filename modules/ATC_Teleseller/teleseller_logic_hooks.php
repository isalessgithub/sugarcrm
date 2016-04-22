<?php

class TelesellerLogicHooks
{
    public function hideProspectListsPanels($bean, $event)
    {
        global $sugar_config;
       //TODO: make sure this is safe.
        $focus = new ProspectList();
        if(isset($_GET['record'])){
            $focus->retrieve_by_string_fields(array('id'=>$_GET['record']));
        }
        $js_files = array(
            'modules/ATC_Teleseller/javascript/ATC_JS/call_logging.js',
            'include/SugarFields/Fields/Datetimecombo/Datetimecombo.js',
            'modules/ATC_Teleseller/javascript/ATC_JS/sugar_grp_overlib.js'
        );
        foreach($js_files as $js){
            echo "<script type='text/javascript' src='$js' ></script>";
        }
 
        $controlArray = array(
                        'Prospects' => 'prospects',
                        'Contacts'  => 'contacts',
                        'Leads'     => 'leads',
                        'Users'     => 'users',
                        'Accounts' => 'accounts',
        );
        echo '<script type="text/javascript">function hideModuleSubpanels(){';
        foreach($controlArray as $upper => $lower){
            echo "if (document.getElementById('subpanel_title_" . $lower ."')){";
            if(strpos($focus->modules_list_c, $upper)){
               echo  " document.getElementById('subpanel_title_" .  $lower  . "').style.display='inline';";
               echo  " document.getElementById('subpanel_" .  $lower . "').style.display='inline';";  
            } else {
               echo  " document.getElementById('subpanel_title_" .  $lower  . "').style.display='none';";  
               echo  " document.getElementById('subpanel_" .  $lower  . "').style.display='none';";  
            }
            echo "}";
 
        }
         echo '} YAHOO.util.Event.onDOMReady(hideModuleSubpanels);</script>';
    }

    function load_javascript()
    {
        $js_files = array(
            'modules/ATC_Teleseller/javascript/ATC_JS/call_logging.js',
            'include/SugarFields/Fields/Datetimecombo/Datetimecombo.js',
            'modules/ATC_Teleseller/javascript/ATC_JS/sugar_grp_overlib.js'
        );
        foreach($js_files as $js){
            echo "<script type='text/javascript' src='$js' />";
        }
    }
}
