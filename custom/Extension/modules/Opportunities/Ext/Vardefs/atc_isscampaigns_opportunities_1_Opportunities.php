<?php
// created: 2017-10-14 12:59:38
$dictionary["Opportunity"]["fields"]["atc_isscampaigns_opportunities_1"] = array (
  'name' => 'atc_isscampaigns_opportunities_1',
  'type' => 'link',
  'relationship' => 'atc_isscampaigns_opportunities_1',
  'source' => 'non-db',
  'module' => 'ATC_ISSCampaigns',
  'bean_name' => 'ATC_ISSCampaigns',
  'side' => 'right',
  'vname' => 'LBL_ATC_ISSCAMPAIGNS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'atc_isscampaigns_opportunities_1atc_isscampaigns_ida',
  'link-type' => 'one',
);
$dictionary["Opportunity"]["fields"]["atc_isscampaigns_opportunities_1_name"] = array (
  'name' => 'atc_isscampaigns_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_ISSCAMPAIGNS_OPPORTUNITIES_1_FROM_ATC_ISSCAMPAIGNS_TITLE',
  'save' => true,
  'id_name' => 'atc_isscampaigns_opportunities_1atc_isscampaigns_ida',
  'link' => 'atc_isscampaigns_opportunities_1',
  'table' => 'atc_isscampaigns',
  'module' => 'ATC_ISSCampaigns',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["atc_isscampaigns_opportunities_1atc_isscampaigns_ida"] = array (
  'name' => 'atc_isscampaigns_opportunities_1atc_isscampaigns_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_ISSCAMPAIGNS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE_ID',
  'id_name' => 'atc_isscampaigns_opportunities_1atc_isscampaigns_ida',
  'link' => 'atc_isscampaigns_opportunities_1',
  'table' => 'atc_isscampaigns',
  'module' => 'ATC_ISSCampaigns',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
