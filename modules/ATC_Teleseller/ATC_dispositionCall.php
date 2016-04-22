<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
                    
$items=array();
global $current_user;
$err_str='';
$msg='';
$error= false;

//Make sure the ID is set
if (isset($_REQUEST['ID']) && $_REQUEST['ID'] !='')
$callID = $_REQUEST['ID'];
else {
    $error = true;
    $err_str .= "ID is not Set.  ";
}

//Make sure the status is set
if (isset($_REQUEST['status']) && $_REQUEST['status'] !='')
$newStatus = $_REQUEST['status'];
else {
    $error = true;
    $err_str .= "Status name is not Set.  ";
}

//Get the Contacts
require_once("modules/Calls/Call.php");
$c = new Call();
$c->retrieve($callID);
$c->status = $newStatus;
$c->save();
?>
