<?php
// created: 2017-02-28 11:25:17
$viewdefs['Contacts']['base']['view']['subpanel-for-accounts'] = array (
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
          'default' => true,
          'label' => 'LBL_LIST_NAME',
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
          'type' => 'varchar',
          'default' => true,
          'label' => 'LBL_TITLE',
          'enabled' => true,
          'name' => 'title',
        ),
        2 => 
        array (
          'name' => 'primary_address_city',
          'default' => true,
          'label' => 'LBL_LIST_CITY',
          'enabled' => true,
        ),
        3 => 
        array (
          'name' => 'primary_address_state',
          'default' => true,
          'label' => 'LBL_LIST_STATE',
          'enabled' => true,
        ),
        4 => 
        array (
          'name' => 'email',
          'sortable' => false,
          'default' => true,
          'label' => 'LBL_LIST_EMAIL',
          'enabled' => true,
          'type' => 'email',
        ),
        5 => 
        array (
          'name' => 'phone_work',
          'default' => true,
          'label' => 'LBL_LIST_PHONE',
          'enabled' => true,
          'type' => 'phone',
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);