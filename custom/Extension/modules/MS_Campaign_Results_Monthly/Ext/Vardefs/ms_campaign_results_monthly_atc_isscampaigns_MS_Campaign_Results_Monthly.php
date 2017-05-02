<?php
// created: 2017-04-06 11:52:51
$dictionary["MS_Campaign_Results_Monthly"]["fields"]["ms_campaign_results_monthly_atc_isscampaigns"] = array (
  'name' => 'ms_campaign_results_monthly_atc_isscampaigns',
  'type' => 'link',
  'relationship' => 'ms_campaign_results_monthly_atc_isscampaigns',
  'source' => 'non-db',
  'module' => 'ATC_ISSCampaigns',
  'bean_name' => 'ATC_ISSCampaigns',
  'side' => 'right',
  'vname' => 'LBL_MS_CAMPAIGN_RESULTS_MONTHLY_ATC_ISSCAMPAIGNS_FROM_MS_CAMPAIGN_RESULTS_MONTHLY_TITLE',
  'id_name' => 'ms_campaign_results_monthly_atc_isscampaignsatc_isscampaigns_ida',
  'link-type' => 'one',
);
$dictionary["MS_Campaign_Results_Monthly"]["fields"]["ms_campaign_results_monthly_atc_isscampaigns_name"] = array (
  'name' => 'ms_campaign_results_monthly_atc_isscampaigns_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MS_CAMPAIGN_RESULTS_MONTHLY_ATC_ISSCAMPAIGNS_FROM_ATC_ISSCAMPAIGNS_TITLE',
  'save' => true,
  'id_name' => 'ms_campaign_results_monthly_atc_isscampaignsatc_isscampaigns_ida',
  'link' => 'ms_campaign_results_monthly_atc_isscampaigns',
  'table' => 'atc_isscampaigns',
  'module' => 'ATC_ISSCampaigns',
  'rname' => 'name',
);
$dictionary["MS_Campaign_Results_Monthly"]["fields"]["ms_campaign_results_monthly_atc_isscampaignsatc_isscampaigns_ida"] = array (
  'name' => 'ms_campaign_results_monthly_atc_isscampaignsatc_isscampaigns_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_MS_CAMPAIGN_RESULTS_MONTHLY_ATC_ISSCAMPAIGNS_FROM_MS_CAMPAIGN_RESULTS_MONTHLY_TITLE_ID',
  'id_name' => 'ms_campaign_results_monthly_atc_isscampaignsatc_isscampaigns_ida',
  'link' => 'ms_campaign_results_monthly_atc_isscampaigns',
  'table' => 'atc_isscampaigns',
  'module' => 'ATC_ISSCampaigns',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
