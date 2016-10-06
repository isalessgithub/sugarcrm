<?php
// created: 2016-10-06 15:20:01
$searchdefs['Calls'] = array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      1 => 
      array (
        'type' => 'enum',
        'label' => 'LBL_ASSIGNED_TO',
        'id' => 'ASSIGNED_USER_ID',
        'link' => true,
        'name' => 'assigned_user_id',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
      2 => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_PROSPECTLISTS_CALLS_1_FROM_PROSPECTLISTS_TITLE',
        'id' => 'PROSPECTLISTS_CALLS_1PROSPECTLISTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'pro_list',
      ),
      3 => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CALL_OUTCOME',
        'width' => '10%',
        'name' => 'call_outcome_c',
      ),
      4 => 
      array (
        'name' => 'open_only',
        'label' => 'LBL_OPEN_ITEMS',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      1 => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CALL_OUTCOME',
        'width' => '10%',
        'name' => 'call_outcome_c',
      ),
      2 => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'date_start',
      ),
      3 => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_PROSPECTLISTS_CALLS_1_FROM_PROSPECTLISTS_TITLE',
        'id' => 'PROSPECTLISTS_CALLS_1PROSPECTLISTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'pro_list',
      ),
      4 => 
      array (
        'type' => 'parent',
        'label' => 'LBL_LIST_RELATED_TO',
        'width' => '10%',
        'default' => true,
        'name' => 'parent_name',
      ),
      5 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      6 => 
      array (
        'type' => 'enum',
        'label' => 'LBL_DIRECTION',
        'width' => '10%',
        'default' => true,
        'name' => 'direction',
      ),
      7 => 
      array (
        'name' => 'status',
        'default' => true,
        'width' => '10%',
      ),
      8 => 
      array (
        'name' => 'assigned_user_id',
        'type' => 'enum',
        'label' => 'LBL_ASSIGNED_TO',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
      9 => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);