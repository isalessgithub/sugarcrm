<?php
// created: 2012-11-06 11:36:32
$dictionary["esb_QB_Line_Items"]["fields"]["esb_qb_line_items_esb_qb_transactions"] = array (
  'name' => 'esb_qb_line_items_esb_qb_transactions',
  'type' => 'link',
  'relationship' => 'esb_qb_line_items_esb_qb_transactions',
  'source' => 'non-db',
  'vname' => 'LBL_ESB_QB_LINE_ITEMS_ESB_QB_TRANSACTIONS_FROM_ESB_QB_TRANSACTIONS_TITLE',
  'id_name' => 'esb_qb_line_items_esb_qb_transactionsesb_qb_transactions_ida',
);
$dictionary["esb_QB_Line_Items"]["fields"]["esb_qb_line_items_esb_qb_transactions_name"] = array (
  'name' => 'esb_qb_line_items_esb_qb_transactions_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ESB_QB_LINE_ITEMS_ESB_QB_TRANSACTIONS_FROM_ESB_QB_TRANSACTIONS_TITLE',
  'save' => true,
  'id_name' => 'esb_qb_line_items_esb_qb_transactionsesb_qb_transactions_ida',
  'link' => 'esb_qb_line_items_esb_qb_transactions',
  'table' => 'esb_qb_transactions',
  'module' => 'esb_QB_Transactions',
  'rname' => 'name',
);
$dictionary["esb_QB_Line_Items"]["fields"]["esb_qb_line_items_esb_qb_transactionsesb_qb_transactions_ida"] = array (
  'name' => 'esb_qb_line_items_esb_qb_transactionsesb_qb_transactions_ida',
  'type' => 'link',
  'relationship' => 'esb_qb_line_items_esb_qb_transactions',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ESB_QB_LINE_ITEMS_ESB_QB_TRANSACTIONS_FROM_ESB_QB_LINE_ITEMS_TITLE',
);
