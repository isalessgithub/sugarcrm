<?php

$dictionary["et_duplicatecheck_et_foundduplicates"] = array (
    'table' => 'et_duplicatecheck_et_foundduplicates',
    'fields' => array(
        'id' => array(
            'name' => 'id',
            'type' => 'varchar',
            'len' => '36',
        ),
        'et_duplicatecheck_id' => array(
            'name' => 'et_duplicatecheck_id',
            'type' => 'varchar',
            'len' => '36',
        ),
        'et_foundduplicates_id' => array(
            'name' => 'et_foundduplicates_id',
            'type' => 'varchar',
            'len' => '36',
        ),
        'date_modified' => array (
            'name' => 'date_modified',
            'type' => 'datetime',
        ),
        'deleted' => array(
            'name' => 'deleted',
            'type' => 'bool',
            'len' => '1',
            'required' => false,
            'default' => '0',
        ),
    ),
    'indices' => array (
        array(
            'name' =>'et_duplicatecheck_et_foundduplicatesspk',
            'type' =>'primary',
            'fields'=>array('id'),
        ),
        array(
            'name' => 'idx_et_duplicatecheck_et_foundduplicates',
            'type'=>'alternate_key',
            'fields'=>array('et_duplicatecheck_id','et_foundduplicates_id'),
        ),
        array(
            'name' => 'idx_dupchckid_del_fnddupid',
            'type' => 'index',
            'fields'=> array('et_duplicatecheck_id', 'deleted', 'et_foundduplicates_id'),
        ),
    ),
    'relationships' => array (
        'et_duplicatecheck_et_foundduplicates' => array(
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
        ),
    ),
);
