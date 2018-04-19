<?php
/**
 * @author Eontek DOO <office@eontek.co>
 * @copyright (c) Eontek DOO. All rights reserved.
 */

/**
 * Sends snapshot report
 *
 * @param $cp_user_id
 * @return array
 * @throws MailerException
 */
function sendSnapshotReport($cp_user_id)
{
    // generate the report's HTML (for passed portal user)
    $report = generateReport($cp_user_id);

    // make sure that report was generated
    if (!$report['success']) {

        // return error response
        return $report;
    }

    /** @var SmtpMailer $phpMailer */
    $phpMailer = MailerFactory::getSystemDefaultMailer();

    // introduce email recipient (portal user)
    $cp_user_identity = new EmailIdentity($report['configuration']['email_address']);

    // add the recipient
    $phpMailer->addRecipientsTo(array($cp_user_identity));

    // make sure that CC address is configured
    if ($cc_address = $report['configuration']['email_address_cc']) {

        // introduce the CC identity
        $cc_identity = new EmailIdentity($cc_address);

        // add CC recipient
        $phpMailer->addRecipientsCc(array($cc_identity));
    }

    // introduce email object
    $email = new Email();

    // introduce system email params
    $system_email = $email->getSystemDefaultEmail();

    // introduce email sender (system)
    $system_identity = new EmailIdentity($system_email['email'], $system_email['name']);

    // set From header
    $phpMailer->setHeader('From', $system_identity);

    // add subject
    $phpMailer->setSubject('Report Summary');

    // set email body
    $phpMailer->setHtmlBody($report['html']);

    // try to send the email
    try {

        $phpMailer->send();

        return ['success' => true];

    } catch (Exception $e) {

        return ['success' => false, 'message' => $e->getMessage()];
    }

}

/**
 * Generates snapshot report (html)
 *
 * @param $cp_user_id
 * @return array
 */
function generateReport($cp_user_id)
{
    // introduce the portal user bean
    $cp_user_bean = BeanFactory::getBean('CP_Client_Users', $cp_user_id);

    // make sure that bean is valid
    if (empty($cp_user_bean->id)) {

        return ['success' => false, 'message' => 'Client portal user was not retrieved'];
    }

    // load relationship with report delivery configuration
    $cp_user_bean->load_relationship('ms_reportdeliveryconfiguration_cp_client_users_1');

    // retrieve report delivery configuration
    $configuration = $cp_user_bean->ms_reportdeliveryconfiguration_cp_client_users_1->getBeans();

    // make sure that configuration is retrieved
    if (empty($configuration)) {

        return ['success' => false, 'message' => 'Report delivery configuration could not be retrieved'];
    }

    // make sure that exactly one configuration is retrieved
    if (count($configuration) > 1) {

        return ['success' => false, 'message' => 'Multiple report delivery configuration found'];
    }

    // introduce the configuration bean
    $configuration_bean = reset($configuration);

    // introduce the configuration array
    $configuration_array = json_decode($configuration_bean->description, true);

    // introduce the campaigns string
    $campaigns = [];

    // introduce the query that retrieves cp user's campaigns
    // (this query is the same as the query that fetches campaigns for portal home page)
    $campaigns_query = "
              SELECT distinct atc_isscampaigns.id AS id
              FROM atc_isscampaigns
                INNER JOIN atc_isscampaigns_cstm ISC ON ISC.id_c = atc_isscampaigns.id and atc_isscampaigns.deleted = 0
                INNER JOIN atc_isscampaigns_cp_client_users_1_c cc on atc_isscampaigns_cp_client_users_1atc_isscampaigns_ida = atc_isscampaigns.id AND cc.deleted = 0
              WHERE cc.atc_isscampaigns_cp_client_users_1cp_client_users_idb = '$cp_user_id'
              AND campaign_start_date_c IS NOT NULL
              AND campaign_start_date_c != ''
              AND (campaign_finish_date_c > date_sub(now(), INTERVAL 9 MONTH) OR campaign_finish_date_c = '' OR campaign_finish_date_c is null)
              ORDER BY name
        ";

    // execute the query
    $result = $GLOBALS['db']->query($campaigns_query);

    // iterate trough results
    while ($row = $GLOBALS['db']->fetchByAssoc($result)) {

        // add campaign's id to the string
        $campaigns [] = $row['id'];
    }

    // make sure that cp user has related campaigns
    if (empty($campaigns)) {

        return ['success' => false, 'message' => "Client portal user doesn't have any related campaigns"];
    }

    // introduce the snapshot data
    $snapshot_data = getSnapshotData($campaigns);

    // return snapshot data
    return [
        'success' => true,
        'html' => $snapshot_data,
        'configuration' => $configuration_array
    ];
}

/**
 * Fetches snapshot data
 *
 * @param $campaigns
 * @return string
 */
function getSnapshotData($campaigns)
{
$GLOBALS['log']->fatal("x");
    $last_7 = date('Y-m-d', strtotime('-7 days'));

    // introduce the snapshot data
    $data = [];

    // iterate trough all campaigns
    foreach ($campaigns as $campaign_id) {

        // build query
        $query = "
                 SELECT 
                    SUM(CASE WHEN atc_appointments.date_entered >= '" . $last_7 . "' THEN 1 ELSE 0 END) AS appointments_last_week,
                    SUM(CASE WHEN appointment_date >= '" . $last_7 . "' and (appointment_status='Attended' OR appointment_status = 'Attended_Policy') THEN 1 ELSE 0 END) AS attended_last_week,
                    SUM(CASE WHEN appointment_status = 'Reschedule' THEN 1 ELSE 0 END) AS num_rescheduled,
                    SUM(CASE WHEN appointment_status = 'Cancelled' THEN 1 ELSE 0 END) AS num_cancelled,
                    SUM(CASE WHEN appointment_status = 'Attended' OR appointment_status = 'Attended_Policy' THEN 1 ELSE 0 END) AS num_attended,
                    SUM(CASE WHEN atc_appointments.deleted='0' THEN 1 ELSE 0 END) AS total_generated,
                    SUM(CASE WHEN (appointment_status='Attended' OR appointment_status = 'Attended_Policy') and atc_appointments.deleted='0'  THEN 1 ELSE 0 END) AS total_attended,
                    SUM(CASE WHEN appointment_status IN ('Attended','Attended_Policy','Cancelled','Accepted','Reschedule','Confirmed') THEN 1 ELSE 0 END) AS num_appointments,
                    SUM(CASE WHEN appointment_status = 'Attended_Policy' THEN 1 ELSE 0 END) AS attended_policy,
                    camp.name AS CampName
                 FROM atc_appointments 
                    INNER JOIN atc_isscampaigns_atc_appointments_c ca ON ca.atc_isscampaigns_atc_appointmentsatc_appointments_idb = atc_appointments.id
                    INNER JOIN atc_isscampaigns camp ON camp.id = ca.atc_isscampaigns_atc_appointmentsatc_isscampaigns_ida
                    LEFT JOIN prospectlists_atc_appointments_1_c ta ON ta.prospectlists_atc_appointments_1atc_appointments_idb = atc_appointments.id
                 WHERE ca.atc_isscampaigns_atc_appointmentsatc_isscampaigns_ida = '$campaign_id'
                 and atc_appointments.deleted = 0
                 and ca.deleted = 0
                 and camp.deleted = 0
                 and ta.deleted = 0
                 GROUP BY camp.name";

        // execute the query
        $result = $GLOBALS['db']->query($query);

        // iterate trough results
        while ($row = $GLOBALS['db']->fetchByAssoc($result)) {

            // introduce the campaign data
            $campaign_data = [];

            // New appointments last week,
            $campaign_data['last_week'] = $row['appointments_last_week'];

            // Appointments attended last week,
            $campaign_data['attended_last_week'] = $row['attended_last_week'];

            // Appointments to reschedule,
            $campaign_data['to_reschedule'] = $row['num_rescheduled'];

            // Total appointments generated (NOT including Cancellations),
            $campaign_data['total'] = $row['num_appointments'] - $row['num_cancelled'];

            // Total appointments attended (including Attended by Policy),
            $campaign_data['attended'] = $row['num_attended'];

            // Attended by policy.
            $campaign_data['attended_by_policy'] = $row['attended_policy'];

            // campaign name
            $campaign_data['name'] = $row['CampName'];

            // add campaign data to the array
            $data[$campaign_id] = $campaign_data;
        }

    }
    $report_html = "";

    $report_html .= '<p>Hi,</p>
<p>View your full campaign results daily at <a href="https://portal.isaless.com">https://portal.isaless.com</a></p>
<p>Click "Export" under the appointments tab to download a spreadsheet of your results.</p>
<p>Find a snapshot of your weekly results below:</p>';

    $report_html .= "<p style='color: black'>Summary:</p><br>";

    // iterate trough data
    foreach ($data as $campaign_id => $campaign_data) {

        $campaign_html = "
                <table style='border-collapse: collapse; border: 1px solid black; color: black'>
                    <tr>
                        <td colspan='2' style='border: 1px solid black; padding: 5px; background-color: #5E9CD3;'>{$campaign_data['name']}</td>
                    </tr>
                    <tr>
                        <td style='border: 1px solid black; padding: 5px;'>New appointments last week:</td>
                        <td style='border: 1px solid black; padding-right:5px;  background-color: #FFF1CE; text-align: right; width: 20%;'>{$campaign_data['last_week']}</td>
                    </tr>  
                    <tr>
                        <td style='border: 1px solid black; padding: 5px;'>Appointments attended last week:</td>
                        <td style='border: 1px solid black; padding-right:5px; background-color: #FFF1CE; text-align: right;'>{$campaign_data['attended_last_week']}</td>
                    </tr>   
                    <tr>
                        <td style='border: 1px solid black; padding: 5px;'>Appointments to reschedule:</td>
                        <td style='border: 1px solid black; padding-right:5px; background-color: #FFF1CE; text-align: right;'>{$campaign_data['to_reschedule']}</td>
                    </tr>  
                    <tr>
                        <td style='border: 1px solid black; padding: 5px;'>Total appointments generated:</td>
                        <td style='border: 1px solid black; padding-right:5px; background-color: #FFF1CE; text-align: right;'>{$campaign_data['total']}</td>
                    </tr>
                    <tr>
                        <td style='border: 1px solid black; padding: 5px;'>Total appointments attended:</td>
                        <td style='border: 1px solid black; padding-right:5px; background-color: #FFF1CE; text-align: right;'>{$campaign_data['attended']}</td>
                    </tr>
                    <tr>
                        <td style='border: 1px solid black; padding: 5px;'>Attended by policy:</td>
                        <td style='border: 1px solid black; padding-right:5px; background-color: #FFF1CE; text-align: right;'>{$campaign_data['attended_by_policy']}</td>
                    </tr>
                </table>";

        $campaign_html .= "<br>";

        $report_html .= $campaign_html;
    }

	$report_html .= "<p><em>What to expect in our improved client results portal!</em></p>";
	$report_html .= "<p><img src=\"https://s3.amazonaws.com/iss.public/report-delivery.PNG\" width=\"600\" height=\"360\" /></p>";
	$report_html .= "<p>You'll have access to the final database of your local decision makers and their buyer intelligence at the end of your campaign.</p>";
    // return response
    return $report_html;
}
