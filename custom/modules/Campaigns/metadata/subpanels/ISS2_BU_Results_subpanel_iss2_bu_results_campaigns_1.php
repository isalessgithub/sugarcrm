<?php
// created: 2018-10-22 16:48:21
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'name' => 'name',
    'vname' => 'LBL_LIST_CAMPAIGN_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => 10,
    'default' => true,
  ),
  'status' => 
  array (
    'name' => 'status',
    'vname' => 'LBL_LIST_STATUS',
    'width' => 10,
    'default' => true,
  ),
  'iss2_bu_results_campaigns_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_ISS2_BU_RESULTS_CAMPAIGNS_1_FROM_ISS2_BU_RESULTS_TITLE',
    'id' => 'ISS2_BU_RESULTS_CAMPAIGNS_1ISS2_BU_RESULTS_IDA',
    'width' => 10,
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'ISS2_BU_Results',
    'target_record_key' => 'iss2_bu_results_campaigns_1iss2_bu_results_ida',
  ),
);