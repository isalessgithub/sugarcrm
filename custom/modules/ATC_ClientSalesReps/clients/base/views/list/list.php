<?php
$viewdefs['ATC_ClientSalesReps'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
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
                'name' => 'atc_clients_atc_clientsalesreps_name',
                'default' => true,
                'enabled' => true,
                'type' => 'relate',
                'link' => true,
                'label' => 'LBL_ATC_CLIENTS_ATC_CLIENTSALESREPS_FROM_ATC_CLIENTS_TITLE',
                'id' => 'ATC_CLIENTS_ATC_CLIENTSALESREPSATC_CLIENTS_IDA',
              ),
              2 => 
              array (
                'name' => 'email',
                'label' => 'LBL_ANY_EMAIL',
                'enabled' => true,
                'sortable' => false,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'phone_work',
                'label' => 'LBL_OFFICE_PHONE',
                'default' => true,
                'enabled' => true,
              ),
              4 => 
              array (
                'name' => 'date_entered',
                'enabled' => true,
                'default' => true,
                'label' => 'LBL_DATE_ENTERED',
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
                'name' => 'do_not_call',
                'label' => 'LBL_DO_NOT_CALL',
                'default' => false,
                'enabled' => true,
                'width' => '10',
              ),
              7 => 
              array (
                'name' => 'phone_home',
                'label' => 'LBL_HOME_PHONE',
                'default' => false,
                'enabled' => true,
                'width' => '10',
              ),
              8 => 
              array (
                'name' => 'phone_other',
                'label' => 'LBL_WORK_PHONE',
                'default' => false,
                'enabled' => true,
                'width' => '10',
              ),
              9 => 
              array (
                'name' => 'phone_fax',
                'label' => 'LBL_FAX_PHONE',
                'default' => false,
                'enabled' => true,
                'width' => '10',
              ),
              10 => 
              array (
                'name' => 'title',
                'label' => 'LBL_TITLE',
                'default' => false,
                'enabled' => true,
              ),
              11 => 
              array (
                'name' => 'created_by_name',
                'label' => 'LBL_CREATED',
                'default' => false,
                'enabled' => true,
                'readonly' => true,
                'width' => '10',
              ),
              12 => 
              array (
                'name' => 'date_modified',
                'label' => 'LBL_DATE_MODIFIED',
                'enabled' => true,
                'readonly' => true,
                'default' => false,
              ),
              13 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'default' => false,
                'enabled' => true,
                'width' => '10',
              ),
              14 => 
              array (
                'name' => 'netapp_area_c',
                'label' => 'LBL_NETAPP_AREA',
                'enabled' => true,
                'default' => false,
              ),
              15 => 
              array (
                'name' => 'reports_to_c',
                'label' => 'LBL_REPORTS_TO',
                'enabled' => true,
                'default' => false,
              ),
              16 => 
              array (
                'name' => 'netapp_district_c',
                'label' => 'LBL_NETAPP_DISTRICT',
                'enabled' => true,
                'default' => false,
              ),
              17 => 
              array (
                'name' => 'netapp_region_c',
                'label' => 'LBL_NETAPP_REGION',
                'enabled' => true,
                'default' => false,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
