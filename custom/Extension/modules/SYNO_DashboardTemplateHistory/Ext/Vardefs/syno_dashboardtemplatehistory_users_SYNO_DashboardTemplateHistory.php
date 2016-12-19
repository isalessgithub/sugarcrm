<?php
// created: 2014-11-07 14:46:10
$dictionary["SYNO_DashboardTemplateHistory"]["fields"]["syno_dashboardtemplatehistory_users"] = array(
  'name' => 'syno_dashboardtemplatehistory_users',
  'type' => 'link',
  'relationship' => 'syno_dashboardtemplatehistory_users',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'side' => 'right',
  'vname' => 'LBL_SYNO_DASHBOARDTEMPLATEHISTORY_USERS_FROM_SYNO_DASHBOARDTEMPLATEHISTORY_TITLE',
  'id_name' => 'syno_dashboardtemplatehistory_usersusers_ida',
  'link-type' => 'one',
);
$dictionary["SYNO_DashboardTemplateHistory"]["fields"]["syno_dashboardtemplatehistory_users_name"] = array(
  'name' => 'syno_dashboardtemplatehistory_users_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SYNO_DASHBOARDTEMPLATEHISTORY_USERS_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'syno_dashboardtemplatehistory_usersusers_ida',
  'link' => 'syno_dashboardtemplatehistory_users',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["SYNO_DashboardTemplateHistory"]["fields"]["syno_dashboardtemplatehistory_usersusers_ida"] = array(
  'name' => 'syno_dashboardtemplatehistory_usersusers_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_SYNO_DASHBOARDTEMPLATEHISTORY_USERS_FROM_LBL_SYNO_DASHBOARDTEMPLATEHISTORY_USERS_FROM_SYNO_DASHBOARDTEMPLATEHISTORY_TITLE_TITLE',
  'id_name' => 'syno_dashboardtemplatehistory_usersusers_ida',
  'link' => 'syno_dashboardtemplatehistory_users',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
