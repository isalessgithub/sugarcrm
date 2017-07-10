<?php


$dictionary["ProspectList"]["fields"]["from_name_c"] = array(
    'name' => 'from_name_c',
    'label' => 'LBL_EMAIL_FROM_NAME',
    'type' => 'varchar',
    'default_value' => '',
    'len' => 100,
    'max_size' => 100,
    'required' => false, // true or false
    'reportable' => true, // true or false
    'audited' => false, // true or false
    'importable' => 'true', // 'true', 'false', 'required'
    'duplicate_merge' => false, // true or false
    'source' => 'custom_fields'
);

$dictionary["ProspectList"]["fields"]["from_address_c"] = array(
    'name' => 'from_address_c',
    'label' => 'LBL_EMAIL_FROM_ADDRESS',
    'type' => 'varchar',
    'default_value' => '',
    'len' => 100,
    'max_size' => 100,
    'required' => false, // true or false
    'reportable' => true, // true or false
    'audited' => false, // true or false
    'importable' => 'true', // 'true', 'false', 'required'
    'duplicate_merge' => false, // true or false
    'source' => 'custom_fields'
);