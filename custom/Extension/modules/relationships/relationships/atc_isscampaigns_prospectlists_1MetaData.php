<?php
// created: 2018-03-09 13:24:25
$dictionary['atc_isscampaigns_prospectlists_1'] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'atc_isscampaigns_prospectlists_1' => 
    array (
      'lhs_module' => 'ATC_ISSCampaigns',
      'lhs_table' => 'atc_isscampaigns',
      'lhs_key' => 'id',
      'rhs_module' => 'ProspectLists',
      'rhs_table' => 'prospect_lists',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'atc_isscampaigns_prospectlists_1_c',
      'join_key_lhs' => 'atc_isscampaigns_prospectlists_1atc_isscampaigns_ida',
      'join_key_rhs' => 'atc_isscampaigns_prospectlists_1prospectlists_idb',
    ),
  ),
  'table' => 'atc_isscampaigns_prospectlists_1_c',
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
    'atc_isscampaigns_prospectlists_1atc_isscampaigns_ida' => 
    array (
      'name' => 'atc_isscampaigns_prospectlists_1atc_isscampaigns_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    'atc_isscampaigns_prospectlists_1prospectlists_idb' => 
    array (
      'name' => 'atc_isscampaigns_prospectlists_1prospectlists_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'atc_isscampaigns_prospectlists_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'atc_isscampaigns_prospectlists_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'atc_isscampaigns_prospectlists_1atc_isscampaigns_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'atc_isscampaigns_prospectlists_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'atc_isscampaigns_prospectlists_1prospectlists_idb',
      ),
    ),
  ),
);