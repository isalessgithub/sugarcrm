<?php
// created: 2018-03-09 13:24:25
$dictionary['prospectlists_notes_1'] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'prospectlists_notes_1' => 
    array (
      'lhs_module' => 'ProspectLists',
      'lhs_table' => 'prospect_lists',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'prospectlists_notes_1_c',
      'join_key_lhs' => 'prospectlists_notes_1prospectlists_ida',
      'join_key_rhs' => 'prospectlists_notes_1notes_idb',
    ),
  ),
  'table' => 'prospectlists_notes_1_c',
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
    'prospectlists_notes_1prospectlists_ida' => 
    array (
      'name' => 'prospectlists_notes_1prospectlists_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    'prospectlists_notes_1notes_idb' => 
    array (
      'name' => 'prospectlists_notes_1notes_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'prospectlists_notes_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'prospectlists_notes_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'prospectlists_notes_1prospectlists_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'prospectlists_notes_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'prospectlists_notes_1notes_idb',
      ),
    ),
  ),
);