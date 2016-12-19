<?php
// created: 2016-12-07 11:45:11
$viewdefs['Accounts']['base']['filter']['default'] = array (
  'default_filter' => 'all_records',
  'fields' => 
  array (
    'name' => 
    array (
    ),
    'add_to_target_list_c' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'width' => '10%',
      'name' => 'add_to_target_list_c',
      'vname' => 'LBL_ADD_TO_TARGET_LIST',
    ),
    'industry' => 
    array (
    ),
    'revenue_range_c' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'width' => '10%',
      'name' => 'revenue_range_c',
      'vname' => 'LBL_REVENUE_RANGE',
    ),
    'employees_range_c' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'width' => '10%',
      'name' => 'employees_range_c',
      'vname' => 'LBL_EMPLOYEES_RANGE',
    ),
    'created_by_name' => 
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