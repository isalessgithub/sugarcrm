<?php

    $hook_version = 1;

    $hook_array = array();
    $hook_array['before_save'] = array();
    $hook_array['before_save'][] = array(1,'Updates users related to this client, relates them to all campaigns linked to this client record.',
	'custom/modules/ATC_Clients/client_users.php','linkUsersCampaigns','usersCampaigns');
?>
