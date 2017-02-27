<?php


class CheckForDuplicatesApi extends SugarApi
{

    public function registerApiRest()
    {
        return array(
            'checkForDuplicates' => array(
                'reqType' => 'GET',
                'path' => array('ET_DuplicateFinderProcess', 'checkForDuplicates', '?', '?'),
                'pathVars' => array('', '', 'module', 'id'),
                'method' => 'checkForDuplicates',
                'shortHelp' => 'Check for duplicates api',
                'longHelp' => '',
            )
        );
    }

    function checkForDuplicates($api, $args)
    {

        // records module
        $module = $args['module'];
        // records Id
        $id = $args['id'];

        // create empty duplicate finder process bean that will be used to look for module's available processes
        $bean = BeanFactory::newBean('ET_DuplicateFinderProcess');

        // create query that will search for processes for the given module
        $sql = new SugarQuery();
        $sql->select('id');
        $sql->from($bean);
        $sql->where()->equals('eontek_module_name', $module);
        $sql->where()->equals('active', 'yes');
        // execute query
        $results = $sql->execute();

        // if there are no processes return the status false
        if (count($results) < 1) {
            return array("status" => false);
        }

        // load php file with DeDupitWorker class
        require_once('modules/ET_DuplicateFinderProcess/DeDupitWorker.php');

        // fetch bean of the record that we need to check duplicates for
        $record = BeanFactory::getBean($module, $id);
        // go trough all results
        foreach ($results as $result) {
            // fetch process bean
            $process = BeanFactory::getBean('ET_DuplicateFinderProcess', $result['id']);
            // find duplicates
            DeDupitWorker::findDuplicates($process, $record);
        }


        return array("status" => true);
    }

}