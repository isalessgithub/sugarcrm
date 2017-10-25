<?php
array_push($job_strings, 'sendFeedback');

function sendFeedbackEmail($id){
//		$GLOBALS['log']->fatal("sending an email");
//		require_once('custom/include/SugarPHPMailer.php');
//		require_once('modules/Administration/Administration.php');
                require_once('custom/include/php_mailer/PHPMailer.php');
                require_once('custom/include/php_mailer/SMTP.php');


		$emailTemplate = new EmailTemplate();
		$emailTemplate = $emailTemplate->retrieve("809473be-72d0-11e7-97dc-12f45cb4e5cd");

		$app = BeanFactory::retrieveBean('ATC_Appointments', $id);
		$salesrep = BeanFactory::retrieveBean('ATC_ClientSalesReps',$app->atc_clientsalesreps_atc_appointmentsatc_clientsalesreps_ida);

		$salesrep2_email="";$salesrep2_name="";
		if($app->atc_clientsalesreps_id_c != ""){
			$salesrep2 = BeanFactory::retrieveBean('ATC_ClientSalesReps',$app->atc_clientsalesreps_id_c);
			if(isset($salesrep2->id)){
				$salesrep2_email = $salesrep2->email1;
				$salesrep2_name = $salesrep2->first_name." ".$salesresp2->last_name;
			}
		}
		$account = BeanFactory::retrieveBean('Accounts', $app->accounts_atc_appointments_1accounts_ida);
		$assigned_user = BeanFactory::retrieveBean('Users', $app->assigned_user_id);
		$target_list = BeanFactory::retrieveBean('ProspectLists',$app->prospectlists_atc_appointments_1prospectlists_ida);
		//set the from name and from email.
		$from_name = "";
		$from_email = "";
		//$GLOBALS['log']->fatal("1");

		if(isset($target_list->id)){
			$from_name = $target_list->from_name_c;
			$from_email = $target_list->from_address_c;
		//	$GLOBALS['log']->fatal("2");

			if($from_name=="" || $from_email==""){
				$director = BeanFactory::retrieveBean("Users",$target_list->assigned_user_id);
				$from_name = $director->first_name." ".$director->last_name;
				$from_email = $director->email1;
		//		$GLOBALS['log']->fatal("3");

			}
		}
		else{
		//	$GLOBALS['log']->fatal("4");
			$from_name = $assigned_user->first_name." ".$assigned_user->last_name;
			$from_email = $assigned_user->email1;

		}

		//$GLOBALS['log']->fatal('account--'.$account->accounts_atc_appointments_1accounts_ida."--".$account->name);
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
		$salesrep_name = $salesrep->first_name." ".$salesrep->last_name;

		//$GLOBALS['log']->fatal("email:".$salesrep_email);

	if($salesrep_email != '' && !empty($salesrep_email)){

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

		$subject_string=str_replace("~account~", $account->name,$email_subject);
		$mail->Subject = $subject_string;
 		$body = str_replace("~link~","<a href='https://portal.isaless.com/feedback.php?appointment_id=".$app->id."'>Appointment Feedback</a>",$email_body);
		$body = str_replace("~first_name~",$salesrep->first_name,$body);
		$body = str_replace("~account~", $account->name,$body);

//		$emailObj = new Email();
//		$defaults = $emailObj->getSystemDefaultEmail();

//		not using sugar php mailer.
//		$mail = new SugarPHPMailer();
//		$mail->setMailerForSystem();
		//this is using stock phpmailer.
		$mail = new PHPMailer;
		//$mail->IsSMTP();
                $mail->Host = "retail.smtp.com";
                $mail->SMTPAuth = true;
                $mail->Username = "aidan.snee@isaless.com";
                $mail->Password = "Insidesales17";
                $mail->Port = "25";
		//end manual settings

		$mail->From = $from_email;
		$mail->FromName = $from_name;
                $mail->AddAddress($salesrep_email,$salesrep_name);
		if($salesrep2_email!=""){$mail->AddAddress($salesrep2_email,$salesrep2_name);}
                $mail->AddCC($assigned_user->email1, $assigned_user->first_name." ".$assigned_user->last_name);
                $mail->WordWrap = 50;
                $mail->IsHTML(true);
                $mail->Subject=$subject_string;
                $mail->Body = $body;
                $mail->Send();

		if(!$mail->Send()){
			$GLOBALS['log']->fatal("Mail Error:".$mail->ErrorInfo);
			return false;
		}
		else{
			return true;
		}
/*

		$mail->Body = $body;
		$mail->IsHTML(true);
		//$mail->prepForOutbound();
		$mail->AddAddress($salesrep_email, $salesrep->first_name." ".$salesrep->last_name);
		//$mail->AddAddress($CampaignDirector);


		if($mail->Send()){
			return true;
		}
		else{
			return false;
		}
*/

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


	$find_new = "SELECT distinct atc_appointments.id AS id
                FROM atc_appointments
                INNER JOIN atc_appointments_cstm ON atc_appointments.id = atc_appointments_cstm.id_c
                INNER JOIN atc_clientsalesreps_atc_appointments_c on atc_clientsalesreps_atc_appointmentsatc_appointments_idb = atc_appointments.id and atc_clientsalesreps_atc_appointments_c.deleted = 0
                WHERE now() > feedback_timestamp AND feedback_timestamp != '' AND feedback_timestamp IS NOT NULL AND feedback_status_c = 'qualified' AND atc_appointments.deleted=0;";


	$newq = $db->query($find_new);


	//send first email.
	while ($newapp = $db->fetchRow($newq)){
		$GLOBALS['log']->fatal("first send");
		//sendFeedbackEmail($newapp['id'],$newapp['salesrep_id']);
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
		$GLOBALS['log']->fatal("Second Email ");
		//$GLOBALS['log']->fatal();
		//sendFeedbackEmail($newapp['id'],$app_1['salesrep_id']);
		if (sendFeedbackEmail($app_1['id'])){
			$app = BeanFactory::getBean('ATC_Appointments', $app_1['id']);
			$app->feedback_status_c = 'sent twice';
			$dt = new SugarDateTime();
			//$app->feedback_timestamp = $dt->asDb();
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


return true;
}
?>
