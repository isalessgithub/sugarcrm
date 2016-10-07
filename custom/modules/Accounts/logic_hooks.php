<?php
$hook_array['process_record'][] = array(55,'Log call for Contacts ListView','modules/ATC_Teleseller/ATC_CallLogger.php','CallLogger','ATCrenderLogCall',);
$hook_array['before_save'][] = array(1,'workflow','include/workflow/WorkFlowHandler.php','WorkFlowHandler','WorkFlowHandler',);
