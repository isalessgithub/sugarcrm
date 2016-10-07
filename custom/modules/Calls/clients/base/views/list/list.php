<?php
$viewdefs['Calls']['base']['view']['list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PANEL_DEFAULT',
      'fields' => 
      array (
        0 => 
        array (
          'label' => 'LBL_LIST_SUBJECT',
          'enabled' => true,
          'default' => true,
          'link' => true,
          'name' => 'name',
          'related_fields' => 
          array (
            0 => 'repeat_type',
          ),
          'width' => '40%',
        ),
        1 => 
        array (
          'name' => 'date_entered',
          'enabled' => true,
          'default' => true,
          'readonly' => true,
          'width' => '10%',
          'label' => 'LBL_DATE_ENTERED',
        ),
        2 => 
        array (
          'name' => 'pro_list',
          'default' => true,
          'enabled' => true,
          'type' => 'relate',
          'link' => true,
          'label' => 'LBL_PROSPECTLISTS_CALLS_1_FROM_PROSPECTLISTS_TITLE',
          'id' => 'PROSPECTLISTS_CALLS_1PROSPECTLISTS_IDA',
          'width' => '10%',
        ),
        3 => 
        array (
          'name' => 'account_c',
          'default' => true,
          'enabled' => true,
          'type' => 'varchar',
          'label' => 'LBL_ACCOUNT',
          'width' => '10%',
        ),
        4 => 
        array (
          'name' => 'direct_phone_c',
          'default' => true,
          'enabled' => true,
          'type' => 'varchar',
          'label' => 'LBL_DIRECT_PHONE',
          'width' => '10%',
        ),
        5 => 
        array (
          'name' => 'call_outcome_c',
          'default' => true,
          'enabled' => true,
          'type' => 'enum',
          'studio' => 'visible',
          'label' => 'LBL_CALL_OUTCOME',
          'width' => '10%',
        ),
        6 => 
        array (
          'name' => 'assigned_user_name',
          'target_record_key' => 'assigned_user_id',
          'target_module' => 'Employees',
          'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
          'enabled' => true,
          'default' => true,
          'sortable' => true,
          'width' => '2%',
          'id' => 'ASSIGNED_USER_ID',
        ),
        7 => 
        array (
          'name' => 'team_name',
          'default' => false,
          'enabled' => true,
          'width' => '2%',
          'label' => 'LBL_LIST_TEAM',
        ),
        8 => 
        array (
          'enabled' => true,
          'default' => false,
          'name' => 'status',
          'type' => 'event-status',
          'css_class' => 'full-width',
          'width' => '10%',
          'label' => 'LBL_STATUS',
          'link' => false,
        ),
        9 => 
        array (
          'enabled' => true,
          'default' => false,
          'name' => 'direction',
          'width' => '10%',
          'label' => 'LBL_LIST_DIRECTION',
          'link' => false,
        ),
        10 => 
        array (
          'name' => 'parent_name',
          'label' => 'LBL_LIST_RELATED_TO',
          'dynamic_module' => 'PARENT_TYPE',
          'id' => 'PARENT_ID',
          'link' => true,
          'enabled' => true,
          'default' => false,
          'sortable' => false,
          'ACLTag' => 'PARENT',
          'related_fields' => 
          array (
            0 => 'parent_id',
            1 => 'parent_type',
          ),
          'width' => '20%',
        ),
        11 => 
        array (
          'name' => 'date_start',
          'label' => 'LBL_LIST_DATE',
          'type' => 'datetimecombo-colorcoded',
          'completed_status_value' => 'Held',
          'enabled' => true,
          'default' => false,
          'readonly' => true,
          'related_fields' => 
          array (
            0 => 'time_start',
          ),
          'width' => '15%',
          'link' => false,
        ),
      ),
    ),
  ),
);
