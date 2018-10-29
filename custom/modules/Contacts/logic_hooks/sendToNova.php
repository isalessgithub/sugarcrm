<?php

class ms_nova{
	function ms_sendtonova($bean,$event,$arguments){
//$GLOBALS['log']->fatal($bean->modified_user_id);
	if($arguments['module'] == "Contacts" && $arguments['related_module'] == "ProspectLists"){
		global $current_user;
		$tl = BeanFactory::retrieveBean("ProspectLists",$arguments['related_id']);
		if(!empty($tl->id)){$camp = BeanFactory::retrieveBean("ATC_ISSCampaigns", $tl->atc_isscampaigns_prospectlists_1atc_isscampaigns_ida);}
//		$GLOBALS['log']->fatal($camp->id);			
		
		if(!empty($tl->id) && !empty($camp->id)){
			$user = BeanFactory::retrieveBean('Users',$camp->users_atc_isscampaigns_1users_ida);
			
			if(!empty($bean->id) && !empty($current_user->id)){
	//			$GLOBALS['log']->fatal("Sending Record to nova");

				$novatoken = '249thf3roufb38y4bfy3';
				$nova = Array();
				$nova['first_name'] = $bean->first_name;
				$nova['last_name'] = $bean->last_name;
				$nova['company'] = $bean->account_name;
                                $nova['sequence_id'] = '30145';
				$nova['role'] = $bean->title;
				$nova['email'] = $bean->emailAddress->getPrimaryAddress($bean);
				
					
	//			$nova['user_email'] = $user->emailAddress->getPrimaryAddress($user);
				//$GLOBALS['log']->fatal($nova['user_email']);

				

				$nova['user_email'] = "jamie.knaggs@sophos.com";
				$nova['user_email'] = $camp->from_address_c;
				
				$nova['contact_tag'] = $current_user->first_name . " " . $current_user->last_name;

				$nova['zapier'] = true;			
				$enova = json_encode($nova);

				$url  = "https://app.nova.ai/api/v1/person";

//				$ch = curl_init();
			
	//			$GLOBALS['log']->fatal($enova);
				/*
				curl_setopt($ch, CURLOPT_URL,$url);		
				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $enova);
				//curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json','Authorization: {$novatoken}'));
				curl_setopt($ch,CURLOPT_HTTPHEADER, Array('Authorization: 249thf3roufb38y4bfy3'));
*/
/*
                                $ch = curl_init();
		                curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
		                curl_setopt($ch, CURLOPT_URL, $url );
				curl_setopt($ch, CURLOPT_POST, true);
		                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
				curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		                curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization: 249thf3roufb38y4bfy3","Content-Type: application/json"));
		                curl_setopt($ch, CURLOPT_POSTFIELDS, $enova);
				curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

				$result = curl_exec($sh);
			
				if(curl_errno($ch)){
					$GLOBALS['log']->fatal("SOME REST ERROR!");
					$GLOBALS['log']->fatal(curl_error($ch));

				}

				curl_close($ch);

				$GLOBALS['log']->fatal($result);
				
				$res = json_decode($result);

				$GLOBALS['log']->fatal($res);
*/


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://app.nova.ai/api/v1/person",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $enova,
  CURLOPT_HTTPHEADER => array(
    "Authorization: 249thf3roufb38y4bfy3",
    "Cache-Control: no-cache",
    "Content-Type: application/json",
    "Postman-Token: 884514cc-7916-4749-be04-dee6ed7422b7"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  $GLOBALS['log']->fatal("Nova API Error");
  $GLOBALS['log']->fatal($enova);
  $GLOBALS['log']->fatal($err);
} else {
  $GLOBALS['log']->fatal("Sent to Nova: ".$enova);
}


			}
		}
	}
	}
}





?>
