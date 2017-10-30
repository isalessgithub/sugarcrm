/* -- Query: select PM.custom_module,PM.* from sugarcrm_prod.fields_meta_data PM left join sugarcrm_test.fields_meta_data TM on PM.id = TM.id where TM.id is null order 
by PM.date_modified desc -- Date: 2017-10-30 12:55 */ INSERT INTO `fields_meta_data` 
(`custom_module`,`id`,`name`,`vname`,`comments`,`help`,`custom_module`,`type`,`len`,`required`,`default_value`,`date_modified`,`deleted`,`audited`,`massupdate`,`duplicate_merge`,`reportable`,`importable`,`ext1`,`ext2`,`ext3`,`ext4`) 
VALUES ('Tasks','Tasksaccount_id_c','account_id_c','LBL_PROJECT_ACCOUNT_ACCOUNT_ID',NULL,NULL,'Tasks','id',36,0,NULL,'2017-10-14 
18:27:54',0,0,0,1,0,'true',NULL,NULL,NULL,NULL); INSERT INTO `fields_meta_data` 
(`custom_module`,`id`,`name`,`vname`,`comments`,`help`,`custom_module`,`type`,`len`,`required`,`default_value`,`date_modified`,`deleted`,`audited`,`massupdate`,`duplicate_merge`,`reportable`,`importable`,`ext1`,`ext2`,`ext3`,`ext4`) 
VALUES ('Tasks','Tasksproject_account_c','project_account_c','LBL_PROJECT_ACCOUNT',NULL,NULL,'Tasks','relate',255,1,NULL,'2017-10-14 
18:27:54',0,1,0,1,1,'true',NULL,'Accounts','account_id_c',NULL); INSERT INTO `fields_meta_data` 
(`custom_module`,`id`,`name`,`vname`,`comments`,`help`,`custom_module`,`type`,`len`,`required`,`default_value`,`date_modified`,`deleted`,`audited`,`massupdate`,`duplicate_merge`,`reportable`,`importable`,`ext1`,`ext2`,`ext3`,`ext4`) 
VALUES ('Tasks','Tasksstart_date_c','start_date_c','LBL_START_DATE',NULL,NULL,'Tasks','date',NULL,0,NULL,'2017-10-14 17:26:18',0,1,1,1,1,'true',NULL,NULL,NULL,NULL); 
INSERT INTO `fields_meta_data` 
(`custom_module`,`id`,`name`,`vname`,`comments`,`help`,`custom_module`,`type`,`len`,`required`,`default_value`,`date_modified`,`deleted`,`audited`,`massupdate`,`duplicate_merge`,`reportable`,`importable`,`ext1`,`ext2`,`ext3`,`ext4`) 
VALUES 
('ATC_ISSCampaigns','ATC_ISSCampaignssales_detail_notes_c','sales_detail_notes_c','LBL_SALES_DETAIL_NOTES',NULL,NULL,'ATC_ISSCampaigns','text',NULL,0,NULL,'2017-10-14 
16:55:07',0,1,0,1,1,'true',NULL,'4','20',NULL); INSERT INTO `fields_meta_data` 
(`custom_module`,`id`,`name`,`vname`,`comments`,`help`,`custom_module`,`type`,`len`,`required`,`default_value`,`date_modified`,`deleted`,`audited`,`massupdate`,`duplicate_merge`,`reportable`,`importable`,`ext1`,`ext2`,`ext3`,`ext4`) 
VALUES ('Accounts','Accountsct_hardware_c','ct_hardware_c','LBL_CT_HARDWARE',NULL,NULL,'Accounts','varchar',255,0,NULL,'2017-10-14 
16:41:29',0,1,0,1,1,'true',NULL,NULL,NULL,NULL); INSERT INTO `fields_meta_data` 
(`custom_module`,`id`,`name`,`vname`,`comments`,`help`,`custom_module`,`type`,`len`,`required`,`default_value`,`date_modified`,`deleted`,`audited`,`massupdate`,`duplicate_merge`,`reportable`,`importable`,`ext1`,`ext2`,`ext3`,`ext4`) 
VALUES ('Accounts','Accountscompany_tech_c','company_tech_c','LBL_COMPANY_TECH',NULL,NULL,'Accounts','text',NULL,0,NULL,'2017-10-10 
22:01:44',0,1,0,1,1,'true',NULL,'4','20',NULL); INSERT INTO `fields_meta_data` 
(`custom_module`,`id`,`name`,`vname`,`comments`,`help`,`custom_module`,`type`,`len`,`required`,`default_value`,`date_modified`,`deleted`,`audited`,`massupdate`,`duplicate_merge`,`reportable`,`importable`,`ext1`,`ext2`,`ext3`,`ext4`) 
VALUES ('ATC_Appointments','ATC_Appointmentspaid_date_c','paid_date_c','LBL_PAID_DATE',NULL,NULL,'ATC_Appointments','date',NULL,0,NULL,'2017-09-14 
01:13:42',0,1,1,1,1,'true',NULL,NULL,NULL,NULL); INSERT INTO `fields_meta_data` 
(`custom_module`,`id`,`name`,`vname`,`comments`,`help`,`custom_module`,`type`,`len`,`required`,`default_value`,`date_modified`,`deleted`,`audited`,`massupdate`,`duplicate_merge`,`reportable`,`importable`,`ext1`,`ext2`,`ext3`,`ext4`) 
VALUES ('ATC_Appointments','ATC_Appointmentssales_rep_email_c','sales_rep_email_c','LBL_SALES_REP_EMAIL',NULL,NULL,'ATC_Appointments','varchar',255,0,NULL,'2017-08-30 
15:25:20',0,0,0,0,1,'false',NULL,NULL,NULL,NULL);
