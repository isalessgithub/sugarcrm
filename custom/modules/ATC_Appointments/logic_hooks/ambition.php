<?php

    class app_ambition
    {
        function app_push($bean, $event, $arguments)
        {



          //$GLOBALS['log']->fatal($bean->id."--".$bean->date_entered);
             $record=array();
             if($arguments['isUpdate']==1){

                if($arguments['dataChanges']['appointment_place']['before'] != $arguments['dataChanges']['appointment_place']['after']
                || $arguments['dataChanges']['appointment_status']['before'] != $arguments['dataChanges']['appointment_status']['after']
                || $arguments['dataChanges']['appointment_date']['before'] != $arguments['dataChanges']['appointment_date']['after']
                || (($arguments['dataChanges']['feedback_status_c']['before'] != $arguments['dataChanges']['feedback_status_c']['after']) && ($bean->feedback_status_c=="received"))
                ){
                   $user=BeanFactory::retrieveBean("Users",$bean->assigned_user_id);
                   $record['email']=$user->emailAddress->getPrimaryAddress($user);
                   $record['appointment_number']=$bean->appointment_number;
                   $record['id']=$bean->id;
                   $record['appointment_place']=$bean->appointment_place;
                   $record['appointment_status']=$bean->appointment_status;
                   $record['appointment_date']=date("Y-m-d H:i:s", strtotime('-4 hours', strtotime($bean->appointment_date)));
                   $record['date_created']=date("Y-m-d H:i:s", strtotime('-4 hours', strtotime($bean->fetched_row['date_entered'])));
                   $record['title']=$bean->title_c;
                   $record['client']=$bean->atc_appointments_contacts_name;
                   $record['campaign']=$bean->atc_isscampaigns_atc_appointments_name;
                   $created_by=BeanFactory::retrieveBean("Users",$bean->created_by);
                   $record['created_by']=$created_by->emailAddress->getPrimaryAddress($created_by);
                   $record['feedback_date']=$bean->feedback_timestamp;
                   $record['positive_appointment']=$bean->positive_appointment_c;
                   $record['timeline']=$bean->appointment_result_c;
                   $record['second_appt']=$bean->second_appointment_c;
                   $record['opp_value']=$bean->opportunity_amount;

                   if($bean->do_not_show_c=="1"){
                     $record['do_not_show']=true;
                   }else{
                      $record['do_not_show']=false;
                   }

                }
             }else{

                  $user=BeanFactory::retrieveBean("Users",$bean->assigned_user_id);
                  $record['email']=$user->emailAddress->getPrimaryAddress($user);
                  $record['appointment_number']=$bean->appointment_number;
                  $record['id']=$bean->id;
                  $record['appointment_place']=$bean->appointment_place;
                  $record['appointment_status']=$bean->appointment_status;
                  $record['appointment_date']=date("Y-m-d H:i:s", strtotime('-4 hours', strtotime($bean->appointment_date)));
                  $record['date_created']=date("Y-m-d H:i:s", strtotime('-4 hours', strtotime($bean->date_modified)));
                  $record['title']=$bean->title_c;
                  $record['client']=$bean->atc_appointments_contacts_name;
                  $record['campaign']=$bean->atc_isscampaigns_atc_appointments_name;
                  $created_by=BeanFactory::retrieveBean("Users",$bean->created_by);
                  $record['created_by']=$created_by->emailAddress->getPrimaryAddress($created_by);
                  $record['feedback_date']=$bean->feedback_timestamp;
                  $record['positive_appointment']=$bean->positive_appointment_c;
                  $record['timeline']=$bean->appointment_result_c;
                  $record['second_appt']=$bean->second_appointment_c;
                  $record['opp_value']=$bean->opportunity_amount;

                  if($bean->do_not_show_c=="1"){
                     $record['do_not_show']=true;
                   }else{
                      $record['do_not_show']=false;
                   }



             }

             if(!empty($record)){

                 //Create Records - POST /<module>
                 $url = "https://isaless.ambition.com:443/api/v1/data/api_f19e9fcf_e9fb_440c_9acd_c274c8ebb034_depot/";
                 //Set up the Record details
                $curl_request = curl_init($url);
                curl_setopt($curl_request, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
                curl_setopt($curl_request, CURLOPT_HEADER, false);
                curl_setopt($curl_request, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($curl_request, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($curl_request, CURLOPT_FOLLOWLOCATION, 0);
                curl_setopt($curl_request, CURLOPT_HTTPHEADER, array(
                     "Content-Type: application/json",
                     "Authorization:Token 81a54c69c2e586022b84125295457e1aa875f5af"
                ));

               //convert arguments to json
               $json_arguments = json_encode($record);
               curl_setopt($curl_request, CURLOPT_POSTFIELDS, $json_arguments);

               //execute request
               $curl_response = curl_exec($curl_request);
               //decode json
               $createdRecord = json_decode($curl_response);

               //display the created record
               curl_close($curl_request);


          }
        }
    }
?>
