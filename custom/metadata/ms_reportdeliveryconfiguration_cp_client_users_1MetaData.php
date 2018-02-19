<?php
// created: 2018-02-19 15:10:13
$dictionary["ms_reportdeliveryconfiguration_cp_client_users_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'ms_reportdeliveryconfiguration_cp_client_users_1' => 
    array (
      'lhs_module' => 'MS_ReportDeliveryConfiguration',
      'lhs_table' => 'ms_reportdeliveryconfiguration',
      'lhs_key' => 'id',
      'rhs_module' => 'CP_Client_Users',
      'rhs_table' => 'cp_client_users',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ms_reportdeliveryconfiguration_cp_client_users_1_c',
      'join_key_lhs' => 'ms_reportd2898uration_ida',
      'join_key_rhs' => 'ms_reportd2fd0t_users_idb',
    ),
  ),
  'table' => 'ms_reportdeliveryconfiguration_cp_client_users_1_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
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
      'default' => 0,
    ),
    'ms_reportd2898uration_ida' => 
    array (
      'name' => 'ms_reportd2898uration_ida',
      'type' => 'id',
    ),
    'ms_reportd2fd0t_users_idb' => 
    array (
      'name' => 'ms_reportd2fd0t_users_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_ms_reportdeliveryconfiguration_cp_client_users_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_ms_reportdeliveryconfiguration_cp_client_users_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ms_reportd2898uration_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_ms_reportdeliveryconfiguration_cp_client_users_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ms_reportd2fd0t_users_idb',
        1 => 'deleted',
      ),
    ),
  ),
);