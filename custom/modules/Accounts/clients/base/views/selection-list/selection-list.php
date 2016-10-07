<?php
$viewdefs['Accounts'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'selection-list' => 
      array (
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
                'link' => true,
                'label' => 'LBL_LIST_ACCOUNT_NAME',
                'enabled' => true,
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'billing_address_city',
                'label' => 'LBL_LIST_CITY',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'billing_address_country',
                'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'phone_office',
                'label' => 'LBL_LIST_PHONE',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_LIST_ASSIGNED_USER',
                'id' => 'ASSIGNED_USER_ID',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'email',
                'label' => 'LBL_EMAIL_ADDRESS',
                'enabled' => true,
                'default' => false,
              ),
              6 => 
              array (
                'name' => 'date_entered',
                'type' => 'datetime',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'default' => false,
                'readonly' => true,
              ),
              7 => 
              array (
                'type' => 'text',
                'label' => 'LBL_BILLING_ADDRESS_STREET',
                'default' => true,
                'enabled' => true,
                'name' => 'billing_address_street',
              ),
              8 => 
              array (
                'type' => 'varchar',
                'label' => 'LBL_BILLING_ADDRESS_STATE',
                'default' => true,
                'enabled' => true,
                'name' => 'billing_address_state',
              ),
              9 => 
              array (
                'type' => 'varchar',
                'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
                'default' => true,
                'enabled' => true,
                'name' => 'billing_address_postalcode',
              ),
              10 => 
              array (
                'type' => 'text',
                'label' => 'LBL_SHIPPING_ADDRESS_STREET',
                'default' => true,
                'enabled' => true,
                'name' => 'shipping_address_street',
              ),
              11 => 
              array (
                'type' => 'varchar',
                'label' => 'LBL_SHIPPING_ADDRESS_CITY',
                'default' => true,
                'enabled' => true,
                'name' => 'shipping_address_city',
              ),
              12 => 
              array (
                'type' => 'varchar',
                'label' => 'LBL_SHIPPING_ADDRESS_STATE',
                'default' => true,
                'enabled' => true,
                'name' => 'shipping_address_state',
              ),
              13 => 
              array (
                'type' => 'varchar',
                'label' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
                'default' => true,
                'enabled' => true,
                'name' => 'shipping_address_country',
              ),
              14 => 
              array (
                'type' => 'varchar',
                'label' => 'LBL_SHIPPING_ADDRESS_POSTALCODE',
                'default' => true,
                'enabled' => true,
                'name' => 'shipping_address_postalcode',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
