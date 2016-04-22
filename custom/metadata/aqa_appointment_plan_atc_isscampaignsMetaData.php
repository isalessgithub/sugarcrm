<?php
// created: 2014-02-27 00:11:06
$dictionary["aqa_appointment_plan_atc_isscampaigns"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'aqa_appointment_plan_atc_isscampaigns' => 
    array (
      'lhs_module' => 'ATC_ISSCampaigns',
      'lhs_table' => 'atc_isscampaigns',
      'lhs_key' => 'id',
      'rhs_module' => 'AQA_Appointment_Plan',
      'rhs_table' => 'aqa_appointment_plan',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'aqa_appointment_plan_atc_isscampaigns_c',
      'join_key_lhs' => 'aqa_appointment_plan_atc_isscampaignsatc_isscampaigns_ida',
      'join_key_rhs' => 'aqa_appointment_plan_atc_isscampaignsaqa_appointment_plan_idb',
    ),
  ),
  'table' => 'aqa_appointment_plan_atc_isscampaigns_c',
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
      'name' => 'aqa_appointment_plan_atc_isscampaignsatc_isscampaigns_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'aqa_appointment_plan_atc_isscampaignsaqa_appointment_plan_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'aqa_appointment_plan_atc_isscampaignsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'aqa_appointment_plan_atc_isscampaigns_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'aqa_appointment_plan_atc_isscampaignsatc_isscampaigns_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'aqa_appointment_plan_atc_isscampaigns_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'aqa_appointment_plan_atc_isscampaignsaqa_appointment_plan_idb',
      ),
    ),
  ),
);