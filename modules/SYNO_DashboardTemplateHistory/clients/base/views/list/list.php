<?php
$module_name = 'SYNO_DashboardTemplateHistory';
$viewdefs[$module_name] =
array(
  'base' => array(
    'view' => array(
      'list' => array(
        'panels' => array(
          0 => array(
            'label' => 'LBL_PANEL_1',
            'fields' => array(
              0 => array(
                'name' => 'name',
                'label' => 'LBL_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
                'width' => '10%',
              ),
              1 => array(
                'name' => 'syno_dashboardtemplatehistory_users_name',
                'label' => 'LBL_SYNO_DASHBOARDTEMPLATEHISTORY_USERS_FROM_USERS_TITLE',
                'enabled' => true,
                'id' => 'SYNO_DASHBOARDTEMPLATEHISTORY_USERSUSERS_IDA',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              2 => array(
                'name' => 'syno_dashboardtemplatehistory_syno_dashboardtemplates_name',
                'label' => 'LBL_SYNO_DASHBOARDTEMPLATEHISTORY_SYNO_DASHBOARDTEMPLATES_FROM_SYNO_DASHBOARDTEMPLATES_TITLE',
                'enabled' => true,
                'id' => 'SYNO_DASHB4D41MPLATES_IDA',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              3 => array(
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'width' => '9%',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              4 => array(
                'name' => 'date_entered',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'readonly' => true,
                'width' => '10%',
                'default' => true,
              ),
              5 => array(
                'label' => 'LBL_DATE_MODIFIED',
                'enabled' => true,
                'default' => true,
                'name' => 'date_modified',
                'readonly' => true,
                'width' => '10%',
              ),
            ),
          ),
        ),
        'orderBy' => array(
          'field' => 'date_modified',
          'direction' => 'desc',
        ),
      ),
    ),
  ),
);
