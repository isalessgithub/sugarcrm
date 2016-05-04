<?php
// created: 2016-05-02 19:08:06
$dictionary["atc_clients_quotes_2"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'atc_clients_quotes_2' => 
    array (
      'lhs_module' => 'ATC_Clients',
      'lhs_table' => 'atc_clients',
      'lhs_key' => 'id',
      'rhs_module' => 'Quotes',
      'rhs_table' => 'quotes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'atc_clients_quotes_2_c',
      'join_key_lhs' => 'atc_clients_quotes_2atc_clients_ida',
      'join_key_rhs' => 'atc_clients_quotes_2quotes_idb',
    ),
  ),
  'table' => 'atc_clients_quotes_2_c',
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
      'name' => 'atc_clients_quotes_2atc_clients_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'atc_clients_quotes_2quotes_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'atc_clients_quotes_2spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'atc_clients_quotes_2_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'atc_clients_quotes_2atc_clients_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'atc_clients_quotes_2_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'atc_clients_quotes_2quotes_idb',
      ),
    ),
  ),
);