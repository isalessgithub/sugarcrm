<?php
$hook_array['before_save'][] = array(99,'Create call based on Outcome','custom/modules/Contacts/createCallFromContactQuickCreate.php','createCallFromContactQuickCreateC','createCallFromContactQuickCreateBeforeSave',);
$hook_array['before_save'][] = array(1,'workflow','include/workflow/WorkFlowHandler.php','WorkFlowHandler','WorkFlowHandler',);
$hook_array['before_save'][] = array(2,'Delete Contact','custom/modules/Contacts/logic_hooks/CustomContactsLogic.php','CustomContactsLogic','delete_contact_left_company',);
$hook_array['before_save'][] = array(3,'Update account contact count','custom/modules/Contacts/logic_hooks/CustomContactsLogic.php','CustomContactsLogic','update_contactcount',);
$hook_array['before_save'][] = array(1,'After Save','custom/modules/Contacts/hook.php','afterSave','afterSave',);
$hook_array['after_relationship_add'][] = array(55,'Parent account','custom/modules/Contacts/ATC_ParentAccount.php','ATC_ParentAccountC','ATC_ParentAccountF',);
$hook_array['after_relationship_add'][] = array(56,'Add to campaign','custom/modules/Contacts/logic_hooks/CustomContactsLogic.php','CustomContactsLogic','relate_account_to_campaign',);
$hook_array['process_record'][] = array(55,'Log call for Contacts ListView','modules/ATC_Teleseller/ATC_CallLogger.php','CallLogger','ATCrenderLogCall',);
$hook_array['after_save'][] = array(99,'Create call based on Outcome','custom/modules/Contacts/createCallFromContactQuickCreate.php','createCallFromContactQuickCreateC','createCallFromContactQuickCreateAfterSave',);
