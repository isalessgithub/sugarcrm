<?php
$module_name = 'ATC_ISSCampaigns';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_QUICKCREATE_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_QUICKCREATE_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'potential_start_month_c',
            'label' => 'LBL_POTENTIAL_START_MONTH',
          ),
        ),
        1 => 
        array (
          0 => 'assigned_user_name',
          1 => 
          array (
            'name' => 'users_atc_isscampaigns_1_name',
            'label' => 'LBL_USERS_ATC_ISSCAMPAIGNS_1_FROM_USERS_TITLE',
          ),
        ),
      ),
      'lbl_quickcreate_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'appointment_target_monthly_c',
            'label' => 'LBL_APPOINTMENT_TARGET_MONTHLY',
          ),
          1 => 
          array (
            'name' => 'appointment_target_campaign_c',
            'label' => 'LBL_APPOINTMENT_TARGET_CAMPAIGN',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'campaign_start_date_c',
            'label' => 'LBL_CAMPAIGN_START_DATE',
          ),
          1 => 
          array (
            'name' => 'campaign_finish_date_c',
            'label' => 'LBL_CAMPAIGN_FINISH_DATE',
          ),
        ),
        2 => 
        array (
          0 => 'description',
        ),
      ),
      'lbl_quickcreate_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'invoice_sent_c',
            'label' => 'LBL_INVOICE_SENT',
          ),
          1 => 
          array (
            'name' => 'campaign_status_c',
            'studio' => 'visible',
            'label' => 'LBL_CAMPAIGN_STATUS',
          ),
        ),
      ),
    ),
  ),
);
?>
