<?php
// created: 2018-10-25 13:16:48
$dictionary["atc_isscampaigns_atc_clientsalesreps_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'atc_isscampaigns_atc_clientsalesreps_1' => 
    array (
      'lhs_module' => 'ATC_ISSCampaigns',
      'lhs_table' => 'atc_isscampaigns',
      'lhs_key' => 'id',
      'rhs_module' => 'ATC_ClientSalesReps',
      'rhs_table' => 'atc_clientsalesreps',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'atc_isscampaigns_atc_clientsalesreps_1_c',
      'join_key_lhs' => 'atc_isscampaigns_atc_clientsalesreps_1atc_isscampaigns_ida',
      'join_key_rhs' => 'atc_isscampaigns_atc_clientsalesreps_1atc_clientsalesreps_idb',
    ),
  ),
  'table' => 'atc_isscampaigns_atc_clientsalesreps_1_c',
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
    'atc_isscampaigns_atc_clientsalesreps_1atc_isscampaigns_ida' => 
    array (
      'name' => 'atc_isscampaigns_atc_clientsalesreps_1atc_isscampaigns_ida',
      'type' => 'id',
    ),
    'atc_isscampaigns_atc_clientsalesreps_1atc_clientsalesreps_idb' => 
    array (
      'name' => 'atc_isscampaigns_atc_clientsalesreps_1atc_clientsalesreps_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_atc_isscampaigns_atc_clientsalesreps_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_atc_isscampaigns_atc_clientsalesreps_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'atc_isscampaigns_atc_clientsalesreps_1atc_isscampaigns_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_atc_isscampaigns_atc_clientsalesreps_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'atc_isscampaigns_atc_clientsalesreps_1atc_clientsalesreps_idb',
        1 => 'deleted',
      ),
    ),
  ),
);