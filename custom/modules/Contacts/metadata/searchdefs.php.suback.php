<?php
// created: 2016-10-07 12:36:01
$searchdefs['Contacts'] = array (
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 
      array (
        'name' => 'search_name',
        'label' => 'LBL_NAME',
        'type' => 'name',
      ),
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
      ),
      2 => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 
      array (
        'name' => 'first_name',
        'default' => true,
        'width' => '10%',
      ),
      1 => 
      array (
        'name' => 'last_name',
        'default' => true,
        'width' => '10%',
      ),
      2 => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_CREATED',
        'width' => '10%',
        'default' => true,
        'name' => 'created_by',
      ),
      3 => 
      array (
        'name' => 'email',
        'label' => 'LBL_ANY_EMAIL',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      4 => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'email_and_name1',
      ),
      5 => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'title',
      ),
      6 => 
      array (
        'type' => 'phone',
        'label' => 'LBL_OTHER_PHONE',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_other',
      ),
      7 => 
      array (
        'type' => 'phone',
        'label' => 'LBL_OFFICE_PHONE',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_work',
      ),
      8 => 
      array (
        'name' => 'address_street',
        'label' => 'LBL_ANY_ADDRESS',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      9 => 
      array (
        'name' => 'address_city',
        'label' => 'LBL_CITY',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      10 => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CALL_OUTCOME',
        'width' => '10%',
        'name' => 'call_outcome_c',
      ),
      11 => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_REPORTS_TO',
        'id' => 'REPORTS_TO_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'report_to_name',
      ),
      12 => 
      array (
        'name' => 'account_name',
        'default' => true,
        'width' => '10%',
      ),
      13 => 
      array (
        'name' => 'address_state',
        'label' => 'LBL_STATE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      14 => 
      array (
        'name' => 'address_postalcode',
        'label' => 'LBL_POSTAL_CODE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      15 => 
      array (
        'name' => 'primary_address_country',
        'label' => 'LBL_COUNTRY',
        'type' => 'name',
        'options' => 'countries_dom',
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
);