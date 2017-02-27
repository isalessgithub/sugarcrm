<?php

// include dependencies
require_once('modules/SchedulersJobs/SchedulersJob.php');

// add job to scheduled jobs
$job_strings[] = 'ET_AutoMergeDuplicates';

// add job to scheduled jobs
$job_strings[] = 'ET_DuplicateCheck';

/**
 * Checks if there are running jobs (and schedules the next one if not)
 *
 * @return bool
 */
function ET_AutoMergeDuplicates()
{
    // introduce global var
    global $db, $timedate;

    // retrieve the time when this job was last run
    $result = $db->query("
          SELECT job_queue.execute_time, job_queue.resolution
          FROM job_queue 
          WHERE job_queue.target = 'class::ET_AutoMergeSchedulerJob'
          ORDER BY job_queue.execute_time DESC
          LIMIT 1
        ");

    // retrieve the query result
    $data = $db->fetchByAssoc($result);

    // make sure that there is at least one done job existing
    if (empty($data)) {

        // schedule the next job
        return scheduleNextDeDupitAutoMerge();
    }

    // check if current job is running
    if ($data['resolution'] == 'queued') {

        // job is currently running, don't schedule next one
        return true;
    }

    // introduce the datetime value
    $last_job_run_datetime = $data['execute_time'];

    // introduce 'now' datetime
    $now_db_datetime = $timedate->nowDb();

    // introduce the time difference (in minutes)
    $diff = (strtotime($now_db_datetime) - strtotime($last_job_run_datetime)) / 60;

    // make sure that last job has been run more than 15 minutes ago
    if ($diff > 15) {

        // schedule the next job
        return scheduleNextDeDupitAutoMerge();
    }

    // return
    return true;
}

/**
 * Schedules the next job
 *
 * @return bool
 */
function scheduleNextDeDupitAutoMerge()
{
    // include dependencies
    require_once('include/SugarQueue/SugarJobQueue.php');

    // introduce new Schedulers Job object
    $schedulers_job = new SchedulersJob();

    // set the job' name
    $schedulers_job->name = 'DeDupit Auto Merge';

    // set the data (used when the job is triggered)
    $schedulers_job->data = 'scheduled by scheduler';

    // set the class which will be called
    $schedulers_job->target = "class::ET_AutoMergeSchedulerJob";

    // introduce new Job Queue object
    $job_queue = new SugarJobQueue();

    // add job to the queue
    $job_queue->submitJob($schedulers_job);

    return true;
}


/**
 * Class ET_AutoMergeSchedulerJob
 */
class ET_AutoMergeSchedulerJob implements RunnableSchedulerJob
{
    /**
     * "This method implements setJob from RunnableSchedulerJob and sets the SchedulersJob instance for the class"
     *
     * @param SchedulersJob $job the SchedulersJob instance set by the job queue
     *
     */
    public function setJob(SchedulersJob $job)
    {
        $this->job = $job;
    }

    /**
     * "This method implements the run function of RunnableSchedulerJob and handles processing a SchedulersJob"
     *
     * @param array $data
     * @return bool|void
     */
    function run($data)
    {
        // introduce dependencies
        require_once('modules/ET_DuplicateFinderProcess/license/ET_DeDupitLicense.php');

        // make sure that the license is valid
        if (ET_DeDupitLicense::isValid() !== true) {
            return false;
        }

        global $timedate, $current_user;

        // retrieve active processes
        $query = new SugarQuery();
        $query->select(array('id', 'eontek_module_name', 'automerge_configuration'));
        $query->from(BeanFactory::getBean('ET_DuplicateFinderProcess'), array('team_security' => false));
        $query->where()->equals('automerge', 'yes');
        $query->orderBy('eontek_module_name');
        $active_processes = $query->execute();

        // make sure that there are active processes
        if (empty($active_processes)) {
            return true;
        }

        // include dependencies
        require_once('modules/ET_DuplicateFinderProcess/DeDupitWorker.php');

        $merged_records = 0;

        // iterate trough grouped processes
        foreach ($active_processes as $process_data) {

            while ($merged_records < 100) {

                $duplicate_pairs_data = $this->getDuplicate($process_data['id']);

                if (empty($duplicate_pairs_data)) {

                    // exit from while, merge duplicates for the next process
                    break;
                }

                $automerge_configuration = json_decode(html_entity_decode($process_data['automerge_configuration']));

                $bean1 = BeanFactory::getBean(
                    $process_data['eontek_module_name'],
                    $duplicate_pairs_data['duplicate_record_id_1'],
                    array('disable_row_level_security' => true)
                );

                $bean2 = BeanFactory::getBean(
                    $process_data['eontek_module_name'],
                    $duplicate_pairs_data['duplicate_record_id_2'],
                    array('disable_row_level_security' => true)
                );

                // make sure that both beans are valid (not deleted)
                if (empty($bean1->id) || empty($bean2->id)) {

                    // if bean is invalid that means that it was previously merged and now is deleted
                    // duplicate pair should be deleted, too
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

                // determine which one is primary
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

                    // find duplicates
                    DeDupitWorker::autoMergeDuplicates(
                        $primary,
                        $duplicate,
                        $duplicate_pairs_data['id']
                    );

                    $merged_records++;
                }
            }

            if ($merged_records >= 100) {
                break;
            }
        }

        // schedule new batch
        $this->scheduleNewAutoMerge();

        return true;
    }

    /**
     * Retrieves ID of passed module beans (in batches of 100)
     *
     * @param $process_id
     * @return array
     */
    private function getDuplicate($process_id)
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
     * Schedules new duplicate check
     */
    private function scheduleNewAutoMerge()
    {
        // introduce global var
        global $db;

        // retrieve the time when this job was last run
        $result = $db->query("
          SELECT execute_time, resolution
          FROM job_queue 
          WHERE target = 'class::ET_AutoMergeSchedulerJob' AND status = 'queued' AND resolution = 'queued'
        ");

        // retrieve the query result
        $data = $db->fetchByAssoc($result);

        // make sure that there is at least one done job existing
        if (!empty($data)) {


            $GLOBALS['log']->fatal('already scheduled, exit!');

            // there are scheduled jobs
            return true;
        }

        // include dependencies
        require_once('include/SugarQueue/SugarJobQueue.php');

        // introduce new Schedulers Job object
        $schedulers_job = new SchedulersJob();

        // set the job' name
        $schedulers_job->name = 'DeDupit Auto Merge';

        // set the data (used when the job is triggered)
        $schedulers_job->data = 'self scheduled';

        // set the class which will be called
        $schedulers_job->target = "class::ET_AutoMergeSchedulerJob";

        // introduce new Job Queue object
        $job_queue = new SugarJobQueue();

        // add job to the queue
        $job_queue->submitJob($schedulers_job);
    }
}

/**
 * Checks if there are running jobs (and schedules the next one if not)
 *
 * @return bool
 */
function ET_DuplicateCheck()
{
    // introduce global var
    global $db, $timedate;

    // retrieve the time when this job was last run
    $result = $db->query("
          SELECT job_queue.execute_time, job_queue.resolution
          FROM job_queue 
          WHERE job_queue.target = 'class::ET_DuplicateCheckSchedulerJob'
          ORDER BY job_queue.execute_time DESC
          LIMIT 1
        ");

    // retrieve the query result
    $data = $db->fetchByAssoc($result);

    // make sure that there is at least one done job existing
    if (empty($data)) {

        // schedule the next job
        return scheduleNextDuplicateCheckJob();
    }

    // check if current job is running
    if ($data['resolution'] == 'queued') {

        // job is currently running, don't schedule next one
        return true;
    }

    // introduce the datetime value
    $last_job_run_datetime = $data['execute_time'];

    // introduce 'now' datetime
    $now_db_datetime = $timedate->nowDb();

    // introduce the time difference (in minutes)
    $diff = (strtotime($now_db_datetime) - strtotime($last_job_run_datetime)) / 60;

    // make sure that last job has been run more than 15 minutes ago
    if ($diff > 15) {

        // schedule the next job
        return scheduleNextDuplicateCheckJob();
    }

    // return
    return true;
}

/**
 * Schedules the next job
 *
 * @return bool
 */
function scheduleNextDuplicateCheckJob()
{
    // include dependencies
    require_once('include/SugarQueue/SugarJobQueue.php');

    // introduce new Schedulers Job object
    $schedulers_job = new SchedulersJob();

    // set the job' name
    $schedulers_job->name = 'DeDupit Duplicate Check';

    // set the data (used when the job is triggered)
    $schedulers_job->data = 'scheduled by scheduler';

    // set the class which will be called
    $schedulers_job->target = "class::ET_DuplicateCheckSchedulerJob";

    // introduce new Job Queue object
    $job_queue = new SugarJobQueue();

    // add job to the queue
    $job_queue->submitJob($schedulers_job);

    return true;
}

/**
 * Class ET_DuplicateCheckSchedulerJob
 */
class ET_DuplicateCheckSchedulerJob implements RunnableSchedulerJob
{
    /**
     * "This method implements setJob from RunnableSchedulerJob and sets the SchedulersJob instance for the class"
     *
     * @param SchedulersJob $job the SchedulersJob instance set by the job queue
     *
     */
    public function setJob(SchedulersJob $job)
    {
        $this->job = $job;
    }

    /**
     * "This method implements the run function of RunnableSchedulerJob and handles processing a SchedulersJob"
     *
     * @param array $data
     * @return bool|void
     */
    function run($data)
    {
        // introduce dependencies
        require_once('modules/ET_DuplicateFinderProcess/license/ET_DeDupitLicense.php');

        // make sure that the license is valid
        if (ET_DeDupitLicense::isValid() !== true) {
            return false;
        }

        // retrieve active processes
        $query = new SugarQuery();
        $query->select(array('id', 'eontek_module_name'));
        $query->from(BeanFactory::getBean('ET_DuplicateFinderProcess'), array('team_security' => false));
        $query->where()->equals('active', 'yes');
        $query->orderBy('eontek_module_name');
        $active_processes = $query->execute();

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
        // (limit of records that should be checked per run is 100)
        $number_of_processed_records = 0;

        // iterate trough grouped processes
        foreach ($process_per_module as $module_name => $processes_ids) {

            // iterate trough processes for a module
            foreach ($processes_ids as $process_id) {

                // retrieve beans' IDs of module the process is created for
                $beans_ids = $this->getBeans($module_name, $process_id);

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

                // check if 100 records are processed
                if ($number_of_processed_records > 100) {

                    // break outer loop
                    break 2;
                }
            }
        }

        // schedule new batch
        $this->scheduleNewDuplicateCheck();

        return true;
    }

    /**
     * Retrieves ID of passed module beans (in batches of 100)
     *
     * @param $module_name
     * @param $process_id
     * @return array
     */
    private function getBeans($module_name, $process_id)
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

        // retrieve 100 records of module the process is created for
        $result = $db->query("
          SELECT {$table_name}.id
          FROM {$table_name} LEFT JOIN et_duplicatecheck ON {$table_name}.id = et_duplicatecheck.record_id AND et_duplicatecheck.duplicate_finder_process_id = '{$process_id}' AND et_duplicatecheck.deleted = 0
          WHERE et_duplicatecheck.id IS NULL AND {$table_name}.deleted = 0 
          ORDER BY {$table_name}.date_entered ASC
          LIMIT 100
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
     * Schedules new duplicate check
     */
    private function scheduleNewDuplicateCheck()
    {
        // introduce global var
        global $db;

        // retrieve the time when this job was last run
        $result = $db->query("
          SELECT execute_time, resolution
          FROM job_queue 
          WHERE target = 'class::ET_DuplicateCheckSchedulerJob' AND status = 'queued' AND resolution = 'queued'
        ");

        // retrieve the query result
        $data = $db->fetchByAssoc($result);

        // make sure that there is at least one done job existing
        if (!empty($data)) {

            // there are scheduled jobs
            return true;
        }

        // include dependencies
        require_once('include/SugarQueue/SugarJobQueue.php');

        // introduce new Schedulers Job object
        $schedulers_job = new SchedulersJob();

        // set the job' name
        $schedulers_job->name = 'DeDupit Duplicate Check';

        // set the data (used when the job is triggered)
        $schedulers_job->data = 'self scheduled';

        // set the class which will be called
        $schedulers_job->target = "class::ET_DuplicateCheckSchedulerJob";

        // introduce new Job Queue object
        $job_queue = new SugarJobQueue();

        // add job to the queue
        $job_queue->submitJob($schedulers_job);
    }
}