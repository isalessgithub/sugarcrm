<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(50,'Remove user from license table','custom/include/RLS/hooks/rls_linkedin_logic_hook.php','rls_linkedin_logic_hook','removeInactiveUser',);
$hook_array['after_delete'] = Array(); 
$hook_array['after_delete'][] = Array(50,'Remove user from license table','custom/include/RLS/hooks/rls_linkedin_logic_hook.php','rls_linkedin_logic_hook','removeDeletedUser',);



?>