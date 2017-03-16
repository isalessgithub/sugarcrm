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
	'LBL_MODULE_NAME' => 'Agenda',
	'LBL_MODULE_NAME_SINGULAR' => 'Agenda',
	'LBL_MODULE_TITLE' => 'Agenda',
	'LNK_NEW_CALL' => 'Nieuw Telefoongesprek',
	'LNK_NEW_MEETING' => 'Nieuwe Afspraak',
	'LNK_NEW_APPOINTMENT' => 'Nieuwe Afspraak',
	'LNK_NEW_TASK' => 'Nieuwe Taak',
	'LNK_CALL_LIST' => 'Telefoongesprekken',
	'LNK_MEETING_LIST' => 'Afspraken',
	'LNK_TASK_LIST' => 'Taken',
	'LNK_VIEW_CALENDAR' => 'Vandaag',
	'LNK_IMPORT_CALLS' => 'Importeer Gesprekken',
	'LNK_IMPORT_MEETINGS' => 'Importeer Afspraken',
	'LNK_IMPORT_TASKS' => 'Importeer Taken',
	'LBL_MONTH' => 'Maand',
	'LBL_DAY' => 'Dag',
	'LBL_YEAR' => 'Jaar',
	'LBL_WEEK' => 'Week',
	'LBL_PREVIOUS_MONTH' => 'Vorige Maand',
	'LBL_PREVIOUS_DAY' => 'Vorige Dag',
	'LBL_PREVIOUS_YEAR' => 'Vorig Jaar',
	'LBL_PREVIOUS_WEEK' => 'Vorige Week',
	'LBL_NEXT_MONTH' => 'Volgende Maand',
	'LBL_NEXT_DAY' => 'Volgende Dag',
	'LBL_NEXT_YEAR' => 'Volgend Jaar',
	'LBL_NEXT_WEEK' => 'Volgende Week',
	'LBL_AM' => 'AM',
	'LBL_PM' => 'PM',
	'LBL_SCHEDULED' => 'Gepland',
	'LBL_BUSY' => 'Bezet',
	'LBL_CONFLICT' => 'Conflict',
	'LBL_USER_CALENDARS' => 'Gebruikersagendas',
	'LBL_SHARED' => 'Gedeeld',
	'LBL_PREVIOUS_SHARED' => 'Vorige',
	'LBL_NEXT_SHARED' => 'Volgende',
	'LBL_SHARED_CAL_TITLE' => 'Gedeelde Agenda',
	'LBL_USERS' => 'Gebruiker',
	'LBL_REFRESH' => 'Vernieuwen',
	'LBL_EDIT_USERLIST' => 'Gebruikerslijst',
	'LBL_SELECT_USERS' => 'Selecteer Gebruikers voor Agenda',
	'LBL_FILTER_BY_TEAM' => 'Filter gebruikerslijst op team:',
	'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan',
	'LBL_DATE' => 'Startdatum en -tijd',  
	'LBL_CREATE_MEETING' => 'Afspraak maken',
	'LBL_CREATE_CALL' => 'Nieuw Telefoongesprek',
	'LBL_HOURS_ABBREV' => 'u',
	'LBL_MINS_ABBREV' => 'min',


	'LBL_YES' => 'Ja',
	'LBL_NO' => 'Nee',
	'LBL_SETTINGS' => 'Instellingen',
	'LBL_CREATE_NEW_RECORD' => 'Nieuwe Activiteit',
    'LBL_CREATE_NEW_CALL' => 'Nieuw Telefoongesprek',
    'LBL_CREATING_NEW_ACTIVITY' => 'Je maakt een nieuwe afspraak. Wilde je een <a href="javascript:void(0);" data-action="create-task">nieuwe Taak</a> of een <a href="javascript:void(0);" data-action="schedule-call">Nieuw Telefoongesprek</a> aanmaken',
	'LBL_LOADING' => 'Laden ......',
	'LBL_SAVING' => 'Opslaan ......',
	'LBL_SENDING_INVITES' => 'Opslaan & versturen uitnodigingen .....',
	'LBL_CONFIRM_REMOVE' => 'Weet u het zeker dat u dit record wilt verwijderen?',
	'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Weet u het zeker dat u alle records in de reeks wilt verwijderen?',
	'LBL_EDIT_RECORD' => 'Wijzig Activiteit',
    'LBL_EDIT_CALL' => 'Wijzig Telefoongesprek',
	'LBL_ERROR_SAVING' => 'Fout tijdens oplsaan',
    'LBL_NO_ACCESS' => 'U heeft geen toegang',
	'LBL_ERROR_LOADING' => 'Fout tijdens laden',
	'LBL_GOTO_DATE' => 'Ga naar datum',
	'NOTICE_DURATION_TIME' => 'Tijdsduur moet groter zijn dan 0',
	'LBL_STYLE_BASIC' => 'Basis',
	'LBL_STYLE_ADVANCED' => 'Geavanceerd',

	'LBL_INFO_TITLE' => 'Aanvullende gegevens',
	'LBL_INFO_DESC' => 'Omschrijving',
	'LBL_INFO_START_DT' => 'Startdatum',
	'LBL_INFO_DUE_DT' => 'Einddatum',
	'LBL_INFO_DURATION' => 'Duur',
	'LBL_INFO_NAME' => 'Onderwerp',
	'LBL_INFO_RELATED_TO' => 'Gerelateerd aan',

	'LBL_NO_USER' => 'Geen overeenkomst gevonden voor veld: Toegewezen aan',
	'LBL_SUBJECT' => 'Onderwerp',
	'LBL_DURATION' => 'Duur',
	'LBL_STATUS' => 'Status',
	'LBL_DATE_TIME' => 'Datum en tijd',


	'LBL_SETTINGS_TITLE' => 'Instellingen',
	'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Toon tijd in Dag en Week views:',
	'LBL_SETTINGS_TIME_STARTS'=>'Starttijd:', 
	'LBL_SETTINGS_TIME_ENDS'=>'Eindtijd:', 
	'LBL_SETTINGS_CALLS_SHOW' => 'Toon Telefoongesprekken:',
	'LBL_SETTINGS_TASKS_SHOW' => 'Toon Taken:', 

	'LBL_SAVE_BUTTON' => 'Opslaan',
	'LBL_DELETE_BUTTON' => 'Verwijderen',
	'LBL_APPLY_BUTTON' => 'Toepassen',
	'LBL_SEND_INVITES' => 'Verstuur Uitnodigingen',
	'LBL_CANCEL_BUTTON' => 'Annuleren',
	'LBL_CLOSE_BUTTON' => 'Sluiten',

	'LBL_GENERAL_TAB' => 'Details',
	'LBL_PARTICIPANTS_TAB' => 'Genodigden',
	'LBL_REPEAT_TAB' => 'Herhaling',	
	
	'LBL_REPEAT_TYPE' => 'Herhalen',
	'LBL_REPEAT_INTERVAL' => 'Elke',
	'LBL_REPEAT_END' => 'Einde',	
	'LBL_REPEAT_END_AFTER' => 'Na',
	'LBL_REPEAT_OCCURRENCES' => 'Herhahlingen',
	'LBL_REPEAT_END_BY' => 'Door',	
	'LBL_REPEAT_DOW' => 'Op',	
	'LBL_REPEAT_UNTIL' => 'Herhalen tot',
	'LBL_REPEAT_COUNT' => 'Aantal Herhalingen',
	'LBL_RECURRING_LIMIT_ERROR' => 'Deze herhaalde $moduleTitle kan niet opgeslagen worden, omdat het maximale toegestane aantal ($limit) herhaalde afspraken overschreven wordt.',
	
	'LBL_EDIT_ALL_RECURRENCES' => 'Wijzig alle Herhalingen',
	'LBL_REMOVE_ALL_RECURRENCES' => 'Verwijder alle Herhalingen',

	'LBL_DATE_END_ERROR' => 'Einddatum ligt voor de Startdatum',
	'ERR_YEAR_BETWEEN' => 'Het door uw gekozen jaar kan niet in de kalender gekozen worden.<br />Het jaar moet tussen 1970 en 2037 liggen.',
	'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: niet gedefinieerd voor deze weergave',

    'LBL_CALENDAR_EVENT_LIMIT_EXCEEDED' => "Herhaalde {0} gebeurtenis heeft de limiet overschreden",
    'LBL_CALENDAR_EVENT_NOT_A_RECURRING_EVENT' => "{0} is geen herhaalde gebeurtenis",
    'LBL_CALENDAR_EVENT_NOT_A_PARENT_OCCURRENCE' => "{0} is geen bovenliggende herhaling",
    'LBL_CALENDAR_EVENT_RECURRENCE_MODULE_NOT_SUPPORTED' => "{0} wordt niet herkend als herhaalde gebeurtenismodule",

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
			"Zondag",
			"Maandag",
			"Dinsdag",
			"Woensdag",
			"Donderdag",
			"Vrijdag",
			"Zaterdag",
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
			"Januari",
			"Februari",
			"Maart",
			"April",
			"Mei",
			"Juni",
			"Juli",
			"Augustus",
			"September",
			"Oktober",
			"November",
			"December",
		),
);
