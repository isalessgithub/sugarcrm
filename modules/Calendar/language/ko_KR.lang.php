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
	'LBL_MODULE_NAME' => '캘린더',
	'LBL_MODULE_NAME_SINGULAR' => '캘린더',
	'LBL_MODULE_TITLE' => '캘린더',
	'LNK_NEW_CALL' => '전화 일정잡기',
	'LNK_NEW_MEETING' => '회의 일정잡기',
	'LNK_NEW_APPOINTMENT' => '일정 추가하기',
	'LNK_NEW_TASK' => '작업 추가하기',
	'LNK_CALL_LIST' => '전화',
	'LNK_MEETING_LIST' => '회의',
	'LNK_TASK_LIST' => '작업',
	'LNK_VIEW_CALENDAR' => '오늘',
	'LNK_IMPORT_CALLS' => '전화내역 가져오기',
	'LNK_IMPORT_MEETINGS' => '회의내역 가져오기',
	'LNK_IMPORT_TASKS' => '작업내역 가져오기',
	'LBL_MONTH' => '월',
	'LBL_DAY' => '일',
	'LBL_YEAR' => '연',
	'LBL_WEEK' => '주',
	'LBL_PREVIOUS_MONTH' => '이전달',
	'LBL_PREVIOUS_DAY' => '어제',
	'LBL_PREVIOUS_YEAR' => '작년',
	'LBL_PREVIOUS_WEEK' => '지난주',
	'LBL_NEXT_MONTH' => '다음달',
	'LBL_NEXT_DAY' => '내일',
	'LBL_NEXT_YEAR' => '내년',
	'LBL_NEXT_WEEK' => '다음주',
	'LBL_AM' => '오전',
	'LBL_PM' => '오후',
	'LBL_SCHEDULED' => '예약됨',
	'LBL_BUSY' => '바쁨',
	'LBL_CONFLICT' => '중복됨',
	'LBL_USER_CALENDARS' => '사용자 캘린더',
	'LBL_SHARED' => '공유됨',
	'LBL_PREVIOUS_SHARED' => '이전',
	'LBL_NEXT_SHARED' => '다음',
	'LBL_SHARED_CAL_TITLE' => '캘린더공유',
	'LBL_USERS' => '사용자',
	'LBL_REFRESH' => '새로고침',
	'LBL_EDIT_USERLIST' => '사용자목록',
	'LBL_SELECT_USERS' => '캘린더를 공유할 사용자 선택',
	'LBL_FILTER_BY_TEAM' => '팀으로 필터링',
	'LBL_ASSIGNED_TO_NAME' => '담당자',
	'LBL_DATE' => '시작 날짜/시간',  
	'LBL_CREATE_MEETING' => '회의일정 추가하기',
	'LBL_CREATE_CALL' => '전화일정 기록하기',
	'LBL_HOURS_ABBREV' => '시',
	'LBL_MINS_ABBREV' => '분',


	'LBL_YES' => '예',
	'LBL_NO' => '아니요',
	'LBL_SETTINGS' => '설정',
	'LBL_CREATE_NEW_RECORD' => '새 활동 추가하기',
    'LBL_CREATE_NEW_CALL' => '통화 생성',
    'LBL_CREATING_NEW_ACTIVITY' => '새로운  회의 생성 중입니다. 작업을 생성이나 통화 예약을 원하셨나요?',
	'LBL_LOADING' => '로딩중...',
	'LBL_SAVING' => '저장중...',
	'LBL_SENDING_INVITES' => '저장하고 초대장 발송중...',
	'LBL_CONFIRM_REMOVE' => '정말 선택된 자료를 삭제하시겠습니까?',
	'LBL_CONFIRM_REMOVE_ALL_RECURRING' => '정말 선택된 반복 일정을 삭제하시겠습니까?',
	'LBL_EDIT_RECORD' => '활동 수정',
    'LBL_EDIT_CALL' => '통화 편집',
	'LBL_ERROR_SAVING' => '저장중에 문제가 발생하였습니다.',
    'LBL_NO_ACCESS' => '이 보고서에 허용 제한에 의해 접속할 수 없습니다.',
	'LBL_ERROR_LOADING' => '로딩중에 문제가 발생하였습니다.',
	'LBL_GOTO_DATE' => '해당일로 이동',
	'NOTICE_DURATION_TIME' => '시작시간은 마감시간보다 이전이어야 합니다.',
	'LBL_STYLE_BASIC' => '기본',
	'LBL_STYLE_ADVANCED' => '고급',

	'LBL_INFO_TITLE' => '추가정보',
	'LBL_INFO_DESC' => '설명',
	'LBL_INFO_START_DT' => '시작일',
	'LBL_INFO_DUE_DT' => '마감일',
	'LBL_INFO_DURATION' => '기간',
	'LBL_INFO_NAME' => '제목',
	'LBL_INFO_RELATED_TO' => '관련된 정보',

	'LBL_NO_USER' => '다음항목이 일치하지 않습니다: 담당자',
	'LBL_SUBJECT' => '제목',
	'LBL_DURATION' => '기간',
	'LBL_STATUS' => '상태',
	'LBL_DATE_TIME' => '날짜와 시간',


	'LBL_SETTINGS_TITLE' => '설정',
	'LBL_SETTINGS_DISPLAY_TIMESLOTS' => '시간 슬롯을 주와 일로 표시',
	'LBL_SETTINGS_TIME_STARTS'=>'시작 시간', 
	'LBL_SETTINGS_TIME_ENDS'=>'완료 시간', 
	'LBL_SETTINGS_CALLS_SHOW' => '전화 표시여부',
	'LBL_SETTINGS_TASKS_SHOW' => '작업 표시여부', 

	'LBL_SAVE_BUTTON' => '저장하기',
	'LBL_DELETE_BUTTON' => '삭제하기',
	'LBL_APPLY_BUTTON' => '적용하기',
	'LBL_SEND_INVITES' => '저장후 초대하기',
	'LBL_CANCEL_BUTTON' => '취소',
	'LBL_CLOSE_BUTTON' => '마감',

	'LBL_GENERAL_TAB' => '세부사항',
	'LBL_PARTICIPANTS_TAB' => '초대자 목록',
	'LBL_REPEAT_TAB' => '반복',	
	
	'LBL_REPEAT_TYPE' => '반복',
	'LBL_REPEAT_INTERVAL' => '매',
	'LBL_REPEAT_END' => '완료',	
	'LBL_REPEAT_END_AFTER' => '후',
	'LBL_REPEAT_OCCURRENCES' => '복귀',
	'LBL_REPEAT_END_BY' => '다음 기간 동안:',	
	'LBL_REPEAT_DOW' => '다음 기간 까지:',	
	'LBL_REPEAT_UNTIL' => '다음 기간까지 반복',
	'LBL_REPEAT_COUNT' => '반복 횟수',
	'LBL_RECURRING_LIMIT_ERROR' => '허용된 반복 개수를 초과하므로 예약이 완료 될 수 없습니다.',
	
	'LBL_EDIT_ALL_RECURRENCES' => '모든 반복일정 편집하기',
	'LBL_REMOVE_ALL_RECURRENCES' => '모든 반복일정 삭제',

	'LBL_DATE_END_ERROR' => '완료 날짜는 시작날짜 이후로만 설정가능합니다.',
	'ERR_YEAR_BETWEEN' => '죄송합니다. 요청하신 연도를 관리할수 없습니다. 연도는 반드시 1970년부터 2037까지여야 합니다.',
	'ERR_NEIGHBOR_DATE' => '이 창을 위해 지정되지 않았습니다.',

    'LBL_CALENDAR_EVENT_LIMIT_EXCEEDED' => "재발 {0} 작업량이 제한 초과",
    'LBL_CALENDAR_EVENT_NOT_A_RECURRING_EVENT' => "{0}은 재발 작업이 아님",
    'LBL_CALENDAR_EVENT_NOT_A_PARENT_OCCURRENCE' => "{0}은 재발이 아님",
    'LBL_CALENDAR_EVENT_RECURRENCE_MODULE_NOT_SUPPORTED' => "{0}은 재발 작업 모듈로 간주되지 않음",

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
