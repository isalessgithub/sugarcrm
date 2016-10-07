<?php
// created: 2016-10-06 15:20:01
$viewdefs['ProspectLists']['DetailView'] = array (
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
  ),
  'panels' => 
  array (
    'default' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'client_edit_disabled_c',
          'label' => 'LBL_CLIENT_EDIT_DISABLED',
        ),
        1 => '',
      ),
      1 => 
      array (
        0 => 'name',
        1 => 
        array (
          'name' => 'entry_count',
          'label' => 'LBL_ENTRIES',
        ),
      ),
      2 => 
      array (
        0 => 'list_type',
        1 => 'domain_name',
      ),
      3 => 
      array (
        0 => 'description',
        1 => 
        array (
          'name' => 'clients_c',
          'studio' => 'visible',
          'label' => 'LBL_CLIENTS',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'atc_isscampaigns_prospectlists_1_name',
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
);