<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */


$mod_strings = array (
  'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: не е дефинирана за този изглед',
  'ERR_YEAR_BETWEEN' => 'Календарът не може да работи с посочената година<br>Годината трябва да бъде в периода между 1970 и 2037',
  'LBL_AM' => 'Сутрин',
  'LBL_APPLY_BUTTON' => 'Потвърди',
  'LBL_ASSIGNED_TO_NAME' => 'Отговорник',
  'LBL_BUSY' => 'Изпълняван',
  'LBL_CALENDAR_EVENT_LIMIT_EXCEEDED' => 'Регулярно повтарящото се събитие {0} превиши дефинирания лимит',
  'LBL_CALENDAR_EVENT_NOT_A_PARENT_OCCURRENCE' => '{0} не е родителско повторение',
  'LBL_CALENDAR_EVENT_NOT_A_RECURRING_EVENT' => '{0} не е регулярно повтарящо се събитие',
  'LBL_CALENDAR_EVENT_RECURRENCE_MODULE_NOT_SUPPORTED' => '{0} не се разпознава като модул, в който да бъдат дефинирани регулярно повтарящи се събития',
  'LBL_CANCEL_BUTTON' => 'Отмени',
  'LBL_CLOSE_BUTTON' => 'Затвори',
  'LBL_CONFIRM_REMOVE' => 'Сигурни ли сте, че искате да изтриете този запис?',
  'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Сигурни ли сте, че искате да премахнете периодично повтарящите се записи?',
  'LBL_CONFLICT' => 'Конфликт',
  'LBL_CREATE_CALL' => 'Планиране на обаждане',
  'LBL_CREATE_MEETING' => 'Насрочване на среща',
  'LBL_CREATE_NEW_CALL' => 'Създай обаждане',
  'LBL_CREATE_NEW_RECORD' => 'Въвеждане на дейност',
  'LBL_CREATING_NEW_ACTIVITY' => 'Вие насрочвате нова среща. Искахте ли да <a href="javascript:void(0);" data-action="create-task">Създадете задача</a> или да  <a href="javascript:void(0);" data-action="schedule-call">Насрочите обаждане</a>',
  'LBL_DATE' => 'Начален час и дата',
  'LBL_DATE_END_ERROR' => 'Въведенета крайна дата е преи началната',
  'LBL_DATE_TIME' => 'Дата и време',
  'LBL_DAY' => 'Ден',
  'LBL_DELETE_BUTTON' => 'Изтрий',
  'LBL_DURATION' => 'Продължителност:',
  'LBL_EDIT_ALL_RECURRENCES' => 'Редактирай всички повторения',
  'LBL_EDIT_CALL' => 'Редактирай обаждане',
  'LBL_EDIT_RECORD' => 'Редактирай дейността',
  'LBL_EDIT_USERLIST' => 'Списък с потребители',
  'LBL_ERROR_LOADING' => 'Грешка при зареждане',
  'LBL_ERROR_SAVING' => 'Грешка при запис',
  'LBL_FILTER_BY_TEAM' => 'Филтриране на списък с потребители по екип:',
  'LBL_GENERAL_TAB' => 'Допълнителна информация',
  'LBL_GOTO_DATE' => 'Премини към дата',
  'LBL_HOURS_ABBREV' => 'час.',
  'LBL_INFO_DESC' => 'Описание',
  'LBL_INFO_DUE_DT' => 'Due Date Time',
  'LBL_INFO_DURATION' => 'Продължителност',
  'LBL_INFO_NAME' => 'Относно',
  'LBL_INFO_RELATED_TO' => 'Свързано с',
  'LBL_INFO_START_DT' => 'Начална дата',
  'LBL_INFO_TITLE' => 'Допълнителни детайли',
  'LBL_LOADING' => 'Зарежда се ...',
  'LBL_MINS_ABBREV' => 'мин.',
  'LBL_MODULE_NAME' => 'Календар',
  'LBL_MODULE_NAME_SINGULAR' => 'Календар',
  'LBL_MODULE_TITLE' => 'Календар',
  'LBL_MONTH' => 'Месец',
  'LBL_NEXT_DAY' => 'Утре',
  'LBL_NEXT_MONTH' => 'Следващ месец',
  'LBL_NEXT_SHARED' => 'Следваща',
  'LBL_NEXT_WEEK' => 'Следваща седмица',
  'LBL_NEXT_YEAR' => 'Следваща година',
  'LBL_NO' => 'Не',
  'LBL_NO_ACCESS' => 'Не разполагате с необходимите права за достъп',
  'LBL_NO_USER' => 'Няма съвшадения за полето: Отговорник',
  'LBL_PARTICIPANTS_TAB' => 'Поканени потребители',
  'LBL_PM' => 'Следобед',
  'LBL_PREVIOUS_DAY' => 'Вчера',
  'LBL_PREVIOUS_MONTH' => 'Предходен месец',
  'LBL_PREVIOUS_SHARED' => 'Предишна',
  'LBL_PREVIOUS_WEEK' => 'Предходна седмица',
  'LBL_PREVIOUS_YEAR' => 'Предходна година',
  'LBL_RECURRING_LIMIT_ERROR' => 'Събитието $moduleTitle не може да бъде насрочено от системата, защото превишава максималния брой от $limit разрешени повторения.',
  'LBL_REFRESH' => 'Обнови',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Изтрий всички повторения',
  'LBL_REPEAT_COUNT' => 'Брой повторения',
  'LBL_REPEAT_DOW' => 'На',
  'LBL_REPEAT_END' => 'Край',
  'LBL_REPEAT_END_AFTER' => 'След',
  'LBL_REPEAT_END_BY' => 'До',
  'LBL_REPEAT_INTERVAL' => 'Всеки',
  'LBL_REPEAT_OCCURRENCES' => 'повторения',
  'LBL_REPEAT_TAB' => 'Регулярност',
  'LBL_REPEAT_TYPE' => 'Повторение',
  'LBL_REPEAT_UNTIL' => 'Повторение до',
  'LBL_SAVE_BUTTON' => 'Съхрани',
  'LBL_SAVING' => 'Запазва се ...',
  'LBL_SCHEDULED' => 'Насрочен',
  'LBL_SELECT_USERS' => 'Избор на потребители за показване в календара',
  'LBL_SENDING_INVITES' => 'Запазване & Изпращане на покани .....',
  'LBL_SEND_INVITES' => 'Изпращане на покани',
  'LBL_SETTINGS' => 'Настройки',
  'LBL_SETTINGS_CALLS_SHOW' => 'Показване на обаждания:',
  'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Прилагане на чаови интервал в дневните и седмични изгледи:',
  'LBL_SETTINGS_TASKS_SHOW' => 'Показване на задачи:',
  'LBL_SETTINGS_TIME_ENDS' => 'Край:',
  'LBL_SETTINGS_TIME_STARTS' => 'Начало:',
  'LBL_SETTINGS_TITLE' => 'Настройки',
  'LBL_SHARED' => 'Групов',
  'LBL_SHARED_CAL_TITLE' => 'Групов календар',
  'LBL_STATUS' => 'Статус',
  'LBL_STYLE_ADVANCED' => 'Разширен',
  'LBL_STYLE_BASIC' => 'Основно',
  'LBL_SUBJECT' => 'Относно',
  'LBL_USERS' => 'Потребител',
  'LBL_USER_CALENDARS' => 'Потребителски календар',
  'LBL_WEEK' => 'Седмица',
  'LBL_YEAR' => 'Година',
  'LBL_YES' => 'Да',
  'LNK_CALL_LIST' => 'Обаждания',
  'LNK_IMPORT_CALLS' => 'Импортиране на обаждания',
  'LNK_IMPORT_MEETINGS' => 'Импортиране на срещи',
  'LNK_IMPORT_TASKS' => 'Импортиране на задачи',
  'LNK_MEETING_LIST' => 'Срещи',
  'LNK_NEW_APPOINTMENT' => 'Създаване на ангажимент',
  'LNK_NEW_CALL' => 'Планиране на обаждане',
  'LNK_NEW_MEETING' => 'Насрочване на среща',
  'LNK_NEW_TASK' => 'Добавяне на задача',
  'LNK_TASK_LIST' => 'Задачи',
  'LNK_VIEW_CALENDAR' => 'Календар',
  'NOTICE_DURATION_TIME' => 'Продължителността трябва да бъде по-голяма от 0',
);

$mod_list_strings = array (
  'dom_cal_month' => 
  array (
    0 => '',
    1 => 'Януари',
    2 => 'Февруари',
    3 => 'Март',
    4 => 'Април',
    5 => 'Май',
    6 => 'Юни',
    7 => 'Юли',
    8 => 'Август',
    9 => 'Септември',
    10 => 'Октомври',
    11 => 'Ноември',
    12 => 'Декември',
  ),
  'dom_cal_month_long' => 
  array (
    0 => '',
    1 => 'Януари',
    2 => 'Февруари',
    3 => 'Март',
    4 => 'Април',
    5 => 'Май',
    6 => 'Юни',
    7 => 'Юли',
    8 => 'Август',
    9 => 'Септември',
    10 => 'Октомври',
    11 => 'Ноември',
    12 => 'Декември',
  ),
  'dom_cal_weekdays' => 
  array (
    0 => 'Нд',
    1 => 'Пн',
    2 => 'Вт',
    3 => 'Ср',
    4 => 'Чт',
    5 => 'Пт',
    6 => 'Сб',
  ),
  'dom_cal_weekdays_long' => 
  array (
    0 => 'Неделя',
    1 => 'Понеделник',
    2 => 'Вторник',
    3 => 'Сряда',
    4 => 'Четвъртък',
    5 => 'Петък',
    6 => 'Събота',
  ),
);

