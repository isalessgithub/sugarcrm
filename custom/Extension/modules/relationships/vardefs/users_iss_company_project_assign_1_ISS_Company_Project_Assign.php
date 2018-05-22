<?php
// created: 2018-05-17 13:38:57
$dictionary["ISS_Company_Project_Assign"]["fields"]["users_iss_company_project_assign_1"] = array (
  'name' => 'users_iss_company_project_assign_1',
  'type' => 'link',
  'relationship' => 'users_iss_company_project_assign_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'side' => 'right',
  'vname' => 'LBL_USERS_ISS_COMPANY_PROJECT_ASSIGN_1_FROM_ISS_COMPANY_PROJECT_ASSIGN_TITLE',
  'id_name' => 'users_iss_company_project_assign_1users_ida',
  'link-type' => 'one',
);
$dictionary["ISS_Company_Project_Assign"]["fields"]["users_iss_company_project_assign_1_name"] = array (
  'name' => 'users_iss_company_project_assign_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_ISS_COMPANY_PROJECT_ASSIGN_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_iss_company_project_assign_1users_ida',
  'link' => 'users_iss_company_project_assign_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["ISS_Company_Project_Assign"]["fields"]["users_iss_company_project_assign_1users_ida"] = array (
  'name' => 'users_iss_company_project_assign_1users_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_ISS_COMPANY_PROJECT_ASSIGN_1_FROM_ISS_COMPANY_PROJECT_ASSIGN_TITLE_ID',
  'id_name' => 'users_iss_company_project_assign_1users_ida',
  'link' => 'users_iss_company_project_assign_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
