<?php
// created: 2013-10-04 10:51:35
$dictionary["accounts_atc_appointments_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_atc_appointments_1' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'ATC_Appointments',
      'rhs_table' => 'atc_appointments',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_atc_appointments_1_c',
      'join_key_lhs' => 'accounts_atc_appointments_1accounts_ida',
      'join_key_rhs' => 'accounts_atc_appointments_1atc_appointments_idb',
    ),
  ),
  'table' => 'accounts_atc_appointments_1_c',
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
      'name' => 'accounts_atc_appointments_1accounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'accounts_atc_appointments_1atc_appointments_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'accounts_atc_appointments_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'accounts_atc_appointments_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_atc_appointments_1accounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'accounts_atc_appointments_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_atc_appointments_1atc_appointments_idb',
      ),
    ),
  ),
);