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

$dictionary['ET_DuplicateCheck'] = array(
    'table' => 'et_duplicatecheck',
    'audited' => true,
    'activity_enabled' => false,
    'duplicate_merge' => false,
    'fields' => array(
        'eontek_module_name' =>
            array(
                'required' => false,
                'name' => 'eontek_module_name',
                'vname' => 'LBL_MODULE_NAME',
                'type' => 'varchar',
                'massupdate' => false,
                'default' => '',
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'full_text_search' =>
                    array(
                        'enabled' => '0',
                        'boost' => '1',
                        'searchable' => false,
                    ),
                'calculated' => false,
                'len' => '50',
                'size' => '20',
            ),
        'record_id' =>
            array(
                'required' => false,
                'name' => 'record_id',
                'vname' => 'LBL_RECORD_ID',
                'type' => 'varchar',
                'massupdate' => false,
                'default' => '',
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'full_text_search' =>
                    array(
                        'enabled' => '0',
                        'boost' => '1',
                        'searchable' => false,
                    ),
                'calculated' => false,
                'len' => '36',
                'size' => '20',
            ),
        'check_for_duplicates' =>
            array(
                'required' => false,
                'name' => 'check_for_duplicates',
                'vname' => 'LBL_CHECK_FOR_DUPLICATES',
                'type' => 'datetimecombo',
                'massupdate' => true,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'calculated' => false,
                'size' => '20',
                'enable_range_search' => false,
                'dbType' => 'datetime',
            ),
    ),
    'relationships' => array(),
    'optimistic_locking' => true,
    'unified_search' => true,
    'full_text_search' => true,
);


$dictionary['ET_DuplicateCheck']['fields']['duplicate_finder_process_name'] = array(
    'required' => false,
    'source' => 'non-db',
    'name' => 'duplicate_finder_process_name',
    'vname' => 'LBL_DUPLICATE_FINDER_PROCESS_NAME',
    'type' => 'relate',
    'rname' => 'name',
    'id_name' => 'duplicate_finder_process_id',
    'join_name' => 'duplicate_finder_process',
    'link' => 'duplicate_finder_process',
    'table' => 'et_duplicatefinderprocess',
    'isnull' => 'true',
    'module' => 'ET_DuplicateFinderProcess',
);

$dictionary['ET_DuplicateCheck']['fields']['duplicate_finder_process_id'] = array(
    'name' => 'duplicate_finder_process_id',
    'rname' => 'id',
    'vname' => 'LBL_DUPLICATE_FINDER_PROCESS_ID',
    'type' => 'id',
    'table' => 'et_duplicatefinderprocess',
    'isnull' => 'true',
    'module' => 'ET_DuplicateFinderProcess',
    'dbType' => 'id',
    'reportable' => false,
    'massupdate' => false,
    'duplicate_merge' => 'disabled',
);

$dictionary['ET_DuplicateCheck']['fields']['duplicate_finder_process'] = array(
    'name' => 'duplicate_finder_process',
    'type' => 'link',
    'relationship' => 'duplicate_finder_process_et_duplicate_check',
    'module' => 'ET_DuplicateFinderProcess',
    'bean_name' => 'ET_DuplicateFinderProcess',
    'source' => 'non-db',
    'vname' => 'LBL_DUPLICATE_FINDER_PROCCESS_ET_DUPLICATECHECK',
);

$dictionary['ET_DuplicateCheck']['indices'][] = array(
    'name' => 'dupe_check',
    'type' => 'index',
    'fields' => array(
        'eontek_module_name',
        'record_id',
        'check_for_duplicates',
    )
);

$dictionary['ET_DuplicateCheck']['indices'][] = array(
    'name' => 'not_checked_duplicates',
    'type' => 'index',
    'fields' => array(
        'record_id',
        'duplicate_finder_process_id',
        'deleted',
    )
);

$dictionary["ET_DuplicateCheck"]["fields"]["et_foundduplicates"] = array(
    'name' => 'et_foundduplicates',
    'type' => 'link',
    'relationship' => 'et_duplicatecheck_et_foundduplicates',
    'source' => 'non-db',
    'module' => 'ET_FoundDuplicates',
    'bean_name' => 'ET_FoundDuplicates',
    'vname' => 'LBL_FOUNDDUPLICATES_TITLE',
    'id_name' => 'et_foundduplicates_id',
);

$dictionary["ET_DuplicateCheck"]['relationships']["et_duplicatecheck_et_foundduplicates"] = array(
    'lhs_module' => 'ET_DuplicateCheck',
    'lhs_table' => 'et_duplicatecheck',
    'lhs_key' => 'id',
    'rhs_module' => 'ET_FoundDuplicates',
    'rhs_table' => 'et_foundduplicates',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'et_duplicatecheck_et_foundduplicates',
    'join_key_lhs' => 'et_duplicatecheck_id',
    'join_key_rhs' => 'et_foundduplicates_id',
);

if (!class_exists('VardefManager')) {
    require_once 'include/SugarObjects/VardefManager.php';
}

if (!class_exists('ModuleInstaller')) {
    require_once('ModuleInstall/ModuleInstaller.php');
}
//$mod_install = new ModuleInstaller();
//$mod_install->install_relationship('modules/ET_DuplicateCheck/relationship_definitions.php');

VardefManager::createVardef('ET_DuplicateCheck', 'ET_DuplicateCheck',
    array('basic', 'team_security', 'assignable', 'taggable'));