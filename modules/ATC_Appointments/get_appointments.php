<?php
/**
 * @author: Miloš Mirić aka eitrix
 */

// verify we got all data we need
$output = array('error' => false,'error_message' => '', 'result' => array());
if (!isset($_REQUEST['contact_id']) && !isset($_REQUEST['target_list_id'])) {
  $output['error'] = true;
  $output['error_message'] = "Parameters were missing";
  die(json_encode($output));
}

$contact = BeanFactory::getBean("Contacts",$_REQUEST['contact_id']);
$target_list = BeanFactory::getBean("ProspectLists",$_REQUEST['target_list_id']);

// find all appointments from this contact that belong to campaign that is related to target list
if(empty($target_list->atc_isscampaigns_prospectlists_1atc_isscampaigns_ida)){
  $output['error'] = true;
  $output['error_message'] = "Campaign not associated with Target List";
  die(json_encode($output));
}
$campaign = BeanFactory::getBean("ATC_ISSCampaigns",$target_list->atc_isscampaigns_prospectlists_1atc_isscampaigns_ida);
$campaign->load_relationships();
$get_beans_params = array(
  'where' => "atc_isscampaigns_atc_appointments_c.atc_appointments_contactscontacts_ida = '$contact->id'"
);

$query_appointments_ids = "SELECT atc_appointments.id from atc_appointments
INNER JOIN atc_appointments_contacts_c ON atc_appointments_contacts_c.atc_appointments_contactsatc_appointments_idb = atc_appointments.id
INNER JOIN atc_isscampaigns_atc_appointments_c ON atc_isscampaigns_atc_appointments_c.atc_isscampaigns_atc_appointmentsatc_appointments_idb = atc_appointments.id
WHERE atc_appointments_contacts_c.atc_appointments_contactscontacts_ida = '$contact->id'
AND atc_isscampaigns_atc_appointments_c.atc_isscampaigns_atc_appointmentsatc_isscampaigns_ida = '$campaign->id' AND
atc_appointments.deleted = 0 ORDER BY atc_appointments.appointment_number DESC";

$db = DBManagerFactory::getInstance();
$result = $db->query($query_appointments_ids);
while($row = $db->fetchByAssoc($result)){
  $appointment = BeanFactory::getBean("ATC_Appointments",$row['id']);
  $timedate = new TimeDate();
// h,m,s,a
  $time_array = $timedate->splitTime($appointment->appointment_date,$timedate->get_date_time_format());
    // value 0 form array is date and 1 time string
$date_time = $timedate->split_date_time($appointment->appointment_date);
  $output['result'][] = array(
    'name' => $appointment->name,
    'appointment_date' => $appointment->appointment_date,
    'appointment_date_original' => $appointment->appointment_date_original,
    'appointment_number' => $appointment->appointment_number,
    'client_sales_rep' => $appointment->atc_clientsalesreps_atc_appointments_name,
    'client_sales_rep_id' => $appointment->atc_clientsalesreps_atc_appointmentsatc_clientsalesreps_ida,
    'date_string' => $date_time[0],
    'h' => $time_array['h'],
    'm' => $time_array['m'],
    's' => $time_array['s'],
    'a' => $time_array['a'],
    'description' => $appointment->description,
    'appointment_status' => $appointment->appointment_status,
    'appointment_place' => $appointment->appointment_place,
    'appointment_id' => $appointment->id,
    'appointment_duration_hours' => $appointment->appointment_duration_hours,
    'appointment_duration_minutes' => $appointment->appointment_duration_minutes,
  );
}

echo json_encode($output);