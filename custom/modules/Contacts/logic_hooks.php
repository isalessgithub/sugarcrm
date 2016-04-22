<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(99, 'Create call based on Outcome', 'custom/modules/Contacts/createCallFromContactQuickCreate.php','createCallFromContactQuickCreateC', 'createCallFromContactQuickCreateBeforeSave'); 
$hook_array['before_save'][] = Array(1, 'workflow', 'include/workflow/WorkFlowHandler.php','WorkFlowHandler', 'WorkFlowHandler'); 
$hook_array['before_save'][] = Array(2, 'Delete Contact', 'custom/modules/Contacts/logic_hooks/CustomContactsLogic.php','CustomContactsLogic', 'delete_contact_left_company'); 
$hook_array['before_save'][] = Array(1, 'Contacts push feed', 'modules/Contacts/SugarFeeds/ContactFeed.php','ContactFeed', 'pushFeed'); 
$hook_array['after_ui_frame'] = Array(); 
$hook_array['after_ui_frame'][] = Array(1, 'Contacts InsideView frame', 'modules/Connectors/connectors/sources/ext/rest/insideview/InsideViewLogicHook.php','InsideViewLogicHook', 'showFrame'); 
$hook_array['after_relationship_add'] = Array(); 
$hook_array['after_relationship_add'][] = Array(55, 'Parent account', 'custom/modules/Contacts/ATC_ParentAccount.php','ATC_ParentAccountC', 'ATC_ParentAccountF'); 
$hook_array['after_relationship_add'][] = Array(56, 'Add to campaign', 'custom/modules/Contacts/logic_hooks/CustomContactsLogic.php','CustomContactsLogic', 'relate_account_to_campaign'); 
$hook_array['process_record'] = Array(); 
$hook_array['process_record'][] = Array(55, 'Log call for Contacts ListView', 'modules/ATC_Teleseller/ATC_CallLogger.php','CallLogger', 'ATCrenderLogCall'); 
$hook_array['after_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'After Save', 'custom/modules/Contacts/hook.php','afterSave', 'afterSave'); 
$hook_array['after_save'][] = Array(99, 'Create call based on Outcome', 'custom/modules/Contacts/createCallFromContactQuickCreate.php','createCallFromContactQuickCreateC', 'createCallFromContactQuickCreateAfterSave'); 



?>
