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
  'DESC_MODULES_INSTALLED' => 'Šie moduliai buvo įdiegti:',
  'DESC_MODULES_QUEUED' => 'Šie moduliai paruošti įdiegimui:',
  'ERROR_FLAVOR_INCOMPATIBLE' => 'Užkrautas failas nesuderinamas su šia Sugar versija (Community Edition, Professional arba Enterprise) :',
  'ERROR_VERSION_INCOMPATIBLE' => 'Užkrautas failas nesuderinamas su šia Sugar versija:',
  'ERR_CHECKSYS_PHP_INVALID_VER' => 'Jūsų PHP versijos SugarCRM nepalaiko. Jūs turite instaliuoti PHP versiją suderinama su SugarCRM. Jūsų dabartinė versija yra',
  'ERR_UW_CANNOT_DETERMINE_GROUP' => 'Nepavyko nustatyti grupės',
  'ERR_UW_CANNOT_DETERMINE_USER' => 'Nepavyko nustatyti savininko',
  'ERR_UW_CONFIG' => 'Prašome padaryti config.php failą rašomą ir perkraukite puslapį.',
  'ERR_UW_CONFIG_WRITE' => 'Klaida atnaujinant config.php failą su naujos versijos informacija.',
  'ERR_UW_DIR_NOT_WRITABLE' => 'Aplankas nėra įrašomas',
  'ERR_UW_FILE_NOT_COPIED' => 'Failas nenukopijuotas',
  'ERR_UW_FILE_NOT_DELETED' => 'Problema pašalinant paketą',
  'ERR_UW_FILE_NOT_READABLE' => 'Nepavyko nuskaityti failo.',
  'ERR_UW_FILE_NOT_WRITABLE' => 'Failas negali būti perkeltas ar įrašytas į',
  'ERR_UW_FLAVOR' => 'SugarCRM sistemos charakteristikos:',
  'ERR_UW_FLAVOR_2' => 'Atnaujinimo metodas:',
  'ERR_UW_LOG_FILE_UNWRITABLE' => './upgradeWizard.log negali būti sukurtas/rašomas. Prašome sutvarkyti leidimus jūsų SugarCRM aplanke.',
  'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'mbstring.func_overload nustatyta į reikšmę didesnę negu 1. Prašome pakeisti tai php.ini ir perkrauti web serverį.',
  'ERR_UW_MYSQL_VERSION' => 'SugarCRM reikalauja MySQL versijos 4.1.2 arba naujesnės. Rasta:',
  'ERR_UW_NOT_VALID_UPLOAD' => 'Neteisingas užkrautas failas.',
  'ERR_UW_NO_CREATE_TMP_DIR' => 'Negalima sukurti laikino aplanko. Patikrinkite failų prieigos teises.',
  'ERR_UW_NO_FILES' => 'Įvyko klaida, nerasta jokių failų patikrinimui.',
  'ERR_UW_NO_FILE_UPLOADED' => 'Prašome nurodyti failą ir bandyti dar kartą!',
  'ERR_UW_NO_MANIFEST' => 'Zip failui trūksta manifest.php failo. Negalima tęsti.',
  'ERR_UW_NO_VIEW' => 'Neteisingas forma nurodyta.',
  'ERR_UW_NO_VIEW2' => 'Nenurodyta forma. Prašome eiti į administracinę zoną, kad patektumėte į šį puslapį.',
  'ERR_UW_OCI8_VERSION' => 'Jūsų Oracle versijos SugarCRM nepalaiko.',
  'ERR_UW_ONLY_PATCHES' => 'Čia Jūs tik gali užkrauti sistemos atnaujinimus.',
  'ERR_UW_PHP_FILE_ERRORS' => 
  array (
    1 => 'Išsiųstas failas viršija išsiuntimo maksimalų dydį upload_max_filesize direktyvą nurodytą php.ini faile.',
    2 => 'Išsiųstas failas viršija išsiuntimo maksimalų dydį MAX_FILE_SIZE direktyvą, kuri buvo nurodyta HTML formoje.',
    3 => 'Išsiųstas failas buvo tik dalinai išsiųstas.',
    4 => 'Jokių failų neišsiųsta.',
    5 => 'Nežinoma klaida.',
    6 => 'Trūksta laikino katalogo.',
    7 => 'Nepavyko įrašyti failo į diską.',
    8 => 'Failo išsiuntimas sustojo dėl plėtinio.',
  ),
  'ERR_UW_PREFLIGHT_ERRORS' => 'Rastos klaidos patikrinimo metu',
  'ERR_UW_UPLOAD_ERR' => 'Kraunant failą įvyko klaida, prašome bandyti dar kartą!<br>\\n',
  'ERR_UW_VERSION' => 'SugarCRM sistemos versija:',
  'ERR_UW_WRONG_TYPE' => 'Šis puslapis neveikia',
  'LBL_BACKWARD_COMPATIBILITY_ON' => 'PHP atgalinis suderinamumo rėžimas yra įjungtas. Nustatyti zend.ze1_compatibility_mode į išjungta ir tęsti toliau',
  'LBL_BUTTON_BACK' => '< Atgal',
  'LBL_BUTTON_CANCEL' => 'Atšaukti',
  'LBL_BUTTON_DELETE' => 'Ištrinti paketą',
  'LBL_BUTTON_DONE' => 'Baigti',
  'LBL_BUTTON_EXIT' => 'Išeiti',
  'LBL_BUTTON_INSTALL' => 'Pasiruošimas atnaujinimui',
  'LBL_BUTTON_NEXT' => 'Toliau >',
  'LBL_BUTTON_RECHECK' => 'Patikrinti',
  'LBL_BUTTON_RESTART' => 'Perkrauti',
  'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'Atliekamas patobulinimas',
  'LBL_CURRENT_PHP_VERSION' => '(Jūsų dabartinė php versija yra',
  'LBL_HOME_PAGE_4_NAME' => 'Tracker',
  'LBL_INCOMPATIBLE_PHP_VERSION' => 'Reikalinga PHP versija 5 arba naujesnė.',
  'LBL_LANGPACKS' => 'Kalbų paketai',
  'LBL_LAYOUT_MERGE_DESC' => 'Atnaujinant sistemą bus įkelti į modulių išdėstymus nauji laukai. Jeigu nenorite, kad jie būtų įkelti prašome atžymėti modulį.<br><br>',
  'LBL_LAYOUT_MERGE_TITLE' => 'Paspauskite "Toliau" norėdami patvirtinti pakeitimus ir užbaigti atnaujinimą.',
  'LBL_LAYOUT_MERGE_TITLE2' => 'Paspauskite "Toliau" norėdami užbaigti atnaujinimą.',
  'LBL_LAYOUT_MODULE_TITLE' => 'Išdėstymai',
  'LBL_LICENSE_CHECK_IN_PROGRESS' => 'Licencijos patikrinimas atliekamas',
  'LBL_ML_ACTION' => 'Veiksmas',
  'LBL_ML_CANCEL' => 'Atšaukti',
  'LBL_ML_COMMIT' => 'Vykdyti',
  'LBL_ML_DESCRIPTION' => 'Aprašymas',
  'LBL_ML_INSTALL' => 'Įdiegti',
  'LBL_ML_INSTALLED' => 'Įdiegimo data',
  'LBL_ML_NAME' => 'Pavadinimas',
  'LBL_ML_PUBLISHED' => 'Paskelbimo data',
  'LBL_ML_TYPE' => 'Tipas',
  'LBL_ML_UNINSTALLABLE' => 'Nepašalinamas',
  'LBL_ML_VERSION' => 'Versija',
  'LBL_MODULELOADER' => 'Modulių įdiegėjas',
  'LBL_MODULE_NAME' => 'Atnaujinimo vedlys',
  'LBL_MODULE_NAME_SINGULAR' => 'Atnaujinimo vedlys',
  'LBL_PATCHUPGRADES' => 'Atnaujinimai',
  'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'Prie paleidžiamieji patikrinimai vykdomi',
  'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'Atliekamas failų kopijavimas',
  'LBL_PROCESSING' => 'Vykdoma',
  'LBL_RECOMMENDED_PHP_VERSION' => '. Rekomenduojama php versija yra 5.2.1 arba aukštesnė)',
  'LBL_SELECT_FILE' => 'Pasirinkti failą:',
  'LBL_START_UPGRADE_IN_PROGRESS' => 'Pradėta',
  'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'Sistema tikrinama',
  'LBL_THEMES' => 'Temos',
  'LBL_UPGRADE' => 'Atnaujinimai',
  'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'Atliekamas atnaujinimo atšaukimas',
  'LBL_UPGRADE_IN_PROGRESS' => 'atliekama',
  'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'Atliekamas skriptų atnaujinimas',
  'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'Atnaujinimo santrauka vykdoma',
  'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'Atnaujinimas gali užtrukti',
  'LBL_UPGRADE_TIME_ELAPSED' => 'Laiko praėjo',
  'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'Atliekamas užkrovimo patikrinimas',
  'LBL_UPLOADING_UPGRADE_PACKAGE' => 'Užkraunamas atnaujinimo paketas',
  'LBL_UPLOAD_FILE_NOT_FOUND' => 'Užkrautas failas nerastas',
  'LBL_UPLOAD_SUCCESS' => 'Atnaujinimo paketas sėkmingai įkeltas. Spustelėkite "Toliau" galutinio patikrinimo atlikimui.',
  'LBL_UPLOAD_UPGRADE' => 'Užkrauti atnaujinimo paketą',
  'LBL_UW_ACCEPT_THE_LICENSE' => 'Patvirtinti licenciją',
  'LBL_UW_BACKUP' => 'Failo atsarginė kopija',
  'LBL_UW_BACKUP_FILES_EXIST' => 'Atsarginiai failai nuo šio atnaujinimo gali būti rasti čia',
  'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'Failo kopija',
  'LBL_UW_CANCEL_DESC' => 'Atnaujinimo vedlys buvo atšauktas. Visi laikini failai ir išsiųstas zip failas buvo ištrinti.',
  'LBL_UW_CHARSET_SCHEMA_CHANGE' => 'Simbolių rinkinio schemos pakeitimai',
  'LBL_UW_CHECKLIST' => 'Atnaujinimo žingsniai',
  'LBL_UW_CHECK_ALL' => 'Pažymėti visus',
  'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'Perrašytų failų atsarginės kopijos yra šiame aplanke:',
  'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'Rankiniu būdu apjunkite šiuos failus:',
  'LBL_UW_COMMIT_ADD_TASK_NAME' => 'Atnaujinimo procesas: Rankiniu būdu apjunkite failus',
  'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'Prašome naudoti bet kokį įrankį, kuris yra Jums patogus failų apjungimui.  Kol tai nebaigta, Jūsų SugarCRM instaliacija bus nestabilioje būsenoje ir patobulinimai nebus baigti.',
  'LBL_UW_COMMIT_DESC' => 'Paspauskite "Toliau" norėdami paleisti papildomus atnaujinimo skriptus.',
  'LBL_UW_COMPLETE' => 'Baigta',
  'LBL_UW_COMPLIANCE_ALL_OK' => 'Visi sistemos nustatymų reikalavimai patenkinti',
  'LBL_UW_COMPLIANCE_CALLTIME' => 'PHP nustatymai: Kiek praėjo laiko pateikus užklausą',
  'LBL_UW_COMPLIANCE_CURL' => 'cURL modulis',
  'LBL_UW_COMPLIANCE_DB' => 'Minimali duomenų bazės versija',
  'LBL_UW_COMPLIANCE_IMAP' => 'IMAP modulis',
  'LBL_UW_COMPLIANCE_MBSTRING' => 'MBStrings modulis',
  'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'MBStrings mbstring.func_overload parametrai',
  'LBL_UW_COMPLIANCE_MEMORY' => 'PHP nustatymai: Atminties limitas',
  'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES' => 'MS SQL serveris ir PHP Magic Quotes GPC',
  'LBL_UW_COMPLIANCE_MYSQL' => 'Minimali MySQL versija',
  'LBL_UW_COMPLIANCE_PHP_INI' => 'Vieta php.ini',
  'LBL_UW_COMPLIANCE_PHP_VERSION' => 'Minimali PHP versija',
  'LBL_UW_COMPLIANCE_SAFEMODE' => 'PHP nustatymai: Saugus rėžimas',
  'LBL_UW_COMPLIANCE_STREAM' => 'PHP nustatymai: Stream',
  'LBL_UW_COMPLIANCE_TITLE' => 'Serverio nustatymų patikrinimas',
  'LBL_UW_COMPLIANCE_TITLE2' => 'Aptikti nustatymai',
  'LBL_UW_COMPLIANCE_XML' => 'XML parsing',
  'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Zip palaikymas',
  'LBL_UW_CONFIRM_LAYOUTS' => 'Patvirtinti išdėstymą',
  'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Patvirtinti išdėstymo rezultatus',
  'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Šie išdėstymai buvo sėkmingai sujungti:',
  'LBL_UW_CONTINUE_CONFIRMATION' => 'Ši nauja Sugar versija turi naują licencijos sutartį. Ar norėtumėte tęsti?',
  'LBL_UW_CONVERT_THE_LICENSE' => 'Keisti licenciją',
  'LBL_UW_COPIED_FILES_TITLE' => 'Failai sėkmingai nukopijuoti',
  'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES' => 'Patobulinti/Aptarnauti moduliai',
  'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE' => 'Nestandartinių lentelių schemos pakeitimai',
  'LBL_UW_DB_CHOICE1' => 'Patobulinimo vedlys vykdo SQL užklausas',
  'LBL_UW_DB_CHOICE2' => 'SQL užklausų vykdymas rankiniu būdu',
  'LBL_UW_DB_INSERT_FAILED' => 'ĮTERPIMAS nepavyko - palyginti rezultatai skiriasi',
  'LBL_UW_DB_ISSUES' => 'Duomenų bazės problemos',
  'LBL_UW_DB_ISSUES_PERMS' => 'Duomenų bazės privilegijos',
  'LBL_UW_DB_METHOD' => 'Duomenų bazės atnaujinimo metodas',
  'LBL_UW_DB_NO_ERRORS' => 'Visos privilegijos yra',
  'LBL_UW_DB_PERMS' => 'Privalomos privilegijos',
  'LBL_UW_DESC_MODULES_INSTALLED' => 'Šie patobulinimo paketai buvo įdiegti:',
  'LBL_UW_DORP_THE_OLD_SCHMEA' => 'Ar norėtumėte, kad Sugar išmestų netenkinančią 451 schemą ?',
  'LBL_UW_DROP_SCHEMA_MANUAL' => 'Manual Drop Schema Post Upgrade',
  'LBL_UW_DROP_SCHEMA_METHOD' => 'Senos schemos išmetimo metodas',
  'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'Patobulinimo vedlys išmeta seną 451 schemą',
  'LBL_UW_END_DESC' => 'Sistema atnaujinta.',
  'LBL_UW_END_DESC2' => 'Jeigu pasirinkote rankinį būdą paleist bet kokį žingsnį, pavyzdžiui kaip failų apjungimai arba SQL užklausos, prašome daryti tai dabar. Jūsų sistema bus nestabilioje būsenoje, kol visi žingsniai nebus užbaigti.',
  'LBL_UW_END_LOGOUT' => 'Prašome atsijungti, jeigu planuojate atlikti dar vieną patobulinimą.',
  'LBL_UW_END_LOGOUT2' => 'Atsijungti',
  'LBL_UW_END_LOGOUT_PRE' => 'Atnaujinimas užbaigtas.',
  'LBL_UW_END_LOGOUT_PRE2' => 'Paspauskite Baigti norėdami išeiti iš atnaujinimo vedlio.',
  'LBL_UW_FILE' => 'Failo pavadinimas',
  'LBL_UW_FILES_QUEUED' => 'Šie atnaujinimo paketai yra paruošti įdiegimui:',
  'LBL_UW_FILES_REMOVED' => 'Šie failai bus pašalinti iš sistemos:<br>',
  'LBL_UW_FILE_DELETED' => 'buvo išmestas.<br>',
  'LBL_UW_FILE_GROUP' => 'Grupė',
  'LBL_UW_FILE_ISSUES' => 'Failų problemos',
  'LBL_UW_FILE_ISSUES_PERMS' => 'Failų prieigos teisės',
  'LBL_UW_FILE_NEEDS_DIFF' => 'Failams reikia rankinio skirtumų palyginimo',
  'LBL_UW_FILE_NO_ERRORS' => '<b>Visi failai įrašomi</b>',
  'LBL_UW_FILE_OWNER' => 'Savininkas',
  'LBL_UW_FILE_PERMS' => 'Teises',
  'LBL_UW_FILE_UPLOADED' => 'buvo užkrautas',
  'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED' => 'Šie moduliai aptikti kaip pakisti ir išsaugoti',
  'LBL_UW_FOLLOWING_MODULES_UPGRADED' => 'Šie moduliai aptikti kaip Studijos pakeisti ir buvo atnaujinti',
  'LBL_UW_FROZEN' => 'Užkraukite paketą prieš tęsiant toliau.',
  'LBL_UW_HIDE_DETAILS' => 'Slėpti detales',
  'LBL_UW_INCLUDING' => 'Įtraukiant',
  'LBL_UW_INCOMPLETE' => 'Nebaigtas',
  'LBL_UW_INSTALL' => 'Failo instaliacija',
  'LBL_UW_IN_PROGRESS' => 'Vykdomas',
  'LBL_UW_MANUAL_MERGE' => 'Failo apjungimas',
  'LBL_UW_MODULE_READY' => 'Modulis paruoštas įdiegimui. Paspauskite "Vykdyti", kad tęsti įdiegimą.',
  'LBL_UW_MODULE_READY_UNINSTALL' => 'Modulis paruoštas pašalinimui. Paspauskite "Vykdyti", kad tęsti pašalinimą.<br>',
  'LBL_UW_NEXT_TO_UPLOAD' => '<b>Paspauskite Toliau, kad užkrauti atnaujinimo paketus.</b>',
  'LBL_UW_NONE' => 'Joks',
  'LBL_UW_NOT_AVAILABLE' => 'Negalimas',
  'LBL_UW_NO_INSTALLED_UPGRADES' => 'Neaptikta patobulinimų.',
  'LBL_UW_OVERWRITE_DESC' => 'Visi failų pakeitimai bus perrašyti, įskaitant bet kokį kodo pakeitimą ir šablonų pakeitimus kuriuos atlikote. Ar tikrai norite tęsti?',
  'LBL_UW_OVERWRITE_FILES' => 'Apjungimo metodas',
  'LBL_UW_OVERWRITE_FILES_CHOICE1' => 'Perrašyti visus failus',
  'LBL_UW_OVERWRITE_FILES_CHOICE2' => 'Rankinis sujungimas - viską išsaugoti',
  'LBL_UW_PATCH_READY' => 'Pakeitimai paruošti tęsti toliau. Paspauskite "Vykdyti" mygtuką, kad pabaigtumėte atnaujinimo procesą.',
  'LBL_UW_PATCH_READY2' => '<h2>Pastaba: Aptikti nestandartiniai išdėstymai</h2><br />Šie failai turi naujus laukus arba redaguotus lango išdėstymus pritaikytus per Studiją. Pakeitimas, kurį norite instaliuoti  taip pat turi pakeitimus failams. <u>Kiekvienam failui</u> jūs galite:<br><ul><li>[<b>Default</b>] Pasilikti savo versiją paliekant tuščią pažymėjimų langelį. Pakeitimų redagavimas bus ignoruotas.</li>arba<li> Priimti atnaujintus failus pasirenkant pažymėjimą. Jūsų išdėstymams reikės per pritaikyti per Studiją.</li></ul>',
  'LBL_UW_PREFLIGHT_ADD_TASK' => 'Sukurti užduotį rankiniam apjungimui?',
  'LBL_UW_PREFLIGHT_COMPLETE' => 'Prieš paleidžiamasis patikrinimas',
  'LBL_UW_PREFLIGHT_DIFF' => 'Diferencijuotas',
  'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'Išsiųsti sau priminimą apie rankinį apjungimą?',
  'LBL_UW_PREFLIGHT_FILES_DESC' => 'Pateikti failai buvo redaguoti. Nuimkite pažymėjimą nuo failų, kurie reikalauja rankinio sujungimo. <i>Bet koks aptiktas išdėstymo pakeitimas bus automatiškai atžymėtas.',
  'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'Nereikalingas.',
  'LBL_UW_PREFLIGHT_NO_DIFFS' => 'Nereikalingas rankinis failų apjungimas.',
  'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'Auto-išsaugoti failai:',
  'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'Visi prieš paleidžiamieji testai praeiti.',
  'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'Paspauskite "Toliau", kad kopijuoti atnaujinimo failus į sistemą.',
  'LBL_UW_PREFLIGHT_TESTS_PASSED3' => '<b>Pastaba: </b> Visas atnaujinimo procesas turi būti atliktas vienu kartu. Paspauskite "Toliau" norėdami tęsti arba "Atšaukti", norėdami sustabdyti.',
  'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'Perjungti visus failus',
  'LBL_UW_REBUILD_TITLE' => 'Atstatyti rezultatą',
  'LBL_UW_REPAIR_INDEX' => 'Duomenų bazės patobulinimams, prašome paleisti <a href="index.php?module=Administration&action=RepairIndex" target="_blank">Taisyti indekso </a> skriptą.',
  'LBL_UW_SCHEMA_CHANGE' => 'Schemos pakeitimai',
  'LBL_UW_SHOW' => 'Rodyti',
  'LBL_UW_SHOW_COMPLIANCE' => 'Rodyti aptiktus nustatymus',
  'LBL_UW_SHOW_DB_PERMS' => 'Rodyti trūkstamas duomenų bazės teises',
  'LBL_UW_SHOW_DETAILS' => 'Rodyti detales',
  'LBL_UW_SHOW_DIFFS' => 'Rodyti failus reikalaujančius rankinio apjungimo',
  'LBL_UW_SHOW_NW_FILES' => 'Rodyti failus su blogais leidimais',
  'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'Rodyti seną schemą, kuri gali būti išmesta',
  'LBL_UW_SHOW_SCHEMA' => 'Rodyti schemos pakeitimo skriptą',
  'LBL_UW_SHOW_SQL_ERRORS' => 'Rodyti blogas užklausas',
  'LBL_UW_SKIPPED_FILES_TITLE' => 'Praleisti failai',
  'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'Praleistos užklausos',
  'LBL_UW_SKIPPING_FILE_OVERWRITE' => 'Praleidžiant failą perrašys - rankinis sujungimas pasirinktas.',
  'LBL_UW_SQL_RUN' => 'Patikrinkite kada SQL rankiniu būdu buvo paleistas',
  'LBL_UW_START_DESC' => 'SugarCRM atnaujinimo vedlys. Prašome atidžiai sekti instrukcijas.',
  'LBL_UW_START_DESC2' => 'Rekomenduojame atlikti patobulinimus ant SugarCRM kopijos. Prieš vykdant atnaujinimus reikia padaryti atsargines kopijas duomenų bazės ir sistemos failų (visų SugarCRM failų).',
  'LBL_UW_START_DESC3' => 'Spustelėkite "Toliau", kad sistema patikrintų ar įmanomas atnaujinimas. Patikrinimas apima failų teises, duomenų bazių privilegijas ir serverio nustatymus.',
  'LBL_UW_START_UPGRADED_UW_DESC' => 'Naujas patobulinimo vedlys sugrįš atgal į patobulinimo procesą. Prašome tęsti atnaujinimą.',
  'LBL_UW_START_UPGRADED_UW_TITLE' => 'Sveiki atėję į naują patobulinimo vedlį',
  'LBL_UW_SYSTEM_CHECK_CHECKING' => 'Tikrinama, prašome palaukti. Tai gali užtrukti virš 30 sekundžių.',
  'LBL_UW_SYSTEM_CHECK_FILES' => 'Failai',
  'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START' => 'Ieškomi visų susiję failai',
  'LBL_UW_SYSTEM_CHECK_FOUND' => 'Rasti',
  'LBL_UW_TITLE' => 'Atnaujinimo vedlys',
  'LBL_UW_TITLE_CANCEL' => 'Atšaukti',
  'LBL_UW_TITLE_COMMIT' => 'Atnaujinimo vykdymas',
  'LBL_UW_TITLE_END' => 'Debrief',
  'LBL_UW_TITLE_LAYOUTS' => 'Išdėstymo patvirtinimas',
  'LBL_UW_TITLE_PREFLIGHT' => 'Prieš paleidžiamasis patikrinimas',
  'LBL_UW_TITLE_START' => 'Sveiki',
  'LBL_UW_TITLE_SYSTEM_CHECK' => 'Sistemos patikrinimas',
  'LBL_UW_TITLE_UPLOAD' => 'Užkrauti paketą',
  'LBL_UW_UNINSTALL' => 'Pašalinti',
  'LBL_WORKFLOW' => 'Darbo sekos',
);

