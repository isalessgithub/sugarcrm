<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

global $app_strings;

$dashletMeta['SYNO_DashboardTemplateHistoryDashlet'] = array('module'        => 'SYNO_DashboardTemplateHistory',
                                          'title'       => translate('LBL_HOMEPAGE_TITLE', 'SYNO_DashboardTemplateHistory'),
                                          'description' => 'A customizable view into SYNO_DashboardTemplateHistory',
                                          'icon'        => 'icon_SYNO_DashboardTemplateHistory_32.gif',
                                          'category'    => 'Module Views', );
