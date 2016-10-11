<?php
$viewdefs['Accounts'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
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
                'width' => 'xlarge',
              ),
              1 => 
              array (
                'name' => 'phone_office',
                'label' => 'LBL_LIST_PHONE',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'website',
                'default' => true,
                'enabled' => true,
                'label' => 'LBL_WEBSITE',
              ),
              3 => 
              array (
                'name' => 'billing_address_city',
                'label' => 'LBL_LIST_CITY',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'billing_address_state',
                'default' => true,
                'enabled' => true,
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
              ),
              6 => 
              array (
                'name' => 'employees_range_c',
                'default' => true,
                'enabled' => true,
                'type' => 'enum',
                'studio' => 'visible',
                'label' => 'LBL_EMPLOYEES_RANGE',
              ),
              7 => 
              array (
                'name' => 'contact_count_c',
                'default' => true,
                'enabled' => true,
                'type' => 'int',
                'label' => 'LBL_CONTACT_COUNT',
              ),
              8 => 
              array (
                'name' => 'date_entered',
                'type' => 'datetime',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'default' => true,
                'readonly' => true,
              ),
              9 => 
              array (
                'name' => 'et_telesales',
                'label' => 'LBL_ET_TELESALES_DISPOSITION',
                'enabled' => true,
                'readonly' => true,
                'default' => true,
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
              ),
              11 => 
              array (
                'name' => 'team_name',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_LIST_TEAM',
              ),
              12 => 
              array (
                'name' => 'account_type',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_TYPE',
              ),
              13 => 
              array (
                'name' => 'industry',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_INDUSTRY',
              ),
              14 => 
              array (
                'name' => 'phone_fax',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_PHONE_FAX',
              ),
              15 => 
              array (
                'name' => 'billing_address_street',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_BILLING_ADDRESS_STREET',
              ),
              16 => 
              array (
                'name' => 'annual_revenue',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_ANNUAL_REVENUE',
              ),
              17 => 
              array (
                'name' => 'employees',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_EMPLOYEES',
              ),
              18 => 
              array (
                'name' => 'billing_address_country',
                'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
                'enabled' => true,
                'default' => false,
              ),
              19 => 
              array (
                'name' => 'billing_address_postalcode',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
              ),
              20 => 
              array (
                'name' => 'shipping_address_city',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_SHIPPING_ADDRESS_CITY',
              ),
              21 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_LIST_ASSIGNED_USER',
                'id' => 'ASSIGNED_USER_ID',
                'enabled' => true,
                'default' => false,
              ),
              22 => 
              array (
                'name' => 'shipping_address_state',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_SHIPPING_ADDRESS_STATE',
              ),
              23 => 
              array (
                'name' => 'log_call_c',
                'default' => false,
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
              ),
              24 => 
              array (
                'name' => 'shipping_address_postalcode',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_SHIPPING_ADDRESS_POSTALCODE',
              ),
              25 => 
              array (
                'name' => 'shipping_address_country',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
              ),
              26 => 
              array (
                'name' => 'rating',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_RATING',
              ),
              27 => 
              array (
                'name' => 'phone_alternate',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_OTHER_PHONE',
              ),
              28 => 
              array (
                'name' => 'ownership',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_OWNERSHIP',
              ),
              29 => 
              array (
                'name' => 'sic_code',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_SIC_CODE',
              ),
              30 => 
              array (
                'name' => 'ticker_symbol',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_TICKER_SYMBOL',
              ),
              31 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => false,
                'label' => 'LBL_DATE_MODIFIED',
              ),
              32 => 
              array (
                'name' => 'created_by_name',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_CREATED',
              ),
              33 => 
              array (
                'name' => 'modified_by_name',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_MODIFIED',
              ),
              34 => 
              array (
                'name' => 'email',
                'label' => 'LBL_EMAIL_ADDRESS',
                'enabled' => true,
                'default' => false,
                'sortable' => false,
                'link' => true,
                'customCode' => '{$EMAIL_LINK}{$EMAIL}</a>',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
