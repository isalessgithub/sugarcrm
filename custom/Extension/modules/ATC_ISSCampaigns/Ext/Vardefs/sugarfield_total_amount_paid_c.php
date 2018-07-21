<?php
 // created: 2018-07-19 21:49:58
$dictionary['ATC_ISSCampaigns']['fields']['total_amount_paid_c']['duplicate_merge_dom_value']=0;
$dictionary['ATC_ISSCampaigns']['fields']['total_amount_paid_c']['labelValue']='Total Amount Paid';
$dictionary['ATC_ISSCampaigns']['fields']['total_amount_paid_c']['calculated']='true';
$dictionary['ATC_ISSCampaigns']['fields']['total_amount_paid_c']['formula']='rollupSum($atc_isscampaigns_inv_invoices_1,"invoice_amount_paid_c")';
$dictionary['ATC_ISSCampaigns']['fields']['total_amount_paid_c']['enforced']='true';
$dictionary['ATC_ISSCampaigns']['fields']['total_amount_paid_c']['dependency']='';
$dictionary['ATC_ISSCampaigns']['fields']['total_amount_paid_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 ?>