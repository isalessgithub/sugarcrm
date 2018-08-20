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
$GLOBALS['log']->fatal("Sending portal report.");
    // generate the report's HTML (for passed portal user)
    $report = generateReport($cp_user_id);

    // make sure that report was generated
    if (!$report['success']) {

        // return error response
        return $report;
    }

    /** @var SmtpMailer $phpMailer */
    $phpMailer = MailerFactory::getSystemDefaultMailer();

    $emails = explode(";",$report['configuration']['email_address']);
//	$GLOBALS['log']->fatal(json_encode($emails));
	foreach($emails as $index => $email){
	    $GLOBALS['log']->fatal(" Sending to - " .$email);
	    $cp_user_identity = new EmailIdentity($email);
	    $phpMailer->addRecipientsTo(array($cp_user_identity));
	}

    // introduce email recipient (portal user)
    //$cp_user_identity = new EmailIdentity($report['configuration']['email_address']);
    // add the recipient
    //$phpMailer->addRecipientsTo(array($cp_user_identity));

//    $GLOBALS['log']->fatal("2");
    // make sure that CC address is configured
    if(isset($report['configuration']['email_address_cc']) && $report['configuration']['email_address_cc'] != ""){
    //$cc_address = $report['configuration']['email_address_cc'];

    $ccs = explode(";",$report['configuration']['email_address_cc']);


    if ($ccs != "" && $ccs != "null"){
   foreach($ccs as $index => $cc_address) {
           // introduce the CC identity
        
	$cc_identity = new EmailIdentity($cc_address);
	// add CC recipient
        $phpMailer->addRecipientsCc(array($cc_identity));
    }
    }
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
              AND (campaign_finish_date_c = '' OR campaign_finish_date_c is null)
              ORDER BY name
        ";
//              AND (campaign_finish_date_c > date_sub(now(), INTERVAL 9 MONTH) OR campaign_finish_date_c = '' OR campaign_finish_date_c is null)


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

        // iterate through results
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

	$report_html = '	<!doctype html>
	<html>
	<head>
		<meta charset="utf-8">


		<link rel="stylesheet" href="/message-styles.css" onerror="setTimeout(function(){window.location.reload();}, 2000);">
		<link rel="shortcut icon" href="/img/favicon.ico" sizes="16x16">



		<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700italic,700" rel="stylesheet" type="text/css">

	</head>

	<body><!DOCTYPE html><html>
		<head><!--[if !mso]><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]--><meta http-equiv="content-type" content="text/html; charset=utf-8"><meta http-equiv="Content-Language" content="en-us"><meta name="format-detection" content="telephone=no"><meta name="format-detection" content="date=no"><meta name="format-detection" content="address=no"><meta name="format-detection" content="email=no"><title>Preview</title><style data-ac-keep="true">
			.ExternalClass {width:100%; background:inherit; background-color:inherit;}
			.ExternalClass p, .ExternalClass ul, .ExternalClass ol { Margin: 0; }
			.undoreset div p, .undoreset p { margin-bottom: 20px; }
			div[class^="aolmail_divbody"] { overflow: auto; }
			[owa] #ac-footer { padding: 20px 0px!important; }
		</style><style data-ac-keep="true">
		@media only screen and (max-width: 600px) {	body { padding: 0!important; font-size:1em!important; } * { -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; } *[class].divbody {-webkit-text-size-adjust:none !important; width:auto !important;} *[class].td_picture img {width:auto !important;} *[class].td_text { line-height: 110%; } *[class].td_button { width: auto; } /* Collapse all block elements */ :not(.body) table { display: block!important; float:none!important; border-collapse:collapse !important; width:100% !important; min-width:100% !important; clear:both!important; } :not(.body) thead, :not(.body) tbody, :not(.body) tr { display:block!important; float:none!important; width:100% !important; } :not(.body) th, :not(.body) td, :not(.body) p { display:block!important; float:none!important; width:100% !important; clear:both!important; } /* Remove browser default styling for elements */ ul, ol { margin-left: 20px; margin-bottom: 10px;
			margin-top: 10px; -webkit-margin-before: 0; -webkit-margin-after: 0; -webkit-padding-start: 0; } /* Set default height for spacer once collapse */ *[class].spacer { height: auto!important; } a[href^=date]{ color:inherit !important; text-decoration:none !important;} a[href^=telephone]{ color:inherit !important; text-decoration:none !important;} a[href^=address]{ color:inherit !important; text-decoration:none !important;} a[href^=email]{ color:inherit !important; text-decoration:none !important;} /* Default table cell height */ td[height="0"]{height:0px!important;font-size:0px!important;line-height:0px!important;} /* Default social icons */ *[class].ac-social-icon-16 {width:16px !important; height:16px !important;} *[class].ac-social-icon-24 {width:24px !important; height:24px !important;} *[class].ac-social-icon-28 {width:28px !important; height:28px !important;} *[class].__ac_social_icons { margin-right: 0px !important; } }
		</style><style data-ac-keep="true"> @media only screen and (max-width: 667px) { #layout-row290 img { width: 100% !important; height: auto !important; max-width: 667px !important; } #layout-row315 { max-height: 0px!important; font-size: 0px!important; display: none!important; visibility: hidden!important; } #layout-row318 { max-height: 0px!important; font-size: 0px!important; display: none!important; visibility: hidden!important; } #layout-row323 img { width: 100% !important; height: auto !important; max-width: 398px !important; } #layout-row332 .break-line { width: 100% !important; margin: auto !important; } #layout-row338 { max-height: 0px!important; font-size: 0px!important; display: none!important; visibility: hidden!important; } #layout-row341 .break-line { width: 100% !important; margin: auto !important; } #layout-row347 img { width: 100% !important; height: auto !important; max-width: 521px !important; } #layout-row348 img { width: 100% !important; height:
			auto !important; max-width: 458px !important; } #layout-row355 .break-line { width: 100% !important; margin: auto !important; } #layout-row357 img { width: 100% !important; height: auto !important; max-width: 667px !important; } #layout-row358 img { width: 100% !important; height: auto !important; max-width: 506px !important; } .td_rss .rss-item img.iphone_large_image { width: auto !important; } u + .body { display: table !important; width: 100vw !important; min-width: 100vw !important; } u + .body table { display: table !important; width: 100% !important; min-width: 100% !important; } u + .body td { display: block !important; width: 100% !important; min-width: 100% !important; } u + .body img { display: inline-block !important; margin: auto !important; width: auto !important; vertical-align: bottom !important; } u + .body center { display: block !important; margin: auto !important; width: 100% !important; min-width: 100% !important; text-align: center !important; }
			u + .body table._ac_social_table, u + .body table._ac_social_table td, u + .body table._ac_social_table div, u + .body table._ac_social_table a { display: inline-block !important; margin: auto !important; width: auto !important; min-width: auto !important; text-align: center !important; } u + .body table._ac_social_table img { display: inline-block !important; margin: auto !important; width: 32px !important; min-width: 32px !important; max-width: 32px !important; }
		}
		@media only screen and (max-width: 414px) { #layout-row290 img { width: 100% !important; height: auto !important; max-width: 414px !important; } #layout-row315 { max-height: 0px!important; font-size: 0px!important; display: none!important; visibility: hidden!important; } #layout-row318 { max-height: 0px!important; font-size: 0px!important; display: none!important; visibility: hidden!important; } #layout-row323 img { width: 100% !important; height: auto !important; max-width: 398px !important; } #layout-row332 .break-line { width: 100% !important; margin: auto !important; } #layout-row338 { max-height: 0px!important; font-size: 0px!important; display: none!important; visibility: hidden!important; } #layout-row341 .break-line { width: 100% !important; margin: auto !important; } #layout-row347 img { width: 100% !important; height: auto !important; max-width: 414px !important; } #layout-row348 img { width: 100% !important; height: auto !important; max-width: 414px
			!important; } #layout-row355 .break-line { width: 100% !important; margin: auto !important; } #layout-row357 img { width: 100% !important; height: auto !important; max-width: 414px !important; } #layout-row358 img { width: 100% !important; height: auto !important; max-width: 414px !important; } .td_rss .rss-item img.iphone_large_image { width: auto !important; } u + .body { display: table !important; width: 100vw !important; min-width: 100vw !important; } u + .body table { display: table !important; width: 100% !important; min-width: 100% !important; } u + .body td { display: block !important; width: 100% !important; min-width: 100% !important; } u + .body img { display: inline-block !important; margin: auto !important; width: auto !important; vertical-align: bottom !important; } u + .body center { display: block !important; margin: auto !important; width: 100% !important; min-width: 100% !important; text-align: center !important; } u + .body table._ac_social_table,
			u + .body table._ac_social_table td, u + .body table._ac_social_table div, u + .body table._ac_social_table a { display: inline-block !important; margin: auto !important; width: auto !important; min-width: auto !important; text-align: center !important; } u + .body table._ac_social_table img { display: inline-block !important; margin: auto !important; width: 32px !important; min-width: 32px !important; max-width: 32px !important; }
		}
		@media only screen and (max-width: 375px) { #layout-row290 img { width: 100% !important; height: auto !important; max-width: 375px !important; } #layout-row315 { max-height: 0px!important; font-size: 0px!important; display: none!important; visibility: hidden!important; } #layout-row318 { max-height: 0px!important; font-size: 0px!important; display: none!important; visibility: hidden!important; } #layout-row323 img { width: 100% !important; height: auto !important; max-width: 375px !important; } #layout-row332 .break-line { width: 100% !important; margin: auto !important; } #layout-row338 { max-height: 0px!important; font-size: 0px!important; display: none!important; visibility: hidden!important; } #layout-row341 .break-line { width: 100% !important; margin: auto !important; } #layout-row347 img { width: 100% !important; height: auto !important; max-width: 375px !important; } #layout-row348 img { width: 100% !important; height: auto !important; max-width: 375px
			!important; } #layout-row355 .break-line { width: 100% !important; margin: auto !important; } #layout-row357 img { width: 100% !important; height: auto !important; max-width: 375px !important; } #layout-row358 img { width: 100% !important; height: auto !important; max-width: 375px !important; } .td_rss .rss-item img.iphone_large_image { width: auto !important; } u + .body { display: table !important; width: 100vw !important; min-width: 100vw !important; } u + .body table { display: table !important; width: 100% !important; min-width: 100% !important; } u + .body td { display: block !important; width: 100% !important; min-width: 100% !important; } u + .body img { display: inline-block !important; margin: auto !important; width: auto !important; vertical-align: bottom !important; } u + .body center { display: block !important; margin: auto !important; width: 100% !important; min-width: 100% !important; text-align: center !important; } u + .body table._ac_social_table,
			u + .body table._ac_social_table td, u + .body table._ac_social_table div, u + .body table._ac_social_table a { display: inline-block !important; margin: auto !important; width: auto !important; min-width: auto !important; text-align: center !important; } u + .body table._ac_social_table img { display: inline-block !important; margin: auto !important; width: 32px !important; min-width: 32px !important; max-width: 32px !important; }
		}
		@media only screen and (max-width: 320px) { #layout-row290 img { width: 100% !important; height: auto !important; max-width: 320px !important; } #layout-row315 { max-height: 0px!important; font-size: 0px!important; display: none!important; visibility: hidden!important; } #layout-row318 { max-height: 0px!important; font-size: 0px!important; display: none!important; visibility: hidden!important; } #layout-row323 img { width: 100% !important; height: auto !important; max-width: 320px !important; } #layout-row332 .break-line { width: 100% !important; margin: auto !important; } #layout-row338 { max-height: 0px!important; font-size: 0px!important; display: none!important; visibility: hidden!important; } #layout-row341 .break-line { width: 100% !important; margin: auto !important; } #layout-row347 img { width: 100% !important; height: auto !important; max-width: 320px !important; } #layout-row348 img { width: 100% !important; height: auto !important; max-width: 320px
			!important; } #layout-row355 .break-line { width: 100% !important; margin: auto !important; } #layout-row357 img { width: 100% !important; height: auto !important; max-width: 320px !important; } #layout-row358 img { width: 100% !important; height: auto !important; max-width: 320px !important; } .td_rss .rss-item img.iphone_large_image { width: auto !important; } u + .body { display: table !important; width: 100vw !important; min-width: 100vw !important; } u + .body table { display: table !important; width: 100% !important; min-width: 100% !important; } u + .body td { display: block !important; width: 100% !important; min-width: 100% !important; } u + .body img { display: inline-block !important; margin: auto !important; width: auto !important; vertical-align: bottom !important; } u + .body center { display: block !important; margin: auto !important; width: 100% !important; min-width: 100% !important; text-align: center !important; } u + .body table._ac_social_table,
			u + .body table._ac_social_table td, u + .body table._ac_social_table div, u + .body table._ac_social_table a { display: inline-block !important; margin: auto !important; width: auto !important; min-width: auto !important; text-align: center !important; } u + .body table._ac_social_table img { display: inline-block !important; margin: auto !important; width: 32px !important; min-width: 32px !important; max-width: 32px !important; }
		}
	</style><!--[if !mso]><!-- webfonts --><!--<![endif]--><!--[if lt mso 12]> <![endif]--></head><body id="ac-designer" class="body" style="font-family: Arial; line-height: 1.1; margin: 0px; background-color: #dedede; width: 100%; text-align: center;"><div class="divbody" style="margin: 0px; outline: none; padding: 0px; color: #000000; font-family: arial; line-height: 1.1; width: 100%; background-color: #dedede; background: #dedede; text-align: center;"><table class="template-table" border="0" cellpadding="0" cellspacing="0" width="100%" align="left" style="font-size: 13px; min-width: auto; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #dedede; background: #dedede;"><tr><td align="center" valign="top" width="100%"><table class="template-table" border="0" cellpadding="0" cellspacing="0" width="650" bgcolor="#dedede" style="font-size: 13px; min-width: auto; mso-table-lspace: 0pt; mso-table-rspace: 0pt; max-width: 650px;"><tr><td id="layout_table_1f6e763dfa9f109cc0c0501cde133d3dae1dcb01" valign="top" align="center" width="650" style="background-color: #ffffff;"><table cellpadding="0" cellspacing="0" border="0" class="layout layout-table root-table" width="650" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff;"><tr id="layout-row317" class="layout layout-row clear-this " style="background-color: #ffffff;"><td id="layout-row-padding317" valign="top" style="background-color: #ffffff;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td id="layout_table_2afa3100c2712b7211e328a236a226d7008278b1" valign="top" width="138" style="background-color: #dedede;"><table cellpadding="0" cellspacing="0" border="0" class="layout layout-table " width="138" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;
	background-color: #dedede;"><tr style="background-color: #dedede;"><td id="layout-row-margin316" valign="top" style="padding: 10px; background-color: #dedede;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: initial !important;"><tr id="layout-row316" class="layout layout-row widget _widget_social style316" style=""><td id="layout-row-padding316" valign="top" style="padding: 0px;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td><table width="100%" cellspacing="0" cellpadding="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td width="138" align="left"> <center style="margin: 0; outline: none; padding: 0; font-size: 0px;"> <table class="_ac_social_table" cellspacing="0" cellpadding="0" align="center" style="font-size: 0; min-width: auto!important; mso-table-lspace: 0pt; mso-table-rspace: 0pt; margin: auto!important; display: inline-block!important; text-align: center!important;"><tr><td align="center" valign="middle" width="27" style="display:inline-block!important;font-size:0;width:27px!important;"><div class="__ac_social_icons" style="margin: 0; outline: none; padding: 0;"><a href="https://www.facebook.com/insidesalessolutions/" id="facebook" class="__ac_social_icon_link" style="margin: 0; outline: none; padding: 0; color: #045fb4;" target="_blank"><img src="http://insidesalessolutions.img-us6.com/_social_/flat-color-round-facebook.png" border="0" width="27" style="display: block; border: none;"></a></div>
</td>
<td width="10" style="display:inline-block!important;font-size:0;width:10px!important;">&#xA0;</td>
<td align="center" valign="middle" width="27" style="display:inline-block!important;font-size:0;width:27px!important;"><div class="__ac_social_icons" style="margin: 0; outline: none; padding: 0;"><a href="https://twitter.com/isalessdotcom" id="twitter" class="__ac_social_icon_link" style="margin: 0; outline: none; padding: 0; color: #045fb4;" target="_blank"><img src="http://insidesalessolutions.img-us6.com/_social_/flat-color-round-twitter.png" border="0" width="27" style="display: block; border: none;"></a></div>
</td>
<td width="10" style="display:inline-block!important;font-size:0;width:10px!important;">&#xA0;</td>
<td align="center" valign="middle" width="27" style="display:inline-block!important;font-size:0;width:27px!important;"><div class="__ac_social_icons" style="margin: 0; outline: none; padding: 0;"><a href="https://www.linkedin.com/company/inside-sales-solutions/" id="linkedin" class="__ac_social_icon_link" style="margin: 0; outline: none; padding: 0; color: #045fb4;" target="_blank"><img src="http://insidesalessolutions.img-us6.com/_social_/flat-color-round-linkedin.png" border="0" width="27" style="display: block; border: none;"></a></div>
</td>
</tr>
</table>
</center> </td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
<td id="layout_table_4b15e6e8574411305f25c2d37a4e6f3173719653" valign="top" width="512"><table cellpadding="0" cellspacing="0" border="0" class="layout layout-table " width="512" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr id="layout-row319" class="layout layout-row clear-this "><td id="layout-row-padding319" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td id="layout_table_c92f1130583f1774435aecd95e291656be8c63dc" valign="top" width="37" style="background-color: #dedede;"><table cellpadding="0" cellspacing="0" border="0" class="layout layout-table " width="37" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #dedede;"><tr style="background-color: #dedede;"><td id="layout-row-margin318" valign="top" style="background-color: #dedede;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr id="layout-row318" class="layout layout-row widget _widget_spacer "><td id="layout-row-padding318" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td valign="top" height="25"><div class="spacer" style="margin: 0; outline: none; padding: 0; height: 25px;"><table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td class="spacer-body" valign="top" height="25" width="37">&#xA0;</td>
</tr>
</table>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
<td id="layout_table_7ebe04520b4a49271427b6a3bc7a905dac6e9770" valign="top" width="475"><table cellpadding="0" cellspacing="0" border="0" class="layout layout-table " width="475" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr id="layout-row322" class="layout layout-row clear-this "><td id="layout-row-padding322" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td id="layout_table_91c373086447b34181944ea068ae183f812141a3" valign="top" width="44" style="background-color: #dedede;"><table cellpadding="0" cellspacing="0" border="0" class="layout layout-table " width="44" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #dedede;"><tr style="background-color: #dedede;"><td id="layout-row-margin315" valign="top" style="background-color: #dedede;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr id="layout-row315" class="layout layout-row widget _widget_spacer "><td id="layout-row-padding315" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td valign="top" height="25"><div class="spacer" style="margin: 0; outline: none; padding: 0; height: 25px;"><table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td class="spacer-body" valign="top" height="25" width="44">&#xA0;</td>
</tr>
</table>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
<td id="layout_table_64afecbb5cc3a5c6cf80fb6441206b4200566758" valign="top" width="431"><table cellpadding="0" cellspacing="0" border="0" class="layout layout-table " width="431" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr id="layout-row324" class="layout layout-row clear-this "><td id="layout-row-padding324" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td id="layout_table_7e87522860cbb7c9a20c4c8bb637867234a1d3d6" valign="top" width="216" style="background-color: #dedede;"><table cellpadding="0" cellspacing="0" border="0" class="layout layout-table " width="216" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #dedede;"><tr style="background-color: #dedede;"><td id="layout-row-margin303" valign="top" style="padding: 10px 5px 5px 5px;
	background-color: #dedede;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: initial !important;"><tr id="layout-row303" class="layout layout-row widget _widget_text style303" style="margin: 0; padding: 0;"><td id="layout-row-padding303" valign="top" style="padding: 5px;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td id="text_div246" class="td_text td_block" valign="top" align="left" style="line-height: 134%; color: inherit; font-size: 12px; font-weight: inherit; line-height: 1.34; text-decoration: inherit; font-family: Arial; mso-line-height-rule: exactly;"> <div style="line-height: 134%; margin: 0; outline: none; padding: 0; mso-line-height-rule: exactly; line-height: 1.34;" data-line-height="1.34"> <div style="margin: 0; outline: none;
	padding: 0;"> <span class="" style="color: #363232; font-size: inherit; font-weight: inherit; line-height: inherit; text-decoration: inherit;"> </span><div style="margin: 0; outline: none; padding: 0; text-align: center;"><span class="" style="color: #363232; font-size: inherit; font-weight: inherit; line-height: inherit; text-decoration: inherit;"><span style="color: inherit; font-size: inherit; font-weight: inherit; line-height: inherit; text-decoration: underline;">View this </span><span style="color: inherit; font-size: inherit; font-weight: inherit; line-height: inherit; text-decoration: underline;">email</span><span style="color: inherit; font-size: inherit; font-weight: inherit; line-height: inherit; text-decoration: underline;"> in your browser</span></span></div>
</div>
</div>
	<!--[if (gte mso 12)&(lte mso 15) ]>
	<style data-ac-keep="true" data-ac-inline="false"> #text_div246, #text_div246 div { line-height: 134% !important; };
	</style>
	<![endif]--></td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
<td id="layout_table_ecef14a55e6e2bfbc1b137135f44c833973fc4c1" valign="top" width="215" style="background-color: #dedede;"><table cellpadding="0" cellspacing="0" border="0" class="layout layout-table " width="215" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #dedede;"><tr style="background-color: #dedede;"><td id="layout-row-margin323" valign="top" style="padding: 0; background-color: #dedede;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: initial !important;"><tr id="layout-row323" class="layout layout-row widget _widget_picture style323" align="right" style=""><td id="layout-row-padding323" valign="top" style="padding: 10px 7px 6px 0px;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace:
	0pt;"><tr><td class="image-td" align="right" valign="top" width="208"><img src="http://insidesalessolutions.imgus11.com/public/c2ed54504142290d7b4bc62295d1697a.png?r=423603109" alt="" width="81" style="display: block; border: none; outline: none; width: 81px; opacity: 1; max-width: 100%;"></td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr style="background-color: #ffffff;"><td id="layout-row-margin298" valign="top" style="background-color: #ffffff;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr id="layout-row298" class="layout layout-row widget _widget_spacer "><td id="layout-row-padding298" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td valign="top" height="10"><div class="spacer" style="margin: 0; outline: none; padding: 0; height: 10px;"><table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td class="spacer-body" valign="top" height="10" width="650">&#xA0;</td>
</tr>
</table>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr style="background-color: #ffffff;"><td id="layout-row-margin333" valign="top" style="padding: 0; background-color: #ffffff;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: initial !important;"><tr id="layout-row333" class="layout layout-row widget _widget_spacer style333" style=""><td id="layout-row-padding333" valign="top" style="padding: 0;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td valign="top" height="30"><div class="spacer" style="margin: 0; outline: none; padding: 0; height: 30px;"><table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td class="spacer-body" valign="top" height="30" width="650" style="background-color:
	#ffffff;">&#xA0;</td>
</tr>
</table>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr style="background-color: #ffffff;"><td id="layout-row-margin291" valign="top" style="padding: 0; background-color: #ffffff;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: initial !important;"><tr id="layout-row291" class="layout layout-row widget _widget_text style291" style="margin: 0; padding: 0; background-color: #ffffff;"><td id="layout-row-padding291" valign="top" style="background-color: #ffffff; padding: 0 0 20px 0;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td id="text_div235" class="td_text td_block" valign="top" align="left" style="line-height: 140%; color: inherit; font-size: 12px; font-weight: inherit; line-height: 1.4; text-decoration: inherit; font-family: Arial; mso-line-height-rule: exactly;"> <div style="line-height: 140%; margin: 0; outline: none; padding: 0; font-size: 26px; mso-line-height-rule: exactly; line-height: 1.4;" data-line-height="1.4"> <div style="margin: 0; outline: none; padding: 0; text-align: center;"><span style="color: #113f58; font-size: inherit; font-weight: bold; line-height: inherit; text-decoration: inherit; font-family: arial, helvetica, sans;" class="">Here&apos;s your report!</span></div>
</div>
	<!--[if (gte mso 12)&(lte mso 15) ]>
	<style data-ac-keep="true" data-ac-inline="false"> #text_div235, #text_div235 div { line-height: 140% !important; };
	</style>
	<![endif]--></td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr style="background-color: #ffffff;"><td id="layout-row-margin290" valign="top" style="padding: 0; background-color: #ffffff;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: initial !important;"><tr id="layout-row290" class="layout layout-row widget _widget_picture style290" align="center" style="background-color: #ffffff;"><td id="layout-row-padding290" valign="top" style="background-color: #ffffff; padding: 26px;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td class="image-td" align="center" valign="top" width="598"><img src="http://insidesalessolutions.imgus11.com/public/27139ee56711d8a68f76b859a7df708c.png?r=1228324383" alt="" width="192" style="display: block; border: none; outline: none; width: 192px; opacity: 1; max-width:
	100%;"></td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr style="background-color: #ffffff;"><td id="layout-row-margin292" valign="top" style="padding: 0; background-color: #ffffff;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: initial !important;"><tr id="layout-row292" class="layout layout-row widget _widget_text style292" style="margin: 0; padding: 0; background-color: #ffffff;"><td id="layout-row-padding292" valign="top" style="background-color: #ffffff; padding: 0px 26px 0px 26px;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td id="text_div236" class="td_text td_block" valign="top" align="left" style="line-height: 150%; color: inherit; font-size: 12px; font-weight: inherit; line-height: 1.5; text-decoration: inherit; font-family: Arial; mso-line-height-rule: exactly;"> <div style="line-height: 150%; margin: 0; outline: none; padding: 0; text-align: center; mso-line-height-rule: exactly; line-height: 1.5;" class="" data-line-height="1.5"> <p class="p1" style="margin: 0; outline: none; padding: 0; color: #555555; font-size: inherit; font-weight: inherit; line-height: inherit; text-decoration: inherit; text-align: left;"><span style="color: #555555; font-size: 15px; font-weight: inherit; line-height: inherit; text-decoration: inherit;" class=""> </span></p>
	<div style="margin: 0; outline: none; padding: 0; text-align: center; font-family: arial; color: #555555; font-size: 15px; font-style: normal;" class=""><span style="color: #555555; font-size: inherit; font-weight: bold; line-height: inherit; text-decoration: inherit;" class="">Hi,</span></div>
	<br style="color: #555555;color: #555555;" class=""><div style="margin: 0; outline: none; padding: 0; text-align: center; font-family: arial; color: #555555; font-size: 15px; font-style: normal;" class="">Your summary report is ready.
<!-- <br>Total appointments attended are<span style="color: #04b431; font-size: inherit; font-weight: bold; line-height: inherit; text-decoration: inherit;" class=""> {number of appointments}</span>-->
</div>
	<div style="margin: 0; outline: none; padding: 0; text-align: left; color: #555555; font-size: 15px;" class=""><br><div style="margin: 0; outline: none; padding: 0; text-align: center;"><span style="color: #555555; font-size: inherit; font-weight: inherit; line-height: inherit; text-decoration: inherit;" class="">View your full campaign results daily via your portal access </span></div>
</div>
<p class="" style="margin: 0; outline: none; padding: 0; color: inherit; font-size: inherit; font-weight: inherit; line-height: inherit; text-decoration: inherit;"></p>
</div>
	<!--[if (gte mso 12)&(lte mso 15) ]>
	<style data-ac-keep="true" data-ac-inline="false"> #text_div236, #text_div236 div { line-height: 150% !important; };
	</style>
	<![endif]--></td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr style="background-color: #ffffff;"><td id="layout-row-margin339" valign="top" style="padding: 5px; background-color: #ffffff;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: initial !important;"><tr id="layout-row339" class="layout layout-row widget _widget_button style339" style=""><td id="layout-row-padding339" valign="top" style="padding: 5px;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td class="td_button td_block customizable" valign="top" align="left" width="630"> <div class="button-wrapper" style="margin: 0; outline: none; padding: 0; text-align: center;">
	<!--[if mso]> <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://insidesalessolutions.acemlnc.com/lt.php?notrack=1&s=6e1582b74813af8357e9ad2b67d5933f&i=8A12A3A34" style="v-text-anchor:middle; width:144px; height:59px; font-weight: bold;" arcsize="10%" strokecolor="#B5B5B5" strokeweight="0pt" fillcolor="#37c1d5" o:button="true" o:allowincell="true" o:allowoverlap="false" > <v:textbox inset="2px,2px,2px,2px"> <center style="color:#ffffff;font-family:Arial; font-size:15px; font-weight: bold;line-height: 1.1;">Access Portal</center> </v:textbox> </v:roundrect>
	<![endif]--> <a href="https://portal.isaless.com" style="margin: 0; outline: none; padding: 12px; color: #ffffff; background-color: #37c1d5; border: 0px solid #B5B5B5; border-radius: 3px; font-family: Arial; font-size: 15px; display: inline-block; line-height: 1.1; text-align: center; text-decoration: none; mso-hide: all;" target="_blank"> <span style="color:#ffffff;font-family:Arial;font-size:15px;font-weight: bold;"> Access Portal </span> </a> </div>

</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr style="background-color: #ffffff;"><td id="layout-row-margin346" valign="top" style="background-color: #ffffff;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr id="layout-row346" class="layout layout-row widget _widget_spacer "><td id="layout-row-padding346" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td valign="top" height="30"><div class="spacer" style="margin: 0; outline: none; padding: 0; height: 30px;"><table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td class="spacer-body" valign="top" height="30" width="650">&#xA0;</td>
</tr>
</table>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr style="background-color: #ffffff;"><td id="layout-row-margin341" valign="top" style="padding: 0; background-color: #ffffff;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: initial !important;"><tr id="layout-row341" class="layout layout-row widget _widget_break style341" style="background-color: #ffffff;"><td id="layout-row-padding341" valign="top" style="line-height: 0; mso-line-height-rule: exactly; background-color: #ffffff; padding: 0 26px 0 26px;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; line-height: 0; mso-line-height-rule: exactly;"><tr><td height="5" style="line-height: 0; mso-line-height-rule: exactly;"></td>
</tr>
<tr><td align="center" height="1" width="598" style="line-height: 0; mso-line-height-rule: exactly;"> <table align="center" border="0" cellpadding="0" cellspacing="0" height="1" width="598" style="font-size: 13px; min-width: auto!important; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; line-height: 0; mso-line-height-rule: exactly; width: 100%; max-width: 100%;"><tr><td class="break-line" bgcolor="#d8d8d8" height="1" width="598" style="line-height: 1px; mso-line-height-rule: exactly; height: 1px; width: 598px; background-color: #d8d8d8;"> </td>
</tr>
</table>
</td>
</tr>
<tr><td height="5" style="line-height: 0; mso-line-height-rule: exactly;"></td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
	<tr style="background-color: #ffffff;">
		<td id="layout-row-margin305" valign="top" style="padding: 0; background-color: #ffffff;">
			<table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: initial !important;">
				<tr id="layout-row305" class="layout layout-row widget _widget_text style305" style="margin: 0; padding: 0; background-color: #ffffff;">
					<td id="layout-row-padding305" valign="top" style="background-color: #ffffff; padding: 26px;">
						<table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
							<tr>
								<td id="text_div248" class="td_text td_block" valign="top" align="left" style="line-height: 130%; color: inherit; font-size: 12px; font-weight: inherit; line-height: 1.3; text-decoration: inherit; font-family: Arial; mso-line-height-rule: exactly;">
									<div style="line-height:130%; margin: 0; outline: none; padding: 0; color: #0b3861; mso-line-height-rule: exactly; line-height: 1.3;" data-line-height="1.3">
									<div style="margin: 0; outline: none; padding: 0; text-align: center; color: #0b3861;">
										<span style="color: #0b3861; font-size: 23px; font-weight: bold; line-height: inherit; text-decoration: inherit;" class="">Summary <br>
										</span>
									</div>
									</div>
			<!--[if (gte mso 12)&(lte mso 15) ]>
			<style data-ac-keep="true" data-ac-inline="false"> #text_div248, #text_div248 div { line-height: 130% !important; };
			</style>
			<![endif]-->
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr style="background-color: #ffffff;">
		<td id="layout-row-margin358" valign="top" style="background-color: #ffffff;">
			<table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
				<tr id="layout-row358" class="layout layout-row widget _widget_picture " align="center">
					<td id="layout-row-padding358" valign="top">
						<table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
							<tr>
								<td align="center" valign="top" width="650">';

    // iterate through data
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

/*
	$report_html .= "<p><em>What to expect in our improved client results portal!</em></p>";
	$report_html .= "<p><img src=\"https://s3.amazonaws.com/iss.public/report-delivery.PNG\" width=\"600\" height=\"360\" /></p>";
	$report_html .= "<p>You'll have access to the final database of your local decision makers and their buyer intelligence at the end of your campaign.</p>";
*/
$report_html.= '
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
<tr style="background-color: #ffffff;">
	<td id="layout-row-margin359" valign="top" style="background-color: #ffffff;">
		<table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
			<tr id="layout-row359" class="layout layout-row widget _widget_spacer ">
				<td id="layout-row-padding359" valign="top">
					<table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
						<tr>
							<td valign="top" height="30">
								<div class="spacer" style="margin: 0; outline: none; padding: 0; height: 30px;">
									<table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
										<tr>
											<td class="spacer-body" valign="top" height="30" width="650">&#xA0;</td>
										</tr>
									</table>
								</div>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</td>
</tr>
<tr style="background-color: #ffffff;"><td id="layout-row-margin332" valign="top" style="padding: 0; background-color: #ffffff;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: initial !important;"><tr id="layout-row332" class="layout layout-row widget _widget_break style332" style="background-color: #ffffff;"><td id="layout-row-padding332" valign="top" style="line-height: 0; mso-line-height-rule: exactly; background-color: #ffffff; padding: 0 26px 0 26px;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; line-height: 0; mso-line-height-rule: exactly;"><tr><td height="10" style="line-height: 0; mso-line-height-rule: exactly;"></td>
</tr>
<tr><td align="center" height="1" width="598" style="line-height: 0; mso-line-height-rule: exactly;"> <table align="center" border="0" cellpadding="0" cellspacing="0" height="1" width="598" style="font-size: 13px; min-width: auto!important; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; line-height: 0; mso-line-height-rule: exactly; width: 100%; max-width: 100%;"><tr><td class="break-line" bgcolor="#d8d8d8" height="1" width="598" style="line-height: 1px; mso-line-height-rule: exactly; height: 1px; width: 598px; background-color: #d8d8d8;"> </td>
</tr>
</table>
</td>
</tr>
<tr><td height="10" style="line-height: 0; mso-line-height-rule: exactly;"></td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr style="background-color: #ffffff;"><td id="layout-row-margin345" valign="top" style="padding: 0; background-color: #ffffff;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: initial !important;"><tr id="layout-row345" class="layout layout-row widget _widget_text style345" style="margin: 0; padding: 0; background-color: #ffffff;"><td id="layout-row-padding345" valign="top" style="background-color: #ffffff; padding: 26px;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td id="text_div279" class="td_text td_block" valign="top" align="left" style="line-height: 130%; color: inherit; font-size: 12px; font-weight: inherit; line-height: 1.3; text-decoration: inherit; font-family: Arial; mso-line-height-rule: exactly;"> <div style="line-height:
	130%; margin: 0; outline: none; padding: 0; color: #0b3861; mso-line-height-rule: exactly; line-height: 1.3;" data-line-height="1.3"> <div style="margin: 0; outline: none; padding: 0; text-align: center; color: #0b3861;"><span style="color: #0b3861; font-size: 23px; font-weight: 700; line-height: inherit; text-decoration: inherit;" class="">Want to Export Your Report?</span></div>
</div>
	<!--[if (gte mso 12)&(lte mso 15) ]>
	<style data-ac-keep="true" data-ac-inline="false"> #text_div279, #text_div279 div { line-height: 130% !important; };
	</style>
	<![endif]--></td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr id="layout-row349" class="layout layout-row clear-this " style="background-color: #ffffff;"><td id="layout-row-padding349" valign="top" style="background-color: #ffffff;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td id="layout_table_6ae6ddf79fbea23fc0cd9fa161694b4c1a383fc7" valign="top" width="320" style="background-color: #ffffff;"><table cellpadding="0" cellspacing="0" border="0" class="layout layout-table " width="320" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff;"><tr style="background-color: #ffffff;"><td id="layout-row-margin350" valign="top" style="padding: 5px; background-color: #ffffff;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: initial
	!important;"><tr id="layout-row350" class="layout layout-row widget _widget_text style350" style="margin: 0; padding: 0;"><td id="layout-row-padding350" valign="top" style="padding: 5px;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td id="text_div283" class="td_text td_block" valign="top" align="left" style="color: inherit; font-size: 12px; font-weight: inherit; line-height: 1; text-decoration: inherit; font-family: Arial;"> <div style="margin: 0; outline: none; padding: 0; font-size: 16px; color: #177287;"> <div style="margin: 0; outline: none; padding: 0; text-align: center; color: #177287;"><span style="color: #177287; font-size: inherit; font-weight: inherit; line-height: inherit; text-decoration: inherit;" class=""><span style="color: #177287; font-size: inherit; font-weight: bold; line-height: inherit; text-decoration: inherit;" class="">Step
	1</span>: Click on the Appointments Tab</span></div>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr style="background-color: #ffffff;"><td id="layout-row-margin347" valign="top" style="padding: 0; background-color: #ffffff;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: initial !important;"><tr id="layout-row347" class="layout layout-row widget _widget_picture style347" align="left" style=""><td id="layout-row-padding347" valign="top" style="padding: 0;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td class="image-td" align="left" valign="top" width="320"><img src="http://insidesalessolutions.imgus11.com/public/92916e50c430a89008205732a083bd58.png?r=2105728989" alt="" width="320" style="display: block; border: none; outline: none; width: 320px; opacity: 1; max-width: 100%;"></td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
<td id="layout_table_79063a00656efac17c5099a02988ecb4b4506425" valign="top" width="330" style="background-color: #ffffff;"><table cellpadding="0" cellspacing="0" border="0" class="layout layout-table " width="330" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff;"><tr style="background-color: #ffffff;"><td id="layout-row-margin351" valign="top" style="padding: 5px; background-color: #ffffff;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: initial !important;"><tr id="layout-row351" class="layout layout-row widget _widget_text style351" style="margin: 0; padding: 0;"><td id="layout-row-padding351" valign="top" style="padding: 5px;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace:
	0pt;"><tr><td id="text_div284" class="td_text td_block" valign="top" align="left" style="color: inherit; font-size: 12px; font-weight: inherit; line-height: 1; text-decoration: inherit; font-family: Arial;"> <div style="margin: 0; outline: none; padding: 0; font-size: 16px;"> <div style="margin: 0; outline: none; padding: 0; text-align: center;"><span style="color: #177287; font-size: inherit; font-weight: inherit; line-height: inherit; text-decoration: inherit;" class=""><span style="color: inherit; font-size: inherit; font-weight: bold; line-height: inherit; text-decoration: inherit;" class="">Step 2</span>: Click &apos;Export Excel&apos;</span></div>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr style="background-color: #ffffff;"><td id="layout-row-margin348" valign="top" style="background-color: #ffffff;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr id="layout-row348" class="layout layout-row widget _widget_picture " align="left"><td id="layout-row-padding348" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td class="image-td" align="left" valign="top" width="330"><img src="http://insidesalessolutions.imgus11.com/public/5702b59c9bb6c434324097afff8e08ba.png?r=1205157808" alt="" width="330" style="display: block; border: none; outline: none; width: 330px; opacity: 1; max-width: 100%;"></td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr style="background-color: #ffffff;"><td id="layout-row-margin353" valign="top" style="padding: 5px; background-color: #ffffff;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: initial !important;"><tr id="layout-row353" class="layout layout-row widget _widget_button style353" style=""><td id="layout-row-padding353" valign="top" style="padding: 5px;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td class="td_button td_block customizable" valign="top" align="left" width="630"> <div class="button-wrapper" style="margin: 0; outline: none; padding: 0; text-align: center;">
	<!--[if mso]> <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://insidesalessolutions.acemlnc.com/lt.php?notrack=1&s=6e1582b74813af8357e9ad2b67d5933f&i=8A12A3A34" style="v-text-anchor:middle; width:144px; height:59px; font-weight: bold;" arcsize="10%" strokecolor="#B5B5B5" strokeweight="0pt" fillcolor="#37c1d5" o:button="true" o:allowincell="true" o:allowoverlap="false" > <v:textbox inset="2px,2px,2px,2px"> <center style="color:#ffffff;font-family:Arial; font-size:15px; font-weight: bold;line-height: 1.1;">Access Portal</center> </v:textbox> </v:roundrect>
	<![endif]--> <a href="http://insidesalessolutions.acemlnc.com/lt.php?notrack=1&amp;s=6e1582b74813af8357e9ad2b67d5933f&amp;i=8A12A3A34" style="margin: 0; outline: none; padding: 12px; color: #ffffff; background-color: #37c1d5; border: 0px solid #B5B5B5; border-radius: 3px; font-family: Arial; font-size: 15px; display: inline-block; line-height: 1.1; text-align: center; text-decoration: none; mso-hide: all;" target="_blank"> <span style="color:#ffffff;font-family:Arial;font-size:15px;font-weight: bold;"> Access Portal </span> </a> </div>

</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr style="background-color: #ffffff;"><td id="layout-row-margin361" valign="top" style="background-color: #ffffff;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr id="layout-row361" class="layout layout-row widget _widget_spacer "><td id="layout-row-padding361" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td valign="top" height="30"><div class="spacer" style="margin: 0; outline: none; padding: 0; height: 30px;"><table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td class="spacer-body" valign="top" height="30" width="650">&#xA0;</td>
</tr>
</table>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr style="background-color: #ffffff;"><td id="layout-row-margin355" valign="top" style="padding: 0; background-color: #ffffff;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: initial !important;"><tr id="layout-row355" class="layout layout-row widget _widget_break style355" style="background-color: #ffffff;"><td id="layout-row-padding355" valign="top" style="line-height: 0; mso-line-height-rule: exactly; background-color: #ffffff; padding: 0 26px 0 26px;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; line-height: 0; mso-line-height-rule: exactly;"><tr><td height="10" style="line-height: 0; mso-line-height-rule: exactly;"></td>
</tr>
<tr><td align="center" height="1" width="598" style="line-height: 0; mso-line-height-rule: exactly;"> <table align="center" border="0" cellpadding="0" cellspacing="0" height="1" width="598" style="font-size: 13px; min-width: auto!important; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; line-height: 0; mso-line-height-rule: exactly; width: 100%; max-width: 100%;"><tr><td class="break-line" bgcolor="#d8d8d8" height="1" width="598" style="line-height: 1px; mso-line-height-rule: exactly; height: 1px; width: 598px; background-color: #d8d8d8;"> </td>
</tr>
</table>
</td>
</tr>
<tr><td height="10" style="line-height: 0; mso-line-height-rule: exactly;"></td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr style="background-color: #ffffff;"><td id="layout-row-margin356" valign="top" style="padding: 0; background-color: #ffffff;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: initial !important;"><tr id="layout-row356" class="layout layout-row widget _widget_text style356" style="margin: 0; padding: 0; background-color: #ffffff;"><td id="layout-row-padding356" valign="top" style="background-color: #ffffff; padding: 26px;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td id="text_div288" class="td_text td_block" valign="top" align="left" style="line-height: 130%; color: inherit; font-size: 12px; font-weight: inherit; line-height: 1.3; text-decoration: inherit; font-family: Arial; mso-line-height-rule: exactly;"> <div style="line-height:
	130%; margin: 0; outline: none; padding: 0; color: #0b3861; mso-line-height-rule: exactly; line-height: 1.3;" data-line-height="1.3"> <div style="margin: 0; outline: none; padding: 0; text-align: center; color: #0b3861;"><span style="color: #0b3861; font-size: 23px; font-weight: 700; line-height: inherit; text-decoration: inherit;" class="">What to Expect in the new Client Portal</span></div>
</div>
	<!--[if (gte mso 12)&(lte mso 15) ]>
	<style data-ac-keep="true" data-ac-inline="false"> #text_div288, #text_div288 div { line-height: 130% !important; };
	</style>
	<![endif]--></td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr style="background-color: #ffffff;"><td id="layout-row-margin357" valign="top" style="background-color: #ffffff;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr id="layout-row357" class="layout layout-row widget _widget_picture " align="left"><td id="layout-row-padding357" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td class="image-td" align="left" valign="top" width="650"><img src="http://insidesalessolutions.imgus11.com/public/38887f3e12bcdf821a931d1f1cc987cc.png?r=803259567" alt="" width="650" style="display: block; border: none; outline: none; width: 650px; opacity: 1; max-width: 100%;"></td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr style="background-color: #ffffff;"><td id="layout-row-margin368" valign="top" style="background-color: #ffffff;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr id="layout-row368" class="layout layout-row widget _widget_spacer "><td id="layout-row-padding368" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td valign="top" height="30"><div class="spacer" style="margin: 0; outline: none; padding: 0; height: 30px;"><table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td class="spacer-body" valign="top" height="30" width="650">&#xA0;</td>
</tr>
</table>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr style="background-color: #ffffff;"><td id="layout-row-margin367" valign="top" style="padding: 5px; background-color: #ffffff;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: initial !important;"><tr id="layout-row367" class="layout layout-row widget _widget_text style367" style="margin: 0; padding: 0;"><td id="layout-row-padding367" valign="top" style="padding: 5px;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td id="text_div296" class="td_text td_block" valign="top" align="left" style="color: inherit; font-size: 12px; font-weight: inherit; line-height: 1; text-decoration: inherit; font-family: Arial;"> <div style="margin: 0; outline: none; padding: 0; font-size: 18px;"> <div style="margin: 0; outline: none; padding: 0; text-align:
	center;"><span style="color: #37c1d5; font-size: inherit; font-weight: bold; line-height: inherit; text-decoration: inherit;" class="">www.isaless.com</span></div>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr style="background-color: #ffffff;"><td id="layout-row-margin354" valign="top" style="background-color: #ffffff;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr id="layout-row354" class="layout layout-row widget _widget_spacer "><td id="layout-row-padding354" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td valign="top" height="30"><div class="spacer" style="margin: 0; outline: none; padding: 0; height: 30px;"><table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td class="spacer-body" valign="top" height="30" width="650">&#xA0;</td>
</tr>
</table>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr id="layout-row312" class="layout layout-row clear-this " style="background-color: #ffffff;"><td id="layout-row-padding312" valign="top" style="background-color: #ffffff;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td id="layout_table_f18ee9822e15f74afb8f0a13f38f65a035ba45f1" valign="top" width="325" style="background-color: #262626;"><table cellpadding="0" cellspacing="0" border="0" class="layout layout-table " width="325" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #262626;"><tr id="layout-row363" class="layout layout-row clear-this " style="background-color: #262626;"><td id="layout-row-padding363" valign="top" style="background-color: #262626;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace:
	0pt;"><tr><td id="layout_table_6642af9785a9eabe8bb2c283334d1c2bf0f692fc" valign="top" width="279"><table cellpadding="0" cellspacing="0" border="0" class="layout layout-table " width="279" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td id="layout-row-margin310" valign="top" style="padding: 0;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: initial !important;"><tr id="layout-row310" class="layout layout-row widget _widget_text style310" style="margin: 0; padding: 0; background-color: #262626;"><td id="layout-row-padding310" valign="top" style="background-color: #262626; padding: 20px 26px 20px 26px;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td id="text_div253" class="td_text td_block" valign="top" align="left" style="color: inherit; font-size: 12px; font-weight: inherit; line-height: 1; text-decoration: inherit; font-family: Arial;"> <div style="margin: 0; outline: none; padding: 0;"> <p class="p1" style="margin: 0; outline: none; padding: 0; color: inherit; font-size: inherit; font-weight: inherit; line-height: inherit; text-decoration: inherit;"><span class="" style="color: #999999; font-size: inherit; font-weight: inherit; line-height: inherit; text-decoration: inherit;">You are receiving this email because you have an active campaign with Inside Sales Solutions. To stop receiving these messages please click&#xA0;&#xA0;<a href="http://insidesalessolutions.acemlnc.com/proc.php?nl=3&amp;c=8&amp;m=12&amp;s=6e1582b74813af8357e9ad2b67d5933f&amp;act=unsub" style="margin: 0; outline: none; padding: 0; color: #999999; text-decoration: underline; text-align: inherit;" target="_blank"><span style="color: #999999; font-size: inherit; font-weight: inherit; line-height:
	inherit; text-decoration: inherit;">Unsubscribe</span></a></span></p>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
<td id="layout_table_0a04411314f101c836522786af0120951cf8b3e6" valign="top" width="46"><table cellpadding="0" cellspacing="0" border="0" class="layout layout-table " width="46" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td id="layout-row-margin338" valign="top" style="padding: 0;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: initial !important;"><tr id="layout-row338" class="layout layout-row widget _widget_spacer style338" style=""><td id="layout-row-padding338" valign="top" style="padding: 0;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td valign="top" height="94"><div class="spacer" style="margin: 0; outline: none; padding: 0; height: 94px;"><table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td class="spacer-body" valign="top" height="94" width="46" style="background-color: #262626;">&#xA0;</td>
</tr>
</table>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
<td id="layout_table_4c89c6ad298ac5e2f978b3aec61351cc9d1f9e67" valign="top" width="325" style="background-color: #262626;"><table cellpadding="0" cellspacing="0" border="0" class="layout layout-table " width="325" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #262626;"><tr style="background-color: #262626;"><td id="layout-row-margin311" valign="top" style="padding: 0; background-color: #262626;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: initial !important;"><tr id="layout-row311" class="layout layout-row widget _widget_text style311" style="margin: 0; padding: 0; background-color: #262626;"><td id="layout-row-padding311" valign="top" style="background-color: #262626; padding: 20px 26px 20px 20px;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size: 13px;
	min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tr><td id="text_div254" class="td_text td_block" valign="top" align="left" style="color: inherit; font-size: 12px; font-weight: inherit; line-height: 1; text-decoration: inherit; font-family: Arial;"> <div style="margin: 0; outline: none; padding: 0; color: #999999;"> <div style="margin: 0; outline: none; padding: 0; text-align: right; color: #999999;"><span style="color: #999999; font-size: inherit; font-weight: inherit; line-height: inherit; text-decoration: inherit;" class="">Inside Sales Solutions<br>
	1211 1st Ave N<br>
	St. Petersburg, FL 33705<br>
	United States</span><br style="color: #999999;"></div>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</div>
<img src="http://insidesalessolutions.acemlnc.com/lt.php?notrack=1&amp;nl=3&amp;c=8&amp;m=12&amp;s=6e1582b74813af8357e9ad2b67d5933f&amp;l=open" border="0" width="1" height="1" style="display:block;width:1px!important;min-width:1px!important;max-width:1px!important;height:1px!important;border:0;overflow:hidden;"></body>
</html>
<script type="text/javascript">
	(function() {
		function sizeToParent(){
			var totalHeight = document.body.scrollHeight;
			parent.postMessage({
				scrollHeight: totalHeight
			}, "https://mail.mixmax.com");
		}

		var initializeHiddenQuote = function() {
			var gmailExtra = document.querySelector(".gmail_extra");
			if (gmailExtra) {
				var gmailQuote = gmailExtra.querySelector(".gmail_quote");
				gmailQuote.className += " hidden";
				var expandButton = document.createElement("div");
				expandButton.innerHTML = "&bull;&bull;&bull;";
				expandButton.className = "js-expand-quote expand-quote";
				expandButton.onclick = function() {
					gmailQuote.className = gmailQuote.className.replace(/ hidden/g, "");
	          // Remove the expand button since this is a toggle-once button
	          expandButton.parentNode.removeChild(expandButton);
	          sizeToParent();
	      };
	      gmailExtra.insertBefore(expandButton, gmailQuote);
	        // Add in expand button height to hidden height;
	    }
	};

	initializeHiddenQuote();

	    // Size now and every 100ms until load.
	    sizeToParent();
	    var interval = setInterval(sizeToParent, 100);

	    // Seatbelts in case it does n0t load in 10sec.
	    var timeout = setTimeout(function(){
	    	clearInterval(interval);
	    }, 10 * 1000);


	    window.onload = function(){
	    	clearInterval(interval);
	    	clearTimeout(timeout);
	    	sizeToParent();
	    };
	})();
</script>
</body>
</html>';
    // return response
    return $report_html;
}
