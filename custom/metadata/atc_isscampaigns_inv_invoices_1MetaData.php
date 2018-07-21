<?php
// created: 2018-07-12 16:07:06
$dictionary["atc_isscampaigns_inv_invoices_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'atc_isscampaigns_inv_invoices_1' => 
    array (
      'lhs_module' => 'ATC_ISSCampaigns',
      'lhs_table' => 'atc_isscampaigns',
      'lhs_key' => 'id',
      'rhs_module' => 'INV_Invoices',
      'rhs_table' => 'inv_invoices',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'atc_isscampaigns_inv_invoices_1_c',
      'join_key_lhs' => 'atc_isscampaigns_inv_invoices_1atc_isscampaigns_ida',
      'join_key_rhs' => 'atc_isscampaigns_inv_invoices_1inv_invoices_idb',
    ),
  ),
  'table' => 'atc_isscampaigns_inv_invoices_1_c',
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
    'atc_isscampaigns_inv_invoices_1atc_isscampaigns_ida' => 
    array (
      'name' => 'atc_isscampaigns_inv_invoices_1atc_isscampaigns_ida',
      'type' => 'id',
    ),
    'atc_isscampaigns_inv_invoices_1inv_invoices_idb' => 
    array (
      'name' => 'atc_isscampaigns_inv_invoices_1inv_invoices_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_atc_isscampaigns_inv_invoices_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_atc_isscampaigns_inv_invoices_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'atc_isscampaigns_inv_invoices_1atc_isscampaigns_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_atc_isscampaigns_inv_invoices_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'atc_isscampaigns_inv_invoices_1inv_invoices_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'atc_isscampaigns_inv_invoices_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'atc_isscampaigns_inv_invoices_1inv_invoices_idb',
      ),
    ),
  ),
);