<?php
$popupMeta = array (
    'moduleMain' => 'Contact',
    'varName' => 'CONTACT',
    'orderBy' => 'contacts.first_name, contacts.last_name',
    'whereClauses' => array (
  'first_name' => 'contacts.first_name',
  'last_name' => 'contacts.last_name',
  'account_name' => 'accounts.name',
  'left_company_c' => 'contacts_cstm.left_company_c',
  'title' => 'contacts.title',
  'lead_source' => 'contacts.lead_source',
  'email' => 'contacts.email',
  'campaign_name' => 'contacts.campaign_name',
  'assigned_user_id' => 'contacts.assigned_user_id',
  'call_outcome_c' => 'contacts_cstm.call_outcome_c',
),
    'searchInputs' => array (
  0 => 'first_name',
  1 => 'last_name',
  2 => 'account_name',
  3 => 'email',
  4 => 'left_company_c',
  5 => 'title',
  6 => 'lead_source',
  7 => 'campaign_name',
  8 => 'assigned_user_id',
  9 => 'call_outcome_c',
),
    'create' => array (
  'formBase' => 'ContactFormBase.php',
  'formBaseClass' => 'ContactFormBase',
  'getFormBodyParams' => 
  array (
    0 => '',
    1 => '',
    2 => 'ContactSave',
  ),
  'createButton' => 'LNK_NEW_CONTACT',
),
    'searchdefs' => array (
  'first_name' => 
  array (
    'name' => 'first_name',
    'width' => '10%',
  ),
  'last_name' => 
  array (
    'name' => 'last_name',
    'width' => '10%',
  ),
  'account_name' => 
  array (
    'name' => 'account_name',
    'type' => 'varchar',
    'width' => '10%',
  ),
  'left_company_c' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_LEFT_COMPANY',
    'width' => '10%',
    'name' => 'left_company_c',
  ),
  'title' => 
  array (
    'name' => 'title',
    'width' => '10%',
  ),
  'lead_source' => 
  array (
    'name' => 'lead_source',
    'width' => '10%',
  ),
  'email' => 
  array (
    'name' => 'email',
    'width' => '10%',
  ),
  'campaign_name' => 
  array (
    'name' => 'campaign_name',
    'displayParams' => 
    array (
      'hideButtons' => 'true',
      'size' => 30,
      'class' => 'sqsEnabled sqsNoAutofill',
    ),
    'width' => '10%',
  ),
  'call_outcome_c' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_CALL_OUTCOME',
    'width' => '10%',
    'name' => 'call_outcome_c',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'type' => 'enum',
    'label' => 'LBL_ASSIGNED_TO',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'TITLE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_TITLE',
    'default' => true,
    'name' => 'title',
  ),
  'ACCOUNT_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'module' => 'Accounts',
    'id' => 'ACCOUNT_ID',
    'default' => true,
    'sortable' => true,
    'ACLTag' => 'ACCOUNT',
    'related_fields' => 
    array (
      0 => 'account_id',
    ),
    'name' => 'account_name',
  ),
  'NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'related_fields' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'salutation',
      3 => 'account_name',
      4 => 'account_id',
    ),
    'name' => 'name',
  ),
  'LEAD_SOURCE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LEAD_SOURCE',
    'default' => true,
    'name' => 'lead_source',
  ),
),
);
