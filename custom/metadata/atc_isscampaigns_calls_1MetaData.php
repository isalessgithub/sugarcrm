<?php
// created: 2013-08-15 15:43:30
$dictionary["atc_isscampaigns_calls_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'atc_isscampaigns_calls_1' => 
    array (
      'lhs_module' => 'ATC_ISSCampaigns',
      'lhs_table' => 'atc_isscampaigns',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'atc_isscampaigns_calls_1_c',
      'join_key_lhs' => 'atc_isscampaigns_calls_1atc_isscampaigns_ida',
      'join_key_rhs' => 'atc_isscampaigns_calls_1calls_idb',
    ),
  ),
  'table' => 'atc_isscampaigns_calls_1_c',
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
      'name' => 'atc_isscampaigns_calls_1atc_isscampaigns_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'atc_isscampaigns_calls_1calls_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'atc_isscampaigns_calls_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'atc_isscampaigns_calls_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'atc_isscampaigns_calls_1atc_isscampaigns_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'atc_isscampaigns_calls_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'atc_isscampaigns_calls_1calls_idb',
      ),
    ),
  ),
);