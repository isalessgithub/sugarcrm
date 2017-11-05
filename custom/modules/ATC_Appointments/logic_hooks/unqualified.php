<?php
class unqualified{
	function unqualifiedUpdate($bean,$event,$arguments){
		//see if conditions are met.
		$GLOBALS['log']->fatal("This is working:".$bean->dm_qualified_c);
		if(($bean->appointment_status == 'Attended' || $bean->appointment_status == 'DC_Appt_Attended') && $bean->dm_qualified_c == 'No'){
			$bean->appointment_status = 'Cancelled';
			if($bean->atc_isscampaigns_atc_appointmentsatc_isscampaigns_ida != "" && isset($bean->atc_isscampaigns_atc_appointmentsatc_isscampaigns_ida)){
				$campaign = BeanFactory::retrieveBean('ATC_ISSCampaigns',$bean->atc_isscampaigns_atc_appointmentsatc_isscampaigns_ida);
				if(isset($campaign->users_atc_isscampaigns_1users_ida)){
					$radmin = BeanFactory::getBean('Users',$campaign->users_atc_isscampaigns_1users_ida);
					if(isset($radmin->email1)){
						$mailSubject = "Appointment feedback : no decision maker present";
						$mailHTML = "<h1>Appointment {$bean->name} marked no decision maker present</h1>
							     <p>Follow this link to view the appointment</p>
							     <p><a href='https://crm.isaless.com/#bwc/index.php?module=ATC_Appointments&action=DetailView&record={$bean->id}'>{$bean->name}</a></p>";
						$mailTo = array(
							0 => array('name' => $radmin->first_name." ".$radmin->last_name,'email' => $radmin->email1,),
							);
						try{
							$mailer = MailerFactory::getSystemDefaultMailer();
							$mailTransmissionProtocol = $mailer->getMailTransmissionProtocol();
							$mailer->setSubject($mailSubject);
							$body = trim($mailHTML);
							$textOnly = EmailFormatter::isTextOnly($body);
							if ($textOnly) {
								$mailer->setTextBody($body);
							} else {
								$textBody = strip_tags(br2nl($body)); // need to create the plain-text part
								$mailer->setTextBody($textBody);
								$mailer->setHtmlBody($body);
							}
							$mailer->clearRecipients();
							foreach ($mailTo as $mailTo) {
								$mailer->addRecipientsTo(new \EmailIdentity($mailTo['email'], $mailTo['name']));
							}
							$result = $mailer->send();
							if ($result) {
								// $result will be the body of the sent email
							} else {
								// an exception will have been thrown
							}
						} catch (MailerException $me) {
							$message = $me->getMessage();
							switch ($me->getCode()) {
								case \MailerException::FailedToConnectToRemoteServer:
									$GLOBALS["log"]->fatal("BeanUpdatesMailer :: error sending email, system smtp server is not set");
								break;
								default:
									$GLOBALS["log"]->fatal("BeanUpdatesMailer :: error sending e-mail (method: {$mailTransmissionProtocol}), (error: {$message})");
								break;
							}
						}
					}
				}
			}
		}
	}
}
