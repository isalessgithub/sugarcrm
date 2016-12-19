<?php

$dictionary['SYNO_DashboardTemplates'] = array(
    'table' => 'syno_dashboardtemplates',
    'audited' => true,
    'activity_enabled' => false,
        'duplicate_merge' => true,
        'fields' => array(
  'template_data' => array(
    'required' => false,
    'name' => 'template_data',
    'vname' => 'LBL_TEMPLATE_DATA',
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
    ),
    'calculated' => false,
    'size' => '20',
    'studio' => 'visible',
    'rows' => '4',
    'cols' => '20',
  ),
  'flag_data' => array(
    'required' => false,
    'name' => 'flag_data',
    'vname' => 'LBL_FLAG_DATA',
    'type' => 'bool',
    'massupdate' => false,
    'default' => '0',
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
VardefManager::createVardef('SYNO_DashboardTemplates', 'SYNO_DashboardTemplates', array('basic', 'assignable'));
