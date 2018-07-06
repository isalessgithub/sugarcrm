<?php
// created: 2018-06-28 10:54:15
$dictionary["iss2_campaign_assignment_atc_isscampaigns"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'iss2_campaign_assignment_atc_isscampaigns' => 
    array (
      'lhs_module' => 'ATC_ISSCampaigns',
      'lhs_table' => 'atc_isscampaigns',
      'lhs_key' => 'id',
      'rhs_module' => 'ISS2_Campaign_Assignment',
      'rhs_table' => 'iss2_campaign_assignment',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'iss2_campaign_assignment_atc_isscampaigns_c',
      'join_key_lhs' => 'iss2_campaign_assignment_atc_isscampaignsatc_isscampaigns_ida',
      'join_key_rhs' => 'iss2_campab874ignment_idb',
    ),
  ),
  'table' => 'iss2_campaign_assignment_atc_isscampaigns_c',
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
    'iss2_campaign_assignment_atc_isscampaignsatc_isscampaigns_ida' => 
    array (
      'name' => 'iss2_campaign_assignment_atc_isscampaignsatc_isscampaigns_ida',
      'type' => 'id',
    ),
    'iss2_campab874ignment_idb' => 
    array (
      'name' => 'iss2_campab874ignment_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_iss2_campaign_assignment_atc_isscampaigns_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_iss2_campaign_assignment_atc_isscampaigns_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'iss2_campaign_assignment_atc_isscampaignsatc_isscampaigns_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_iss2_campaign_assignment_atc_isscampaigns_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'iss2_campab874ignment_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'iss2_campaign_assignment_atc_isscampaigns_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'iss2_campab874ignment_idb',
      ),
    ),
  ),
);