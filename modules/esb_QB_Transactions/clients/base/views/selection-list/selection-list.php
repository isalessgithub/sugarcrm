<?php
$viewdefs['esb_QB_Transactions']['base']['view']['selection-list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PANEL_DEFAULT',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'txn_type',
          'default' => true,
          'enabled' => true,
          'type' => 'enum',
          'studio' => 'visible',
          'label' => 'LBL_TXN_TYPE',
          'width' => '10%',
        ),
        1 => 
        array (
          'name' => 'esb_qb_transactions_accounts_name',
          'default' => true,
          'enabled' => true,
          'type' => 'relate',
          'link' => true,
          'label' => 'LBL_ESB_QB_TRANSACTIONS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
          'id' => 'ESB_QB_TRANSACTIONS_ACCOUNTSACCOUNTS_IDA',
          'width' => '10%',
        ),
        2 => 
        array (
          'name' => 'txn_num',
          'default' => true,
          'enabled' => true,
          'type' => 'varchar',
          'label' => 'LBL_TXN_NUM',
          'width' => '10%',
        ),
        3 => 
        array (
          'name' => 'txn_date',
          'default' => true,
          'enabled' => true,
          'type' => 'datetimecombo',
          'label' => 'LBL_TXN_DATE',
          'width' => '10%',
        ),
        4 => 
        array (
          'name' => 'txn_grand_total',
          'default' => true,
          'enabled' => true,
          'type' => 'currency',
          'label' => 'LBL_TXN_GRAND_TOTAL',
          'currency_format' => true,
          'width' => '10%',
        ),
        5 => 
        array (
          'name' => 'txn_amount_outstanding',
          'default' => true,
          'enabled' => true,
          'type' => 'currency',
          'label' => 'LBL_TXN_AMOUNT_OUTSTANDING',
          'currency_format' => true,
          'width' => '10%',
        ),
        6 => 
        array (
          'name' => 'txn_due_date',
          'default' => true,
          'enabled' => true,
          'type' => 'date',
          'label' => 'LBL_TXN_DUE_DATE',
          'width' => '10%',
        ),
        7 => 
        array (
          'name' => 'txn_status',
          'default' => true,
          'enabled' => true,
          'type' => 'varchar',
          'label' => 'LBL_TXN_STATUS',
          'width' => '10%',
        ),
        8 => 
        array (
          'name' => 'name',
          'label' => 'LBL_NAME',
          'default' => false,
          'enabled' => true,
          'link' => true,
          'width' => '32%',
        ),
        9 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO_NAME',
          'default' => false,
          'enabled' => true,
          'link' => true,
          'width' => '9%',
          'id' => 'ASSIGNED_USER_ID',
        ),
        10 => 
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
