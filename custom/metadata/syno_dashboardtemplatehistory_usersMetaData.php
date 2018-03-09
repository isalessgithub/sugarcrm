<?php
// created: 2018-03-09 13:24:25
$dictionary['syno_dashboardtemplatehistory_users'] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'syno_dashboardtemplatehistory_users' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'SYNO_DashboardTemplateHistory',
      'rhs_table' => 'syno_dashboardtemplatehistory',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'syno_dashboardtemplatehistory_users_c',
      'join_key_lhs' => 'syno_dashboardtemplatehistory_usersusers_ida',
      'join_key_rhs' => 'syno_dashb8a60history_idb',
    ),
  ),
  'table' => 'syno_dashboardtemplatehistory_users_c',
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
    'syno_dashboardtemplatehistory_usersusers_ida' => 
    array (
      'name' => 'syno_dashboardtemplatehistory_usersusers_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    'syno_dashb8a60history_idb' => 
    array (
      'name' => 'syno_dashb8a60history_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'syno_dashboardtemplatehistory_usersspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'syno_dashboardtemplatehistory_users_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'syno_dashboardtemplatehistory_usersusers_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'syno_dashboardtemplatehistory_users_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'syno_dashb8a60history_idb',
      ),
    ),
  ),
);