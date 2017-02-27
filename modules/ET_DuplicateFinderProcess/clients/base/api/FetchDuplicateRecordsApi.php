<?php

class FetchDuplicateRecordsApi extends SugarApi
{
    public function registerApiRest()
    {
        return array(
            'fetchDuplicates' => array(
                'reqType' => 'GET',
                'path' => array('ET_DuplicateFinderProcess', '?', '?'),
                'pathVars' => array('customModule', 'module', 'id'),
                'method' => 'fetchDuplicates',
                'shortHelp' => 'Fetch duplicates api',
                'longHelp' => '',
            )
        );
    }

    public function fetchDuplicates($api, $args)
    {
        // records module
        $module = $args['module'];
        // records Id
        $id = $args['id'];

        $record = BeanFactory::getBean($module, $id);

        $results = $this->fetchProcesses($record);

        return $results;

    }

    /**
     * Fetch all processes for the given module
     * @param $results
     * @param SugarBean $record
     * @return array
     */
    function fetchProcesses(SugarBean $record){

        // create empty duplicate finder process bean
        $bean = BeanFactory::newBean('ET_DuplicateFinderProcess');

        // create query that will search for processes for the given module
        $sql = new SugarQuery();
        $sql->select('id');
        $sql->from($bean);
        $sql->where()->equals('eontek_module_name', $record->module_name);
        $sql->where()->equals('active', 'yes');
        // execute query
        $results = $sql->execute();

        // if there are no processes return the message
        if (count($results) < 1) {
            return array(
                "error" => true,
                "msg" => "LBL_NO_DUPLICATE_FINDER_PROCESSES"
            );
        }

        // initialise empty array that will store processes
        $data = array();
        // go through each result
        foreach ($results as $result) {
            // fetch process
            $process = BeanFactory::getBean('ET_DuplicateFinderProcess', $result['id']);
            // push duplicates and process to the array
            $data[] = array(
                'process' => array(
                    'id' => $process->id,
                    'name' => $process->name
                ),
                'duplicates' => $this->fetchDuplicateChecks($process, $record)
            );
        }
        // return all fetched data
        return $data;
    }

    function fetchDuplicateChecks(ET_DuplicateFinderProcess $process, SugarBean $record){
        // initialise empty bean that will be used for searching duplicate cheks
        $bean = BeanFactory::newBean('ET_DuplicateCheck');

        // create query that will search for duplicate checks
        $sql = new SugarQuery();
        $sql->select('id');
        $sql->from($bean);
        $sql->where()
            ->equals('duplicate_finder_process_id', $process->id)
            ->equals('record_id', $record->id);
        // execute query
        $results = $sql->execute();

        // if there are no records return the message
        if (count($results) < 1) {
            return array(
                "error" => true,
                "msg" => "LBL_DUPLICATE_CHECK_HAS_NOT_BEEN_INITIALISED"
            );
        }

        // initialise array that will store duplicate checks
        $duplicateChecks = array();
        // go trough all results and get bean for each
        foreach ($results as $result) {
            $duplicateChecks[] = BeanFactory::getBean('ET_DuplicateCheck', $result['id']);
        }

        // return function that fetches found duplicates
        return $this->fetchFoundDuplicates($duplicateChecks, $record);
    }

    /**
     * Fetch found duplicates
     * @param $duplicateChecks
     * @param SugarBean $record
     * @return array
     */
    function fetchFoundDuplicates($duplicateChecks, SugarBean $record){
        // initialise empty array that is going to be used for storing records
        $foundDuplicates = array();
        // go trough all duplicate checks and load theirs found duplicates
        foreach ($duplicateChecks as $check){
            $check->load_relationship('et_foundduplicates');
            $foundDuplicates[] = $check->et_foundduplicates->getBeans();
        }

        // if there are no records return the message
        if(count($foundDuplicates)<1){
            return array(
                "error" => true,
                "msg" => "LBL_NO_DUPLICATES_FOR_THIS_RECORD"
            );
        }
        // return function that fetches duplicate records
        return $this->fetchDuplicateRecords($foundDuplicates, $record);
    }

    /**
     * Fetch duplicate records
     * @param $result
     * @param SugarBean $record
     * @return array
     */
    function fetchDuplicateRecords($result, SugarBean $record){
        // initialise empty array that will be used for storing records
        $records = array();
        // go trough multidimensional array of duplicates
        foreach ($result as $foundDuplicates){
            foreach($foundDuplicates as $foundDuplicate){
                // detect id of duplicate by eliminating id of the record that we are fetching duplicates for
                $id = $record->id == $foundDuplicate->duplicate_record_id_1 ?
                    $foundDuplicate->duplicate_record_id_2 : $foundDuplicate->duplicate_record_id_1;
                // add record to the array

                $duplicate = BeanFactory::getBean($record->module_name, $id);
                if($duplicate->id != null){
                    $records[] =  array(
                        'id' => $duplicate->id,
                        'name' => $duplicate->name != null ? $duplicate->name : $duplicate->full_name
                    );
                }
                else{
                    $records[] =  array(
                        'error' => true,
                        'msg' => "LBL_DUPLICATE_COULD_NOT_BE_FOUND"
                    );
                }
            }
        }

        return $records;

    }

}
