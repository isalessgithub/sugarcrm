<?php
// created: 2018-07-19 21:46:55
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'invoice_amount_paid_c' => 
  array (
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_INVOICE_AMOUNT_PAID',
    'currency_format' => true,
    'width' => '10%',
  ),
  'invoice_date_received_c' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_INVOICE_DATE_RECEIVED',
    'width' => '10%',
    'default' => true,
  ),
  'invoice_date_deposited_c' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_INVOICE_DATE_DEPOSITED',
    'width' => '10%',
    'default' => true,
  ),
  'invoicing_complete_date_c' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_INVOICING_COMPLETE_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'description' => 
  array (
    'type' => 'text',
    'vname' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
);