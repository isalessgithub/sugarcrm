<?php
$viewdefs['ATC_ClientSalesReps']['base']['view']['selection-list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PANEL_DEFAULT',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'default' => true,
          'enabled' => true,
          'width' => '20%',
          'label' => 'LBL_NAME',
          'link' => true,
          'orderBy' => 'last_name',
          'related_fields' => 
          array (
            0 => 'first_name',
            1 => 'last_name',
            2 => 'salutation',
          ),
        ),
        1 => 
        array (
          'name' => 'title',
          'label' => 'LBL_TITLE',
          'default' => true,
          'enabled' => true,
          'width' => '15%',
        ),
        2 => 
        array (
          'name' => 'phone_work',
          'label' => 'LBL_OFFICE_PHONE',
          'default' => true,
          'enabled' => true,
          'width' => '15%',
        ),
        3 => 
        array (
          'name' => 'do_not_call',
          'label' => 'LBL_DO_NOT_CALL',
          'default' => false,
          'enabled' => true,
          'width' => '10',
        ),
        4 => 
        array (
          'name' => 'phone_home',
          'label' => 'LBL_HOME_PHONE',
          'default' => false,
          'enabled' => true,
          'width' => '10',
        ),
        5 => 
        array (
          'name' => 'phone_mobile',
          'label' => 'LBL_MOBILE_PHONE',
          'default' => false,
          'enabled' => true,
          'width' => '10',
        ),
        6 => 
        array (
          'name' => 'phone_other',
          'label' => 'LBL_WORK_PHONE',
          'default' => false,
          'enabled' => true,
          'width' => '10',
        ),
        7 => 
        array (
          'name' => 'phone_fax',
          'label' => 'LBL_FAX_PHONE',
          'default' => false,
          'enabled' => true,
          'width' => '10',
        ),
        8 => 
        array (
          'name' => 'date_entered',
          'enabled' => true,
          'default' => false,
          'width' => '10',
          'label' => 'LBL_DATE_ENTERED',
        ),
        9 => 
        array (
          'name' => 'created_by_name',
          'label' => 'LBL_CREATED',
          'default' => false,
          'enabled' => true,
          'readonly' => true,
          'width' => '10',
        ),
        10 => 
        array (
          'name' => 'team_name',
          'label' => 'LBL_TEAM',
          'default' => false,
          'enabled' => true,
          'width' => '10',
        ),
      ),
    ),
  ),
);
