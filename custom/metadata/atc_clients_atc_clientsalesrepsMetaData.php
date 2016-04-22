<?php
// created: 2013-08-06 14:59:59
$dictionary["atc_clients_atc_clientsalesreps"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'atc_clients_atc_clientsalesreps' => 
    array (
      'lhs_module' => 'ATC_Clients',
      'lhs_table' => 'atc_clients',
      'lhs_key' => 'id',
      'rhs_module' => 'ATC_ClientSalesReps',
      'rhs_table' => 'atc_clientsalesreps',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'atc_clients_atc_clientsalesreps_c',
      'join_key_lhs' => 'atc_clients_atc_clientsalesrepsatc_clients_ida',
      'join_key_rhs' => 'atc_clients_atc_clientsalesrepsatc_clientsalesreps_idb',
    ),
  ),
  'table' => 'atc_clients_atc_clientsalesreps_c',
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
      'name' => 'atc_clients_atc_clientsalesrepsatc_clients_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'atc_clients_atc_clientsalesrepsatc_clientsalesreps_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'atc_clients_atc_clientsalesrepsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'atc_clients_atc_clientsalesreps_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'atc_clients_atc_clientsalesrepsatc_clients_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'atc_clients_atc_clientsalesreps_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'atc_clients_atc_clientsalesrepsatc_clientsalesreps_idb',
      ),
    ),
  ),
);