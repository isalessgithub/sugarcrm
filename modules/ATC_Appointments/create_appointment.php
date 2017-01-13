<?php
/**
 * @author: Miloš Mirić aka eitrix
 */

$ret = array('message' => '', 'row_id' => '');
// check if all required fields are there
if(!isset($_REQUEST['parent_id']) || empty($_REQUEST['parent_id'])){
  $ret['error'] = 'Missing parent_id when creating Appointment';
  die(json_encode($ret));
}
if(!isset($_REQUEST['target_list_id']) || empty($_REQUEST['target_list_id'])){
  $ret['error'] = 'Missing target_list_id when creating Appointment';
  die(json_encode($ret));
}
if(!isset($_REQUEST['contact_email']) || empty($_REQUEST['contact_email'])){
  $ret['error'] = 'Missing Email Address when creating Appointment';
  die(json_encode($ret));
}
if(!isset($_REQUEST['atc_clientsalesreps_atc_appointmentsatc_clientsalesreps_ida']) || empty($_REQUEST['atc_clientsalesreps_atc_appointmentsatc_clientsalesreps_ida'])){
  $ret['error'] = 'Missing client sales rep when creating Appointment';
  die(json_encode($ret));
}
// Load Contact, Target List and Appointment if we have ID
// parent_id - contact id
// target_list_id - target list id
// appointment_id - if populated then update
$contact = BeanFactory::getBean("Contacts",$_REQUEST['parent_id']);
$target_list = BeanFactory::getbean("ProspectLists",$_REQUEST['target_list_id']);
$appointment = BeanFactory::getBean("ATC_Appointments",$_REQUEST['appointment_id']);

if(empty($appointment->id)){
  // it's new record, we need to assign campaign
  $campaign = BeanFactory::getBean("ATC_ISSCampaigns",$target_list->atc_isscampaigns_prospectlists_1atc_isscampaigns_ida);
  $appointment->atc_isscampaigns_atc_appointments_name = $campaign->name;
  $appointment->atc_isscampaigns_atc_appointmentsatc_isscampaigns_ida = $campaign->id;
}

// populate rest of appointment fields
global $current_user;
$appointment->name = '';//$_REQUEST['appointment_name'];
$appointment->appointment_status = $_REQUEST['appointment_status'];
$appointment->appointment_place = $_REQUEST['appointment_place'];
$appointment->appointment_date = $_REQUEST['appointment_date'];
$appointment->appointment_duration_hours = $_REQUEST['appointment_duration_hours'];
$appointment->appointment_duration_minutes = $_REQUEST['appointment_duration_minutes'];
$appointment->contact_email = $_REQUEST['contact_email'];
$appointment->atc_appointments_contacts_name = $contact->name;
$appointment->atc_appointments_contactscontacts_ida = $contact->id;
$appointment->atc_clientsalesreps_atc_appointments_name = $_REQUEST['atc_clientsalesreps_atc_appointments_name'];
$appointment->atc_clientsalesreps_atc_appointmentsatc_clientsalesreps_ida = $_REQUEST['atc_clientsalesreps_atc_appointmentsatc_clientsalesreps_ida'];
$appointment->prospectlists_atc_appointments_1prospectlists_ida = $_REQUEST['target_list_id'];
$appointment->assigned_user_id = $current_user->id;
$appointment->description = $_REQUEST['appointment_note'];
if(isset($_REQUEST['reminder_checked']) && $_REQUEST['reminder_checked'] == 'true'){
	$appointment->reminder_time = $_REQUEST['reminder_time'];
}
$appointment->accounts_atc_appointments_1accounts_ida = null;
$appointment->save();

$ret = array('message' => "Appointment Saved", 'row_id' => $_REQUEST['parent_id']);
echo json_encode($ret);
