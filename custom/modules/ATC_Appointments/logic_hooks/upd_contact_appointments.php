<?php
// Author:          P. Massardo
// Description :    Increments or Decrements the appointment_count_c based on the event type
//$GLOBALS['log']->fatal('ContactAppointment');

class ContactAppointment
    {
        function ContactAppointmentCount($bean, $event, $arguments)
        {
              if($arguments['related_module'] == "Contacts")
              {
                $contact = BeanFactory::getBean('Contacts',$arguments['related_id']);
		$contact->load_relationship('atc_appointments_contacts');
		$apps = $contact->atc_appointments_contacts->getBeans();
		$contact->appointment_count_c = count($apps);
		$contact->save(FALSE);
              }
              if($arguments['related_module'] == "ATC_ISSCampaigns")
              {
                $camp = BeanFactory::getBean('ATC_ISSCampaigns',$arguments['related_id']);
		/*
		$camp->load_relationship('atc_isscampaigns_atc_appointments');
		$apps = $camp->atc_isscampaigns_atc_appointments->getBeans();
		$camp->appointments_set_c = count($apps);
		$camp->save(FALSE);
		*/
		$GLOBALS['log']->fatal($camp->id);
		global $db;
		$sql = "SELECT count(id) as apptcount from atc_isscampaigns_atc_appointments_c where atc_isscampaigns_atc_appointmentsatc_isscampaigns_ida = '".$arguments['related_id']."' AND deleted = 0;";
		$result = $db->query($sql);
		while($row  = $db->fetchByAssoc($result)){
			$camp->appointments_set_c = $row['apptcount'];
			$camp->save(false);
		}
              }

	}
}
?>

