<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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
$viewdefs['Cases']['base']['view']['list'] = array(
    'panels' =>
    array(
        0 =>
        array(
            'label' => 'LBL_PANEL_1',
            'fields' =>
            array(
                array(
                    'name' => 'case_number',
                    'label' => 'LBL_LIST_NUMBER',
                    'default' => true,
                    'enabled' => true,
                    'readonly' => true,
                ),
                array(
                    'name' => 'name',
                    'label' => 'LBL_LIST_SUBJECT',
                    'link' => true,
                    'default' => true,
                    'enabled' => true,
                ),
                array(
                    'name' => 'account_name',
                    'label' => 'LBL_LIST_ACCOUNT_NAME',
                    'module' => 'Accounts',
                    'id' => 'ACCOUNT_ID',
                    'ACLTag' => 'ACCOUNT',
                    'related_fields' => array('account_id'),
                    'link' => true,
                    'default' => true,
                    'enabled' => true,
                ),
                array(
                    'name' => 'priority',
                    'label' => 'LBL_LIST_PRIORITY',
                    'default' => true,
                    'enabled' => true,
                ),
                array(
                    'name' => 'status',
                    'label' => 'LBL_STATUS',
                    'default' => true,
                    'enabled' => true,
                ),
                array(
                    'name' => 'assigned_user_name',
                    'label' => 'LBL_ASSIGNED_TO_NAME',
                    'id' => 'ASSIGNED_USER_ID',
                    'default' => true,
                    'enabled' => true,
                ),
                array(
                    'name' => 'date_modified',
                    'enabled' => true,
                    'default' => true,
                ),
                array(
                    'name' => 'date_entered',
                    'label' => 'LBL_DATE_ENTERED',
                    'default' => true,
                    'enabled' => true,
                    'readonly' => true,
                ),
                array(
                    'name' => 'team_name',
                    'label' => 'LBL_LIST_TEAM',
                    'default' => false,
                    'enabled' => true,
                ),
            ),
        )
    )
);
