<?php
// created: 2018-01-11 14:52:12
$dictionary["atc_appointments_tasks_2"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'atc_appointments_tasks_2' => 
    array (
      'lhs_module' => 'ATC_Appointments',
      'lhs_table' => 'atc_appointments',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'atc_appointments_tasks_2_c',
      'join_key_lhs' => 'atc_appointments_tasks_2atc_appointments_ida',
      'join_key_rhs' => 'atc_appointments_tasks_2tasks_idb',
    ),
  ),
  'table' => 'atc_appointments_tasks_2_c',
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
    'atc_appointments_tasks_2atc_appointments_ida' => 
    array (
      'name' => 'atc_appointments_tasks_2atc_appointments_ida',
      'type' => 'id',
    ),
    'atc_appointments_tasks_2tasks_idb' => 
    array (
      'name' => 'atc_appointments_tasks_2tasks_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_atc_appointments_tasks_2_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_atc_appointments_tasks_2_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'atc_appointments_tasks_2atc_appointments_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_atc_appointments_tasks_2_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'atc_appointments_tasks_2tasks_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'atc_appointments_tasks_2_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'atc_appointments_tasks_2atc_appointments_ida',
        1 => 'atc_appointments_tasks_2tasks_idb',
      ),
    ),
  ),
);