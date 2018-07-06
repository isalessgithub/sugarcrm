<?php
 // created: 2018-05-14 16:09:51
$dictionary['ATC_ISSCampaigns']['fields']['from_name_c']['labelValue']='From Name';
$dictionary['ATC_ISSCampaigns']['fields']['from_name_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['ATC_ISSCampaigns']['fields']['from_name_c']['enforced']='';
$dictionary['ATC_ISSCampaigns']['fields']['from_name_c']['dependency']='and(not(equal($campaign_start_date_c,"")),and(not(equal($campaign_type_c,"recruitment campaign")),not(equal($campaign_type_c,"database services"))))';

 ?>