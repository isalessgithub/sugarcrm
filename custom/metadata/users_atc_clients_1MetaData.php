<?php
// created: 2018-03-09 13:24:25
$dictionary['users_atc_clients_1'] = array (
  'name' => 'users_atc_clients_1',
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'users_atc_clients_1' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ATC_Clients',
      'rhs_table' => 'atc_clients',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'users_atc_clients_1_c',
      'join_key_lhs' => 'users_atc_clients_1users_ida',
      'join_key_rhs' => 'users_atc_clients_1atc_clients_idb',
    ),
  ),
  'table' => 'users_atc_clients_1_c',
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
    'users_atc_clients_1users_ida' => 
    array (
      'name' => 'users_atc_clients_1users_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    'users_atc_clients_1atc_clients_idb' => 
    array (
      'name' => 'users_atc_clients_1atc_clients_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'users_atc_clients_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'users_atc_clients_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'users_atc_clients_1users_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'users_atc_clients_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'users_atc_clients_1atc_clients_idb',
      ),
    ),
  ),
  'lhs_module' => 'Users',
  'lhs_table' => 'users',
  'lhs_key' => 'id',
  'rhs_module' => 'Employees',
  'rhs_table' => 'atc_clients',
  'rhs_key' => 'id',
  'relationship_type' => 'many-to-many',
  'join_table' => 'users_atc_clients_1_c',
  'join_key_lhs' => 'users_atc_clients_1users_ida',
  'join_key_rhs' => 'users_atc_clients_1atc_clients_idb',
);