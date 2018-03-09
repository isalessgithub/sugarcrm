<?php
// created: 2018-03-09 13:26:58
$viewdefs['Quotes']['base']['filter']['default'] = array (
  'default_filter' => 'all_records',
  'fields' => 
  array (
    'assigned_user_name' => 
    array (
    ),
    'open_only' => 
    array (
      'dbFields' => 
      array (
        0 => 'quote_stage',
      ),
      'type' => 'bool',
      'vname' => 'LBL_OPEN_ITEMS',
    ),
    'name' => 
    array (
    ),
    'quote_num' => 
    array (
    ),
    'total_usdollar' => 
    array (
    ),
    'quote_type' => 
    array (
    ),
    'date_quote_expected_closed' => 
    array (
    ),
    'atc_clients_quotes_1_name' => 
    array (
    ),
    'atc_clients_quotes_2_name' => 
    array (
    ),
    'quote_stage' => 
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