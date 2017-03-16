<?php
// created: 2017-02-28 11:25:17
$viewdefs['Contacts']['base']['view']['selection-list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'title',
          'enabled' => true,
          'default' => true,
        ),
        1 => 
        array (
          'name' => 'account_name',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'type' => 'fullname',
          'link' => true,
          'label' => 'LBL_NAME',
          'default' => true,
          'enabled' => true,
          'name' => 'name',
        ),
        3 => 
        array (
          'type' => 'enum',
          'label' => 'LBL_LEAD_SOURCE',
          'default' => true,
          'enabled' => true,
          'name' => 'lead_source',
        ),
        4 => 
        array (
          'name' => 'full_name',
          'type' => 'fullname',
          'fields' => 
          array (
            0 => 'salutation',
            1 => 'first_name',
            2 => 'last_name',
          ),
          'link' => true,
          'css_class' => 'full-name',
          'label' => 'LBL_LIST_NAME',
          'enabled' => true,
          'default' => false,
        ),
        5 => 
        array (
          'name' => 'email',
          'enabled' => true,
          'default' => false,
        ),
        6 => 
        array (
          'name' => 'phone_work',
          'enabled' => true,
          'default' => false,
        ),
        7 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_LIST_ASSIGNED_USER',
          'id' => 'ASSIGNED_USER_ID',
          'enabled' => true,
          'default' => false,
        ),
        8 => 
        array (
          'name' => 'call_outcome_c',
          'label' => 'LBL_CALL_OUTCOME',
          'enabled' => true,
          'default' => false,
        ),
        9 => 
        array (
          'name' => 'date_entered',
          'enabled' => true,
          'default' => false,
          'readonly' => true,
        ),
      ),
    ),
  ),
);