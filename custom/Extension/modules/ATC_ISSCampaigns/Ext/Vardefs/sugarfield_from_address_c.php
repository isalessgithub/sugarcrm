<?php
 // created: 2018-05-14 16:38:55
$dictionary['ATC_ISSCampaigns']['fields']['from_address_c']['labelValue']='From Address';
$dictionary['ATC_ISSCampaigns']['fields']['from_address_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['ATC_ISSCampaigns']['fields']['from_address_c']['enforced']='';
$dictionary['ATC_ISSCampaigns']['fields']['from_address_c']['dependency']='and(not(equal($campaign_start_date_c,"")),not(equal($campaign_type_c,"recruitment campaign")))';

 ?>
