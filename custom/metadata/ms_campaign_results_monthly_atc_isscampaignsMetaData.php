<?php
// created: 2017-04-06 13:06:33
$dictionary["ms_campaign_results_monthly_atc_isscampaigns"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ms_campaign_results_monthly_atc_isscampaigns' => 
    array (
      'lhs_module' => 'ATC_ISSCampaigns',
      'lhs_table' => 'atc_isscampaigns',
      'lhs_key' => 'id',
      'rhs_module' => 'MS_Campaign_Results_Monthly',
      'rhs_table' => 'ms_campaign_results_monthly',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ms_campaign_results_monthly_atc_isscampaigns_c',
      'join_key_lhs' => 'ms_campaign_results_monthly_atc_isscampaignsatc_isscampaigns_ida',
      'join_key_rhs' => 'ms_campaig2a2cmonthly_idb',
    ),
  ),
  'table' => 'ms_campaign_results_monthly_atc_isscampaigns_c',
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
    'ms_campaign_results_monthly_atc_isscampaignsatc_isscampaigns_ida' => 
    array (
      'name' => 'ms_campaign_results_monthly_atc_isscampaignsatc_isscampaigns_ida',
      'type' => 'id',
    ),
    'ms_campaig2a2cmonthly_idb' => 
    array (
      'name' => 'ms_campaig2a2cmonthly_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_ms_campaign_results_monthly_atc_isscampaigns_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_ms_campaign_results_monthly_atc_isscampaigns_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ms_campaign_results_monthly_atc_isscampaignsatc_isscampaigns_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_ms_campaign_results_monthly_atc_isscampaigns_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ms_campaig2a2cmonthly_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'ms_campaign_results_monthly_atc_isscampaigns_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ms_campaig2a2cmonthly_idb',
      ),
    ),
  ),
);