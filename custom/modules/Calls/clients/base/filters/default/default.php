<?php
// created: 2017-11-08 20:31:30
$viewdefs['Calls']['base']['filter']['default'] = array (
  'default_filter' => 'all_records',
  'fields' => 
  array (
    'pro_list' => 
    array (
    ),
    'atc_isscampaigns_calls_1_name' => 
    array (
    ),
    'direct_phone_c' => 
    array (
    ),
    'switchboard_c' => 
    array (
    ),
    'created_by_name' => 
    array (
    ),
    'account_c' => 
    array (
    ),
    'name' => 
    array (
    ),
    'assigned_user_name' => 
    array (
    ),
    'call_outcome_c' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'width' => '10%',
      'name' => 'call_outcome_c',
      'vname' => 'LBL_CALL_OUTCOME',
    ),
    'open_only' => 
    array (
      'dbFields' => 
      array (
        0 => 'status',
      ),
      'type' => 'bool',
      'vname' => 'LBL_OPEN_ITEMS',
    ),
    'date_start' => 
    array (
    ),
    'date_entered' => 
    array (
    ),
    'parent_name' => 
    array (
    ),
    'direction' => 
    array (
    ),
    'status' => 
    array (
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