<?php
// created: 2013-08-15 15:43:30
$dictionary["Call"]["fields"]["atc_isscampaigns_calls_1"] = array (
  'name' => 'atc_isscampaigns_calls_1',
  'type' => 'link',
  'relationship' => 'atc_isscampaigns_calls_1',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_ISSCAMPAIGNS_CALLS_1_FROM_ATC_ISSCAMPAIGNS_TITLE',
  'id_name' => 'atc_isscampaigns_calls_1atc_isscampaigns_ida',
);
$dictionary["Call"]["fields"]["atc_isscampaigns_calls_1_name"]=array (
  'name' => 'atc_isscampaigns_calls_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_ISSCAMPAIGNS_CALLS_1_FROM_ATC_ISSCAMPAIGNS_TITLE',
  'save' => true,
  'id_name' => 'atc_isscampaigns_calls_1atc_isscampaigns_ida',
  'link' => 'atc_isscampaigns_calls_1',
  'table' => 'atc_isscampaigns',
  'module' => 'ATC_ISSCampaigns',
  'rname' => 'name',
);

$dictionary["Call"]["fields"]["atc_isscampaigns_calls_1atc_isscampaigns_ida"]=array (
  'name' => 'atc_isscampaigns_calls_1atc_isscampaigns_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_ISSCAMPAIGNS_CALLS_1_FROM_CALLS_TITLE',
  'id_name' => 'atc_isscampaigns_calls_1atc_isscampaigns_ida',
  'link' => 'atc_isscampaigns_calls_1',
  'table' => 'atc_isscampaigns',
  'module' => 'ATC_ISSCampaigns',
  'rname' => 'id',
  'reportable' => false,
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
$dictionary["Call"]["fields"]["atc_isscampaigns_calls_1_right"]=array (
  'name' => 'atc_isscampaigns_calls_1_right',
  'type' => 'link',
  'relationship' => 'atc_isscampaigns_calls_1',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_ISSCAMPAIGNS_CALLS_1_FROM_CALLS_TITLE',
  'id_name' => '_idb',
  'side' => 'right',
  'link-type' => 'many',
);

