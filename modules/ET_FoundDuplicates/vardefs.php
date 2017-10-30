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

$dictionary['ET_FoundDuplicates'] = array(
    'table' => 'et_foundduplicates',
    'audited' => true,
    'activity_enabled' => false,
    'duplicate_merge' => false,
    'fields' => array (
  'duplicate_record_id_1' => 
  array (
    'required' => false,
    'name' => 'duplicate_record_id_1',
    'vname' => 'LBL_DUPLICATE_RECORD_ID_1',
    'type' => 'varchar',
    'massupdate' => false,
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
    'full_text_search' => 
    array (
      'enabled' => '0',
      'boost' => '1',
      'searchable' => false,
    ),
    'calculated' => false,
    'len' => '36',
    'size' => '20',
  ),
  'duplicate_record_id_2' => 
  array (
    'required' => false,
    'name' => 'duplicate_record_id_2',
    'vname' => 'LBL_DUPLICATE_RECORD_ID_2',
    'type' => 'varchar',
    'massupdate' => false,
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
    'full_text_search' => 
    array (
      'enabled' => '0',
      'boost' => '1',
      'searchable' => false,
    ),
    'calculated' => false,
    'len' => '36',
    'size' => '20',
  ),
),
    'relationships' => array (
),
    'optimistic_locking' => true,
    'unified_search' => true,
    'full_text_search' => true,
);


$dictionary["ET_FoundDuplicates"]["fields"]["et_duplicatecheck"] = array (
    'name' => 'et_duplicatecheck',
    'type' => 'link',
    'relationship' => 'et_duplicatecheck_et_foundduplicates',
    'source' => 'non-db',
    'module' => 'ET_DuplicateCheck',
    'bean_name' => 'ET_DuplicateCheck',
    'vname' => 'ET_DUPLICATECHECK_TITLE',
    'id_name' => 'et_duplicatecheck_id',
);

$dictionary["ET_FoundDuplicates"]['relationships']["et_duplicatecheck_et_foundduplicates"] = array(
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


if (!class_exists('VardefManager')){
    require_once 'include/SugarObjects/VardefManager.php';
}
VardefManager::createVardef('ET_FoundDuplicates','ET_FoundDuplicates', array('basic','team_security','assignable','taggable'));