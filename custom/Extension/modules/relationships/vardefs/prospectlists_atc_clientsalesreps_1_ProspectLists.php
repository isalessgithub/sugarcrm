<?php
// created: 2017-04-14 13:58:05
$dictionary["ProspectList"]["fields"]["prospectlists_atc_clientsalesreps_1"] = array (
  'name' => 'prospectlists_atc_clientsalesreps_1',
  'type' => 'link',
  'relationship' => 'prospectlists_atc_clientsalesreps_1',
  'source' => 'non-db',
  'module' => 'ATC_ClientSalesReps',
  'bean_name' => 'ATC_ClientSalesReps',
  'vname' => 'LBL_PROSPECTLISTS_ATC_CLIENTSALESREPS_1_FROM_ATC_CLIENTSALESREPS_TITLE',
  'id_name' => 'prospectlists_atc_clientsalesreps_1atc_clientsalesreps_idb',
);
$dictionary["ProspectList"]["fields"]["prospectlists_atc_clientsalesreps_1_name"] = array (
  'name' => 'prospectlists_atc_clientsalesreps_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PROSPECTLISTS_ATC_CLIENTSALESREPS_1_FROM_ATC_CLIENTSALESREPS_TITLE',
  'save' => true,
  'id_name' => 'prospectlists_atc_clientsalesreps_1atc_clientsalesreps_idb',
  'link' => 'prospectlists_atc_clientsalesreps_1',
  'table' => 'atc_clientsalesreps',
  'module' => 'ATC_ClientSalesReps',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["ProspectList"]["fields"]["prospectlists_atc_clientsalesreps_1atc_clientsalesreps_idb"] = array (
  'name' => 'prospectlists_atc_clientsalesreps_1atc_clientsalesreps_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_PROSPECTLISTS_ATC_CLIENTSALESREPS_1_FROM_ATC_CLIENTSALESREPS_TITLE_ID',
  'id_name' => 'prospectlists_atc_clientsalesreps_1atc_clientsalesreps_idb',
  'link' => 'prospectlists_atc_clientsalesreps_1',
  'table' => 'atc_clientsalesreps',
  'module' => 'ATC_ClientSalesReps',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
