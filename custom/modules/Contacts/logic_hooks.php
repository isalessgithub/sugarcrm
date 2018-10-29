<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
//$GLOBALS['log']->fatal('Contact Save Event!');


 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
//$hook_array['before_save'][] = Array(99,'Create call based on Outcome','custom/modules/Contacts/createCallFromContactQuickCreate.php','createCallFromContactQuickCreateC','createCallFromContactQuickCreateBeforeSave',);
$hook_array['before_save'][] = Array(1,'workflow','include/workflow/WorkFlowHandler.php','WorkFlowHandler','WorkFlowHandler',);
//$hook_array['before_save'][] = Array(2,'Delete Contact','custom/modules/Contacts/logic_hooks/CustomContactsLogic.php','CustomContactsLogic','delete_contact_left_company',);
$hook_array['before_save'][] = Array(3,'Update account contact count','custom/modules/Contacts/logic_hooks/CustomContactsLogic.php','CustomContactsLogic','update_contactcount',);
$hook_array['before_save'][] = Array(1,'After Save','custom/modules/Contacts/hook.php','afterSave','afterSave',);
$hook_array['after_relationship_add'] = Array(); 
//$hook_array['after_relationship_add'][] = Array(55,'Parent account','custom/modules/Contacts/ATC_ParentAccount.php','ATC_ParentAccountC','ATC_ParentAccountF',);
//$hook_array['after_relationship_add'][] = Array(56,'Add to campaign','custom/modules/Contacts/logic_hooks/CustomContactsLogic.php','CustomContactsLogic','relate_account_to_campaign',);
$hook_array['after_relationship_add'][] = Array(57,'Send to Nova', 'custom/modules/Contacts/logic_hooks/sendToNova.php','ms_nova', 'ms_sendtonova',);

$hook_array['process_record'] = Array(); 
$hook_array['process_record'][] = Array(55,'Log call for Contacts ListView','modules/ATC_Teleseller/ATC_CallLogger.php','CallLogger','ATCrenderLogCall',);
//$hook_array['process_record'][] = Array(11,'Set linkedin profile','custom/include/RLS/hooks/rls_linkedin_logic_hook.php','rls_linkedin_logic_hook','setLinkedinProfile',);
$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(99,'Create call based on Outcome','custom/modules/Contacts/createCallFromContactQuickCreate.php','createCallFromContactQuickCreateC','createCallFromContactQuickCreateAfterSave',);
$hook_array['after_save'][] = Array(5,'Push data to ambition','custom/modules/Contacts/logic_hooks/ambition.php','ambition','push',);


?>
