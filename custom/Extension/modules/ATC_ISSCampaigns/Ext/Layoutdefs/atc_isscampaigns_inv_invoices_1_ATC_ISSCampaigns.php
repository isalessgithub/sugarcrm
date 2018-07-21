<?php
 // created: 2018-07-12 16:07:06
$layout_defs["ATC_ISSCampaigns"]["subpanel_setup"]['atc_isscampaigns_inv_invoices_1'] = array (
  'order' => 100,
  'module' => 'INV_Invoices',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ATC_ISSCAMPAIGNS_INV_INVOICES_1_FROM_INV_INVOICES_TITLE',
  'get_subpanel_data' => 'atc_isscampaigns_inv_invoices_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
