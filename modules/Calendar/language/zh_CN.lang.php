<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/



















$mod_strings = array (
  'LBL_MODULE_ACTION' => '查看',
  'LBL_MODULE_NAME' => '日程安排',
  'LBL_MODULE_TITLE' => '日程安排',
  'LNK_NEW_CALL' => '安排电话',
  'LNK_NEW_MEETING' => '安排会议',
  'LNK_NEW_APPOINTMENT' => '新增约会',
  'LNK_NEW_TASK' => '新增任务',
  'LNK_CALL_LIST' => '电话',
  'LNK_MEETING_LIST' => '会议',
  'LNK_TASK_LIST' => '任务',
  'LNK_VIEW_CALENDAR' => '今天',
  'LNK_IMPORT_CALLS' => '导入电话',
  'LNK_IMPORT_MEETINGS' => '导入会议',
  'LNK_IMPORT_TASKS' => '导入任务',
  'LBL_MONTH' => '月',
  'LBL_DAY' => '日',
  'LBL_YEAR' => '年',
  'LBL_WEEK' => '周',
  'LBL_PREVIOUS_MONTH' => '上月',
  'LBL_PREVIOUS_DAY' => '昨天',
  'LBL_PREVIOUS_YEAR' => '去年',
  'LBL_PREVIOUS_WEEK' => '上周',
  'LBL_NEXT_MONTH' => '下月',
  'LBL_NEXT_DAY' => '明天',
  'LBL_NEXT_YEAR' => '明年',
  'LBL_NEXT_WEEK' => '下周',
  'LBL_AM' => '上午',
  'LBL_PM' => '下午',
  'LBL_SCHEDULED' => '已安排',
  'LBL_BUSY' => '忙碌',
  'LBL_CONFLICT' => '冲突',
  'LBL_USER_CALENDARS' => '用户日程表',
  'LBL_SHARED' => '共享',
  'LBL_PREVIOUS_SHARED' => '上页',
  'LBL_NEXT_SHARED' => '下一步',
  'LBL_SHARED_CAL_TITLE' => '共享日程安排',
  'LBL_USERS' => '用户',
  'LBL_REFRESH' => '更新',
  'LBL_EDIT_USERLIST' => '用户列表',
  'LBL_SELECT_USERS' => '选择在日历上显示的用户',
  'LBL_FILTER_BY_TEAM' => '按组别筛选用户列表',
  'LBL_ASSIGNED_TO_NAME' => '分配给',
  'LBL_DATE' => '开始日期和时间',  
  'LBL_CREATE_MEETING' => '安排会议',
  'LBL_CREATE_CALL' => '电话记录',  
  'LBL_HOURS_ABBREV' => 'h',
  'LBL_MINS_ABBREV' => 'm',
  'LBL_EDIT' => '编辑',
  'LBL_SELECT_USERS' => '请选择共享用户',
  'LBL_FILTER_BY_TEAM' => '通过团队过滤用户列表:',
  'LBL_YES' => '是',
  'LBL_NO' => '否',
  'LBL_SETTINGS' => '设置',
  'LBL_CREATE_NEW_RECORD' => '创建活动',
  'LBL_LOADING' => '连载中 ......',
  'LBL_SAVING' => '保存中 ......',
  'LBL_SENDING_INVITES' => '保存中 & 正在发送邀请 .....',
  'LBL_CONFIRM_REMOVE' => '您确定要删除该记录吗',
  'LBL_CONFIRM_REMOVE_ALL_RECURRING' => '您确定要移除所有的重复记录吗?',
  'LBL_EDIT_RECORD' => '编辑活动',
  'LBL_ERROR_SAVING' => '保存出错',
  'LBL_ERROR_LOADING' => '连载出错',
  'LBL_GOTO_DATE' => '进入日期',
  'NOTICE_DURATION_TIME' => '持续时间需大于0',
  'LBL_STYLE_BASIC' => '初级',
  'LBL_STYLE_ADVANCED' => '高级',

  'LBL_INFO_TITLE' => '详情',
  'LBL_INFO_DESC' => '描述',
  'LBL_INFO_START_DT' => '开始日期',
  'LBL_INFO_DUE_DT' => '截止日期',
  'LBL_INFO_DURATION' => '持续时间',
  'LBL_INFO_NAME' => '主题',
  'LBL_INFO_RELATED_TO' => '关联到',

  'LBL_NO_USER' => '没有匹配项：分配给',
  'LBL_SUBJECT' => '主题',
  'LBL_DURATION' => '持续时间',
  'LBL_STATUS' => '状态',
  'LBL_DATE_TIME' => '日期和时间',
  'LBL_SETTINGS_TITLE' => '设置',
  'LBL_SETTINGS_DISPLAY_TIMESLOTS' => '在天和周查看栏显示时间段:',
  'LBL_SETTINGS_TIME_STARTS'=>'开始时间:', 
  'LBL_SETTINGS_TIME_ENDS'=>'结束时间:', 
  'LBL_SETTINGS_CALENDAR_STYLE' => '日历类型:',
  'LBL_SETTINGS_CALLS_SHOW' => '显示电话:',
  'LBL_SETTINGS_TASKS_SHOW' => '显示任务:', 
  'LBL_ASSIGNED_TO_NAME' => '负责人',
  'LBL_DATE' => '开始日期和时间',
  'LBL_SAVE_BUTTON' => '保存',
  'LBL_DELETE_BUTTON' => '删除',
  'LBL_APPLY_BUTTON' => '应用',
  'LBL_SEND_INVITES' => '发送邀请',
  'LBL_CANCEL_BUTTON' => '取消',
  'LBL_CLOSE_BUTTON' => '关闭',

  'LBL_GENERAL_TAB' => '细节',
  'LBL_PARTICIPANTS_TAB' =>'受邀者',
	'LBL_REPEAT_TAB' => '事件',	
	
	'LBL_REPEAT_TYPE' => '重复',
	'LBL_REPEAT_INTERVAL' => '每个',
	'LBL_REPEAT_END' => '结束',	
	'LBL_REPEAT_END_AFTER' => '之后',
	'LBL_REPEAT_OCCURRENCES' => '事件',
	'LBL_REPEAT_END_BY' => '通过',	
	'LBL_REPEAT_DOW' => '开启',	
	'LBL_REPEAT_UNTIL' => '重复直到',
	'LBL_REPEAT_COUNT' => '事件数量',
	'LBL_REPEAT_LIMIT_ERROR' => '您的请求将被创建多于$的限制会议.',
	
	'LBL_EDIT_ALL_RECURRENCES' => '编辑所有事件',
	'LBL_REMOVE_ALL_RECURRENCES' => '删除所有事件',
	
	'LBL_DATE_END_ERROR' => '结束日期前于开始日期',
);

$mod_list_strings = array(
	'repeat_types' => 
	array(
		''	=>	'无',
		'Daily'	=>	'每日',
		'Weekly' =>	'每周',
		'Monthly' =>'每月',
		'Yearly' =>	'每年',
	),
	'dom_cal_weekdays'=>
		array(
			"周日",
			"周一",
			"周二",
			"周三",
			"周四",
			"周五",
			"周六",
		),
	'dom_cal_weekdays_long'=>
		array(
			"周日",
			"周一",
			"周二",
			"周三",
			"周四",
			"周五",
			"周六",
		),
	'dom_cal_month'=>
		array(
			"",
			"一月",
			"二月",
			"三月",
			"四月",
			"五月",
			"六月",
			"七月",
			"八月",
			"九月",
			"十月",
			"十一月",
			"十二月",
		),
	'dom_cal_month_long'=>
		array(
			"",
			"一月",
			"二月",
			"三月",
			"四月",
			"五月",
			"六月",
			"七月",
			"八月",
			"九月",
			"十月",
			"十一月",
			"十二月",
		),
);
?>
