<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once 'modules/Dashboards/clients/base/api/DashboardApi.php';

class SynoDashboardTemplatesExtendDashboardApi extends DashboardApi
{
    /**
     * Rest Api Registration Method
     *
     * @return array
     */
    public function registerApiRest()
    {
        $dashboardApi = array(
            'synoDashboardTemplatesCreateDashboardForModule' => array(
                'reqType' => 'POST',
                'path' => array('Dashboards', '<module>'),
                'pathVars' => array('', 'module'),
                'method' => 'synoDashboardTemplatesCreateDashboard',
                'shortHelp' => 'Create a new dashboard for a module',
                'longHelp' => 'include/api/help/create_dashboard.html',
            ),
            'synoDashboardTemplatesCreateDashboardForHome' => array(
                'reqType' => 'POST',
                'path' => array('Dashboards'),
                'pathVars' => array(''),
                'method' => 'synoDashboardTemplatesCreateDashboard',
                'shortHelp' => 'Create a new dashboard for home',
                'longHelp' => 'include/api/help/create_dashboard.html',
            ),
        );

        return $dashboardApi;
    }

    /**
     * Create a new dashboard
     *
     * @param  ServiceBase $api  The Api Class
     * @param  array       $args Service Call Arguments
     * @return mixed
     */
    public function synoDashboardTemplatesCreateDashboard($api, $args)
    {
        $this->synoDashboardTemplatesCheckBlocking();

        return parent::createDashboard($api, $args);
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
