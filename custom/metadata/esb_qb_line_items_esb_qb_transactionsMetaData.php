<?php
// created: 2018-03-09 13:24:25
$dictionary['esb_qb_line_items_esb_qb_transactions'] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'esb_qb_line_items_esb_qb_transactions' => 
    array (
      'lhs_module' => 'esb_QB_Transactions',
      'lhs_table' => 'esb_qb_transactions',
      'lhs_key' => 'id',
      'rhs_module' => 'esb_QB_Line_Items',
      'rhs_table' => 'esb_qb_line_items',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'esb_qb_line_items_esb_qb_transactions_c',
      'join_key_lhs' => 'esb_qb_line_items_esb_qb_transactionsesb_qb_transactions_ida',
      'join_key_rhs' => 'esb_qb_line_items_esb_qb_transactionsesb_qb_line_items_idb',
    ),
  ),
  'table' => 'esb_qb_line_items_esb_qb_transactions_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    'esb_qb_line_items_esb_qb_transactionsesb_qb_transactions_ida' => 
    array (
      'name' => 'esb_qb_line_items_esb_qb_transactionsesb_qb_transactions_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    'esb_qb_line_items_esb_qb_transactionsesb_qb_line_items_idb' => 
    array (
      'name' => 'esb_qb_line_items_esb_qb_transactionsesb_qb_line_items_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'esb_qb_line_items_esb_qb_transactionsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'esb_qb_line_items_esb_qb_transactions_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'esb_qb_line_items_esb_qb_transactionsesb_qb_transactions_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'esb_qb_line_items_esb_qb_transactions_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'esb_qb_line_items_esb_qb_transactionsesb_qb_line_items_idb',
      ),
    ),
  ),
);