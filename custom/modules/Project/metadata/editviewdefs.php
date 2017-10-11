<?php
$viewdefs['Project'] = 
array (
  'EditView' => 
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
      'form' => 
      array (
        'hidden' => '<input type="hidden" name="is_template" value="{$is_template}" />',
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 
          array (
            'customCode' => '{if !empty($smarty.request.return_action) && $smarty.request.return_action == "ProjectTemplatesDetailView" && (!empty($fields.id.value) || !empty($smarty.request.return_id)) }<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value=\'ProjectTemplatesDetailView\'; this.form.module.value=\'{$smarty.request.return_module}\'; this.form.record.value=\'{$smarty.request.return_id}\';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL{$place}"> {elseif !empty($smarty.request.return_action) && $smarty.request.return_action == "DetailView" && (!empty($fields.id.value) || !empty($smarty.request.return_id)) }<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value=\'DetailView\'; this.form.module.value=\'{$smarty.request.return_module}\'; this.form.record.value=\'{$smarty.request.return_id}\';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL{$place}"> {elseif $is_template}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value=\'ProjectTemplatesListView\'; this.form.module.value=\'{$smarty.request.return_module}\'; this.form.record.value=\'{$smarty.request.return_id}\';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL{$place}"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value=\'index\'; this.form.module.value=\'{$smarty.request.return_module}\'; this.form.record.value=\'{$smarty.request.return_id}\';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL{$place}"> {/if}',
          ),
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_PROJECT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_project_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'project_account_c',
            'studio' => 'visible',
            'label' => 'LBL_PROJECT_ACCOUNT',
          ),
          1 => 
          array (
            'name' => 'proj_area_c',
            'label' => 'LBL_PROJ_AREA',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'proj_prospect_c',
            'studio' => 'visible',
            'label' => 'LBL_PROJ_PROSPECT',
          ),
          1 => 'estimated_start_date',
        ),
        2 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'proj_assist_from_c',
            'studio' => 'visible',
            'label' => 'LBL_PROJ_ASSIST_FROM',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'proj_details_c',
            'studio' => 'visible',
            'label' => 'LBL_PROJ_DETAILS',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'readonly' => true,
            'label' => 'LBL_DATE_MODIFIED',
          ),
          1 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'readonly' => true,
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
      ),
    ),
  ),
);
