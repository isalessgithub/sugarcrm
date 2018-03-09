<?php
// created: 2018-03-09 13:24:25
$dictionary['cp_client_users_atc_clients'] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'cp_client_users_atc_clients' => 
    array (
      'lhs_module' => 'CP_Client_Users',
      'lhs_table' => 'cp_client_users',
      'lhs_key' => 'id',
      'rhs_module' => 'ATC_Clients',
      'rhs_table' => 'atc_clients',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cp_client_users_atc_clients_c',
      'join_key_lhs' => 'cp_client_users_atc_clientscp_client_users_ida',
      'join_key_rhs' => 'cp_client_users_atc_clientsatc_clients_idb',
    ),
  ),
  'table' => 'cp_client_users_atc_clients_c',
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
    'cp_client_users_atc_clientscp_client_users_ida' => 
    array (
      'name' => 'cp_client_users_atc_clientscp_client_users_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    'cp_client_users_atc_clientsatc_clients_idb' => 
    array (
      'name' => 'cp_client_users_atc_clientsatc_clients_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cp_client_users_atc_clientsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cp_client_users_atc_clients_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cp_client_users_atc_clientscp_client_users_ida',
        1 => 'cp_client_users_atc_clientsatc_clients_idb',
      ),
    ),
  ),
);