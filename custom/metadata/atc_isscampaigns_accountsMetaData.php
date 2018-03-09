<?php
// created: 2018-03-09 13:24:25
$dictionary['atc_isscampaigns_accounts'] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'atc_isscampaigns_accounts' => 
    array (
      'lhs_module' => 'ATC_ISSCampaigns',
      'lhs_table' => 'atc_isscampaigns',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'atc_isscampaigns_accounts_c',
      'join_key_lhs' => 'atc_isscampaigns_accountsatc_isscampaigns_ida',
      'join_key_rhs' => 'atc_isscampaigns_accountsaccounts_idb',
    ),
  ),
  'table' => 'atc_isscampaigns_accounts_c',
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
    'atc_isscampaigns_accountsatc_isscampaigns_ida' => 
    array (
      'name' => 'atc_isscampaigns_accountsatc_isscampaigns_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    'atc_isscampaigns_accountsaccounts_idb' => 
    array (
      'name' => 'atc_isscampaigns_accountsaccounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'atc_isscampaigns_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'atc_isscampaigns_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'atc_isscampaigns_accountsatc_isscampaigns_ida',
        1 => 'atc_isscampaigns_accountsaccounts_idb',
      ),
    ),
  ),
);