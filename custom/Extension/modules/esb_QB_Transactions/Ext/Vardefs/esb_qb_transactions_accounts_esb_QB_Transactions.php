<?php
// created: 2012-11-06 11:36:32
$dictionary["esb_QB_Transactions"]["fields"]["esb_qb_transactions_accounts"] = array (
  'name' => 'esb_qb_transactions_accounts',
  'type' => 'link',
  'relationship' => 'esb_qb_transactions_accounts',
  'source' => 'non-db',
  'vname' => 'LBL_ESB_QB_TRANSACTIONS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'esb_qb_transactions_accountsaccounts_ida',
);
$dictionary["esb_QB_Transactions"]["fields"]["esb_qb_transactions_accounts_name"] = array (
  'name' => 'esb_qb_transactions_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ESB_QB_TRANSACTIONS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'esb_qb_transactions_accountsaccounts_ida',
  'link' => 'esb_qb_transactions_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["esb_QB_Transactions"]["fields"]["esb_qb_transactions_accountsaccounts_ida"] = array (
  'name' => 'esb_qb_transactions_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'esb_qb_transactions_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ESB_QB_TRANSACTIONS_ACCOUNTS_FROM_ESB_QB_TRANSACTIONS_TITLE',
);
