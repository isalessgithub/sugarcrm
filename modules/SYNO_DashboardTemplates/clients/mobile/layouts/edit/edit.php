<?php
 if (!defined('sugarEntry') || !sugarEntry) {
     die('Not A Valid Entry Point');
 }

$module_name = 'SYNO_DashboardTemplates';
$viewdefs[$module_name]['mobile']['layout']['edit'] = array(
    'type' => 'edit',
    'components' => array(
        0 => array(
            'view' => 'edit',
        ),
    ),
);
