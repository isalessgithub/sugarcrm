<?php

require_once 'modules/SYNO_DashboardTemplates/SYNO_DashboardHelpers.php';

class SYNO_DashboardLogicHooks
{
	/**
	 * Logic hook for updating the roles dropdown lists afte saving a role
	 * @param SugarBean $focus 
	 * @param string $event 
	 * @param array $arguments 
	 * @return void
	 */
    public function UpdateRolesDropdown($focus, $event, $arguments)
    {
        $GLOBALS['log']->info('------------ '. __CLASS__ . '::' . __FUNCTION__ . ' BEGIN ------------');

        SYNO_DashboardHelpers::updateRolesDropdownList();

        $GLOBALS['log']->info('------------ '. __CLASS__ . '::' . __FUNCTION__ . ' END ------------');
    }
}
