<?php
// created: 2018-02-19 15:02:17
$dictionary["ms_reportdeliveryconfiguration_ms_reportdeliverylog_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'ms_reportdeliveryconfiguration_ms_reportdeliverylog_1' => 
    array (
      'lhs_module' => 'MS_ReportDeliveryConfiguration',
      'lhs_table' => 'ms_reportdeliveryconfiguration',
      'lhs_key' => 'id',
      'rhs_module' => 'MS_ReportDeliveryLog',
      'rhs_table' => 'ms_reportdeliverylog',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ms_reportdeliveryconfiguration_ms_reportdeliverylog_1_c',
      'join_key_lhs' => 'ms_reportdaa12uration_ida',
      'join_key_rhs' => 'ms_reportd0a88verylog_idb',
    ),
  ),
  'table' => 'ms_reportdeliveryconfiguration_ms_reportdeliverylog_1_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'ms_reportdaa12uration_ida' => 
    array (
      'name' => 'ms_reportdaa12uration_ida',
      'type' => 'id',
    ),
    'ms_reportd0a88verylog_idb' => 
    array (
      'name' => 'ms_reportd0a88verylog_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_ms_reportdeliveryconfiguration_ms_reportdeliverylog_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_ms_reportdeliveryconfiguration_ms_reportdeliverylog_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ms_reportdaa12uration_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_ms_reportdeliveryconfiguration_ms_reportdeliverylog_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ms_reportd0a88verylog_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'ms_reportdeliveryconfiguration_ms_reportdeliverylog_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ms_reportd0a88verylog_idb',
      ),
    ),
  ),
);