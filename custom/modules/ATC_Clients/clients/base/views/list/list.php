<?php
$viewdefs['ATC_Clients']['base']['view']['list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PANEL_DEFAULT',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'label' => 'LBL_ACCOUNT_NAME',
          'link' => true,
          'default' => true,
          'enabled' => true,
          'width' => '40%',
        ),
        1 => 
        array (
          'name' => 'billing_address_city',
          'label' => 'LBL_CITY',
          'default' => true,
          'enabled' => true,
          'width' => '10%',
        ),
        2 => 
        array (
          'name' => 'phone_office',
          'label' => 'LBL_PHONE',
          'default' => true,
          'enabled' => true,
          'width' => '10%',
        ),
        3 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_USER',
          'default' => true,
          'enabled' => true,
          'width' => '2%',
          'id' => 'ASSIGNED_USER_ID',
        ),
        4 => 
        array (
          'name' => 'users_atc_clients_1_name',
          'default' => true,
          'enabled' => true,
          'type' => 'relate',
          'link' => true,
          'label' => 'LBL_USERS_ATC_CLIENTS_1_FROM_USERS_TITLE',
          'id' => 'USERS_ATC_CLIENTS_1USERS_IDA',
          'width' => '10%',
        ),
        5 => 
        array (
          'name' => 'date_entered',
          'enabled' => true,
          'default' => true,
          'type' => 'datetime',
          'label' => 'LBL_DATE_ENTERED',
          'width' => '10%',
        ),
        6 => 
        array (
          'name' => 'atc_clients_type',
          'label' => 'LBL_TYPE',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
        ),
        7 => 
        array (
          'name' => 'industry',
          'label' => 'LBL_INDUSTRY',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
        ),
        8 => 
        array (
          'name' => 'annual_revenue',
          'label' => 'LBL_ANNUAL_REVENUE',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
        ),
        9 => 
        array (
          'name' => 'phone_fax',
          'label' => 'LBL_PHONE_FAX',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
        ),
        10 => 
        array (
          'name' => 'billing_address_street',
          'label' => 'LBL_BILLING_ADDRESS_STREET',
          'default' => false,
          'enabled' => true,
          'width' => '15%',
        ),
        11 => 
        array (
          'name' => 'billing_address_state',
          'label' => 'LBL_BILLING_ADDRESS_STATE',
          'default' => false,
          'enabled' => true,
          'width' => '7%',
        ),
        12 => 
        array (
          'name' => 'billing_address_postalcode',
          'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
        ),
        13 => 
        array (
          'name' => 'billing_address_country',
          'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
        ),
        14 => 
        array (
          'name' => 'shipping_address_street',
          'label' => 'LBL_SHIPPING_ADDRESS_STREET',
          'default' => false,
          'enabled' => true,
          'width' => '15%',
        ),
        15 => 
        array (
          'name' => 'shipping_address_city',
          'label' => 'LBL_SHIPPING_ADDRESS_CITY',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
        ),
        16 => 
        array (
          'name' => 'shipping_address_state',
          'label' => 'LBL_SHIPPING_ADDRESS_STATE',
          'default' => false,
          'enabled' => true,
          'width' => '7%',
        ),
        17 => 
        array (
          'name' => 'shipping_address_postalcode',
          'label' => 'LBL_SHIPPING_ADDRESS_POSTALCODE',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
        ),
        18 => 
        array (
          'name' => 'shipping_address_country',
          'label' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
        ),
        19 => 
        array (
          'name' => 'phone_alternate',
          'label' => 'LBL_PHONE_ALT',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
        ),
        20 => 
        array (
          'name' => 'website',
          'label' => 'LBL_WEBSITE',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
        ),
        21 => 
        array (
          'name' => 'ownership',
          'label' => 'LBL_OWNERSHIP',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
        ),
        22 => 
        array (
          'name' => 'employees',
          'label' => 'LBL_EMPLOYEES',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
        ),
        23 => 
        array (
          'name' => 'ticker_symbol',
          'label' => 'LBL_TICKER_SYMBOL',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
        ),
        24 => 
        array (
          'name' => 'team_name',
          'label' => 'LBL_TEAM',
          'default' => false,
          'enabled' => true,
          'width' => '2%',
        ),
      ),
    ),
  ),
);
