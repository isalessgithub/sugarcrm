<?php
 // created: 2017-04-13 12:14:21
$dictionary['ATC_ISSCampaigns']['fields']['grand_total_c']['duplicate_merge_dom_value']=0;
$dictionary['ATC_ISSCampaigns']['fields']['grand_total_c']['labelValue']='Grand Total';
$dictionary['ATC_ISSCampaigns']['fields']['grand_total_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['ATC_ISSCampaigns']['fields']['grand_total_c']['calculated']='true';
$dictionary['ATC_ISSCampaigns']['fields']['grand_total_c']['formula']='add($appointment_accepted_c,$appointment_attended_by_poli_c,$appointment_attended_c,$appointment_confirmed_c)';
$dictionary['ATC_ISSCampaigns']['fields']['grand_total_c']['enforced']='true';
$dictionary['ATC_ISSCampaigns']['fields']['grand_total_c']['dependency']='';

 ?>