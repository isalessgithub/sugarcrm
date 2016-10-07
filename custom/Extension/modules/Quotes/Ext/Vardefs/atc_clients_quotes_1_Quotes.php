<?php
// created: 2016-04-15 12:10:09
$dictionary["Quote"]["fields"]["atc_clients_quotes_1"] = array (
  'name' => 'atc_clients_quotes_1',
  'type' => 'link',
  'relationship' => 'atc_clients_quotes_1',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_CLIENTS_QUOTES_1_FROM_ATC_CLIENTS_TITLE',
  'id_name' => 'atc_clients_quotes_1atc_clients_ida',
);
$dictionary["Quote"]["fields"]["atc_clients_quotes_1_name"]=array (
  'name' => 'atc_clients_quotes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_CLIENTS_QUOTES_1_FROM_ATC_CLIENTS_TITLE',
  'save' => true,
  'id_name' => 'atc_clients_quotes_1atc_clients_ida',
  'link' => 'atc_clients_quotes_1',
  'table' => 'atc_clients',
  'module' => 'ATC_Clients',
  'rname' => 'name',
);

$dictionary["Quote"]["fields"]["atc_clients_quotes_1atc_clients_ida"]=array (
  'name' => 'atc_clients_quotes_1atc_clients_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_CLIENTS_QUOTES_1_FROM_QUOTES_TITLE',
  'id_name' => 'atc_clients_quotes_1atc_clients_ida',
  'link' => 'atc_clients_quotes_1',
  'table' => 'atc_clients',
  'module' => 'ATC_Clients',
  'rname' => 'id',
  'reportable' => false,
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
$dictionary["Quote"]["fields"]["atc_clients_quotes_1_right"]=array (
  'name' => 'atc_clients_quotes_1_right',
  'type' => 'link',
  'relationship' => 'atc_clients_quotes_1',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_CLIENTS_QUOTES_1_FROM_QUOTES_TITLE',
  'id_name' => '_idb',
  'side' => 'right',
  'link-type' => 'many',
);

