<?php

/**
 * Class DeDupitAfterSave
 */
class DeDupitAfterSave
{
    // introduce excluded modules
    // (since this is global hook, it will be accessed when beans such as Activities are saved)
    var $excluded_modules = array(
        'Activities',
        'Subscriptions',
        'ET_DuplicateFinderProcess',
        'ET_DuplicateCheck',
        'ET_FoundDuplicates',
        'Dashboards',
        'UserPreferences',
	'Contacts'
    );

    /**
     * Checks if there are duplicates for this bean
     * [global after save hook - runs dedupit logic for newly created bean]
     *
     * @param SugarBean $bean
     * @param $event
     * @param $arguments
     * @return void
     */
    function checkForDuplicates(SugarBean $bean, $event, $arguments)
    {

        // make sure that this is after save hook
        if ($event != 'after_save') {
            return;
        }

        // make sure that bean's module is not excluded
        if (in_array($bean->module_name, $this->excluded_modules)) {
            return;
        }

        // try to retrieve all active processes tor this bean's module
        $sql = new SugarQuery();
        $sql->select('id');
        $sql->from(BeanFactory::newBean('ET_DuplicateFinderProcess'));
        $sql->where()->equals('eontek_module_name', $bean->module_name);
        $sql->where()->equals('active', 'yes');

        // execute query
        $processes_data_array = $sql->execute();

        // make sure that there are processes retrieved
        if (empty($processes_data_array)) {
            return;
        }

        // introduce dependencies
        require_once('modules/ET_DuplicateFinderProcess/DeDupitWorker.php');

        // iterate trough processes array
        foreach ($processes_data_array as $process_data) {

            // introduce process bean
            $process_bean = BeanFactory::getBean('ET_DuplicateFinderProcess', $process_data['id']);

            // try to find duplicates
            DeDupitWorker::findDuplicates($process_bean, $bean);
        }

    }

}
