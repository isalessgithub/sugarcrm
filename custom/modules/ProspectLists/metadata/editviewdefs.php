<?php
$viewdefs['ProspectLists'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="campaign_id" value="{$smarty.request.campaign_id}">',
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
      'javascript' => '<script type="text/javascript">
function toggle_domain_name(list_type)  {ldelim} 
    domain_name = document.getElementById(\'domain_name_div\');
    domain_label = document.getElementById(\'domain_label_div\');
    if (list_type.value == \'exempt_domain\')  {ldelim} 
        domain_name.style.display=\'block\'; 
        domain_label.style.display=\'block\';
     {rdelim}  else  {ldelim} 
        domain_name.style.display=\'none\';
        domain_label.style.display=\'none\';
     {rdelim} 
 {rdelim} 
</script>',
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
          0 => 
          array (
            'name' => 'name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'atc_isscampaigns_prospectlists_1_name',
            'label' => 'LBL_ATC_ISSCAMPAIGNS_PROSPECTLISTS_1_FROM_ATC_ISSCAMPAIGNS_TITLE',
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
            'name' => 'description',
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
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'readonly' => true,
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'display' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'date_entered',
            'readonly' => true,
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
      ),
    ),
  ),
);
