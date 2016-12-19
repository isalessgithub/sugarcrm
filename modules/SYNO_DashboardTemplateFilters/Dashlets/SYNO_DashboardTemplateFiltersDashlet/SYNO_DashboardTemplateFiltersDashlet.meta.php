<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

global $app_strings;

$dashletMeta['SYNO_DashboardTemplateFiltersDashlet'] = array('module'        => 'SYNO_DashboardTemplateFilters',
                                          'title'       => translate('LBL_HOMEPAGE_TITLE', 'SYNO_DashboardTemplateFilters'),
                                          'description' => 'A customizable view into SYNO_DashboardTemplateFilters',
                                          'icon'        => 'icon_SYNO_DashboardTemplateFilters_32.gif',
                                          'category'    => 'Module Views', );
