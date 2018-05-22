<?php
/**
 * @author Eontek DOO <office@eontek.co>
 * @copyright (c) Eontek DOO. All rights reserved.
 */

array_push($job_strings, 'ms_snapshot_report');

/**
 * Checks are there scheduled reports scheduled for sending (and sends 'em!)
 *
 * @return bool
 * @throws MailerException
 * @throws SugarQueryException
 */
function ms_snapshot_report()
{
    global $timedate, $current_user;

    $current_user = BeanFactory::newBean('Users');
    $current_user->getSystemUser();

    // retrieve all configurations
    $query = new SugarQuery();
    $query->from(BeanFactory::getBean('MS_ReportDeliveryConfiguration'));
    $cp_user = $query->join('ms_reportdeliveryconfiguration_cp_client_users_1')->joinName();
    $query->select(array(
        'ms_reportdeliveryconfiguration.id',
        'ms_reportdeliveryconfiguration.description',
        "$cp_user.name"
    ));

    $configurations = $query->execute();

    // iterate trough retrieved configurations
    foreach ($configurations as $configuration_data) {

        // introduce the configuration array
        $configuration = json_decode($configuration_data['description'], true);

        // check if time for sending has come
        $now = $timedate->getNow(true);

        // make sure that report needs to be sent today
        if ($now->day_of_week != $configuration['send_at_day']) {
            continue;
        }

        // make sure that period is right
        if ($now->format('A') != $configuration['send_at_period']) {
            continue;
        }

        // introduce the send_at_time array
        $time_array = explode(':', $configuration['send_at_time']);

        // make sure that the hour is right
        if ($now->format('h') != $time_array[0]) {
            continue;
        }

        // make sure that the minute is (about) right
        if ($now->format('i') < $time_array[1]) {
            continue;
        }

        // introduce the configuration bean
        $configuration_bean = BeanFactory::getBean('MS_ReportDeliveryConfiguration', $configuration_data['id']);

        // make sure that bean is valid
        if (empty($configuration_bean->id)) {

            $GLOBALS['log']->fatal('ms_snapshot_report: configuration bean is not valid');

            return false;
        }

        // load relationship with logs
        $configuration_bean->load_relationship('ms_reportdeliveryconfiguration_ms_reportdeliverylog_1');

        // retrieve the logs
        $logs = $configuration_bean->ms_reportdeliveryconfiguration_ms_reportdeliverylog_1->getBeans();
	$cont = false;
        // make sure that at least one log exists
        if ($logs) {

            // iterate trough all logs
            foreach ($logs as $log) {

                // introduce the log's data
                $log_data = json_decode($log->description, true);

                // make sure that report for this week has not already been sent
                if ($log_data['success'] and $log_data['week'] == $now->week and $log_data['year'] == $now->year) {

                    // report log exists, don't send another report!
                    //return false;
			$cont = true;
                }
            }
        }
	if($cont){continue;}
        // introduce new log bean
        $log_bean = BeanFactory::newBean('MS_ReportDeliveryLog');

        // make sure that portal user's ID has been passed
        if (empty($configuration['portal_user_id'])) {

            $GLOBALS['log']->fatal('ms_snapshot_report: portal user\'s id not passed');

            return false;
        }

        // introduce the portal user's bean
        $portal_user = BeanFactory::getBean('CP_Client_Users', $configuration['portal_user_id']);

        // make sure that bean is valid
        if (empty($portal_user->id)) {

            $GLOBALS['log']->fatal('ms_snapshot_report: Portal user bean is not valid.');

            return false;
        }

        // include dependencies
        require_once('custom/include/utils/MS_PortalReports.php');

        // send the report
        $report_status = sendSnapshotReport($configuration['portal_user_id']);

        // introduce the status info
        // (including the week and year that report was sent to - this is weekly report)
        $status = [
            'week' => $now->week,
            'year' => $now->year,
            'success' => $report_status['success']
        ];

        // save the status in description
        $log_bean->description = json_encode($status);

        // set log's name
        $log_bean->name = 'week ' . $now->week . ' report for ' . $configuration_data['name'];

        // save the log
        $log_bean->save();

        // load relationship between log and configuration
        $log_bean->load_relationship('ms_reportdeliveryconfiguration_ms_reportdeliverylog_1');

        // relate the log to configuration
        $log_bean->ms_reportdeliveryconfiguration_ms_reportdeliverylog_1->add($configuration_data['id']);
    }

    return true;
}
