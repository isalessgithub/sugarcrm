<?php
// created: 2018-07-12 16:20:20
$viewdefs['INV_Invoices']['base']['view']['subpanel-for-atc_isscampaigns-atc_isscampaigns_inv_invoices_1'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'label' => 'LBL_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
          'link' => true,
        ),
        1 => 
        array (
          'name' => 'invoice_amount_paid_c',
          'label' => 'LBL_INVOICE_AMOUNT_PAID',
          'enabled' => true,
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'currency_format' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'invoice_date_received_c',
          'label' => 'LBL_INVOICE_DATE_RECEIVED',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'invoice_date_deposited_c',
          'label' => 'LBL_INVOICE_DATE_DEPOSITED',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'invoicing_complete_date_c',
          'label' => 'LBL_INVOICING_COMPLETE_DATE',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'description',
          'label' => 'LBL_DESCRIPTION',
          'enabled' => true,
          'sortable' => false,
          'default' => true,
        ),
      ),
    ),
  ),
  'orderBy' => 
  array (
    'field' => 'date_modified',
    'direction' => 'desc',
  ),
  'type' => 'subpanel-list',
);