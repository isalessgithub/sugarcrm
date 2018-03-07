/*
-- Query: select pf.*
from sugarcrm_prod.fields_meta_data pf
left join sugarcrm_test.fields_meta_data tf on tf.id = pf.id
where tf.id is null
-- Date: 2018-03-02 11:36
*/
INSERT INTO `fields_meta_data` (`id`,`name`,`vname`,`comments`,`help`,`custom_module`,`type`,`len`,`required`,`default_value`,`date_modified`,`deleted`,`audited`,`massupdate`,`duplicate_merge`,`reportable`,`importable`,`ext1`,`ext2`,`ext3`,`ext4`) VALUES ('ATC_ISSCampaignscampaign_task_c','campaign_task_c','LBL_CAMPAIGN_TASK',NULL,NULL,'ATC_ISSCampaigns','relate',255,0,NULL,'2017-05-16 23:40:09',0,0,0,1,1,'true',NULL,'Tasks','task_id_c',NULL);
INSERT INTO `fields_meta_data` (`id`,`name`,`vname`,`comments`,`help`,`custom_module`,`type`,`len`,`required`,`default_value`,`date_modified`,`deleted`,`audited`,`massupdate`,`duplicate_merge`,`reportable`,`importable`,`ext1`,`ext2`,`ext3`,`ext4`) VALUES ('ATC_ISSCampaignscampaign_territory_c','campaign_territory_c','LBL_CAMPAIGN_TERRITORY',NULL,NULL,'ATC_ISSCampaigns','varchar',255,0,NULL,'2018-01-23 18:59:54',0,1,0,1,1,'true',NULL,NULL,NULL,NULL);
INSERT INTO `fields_meta_data` (`id`,`name`,`vname`,`comments`,`help`,`custom_module`,`type`,`len`,`required`,`default_value`,`date_modified`,`deleted`,`audited`,`massupdate`,`duplicate_merge`,`reportable`,`importable`,`ext1`,`ext2`,`ext3`,`ext4`) VALUES ('ATC_ISSCampaignsface_to_face_pref_c','face_to_face_pref_c','LBL_FACE_TO_FACE_PREF',NULL,'If this box is checked, the Client prefers Face to Face meetings for this campaign.','ATC_ISSCampaigns','bool',255,0,'0','2017-05-16 23:24:26',0,0,0,1,1,'true',NULL,NULL,NULL,NULL);
INSERT INTO `fields_meta_data` (`id`,`name`,`vname`,`comments`,`help`,`custom_module`,`type`,`len`,`required`,`default_value`,`date_modified`,`deleted`,`audited`,`massupdate`,`duplicate_merge`,`reportable`,`importable`,`ext1`,`ext2`,`ext3`,`ext4`) VALUES ('ATC_ISSCampaignstask_id_c','task_id_c','LBL_CAMPAIGN_TASK_TASK_ID',NULL,NULL,'ATC_ISSCampaigns','id',36,0,NULL,'2017-05-16 23:40:09',0,0,0,1,0,'true',NULL,NULL,NULL,NULL);
