<?php
// created: 2012-11-06 11:36:32
$dictionary["esb_QB_Transactions"]["fields"]["esb_qb_transactions_quotes"] = array (
  'name' => 'esb_qb_transactions_quotes',
  'type' => 'link',
  'relationship' => 'esb_qb_transactions_quotes',
  'source' => 'non-db',
  'vname' => 'LBL_ESB_QB_TRANSACTIONS_QUOTES_FROM_QUOTES_TITLE',
  'id_name' => 'esb_qb_transactions_quotesquotes_idb',
);
$dictionary["esb_QB_Transactions"]["fields"]["esb_qb_transactions_quotes_name"] = array (
  'name' => 'esb_qb_transactions_quotes_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ESB_QB_TRANSACTIONS_QUOTES_FROM_QUOTES_TITLE',
  'save' => true,
  'id_name' => 'esb_qb_transactions_quotesquotes_idb',
  'link' => 'esb_qb_transactions_quotes',
  'table' => 'quotes',
  'module' => 'Quotes',
  'rname' => 'name',
);
$dictionary["esb_QB_Transactions"]["fields"]["esb_qb_transactions_quotesquotes_idb"] = array (
  'name' => 'esb_qb_transactions_quotesquotes_idb',
  'type' => 'link',
  'relationship' => 'esb_qb_transactions_quotes',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ESB_QB_TRANSACTIONS_QUOTES_FROM_QUOTES_TITLE',
);
