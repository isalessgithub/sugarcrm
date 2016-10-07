<?php
// created: 2016-10-07 10:01:06
$viewdefs['Contacts']['base']['view']['list'] = array (
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
          'css_class' => 'full-name',
          'label' => 'LBL_LIST_NAME',
          'enabled' => true,
          'default' => true,
        ),
        1 => 
        array (
          'name' => 'title',
          'enabled' => true,
          'default' => true,
          'width' => '15%',
          'label' => 'LBL_LIST_TITLE',
        ),
        2 => 
        array (
          'name' => 'account_name',
          'enabled' => true,
          'default' => true,
          'width' => '34%',
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
          'name' => 'contact_count_c',
          'default' => true,
          'enabled' => true,
          'type' => 'int',
          'label' => 'LBL_CONTACT_COUNT',
          'width' => '10%',
        ),
        4 => 
        array (
          'name' => 'phone_work',
          'enabled' => true,
          'default' => true,
          'width' => '15%',
          'label' => 'LBL_OFFICE_PHONE',
        ),
        5 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_LIST_ASSIGNED_USER',
          'id' => 'ASSIGNED_USER_ID',
          'enabled' => true,
          'default' => true,
          'width' => '10%',
        ),
        6 => 
        array (
          'name' => 'date_entered',
          'enabled' => true,
          'default' => true,
          'readonly' => true,
          'width' => '10%',
          'label' => 'LBL_DATE_ENTERED',
        ),
        7 => 
        array (
          'name' => 'log_call_c',
          'default' => true,
          'enabled' => true,
          'type' => 'non-db',
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
          'width' => '10%',
        ),
        8 => 
        array (
          'name' => 'department',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_DEPARTMENT',
        ),
        9 => 
        array (
          'name' => 'do_not_call',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_DO_NOT_CALL',
        ),
        10 => 
        array (
          'name' => 'phone_home',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_HOME_PHONE',
        ),
        11 => 
        array (
          'name' => 'phone_mobile',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_MOBILE_PHONE',
        ),
        12 => 
        array (
          'name' => 'phone_other',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_OTHER_PHONE',
        ),
        13 => 
        array (
          'name' => 'phone_fax',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_FAX_PHONE',
        ),
        14 => 
        array (
          'name' => 'primary_address_street',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_PRIMARY_ADDRESS_STREET',
        ),
        15 => 
        array (
          'name' => 'primary_address_city',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_PRIMARY_ADDRESS_CITY',
        ),
        16 => 
        array (
          'name' => 'primary_address_state',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_PRIMARY_ADDRESS_STATE',
        ),
        17 => 
        array (
          'name' => 'primary_address_postalcode',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
        ),
        18 => 
        array (
          'name' => 'alt_address_country',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_ALT_ADDRESS_COUNTRY',
        ),
        19 => 
        array (
          'name' => 'alt_address_street',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_ALT_ADDRESS_STREET',
        ),
        20 => 
        array (
          'name' => 'alt_address_city',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_ALT_ADDRESS_CITY',
        ),
        21 => 
        array (
          'name' => 'alt_address_state',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_ALT_ADDRESS_STATE',
        ),
        22 => 
        array (
          'name' => 'alt_address_postalcode',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_ALT_ADDRESS_POSTALCODE',
        ),
        23 => 
        array (
          'name' => 'created_by_name',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_CREATED',
        ),
        24 => 
        array (
          'name' => 'team_name',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_LIST_TEAM',
        ),
        25 => 
        array (
          'name' => 'modified_by_name',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_MODIFIED',
        ),
        26 => 
        array (
          'name' => 'sync_contact',
          'default' => false,
          'enabled' => true,
          'type' => 'bool',
          'label' => 'LBL_SYNC_CONTACT',
          'width' => '10%',
          'sortable' => false,
        ),
        27 => 
        array (
          'name' => 'email',
          'enabled' => true,
          'default' => false,
          'width' => '15%',
          'label' => 'LBL_LIST_EMAIL_ADDRESS',
          'sortable' => false,
          'link' => true,
          'customCode' => '{$EMAIL_LINK}{$EMAIL}</a>',
        ),
        28 => 
        array (
          'name' => 'primary_address_country',
          'default' => false,
          'enabled' => true,
          'width' => '10',
          'label' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
        ),
      ),
    ),
  ),
);