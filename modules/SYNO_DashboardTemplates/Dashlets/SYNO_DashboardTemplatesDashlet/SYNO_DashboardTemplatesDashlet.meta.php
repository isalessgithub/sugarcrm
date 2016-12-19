<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

global $app_strings;

$dashletMeta['SYNO_DashboardTemplatesDashlet'] = array('module'        => 'SYNO_DashboardTemplates',
                                          'title'       => translate('LBL_HOMEPAGE_TITLE', 'SYNO_DashboardTemplates'),
                                          'description' => 'A customizable view into SYNO_DashboardTemplates',
                                          'icon'        => 'icon_SYNO_DashboardTemplates_32.gif',
                                          'category'    => 'Module Views', );
