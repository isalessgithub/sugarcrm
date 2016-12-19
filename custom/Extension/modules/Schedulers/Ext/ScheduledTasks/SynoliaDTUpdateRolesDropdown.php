<?php

$job_strings[] = 'SynoliaDTUpdateRolesDropdown';

require_once 'modules/SYNO_DashboardTemplates/SYNO_DashboardHelpers.php';
/*
 * Check if assigned user is in participants list
 */
function SynoliaDTUpdateRolesDropdown()
{
    $GLOBALS['log']->info('------------  SCHEDULERS ::' . __FUNCTION__ . ' BEGIN ------------');

    global $current_user;

    $usr = BeanFactory::getBean("Users");
    $current_user = $usr->getSystemUser();

    SYNO_DashboardHelpers::updateRolesDropdownList();
    
    $GLOBALS['log']->info('------------  SCHEDULERS ::' . __FUNCTION__ . ' END ------------');

    return true;
}
