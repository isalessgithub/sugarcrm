<?php
// created: 2018-03-09 13:24:25
$dictionary['documents_atc_isscampaigns_1'] = array (
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
    'documents_atc_isscampaigns_1documents_ida' => 
    array (
      'name' => 'documents_atc_isscampaigns_1documents_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    'documents_atc_isscampaigns_1atc_isscampaigns_idb' => 
    array (
      'name' => 'documents_atc_isscampaigns_1atc_isscampaigns_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
    'document_revision_id' => 
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