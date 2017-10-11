<?php
$viewdefs['Users'] = 
array (
  'DetailView' => 
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
        'headerTpl' => 'modules/Users/tpls/DetailViewHeader.tpl',
        'footerTpl' => 'modules/Users/tpls/DetailViewFooter.tpl',
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
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'LBL_USER_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 'user_name',
          1 => 'full_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'UserType',
            'customCode' => '{$USER_TYPE_READONLY}',
          ),
          1 => 'status',
        ),
      ),
      'LBL_EMPLOYEE_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'label' => 'LBL_FIRST_NAME',
          ),
          1 => 
          array (
            'name' => 'last_name',
            'label' => 'LBL_LAST_NAME',
          ),
        ),
        1 => 
        array (
          0 => 'employee_status',
          1 => 'show_on_employees',
        ),
        2 => 
        array (
          0 => 'title',
          1 => 'department',
        ),
        3 => 
        array (
          0 => 'reports_to_name',
          1 => '',
        ),
        4 => 
        array (
          0 => 'phone_work',
          1 => 'phone_mobile',
        ),
        5 => 
        array (
          0 => 'phone_other',
          1 => 'phone_home',
        ),
        6 => 
        array (
          0 => 'address_street',
          1 => 'address_city',
        ),
        7 => 
        array (
          0 => 'address_state',
          1 => 'address_postalcode',
        ),
        8 => 
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
        9 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
