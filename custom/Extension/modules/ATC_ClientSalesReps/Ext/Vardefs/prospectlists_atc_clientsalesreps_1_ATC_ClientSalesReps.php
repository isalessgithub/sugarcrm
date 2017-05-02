<?php
// created: 2017-04-14 13:58:05
$dictionary["ATC_ClientSalesReps"]["fields"]["prospectlists_atc_clientsalesreps_1"] = array (
  'name' => 'prospectlists_atc_clientsalesreps_1',
  'type' => 'link',
  'relationship' => 'prospectlists_atc_clientsalesreps_1',
  'source' => 'non-db',
  'module' => 'ProspectLists',
  'bean_name' => 'ProspectList',
  'vname' => 'LBL_PROSPECTLISTS_ATC_CLIENTSALESREPS_1_FROM_PROSPECTLISTS_TITLE',
  'id_name' => 'prospectlists_atc_clientsalesreps_1prospectlists_ida',
);
$dictionary["ATC_ClientSalesReps"]["fields"]["prospectlists_atc_clientsalesreps_1_name"] = array (
  'name' => 'prospectlists_atc_clientsalesreps_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PROSPECTLISTS_ATC_CLIENTSALESREPS_1_FROM_PROSPECTLISTS_TITLE',
  'save' => true,
  'id_name' => 'prospectlists_atc_clientsalesreps_1prospectlists_ida',
  'link' => 'prospectlists_atc_clientsalesreps_1',
  'table' => 'prospect_lists',
  'module' => 'ProspectLists',
  'rname' => 'name',
);
$dictionary["ATC_ClientSalesReps"]["fields"]["prospectlists_atc_clientsalesreps_1prospectlists_ida"] = array (
  'name' => 'prospectlists_atc_clientsalesreps_1prospectlists_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_PROSPECTLISTS_ATC_CLIENTSALESREPS_1_FROM_PROSPECTLISTS_TITLE_ID',
  'id_name' => 'prospectlists_atc_clientsalesreps_1prospectlists_ida',
  'link' => 'prospectlists_atc_clientsalesreps_1',
  'table' => 'prospect_lists',
  'module' => 'ProspectLists',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
