<?php
// created: 2016-04-15 12:09:51
$dictionary["esb_QB_Transactions"]["fields"]["atc_clients_esb_qb_transactions_1"] = array (
  'name' => 'atc_clients_esb_qb_transactions_1',
  'type' => 'link',
  'relationship' => 'atc_clients_esb_qb_transactions_1',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_CLIENTS_ESB_QB_TRANSACTIONS_1_FROM_ATC_CLIENTS_TITLE',
  'id_name' => 'atc_clients_esb_qb_transactions_1atc_clients_ida',
);
$dictionary["esb_QB_Transactions"]["fields"]["atc_clients_esb_qb_transactions_1_name"] = array (
  'name' => 'atc_clients_esb_qb_transactions_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_CLIENTS_ESB_QB_TRANSACTIONS_1_FROM_ATC_CLIENTS_TITLE',
  'save' => true,
  'id_name' => 'atc_clients_esb_qb_transactions_1atc_clients_ida',
  'link' => 'atc_clients_esb_qb_transactions_1',
  'table' => 'atc_clients',
  'module' => 'ATC_Clients',
  'rname' => 'name',
);
$dictionary["esb_QB_Transactions"]["fields"]["atc_clients_esb_qb_transactions_1atc_clients_ida"] = array (
  'name' => 'atc_clients_esb_qb_transactions_1atc_clients_ida',
  'type' => 'link',
  'relationship' => 'atc_clients_esb_qb_transactions_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ATC_CLIENTS_ESB_QB_TRANSACTIONS_1_FROM_ESB_QB_TRANSACTIONS_TITLE',
);
