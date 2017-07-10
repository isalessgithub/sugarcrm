<?php
// created: 2017-06-28 13:25:18
$viewdefs['ATC_ISSCampaigns']['base']['filter']['default'] = array (
  'default_filter' => 'all_records',
  'fields' => 
  array (
    'name' => 
    array (
    ),
    'invoice_number_c' => 
    array (
    ),
    'assigned_user_name' => 
    array (
    ),
    'atc_clients_atc_isscampaigns_name' => 
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
    'users_atc_isscampaigns_1_name' => 
    array (
    ),
    '$owner' => 
    array (
      'predefined_filter' => true,
      'vname' => 'LBL_CURRENT_USER_FILTER',
    ),
    'campaign_finish_date_c' => 
    array (
    ),
    'campaign_start_date_c' => 
    array (
    ),
    '$favorite' => 
    array (
      'predefined_filter' => true,
      'vname' => 'LBL_FAVORITES_FILTER',
    ),
    'date_entered' => 
    array (
    ),
    'campaign_email_and_password_c' => 
    array (
    ),
  ),
);