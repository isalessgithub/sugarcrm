<?php
// created: 2013-09-04 13:19:47
$dictionary["ATC_Clients"]["fields"]["users_atc_clients_1"] = array (
  'name' => 'users_atc_clients_1',
  'type' => 'link',
  'relationship' => 'users_atc_clients_1',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_ATC_CLIENTS_1_FROM_USERS_TITLE',
  'id_name' => 'users_atc_clients_1users_ida',
);
$dictionary["ATC_Clients"]["fields"]["users_atc_clients_1_name"] = array (
  'name' => 'users_atc_clients_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_ATC_CLIENTS_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_atc_clients_1users_ida',
  'link' => 'users_atc_clients_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["ATC_Clients"]["fields"]["users_atc_clients_1users_ida"] = array (
  'name' => 'users_atc_clients_1users_ida',
  'type' => 'link',
  'relationship' => 'users_atc_clients_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_USERS_ATC_CLIENTS_1_FROM_ATC_CLIENTS_TITLE',
);
