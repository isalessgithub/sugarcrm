<?php
// created: 2012-11-06 11:36:32
$dictionary["Quote"]["fields"]["esb_qb_transactions_quotes"] = array (
  'name' => 'esb_qb_transactions_quotes',
  'type' => 'link',
  'relationship' => 'esb_qb_transactions_quotes',
  'source' => 'non-db',
  'vname' => 'LBL_ESB_QB_TRANSACTIONS_QUOTES_FROM_ESB_QB_TRANSACTIONS_TITLE',
  'id_name' => 'esb_qb_transactions_quotesesb_qb_transactions_ida',
);
$dictionary["Quote"]["fields"]["esb_qb_transactions_quotes_name"]=array (
  'name' => 'esb_qb_transactions_quotes_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ESB_QB_TRANSACTIONS_QUOTES_FROM_ESB_QB_TRANSACTIONS_TITLE',
  'save' => true,
  'id_name' => 'esb_qb_transactions_quotesesb_qb_transactions_ida',
  'link' => 'esb_qb_transactions_quotes',
  'table' => 'esb_qb_transactions',
  'module' => 'esb_QB_Transactions',
  'rname' => 'name',
);

$dictionary["Quote"]["fields"]["esb_qb_transactions_quotesesb_qb_transactions_ida"]=array (
  'name' => 'esb_qb_transactions_quotesesb_qb_transactions_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ESB_QB_TRANSACTIONS_QUOTES_FROM_ESB_QB_TRANSACTIONS_TITLE',
  'id_name' => 'esb_qb_transactions_quotesesb_qb_transactions_ida',
  'link' => 'esb_qb_transactions_quotes',
  'table' => 'esb_qb_transactions',
  'module' => 'esb_QB_Transactions',
  'rname' => 'id',
  'reportable' => false,
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
$dictionary["Quote"]["fields"]["esb_qb_transactions_quotes_right"]=array (
  'name' => 'esb_qb_transactions_quotes_right',
  'type' => 'link',
  'relationship' => 'esb_qb_transactions_quotes',
  'source' => 'non-db',
  'vname' => 'LBL_ESB_QB_TRANSACTIONS_QUOTES_FROM_ESB_QB_TRANSACTIONS_TITLE',
  'id_name' => '_idb',
  'side' => 'right',
  'link-type' => 'many',
);

