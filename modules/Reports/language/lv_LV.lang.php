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
  'CHART_COUNT_PATTERN' => '{count} {module} kur {group_label} ir {group_text}',
  'CHART_MINMAX_PATTERN' => '{count} {module} {numerical_function} {numerical_label} ir {numerical_value}{thousands} kur {group_label} ir {group_text}',
  'CHART_SUMAVG_PATTERN' => '{count} {module} {numerical_function} {numerical_label} no {currency_symbol}{numerical_value}{thousands} kur {group_label} ir {group_text}',
  'DEFAULT_REPORT_TITLE_1' => 'Šī ceturkšņa prognoze',
  'DEFAULT_REPORT_TITLE_10' => 'Jauni pieteikumi pa mēnešiem',
  'DEFAULT_REPORT_TITLE_11' => 'Konveijerdati pēc tipa un darba grupas',
  'DEFAULT_REPORT_TITLE_12' => 'Konveijerdati pēc darba grupas un lietotāja',
  'DEFAULT_REPORT_TITLE_13' => 'Uzdevumi pēc darba grupas un lietotāja',
  'DEFAULT_REPORT_TITLE_14' => 'Zvani pēc darba grupas un lietotāja',
  'DEFAULT_REPORT_TITLE_15' => 'Tikšanās pēc darba grupas un lietotāja',
  'DEFAULT_REPORT_TITLE_16' => 'Uzņēmumi pēc tipa un industrijas',
  'DEFAULT_REPORT_TITLE_17' => 'Iegūtās iespējas pēc pavediena avota',
  'DEFAULT_REPORT_TITLE_18' => 'Pavedieni pēc pavediena avota',
  'DEFAULT_REPORT_TITLE_19' => 'Manas metrikas (šodien)',
  'DEFAULT_REPORT_TITLE_2' => 'Detalizēta prognoze',
  'DEFAULT_REPORT_TITLE_20' => 'Manas metrikas (pēdējās 7 dienas)',
  'DEFAULT_REPORT_TITLE_21' => 'Manas metrikas (pēdējās 30 dienas)',
  'DEFAULT_REPORT_TITLE_22' => 'Mans moduļu lietojums (šodien)',
  'DEFAULT_REPORT_TITLE_23' => 'Mans moduļu lietojums (pēdējās 7 dienas)',
  'DEFAULT_REPORT_TITLE_24' => 'Mans moduļu lietojums (pēdējās 30 dienas)',
  'DEFAULT_REPORT_TITLE_25' => 'Lietotāju metrikas (pēdējās 7 dienas)',
  'DEFAULT_REPORT_TITLE_26' => 'Lietotāju metrikas (pēdējās 30 dienas)',
  'DEFAULT_REPORT_TITLE_27' => 'Manos tiešajos pārskatos lietotie moduļi (pēdējās 30 dienas)',
  'DEFAULT_REPORT_TITLE_28' => 'Lēnie vaicājumi',
  'DEFAULT_REPORT_TITLE_29' => 'Mani modificētie ieraksti (pēdējās 7 dienas)',
  'DEFAULT_REPORT_TITLE_3' => 'Partneru saraksts',
  'DEFAULT_REPORT_TITLE_31' => 'Mani nesen modificētie ieraksti (pēdējās 30 dienas)',
  'DEFAULT_REPORT_TITLE_32' => 'Mani tiešo pārskatu modificētie ieraksti (pēdējās 30 dienas)',
  'DEFAULT_REPORT_TITLE_33' => 'Veidnes lietojums',
  'DEFAULT_REPORT_TITLE_34' => 'Maksimālās sesijas dienā (pēdējās 7 dienas)',
  'DEFAULT_REPORT_TITLE_35' => 'Pieprasījumi dienā (pēdējās 7 dienas)',
  'DEFAULT_REPORT_TITLE_36' => 'Ierakstīšanās dienā (pēdējās 7 dienas)',
  'DEFAULT_REPORT_TITLE_37' => 'Vaicājumi dienā (pēdējās 7 dienas)',
  'DEFAULT_REPORT_TITLE_38' => 'Faili dienā (pēdējās 7 dienas)',
  'DEFAULT_REPORT_TITLE_39' => 'Lietotāji dienā (pēdējās 7 dienas)',
  'DEFAULT_REPORT_TITLE_4' => 'Klientu saraksts',
  'DEFAULT_REPORT_TITLE_40' => 'Izmantotā atmiņa dienā (pēdējās 7 dienas)',
  'DEFAULT_REPORT_TITLE_41' => 'Aktīvās lietotāja sesijas (pēdējās 7 dienas)',
  'DEFAULT_REPORT_TITLE_42' => 'Lietotāju sesiju kopsavilkums (pēdējas 7 dienas)',
  'DEFAULT_REPORT_TITLE_43' => 'Klientu kontu īpašnieki',
  'DEFAULT_REPORT_TITLE_44' => 'Mani jaunie klientu konti',
  'DEFAULT_REPORT_TITLE_45' => 'Iespējas pēc pārdošanas posma',
  'DEFAULT_REPORT_TITLE_46' => 'Iespējas pēc tipa',
  'DEFAULT_REPORT_TITLE_47' => 'Atvērtie zvani',
  'DEFAULT_REPORT_TITLE_48' => 'Atvērtās tikšanās',
  'DEFAULT_REPORT_TITLE_49' => 'Atvērtie uzdevumi',
  'DEFAULT_REPORT_TITLE_5' => 'Zvanu saraksts pēc pēdējā komunikācijas datuma',
  'DEFAULT_REPORT_TITLE_50' => 'Iegūtās iespējas pēc klienta',
  'DEFAULT_REPORT_TITLE_51' => 'Iegūtās iespējas pēc lietotāja',
  'DEFAULT_REPORT_TITLE_52' => 'Visas atvērtās iespējas',
  'DEFAULT_REPORT_TITLE_53' => 'Visas aizvērtās iespējas',
  'DEFAULT_REPORT_TITLE_6' => 'Iespējas pēc avota',
  'DEFAULT_REPORT_TITLE_7' => 'Atvērtie pieteikumi pēc lietotāja un statusa',
  'DEFAULT_REPORT_TITLE_8' => 'Atvērtie pieteikumi pēc mēneša un lietotāja',
  'DEFAULT_REPORT_TITLE_9' => 'Atvērtie pieteikumi pēc prioritātes un lietotāja',
  'DROPDOWN_SCHEDULE_INTERVALS' => 
  array (
    3600 => 'Stundā',
    21600 => '6 stundās',
    43200 => '12 stundās',
    86400 => 'dienā',
    604800 => 'nedēļā',
    1209600 => '2 nedēļās',
    2419200 => '4 nedēļās',
  ),
  'ERR_REPORT_INVALID' => 'Atskaites "{0}" definīcija satur nederīgus laukus: {1}',
  'ERR_REPORT_INVALID_SUBJECT' => 'Atskaite ir nederīga',
  'ERR_SELECT_COLUMN' => 'Vispirms norādiet attēlojamo kolonnu',
  'LBL_1X2' => '1 X 2',
  'LBL_1_REPORT_ON' => '1. Atskaite par',
  'LBL_2X1' => '2 X 1',
  'LBL_2_FILTER' => '2. Filtrs',
  'LBL_3_CHOOSE' => '3. Izvēlieties kolonnas attēlošanai',
  'LBL_3_GROUP' => '3. Grupa',
  'LBL_4_CHOOSE' => '4. Izvēlieties kolonnas attēlošanai',
  'LBL_5_CHART_OPTIONS' => '5. Diagrammas izvēles',
  'LBL_ACCOUNT' => 'Uzņēmums',
  'LBL_ACCOUNTS' => 'Uzņēmumi',
  'LBL_ACCOUNT_REPORTS' => 'Uzņēmumu atskaites',
  'LBL_ACTIVITIES_REPORTS' => 'Darbību atskaite',
  'LBL_ADDED_FAVORITES' => 'atskaite(s) pievienotas Manām favorītatskaitēm.',
  'LBL_ADD_BTN_HELP' => 'Spiediet, lai pievienotu jaunu filtra grupu. Lietojiet grupas, lai piemērotu UN/VAI loģiku filtru kopām.',
  'LBL_ADD_COLUMN' => 'Pievienot kolonnu',
  'LBL_ADD_FILTER_TO' => 'Pievienot filtru',
  'LBL_ADD_GROUP' => 'Pievienot grupu',
  'LBL_ADD_NEW_FILTER' => 'Jauns filtrs',
  'LBL_ADD_RELATE' => 'Pievienot sasaisti',
  'LBL_ADVANCED_FILTERS' => 'Papildus filtri',
  'LBL_AFTER' => 'Pēc',
  'LBL_ALERT_CANT_ADD' => 'Nevar pievienot saistītu moduli, kamēr nav izvēlēta tabula, no kuras veikt sasaisti.\\nIzvēlieties moduli pa kreisi no iepriekš spiestās pogas &#39;Pievienot sasaisti&#39;.',
  'LBL_ALL' => 'vismaz',
  'LBL_ALL_PUBLISHED_REPORTS' => 'Visas publicētas atskaites',
  'LBL_ALL_REPORTS' => 'Visas atskaites',
  'LBL_ALT_INFORMATION' => 'Informācija',
  'LBL_ALT_SHOW' => 'Rādīt',
  'LBL_AND' => 'un',
  'LBL_ANY' => 'jebkurš',
  'LBL_ANY_ONE_OF' => 'Jebkurš no',
  'LBL_ASCENDING' => 'Augošā secībā',
  'LBL_ASSIGNED_TO_NAME' => 'Piešķirts lietotājam:',
  'LBL_AT_LEAST_ONE_DISPLAY_COLUMN' => 'Jānorāda vismaz viena kolonna attēlošanai.',
  'LBL_AT_LEAST_ONE_SUMMARY_COLUMN' => 'Vismaz vienu kopsummas kolonnu.',
  'LBL_AVAILABLE_FIELDS' => 'Pieejami lauki',
  'LBL_AVG' => 'AVG',
  'LBL_BASIC_FILTERS' => 'Pamata filtri',
  'LBL_BEFORE' => 'Pirms',
  'LBL_BUG_REPORTS' => 'Kļūdu atskaites',
  'LBL_BY_DAY' => 'Pēc dienām',
  'LBL_BY_MONTH' => 'Pēc mēneša',
  'LBL_BY_QUARTER' => 'Pēc ceturkšņa',
  'LBL_BY_YEAR' => 'Pēc gada',
  'LBL_CALL_LIST_BY_LAST_DATE_CONTACTED' => 'Zvanu saraksts pēc datumiem',
  'LBL_CALL_REPORTS' => 'Zvanu atskaites',
  'LBL_CANCEL' => 'Atcelt',
  'LBL_CANNOT_BE_EMPTY' => 'nedrīkst būt tukšs.',
  'LBL_CASE_REPORTS' => 'Pieteikumu atskaites',
  'LBL_CHANGE' => 'Mainīt',
  'LBL_CHART_DATA_HELP' => 'Izvēlēties kopsavilkumu, kas tiks attēlots diagrammā.',
  'LBL_CHART_DESCRIPTION' => 'Apraksts',
  'LBL_CHART_OPTIONS' => 'Diagrammu izvēles',
  'LBL_CHART_TYPE' => 'Diagrammas veids',
  'LBL_CHOOSE_COLUMNS' => 'Izvēlieties kolonnas attēlošanai',
  'LBL_CHOOSE_DISPLAY_COLS' => 'Izvēlieties kolonnas attēlošanai',
  'LBL_CHOOSE_SUMMARIES' => 'Izvēlieties attēlojamos kopsavilkumus',
  'LBL_CLEAR' => 'Notīrīt',
  'LBL_COLUMN_NAME' => 'Kolonas nosaukums',
  'LBL_COMBO_TYPE_AHEAD' => 'Meklēt lauku',
  'LBL_CONTACT' => 'Kontakts',
  'LBL_CONTACTS' => 'Kontakti',
  'LBL_CONTACT_REPORTS' => 'Kontaktu atskaites',
  'LBL_CONTAINS' => 'Satur',
  'LBL_CONTENT' => 'Saturs',
  'LBL_CONTRACT_REPORTS' => 'Līgumu atskaites',
  'LBL_COUNT' => 'Skaits',
  'LBL_CREATE_CUSTOM_REPORT' => 'Atskaišu vednis',
  'LBL_CREATE_REPORT' => 'Izveidot atskaiti',
  'LBL_CSV_TIMESTAMP' => 'Y_m_d_H_i_s',
  'LBL_CURRENT_QUARTER_COMMITTED_DEALS' => 'Ceturkšņa darījumi',
  'LBL_CURRENT_QUARTER_FORECAST' => 'Ceturkšņa pārdošanas prognoze',
  'LBL_CURRENT_USER' => 'Esošais lietotājs',
  'LBL_CUSTOMER_ACCOUNT_LIST' => 'Klientu saraksts',
  'LBL_DATE' => 'Sākuma datums',
  'LBL_DATE_BASED_FILTERS' => '<i>Datumu filtri ir relatīvi attiecībā uz pārskatiem, kas <b>Piešķirti</b> lietotājam</i>',
  'LBL_DAY' => 'Diena',
  'LBL_DCE_LICENSING_REPORT' => 'Licencēšanas atskaite',
  'LBL_DEFINE_FILTERS' => 'Definēt filtrus',
  'LBL_DELETE' => 'Dzēst',
  'LBL_DELETED_FIELD_IN_REPORT1' => 'Sekojošais lauks šajā atskaitē vairs nav derīgs:',
  'LBL_DELETED_FIELD_IN_REPORT2' => 'Lūdzu rediģējiet atskaiti un pārliecinieties, vai citi parametri joprojām ir pareizi.',
  'LBL_DELETE_ERROR' => 'Atskaites var dzēst tikai to īpašnieki vai sistēmas administrators.',
  'LBL_DEL_THIS' => 'Noņemt',
  'LBL_DESCENDING' => 'Dilstošā secībā',
  'LBL_DETAILED_FORECAST' => 'Detalizēta pārdošanas prognoze',
  'LBL_DISPLAY_COLS_HELP_DESC' => '<b>Soļi attēlojamo kolonnu izvēlei:</b><br/><br/>1)  <b>Saistīto moduļu</b> tabā uzklikšķiniet modulim, kura datus vēlaties izmantot savā atskaitē. Pēc noklusējuma kā primārais modulis ir izvēlēts tas, ko norādijāt " Moduļa izvēles" solī.<br/><br/>	Klikšķinot uz moduļa, variet izvēleties saistītā moduļa (apkšvirsotne koka attēlojumā) laukus. Var izvēlēties arī primārā moduļa saistīto moduļu saistītos moduļus. Moduļu izvēle nosaka, kuri atskaitēm piemēroti lauki parādās <b>Pieejamo lauku</b> tabā.<br/><br/>	2)  <b>Pieejamo lauku</b> tabā klikšķiniet uz laukiem, kuru datus jāatspoguļu Jūsu atskaitē. Laukus var meklēt arī, ievadot tekstu tabā izvietotajā teksta laukā.<br/><br/>	Kad izvēlēti visi nepieciešamie lauki no tekošā moduļa, varat izvēleties citu moduli, lai izvēlētos vēl papildus laukus. Variet izvēlēties jebkuru skitu lauku, taču jāņem vērā, ka atskaites ģenerēšana kļūs lēnāka un pasliktināsies tās lašamība.<br/><br/>	Lauku secību var mainīt tos " velkot un nometot" vajadzīgajās pozīcijās. Lauku secības maiņa nosaka rezultējošo kolonnu izvietojumu.',
  'LBL_DISPLAY_COLUMNS' => 'Radīt kolonnas',
  'LBL_DISPLAY_SUMMARIES' => 'Attēlojamo kopsavilkumu izvēle',
  'LBL_DISPLAY_SUMMARY_HELP_DESC' => '<b>Soļi, lai izvēlētos kopsavilkumu:</b><br/><br/>1) Nospiediet uz moduļa <b>Saistītie moduļi</b>skatā, no kura vēlaties lietot kopsavilkumus atskaitē. Pēc noklusējuma, primārais modulis (saknes virsotne koka skatā) ir izvēlēts.<br/><br/><br />	Jūs variet izvēlēties saistīto moduli (pēcteča virsotne koka skatā), nospiežot uz moduļa. Izpletiet atzarojumu, lai redzētu saistītos moduļus.Modulis nosaka, kuri izvēlētie lauki parādīsies <b>Pieejamie lauki</b> rūtī.<br/><br/><br />	2) Nospiediet uz lauka <b>Pieejamie lauki</b>, lai izvēlētos atskaites kopsavilkumu. Jūs variet meklēt laukus pēc tipiem teksta ieliktņos<br/><br/><br />	Kad moduļa lauki ir atzīmēti <b>Saistītie moduļi</b> jūs variet izvēlēties citu moduli, no kura izvēlēties papildus laukus kopsavilkumam atskaitē.<br/><br/>Matricas atskaitēm var izvēlēties vairāk, nekā vienu lauku, lai attēlotu vairākas vērtības vienā atskaites šūnā.',
  'LBL_DOES_NOT_CONTAIN' => 'nesatur',
  'LBL_DOES_NOT_EQUAL' => 'nav vienādi',
  'LBL_DOWN' => 'Uz leju',
  'LBL_DO_ROUND' => 'Noapaļot skaitļus virs 100000',
  'LBL_DO_ROUND_HELP' => 'Skaitļi lielāki par 100000 diagrammās tiks noapaļoti.<br>Piemērs: 350000 tiks attēlots kā 350K.',
  'LBL_DUPLICATE_AS_MATRIX' => 'Kā matrica',
  'LBL_DUPLICATE_AS_ORIGINAL' => 'Kā oriģinālo tipu',
  'LBL_DUPLICATE_AS_ROWS_AND_COLS' => 'Kā rindas un kolonnas',
  'LBL_DUPLICATE_AS_SUMMATION_DETAILS' => 'Kā summas ar detaļām',
  'LBL_DUPLICATE_AS_SUMMATON' => 'Kā summas',
  'LBL_EDIT' => 'Rediģēt',
  'LBL_EDITLAYOUT' => 'Rediģēt izkārtojumu',
  'LBL_EMAIL_REPORTS' => 'E-pastu atskaites',
  'LBL_ENDS_WITH' => 'Beidzas ar',
  'LBL_END_DATE' => 'Beigu datums',
  'LBL_EQUALS' => 'Vienāds ar',
  'LBL_EXACT' => 'Tieši',
  'LBL_EXPORT' => 'Eksports',
  'LBL_FAILURE_REPORT' => 'KĻŪDA: Atskaite',
  'LBL_FAVORITE' => 'Iecienīts',
  'LBL_FAVORITES_TITLE' => 'Manas favorītatskaites',
  'LBL_FAVORITE_REPORTS' => 'Manas favorītatskaites',
  'LBL_FAVORITE_REPORTS_TITLE' => 'Manas favorītatskaites',
  'LBL_FIELDS_PANEL_HELP_DESC' => 'Visi izvēlētā moduļa atskaitēs pieejamie lauki <B>Saistītajos Moduļos</B> ir pieejami šeit. Izvēlies lauku.',
  'LBL_FIELD_NAME' => 'Lauka nosaukums',
  'LBL_FILTER' => 'Filtrs',
  'LBL_FILTERS' => 'Filtri',
  'LBL_FILTERS_END' => 'no sekojošiem filtriem.',
  'LBL_FILTERS_HELP_DESC' => '<b>Soļi filtru definēšanai:</b><br/><br/>1) Nospiediet uz filtra definēšanai nepieciešamā moduļa <b>Saistītie moduļi</b> tabā. Pēc noklusējuma primārais modulis (augšējā virsotne koka skatā) ir izvēlēta. <br/><br/><br />	Jūs variet izvēlēties saistīto moduli (pēcteča virsotne koka skatā), nospiežot uz moduļa. Izvērsiet virsotni, lai apskatītu sasaistītos moduļus. Izvēlētais modulis nosaka, kuri atskaišu lauki parādās <b>Pieejamie lauki</b> rūtī.<br/><br/><br />	2) Nospiediet uz lauka <b>Pieejamie lauki</b> rūtī, lai tos pievienotu filtram. Jūs variet meklēt laukus pēc tipa teksta ieliktnē.<br/><br/><br />	Kad modulim ir izvēlēti lauki <b>Saistītie moduļi</b> rūtī, variet izvēlēties citu moduli, no kura iespējams papildināt izvēlēto lauku sarakstu izmantošanai filtros.<br/><br/><br />	3) Izvēlieties <b>UN</b> vai <b>VAI</b>, lai noteiktu lauku vērtību pielietojuma veidu filtrā. <br/><br/><br />	4) [Neobligāti] Nospiediet uz <b>Pievienot filtra grupu</b> lai izveidotu filtru grupas. Jūs variet sagatavot filtru grupas jebkādā skaitā un katrā no tām iekļaut jebkuru daudzumu filtra nosacījumu.<br/><br/><br />	5) [Neobligāti] Izvēlieties izpildes laika opciju filtram, lai atļautu lietotājam uzstādīt papildus fitrēšanas nosacījumus atskaite apskates gaitā.',
  'LBL_FILTER_AND' => 'AND',
  'LBL_FILTER_CONDITIONS' => 'Izvēlēties operatoru.',
  'LBL_FILTER_DATE_RANGE_FINISH' => 'Līdz',
  'LBL_FILTER_DATE_RANGE_START' => 'No',
  'LBL_FILTER_OR' => 'OR',
  'LBL_FORECAST_REPORTS' => 'Prognožu atskaites',
  'LBL_FUNNEL' => 'Piltuve',
  'LBL_GRAND_TOTAL' => 'Kopsumma',
  'LBL_GREATER_THAN' => 'Lielāks kā',
  'LBL_GROUP_BY' => 'Grupēt pēc',
  'LBL_GROUP_BY_HELP_DESC' => '<b>Soļi, lai definētu grupēšanu pēc:</b><br/><br/>1)  <b>Saistītie moduļi</b> tabā izvēlieties moduli, kuru vēlaties lietot ierakstu grupēšanai atskaitē. Pēc noklusējuma, primārais modulis (augšējā virsotne koka skatā) ir izvēlēts.<br/><br/><br />	Jūs variet izvēlēties saistīto moduli (pēcteča virsotne koka skatā), nospiežot uz moduļa. Izpletiet atzarojumu, lai redzētu saistītos moduļus.Modulis nosaka, kuri izvēlētie lauki parādīsies <b>Pieejamie lauki</b> rūtī.<br/><br/><br />	2) Nospiediet uz lauka <b>Pieejamie lauki</b>, lai pēc tā grupētu ierakstus atskaitē. Jūs variet meklēt laukus pēc tipiem teksta ieliktņos<br/><br/><br />	Kad moduļa lauki ir atzīmēti <b>Saistītie moduļi</b> tabā, jūs variet izvēlēties citu moduli, no kura atlasīt papildus laukus ierakstu grupēšanai atskaitē. Atskaite kļūst nepārskatāma, kad tiek grupēts pēc vairākiem kritērijiem<br/><br/>Matricas atskaitēm var izvēlēties vairāk, nekā vienu lauku, lai attēlotu vairākas vērtības vienā atskaits šūnā.',
  'LBL_GROUP_BY_REQUIRED' => 'Lai izveidotu diagrammu, ir nepieciešama vismaz viena grupēšanas un viena summēšanas kolona.',
  'LBL_HELLO' => 'Sveiki',
  'LBL_HELP' => 'Palīdzība',
  'LBL_HIDE_COLUMNS' => 'Slēpt kolonnas',
  'LBL_HIDE_SUMMARIES' => 'Paslēpt kopsavilkumus',
  'LBL_HORIZ_BAR' => 'Horizontāla josla',
  'LBL_IS' => 'Ir',
  'LBL_IS_BETWEEN' => 'Ir starp',
  'LBL_IS_EMPTY' => 'Ir tukšs',
  'LBL_IS_NOT' => 'nav',
  'LBL_IS_NOT_EMPTY' => 'Nav tukšs',
  'LBL_IS_NOT_ONE_OF' => 'Nav viens no',
  'LBL_IS_PUBLISHED' => 'Publicēts',
  'LBL_LABEL' => 'Etiķete',
  'LBL_LAST_30_DAYS' => 'Pēdējās 30 dienās',
  'LBL_LAST_7_DAYS' => 'Pēdējās 7 dienās',
  'LBL_LAST_MONTH' => 'Pēdējā mēnesī',
  'LBL_LAST_QUARTER' => 'Pēdējā ceturksnī',
  'LBL_LAST_WEEK' => 'Pēdējā nedēļā',
  'LBL_LAST_YEAR' => 'Pēdējā gadā',
  'LBL_LEAD' => 'Interesents',
  'LBL_LEADS' => 'Interesenti',
  'LBL_LEAD_REPORTS' => 'Interesentu atskaites',
  'LBL_LEFT' => 'Pa kreisi',
  'LBL_LESS_THAN' => 'Mazāk kā',
  'LBL_LINE' => 'Līnija',
  'LBL_LIST_FORM_TITLE' => 'Atskaites',
  'LBL_LIST_PUBLISHED' => 'Publicēts',
  'LBL_MATRIX_LAYOUT' => 'Izkārtojuma iespējas:',
  'LBL_MATRIX_REPORT' => 'Matricas atskaite',
  'LBL_MATRIX_REPORT_DESC' => 'Izveidot atskaiti ar kopsummām, kur rezultāti attēloti tabulā un grupēti ne vairāk kā pēc 3 laukiem.',
  'LBL_MAX' => 'MAX',
  'LBL_MAXIMUM_3_GROUP_BY' => 'Matricas atskaitē nedrīkst būt vairāk par 3 grupām.',
  'LBL_MEETING_REPORTS' => 'Sapulču atskaites',
  'LBL_MIN' => 'MIN',
  'LBL_MINIMUM_2_GROUP_BY' => 'Matricas atskaitē jābūt vismaz 2 grupām.',
  'LBL_MISSING_FIELDS' => 'Iztrūkstoši lauki',
  'LBL_MISSING_INPUT_VALUE' => 'nav ievadīti dati.',
  'LBL_MISSING_SECOND_INPUT_VALUE' => 'nav vērtības otrajā ievades laukā.',
  'LBL_MODULE' => 'Modulis',
  'LBL_MODULE_CHANGE_PROMPT' => 'Izvēlētā moduļa mainīšana radīs zaudējumus  filtros, kolonās un citur. Vai tiešām vēlaties turpināt?',
  'LBL_MODULE_NAME' => 'Atskaites',
  'LBL_MODULE_NAME_SAVED' => 'Moduļa nosaukums',
  'LBL_MODULE_TITLE' => 'Atskaites',
  'LBL_MODULE_VIEWER_TITLE' => 'Atskaišu pārlūks',
  'LBL_MONTH' => 'Mēnesis',
  'LBL_MORE' => 'Vairāk',
  'LBL_MY_ACCOUNT_REPORTS' => 'Manu klientu atskaites',
  'LBL_MY_BUG_REPORTS' => 'Manu kļūdu atskaites',
  'LBL_MY_CALL_REPORTS' => 'Manu zvanu atskaites',
  'LBL_MY_CASE_REPORTS' => 'Manu pieteikumu atskaites',
  'LBL_MY_CONTACT_REPORTS' => 'Manu kontaktu atskaites',
  'LBL_MY_CONTRACT_REPORTS' => 'Mani līguma atskaites',
  'LBL_MY_EMAIL_REPORTS' => 'Manu e-pastu atskaites',
  'LBL_MY_FORECAST_REPORTS' => 'Manu prognožu atskaites',
  'LBL_MY_LEAD_REPORTS' => 'Manu interesentu atskaites',
  'LBL_MY_MEETING_REPORTS' => 'Manu sapulču atskaites',
  'LBL_MY_OPPORTUNITY_REPORTS' => 'Manu iespēju atskaites',
  'LBL_MY_PROJECT_TASK_REPORTS' => 'Manas projektu uzdevumu atskaites',
  'LBL_MY_PROSPECT_REPORTS' => 'Manu mērķu atskaites',
  'LBL_MY_QUOTE_REPORTS' => 'Manu piedāvājumu atskaites',
  'LBL_MY_REPORTS' => 'Manas atskaites',
  'LBL_MY_SAVED_REPORTS' => 'Manas Saglabātas atskaites',
  'LBL_MY_TASK_REPORTS' => 'Manu uzdevumu atskaites',
  'LBL_MY_TEAMS_REPORTS' => 'Manas darba grupas atskaites',
  'LBL_MY_TEAM_ACCOUNT_REPORTS' => 'Manas darba grupas klientu atskaites',
  'LBL_MY_TEAM_BUG_REPORTS' => 'Manas darba grupas kļūdu atskaites',
  'LBL_MY_TEAM_CALL_REPORTS' => 'Manas darba grupas zvanu atskaites',
  'LBL_MY_TEAM_CASE_REPORTS' => 'Manas darba grupas pieteikumu atskaites',
  'LBL_MY_TEAM_CONTACT_REPORTS' => 'Manas darba grupas kontaktu atskaites',
  'LBL_MY_TEAM_CONTRACT_REPORTS' => 'Manas darba grupas līgumu atskaites',
  'LBL_MY_TEAM_EMAIL_REPORTS' => 'Manas darba grupas e-pastu atskaites',
  'LBL_MY_TEAM_FORECAST_REPORTS' => 'Manas darba grupas prognožu atskaites',
  'LBL_MY_TEAM_LEAD_REPORTS' => 'Manas darba grupas interesentu atskaites',
  'LBL_MY_TEAM_MEETING_REPORTS' => 'Manas darba grupas sapulču atskaites',
  'LBL_MY_TEAM_OPPORTUNITY_REPORTS' => 'Manas darba grupas iespēju atskaites',
  'LBL_MY_TEAM_PROJECT_TASK_REPORTS' => 'Manas darba grupas projekta uzdevumu atskaites',
  'LBL_MY_TEAM_PROSPECT_REPORTS' => 'Manas darba grupas mērķu atskaites',
  'LBL_MY_TEAM_QUOTE_REPORTS' => 'Manas darba grupas piedāvājumu atskaites',
  'LBL_MY_TEAM_TASK_REPORTS' => 'Manas darba grupas uzdevumu atskaites',
  'LBL_NEXT' => 'Tālāk >',
  'LBL_NEXT_30_DAYS' => 'Nākošās 30 dienās',
  'LBL_NEXT_7_DAYS' => 'Nākošās 7 dienās',
  'LBL_NEXT_MONTH' => 'Nākošā mēnesī',
  'LBL_NEXT_QUARTER' => 'Nākošais kvartāls',
  'LBL_NEXT_RUN' => 'Nākamais e-pasts',
  'LBL_NEXT_WEEK' => 'Nākošā nedēļā',
  'LBL_NEXT_YEAR' => 'Nākošā gadā',
  'LBL_NONE' => '-- neviens --',
  'LBL_NONE_STRING' => 'Neviens',
  'LBL_NOTHING_WAS_SELECTED' => 'nekas nav izvēlēts.',
  'LBL_NOT_ON' => 'Nav On',
  'LBL_NO_ACCESS' => 'Jums nav tiesību piekļūt šai atskaitei',
  'LBL_NO_CHART' => 'Diagrammas nav',
  'LBL_NO_CHART_DRAWN_MESSAGE' => 'Diagrammu nevar izveidot, jo nepietiek datu',
  'LBL_NO_FILTERS' => 'nav filtru.',
  'LBL_NO_IMAGE' => 'Nav attēla',
  'LBL_NO_REPORTS' => 'Nav rezultātu.',
  'LBL_OF' => 'pēc',
  'LBL_ON' => 'Uz',
  'LBL_ONE_OF' => 'Viens no',
  'LBL_OPPORTUNITIES' => 'Iespējas',
  'LBL_OPPORTUNITIES_BY_LEAD_SOURCE' => 'Iespējas pēc interesentu veidiem',
  'LBL_OPPORTUNITY' => 'Iespēja',
  'LBL_OPPORTUNITY_REPORTS' => 'Iespēju atskaites',
  'LBL_OPTIONAL_HELP' => 'Izvēlieties ieliktni, lai attēlotu primārā moduļa ierakstus pat, ja saistītā moduļa ieraksti neeksistē. Ja ieliktnis nav izvēlēts, primārā moduļa ieraksti tiks attēloti tikai tad, ja tiem ir viens vai vairāki saistīto moduļu ieraksti.',
  'LBL_OPTIONAL_MODULES' => 'Papildus moduļi',
  'LBL_ORDER_BY' => 'Kārtot pēc',
  'LBL_OUTER_JOIN_CHECKBOX' => 'Papildus sasaistītie moduļi',
  'LBL_OWNER' => 'Piešķirts lietotājam',
  'LBL_PARTNER_ACCOUNT_LIST' => 'Partneru saraksts',
  'LBL_PDF_TIMESTAMP' => 'Y_m_d_H_i',
  'LBL_PIE' => 'Sektoru',
  'LBL_PREVIEW_REPORT' => 'Apskate',
  'LBL_PREVIOUS' => '< Atpakaļ',
  'LBL_PROJECT_TASK_REPORTS' => 'Projektu uzdevumu atskaites',
  'LBL_PROSPECT_REPORTS' => 'Mērķa atskaites',
  'LBL_PUBLISH' => 'publicēt',
  'LBL_PUBLISHED_ACCOUNT_REPORTS' => 'Publicētas klientu askaites',
  'LBL_PUBLISHED_BUG_REPORTS' => 'Publicētas kļūdu askaites',
  'LBL_PUBLISHED_CALL_REPORTS' => 'Publicētas zvanu askaites',
  'LBL_PUBLISHED_CASE_REPORTS' => 'Publicētas pieteikumu askaites',
  'LBL_PUBLISHED_CONTACT_REPORTS' => 'Publicētas kontaktu askaites',
  'LBL_PUBLISHED_CONTRACT_REPORTS' => 'Publicētas līgumu atskaites',
  'LBL_PUBLISHED_EMAIL_REPORTS' => 'Publicētas e-pastu atskaites',
  'LBL_PUBLISHED_FORECAST_REPORTS' => 'Publicētas prognožu atskaites',
  'LBL_PUBLISHED_LEAD_REPORTS' => 'Publicētas interesentu taskaites',
  'LBL_PUBLISHED_MEETING_REPORTS' => 'Publicētas sapulču atskaites',
  'LBL_PUBLISHED_OPPORTUNITY_REPORTS' => 'Publicētas iespēju askaites',
  'LBL_PUBLISHED_PROJECT_TASK_REPORTS' => 'Publicētas projektu uzdevumu atskaites',
  'LBL_PUBLISHED_PROSPECT_REPORTS' => 'Publicētas mērķu atskaites',
  'LBL_PUBLISHED_QUOTE_REPORTS' => 'Publicētas piedāvājumu atskaites',
  'LBL_PUBLISHED_TASK_REPORTS' => 'Publicētas uzdevumu askaites',
  'LBL_QUARTER' => 'Ceturksnis',
  'LBL_QUARTER_ABBREVIATION' => 'Q',
  'LBL_QUERY' => 'Pieprasījums',
  'LBL_QUOTE_REPORTS' => 'Piedāvājumu atskaites',
  'LBL_RELATED' => 'Saistīts ar:',
  'LBL_RELATED_MODULES' => 'Saistīti moduļi',
  'LBL_RELATED_MODULES_PANEL_HELP_DESC' => 'Pamata modulis un saistītie moduļi parādās šeit. Izvēlieties moduli.',
  'LBL_RELATED_TABLE_BLANK' => 'Lūdzu izvēlieties moduli, lai sasaistītu.',
  'LBL_REMOVE' => 'Noņemt',
  'LBL_REMOVED_FAVORITES' => 'atskaite(s) izņemtas no Manām favorītatskaitēm.',
  'LBL_REMOVE_BTN_HELP' => 'Spiediet, lai izņemtu šo filtra grupu.',
  'LBL_REMOVE_GROUP' => 'Izņemt filtra grupu',
  'LBL_REPORTS' => 'Atskaites',
  'LBL_REPORT_ATT_MODULES' => 'Moduļi',
  'LBL_REPORT_ATT_NAME' => 'Nosaukums',
  'LBL_REPORT_COLLAPSE_ALL' => 'Savērst visus',
  'LBL_REPORT_DATA_COLUMN_ORDERS' => 'Šī atskaite satur datus šādā kolonu secībā:',
  'LBL_REPORT_DETAILS' => 'Atskaites informācija [Alt+D]',
  'LBL_REPORT_EXPAND_ALL' => 'Izvērst visus',
  'LBL_REPORT_FILTER_MODIFIED_MESSAGE' => 'Atskaites filtri ir mainīti kopš atskaites pēdējās izpildes reizes.',
  'LBL_REPORT_GRAND_TOTAL' => 'Kopsumma',
  'LBL_REPORT_GROUP_BY' => 'Grupēt pēc',
  'LBL_REPORT_HIDE_CHART' => 'Slēpt diagrammu',
  'LBL_REPORT_HIDE_DETAILS' => 'Slēpt detaļas',
  'LBL_REPORT_LAST_RUN_DATE' => 'Piekļūts',
  'LBL_REPORT_MODIFIED_MESSAGE' => 'Atskaite ir izmainīta kopš pēdējās izpildes reizes.',
  'LBL_REPORT_MODULES' => 'Atskaišu moduļi',
  'LBL_REPORT_MODULE_VIEWER_TITLE' => 'Atskaišu pārlūks',
  'LBL_REPORT_NAME' => 'Atskaites nosaukums',
  'LBL_REPORT_RESET_FILTER' => 'Atiestatīt',
  'LBL_REPORT_RESULTS' => 'Rezultāti',
  'LBL_REPORT_RESULTS_MESSAGE' => 'Spiediet uz Izpildīt atskaiti, lai iegūtu rezultātus.',
  'LBL_REPORT_RUN_WITH_FILTER' => 'Pielietot',
  'LBL_REPORT_SCHEDULE_TITLE' => 'Ieplānot',
  'LBL_REPORT_SHOW_CHART' => 'Rādīt diagrammu',
  'LBL_REPORT_SHOW_DETAILS' => 'Rādīt detaļas',
  'LBL_REPORT_TYPE' => 'Atskaites veids',
  'LBL_REPORT__ATT_TYPE' => 'Tips',
  'LBL_RIGHT' => 'Pa labi',
  'LBL_ROLLOVER' => 'Velciet aiz stabiņa, lai apskatītu detaļas.',
  'LBL_ROLLOVER_SQUARE' => 'Velciet kvadrātu, lai apskatītu detaļas.',
  'LBL_ROLLOVER_WEDGE' => 'Velciet aiz ķīļa, lai apskatītu detaļas.',
  'LBL_ROWS_AND_COLUMNS_REPORT' => 'Rindu un kolonnu atskaites',
  'LBL_ROWS_AND_COLUMNS_REPORT_DESC' => 'Izveidot tabulveida atskaiti no izvēlētajiem laukiem, kuru vērtības atbilst norādītājiem kritērijiem.',
  'LBL_RUNTIME_FILTERS' => 'Izpildlaika filtri',
  'LBL_RUNTIME_HELP' => 'Izvēlieties šo ielikni, lai ļautu lietotājiem mainīt filtra vērtība pirms atskaites sagatavošanas.',
  'LBL_RUN_BUTTON_TITLE' => 'Izpildīt atskaiti [Alt+R]',
  'LBL_RUN_REPORT_BUTTON_KEY' => 'R',
  'LBL_RUN_REPORT_BUTTON_LABEL' => 'Izpildīt atskaiti',
  'LBL_RUN_TIME_LABEL' => 'Izpildes laiks',
  'LBL_SAVED_SEARCH' => 'Saglabāta meklēšana un izkārtojums',
  'LBL_SAVE_AS' => 'Saglabāt kā',
  'LBL_SAVE_RUN' => 'Saglabāt un izpildīt',
  'LBL_SCHEDULED_REPORT_MSG_BODY1' => 'un saglabāta ar nosaukumu "',
  'LBL_SCHEDULED_REPORT_MSG_BODY2' => '". Ja vēlaties mainīt atskaites uzstādījumus, jums ir jāpiesakās Sugar programmā un jādodas uz sadaļu "Atskaites".',
  'LBL_SCHEDULED_REPORT_MSG_INTRO' => 'Pielikumā ir automātiski veidota atskaite, kas sūtīta jums no Sugar programmas. Atskaite izveidota',
  'LBL_SCHEDULE_ACTIVE' => 'Aktīvs',
  'LBL_SCHEDULE_EMAIL' => 'Ieplānot atskaiti',
  'LBL_SCHEDULE_REPORT' => 'Ieplānot atskaiti',
  'LBL_SCHEDULE_TYPE' => 'Grafika tips',
  'LBL_SEARCH_FORM_TITLE' => 'Atskaišu saraksts',
  'LBL_SELECT' => 'Izvēlieties',
  'LBL_SELECT_GROUP_BY' => 'Definēt grupu pēc',
  'LBL_SELECT_MODULE' => 'Izvēlieties moduli',
  'LBL_SELECT_MODULE_BUTTON' => 'Nospiediet uz ikonas, lai izvēlētos moduli.',
  'LBL_SELECT_RECORD' => 'Izvēlieties ierakstu',
  'LBL_SELECT_REPORT_TYPE' => 'Nospiediet uz ikonas, lai izvēlētos atskaites veidu.',
  'LBL_SELECT_REPORT_TYPE_ICON' => 'Izvēlēties atskaites veidu',
  'LBL_SHOW' => 'Rādīt',
  'LBL_SHOW_DETAILS' => 'Paradīt detaļas',
  'LBL_SHOW_QUERY' => 'Radīt pieprasījumu',
  'LBL_SORT' => 'Kārtot',
  'LBL_STARTS_WITH' => 'Sākas ar',
  'LBL_START_DATE' => 'Sākuma datums',
  'LBL_STATUS' => 'Statuss',
  'LBL_SUBJECT' => 'Temats',
  'LBL_SUBMIT_QUERY' => 'Izpildīt pieprasījumu',
  'LBL_SUCCESS_REPORT' => 'VEIKSMĪGI: Atskaite',
  'LBL_SUM' => 'SUM',
  'LBL_SUMMARY_COLUMNS' => 'Summu kolonnas',
  'LBL_SUMMATION_REPORT' => 'Kopsummu atskaite',
  'LBL_SUMMATION_REPORT_DESC' => 'Izveidot  tabulāru atskaiti, kas atspoguļo norādītajiem kritērijiem atbilstošus ierakstus. Datus var attēlot arī diagrammā.',
  'LBL_SUMMATION_REPORT_WITH_DETAILS' => 'Kopsummu atskaite ar detalizētu informāciju',
  'LBL_SUMMATION_REPORT_WITH_DETAILS_DESC' => 'Izveidot atskaiti ar kopsummām, kur bez atlasītājiem datiem redzami arī tiem atbilstoši papildus dati.',
  'LBL_SUMMATION_WITH_DETAILS' => 'summas ar detaļām',
  'LBL_TABLE_CHANGED' => 'Moduļu saraksts ir modificēts. Lūdzu pārbaudītu kritērijus, kuri ievadīti grupas cilnē.',
  'LBL_TASK_REPORTS' => 'Uzdevumu atskaites',
  'LBL_TEAM' => 'Darba grupas',
  'LBL_THERE_ARE_NO_REPORTS_OF_THIS_TYPE' => 'Tāda veida atskaites nav atrastas.',
  'LBL_THIS_MONTH' => 'Šajā mēnesī',
  'LBL_THIS_QUARTER' => 'Šajā ceturksnī',
  'LBL_THIS_WEEK' => 'Šajā nedēlā',
  'LBL_THIS_YEAR' => 'Šajā gadā',
  'LBL_TIME_INTERVAL' => 'Laika intervāls',
  'LBL_TITLE' => 'Virsraksts',
  'LBL_TODAY' => 'Šodien',
  'LBL_TOMORROW' => 'Rīt',
  'LBL_TOTAL' => 'Kopsumma',
  'LBL_TOTAL_IS' => 'Summa ir',
  'LBL_TO_PDF' => 'Saglabāt kā PDF',
  'LBL_TYPE' => 'Veids',
  'LBL_UNTITLED' => 'bez nosaukuma',
  'LBL_UN_PUBLISH' => 'atcelt publicēto',
  'LBL_UP' => 'Uz augšu',
  'LBL_UPDATE_SCHEDULE' => 'Precizēt plānu',
  'LBL_USER_EMPTY_HELP' => 'Lai apskatītu ierakstus, kuri nav piesaistīti lietotājiem, atzīmējiet&#39;Savstarpēji sasaistītie moduļi&#39; izvēlnes rūtiņui &#39;Atskaišu detaļas&#39; solī papildus &#39;Ir tukšs&#39; opcijas izvēlei &#39; Piesaistītajam lietotāja filtrā. Rezultātā tiks attēloti visi ieraksti, kuri nav saistīti ar lietotājiem.',
  'LBL_USE_COLUMN_FOR' => 'Norādiet datus',
  'LBL_VERT_BAR' => 'Vertikāla josla',
  'LBL_VIEW' => 'skatīt',
  'LBL_VIEWER_RUNTIME_HELP' => 'Norādiet vērtības <b>Izpildlaika filtriem</b> un spiediet pogu <b>Apstiprināt</b> lai atkārtoti izpildītu atskaiti.',
  'LBL_WAS_NOT_SAVED' => 'netika saglabāta',
  'LBL_WAS_SAVED' => 'tika saglabāta',
  'LBL_WEIGHTED_AVG_AMOUNT' => 'Vidējais svērtais apjoms',
  'LBL_WEIGHTED_SUM_AMOUNT' => 'Svērtais summārais apjoms',
  'LBL_WHOSE_MAXIMUM' => 'kur maksimums',
  'LBL_WHOSE_MINIMUM' => 'kur minimums',
  'LBL_WITH_AN_AVERAGE' => 'ar vidējo vērtību',
  'LBL_WITH_A_TOTAL' => 'ar summu',
  'LBL_WITH_DETAILS' => 'Ar detaļām',
  'LBL_YEAR' => 'Gads',
  'LBL_YESTERDAY' => 'Vakar',
  'LBL_YOU_HAVE_NO_SAVED_REPORTS.' => 'Jums nav saglabātu atskaišu.',
  'LNK_NEW_ACCOUNT' => 'Jauns uzņēmums',
  'LNK_NEW_CALL' => 'Reģistrēt zvanu',
  'LNK_NEW_CASE' => 'Jauns pieteikums',
  'LNK_NEW_CONTACT' => 'Jauns kontakts',
  'LNK_NEW_EMAIL' => 'Arhivēt e-pastu',
  'LNK_NEW_MEETING' => 'Ieplānot tikšanos',
  'LNK_NEW_NOTE' => 'Izveidot piezīmi vai pielikumu',
  'LNK_NEW_OPPORTUNITY' => 'Jauna iespēja',
  'LNK_NEW_TASK' => 'Jauns uzdevums',
  'MSG_NO_PERMISSIONS' => 'Jums nav tiesības rediģēt šo atskaiti',
  'MSG_UNABLE_PUBLISH_ANOTHER' => 'Nav iespējams publicēt. Ar tādu nosaukumu jau ir publicēta cita atskaite.',
  'MSG_UNABLE_PUBLISH_YOU_OWN' => 'Nav iespējams atcelt cita lietotāja atskaites publikāciju. Jūsu atskaitei ir tāds pats nosaukums.',
);

