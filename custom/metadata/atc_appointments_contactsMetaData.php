<?php
// created: 2018-03-09 13:24:25
$dictionary['atc_appointments_contacts'] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'atc_appointments_contacts' => 
    array (
      'lhs_module' => 'Contacts',
      'lhs_table' => 'contacts',
      'lhs_key' => 'id',
      'rhs_module' => 'ATC_Appointments',
      'rhs_table' => 'atc_appointments',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'atc_appointments_contacts_c',
      'join_key_lhs' => 'atc_appointments_contactscontacts_ida',
      'join_key_rhs' => 'atc_appointments_contactsatc_appointments_idb',
    ),
  ),
  'table' => 'atc_appointments_contacts_c',
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
    'atc_appointments_contactscontacts_ida' => 
    array (
      'name' => 'atc_appointments_contactscontacts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    'atc_appointments_contactsatc_appointments_idb' => 
    array (
      'name' => 'atc_appointments_contactsatc_appointments_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'atc_appointments_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'atc_appointments_contacts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'atc_appointments_contactscontacts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'atc_appointments_contacts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'atc_appointments_contactsatc_appointments_idb',
      ),
    ),
  ),
);