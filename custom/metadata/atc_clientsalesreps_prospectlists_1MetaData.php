<?php
// created: 2017-07-10 15:58:07
$dictionary["atc_clientsalesreps_prospectlists_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'atc_clientsalesreps_prospectlists_1' => 
    array (
      'lhs_module' => 'ATC_ClientSalesReps',
      'lhs_table' => 'atc_clientsalesreps',
      'lhs_key' => 'id',
      'rhs_module' => 'ProspectLists',
      'rhs_table' => 'prospect_lists',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'atc_clientsalesreps_prospectlists_1_c',
      'join_key_lhs' => 'atc_clientsalesreps_prospectlists_1atc_clientsalesreps_ida',
      'join_key_rhs' => 'atc_clientsalesreps_prospectlists_1prospectlists_idb',
    ),
  ),
  'table' => 'atc_clientsalesreps_prospectlists_1_c',
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
    'atc_clientsalesreps_prospectlists_1atc_clientsalesreps_ida' => 
    array (
      'name' => 'atc_clientsalesreps_prospectlists_1atc_clientsalesreps_ida',
      'type' => 'id',
    ),
    'atc_clientsalesreps_prospectlists_1prospectlists_idb' => 
    array (
      'name' => 'atc_clientsalesreps_prospectlists_1prospectlists_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_atc_clientsalesreps_prospectlists_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_atc_clientsalesreps_prospectlists_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'atc_clientsalesreps_prospectlists_1atc_clientsalesreps_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_atc_clientsalesreps_prospectlists_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'atc_clientsalesreps_prospectlists_1prospectlists_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'atc_clientsalesreps_prospectlists_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'atc_clientsalesreps_prospectlists_1prospectlists_idb',
      ),
    ),
  ),
);