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
	'LBL_MODULE_NAME' => 'Kalendarz',
	'LBL_MODULE_NAME_SINGULAR' => 'Kalendarz',
	'LBL_MODULE_TITLE' => 'Kalendarz',
	'LNK_NEW_CALL' => 'Zaplanuj rozmowę telefoniczną',
	'LNK_NEW_MEETING' => 'Zaplanuj spotkanie',
	'LNK_NEW_APPOINTMENT' => 'Utwórz spotkanie',
	'LNK_NEW_TASK' => 'Utwórz zadanie',
	'LNK_CALL_LIST' => 'Rozmowy telefoniczne',
	'LNK_MEETING_LIST' => 'Spotkania',
	'LNK_TASK_LIST' => 'Zadania',
	'LNK_VIEW_CALENDAR' => 'Dzisiaj',
	'LNK_IMPORT_CALLS' => 'Importuj rozmowy telefoniczne',
	'LNK_IMPORT_MEETINGS' => 'Importuj spotkania',
	'LNK_IMPORT_TASKS' => 'Importuj zadania',
	'LBL_MONTH' => 'Miesiąc',
	'LBL_DAY' => 'Dzień',
	'LBL_YEAR' => 'Rok',
	'LBL_WEEK' => 'Tydzień',
	'LBL_PREVIOUS_MONTH' => 'Poprzedni miesiąc',
	'LBL_PREVIOUS_DAY' => 'Poprzedni dzień',
	'LBL_PREVIOUS_YEAR' => 'Poprzedni rok',
	'LBL_PREVIOUS_WEEK' => 'Poprzedni tydzień',
	'LBL_NEXT_MONTH' => 'Następny miesiąc',
	'LBL_NEXT_DAY' => 'Następny dzień',
	'LBL_NEXT_YEAR' => 'Następny rok',
	'LBL_NEXT_WEEK' => 'Następny tydzień',
	'LBL_AM' => 'AM',
	'LBL_PM' => 'PM',
	'LBL_SCHEDULED' => 'Zaplanowane',
	'LBL_BUSY' => 'Zajęty',
	'LBL_CONFLICT' => 'Konflikt',
	'LBL_USER_CALENDARS' => 'Kalendarze użytkownika',
	'LBL_SHARED' => 'Współdzielony',
	'LBL_PREVIOUS_SHARED' => 'Poprzedni',
	'LBL_NEXT_SHARED' => 'Następny',
	'LBL_SHARED_CAL_TITLE' => 'Współdzielony kalendarz',
	'LBL_USERS' => 'Użytkownicy',
	'LBL_REFRESH' => 'Odśwież',
	'LBL_EDIT_USERLIST' => 'Lista użytkowników',
	'LBL_SELECT_USERS' => 'Wybierz użytkowników, którym system wyświetli kalendarz',
	'LBL_FILTER_BY_TEAM' => 'Filtruj listę wg zespołów:',
	'LBL_ASSIGNED_TO_NAME' => 'Przydzielono do',
	'LBL_DATE' => 'Data i czas rozpoczęcia',  
	'LBL_CREATE_MEETING' => 'Zaplanuj spotkanie',
	'LBL_CREATE_CALL' => 'Dodaj rozmowę telefoniczną do dziennika',
	'LBL_HOURS_ABBREV' => 'g',
	'LBL_MINS_ABBREV' => 'm',


	'LBL_YES' => 'Tak',
	'LBL_NO' => 'Nie',
	'LBL_SETTINGS' => 'Ustawienia',
	'LBL_CREATE_NEW_RECORD' => 'Utwórz wydarzenie',
    'LBL_CREATE_NEW_CALL' => 'Utwórz rozmowę telefoniczną',
    'LBL_CREATING_NEW_ACTIVITY' => 'Zamierzasz utworzyć nowe spotkanie. Czy chciałeś(-aś) <a href="javascript:void(0);" data-action="create-task">Utworzyć zadanie</a> lub <a href="javascript:void(0);" data-action="schedule-call">Zaplanować rozmowę telefoniczną</a>',
	'LBL_LOADING' => 'Ładowanie...',
	'LBL_SAVING' => 'Zapisywanie...',
	'LBL_SENDING_INVITES' => 'Zapisywanie i rozsyłanie zaproszeń...',
	'LBL_CONFIRM_REMOVE' => 'Na pewno chcesz usunąć ten rekord?',
	'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Na pewno chcesz usunąć wszystkie cykliczne rekordy?',
	'LBL_EDIT_RECORD' => 'Edytuj wydarzenia',
    'LBL_EDIT_CALL' => 'Edytuj rozmowę telefoniczną',
	'LBL_ERROR_SAVING' => 'Wystąpił błąd podczas zapisywania',
    'LBL_NO_ACCESS' => 'Brak dostępu',
	'LBL_ERROR_LOADING' => 'Wystąpił błąd podczas przesyłania',
	'LBL_GOTO_DATE' => 'Idź do daty',
	'NOTICE_DURATION_TIME' => 'Czas trwania musi być dłuższy niż 0',
	'LBL_STYLE_BASIC' => 'Podstawowy',
	'LBL_STYLE_ADVANCED' => 'Zaawansowane',

	'LBL_INFO_TITLE' => 'Informacje dodatkowe',
	'LBL_INFO_DESC' => 'Opis',
	'LBL_INFO_START_DT' => 'Data rozpoczęcia',
	'LBL_INFO_DUE_DT' => 'Data wymagalności',
	'LBL_INFO_DURATION' => 'Czas trwania',
	'LBL_INFO_NAME' => 'Temat',
	'LBL_INFO_RELATED_TO' => 'Powiązano z',

	'LBL_NO_USER' => 'Brak dopasowania do pola: Przypisane do',
	'LBL_SUBJECT' => 'Temat',
	'LBL_DURATION' => 'Czas trwania',
	'LBL_STATUS' => 'Status',
	'LBL_DATE_TIME' => 'Data i czas',


	'LBL_SETTINGS_TITLE' => 'Ustawienia',
	'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Wyświetl przedziały czasu w widoku dnia oraz tygodnia:',
	'LBL_SETTINGS_TIME_STARTS'=>'Czas rozpoczęcia:', 
	'LBL_SETTINGS_TIME_ENDS'=>'Czas zakończenia:', 
	'LBL_SETTINGS_CALLS_SHOW' => 'Wyświetl rozmowy telefoniczne:',
	'LBL_SETTINGS_TASKS_SHOW' => 'Pokaż zadania:', 

	'LBL_SAVE_BUTTON' => 'Zapisz',
	'LBL_DELETE_BUTTON' => 'Usuń',
	'LBL_APPLY_BUTTON' => 'Zastosuj',
	'LBL_SEND_INVITES' => 'Zapisz i wyślij zaproszenia',
	'LBL_CANCEL_BUTTON' => 'Anuluj',
	'LBL_CLOSE_BUTTON' => 'Zamknij',

	'LBL_GENERAL_TAB' => 'Szczegóły',
	'LBL_PARTICIPANTS_TAB' => 'Zaproszeni',
	'LBL_REPEAT_TAB' => 'Cykliczność',	
	
	'LBL_REPEAT_TYPE' => 'Powtórz',
	'LBL_REPEAT_INTERVAL' => 'Co',
	'LBL_REPEAT_END' => 'Koniec',	
	'LBL_REPEAT_END_AFTER' => 'po',
	'LBL_REPEAT_OCCURRENCES' => 'cyklach',
	'LBL_REPEAT_END_BY' => 'do',	
	'LBL_REPEAT_DOW' => 'w',	
	'LBL_REPEAT_UNTIL' => 'Powtarzaj aż do',
	'LBL_REPEAT_COUNT' => 'Liczba powtórzeń',
	'LBL_RECURRING_LIMIT_ERROR' => 'Cykliczność $moduleTitle nie może zostać zaplanowana, ponieważ przekracza dozwoloną maksymalną liczbę $limit powtórzeń.',
	
	'LBL_EDIT_ALL_RECURRENCES' => 'Edytuj wszystkie cykle',
	'LBL_REMOVE_ALL_RECURRENCES' => 'Usuń wszystkie cykle',

	'LBL_DATE_END_ERROR' => 'Data zakończenia jest wcześniejsza niż data rozpoczęcia',
	'ERR_YEAR_BETWEEN' => 'Niestety, kalendarz nie może obsłużyć wprowadzonej daty.<br>Rok musie zawierać się między 1970 a 2037',
	'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: nie zdefiniowano dla tego widoku',

    'LBL_CALENDAR_EVENT_LIMIT_EXCEEDED' => "Wydarzenie cykliczne {0} przekroczyło limit",
    'LBL_CALENDAR_EVENT_NOT_A_RECURRING_EVENT' => "{0} nie jest wydarzeniem cyklicznym",
    'LBL_CALENDAR_EVENT_NOT_A_PARENT_OCCURRENCE' => "{0} nie jest nadrzędnym wydarzeniem cyklicznym",
    'LBL_CALENDAR_EVENT_RECURRENCE_MODULE_NOT_SUPPORTED' => "{0} nie jest uznawane za moduł z wydarzeniami cyklicznymi",

);

$mod_list_strings = array(
	'dom_cal_weekdays'=>
		array(
			"Nie",
			"Pon",
			"Wt",
			"Śr",
			"Czw",
			"Pt",
			"Sob",
		),
	'dom_cal_weekdays_long'=>
		array(
			"Niedziela",
			"Poniedziałek",
			"Wtorek",
			"Środa",
			"Czwartek",
			"Piątek",
			"Sobota",
		),
	'dom_cal_month'=>
		array(
			"",
			"Sty",
			"Lut",
			"Mar",
			"Kwi",
			"Maj",
			"Cze",
			"Lip",
			"Sie",
			"Wrz",
			"Paź",
			"Lis",
			"Gru",
		),
	'dom_cal_month_long'=>
		array(
			"",
			"Styczeń",
			"Luty",
			"Marzec",
			"Kwiecień",
			"Maj",
			"Czerwiec",
			"Lipiec",
			"Sierpień",
			"Wrzesień",
			"Październik",
			"Listopad",
			"Grudzień",
		),
);
