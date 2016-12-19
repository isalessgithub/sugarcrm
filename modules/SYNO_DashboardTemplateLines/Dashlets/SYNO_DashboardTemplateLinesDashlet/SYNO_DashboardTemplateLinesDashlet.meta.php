<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

global $app_strings;

$dashletMeta['SYNO_DashboardTemplateLinesDashlet'] = array('module'        => 'SYNO_DashboardTemplateLines',
                                          'title'       => translate('LBL_HOMEPAGE_TITLE', 'SYNO_DashboardTemplateLines'),
                                          'description' => 'A customizable view into SYNO_DashboardTemplateLines',
                                          'icon'        => 'icon_SYNO_DashboardTemplateLines_32.gif',
                                          'category'    => 'Module Views', );
