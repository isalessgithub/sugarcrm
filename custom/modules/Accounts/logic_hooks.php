<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['process_record'] = Array(); 
$hook_array['process_record'][] = Array(55,'Log call for Contacts ListView','modules/ATC_Teleseller/ATC_CallLogger.php','CallLogger','ATCrenderLogCall',);
$hook_array['process_record'][] = Array(11,'Set linkedin profile','custom/include/RLS/hooks/rls_linkedin_logic_hook.php','rls_linkedin_logic_hook','setLinkedinProfile',);
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1,'workflow','include/workflow/WorkFlowHandler.php','WorkFlowHandler','WorkFlowHandler',);



?>
