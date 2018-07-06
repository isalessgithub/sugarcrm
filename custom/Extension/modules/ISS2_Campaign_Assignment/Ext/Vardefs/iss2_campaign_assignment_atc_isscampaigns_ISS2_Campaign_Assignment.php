<?php
// created: 2018-06-28 10:54:15
$dictionary["ISS2_Campaign_Assignment"]["fields"]["iss2_campaign_assignment_atc_isscampaigns"] = array (
  'name' => 'iss2_campaign_assignment_atc_isscampaigns',
  'type' => 'link',
  'relationship' => 'iss2_campaign_assignment_atc_isscampaigns',
  'source' => 'non-db',
  'module' => 'ATC_ISSCampaigns',
  'bean_name' => 'ATC_ISSCampaigns',
  'side' => 'right',
  'vname' => 'LBL_ISS2_CAMPAIGN_ASSIGNMENT_ATC_ISSCAMPAIGNS_FROM_ISS2_CAMPAIGN_ASSIGNMENT_TITLE',
  'id_name' => 'iss2_campaign_assignment_atc_isscampaignsatc_isscampaigns_ida',
  'link-type' => 'one',
);
$dictionary["ISS2_Campaign_Assignment"]["fields"]["iss2_campaign_assignment_atc_isscampaigns_name"] = array (
  'name' => 'iss2_campaign_assignment_atc_isscampaigns_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ISS2_CAMPAIGN_ASSIGNMENT_ATC_ISSCAMPAIGNS_FROM_ATC_ISSCAMPAIGNS_TITLE',
  'save' => true,
  'id_name' => 'iss2_campaign_assignment_atc_isscampaignsatc_isscampaigns_ida',
  'link' => 'iss2_campaign_assignment_atc_isscampaigns',
  'table' => 'atc_isscampaigns',
  'module' => 'ATC_ISSCampaigns',
  'rname' => 'name',
);
$dictionary["ISS2_Campaign_Assignment"]["fields"]["iss2_campaign_assignment_atc_isscampaignsatc_isscampaigns_ida"] = array (
  'name' => 'iss2_campaign_assignment_atc_isscampaignsatc_isscampaigns_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ISS2_CAMPAIGN_ASSIGNMENT_ATC_ISSCAMPAIGNS_FROM_ISS2_CAMPAIGN_ASSIGNMENT_TITLE_ID',
  'id_name' => 'iss2_campaign_assignment_atc_isscampaignsatc_isscampaigns_ida',
  'link' => 'iss2_campaign_assignment_atc_isscampaigns',
  'table' => 'atc_isscampaigns',
  'module' => 'ATC_ISSCampaigns',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
