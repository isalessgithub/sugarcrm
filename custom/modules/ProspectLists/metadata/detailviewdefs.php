<?php
// created: 2017-02-28 11:17:59
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
        1 => 'list_type',
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'atc_isscampaigns_prospectlists_1_name',
        ),
        1 => 
        array (
          'name' => 'clients_c',
          'studio' => 'visible',
          'label' => 'LBL_CLIENTS',
        ),
      ),
      2 => 
      array (
        0 => 'description',
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
        ),
      ),
      1 => 
      array (
        0 => 'team_name',
        1 => 
        array (
          'name' => 'date_entered',
        ),
      ),
    ),
  ),
);