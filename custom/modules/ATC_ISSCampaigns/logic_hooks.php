<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will
// be automatically rebuilt in the future.
 $hook_version = 1;
$hook_array = Array();
// position, file, function

// position, file, function
$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(
    1,
    'Populate Fields',
    'custom/modules/ATC_ISSCampaigns/logic_hooks/calculate_appt_data.php',
    'calculateAppointmentData',
    'calculateApptData',
);
/*
$hook_array['before_save'][] = Array(
    '1',
    'workflow',
    'include/workflow/WorkFlowHandler.php',
    'WorkFlowHandler',
    'WorkFlowHandler',
);
*/
// position, file, function

$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(
    1,
    'Create related opportunity',
    'custom/modules/ATC_ISSCampaigns/logic_hooks/MS_CreateOpportunity.php',
    'MS_CreateOpportunity',
    'createOpportunity',
);
