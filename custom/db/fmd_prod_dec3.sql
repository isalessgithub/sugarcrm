/* -- Query: select sugarcrm_prod.fields_meta_data.* from sugarcrm_prod.fields_meta_data left join sugarcrm_test.fields_meta_data on sugarcrm_prod.fields_meta_data.id = 
sugarcrm_test.fields_meta_data.id where sugarcrm_test.fields_meta_data.id is null -- Date: 2017-12-03 19:10 */ INSERT INTO `fields_meta_data` 
(`id`,`name`,`vname`,`comments`,`help`,`custom_module`,`type`,`len`,`required`,`default_value`,`date_modified`,`deleted`,`audited`,`massupdate`,`duplicate_merge`,`reportable`,`importable`,`ext1`,`ext2`,`ext3`,`ext4`) 
VALUES ('ATC_Clientsatc_clientsalesreps_id_c','atc_clientsalesreps_id_c','LBL_CLIENT_SALES_REP_ATC_CLIENTSALESREPS_ID',NULL,NULL,'ATC_Clients','id',36,0,NULL,'2017-11-08 
18:57:06',0,0,0,1,0,'true',NULL,NULL,NULL,NULL); INSERT INTO `fields_meta_data` 
(`id`,`name`,`vname`,`comments`,`help`,`custom_module`,`type`,`len`,`required`,`default_value`,`date_modified`,`deleted`,`audited`,`massupdate`,`duplicate_merge`,`reportable`,`importable`,`ext1`,`ext2`,`ext3`,`ext4`) 
VALUES ('ATC_Clientsclient_sales_rep_c','client_sales_rep_c','LBL_CLIENT_SALES_REP',NULL,NULL,'ATC_Clients','relate',255,0,NULL,'2017-11-09 
01:57:08',0,0,0,1,1,'true',NULL,'ATC_ClientSalesReps','atc_clientsalesreps_id_c',NULL); INSERT INTO `fields_meta_data` 
(`id`,`name`,`vname`,`comments`,`help`,`custom_module`,`type`,`len`,`required`,`default_value`,`date_modified`,`deleted`,`audited`,`massupdate`,`duplicate_merge`,`reportable`,`importable`,`ext1`,`ext2`,`ext3`,`ext4`) 
VALUES ('Contactsaccount_phone_c','account_phone_c','LBL_ACCOUNT_PHONE',NULL,NULL,'Contacts','varchar',255,0,NULL,'2017-11-09 01:11:26',0,0,0,0,1,'false',NULL,NULL,NULL,NULL);
