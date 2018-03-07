<?php
 // created: 2018-02-19 09:54:54
$dictionary['ATC_ISSCampaigns']['fields']['from_address_c']['labelValue']='From Address';
$dictionary['ATC_ISSCampaigns']['fields']['from_address_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['ATC_ISSCampaigns']['fields']['from_address_c']['enforced']='';
$dictionary['ATC_ISSCampaigns']['fields']['from_address_c']['dependency']='not(equal($campaign_start_date_c,""))';

 ?>