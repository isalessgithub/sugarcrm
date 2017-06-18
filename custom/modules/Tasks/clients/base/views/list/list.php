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
                'name' => 'priority',
                'label' => 'LBL_PRIORITY',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'status',
                'label' => 'LBL_LIST_STATUS',
                'link' => false,
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
                'id' => 'ASSIGNED_USER_ID',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'date_start',
                'label' => 'LBL_LIST_START_DATE',
                'css_class' => 'overflow-visible',
                'link' => false,
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'date_due',
                'label' => 'LBL_LIST_DUE_DATE',
                'type' => 'datetimecombo-colorcoded',
                'css_class' => 'overflow-visible',
                'completed_status_value' => 'Completed',
                'link' => false,
                'enabled' => true,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'tasktype_c',
                'label' => 'LBL_TASKTYPE',
                'enabled' => true,
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'user_director_c',
                'label' => 'LBL_USER_DIRECTOR',
                'enabled' => true,
                'id' => 'USER_ID_C',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'task_campaign_c',
                'label' => 'LBL_TASK_CAMPAIGN',
                'enabled' => true,
                'id' => 'ATC_ISSCAMPAIGNS_ID_C',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              9 => 
              array (
                'name' => 'description',
                'label' => 'LBL_DESCRIPTION',
                'enabled' => true,
                'sortable' => false,
                'default' => true,
              ),
              10 => 
              array (
                'name' => 'contact_name',
                'label' => 'LBL_LIST_CONTACT',
                'link' => true,
                'id' => 'CONTACT_ID',
                'module' => 'Contacts',
                'enabled' => true,
                'default' => false,
                'ACLTag' => 'CONTACT',
                'related_fields' => 
                array (
                  0 => 'contact_id',
                ),
              ),
              11 => 
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
              12 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => false,
              ),
              13 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_LIST_TEAM',
                'enabled' => true,
                'default' => false,
              ),
              14 => 
              array (
                'name' => 'created_by_name',
                'label' => 'LBL_CREATED',
                'enabled' => true,
                'readonly' => true,
                'id' => 'CREATED_BY',
                'link' => true,
                'default' => false,
              ),
              15 => 
              array (
                'name' => 'date_entered',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'default' => false,
                'readonly' => true,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
