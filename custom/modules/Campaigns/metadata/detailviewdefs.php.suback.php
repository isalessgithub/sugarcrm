<?php
// created: 2016-10-07 12:36:01
$viewdefs['Campaigns']['DetailView'] = array (
  'templateMeta' => 
  array (
    'form' => 
    array (
      'hidden' => 
      array (
        0 => '<input type="hidden" name="mode" value="">',
      ),
      'buttons' => 
      array (
        0 => 'EDIT',
        1 => 'SHARE',
        2 => 'DUPLICATE',
        3 => 'DELETE',
        4 => 
        array (
          'customCode' => '<input title="{$MOD.LBL_TEST_BUTTON_TITLE}"  class="button" onclick="this.form.return_module.value=\'Campaigns\'; this.form.return_action.value=\'TrackDetailView\';this.form.action.value=\'Schedule\';this.form.mode.value=\'test\';SUGAR.ajaxUI.submitForm(this.form);" type="{$ADD_BUTTON_STATE}" name="button" id="send_test_button" value="{$MOD.LBL_TEST_BUTTON_LABEL}">',
          'sugar_html' => 
          array (
            'type' => 'input',
            'value' => '{$MOD.LBL_TEST_BUTTON_LABEL}',
            'htmlOptions' => 
            array (
              'type' => '{$ADD_BUTTON_STATE}',
              'title' => '{$MOD.LBL_TEST_BUTTON_TITLE}',
              'class' => 'button',
              'onclick' => 'this.form = document.getElementById(\'formDetailView\'); this.form.return_module.value=\'Campaigns\'; this.form.return_action.value=\'TrackDetailView\';this.form.action.value=\'Schedule\';this.form.mode.value=\'test\';SUGAR.ajaxUI.submitForm(this.form);',
              'name' => 'button',
              'id' => 'send_test_button',
            ),
          ),
        ),
        5 => 
        array (
          'customCode' => '<input title="{$MOD.LBL_QUEUE_BUTTON_TITLE}" class="button" onclick="this.form.return_module.value=\'Campaigns\'; this.form.return_action.value=\'TrackDetailView\';this.form.action.value=\'Schedule\';SUGAR.ajaxUI.submitForm(this.form);" type="{$ADD_BUTTON_STATE}" name="button" id="send_emails_button" value="{$MOD.LBL_QUEUE_BUTTON_LABEL}">',
          'sugar_html' => 
          array (
            'type' => 'input',
            'value' => '{$MOD.LBL_QUEUE_BUTTON_LABEL}',
            'htmlOptions' => 
            array (
              'type' => '{$ADD_BUTTON_STATE}',
              'title' => '{$MOD.LBL_QUEUE_BUTTON_TITLE}',
              'class' => 'button',
              'onclick' => 'this.form.return_module.value=\'Campaigns\'; this.form.return_action.value=\'TrackDetailView\';this.form.action.value=\'Schedule\';SUGAR.ajaxUI.submitForm(this.form);',
              'name' => 'button',
              'id' => 'send_emails_button',
            ),
          ),
        ),
        6 => 
        array (
          'customCode' => '<input title="{$MOD.LBL_MARK_AS_SENT}" class="button" onclick="this.form.return_module.value=\'Campaigns\'; this.form.return_action.value=\'TrackDetailView\';this.form.action.value=\'DetailView\';this.form.mode.value=\'set_target\';SUGAR.ajaxUI.submitForm(this.form);" type="{$TARGET_BUTTON_STATE}" name="button" id="mark_as_sent_button" value="{$MOD.LBL_MARK_AS_SENT}">',
          'sugar_html' => 
          array (
            'type' => 'input',
            'value' => '{$MOD.LBL_MARK_AS_SENT}',
            'htmlOptions' => 
            array (
              'type' => '{$TARGET_BUTTON_STATE}',
              'title' => '{$MOD.LBL_MARK_AS_SENT}',
              'class' => 'button',
              'onclick' => 'this.form.return_module.value=\'Campaigns\'; this.form.return_action.value=\'TrackDetailView\';this.form.action.value=\'DetailView\';this.form.mode.value=\'set_target\';SUGAR.ajaxUI.submitForm(this.form);',
              'name' => 'button',
              'id' => 'mark_as_sent_button',
            ),
          ),
        ),
        7 => 
        array (
          'customCode' => '<script>{$MSG_SCRIPT}</script>',
        ),
      ),
      'links' => 
      array (
        0 => '<input type="button" class="button" onclick="javascript:window.location=\'index.php?module=Campaigns&action=WizardHome&record={$fields.id.value}\';" name="button" id="launch_wizard_button" value="{$MOD.LBL_TO_WIZARD_TITLE}" />',
        1 => '<input type="button" class="button" onclick="javascript:window.location=\'index.php?module=Campaigns&action=TrackDetailView&record={$fields.id.value}\';" name="button" id="view_status_button" value="{$MOD.LBL_TRACK_BUTTON_LABEL}" />',
        2 => '<input id="viewRoiButtonId" type="button" class="button" onclick="javascript:window.location=\'index.php?module=Campaigns&action=RoiDetailView&record={$fields.id.value}\';" name="button" id="view_roi_button" value="{$MOD.LBL_TRACK_ROI_BUTTON_LABEL}" />',
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
    'tabDefs' => 
    array (
      'LBL_CAMPAIGN_INFORMATION' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
    'useTabs' => false,
  ),
  'panels' => 
  array (
    'lbl_campaign_information' => 
    array (
      0 => 
      array (
        0 => 'name',
        1 => 
        array (
          'name' => 'status',
          'label' => 'LBL_CAMPAIGN_STATUS',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'monthly_target_apt_c',
          'label' => 'LBL_MONTHLY_TARGET_APT',
        ),
        1 => 
        array (
          'name' => 'campaign_target_apt_c',
          'label' => 'LBL_CAMPAIGN_TARGET_APT',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'start_date',
          'label' => 'LBL_CAMPAIGN_START_DATE',
        ),
        1 => 'campaign_type',
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'end_date',
          'label' => 'LBL_CAMPAIGN_END_DATE',
        ),
        1 => 
        array (
          'name' => 'frequency',
          'customCode' => '{if $fields.campaign_type.value == "NewsLetter"}<div style=\'none\' id=\'freq_field\'>{$APP_LIST.newsletter_frequency_dom[$fields.frequency.value]}</div>{/if}&nbsp;',
          'customLabel' => '{if $fields.campaign_type.value == "NewsLetter"}<div style=\'none\' id=\'freq_label\'>{$MOD.LBL_CAMPAIGN_FREQUENCY}</div>{/if}&nbsp;',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'impressions',
          'label' => 'LBL_CAMPAIGN_IMPRESSIONS',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'budget',
          'label' => '{$MOD.LBL_CAMPAIGN_BUDGET} ({$CURRENCY})',
        ),
        1 => 
        array (
          'name' => 'expected_cost',
          'label' => '{$MOD.LBL_CAMPAIGN_EXPECTED_COST} ({$CURRENCY})',
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'actual_cost',
          'label' => '{$MOD.LBL_CAMPAIGN_ACTUAL_COST} ({$CURRENCY})',
        ),
        1 => 
        array (
          'name' => 'expected_revenue',
          'label' => '{$MOD.LBL_CAMPAIGN_EXPECTED_REVENUE} ({$CURRENCY})',
        ),
      ),
      7 => 
      array (
        0 => 
        array (
          'name' => 'objective',
          'label' => 'LBL_CAMPAIGN_OBJECTIVE',
        ),
      ),
      8 => 
      array (
        0 => 
        array (
          'name' => 'content',
          'label' => 'LBL_CAMPAIGN_CONTENT',
        ),
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
  ),
);