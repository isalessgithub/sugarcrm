<?php
$viewdefs['esb_QB_Line_Items']['base']['view']['selection-list'] = array (
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
          'label' => 'LBL_NAME',
          'default' => true,
          'enabled' => true,
          'link' => true,
          'width' => '32%',
        ),
        1 => 
        array (
          'name' => 'item_type',
          'default' => true,
          'enabled' => true,
          'type' => 'varchar',
          'label' => 'LBL_ITEM_TYPE',
          'width' => '10%',
        ),
        2 => 
        array (
          'name' => 'unit_price',
          'default' => true,
          'enabled' => true,
          'type' => 'currency',
          'label' => 'LBL_UNIT_PRICE',
          'currency_format' => true,
          'width' => '10%',
        ),
        3 => 
        array (
          'name' => 'quantity',
          'default' => true,
          'enabled' => true,
          'type' => 'int',
          'label' => 'LBL_QUANTITY',
          'width' => '10%',
        ),
        4 => 
        array (
          'name' => 'amount',
          'default' => true,
          'enabled' => true,
          'type' => 'currency',
          'label' => 'LBL_AMOUNT',
          'currency_format' => true,
          'width' => '10%',
        ),
        5 => 
        array (
          'name' => 'taxable',
          'default' => true,
          'enabled' => true,
          'type' => 'bool',
          'label' => 'LBL_TAXABLE',
          'width' => '10%',
        ),
        6 => 
        array (
          'name' => 'esb_qb_line_items_esb_qb_transactions_name',
          'default' => true,
          'enabled' => true,
          'type' => 'relate',
          'link' => true,
          'label' => 'LBL_ESB_QB_LINE_ITEMS_ESB_QB_TRANSACTIONS_FROM_ESB_QB_TRANSACTIONS_TITLE',
          'id' => 'ESB_QB_LINE_ITEMS_ESB_QB_TRANSACTIONSESB_QB_TRANSACTIONS_IDA',
          'width' => '10%',
        ),
        7 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO_NAME',
          'default' => false,
          'enabled' => true,
          'link' => true,
          'width' => '9%',
          'id' => 'ASSIGNED_USER_ID',
        ),
        8 => 
        array (
          'name' => 'team_name',
          'label' => 'LBL_TEAM',
          'default' => false,
          'enabled' => true,
          'width' => '9%',
        ),
      ),
    ),
  ),
);
