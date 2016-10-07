<?php
$viewdefs['ATC_ISSCampaigns']['base']['filter']['default'] = array (
  'default_filter' => 'all_records',
  'fields' => 
  array (
    'name' => 
    array (
    ),
    'assigned_user_name' => 
    array (
    ),
    'users_atc_isscampaigns_1_name' => 
    array (
    ),
    'campaign_status_c' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'width' => '10%',
      'name' => 'campaign_status_c',
      'vname' => 'LBL_CAMPAIGN_STATUS',
    ),
    '$owner' => 
    array (
      'predefined_filter' => true,
      'vname' => 'LBL_CURRENT_USER_FILTER',
    ),
    '$favorite' => 
    array (
      'predefined_filter' => true,
      'vname' => 'LBL_FAVORITES_FILTER',
    ),
  ),
);
