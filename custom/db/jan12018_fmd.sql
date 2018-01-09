/* -- Query: select pf.* from sugarcrm_test.fields_meta_data pf left join sugarcrm_prod.fields_meta_data tf on tf.id = pf.id where tf.id is null -- Date: 2018-01-01 11:03 */ 
INSERT INTO `fields_meta_data` 
(`id`,`name`,`vname`,`comments`,`help`,`custom_module`,`type`,`len`,`required`,`default_value`,`date_modified`,`deleted`,`audited`,`massupdate`,`duplicate_merge`,`reportable`,`importable`,`ext1`,`ext2`,`ext3`,`ext4`) 
VALUES ('Contactsaccount_phone_c','account_phone_c','LBL_ACCOUNT_PHONE',NULL,NULL,'Contacts','varchar',255,0,NULL,'2017-11-09 01:11:26',0,0,0,0,1,'false',NULL,NULL,NULL,NULL);
