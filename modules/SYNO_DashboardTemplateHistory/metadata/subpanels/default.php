<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
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
$subpanel_layout = array(
    'top_buttons' => array(
    ),

    'where' => '',

    'list_fields' => array(
        array(
            'type' => 'relate',
            'link' => true,
            'vname' => 'LBL_SYNO_DASHBOARDTEMPLATEHISTORY_USERS_FROM_USERS_TITLE',
            'id' => 'SYNO_DASHBOARDTEMPLATEHISTORY_USERSUSERS_IDA',
            'sortable' => false,
            'width' => '10%',
            'default' => true,
            'widget_class' => 'SubPanelDetailViewLink',
            'target_module' => 'Users',
            'target_record_key' => 'syno_dashboardtemplatehistory_usersusers_ida',
          ),
          'date_entered' => array(
            'type' => 'datetime',
            'studio' => array(
              'portaleditview' => false,
            ),
            'readonly' => true,
            'vname' => 'LBL_DATE_ENTERED',
            'width' => '10%',
            'default' => true,
          ),
    ),
);
