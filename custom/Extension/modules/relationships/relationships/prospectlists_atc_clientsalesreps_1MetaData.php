<?php
// created: 2017-04-14 13:58:05
$dictionary["prospectlists_atc_clientsalesreps_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'prospectlists_atc_clientsalesreps_1' => 
    array (
      'lhs_module' => 'ProspectLists',
      'lhs_table' => 'prospect_lists',
      'lhs_key' => 'id',
      'rhs_module' => 'ATC_ClientSalesReps',
      'rhs_table' => 'atc_clientsalesreps',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'prospectlists_atc_clientsalesreps_1_c',
      'join_key_lhs' => 'prospectlists_atc_clientsalesreps_1prospectlists_ida',
      'join_key_rhs' => 'prospectlists_atc_clientsalesreps_1atc_clientsalesreps_idb',
    ),
  ),
  'table' => 'prospectlists_atc_clientsalesreps_1_c',
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
    'prospectlists_atc_clientsalesreps_1prospectlists_ida' => 
    array (
      'name' => 'prospectlists_atc_clientsalesreps_1prospectlists_ida',
      'type' => 'id',
    ),
    'prospectlists_atc_clientsalesreps_1atc_clientsalesreps_idb' => 
    array (
      'name' => 'prospectlists_atc_clientsalesreps_1atc_clientsalesreps_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_prospectlists_atc_clientsalesreps_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_prospectlists_atc_clientsalesreps_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'prospectlists_atc_clientsalesreps_1prospectlists_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_prospectlists_atc_clientsalesreps_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'prospectlists_atc_clientsalesreps_1atc_clientsalesreps_idb',
        1 => 'deleted',
      ),
    ),
  ),
);