<?php
 // created: 2016-10-07 12:36:24
$dictionary['ATC_Appointments']['fields']['appoint_count_c']['duplicate_merge_dom_value'] = 0;
$dictionary['ATC_Appointments']['fields']['appoint_count_c']['calculated'] = '1';
$dictionary['ATC_Appointments']['fields']['appoint_count_c']['formula'] = 'ifElse(isInList($appointment_status,createList("Accepted","Attended","Confirmed")),1,0)';
$dictionary['ATC_Appointments']['fields']['appoint_count_c']['enforced'] = '1';
$dictionary['ATC_Appointments']['fields']['appoint_count_c']['dependency'] = '';
$dictionary['ATC_Appointments']['fields']['appoint_count_c']['full_text_search']['boost'] = 1;

