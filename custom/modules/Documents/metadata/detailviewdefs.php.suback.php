<?php
// created: 2016-10-07 09:55:44
$viewdefs['Documents']['DetailView'] = array (
  'templateMeta' => 
  array (
    'maxColumns' => '2',
    'form' => 
    array (
      'hidden' => 
      array (
        0 => '<input type="hidden" name="old_id" value="{$fields.document_revision_id.value}">',
      ),
    ),
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
      'LBL_DOCUMENT_INFORMATION' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_REVISIONS_PANEL' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
  ),
  'panels' => 
  array (
    'lbl_document_information' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'filename',
          'displayParams' => 
          array (
            'link' => 'filename',
            'id' => 'document_revision_id',
          ),
        ),
        1 => 'status',
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'document_name',
          'label' => 'LBL_DOC_NAME',
        ),
        1 => 
        array (
          'name' => 'revision',
          'label' => 'LBL_DOC_VERSION',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'template_type',
          'label' => 'LBL_DET_TEMPLATE_TYPE',
        ),
        1 => 
        array (
          'name' => 'is_template',
          'label' => 'LBL_DET_IS_TEMPLATE',
        ),
      ),
      3 => 
      array (
        0 => 'active_date',
        1 => 'category_id',
      ),
      4 => 
      array (
        0 => 'exp_date',
        1 => 'subcategory_id',
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'description',
          'label' => 'LBL_DOC_DESCRIPTION',
        ),
      ),
      6 => 
      array (
        0 => 'related_doc_name',
        1 => 'related_doc_rev_number',
      ),
      7 => 
      array (
        0 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO_NAME',
        ),
        1 => 
        array (
          'name' => 'team_name',
          'label' => 'LBL_TEAM',
        ),
      ),
      8 => 
      array (
        0 => 
        array (
          'name' => 'syno_doc_template_c',
        ),
        1 => 
        array (
          'name' => 'syno_doc_relationships_c',
          'studio' => 'visible',
          'label' => 'LBL_SYNO_DOC_RELATIONSHIPS',
        ),
      ),
    ),
    'LBL_REVISIONS_PANEL' => 
    array (
      0 => 
      array (
        0 => 'last_rev_created_name',
        1 => 
        array (
          'name' => 'last_rev_create_date',
          'type' => 'date',
        ),
      ),
    ),
  ),
);