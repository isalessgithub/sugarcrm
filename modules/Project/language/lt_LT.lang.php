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
  'CONTACT_REMOVE_PROJECT_CONFIRM' => 'Ar tikrai norite ištrinti šį kontaktą iš projektų?',
  'ERR_DATE' => 'Nurodyta data sutampa su ne darbo diena.',
  'ERR_DURATION' => 'Trukmė turi būti sveikas skaičius.',
  'ERR_FINISH_DATE' => 'Pabaigos data negali ankstesnė už pradžios datą.',
  'ERR_IS_EMPTY' => 'negali būti tuščias.',
  'ERR_PERCENT_COMPLETE' => 'Užbaigta % turi būti tarp 0 ir 100.',
  'ERR_PREDECESSORS_INPUT' => 'Pirmtako lauke įvestos reikšmės turi būti šiame formate: "1" arba "1,2"',
  'ERR_PREDECESSORS_OUT_OF_RANGE' => 'Pirmtako lauke įvesta reikšmė yra didesnė negu eilučių skaičius.',
  'ERR_PREDECESSOR_CYCLE_FAIL' => 'Nurodytas pirmtakas sukelia priklausomybės ciklą.',
  'ERR_PREDECESSOR_IS_PARENT_OR_CHILD_FAIL' => 'Nurodytas pirmtakas yra arba pagrindinė užduotis arba sub-užduotis.',
  'ERR_TASK_NAME_FOR_ROW' => 'Užduoties pavadinimas eilutei',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Klientai',
  'LBL_ACCOUNT_SUBPANEL_TITLE' => 'Klientai',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Priminimai',
  'LBL_ACTIVITIES_TITLE' => 'Priminimai',
  'LBL_ACTUAL_DURATION' => 'Faktinė trukmė',
  'LBL_ASSIGNED_USER_ID' => 'Atsakingas:',
  'LBL_ASSIGNED_USER_NAME' => 'Atsakingas:',
  'LBL_BIWEEK_BUTTON' => '2 savaitės',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Klaidos',
  'LBL_CASES_SUBPANEL_TITLE' => 'Aptarnavimas',
  'LBL_COLLAPSE_ALL_BUTTON' => 'Viską sutraukti',
  'LBL_CONTACTS_RESOURCE' => 'Kontaktas',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktai',
  'LBL_CONTACT_SUBPANEL_TITLE' => 'Kontaktai',
  'LBL_COPY_BUTTON' => 'Kopijuoti',
  'LBL_CREATED_BY' => 'Sukūrė :',
  'LBL_CUT_BUTTON' => 'Iškirpti',
  'LBL_DAILY_REPORT' => 'Dienos ataskaita',
  'LBL_DATE' => 'Data:',
  'LBL_DATE_END' => 'Pabaigos data:',
  'LBL_DATE_ENTERED' => 'Sukūrimo data:',
  'LBL_DATE_MODIFIED' => 'Redaguota:',
  'LBL_DATE_START' => 'Pradžios data:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projektai',
  'LBL_DELETED' => 'Ištrinta:',
  'LBL_DELETE_BUTTON' => 'Ištrinti',
  'LBL_DESCRIPTION' => 'Aprašymas:',
  'LBL_DURATION' => 'Trukmė',
  'LBL_DURATION_WIDGET' => 'trukmė',
  'LBL_EDITLAYOUT' => 'Redaguoti išdėstymą',
  'LBL_EDIT_PROJECT_TASKS_TITLE' => 'Redaguoti projekto užduotis',
  'LBL_EXPAND_ALL_BUTTON' => 'Viską išplėsti',
  'LBL_EXPORT_TO_MS_PROJECT' => 'Eksportuoti į MS Project',
  'LBL_EXPORT_TO_PDF' => 'Eksportuoti kaip PDF',
  'LBL_FILTER_ALL_TASKS' => 'Visos užduotys',
  'LBL_FILTER_COMPLETED_TASKS' => 'Užbaigtos užduotys',
  'LBL_FILTER_DATE_RANGE' => 'Užduotys laikotarpyje',
  'LBL_FILTER_DATE_RANGE_FINISH' => 'Ir prieš',
  'LBL_FILTER_DATE_RANGE_START' => 'Užduotys kurios prasideda ir baigiasi po',
  'LBL_FILTER_INCOMPLETE_TASKS' => 'Neužbaigtos užduotys',
  'LBL_FILTER_MILESTONES' => 'Esminiai įvykiai',
  'LBL_FILTER_MY_OVERDUE_TASKS' => 'Mano vėluojančios užduotys',
  'LBL_FILTER_MY_TASKS' => 'Mano užduotys',
  'LBL_FILTER_MY_UPCOMING_TASKS' => 'Manęs laukiančios užduotys (1 savaitė)',
  'LBL_FILTER_RESOURCE' => 'Užduotys naudojančios resursus',
  'LBL_FILTER_VIEW' => 'Rodyti',
  'LBL_FINISH' => 'Pabaiga',
  'LBL_FINISH_WIDGET' => 'Pabaigos data',
  'LBL_GANTT_ONLY' => 'Gantt',
  'LBL_GRID_GANTT' => 'Lentelė/Gantt',
  'LBL_GRID_ONLY' => 'Lentelė',
  'LBL_HIDE_OPTIONAL_COLUMNS_BUTTON' => 'Paslėpti papildomus stulpelius',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Istorija',
  'LBL_HISTORY_TITLE' => 'Istorija',
  'LBL_HOLIDAY' => 'Atostogos:',
  'LBL_HOLIDAYS_SUBPANEL_TITLE' => 'Atostogos',
  'LBL_HOLIDAYS_TITLE' => 'Atostogos',
  'LBL_ID' => 'Id:',
  'LBL_INDENT_BUTTON' => 'Padidinti įtrauką',
  'LBL_INSERTROWS' => 'Įdėti eilutes',
  'LBL_INSERT_BUTTON' => 'Įdėti eilutes',
  'LBL_IS_TEMPLATE' => 'Yra šablonas',
  'LBL_LAST_WEEK' => 'Ankstesnė',
  'LBL_LIST_ASSIGNED_USER_ID' => 'Atsakingas',
  'LBL_LIST_DAYS' => 'dienos',
  'LBL_LIST_END_DATE' => 'Pabaigos data',
  'LBL_LIST_FILTER_VIEW' => 'Žiūrėti',
  'LBL_LIST_FORM_TITLE' => 'Projektų sąrašas',
  'LBL_LIST_NAME' => 'Pavadinimas',
  'LBL_LIST_OPEN_CASES' => 'Neužbaigti aptarnavimai',
  'LBL_LIST_OVERDUE_TASKS' => 'Vėluojančios užduotys',
  'LBL_LIST_RESOURCE' => 'Resursas:',
  'LBL_LIST_TEAM_ID' => 'Komanda',
  'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Viso faktinės pastangos (val)',
  'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Viso prognozuotos pastangos (val)',
  'LBL_LIST_UPCOMING_TASKS' => 'Laukiančios užduotys (1 savaitė)',
  'LBL_MARK_AS_MILESTONE_BUTTON' => 'Pažymėti, kaip esminį įvykį:',
  'LBL_MODIFIED_USER_ID' => 'Redaguotojo Id:',
  'LBL_MODULE_NAME' => 'Projektas',
  'LBL_MODULE_TITLE' => 'Projektai: Pradžia',
  'LBL_MONTH_BUTTON' => 'Mėnuo',
  'LBL_MORE' => 'Daugiau...',
  'LBL_MY_PROJECTS' => 'Mano projektai',
  'LBL_MY_PROJECTS_DASHBOARD' => 'Mano projektų panelis',
  'LBL_MY_PROJECT_TASKS' => 'Mano projektų užduotys',
  'LBL_NAME' => 'Pavadinimas:',
  'LBL_NEW_FORM_TITLE' => 'Naujas projektas',
  'LBL_NEXT_WEEK' => 'Kita',
  'LBL_OPPORTUNITIES' => 'Pardavimai',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Pardavimai',
  'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Pardavimai',
  'LBL_OUTDENT_BUTTON' => 'Sumažinti įtrauką',
  'LBL_PASTE_BUTTON' => 'Įdėti',
  'LBL_PDF_PROJECT_NAME' => 'Projekto pavadinimas:',
  'LBL_PERCENT_BUSY' => 'Užimta %',
  'LBL_PERCENT_COMPLETE' => 'Užbaigta %',
  'LBL_PERCENT_COMPLETE_WIDGET' => 'Procentais užbaigta',
  'LBL_PERSONAL_HOLIDAY' => '-- Asmeninės atostogos --',
  'LBL_POPUP_DATE_FINISH' => 'Pabaigos data:',
  'LBL_POPUP_DATE_START' => 'Pradžios data:',
  'LBL_POPUP_PERCENT_COMPLETE' => 'Užbaigta %:',
  'LBL_POPUP_RESOURCE_NAME' => 'Resurso pavadinimas:',
  'LBL_PREDECESSORS' => 'Pirmtakas',
  'LBL_PREDECESSORS_WIDGET' => 'pirmtakas',
  'LBL_PRIORITY' => 'Svarba:',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Prekės',
  'LBL_PROJECTRESOURCES_SUBPANEL_TITLE' => 'Projekto ištekliai',
  'LBL_PROJECTTASK_SUBPANEL_TITLE' => 'Projekto užduotys',
  'LBL_PROJECT_HOLIDAYS' => 'Atostogos:',
  'LBL_PROJECT_HOLIDAYS_TITLE' => 'Atostogos',
  'LBL_PROJECT_INFORMATION' => 'Projekto informacija',
  'LBL_PROJECT_NAME' => 'Projekto pavadinimas',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projektai',
  'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Projekto užduotys',
  'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Projekto užduotis',
  'LBL_PROJECT_TEMPLATE' => 'Projektų šablonas',
  'LBL_PROJECT_TEMPLATES_LIST' => 'Projektų šablonų sąrašas',
  'LBL_PROJECT_TEMPLATES_TITLE' => 'Projektų šablonai: Pradžia',
  'LBL_PROJECT_TEMPLATE_NAME' => 'Šablono pavadinimas:',
  'LBL_QUICK_NEW_PROJECT' => 'Naujas projektas',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Pasiūlymai',
  'LBL_QUOTE_SUBPANEL_TITLE' => 'Pasiūlymai',
  'LBL_RECALCULATE_DATES_BUTTON' => 'Perskaičiuoti datas',
  'LBL_REPORT' => 'Ataskaita',
  'LBL_RESOURCES_SUBPANEL_TITLE' => 'Resursai',
  'LBL_RESOURCE_NAME' => 'Vardas:',
  'LBL_RESOURCE_NAMES' => 'Resursas',
  'LBL_RESOURCE_NAMES_WIDGET' => 'resursas',
  'LBL_RESOURCE_REPORT' => 'Resursų ataskaita',
  'LBL_RESOURCE_TYPE' => 'Tipas:',
  'LBL_SAVE_AS_NEW_PROJECT_BUTTON' => 'Saugoti kaip naują projektą',
  'LBL_SAVE_AS_NEW_TEMPLATE_BUTTON' => 'Išsaugoti kaip naują šabloną',
  'LBL_SAVE_AS_PROJECT' => 'Saugoti kaip projektą',
  'LBL_SAVE_AS_TEMPLATE' => 'Išsaugoti kaip šabloną',
  'LBL_SAVE_BUTTON' => 'Saugoti',
  'LBL_SAVE_TEMPLATE_BUTTON_LABEL' => 'Išsaugoti kaip šabloną',
  'LBL_SAVE_TEMPLATE_BUTTON_TITLE' => 'Išsaugoti kaip šabloną',
  'LBL_SEARCH_FORM_TITLE' => 'Projekto paieška',
  'LBL_SHOW_OPTIONAL_COLUMNS_BUTTON' => 'Rodyti papildomus stulpelius',
  'LBL_START' => 'Pradžia',
  'LBL_START_WIDGET' => 'Pradžios data',
  'LBL_STATUS' => 'Statusas:',
  'LBL_TASK_ID' => 'ID',
  'LBL_TASK_ID_WIDGET' => 'id',
  'LBL_TASK_NAME' => 'Užduoties pavadinimas',
  'LBL_TASK_NAME_WIDGET' => 'aprašymas',
  'LBL_TEAM_ID' => 'Komanda:',
  'LBL_TEMPLATE_NAME' => 'Šablono pavadinimas',
  'LBL_TOTAL_ACTUAL_EFFORT' => 'Viso faktinės pastangos (val):',
  'LBL_TOTAL_ESTIMATED_EFFORT' => 'Viso prognozuotos pastangos (val):',
  'LBL_UNMARK_AS_MILESTONE_BUTTON' => 'Nuimti esminio įvykio pažymėjimą:',
  'LBL_USER_RESOURCE' => 'Vartotojas',
  'LBL_VIEW_GANTT_TITLE' => 'Žiūrėti Gantt diagramą',
  'LBL_VIEW_TASK_DETAILS_BUTTON' => 'Rodyti užduotis išsamiau',
  'LBL_WEEK_BUTTON' => 'Savaitė',
  'LNK_NEW_PROJECT' => 'Sukurti projektą',
  'LNK_NEW_PROJECT_TASK' => 'Sukurti projekto užduotį',
  'LNK_NEW_PROJECT_TEMPLATES' => 'Sukurti projekto šabloną',
  'LNK_PROJECT_DASHBOARD' => 'Mano projektų panelis',
  'LNK_PROJECT_LIST' => 'Projektai',
  'LNK_PROJECT_RESOURCE_REPORT' => 'Resursų ataskaita',
  'LNK_PROJECT_TASKS_DASHBOARD' => 'Mano projektų užduočių panelis',
  'LNK_PROJECT_TASK_LIST' => 'Projekto užduotis',
  'LNK_PROJECT_TEMPLATES_LIST' => 'Projekto šablonai',
  'NTC_ASSIGN_RIGHT_TEAM' => 'Įsitikinkite, kad visi projekto resursai yra šios komandos nariai.',
  'NTC_DELETE_TASK_AND_SUBTASKS' => 'Ar tikrai norite ištrinti šią užduotį ir jos visas sub-užduotis?',
  'NTC_NO_ACTIVE_PROJECTS' => 'Jūs neturite jokių aktyvių projektų ir projekto užduočių.',
);

