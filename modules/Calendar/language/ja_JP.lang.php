<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
 
$mod_strings = array (
	'LBL_MODULE_NAME' => 'カレンダー',
	'LBL_MODULE_NAME_SINGULAR' => 'カレンダー',
	'LBL_MODULE_TITLE' => 'カレンダー',
	'LNK_NEW_CALL' => '電話作成',
	'LNK_NEW_MEETING' => '会議作成',
	'LNK_NEW_APPOINTMENT' => 'アポイント作成',
	'LNK_NEW_TASK' => 'タスク作成',
	'LNK_CALL_LIST' => '電話',
	'LNK_MEETING_LIST' => '会議',
	'LNK_TASK_LIST' => 'タスク',
	'LNK_VIEW_CALENDAR' => '今日',
	'LNK_IMPORT_CALLS' => '電話のインポート',
	'LNK_IMPORT_MEETINGS' => '会議のインポート',
	'LNK_IMPORT_TASKS' => 'タスクのインポート',
	'LBL_MONTH' => '月',
	'LBL_DAY' => '日',
	'LBL_YEAR' => '年',
	'LBL_WEEK' => '週',
	'LBL_PREVIOUS_MONTH' => '前月',
	'LBL_PREVIOUS_DAY' => '前日',
	'LBL_PREVIOUS_YEAR' => '前年',
	'LBL_PREVIOUS_WEEK' => '前週',
	'LBL_NEXT_MONTH' => '翌月',
	'LBL_NEXT_DAY' => '翌日',
	'LBL_NEXT_YEAR' => '翌年',
	'LBL_NEXT_WEEK' => '翌週',
	'LBL_AM' => 'AM',
	'LBL_PM' => 'PM',
	'LBL_SCHEDULED' => 'スケジュール済み',
	'LBL_BUSY' => '予定あり',
	'LBL_CONFLICT' => '他のスケジュールと重複',
	'LBL_USER_CALENDARS' => 'ユーザのカレンダー',
	'LBL_SHARED' => '共有',
	'LBL_PREVIOUS_SHARED' => '前週',
	'LBL_NEXT_SHARED' => '翌週',
	'LBL_SHARED_CAL_TITLE' => '共有カレンダー',
	'LBL_USERS' => 'アサイン先',
	'LBL_REFRESH' => '更新',
	'LBL_EDIT_USERLIST' => 'ユーザ',
	'LBL_SELECT_USERS' => '表示するユーザを選択',
	'LBL_FILTER_BY_TEAM' => '表示するチームを選択:',
	'LBL_ASSIGNED_TO_NAME' => 'アサイン先',
	'LBL_DATE' => '開始日時',  
	'LBL_CREATE_MEETING' => '会議作成',
	'LBL_CREATE_CALL' => '電話作成',
	'LBL_HOURS_ABBREV' => '時間',
	'LBL_MINS_ABBREV' => '分',


	'LBL_YES' => 'はい',
	'LBL_NO' => 'いいえ',
	'LBL_SETTINGS' => '設定',
	'LBL_CREATE_NEW_RECORD' => 'アクティビティ作成',
    'LBL_CREATE_NEW_CALL' => '訪問を作成',
    'LBL_CREATING_NEW_ACTIVITY' => '新しい会議を作成しています。<a href="javascript:void(0);" data-action="create-task">Create a task</a> もしくは<a href="javascript:void(0);" data-action="schedule-call">Schedule a call</a>したいですか',
	'LBL_LOADING' => '読み込み中.....',
	'LBL_SAVING' => '保存中.....',
	'LBL_SENDING_INVITES' => '保存＆招待送信中.....',
	'LBL_CONFIRM_REMOVE' => '本当にこのレコードをはずしてよいですか？',
	'LBL_CONFIRM_REMOVE_ALL_RECURRING' => '本当にこの関連レコードをすべてはずしてよいですか？',
	'LBL_EDIT_RECORD' => 'アクティビティを編集',
    'LBL_EDIT_CALL' => '訪問を編集',
	'LBL_ERROR_SAVING' => '保存中にエラー',
    'LBL_NO_ACCESS' => 'アクセスできません。',
	'LBL_ERROR_LOADING' => '読み込み中にエラー',
	'LBL_GOTO_DATE' => '日へ移動',
	'NOTICE_DURATION_TIME' => '時間は0以上である必要があります',
	'LBL_STYLE_BASIC' => '基本',
	'LBL_STYLE_ADVANCED' => '高度な',

	'LBL_INFO_TITLE' => '詳細情報',
	'LBL_INFO_DESC' => '詳細',
	'LBL_INFO_START_DT' => '開始日',
	'LBL_INFO_DUE_DT' => '期限日',
	'LBL_INFO_DURATION' => '時間',
	'LBL_INFO_NAME' => '件名',
	'LBL_INFO_RELATED_TO' => '関連先',

	'LBL_NO_USER' => 'フィールドにマッチしません: アサイン先',
	'LBL_SUBJECT' => '件名',
	'LBL_DURATION' => '時間',
	'LBL_STATUS' => 'ステータス',
	'LBL_DATE_TIME' => '日時',


	'LBL_SETTINGS_TITLE' => '設定',
	'LBL_SETTINGS_DISPLAY_TIMESLOTS' => '日、週ビューにタイムスロットを表示',
	'LBL_SETTINGS_TIME_STARTS'=>'開始時:', 
	'LBL_SETTINGS_TIME_ENDS'=>'終了時:', 
	'LBL_SETTINGS_CALLS_SHOW' => '電話を表示',
	'LBL_SETTINGS_TASKS_SHOW' => 'タスクを表示', 

	'LBL_SAVE_BUTTON' => '保存',
	'LBL_DELETE_BUTTON' => '削除',
	'LBL_APPLY_BUTTON' => '適用',
	'LBL_SEND_INVITES' => '保存＆招待送信',
	'LBL_CANCEL_BUTTON' => 'キャンセル',
	'LBL_CLOSE_BUTTON' => '完了',

	'LBL_GENERAL_TAB' => '詳細',
	'LBL_PARTICIPANTS_TAB' => '参加者',
	'LBL_REPEAT_TAB' => '定期的な予定',	
	
	'LBL_REPEAT_TYPE' => '周期',
	'LBL_REPEAT_INTERVAL' => '間隔',
	'LBL_REPEAT_END' => '作成する予定',	
	'LBL_REPEAT_END_AFTER' => '以下の回数まで:',
	'LBL_REPEAT_OCCURRENCES' => '回',
	'LBL_REPEAT_END_BY' => '以下の日まで:',	
	'LBL_REPEAT_DOW' => '開催曜日',	
	'LBL_REPEAT_UNTIL' => '以下まで繰り返し',
	'LBL_REPEAT_COUNT' => '定期的な予定の数',
	'LBL_RECURRING_LIMIT_ERROR' => '重複できる上限 $limit を超えたため、重複の $moduleTitle をスケジュールすることはできません。　',
	
	'LBL_EDIT_ALL_RECURRENCES' => '定期的な予定をすべて編集',
	'LBL_REMOVE_ALL_RECURRENCES' => '定期的な予定をすべて削除',

	'LBL_DATE_END_ERROR' => '最終日が開始日より前です',
	'ERR_YEAR_BETWEEN' => 'すみません。カレンダーはリクエストされた年を扱う事ができません。<br />年は1970から2037までである必要があります。',
	'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: このビューでは設定されていません',

    'LBL_CALENDAR_EVENT_LIMIT_EXCEEDED' => "定期的な{0}イベントカウントが制限を超えました",
    'LBL_CALENDAR_EVENT_NOT_A_RECURRING_EVENT' => "{0}定期的なイベントではありません",
    'LBL_CALENDAR_EVENT_NOT_A_PARENT_OCCURRENCE' => "{0}元の再発ではない",
    'LBL_CALENDAR_EVENT_RECURRENCE_MODULE_NOT_SUPPORTED' => "{0}は定期的なイベントモジュールとして認識されていません",

);

$mod_list_strings = array(
	'dom_cal_weekdays'=>
		array(
			"Sun",
			"Mon",
			"Tue",
			"Wed",
			"Thu",
			"Fri",
			"Sat",
		),
	'dom_cal_weekdays_long'=>
		array(
			"Sunday",
			"Monday",
			"Tuesday",
			"Wednesday",
			"Thursday",
			"Friday",
			"Saturday",
		),
	'dom_cal_month'=>
		array(
			"",
			"Jan",
			"Feb",
			"Mar",
			"Apr",
			"May",
			"Jun",
			"Jul",
			"Aug",
			"Sep",
			"Oct",
			"Nov",
			"Dec",
		),
	'dom_cal_month_long'=>
		array(
			"",
			"January",
			"February",
			"March",
			"April",
			"May",
			"June",
			"July",
			"August",
			"September",
			"October",
			"November",
			"December",
		),
);
