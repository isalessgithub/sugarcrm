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
	'LBL_MODULE_NAME' => 'Kalender',
	'LBL_MODULE_NAME_SINGULAR' => 'Kalender',
	'LBL_MODULE_TITLE' => 'Kalender',
	'LNK_NEW_CALL' => 'Neuer Anruf',
	'LNK_NEW_MEETING' => 'Neues Meeting',
	'LNK_NEW_APPOINTMENT' => 'Neuer Termin',
	'LNK_NEW_TASK' => 'Neue Aufgabe',
	'LNK_CALL_LIST' => 'Anrufe',
	'LNK_MEETING_LIST' => 'Meetings',
	'LNK_TASK_LIST' => 'Aufgaben',
	'LNK_VIEW_CALENDAR' => 'Heute',
	'LNK_IMPORT_CALLS' => 'Anrufe importieren',
	'LNK_IMPORT_MEETINGS' => 'Meetings importieren',
	'LNK_IMPORT_TASKS' => 'Aufgaben importieren',
	'LBL_MONTH' => 'Monat',
	'LBL_DAY' => 'Tag',
	'LBL_YEAR' => 'Jahr',
	'LBL_WEEK' => 'Woche',
	'LBL_PREVIOUS_MONTH' => 'Voriger Monat',
	'LBL_PREVIOUS_DAY' => 'Voriger Tag',
	'LBL_PREVIOUS_YEAR' => 'Voriges Jahr',
	'LBL_PREVIOUS_WEEK' => 'Vorige Woche',
	'LBL_NEXT_MONTH' => 'Nächster Monat',
	'LBL_NEXT_DAY' => 'Nächster Tag',
	'LBL_NEXT_YEAR' => 'Nächstes Jahr',
	'LBL_NEXT_WEEK' => 'Nächste Woche',
	'LBL_AM' => 'AM',
	'LBL_PM' => 'PM',
	'LBL_SCHEDULED' => 'Geplant',
	'LBL_BUSY' => 'Belegt',
	'LBL_CONFLICT' => 'Terminkonflikt',
	'LBL_USER_CALENDARS' => 'Benutzerkalender',
	'LBL_SHARED' => 'Gemeinsam',
	'LBL_PREVIOUS_SHARED' => 'Zurück',
	'LBL_NEXT_SHARED' => 'Weiter',
	'LBL_SHARED_CAL_TITLE' => 'Gemeinsamer Kalender',
	'LBL_USERS' => 'Benutzer',
	'LBL_REFRESH' => 'Aktualisieren',
	'LBL_EDIT_USERLIST' => 'Benutzerliste',
	'LBL_SELECT_USERS' => 'Benutzer für Anzeige wählen',
	'LBL_FILTER_BY_TEAM' => 'Benutzerliste nach Team filtern:',
	'LBL_ASSIGNED_TO_NAME' => 'Zugewiesen an',
	'LBL_DATE' => 'Startdatum und -zeit',  
	'LBL_CREATE_MEETING' => 'Neues Meeting',
	'LBL_CREATE_CALL' => 'Neuer Anruf',
	'LBL_HOURS_ABBREV' => 'St.',
	'LBL_MINS_ABBREV' => 'min',


	'LBL_YES' => 'Ja',
	'LBL_NO' => 'Nein',
	'LBL_SETTINGS' => 'Einstellungen',
	'LBL_CREATE_NEW_RECORD' => 'Aktivität erstellen',
    'LBL_CREATE_NEW_CALL' => 'Anruf erstellen',
    'LBL_CREATING_NEW_ACTIVITY' => 'Sie erstellen ein neues Meeting. Wollten Sie eine <a href="javascript:void(0);" data-action="create-task">Aufgabe erstellen</a> oder einen <a href="javascript:void(0);" data-action="schedule-call">Anruf planen</a>',
	'LBL_LOADING' => 'Laden. Bitte warten...',
	'LBL_SAVING' => 'Speichern ......',
	'LBL_SENDING_INVITES' => 'Einladungen werden gespeichert und verschickt .....',
	'LBL_CONFIRM_REMOVE' => 'Soll der Datensatz wirklich gelöscht werden?',
	'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Möchten Sie wirklich alle Serientermine entfernen?',
	'LBL_EDIT_RECORD' => 'Aktivität bearbeiten',
    'LBL_EDIT_CALL' => 'Anruf bearbeiten',
	'LBL_ERROR_SAVING' => 'Fehler beim Speichern',
    'LBL_NO_ACCESS' => 'Kein Zugriff',
	'LBL_ERROR_LOADING' => 'Fehler beim Laden',
	'LBL_GOTO_DATE' => 'Gehe zu Datum',
	'NOTICE_DURATION_TIME' => 'Die Zeitdauer muss größer als 0 sein',
	'LBL_STYLE_BASIC' => 'Einfach',
	'LBL_STYLE_ADVANCED' => 'Erweitert',

	'LBL_INFO_TITLE' => 'Weitere Details',
	'LBL_INFO_DESC' => 'Beschreibung',
	'LBL_INFO_START_DT' => 'Datum Zeit Start',
	'LBL_INFO_DUE_DT' => 'Datum Zeit fällig',
	'LBL_INFO_DURATION' => 'Dauer:',
	'LBL_INFO_NAME' => 'Betreff',
	'LBL_INFO_RELATED_TO' => 'Bezieht sich auf',

	'LBL_NO_USER' => 'kein passendes Feld: gehört zu',
	'LBL_SUBJECT' => 'Betreff',
	'LBL_DURATION' => 'Dauer:',
	'LBL_STATUS' => 'Status',
	'LBL_DATE_TIME' => 'Startdatum und -zeit:',


	'LBL_SETTINGS_TITLE' => 'Einstellungen',
	'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Zeiteinteilung in Tag- und Wochenansichten anzeigen:',
	'LBL_SETTINGS_TIME_STARTS'=>'Startzeit:', 
	'LBL_SETTINGS_TIME_ENDS'=>'Endzeit:', 
	'LBL_SETTINGS_CALLS_SHOW' => 'Anrufe anzeigen:',
	'LBL_SETTINGS_TASKS_SHOW' => 'Aufgaben anzeigen:', 

	'LBL_SAVE_BUTTON' => 'Speichern',
	'LBL_DELETE_BUTTON' => 'Löschen',
	'LBL_APPLY_BUTTON' => 'Filter anwenden',
	'LBL_SEND_INVITES' => 'Einladungen speichern & senden',
	'LBL_CANCEL_BUTTON' => 'Abbrechen',
	'LBL_CLOSE_BUTTON' => 'Beenden:',

	'LBL_GENERAL_TAB' => 'Details',
	'LBL_PARTICIPANTS_TAB' => 'Teilnehmer',
	'LBL_REPEAT_TAB' => 'Ereignis',	
	
	'LBL_REPEAT_TYPE' => 'Wiederholung',
	'LBL_REPEAT_INTERVAL' => 'Wiederholungsintervall',
	'LBL_REPEAT_END' => 'Ende',	
	'LBL_REPEAT_END_AFTER' => 'nach',
	'LBL_REPEAT_OCCURRENCES' => 'Ereignisse',
	'LBL_REPEAT_END_BY' => 'Nach',	
	'LBL_REPEAT_DOW' => 'Am',	
	'LBL_REPEAT_UNTIL' => 'Wiederholen bis',
	'LBL_REPEAT_COUNT' => 'Anzahl der Wiederholungen',
	'LBL_RECURRING_LIMIT_ERROR' => 'Dieses wiederholt vorkommene $moduleTitle kann nicht geplant werden, weil die maximal zulässige Anzahl der Wiederholungen von $limit überschritten wird.',
	
	'LBL_EDIT_ALL_RECURRENCES' => 'Alle Ereignisse bearbeieten',
	'LBL_REMOVE_ALL_RECURRENCES' => 'Alle Ereignisse entfernen',

	'LBL_DATE_END_ERROR' => 'Das Enddatum liegt vor dem Stardatum',
	'ERR_YEAR_BETWEEN' => 'Leider kann der Kalender das angegebene Jahr nicht anzeigen<br>Das Jahr muss zwischen 1970 und 2037 liegen',
	'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: ist für diese Ansicht nicht definiert',

    'LBL_CALENDAR_EVENT_LIMIT_EXCEEDED' => "{0} Serienereigniszahl hat Grenzwert überschritten",
    'LBL_CALENDAR_EVENT_NOT_A_RECURRING_EVENT' => "{0} ist kein Serienereignis",
    'LBL_CALENDAR_EVENT_NOT_A_PARENT_OCCURRENCE' => "{0} ist kein übergeordnetes Ereignis",
    'LBL_CALENDAR_EVENT_RECURRENCE_MODULE_NOT_SUPPORTED' => "{0} wird nicht als Serienereignismodul erkannt",

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
