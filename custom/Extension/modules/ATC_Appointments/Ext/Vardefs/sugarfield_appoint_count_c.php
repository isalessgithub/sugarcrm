<?php
 // created: 2014-02-26 22:35:18
$dictionary['ATC_Appointments']['fields']['appoint_count_c']['duplicate_merge_dom_value']=0;
$dictionary['ATC_Appointments']['fields']['appoint_count_c']['calculated']='1';
$dictionary['ATC_Appointments']['fields']['appoint_count_c']['formula']='ifElse(isInList($appointment_status,createList("Accepted","Attended","Confirmed")),1,0)';
$dictionary['ATC_Appointments']['fields']['appoint_count_c']['enforced']='1';
$dictionary['ATC_Appointments']['fields']['appoint_count_c']['dependency']='';

 ?>