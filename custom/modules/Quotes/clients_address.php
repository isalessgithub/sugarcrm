<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not a Valid Entry Point');
//require_once ('include/entryPoint.php');



//$client_id = $_REQUEST['client'];
if(!empty($_REQUEST['client'])){
	$client = BeanFactory::getBean('ATC_Clients', $_REQUEST['client']);
}
if(!empty($_REQUEST['partner'])){
	$partner = BeanFactory::getBean('ATC_Clients', $_REQUEST['partner']);
}

$add_result = Array();
if (isset($client->id)){
         //set client data
	 $add_result['client_id'] = $client->id;
	 $add_result['client_name'] = $client->name;
         $add_result['client_billing_address_street'] = $client->billing_address_street;
         $add_result['client_billing_address_city'] = $client->billing_address_city;
         $add_result['client_billing_address_state'] = $client->billing_address_state;
         $add_result['client_billing_address_postalcode'] = $client->billing_address_postalcode;
         $add_result['client_billing_address_country'] = $client->billing_address_country;
}
else{
        //set empty values
	$add_result['client_id'] = $client->id;
	$add_result['client_name'] = $client->name;
        $add_result['client_billing_address_street'] ='';
        $add_result['client_billing_address_city'] ='';
        $add_result['client_billing_address_state'] ='';
        $add_result['client_billing_address_postalcode'] = '';
        $add_result['client_billing_address_country'] = '';
}


if(isset($partner->id)){
        //set partner data from bean
	$add_result['partner_id'] = $client->id;
	$add_result['partner_name'] = $partner->name;
        $add_result['partner_billing_address_street'] = $partner->billing_address_street;
        $add_result['partner_billing_address_city'] = $partner->billing_address_city;
        $add_result['partner_billing_address_state'] = $partner->billing_address_state;
	$add_result['partner_billing_address_postalcode'] = $partner->billing_address_postalcode;
	$add_result['partner_billing_address_country'] = $partner->billing_address_country;
}
else{
        //set empty values
	$add_result['partner_id'] = '';
	$add_result['partner_name'] = '';
        $add_result['partner_billing_address_street'] ='';
        $add_result['partner_billing_address_city'] ='';
        $add_result['partner_billing_address_state'] ='';
        $add_result['partner_billing_address_postalcode'] = '';
        $add_result['partner_billing_address_country'] = '';
}

echo json_encode($add_result);

//echo "hey";

?>
