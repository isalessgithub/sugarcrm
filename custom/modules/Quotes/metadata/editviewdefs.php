<?php
$viewdefs ['Quotes'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
 	'includes' => 
	array(
		0 => 
		array(
		     'file'=>'custom/modules/Quotes/clients_address.js',
		),
	),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'form' => 
      array (
        'footerTpl' => 'custom/modules/Quotes/tpls/EditViewFooter.tpl',
      ),
      'tabDefs' => 
      array (
        'LBL_QUOTE_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_BILL_TO' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_ADDRESS_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ASSIGNMENT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_QUICKBOOKS_PLUGIN' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'lbl_quote_information' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'opportunity_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'quote_num',
            'type' => 'readonly',
            'displayParams' => 
            array (
              'required' => false,
            ),
          ),
          1 => 'quote_stage',
        ),
        2 => 
        array (
          0 => 'purchase_order_num',
          1 => 'date_quote_expected_closed',
        ),
        3 => 
        array (
          0 => 'payment_terms',
          1 => 'original_po_date',
        ),
      ),
      'lbl_bill_to' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'atc_clients_quotes_1_name',
	    'displayParams' => array (
          	'call_back_function' => 'setClientAddress()',
		//'field' => array('onChange' => 'setClientAddress();',),
            ),
          ),
          1 => 
          array (
            'name' => 'atc_clients_quotes_2_name',
	     'displayParams' => array (
          	'call_back_function' => 'setClientAddress()',
		//'field' => array('onChange' => 'setClientAddress();',),
            ),
          ),
        ),
      ),
      'lbl_address_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
          1 => 
          array (
            'name' => 'shipping_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'shipping',
              'copy' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 'assigned_user_name',
          1 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
      ),
      'LBL_QUICKBOOKS_PLUGIN' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'esb_sync_c',
          ),
        ),
      ),
    ),
  ),
);
?>
