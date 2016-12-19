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
                'name' => 'billing_address_postalcode',
                'default' => true,
                'enabled' => true,
                'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
              ),
              6 => 
              array (
                'name' => 'billing_address_country',
                'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
                'enabled' => true,
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'revenue_range_c',
                'default' => true,
                'enabled' => true,
                'type' => 'enum',
                'studio' => 'visible',
                'label' => 'LBL_REVENUE_RANGE',
              ),
              8 => 
              array (
                'name' => 'employees_range_c',
                'default' => true,
                'enabled' => true,
                'type' => 'enum',
                'studio' => 'visible',
                'label' => 'LBL_EMPLOYEES_RANGE',
              ),
              9 => 
              array (
                'name' => 'contact_count_c',
                'default' => true,
                'enabled' => true,
                'type' => 'int',
                'label' => 'LBL_CONTACT_COUNT',
              ),
              10 => 
              array (
                'name' => 'date_entered',
                'type' => 'datetime',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'default' => true,
                'readonly' => true,
              ),
              11 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => true,
                'label' => 'LBL_DATE_MODIFIED',
              ),
              12 => 
              array (
                'name' => 'industry',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_INDUSTRY',
              ),
              13 => 
              array (
                'name' => 'parent_name',
                'default' => false,
                'enabled' => true,
                'type' => 'relate',
                'link' => true,
                'label' => 'LBL_MEMBER_OF',
                'id' => 'PARENT_ID',
              ),
              14 => 
              array (
                'name' => 'billing_address_street',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_BILLING_ADDRESS_STREET',
              ),
              15 => 
              array (
                'name' => 'team_name',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_LIST_TEAM',
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
                'name' => 'ownership',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_OWNERSHIP',
              ),
              19 => 
              array (
                'name' => 'created_by_name',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_CREATED',
              ),
              20 => 
              array (
                'name' => 'modified_by_name',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_MODIFIED',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
