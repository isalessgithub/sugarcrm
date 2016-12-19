<?php
// created: 2014-11-07 14:46:10
$dictionary["SYNO_DashboardTemplateHistory"]["fields"]["syno_dashboardtemplatehistory_syno_dashboardtemplates"] = array(
  'name' => 'syno_dashboardtemplatehistory_syno_dashboardtemplates',
  'type' => 'link',
  'relationship' => 'syno_dashboardtemplatehistory_syno_dashboardtemplates',
  'source' => 'non-db',
  'module' => 'SYNO_DashboardTemplates',
  'bean_name' => 'SYNO_DashboardTemplates',
  'side' => 'right',
  'vname' => 'LBL_SYNO_DASHBOARDTEMPLATEHISTORY_SYNO_DASHBOARDTEMPLATES_FROM_SYNO_DASHBOARDTEMPLATEHISTORY_TITLE',
  'id_name' => 'syno_dashb4d41mplates_ida',
  'link-type' => 'one',
);
$dictionary["SYNO_DashboardTemplateHistory"]["fields"]["syno_dashboardtemplatehistory_syno_dashboardtemplates_name"] = array(
  'name' => 'syno_dashboardtemplatehistory_syno_dashboardtemplates_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SYNO_DASHBOARDTEMPLATEHISTORY_SYNO_DASHBOARDTEMPLATES_FROM_SYNO_DASHBOARDTEMPLATES_TITLE',
  'save' => true,
  'id_name' => 'syno_dashb4d41mplates_ida',
  'link' => 'syno_dashboardtemplatehistory_syno_dashboardtemplates',
  'table' => 'syno_dashboardtemplates',
  'module' => 'SYNO_DashboardTemplates',
  'rname' => 'name',
);
$dictionary["SYNO_DashboardTemplateHistory"]["fields"]["syno_dashb4d41mplates_ida"] = array(
  'name' => 'syno_dashb4d41mplates_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_SYNO_DASHBOARDTEMPLATEHISTORY_SYNO_DASHBOARDTEMPLATES_FROM_LBL_SYNO_DASHBOARDTEMPLATEHISTORY_SYNO_DASHBOARDTEMPLATES_FROM_SYNO_DASHBOARDTEMPLATEHISTORY_TITLE_TITLE',
  'id_name' => 'syno_dashb4d41mplates_ida',
  'link' => 'syno_dashboardtemplatehistory_syno_dashboardtemplates',
  'table' => 'syno_dashboardtemplates',
  'module' => 'SYNO_DashboardTemplates',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
