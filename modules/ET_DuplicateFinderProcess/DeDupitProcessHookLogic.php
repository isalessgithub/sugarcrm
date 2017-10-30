<?php

/**
 * Class DeDupitProcessHookLogic
 */
class DeDupitProcessHookLogic
{
    /**
     * Checks if process is inactive and deletes all relationships
     *
     * @param ET_DuplicateFinderProcess $process_bean
     * @param $event
     * @param $arguments
     */
    public function deleteRelationships(ET_DuplicateFinderProcess $process_bean, $event, $arguments)
    {
        // make sure that this is after save hook
        if ($event != 'after_save') {
            return;
        }

        // make sure that process_bean is valid
        if (empty($process_bean->id)) {
            return;
        }

        // make sure that process is inactive
        if ($process_bean->active == 'yes') {
            return;
        }

        // introduce the delete query
        $sql = "
            DELETE et_duplicatecheck.*, et_duplicatecheck_et_foundduplicates.*
            FROM et_duplicatecheck
              LEFT JOIN et_duplicatecheck_et_foundduplicates ON et_duplicatecheck.id = et_duplicatecheck_et_foundduplicates.et_duplicatecheck_id
            WHERE et_duplicatecheck.duplicate_finder_process_id = '{$process_bean->id}'
               ";

        // introduce DB object
        $db = DBManagerFactory::getInstance();

        // execute the query
        $db->query($sql);
    }

    /**
     * Sets process as inactive (if configuration has been changed)
     *
     * @param ET_DuplicateFinderProcess $process_bean
     * @param $event
     * @param $arguments
     * @throws SugarApiExceptionInvalidParameter
     */
    public function makeProcessInactive(ET_DuplicateFinderProcess $process_bean, $event, $arguments)
    {
        // make sure that this is after save hook
        if ($event != 'before_save') {
            return;
        }

        if (self::checkLicense() !== true) {
            require_once 'include/api/SugarApiException.php';
            // if the license is invalid stop record from saving by throwing exception
            throw new SugarApiExceptionInvalidParameter("Purchase the module before using it");
        }

        // check if process is not already inactive
        if ($process_bean->active == 'no') {
            return;
        }

        // make sure that configuration has been changed
        if ($process_bean->fetched_row['rules_configuration'] !== $process_bean->rules_configuration) {

            // set process as inactive
            $process_bean->active = 'no';
        }

    }

    /**
     * Deletes the related records once process is deleted
     * (et_duplicatecheck)
     *
     * @param ET_DuplicateFinderProcess $process_bean
     * @param $event
     * @param $arguments
     */
    public function deleteRelatedRecords(ET_DuplicateFinderProcess $process_bean, $event, $arguments)
    {
        // make sure that this is an after delete hook
        if ($event != 'before_delete') {
            return;
        }

        // make sure that process_bean is valid
        if (empty($process_bean->id)) {
            return;
        }

        // introduce the delete query
        $sql = "
            DELETE et_duplicatecheck.*, et_duplicatecheck_et_foundduplicates.*
            FROM et_duplicatecheck
              LEFT JOIN et_duplicatecheck_et_foundduplicates ON et_duplicatecheck.id = et_duplicatecheck_et_foundduplicates.et_duplicatecheck_id
            WHERE et_duplicatecheck.duplicate_finder_process_id = '{$process_bean->id}'
               ";

        // introduce DB object
        $db = DBManagerFactory::getInstance();

        // execute the query
        $db->query($sql);
    }


    function checkLicense()
    {
        // load license validation class
        require_once('modules/ET_DuplicateFinderProcess/license/ET_DeDupitLicense.php');
        // check if the license is valid
        return ET_DeDupitLicense::isValid();
    }

}