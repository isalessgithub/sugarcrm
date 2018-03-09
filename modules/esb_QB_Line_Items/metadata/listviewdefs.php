<?php
// created: 2018-03-09 13:26:31
$listViewDefs['esb_QB_Line_Items'] = array (
  'NAME' => 
  array (
    'width' => '32',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ITEM_TYPE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ITEM_TYPE',
    'width' => '10',
    'default' => true,
  ),
  'UNIT_PRICE' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_UNIT_PRICE',
    'currency_format' => true,
    'width' => '10',
    'default' => true,
  ),
  'QUANTITY' => 
  array (
    'type' => 'int',
    'label' => 'LBL_QUANTITY',
    'width' => '10',
    'default' => true,
  ),
  'AMOUNT' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_AMOUNT',
    'currency_format' => true,
    'width' => '10',
    'default' => true,
  ),
  'TAXABLE' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_TAXABLE',
    'width' => '10',
  ),
  'ESB_QB_LINE_ITEMS_ESB_QB_TRANSACTIONS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ESB_QB_LINE_ITEMS_ESB_QB_TRANSACTIONS_FROM_ESB_QB_TRANSACTIONS_TITLE',
    'id' => 'ESB_QB_LINE_ITEMS_ESB_QB_TRANSACTIONSESB_QB_TRANSACTIONS_IDA',
    'width' => '10',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
);