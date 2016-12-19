<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once 'clients/base/api/ModuleApi.php';

class SynoDashboardTemplatesExtendModuleApi extends ModuleApi
{
    /**
     * Rest Api Registration Method
     *
     * @return array
     */
    public function registerApiRest()
    {
        $moduleApi = array(
            'synoDashboardTemplatesUpdateDashboard' => array(
                'reqType' => 'PUT',
                'path' => array('Dashboards','?'),
                'pathVars' => array('module','record'),
                'method' => 'synoDashboardTemplatesUpdateDashboard',
                'shortHelp' => 'This method updates a record of the specified type',
                'longHelp' => 'include/api/help/module_record_put_help.html',
            ),
            'synoDashboardTemplatesDeleteDashboard' => array(
                'reqType' => 'DELETE',
                'path' => array('Dashboards','?'),
                'pathVars' => array('module','record'),
                'method' => 'synoDashboardTemplatesDeleteDashboard',
                'shortHelp' => 'This method deletes a record of the specified type',
                'longHelp' => 'include/api/help/module_record_delete_help.html',
            ),
        );

        return $moduleApi;
    }

    /**
     * Update a dashboard
     *
     * @param  ServiceBase $api  The Api Class
     * @param  array       $args Service Call Arguments
     * @return mixed
     */
    public function synoDashboardTemplatesUpdateDashboard($api, $args)
    {
        $this->synoDashboardTemplatesCheckBlocking();

        return parent::updateRecord($api, $args);
    }

    /**
     * Delete a dashboard
     *
     * @param  ServiceBase $api  The Api Class
     * @param  array       $args Service Call Arguments
     * @return mixed
     */
    public function synoDashboardTemplatesDeleteDashboard($api, $args)
    {
        $this->synoDashboardTemplatesCheckBlocking();

        return parent::deleteRecord($api, $args);
    }

    /**
     * Check if current user can edit his dasboard
     *
     * @throws SugarApiExceptionNotAuthorized If he can't
     */
    private function synoDashboardTemplatesCheckBlocking()
    {
        if ($GLOBALS['current_user']->synodt_block_dashboards_c === 'bool_true') {
            $args = array(
                'moduleName' => 'Dashboards',
            );
            throw new SugarApiExceptionNotAuthorized('EXCEPTION_CREATE_MODULE_NOT_AUTHORIZED', $args);
        }
    }
}
