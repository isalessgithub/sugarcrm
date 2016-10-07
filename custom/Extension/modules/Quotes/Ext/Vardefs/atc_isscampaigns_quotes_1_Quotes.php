<?php
// created: 2016-06-06 12:06:50
$dictionary["Quote"]["fields"]["atc_isscampaigns_quotes_1"] = array (
  'name' => 'atc_isscampaigns_quotes_1',
  'type' => 'link',
  'relationship' => 'atc_isscampaigns_quotes_1',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_ISSCAMPAIGNS_QUOTES_1_FROM_ATC_ISSCAMPAIGNS_TITLE',
  'id_name' => 'atc_isscampaigns_quotes_1atc_isscampaigns_ida',
);
$dictionary["Quote"]["fields"]["atc_isscampaigns_quotes_1_name"]=array (
  'name' => 'atc_isscampaigns_quotes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_ISSCAMPAIGNS_QUOTES_1_FROM_ATC_ISSCAMPAIGNS_TITLE',
  'save' => true,
  'id_name' => 'atc_isscampaigns_quotes_1atc_isscampaigns_ida',
  'link' => 'atc_isscampaigns_quotes_1',
  'table' => 'atc_isscampaigns',
  'module' => 'ATC_ISSCampaigns',
  'rname' => 'name',
);

$dictionary["Quote"]["fields"]["atc_isscampaigns_quotes_1atc_isscampaigns_ida"]=array (
  'name' => 'atc_isscampaigns_quotes_1atc_isscampaigns_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_ISSCAMPAIGNS_QUOTES_1_FROM_QUOTES_TITLE',
  'id_name' => 'atc_isscampaigns_quotes_1atc_isscampaigns_ida',
  'link' => 'atc_isscampaigns_quotes_1',
  'table' => 'atc_isscampaigns',
  'module' => 'ATC_ISSCampaigns',
  'rname' => 'id',
  'reportable' => false,
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
$dictionary["Quote"]["fields"]["atc_isscampaigns_quotes_1_right"]=array (
  'name' => 'atc_isscampaigns_quotes_1_right',
  'type' => 'link',
  'relationship' => 'atc_isscampaigns_quotes_1',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_ISSCAMPAIGNS_QUOTES_1_FROM_QUOTES_TITLE',
  'id_name' => '_idb',
  'side' => 'right',
  'link-type' => 'many',
);

