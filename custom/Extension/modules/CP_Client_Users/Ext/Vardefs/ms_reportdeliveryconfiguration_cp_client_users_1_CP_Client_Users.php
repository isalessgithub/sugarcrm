<?php
// created: 2018-02-19 15:10:13
$dictionary["CP_Client_Users"]["fields"]["ms_reportdeliveryconfiguration_cp_client_users_1"] = array (
  'name' => 'ms_reportdeliveryconfiguration_cp_client_users_1',
  'type' => 'link',
  'relationship' => 'ms_reportdeliveryconfiguration_cp_client_users_1',
  'source' => 'non-db',
  'module' => 'MS_ReportDeliveryConfiguration',
  'bean_name' => 'MS_ReportDeliveryConfiguration',
  'vname' => 'LBL_MS_REPORTDELIVERYCONFIGURATION_CP_CLIENT_USERS_1_FROM_MS_REPORTDELIVERYCONFIGURATION_TITLE',
  'id_name' => 'ms_reportd2898uration_ida',
);
$dictionary["CP_Client_Users"]["fields"]["ms_reportdeliveryconfiguration_cp_client_users_1_name"] = array (
  'name' => 'ms_reportdeliveryconfiguration_cp_client_users_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MS_REPORTDELIVERYCONFIGURATION_CP_CLIENT_USERS_1_FROM_MS_REPORTDELIVERYCONFIGURATION_TITLE',
  'save' => true,
  'id_name' => 'ms_reportd2898uration_ida',
  'link' => 'ms_reportdeliveryconfiguration_cp_client_users_1',
  'table' => 'ms_reportdeliveryconfiguration',
  'module' => 'MS_ReportDeliveryConfiguration',
  'rname' => 'name',
);
$dictionary["CP_Client_Users"]["fields"]["ms_reportd2898uration_ida"] = array (
  'name' => 'ms_reportd2898uration_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_MS_REPORTDELIVERYCONFIGURATION_CP_CLIENT_USERS_1_FROM_MS_REPORTDELIVERYCONFIGURATION_TITLE_ID',
  'id_name' => 'ms_reportd2898uration_ida',
  'link' => 'ms_reportdeliveryconfiguration_cp_client_users_1',
  'table' => 'ms_reportdeliveryconfiguration',
  'module' => 'MS_ReportDeliveryConfiguration',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
