<?php
array_push($job_strings, 'sendFeedback');

function sendFeedbackEmail($id,$salesrep_id){
//		$GLOBALS['log']->fatal("sending an email");
		require_once('include/SugarPHPMailer.php');
		require_once('modules/Administration/Administration.php');

		$emailTemplate = new EmailTemplate();
		$emailTemplate = $emailTemplate->retrieve("809473be-72d0-11e7-97dc-12f45cb4e5cd");

		$app = BeanFactory::getBean('ATC_Appointments', $id);
		$salesrep = BeanFactory::getBean('ATC_ClientSalesReps',$salesrep_id);
		$account = BeanFactory::getBean('Accounts', $app->accounts_atc_appointments_1accounts_ida);

		$GLOBALS['log']->fatal('account--'.$bean->accounts_atc_appointments_1accounts_ida."--".$account->name);
		$salesrep_email = "";
		/*
		foreach($salesrep->emailAddresses->addresses as $address){
			$GLOBALS['log']->fatal(json_encode($address));
			if($address->primary_address == true){
				$salesrep_email = $address->email_address;
			}
		}
		*/

		$salesrep_email = $salesrep->email1;

		$GLOBALS['log']->fatal("email:".$salesrep_email);

	if($salesrep_email != ''){
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

            	$email_body = $template_data["body_html"];
		$email_subject = $template_data["subject"];

		$emailObj = new Email();
		$defaults = $emailObj->getSystemDefaultEmail();

		$mail = new SugarPHPMailer();
		$mail->setMailerForSystem();
		$mail->From = $defaults['email'];
		$mail->FromName = $defaults['name'];
		//$mail->From = 'ken@mastersolve.com';
		//$mail->FromName = 'test mctesterton';

		$subject_string=str_replace("~account~", $account->name,$email_subject);
		$mail->Subject = $subject_string;
 		$body = str_replace("~link~","<a href='https://portal.isaless.com/feedback.php?appointment_id=".$app->id."'>Appointment Feedback</a>",$email_body);
		$body = str_replace("~first_name~",$salesrep->first_name,$body);
		$body = str_replace("~account~", $account->name,$body);

		$mail->Body = $body;
		$mail->IsHTML(true);
		$mail->prepForOutbound();
		$mail->AddAddress($salesrep_email);
		//$mail->AddAddress($CampaignDirector);

		@$mail->Send();
		//$mail->parent_type = "ATC_ClientSalesReps";
		//$mail->parent_id = $salesrep->id;
		//$mail->save();
		return true;
	}
	else {return false;}
}

function sendFeedback(){


        $db = DBManagerFactory::GetInstance();
        global $timedate;


	$find_new = "SELECT atc_appointments.id AS id, atc_clientsalesreps_atc_appointmentsatc_clientsalesreps_ida as salesrep_id, atc_clientsalesreps_id_c as salesrep_id2
                FROM atc_appointments
                INNER JOIN atc_appointments_cstm ON atc_appointments.id = atc_appointments_cstm.id_c
                INNER JOIN atc_clientsalesreps_atc_appointments_c on atc_clientsalesreps_atc_appointmentsatc_appointments_idb = atc_appointments.id and atc_clientsalesreps_atc_appointments_c.deleted = 0
                WHERE now() > feedback_timestamp AND feedback_timestamp != '' AND feedback_timestamp IS NOT NULL AND feedback_status_c = 'qualified' AND atc_appointments.deleted=0;";


	$newq = $db->query($find_new);


	//send first email.
	while ($newapp = $db->fetchRow($newq)){
		$GLOBALS['log']->fatal("first send");
		//sendFeedbackEmail($newapp['id'],$newapp['salesrep_id']);
		if($newapp['salesrep_id'] != '' && !empty($newapp['salesrep_id'])){
		if (sendFeedbackEmail($newapp['id'],$newapp['salesrep_id']) == true){
			$app = BeanFactory::getBean('ATC_Appointments', $newapp['id']);
			$app->feedback_status_c = 'sent';
                	$dt = new SugarDateTime();
                	//$app->feedback_timestamp = $dt->asDb();
			$app->save();
		}
		}
		if($newapp['salesrep_id2'] != '' && !empty($newapp['salesrep_id2'])){
		if (sendFeedbackEmail($newapp['id'],$newapp['salesrep_id2']) == true){
			$app = BeanFactory::getBean('ATC_Appointments', $newapp['id']);
			$app->feedback_status_c = 'sent';
                	$dt = new SugarDateTime();
                	//$app->feedback_timestamp = $dt->asDb();
			$app->save();
		}
		}
	}

	//send second email.

	$find_1 ="SELECT atc_appointments.id AS id, atc_clientsalesreps_atc_appointmentsatc_clientsalesreps_ida as salesrep_id, atc_clientsalesreps_id_c as salesrep_id2
		FROM atc_appointments
		INNER JOIN  atc_appointments_cstm ON atc_appointments.id = atc_appointments_cstm.id_c
                INNER JOIN atc_clientsalesreps_atc_appointments_c on atc_clientsalesreps_atc_appointmentsatc_appointments_idb = atc_appointments.id and atc_clientsalesreps_atc_appointments_c.deleted=0
		WHERE date_sub(now(), INTERVAL 6 hour) >= feedback_timestamp AND feedback_timestamp != '' AND feedback_timestamp IS NOT NULL AND feedback_status_c = 'sent' AND atc_appointments.deleted=0;";
	
	$q1 = $db->query($find_1);

	while($app_1 = $db->fetchRow($q1)){
		$GLOBALS['log']->fatal("Second Email ");
		//$GLOBALS['log']->fatal();
		//sendFeedbackEmail($newapp['id'],$app_1['salesrep_id']);
		if($app_1['salesrep_id'] != '' && !empty($app_1['salesrep_id'])){
			if (sendFeedbackEmail($app_1['id'],$app_1['salesrep_id']) == true){
				$app = BeanFactory::getBean('ATC_Appointments', $app_1['id']);
				$app->feedback_status_c = 'sent twice';
				$dt = new SugarDateTime();
				//$app->feedback_timestamp = $dt->asDb();
				$app->save();
			}
            	}
            	if($app_1['salesrep_id2'] != '' && !empty($app_1['salesrep_id2'])){
			if (sendFeedbackEmail($app_1['id'],$app_1['salesrep_id2']) == true){
				$app = BeanFactory::getBean('ATC_Appointments', $app_1['id']);
				$app->feedback_status_c = 'sent twice';
				$dt = new SugarDateTime();
				//$app->feedback_timestamp = $dt->asDb();
				$app->save();
			}
            	}
	}


	//send third email.
	$find_2 ="SELECT atc_appointments.id AS id, atc_clientsalesreps_atc_appointmentsatc_clientsalesreps_ida as salesrep_id, atc_clientsalesreps_id_c as salesrep_id2
		FROM atc_appointments
		INNER JOIN  atc_appointments_cstm ON atc_appointments.id = atc_appointments_cstm.id_c
                INNER JOIN atc_clientsalesreps_atc_appointments_c on atc_clientsalesreps_atc_appointmentsatc_appointments_idb = 
		atc_appointments.id and atc_clientsalesreps_atc_appointments_c.deleted = 0
		WHERE date_sub(now(), INTERVAL 24 hour) >= feedback_timestamp AND feedback_timestamp != '' 
		AND feedback_timestamp IS NOT NULL AND feedback_status_c = 'sent twice' AND atc_appointments.deleted=0;";
	$q2 = $db->query($find_2);

	while($app_2 = $db->fetchRow($q2)){
		if($app_2['salesrep_id'] != '' && !empty($app_2['salesrep_id'])){
			if (sendFeedbackEmail($app_2['id'],$app_2['salesrep_id']) == true){
				$app = BeanFactory::getBean('ATC_Appointments', $app_2['id']);
				$app->feedback_status_c = 'sent thrice';
				$dt = new SugarDateTime();
				//$app->feedback_timestamp = $dt->asDb();
				$app->save();
			}
            	}
            	if($app_2['salesrep_id2'] != '' && !empty($app_2['salesrep_id2'])){
			if (sendFeedbackEmail($app_2['id'],$app_2['salesrep_id2']) == true){
				$app = BeanFactory::getBean('ATC_Appointments', $app_2['id']);
				$app->feedback_status_c = 'sent thrice';
				$dt = new SugarDateTime();
				//$app->feedback_timestamp = $dt->asDb();
				$app->save();
			}
            	}

	}


return true;
}
?>
