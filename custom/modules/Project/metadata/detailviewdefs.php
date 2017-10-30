<?php
$viewdefs['Project'] = 
array (
  'DetailView' => 
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Project/Project.js',
        ),
      ),
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'customCode' => '{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button" type="submit" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}"onclick="{if $IS_TEMPLATE}this.form.return_module.value=\'Project\'; this.form.return_action.value=\'ProjectTemplatesDetailView\'; this.form.return_id.value=\'{$id}\'; this.form.action.value=\'ProjectTemplatesEditView\';{else}this.form.return_module.value=\'Project\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$id}\'; this.form.action.value=\'EditView\'; {/if}"/>{/if}',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => ' {$APP.LBL_EDIT_BUTTON_LABEL} ',
              'htmlOptions' => 
              array (
                'id' => 'edit_button',
                'class' => 'button',
                'accessKey' => '{$APP.LBL_EDIT_BUTTON_KEY}',
                'name' => 'Edit',
                'onclick' => '{if $IS_TEMPLATE}this.form.return_module.value=\'Project\'; this.form.return_action.value=\'ProjectTemplatesDetailView\'; this.form.return_id.value=\'{$id}\'; this.form.action.value=\'ProjectTemplatesEditView\';{else}this.form.return_module.value=\'Project\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$id}\'; this.form.action.value=\'EditView\'; {/if}',
              ),
              'template' => '{if $bean->aclAccess("edit")}[CONTENT]{/if}',
            ),
          ),
          1 => 
          array (
            'customCode' => '{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" type="button" name="Delete" id="delete_button" value="{$APP.LBL_DELETE_BUTTON_LABEL}"onclick="{if $IS_TEMPLATE}this.form.return_module.value=\'Project\'; this.form.return_action.value=\'ProjectTemplatesListView\'; this.form.action.value=\'Delete\'; if( confirm(\'{$APP.NTC_DELETE_CONFIRMATION}\') )  {ldelim} return true; {rdelim} else {ldelim} return false; {rdelim} {else}this.form.return_module.value=\'Project\'; this.form.return_action.value=\'ListView\'; this.form.action.value=\'Delete\'; if( confirm(\'{$APP.NTC_DELETE_CONFIRMATION}\'))  {ldelim} return true; {rdelim} else {ldelim} return false; {rdelim} {/if}"/>{/if}',
            'sugar_html' => 
            array (
              'type' => 'button',
              'id' => 'delete_button',
              'value' => '{$APP.LBL_DELETE_BUTTON_LABEL}',
              'htmlOptions' => 
              array (
                'title' => '{$APP.LBL_DELETE_BUTTON_TITLE}',
                'accessKey' => '{$APP.LBL_DELETE_BUTTON_KEY}',
                'id' => 'delete_button',
                'class' => 'button',
                'onclick' => 'prep_delete(this.form);{if $IS_TEMPLATE}this.form.return_module.value=\'Project\'; this.form.return_action.value=\'ProjectTemplatesListView\'; this.form.action.value=\'Delete\'; if (confirm(\'{$APP.NTC_DELETE_CONFIRMATION}\')) {ldelim} return true; {rdelim} else {ldelim} return false; {rdelim}{else}this.form.return_module.value=\'Project\'; this.form.return_action.value=\'ListView\'; this.form.action.value=\'Delete\'; if (confirm(\'{$APP.NTC_DELETE_CONFIRMATION}\')) {ldelim} return true; {rdelim} else {ldelim} return false; {rdelim}{/if}',
              ),
              'template' => '{if $bean->aclAccess("delete")}[CONTENT]{/if}',
            ),
          ),
          2 => 
          array (
            'customCode' => '{if $EDIT_RIGHTS_ONLY}<input title="{$MOD.LBL_VIEW_GANTT_TITLE}" class="button" type="submit" name="EditProjectTasks" id="view_gantt_button" value="  {$MOD.LBL_VIEW_GANTT_TITLE}  " onclick="prep_edit_project_tasks(this.form);" />{/if}',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$MOD.LBL_VIEW_GANTT_TITLE}',
              'htmlOptions' => 
              array (
                'title' => '{$MOD.LBL_VIEW_GANTT_TITLE}',
                'class' => 'button',
                'name' => 'EditProjectTasks',
                'id' => 'view_gantt_button',
                'onclick' => 'prep_edit_project_tasks(this.form);',
              ),
              'template' => '{if $EDIT_RIGHTS_ONLY}[CONTENT]{/if}',
            ),
          ),
          3 => 
          array (
            'customCode' => '<input title="{$SAVE_AS}" class="button" type="submit" name="SaveAsTemplate" id="save_as_template_button" value="{$SAVE_AS}"onclick="{if $IS_TEMPLATE}prep_save_as_project(this.form){else}prep_save_as_template(this.form){/if}"/>',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$SAVE_AS}',
              'htmlOptions' => 
              array (
                'name' => 'SaveAsTemplate',
                'class' => 'button',
                'id' => 'save_as_template_button',
                'onclick' => '{if $IS_TEMPLATE}prep_save_as_project(this.form){else}prep_save_as_template(this.form){/if}',
              ),
            ),
          ),
          4 => 
          array (
            'customCode' => '<input title="{$MOD.LBL_EXPORT_TO_MS_PROJECT}" class="button" type="submit" name="ExportToProject" id="export_to_ms_project_button" value="{$MOD.LBL_EXPORT_TO_MS_PROJECT}" onclick="prep_export_to_project(this.form);"/>',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$MOD.LBL_EXPORT_TO_MS_PROJECT}',
              'htmlOptions' => 
              array (
                'title' => '{$MOD.LBL_EXPORT_TO_MS_PROJECT}',
                'name' => 'ExportToProject',
                'id' => 'export_to_ms_project_button',
                'onclick' => 'prep_export_to_project(this.form);',
              ),
            ),
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
          1 => 
          array (
            'name' => 'estimated_start_date',
            'label' => 'LBL_DATE_START',
          ),
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
