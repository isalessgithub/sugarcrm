<?php
 if (!defined('sugarEntry') || !sugarEntry) {
     die('Not A Valid Entry Point');
 }

$module_name = 'SYNO_DashboardTemplates';
$viewdefs[$module_name]['base']['layout']['edit'] = array(
    'type' => 'edit',
    'components' => array(
        array(
            'view' => 'subnavedit',
        ),
        array(
            'view' => 'edit',
        ),
    ),
);
