// Author: P. Massardo
// scheduler code for update

<?php
	array_push($job_strings, 'upd_contact_appointment_count');

    	function upd_contact_appointment_count()
   	{	

$GLOBALS['log']->fatal(' test scheduler function start');
         	global $db;

         	$sql = "select count(id) as apptTotal, atc_appointments_contactscontacts_ida as contactID from atc_appointments_contacts_c where deleted = 0 group by atc_appointments_contactscontacts_ida";

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
