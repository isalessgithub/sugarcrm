<?php
// created: 2016-05-02 19:08:06
$dictionary["Quote"]["fields"]["atc_clients_quotes_2"] = array (
  'name' => 'atc_clients_quotes_2',
  'type' => 'link',
  'relationship' => 'atc_clients_quotes_2',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_CLIENTS_QUOTES_2_FROM_ATC_CLIENTS_TITLE',
  'id_name' => 'atc_clients_quotes_2atc_clients_ida',
);
$dictionary["Quote"]["fields"]["atc_clients_quotes_2_name"]=array (
  'name' => 'atc_clients_quotes_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_CLIENTS_QUOTES_2_FROM_ATC_CLIENTS_TITLE',
  'save' => true,
  'id_name' => 'atc_clients_quotes_2atc_clients_ida',
  'link' => 'atc_clients_quotes_2',
  'table' => 'atc_clients',
  'module' => 'ATC_Clients',
  'rname' => 'name',
);

$dictionary["Quote"]["fields"]["atc_clients_quotes_2atc_clients_ida"]=array (
  'name' => 'atc_clients_quotes_2atc_clients_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_CLIENTS_QUOTES_2_FROM_QUOTES_TITLE',
  'id_name' => 'atc_clients_quotes_2atc_clients_ida',
  'link' => 'atc_clients_quotes_2',
  'table' => 'atc_clients',
  'module' => 'ATC_Clients',
  'rname' => 'id',
  'reportable' => false,
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
$dictionary["Quote"]["fields"]["atc_clients_quotes_2_right"]=array (
  'name' => 'atc_clients_quotes_2_right',
  'type' => 'link',
  'relationship' => 'atc_clients_quotes_2',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_CLIENTS_QUOTES_2_FROM_QUOTES_TITLE',
  'id_name' => '_idb',
  'side' => 'right',
  'link-type' => 'many',
);

