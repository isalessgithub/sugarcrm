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

$dictionary['SYNO_DashboardTemplateFilters'] = array(
    'table' => 'syno_dashboardtemplatefilters',
    'audited' => true,
    'activity_enabled' => false,
    'duplicate_merge' => true,
    'fields' => array(
  'original_filter_id' => array(
    'required' => false,
    'name' => 'original_filter_id',
    'vname' => 'LBL_ORIGINAL_FILTER_ID',
    'type' => 'varchar',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => false,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => array(
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => false,
    'len' => '255',
    'size' => '20',
  ),
  'filter_definition' => array(
    'required' => false,
    'name' => 'filter_definition',
    'vname' => 'LBL_FILTER_DEFINITION',
    'type' => 'text',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => false,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => array(
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => false,
    'size' => '20',
    'studio' => 'visible',
    'rows' => '4',
    'cols' => '20',
  ),
  'filter_template' => array(
    'required' => false,
    'name' => 'filter_template',
    'vname' => 'LBL_FILTER_TEMPLATE',
    'type' => 'text',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => false,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => array(
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => false,
    'size' => '20',
    'studio' => 'visible',
    'rows' => '4',
    'cols' => '20',
  ),
  'module_name' => array(
    'required' => false,
    'name' => 'module_name',
    'vname' => 'LBL_MODULE_NAME',
    'type' => 'varchar',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => false,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => array(
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => false,
    'len' => '255',
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
VardefManager::createVardef('SYNO_DashboardTemplateFilters', 'SYNO_DashboardTemplateFilters', array('basic', 'assignable'));
