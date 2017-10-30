<?php
array_push($job_strings, 'sendFeedback');

function sendFeedbackEmail($id){
		//require stock phpmailer
                require_once('custom/include/php_mailer/PHPMailer.php');
                require_once('custom/include/php_mailer/SMTP.php');
		//get email template.
		$emailTemplate = new EmailTemplate();
		$emailTemplate = $emailTemplate->retrieve("809473be-72d0-11e7-97dc-12f45cb4e5cd");
		//get appointment
		$app = BeanFactory::retrieveBean('ATC_Appointments', $id);
		//get sales rep
		$salesrep = BeanFactory::retrieveBean('ATC_ClientSalesReps',$app->atc_clientsalesreps_atc_appointmentsatc_clientsalesreps_ida);
		//get second sales rep, if it exists.  just the name and email address.
		$salesrep2_email="";$salesrep2_name="";
		if($app->atc_clientsalesreps_id_c != ""){
			$salesrep2 = BeanFactory::retrieveBean('ATC_ClientSalesReps',$app->atc_clientsalesreps_id_c);
			if(isset($salesrep2->id)){
				$salesrep2_email = $salesrep2->email1;
				$salesrep2_name = $salesrep2->first_name." ".$salesresp2->last_name;
			}
		}
		//get the accounts.  used to fill template with data.
		$account = BeanFactory::retrieveBean('Accounts', $app->accounts_atc_appointments_1accounts_ida);
		//get assigned user, which will be also sent the email.
		$assigned_user = BeanFactory::retrieveBean('Users', $app->assigned_user_id);
		//get the target list, which we're going to pull the from name and email from.
		$target_list = BeanFactory::retrieveBean('ProspectLists',$app->prospectlists_atc_appointments_1prospectlists_ida);
		//set the from name and from email.
		$from_name = "";
		$from_email = "";

		if(isset($target_list->id)){
			$from_name = $target_list->from_name_c;
			$from_email = $target_list->from_address_c;
			if($from_name=="" || $from_email==""){
				$director = BeanFactory::retrieveBean("Users",$target_list->assigned_user_id);
				$from_name = $director->first_name." ".$director->last_name;
				$from_email = $director->email1;
			}
		}
		else{
		//	$GLOBALS['log']->fatal("4");
			$from_name = $assigned_user->first_name." ".$assigned_user->last_name;
			$from_email = $assigned_user->email1;
		}

		//set the sales rep email.
		$salesrep_email = "";

		$salesrep_email = $salesrep->email1;
		$salesrep_name = $salesrep->first_name." ".$salesrep->last_name;

		//$GLOBALS['log']->fatal("email:".$salesrep_email);
	//ensure that there is a sales rep email to send to.
	if($salesrep_email != '' && !empty($salesrep_email)){

		//read template
            	$emailTemplate->parsed_entities = null;
            	$temp = array();

            	$template_data = $emailTemplate->parse_email_template(
                	array(
                    		"subject" => $emailTemplate->subject,
                    		"body_html" => $emailTemplate->body_html,
                    		"body" => $emailTemplate->body
                	),
                    	'ATC_Appointments',
                    	$app->id,
                    	$temp
                );
		//parse template subject.
            	$email_body = $template_data["body_html"];
		$email_subject = $template_data["subject"];
		$subject_string=str_replace("~account~", $account->name,$email_subject);
		$mail->Subject = $subject_string;
		//parse body values
 		$body = str_replace("~link~","<a href='https://portal.isaless.com/feedback.php?appointment_id=".$app->id."'>Appointment Feedback</a>",$email_body);
		$body = str_replace("~first_name~",$salesrep->first_name,$body);
		$body = str_replace("~account~", $account->name,$body);

		//this is using stock phpmailer.
		$mail = new PHPMailer;
                $mail->Host = "retail.smtp.com";
                $mail->SMTPAuth = true;
                $mail->Username = "aidan.snee@isaless.com";
                $mail->Password = "Insidesales17";
                $mail->Port = "25";
		//end manual settings

		//fill in the email content.
		$mail->From = $from_email;
		$mail->FromName = $from_name;
                $mail->AddAddress($salesrep_email,$salesrep_name);
		if($salesrep2_email!=""){$mail->AddAddress($salesrep2_email,$salesrep2_name);}
		//$mail->AddCC($from_email,$from_name);
                $mail->AddCC($assigned_user->email1, $assigned_user->first_name." ".$assigned_user->last_name);
                $mail->WordWrap = 50;
                $mail->IsHTML(true);
                $mail->Subject=$subject_string;
                $mail->Body = $body;
		//send the email, and if it doesn't send, then log the error.
		if(!$mail->Send()){
			$GLOBALS['log']->fatal("Mail Error:".$mail->ErrorInfo);
			return false;
		}
		else{
			return true;
		}
	}
	else {return false;}
}

function sendFeedback(){
	//0, 3, 6 12, 24 
	$sendingar = array();
	$sendingar[] = array("time" => 0,"oldstatus" => "qualified","newstatus" => "sent", "message" => "");
	$sendingar[] = array("time" => 3,"oldstatus" => "sent","newstatus" => "sent twice", "message" => "Second Notification");
	$sendingar[] = array("time" => 6,"oldstatus" => "sent twice","newstatus" => "sent thrice", "message" => "Third Notification");
	$sendingar[] = array("time" => 12,"oldstatus" => "sent thrice","newstatus" => "sent four", "message" => "Fourth Notification");
	$sendingar[] = array("time" => 24,"oldstatus" => "sent four","newstatus" => "sent final", "message" => "Final Notification");
        $db = DBManagerFactory::GetInstance();
        global $timedate;
	foreach($sendingar as $sa){
		$find="SELECT DISTINCT atc_appointments.id as id
			FROM atc_appointments 
			INNER JOIN atc_appointments_cstm ON atc_appointments.id = atc_appointments_cstm.id_c and atc_appointments.deleted=0
			WHERE date_sub(now(), INTERVAL {$sa['time']} hour) > feedback_timestamp AND feedback_timestamp != '' AND feedback_timestamp IS NOT NULL
			AND feedback_status_c = '{$sa['oldstatus']}'";
		$q = $db->query($find);
		while($newapp = $db->fetchRow($q)){
			$app = BeanFactory::retrieveBean('ATC_Appointments', $newapp['id']);
			if(sendFeedbackEmail($newapp['id'])){
				$app->feedback_status_c = $sa['newstatus'];
				$app->save();
			}
			else{
				if($sa['oldstatus']=='qualified'){
					$app->feedback_status_c = 'not sent';
					$app->save();
				}
			}

		}


	}
/*	$find_new = "SELECT distinct atc_appointments.id AS id
                FROM atc_appointments
                INNER JOIN atc_appointments_cstm ON atc_appointments.id = atc_appointments_cstm.id_c
                WHERE date_sub(now(), INTERVAL 0 hour) > feedback_timestamp AND feedback_timestamp != '' AND feedback_timestamp IS NOT NULL AND feedback_status_c = 'qualified' AND atc_appointments.deleted=0;";
	$newq = $db->query($find_new);
	//send first email.
	while ($newapp = $db->fetchRow($newq)){
		$app = BeanFactory::getBean('ATC_Appointments', $newapp['id']);
		if (sendFeedbackEmail($newapp['id'])){
			$app->feedback_status_c = 'sent';
			$app->save();
		}
		else{
			$app->feedback_status_c = 'not sent';
			$app->save();
		}
	}
	//send second email.
	$find_1 ="SELECT distinct atc_appointments.id AS id
		FROM atc_appointments
		INNER JOIN  atc_appointments_cstm ON atc_appointments.id = atc_appointments_cstm.id_c
                INNER JOIN atc_clientsalesreps_atc_appointments_c on atc_clientsalesreps_atc_appointmentsatc_appointments_idb = atc_appointments.id and atc_clientsalesreps_atc_appointments_c.deleted=0
		WHERE date_sub(now(), INTERVAL 6 hour) >= feedback_timestamp AND feedback_timestamp != '' AND feedback_timestamp IS NOT NULL AND feedback_status_c = 'sent' AND atc_appointments.deleted=0;";
	$q1 = $db->query($find_1);
	while($app_1 = $db->fetchRow($q1)){
		if (sendFeedbackEmail($app_1['id'])){
			$app = BeanFactory::getBean('ATC_Appointments', $app_1['id']);
			$app->feedback_status_c = 'sent twice';
			$app->save();
		}
	}


	//send third email.
	$find_2 ="SELECT distinct atc_appointments.id AS id
		FROM atc_appointments
		INNER JOIN  atc_appointments_cstm ON atc_appointments.id = atc_appointments_cstm.id_c
                INNER JOIN atc_clientsalesreps_atc_appointments_c on atc_clientsalesreps_atc_appointmentsatc_appointments_idb = 
		atc_appointments.id and atc_clientsalesreps_atc_appointments_c.deleted = 0
		WHERE date_sub(now(), INTERVAL 24 hour) >= feedback_timestamp AND feedback_timestamp != '' 
		AND feedback_timestamp IS NOT NULL AND feedback_status_c = 'sent twice' AND atc_appointments.deleted=0;";

	$q2 = $db->query($find_2);

	while($app_2 = $db->fetchRow($q2)){
			if (sendFeedbackEmail($app_2['id'])){
				$app = BeanFactory::getBean('ATC_Appointments', $app_2['id']);
				$app->feedback_status_c = 'sent thrice';
				$app->save();
			}
	}
*/

return true;
}
?>
