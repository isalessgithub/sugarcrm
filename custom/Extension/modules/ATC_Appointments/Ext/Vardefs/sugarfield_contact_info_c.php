<?php
 // created: 2013-10-30 20:54:13
$dictionary['ATC_Appointments']['fields']['contact_info_c']['duplicate_merge_dom_value']=0;
$dictionary['ATC_Appointments']['fields']['contact_info_c']['calculated']='1';
$dictionary['ATC_Appointments']['fields']['contact_info_c']['formula']='concat(related($atc_appointments_contacts,"primary_address_street")," ",related($atc_appointments_contacts,"primary_address_street_2")," ",related($atc_appointments_contacts,"primary_address_city")," ",related($atc_appointments_contacts,"primary_address_state")," ",related($atc_appointments_contacts,"primary_address_postalcode"))';
$dictionary['ATC_Appointments']['fields']['contact_info_c']['enforced']='1';
$dictionary['ATC_Appointments']['fields']['contact_info_c']['dependency']='';

 ?>