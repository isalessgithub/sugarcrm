<?php
 // created: 2018-05-07 17:38:40
$dictionary['ATC_ISSCampaigns']['fields']['campaign_price_c']['labelValue']='Price';
$dictionary['ATC_ISSCampaigns']['fields']['campaign_price_c']['enforced']='';
$dictionary['ATC_ISSCampaigns']['fields']['campaign_price_c']['dependency']='not(equal($campaign_start_date_c,""))';
$dictionary['ATC_ISSCampaigns']['fields']['campaign_price_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 ?>