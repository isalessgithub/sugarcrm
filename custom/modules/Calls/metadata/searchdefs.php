<?php
$searchdefs ['Calls'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'assigned_user_id' => 
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
      'pro_list' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_PROSPECTLISTS_CALLS_1_FROM_PROSPECTLISTS_TITLE',
        'id' => 'PROSPECTLISTS_CALLS_1PROSPECTLISTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'pro_list',
      ),
      'call_outcome_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CALL_OUTCOME',
        'width' => '10%',
        'name' => 'call_outcome_c',
      ),
      'open_only' => 
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
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'call_outcome_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CALL_OUTCOME',
        'width' => '10%',
        'name' => 'call_outcome_c',
      ),
      'date_start' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'date_start',
      ),
      'pro_list' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_PROSPECTLISTS_CALLS_1_FROM_PROSPECTLISTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'PROSPECTLISTS_CALLS_1PROSPECTLISTS_IDA',
        'name' => 'pro_list',
      ),
      'parent_name' => 
      array (
        'type' => 'parent',
        'label' => 'LBL_LIST_RELATED_TO',
        'width' => '10%',
        'default' => true,
        'name' => 'parent_name',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'direction' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_DIRECTION',
        'width' => '10%',
        'default' => true,
        'name' => 'direction',
      ),
      'status' => 
      array (
        'name' => 'status',
        'default' => true,
        'width' => '10%',
      ),
      'assigned_user_id' => 
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
      'favorites_only' => 
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
?>
