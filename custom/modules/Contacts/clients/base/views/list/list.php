<?php
$viewdefs['Contacts'] = 
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
                'name' => 'title',
                'enabled' => true,
                'default' => true,
                'label' => 'LBL_LIST_TITLE',
              ),
              2 => 
              array (
                'name' => 'account_name',
                'enabled' => true,
                'default' => true,
                'label' => 'LBL_LIST_ACCOUNT_NAME',
                'id' => 'ACCOUNT_ID',
                'link' => true,
                'contextMenu' => 
                array (
                  'objectType' => 'sugarAccount',
                  'metaData' => 
                  array (
                    'return_module' => 'Contacts',
                    'return_action' => 'ListView',
                    'module' => 'Accounts',
                    'parent_id' => '{$ACCOUNT_ID}',
                    'parent_name' => '{$ACCOUNT_NAME}',
                    'account_id' => '{$ACCOUNT_ID}',
                    'account_name' => '{$ACCOUNT_NAME}',
                  ),
                ),
                'sortable' => true,
                'ACLTag' => 'ACCOUNT',
                'related_fields' => 
                array (
                  0 => 'account_id',
                ),
              ),
              3 => 
              array (
                'name' => 'phone_other',
                'default' => true,
                'enabled' => true,
                'label' => 'LBL_OTHER_PHONE',
              ),
              4 => 
              array (
                'name' => 'phone_work',
                'enabled' => true,
                'default' => true,
                'label' => 'LBL_OFFICE_PHONE',
              ),
              5 => 
              array (
                'name' => 'email',
                'enabled' => true,
                'default' => true,
                'label' => 'LBL_LIST_EMAIL_ADDRESS',
                'sortable' => false,
                'link' => true,
                'customCode' => '{$EMAIL_LINK}{$EMAIL}</a>',
              ),
              6 => 
              array (
                'name' => 'date_entered',
                'enabled' => true,
                'default' => false,
                'readonly' => true,
              ),
              7 => 
              array (
                'name' => 'department',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_DEPARTMENT',
              ),
              8 => 
              array (
                'name' => 'do_not_call',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_DO_NOT_CALL',
              ),
              9 => 
              array (
                'name' => 'appointment_count_c',
                'label' => 'LBL_APPOINTMENT_COUNT',
                'enabled' => true,
                'default' => false,
              ),
              10 => 
              array (
                'name' => 'phone_home',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_HOME_PHONE',
              ),
              11 => 
              array (
                'name' => 'phone_mobile',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_MOBILE_PHONE',
              ),
              12 => 
              array (
                'name' => 'contact_count_c',
                'default' => false,
                'enabled' => true,
                'type' => 'int',
                'label' => 'LBL_CONTACT_COUNT',
              ),
              13 => 
              array (
                'name' => 'phone_fax',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_FAX_PHONE',
              ),
              14 => 
              array (
                'name' => 'primary_address_street',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_PRIMARY_ADDRESS_STREET',
              ),
              15 => 
              array (
                'name' => 'primary_address_city',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_PRIMARY_ADDRESS_CITY',
              ),
              16 => 
              array (
                'name' => 'primary_address_state',
                'default' => false,
                'enabled' => true,
                'label' => 'LBL_PRIMARY_ADDRESS_STATE',
              ),
              17 => 
              array (
                'name' => 'et_telesales',
                'label' => 'LBL_ET_TELESALES_DISPOSITION',
                'enabled' => true,
                'readonly' => true,
                'default' => false,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
