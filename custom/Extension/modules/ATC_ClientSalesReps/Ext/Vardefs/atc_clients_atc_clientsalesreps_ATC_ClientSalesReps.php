<?php
// created: 2013-08-06 14:59:59
$dictionary["ATC_ClientSalesReps"]["fields"]["atc_clients_atc_clientsalesreps"] = array (
  'name' => 'atc_clients_atc_clientsalesreps',
  'type' => 'link',
  'relationship' => 'atc_clients_atc_clientsalesreps',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_CLIENTS_ATC_CLIENTSALESREPS_FROM_ATC_CLIENTS_TITLE',
  'id_name' => 'atc_clients_atc_clientsalesrepsatc_clients_ida',
);
$dictionary["ATC_ClientSalesReps"]["fields"]["atc_clients_atc_clientsalesreps_name"] = array (
  'name' => 'atc_clients_atc_clientsalesreps_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_CLIENTS_ATC_CLIENTSALESREPS_FROM_ATC_CLIENTS_TITLE',
  'save' => true,
  'id_name' => 'atc_clients_atc_clientsalesrepsatc_clients_ida',
  'link' => 'atc_clients_atc_clientsalesreps',
  'table' => 'atc_clients',
  'module' => 'ATC_Clients',
  'rname' => 'name',
);
$dictionary["ATC_ClientSalesReps"]["fields"]["atc_clients_atc_clientsalesrepsatc_clients_ida"] = array (
  'name' => 'atc_clients_atc_clientsalesrepsatc_clients_ida',
  'type' => 'link',
  'relationship' => 'atc_clients_atc_clientsalesreps',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ATC_CLIENTS_ATC_CLIENTSALESREPS_FROM_ATC_CLIENTSALESREPS_TITLE',
);
