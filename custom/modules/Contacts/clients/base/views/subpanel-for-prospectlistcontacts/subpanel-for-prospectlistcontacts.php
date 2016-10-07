<?php
// created: 2016-10-07 10:00:34
$viewdefs['Contacts']['base']['view']['subpanel-for-prospectlistcontacts'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'label' => 'LBL_LIST_NAME',
          'default' => true,
          'enabled' => true,
          'link' => true,
          'fields' => 
          array (
            0 => 'first_name',
            1 => 'last_name',
            2 => 'salutation',
            3 => 'title',
          ),
          'type' => 'fullname',
        ),
        1 => 
        array (
          'name' => 'account_name',
          'target_record_key' => 'account_id',
          'target_module' => 'Accounts',
          'sortable' => false,
          'label' => 'LBL_LIST_ACCOUNT_NAME',
          'default' => true,
          'enabled' => true,
          'link' => true,
          'type' => 'relate',
        ),
        2 => 
        array (
          'name' => 'email',
          'sortable' => false,
          'label' => 'LBL_LIST_EMAIL',
          'default' => true,
          'enabled' => true,
          'type' => 'email',
        ),
        3 => 
        array (
          'name' => 'phone_work',
          'label' => 'LBL_LIST_PHONE',
          'default' => true,
          'enabled' => true,
          'type' => 'phone',
        ),
        4 => 
        array (
          'name' => 'log_call_c',
          'label' => 'LBL_LOG_CALL',
          'default' => true,
          'enabled' => true,
          'type' => 'non-db',
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);