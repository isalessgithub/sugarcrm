<?php
// created: 2016-10-07 12:36:01
$viewdefs['Quotes']['DetailView'] = array (
  'templateMeta' => 
  array (
    'form' => 
    array (
      'closeFormBeforeCustomButtons' => true,
      'buttons' => 
      array (
        0 => 'EDIT',
        1 => 'SHARE',
        2 => 'DUPLICATE',
        3 => 'DELETE',
        4 => 
        array (
          'customCode' => '<form action="index.php" method="POST" name="Quote2Opp" id="form">
                    <input type="hidden" name="module" value="Quotes">
                    <input type="hidden" name="record" value="{$fields.id.value}">
                    <input type="hidden" name="user_id" value="{$current_user->id}">
                    <input type="hidden" name="team_id" value="{$fields.team_id.value}">
                    <input type="hidden" name="user_name" value="{$current_user->user_name}">
                    <input type="hidden" name="action" value="QuoteToOpportunity">
                    <input type="hidden" name="opportunity_subject" value="{$fields.name.value}">
                    <input type="hidden" name="opportunity_name" value="{$fields.name.value}">
                    <input type="hidden" name="opportunity_id" value="{$fields.billing_account_id.value}">
                    <input type="hidden" name="amount" value="{$fields.total.value}">
                    <input type="hidden" name="valid_until" value="{$fields.date_quote_expected_closed.value}">
                    <input type="hidden" name="currency_id" value="{$fields.currency_id.value}">
                    <input id="create_opp_from_quote_button" title="{$APP.LBL_QUOTE_TO_OPPORTUNITY_TITLE}"
                        class="button" type="submit" name="opp_to_quote_button"
                        value="{$APP.LBL_QUOTE_TO_OPPORTUNITY_LABEL}" {$DISABLE_CONVERT}></form>',
        ),
      ),
      'footerTpl' => 'modules/Quotes/tpls/DetailViewFooter.tpl',
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
    'tabDefs' => 
    array (
      'LBL_QUOTE_INFORMATION' => 
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
        0 => 
        array (
          'name' => 'name',
          'label' => 'LBL_QUOTE_NAME',
        ),
        1 => 
        array (
          'name' => 'opportunity_name',
        ),
      ),
      1 => 
      array (
        0 => 'quote_num',
        1 => 'quote_stage',
      ),
      2 => 
      array (
        0 => 'purchase_order_num',
        1 => 
        array (
          'name' => 'date_quote_expected_closed',
          'label' => 'LBL_DATE_QUOTE_EXPECTED_CLOSED',
        ),
      ),
      3 => 
      array (
        0 => 'payment_terms',
        1 => 'original_po_date',
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'atc_clients_quotes_1_name',
        ),
        1 => 
        array (
          'name' => 'atc_clients_quotes_2_name',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'client_email_address_c',
          'label' => 'LBL_CLIENT_EMAIL_ADDRESS',
        ),
        1 => '',
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'billing_address_street',
          'label' => 'LBL_BILL_TO',
          'type' => 'address',
          'displayParams' => 
          array (
            'key' => 'billing',
          ),
        ),
        1 => 
        array (
          'name' => 'shipping_address_street',
          'label' => 'LBL_SHIP_TO',
          'type' => 'address',
          'displayParams' => 
          array (
            'key' => 'shipping',
          ),
        ),
      ),
      7 => 
      array (
        0 => 
        array (
          'name' => 'atc_isscampaigns_quotes_1_name',
        ),
        1 => 'description',
      ),
    ),
    'LBL_PANEL_ASSIGNMENT' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO',
        ),
        1 => 
        array (
          'name' => 'date_modified',
          'label' => 'LBL_DATE_MODIFIED',
          'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
        ),
      ),
      1 => 
      array (
        0 => 'team_name',
        1 => 
        array (
          'name' => 'date_entered',
          'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
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
        1 => 
        array (
          'name' => 'esb_last_sync_c',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'esb_listid_c',
        ),
        1 => 
        array (
          'name' => 'esb_qb_transactions_quotes_name',
        ),
      ),
    ),
  ),
);