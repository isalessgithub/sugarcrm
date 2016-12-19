<?php
// created: 2016-12-02 11:12:17
$viewdefs['Contacts']['base']['view']['subpanel-for-accounts-contacts'] = array (
  'type' => 'subpanel-list',
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
          'name' => 'full_name',
          'type' => 'fullname',
          'fields' => 
          array (
            0 => 'salutation',
            1 => 'first_name',
            2 => 'last_name',
          ),
          'link' => true,
          'label' => 'LBL_LIST_NAME',
          'enabled' => true,
          'default' => true,
        ),
        1 => 
        array (
          'name' => 'primary_address_city',
          'label' => 'LBL_LIST_CITY',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'primary_address_state',
          'label' => 'LBL_LIST_STATE',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'email',
          'label' => 'LBL_LIST_EMAIL',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'phone_work',
          'label' => 'LBL_LIST_PHONE',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'et_telesales',
          'label' => 'LBL_ET_TELESALES_DISPOSITION',
          'enabled' => true,
          'readonly' => true,
          'default' => true,
        ),
      ),
    ),
  ),
);