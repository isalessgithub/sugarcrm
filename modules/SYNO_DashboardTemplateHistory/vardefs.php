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

$dictionary['SYNO_DashboardTemplateHistory'] = array(
    'table' => 'syno_dashboardtemplatehistory',
    'audited' => true,
    'activity_enabled' => false,
    'duplicate_merge' => true,
    'fields' => array(
  'name' => array(
    'name' => 'name',
    'vname' => 'LBL_NAME',
    'type' => 'name',
    'link' => true,
    'dbType' => 'varchar',
    'len' => '255',
    'unified_search' => false,
    'full_text_search' => array(
      'boost' => '0',
      'enabled' => false,
    ),
    'required' => true,
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'merge_filter' => 'disabled',
    'duplicate_on_record_copy' => 'always',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'reportable' => true,
    'calculated' => 'true',
    'formula' => 'concat(related($syno_dashboardtemplatehistory_syno_dashboardtemplates,"name"),related($syno_dashboardtemplatehistory_users,"last_name")," ",related($syno_dashboardtemplatehistory_users,"first_name")," - ",toString(now()))',
    'enforced' => true,
    'size' => '20',
  ),
),
    'relationships' => array(
),
    'acls' => array(
        'SugarACLAdminOnly' => true,
    ),
    'optimistic_locking' => true,
    'unified_search' => true,
);

if (!class_exists('VardefManager')) {
    require_once 'include/SugarObjects/VardefManager.php';
}
VardefManager::createVardef('SYNO_DashboardTemplateHistory', 'SYNO_DashboardTemplateHistory', array('basic', 'assignable'));
