<?php
// created: 2016-10-07 09:55:44
$listViewDefs['Accounts'] = array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'link' => true,
    'default' => true,
  ),
  'PHONE_OFFICE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_PHONE',
    'default' => true,
  ),
  'WEBSITE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_WEBSITE',
    'default' => true,
  ),
  'BILLING_ADDRESS_CITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_CITY',
    'default' => true,
  ),
  'BILLING_ADDRESS_STATE' => 
  array (
    'width' => '8%',
    'label' => 'LBL_BILLING_ADDRESS_STATE',
    'default' => true,
  ),
  'REVENUE_RANGE_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_REVENUE_RANGE',
    'width' => '10%',
  ),
  'EMPLOYEES_RANGE_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_EMPLOYEES_RANGE',
    'width' => '10%',
  ),
  'CONTACT_COUNT_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_CONTACT_COUNT',
    'width' => '7%',
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '7%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
  ),
  'LOG_CALL_C' => 
  array (
    'type' => 'varchar',
    'studio' => 
    array (
      'editview' => false,
      'quickcreate' => false,
      'searchview' => false,
      'wirelesseditview' => false,
      'wirelessdetailview' => false,
      'wirelesslistview' => false,
      'wireless_basic_search' => false,
    ),
    'label' => 'LBL_LOG_CALL',
    'width' => '5%',
    'default' => true,
  ),
  'PARENT_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MEMBER_OF',
    'id' => 'PARENT_ID',
    'width' => '10%',
    'default' => false,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_TEAM',
    'default' => false,
  ),
  'ACCOUNT_TYPE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_TYPE',
    'default' => false,
  ),
  'INDUSTRY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_INDUSTRY',
    'default' => false,
  ),
  'PHONE_FAX' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PHONE_FAX',
    'default' => false,
  ),
  'BILLING_ADDRESS_STREET' => 
  array (
    'width' => '15%',
    'label' => 'LBL_BILLING_ADDRESS_STREET',
    'default' => false,
  ),
  'ANNUAL_REVENUE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ANNUAL_REVENUE',
    'default' => false,
  ),
  'EMPLOYEES' => 
  array (
    'width' => '10%',
    'label' => 'LBL_EMPLOYEES',
    'default' => false,
  ),
  'BILLING_ADDRESS_COUNTRY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
    'default' => false,
  ),
  'BILLING_ADDRESS_POSTALCODE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
    'default' => false,
  ),
  'EMAIL1' => 
  array (
    'width' => '15%',
    'label' => 'LBL_EMAIL_ADDRESS',
    'sortable' => false,
    'link' => true,
    'customCode' => '{$EMAIL1_LINK}{$EMAIL1}</a>',
    'default' => false,
  ),
  'SHIPPING_ADDRESS_CITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_SHIPPING_ADDRESS_CITY',
    'default' => false,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'SHIPPING_ADDRESS_STATE' => 
  array (
    'width' => '7%',
    'label' => 'LBL_SHIPPING_ADDRESS_STATE',
    'default' => false,
  ),
  'SHIPPING_ADDRESS_POSTALCODE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_SHIPPING_ADDRESS_POSTALCODE',
    'default' => false,
  ),
  'SHIPPING_ADDRESS_COUNTRY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
    'default' => false,
  ),
  'RATING' => 
  array (
    'width' => '10%',
    'label' => 'LBL_RATING',
    'default' => false,
  ),
  'PHONE_ALTERNATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_OTHER_PHONE',
    'default' => false,
  ),
  'OWNERSHIP' => 
  array (
    'width' => '10%',
    'label' => 'LBL_OWNERSHIP',
    'default' => false,
  ),
  'SIC_CODE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_SIC_CODE',
    'default' => false,
  ),
  'TICKER_SYMBOL' => 
  array (
    'width' => '10%',
    'label' => 'LBL_TICKER_SYMBOL',
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'width' => '5%',
    'label' => 'LBL_DATE_MODIFIED',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CREATED',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MODIFIED',
    'default' => false,
  ),
  'EMAIL' => 
  array (
    'width' => '15%',
    'label' => 'LBL_EMAIL_ADDRESS',
    'sortable' => false,
    'link' => true,
    'customCode' => '{$EMAIL_LINK}{$EMAIL}</a>',
    'default' => false,
  ),
);