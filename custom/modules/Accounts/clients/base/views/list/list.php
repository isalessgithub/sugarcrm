<?php
$viewdefs['Accounts']['base']['view']['list'] = array (
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
          'link' => true,
          'label' => 'LBL_LIST_ACCOUNT_NAME',
          'enabled' => true,
          'default' => true,
          'width' => '20%',
        ),
        1 => 
        array (
          'name' => 'phone_office',
          'label' => 'LBL_LIST_PHONE',
          'enabled' => true,
          'default' => true,
          'width' => '10%',
        ),
        2 => 
        array (
          'name' => 'website',
          'default' => true,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_WEBSITE',
        ),
        3 => 
        array (
          'name' => 'billing_address_city',
          'label' => 'LBL_LIST_CITY',
          'enabled' => true,
          'default' => true,
          'width' => '10%',
        ),
        4 => 
        array (
          'name' => 'billing_address_state',
          'default' => true,
          'enabled' => true,
          'width' => '8%',
          'label' => 'LBL_BILLING_ADDRESS_STATE',
        ),
        5 => 
        array (
          'name' => 'revenue_range_c',
          'default' => true,
          'enabled' => true,
          'type' => 'enum',
          'studio' => 'visible',
          'label' => 'LBL_REVENUE_RANGE',
          'width' => '10%',
        ),
        6 => 
        array (
          'name' => 'employees_range_c',
          'default' => true,
          'enabled' => true,
          'type' => 'enum',
          'studio' => 'visible',
          'label' => 'LBL_EMPLOYEES_RANGE',
          'width' => '10%',
        ),
        7 => 
        array (
          'name' => 'contact_count_c',
          'default' => true,
          'enabled' => true,
          'type' => 'int',
          'label' => 'LBL_CONTACT_COUNT',
          'width' => '7%',
        ),
        8 => 
        array (
          'name' => 'date_entered',
          'type' => 'datetime',
          'label' => 'LBL_DATE_ENTERED',
          'enabled' => true,
          'default' => true,
          'readonly' => true,
          'width' => '7%',
        ),
        9 => 
        array (
          'name' => 'log_call_c',
          'default' => true,
          'enabled' => true,
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
        ),
        10 => 
        array (
          'name' => 'parent_name',
          'default' => false,
          'enabled' => true,
          'type' => 'relate',
          'link' => true,
          'label' => 'LBL_MEMBER_OF',
          'id' => 'PARENT_ID',
          'width' => '10%',
        ),
        11 => 
        array (
          'name' => 'team_name',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_LIST_TEAM',
        ),
        12 => 
        array (
          'name' => 'account_type',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_TYPE',
        ),
        13 => 
        array (
          'name' => 'industry',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_INDUSTRY',
        ),
        14 => 
        array (
          'name' => 'phone_fax',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_PHONE_FAX',
        ),
        15 => 
        array (
          'name' => 'billing_address_street',
          'default' => false,
          'enabled' => true,
          'width' => '15%',
          'label' => 'LBL_BILLING_ADDRESS_STREET',
        ),
        16 => 
        array (
          'name' => 'annual_revenue',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_ANNUAL_REVENUE',
        ),
        17 => 
        array (
          'name' => 'employees',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_EMPLOYEES',
        ),
        18 => 
        array (
          'name' => 'billing_address_country',
          'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
          'enabled' => true,
          'default' => false,
          'width' => '10%',
        ),
        19 => 
        array (
          'name' => 'billing_address_postalcode',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
        ),
        20 => 
        array (
          'name' => 'shipping_address_city',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_SHIPPING_ADDRESS_CITY',
        ),
        21 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_LIST_ASSIGNED_USER',
          'id' => 'ASSIGNED_USER_ID',
          'enabled' => true,
          'default' => false,
          'width' => '10%',
        ),
        22 => 
        array (
          'name' => 'shipping_address_state',
          'default' => false,
          'enabled' => true,
          'width' => '7%',
          'label' => 'LBL_SHIPPING_ADDRESS_STATE',
        ),
        23 => 
        array (
          'name' => 'shipping_address_postalcode',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_SHIPPING_ADDRESS_POSTALCODE',
        ),
        24 => 
        array (
          'name' => 'shipping_address_country',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
        ),
        25 => 
        array (
          'name' => 'rating',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_RATING',
        ),
        26 => 
        array (
          'name' => 'phone_alternate',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_OTHER_PHONE',
        ),
        27 => 
        array (
          'name' => 'ownership',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_OWNERSHIP',
        ),
        28 => 
        array (
          'name' => 'sic_code',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_SIC_CODE',
        ),
        29 => 
        array (
          'name' => 'ticker_symbol',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_TICKER_SYMBOL',
        ),
        30 => 
        array (
          'name' => 'date_modified',
          'enabled' => true,
          'default' => false,
          'width' => '5%',
          'label' => 'LBL_DATE_MODIFIED',
        ),
        31 => 
        array (
          'name' => 'created_by_name',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_CREATED',
        ),
        32 => 
        array (
          'name' => 'modified_by_name',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_MODIFIED',
        ),
        33 => 
        array (
          'name' => 'email',
          'label' => 'LBL_EMAIL_ADDRESS',
          'enabled' => true,
          'default' => false,
          'width' => '15%',
          'sortable' => false,
          'link' => true,
          'customCode' => '{$EMAIL_LINK}{$EMAIL}</a>',
        ),
      ),
    ),
  ),
);
