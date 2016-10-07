<?php
// created: 2016-10-07 12:36:52
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
        1 => 
        array (
          'name' => 'title',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'account_name',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'email',
          'enabled' => true,
          'default' => false,
        ),
        4 => 
        array (
          'name' => 'phone_work',
          'enabled' => true,
          'default' => false,
        ),
        5 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_LIST_ASSIGNED_USER',
          'id' => 'ASSIGNED_USER_ID',
          'enabled' => true,
          'default' => false,
        ),
        6 => 
        array (
          'name' => 'date_entered',
          'enabled' => true,
          'default' => false,
          'readonly' => true,
        ),
        7 => 
        array (
          'type' => 'fullname',
          'link' => true,
          'label' => 'LBL_NAME',
          'default' => true,
          'enabled' => true,
          'name' => 'name',
        ),
        8 => 
        array (
          'type' => 'enum',
          'label' => 'LBL_LEAD_SOURCE',
          'default' => true,
          'enabled' => true,
          'name' => 'lead_source',
        ),
      ),
    ),
  ),
);