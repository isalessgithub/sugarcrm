<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
$synolia_plugins_installed = 0;
foreach ($admin_group_header as $k => $v) {
    if (!empty($v) && is_array($v)) {
        if ($v[0] == 'LBL_SYNOLIA') {
            $synolia_plugins_installed = $k;
        }
    }
}
if (empty($synolia_plugins_installed)) {
    $admin_option_defs = array();
    $admin_option_defs['synodashboardmanager'] = array(
       'synolia',
      'LBL_SYNODASHBOARDMANAGER_TITLE',
      'LBL_SYNODASHBOARDMANAGER_INFOS',
      'javascript:window.parent.SUGAR.App.sync({callback: function () { window.parent.SUGAR.App.router.navigate("#SYNO_DashboardTemplates", {trigger: true}); }});',
    );
    $admin_group_header[] = array(
        'LBL_SYNOLIA',
        '',
        false,
        array("Administration" => $admin_option_defs),
        'LBL_SYNOLIA_ADMIN_DESC',
    );
} else {
    $admin_group_header[$synolia_plugins_installed][3]['Administration']['synodashboardmanager'] = array(
        'synolia',
        'LBL_SYNODASHBOARDMANAGER_TITLE',
        'LBL_SYNODASHBOARDMANAGER_INFOS',
        'javascript:window.parent.SUGAR.App.sync({callback: function () { window.parent.SUGAR.App.router.navigate("#SYNO_DashboardTemplates", {trigger: true}); }});',
    );
}
