<?php
 // created: 2016-10-07 12:36:24
$dictionary['ATC_Appointments']['fields']['contact_info_c']['duplicate_merge_dom_value'] = 0;
$dictionary['ATC_Appointments']['fields']['contact_info_c']['calculated'] = '1';
$dictionary['ATC_Appointments']['fields']['contact_info_c']['formula'] = 'concat(related($atc_appointments_contacts,"primary_address_street")," ",related($atc_appointments_contacts,"primary_address_street_2")," ",related($atc_appointments_contacts,"primary_address_city")," ",related($atc_appointments_contacts,"primary_address_state")," ",related($atc_appointments_contacts,"primary_address_postalcode"))';
$dictionary['ATC_Appointments']['fields']['contact_info_c']['enforced'] = '1';
$dictionary['ATC_Appointments']['fields']['contact_info_c']['dependency'] = '';
$dictionary['ATC_Appointments']['fields']['contact_info_c']['full_text_search']['boost'] = 1;

