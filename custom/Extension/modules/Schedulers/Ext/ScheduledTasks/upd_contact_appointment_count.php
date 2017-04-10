<?php
// Author: P. Massardo // scheduler code for update

	array_push($job_strings, 'upd_contact_appointment_count');

    	function upd_contact_appointment_count()
   	{

		$GLOBALS['log']->fatal(' test scheduler function start');
         	global $db;

         	$sql = "SELECT atc_appointments_contactscontacts_ida as contactID, count(id) as apptTotal from atc_appointments_contacts_c where deleted = 0 group by atc_appointments_contactscontacts_ida";
		//MODIFIED TO ONLY PULL IN CONTACTS THAT HAVE NOT YET BEEN PROCESSED -- IF THERE IS A VALID VALUE ALREADY IN THERE, WE SHOULDN'T NEED TO UPDATE IT.  LOGIC HOOK SHOULD DO THAT -- KEN
		//$sql = "SELECT atc_appointments_contactscontacts_ida as contactID, count(id) as apptTotal 
		//	FROM atc_appointments_contacts_c 
		//	INNER JOIN contacts_cstm on contacts_cstm.id_c = atc_appointments_contactscontacts_ida AND atc_appointment_contacts_c.deleted = 0
		//	WHERE appointment_count_c = 0 OR appointment_count_c = '' 
		//	GROUP BY atc_appointments_contactscontacts_ida order by apptTotal desc LIMIT 500;";

		$GLOBALS['log']->fatal($sql);
         	$result = $db->query($sql);

         	while($row = $db->fetchByAssoc($result))
         	{
             		$contact = BeanFactory::getBean('Contacts', $row['contactID']);
      			$contact->appointment_count_c = $row['apptTotal'];
      			$contact->save(FALSE);
         	}
		$GLOBALS['log']->fatal(' test scheduler function end');
        	return true;
    	}

?>
