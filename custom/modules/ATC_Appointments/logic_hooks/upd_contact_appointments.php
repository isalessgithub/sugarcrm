<?php
// Author:          P. Massardo
// Description :    Increments or Decrements the appointment_count_c based on the event type
$GLOBALS['log']->fatal('ContactAppointment');

class ContactAppointment
    {
        function ContactAppointmentCount($bean, $event, $arguments)
        {


$GLOBALS['log']->fatal('ContactAppointment - event ' .$event );

            if($event == "after_relationship_delete") 
	    {
              if($arguments['related_module'] == "Contacts")
              {
                $contact = BeanFactory::getBean('Contacts',$arguments['related_id']);
		$contact->appointment_count_c=$contact->appointment_count_c-1;
$GLOBALS['log']->fatal('ContactAppointment count rel minus - ' .$contact->appointment_count_c);		
$GLOBALS['log']->fatal('ContactAppointment rel minus- ' .$contact->name .' app-' .$bean->name);
		$contact->save(FALSE);
              }

            }
            else if ($event == "after_relationship_add")
            {

              if($arguments['related_module'] == "Contacts")
              {
                $contact = BeanFactory::getBean('Contacts',$arguments['related_id']);
		$contact->appointment_count_c=$contact->appointment_count_c+1;
$GLOBALS['log']->fatal('ContactAppointment count rel add - ' .$contact->appointment_count_c);
		$GLOBALS['log']->fatal('ContactAppointment rel add - ' .$contact->name .' app-' .$bean->name);
		$contact->save(FALSE);
              } 
 	   }


            $GLOBALS['log']->fatal('ContactAppointment end');

	}	
}
?>

