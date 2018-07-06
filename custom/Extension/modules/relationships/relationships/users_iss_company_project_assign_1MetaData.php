<?php
// created: 2018-05-08 15:26:49
$dictionary["users_iss_company_project_assign_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'users_iss_company_project_assign_1' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ISS_Company_Project_Assign',
      'rhs_table' => 'iss_company_project_assign',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'users_iss_company_project_assign_1_c',
      'join_key_lhs' => 'users_iss_company_project_assign_1users_ida',
      'join_key_rhs' => 'users_iss_company_project_assign_1iss_company_project_assign_idb',
    ),
  ),
  'table' => 'users_iss_company_project_assign_1_c',
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
    'users_iss_company_project_assign_1users_ida' => 
    array (
      'name' => 'users_iss_company_project_assign_1users_ida',
      'type' => 'id',
    ),
    'users_iss_company_project_assign_1iss_company_project_assign_idb' => 
    array (
      'name' => 'users_iss_company_project_assign_1iss_company_project_assign_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_users_iss_company_project_assign_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_users_iss_company_project_assign_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'users_iss_company_project_assign_1users_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_users_iss_company_project_assign_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'users_iss_company_project_assign_1iss_company_project_assign_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'users_iss_company_project_assign_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'users_iss_company_project_assign_1iss_company_project_assign_idb',
      ),
    ),
  ),
);