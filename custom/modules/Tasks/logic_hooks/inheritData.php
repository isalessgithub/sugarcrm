<?php

    class inheritData
    {
        function inherit($bean, $event, $arguments)
        {
            if(!empty($bean->atc_appointments_tasks_1atc_appointments_ida)){

                $appointment=BeanFactory::retrieveBean("ATC_Appointments",$bean->atc_appointments_tasks_1atc_appointments_ida);
                $bean->contact_id=$appointment->atc_appointments_contactscontacts_ida;
                $bean->parent_type="Accounts"; 
                $bean->parent_id=$appointment->accounts_atc_appointments_1accounts_ida;
                $contact=BeanFactory::retrieveBean("Contacts",$appointment->atc_appointments_contactscontacts_ida);
                if($contact->load_relationship("prospect_lists")){
                    $targetLists = $contact->prospect_lists->getBeans();
                    foreach($targetLists as $tl){
                       if($bean->load_relationship("tasks_prospectlists_1")){
                          $bean->tasks_prospectlists_1->add($tl->id);
                       }
                    }
                }
                if($contact->load_relationship("atc_appointments_contacts")){
                    $apps = $contact->atc_appointments_contacts->getBeans();
                    foreach($apps as $ap){
                       if($bean->load_relationship("atc_appointments_tasks_2")){
                          $bean->atc_appointments_tasks_2->add($ap->id);
                       }
                    }
                }
 

            }
        }
    }
?>
