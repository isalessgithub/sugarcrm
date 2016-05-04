<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not a Valid Entry Point');

$client_id = $_GET['client'];
$partner_id = $_GET['partner_client'];

$add_result = Array();
if ($client_id != ''){
        $client = BeanFactory::retrieveBean('ATC_Clients', $client_id);
        if(isset($partner->id)){
                //set client data
                $add_result['client_billing_address_street'] = $client->billing_address_street;
                $add_result['client_billing_address_city'] = $client->billing_address_city;
                $add_result['client_billing_address_state'] = $client->billing_address_state;
                $add_result['client_billing_address_postalcode'] = $client->billing_address_postalcode;
                $add_result['client_billing_address_country'] = $client->billing_address_country;
        }
        else{
                //set empty values
                
                $add_result['client_billing_address_street'] ='';
                $add_result['client_billing_address_city'] ='';
                $add_result['client_billing_address_state'] ='';
                $add_result['client_billing_address_postalcode'] = '';
                $add_result['client_billing_address_country'] = '';
        }
}
else{
        //set empty values
        $add_result['client_billing_address_street'] ='';
        $add_result['client_billing_address_city'] ='';
        $add_result['client_billing_address_state'] ='';
        $add_result['client_billing_address_postalcode'] = '';
        $add_result['client_billing_address_country'] = '';
}

if ($partner_id != ''){
        $partner = BeanFactory::retrieveBean('ATC_Clients', $partner_id);
        if(isset($partner->id)){
                //set partner data from bean
                $add_result['partner_billing_address_street'] = $partner->billing_address_street;
                $add_result['partner_billing_address_city'] = $partner->billing_address_city;
                $add_result['partner_billing_address_state'] = $partner->billing_address_state;
                $add_result['partner_billing_address_postalcode'] = $partner->billing_address_postalcode;
                $add_result['partner_billing_address_country'] = $partner->billing_address_country;
        }
        else{
                //set empty values
                $add_result['partner_billing_address_street'] ='';
                $add_result['partner_billing_address_city'] ='';
                $add_result['partner_billing_address_state'] ='';
                $add_result['partner_billing_address_postalcode'] = '';
                $add_result['partner_billing_address_country'] = '';
        }
}
else{
//set empty values
$add_result['partner_billing_address_street'] ='';
$add_result['partner_billing_address_city'] ='';
$add_result['partner_billing_address_state'] ='';
$add_result['partner_billing_address_postalcode'] = '';
$add_result['partner_billing_address_country'] = '';


}

echo json_encode($add_result);
?>
