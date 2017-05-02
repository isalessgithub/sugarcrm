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
	'DESC_MODULES_INSTALLED'					=> 'De volgende modules zijn geïnstalleerd:',
	'DESC_MODULES_QUEUED'						=> 'De volgende modules staan klaar om te worden geïnstalleerd:',

	'ERR_UW_CANNOT_DETERMINE_GROUP'				=> 'Kan de groep niet bepalen',
	'ERR_UW_CANNOT_DETERMINE_USER'				=> 'Kan de eigenaar niet bepalen',
	'ERR_UW_CONFIG_WRITE'						=> 'Fout bij het updaten van de config.php met nieuwe versie informatie',
	'ERR_UW_CONFIG'								=> 'Maak uw config.php bestand schrijfbaar en laad deze pagina opnieuw.',
	'ERR_UW_DIR_NOT_WRITABLE'					=> 'Directory is niet schrijfbaar',
	'ERR_UW_FILE_NOT_COPIED'					=> 'Bestand niet gekopieerd',
	'ERR_UW_FILE_NOT_DELETED'					=> 'Probleem bij het verwijderen van het pakket',
	'ERR_UW_FILE_NOT_READABLE'					=> 'Bestand kon niet worden gelezen.',
	'ERR_UW_FILE_NOT_WRITABLE'					=> 'Bestand kon niet worden verplaatst of geschreven',
	'ERR_UW_FLAVOR_2'							=> 'Upgrade Smaak:',
	'ERR_UW_FLAVOR'								=> 'SugarCRM Systeem Smaak:',
	'ERR_UW_LOG_FILE_UNWRITABLE'				=> './upgradeWizard.log kon niet worden aangemaakt of geschreven.  Herstel de permissies van uw SugarCRM direcory.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD'				=> 'mbstring.func_overload staat ingesteld op een waarde > 1. Wijzig dit in uw php.ini en restart de webserver',
	'ERR_UW_MYSQL_VERSION'						=> 'SugarCRM heeft minstens MySQL versie 4.1.2 nodig. Gevonden:',
	'ERR_UW_OCI8_VERSION'				        => 'Uw versie van Oracle wordt niet ondersteund door Sugar.  U dient een compatibele versie te installeren met de Sugar applicatie. Raadpleeg aub de Compatibility Matrix in de Release Notes voor de Oracle Versies welke worden ondersteund.',
	'ERR_UW_NO_FILE_UPLOADED'					=> 'Geeft een bestand op en probeer opnieuw!',
	'ERR_UW_NO_FILES'							=> 'Een fout is opgetreden. Er zijn geen bestanden gevonden om te controleren.',
	'ERR_UW_NO_MANIFEST'						=> 'In het zip-bestand ontbreekt een manifest.php bestand. Kan daarom niet doorgaan.',
	'ERR_UW_NO_VIEW'							=> 'Ongeldige view gespecificeerd.',
	'ERR_UW_NO_VIEW2'							=> 'View niet gedefinieerd. Ga a.u.b. naar de beheerpagina om naar deze pagina te navigeren.',
	'ERR_UW_NOT_VALID_UPLOAD'					=> 'Geen geldige upload',
	'ERR_UW_NO_CREATE_TMP_DIR'					=> 'Kan de temp directory niet aanmaken. Controleer bestandspermissies.',
	'ERR_UW_ONLY_PATCHES'						=> 'U kunt alleen patches uploaden op deze pagina.',
    'ERR_UW_PREFLIGHT_ERRORS'					=> 'Fouten gevonden tijdens de Preflight Controle',
	'ERR_UW_UPLOAD_ERR'							=> 'Een fout heeft zich voorgedaan tijdens het uploaden van het bestand. Probeer het aub nogmaals!<br>\n',
	'ERR_UW_VERSION'							=> 'SugarCRM Systeem Versie:',
    'ERR_UW_WRONG_TYPE'							=> 'Deze pagina is niet voor het uitvoeren van',
	'ERR_UW_PHP_FILE_ERRORS'					=> array(
													1 => 'Het geüploade bestand is groter dan de upload_max_filesize directive in php.ini',
													2 => 'Het geüploade bestand is groter dan de MAX_FILE_SIZE richtlijn die is opgegeven in het HTML-formulier.',
													3 => 'Het geüploade bestand is slechts gedeeltelijk geüpload.',
													4 => 'Er is geen bestand geüpload',
													5 => 'Onbekende fout.',
													6 => 'Er ontbreekt een tijdelijke map.',
													7 => 'Schrijven van bestand naar schijf is mislukt.',
													8 => 'Bestand uploaden gestopt door extensie.',
),

    'ERROR_HT_NO_WRITE'                         => 'Kan niet schrijven naar het bestand: %s',
    'ERROR_MANIFEST_TYPE'                       => 'Het Manifest bestand moet het type van dit package aangeven',
    'ERROR_PACKAGE_TYPE'                        => 'Het manifest bestand geeft een onbekend package type aan: %s',
    'ERROR_VERSION_INCOMPATIBLE'                => 'Dit bestand is niet compatible met deze versie van Sugar:',
    'ERROR_FLAVOR_INCOMPATIBLE'                 => 'Dit bestand is niet compatible met deze editie van Sugar:',

    'ERROR_UW_CONFIG_DB'                        => 'Fout bij opslaan %s config var naar de db (key %s, value %s).',
    'ERR_NOT_ADMIN'                             => "Ongeoorloofde toegang tot beheer.",
    'ERR_NO_VIEW_ACCESS_REASON'                 => 'U heeft geen toegang tot deze pagina',

    'LBL_BUTTON_BACK'							=> 'Back',
	'LBL_BUTTON_CANCEL'							=> 'Annuleer',
	'LBL_BUTTON_DELETE'							=> 'Verwijder Pakket',
	'LBL_BUTTON_DONE'							=> 'Klaar',
	'LBL_BUTTON_EXIT'							=> 'Verlaat',
	'LBL_BUTTON_INSTALL'						=> 'Preflight-upgrade',
	'LBL_BUTTON_NEXT'							=> 'Next',
	'LBL_BUTTON_RECHECK'						=> 'Opnieuw controleren',
	'LBL_BUTTON_RESTART'						=> 'Opnieuw',

	'LBL_UPLOAD_UPGRADE'						=> 'Upload an upgrade',
	'LBL_UPLOAD_FILE_NOT_FOUND'					=> 'Upload bestand niet gevonden',
	'LBL_UW_BACKUP_FILES_EXIST_TITLE'			=> 'Bestands Backup',
	'LBL_UW_BACKUP_FILES_EXIST'					=> 'Back-up bestanden van deze upgrade kunnen worden gevonden in',
	'LBL_UW_BACKUP'								=> 'Bestand BACKUP',
	'LBL_UW_CANCEL_DESC'						=> 'Upgrade Wizard has been cancelled.  All temporary files and the uploaded zip file have been deleted.<br><br>Press "Done" to restart the Upgrade Wizard.',
	'LBL_UW_CHARSET_SCHEMA_CHANGE'				=> 'Karakter Set Schema Wijzigingen',
	'LBL_UW_CHECK_ALL'							=> 'Controleer alles',
	'LBL_UW_CHECKLIST'							=> 'Upgrade Stappen',
	'LBL_UW_COMMIT_ADD_TASK_DESC_1'				=> "Backups van de overschreven bestanden staan in de volgende directory:",
	'LBL_UW_COMMIT_ADD_TASK_DESC_2'				=> "Handmatig samenvoegen van de volgende bestanden:",
	'LBL_UW_COMMIT_ADD_TASK_NAME'				=> 'Upgrade-proces: handmatig bestanden samenvoegen',
	'LBL_UW_COMMIT_ADD_TASK_OVERVIEW'			=> 'Gebruik een diff methode waarme u het vertrouwd bent om deze bestanden samen te voegen. Totdat dit is voltooid, zal uw SugarCRM installatie in een onzekere toestand verkeren, en is de upgrade onvolledig.',
	'LBL_UW_COMPLETE'							=> 'Compleet',
	'LBL_UW_CONTINUE_CONFIRMATION'              => 'Deze nieuwe versie van Sugar bevat nieuwe licentieovereenkomst. Wilt u doorgaan?',
	'LBL_UW_COMPLIANCE_ALL_OK'					=> 'All system settings requirements satisfied',
	'LBL_UW_COMPLIANCE_CALLTIME'				=> 'PHP instelling: beltijd overslaan op referentie',
	'LBL_UW_COMPLIANCE_CURL'					=> 'cURL module',
	'LBL_UW_COMPLIANCE_IMAP'					=> 'IMAP module',
	'LBL_UW_COMPLIANCE_MBSTRING'				=> 'MBStrings Module',
	'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD'	=> 'MBStrings mbstring.func_overload parameter',
	'LBL_UW_COMPLIANCE_MEMORY'					=> 'PHP instelling: geheugenlimiet',
    'LBL_UW_COMPLIANCE_STREAM'                  => 'PHP instelling: stream',
	'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES'		=> 'MS SQL Server & PHP Magic Quotes GPC',
	'LBL_UW_COMPLIANCE_MYSQL'					=> 'Minimale MySQL Versie',
    'LBL_UW_COMPLIANCE_DB'                      => 'Minimale Database Versie',
	'LBL_UW_COMPLIANCE_PHP_INI'					=> 'Locatie van de php.ini',
	'LBL_UW_COMPLIANCE_PHP_VERSION'				=> 'Minimale PHP Versie',
	'LBL_UW_COMPLIANCE_SAFEMODE'				=> 'PHP instelling: veilige modus',
	'LBL_UW_COMPLIANCE_TITLE'					=> 'Serverinstellingen controleren',
	'LBL_UW_COMPLIANCE_TITLE2'					=> 'Geconstateerde Settings',
	'LBL_UW_COMPLIANCE_XML'						=> 'XML parseren',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE'				=> 'Zip ondersteuning',

	'LBL_UW_COPIED_FILES_TITLE'					=> 'Bestand met succes gekopieerd',
	'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE'			=> 'Schemawijzigingen aangepaste tabel',

	'LBL_UW_DB_CHOICE1'							=> 'Wizard Runs SQL upgraden',
	'LBL_UW_DB_CHOICE2'							=> 'Handmatige SQL query&#39;s',
	'LBL_UW_DB_INSERT_FAILED'					=> 'INVOEGEN mislukt - vergeleken resultaten verschillen',
	'LBL_UW_DB_ISSUES_PERMS'					=> 'Databaseprivileges',
	'LBL_UW_DB_ISSUES'							=> 'Databaseproblemen',
	'LBL_UW_DB_METHOD'							=> 'Updatemethode database',
	'LBL_UW_DB_NO_ADD_COLUMN'					=> 'TABEL WIJZIGEN [table] KOLOM TOEVOEGEN [column]',
	'LBL_UW_DB_NO_CHANGE_COLUMN'				=> 'TABEL WIJZIGEN [table] KOLOM WIJZIGEN [column]',
	'LBL_UW_DB_NO_CREATE'						=> 'TABEL AANMAKEN [table]',
	'LBL_UW_DB_NO_DELETE'						=> 'VERWIJDEREN UIT [table]',
	'LBL_UW_DB_NO_DROP_COLUMN'					=> 'TABEL WIJZIGEN [table] KOLOM LATEN ZAKKEN [column]',
	'LBL_UW_DB_NO_DROP_TABLE'					=> 'TABEL LATEN ZAKKEN [table]',
	'LBL_UW_DB_NO_ERRORS'						=> 'Alle privileges beschikbaar',
	'LBL_UW_DB_NO_INSERT'						=> 'INVOEGEN IN [table]',
	'LBL_UW_DB_NO_SELECT'						=> 'SELECTEREN [x] UIT [table]',
	'LBL_UW_DB_NO_UPDATE'						=> 'BIJWERKEN [table]',
	'LBL_UW_DB_PERMS'							=> 'Noodzakelijke Privilege',

	'LBL_UW_DESC_MODULES_INSTALLED'				=> 'The following upgrades have been installed:',
	'LBL_UW_END_DESC'							=> 'Congratulations, your system is now upgraded.',
	'LBL_UW_END_DESC2'							=> 'Als u ervoor heeft gekozen om handmatig sommige stappen uit voeren zoals bestandssamenvoegingen of SQL queries, doe dit dan nu, Uw systeem zal instabiel zijn totdat deze stappen zijn afgerond.',
	'LBL_UW_END_LOGOUT_PRE'						=> 'De upgrade is voltooid.',
	'LBL_UW_END_LOGOUT_PRE2'					=> 'Klik op Gereed om de Wizard te verlaten.',
	'LBL_UW_END_LOGOUT'							=> 'Please log out of your account if you plan on upgrading further than this patch/upgrade level.',
	'LBL_UW_END_LOGOUT2'						=> 'Uitloggen',
	'LBL_UW_REPAIR_INDEX'						=> 'Voor database performance verbeteringen, start a.u.b. het  <a href="index.php?module=Administration&action=RepairIndex" target="_blank">Repair Index</a> script.',

	'LBL_UW_FILE_DELETED'						=> "is verwijderd.<br>",
	'LBL_UW_FILE_GROUP'							=> 'Groep',
	'LBL_UW_FILE_ISSUES_PERMS'					=> 'Bestandspermissies',
	'LBL_UW_FILE_ISSUES'						=> 'Bestandsissues',
	'LBL_UW_FILE_NEEDS_DIFF'					=> 'Bestand vereist een handmatige Diff',
	'LBL_UW_FILE_NO_ERRORS'						=> '<b>Alle bestanden schrijfbaar</b>',
	'LBL_UW_FILE_OWNER'							=> 'Eigenaar',
	'LBL_UW_FILE_PERMS'							=> 'Bevoegdheden',
	'LBL_UW_FILE_UPLOADED'						=> 'is geüpload',
	'LBL_UW_FILE'								=> 'Bestandsnaam',
	'LBL_UW_FILES_QUEUED'						=> 'The following upgrades are ready to be installed:',
	'LBL_UW_FILES_REMOVED'						=> "De volgende bestande zullen worden verwijderd:<br>",
	'LBL_UW_NEXT_TO_UPLOAD'						=> "Klik op Volgende om de pakketten te uploaden",
	'LBL_UW_FROZEN'								=> 'Required steps must be completed before continuing.',
	'LBL_UW_HIDE_DETAILS'						=> 'Ververg Details',
	'LBL_UW_IN_PROGRESS'						=> 'In Bewerking',
	'LBL_UW_INCLUDING'							=> 'Inclusief',
	'LBL_UW_INCOMPLETE'							=> 'Incompleet',
	'LBL_UW_INSTALL'							=> 'Bestand INSTALLEER',
	'LBL_UW_MANUAL_MERGE'						=> 'Bestand Samenvoegen',
	'LBL_UW_MODULE_READY_UNINSTALL'				=> "Module is ready to be uninstalled.  Click \"Commit\" to proceed with installation.<br>",
	'LBL_UW_MODULE_READY'						=> "Module is klaar om te worden geïnstalleerd. Klik op \"Commit\" om verder te gaan met de installatie.",
	'LBL_UW_NO_INSTALLED_UPGRADES'				=> 'Geen opgenomen Upgrades gedetecteerd.',
	'LBL_UW_NONE'								=> 'Geen',
	'LBL_UW_NOT_AVAILABLE'						=> 'Niet beschikbaar',
	'LBL_UW_OVERWRITE_DESC'						=> "Alle gewijzigde bestanden zullen worden overschreven, ook alle aanpassingen in de code en in de sjablonen die u heeft aangebracht. Weet u zeker dat u doorgaat?",
	'LBL_UW_OVERWRITE_FILES_CHOICE1'			=> 'Overschrijf alle bestanden',
	'LBL_UW_OVERWRITE_FILES_CHOICE2'			=> 'Handmatig Samenvoegen - Bewaar alles',
	'LBL_UW_OVERWRITE_FILES'					=> 'Samenvoeg Methode',
	'LBL_UW_PATCH_READY'						=> 'De patch is klaar om verder te gaan. Klik op de "Commit" knop hieronder om het upgrade-proces te voltooien.',
	'LBL_UW_PATCH_READY2'						=> '<h2>Opmerking: Aangepaste Layouts Gevonden</h2><br />De volgende bestanden hebben nieuwe velden of gewijzigde schermlayouts toegepast via de Studio. De patch die u nu gaat installeren bevat wijzigingen voor deze bestanden. Voor <u>ieder bestand</u> kunt u:<br><ul><li>[<b>Standaard</b>] Uw versie bewaren door de checkbox niet aan te vinken. De patch wijzigingen zullen dan worden genegeerd.</li>of<li>Accepteer de gewijzigde bestanden door de checkbox wel aan te vinken. Uw wijzigingen zullen opnieuw moeten worden aangebracht via de Studio.</li></ul>',

	'LBL_UW_PREFLIGHT_ADD_TASK'					=> 'Taak aanmaken voor Handmatig Samenvoegen?',
	'LBL_UW_PREFLIGHT_COMPLETE'					=> 'Preflight Controle',
	'LBL_UW_PREFLIGHT_DIFF'						=> 'Onderscheidend',
	'LBL_UW_PREFLIGHT_EMAIL_REMINDER'			=> 'Wilt u uzelf een herinnering sturen voor de handmatige samenvoeging?',
	'LBL_UW_PREFLIGHT_FILES_DESC'				=> 'De bestanden hieronder zijn gewijzigd. Vink de items uit die handmatig samengevoegd moeten worden. <i> Gedetecteerde lay-out wijzigingen worden automatisch uitgevinkt; vink diegene aan die wel moeten worden overschreven.',
	'LBL_UW_PREFLIGHT_NO_DIFFS'					=> 'Geen handmatige bestandssamenvoeging vereist',
	'LBL_UW_PREFLIGHT_NOT_NEEDED'				=> 'Niet nodig.',
	'LBL_UW_PREFLIGHT_PRESERVE_FILES'			=> 'Auto-bewaarde Bestanden:',
	'LBL_UW_PREFLIGHT_TESTS_PASSED'				=> 'All Preflight tests passed. Press "Next" to commit these changes.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED2'			=> 'Klik op Volgende om de bijgewerkte bestanden naar het systeem te kopiëren.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED3'			=> 'Opmerking: De rest van het upgrade proces is verplicht. Door op Volgende te klikken verplicht u zich het proces af te maken. Als u niet wilt doorgaan, klik dan op Annuleren.',
	'LBL_UW_PREFLIGHT_TOGGLE_ALL'				=> 'Toggle Alle Bestanden',

	'LBL_UW_REBUILD_TITLE'						=> 'Herbouw Resultaat',
	'LBL_UW_SCHEMA_CHANGE'						=> 'Schema Wijzigingen',

	'LBL_UW_SHOW_COMPLIANCE'					=> 'Toon Ontdekte Instellingen',
	'LBL_UW_SHOW_DB_PERMS'						=> 'Toon Ontbrekende Database Permissies',
	'LBL_UW_SHOW_DETAILS'						=> 'Toon Details',
	'LBL_UW_SHOW_DIFFS'							=> 'Toon Bestanden die handmatige samenvoeging benodigd zijn',
	'LBL_UW_SHOW_NW_FILES'						=> 'Toon bestanden met foutieve permissies',
	'LBL_UW_SHOW_SCHEMA'						=> 'Toon Wijzig Schema Script',
	'LBL_UW_SHOW_SQL_ERRORS'					=> 'Toon Foutieve Queries',
	'LBL_UW_SHOW'								=> 'Toon',

	'LBL_UW_SKIPPED_FILES_TITLE'				=> 'Bestanden overgeslagen',
	'LBL_UW_SKIPPING_FILE_OVERWRITE'			=> 'Overschrijven Bestanden wordt overgeslagen - Handmatig Samenvoegen is geselecteerd',
	'LBL_UW_SQL_RUN'							=> 'Controleer of SQL handmatig is uitgevoerd',
	'LBL_UW_START_DESC'							=> 'Welcome to the SugarCRM Upgrade Wizard. This wizard is designed to assist administrators when upgrading their SugarCRM instances.  Please follow the instructions carefully.',
	'LBL_UW_START_DESC2'						=> 'Let op: We raden u aan om een kopie te maken van uw Sugar database en systeembestanden (alle bestanden in de SugarCRM map) voordat u uw productieomgeving bijwerkt naar de laatste versie. We raden ten strengste aan om eerst een proef uit te voeren op uw gekopieerde omgeving.',
	'LBL_UW_START_DESC3'						=> 'Klik op Volgende om een systeemcheck uit te voeren. De systeemcheck controleert  bestandspermissies, database voorrechten en server-instellingen.',
	'LBL_UW_START_UPGRADED_UW_DESC'				=> 'De nieuwe Upgrade Wizard zal nu het upgrade proces hervatten. Ga dan verder met uw upgrade.',
	'LBL_UW_START_UPGRADED_UW_TITLE'			=> 'Welkom bij de nieuwe Upgrade Wizard',

	'LBL_UW_SYSTEM_CHECK_CHECKING'				=> 'Bezig met controleren, even geduld aub. Dit kan maximaal 30 seconden duren.',
	'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START'		=> 'Het vinden van alle relevante bestanden om te controleren.',
	'LBL_UW_SYSTEM_CHECK_FILES'					=> 'Bestanden',
	'LBL_UW_SYSTEM_CHECK_FOUND'					=> 'Gevonden',

	'LBL_UW_TITLE_CANCEL'						=> 'Annuleer',
	'LBL_UW_TITLE_COMMIT'						=> 'Upgrade toewijzen',
	'LBL_UW_TITLE_END'							=> 'Eindrapport',
	'LBL_UW_TITLE_PREFLIGHT'					=> 'Preflight Controle',
	'LBL_UW_TITLE_START'						=> 'Start',
	'LBL_UW_TITLE_SYSTEM_CHECK'					=> 'System Checks',
	'LBL_UW_TITLE_UPLOAD'						=> 'Upload Upgrade',
	'LBL_UW_TITLE'								=> 'Upgradewizard',
	'LBL_UW_UNINSTALL'							=> 'De-installeer',
	//500 upgrade labels
	'LBL_UW_ACCEPT_THE_LICENSE' 				=> 'Accepteer Licentie',
	'LBL_UW_CONVERT_THE_LICENSE' 				=> 'Converteer Licentie',
	'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES'     => 'Geüpgraded/Aangepaste Modules',
	'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED'       => 'De volgende modules worden gedetecteerd als op maat gemaakt en bewaard',
	'LBL_UW_FOLLOWING_MODULES_UPGRADED'         => 'De volgende modules worden gedetecteerd als aangepast in de Studio en zijn geüpgraded.',

	'LBL_START_UPGRADE_IN_PROGRESS'             => 'Bezig met de Start',
	'LBL_SYSTEM_CHECKS_IN_PROGRESS'             => 'System Checks in progress',
	'LBL_LICENSE_CHECK_IN_PROGRESS'             => 'Bezig met Licentie Check',
	'LBL_PREFLIGHT_CHECK_IN_PROGRESS'           => 'Preflight Check in progress',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS'       => 'Bezig met het kopiëren van bestanden',
	'LBL_COMMIT_UPGRADE_IN_PROGRESS'            => 'Commit Upgrade in progress',
    'LBL_UW_COMMIT_DESC'						=> 'Klik op Volgende om aanvullende upgrade scripts uit te voeren.',
	'LBL_UPGRADE_SCRIPTS_IN_PROGRESS'			=> 'Bezig met het uitvoeren van de upgrade scripts',
	'LBL_UPGRADE_SUMMARY_IN_PROGRESS'			=> 'Upgrade Summary in progress',
	'LBL_UPGRADE_IN_PROGRESS'                   => 'Bezig',
	'LBL_UPGRADE_TIME_ELAPSED'                  => 'Verstreken Tijd',
	'LBL_UPGRADE_CANCEL_IN_PROGRESS'			=> 'Upgrade Cancel and Cleanup in progress',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE'      => 'Upgrade kan enige tijd in beslag nemen',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS'           => 'Upload checks in progress',
	'LBL_UPLOADING_UPGRADE_PACKAGE'      		=> 'Uploading upgrade package',
    'LBL_UW_DORP_THE_OLD_SCHMEA' 				=> 'Moet Sugar het afgekeurde 451 Schema verwijderen?',
	'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD'			=> 'Upgrade Wizard Verwijderd oud 451 schema',
	'LBL_UW_DROP_SCHEMA_MANUAL'					=> 'Handmatig Verwijderen van Schema na Upgrade',
	'LBL_UW_DROP_SCHEMA_METHOD'					=> 'Oude Schema Verwijder Methode',
	'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP'			=> 'Toon Oude Schema dat kan worden verwijderd',
	'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST'      => 'Overgeslagen Queries',
	'LBL_INCOMPATIBLE_PHP_VERSION'              => 'Php versie 5 of later is vereist',
	'ERR_CHECKSYS_PHP_INVALID_VER'      => 'Uw versie van PHP wordt niet ondersteund door Sugar. U moet een versie hebben die compatibel is. Raadpleeg de Compatibility Matrix in de Release Notes voor de ondersteunde PHP-versies. Uw versie is',
	'LBL_BACKWARD_COMPATIBILITY_ON' 			=> 'Php Backward Compatibility modus is ingeschakeld. Zet zend.ze1_compatibility_mode op Off/Uit voor u verder gaat',
	//including some strings from moduleinstall that are used in Upgrade
	'LBL_ML_ACTION' => 'Actie',
    'LBL_ML_CANCEL'             => 'Annuleer',
    'LBL_ML_COMMIT'=>'Toewijzen',
    'LBL_ML_DESCRIPTION' => 'Beschrijving',
    'LBL_ML_INSTALLED' => 'Installatiedatum',
    'LBL_ML_NAME' => 'Naam',
    'LBL_ML_PUBLISHED' => 'Publiceerdatum',
    'LBL_ML_TYPE' => 'Type',
    'LBL_ML_UNINSTALLABLE' => 'Niet installeerbaar',
    'LBL_ML_VERSION' => 'Versie',
	'LBL_ML_INSTALL'=>'Installeren',
	//adding the string used in tracker. copying from homepage
	'LBL_HOME_PAGE_4_NAME' => 'Tracker',
	'LBL_CURRENT_PHP_VERSION' => '(Uw huidige php versie is',
	'LBL_RECOMMENDED_PHP_VERSION' => '.Aanbevolen php versie is 5.2.1 of hoger)',
	'LBL_MODULE_NAME' => 'Upgrade Wizard',
	'LBL_MODULE_NAME_SINGULAR' => 'Upgrade Wizard',
	'LBL_UPLOAD_SUCCESS' => 'Upgrade pakket succesvol geüpload. Klik op Volgende om een laatste controle uit te voeren.',
	'LBL_UW_TITLE_LAYOUTS' => 'Bevestig Layouts',
	'LBL_LAYOUT_MODULE_TITLE' => 'Layouts',
	'LBL_LAYOUT_MERGE_DESC' => 'Er zijn nieuwe velden beschikbaar die zijn toegevoegd als onderdeel van deze upgrade. Deze kunnen automatisch worden toegevoegd aan uw bestaande module lay-outs. Voor meer informatie over deze velden verwijzen we naar de Release Notes.<br /><br />Wilt u de nieuwe velden niet toevoegen, vink dan de betreffende modules uit. Deze zullen dan ongewijzigd blijven. De nieuwe velden zijn wel beschikbaar in de Studio nadat de upgrade is voltooid.',
	'LBL_LAYOUT_MERGE_TITLE' => 'Klik op Volgende om de wijzigingen te bevestigen en om de upgrade te voltooien.',
	'LBL_LAYOUT_MERGE_TITLE2' => 'Klik op Volgende om de upgrade te voltooien.',
	'LBL_UW_CONFIRM_LAYOUTS' => 'Bevestig de lay-out.',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Bevestig de lay-out resultaten',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'De volgende lay-outs zijn succesvol samengevoegd:',
	'LBL_SELECT_FILE' => 'Selecteer bestand',
	'LBL_LANGPACKS' => 'Taalpakketten' /*for 508 compliance fix*/,
	'LBL_MODULELOADER' => 'Module lader' /*for 508 compliance fix*/,
	'LBL_PATCHUPGRADES' => 'Patchupgrades' /*for 508 compliance fix*/,
	'LBL_THEMES' => 'Themes' /*for 508 compliance fix*/,
	'LBL_WORKFLOW' => 'Workflow' /*for 508 compliance fix*/,
	'LBL_UPGRADE' => 'Upgrade' /*for 508 compliance fix*/,
	'LBL_PROCESSING' => 'Verwerken' /*for 508 compliance fix*/,
    'LBL_GLOBAL_TEAM_DESC'                      => 'Zichtbaar voor iedereen',
);
