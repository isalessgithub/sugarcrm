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
	'LBL_MODULE_NAME' => 'Calendar',
	'LBL_MODULE_NAME_SINGULAR' => 'Calendar',
	'LBL_MODULE_TITLE' => 'Calendar',
	'LNK_NEW_CALL' => 'Schedule Call',
	'LNK_NEW_MEETING' => 'Schedule Meeting',
	'LNK_NEW_APPOINTMENT' => 'Create Appointment',
	'LNK_NEW_TASK' => 'Create Task',
	'LNK_CALL_LIST' => 'Calls',
	'LNK_MEETING_LIST' => 'Meetings',
	'LNK_TASK_LIST' => 'Tasks',
	'LNK_VIEW_CALENDAR' => 'Today',
	'LNK_IMPORT_CALLS' => 'Import Calls',
	'LNK_IMPORT_MEETINGS' => 'Import Meetings',
	'LNK_IMPORT_TASKS' => 'Import Tasks',
	'LBL_MONTH' => 'Month',
	'LBL_DAY' => 'Day',
	'LBL_YEAR' => 'Year',
	'LBL_WEEK' => 'Week',
	'LBL_PREVIOUS_MONTH' => 'Previous Month',
	'LBL_PREVIOUS_DAY' => 'Previous Day',
	'LBL_PREVIOUS_YEAR' => 'Previous Year',
	'LBL_PREVIOUS_WEEK' => 'Previous Week',
	'LBL_NEXT_MONTH' => 'Next Month',
	'LBL_NEXT_DAY' => 'Next Day',
	'LBL_NEXT_YEAR' => 'Next Year',
	'LBL_NEXT_WEEK' => 'Next Week',
	'LBL_AM' => 'AM',
	'LBL_PM' => 'PM',
	'LBL_SCHEDULED' => 'Scheduled',
	'LBL_BUSY' => 'Busy',
	'LBL_CONFLICT' => 'Conflict',
	'LBL_USER_CALENDARS' => 'User Calendars',
	'LBL_SHARED' => 'Shared',
	'LBL_PREVIOUS_SHARED' => 'Previous',
	'LBL_NEXT_SHARED' => 'Next',
	'LBL_SHARED_CAL_TITLE' => 'Shared Calendar',
	'LBL_USERS' => 'Users',
	'LBL_REFRESH' => 'Refresh',
	'LBL_EDIT_USERLIST' => 'User List',
	'LBL_SELECT_USERS' => 'Select users for calendar display',
	'LBL_FILTER_BY_TEAM' => 'Filter user list by team:',
	'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
	'LBL_DATE' => 'Start Date & Time',  
	'LBL_CREATE_MEETING' => 'Schedule Meeting',
	'LBL_CREATE_CALL' => 'Log Call',
	'LBL_HOURS_ABBREV' => 'h',
	'LBL_MINS_ABBREV' => 'm',


	'LBL_YES' => 'Yes',
	'LBL_NO' => 'No',
	'LBL_SETTINGS' => 'Settings',
	'LBL_CREATE_NEW_RECORD' => 'Create Activity',
    'LBL_CREATE_NEW_CALL' => 'Create Call',
    'LBL_CREATING_NEW_ACTIVITY' => 'You are creating a new meeting. Did you want to <a href="javascript:void(0);" data-action="create-task">Create a task</a> or <a href="javascript:void(0);" data-action="schedule-call">Schedule a call</a>',
	'LBL_LOADING' => 'Loading ......',
	'LBL_SAVING' => 'Saving ......',
	'LBL_SENDING_INVITES' => 'Saving & Sending Invites .....',
	'LBL_CONFIRM_REMOVE' => 'Are you sure you want to remove the record?',
	'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Are you sure you want to remove all recurring records?',
	'LBL_EDIT_RECORD' => 'Edit Activity',
    'LBL_EDIT_CALL' => 'Edit Call',
	'LBL_ERROR_SAVING' => 'Error while saving',
    'LBL_NO_ACCESS' => 'You do not have access',
	'LBL_ERROR_LOADING' => 'Error while loading',
	'LBL_GOTO_DATE' => 'Goto Date',
	'NOTICE_DURATION_TIME' => 'Duration time must be greater than 0',
	'LBL_STYLE_BASIC' => 'Basic',
	'LBL_STYLE_ADVANCED' => 'Advanced',

	'LBL_INFO_TITLE' => 'Additional Details',
	'LBL_INFO_DESC' => 'Description',
	'LBL_INFO_START_DT' => 'Start Date',
	'LBL_INFO_DUE_DT' => 'Due Date',
	'LBL_INFO_DURATION' => 'Duration',
	'LBL_INFO_NAME' => 'Subject',
	'LBL_INFO_RELATED_TO' => 'Related to',

	'LBL_NO_USER' => 'No match for field: Assigned to',
	'LBL_SUBJECT' => 'Subject',
	'LBL_DURATION' => 'Duration',
	'LBL_STATUS' => 'Status',
	'LBL_DATE_TIME' => 'Date and Time',


	'LBL_SETTINGS_TITLE' => 'Settings',
	'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Display time slots in Day and Week views:',
	'LBL_SETTINGS_TIME_STARTS'=>'Start time:', 
	'LBL_SETTINGS_TIME_ENDS'=>'End time:', 
	'LBL_SETTINGS_CALLS_SHOW' => 'Show Calls:',
	'LBL_SETTINGS_TASKS_SHOW' => 'Show Tasks:', 

	'LBL_SAVE_BUTTON' => 'Save',
	'LBL_DELETE_BUTTON' => 'Delete',
	'LBL_APPLY_BUTTON' => 'Apply',
	'LBL_SEND_INVITES' => 'Save & Send Invites',
	'LBL_CANCEL_BUTTON' => 'Cancel',
	'LBL_CLOSE_BUTTON' => 'Close',

	'LBL_GENERAL_TAB' => 'Details',
	'LBL_PARTICIPANTS_TAB' => 'Invitees',
	'LBL_REPEAT_TAB' => 'Recurrence',	
	
	'LBL_REPEAT_TYPE' => 'Repeat',
	'LBL_REPEAT_INTERVAL' => 'Every',
	'LBL_REPEAT_END' => 'End',	
	'LBL_REPEAT_END_AFTER' => 'After',
	'LBL_REPEAT_OCCURRENCES' => 'recurrences',
	'LBL_REPEAT_END_BY' => 'By',	
	'LBL_REPEAT_DOW' => 'On',	
	'LBL_REPEAT_UNTIL' => 'Repeat Until',
	'LBL_REPEAT_COUNT' => 'Number of recurrences',
	'LBL_RECURRING_LIMIT_ERROR' => 'This recurring $moduleTitle cannot be scheduled because it exceeds the maximum allowed recurrence of $limit.',
	
	'LBL_EDIT_ALL_RECURRENCES' => 'Edit All Recurrences',
	'LBL_REMOVE_ALL_RECURRENCES' => 'Delete All Recurrences',

	'LBL_DATE_END_ERROR' => 'End date is before start date',
	'ERR_YEAR_BETWEEN' => 'Sorry, calendar cannot handle the year you requested<br>Year must be between 1970 and 2037',
	'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: not defined for this view',

    'LBL_CALENDAR_EVENT_LIMIT_EXCEEDED' => "Recurring {0} event count has exceeded the limit",
    'LBL_CALENDAR_EVENT_NOT_A_RECURRING_EVENT' => "{0} is not a recurring event",
    'LBL_CALENDAR_EVENT_NOT_A_PARENT_OCCURRENCE' => "{0} is not a parent recurrence",
    'LBL_CALENDAR_EVENT_RECURRENCE_MODULE_NOT_SUPPORTED' => "{0} is not recognized as a recurring event module",

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
