<?php
$viewdefs ['Accounts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
        ),
      ),
      'maxColumns' => '2',
      'useTabs' => true,
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
      ),
      'tabDefs' => 
      array (
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ADVANCED' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ASSIGNMENT' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_QUICKBOOKS_PLUGIN' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'phone_office',
            'label' => 'LBL_PHONE_OFFICE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'website',
            'type' => 'link',
            'label' => 'LBL_WEBSITE',
          ),
          1 => 
          array (
            'name' => 'phone_fax',
            'label' => 'LBL_FAX',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
          1 => 
          array (
            'name' => 'shipping_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'shipping',
              'copy' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL',
          ),
          1 => 
          array (
            'name' => 'add_to_target_list_c',
            'studio' => 'visible',
            'label' => 'LBL_ADD_TO_TARGET_LIST',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 'parent_name',
          1 => 'industry',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'sub_industry_1_c',
            'studio' => 'visible',
            'label' => 'LBL_SUB_INDUSTRY_1',
          ),
          1 => 'employees',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'employees_range_c',
            'studio' => 'visible',
            'label' => 'LBL_EMPLOYEES_RANGE',
          ),
          1 => 'annual_revenue',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'revenue_range_c',
            'studio' => 'visible',
            'label' => 'LBL_REVENUE_RANGE',
          ),
          1 => 
          array (
            'name' => 'contact_count_c',
            'label' => 'LBL_CONTACT_COUNT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'industry_2_c',
            'studio' => 'visible',
            'label' => 'LBL_INDUSTRY_2',
          ),
          1 => 
          array (
            'name' => 'sub_industry_2_c',
            'studio' => 'visible',
            'label' => 'LBL_SUB_INDUSTRY_2',
          ),
        ),
        5 => 
        array (
          0 => 'ticker_symbol',
          1 => 'ownership',
        ),
        6 => 
        array (
          0 => 'campaign_name',
          1 => 'rating',
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
          1 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'display' => true,
            ),
          ),
        ),
      ),
      'LBL_QUICKBOOKS_PLUGIN' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'esb_sync_c',
          ),
        ),
      ),
    ),
  ),
);
?>
