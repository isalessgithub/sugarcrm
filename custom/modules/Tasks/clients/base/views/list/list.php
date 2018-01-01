<?php
$viewdefs['Tasks'] = 
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
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'link' => true,
                'label' => 'LBL_LIST_SUBJECT',
                'enabled' => true,
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'proj_type_c',
                'label' => 'LBL_PROJ_TYPE',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'priority',
                'label' => 'LBL_PRIORITY',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'description',
                'label' => 'LBL_DESCRIPTION',
                'enabled' => true,
                'sortable' => false,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'created_by_name',
                'label' => 'LBL_CREATED',
                'enabled' => true,
                'readonly' => true,
                'id' => 'CREATED_BY',
                'link' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'date_entered',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'default' => true,
                'readonly' => true,
              ),
              6 => 
              array (
                'name' => 'parent_name',
                'label' => 'LBL_LIST_RELATED_TO',
                'dynamic_module' => 'PARENT_TYPE',
                'id' => 'PARENT_ID',
                'link' => true,
                'enabled' => true,
                'default' => false,
                'sortable' => false,
                'ACLTag' => 'PARENT',
                'related_fields' => 
                array (
                  0 => 'parent_id',
                  1 => 'parent_type',
                ),
              ),
              7 => 
              array (
                'name' => 'atc_appointments_tasks_1_name',
                'label' => 'LBL_ATC_APPOINTMENTS_TASKS_1_FROM_ATC_APPOINTMENTS_TITLE',
                'enabled' => true,
                'id' => 'ATC_APPOINTMENTS_TASKS_1ATC_APPOINTMENTS_IDA',
                'link' => true,
                'sortable' => false,
                'default' => false,
              ),
              8 => 
              array (
                'name' => 'proj_details_c',
                'label' => 'LBL_PROJ_DETAILS',
                'enabled' => true,
                'sortable' => false,
                'default' => false,
              ),
              9 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => false,
              ),
              10 => 
              array (
                'name' => 'assist_from_c',
                'label' => 'LBL_ASSIST_FROM',
                'enabled' => true,
                'id' => 'USER_ID1_C',
                'link' => true,
                'sortable' => false,
                'default' => false,
              ),
              11 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_LIST_TEAM',
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
