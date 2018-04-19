<?php
// created: 2018-02-19 15:02:17
$dictionary["MS_ReportDeliveryLog"]["fields"]["ms_reportdeliveryconfiguration_ms_reportdeliverylog_1"] = array (
  'name' => 'ms_reportdeliveryconfiguration_ms_reportdeliverylog_1',
  'type' => 'link',
  'relationship' => 'ms_reportdeliveryconfiguration_ms_reportdeliverylog_1',
  'source' => 'non-db',
  'module' => 'MS_ReportDeliveryConfiguration',
  'bean_name' => 'MS_ReportDeliveryConfiguration',
  'side' => 'right',
  'vname' => 'LBL_MS_REPORTDELIVERYCONFIGURATION_MS_REPORTDELIVERYLOG_1_FROM_MS_REPORTDELIVERYLOG_TITLE',
  'id_name' => 'ms_reportdaa12uration_ida',
  'link-type' => 'one',
);
$dictionary["MS_ReportDeliveryLog"]["fields"]["ms_reportdeliveryconfiguration_ms_reportdeliverylog_1_name"] = array (
  'name' => 'ms_reportdeliveryconfiguration_ms_reportdeliverylog_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MS_REPORTDELIVERYCONFIGURATION_MS_REPORTDELIVERYLOG_1_FROM_MS_REPORTDELIVERYCONFIGURATION_TITLE',
  'save' => true,
  'id_name' => 'ms_reportdaa12uration_ida',
  'link' => 'ms_reportdeliveryconfiguration_ms_reportdeliverylog_1',
  'table' => 'ms_reportdeliveryconfiguration',
  'module' => 'MS_ReportDeliveryConfiguration',
  'rname' => 'name',
);
$dictionary["MS_ReportDeliveryLog"]["fields"]["ms_reportdaa12uration_ida"] = array (
  'name' => 'ms_reportdaa12uration_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_MS_REPORTDELIVERYCONFIGURATION_MS_REPORTDELIVERYLOG_1_FROM_MS_REPORTDELIVERYLOG_TITLE_ID',
  'id_name' => 'ms_reportdaa12uration_ida',
  'link' => 'ms_reportdeliveryconfiguration_ms_reportdeliverylog_1',
  'table' => 'ms_reportdeliveryconfiguration',
  'module' => 'MS_ReportDeliveryConfiguration',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
