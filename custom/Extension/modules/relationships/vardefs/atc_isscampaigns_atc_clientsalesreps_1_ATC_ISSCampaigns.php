<?php
// created: 2018-10-25 13:16:48
$dictionary["ATC_ISSCampaigns"]["fields"]["atc_isscampaigns_atc_clientsalesreps_1"] = array (
  'name' => 'atc_isscampaigns_atc_clientsalesreps_1',
  'type' => 'link',
  'relationship' => 'atc_isscampaigns_atc_clientsalesreps_1',
  'source' => 'non-db',
  'module' => 'ATC_ClientSalesReps',
  'bean_name' => 'ATC_ClientSalesReps',
  'vname' => 'LBL_ATC_ISSCAMPAIGNS_ATC_CLIENTSALESREPS_1_FROM_ATC_CLIENTSALESREPS_TITLE',
  'id_name' => 'atc_isscampaigns_atc_clientsalesreps_1atc_clientsalesreps_idb',
);
$dictionary["ATC_ISSCampaigns"]["fields"]["atc_isscampaigns_atc_clientsalesreps_1_name"] = array (
  'name' => 'atc_isscampaigns_atc_clientsalesreps_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_ISSCAMPAIGNS_ATC_CLIENTSALESREPS_1_FROM_ATC_CLIENTSALESREPS_TITLE',
  'save' => true,
  'id_name' => 'atc_isscampaigns_atc_clientsalesreps_1atc_clientsalesreps_idb',
  'link' => 'atc_isscampaigns_atc_clientsalesreps_1',
  'table' => 'atc_clientsalesreps',
  'module' => 'ATC_ClientSalesReps',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["ATC_ISSCampaigns"]["fields"]["atc_isscampaigns_atc_clientsalesreps_1atc_clientsalesreps_idb"] = array (
  'name' => 'atc_isscampaigns_atc_clientsalesreps_1atc_clientsalesreps_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_ISSCAMPAIGNS_ATC_CLIENTSALESREPS_1_FROM_ATC_CLIENTSALESREPS_TITLE_ID',
  'id_name' => 'atc_isscampaigns_atc_clientsalesreps_1atc_clientsalesreps_idb',
  'link' => 'atc_isscampaigns_atc_clientsalesreps_1',
  'table' => 'atc_clientsalesreps',
  'module' => 'ATC_ClientSalesReps',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
