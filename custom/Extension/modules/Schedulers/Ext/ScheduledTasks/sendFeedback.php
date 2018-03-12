<?php

array_push($job_strings, 'sendFeedback');

function sendFeedbackEmail($id, $message)
{
    // get email template.
    $emailTemplate = new EmailTemplate();

    // introduce the email template
    $emailTemplate = $emailTemplate->retrieve("809473be-72d0-11e7-97dc-12f45cb4e5cd");

    // introduce appointment
    $app = BeanFactory::retrieveBean('ATC_Appointments', $id);

    // introduce the related sales rep
    $salesrep = BeanFactory::retrieveBean('ATC_ClientSalesReps',
        $app->atc_clientsalesreps_atc_appointmentsatc_clientsalesreps_ida);

    // introduce the sales rep's email
    $salesrep_email = $salesrep->email1;

    // make sure that there is a sales rep email to send to.
    if (empty($salesrep_email)) {

        return false;
    }

    // introduce the sales rep's name
    $salesrep_name = $salesrep->first_name . " " . $salesrep->last_name;

    // get the accounts.  used to fill template with data.
    $account = BeanFactory::retrieveBean('Accounts', $app->accounts_atc_appointments_1accounts_ida);

    // get assigned user, which will be also sent the email.
    $assigned_user = BeanFactory::retrieveBean('Users', $app->assigned_user_id);

    // get the target list, which we're going to pull the from name and email from.
    $target_list = BeanFactory::retrieveBean('ProspectLists', $app->prospectlists_atc_appointments_1prospectlists_ida);

    // make sure that TL is valid
    if (isset($target_list->id)) {

        // introduce the email 'from name'
        $from_name = $target_list->from_name_c;

        // introduce the email 'from address'
        $from_email = $target_list->from_address_c;

        // make sure that from params are set
        if ($from_name == "" || $from_email == "") {

            // set default from params
            $from_name = "Inside Sales";
            $from_email = "feedback@isaless.com";
        }
    } else {

        // set the assigned user's identity (if TL is invalid)
        $from_name = $assigned_user->first_name . " " . $assigned_user->last_name;
        $from_email = $assigned_user->email1;
    }

    // introduce the second sales rep
    $salesrep2_email = "";
    $salesrep2_name = "";

    // make sure that second sales rep is related to appointment
    if ($app->atc_clientsalesreps_id_c != "") {

        // introduce the second sales rep
        $salesrep2 = BeanFactory::retrieveBean('ATC_ClientSalesReps', $app->atc_clientsalesreps_id_c);

        // make sure that bean is valid
        if (isset($salesrep2->id)) {

            // set the 2nd rep's email
            $salesrep2_email = $salesrep2->email1;

            // set the 2nd rep's name
            $salesrep2_name = $salesrep2->first_name . " " . $salesrep2->last_name;
        }
    }

    // read template
    $emailTemplate->parsed_entities = null;

    $macro_nv = array();

    // parse email template
    $template_data = $emailTemplate->parse_email_template(
        array(
            "subject" => $emailTemplate->subject . $message,
            "body_html" => $emailTemplate->body_html,
            "body" => $emailTemplate->body
        ),
        'ATC_Appointments',
        $app->id,
        $macro_nv
    );

    // introduce the email's body
    $email_body = $template_data["body_html"];

    // introduce the subject
    $email_subject = $template_data["subject"];

    // parse subject (internal var in template)
    $subject_string = str_replace("~account~", $account->name, $email_subject);

    // introduce the appointment link (..that leads to portal page)
    $url = "<a href='https://portal.isaless.com/feedback.php?appointment_id=" . $app->id . "'>Appointment Feedback</a>";

    // parse body values (internal vars in template)
    $body = str_replace("~link~", $url, $email_body);
    $body = str_replace("~first_name~", $salesrep->first_name, $body);
    $body = str_replace("~account~", $account->name, $body);

    // introduce from email identity
    $from = new SendGrid\Email($from_name, $from_email);

    // introduce salesrep email identity
    $sales_rep = new SendGrid\Email($salesrep_name, $salesrep_email);

    // introduce the email's body
    $content = new SendGrid\Content("text/html", $body);

    // introduce new mail object
    $mail = new SendGrid\Mail($from, $subject_string, $sales_rep, $content);

    // make sure that salesrep2 exists
    if ($salesrep2_email != "") {

        // introduce new email identity
        $sales_rep_2 = new SendGrid\Email($salesrep2_name, $salesrep2_email);

        // add salesrep2 as CC
        $mail->personalization[0]->addTo($sales_rep_2);
    }

    // introduce assigned user's name
    $assigned_user_name = $assigned_user->first_name . " " . $assigned_user->last_name;

    // introduce assigned user's email identity
    $assigned_user_email = new SendGrid\Email($assigned_user_name, $assigned_user->email1);

    // add assigned user as CC
    $mail->personalization[0]->addCc($assigned_user_email);

    // introduce new HTTP Client (sandgrid)
    $sandgrid = new \SendGrid('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');

    // send the email
    $response = $sandgrid->client->mail()->send()->post($mail);

    // make sure that email was sent successfully
    if ($response->statusCode() != 202) {

        // log error
        $GLOBALS['log']->fatal("Mail Error:" . $response->body());

        return false;
    }

    return true;


}

function sendFeedback()
{
    //get current time in easter timezone.
    $ct = new DateTime("now", new DateTimeZone("America/New_York"));

    //get the current 24 clock hour, without leading zeroes.  convert to integer.
    $cr = intval($ct->format("G"));
    $dr = intval($ct->format("w"));

    //check if it's business hours. (after 8am, until 5:59)  also check if the day is monday to friday (1-5).
    if (!($cr < 18 && $cr > 7 && $dr < 6)) {

        return true;
    }

    //0, 3, 6 12, 24
    $sendingar = array();

    $sendingar[] = array(
        "time" => 0,
        "oldstatus" => "qualified",
        "newstatus" => "sent",
        "message" => ""
    );
    $sendingar[] = array(
        "time" => 4,
        "oldstatus" => "sent",
        "newstatus" => "sent twice",
        "message" => " Second Notification"
    );
    $sendingar[] = array(
        "time" => 16,
        "oldstatus" => "sent twice",
        "newstatus" => "sent thrice",
        "message" => " Third Notification"
    );
    $sendingar[] = array(
        "time" => 6,
        "oldstatus" => "sent thrice",
        "newstatus" => "sent four",
        "message" => " Fourth Notification"
    );
    $sendingar[] = array(
        "time" => 14,
        "oldstatus" => "sent four",
        "newstatus" => "sent five",
        "message" => " Fifth Notification"
    );
    $sendingar[] = array(
        "time" => 6,
        "oldstatus" => "sent five",
        "newstatus" => "sent final",
        "message" => " Final Notification"
    );

    $db = DBManagerFactory::GetInstance();

    foreach ($sendingar as $sa) {

        $find = "SELECT DISTINCT atc_appointments.id as id
			FROM atc_appointments
			INNER JOIN atc_appointments_cstm ON atc_appointments.id = atc_appointments_cstm.id_c and atc_appointments.deleted=0
			WHERE date_sub(now(), INTERVAL {$sa['time']} hour) > feedback_timestamp AND feedback_timestamp != '' AND feedback_timestamp IS NOT NULL
			AND atc_appointments.deleted=0 AND feedback_status_c = '{$sa['oldstatus']}'";

        $q = $db->query($find);

        while ($newapp = $db->fetchRow($q)) {

            $app = BeanFactory::retrieveBean('ATC_Appointments', $newapp['id']);

            if (sendFeedbackEmail($newapp['id'], $sa['message'])) {

                $dt = new SugarDateTime();
                $app->feedback_timestamp = $dt->asDb();
                $app->feedback_status_c = $sa['newstatus'];

            } else {

                $app->feedback_status_c = 'not sent';
            }

            $app->save();
        }
    }

    return true;
}
