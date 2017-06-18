<?php
	class MonthlyResults {

           function monthly_result($bean,$event,$arguments){
          
                // get the campaign 
                $campaign_get="select atc_isscampaigns_atc_appointmentsatc_isscampaigns_ida  as camp_id from atc_isscampaigns_atc_appointments_c where atc_isscampaigns_atc_appointmentsatc_appointments_idb='".$bean->id."'";

               $result=$bean->db->query($campaign_get);
               $row  = $bean->db->fetchByAssoc($result);

               if($row['camp_id']!=""){
                  
                   $campaign=BeanFactory::getBean("ATC_ISSCampaigns",$row['camp_id']);
                   
                   
                    
                   $monthly_result_sql="select ms_campaign_results_monthly.id as monthly_result_id,ms_campaign_results_monthly.name 
                      from ms_campaign_results_monthly 
                      inner join ms_campaign_results_monthly_atc_isscampaigns_c on ms_campaig2a2cmonthly_idb=ms_campaign_results_monthly.id 
                      inner join ms_campaign_results_monthly_cstm on ms_campaign_results_monthly_cstm.id_c=ms_campaign_results_monthly.id
                      where ms_campaign_results_monthly_atc_isscampaignsatc_isscampaigns_ida='".$campaign->id."' and campaign_month_c='".date('n', strtotime($bean->appointment_date))."'
                      and campaign_year_c='".date('Y', strtotime($bean->appointment_date))."' and ms_campaign_results_monthly.deleted=0";
                   
                   //$GLOBALS['log']->fatal($monthly_result_sql);
                   
                   $result = $bean->db->query($monthly_result_sql);

                   if ($result->num_rows == 0) {
                        
                       // no monthly record for that appt -> make one

                       $monthly_record = BeanFactory::newBean("MS_Campaign_Results_Monthly"); 
                       
                       $monthly_record->appointment_target_monthly=$campaign->appointment_target_monthly_c;
                      
                       $monthly_record->name="Monthly Record For ".date('n', strtotime($bean->appointment_date))."/".date('Y', strtotime($bean->appointment_date))."-".$campaign->name;

                       $monthly_record->campaign_year_c=date('Y', strtotime($bean->appointment_date));
                    
                       $monthly_record->campaign_month_c=date('n', strtotime($bean->appointment_date));
                        
                       $monthly_record->appointment_target_total=$campaign->appointment_target_campaign_c;

                       $monthly_record->save();

                       $monthly_record->load_relationship('ms_campaign_results_monthly_atc_isscampaigns');
 
                       $monthly_record->ms_campaign_results_monthly_atc_isscampaigns->add($campaign->id);
                     
                       $campaign->save();

                                                                   
                                                    
                   }else{

                         // monthly record found

                         $row = $bean->db->fetchByAssoc($result);
                        
                         //$GLOBALS['log']->fatal($row['name']);

                         $monthly_result=BeanFactory::getBean("MS_Campaign_Results_Monthly",$row['monthly_result_id']);

                         $monthly_result->save();
                         
                         $campaign->save();
       
                       

                   }

                 
                   

 
                                   
               }

              
           }
        }
?>
