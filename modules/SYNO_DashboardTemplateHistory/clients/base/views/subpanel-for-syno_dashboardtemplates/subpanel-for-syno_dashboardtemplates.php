<?php
// created: 2014-11-07 17:03:29
$viewdefs['SYNO_DashboardTemplateHistory']['base']['view']['subpanel-for-syno_dashboardtemplates'] = array(
  'panels' => array(
    0 => array(
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' => array(
        array(
          'name' => 'syno_dashboardtemplatehistory_users_name',
          'label' => 'LBL_SYNO_DASHBOARDTEMPLATEHISTORY_USERS_FROM_USERS_TITLE',
          'enabled' => true,
          'id' => 'SYNO_DASHBOARDTEMPLATEHISTORY_USERSUSERS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        array(
          'name' => 'syno_dashboardtemplatehistory_syno_dashboardtemplates_name',
          'label' => 'LBL_SYNO_DASHBOARDTEMPLATEHISTORY_SYNO_DASHBOARDTEMPLATES_FROM_SYNO_DASHBOARDTEMPLATES_TITLE',
          'enabled' => true,
          'id' => 'SYNO_DASHB4D41MPLATES_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        array(
          'name' => 'date_entered',
          'label' => 'LBL_DATE_ENTERED',
          'enabled' => true,
          'readonly' => true,
          'default' => true,
        ),
      ),
    ),
  ),
  'orderBy' => array(
    'field' => 'date_modified',
    'direction' => 'desc',
  ),
  'rowactions' => array(
    'actions' => array(),
  ),
  'type' => 'subpanel-list',
);
