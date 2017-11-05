id,name,vname,comments,help,custom_module,type,len,required,default_value,date_modified,deleted,audited,massupdate,duplicate_merge,reportable,importable,ext1,ext2,ext3,ext4
ATC_Appointmentsdm_qualified_c,dm_qualified_c,LBL_DM_QUALIFIED,NULL,NULL,ATC_Appointments,enum,100,0,NULL,"2017-11-01 20:23:54",0,1,1,1,1,true,yes_no_blank,NULL,NULL,NULL
ATC_ISSCampaignssales_notes_c,sales_notes_c,LBL_SALES_NOTES,NULL,NULL,ATC_ISSCampaigns,text,NULL,0,NULL,"2017-10-13 15:50:25",0,1,0,1,1,true,NULL,4,20,NULL
Tasksproj_start_date_c,proj_start_date_c,LBL_PROJ_START_DATE,NULL,NULL,Tasks,date,NULL,0,now,"2017-10-13 15:35:41",0,1,1,1,1,true,NULL,NULL,NULL,NULL
Accountsct_proj_type_c,ct_proj_type_c,LBL_CT_PROJ_TYPE,NULL,NULL,Accounts,enum,100,0,NULL,"2017-10-13 14:48:44",0,1,1,1,1,true,proj_area_list,NULL,NULL,NULL
ProspectListstl_img_c,tl_img_c,LBL_TL_IMG,NULL,NULL,ProspectLists,image,255,0,NULL,"2017-10-13 02:21:07",0,0,0,1,1,true,NULL,120,NULL,NULL
ATC_Appointmentsclientrep_email2_c,clientrep_email2_c,LBL_CLIENTREP_EMAIL2,NULL,NULL,ATC_Appointments,varchar,255,0,NULL,"2017-10-11 16:58:52",0,0,0,1,1,true,NULL,NULL,NULL,NULL
Projectproj_name_c,proj_name_c,LBL_PROJ_NAME,NULL,NULL,Project,varchar,255,1,NULL,"2017-10-11 14:25:26",0,1,0,1,1,true,NULL,NULL,NULL,NULL
Projectproj_details_c,proj_details_c,LBL_PROJ_DETAILS,NULL,NULL,Project,text,NULL,0,NULL,"2017-10-11 14:25:00",0,1,0,1,1,true,NULL,4,20,NULL
Projectuser_id_c,user_id_c,LBL_PROJ_ASSIST_FROM_USER_ID,NULL,NULL,Project,id,36,0,NULL,"2017-10-11 14:24:24",0,0,0,1,0,true,NULL,NULL,NULL,NULL
Projectproj_assist_from_c,proj_assist_from_c,LBL_PROJ_ASSIST_FROM,NULL,NULL,Project,relate,255,0,NULL,"2017-10-11 14:24:24",0,1,0,1,1,true,NULL,Users,user_id_c,NULL
Projectproj_start_date_c,proj_start_date_c,LBL_PROJ_START_DATE,NULL,NULL,Project,date,NULL,0,"+3 months","2017-10-11 14:23:42",0,1,1,1,1,true,NULL,NULL,NULL,NULL
Projectproj_area_c,proj_area_c,LBL_PROJ_AREA,NULL,NULL,Project,enum,100,0,NULL,"2017-10-11 14:22:45",0,1,1,1,1,true,proj_area_list,NULL,NULL,NULL
Projectcontact_id_c,contact_id_c,LBL_PROJ_PROSPECT_CONTACT_ID,NULL,NULL,Project,id,36,0,NULL,"2017-10-11 14:18:57",0,0,0,1,0,true,NULL,NULL,NULL,NULL
Projectproj_prospect_c,proj_prospect_c,LBL_PROJ_PROSPECT,NULL,NULL,Project,relate,255,1,NULL,"2017-10-11 14:18:57",0,1,0,1,1,true,NULL,Contacts,contact_id_c,NULL
Projectaccount_id_c,account_id_c,LBL_PROJECT_ACCOUNT_ACCOUNT_ID,NULL,NULL,Project,id,36,0,NULL,"2017-10-11 14:17:46",0,0,0,1,0,true,NULL,NULL,NULL,NULL
Projectproject_account_c,project_account_c,LBL_PROJECT_ACCOUNT,NULL,NULL,Project,relate,255,1,NULL,"2017-10-11 14:17:46",0,1,0,1,1,true,NULL,Accounts,account_id_c,NULL
ATC_Appointmentsclientrep_email1_c,clientrep_email1_c,LBL_CLIENTREP_EMAIL1,NULL,NULL,ATC_Appointments,varchar,255,1,NULL,"2017-10-09 16:33:03",0,1,0,0,1,false,NULL,NULL,NULL,NULL
Accountssto_inc_c,sto_inc_c,LBL_STO_INC,NULL,NULL,Accounts,text,NULL,0,NULL,"2017-10-02 16:20:07",0,0,0,1,1,true,NULL,4,20,NULL
Accountssto_pd_c,sto_pd_c,LBL_STO_PD,NULL,NULL,Accounts,varchar,255,0,NULL,"2017-10-02 16:12:42",0,0,0,1,1,true,NULL,NULL,NULL,NULL
Accountssto_psd_c,sto_psd_c,LBL_STO_PSD,NULL,NULL,Accounts,date,NULL,0,NULL,"2017-10-02 16:12:26",0,0,1,1,1,true,NULL,NULL,NULL,NULL
Accountssto_ast_c,sto_ast_c,LBL_STO_AST,NULL,NULL,Accounts,relate,255,0,NULL,"2017-10-02 16:11:06",0,0,0,1,1,true,NULL,Users,user_id_c,NULL
Accountsuser_id_c,user_id_c,LBL_STO_AST_USER_ID,NULL,NULL,Accounts,id,36,0,NULL,"2017-10-02 16:11:06",0,0,0,1,0,true,NULL,NULL,NULL,NULL
Accountssto_prs_c,sto_prs_c,LBL_STO_PRS,NULL,NULL,Accounts,relate,255,0,NULL,"2017-10-02 16:10:27",0,0,0,1,1,true,NULL,Contacts,contact_id_c,NULL
Accountscontact_id_c,contact_id_c,LBL_STO_PRS_CONTACT_ID,NULL,NULL,Accounts,id,36,0,NULL,"2017-10-02 16:10:27",0,0,0,1,0,true,NULL,NULL,NULL,NULL
ATC_ISSCampaignsfrom_address_c,from_address_c,LBL_FROM_ADDRESS,NULL,NULL,ATC_ISSCampaigns,varchar,255,0,NULL,"2017-07-10 15:03:15",0,0,0,1,1,true,NULL,NULL,NULL,NULL
ATC_ISSCampaignsfrom_name_c,from_name_c,LBL_FROM_NAME,NULL,NULL,ATC_ISSCampaigns,varchar,255,0,NULL,"2017-07-10 15:03:00",0,0,0,1,1,true,NULL,NULL,NULL,NULL
