<?php
$viewdefs['Users'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
      'form' => 
      array (
        'headerTpl' => 'modules/Users/tpls/EditViewHeader.tpl',
        'footerTpl' => 'modules/Users/tpls/EditViewFooter.tpl',
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_USER_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EMPLOYEE_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'LBL_USER_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'user_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'full_name',
            'studio' => 
            array (
              'formula' => false,
            ),
            'label' => 'LBL_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'UserType',
            'customCode' => '{if $IS_ADMIN}{$USER_TYPE_DROPDOWN}{else}{$USER_TYPE_READONLY}{/if}',
          ),
          1 => 
          array (
            'name' => 'status',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
      ),
      'LBL_EMPLOYEE_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 'first_name',
          1 => 'last_name',
        ),
        1 => 
        array (
          0 => 'title',
          1 => 
          array (
            'name' => 'business_unit_c',
            'label' => 'LBL_BUSINESS_UNIT',
          ),
        ),
        2 => 
        array (
          0 => 'employee_status',
          1 => 'show_on_employees',
        ),
        3 => 
        array (
          0 => 'phone_work',
          1 => 'phone_mobile',
        ),
        4 => 
        array (
          0 => 'phone_other',
          1 => 'phone_home',
        ),
        5 => 
        array (
          0 => 'address_street',
          1 => 'address_city',
        ),
        6 => 
        array (
          0 => 'address_state',
          1 => 'address_postalcode',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'last_login',
            'readonly' => true,
            'label' => 'LBL_LAST_LOGIN',
          ),
          1 => 
          array (
            'name' => 'created_by_name',
            'studio' => 
            array (
              'related' => false,
              'formula' => false,
              'rollup' => false,
            ),
            'readonly' => true,
            'label' => 'LBL_CREATED_BY_NAME',
          ),
        ),
        8 => 
        array (
          0 => 'description',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'cpa_count_c',
            'label' => 'LBL_CPA_COUNT',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
