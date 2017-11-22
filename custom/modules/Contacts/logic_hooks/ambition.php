<?php
    class ambition{

       function push($bean, $event, $arguments){

          $record=array();

          if($arguments['isUpdate']==1){  
             
              if($arguments['dataChanges']['date_modified']['before'] != $arguments['dataChanges']['date_modified']['after']){

                  $user=BeanFactory::retrieveBean("Users",$bean->modified_user_id);
                  $created_by=BeanFactory::retrieveBean("Users",$bean->created_by);
                  $record['id']=$bean->id;
                  $record['email']=$user->emailAddress->getPrimaryAddress($user);
                  $record['date_created']=$bean->fetched_row['date_entered'];
                  $record['address_last_modified']=$bean->date_modified;
                  $record['email_last_modified']=$bean->date_modified;
                  $record['direct_phone_last_modified']=$bean->date_modified;
                  $record['direct_phone']=$bean->phone_other;
                  $record['mobile']=$bean->phone_mobile;
                  $record['appointment_count']=$bean->appointment_count_c;
                  $record['created_by']=$created_by->emailAddress->getPrimaryAddress($created_by);
                  $record['title']=$bean->title; 
                  
              }

              /*
              if($arguments['dataChanges']['email']['before'] != $arguments['dataChanges']['email']['after']
                 || $arguments['dataChanges']['phone_other']['before'] != $arguments['dataChanges']['phone_other']['after'] 
                 || $arguments['dataChanges']['primary_address_street']['before'] != $arguments['dataChanges']['primary_address_street']['after']
                 || $arguments['dataChanges']['primary_address_city']['before'] != $arguments['dataChanges']['primary_address_city']['after']
                 || $arguments['dataChanges']['primary_address_state']['before'] != $arguments['dataChanges']['primary_address_state']['after']
                 || $arguments['dataChanges']['primary_address_postalcode']['before'] != $arguments['dataChanges']['primary_address_postalcode']['after']

              ){
                
            
                   $record['id']=$bean->id;

                   $user=BeanFactory::retrieveBean("Users",$bean->modified_user_id);

                   $record['email']=$user->emailAddress->getPrimaryAddress($user);
                   $record['date_created']=$bean->date_modified; 


                   $sql="select date_created from contacts_audit where parent_id='{$bean->id}' and field_name='email' order by date_created limit 1";
                   $result=$bean->db->query($sql);
                   $row=$bean->db->fetchByAssoc($result);
                   $record['email_last_modified']=$row['date_created'];
                 

                
                   $sql="select date_created from contacts_audit where parent_id='{$bean->id}' and field_name='phone_other' order by date_created limit 1";
                   $result=$bean->db->query($sql);
                   $row=$bean->db->fetchByAssoc($result);
                   $record['direct_phone_last_modified']=$row['date_created'];
                
                 
                 $address_audit=array();

              
                    $sql="select date_created from contacts_audit where parent_id='{$bean->id}' and field_name='primary_address_city' order by date_created limit 1";
                    $result=$bean->db->query($sql);
                    $row=$bean->db->fetchByAssoc($result);
                    $address_audit['city']=$row['date_created'];
                 
             
                    $sql="select date_created from contacts_audit where parent_id='{$bean->id}' and field_name='primary_address_state' order by date_created limit 1";
                    $result=$bean->db->query($sql);
                    $row=$bean->db->fetchByAssoc($result);
                    $address_audit['state']=$row['date_created'];
                
            
                    $sql="select date_created from contacts_audit where parent_id='{$bean->id}' and field_name='primary_address_street' order by date_created limit 1";
                    $result=$bean->db->query($sql);
                    $row=$bean->db->fetchByAssoc($result);
                    $address_audit['street']=$row['date_created'];
                 

             
                    $sql="select date_created from contacts_audit where parent_id='{$bean->id}' and field_name='primary_address_postalcode' order by date_created limit 1";
                    $result=$bean->db->query($sql);
                    $row=$bean->db->fetchByAssoc($result);
                    $address_audit['postalcode']=$row['date_created'];
                

                     usort($address_audit, function($a1, $a2) {
                        $v1 = strtotime($a1['date']);
                        $v2 = strtotime($a2['date']);
                        return $v1 - $v2; // $v2 - $v1 to reverse direction
                     }); 
               
                     $record['address_last_modified']=$address_audit[0];
                   
              }*/
            
          }  
          else{ 

               $user=BeanFactory::retrieveBean("Users",$bean->modified_user_id);
               $created_by=BeanFactory::retrieveBean("Users",$bean->created_by);
               $record['id']=$bean->id;
               $record['email']=$user->emailAddress->getPrimaryAddress($user);
               $record['date_created']=$bean->date_modified;
               $record['address_last_modified']=$bean->date_modified;
               $record['email_last_modified']=$bean->date_modified;
               $record['direct_phone_last_modified']=$bean->date_modified;
               $record['direct_phone']=$bean->phone_other;
               $record['mobile']=$bean->phone_mobile;
               $record['appointment_count']=$bean->appointment_count_c;
               $record['created_by']=$created_by->emailAddress->getPrimaryAddress($created_by);
               $record['title']=$bean->title;



          }  

           if(!empty($record)){

                 //Create Records - POST /<module>
                 $url = "https://isaless.ambition.com:443/api/v1/data/api_798399f1_b9b1_4cd3_a5aa_5227e2584051_depot/";
                 //Set up the Record details
                $curl_request = curl_init($url);
                curl_setopt($curl_request, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
                curl_setopt($curl_request, CURLOPT_HEADER, false);
                curl_setopt($curl_request, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($curl_request, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($curl_request, CURLOPT_FOLLOWLOCATION, 0);
                curl_setopt($curl_request, CURLOPT_HTTPHEADER, array(
                     "Content-Type: application/json",
                     "Authorization:Token 7024e8c9cbd29602f8a1711f66f3caf068a0f8a8"
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
