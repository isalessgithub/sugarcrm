/*
-- Query: select sugarcrm_test.fields_meta_data.*
from sugarcrm_test.fields_meta_data
left join sugarcrm_prod.fields_meta_data on sugarcrm_prod.fields_meta_data.id = sugarcrm_test.fields_meta_data.id where sugarcrm_prod.fields_meta_data.id is null
-- Date: 2017-12-09 09:52
*/
INSERT INTO `fields_meta_data` (`id`,`name`,`vname`,`comments`,`help`,`custom_module`,`type`,`len`,`required`,`default_value`,`date_modified`,`deleted`,`audited`,`massupdate`,`duplicate_merge`,`reportable`,`importable`,`ext1`,`ext2`,`ext3`,`ext4`) VALUES ('ATC_Appointmentsclient_bridge_c','client_bridge_c','LBL_CLIENT_BRIDGE',NULL,NULL,'ATC_Appointments','radioenum',100,1,'no','2017-11-27 21:11:20',0,1,1,1,1,'true','client_bridge_list',NULL,NULL,NULL);
