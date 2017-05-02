<?php
$viewdefs['Cases'] = 
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
                'name' => 'case_number',
                'label' => 'LBL_LIST_NUMBER',
                'default' => true,
                'enabled' => true,
                'readonly' => true,
              ),
              1 => 
              array (
                'name' => 'name',
                'label' => 'LBL_LIST_SUBJECT',
                'link' => true,
                'default' => true,
                'enabled' => true,
              ),
              2 => 
              array (
                'name' => 'priority',
                'label' => 'LBL_LIST_PRIORITY',
                'default' => true,
                'enabled' => true,
              ),
              3 => 
              array (
                'name' => 'status',
                'label' => 'LBL_STATUS',
                'default' => true,
                'enabled' => true,
              ),
              4 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'id' => 'ASSIGNED_USER_ID',
                'default' => true,
                'enabled' => true,
              ),
              5 => 
              array (
                'name' => 'date_entered',
                'label' => 'LBL_DATE_ENTERED',
                'default' => true,
                'enabled' => true,
                'readonly' => true,
              ),
              6 => 
              array (
                'name' => 'cases_atc_isscampaigns_1_name',
                'label' => 'LBL_CASES_ATC_ISSCAMPAIGNS_1_FROM_ATC_ISSCAMPAIGNS_TITLE',
                'enabled' => true,
                'id' => 'CASES_ATC_ISSCAMPAIGNS_1ATC_ISSCAMPAIGNS_IDB',
                'link' => true,
                'sortable' => false,
                'default' => false,
              ),
              7 => 
              array (
                'name' => 'cases_atc_clients_1_name',
                'label' => 'LBL_CASES_ATC_CLIENTS_1_FROM_ATC_CLIENTS_TITLE',
                'enabled' => true,
                'id' => 'CASES_ATC_CLIENTS_1ATC_CLIENTS_IDB',
                'link' => true,
                'sortable' => false,
                'default' => false,
              ),
              8 => 
              array (
                'name' => 'created_by_name',
                'label' => 'LBL_CREATED',
                'enabled' => true,
                'readonly' => true,
                'id' => 'CREATED_BY',
                'link' => true,
                'default' => false,
              ),
              9 => 
              array (
                'name' => 'date_modified',
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
