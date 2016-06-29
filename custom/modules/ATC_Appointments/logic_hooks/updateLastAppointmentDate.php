<?php 
  /*
   @author Hasan Ghazzawi
   @date 31/5/2016
  */

  class updateLastAppointmentDate{

    function updateAppointmentDate($bean, $event, $arguments){
            
           $link='atc_isscampaigns_atc_appointments';

           //If relationship is loaded
           if ($bean->load_relationship($link))
           {
               //Fetch related beans 
              $relatedBeans = $bean->$link->getBeans();
    
              $campaign = false;

              if (!empty($relatedBeans))
               {
                 //order the results
                 reset($relatedBeans);        

                 //first record in the list is the parent
                 $campaign = current($relatedBeans);
               }
           }
          // store the campaign and appointment dates
          $appointment_date=date('Y-m-d', strtotime($bean->fetched_row['date_entered']));
          $campaign_date=$campaign->last_appointment_date_c;

          // check for an empty field
          if ($campaign_date==""){
            $campaign->last_appointment_date_c=$appointment_date;
            $campaign->save(false);
          // compare the two dates
          }else if(  strtotime($bean->fetched_row['date_entered'])  > strtotime( $campaign->last_appointment_date_c) ){;
            $campaign->last_appointment_date_c=$appointment_date;
            $campaign->save(false);
          }
          
        }
      
    }
    
  
  
?>
