<?php
$viewdefs['ProspectLists'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'closeFormBeforeCustomButtons' => true,
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 
          array (
            'customCode' => '<input title="{$APP.LBL_EXPORT}"  class="button" type="button" name="opp_to_quote_button" id="export_button" value="{$APP.LBL_EXPORT}" onclick="document.location.href = \'index.php?entryPoint=export&module=ProspectLists&uid={$fields.id.value}&members=1\'">',
          ),
          4 => 
          array (
            'customCode' => '<input title="{$MOD.LBL_CALLING_MODE}"  class="button" type="button" name="calling_mode" id="calling_mode" value="{$MOD.LBL_CALLING_MODE}" onclick="document.location.href = \'index.php?action=callModeView&module=ProspectLists&uid={$fields.id.value}\'">',
          ),
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
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
      'syncDetailEditViews' => true,
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
            'name' => 'atc_isscampaigns_prospectlists_1_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'clients_c',
            'studio' => 'visible',
            'label' => 'LBL_CLIENTS',
          ),
          1 => 
          array (
            'name' => 'prospectlists_atc_clientsalesreps_1_name',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ms_max_list_size_c',
            'label' => 'LBL_MS_MAX_LIST_SIZE',
          ),
          1 => 
          array (
            'name' => 'client_edit_disabled_c',
            'label' => 'LBL_CLIENT_EDIT_DISABLED',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'from_name_c',
            'label' => 'LBL_EMAIL_FROM_NAME',
          ),
          1 => 
          array (
            'name' => 'from_address_c',
            'label' => 'LBL_EMAIL_FROM_ADDRESS',
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
  ),
);
