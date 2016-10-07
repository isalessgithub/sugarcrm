<?php
$viewdefs['Opportunities']['base']['view']['list'] = array (
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
          'link' => true,
          'label' => 'LBL_LIST_OPPORTUNITY_NAME',
          'enabled' => true,
          'default' => true,
          'width' => '30%',
        ),
        1 => 
        array (
          'name' => 'account_name',
          'link' => true,
          'label' => 'LBL_LIST_ACCOUNT_NAME',
          'enabled' => true,
          'default' => true,
          'sortable' => true,
          'width' => '20%',
          'id' => 'ACCOUNT_ID',
          'ACLTag' => 'ACCOUNT',
          'contextMenu' => 
          array (
            'objectType' => 'sugarAccount',
            'metaData' => 
            array (
              'return_module' => 'Contacts',
              'return_action' => 'ListView',
              'module' => 'Accounts',
              'parent_id' => '{$ACCOUNT_ID}',
              'parent_name' => '{$ACCOUNT_NAME}',
              'account_id' => '{$ACCOUNT_ID}',
              'account_name' => '{$ACCOUNT_NAME}',
            ),
          ),
          'related_fields' => 
          array (
            0 => 'account_id',
          ),
        ),
        2 => 
        array (
          'name' => 'sale_type_c',
          'default' => true,
          'enabled' => true,
          'type' => 'enum',
          'studio' => 'visible',
          'label' => 'LBL_SALE_TYPE',
          'width' => '10%',
        ),
        3 => 
        array (
          'name' => 'sales_stage',
          'label' => 'LBL_LIST_SALES_STAGE',
          'enabled' => true,
          'default' => true,
          'width' => '10%',
        ),
        4 => 
        array (
          'name' => 'amount_usdollar',
          'default' => true,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_LIST_AMOUNT_USDOLLAR',
          'align' => 'right',
          'currency_format' => true,
        ),
        5 => 
        array (
          'name' => 'date_closed',
          'label' => 'LBL_DATE_CLOSED',
          'enabled' => true,
          'default' => true,
          'width' => '10',
        ),
        6 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_LIST_ASSIGNED_USER',
          'id' => 'ASSIGNED_USER_ID',
          'enabled' => true,
          'default' => true,
          'sortable' => true,
          'width' => '5%',
        ),
        7 => 
        array (
          'name' => 'date_entered',
          'label' => 'LBL_DATE_ENTERED',
          'enabled' => true,
          'default' => true,
          'readonly' => true,
          'width' => '10%',
        ),
        8 => 
        array (
          'name' => 'opportunity_type',
          'label' => 'LBL_TYPE',
          'enabled' => true,
          'default' => false,
          'width' => '15%',
        ),
        9 => 
        array (
          'name' => 'lead_source',
          'label' => 'LBL_LEAD_SOURCE',
          'enabled' => true,
          'default' => false,
          'width' => '15%',
        ),
        10 => 
        array (
          'name' => 'next_step',
          'label' => 'LBL_NEXT_STEP',
          'enabled' => true,
          'default' => false,
          'width' => '10%',
        ),
        11 => 
        array (
          'name' => 'probability',
          'label' => 'LBL_PROBABILITY',
          'enabled' => true,
          'default' => false,
          'width' => '10%',
        ),
        12 => 
        array (
          'name' => 'created_by_name',
          'label' => 'LBL_CREATED',
          'enabled' => true,
          'default' => false,
          'readonly' => true,
          'sortable' => true,
          'width' => '10%',
        ),
        13 => 
        array (
          'name' => 'team_name',
          'type' => 'teamset',
          'label' => 'LBL_LIST_TEAM',
          'enabled' => true,
          'default' => false,
          'width' => '5%',
        ),
        14 => 
        array (
          'name' => 'modified_by_name',
          'label' => 'LBL_MODIFIED',
          'enabled' => true,
          'default' => false,
          'readonly' => true,
          'sortable' => true,
          'width' => '5%',
        ),
      ),
    ),
  ),
);
