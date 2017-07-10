<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_relationship_add'] = Array(); 
$hook_array['before_relationship_add'][] = Array(1,'Hook description','custom/modules/ProspectLists/addFromTargetList.php','AddFromTargetList','addFromTargetListMethod',);
$hook_array['before_relationship_delete'] = Array(); 
$hook_array['before_relationship_delete'][] = Array(1,'Hook description','custom/modules/ProspectLists/addFromTargetList.php','DeleteFromTargetList','deleteFromTargetListMethod',);
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array('2','update email from campaign','custom/modules/ProspectLists/inherit_email.php','inheritEmail','inheritCampaignEmail',);
$hook_array['before_save'][] = Array('11','workflow','include/workflow/WorkFlowHandler.php','WorkFlowHandler','WorkFlowHandler',);



?>
