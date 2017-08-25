<?php $module_name = 'RLS_LinkedinParserConfig'; $viewdefs [$module_name] = array( 'EditView' => array(
 'templateMeta' => array( 'maxColumns' => '2', 'widths' => array( 0 => array( 'label' => '10',
 'field' => '30', ), 1 => array( 'label' => '10', 'field' => '30', ), ), 'useTabs' => false,
 'tabDefs' => array( 'DEFAULT' => array( 'newTab' => false, 'panelDefault' => 'expanded', ), 'LBL_EDITVIEW_PANEL1' =>
 array( 'newTab' => false, 'panelDefault' => 'expanded', ), 'LBL_EDITVIEW_PANEL2' => array( 'newTab' => false,
 'panelDefault' => 'expanded', ), 'LBL_EDITVIEW_PANEL3' => array( 'newTab' => false, 'panelDefault' => 'expanded',
 ), ), 'syncDetailEditViews' => true, ), 'panels' => array( 'default' => array( array( 0 => 'name',
 1 => 'assigned_user_name', ), array( 0 => 'description', 1 => array( 'name' => 'rls_linkedinparserconfig_users_name',
 ), ), array( 0 => 'list_order_modules_disabled_id', ), array( 0 => 'default_module_search', ),
 array( 0 => 'accounts_duplicate', ), array( 0 => 'contacts_duplicate', ), array( 0 => 'leads_duplicate',
 ), array( 0 => 'prospects_duplicate', ), array( 0 => 'rls_candidates_duplicate', ), ), 'lbl_editview_panel1' =>
 array( 0 => array( 0 => array( 'name' => 'rls_skills', 'label' => 'LBL_RLS_SKILLS', ), ), 1 =>
 array( 0 => array( 'name' => 'rls_working_experience', 'label' => 'LBL_RLS_WORKING_EXPERIENCE',
 ), ), 2 => array( 0 => array( 'name' => 'rls_parse_accounts', 'label' => 'LBL_RLS_PARSE_ACCOUNTS',
 ), ), ), 'lbl_editview_panel2' => array( array( 0 => array( 'name' => 'rls_assign_to', 'studio' => 'visible',
 'label' => 'LBL_RLS_ASSIGN_TO', ), ), array( 0 => array( 'name' => 'rls_leads_status_f', 'studio' => 'visible',
 'label' => 'LBL_RLS_LEADS_STATUS_F', ), ), array( 0 => array( 'name' => 'rls_candidate_status_f',
 'studio' => 'visible', 'label' => 'LBL_RLS_CANDIDATE_STATUS_F', ), ), array( 0 => array( 'name' => 'jobs_allow_statuses_list',
 'studio' => 'visible', 'label' => 'LBL_JOBS_ALLOW_STATUSES', ), ), array( 0 => array( 'name' => 'rls_job_list',
 'label' => 'LBL_RLS_JOB_LIST', ), ), array( 0 => array( 'name' => 'rls_target_list', 'label' => 'LBL_RLS_TARGET_LIST',
 ), ), array( 0 => array( 'name' => 'rls_show_technical_data', 'label' => 'LBL_RLS_SHOW_TECHNICAL_DATA',
 ), ), array( 0 => array( 'name' => 'ignore_job_list_security', 'label' => 'LBL_RLS_JOB_LIST_SECURITY',
 ), ), array( 0 => array( 'name' => 'ignore_target_list_security', 'label' => 'LBL_RLS_TARGET_LIST_SECURITY',
 ), ), array( 0 => array( 'name' => 'ignore_dublicates_team_security', 'label' => 'LBL_RLS_DUPLICATE_TEAM_SECURITY',
 ), ), ), ), ), ); ?> 