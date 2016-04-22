<?php

function open_https_url($url,$postfields)
{
    // if curl not exists then return error
    if (!extension_loaded('curl'))
    {
        // to return the error as a object
        $error = new stdClass;
        $error->message = "Curl not installed";
        return $error;
    }
    // Initialize the curl
    $ch = curl_init();

    // set the url into the curl handler
    curl_setopt($ch, CURLOPT_URL, $url);
    // set the return data to 1
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // set the ssl verification to false
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    // set the host varification to 0
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields); 
    
    // execute the curl handler and get the data
    $result = curl_exec($ch);
    // close the curl handler
    curl_close($ch);
    return $result;
}
