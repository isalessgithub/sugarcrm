<?php
// created: 2017-11-14 14:09:16
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_LIST_PROSPECT_LIST_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'list_type' => 
  array (
    'vname' => 'LBL_LIST_TYPE_NO',
    'width' => '10%',
    'default' => true,
  ),
  'account_total_c' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_ACCOUNT_TOTAL',
    'width' => '10%',
    'default' => true,
  ),
  'atc_isscampaigns_prospectlists_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_ATC_ISSCAMPAIGNS_PROSPECTLISTS_1_FROM_ATC_ISSCAMPAIGNS_TITLE',
    'id' => 'ATC_ISSCAMPAIGNS_PROSPECTLISTS_1ATC_ISSCAMPAIGNS_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'ATC_ISSCampaigns',
    'target_record_key' => 'atc_isscampaigns_prospectlists_1atc_isscampaigns_ida',
  ),
);