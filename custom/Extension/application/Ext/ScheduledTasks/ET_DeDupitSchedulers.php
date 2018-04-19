<?php

// include dependencies
require_once('modules/SchedulersJobs/SchedulersJob.php');

// add job to scheduled jobs
$job_strings[] = 'ET_AutoMergeDuplicates';

// add job to scheduled jobs
$job_strings[] = 'ET_DuplicateCheck';

/**
 * Merges duplicates
 *
 * @return bool
 * @throws SugarQueryException
 */
function ET_AutoMergeDuplicates()
{
    global $timedate, $current_user;

    // retrieve active processes
    $active_processes = et_getActiveProcesses(true);

    // make sure that there are active processes
    if (empty($active_processes)) {
        return true;
    }

    // include dependencies
    require_once('modules/ET_DuplicateFinderProcess/DeDupitWorker.php');

    // introduce the merged records count
    $merged_records = 0;

    // iterate trough grouped processes
    foreach ($active_processes as $process_data) {

        // introduce the hard stop counter
        // (used to break from while loop if it gets stuck)
        $hard_stop_counter = 0;

        // make sure to process 25 records per run
        while ($merged_records < 1) {

            // increment the hard stop counter
            $hard_stop_counter++;

            // check if hard stop counter reached critical point (50 passes for now)
            if ($hard_stop_counter >= 50) {

                // exit from while loop
                break;
            }

            // introduce the duplicate pairs data
            $duplicate_pairs_data = et_getDuplicate($process_data['id']);

            // make sure that data is retrieved
            if (empty($duplicate_pairs_data)) {

                $et_foundduplicates = BeanFactory::getBean(
                    'ET_FoundDuplicates',
                    $duplicate_pairs_data['id'],
                    array('disable_row_level_security' => true)
                );

                if (!empty($et_foundduplicates->id)) {
                    $et_foundduplicates->mark_deleted($et_foundduplicates->id);
                }

                // exit from while, merge duplicates for the next process
                continue;
            }

            // introduce the first bean
            $bean1 = BeanFactory::getBean(
                $process_data['eontek_module_name'],
                $duplicate_pairs_data['duplicate_record_id_1'],
                array('disable_row_level_security' => true)
            );

            // introduce the second bean
            $bean2 = BeanFactory::getBean(
                $process_data['eontek_module_name'],
                $duplicate_pairs_data['duplicate_record_id_2'],
                array('disable_row_level_security' => true)
            );

            // make sure that both beans are valid (not deleted)
            if (empty($bean1->id) || empty($bean2->id)) {

                // if bean is invalid that means that it was previously merged and now is deleted
                // duplicate pair should be deleted too
                $et_foundduplicates = BeanFactory::getBean(
                    'ET_FoundDuplicates',
                    $duplicate_pairs_data['id'],
                    array('disable_row_level_security' => true)
                );

                if (!empty($et_foundduplicates->id)) {
                    $et_foundduplicates->mark_deleted($et_foundduplicates->id);
                }

                continue;
            }

            // introduce the configuration
            $automerge_configuration = json_decode(html_entity_decode($process_data['automerge_configuration']));

            // iterate trough configuration
            // (determine which one is primary)
            foreach ($automerge_configuration as $config_rule) {

                $primary = null;
                $duplicate = null;

                $date1 = $bean1->{$config_rule->field};
                $date2 = $bean2->{$config_rule->field};

                if (empty($date1) || empty($date2)) {

                    $primary = $bean1;
                    $duplicate = $bean2;

                } else {

                    $date1 = strtotime($timedate->fromString($date1, $current_user));
                    $date2 = strtotime($timedate->fromString($date2, $current_user));

                    if ($config_rule->rule == 'older') {

                        if ($date1 <= $date2) {
                            $primary = $bean1;
                            $duplicate = $bean2;
                        } else {
                            $primary = $bean2;
                            $duplicate = $bean1;
                        }
                    } else {

                        if ($date1 <= $date2) {
                            $primary = $bean2;
                            $duplicate = $bean1;
                        } else {
                            $primary = $bean1;
                            $duplicate = $bean2;
                        }
                    }
                }

                try {

                    // merge duplicates
                    DeDupitWorker::autoMergeDuplicates(
                        $primary,
                        $duplicate,
                        $duplicate_pairs_data['id']
                    );

                } catch (Exception $exception) {

                    // log an error
                    $GLOBALS['log']->fatal('Eontek autoMergeDuplicates: ' . print_r($duplicate_pairs_data, true));

                    // log exception error
                    $GLOBALS['log']->fatal($exception->getMessage());

                    // delete the duplicate pair record
                    et_deleteDuplicatePair($duplicate_pairs_data['id']);
                }

                // increment merged duplicates counter
                $merged_records++;
            }
        }

        // make sure that no more than 1 records are merged
        // (and that had stop counter reached 50 passes - just in case)
        if ($merged_records >= 1 or $hard_stop_counter >= 50) {
            break;
        }
    }

    return true;
}

/**
 * Deletes duplicate pair
 * (something went wrong with merge, so delete the pair.
 * It will eventually be detected again, and merge will be tried again)
 *
 * @param $duplicate_pair_id
 */
function et_deleteDuplicatePair($duplicate_pair_id)
{

    // introduce the 'found duplicates' record
    $et_foundduplicates = BeanFactory::getBean(
        'ET_FoundDuplicates',
        $duplicate_pair_id,
        array('disable_row_level_security' => true)
    );

    // make sure that bean is valid
    if (!empty($et_foundduplicates->id)) {

        // delete the bean
        $et_foundduplicates->mark_deleted($et_foundduplicates->id);
    }
}

/**
 * Retrieves IDs of passed module beans
 *
 * @param $process_id
 * @return array
 */
function et_getDuplicate($process_id)
{
    // introduce global var
    global $db;

    $result = $db->query("
          SELECT et_foundduplicates.id, et_foundduplicates.duplicate_record_id_1, et_foundduplicates.duplicate_record_id_2
          FROM  et_duplicatecheck
            JOIN et_duplicatecheck_et_foundduplicates ON et_duplicatecheck.id = et_duplicatecheck_et_foundduplicates.et_duplicatecheck_id
            JOIN et_foundduplicates ON et_foundduplicates.id = et_duplicatecheck_et_foundduplicates.et_foundduplicates_id
          WHERE  et_duplicatecheck.duplicate_finder_process_id = '{$process_id}'
          	AND et_duplicatecheck.deleted = 0
          	AND et_duplicatecheck_et_foundduplicates.deleted = 0
          	AND et_foundduplicates.deleted = 0
          LIMIT 1
        ");

    return $db->fetchByAssoc($result);
}

/**
 * Checks if there are running jobs (and schedules the next one if not)
 *
 * @return bool
 * @throws SugarQueryException
 */
function ET_DuplicateCheck()
{
    // introduce dependencies
    require_once('modules/ET_DuplicateFinderProcess/license/ET_DeDupitLicense.php');

    // retrieve active processes
    $active_processes = et_getActiveProcesses(false);

    // make sure that there are active processes
    if (empty($active_processes)) {
        return true;
    }

    // include dependencies
    require_once('modules/ET_DuplicateFinderProcess/DeDupitWorker.php');

    // introduce processes per module array
    $process_per_module = array();

    // iterate trough processes
    foreach ($active_processes as $process_data) {

        // 'group' process by module
        $process_per_module[$process_data['eontek_module_name']][] = $process_data['id'];
    }

    // introduce var that will count number of records checked for duplicates
    // (limit of records that should be checked per run is 50)
    $number_of_processed_records = 0;

    // iterate trough grouped processes
    foreach ($process_per_module as $module_name => $processes_ids) {

        // iterate trough processes for a module
        foreach ($processes_ids as $process_id) {

            // retrieve beans' IDs of module the process is created for
            $beans_ids = et_getBeans($module_name, $process_id);

            // make sure that there are beans retrieved
            if (empty($beans_ids)) {
                continue;
            }

            // iterate trough all beans' IDs
            foreach ($beans_ids as $bean_id) {

                // introduce the process' bean
                $process_bean = BeanFactory::getBean('ET_DuplicateFinderProcess', $process_id,
                    array('disable_row_level_security' => true));

                // make sure that process bean was retrieved
                if (empty($process_bean->id)) {
                    continue;
                }

                // introduce bean
                $bean = BeanFactory::getBean($module_name, $bean_id,
                    array('disable_row_level_security' => true));

                // make sure that bean was retrieved
                if (empty($bean->id)) {
                    continue;
                }

                // find duplicates
                DeDupitWorker::findDuplicates($process_bean, $bean);

                // increment the number of processed records
                // (the value is incremented by number of processes that were run for one record)
                $number_of_processed_records++;
            }

            // check if 50 records are processed
            if ($number_of_processed_records >= 50) {

                // break outer loop
                break 2;
            }
        }
    }

    return true;
}

/**
 * Retrieves ID of passed module beans (in batches of 10)
 *
 * @param $module_name
 * @param $process_id
 * @return array
 */
function et_getBeans($module_name, $process_id)
{
    // introduce new object of passed module
    $bean = BeanFactory::getBean($module_name);

    // introduce the bean's DB table name
    $table_name = $bean->table_name;

    // make sure that table exists
    if (empty($table_name)) {
        return array();
    }

    // introduce global var
    global $db;

    // retrieve 50 records of module the process is created for
    $result = $db->query("
          SELECT {$table_name}.id
          FROM {$table_name} LEFT JOIN et_duplicatecheck ON {$table_name}.id = et_duplicatecheck.record_id AND et_duplicatecheck.duplicate_finder_process_id = '{$process_id}' AND et_duplicatecheck.deleted = 0
          WHERE et_duplicatecheck.id IS NULL AND {$table_name}.deleted = 0
          ORDER BY {$table_name}.date_entered ASC
          LIMIT 50
        ");

    // introduce beans array
    $beans_ids_array = array();

    // iterate trough retrieved data
    while ($bean_data = $db->fetchByAssoc($result)) {

        // add ID to beans array
        $beans_ids_array[] = $bean_data['id'];
    }

    return $beans_ids_array;
}

/**
 * Makes sure that license is valid and retrieves active processes
 *
 * @param bool $automerge
 * @return array|bool
 * @throws SugarQueryException
 */
function et_getActiveProcesses($automerge = false)
{
    // introduce dependencies
    require_once('modules/ET_DuplicateFinderProcess/license/ET_DeDupitLicense.php');

    // make sure that the license is valid
    if (ET_DeDupitLicense::isValid() !== true) {
        return false;
    }

    // retrieve active processes
    $query = new SugarQuery();
    $query->select(array('id', 'eontek_module_name', 'automerge_configuration'));
    $query->from(BeanFactory::getBean('ET_DuplicateFinderProcess'), array('team_security' => false));
    if ($automerge) {
        $query->where()->equals('automerge', 'yes');
    }
    $query->where()->equals('active', 'yes');
    $query->orderBy('eontek_module_name');
    $active_processes = $query->execute();

    return $active_processes;
}


