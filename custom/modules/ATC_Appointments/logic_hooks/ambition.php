<?php

    class ambition
    {
        function push($bean, $event, $arguments)
        {
             
             $record=array();
             if($arguments['isUpdate']==1){
                 
                if($arguments['dataChanges']['appointment_place']['before'] != $arguments['dataChanges']['appointment_place']['after'] 
                || $arguments['dataChanges']['appointment_status']['before'] != $arguments['dataChanges']['appointment_status']['after']
                || $arguments['dataChanges']['appointment_date']['before'] != $arguments['dataChanges']['appointment_date']['after']
                ){

                   $record['id']=$bean->id;
                   $record['appointment_place']=$bean->appointment_place;
                   $record['appointment_status']=$bean->appointment_status;
                   $record['appointment_date']=$bean->appointment_date;
                   $record['date_created']=$bean->date_modified;
                }
 
             }else{

                  $record['id']=$bean->id;
                  $record['appointment_place']=$bean->appointment_place;
                  $record['appointment_status']=$bean->appointment_status;
                  $record['appointment_date']=$bean->appointment_date;
                  $record['date_created']=$bean->date_modified;

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
