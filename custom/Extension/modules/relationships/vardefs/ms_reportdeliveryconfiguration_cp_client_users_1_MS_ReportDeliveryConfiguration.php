<?php
// created: 2018-02-19 15:10:13
$dictionary["MS_ReportDeliveryConfiguration"]["fields"]["ms_reportdeliveryconfiguration_cp_client_users_1"] = array (
  'name' => 'ms_reportdeliveryconfiguration_cp_client_users_1',
  'type' => 'link',
  'relationship' => 'ms_reportdeliveryconfiguration_cp_client_users_1',
  'source' => 'non-db',
  'module' => 'CP_Client_Users',
  'bean_name' => 'CP_Client_Users',
  'vname' => 'LBL_MS_REPORTDELIVERYCONFIGURATION_CP_CLIENT_USERS_1_FROM_CP_CLIENT_USERS_TITLE',
  'id_name' => 'ms_reportd2fd0t_users_idb',
);
$dictionary["MS_ReportDeliveryConfiguration"]["fields"]["ms_reportdeliveryconfiguration_cp_client_users_1_name"] = array (
  'name' => 'ms_reportdeliveryconfiguration_cp_client_users_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MS_REPORTDELIVERYCONFIGURATION_CP_CLIENT_USERS_1_FROM_CP_CLIENT_USERS_TITLE',
  'save' => true,
  'id_name' => 'ms_reportd2fd0t_users_idb',
  'link' => 'ms_reportdeliveryconfiguration_cp_client_users_1',
  'table' => 'cp_client_users',
  'module' => 'CP_Client_Users',
  'rname' => 'name',
);
$dictionary["MS_ReportDeliveryConfiguration"]["fields"]["ms_reportd2fd0t_users_idb"] = array (
  'name' => 'ms_reportd2fd0t_users_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_MS_REPORTDELIVERYCONFIGURATION_CP_CLIENT_USERS_1_FROM_CP_CLIENT_USERS_TITLE_ID',
  'id_name' => 'ms_reportd2fd0t_users_idb',
  'link' => 'ms_reportdeliveryconfiguration_cp_client_users_1',
  'table' => 'cp_client_users',
  'module' => 'CP_Client_Users',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
