<?php
// created: 2017-02-28 11:25:17
$viewdefs['Quotes']['base']['view']['selection-list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'label' => 'LBL_LIST_QUOTE_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
          'link' => true,
        ),
        1 => 
        array (
          'target_record_key' => 'account_id',
          'target_module' => 'Accounts',
          'label' => 'LBL_LIST_ACCOUNT_NAME',
          'enabled' => true,
          'default' => false,
          'name' => 'account_name',
          'sortable' => false,
        ),
        2 => 
        array (
          'label' => 'LBL_LIST_AMOUNT_USDOLLAR',
          'enabled' => true,
          'default' => false,
          'name' => 'total_usdollar',
        ),
        3 => 
        array (
          'name' => 'date_quote_expected_closed',
          'label' => 'LBL_LIST_DATE_QUOTE_EXPECTED_CLOSED',
          'enabled' => true,
          'default' => false,
        ),
        4 => 
        array (
          'name' => 'assigned_user_name',
          'target_record_key' => 'assigned_user_id',
          'target_module' => 'Employees',
          'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
          'enabled' => true,
          'default' => true,
          'sortable' => false,
        ),
        5 => 
        array (
          'type' => 'int',
          'readonly' => true,
          'label' => 'LBL_QUOTE_NUM',
          'default' => true,
          'enabled' => true,
          'name' => 'quote_num',
        ),
        6 => 
        array (
          'type' => 'enum',
          'label' => 'LBL_QUOTE_STAGE',
          'default' => true,
          'enabled' => true,
          'name' => 'quote_stage',
        ),
        7 => 
        array (
          'type' => 'relate',
          'link' => 'atc_clients_quotes_1',
          'label' => 'LBL_ATC_CLIENTS_QUOTES_1_FROM_ATC_CLIENTS_TITLE',
          'default' => true,
          'enabled' => true,
          'name' => 'atc_clients_quotes_1_name',
        ),
        8 => 
        array (
          'type' => 'relate',
          'link' => 'atc_clients_quotes_2',
          'label' => 'LBL_ATC_CLIENTS_QUOTES_2_FROM_ATC_CLIENTS_TITLE',
          'default' => true,
          'enabled' => true,
          'name' => 'atc_clients_quotes_2_name',
        ),
        9 => 
        array (
          'type' => 'varchar',
          'label' => 'LBL_PURCHASE_ORDER_NUM',
          'default' => true,
          'enabled' => true,
          'name' => 'purchase_order_num',
        ),
      ),
    ),
  ),
);