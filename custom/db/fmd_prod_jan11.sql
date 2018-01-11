/* -- Query: select pf.* from sugarcrm_prod.fields_meta_data pf left join sugarcrm_test.fields_meta_data tf on tf.id = pf.id where tf.id is null -- Date: 2018-01-11 17:34 */ INSERT INTO 
`fields_meta_data` 
(`id`,`name`,`vname`,`comments`,`help`,`custom_module`,`type`,`len`,`required`,`default_value`,`date_modified`,`deleted`,`audited`,`massupdate`,`duplicate_merge`,`reportable`,`importable`,`ext1`,`ext2`,`ext3`,`ext4`) 
VALUES ('Tasksproject_status_c','project_status_c','LBL_PROJECT_STATUS',NULL,NULL,'Tasks','enum',100,0,'open','2018-01-10 
00:20:01',0,1,1,1,1,'true','project_status_list',NULL,NULL,NULL);
