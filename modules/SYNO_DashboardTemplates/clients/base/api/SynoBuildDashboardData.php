<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once 'data/BeanFactory.php';
require_once 'include/api/SugarApi.php';
require_once 'modules/SYNO_DashboardTemplates/SYNO_Dashboard.php';

class SynoBuildDashboardData extends SugarApi
{
    public function registerApiRest()
    {
        return array(
            'buildDashboardData' => array(
                'reqType' => 'POST',
                'path' => array('SYNO_DashboardTemplates', 'buildDashboardData'),
                'pathVars' => array('', ''),
                'method' => 'buildUserDashboardData',
                'shortHelp' => 'This method deploys the current user dashboard configuration to the selected DashboardTemplate',
            ),
            'deployDashboardData' => array(
                'reqType' => 'POST',
                'path' => array('SYNO_DashboardTemplates', 'deployDashboardData'),
                'pathVars' => array('', ''),
                'method' => 'deployUserDashboardData',
                'shortHelp' => 'This method deploys the current template to the selected users',
            ),
        );
    }

    /**
     * Api call for the deployment of the DashboardTemplates to the specified users
     * @param  type  $api
     * @param  type  $args
     * @return array
     */
    public function deployUserDashboardData($api, $args)
    {
        $bean = BeanFactory::getBean('SYNO_DashboardTemplates', $args['record']);

        $usrList = $args['users'];

        if (count($usrList) > 150) {
            return array("response" => "too_many_users");
        }

        if (!empty($usrList)) {
            foreach ($usrList as $usrId) {
                //if we replace the dashboards of the current user, we backup it first
                if ($usrId == $GLOBALS['current_user']->id) {
                    $backupTemplate = BeanFactory::getBean("SYNO_DashboardTemplates");
                    $backupTemplate->new_with_id = true;
                    $backupTemplate->id = create_guid();
                    $backupTemplate->name = translate("LBL_BACKUP_SELF_NAME", "SYNO_DashboardTemplates").$GLOBALS['current_user']->name.' ('.date('d/m/Y H:i').')';
                    $backupTemplate->description = translate("LBL_BACKUP_SELF_DESCRIPTION", "SYNO_DashboardTemplates");
                    $backupTemplate->save(false);
                    self::_createDashboardTemplateLines(array('record' => $backupTemplate->id, 'userId' => $usrId));
                }

                //we remove the users dashboards
                $dashboard = new SYNO_Dashboard();

                $from = " dashboards.assigned_user_id = '".$usrId."' ";
                $result = $dashboard->get_full_list("", $from);

                if (!empty($result)) {
                    foreach ($result as $key => $dashboard) {
                        $dashboard->mark_deleted($dashboard->id);
                    }
                }

                $bean->load_relationship("syno_dashboardtemplatelines_syno_dashboardtemplates");
                $lines = $bean->syno_dashboardtemplatelines_syno_dashboardtemplates->getBeans();

                foreach ($lines as $line) {
                    $dashboard = new SYNO_Dashboard();
                    $dashboard->dashboard_module = $line->template_dashboard_module;
                    $dashboard->view_name = $line->template_view;
                    $dashboard->view = $line->template_view;
                    //deploy saved filters
                    $current_metadata = self::_deployDashboardTemplateFilters($line->template_metadata, $usrId);
                    $dashboard->metadata = $current_metadata;
                    $dashboard->assigned_user_id = $usrId;
                    $dashboard->name = $line->template_name;
                    $dashboard->dashboard_type = $line->template_dashboard_type;
                    $dashboard->save(false);
                }

                //create history record
                $history = BeanFactory::newBean("SYNO_DashboardTemplateHistory");
                $history->save(false);

                $history->load_relationship("syno_dashboardtemplatehistory_syno_dashboardtemplates");
                $history->syno_dashboardtemplatehistory_syno_dashboardtemplates->add($bean->id);
                $history->load_relationship("syno_dashboardtemplatehistory_users");
                $history->syno_dashboardtemplatehistory_users->add($usrId);
            }
        } else {
            return array("response" => "fail");
        }

        return array("response" => "success");
    }

    /**
     * Api call for the initialisation of the data of a DashboardTemplate
     * @param  type  $api
     * @param  type  $args
     * @return array
     */
    public function buildUserDashboardData($api, $args)
    {
        global $app_list_strings, $mod_strings, $timedate, $current_user;

        self::_createDashboardTemplateLines($args);

        return array("response" => "success");
    }

    /**
     * Creates copies of the dashboards of the specified user
     * @param  array $args
     * @return void
     */
    private function _createDashboardTemplateLines($args)
    {
        $bean = BeanFactory::getBean('SYNO_DashboardTemplates', $args['record']);

        $user = BeanFactory::getBean('Users', $args['userId']);

        //if data already exists, we remove it
        if ($bean->flag_data == 1) {
            $bean->load_relationship("syno_dashboardtemplatelines_syno_dashboardtemplates");
            $lines = $bean->syno_dashboardtemplatelines_syno_dashboardtemplates->getBeans();
            foreach ($lines as $line) {
                $bean->syno_dashboardtemplatelines_syno_dashboardtemplates->delete($line->id);
                $line->mark_deleted($line->id);
            }
        }

        $bean->flag_data = 1;

        $synoDashboardBean = new SYNO_Dashboard();
        $dashboardData = array();
        $query = new SugarQuery();
        $query->select(array('name', 'dashboard_module', 'view_name', 'metadata', 'dashboard_type'));
        $query->from($synoDashboardBean);
        $query->where()->equals('assigned_user_id', $user->id);
        $dashboardData = $query->execute();

        $newLines = array();
        foreach ($dashboardData as $key => $data) {
            $templateLine = BeanFactory::getBean("SYNO_DashboardTemplateLines");
            $templateLine->new_with_id = true;
            $templateLine->id = create_guid();
            $templateLine->name = $user->name." - ".$data['dashboard_module']." - ".$data['view_name'];
            $templateLine->template_name = $data['name'];
            $templateLine->template_dashboard_module = $data['dashboard_module'];
            $templateLine->template_view = $data['view_name'];
            $templateLine->template_metadata = $data['metadata'];
            //backup the filters
            self::_createDashboardTemplateFilters($data['metadata']);

            $templateLine->template_dashboard_type = $data['dashboard_type'];
            $templateLine->save(false);
            $newLines[] = $templateLine->id;
        }

        if (!empty($bean->syno_dashboardtemplatelines_syno_dashboardtemplates)) {
            unset($bean->syno_dashboardtemplatelines_syno_dashboardtemplates);
        }

        $bean->load_relationship("syno_dashboardtemplatelines_syno_dashboardtemplates");

        foreach ($newLines as $line) {
            if (!empty($line)) {
                $bean->syno_dashboardtemplatelines_syno_dashboardtemplates->add($line);
            }
        }

        $bean->save(false);
    }

    /**
     * Creates copies of the original filters from the metadata passed in parameter
     * @param  array $metadata
     * @return void
     */
    private function _createDashboardTemplateFilters($metadata)
    {
        $json = getJSONobj();
        $data = $json->decode($metadata);
        foreach ($data['components'] as $components) {
            foreach ($components['rows'] as $rows) {
                foreach ($rows as $row) {
                    if (!empty($row['view']['filter_id'])) {
                        $originalFilter = BeanFactory::getBean("Filters", $row['view']['filter_id']);
                        $synoDashboardFilter = BeanFactory::getBean("SYNO_DashboardTemplateFilters");
                        $synoDashboardFilter->retrieve_by_string_fields(array("original_filter_id" => $row['view']['filter_id']));
                        $synoDashboardFilter->original_filter_id = $originalFilter->id;
                        $synoDashboardFilter->name = $originalFilter->name;
                        $synoDashboardFilter->filter_definition = $originalFilter->filter_definition;
                        $synoDashboardFilter->filter_template = $originalFilter->filter_template;
                        $synoDashboardFilter->module_name = $originalFilter->module_name;
                        $synoDashboardFilter->save(false);
                    }
                }
            }
        }
    }

    /**
     * Replaces the filters present in the metadata with copies created for the specified user and returns the adjusted metadata
     * @param  array  $metadata
     * @param  string $usrId
     * @return array
     */
    private function _deployDashboardTemplateFilters($metadata, $usrId)
    {
        global $current_user;
        $filter = BeanFactory::getBean("Filters");
        $json = getJSONobj();
        $data = $json->decode($metadata);
        $returnData = $data;
        foreach ($data['components'] as $cId => $components) {
            foreach ($components['rows'] as $rsId => $rows) {
                foreach ($rows as $rId => $row) {
                    if (!empty($row['view']['filter_id'])) {
                        $synoDashboardFilter = BeanFactory::getBean("SYNO_DashboardTemplateFilters");
                        $synoDashboardFilter->retrieve_by_string_fields(array("original_filter_id" => $row['view']['filter_id']));

                        if (!empty($synoDashboardFilter->id)) {
                            //we verify if another filter with the exact definition exists for the user
                            $filterData = array();
                            $query = new SugarQuery();
                            $query->select(array('id', 'filter_definition', 'filter_template', 'module_name'));
                            $query->from($filter);
                            $query->where()->equals('modified_user_id', $usrId);
                            $query->where()->equals('created_by', $usrId);
                            $query->where()->equals('filter_definition', $synoDashboardFilter->filter_definition);
                            $query->where()->equals('filter_template', $synoDashboardFilter->filter_template);
                            $query->where()->equals('module_name', $synoDashboardFilter->module_name);
                            $filterData = $query->execute();

                            //the filter already exists, so we use it in our dashboard
                            $selectedFilterId = "";
                            if (count($filterData) > 0) {
                                $currentFilter = current($filterData);
                                $selectedFilterId = $currentFilter['id'];
                            } else {
                                //@TODO find a better way than sudo to the target user
                                $oldCurrentUser = $current_user;
                                $current_user = BeanFactory::getBean("Users", $usrId);

                                $newFilter = BeanFactory::getBean("Filters");
                                $newFilter->update_modified_by = false;
                                $newFilter->set_created_by = false;
                                $newFilter->name = $synoDashboardFilter->name;
                                $newFilter->filter_definition = $synoDashboardFilter->filter_definition;
                                $newFilter->filter_template = $synoDashboardFilter->filter_template;
                                $newFilter->module_name = $synoDashboardFilter->module_name;
                                $newFilter->modified_user_id = $usrId;
                                $newFilter->created_by   = $usrId;
                                $newFilter->new_with_id = true;
                                $newFilter->id = create_guid();
                                $newFilter->save(false);
                                $current_user = $oldCurrentUser;
                                $selectedFilterId = $newFilter->id;
                            }

                            $returnData['components'][$cId]['rows'][$rsId][$rId]['view']['filter_id'] = $selectedFilterId;
                        } else {
                            $GLOBALS['log']->error("Cannot find saved filter for deployment. (original_filter_id : ".$row['view']['filter_id']." )");
                        }
                    }
                }
            }
        }

        return $json->encode($returnData);
    }
}
