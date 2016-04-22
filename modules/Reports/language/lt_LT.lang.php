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
  'CHART_COUNT_PATTERN' => '{count} {module} kur {group_label} yra {group_text}',
  'CHART_MINMAX_PATTERN' => '{count} {module} {numerical_function} {numerical_label} yra {numerical_value}{thousands} kur {group_label} yra {group_text}',
  'CHART_SUMAVG_PATTERN' => '{count} {module} {numerical_function} {numerical_label} iš {currency_symbol}{numerical_value}{thousands} kur {group_label} yra {group_text}',
  'DEFAULT_REPORT_TITLE_1' => 'Šio ketvirčio prognozės',
  'DEFAULT_REPORT_TITLE_10' => 'Nauji aptarnavimai pagal mėnesį',
  'DEFAULT_REPORT_TITLE_11' => 'Pipeline pagal tipą ir komandą',
  'DEFAULT_REPORT_TITLE_12' => 'Pipeline pagal komandą ir vartotoją',
  'DEFAULT_REPORT_TITLE_13' => 'Užduotys pagal komandą ir vartotoją',
  'DEFAULT_REPORT_TITLE_14' => 'Skambučiai pagal komandą ir vartotoją',
  'DEFAULT_REPORT_TITLE_15' => 'Susitikimai pagal komandą ir vartotoją',
  'DEFAULT_REPORT_TITLE_16' => 'Klientai pagal tipą ir pramonės šaką',
  'DEFAULT_REPORT_TITLE_17' => 'Sėkmingi pardavimai pagal pritraukimo metodą',
  'DEFAULT_REPORT_TITLE_18' => 'Potencialių kontaktai pagal pritraukimo metodą',
  'DEFAULT_REPORT_TITLE_19' => 'Mano vartojimo statistika (šiandien)',
  'DEFAULT_REPORT_TITLE_2' => 'Išsamios prognozės',
  'DEFAULT_REPORT_TITLE_20' => 'Mano vartojimo statistika (paskutinės 7 dienos)',
  'DEFAULT_REPORT_TITLE_21' => 'Mano vartojimo statistika (paskutinės 30 dienų)',
  'DEFAULT_REPORT_TITLE_22' => 'Mano modulių vartojimas (šiandien)',
  'DEFAULT_REPORT_TITLE_23' => 'Mano modulių vartojimas (paskutinės 7 dienos)',
  'DEFAULT_REPORT_TITLE_24' => 'Mano modulių vartojimas (paskutinės 30 dienų)',
  'DEFAULT_REPORT_TITLE_25' => 'Vartotojų statistika (paskutinės 7 dienos)',
  'DEFAULT_REPORT_TITLE_26' => 'Vartotojų statistika (paskutinės 30 dienų)',
  'DEFAULT_REPORT_TITLE_27' => 'Moduliai kurie buvo naudojami ataskaitose (paskutinės 30 dienų)',
  'DEFAULT_REPORT_TITLE_28' => 'Lėtos užklausos',
  'DEFAULT_REPORT_TITLE_29' => 'Mano pakeisti įrašai (paskutinės 7 dienos)',
  'DEFAULT_REPORT_TITLE_3' => 'Partnerių sąrašas',
  'DEFAULT_REPORT_TITLE_31' => 'Mano pakeisti įrašai (paskutinės 30 dienų)',
  'DEFAULT_REPORT_TITLE_32' => 'Įrašai kurie pasikeitė generuojant ataskaitas (paskutinės 30 dienų)',
  'DEFAULT_REPORT_TITLE_33' => 'Šablono panaudojimas',
  'DEFAULT_REPORT_TITLE_34' => 'Daugiausia sesijų per dieną (paskutinės 7 dienos)',
  'DEFAULT_REPORT_TITLE_35' => 'Užklausimai per dieną (paskutinės 7 dienos)',
  'DEFAULT_REPORT_TITLE_36' => 'Prisijungimai per dieną (paskutinės 7 dienos)',
  'DEFAULT_REPORT_TITLE_37' => 'Užklausos per dieną (paskutinės 7 dienos)',
  'DEFAULT_REPORT_TITLE_38' => 'Failai per dieną (paskutinės 7 dienos)',
  'DEFAULT_REPORT_TITLE_39' => 'Vartotojai per dieną (paskutinės 7 dienos)',
  'DEFAULT_REPORT_TITLE_4' => 'Klientų sąrašas',
  'DEFAULT_REPORT_TITLE_40' => 'Atminties panaudojimas per dieną (paskutinės 7 dienos)',
  'DEFAULT_REPORT_TITLE_41' => 'Aktyvios vartotojų sesijos (paskutinės 7 dienos)',
  'DEFAULT_REPORT_TITLE_42' => 'Vartotojų sesijų santrauka (paskutinės 7 dienos)',
  'DEFAULT_REPORT_TITLE_43' => 'Už klientus atsakingi',
  'DEFAULT_REPORT_TITLE_44' => 'Mano nauji klientai',
  'DEFAULT_REPORT_TITLE_45' => 'Pardavimai pagal etapą',
  'DEFAULT_REPORT_TITLE_46' => 'Pardavimai pagal tipą',
  'DEFAULT_REPORT_TITLE_47' => 'Neužbaigti skambučiai',
  'DEFAULT_REPORT_TITLE_48' => 'Neužbaigti susitikimai',
  'DEFAULT_REPORT_TITLE_49' => 'Neužbaigtos užduotys',
  'DEFAULT_REPORT_TITLE_5' => 'Skambučiai pagal paskutinį kontaktavimą',
  'DEFAULT_REPORT_TITLE_50' => 'Sėkmingai pardavimai pagal klientą',
  'DEFAULT_REPORT_TITLE_51' => 'Sėkmingai pardavimai pagal vartotoją',
  'DEFAULT_REPORT_TITLE_52' => 'Visos neužbaigti pardavimai',
  'DEFAULT_REPORT_TITLE_53' => 'Visi užbaigti pardavimai',
  'DEFAULT_REPORT_TITLE_6' => 'Pardavimai pagal pritraukimo metodą',
  'DEFAULT_REPORT_TITLE_7' => 'Aptarnavimai pagal vartotoją ir statusą',
  'DEFAULT_REPORT_TITLE_8' => 'Aptarnavimai pagal mėnesį ir vartotoją',
  'DEFAULT_REPORT_TITLE_9' => 'Aptarnavimai pagal svarbą ir vartotoją',
  'DROPDOWN_SCHEDULE_INTERVALS' => 
  array (
    3600 => 'Kas valandą',
    21600 => 'Kas 6 valandas',
    43200 => 'Kas 12 valandų',
    86400 => 'Kas dieną',
    604800 => 'Kas savaitę',
    1209600 => 'Kas 2 savaites',
    2419200 => 'Kas 4 savaites',
  ),
  'ERR_REPORT_INVALID' => 'Ataskaita "{0}" turi neteisingų laukų: {1}',
  'ERR_REPORT_INVALID_SUBJECT' => 'Neteisinga ataskaita',
  'ERR_SELECT_COLUMN' => 'Prašome pirmiausia pasirinkti rodomą stulpelį.',
  'LBL_1X2' => '1 X 2',
  'LBL_1_REPORT_ON' => '1. Pranešti',
  'LBL_2X1' => '2 X 1',
  'LBL_2_FILTER' => '2. Filtruoti',
  'LBL_3_CHOOSE' => '3. Pasirinkite rodomus stulpelius',
  'LBL_3_GROUP' => '3. Grupuoti',
  'LBL_4_CHOOSE' => '4. Pasirinkite rodomus stulpelius',
  'LBL_5_CHART_OPTIONS' => '5. Grafiko nustatymai',
  'LBL_ACCOUNT' => 'Klientas',
  'LBL_ACCOUNTS' => 'Klientai',
  'LBL_ACCOUNT_REPORTS' => 'Klientų ataskaitos',
  'LBL_ACTIVITIES_REPORTS' => 'Priminimų ataskaitos',
  'LBL_ADDED_FAVORITES' => 'ataskaitos įtrauktos į mano mėgstamiausias ataskaitas.',
  'LBL_ADD_BTN_HELP' => 'Paspauskite, kad įdėti naują filtrų grupę. Naudokite filtrų grupes, kai reikia apjungti kelis filtrus su IR/ARBA logika.',
  'LBL_ADD_COLUMN' => 'Įdėti stulpelį',
  'LBL_ADD_FILTER_TO' => 'įdėti filtrą į',
  'LBL_ADD_GROUP' => 'Įdėti filtrų grupę',
  'LBL_ADD_NEW_FILTER' => 'Įdėti naują filtrą',
  'LBL_ADD_RELATE' => 'Įdėti susijusį',
  'LBL_ADVANCED_FILTERS' => 'Išplėstiniai filtrai',
  'LBL_AFTER' => 'Po',
  'LBL_ALERT_CANT_ADD' => 'Prieš įdedant susijusį modulį, pasirinkite pradinį modulį.\\n Pasirinkite modulį iš lentelės šalia mygtuko &#39;Įdėti susijusį&#39;.',
  'LBL_ALL' => 'Bent',
  'LBL_ALL_PUBLISHED_REPORTS' => 'Visos paskelbtos ataskaitos',
  'LBL_ALL_REPORTS' => 'Ataskaitos',
  'LBL_ALT_INFORMATION' => 'Informacija',
  'LBL_ALT_SHOW' => 'Rodyti',
  'LBL_AND' => 'ir',
  'LBL_ANY' => 'Bet koks',
  'LBL_ANY_ONE_OF' => 'Bet kuris iš',
  'LBL_ASCENDING' => 'Didėjimo tvarka',
  'LBL_ASSIGNED_TO_NAME' => 'Atsakingas:',
  'LBL_AT_LEAST_ONE_DISPLAY_COLUMN' => 'Prašome pasirinkti bent vieną matomą stulpelį.',
  'LBL_AT_LEAST_ONE_SUMMARY_COLUMN' => 'Bent vienas santraukos stulpelis.',
  'LBL_AVAILABLE_FIELDS' => 'Galimi laukai',
  'LBL_AVG' => 'VIDURKIS',
  'LBL_BASIC_FILTERS' => 'Baziniai filtrai',
  'LBL_BEFORE' => 'Prieš',
  'LBL_BUG_REPORTS' => 'Klaidų ataskaitos',
  'LBL_BY_DAY' => 'Dienomis',
  'LBL_BY_MONTH' => 'Mėnesiais',
  'LBL_BY_QUARTER' => 'Ketvirčiais',
  'LBL_BY_YEAR' => 'Metais',
  'LBL_CALL_LIST_BY_LAST_DATE_CONTACTED' => 'Skambučių sąrašas pagal paskutinį kontaktavimą',
  'LBL_CALL_REPORTS' => 'Skambučių ataskaitos',
  'LBL_CANCEL' => 'Atšaukti',
  'LBL_CANNOT_BE_EMPTY' => 'negali būti tuščias.',
  'LBL_CASE_REPORTS' => 'Aptarnavimo ataskaitos',
  'LBL_CHANGE' => 'Pakeisti',
  'LBL_CHART_DATA_HELP' => 'Pasirinkite santrauką, kuri būtų atvaizduota grafike.',
  'LBL_CHART_DESCRIPTION' => 'Aprašymas',
  'LBL_CHART_OPTIONS' => 'Grafiko nustatymai',
  'LBL_CHART_TYPE' => 'Grafiko tipas',
  'LBL_CHOOSE_COLUMNS' => 'Pasirinkite kuriuos stulpelius rodyti',
  'LBL_CHOOSE_DISPLAY_COLS' => 'Pasirinkti rodomus stulpelius',
  'LBL_CHOOSE_SUMMARIES' => 'Pasirinkite kurias santraukas rodyti',
  'LBL_CLEAR' => 'Išvalyti',
  'LBL_COLUMN_NAME' => 'Stulpelio pavadinimas',
  'LBL_COMBO_TYPE_AHEAD' => 'Ieškoti lauko',
  'LBL_CONTACT' => 'Kontaktas',
  'LBL_CONTACTS' => 'Kontaktai',
  'LBL_CONTACT_REPORTS' => 'Kontaktų ataskaitos',
  'LBL_CONTAINS' => 'Turi',
  'LBL_CONTENT' => 'Turinys',
  'LBL_CONTRACT_REPORTS' => 'Sutarčių ataskaitos',
  'LBL_COUNT' => 'Skaičiuoti',
  'LBL_CREATE_CUSTOM_REPORT' => 'Ataskaitos vedlys',
  'LBL_CREATE_REPORT' => 'Sukurti ataskaitą',
  'LBL_CSV_TIMESTAMP' => 'Y_m_d_H_i_s',
  'LBL_CURRENT_QUARTER_COMMITTED_DEALS' => 'Šio ketvirčio sudaryti sandoriai',
  'LBL_CURRENT_QUARTER_FORECAST' => 'Šio ketvirčio prognozės',
  'LBL_CURRENT_USER' => 'Esamas vartotojas',
  'LBL_CUSTOMER_ACCOUNT_LIST' => 'Klientų sąrašas',
  'LBL_DATE' => 'Pradžios data',
  'LBL_DATE_BASED_FILTERS' => '<i>Datų filtrai yra susiję <b>Atsakingo</b> vartotojo, už ataskaitą, laiko juosta</i>',
  'LBL_DAY' => 'Diena',
  'LBL_DCE_LICENSING_REPORT' => 'Licencijų ataskaita',
  'LBL_DEFINE_FILTERS' => 'Nustatyti filtrus',
  'LBL_DELETE' => 'Ištrinti',
  'LBL_DELETED_FIELD_IN_REPORT1' => 'Šis ataskaitos laukas nėra teisingas:',
  'LBL_DELETED_FIELD_IN_REPORT2' => 'Prašome paredaguoti ataskaitą ir įsitikinti, kad parametrai yra dar teisingi.',
  'LBL_DELETE_ERROR' => 'Tik ataskaitos savininkas ir administratorius turi teisę ištrinti ataskaitas.',
  'LBL_DEL_THIS' => 'Išimti',
  'LBL_DESCENDING' => 'Mažėjimo tvarka',
  'LBL_DETAILED_FORECAST' => 'Prognozė išsamiau',
  'LBL_DISPLAY_COLS_HELP_DESC' => '<b>Žingsniai kaip nurodyti kokius stulpelius atvaizduoti:</b><br/><br/>1) <b>Susiję moduliai</b> langelyje pasirinkite modulį, kurį norėsite panaudoti įrašų atvaizdavime. Pagal nutylėjimą, pagrindinis modulis yra pažymėtas.<br/><br/><br />	Jūs galite pasirinkti susijusį modulį, paspausdami ant to modulio. Galite išplėsti visą pavaldžią hierarchiją ir pamatyti kitus modulius susijusius su pasirinktu moduliu. Pasirinkus tam tikrą modulį, jo laukai matysis langelyje <b>Galimi laukai</b><br/><br/><br />	2) Paspauskite ant lauko <b>Galimi laukai</b> langelyje, kad būtent pagal šis laukas būtų atvaizduotas ataskaitoje. Jūs taip pat galite lengvai surasti Jums reikalingą lauką, jei jo įvesite jo pavadinimą į paieškos langelį.<br/><br/><br />	Pasirinkus iš tam tikro modulio reikalingus laukus, Jūs galite imti kitą modulį <b>Susiję moduliai</b> langelyje ir jo laukus taip pat įtraukti į ataskaitos atvaizdavimą. Jūs galite pasirinkti neribotą skaičių laukų, tačiau per daug laukų įdėjus, ataskaitos ilgiau užtruks susigeneruoti ir pačią ataskaitą bus sunkiau suprasti.<br/><br/><br />	Jūs taip pat galite keisti laukų seką, juos nutempdami į norimą poziciją. Pakeitus laukų seką, pasikeis stulpelių seka ir ataskaitoje.',
  'LBL_DISPLAY_COLUMNS' => 'Rodyti stulpelį',
  'LBL_DISPLAY_SUMMARIES' => 'Pasirinkite santraukos atvaizdavimą',
  'LBL_DISPLAY_SUMMARY_HELP_DESC' => '<b>Žingsniai kaip nurodyti santraukos atvaizdavimą:</b><br/><br/>1) <b>Susiję moduliai</b> langelyje pasirinkite modulį, kurį norėsite panaudoti ataskaitų santraukoje. Pagal nutylėjimą, pagrindinis modulis yra pažymėtas.<br/><br/><br />	Jūs galite pasirinkti susijusį modulį, paspausdami ant to modulio. Galite išplėsti visą pavaldžią hierarchiją ir pamatyti kitus modulius susijusius su pasirinktu moduliu. Pasirinkus tam tikrą modulį, jo laukai matysis langelyje <b>Galimi laukai</b>.<br/><br/><br />	2) Paspauskite ant lauko <b>Galimi laukai</b> langelyje, kad būtent pagal šis laukas būtų įtrauktas į ataskaitos santrauką. Jūs taip pat galite lengvai surasti Jums reikalingą lauką, jei jo įvesite jo pavadinimą į paieškos langelį.<br/><br/><br />	Pasirinkus iš tam tikro modulio reikalingus laukus santraukai, Jūs galite imti kitą modulį <b>Susiję moduliai</b> langelyje ir jo laukus taip pat įtraukti į ataskaitos santrauką. <br/><br/>Matricinėse ataskaitose Jūs galite pasirinkti daugiau nei vieną lauką, kurie bus atvaizduoti viename ataskaitos langelyje.',
  'LBL_DOES_NOT_CONTAIN' => 'Neturi',
  'LBL_DOES_NOT_EQUAL' => 'Nėra lygus',
  'LBL_DOWN' => 'Žemyn',
  'LBL_DO_ROUND' => 'Suapvalinti skaičius didesnius nei 100000',
  'LBL_DO_ROUND_HELP' => 'Skaičiai didesni nei 100000 grafikuose bus suapvalinti.<br>Pavyzdys: 350000 bus atvaizduoti kaip 350 tūkst.',
  'LBL_DUPLICATE_AS_MATRIX' => 'Kaip matricinę',
  'LBL_DUPLICATE_AS_ORIGINAL' => 'Kaip originalų tipą',
  'LBL_DUPLICATE_AS_ROWS_AND_COLS' => 'Kaip lentelinę',
  'LBL_DUPLICATE_AS_SUMMATION_DETAILS' => 'Kaip detalizuotą suminę',
  'LBL_DUPLICATE_AS_SUMMATON' => 'Kaip suminę',
  'LBL_EDIT' => 'Redaguoti',
  'LBL_EDITLAYOUT' => 'Redaguoti išdėstymą',
  'LBL_EMAIL_REPORTS' => 'El. pašto ataskaitos',
  'LBL_ENDS_WITH' => 'Baigiasi',
  'LBL_END_DATE' => 'Pabaigos data',
  'LBL_EQUALS' => 'Lygus',
  'LBL_EXACT' => 'Tikslus',
  'LBL_EXPORT' => 'Eksportuoti',
  'LBL_FAILURE_REPORT' => 'NESĖKMĖ: Ataskaita',
  'LBL_FAVORITE' => 'Mėgstamas',
  'LBL_FAVORITES_TITLE' => 'mano mėgstamos ataskaitos',
  'LBL_FAVORITE_REPORTS' => 'Mano mėgstamiausios',
  'LBL_FAVORITE_REPORTS_TITLE' => 'Mano mėgstamiausios ataskaitos',
  'LBL_FIELDS_PANEL_HELP_DESC' => 'Visi pasirinkto modulio laukai yra matomi <B>Susiję moduliai</B>. Pasirinkite lauką.',
  'LBL_FIELD_NAME' => 'Lauko pavadinimas',
  'LBL_FILTER' => 'Filtruoti',
  'LBL_FILTERS' => 'Filtrai',
  'LBL_FILTERS_END' => 'iš šių filtrų.',
  'LBL_FILTERS_HELP_DESC' => '<b>Žingsniai kaip nurodyti filtrus:</b><br/><br/>1) <b>Susiję moduliai</b> langelyje pasirinkite modulį, kurio filtrus Jūs norėsite naudoti. Pagal nutylėjimą, pagrindinis modulis yra pažymėtas. <br/><br/><br />	Jūs galite pasirinkti susijusį modulį, paspausdami ant to modulio. Galite išplėsti visą pavaldžią hierarchiją ir pamatyti kitus modulius susijusius su pasirinktu moduliu.  Pasirinkus tam tikrą modulį, jo laukai matysis langelyje <b>Galimi laukai</b>.<br/><br/><br />	2) Paspauskite ant lauko <b>Galimi laukai</b> langelyje, kad jis būtų įtrauktas į filtrus. Jūs taip pat galite lengvai surasti Jums reikalingą lauką, jei jo įvesite jo pavadinimą į paieškos langelį.<br/><br/><br />	Pasirinkus iš tam tikro modulio reikalingus laukus filtrams, Jūs galite imti kitą modulį <b>Susiję moduliai</b> langelyje ir jo laukus taip pat įtraukti į filtrus.<br/><br/><br />	3) Pasirinkite <b>IR</b> arba <b>ARBA</b>, kad nurodyti ar sąlygai patenkinti užtenka vieno ar visų filtrų validavimo vienu metu.<br/><br/><br />	4) [Papildomai] Paspauskite <b>Įdėti filtrų grupę</b>, kad sukurti filtrų grupes. Jūs galite sukurti neribotą skaičių filtrų grupių ir neribotą skaičių filtrų pačiose filtrų grupėse.<br/><br/><br />	5) [Papildomai] Pažymėkite varnelę <b>dinaminis</b> ant filtro, jei norite, kad vartotojas galėtų sugeneruotą ataskaitą toliau filtruotis savo nuožiūra.',
  'LBL_FILTER_AND' => 'IR',
  'LBL_FILTER_CONDITIONS' => 'Pasirinkti operatorių:',
  'LBL_FILTER_DATE_RANGE_FINISH' => 'Iki',
  'LBL_FILTER_DATE_RANGE_START' => 'Nuo',
  'LBL_FILTER_OR' => 'ARBA',
  'LBL_FORECAST_REPORTS' => 'Prognozių ataskaitos',
  'LBL_FUNNEL' => 'Piltuvėlio diagrama',
  'LBL_GRAND_TOTAL' => 'Bendra suma',
  'LBL_GREATER_THAN' => 'Daugiau nei',
  'LBL_GROUP_BY' => 'Grupuoti pagal',
  'LBL_GROUP_BY_HELP_DESC' => '<b>Žingsniai kaip nurodyti grupavimą pagal:</b><br></br>1) <b>Susiję moduliai</b> langelyje pasirinkite modulį, kurį norėsite panaudoti įrašų grupavime. Pagal nutylėjimą, pagrindinis modulis yra pažymėtas. <br/><br/><br />	Jūs galite pasirinkti susijusį modulį, paspausdami ant to modulio. Galite išplėsti visą pavaldžią hierarchiją ir pamatyti kitus modulius susijusius su pasirinktu moduliu. Pasirinkus tam tikrą modulį, jo laukai matysis langelyje <b>Galimi laukai.</b><br/><br/><br />	2) Paspauskite ant lauko <b>Galimi laukai</b> langelyje, kad būtent pagal šį lauką būtų grupuojama ataskaita. Jūs taip pat galite lengvai surasti Jums reikalingą lauką, jei jo įvesite jo pavadinimą į paieškos langelį.<br/><br/><br />	Pasirinkus iš tam tikro modulio reikalingus laukus, Jūs galite imti kitą modulį <b>Susiję moduliai</b> langelyje ir jo laukus taip pat įtraukti į ataskaitos grupavimą. Tačiau atminkite, kad ataskaita bus sunku suprasti, jei bus grupuojama daugiau nei dviem lygiais<br/><br/><br />	Jūs taip pat galite keisti laukų seką, juos nutempdami į norimą poziciją.  Pakeitus seką, pasikeis ir rezultatų pateikimas.<br/><br/> Matricinėse ataskaitos, Jūs galite grupuoti duomenis iki trijų laukų.',
  'LBL_GROUP_BY_REQUIRED' => 'Bent vienas grupavimo ir santraukos stulpelis yra reikalingas, kad būtų galima atvaizduoti grafiką.<br>',
  'LBL_HELLO' => 'Sveiki',
  'LBL_HELP' => 'Pagalba',
  'LBL_HIDE_COLUMNS' => 'Paslėpti stulpelius',
  'LBL_HIDE_SUMMARIES' => 'Paslėpti santrauką',
  'LBL_HORIZ_BAR' => 'Horizontali diagrama',
  'LBL_IS' => 'Yra',
  'LBL_IS_BETWEEN' => 'Yra tarp',
  'LBL_IS_EMPTY' => 'Yra tuščias',
  'LBL_IS_NOT' => 'Nėra',
  'LBL_IS_NOT_EMPTY' => 'Nėra tuščias',
  'LBL_IS_NOT_ONE_OF' => 'Nėra vienas iš',
  'LBL_IS_PUBLISHED' => 'Yra paskelbtas',
  'LBL_LABEL' => 'Etiketė',
  'LBL_LAST_30_DAYS' => 'Paskutinės 30 dienų',
  'LBL_LAST_7_DAYS' => 'Paskutinės 7 dienas',
  'LBL_LAST_MONTH' => 'Praėjusį mėnesį',
  'LBL_LAST_QUARTER' => 'Praėjusį ketvirtį',
  'LBL_LAST_WEEK' => 'Praėjusią savaitę',
  'LBL_LAST_YEAR' => 'Paskutiniais metais',
  'LBL_LEAD' => 'Potencialus kontaktas',
  'LBL_LEADS' => 'Potencialūs kontaktai',
  'LBL_LEAD_REPORTS' => 'Potencialių kontaktų ataskaitos',
  'LBL_LEFT' => 'Kairė',
  'LBL_LESS_THAN' => 'Mažiau nei',
  'LBL_LINE' => 'Skritulinė diagrama',
  'LBL_LIST_FORM_TITLE' => 'Ataskaitos',
  'LBL_LIST_PUBLISHED' => 'Paskelbtas',
  'LBL_MATRIX_LAYOUT' => 'Išdėstymo nustatymai:',
  'LBL_MATRIX_REPORT' => 'Matricinė ataskaita',
  'LBL_MATRIX_REPORT_DESC' => 'Sukurti suminę ataskaitą, kur rezultatai būtų atvaizduoti tinklelio formate, sugrupuoti ne dagiau kaip po tris laukus.',
  'LBL_MAX' => 'MAKSIMUMAS',
  'LBL_MAXIMUM_3_GROUP_BY' => 'Matricinė ataskaita negali turėti daugiau kaip 3 sugrupavimus.',
  'LBL_MEETING_REPORTS' => 'Susitikimų ataskaitos',
  'LBL_MIN' => 'MINIMUMAS',
  'LBL_MINIMUM_2_GROUP_BY' => 'Matricinė ataskaita privalo turėti bent 2 sugrupavimus.',
  'LBL_MISSING_FIELDS' => 'Trūkstami laukai',
  'LBL_MISSING_INPUT_VALUE' => 'trūksta lauko reikšmės.',
  'LBL_MISSING_SECOND_INPUT_VALUE' => 'trūksta antros lauko reikšmės.',
  'LBL_MODULE' => 'Modulis',
  'LBL_MODULE_CHANGE_PROMPT' => 'Jei pakeisite modulį, prarasite filtrus, stulpelius ir t.t. Ar norite tęsti?',
  'LBL_MODULE_NAME' => 'Ataskaitos',
  'LBL_MODULE_NAME_SAVED' => 'Modulio pavadinimas',
  'LBL_MODULE_TITLE' => 'Ataskaitos: Pradžia',
  'LBL_MODULE_VIEWER_TITLE' => 'Ataskaitos: Pradžia',
  'LBL_MONTH' => 'Mėnuo',
  'LBL_MORE' => 'Daugiau',
  'LBL_MY_ACCOUNT_REPORTS' => 'Mano klientų ataskaitos',
  'LBL_MY_BUG_REPORTS' => 'Mano klaidų ataskaitos',
  'LBL_MY_CALL_REPORTS' => 'Mano skambučių ataskaitos',
  'LBL_MY_CASE_REPORTS' => 'Mano aptarnavimo ataskaitos',
  'LBL_MY_CONTACT_REPORTS' => 'Mano kontaktų ataskaitos',
  'LBL_MY_CONTRACT_REPORTS' => 'Mano sutarčių ataskaitos',
  'LBL_MY_EMAIL_REPORTS' => 'Mano el. pašto ataskaitos',
  'LBL_MY_FORECAST_REPORTS' => 'Mano prognozių ataskaitos',
  'LBL_MY_LEAD_REPORTS' => 'Mano potencialių kontaktų ataskaitos',
  'LBL_MY_MEETING_REPORTS' => 'Mano susitikimų ataskaitos',
  'LBL_MY_OPPORTUNITY_REPORTS' => 'Mano pardavimų ataskaitos',
  'LBL_MY_PROJECT_TASK_REPORTS' => 'Mano projekto užduočių ataskaitos',
  'LBL_MY_PROSPECT_REPORTS' => 'Mano adresatų ataskaitos',
  'LBL_MY_QUOTE_REPORTS' => 'Mano pasiūlymų ataskaitos',
  'LBL_MY_REPORTS' => 'Mano ataskaitos',
  'LBL_MY_SAVED_REPORTS' => 'Mano išsaugotos ataskaitos',
  'LBL_MY_TASK_REPORTS' => 'Mano užduočių ataskaitos',
  'LBL_MY_TEAMS_REPORTS' => 'Mano komandos ataskaitos',
  'LBL_MY_TEAM_ACCOUNT_REPORTS' => 'Mano komandos klientų ataskaitos',
  'LBL_MY_TEAM_BUG_REPORTS' => 'Mano komandos klaidų ataskaitos',
  'LBL_MY_TEAM_CALL_REPORTS' => 'Mano komandos skambučių ataskaitos',
  'LBL_MY_TEAM_CASE_REPORTS' => 'Mano komandos aptarnavimo ataskaitos',
  'LBL_MY_TEAM_CONTACT_REPORTS' => 'Mano komandos kontaktų ataskaitos',
  'LBL_MY_TEAM_CONTRACT_REPORTS' => 'Mano komandos sutarčių ataskaitos',
  'LBL_MY_TEAM_EMAIL_REPORTS' => 'Mano komandos el. pašto ataskaitos',
  'LBL_MY_TEAM_FORECAST_REPORTS' => 'Mano komandos prognozių ataskaitos',
  'LBL_MY_TEAM_LEAD_REPORTS' => 'Mano komandos potencialių kontaktų ataskaitos',
  'LBL_MY_TEAM_MEETING_REPORTS' => 'Mano komandos susitikimų ataskaitos',
  'LBL_MY_TEAM_OPPORTUNITY_REPORTS' => 'Mano komandos pardavimų ataskaitos',
  'LBL_MY_TEAM_PROJECT_TASK_REPORTS' => 'Mano komandos projekto užduočių ataskaitos',
  'LBL_MY_TEAM_PROSPECT_REPORTS' => 'Mano komandos adresatų ataskaitos',
  'LBL_MY_TEAM_QUOTE_REPORTS' => 'Mano komandos pasiūlymų ataskaitos',
  'LBL_MY_TEAM_TASK_REPORTS' => 'Mano komandos užduočių ataskaitos',
  'LBL_NEXT' => 'Toliau >',
  'LBL_NEXT_30_DAYS' => 'Ateinančias 30 dienų',
  'LBL_NEXT_7_DAYS' => 'Kitas 7 dienas',
  'LBL_NEXT_MONTH' => 'Kitą mėnesį',
  'LBL_NEXT_QUARTER' => 'Kitas ketvirtis',
  'LBL_NEXT_RUN' => 'Kitas laiškas',
  'LBL_NEXT_WEEK' => 'Kitą savaitę',
  'LBL_NEXT_YEAR' => 'Kitais metais',
  'LBL_NONE' => '-- joks --',
  'LBL_NONE_STRING' => 'Joks',
  'LBL_NOTHING_WAS_SELECTED' => 'nieko nebuvo pasirinkta.',
  'LBL_NOT_ON' => 'Ne ant',
  'LBL_NO_ACCESS' => 'Jūs neturite teisių prieiti prie šios ataskaitos.',
  'LBL_NO_CHART' => 'Nėra grafiko',
  'LBL_NO_CHART_DRAWN_MESSAGE' => 'Nepakankamai duomenų, kad būtų galima atvaizduoti grafiką',
  'LBL_NO_FILTERS' => 'neturi filtrų.',
  'LBL_NO_IMAGE' => 'Nėra paveikslo',
  'LBL_NO_REPORTS' => 'Nėra rezultatų.',
  'LBL_OF' => 'iš',
  'LBL_ON' => 'Ant',
  'LBL_ONE_OF' => 'Yra vienas iš',
  'LBL_OPPORTUNITIES' => 'Pardavimai',
  'LBL_OPPORTUNITIES_BY_LEAD_SOURCE' => 'Pardavimai pagal pritraukimo metodą',
  'LBL_OPPORTUNITY' => 'Pardavimas',
  'LBL_OPPORTUNITY_REPORTS' => 'Pardavimų ataskaitos',
  'LBL_OPTIONAL_HELP' => 'Pasirinkite lentelę, kad būtų atvaizduoti pagrindinio modulio įrašai, net jeigu susijusių modulių įrašų nebus rasta. Jei langelis nebus pažymėtas, pagrindinio modulio įrašai matysis tik tuo atveju, jei jie susieti su kitų modulių įrašais.',
  'LBL_OPTIONAL_MODULES' => 'Papildomi moduliai',
  'LBL_ORDER_BY' => 'Rikiuoti',
  'LBL_OUTER_JOIN_CHECKBOX' => 'Papildomi susiję moduliai',
  'LBL_OWNER' => 'Atsakingas',
  'LBL_PARTNER_ACCOUNT_LIST' => 'Partnerių sąrašas',
  'LBL_PDF_TIMESTAMP' => 'Y_m_d_H_i',
  'LBL_PIE' => 'Skritulinė diagrama',
  'LBL_PREVIEW_REPORT' => 'Peržiūrėti',
  'LBL_PREVIOUS' => '< Atgal',
  'LBL_PROJECT_TASK_REPORTS' => 'Projekto užduočių ataskaitos',
  'LBL_PROSPECT_REPORTS' => 'Adresatų ataskaitos',
  'LBL_PUBLISH' => 'paskelbti',
  'LBL_PUBLISHED_ACCOUNT_REPORTS' => 'Paskelbtų klientų ataskaitos',
  'LBL_PUBLISHED_BUG_REPORTS' => 'Paskelbtų klaidų ataskaitos',
  'LBL_PUBLISHED_CALL_REPORTS' => 'Paskelbtų skambučių ataskaitos',
  'LBL_PUBLISHED_CASE_REPORTS' => 'Paskelbtų aptarnavimų ataskaitos',
  'LBL_PUBLISHED_CONTACT_REPORTS' => 'Paskelbtų kontaktų ataskaitos',
  'LBL_PUBLISHED_CONTRACT_REPORTS' => 'Paskelbtų sutarčių ataskaitos',
  'LBL_PUBLISHED_EMAIL_REPORTS' => 'Paskelbtų el. laiškų ataskaitos',
  'LBL_PUBLISHED_FORECAST_REPORTS' => 'Paskelbtų prognozių ataskaitos',
  'LBL_PUBLISHED_LEAD_REPORTS' => 'Paskelbtų potencialių kontaktų ataskaitos',
  'LBL_PUBLISHED_MEETING_REPORTS' => 'Paskelbtų susitikimų ataskaitos',
  'LBL_PUBLISHED_OPPORTUNITY_REPORTS' => 'Paskelbtų pardavimų ataskaitos',
  'LBL_PUBLISHED_PROJECT_TASK_REPORTS' => 'Paskelbtų projektų užduočių ataskaitos',
  'LBL_PUBLISHED_PROSPECT_REPORTS' => 'Paskelbtų adresatų ataskaitos',
  'LBL_PUBLISHED_QUOTE_REPORTS' => 'Paskelbtų pasiūlymų ataskaitos',
  'LBL_PUBLISHED_TASK_REPORTS' => 'Paskelbtų užduočių ataskaitos',
  'LBL_QUARTER' => 'Ketvirtis',
  'LBL_QUARTER_ABBREVIATION' => 'Q',
  'LBL_QUERY' => 'Užklausa',
  'LBL_QUOTE_REPORTS' => 'Pasiūlymų ataskaitos',
  'LBL_RELATED' => 'Susiję:',
  'LBL_RELATED_MODULES' => 'Susiję moduliai',
  'LBL_RELATED_MODULES_PANEL_HELP_DESC' => 'Pagrindinis modulis ir visi susiję moduliai yra pateikti čia. Pasirinkite modulį.',
  'LBL_RELATED_TABLE_BLANK' => 'Prašome pasirinkti modulį su kuriuo norite susieti.',
  'LBL_REMOVE' => 'Išimti',
  'LBL_REMOVED_FAVORITES' => 'ataskaitos išimtos iš mano mėgstamiausių ataskaitų.',
  'LBL_REMOVE_BTN_HELP' => 'Paspauskite, kad išimti šią filtrų grupę.',
  'LBL_REMOVE_GROUP' => 'Išimti filtrų grupę',
  'LBL_REPORTS' => 'Ataskaitos',
  'LBL_REPORT_ATT_MODULES' => 'Moduliai',
  'LBL_REPORT_ATT_NAME' => 'Pavadinimas',
  'LBL_REPORT_COLLAPSE_ALL' => 'Viską sutraukti',
  'LBL_REPORT_DATA_COLUMN_ORDERS' => 'Ši ataskaita atvaizduoja duomenis šia stulpelių seka:',
  'LBL_REPORT_DETAILS' => 'Ataskaita išsamiau',
  'LBL_REPORT_EXPAND_ALL' => 'Viską išplėsti',
  'LBL_REPORT_FILTER_MODIFIED_MESSAGE' => 'Ataskaitos filtrai buvo pakeisti nuo paskutinio generavimo',
  'LBL_REPORT_GRAND_TOTAL' => 'Bendra suma',
  'LBL_REPORT_GROUP_BY' => 'Grupuoti pagal',
  'LBL_REPORT_HIDE_CHART' => 'Paslėpti grafiką',
  'LBL_REPORT_HIDE_DETAILS' => 'Rodyti bendriau',
  'LBL_REPORT_LAST_RUN_DATE' => 'Paskutinis generavimas',
  'LBL_REPORT_MODIFIED_MESSAGE' => 'Ataskaita buvo pakeistas nuo paskutinio generavimo.',
  'LBL_REPORT_MODULES' => 'Ataskaitos moduliai',
  'LBL_REPORT_MODULE_VIEWER_TITLE' => 'Ataskaitos',
  'LBL_REPORT_NAME' => 'Ataskaitos pavadinimas',
  'LBL_REPORT_RESET_FILTER' => 'Atstatyti',
  'LBL_REPORT_RESULTS' => 'Rezultatai',
  'LBL_REPORT_RESULTS_MESSAGE' => 'Spauskite ant Generuoti ataskaitą, kad pamatytumėte rezultatus.',
  'LBL_REPORT_RUN_WITH_FILTER' => 'Pritaikyti',
  'LBL_REPORT_SCHEDULE_TITLE' => 'Suplanuoti',
  'LBL_REPORT_SHOW_CHART' => 'Rodyti grafiką',
  'LBL_REPORT_SHOW_DETAILS' => 'Rodyti išsamiau',
  'LBL_REPORT_TYPE' => 'Ataskaitos tipas',
  'LBL_REPORT__ATT_TYPE' => 'Tipas',
  'LBL_RIGHT' => 'Dešinė',
  'LBL_ROLLOVER' => 'Užveskite ant stulpelio, jei norite sužinoti išsamiau.',
  'LBL_ROLLOVER_SQUARE' => 'Užveskite ant kvadrato, jei norite sužinoti išsamiau.',
  'LBL_ROLLOVER_WEDGE' => 'Užveskite ant stulpelio, jei norite sužinoti išsamiau.',
  'LBL_ROWS_AND_COLUMNS_REPORT' => 'Lentelinė ataskaita',
  'LBL_ROWS_AND_COLUMNS_REPORT_DESC' => 'Sukurti lentelinę ataskaitą, kur duomenys būtų atvaizduojami stulpeliuose pagal tam tikrus pateiktus kriterijus.',
  'LBL_RUNTIME_FILTERS' => 'Dinaminiai filtrai',
  'LBL_RUNTIME_HELP' => 'Pažymėkite šį langelį, kad vartotojai galėtų pakeisti filtro reikšmes prieš ataskaitos sugeneravimą.',
  'LBL_RUN_BUTTON_TITLE' => 'Generuoti ataskaitą [Alt+R]',
  'LBL_RUN_REPORT_BUTTON_KEY' => 'R',
  'LBL_RUN_REPORT_BUTTON_LABEL' => 'Generuoti ataskaitą',
  'LBL_RUN_TIME_LABEL' => 'Dinaminiai',
  'LBL_SAVED_SEARCH' => 'Išdėstymo nustatymai',
  'LBL_SAVE_AS' => 'Išsaugoti kaip',
  'LBL_SAVE_RUN' => 'Saugoti ir generuoti',
  'LBL_SCHEDULED_REPORT_MSG_BODY1' => 'ir išsaugota pavadinimu "',
  'LBL_SCHEDULED_REPORT_MSG_BODY2' => '". Jeigu Jūs norite pakeisti savo ataskaitos nustatymus, prašome prisijungti prie SugarCRM ir paspausti ant "Ataskaitos" kortelės.',
  'LBL_SCHEDULED_REPORT_MSG_INTRO' => 'Jūs gavote SugarCRM sugeneruotą ataskaitą.  Ši ataskaita buvo sukurta',
  'LBL_SCHEDULE_ACTIVE' => 'Aktyvus',
  'LBL_SCHEDULE_EMAIL' => 'Suplanuoti ataskaitą',
  'LBL_SCHEDULE_REPORT' => 'Suplanuoti ataskaitą',
  'LBL_SCHEDULE_TYPE' => 'Tvarkaraščio tipas',
  'LBL_SEARCH_FORM_TITLE' => 'Ataskaitų sąrašas',
  'LBL_SELECT' => 'Pasirinkti',
  'LBL_SELECT_GROUP_BY' => 'Nustatyti grupuoti pagal',
  'LBL_SELECT_MODULE' => 'Pasirinkti modulį',
  'LBL_SELECT_MODULE_BUTTON' => 'Kad pasirinkti modulį, Jums reikia paspausti ant modulio ikonos.',
  'LBL_SELECT_RECORD' => 'Pasirinkti įrašą',
  'LBL_SELECT_REPORT_TYPE' => 'Kad pasirinkti modulio tipą, Jums reikia paspausti ant ikonos.',
  'LBL_SELECT_REPORT_TYPE_ICON' => 'Pasirinkti ataskaitos tipą',
  'LBL_SHOW' => 'Rodyti',
  'LBL_SHOW_DETAILS' => 'Rodyti išsamiau',
  'LBL_SHOW_QUERY' => 'Rodyti užklausą',
  'LBL_SORT' => 'Rikiuoti',
  'LBL_STARTS_WITH' => 'prasideda',
  'LBL_START_DATE' => 'Pradžios data',
  'LBL_STATUS' => 'Statusas',
  'LBL_SUBJECT' => 'Tema',
  'LBL_SUBMIT_QUERY' => 'Perduoti užklausą',
  'LBL_SUCCESS_REPORT' => 'SĖKMĖ: Ataskaita',
  'LBL_SUM' => 'SUMA',
  'LBL_SUMMARY_COLUMNS' => 'Santraukos stulpeliai',
  'LBL_SUMMATION_REPORT' => 'Suminė ataskaita',
  'LBL_SUMMATION_REPORT_DESC' => 'Sukurti lentelinę ataskaitą, kur duomenys būtų paskaičiuojami pagal tam tikrus kriterijus. Rezultatas taip pat gali būti atvaizduotas grafiškai.',
  'LBL_SUMMATION_REPORT_WITH_DETAILS' => 'Detalizuota suminė ataskaita',
  'LBL_SUMMATION_REPORT_WITH_DETAILS_DESC' => 'Sukurti suminę ataskaitą, kur apie rezultatus būtų rodoma papildoma informacija.',
  'LBL_SUMMATION_WITH_DETAILS' => 'Detalizuota suminė',
  'LBL_TABLE_CHANGED' => 'Modulių sąrašas buvo paredaguotas, prašome patikrinti kriterijus įvestus grupės kortelėje.',
  'LBL_TASK_REPORTS' => 'Užduočių ataskaitos',
  'LBL_TEAM' => 'Komandos',
  'LBL_THERE_ARE_NO_REPORTS_OF_THIS_TYPE' => 'Šio tipo ataskaitų nėra.',
  'LBL_THIS_MONTH' => 'Šį mėnesį',
  'LBL_THIS_QUARTER' => 'Šį ketvirtį',
  'LBL_THIS_WEEK' => 'Ši savaitė',
  'LBL_THIS_YEAR' => 'Šiais metais',
  'LBL_TIME_INTERVAL' => 'Laiko intervalas',
  'LBL_TITLE' => 'Pavadinimas',
  'LBL_TODAY' => 'Šiandien',
  'LBL_TOMORROW' => 'Rytoj',
  'LBL_TOTAL' => 'Viso',
  'LBL_TOTAL_IS' => 'Viso yra',
  'LBL_TO_PDF' => 'Saugoti kaip PDF',
  'LBL_TYPE' => 'Tipas',
  'LBL_UNTITLED' => 'be pavadinimo',
  'LBL_UN_PUBLISH' => 'neskelbti',
  'LBL_UP' => 'Aukštyn',
  'LBL_UPDATE_SCHEDULE' => 'Atnaujinti tvarkaraštį',
  'LBL_USER_EMPTY_HELP' => 'Jei norite pamatyti įrašus kurie nepriskirti jokiam vartotojui, pažymėkite  &#39;Papildomi susiję moduliai&#39; žymę   &#39;Ataskaitos išsamiau&#39; žingsnyje, bei Atsakingų vartotojų filtre pasirinkite &#39;Yra tuščias&#39; reikšmę.',
  'LBL_USE_COLUMN_FOR' => 'Funkcijos',
  'LBL_VERT_BAR' => 'Vertikali diagrama',
  'LBL_VIEW' => 'žiūrėti',
  'LBL_VIEWER_RUNTIME_HELP' => 'Nurodykite reikšmę <b>Dinaminiai filtrai</b> ir paspauskite ant mygtuko <b>Pritaikyti filtrus</b>, kad sugeneruoti ataskaitą iš naujo.',
  'LBL_WAS_NOT_SAVED' => 'nebuvo išsaugotas',
  'LBL_WAS_SAVED' => 'buvo išsaugotas',
  'LBL_WEIGHTED_AVG_AMOUNT' => 'Paskaičiuotas vidurkis',
  'LBL_WEIGHTED_SUM_AMOUNT' => 'Paskaičiuota suma',
  'LBL_WHOSE_MAXIMUM' => 'kurio maksimumas',
  'LBL_WHOSE_MINIMUM' => 'kurio minimumas',
  'LBL_WITH_AN_AVERAGE' => 'kur vidurkis',
  'LBL_WITH_A_TOTAL' => 'kur suma',
  'LBL_WITH_DETAILS' => 'Išsamesnė',
  'LBL_YEAR' => 'Metai',
  'LBL_YESTERDAY' => 'Vakar',
  'LBL_YOU_HAVE_NO_SAVED_REPORTS.' => 'Jūs neišsaugojote ataskaitos.',
  'LNK_NEW_ACCOUNT' => 'Sukurti klientą',
  'LNK_NEW_CALL' => 'Sukurti skambutį',
  'LNK_NEW_CASE' => 'Sukurti aptarnavimą',
  'LNK_NEW_CONTACT' => 'Sukurti kontaktą',
  'LNK_NEW_EMAIL' => 'Archyvuoti laišką',
  'LNK_NEW_MEETING' => 'Sukurti susitikimą',
  'LNK_NEW_NOTE' => 'Sukurti užrašą',
  'LNK_NEW_OPPORTUNITY' => 'Sukurti pardavimą',
  'LNK_NEW_TASK' => 'Sukurti užduotį',
  'MSG_NO_PERMISSIONS' => 'Jūs neturite teisių redaguoti šią ataskaitą',
  'MSG_UNABLE_PUBLISH_ANOTHER' => 'Nepavyko paskelbti. Tokiu pavadinimu ataskaita jau yra paskelbta.',
  'MSG_UNABLE_PUBLISH_YOU_OWN' => 'Nepavyko paslėpti ataskaitos kurios savininkas yra kitas vartotojas. Jums priklauso ataskaita tokiu pačiu pavadinimu.',
);

