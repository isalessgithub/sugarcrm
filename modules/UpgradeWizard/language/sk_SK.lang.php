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
$mod_strings = array(
	'DESC_MODULES_INSTALLED'					=> 'Nasledujúce moduly boli nainštalované:',
	'DESC_MODULES_QUEUED'						=> 'Nasledujúce moduly sú pripravené na inštaláciu:',

	'ERR_UW_CANNOT_DETERMINE_GROUP'				=> 'Nemožno určiť Skupinu',
	'ERR_UW_CANNOT_DETERMINE_USER'				=> 'Nemožno určiť Vlastníka',
	'ERR_UW_CONFIG_WRITE'						=> 'Chyba pri aktualizácii súboru config.php informáciami o novej verzii.',
	'ERR_UW_CONFIG'								=> 'Umožnite zápis do súboru config.php a obnovte, resp. znovu načítajte túto stránku.',
	'ERR_UW_DIR_NOT_WRITABLE'					=> 'Nemožno zapisovať do Adresára',
	'ERR_UW_FILE_NOT_COPIED'					=> 'Súbor nebol skopírovaný',
	'ERR_UW_FILE_NOT_DELETED'					=> 'Problém pri odstraňovaní balíka',
	'ERR_UW_FILE_NOT_READABLE'					=> 'Súbor sa nedá čítať.',
	'ERR_UW_FILE_NOT_WRITABLE'					=> 'Súbor nemožno premiestniť alebo zapísať do',
	'ERR_UW_FLAVOR_2'							=> 'Inovovať charakter: ',
	'ERR_UW_FLAVOR'								=> 'Charakter systému SugarCRM:',
	'ERR_UW_LOG_FILE_UNWRITABLE'				=> 'Súbor ./upgradeWizard.log nebolo možné vytvoriť, ani doň vykonať zápis. Opravte oprávnenia vo Vašom SugarCRM adresári.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD'				=> 'mbstring.func_overload je nastavené na hodnotu vyššiu než 1. <br/>Opravte hodnotu v súbore php.ini a reštartujte webový server.',
	'ERR_UW_MYSQL_VERSION'						=> 'Aplikácia SugarCRM vyžaduje MySQL verziu 4.1.2 alebo novšiu. Našla sa:',
	'ERR_UW_OCI8_VERSION'				        => 'Vaša verzia Oracle nie je podporovaná aplikáciou Sugar. Budete potrebovať nainštalovať verziu, ktorá je kompatibilná s aplikáciou Sugar. Pozrite si maticu kompatibility v poznámkach k vydaniu pre podporované verzie Oracle. Aktuálna verzia:',
	'ERR_UW_NO_FILE_UPLOADED'					=> 'Vyberte súbor a skúste to znovu!',
	'ERR_UW_NO_FILES'							=> 'Došlo k chybe, neboli nájdené žiadne súbory na kontrolu.',
	'ERR_UW_NO_MANIFEST'						=> 'V súbore .zip chýba súbor manifest.php. Nemožno pokračovať.',
	'ERR_UW_NO_VIEW'							=> 'Bolo stanovené neplatné zobrazenie.',
	'ERR_UW_NO_VIEW2'							=> 'Nedefinované zobrazenie. Prejdite na domovskú stránku pre správu a odtiaľ na túto stránku.',
	'ERR_UW_NOT_VALID_UPLOAD'					=> 'Neplatný nahratie súboru.',
	'ERR_UW_NO_CREATE_TMP_DIR'					=> 'Nemožno vytvoriť dočasný adresár. Skontrolujte povolenia pre súbor.',
	'ERR_UW_ONLY_PATCHES'						=> 'Na tejto stránke možno len nahrávať opravy.',
    'ERR_UW_PREFLIGHT_ERRORS'					=> 'Behom predletovej kontroly sa našli chyby',
	'ERR_UW_UPLOAD_ERR'							=> 'Pri nahrávaní súboru došlo k chybe. Skúste to znova!<br>\n',
	'ERR_UW_VERSION'							=> 'Verzia systému SugarCRM:',
    'ERR_UW_WRONG_TYPE'							=> 'Táto stránka nie je určená na prevádzku',
	'ERR_UW_PHP_FILE_ERRORS'					=> array(
													1 => 'Nahraté súbory presiahli direktívu upload_max_filesize v súbore php.ini.',
													2 => 'Nahratý súbor presiahol direktívu MAX_FILE_SIZE určenú formulárom HTML.',
													3 => 'Nahrávaný súbor boli nahratý len čiastočne.',
													4 => 'Neboli nahraté žiadne súbory.',
													5 => 'Neznáma chyba.',
													6 => 'Chýba dočasný priečinok.',
													7 => 'Chyba pri zápise súboru na disk.',
													8 => 'Nahrávanie súboru bolo zastavené príponou.',
),

    'ERROR_HT_NO_WRITE'                         => 'Nemožno zapisovať do súboru: %s',
    'ERROR_MANIFEST_TYPE'                       => 'Súbor manifestu musí špecifikovať typ balíka.',
    'ERROR_PACKAGE_TYPE'                        => 'Súbor manifestu ukazuje na nerozpoznaný typ balíka: %s',
    'ERROR_VERSION_INCOMPATIBLE'                => 'Nahratý súbor nie je kompatibilný s touto verziou aplikácie Sugar: %s',
    'ERROR_FLAVOR_INCOMPATIBLE'                 => 'Nahratý súbor nie je kompatibilný s týmto typom (Community Edition, Professional alebo Enterprise) aplikácie Sugar: %s',

    'ERROR_UW_CONFIG_DB'                        => 'Pri ukladaní premennej konfigurácie %s do db (kľúč %s, hodnota %s) sa vyskytla chyba.',
    'ERR_NOT_ADMIN'                             => "Neoprávnený prístup do správy.",
    'ERR_NO_VIEW_ACCESS_REASON'                 => 'Na prístup k tejto stránke nemáte povolenie.',

    'LBL_BUTTON_BACK'							=> '< Späť',
	'LBL_BUTTON_CANCEL'							=> 'Zrušiť',
	'LBL_BUTTON_DELETE'							=> 'Zmazať balík',
	'LBL_BUTTON_DONE'							=> 'Dokončené',
	'LBL_BUTTON_EXIT'							=> 'Ukončiť',
	'LBL_BUTTON_INSTALL'						=> 'Predletová aktualizácia',
	'LBL_BUTTON_NEXT'							=> 'Ďalej >',
	'LBL_BUTTON_RECHECK'						=> 'Opätovná kontrola',
	'LBL_BUTTON_RESTART'						=> 'Reštart',

	'LBL_UPLOAD_UPGRADE'						=> 'Nahrať aktualizačný balík',
	'LBL_UPLOAD_FILE_NOT_FOUND'					=> 'Súbor na nahratie sa nepodarilo nájsť',
	'LBL_UW_BACKUP_FILES_EXIST_TITLE'			=> 'Zálohovanie súborov',
	'LBL_UW_BACKUP_FILES_EXIST'					=> 'Zálohy súborov z tejto inovácie nájdete na',
	'LBL_UW_BACKUP'								=> 'ZÁLOHOVANIE súborov',
	'LBL_UW_CANCEL_DESC'						=> 'Inovácia bola zrušená. Všetky dočasné nakopírované a nahraté aktualizačné súbory boli odstránené.',
	'LBL_UW_CHARSET_SCHEMA_CHANGE'				=> 'Zmeny schém súborov znakov',
	'LBL_UW_CHECK_ALL'							=> 'Skontrolovať všetko',
	'LBL_UW_CHECKLIST'							=> 'Kroky inovácie',
	'LBL_UW_COMMIT_ADD_TASK_DESC_1'				=> "Zálohy prepísaných súborov sú v nasledujúcom adresári: \n",
	'LBL_UW_COMMIT_ADD_TASK_DESC_2'				=> "Ručné zlúčenie nasledujúcich súborov:\n",
	'LBL_UW_COMMIT_ADD_TASK_NAME'				=> 'Proces inovácie: Ručné zlúčenie súborov',
	'LBL_UW_COMMIT_ADD_TASK_OVERVIEW'			=> 'Použite niektorú zo svojich porovnávacích -diff metód na zlúčenie týchto súborov. Pokiaľ to neurobíte, vaša inštalácia aplikácie SugarCRM bude nestabilná a inovácia sa nedokončí.',
	'LBL_UW_COMPLETE'							=> 'Dokončiť',
	'LBL_UW_CONTINUE_CONFIRMATION'              => 'Táto nová verzia aplikácie Sugar obsahuje nové licenčnú zmluvu. Chcete pokračovať?',
	'LBL_UW_COMPLIANCE_ALL_OK'					=> 'Všetky požiadavky na systémové nastavenie sú splnené',
	'LBL_UW_COMPLIANCE_CALLTIME'				=> 'Nastavenie PHP:  [Call Time Pass By Reference]',
	'LBL_UW_COMPLIANCE_CURL'					=> 'cURL modul',
	'LBL_UW_COMPLIANCE_IMAP'					=> 'IMAP modul',
	'LBL_UW_COMPLIANCE_MBSTRING'				=> 'MBStrings modul',
	'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD'	=> 'Parameter MBStrings mbstring.func_overload',
	'LBL_UW_COMPLIANCE_MEMORY'					=> 'Nastavenie PHP: obmedzenie pamäti',
    'LBL_UW_COMPLIANCE_STREAM'                  => 'Nastavenie PHP: Stream',
	'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES'		=> 'MS SQL Server a PHP Magic Quotes GPC',
	'LBL_UW_COMPLIANCE_MYSQL'					=> 'Minimálna verzia MySQL',
    'LBL_UW_COMPLIANCE_DB'                      => 'Minimálna verzia databázy',
	'LBL_UW_COMPLIANCE_PHP_INI'					=> 'Umiestnenie súboru php.ini',
	'LBL_UW_COMPLIANCE_PHP_VERSION'				=> 'Minimálna verzia PHP',
	'LBL_UW_COMPLIANCE_SAFEMODE'				=> 'Nastavenie PHP: chránený režim',
	'LBL_UW_COMPLIANCE_TITLE'					=> 'Kontrola nastavení servera',
	'LBL_UW_COMPLIANCE_TITLE2'					=> 'Detekované nastavenia',
	'LBL_UW_COMPLIANCE_XML'						=> 'Analýza súborov XML ',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE'				=> 'Podpora formátu Zip',

	'LBL_UW_COPIED_FILES_TITLE'					=> 'Súbory boli úspešne skopírované',
	'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE'			=> 'Vlastné zmeny schém tabuliek',

	'LBL_UW_DB_CHOICE1'							=> 'Sprievodca inováciou spustil SQL',
	'LBL_UW_DB_CHOICE2'							=> 'Ručné SQL otázky',
	'LBL_UW_DB_INSERT_FAILED'					=> 'Príkaz VLOŽIŤ zlyhal. Porovnávané súbory sa líšia.',
	'LBL_UW_DB_ISSUES_PERMS'					=> 'Oprávnenia pre databázu',
	'LBL_UW_DB_ISSUES'							=> 'Problémy s databázou',
	'LBL_UW_DB_METHOD'							=> 'Metóda aktualizácie databázy',
	'LBL_UW_DB_NO_ADD_COLUMN'					=> 'Príkaz ALTER TABLE [table] Príkaz ADD COLUMN [column]',
	'LBL_UW_DB_NO_CHANGE_COLUMN'				=> 'Príkaz ALTER TABLE [table] Príkaz CHANGE COLUMN [column]',
	'LBL_UW_DB_NO_CREATE'						=> 'Príkaz CREATE TABLE [table]',
	'LBL_UW_DB_NO_DELETE'						=> 'Príkaz DELETE FROM [table]',
	'LBL_UW_DB_NO_DROP_COLUMN'					=> 'Príkaz ALTER TABLE [table] Príkaz DROP COLUMN [column]',
	'LBL_UW_DB_NO_DROP_TABLE'					=> 'Príkaz DROP TABLE [table]',
	'LBL_UW_DB_NO_ERRORS'						=> 'Všetky oprávnenia sú dostupné',
	'LBL_UW_DB_NO_INSERT'						=> 'Príkaz INSERT INTO [table]',
	'LBL_UW_DB_NO_SELECT'						=> 'Príkaz SELECT [x] FROM [table]',
	'LBL_UW_DB_NO_UPDATE'						=> 'Príkaz UPDATE [table]',
	'LBL_UW_DB_PERMS'							=> 'Potrebné oprávnenia',

	'LBL_UW_DESC_MODULES_INSTALLED'				=> 'Nasledujúce aktualizačné balíky boli nainštalované:',
	'LBL_UW_END_DESC'							=> 'Systém bol aktualizovaný.',
	'LBL_UW_END_DESC2'							=> 'Ak ste si zvolili ručné spustenie nejakého kroku, ako je zlúčenie súborov alebo SQL dopyty, vykonajte spustenie teraz. Váš systém je nestabilný, pokým tieto kroky nebudú dokončené.',
	'LBL_UW_END_LOGOUT_PRE'						=> 'Inovácia je dokončená.',
	'LBL_UW_END_LOGOUT_PRE2'					=> 'Kliknite na možnosť Hotovo a zatvorte sprievodcu inováciou.',
	'LBL_UW_END_LOGOUT'							=> 'Ak plánujete použiť iný aktualizačný balík pomocou aktualizačného sprievodcu, musíte sa predtým odhlásiť a opäť prihlásiť.',
	'LBL_UW_END_LOGOUT2'						=> 'Odhlásenie',
	'LBL_UW_REPAIR_INDEX'						=> 'Na zlepšenie výkonnosti databázy spustite skript<a href="index.php?module=Administration&action=RepairIndex" target="_blank">Oprava indexov</a>.',

	'LBL_UW_FILE_DELETED'						=> "odstránené.<br>",
	'LBL_UW_FILE_GROUP'							=> 'Skupina',
	'LBL_UW_FILE_ISSUES_PERMS'					=> 'Oprávnenia pre súbor',
	'LBL_UW_FILE_ISSUES'						=> 'Problémy so súborom',
	'LBL_UW_FILE_NEEDS_DIFF'					=> 'Subor vyžaduje ručné porovnanie',
	'LBL_UW_FILE_NO_ERRORS'						=> '<b>Všetky súbory sú zapisovateľné</b>',
	'LBL_UW_FILE_OWNER'							=> 'Vlastník',
	'LBL_UW_FILE_PERMS'							=> 'Oprávnenia',
	'LBL_UW_FILE_UPLOADED'						=> 'nahratý',
	'LBL_UW_FILE'								=> 'Názov súboru',
	'LBL_UW_FILES_QUEUED'						=> 'Nasledujúce aktualizačné balíky sú pripravené k inštalácii:',
	'LBL_UW_FILES_REMOVED'						=> "Nasledujúce súbory budú odstránené zo systému:<br>\n",
	'LBL_UW_NEXT_TO_UPLOAD'						=> "<b>Kliknite na tlačítko Ďalej a nahrajte aktualizačné balíky.</b>",
	'LBL_UW_FROZEN'								=> 'Pred pokračovaním nahrajte balík.',
	'LBL_UW_HIDE_DETAILS'						=> 'Skryť podrobnosti',
	'LBL_UW_IN_PROGRESS'						=> 'Prebieha',
	'LBL_UW_INCLUDING'							=> 'Vrátane',
	'LBL_UW_INCOMPLETE'							=> 'Nedokončené',
	'LBL_UW_INSTALL'							=> 'INŠTALÁCIA súboru',
	'LBL_UW_MANUAL_MERGE'						=> 'Zlúčenie súborov',
	'LBL_UW_MODULE_READY_UNINSTALL'				=> "Modul je pripravený na odinštalovanie. Kliknite na možnosť \"Potvrdiť\" a pokračujte s odinštalovaním.<br>\n",
	'LBL_UW_MODULE_READY'						=> "Modul je pripravený na inštaláciu. Kliknite na možnosť \"Potvrdiť\" a pokračujte s inštaláciou.",
	'LBL_UW_NO_INSTALLED_UPGRADES'				=> 'Neboli zistené žiadne uložené inovácie.',
	'LBL_UW_NONE'								=> 'Žiadne',
	'LBL_UW_NOT_AVAILABLE'						=> 'Nedostupné',
	'LBL_UW_OVERWRITE_DESC'						=> "Všetky zmenené súbory budú prepísané vrátane vlastných nastavení kódov a zmien šablón, ktoré ste vykonali. Naozaj chcete pokračovať?",
	'LBL_UW_OVERWRITE_FILES_CHOICE1'			=> 'Prepísať všetky súbory',
	'LBL_UW_OVERWRITE_FILES_CHOICE2'			=> 'Ručne zlúčiť - Všetko zachovať',
	'LBL_UW_OVERWRITE_FILES'					=> 'Spôsob zlučovania',
	'LBL_UW_PATCH_READY'						=> 'Oprava je pripravená pokračovať, Stlačte možnosť "Potvrdiť" uvedenú ďalej a dokončite proces inovácie.',
	'LBL_UW_PATCH_READY2'						=> '<h2>Upozornenie: Boli nájdené upravené rozloženia</h2><br />Nasledujúce súbory majú nové polia alebo upravené rozloženia obrazovky prostredníctvom Studio. Oprava, ktorú sa chystáte nainštalovať, zahŕňa zmeny v týchto súboroch. S <u>každým súborom</u> môžete urobiť toto:<br><ul><li>[<b>Predvolene</b>] Zachovať Vašu verziu ponechaním prázdneho zaškrtávacieho políčka. Zmeny z opravy budú ignorované. </li>alebo<li>Prijmúť aktualizované súbory zaškrtnutím daného poľa. Budete musieť znova aplikovať zmenené rozloženia vzhľadu pomocou Studio.</li></ul>',

	'LBL_UW_PREFLIGHT_ADD_TASK'					=> 'Vytvoriť položku úlohy pre ručné zlúčenie?',
	'LBL_UW_PREFLIGHT_COMPLETE'					=> 'Predletová kontrola',
	'LBL_UW_PREFLIGHT_DIFF'						=> 'Rozlíšené',
	'LBL_UW_PREFLIGHT_EMAIL_REMINDER'			=> 'Chcete si poslať e-mail s pripomienkou Ručného zlúčenia?',
	'LBL_UW_PREFLIGHT_FILES_DESC'				=> 'Súbory uvedené ďalej boli zmenené. Zrušte zaškrtnutie položiek, ktoré vyžadujú ručné zlúčenie. <i>Zistené zmeny rozloženia vzhľadu boli automaticky neoznačené; zaškrtnite tie, ktoré chcete prepísať.',
	'LBL_UW_PREFLIGHT_NO_DIFFS'					=> 'Nevyžaduje sa ručné zlúčenie.',
	'LBL_UW_PREFLIGHT_NOT_NEEDED'				=> 'Nie je potrebné.',
	'LBL_UW_PREFLIGHT_PRESERVE_FILES'			=> 'Automaticky zachované súbory:',
	'LBL_UW_PREFLIGHT_TESTS_PASSED'				=> 'Všetky predletové testy prebehli úspešne.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED2'			=> 'Kliknite na možnosť Ďalej a skopírujte aktualizované súbory do systému.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED3'			=> '<b>Poznámka:</b>Zvyšok procesu inovácie je povinný a je potrebné kliknúť na možnosť Ďalej na dokončenie procesu. Pokiaľ nechcete pokračovať, kliknite na možnosť Zrušiť.',
	'LBL_UW_PREFLIGHT_TOGGLE_ALL'				=> 'Zmeniť nastavenie všetkých súborov',

	'LBL_UW_REBUILD_TITLE'						=> 'Obnoviť výsledok',
	'LBL_UW_SCHEMA_CHANGE'						=> 'Zmeny schémy',

	'LBL_UW_SHOW_COMPLIANCE'					=> 'Zobraziť zistené nastavenia',
	'LBL_UW_SHOW_DB_PERMS'						=> 'Zobraziť chýbajúce povolenia pre databázu',
	'LBL_UW_SHOW_DETAILS'						=> 'Zobraziť podrobnosti',
	'LBL_UW_SHOW_DIFFS'							=> 'Zobraziť súbory vyžadujúce ručné zlúčenie',
	'LBL_UW_SHOW_NW_FILES'						=> 'Zobraziť súbory s chybnými povoleniami',
	'LBL_UW_SHOW_SCHEMA'						=> 'Zobraziť skript zmeny schémy',
	'LBL_UW_SHOW_SQL_ERRORS'					=> 'Zobraziť chybné otázky',
	'LBL_UW_SHOW'								=> 'Zobraziť',

	'LBL_UW_SKIPPED_FILES_TITLE'				=> 'Preskočené súbory',
	'LBL_UW_SKIPPING_FILE_OVERWRITE'			=> 'Preskakovanie prepísaných súborov - Vybraté ručné zlučovanie.',
	'LBL_UW_SQL_RUN'							=> 'Zaškrtnúť, ak bol SQL spustený ručne',
	'LBL_UW_START_DESC'							=> 'Tento sprievodca Vám pomôže pri inovácii tejto inštancie Sugar.',
	'LBL_UW_START_DESC2'						=> 'Poznámka: Odporúčame Vám zálohovať databázu Sugar a systémové súbory (všetky súbory v priečinku SugarCRM) ešte pred inováciou Vášho produkčného systému. Dôrazne odporúčame najprv vykonať test inovácie na klonovanej inštancii Vášho produkčného systému.',
	'LBL_UW_START_DESC3'						=> 'Kliknite na možnosť Ďalej a vykonajte kontrolu pripravenosti systému na inováciu. Kontrola zahŕňa povolenia pre súbory, databázy a nastavenia servera.',
	'LBL_UW_START_UPGRADED_UW_DESC'				=> 'Nový sprievodca inováciou bude teraz pokračovať v procese inovácie. Pokračujte v inovácii.',
	'LBL_UW_START_UPGRADED_UW_TITLE'			=> 'Vitajte v novom Sprievodcovi inováciou',

	'LBL_UW_SYSTEM_CHECK_CHECKING'				=> 'Prebieha kontrola, čakajte prosím. Môže to trvať až 30 sekúnd.',
	'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START'		=> 'Vyhľadanie všetkých príslušných súborov na kontrolu.',
	'LBL_UW_SYSTEM_CHECK_FILES'					=> 'Súbory',
	'LBL_UW_SYSTEM_CHECK_FOUND'					=> 'Nájdené',

	'LBL_UW_TITLE_CANCEL'						=> 'Zrušiť',
	'LBL_UW_TITLE_COMMIT'						=> 'Schváliť inováciu',
	'LBL_UW_TITLE_END'							=> 'Prevziať hlásenie',
	'LBL_UW_TITLE_PREFLIGHT'					=> 'Predletová kontrola',
	'LBL_UW_TITLE_START'						=> 'Vitajte',
	'LBL_UW_TITLE_SYSTEM_CHECK'					=> 'Kontrola systému',
	'LBL_UW_TITLE_UPLOAD'						=> 'Nahratý balík',
	'LBL_UW_TITLE'								=> 'Sprievodca inováciou',
	'LBL_UW_UNINSTALL'							=> 'Odinštalovať',
	//500 upgrade labels
	'LBL_UW_ACCEPT_THE_LICENSE' 				=> 'Prijať licenciu',
	'LBL_UW_CONVERT_THE_LICENSE' 				=> 'Prevod licencie',
	'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES'     => 'Aktualizované/prispôsobené moduly',
	'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED'       => 'Nasledujúce moduly boli zistené ako prispôsobené a chránené',
	'LBL_UW_FOLLOWING_MODULES_UPGRADED'         => 'Nasledujúce moduly boli zistené ako prispôsobené, upravené cez Studio a boli inovované',

	'LBL_START_UPGRADE_IN_PROGRESS'             => 'Prebieha štart',
	'LBL_SYSTEM_CHECKS_IN_PROGRESS'             => 'Prebieha kontrola systému',
	'LBL_LICENSE_CHECK_IN_PROGRESS'             => 'Prebieha licenčná kontrola',
	'LBL_PREFLIGHT_CHECK_IN_PROGRESS'           => 'Prebieha predletová kontrola',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS'       => 'Prebieha kopírovanie súborov',
	'LBL_COMMIT_UPGRADE_IN_PROGRESS'            => 'Prebieha schválenie inovácie',
    'LBL_UW_COMMIT_DESC'						=> 'Kliknite na možnosť Ďalej a spustite ďalšie inovačné skripty.',
	'LBL_UPGRADE_SCRIPTS_IN_PROGRESS'			=> 'Prebiehajú inovačné skripty',
	'LBL_UPGRADE_SUMMARY_IN_PROGRESS'			=> 'Prebieha zhrnutie inovácie',
	'LBL_UPGRADE_IN_PROGRESS'                   => 'prebieha',
	'LBL_UPGRADE_TIME_ELAPSED'                  => 'Uplynutý čas',
	'LBL_UPGRADE_CANCEL_IN_PROGRESS'			=> 'Prebieha zrušenie inovácie a čistenie',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE'      => 'Inovácia môže nejaký čas trvať',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS'           => 'Prebieha kontrola nahratia',
	'LBL_UPLOADING_UPGRADE_PACKAGE'      		=> 'Prebieha nahrávanie inovačného balíka',
    'LBL_UW_DORP_THE_OLD_SCHMEA' 				=> 'Chcete, aby aplikácia Sugar vložila starú schému 451?',
	'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD'			=> 'Sprievodca inováciou vloží starú schému 451',
	'LBL_UW_DROP_SCHEMA_MANUAL'					=> 'Inovácia manuálneho vloženia poštovej schémy',
	'LBL_UW_DROP_SCHEMA_METHOD'					=> 'Nastavenie vkladania starých schém',
	'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP'			=> 'Zobraziť starú schému, ktorá má byť vložená',
	'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST'      => 'Preskočené otázky',
	'LBL_INCOMPATIBLE_PHP_VERSION'              => 'Vyžaduje sa verzia PHP 5 alebo vyššia.',
	'ERR_CHECKSYS_PHP_INVALID_VER'      => 'Vaša verzia PHP nie je podporovaná aplikáciou Sugar. Musíte nainštalovať verziu, ktorá je kompatibilná s aplikáciou Sugar. Postupujte podľa matice kompatibility v poznámkach k vydaniu pre podporované verzie PHP. Vaša verzia je ',
	'LBL_BACKWARD_COMPATIBILITY_ON' 			=> 'Režim spätnej kompatibility Php je zapnutý. Nastavte zend.ze1_compatibility_mode na možnosť Off a pokračujte',
	//including some strings from moduleinstall that are used in Upgrade
	'LBL_ML_ACTION' => 'Akcia',
    'LBL_ML_CANCEL'             => 'Zrušiť',
    'LBL_ML_COMMIT'=>'Schváliť',
    'LBL_ML_DESCRIPTION' => 'Popis',
    'LBL_ML_INSTALLED' => 'Dátum inštalácie',
    'LBL_ML_NAME' => 'Meno',
    'LBL_ML_PUBLISHED' => 'Dátum zverejnenia',
    'LBL_ML_TYPE' => 'Typ',
    'LBL_ML_UNINSTALLABLE' => 'Neinštalovateľné',
    'LBL_ML_VERSION' => 'Verzia',
	'LBL_ML_INSTALL'=>'Inštalovať',
	//adding the string used in tracker. copying from homepage
	'LBL_HOME_PAGE_4_NAME' => 'Stopár',
	'LBL_CURRENT_PHP_VERSION' => '(Vaša aktuálna verzia php je',
	'LBL_RECOMMENDED_PHP_VERSION' => '. Odporúčaná verzia php je 5.2.1 alebo vyššia)',
	'LBL_MODULE_NAME' => 'Sprievodca inováciou',
	'LBL_MODULE_NAME_SINGULAR' => 'Sprievodca inováciou',
	'LBL_UPLOAD_SUCCESS' => 'Aktualizačný balík bol úspešne nahratý. Kliknite na možnosť Ďalej a vykonajte záverečnú kontrolu.',
	'LBL_UW_TITLE_LAYOUTS' => 'Potvrdiť rozloženia',
	'LBL_LAYOUT_MODULE_TITLE' => 'Rozloženia',
	'LBL_LAYOUT_MERGE_DESC' => 'Tu sú k dispozícii nové polia, ktoré boli pridané ako časť tejto inovácie a môžu byť automaticky pripojené do rozloženia existujúceho modulu. Ak sa chcete dozvedieť viac o nových poliach, prejdite do poznámok k vydaniu pre verziu, ktorú inovujete.<br><br>Ak si neželáte pripojiť nové polia, prosím, odznačte modul a Vaše prispôsobené rozloženie zostane nezmenené. Po inovácii budú polia dostupné v Studio.<br><br>',
	'LBL_LAYOUT_MERGE_TITLE' => 'Kliknutím na možnosť Ďalej potvrďte zmeny a dokončite inováciu.',
	'LBL_LAYOUT_MERGE_TITLE2' => 'Kliknutím na možnosť Ďalej dokončite inováciu.',
	'LBL_UW_CONFIRM_LAYOUTS' => 'Potvrdiť rozloženia',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Potvrdiť rozloženie výsledkov',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Nasledujúce rozloženia boli úspešne zlúčené:',
	'LBL_SELECT_FILE' => 'Výber súboru:',
	'LBL_LANGPACKS' => 'Jazykové balíky' /*for 508 compliance fix*/,
	'LBL_MODULELOADER' => 'Načítanie modulov' /*for 508 compliance fix*/,
	'LBL_PATCHUPGRADES' => 'Inovácie opráv' /*for 508 compliance fix*/,
	'LBL_THEMES' => 'Témy' /*for 508 compliance fix*/,
	'LBL_WORKFLOW' => 'Pracovný postup' /*for 508 compliance fix*/,
	'LBL_UPGRADE' => 'Aktulizácia' /*for 508 compliance fix*/,
	'LBL_PROCESSING' => 'Prebieha spracovanie' /*for 508 compliance fix*/,
    'LBL_GLOBAL_TEAM_DESC'                      => 'Viditeľný globálne',
);
