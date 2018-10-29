<?php
// created: 2018-10-25 13:16:48
$dictionary["ATC_ClientSalesReps"]["fields"]["atc_isscampaigns_atc_clientsalesreps_1"] = array (
  'name' => 'atc_isscampaigns_atc_clientsalesreps_1',
  'type' => 'link',
  'relationship' => 'atc_isscampaigns_atc_clientsalesreps_1',
  'source' => 'non-db',
  'module' => 'ATC_ISSCampaigns',
  'bean_name' => 'ATC_ISSCampaigns',
  'vname' => 'LBL_ATC_ISSCAMPAIGNS_ATC_CLIENTSALESREPS_1_FROM_ATC_ISSCAMPAIGNS_TITLE',
  'id_name' => 'atc_isscampaigns_atc_clientsalesreps_1atc_isscampaigns_ida',
);
$dictionary["ATC_ClientSalesReps"]["fields"]["atc_isscampaigns_atc_clientsalesreps_1_name"] = array (
  'name' => 'atc_isscampaigns_atc_clientsalesreps_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_ISSCAMPAIGNS_ATC_CLIENTSALESREPS_1_FROM_ATC_ISSCAMPAIGNS_TITLE',
  'save' => true,
  'id_name' => 'atc_isscampaigns_atc_clientsalesreps_1atc_isscampaigns_ida',
  'link' => 'atc_isscampaigns_atc_clientsalesreps_1',
  'table' => 'atc_isscampaigns',
  'module' => 'ATC_ISSCampaigns',
  'rname' => 'name',
);
$dictionary["ATC_ClientSalesReps"]["fields"]["atc_isscampaigns_atc_clientsalesreps_1atc_isscampaigns_ida"] = array (
  'name' => 'atc_isscampaigns_atc_clientsalesreps_1atc_isscampaigns_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_ISSCAMPAIGNS_ATC_CLIENTSALESREPS_1_FROM_ATC_ISSCAMPAIGNS_TITLE_ID',
  'id_name' => 'atc_isscampaigns_atc_clientsalesreps_1atc_isscampaigns_ida',
  'link' => 'atc_isscampaigns_atc_clientsalesreps_1',
  'table' => 'atc_isscampaigns',
  'module' => 'ATC_ISSCampaigns',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
