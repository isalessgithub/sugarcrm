<?php

  
class  calculateAppointmentData
{

    function calculateApptData($bean, $event, $arguments)
    {
        
       $sql="select 
         count(atc_appointments.id) as total_appointments,
       sum(atc_appointments.appointment_status = 'Attended') as total_attended,
       sum(atc_appointments.appointment_status = 'Accepted') as total_accepted,
       sum(atc_appointments.appointment_status = 'Confirmed') as total_confirmed,
       sum(atc_appointments.appointment_status = 'Attended_Policy') as total_attended_by_policy,
       sum(atc_appointments.appointment_status = 'Reschedule') as total_scheduled,
       (sum(atc_appointments.appointment_status = 'Attended')-sum(atc_appointments.appointment_status = 'Attended_Policy')-(sum(atc_appointments.appointment_status = 'Accepted')+sum(atc_appointments.appointment_status = 'Confirmed'))*0.75) as remaining_target
    
      from atc_appointments
      inner join atc_isscampaigns_atc_appointments_c on atc_isscampaigns_atc_appointmentsatc_appointments_idb=atc_appointments.id
      inner join atc_isscampaigns on atc_isscampaigns_atc_appointmentsatc_isscampaigns_ida=atc_isscampaigns.id

      where atc_isscampaigns_atc_appointmentsatc_isscampaigns_ida='".$bean->id."' and atc_appointments.deleted=0";      
      
      $result=$bean->db->query($sql);
      $row  = $bean->db->fetchByAssoc($result);

      $bean->appointment_accepted_c=$row['total_accepted'];
      $bean->appointment_attended_by_poli_c=$row['total_attended_by_policy'];
      $bean->appointment_confirmed_c=$row['total_confirmed'];
      $bean->appointment_attended_c=$row['total_attended'];
      $bean->appointments_reschedule_c=$row['total_scheduled'];

   
      $bean->remaining_target_c=$bean->appointment_target_campaign_c- $bean->appointment_attended_c - $bean->appointment_attended_by_poli_c -(0.75*($bean->appointment_accepted_c+$bean->appointment_confirmed_c+$bean->appointments_reschedule_c));
     
      if($bean->remaining_target_c>0){

        $bean->remaining_target_c=$bean->remaining_target_c;

      }else{

        $bean->remaining_target_c=0;
      }



    }

}


?>
