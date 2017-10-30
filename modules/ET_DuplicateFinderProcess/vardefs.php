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

$dictionary['ET_DuplicateFinderProcess'] = array(
    'table' => 'et_duplicatefinderprocess',
    'audited' => true,
    'activity_enabled' => false,
    'duplicate_merge' => false,
    'fields' => array(
        'eontek_module_name' => array(
            'required' => true,
            'name' => 'eontek_module_name',
            'vname' => 'LBL_EONTEK_MODULE_NAME',
            'type' => 'module-list',
            'massupdate' => true,
            'default' => '',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'enabled',
            'duplicate_merge_dom_value' => '1',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => 100,
            'size' => '20',
            'options' => 'module_name_list',
            'dependency' => false,
            'dbType' => 'varchar'
        ),
        'active' => array(
            'required' => false,
            'name' => 'active',
            'vname' => 'LBL_ACTIVE',
            'type' => 'enum',
            'massupdate' => true,
            'default' => 'no',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'enabled',
            'duplicate_merge_dom_value' => '1',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => 100,
            'size' => '20',
            'options' => 'active_list',
            'dependency' => false,
            'readonly' => true
        ),
        'rules_configuration' => array(
            'name' => 'rules_configuration',
            'vname' => 'LBL_RULES_CONFIGURATION',
            'required' => false,
            'type' => 'text',
            'rows' => 4,
            'cols' => 20,
            'dbType' => 'longtext',
            'studio' => false
        ),
        'duplicate_check' => array(
            'name' => 'duplicate_check',
            'type' => 'link',
            'relationship' => 'duplicate_finder_process_et_duplicate_check',
            'module' => 'ET_DuplicateCheck',
            'bean_name' => 'ET_DuplicateCheck',
            'source' => 'non-db',
            'vname' => 'LBL_DUPLICATE_CHECK',
        ),
        'automerge' => array(
            'name' => 'automerge',
            'vname' => 'LBL_AUTOMERGE',
            'type' => 'enum',
            'massupdate' => true,
            'no_default' => false,
            'default' => 'no',
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'enabled',
            'duplicate_merge_dom_value' => '1',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => 30,
            'size' => '20',
            'options' => 'automerge_list',
            'dependency' => false,
            'readonly' => true
        ),
        'automerge_configuration' => array(
            'name' => 'automerge_configuration',
            'vname' => 'LBL_AUTOMERGE_CONFIGURATION',
            'type' => 'text',
            'rows' => 4,
            'cols' => 20,
            'studio' => false
        ),

        'process_actions' => array(
            'name' => 'process_actions',
            'label' => 'LBL_PROCESS_ACTIONS',
            'type' => 'et-dedupit-process-actions',
            'source' => 'non-db',
            'sortable' => false,
            'readonly' => true,
            'studio' => 'visible',
        )
    ),
    'relationships' => array(

        'duplicate_finder_process_et_duplicate_check' => array(
            'lhs_module' => 'ET_DuplicateFinderProcess',
            'lhs_table' => 'et_duplicatefinderprocess',
            'lhs_key' => 'id',
            'rhs_module' => 'ET_DuplicateCheck',
            'rhs_table' => 'et_duplicatecheck',
            'rhs_key' => 'duplicate_finder_process_id',
            'relationship_type' => 'one-to-many',
        )
    ),
    'optimistic_locking' => true,
    'unified_search' => true,
    'full_text_search' => true,
);

if (!class_exists('VardefManager')) {
    require_once 'include/SugarObjects/VardefManager.php';
}
VardefManager::createVardef('ET_DuplicateFinderProcess', 'ET_DuplicateFinderProcess',
    array('basic', 'team_security', 'assignable', 'taggable'));