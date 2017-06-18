<?php
 // created: 2017-04-13 12:16:27
$dictionary['MS_Campaign_Results_Monthly']['fields']['grand_total_c']['duplicate_merge_dom_value']=0;
$dictionary['MS_Campaign_Results_Monthly']['fields']['grand_total_c']['labelValue']='Grand Total';
$dictionary['MS_Campaign_Results_Monthly']['fields']['grand_total_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['MS_Campaign_Results_Monthly']['fields']['grand_total_c']['calculated']='true';
$dictionary['MS_Campaign_Results_Monthly']['fields']['grand_total_c']['formula']='add($appointment_accepted,$appointment_attended,$appointment_attended_by_policy,$appointment_confirmed)';
$dictionary['MS_Campaign_Results_Monthly']['fields']['grand_total_c']['enforced']='true';
$dictionary['MS_Campaign_Results_Monthly']['fields']['grand_total_c']['dependency']='';

 ?>