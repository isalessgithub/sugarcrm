<?php
// created: 2016-12-02 11:12:12
$subpanel_layout['list_fields'] = array (
  'full_name' => 
  array (
    'type' => 'fullname',
    'studio' => 
    array (
      'listview' => false,
    ),
    'vname' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'primary_address_city' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_PRIMARY_ADDRESS_CITY',
    'width' => '10%',
    'default' => true,
  ),
  'primary_address_state' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_PRIMARY_ADDRESS_STATE',
    'width' => '10%',
    'default' => true,
  ),
  'email' => 
  array (
    'name' => 'email',
    'vname' => 'LBL_LIST_EMAIL',
    'widget_class' => 'SubPanelEmailLink',
    'width' => '10%',
    'sortable' => false,
    'default' => true,
  ),
  'phone_work' => 
  array (
    'name' => 'phone_work',
    'vname' => 'LBL_LIST_PHONE',
    'width' => '10%',
    'default' => true,
  ),
  'et_telesales' => 
  array (
    'type' => 'eontek-web-service',
    'sortable' => false,
    'studio' => 'visible',
    'readonly' => true,
    'vname' => 'LBL_ET_TELESALES_DISPOSITION',
    'width' => '10%',
    'default' => true,
  ),
  'first_name' => 
  array (
    'name' => 'first_name',
    'usage' => 'query_only',
  ),
  'last_name' => 
  array (
    'name' => 'last_name',
    'usage' => 'query_only',
  ),
  'salutation' => 
  array (
    'name' => 'salutation',
    'usage' => 'query_only',
  ),
  'account_id' => 
  array (
    'usage' => 'query_only',
  ),
);