<?php
$module_name = 'ATC_Clients';
$_object_name = 'atc_clients';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL1' => 
        array (
          'newTab' => false,
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
          0 => 'name',
          1 => 'phone_office',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'website',
            'type' => 'link',
          ),
          1 => 'phone_fax',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'phone_alternate',
            'label' => 'LBL_OTHER_PHONE',
          ),
        ),
        3 => 
        array (
          0 => 'employees',
        ),
        4 => 
        array (
          0 => 'ownership',
          1 => 'rating',
        ),
        5 => 
        array (
          0 => 'industry',
        ),
        6 => 
        array (
          0 => 'atc_clients_type',
          1 => 'annual_revenue',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'date_modified',
            'label' => 'LBL_DATE_MODIFIED',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
          ),
          1 => 'team_name',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
          1 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_street',
            'label' => 'LBL_BILLING_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
            ),
          ),
          1 => 
          array (
            'name' => 'shipping_address_street',
            'label' => 'LBL_SHIPPING_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'shipping',
            ),
          ),
        ),
        10 => 
        array (
          0 => 'description',
        ),
        11 => 
        array (
          0 => 'email1',
          1 => 
          array (
            'name' => 'users_atc_clients_1_name',
          ),
        ),
      ),
      'lbl_detailview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'esb_acctnum_c',
            'label' => 'LBL_ESB_ACCTNUM',
          ),
          1 => 
          array (
            'name' => 'esb_balance_c',
            'label' => 'LBL_ESB_BALANCE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'esb_terms_c',
            'label' => 'LBL_ESB_TERMS',
          ),
          1 => 
          array (
            'name' => 'esb_days_outstanding_c',
            'label' => 'LBL_ESB_DAYS_OUTSTANDING',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'esb_listid_c',
            'label' => 'LBL_ESB_LISTID',
          ),
          1 => 
          array (
            'name' => 'esb_last_sync_c',
            'label' => 'LBL_ESB_LAST_SYNC',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'esb_sync_c',
            'label' => 'LBL_ESB_SYNC',
          ),
        ),
      ),
    ),
  ),
);
?>
