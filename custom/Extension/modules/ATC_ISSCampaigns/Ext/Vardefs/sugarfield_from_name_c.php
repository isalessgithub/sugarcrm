<?php
 // created: 2018-02-19 09:54:01
$dictionary['ATC_ISSCampaigns']['fields']['from_name_c']['labelValue']='From Name';
$dictionary['ATC_ISSCampaigns']['fields']['from_name_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['ATC_ISSCampaigns']['fields']['from_name_c']['enforced']='';
$dictionary['ATC_ISSCampaigns']['fields']['from_name_c']['dependency']='not(equal($campaign_start_date_c,""))';

 ?>