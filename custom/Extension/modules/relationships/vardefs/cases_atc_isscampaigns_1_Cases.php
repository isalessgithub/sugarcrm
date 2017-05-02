<?php
// created: 2017-04-17 19:47:21
$dictionary["Case"]["fields"]["cases_atc_isscampaigns_1"] = array (
  'name' => 'cases_atc_isscampaigns_1',
  'type' => 'link',
  'relationship' => 'cases_atc_isscampaigns_1',
  'source' => 'non-db',
  'module' => 'ATC_ISSCampaigns',
  'bean_name' => 'ATC_ISSCampaigns',
  'vname' => 'LBL_CASES_ATC_ISSCAMPAIGNS_1_FROM_ATC_ISSCAMPAIGNS_TITLE',
  'id_name' => 'cases_atc_isscampaigns_1atc_isscampaigns_idb',
);
$dictionary["Case"]["fields"]["cases_atc_isscampaigns_1_name"] = array (
  'name' => 'cases_atc_isscampaigns_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CASES_ATC_ISSCAMPAIGNS_1_FROM_ATC_ISSCAMPAIGNS_TITLE',
  'save' => true,
  'id_name' => 'cases_atc_isscampaigns_1atc_isscampaigns_idb',
  'link' => 'cases_atc_isscampaigns_1',
  'table' => 'atc_isscampaigns',
  'module' => 'ATC_ISSCampaigns',
  'rname' => 'name',
);
$dictionary["Case"]["fields"]["cases_atc_isscampaigns_1atc_isscampaigns_idb"] = array (
  'name' => 'cases_atc_isscampaigns_1atc_isscampaigns_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CASES_ATC_ISSCAMPAIGNS_1_FROM_ATC_ISSCAMPAIGNS_TITLE_ID',
  'id_name' => 'cases_atc_isscampaigns_1atc_isscampaigns_idb',
  'link' => 'cases_atc_isscampaigns_1',
  'table' => 'atc_isscampaigns',
  'module' => 'ATC_ISSCampaigns',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
