<?php
// created: 2017-04-17 19:47:21
$dictionary["cases_atc_isscampaigns_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'cases_atc_isscampaigns_1' => 
    array (
      'lhs_module' => 'Cases',
      'lhs_table' => 'cases',
      'lhs_key' => 'id',
      'rhs_module' => 'ATC_ISSCampaigns',
      'rhs_table' => 'atc_isscampaigns',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cases_atc_isscampaigns_1_c',
      'join_key_lhs' => 'cases_atc_isscampaigns_1cases_ida',
      'join_key_rhs' => 'cases_atc_isscampaigns_1atc_isscampaigns_idb',
    ),
  ),
  'table' => 'cases_atc_isscampaigns_1_c',
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
    'cases_atc_isscampaigns_1cases_ida' => 
    array (
      'name' => 'cases_atc_isscampaigns_1cases_ida',
      'type' => 'id',
    ),
    'cases_atc_isscampaigns_1atc_isscampaigns_idb' => 
    array (
      'name' => 'cases_atc_isscampaigns_1atc_isscampaigns_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_cases_atc_isscampaigns_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_cases_atc_isscampaigns_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cases_atc_isscampaigns_1cases_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_cases_atc_isscampaigns_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cases_atc_isscampaigns_1atc_isscampaigns_idb',
        1 => 'deleted',
      ),
    ),
  ),
);