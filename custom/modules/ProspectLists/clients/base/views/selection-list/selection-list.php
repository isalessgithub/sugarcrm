<?php
$viewdefs['ProspectLists'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'selection-list' => 
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
                'label' => 'LBL_LIST_PROSPECT_LIST_NAME',
                'link' => true,
                'enabled' => true,
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'account_total_c',
                'label' => 'LBL_ACCOUNT_TOTAL',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'description',
                'label' => 'LBL_LIST_DESCRIPTION',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_LIST_ASSIGNED_USER',
                'id' => 'ASSIGNED_USER_ID',
                'enabled' => true,
                'default' => true,
                'sortable' => false,
              ),
              4 => 
              array (
                'name' => 'date_entered',
                'type' => 'datetime',
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
