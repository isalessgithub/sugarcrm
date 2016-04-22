<?php
// created: 2013-08-06 14:59:59
$dictionary["atc_clientsalesreps_atc_appointments"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'atc_clientsalesreps_atc_appointments' => 
    array (
      'lhs_module' => 'ATC_ClientSalesReps',
      'lhs_table' => 'atc_clientsalesreps',
      'lhs_key' => 'id',
      'rhs_module' => 'ATC_Appointments',
      'rhs_table' => 'atc_appointments',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'atc_clientsalesreps_atc_appointments_c',
      'join_key_lhs' => 'atc_clientsalesreps_atc_appointmentsatc_clientsalesreps_ida',
      'join_key_rhs' => 'atc_clientsalesreps_atc_appointmentsatc_appointments_idb',
    ),
  ),
  'table' => 'atc_clientsalesreps_atc_appointments_c',
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
      'name' => 'atc_clientsalesreps_atc_appointmentsatc_clientsalesreps_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'atc_clientsalesreps_atc_appointmentsatc_appointments_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'atc_clientsalesreps_atc_appointmentsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'atc_clientsalesreps_atc_appointments_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'atc_clientsalesreps_atc_appointmentsatc_clientsalesreps_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'atc_clientsalesreps_atc_appointments_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'atc_clientsalesreps_atc_appointmentsatc_appointments_idb',
      ),
    ),
  ),
);