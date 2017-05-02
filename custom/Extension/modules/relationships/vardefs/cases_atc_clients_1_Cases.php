<?php
// created: 2017-04-17 19:46:53
$dictionary["Case"]["fields"]["cases_atc_clients_1"] = array (
  'name' => 'cases_atc_clients_1',
  'type' => 'link',
  'relationship' => 'cases_atc_clients_1',
  'source' => 'non-db',
  'module' => 'ATC_Clients',
  'bean_name' => 'ATC_Clients',
  'vname' => 'LBL_CASES_ATC_CLIENTS_1_FROM_ATC_CLIENTS_TITLE',
  'id_name' => 'cases_atc_clients_1atc_clients_idb',
);
$dictionary["Case"]["fields"]["cases_atc_clients_1_name"] = array (
  'name' => 'cases_atc_clients_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CASES_ATC_CLIENTS_1_FROM_ATC_CLIENTS_TITLE',
  'save' => true,
  'id_name' => 'cases_atc_clients_1atc_clients_idb',
  'link' => 'cases_atc_clients_1',
  'table' => 'atc_clients',
  'module' => 'ATC_Clients',
  'rname' => 'name',
);
$dictionary["Case"]["fields"]["cases_atc_clients_1atc_clients_idb"] = array (
  'name' => 'cases_atc_clients_1atc_clients_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CASES_ATC_CLIENTS_1_FROM_ATC_CLIENTS_TITLE_ID',
  'id_name' => 'cases_atc_clients_1atc_clients_idb',
  'link' => 'cases_atc_clients_1',
  'table' => 'atc_clients',
  'module' => 'ATC_Clients',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
