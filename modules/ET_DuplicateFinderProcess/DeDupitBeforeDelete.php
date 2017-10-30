<?php

class DeDupitBeforeDelete
{
    function deleteRelatedDedupitRecords(SugarBean $bean, $event, $arguments)
    {
        // define restricted modules
        $restrictedModules = array('ET_DuplicateCheck', 'ET_DuplicateFinderProcess', 'ET_FoundDuplicates');

        // break out of the function if it is one of the restricted modules
        if (in_array($bean->module_name, $restrictedModules)) {
            return;
        }

        // create empty duplicate finder process bean
        $processBean = BeanFactory::newBean('ET_DuplicateFinderProcess');

        // create query that will search for processes for the given module
        $sql = new SugarQuery();
        $sql->select('id');
        $sql->from($processBean);
        $sql->where()->equals('eontek_module_name', $bean->module_name);
        $sql->where()->equals('active', 'yes');
        // execute query
        $results = $sql->execute();

        // if there are no processes break from the function
        if (count($results) < 1) {
            return;
        }

        // go trough results of returned pro
        foreach ($results as $result) {
            // get process id
            $processId = $result['id'];
            
            // call function that will delete record's duplicate checks
            $this->findAndDeleteDuplicateChecks($processId, $bean);
            // call function that will delete record's found duplicates
            $this->findAndDeleteDuplicatesFound($bean);

        }

    }

    /**
     * Fetch duplicate checks for the given process and record
     * @param $processId
     * @param SugarBean $bean
     * @return bool
     * @throws SugarQueryException
     */
    function findAndDeleteDuplicateChecks($processId, SugarBean $bean)
    {
        // initialise empty bean that will be used for searching duplicate checks
        $duplicateCheckBean = BeanFactory::newBean('ET_DuplicateCheck');

        // create query that will search for duplicate checks
        $sql = new SugarQuery();
        $sql->select('id');
        $sql->from($duplicateCheckBean);
        $sql->where()
            ->equals('duplicate_finder_process_id', $processId)
            ->equals('record_id', $bean->id);
        // execute query
        $results = $sql->execute();

        // if there are no records return false
        if (count($results) < 1) {
            return;
        }

        // go trough all results and get bean for each
        foreach ($results as $result) {
            // delete bean with the given id
            $duplicateCheckBean->mark_deleted($result['id']);
        }
    }

    /**
     * Fetch found duplicates
     * @param $bean
     * @return bool
     */
    function findAndDeleteDuplicatesFound($bean)
    {

        // initialise found duplicates bean
        $foundDuplicatesBean = BeanFactory::newBean('ET_FoundDuplicates');
        // instantiate sugar query
        $sql = new SugarQuery();
        // return only id field
        $sql->select('id');
        // fetch row with at least one duplicate_record_id's equal the bean's id
        $sql->from($foundDuplicatesBean)
            ->where()->addRaw("(duplicate_record_id_1 = '{$bean->id}') OR (duplicate_record_id_2 = '{$bean->id}')");
        // execute query
        $results = $sql->execute();

        // if there are no records return false
        if (count($results) < 1) {
            return;
        }

        // go trough all results and delete each of them
        foreach ($results as $result) {
            // delete the bean with the given id
            $foundDuplicatesBean->mark_deleted($result['id']);
        }
    }
}