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
                'name' => 'start_date_c',
                'label' => 'LBL_START_DATE',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'priority',
                'label' => 'LBL_PRIORITY',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'description',
                'label' => 'LBL_DESCRIPTION',
                'enabled' => true,
                'sortable' => false,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'created_by_name',
                'label' => 'LBL_CREATED',
                'enabled' => true,
                'readonly' => true,
                'id' => 'CREATED_BY',
                'link' => true,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'date_entered',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'default' => true,
                'readonly' => true,
              ),
              7 => 
              array (
                'name' => 'prospect_name_c',
                'label' => 'LBL_PROSPECT_NAME',
                'enabled' => true,
                'id' => 'CONTACT_ID_C',
                'link' => true,
                'sortable' => false,
                'default' => false,
              ),
              8 => 
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
              9 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => false,
              ),
              10 => 
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
