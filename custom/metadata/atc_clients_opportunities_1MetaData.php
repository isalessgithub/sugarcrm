<?php
// created: 2018-03-09 13:24:25
$dictionary['atc_clients_opportunities_1'] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'atc_clients_opportunities_1' => 
    array (
      'lhs_module' => 'ATC_Clients',
      'lhs_table' => 'atc_clients',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'atc_clients_opportunities_1_c',
      'join_key_lhs' => 'atc_clients_opportunities_1atc_clients_ida',
      'join_key_rhs' => 'atc_clients_opportunities_1opportunities_idb',
    ),
  ),
  'table' => 'atc_clients_opportunities_1_c',
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
    'atc_clients_opportunities_1atc_clients_ida' => 
    array (
      'name' => 'atc_clients_opportunities_1atc_clients_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    'atc_clients_opportunities_1opportunities_idb' => 
    array (
      'name' => 'atc_clients_opportunities_1opportunities_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'atc_clients_opportunities_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'atc_clients_opportunities_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'atc_clients_opportunities_1atc_clients_ida',
        1 => 'atc_clients_opportunities_1opportunities_idb',
      ),
    ),
  ),
);