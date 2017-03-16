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
	'LNK_NEW_CALL' => 'Opprett oppringning',
	'LNK_NEW_MEETING' => 'Opprett møte',
	'LNK_NEW_APPOINTMENT' => 'Opprett avtale',
	'LNK_NEW_TASK' => 'Opprett oppgave',
	'LNK_CALL_LIST' => 'Oppringninger',
	'LNK_MEETING_LIST' => 'Møter',
	'LNK_TASK_LIST' => 'Oppgaver',
	'LNK_VIEW_CALENDAR' => 'I dag',
	'LNK_IMPORT_CALLS' => 'Importer samtaler',
	'LNK_IMPORT_MEETINGS' => 'Importer møter',
	'LNK_IMPORT_TASKS' => 'Importer oppgaver',
	'LBL_MONTH' => 'Måned',
	'LBL_DAY' => 'Dag',
	'LBL_YEAR' => 'År',
	'LBL_WEEK' => 'Uke',
	'LBL_PREVIOUS_MONTH' => 'Forrige måned',
	'LBL_PREVIOUS_DAY' => 'Neste dag',
	'LBL_PREVIOUS_YEAR' => 'Forrige år',
	'LBL_PREVIOUS_WEEK' => 'Forrige uke',
	'LBL_NEXT_MONTH' => 'Neste måned',
	'LBL_NEXT_DAY' => 'Neste dag',
	'LBL_NEXT_YEAR' => 'Neste år',
	'LBL_NEXT_WEEK' => 'Neste uke',
	'LBL_AM' => 'AM',
	'LBL_PM' => 'PM',
	'LBL_SCHEDULED' => 'Planlagt',
	'LBL_BUSY' => 'Opptatt',
	'LBL_CONFLICT' => 'Konflikt',
	'LBL_USER_CALENDARS' => 'Brukerkalendere',
	'LBL_SHARED' => 'Felles',
	'LBL_PREVIOUS_SHARED' => 'Forrige',
	'LBL_NEXT_SHARED' => 'Neste',
	'LBL_SHARED_CAL_TITLE' => 'Felles kalender',
	'LBL_USERS' => 'Bruker',
	'LBL_REFRESH' => 'Oppdatér',
	'LBL_EDIT_USERLIST' => 'Brukerliste',
	'LBL_SELECT_USERS' => 'Velg brukere til kalanderen',
	'LBL_FILTER_BY_TEAM' => 'Filtrer brukerliste etter team:',
	'LBL_ASSIGNED_TO_NAME' => 'Tilordnet',
	'LBL_DATE' => 'start dato & tid',  
	'LBL_CREATE_MEETING' => 'Planlegg møte',
	'LBL_CREATE_CALL' => 'Loggfør oppringningen',
	'LBL_HOURS_ABBREV' => 't',
	'LBL_MINS_ABBREV' => 'm',


	'LBL_YES' => 'Ja',
	'LBL_NO' => 'Nei',
	'LBL_SETTINGS' => 'Innstillinger',
	'LBL_CREATE_NEW_RECORD' => 'Opprett Aktivitet',
    'LBL_CREATE_NEW_CALL' => 'Opprett Alle',
    'LBL_CREATING_NEW_ACTIVITY' => 'Du oppretter et nytt møte. Ville du <a href="javascript:void(0);" data-action="create-task">Opprett en oppgave</a> eller <a href="javascript:void(0);" data-action="schedule-call">Planlegg en telefonsamtale</a>',
	'LBL_LOADING' => 'Laster ......',
	'LBL_SAVING' => 'Lagrer ......',
	'LBL_SENDING_INVITES' => 'Lagrer og sender Invitasjoner .....',
	'LBL_CONFIRM_REMOVE' => 'Er du sikker på at du ønsker å fjerne oppføringen?',
	'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Er du sikker på at du ønsker å fjerne alle repeterende oppføringer?',
	'LBL_EDIT_RECORD' => 'Redigér Aktivitet',
    'LBL_EDIT_CALL' => 'Rediger Samtale',
	'LBL_ERROR_SAVING' => 'Feil under lagring',
    'LBL_NO_ACCESS' => 'Du har ikke tilgang',
	'LBL_ERROR_LOADING' => 'Feil under lasting',
	'LBL_GOTO_DATE' => 'Gå til Dato',
	'NOTICE_DURATION_TIME' => 'Varigheten i tid må være større enn 0',
	'LBL_STYLE_BASIC' => 'Grunnleggende',
	'LBL_STYLE_ADVANCED' => 'Avansert',

	'LBL_INFO_TITLE' => 'Tilleggsinformasjon',
	'LBL_INFO_DESC' => 'Beskrivelse',
	'LBL_INFO_START_DT' => 'Startdato',
	'LBL_INFO_DUE_DT' => 'Tidsfrist',
	'LBL_INFO_DURATION' => 'Varighet',
	'LBL_INFO_NAME' => 'Emne',
	'LBL_INFO_RELATED_TO' => 'Relatert til',

	'LBL_NO_USER' => 'Ingen treff på feltet: Tildelt',
	'LBL_SUBJECT' => 'Emne',
	'LBL_DURATION' => 'Varighet',
	'LBL_STATUS' => 'Status',
	'LBL_DATE_TIME' => 'Dato og Tid',


	'LBL_SETTINGS_TITLE' => 'Innstillinger',
	'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Vis tidsluker i Dag og Uke-visninger:',
	'LBL_SETTINGS_TIME_STARTS'=>'Starttid:', 
	'LBL_SETTINGS_TIME_ENDS'=>'Sluttid:', 
	'LBL_SETTINGS_CALLS_SHOW' => 'Vis Anrop:',
	'LBL_SETTINGS_TASKS_SHOW' => 'Vis Oppgaver:', 

	'LBL_SAVE_BUTTON' => 'Lagre',
	'LBL_DELETE_BUTTON' => 'Slett',
	'LBL_APPLY_BUTTON' => 'Bruk',
	'LBL_SEND_INVITES' => 'Lagre & Send Invitasjoner',
	'LBL_CANCEL_BUTTON' => 'Avbryt',
	'LBL_CLOSE_BUTTON' => 'Steng',

	'LBL_GENERAL_TAB' => 'Detaljer',
	'LBL_PARTICIPANTS_TAB' => 'Inviterte',
	'LBL_REPEAT_TAB' => 'Gjentakelse',	
	
	'LBL_REPEAT_TYPE' => 'Repetér',
	'LBL_REPEAT_INTERVAL' => 'Hver',
	'LBL_REPEAT_END' => 'Slutt',	
	'LBL_REPEAT_END_AFTER' => 'Etter',
	'LBL_REPEAT_OCCURRENCES' => 'gjentakelser',
	'LBL_REPEAT_END_BY' => 'Av',	
	'LBL_REPEAT_DOW' => 'På',	
	'LBL_REPEAT_UNTIL' => 'Gjenta Til',
	'LBL_REPEAT_COUNT' => 'Antall gjentakelser',
	'LBL_RECURRING_LIMIT_ERROR' => 'Dette repeterende $moduleTitle kan ikke planlegges fordi den overskrider grensen på maks $limit gjentakelser.',
	
	'LBL_EDIT_ALL_RECURRENCES' => 'Endre Alle Gjentakelser',
	'LBL_REMOVE_ALL_RECURRENCES' => 'Slett Alle Gjentakelser',

	'LBL_DATE_END_ERROR' => 'Sluttdato er før startdato',
	'ERR_YEAR_BETWEEN' => 'Beklager, kalenderen kan ikke håndtere det året du har bedt om <br />Året må være mellom 1970 og 2037',
	'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: ikke definert for denne visningen',

    'LBL_CALENDAR_EVENT_LIMIT_EXCEEDED' => "Gjentakende { 0 } event teller som overskredet grensen",
    'LBL_CALENDAR_EVENT_NOT_A_RECURRING_EVENT' => "er ikke en regelmessig hendelse",
    'LBL_CALENDAR_EVENT_NOT_A_PARENT_OCCURRENCE' => "0 } er ikke en gjentakelse",
    'LBL_CALENDAR_EVENT_RECURRENCE_MODULE_NOT_SUPPORTED' => "{ 0 } er ikke anerkjent som en regelmessig hendelse modul",

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
