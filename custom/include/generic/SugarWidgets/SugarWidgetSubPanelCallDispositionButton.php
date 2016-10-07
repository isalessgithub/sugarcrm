<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/generic/SugarWidgets/SugarWidgetSubPanelTopButton.php');

class SugarWidgetSubPanelCallDispositionButton extends SugarWidgetSubPanelTopButton
{
    function display($defines, $additionalFormFields = null)
    {
        global $app_strings;
        global $currentModule;

        $parent_record_id = $_REQUEST['record'];
        $parent_module = $_REQUEST['module'];   
           
$js = <<<JSCRIPT
        
        <script type="text/javascript" src="modules/ATC_Teleseller/javascript/ATC_JS/dialogHandler.js"></script> 
        <script language="javascript">
          
        var callback = {
            success: function (r) {
                try{
                    
                    SUGAR.util.evalScript(r.responseText);
                    str = r.responseText;
                    
                    strobj = JSON.parse(str);
                    msg = strobj.message;
                    
                    var s = str.indexOf("<msg>");
                    var e = str.indexOf("</msg>"); 
                       
                    closeDialog();
                    showSubPanel('history',null,true);
                } 
                catch(err)
                {

                    alert("Sorry, there was an error processing your request");
                }
            }
        }
        
        function logVM()
        {
            openDialog('Disposition','Logging Call'); 
            var parent_record = "{$parent_record_id}";
            var module = "{$parent_module}";
            postData = '&module=' + module + '&parent_id=' + parent_record + '&disposition=Left Voicemail';
            YAHOO.util.Connect.asyncRequest('POST', 'index.php?entryPoint=createCall', callback, postData);    
            //showSubPanel('history','/teleseller/index.php?action=DetailView&amp;module=Leads&amp;record=1fc6d168-bdf2-2e98-3cd8-4d2e18b2b162&amp;return_module=Leads&amp;return_action=DetailView&amp;Leads_history_CELL_offset=10&amp;Leads_history_CELL_ORDER_BY=&amp;sort_order=desc&amp;to_pdf=true&amp;action=SubPanelViewer&amp;subpanel=history&amp;layout_def_key=Leads',true);;
            
        }
        
        
          
        </script>
            
JSCRIPT;

        echo $js;
        
    
        $button = '<input type="button" onclick="logVM();" name="left_vm" id="left_vm" value="Left Voicemail"/>';
        return $button;
    }

}
?>