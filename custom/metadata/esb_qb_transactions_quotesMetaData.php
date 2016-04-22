<?php
// created: 2012-11-06 11:36:32
$dictionary["esb_qb_transactions_quotes"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'esb_qb_transactions_quotes' => 
    array (
      'lhs_module' => 'esb_QB_Transactions',
      'lhs_table' => 'esb_qb_transactions',
      'lhs_key' => 'id',
      'rhs_module' => 'Quotes',
      'rhs_table' => 'quotes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'esb_qb_transactions_quotes_c',
      'join_key_lhs' => 'esb_qb_transactions_quotesesb_qb_transactions_ida',
      'join_key_rhs' => 'esb_qb_transactions_quotesquotes_idb',
    ),
  ),
  'table' => 'esb_qb_transactions_quotes_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'esb_qb_transactions_quotesesb_qb_transactions_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'esb_qb_transactions_quotesquotes_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'esb_qb_transactions_quotesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'esb_qb_transactions_quotes_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'esb_qb_transactions_quotesesb_qb_transactions_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'esb_qb_transactions_quotes_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'esb_qb_transactions_quotesquotes_idb',
      ),
    ),
  ),
);