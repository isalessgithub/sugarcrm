<?php
// created: 2018-03-09 13:24:25
$dictionary['syno_dashboardtemplatelines_syno_dashboardtemplates'] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'syno_dashboardtemplatelines_syno_dashboardtemplates' => 
    array (
      'lhs_module' => 'SYNO_DashboardTemplates',
      'lhs_table' => 'syno_dashboardtemplates',
      'lhs_key' => 'id',
      'rhs_module' => 'SYNO_DashboardTemplateLines',
      'rhs_table' => 'syno_dashboardtemplatelines',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'syno_dashboardtemplatelines_syno_dashboardtemplates_c',
      'join_key_lhs' => 'syno_dashbb94dmplates_ida',
      'join_key_rhs' => 'syno_dashb419atelines_idb',
    ),
  ),
  'table' => 'syno_dashboardtemplatelines_syno_dashboardtemplates_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
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
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    'syno_dashbb94dmplates_ida' => 
    array (
      'name' => 'syno_dashbb94dmplates_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    'syno_dashb419atelines_idb' => 
    array (
      'name' => 'syno_dashb419atelines_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'syno_dashboardtemplatelines_syno_dashboardtemplatesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'syno_dashboardtemplatelines_syno_dashboardtemplates_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'syno_dashbb94dmplates_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'syno_dashboardtemplatelines_syno_dashboardtemplates_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'syno_dashb419atelines_idb',
      ),
    ),
  ),
);