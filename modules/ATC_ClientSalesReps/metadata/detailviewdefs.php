<?php
// created: 2016-10-06 15:20:10
$viewdefs['ATC_ClientSalesReps']['DetailView'] = array (
  'templateMeta' => 
  array (
    'form' => 
    array (
      'buttons' => 
      array (
        0 => 'EDIT',
        1 => 'DUPLICATE',
        2 => 'DELETE',
        3 => 'FIND_DUPLICATES',
      ),
    ),
    'useTabs' => true,
    'maxColumns' => '2',
    'widths' => 
    array (
      0 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
      1 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
    ),
    'tabDefs' => 
    array (
      'DEFAULT' => 
      array (
        'newTab' => true,
        'panelDefault' => 'expanded',
      ),
    ),
  ),
  'panels' => 
  array (
    'default' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'full_name',
          'label' => 'LBL_NAME',
        ),
        1 => 
        array (
          'name' => 'phone_work',
        ),
      ),
      1 => 
      array (
        0 => 'title',
        1 => 
        array (
          'name' => 'phone_mobile',
        ),
      ),
      2 => 
      array (
        0 => 'department',
        1 => 
        array (
          'name' => 'phone_home',
          'label' => 'LBL_HOME_PHONE',
        ),
      ),
      3 => 
      array (
        1 => 
        array (
          'name' => 'phone_other',
          'label' => 'LBL_OTHER_PHONE',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'date_entered',
          'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
          'label' => 'LBL_DATE_ENTERED',
        ),
        1 => 
        array (
          'name' => 'phone_fax',
          'label' => 'LBL_FAX_PHONE',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'date_modified',
          'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
          'label' => 'LBL_DATE_MODIFIED',
        ),
        1 => 'do_not_call',
      ),
      6 => 
      array (
        0 => 'assigned_user_name',
      ),
      7 => 
      array (
        0 => 'team_name',
        1 => 'email1',
      ),
      8 => 
      array (
        0 => 
        array (
          'name' => 'primary_address_street',
          'label' => 'LBL_PRIMARY_ADDRESS',
          'type' => 'address',
          'displayParams' => 
          array (
            'key' => 'primary',
          ),
        ),
        1 => 
        array (
          'name' => 'alt_address_street',
          'label' => 'LBL_ALT_ADDRESS',
          'type' => 'address',
          'displayParams' => 
          array (
            'key' => 'alt',
          ),
        ),
      ),
      9 => 
      array (
        0 => 'description',
        1 => 
        array (
          'name' => 'atc_clients_atc_clientsalesreps_name',
        ),
      ),
    ),
  ),
);