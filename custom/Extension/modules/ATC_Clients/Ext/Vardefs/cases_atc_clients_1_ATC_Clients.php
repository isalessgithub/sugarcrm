<?php
// created: 2017-04-17 19:46:53
$dictionary["ATC_Clients"]["fields"]["cases_atc_clients_1"] = array (
  'name' => 'cases_atc_clients_1',
  'type' => 'link',
  'relationship' => 'cases_atc_clients_1',
  'source' => 'non-db',
  'module' => 'Cases',
  'bean_name' => 'Case',
  'vname' => 'LBL_CASES_ATC_CLIENTS_1_FROM_CASES_TITLE',
  'id_name' => 'cases_atc_clients_1cases_ida',
);
$dictionary["ATC_Clients"]["fields"]["cases_atc_clients_1_name"] = array (
  'name' => 'cases_atc_clients_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CASES_ATC_CLIENTS_1_FROM_CASES_TITLE',
  'save' => true,
  'id_name' => 'cases_atc_clients_1cases_ida',
  'link' => 'cases_atc_clients_1',
  'table' => 'cases',
  'module' => 'Cases',
  'rname' => 'name',
);
$dictionary["ATC_Clients"]["fields"]["cases_atc_clients_1cases_ida"] = array (
  'name' => 'cases_atc_clients_1cases_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CASES_ATC_CLIENTS_1_FROM_CASES_TITLE_ID',
  'id_name' => 'cases_atc_clients_1cases_ida',
  'link' => 'cases_atc_clients_1',
  'table' => 'cases',
  'module' => 'Cases',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
