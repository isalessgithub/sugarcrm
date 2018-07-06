<?php
// created: 2018-06-28 22:40:11
$subpanel_layout['list_fields'] = array (
  'atc_isscampaigns_iss2_bu_results_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_ATC_ISSCAMPAIGNS_ISS2_BU_RESULTS_1_FROM_ATC_ISSCAMPAIGNS_TITLE',
    'id' => 'ATC_ISSCAMPAIGNS_ISS2_BU_RESULTS_1ATC_ISSCAMPAIGNS_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'ATC_ISSCampaigns',
    'target_record_key' => 'atc_isscampaigns_iss2_bu_results_1atc_isscampaigns_ida',
  ),
  'team_assigned_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_TEAM_ASSIGNED',
    'width' => '10%',
  ),
  'team_target_c' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_TEAM_TARGET',
    'width' => '10%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'studio' => 
    array (
      'portaleditview' => false,
    ),
    'readonly' => true,
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'readonly' => true,
    'vname' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'created_by',
  ),
);