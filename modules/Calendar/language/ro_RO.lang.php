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
	'LNK_NEW_CALL' => 'Jurnal Apeluri',
	'LNK_NEW_MEETING' => 'Orar Intalniri',
	'LNK_NEW_APPOINTMENT' => 'Creeaza Intalnire',
	'LNK_NEW_TASK' => 'Creează sarcina',
	'LNK_CALL_LIST' => 'Vezi apeluri',
	'LNK_MEETING_LIST' => 'Vezi intalniri',
	'LNK_TASK_LIST' => 'vezi lista sarcini',
	'LNK_VIEW_CALENDAR' => 'Astazi',
	'LNK_IMPORT_CALLS' => 'Importa Apeluri',
	'LNK_IMPORT_MEETINGS' => 'Importa Sedinte',
	'LNK_IMPORT_TASKS' => 'Importa artibutii',
	'LBL_MONTH' => 'Luna',
	'LBL_DAY' => 'zi',
	'LBL_YEAR' => 'an',
	'LBL_WEEK' => 'saptamana',
	'LBL_PREVIOUS_MONTH' => 'luna anterioara',
	'LBL_PREVIOUS_DAY' => 'ziua anterioara',
	'LBL_PREVIOUS_YEAR' => 'anul anterior',
	'LBL_PREVIOUS_WEEK' => 'saptamana anterioara',
	'LBL_NEXT_MONTH' => 'Luna urmatoare',
	'LBL_NEXT_DAY' => 'Ziua urmatoare',
	'LBL_NEXT_YEAR' => 'Anul urmator',
	'LBL_NEXT_WEEK' => 'Saptamana urmatoare',
	'LBL_AM' => 'AM',
	'LBL_PM' => 'PM',
	'LBL_SCHEDULED' => 'Programat',
	'LBL_BUSY' => 'Ocupat',
	'LBL_CONFLICT' => 'Conflict',
	'LBL_USER_CALENDARS' => 'Calendarele utilizatorului',
	'LBL_SHARED' => 'Partajate',
	'LBL_PREVIOUS_SHARED' => 'anterior',
	'LBL_NEXT_SHARED' => 'urmatorul',
	'LBL_SHARED_CAL_TITLE' => 'Calendarul Partajat',
	'LBL_USERS' => 'Utilizator',
	'LBL_REFRESH' => 'Improspatare',
	'LBL_EDIT_USERLIST' => 'Lista Utilizatori',
	'LBL_SELECT_USERS' => 'Selecteaza utilizatori pentru afisaj calendar',
	'LBL_FILTER_BY_TEAM' => 'Filtreaza lista utilizatori pe echipe',
	'LBL_ASSIGNED_TO_NAME' => 'Atribuit lui',
	'LBL_DATE' => 'Data şi ora începerii',  
	'LBL_CREATE_MEETING' => 'Programeaza Intalnire',
	'LBL_CREATE_CALL' => 'Jurnal Apeluri',
	'LBL_HOURS_ABBREV' => 'h',
	'LBL_MINS_ABBREV' => 'm',


	'LBL_YES' => 'Da',
	'LBL_NO' => 'Nu',
	'LBL_SETTINGS' => 'Setari',
	'LBL_CREATE_NEW_RECORD' => 'Creează activitate',
    'LBL_CREATE_NEW_CALL' => 'Creare apel',
    'LBL_CREATING_NEW_ACTIVITY' => 'Creaţi o nouă întâlnire. Aţi dorit să selectaţi <a href="javascript:void(0);" data-action="create-task">Creare sarcină</a> sau <a href="javascript:void(0);" data-action="schedule-call">Programare apel</a>',
	'LBL_LOADING' => 'Incarcare...Va rugam asteptati',
	'LBL_SAVING' => 'Salveaza ...',
	'LBL_SENDING_INVITES' => 'Salveaza & Trimitere Invitati',
	'LBL_CONFIRM_REMOVE' => 'Sunteţi sigur că doriţi să eliminaţi înregistrarea?',
	'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Sunteţi sigur că doriţi să eliminaţi toate înregistrările recurente?',
	'LBL_EDIT_RECORD' => 'Editeaza activitate',
    'LBL_EDIT_CALL' => 'Editare apel',
	'LBL_ERROR_SAVING' => 'Eroare in timpul salvarii',
    'LBL_NO_ACCESS' => 'Nu aveţi acces',
	'LBL_ERROR_LOADING' => 'Eroare in timpul incarcarii',
	'LBL_GOTO_DATE' => 'Mergi la Data',
	'NOTICE_DURATION_TIME' => 'Durata timpului trebuie sa fie mai mare ca 0',
	'LBL_STYLE_BASIC' => 'Elementar',
	'LBL_STYLE_ADVANCED' => 'Avansat',

	'LBL_INFO_TITLE' => 'Detalii Aditionale',
	'LBL_INFO_DESC' => 'Descriere',
	'LBL_INFO_START_DT' => 'Data Începerii',
	'LBL_INFO_DUE_DT' => 'Pana la data:',
	'LBL_INFO_DURATION' => 'Durata',
	'LBL_INFO_NAME' => 'Subiect',
	'LBL_INFO_RELATED_TO' => 'Asociat cu',

	'LBL_NO_USER' => 'Nu se potrivesc pentru domeniul: Alocate de',
	'LBL_SUBJECT' => 'Subiect',
	'LBL_DURATION' => 'Durata',
	'LBL_STATUS' => 'Status',
	'LBL_DATE_TIME' => 'Data si timpul de start',


	'LBL_SETTINGS_TITLE' => 'Setari',
	'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Afisare sloturi de timp i zile si saptamanai',
	'LBL_SETTINGS_TIME_STARTS'=>'Ora de incepere:', 
	'LBL_SETTINGS_TIME_ENDS'=>'Ora de terminare', 
	'LBL_SETTINGS_CALLS_SHOW' => 'Arata apeluri',
	'LBL_SETTINGS_TASKS_SHOW' => 'Arata Sarcini', 

	'LBL_SAVE_BUTTON' => 'Salveaza',
	'LBL_DELETE_BUTTON' => 'Ștergere',
	'LBL_APPLY_BUTTON' => 'Aplica',
	'LBL_SEND_INVITES' => 'Trimite invitatii',
	'LBL_CANCEL_BUTTON' => 'Anulare',
	'LBL_CLOSE_BUTTON' => 'Inchide:',

	'LBL_GENERAL_TAB' => 'Detalii',
	'LBL_PARTICIPANTS_TAB' => 'Invitat',
	'LBL_REPEAT_TAB' => 'Repetare',	
	
	'LBL_REPEAT_TYPE' => 'Repeta',
	'LBL_REPEAT_INTERVAL' => 'interval',
	'LBL_REPEAT_END' => 'Sfarsit',	
	'LBL_REPEAT_END_AFTER' => 'Dupa',
	'LBL_REPEAT_OCCURRENCES' => 'Repetari',
	'LBL_REPEAT_END_BY' => 'de',	
	'LBL_REPEAT_DOW' => 'Pe',	
	'LBL_REPEAT_UNTIL' => 'Repeta inainte',
	'LBL_REPEAT_COUNT' => 'numarul de repetari',
	'LBL_RECURRING_LIMIT_ERROR' => 'Această recurentă $ titlu modul nu poate fi programat, deoarece depășește reapariția maximă permisă de $ limită.',
	
	'LBL_EDIT_ALL_RECURRENCES' => 'Editare toate repetarile',
	'LBL_REMOVE_ALL_RECURRENCES' => 'Eliminare toate repetările',

	'LBL_DATE_END_ERROR' => 'Data de sfârşit este înainte de data începerii',
	'ERR_YEAR_BETWEEN' => 'Ne pare rău, calendarul nu conţine anul solicitat<br />Anul trebuie să fie între 1970 şi 2037',
	'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: nedefinit pentru această fereastră de vizualizare',

    'LBL_CALENDAR_EVENT_LIMIT_EXCEEDED' => "Numărul evenimentelor {0} recurente a depăşit limita",
    'LBL_CALENDAR_EVENT_NOT_A_RECURRING_EVENT' => "{0} nu este un eveniment recurent",
    'LBL_CALENDAR_EVENT_NOT_A_PARENT_OCCURRENCE' => "{0} nu este o recurenţă principală",
    'LBL_CALENDAR_EVENT_RECURRENCE_MODULE_NOT_SUPPORTED' => "{0} nu este recunoscut drept un modul de evenimente recurente",

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
