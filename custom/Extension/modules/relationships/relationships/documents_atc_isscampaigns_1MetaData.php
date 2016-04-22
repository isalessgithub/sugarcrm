<?php
// created: 2015-12-30 11:36:22
$dictionary["documents_atc_isscampaigns_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'documents_atc_isscampaigns_1' => 
    array (
      'lhs_module' => 'Documents',
      'lhs_table' => 'documents',
      'lhs_key' => 'id',
      'rhs_module' => 'ATC_ISSCampaigns',
      'rhs_table' => 'atc_isscampaigns',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'documents_atc_isscampaigns_1_c',
      'join_key_lhs' => 'documents_atc_isscampaigns_1documents_ida',
      'join_key_rhs' => 'documents_atc_isscampaigns_1atc_isscampaigns_idb',
    ),
  ),
  'table' => 'documents_atc_isscampaigns_1_c',
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
      'name' => 'documents_atc_isscampaigns_1documents_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'documents_atc_isscampaigns_1atc_isscampaigns_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
    5 => 
    array (
      'name' => 'document_revision_id',
      'type' => 'varchar',
      'len' => '36',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'documents_atc_isscampaigns_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'documents_atc_isscampaigns_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'documents_atc_isscampaigns_1documents_ida',
        1 => 'documents_atc_isscampaigns_1atc_isscampaigns_idb',
      ),
    ),
  ),
);