/* -- Query: select pf.* from sugarcrm_test.fields_meta_data pf left join sugarcrm_prod.fields_meta_data tf on tf.id = pf.id where tf.id is null -- Date: 2018-01-09 17:34 */ INSERT INTO 
`fields_meta_data` 
(`id`,`name`,`vname`,`comments`,`help`,`custom_module`,`type`,`len`,`required`,`default_value`,`date_modified`,`deleted`,`audited`,`massupdate`,`duplicate_merge`,`reportable`,`importable`,`ext1`,`ext2`,`ext3`,`ext4`) 
VALUES ('Tasksfrom_list_c','from_list_c','LBL_FROM_LIST',NULL,NULL,'Tasks','varchar',255,0,NULL,'2018-01-02 20:51:32',0,0,0,0,1,'false',NULL,NULL,NULL,NULL);
