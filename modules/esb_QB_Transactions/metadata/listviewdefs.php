<?php
// created: 2018-03-09 13:26:31
$listViewDefs['esb_QB_Transactions'] = array (
  'TXN_TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TXN_TYPE',
    'width' => '10',
  ),
  'ESB_QB_TRANSACTIONS_ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ESB_QB_TRANSACTIONS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'ESB_QB_TRANSACTIONS_ACCOUNTSACCOUNTS_IDA',
    'width' => '10',
    'default' => true,
  ),
  'TXN_NUM' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TXN_NUM',
    'width' => '10',
    'default' => true,
  ),
  'TXN_DATE' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_TXN_DATE',
    'width' => '10',
    'default' => true,
  ),
  'TXN_GRAND_TOTAL' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_TXN_GRAND_TOTAL',
    'currency_format' => true,
    'width' => '10',
    'default' => true,
  ),
  'TXN_AMOUNT_OUTSTANDING' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_TXN_AMOUNT_OUTSTANDING',
    'currency_format' => true,
    'width' => '10',
    'default' => true,
  ),
  'TXN_DUE_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_TXN_DUE_DATE',
    'width' => '10',
    'default' => true,
  ),
  'TXN_STATUS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TXN_STATUS',
    'width' => '10',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32',
    'label' => 'LBL_NAME',
    'default' => false,
    'link' => true,
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