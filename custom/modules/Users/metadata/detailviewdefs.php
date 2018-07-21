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
          0 => 
          array (
            'name' => 'iss_title_c',
            'label' => 'LBL_ISS_TITLE',
          ),
          1 => 
          array (
            'name' => 'bu_team_c',
            'label' => 'LBL_BU_TEAM',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'direct_report_c',
            'studio' => 'visible',
            'label' => 'LBL_DIRECT_REPORT',
          ),
          1 => 'department',
        ),
        3 => 
        array (
          0 => 'title',
          1 => '',
        ),
        4 => 
        array (
          0 => 'employee_status',
          1 => 'show_on_employees',
        ),
        5 => 
        array (
          0 => 'phone_work',
          1 => 'phone_mobile',
        ),
        6 => 
        array (
          0 => 'phone_other',
          1 => 'phone_home',
        ),
        7 => 
        array (
          0 => 'address_street',
          1 => 'address_city',
        ),
        8 => 
        array (
          0 => 'address_state',
          1 => 'address_postalcode',
        ),
        9 => 
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
        10 => 
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
