<?php
// created: 2018-06-28 22:34:01
$dictionary["ISS2_BU_Results"]["fields"]["atc_isscampaigns_iss2_bu_results_1"] = array (
  'name' => 'atc_isscampaigns_iss2_bu_results_1',
  'type' => 'link',
  'relationship' => 'atc_isscampaigns_iss2_bu_results_1',
  'source' => 'non-db',
  'module' => 'ATC_ISSCampaigns',
  'bean_name' => 'ATC_ISSCampaigns',
  'side' => 'right',
  'vname' => 'LBL_ATC_ISSCAMPAIGNS_ISS2_BU_RESULTS_1_FROM_ISS2_BU_RESULTS_TITLE',
  'id_name' => 'atc_isscampaigns_iss2_bu_results_1atc_isscampaigns_ida',
  'link-type' => 'one',
);
$dictionary["ISS2_BU_Results"]["fields"]["atc_isscampaigns_iss2_bu_results_1_name"] = array (
  'name' => 'atc_isscampaigns_iss2_bu_results_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_ISSCAMPAIGNS_ISS2_BU_RESULTS_1_FROM_ATC_ISSCAMPAIGNS_TITLE',
  'save' => true,
  'id_name' => 'atc_isscampaigns_iss2_bu_results_1atc_isscampaigns_ida',
  'link' => 'atc_isscampaigns_iss2_bu_results_1',
  'table' => 'atc_isscampaigns',
  'module' => 'ATC_ISSCampaigns',
  'rname' => 'name',
);
$dictionary["ISS2_BU_Results"]["fields"]["atc_isscampaigns_iss2_bu_results_1atc_isscampaigns_ida"] = array (
  'name' => 'atc_isscampaigns_iss2_bu_results_1atc_isscampaigns_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_ISSCAMPAIGNS_ISS2_BU_RESULTS_1_FROM_ISS2_BU_RESULTS_TITLE_ID',
  'id_name' => 'atc_isscampaigns_iss2_bu_results_1atc_isscampaigns_ida',
  'link' => 'atc_isscampaigns_iss2_bu_results_1',
  'table' => 'atc_isscampaigns',
  'module' => 'ATC_ISSCampaigns',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
