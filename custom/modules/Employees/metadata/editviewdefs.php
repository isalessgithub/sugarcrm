<?php
$viewdefs['Employees'] = 
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
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
            'studio' => 
            array (
              'formula' => false,
            ),
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'picture',
            'label' => 'LBL_PICTURE_FILE',
          ),
        ),
        1 => 
        array (
          0 => 'title',
          1 => 'department',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'email',
            'label' => 'LBL_EMAIL',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 'reports_to_name',
          1 => 'employee_status',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'phone_work',
            'label' => 'LBL_OFFICE_PHONE',
          ),
          1 => 'phone_mobile',
        ),
        5 => 
        array (
          0 => 'phone_other',
          1 => 'phone_home',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'address_street',
            'type' => 'text',
            'label' => 'LBL_PRIMARY_ADDRESS',
            'displayParams' => 
            array (
              'rows' => 2,
              'cols' => 30,
            ),
          ),
          1 => 
          array (
            'name' => 'last_login',
            'readonly' => true,
            'label' => 'LBL_LAST_LOGIN',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_NOTES',
          ),
        ),
      ),
    ),
  ),
);
