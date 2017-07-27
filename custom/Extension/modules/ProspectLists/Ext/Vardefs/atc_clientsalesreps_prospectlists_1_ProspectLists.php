<?php
// created: 2017-07-10 15:58:07
$dictionary["ProspectList"]["fields"]["atc_clientsalesreps_prospectlists_1"] = array (
  'name' => 'atc_clientsalesreps_prospectlists_1',
  'type' => 'link',
  'relationship' => 'atc_clientsalesreps_prospectlists_1',
  'source' => 'non-db',
  'module' => 'ATC_ClientSalesReps',
  'bean_name' => 'ATC_ClientSalesReps',
  'side' => 'right',
  'vname' => 'LBL_ATC_CLIENTSALESREPS_PROSPECTLISTS_1_FROM_PROSPECTLISTS_TITLE',
  'id_name' => 'atc_clientsalesreps_prospectlists_1atc_clientsalesreps_ida',
  'link-type' => 'one',
);
$dictionary["ProspectList"]["fields"]["atc_clientsalesreps_prospectlists_1_name"] = array (
  'name' => 'atc_clientsalesreps_prospectlists_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_CLIENTSALESREPS_PROSPECTLISTS_1_FROM_ATC_CLIENTSALESREPS_TITLE',
  'save' => true,
  'id_name' => 'atc_clientsalesreps_prospectlists_1atc_clientsalesreps_ida',
  'link' => 'atc_clientsalesreps_prospectlists_1',
  'table' => 'atc_clientsalesreps',
  'module' => 'ATC_ClientSalesReps',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["ProspectList"]["fields"]["atc_clientsalesreps_prospectlists_1atc_clientsalesreps_ida"] = array (
  'name' => 'atc_clientsalesreps_prospectlists_1atc_clientsalesreps_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_CLIENTSALESREPS_PROSPECTLISTS_1_FROM_PROSPECTLISTS_TITLE_ID',
  'id_name' => 'atc_clientsalesreps_prospectlists_1atc_clientsalesreps_ida',
  'link' => 'atc_clientsalesreps_prospectlists_1',
  'table' => 'atc_clientsalesreps',
  'module' => 'ATC_ClientSalesReps',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
