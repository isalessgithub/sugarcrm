<?php
// created: 2014-11-07 14:46:10
$dictionary["syno_dashboardtemplatehistory_syno_dashboardtemplates"] = array(
  'true_relationship_type' => 'one-to-many',
  'relationships' => array(
    'syno_dashboardtemplatehistory_syno_dashboardtemplates' => array(
      'lhs_module' => 'SYNO_DashboardTemplates',
      'lhs_table' => 'syno_dashboardtemplates',
      'lhs_key' => 'id',
      'rhs_module' => 'SYNO_DashboardTemplateHistory',
      'rhs_table' => 'syno_dashboardtemplatehistory',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'syno_dashboardtemplatehistory_syno_dashboardtemplates_c',
      'join_key_lhs' => 'syno_dashb4d41mplates_ida',
      'join_key_rhs' => 'syno_dashb25f5history_idb',
    ),
  ),
  'table' => 'syno_dashboardtemplatehistory_syno_dashboardtemplates_c',
  'fields' => array(
    0 => array(
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => array(
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => array(
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => array(
      'name' => 'syno_dashb4d41mplates_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => array(
      'name' => 'syno_dashb25f5history_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => array(
    0 => array(
      'name' => 'syno_dashboardtemplatehistory_syno_dashboardtemplatesspk',
      'type' => 'primary',
      'fields' => array(
        0 => 'id',
      ),
    ),
    1 => array(
      'name' => 'syno_dashboardtemplatehistory_syno_dashboardtemplates_ida1',
      'type' => 'index',
      'fields' => array(
        0 => 'syno_dashb4d41mplates_ida',
      ),
    ),
    2 => array(
      'name' => 'syno_dashboardtemplatehistory_syno_dashboardtemplates_alt',
      'type' => 'alternate_key',
      'fields' => array(
        0 => 'syno_dashb25f5history_idb',
      ),
    ),
  ),
);
