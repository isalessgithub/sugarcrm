<?php
     $hook_version = 1;
     $hook_array = Array();
     $hook_array['before_relationship_add'] = Array();
     $hook_array['before_relationship_add'][] = Array(1,'Hook description','custom/modules/ProspectLists/addFromTargetList.php','AddFromTargetList','addFromTargetListMethod');
    
     $hook_array['before_relationship_delete'] = Array();
     $hook_array['before_relationship_delete'][] = Array(1,'Hook description','custom/modules/ProspectLists/addFromTargetList.php','DeleteFromTargetList','deleteFromTargetListMethod');

?>
