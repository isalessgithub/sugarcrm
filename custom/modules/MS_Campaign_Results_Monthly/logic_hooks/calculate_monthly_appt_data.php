<?php

  
class  calculateMonthlyAppointmentData
{

    function MonthlyApptData($bean, $event, $arguments)
    {
       

      $campaign_get="select ms_campaign_results_monthly_atc_isscampaignsatc_isscampaigns_ida as camp_id from ms_campaign_results_monthly_atc_isscampaigns_c where ms_campaig2a2cmonthly_idb='".$bean->id."'";        $result=$bean->db->query($campaign_get);
       $row  = $bean->db->fetchByAssoc($result);
      


      
 
       $sql="select 
         count(atc_appointments.id) as total_appointments,
         sum(atc_appointments.appointment_status = 'Attended') as total_attended,
       sum(atc_appointments.appointment_status = 'Accepted') as total_accepted,
       sum(atc_appointments.appointment_status = 'Confirmed') as total_confirmed,
      sum(atc_appointments.appointment_status = 'Reschedule') as total_scheduled,
       sum(atc_appointments.appointment_status = 'Attended_Policy') as total_attended_by_policy,
       (sum(atc_appointments.appointment_status = 'Attended')-sum(atc_appointments.appointment_status = 'Attended_Policy')-(sum(atc_appointments.appointment_status = 'Accepted')+sum(atc_appointments.appointment_status = 'Confirmed'))*0.75) as remaining_target
    
      from atc_appointments
      inner join atc_isscampaigns_atc_appointments_c on atc_isscampaigns_atc_appointmentsatc_appointments_idb=atc_appointments.id
      inner join atc_isscampaigns on atc_isscampaigns_atc_appointmentsatc_isscampaigns_ida=atc_isscampaigns.id

      where YEAR(atc_appointments.appointment_date)='".$bean->campaign_year_c."' and  MONTH(atc_appointments.appointment_date)='".$bean->campaign_month_c."' and atc_isscampaigns_atc_appointmentsatc_isscampaigns_ida='".$row['camp_id']."'";      
     
     // $GLOBALS['log']->fatal($sql);
       
      $result=$bean->db->query($sql);
      $row  = $bean->db->fetchByAssoc($result);

      $bean->appointment_accepted=$row['total_accepted'];
      $bean->appointment_attended_by_policy=$row['total_attended_by_policy'];
      $bean->appointment_confirmed=$row['total_confirmed'];
      $bean->appointment_attended=$row['total_attended'];
      $bean->appointments_reschedule_c=$row['total_scheduled'];


    
     $bean->remaining_target=$bean->appointment_target_monthly-$bean->appointment_attended-$bean->appointment_attended_by_policy-(($bean->appointment_accepted+$bean->appointment_confirmed)*0.75)-($bean->appointments_reschedule_c*0.4);
      
      if($bean->remaining_target>0){

        $bean->remaining_target=$bean->remaining_target;
 
      }else{
        $bean->remaining_target=0;
      }



    }

}


?>
