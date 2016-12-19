<?php
// created: 2014-04-24 16:15:42
$dictionary["SYNO_DashboardTemplateLines"]["fields"]["syno_dashboardtemplatelines_syno_dashboardtemplates"] = array(
  'name' => 'syno_dashboardtemplatelines_syno_dashboardtemplates',
  'type' => 'link',
  'relationship' => 'syno_dashboardtemplatelines_syno_dashboardtemplates',
  'source' => 'non-db',
  'module' => 'SYNO_DashboardTemplates',
  'bean_name' => 'SYNO_DashboardTemplates',
  'side' => 'right',
  'vname' => 'LBL_SYNO_DASHBOARDTEMPLATELINES_SYNO_DASHBOARDTEMPLATES_FROM_SYNO_DASHBOARDTEMPLATELINES_TITLE',
  'id_name' => 'syno_dashbb94dmplates_ida',
  'link-type' => 'one',
);
$dictionary["SYNO_DashboardTemplateLines"]["fields"]["syno_dashboardtemplatelines_syno_dashboardtemplates_name"] = array(
  'name' => 'syno_dashboardtemplatelines_syno_dashboardtemplates_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SYNO_DASHBOARDTEMPLATELINES_SYNO_DASHBOARDTEMPLATES_FROM_SYNO_DASHBOARDTEMPLATES_TITLE',
  'save' => true,
  'id_name' => 'syno_dashbb94dmplates_ida',
  'link' => 'syno_dashboardtemplatelines_syno_dashboardtemplates',
  'table' => 'syno_dashboardtemplates',
  'module' => 'SYNO_DashboardTemplates',
  'rname' => 'name',
);
$dictionary["SYNO_DashboardTemplateLines"]["fields"]["syno_dashbb94dmplates_ida"] = array(
  'name' => 'syno_dashbb94dmplates_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_SYNO_DASHBOARDTEMPLATELINES_SYNO_DASHBOARDTEMPLATES_FROM_LBL_SYNO_DASHBOARDTEMPLATELINES_SYNO_DASHBOARDTEMPLATES_FROM_SYNO_DASHBOARDTEMPLATELINES_TITLE_TITLE',
  'id_name' => 'syno_dashbb94dmplates_ida',
  'link' => 'syno_dashboardtemplatelines_syno_dashboardtemplates',
  'table' => 'syno_dashboardtemplates',
  'module' => 'SYNO_DashboardTemplates',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
