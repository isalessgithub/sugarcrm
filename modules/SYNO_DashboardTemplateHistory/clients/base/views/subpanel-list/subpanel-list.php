<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
$module_name = 'SYNO_DashboardTemplateHistory';
$viewdefs[$module_name]['base']['view']['subpanel-list'] = array(
  'panels' => array(
    0 => array(
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' => array(
        0 => array(
          'name' => 'syno_dashboardtemplatehistory_users_name',
          'label' => 'LBL_SYNO_DASHBOARDTEMPLATEHISTORY_USERS_FROM_USERS_TITLE',
          'enabled' => true,
          'id' => 'SYNO_DASHBOARDTEMPLATEHISTORY_USERSUSERS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        1 => array(
          'name' => 'syno_dashboardtemplatehistory_syno_dashboardtemplates_name',
          'label' => 'LBL_SYNO_DASHBOARDTEMPLATEHISTORY_SYNO_DASHBOARDTEMPLATES_FROM_SYNO_DASHBOARDTEMPLATES_TITLE',
          'enabled' => true,
          'id' => 'SYNO_DASHB4D41MPLATES_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        2 => array(
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
  'type' => 'subpanel-list',
  'rowactions' => array(
      'actions' => array(),
  ),
);
