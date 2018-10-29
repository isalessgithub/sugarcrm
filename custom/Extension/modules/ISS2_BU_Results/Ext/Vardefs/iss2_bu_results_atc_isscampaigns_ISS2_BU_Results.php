<?php
// created: 2018-10-23 09:38:37
$dictionary["ISS2_BU_Results"]["fields"]["iss2_bu_results_atc_isscampaigns"] = array (
  'name' => 'iss2_bu_results_atc_isscampaigns',
  'type' => 'link',
  'relationship' => 'iss2_bu_results_atc_isscampaigns',
  'source' => 'non-db',
  'module' => 'ATC_ISSCampaigns',
  'bean_name' => 'ATC_ISSCampaigns',
  'side' => 'right',
  'vname' => 'LBL_ISS2_BU_RESULTS_ATC_ISSCAMPAIGNS_FROM_ISS2_BU_RESULTS_TITLE',
  'id_name' => 'iss2_bu_results_atc_isscampaignsatc_isscampaigns_ida',
  'link-type' => 'one',
);
$dictionary["ISS2_BU_Results"]["fields"]["iss2_bu_results_atc_isscampaigns_name"] = array (
  'name' => 'iss2_bu_results_atc_isscampaigns_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ISS2_BU_RESULTS_ATC_ISSCAMPAIGNS_FROM_ATC_ISSCAMPAIGNS_TITLE',
  'save' => true,
  'id_name' => 'iss2_bu_results_atc_isscampaignsatc_isscampaigns_ida',
  'link' => 'iss2_bu_results_atc_isscampaigns',
  'table' => 'atc_isscampaigns',
  'module' => 'ATC_ISSCampaigns',
  'rname' => 'name',
);
$dictionary["ISS2_BU_Results"]["fields"]["iss2_bu_results_atc_isscampaignsatc_isscampaigns_ida"] = array (
  'name' => 'iss2_bu_results_atc_isscampaignsatc_isscampaigns_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ISS2_BU_RESULTS_ATC_ISSCAMPAIGNS_FROM_ISS2_BU_RESULTS_TITLE_ID',
  'id_name' => 'iss2_bu_results_atc_isscampaignsatc_isscampaigns_ida',
  'link' => 'iss2_bu_results_atc_isscampaigns',
  'table' => 'atc_isscampaigns',
  'module' => 'ATC_ISSCampaigns',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
