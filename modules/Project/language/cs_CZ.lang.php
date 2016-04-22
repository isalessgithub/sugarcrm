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
  'CONTACT_REMOVE_PROJECT_CONFIRM' => 'Opravdu chcete odstranit tento kontakt z projektu?',
  'ERR_DATE' => 'Stanovené datum připadá na nepracovní den.',
  'ERR_DURATION' => 'Doba trvání musí být celé číslo.',
  'ERR_FINISH_DATE' => 'Datum dokončení nemůže nastat dříve, než datum zahájení.',
  'ERR_IS_EMPTY' => 'nemůže být prázdný.',
  'ERR_PERCENT_COMPLETE' => '% Hotovo musí být hodnota mezi 0 a 100.',
  'ERR_PREDECESSORS_INPUT' => 'Zadané hodnoty v poli předchůdců musí být ve tvaru "1" nebo "1,2"',
  'ERR_PREDECESSORS_OUT_OF_RANGE' => 'Hodnota zadaná pro oblasti předchůdce je větší než počet řádků.',
  'ERR_PREDECESSOR_CYCLE_FAIL' => 'Zadaný předchůdce způsobuje závislost cyklu.',
  'ERR_PREDECESSOR_IS_PARENT_OR_CHILD_FAIL' => 'Zadaná předchůdce je buď mateřským úkol nebo pod-úkol.',
  'ERR_TASK_NAME_FOR_ROW' => 'Název úkolu pro řádek',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Společnosti',
  'LBL_ACCOUNT_SUBPANEL_TITLE' => 'Společnosti',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivity',
  'LBL_ACTIVITIES_TITLE' => 'Aktivity',
  'LBL_ACTUAL_DURATION' => 'Skutečná doby trvání',
  'LBL_ASSIGNED_USER_ID' => 'Přidělen:',
  'LBL_ASSIGNED_USER_NAME' => 'Přiřazeno (komu):',
  'LBL_BIWEEK_BUTTON' => '2 Týdny',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Chyby',
  'LBL_CASES_SUBPANEL_TITLE' => 'Případy',
  'LBL_COLLAPSE_ALL_BUTTON' => 'Sbalit vše',
  'LBL_CONTACTS_RESOURCE' => 'Zdroj kontaktu',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
  'LBL_CONTACT_SUBPANEL_TITLE' => 'Kontakty',
  'LBL_COPY_BUTTON' => 'Kopírovat',
  'LBL_CREATED_BY' => 'Vytvořil:',
  'LBL_CUT_BUTTON' => 'Střih',
  'LBL_DAILY_REPORT' => 'Dení report',
  'LBL_DATE' => 'Datum:',
  'LBL_DATE_END' => 'Ukončeno:',
  'LBL_DATE_ENTERED' => 'Datum zadání:',
  'LBL_DATE_MODIFIED' => 'Datum změny:',
  'LBL_DATE_START' => 'Počáteční datum:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projekty',
  'LBL_DELETED' => 'Smazán:',
  'LBL_DELETE_BUTTON' => 'Smazat',
  'LBL_DESCRIPTION' => 'Popis:',
  'LBL_DURATION' => 'Doba trvání',
  'LBL_DURATION_WIDGET' => 'duration',
  'LBL_EDITLAYOUT' => 'Úprava rozvržení',
  'LBL_EDIT_PROJECT_TASKS_TITLE' => 'Upravit úkoly projektu',
  'LBL_EXPAND_ALL_BUTTON' => 'Rozevřít vše',
  'LBL_EXPORT_TO_MS_PROJECT' => 'Exportovat jako MS Project',
  'LBL_EXPORT_TO_PDF' => 'Exportovat do PDF',
  'LBL_FILTER_ALL_TASKS' => 'Všechny úkoly',
  'LBL_FILTER_COMPLETED_TASKS' => 'Dokončené úkoly',
  'LBL_FILTER_DATE_RANGE' => 'Úkoly v časovém rozmezí',
  'LBL_FILTER_DATE_RANGE_FINISH' => 'A před',
  'LBL_FILTER_DATE_RANGE_START' => 'Úkoly, které začínají nebo končí po',
  'LBL_FILTER_INCOMPLETE_TASKS' => 'Nedokončené úkoly',
  'LBL_FILTER_MILESTONES' => 'Milníky',
  'LBL_FILTER_MY_OVERDUE_TASKS' => 'Moje zpožděné úkoly',
  'LBL_FILTER_MY_TASKS' => 'Moje úkoly',
  'LBL_FILTER_MY_UPCOMING_TASKS' => 'Moje nadcházející úkoly (1 týden)',
  'LBL_FILTER_RESOURCE' => 'Úkoly používající zdroje',
  'LBL_FILTER_VIEW' => 'Zobrazit',
  'LBL_FINISH' => 'Dokončit',
  'LBL_FINISH_WIDGET' => 'date_finish',
  'LBL_GANTT_ONLY' => 'Ganttův',
  'LBL_GRID_GANTT' => 'Mřížka/Ganttův',
  'LBL_GRID_ONLY' => 'Mřížka',
  'LBL_HIDE_OPTIONAL_COLUMNS_BUTTON' => 'Schovat volitelné sloupce',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Historie',
  'LBL_HISTORY_TITLE' => 'Historie',
  'LBL_HOLIDAY' => 'Dovolená',
  'LBL_HOLIDAYS_SUBPANEL_TITLE' => 'Dovolená',
  'LBL_HOLIDAYS_TITLE' => 'Dovolená',
  'LBL_ID' => 'ID:',
  'LBL_INDENT_BUTTON' => 'Odrážka',
  'LBL_INSERTROWS' => 'Vložit řádky',
  'LBL_INSERT_BUTTON' => 'Vložit řádky',
  'LBL_IS_TEMPLATE' => 'Je šablona',
  'LBL_LAST_WEEK' => 'Předchozí',
  'LBL_LIST_ASSIGNED_USER_ID' => 'Přidělen',
  'LBL_LIST_DAYS' => 'Dny',
  'LBL_LIST_END_DATE' => 'Ukončeno',
  'LBL_LIST_FILTER_VIEW' => 'Zobrazit:',
  'LBL_LIST_FORM_TITLE' => 'Seznam projektů',
  'LBL_LIST_NAME' => 'Název',
  'LBL_LIST_OPEN_CASES' => 'Otevřené případy',
  'LBL_LIST_OVERDUE_TASKS' => 'Zpožděné úkoly',
  'LBL_LIST_RESOURCE' => 'Zdroj:',
  'LBL_LIST_TEAM_ID' => 'Tým',
  'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Aktuální celková práce (hodin)',
  'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Odhadovaná celková práce (hodin)',
  'LBL_LIST_UPCOMING_TASKS' => 'Nadcházející úkoly (1 týden)',
  'LBL_MARK_AS_MILESTONE_BUTTON' => 'Označit jako mezník',
  'LBL_MODIFIED_USER_ID' => 'Upravil uživatel:',
  'LBL_MODULE_NAME' => 'Projekt',
  'LBL_MODULE_TITLE' => 'Projekty: Hlavní stránka',
  'LBL_MONTH_BUTTON' => 'Měsíc',
  'LBL_MORE' => 'Více...',
  'LBL_MY_PROJECTS' => 'Moje projekty',
  'LBL_MY_PROJECTS_DASHBOARD' => 'Moje projekty',
  'LBL_MY_PROJECT_TASKS' => 'Otevřené úkoly projektu',
  'LBL_NAME' => 'Název:',
  'LBL_NEW_FORM_TITLE' => 'Nový projekt',
  'LBL_NEXT_WEEK' => 'Další',
  'LBL_OPPORTUNITIES' => 'Obchody',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Obchody',
  'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Obchody',
  'LBL_OUTDENT_BUTTON' => 'Předsadit',
  'LBL_PASTE_BUTTON' => 'Vložit',
  'LBL_PDF_PROJECT_NAME' => 'Název projektu:',
  'LBL_PERCENT_BUSY' => '% zaneprázdněn',
  'LBL_PERCENT_COMPLETE' => '% hotovo',
  'LBL_PERCENT_COMPLETE_WIDGET' => 'percent_complete',
  'LBL_PERSONAL_HOLIDAY' => '-- Osobní dovolená --',
  'LBL_POPUP_DATE_FINISH' => 'Dokončit Datum:',
  'LBL_POPUP_DATE_START' => 'Datum zahájení:',
  'LBL_POPUP_PERCENT_COMPLETE' => '% Hotovo:',
  'LBL_POPUP_RESOURCE_NAME' => 'Jméno zdroje:',
  'LBL_PREDECESSORS' => 'Předchůdci',
  'LBL_PREDECESSORS_WIDGET' => 'predecessors_',
  'LBL_PRIORITY' => 'Priorita:',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Produkty',
  'LBL_PROJECTRESOURCES_SUBPANEL_TITLE' => 'Projektové zdroje',
  'LBL_PROJECTTASK_SUBPANEL_TITLE' => 'Projektové úkoly',
  'LBL_PROJECT_HOLIDAYS' => 'Dovolená',
  'LBL_PROJECT_HOLIDAYS_TITLE' => 'Projektové dovolené',
  'LBL_PROJECT_INFORMATION' => 'Projektový přehled',
  'LBL_PROJECT_NAME' => 'Jméno projektu:',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekty',
  'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Úkoly projektů',
  'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Úkoly projektů',
  'LBL_PROJECT_TEMPLATE' => 'Šablona projektu',
  'LBL_PROJECT_TEMPLATES_LIST' => 'Seznam šablon projektu',
  'LBL_PROJECT_TEMPLATES_TITLE' => 'Šablona projektu: Hlavní stránka',
  'LBL_PROJECT_TEMPLATE_NAME' => 'Jméno šablony:',
  'LBL_QUICK_NEW_PROJECT' => 'Nový projekt',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Nabídky',
  'LBL_QUOTE_SUBPANEL_TITLE' => 'Cenové nabídky',
  'LBL_RECALCULATE_DATES_BUTTON' => 'Přepočítat termíny',
  'LBL_REPORT' => 'Report',
  'LBL_RESOURCES_SUBPANEL_TITLE' => 'Zdroje',
  'LBL_RESOURCE_NAME' => 'Jméno',
  'LBL_RESOURCE_NAMES' => 'Zdroje',
  'LBL_RESOURCE_NAMES_WIDGET' => 'resource',
  'LBL_RESOURCE_REPORT' => 'Report zrdojů',
  'LBL_RESOURCE_TYPE' => 'Typ',
  'LBL_SAVE_AS_NEW_PROJECT_BUTTON' => 'Uložit jako nový projekt',
  'LBL_SAVE_AS_NEW_TEMPLATE_BUTTON' => 'Uložit jako nový projekt',
  'LBL_SAVE_AS_PROJECT' => 'Uložit jako projekt',
  'LBL_SAVE_AS_TEMPLATE' => 'Uložit jako šablonu',
  'LBL_SAVE_BUTTON' => 'Uložt',
  'LBL_SAVE_TEMPLATE_BUTTON_LABEL' => 'Uložit jako šablonu',
  'LBL_SAVE_TEMPLATE_BUTTON_TITLE' => 'Uložit jako šablonu',
  'LBL_SEARCH_FORM_TITLE' => 'Vyhledat projekt',
  'LBL_SHOW_OPTIONAL_COLUMNS_BUTTON' => 'Zobrazit volitelné sloupce',
  'LBL_START' => 'Začátek',
  'LBL_START_WIDGET' => 'date_start',
  'LBL_STATUS' => 'Stav:',
  'LBL_TASK_ID' => 'ID úkolu',
  'LBL_TASK_ID_WIDGET' => 'id',
  'LBL_TASK_NAME' => 'Jméno úkolu',
  'LBL_TASK_NAME_WIDGET' => 'description',
  'LBL_TEAM_ID' => 'Tým:',
  'LBL_TEMPLATE_NAME' => 'Jméno šablony:',
  'LBL_TOTAL_ACTUAL_EFFORT' => 'Aktuální celková práce (hodin):',
  'LBL_TOTAL_ESTIMATED_EFFORT' => 'Odhadovaná celková práce (hodin):',
  'LBL_UNMARK_AS_MILESTONE_BUTTON' => 'Odznačit jako mezník',
  'LBL_USER_RESOURCE' => 'Zroj uživatele',
  'LBL_VIEW_GANTT_TITLE' => 'Zobrazit Gantův',
  'LBL_VIEW_TASK_DETAILS_BUTTON' => 'Zobrazit detaily úkolu',
  'LBL_WEEK_BUTTON' => 'Týden',
  'LNK_NEW_PROJECT' => 'Přidat projekt',
  'LNK_NEW_PROJECT_TASK' => 'Přidat úkol projektu',
  'LNK_NEW_PROJECT_TEMPLATES' => 'Vytvořit projektovou šablonu',
  'LNK_PROJECT_DASHBOARD' => 'Zobrazit moje projekty',
  'LNK_PROJECT_LIST' => 'Seznam projektů',
  'LNK_PROJECT_RESOURCE_REPORT' => 'Zdroje reportů',
  'LNK_PROJECT_TASKS_DASHBOARD' => 'Zobrazit moje úkoly',
  'LNK_PROJECT_TASK_LIST' => 'Úkoly projektů',
  'LNK_PROJECT_TEMPLATES_LIST' => 'Zobrazit projektové šablony',
  'NTC_ASSIGN_RIGHT_TEAM' => 'Ujistěte se, že všechny zdroje projektu jsou členy tohoto týmu.',
  'NTC_DELETE_TASK_AND_SUBTASKS' => 'Jste si jisti, že chcete smazat tento úkol a všechny jeho pod-úkoly?',
  'NTC_NO_ACTIVE_PROJECTS' => 'Nemáte žádnou aktivní projekty nebo projektové úkoly.',
);

