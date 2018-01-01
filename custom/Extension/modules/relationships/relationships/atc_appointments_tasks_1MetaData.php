<?php
// created: 2017-12-28 12:20:49
$dictionary["atc_appointments_tasks_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'atc_appointments_tasks_1' => 
    array (
      'lhs_module' => 'ATC_Appointments',
      'lhs_table' => 'atc_appointments',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'atc_appointments_tasks_1_c',
      'join_key_lhs' => 'atc_appointments_tasks_1atc_appointments_ida',
      'join_key_rhs' => 'atc_appointments_tasks_1tasks_idb',
    ),
  ),
  'table' => 'atc_appointments_tasks_1_c',
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
    'atc_appointments_tasks_1atc_appointments_ida' => 
    array (
      'name' => 'atc_appointments_tasks_1atc_appointments_ida',
      'type' => 'id',
    ),
    'atc_appointments_tasks_1tasks_idb' => 
    array (
      'name' => 'atc_appointments_tasks_1tasks_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_atc_appointments_tasks_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_atc_appointments_tasks_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'atc_appointments_tasks_1atc_appointments_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_atc_appointments_tasks_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'atc_appointments_tasks_1tasks_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'atc_appointments_tasks_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'atc_appointments_tasks_1tasks_idb',
      ),
    ),
  ),
);