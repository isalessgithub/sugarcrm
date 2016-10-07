<?php
// created: 2016-10-07 12:36:52
$viewdefs['Leads']['base']['view']['list'] = array (
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
          'name' => 'status',
          'label' => 'LBL_LIST_STATUS',
          'enabled' => true,
          'default' => true,
          'width' => '7%',
        ),
        2 => 
        array (
          'name' => 'account_name',
          'label' => 'LBL_LIST_ACCOUNT_NAME',
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'account_id',
          ),
          'width' => '15%',
        ),
        3 => 
        array (
          'name' => 'phone_work',
          'label' => 'LBL_LIST_PHONE',
          'enabled' => true,
          'default' => true,
          'width' => '15%',
        ),
        4 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_LIST_ASSIGNED_USER',
          'enabled' => true,
          'default' => true,
          'width' => '5%',
          'id' => 'ASSIGNED_USER_ID',
        ),
        5 => 
        array (
          'name' => 'date_entered',
          'label' => 'LBL_DATE_ENTERED',
          'enabled' => true,
          'default' => true,
          'readonly' => true,
          'width' => '10%',
        ),
        6 => 
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
          'width' => '10%',
        ),
        7 => 
        array (
          'name' => 'title',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_TITLE',
        ),
        8 => 
        array (
          'name' => 'refered_by',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_REFERED_BY',
        ),
        9 => 
        array (
          'name' => 'lead_source',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_LEAD_SOURCE',
        ),
        10 => 
        array (
          'name' => 'department',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_DEPARTMENT',
        ),
        11 => 
        array (
          'name' => 'do_not_call',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_DO_NOT_CALL',
        ),
        12 => 
        array (
          'name' => 'phone_home',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_HOME_PHONE',
        ),
        13 => 
        array (
          'name' => 'phone_mobile',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_MOBILE_PHONE',
        ),
        14 => 
        array (
          'name' => 'phone_other',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_OTHER_PHONE',
        ),
        15 => 
        array (
          'name' => 'phone_fax',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_FAX_PHONE',
        ),
        16 => 
        array (
          'name' => 'primary_address_country',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
        ),
        17 => 
        array (
          'name' => 'primary_address_street',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_PRIMARY_ADDRESS_STREET',
        ),
        18 => 
        array (
          'name' => 'primary_address_city',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_PRIMARY_ADDRESS_CITY',
        ),
        19 => 
        array (
          'name' => 'primary_address_state',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_PRIMARY_ADDRESS_STATE',
        ),
        20 => 
        array (
          'name' => 'primary_address_postalcode',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
        ),
        21 => 
        array (
          'name' => 'alt_address_country',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_ALT_ADDRESS_COUNTRY',
        ),
        22 => 
        array (
          'name' => 'alt_address_street',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_ALT_ADDRESS_STREET',
        ),
        23 => 
        array (
          'name' => 'alt_address_city',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_ALT_ADDRESS_CITY',
        ),
        24 => 
        array (
          'name' => 'alt_address_state',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_ALT_ADDRESS_STATE',
        ),
        25 => 
        array (
          'name' => 'alt_address_postalcode',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_ALT_ADDRESS_POSTALCODE',
        ),
        26 => 
        array (
          'name' => 'team_name',
          'default' => false,
          'enabled' => true,
          'width' => '5%',
          'label' => 'LBL_LIST_TEAM',
        ),
        27 => 
        array (
          'name' => 'modified_by_name',
          'default' => false,
          'enabled' => true,
          'width' => '5%',
          'label' => 'LBL_MODIFIED',
        ),
        28 => 
        array (
          'name' => 'email',
          'label' => 'LBL_LIST_EMAIL_ADDRESS',
          'enabled' => true,
          'default' => false,
          'width' => '16%',
          'sortable' => false,
          'customCode' => '{$EMAIL_LINK}{$EMAIL}</a>',
        ),
      ),
    ),
  ),
);