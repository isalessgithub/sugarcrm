<?php

//Create Records - POST /<module>
$url = "https://isaless.ambition.com:443/api/v1/data/api_798399f1_b9b1_4cd3_a5aa_5227e2584051_depot/";
//Set up the Record details

$record = array(
    "email"=> "hasan@yourcompany.com",
    "date"=> "2016-8-16 8:31:11",
    "id"=> "10002acda13"
);

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
var_dump($createdRecord);
curl_close($curl_request);

?>
