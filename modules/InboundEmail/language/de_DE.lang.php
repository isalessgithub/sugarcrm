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
/*********************************************************************************

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array(

	'LBL_ASSIGN_TEAM'		=> 'Teams zuweisen',

	'LBL_RE'					=> 'AW:',

	'ERR_BAD_LOGIN_PASSWORD'=> 'Benutzername oder Passwort inkorrekt',
	'ERR_BODY_TOO_LONG'		=> '\rTextkörper zu lang, um die GANZE E-Mail zu speichern. Abgeschnitten.',
	'ERR_INI_ZLIB'			=> 'Konnte Zlib-Komprimierung nicht ausschalten. "Einstellungen testen" könnte fehlschlagen.',
	'ERR_MAILBOX_FAIL'		=> 'Konnte keine E-Mail-Konten finden.',
	'ERR_NO_IMAP'			=> 'Keine IMAP-Bibliotheken gefunden. Bitte korrigieren Sie das, bevor Sie mit eingehenden E-Mails weiterarbeiten',
	'ERR_NO_OPTS_SAVED'		=> 'Für Ihre eingehende Mailbox wurden keine Idealwerte gespeichert. Bitte überprüfen Sie die Einstellungen',
	'ERR_TEST_MAILBOX'		=> 'Überprüfen Sie bitte Ihre Einstellungen und versuchen Sie es erneut.',
    'ERR_DELETE_FOLDER' => 'Ordner kann nicht gelöscht werden.',
    'ERR_UNSUBSCRIBE_FROM_FOLDER' => 'Kann nicht vor dem Löschen vom Ordner abgemeldet werden.',

	'LBL_APPLY_OPTIMUMS'	=> 'Optimalwerte anwenden',
	'LBL_ASSIGN_TO_USER'	=> 'Mit Benutzer verknüpfen',
	'LBL_AUTOREPLY_OPTIONS'	=> 'Auto-Antwort-Optionen',
	'LBL_AUTOREPLY'			=> 'Auto-Antwort-Vorlage',
	'LBL_AUTOREPLY_HELP'	=> 'Wählen Sie die Vorlage für die automatische Benachrichtigung, um dem Sender mitzuteilen, dass seine E-Mail empfangen wurde.',
	'LBL_BASIC'				=> 'E-Mail-Kontoinformationen',
	'LBL_CASE_MACRO'		=> 'Anfrage-Macro',
	'LBL_CASE_MACRO_DESC'	=> 'Konfigurieren Sie das Macro, das verwendet wird, um importierte E-Mails bestimmten Tickets zuzuweisen.',
	'LBL_CASE_MACRO_DESC2'	=> 'Konfigurieren Sie einen beliebigen Wert, aber behalten Sie das <b>"%1"</b>.',
	'LBL_CERT_DESC'			=> 'Validierung des Mailserver-Sicherheitszertifikats erzwingen - nicht verwenden, wenn selbstzertifiziert.',
	'LBL_CERT'				=> 'Zertifikat validieren',
	'LBL_CLOSE_POPUP'		=> 'Fenster schließen',
	'LBL_CREATE_NEW_GROUP'	=> '--Gruppe beim Speichern erstellen--',
	'LBL_CREATE_TEMPLATE'	=> 'Erstellen',
	'LBL_SUBSCRIBE_FOLDERS'	=> 'Ordner abonnieren',
	'LBL_DEFAULT_FROM_ADDR'	=> 'Standard:',
	'LBL_DEFAULT_FROM_NAME'	=> 'Standard:',
	'LBL_DELETE_SEEN'		=> 'Gelesene E-Mails nach Import löschen',
	'LBL_EDIT_TEMPLATE'		=> 'Bearbeiten',
	'LBL_EMAIL_OPTIONS'		=> 'E-Mail-Bearbeitungsoptionen',
	'LBL_EMAIL_BOUNCE_OPTIONS' => 'Optionen der Bounce-Funktion',
	'LBL_FILTER_DOMAIN_DESC'=> 'Keine automatischen Antworten an folgende Domänen senden.',
	'LBL_ASSIGN_TO_GROUP_FOLDER_DESC'=> 'Wählen Sie diese Option aus, um automatisch E-Mail-Einträge für alle eingehenden E-Mails zu erstellen.',
	'LBL_POSSIBLE_ACTION_DESC'		=> 'Für die Option "Ticket erstellen" muss ein Gruppenordner ausgewählt werden',
	'LBL_FILTER_DOMAIN'		=> 'Keine Auto-Antwort an diese Domäne',
	'LBL_FIND_OPTIMUM_KEY'	=> 'f',
	'LBL_FIND_OPTIMUM_MSG'	=> '<br>Die optimalen Verbindungseinstellungen werden gesucht.',
	'LBL_FIND_OPTIMUM_TITLE'=> 'Optimale Konfiguration suchen',
	'LBL_FIND_SSL_WARN'		=> '<br>Der SSL-Test kann einige Zeit dauern. Haben Sie bitte Geduld.<br>',
	'LBL_FORCE_DESC'		=> 'Einige IMAP/POP3-Server benötigen spezielle Schalter. Erzwingen Sie bitte eine negative Schaltung bei der Verbindung (z.B. /notls)',
	'LBL_FORCE'				=> 'Negativ erzwingen',
	'LBL_FOUND_MAILBOXES'	=> 'Folgende verwendbare Ordner gefunden.<br>Klicken Sie auf einen, um diesen auszuwählen:',
	'LBL_FOUND_OPTIMUM_MSG'	=> '<br>Die optimalen Einstellungen wurden gefunden. Klicken Sie auf die Schaltfläche unten, um diese für Ihre Mailbox zu übernehmen.',
	'LBL_FROM_ADDR'			=> '"Von"-Adresse',
    // as long as XTemplate doesn't support output escaping, transform
    // quotes to html-entities right here (bug #48913)
    'LBL_FROM_ADDR_DESC'    => "Die hier angegebene Adresse scheint möglicherweise nicht im Feld &quot;Von&quot; der E-Mail auf, wenn von dem E-Mail-Anbieter Einschränkungen festgelegt wurden. In diesem Fall wird die E-Mail-Adresse verwendet, die für den ausgehenden Server konfiguriert wurde.",
	'LBL_FROM_NAME_ADDR'	=> '"Von"-Name/E-Mail',
	'LBL_FROM_NAME'			=> '"Von"-Name',
	'LBL_GROUP_QUEUE'		=> 'An Gruppe zuweisen',
    'LBL_HOME'              => 'Startseite',
	'LBL_LIST_MAILBOX_TYPE'	=> 'Postfach-Verwendung',
	'LBL_LIST_NAME'			=> 'Name:',
	'LBL_LIST_GLOBAL_PERSONAL'			=> 'Typ',
	'LBL_LIST_SERVER_URL'	=> 'Mail-Server',
	'LBL_LIST_STATUS'		=> 'Status:',
	'LBL_LOGIN'				=> 'Benutzername',
	'LBL_MAILBOX_DEFAULT'	=> 'POSTEINGANG',
	'LBL_MAILBOX_SSL_DESC'	=> 'SSL zum Verbinden benützen. Wenn das nicht funktioniert, prüfen Sie ob Ihre PHP-Installation "--with-imap-ssl" in der Konfiguration beinhaltet.',
	'LBL_MAILBOX_SSL'		=> 'SSL verwenden',
	'LBL_MAILBOX_TYPE'		=> 'Mögliche Aktionen',
	'LBL_DISTRIBUTION_METHOD' => 'Verteilungsmethode',
	'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Neue Ticket-Antwortvorlage für autom. Antwort',
	'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Wählen Sie die Vorlage für die automatische Benachrichtigung, um dem E-Mail-Sender mitzuteilen, dass ein Ticket erstellt wurde. Diese E-Mail enthält die Fallnummer im Betreff, gemäß den erforderlichen Macro-Einstellungen. Diese Antwort wird nur versendet, wenn die erste E-Mail empfangen wurde.',
	'LBL_MAILBOX'			=> 'Überwachte Ordner',
	'LBL_TRASH_FOLDER'		=> 'Papierkorb-Ordner',
	'LBL_GET_TRASH_FOLDER'	=> 'Papierkorb-Ordner abfragen',
	'LBL_SENT_FOLDER'		=> 'Gesendet-Ordner',
	'LBL_GET_SENT_FOLDER'	=> 'Gesendet-Ordner abfragen',
	'LBL_SELECT'				=> 'Auswählen',
	'LBL_MARK_READ_DESC'	=> 'Nachrichten auf Server als gelesen markieren; nicht löschen.',
	'LBL_MARK_READ_NO'		=> 'E-Mails werden nach dem Import als gelöscht markiert',
	'LBL_MARK_READ_YES'		=> 'E-Mails bleiben nach dem Import auf dem Server',
	'LBL_MARK_READ'			=> 'E-Mails auf Server belassen',
	'LBL_MAX_AUTO_REPLIES'	=> 'Anzahl Auto-Antworten',
	'LBL_MAX_AUTO_REPLIES_DESC'	=> 'Setzen Sie die maximale Anzahl von Auto-Antworten für eine eindeutige E-Mail-Adresse während 24 Stunden',
	'LBL_PERSONAL_MODULE_NAME' => 'Persönliches E-Mail-Konto',
	'LBL_PERSONAL_MODULE_NAME_SINGULAR' => 'Persönliches E-Mail-Konto',
	'LBL_CREATE_CASE'      => 'Ticket aus E-Mail erstellen',
	'LBL_CREATE_CASE_HELP'  => 'Auswählen, um in Sugar automatisch Ticket-Datensätze für eingehende E-Mails zu erstellen.',
	'LBL_MODULE_NAME'		=> 'Einstellungen eingehende E-Mails',
	'LBL_MODULE_NAME_SINGULAR' => 'Eingehende E-Mails',
	'LBL_BOUNCE_MODULE_NAME' => 'Bounce Handling für Mailbox',
	'LBL_MODULE_TITLE'		=> 'Eingehende E-Mails',
	'LBL_NAME'				=> 'Name',
    'LBL_NONE'              => 'Kein(e)',
	'LBL_NO_OPTIMUMS'		=> 'Die optimalen Einstellungen konnten nicht gefunden werden. Bitte überprüfen Sie Ihre Einstellungen und versuchen Sie es dann erneut.',
	'LBL_ONLY_SINCE_DESC'	=> 'PHP kann bei POP3 neue bzw. ungelesenen E-Mails nicht filtern. Setzen Sie dieses Markierung, um neue Mitteilungen seit der letzten Abfrage zu suchen. Dies erhöht die Leistungsfähigkeit bedeutend, wenn Ihr Mailserver IMAP nicht unterstützt.',
	'LBL_ONLY_SINCE_NO'		=> 'Nein. Prüfen Sie alle E-Mails auf dem Mailserver.',
	'LBL_ONLY_SINCE_YES'	=> 'Ja.',
	'LBL_ONLY_SINCE'		=> 'Nur seit letztem Abruf importieren:',
	'LBL_OUTBOUND_SERVER'	=> 'Ausgehender Mailserver',
	'LBL_PASSWORD_CHECK'	=> 'Passwort-Überprüfung',
	'LBL_PASSWORD'			=> 'Passwort',
	'LBL_POP3_SUCCESS'		=> 'Ihre POP3-Testverbindung war erfolgreich.',
	'LBL_POPUP_FAILURE'		=> 'Testverbindung fehlerhaft. Der Fehler wird unten angezeigt.',
	'LBL_POPUP_SUCCESS'		=> 'Testverbindung erfolgreich. Ihre Einstellungen funktionieren.',
	'LBL_POPUP_TITLE'		=> 'Einstellungen testen',
	'LBL_GETTING_FOLDERS_LIST' 		=> 'Ordnerliste abrufen',
	'LBL_SELECT_SUBSCRIBED_FOLDERS' 		=> 'Abonnierte(n) Ordner auswählen',
	'LBL_SELECT_TRASH_FOLDERS' 		=> 'Papierkorb-Ordner auswählen',
	'LBL_SELECT_SENT_FOLDERS' 		=> 'Gesendet-Ordner auswählen',
	'LBL_DELETED_FOLDERS_LIST' 		=> 'Folgende(r) Ordner %s existieren nicht oder wurde(n) gelöscht',
	'LBL_PORT'				=> 'Mailserver-Port',
	'LBL_QUEUE'				=> 'E-Mail-Konto-Warteschlange',
	'LBL_REPLY_NAME_ADDR'	=> 'Antwort-Name/E-Mail',
	'LBL_REPLY_TO_NAME'		=> 'Antwort-an-Name',
	'LBL_REPLY_TO_ADDR'		=> 'Antwort-an-Adresse',
	'LBL_SAME_AS_ABOVE'		=> 'Bestehende Name/E-Mail verwenden',
	'LBL_SAVE_RAW'			=> 'Quellcode speichern',
	'LBL_SAVE_RAW_DESC_1'	=> 'Wählen Sie "Ja", wenn Sie den Quellcode für importierte E-Mails behalten möchten.',
	'LBL_SAVE_RAW_DESC_2'	=> 'Große Anhänge können bei konservativ oder nicht korrekt konfigurierten Datenbanken zu Fehlern führen.',
	'LBL_SERVER_OPTIONS'	=> 'Erweiterte Einstellungen',
	'LBL_SERVER_TYPE'		=> 'Mailserver-Protokoll',
	'LBL_SERVER_URL'		=> 'Mailserver-Adresse',
	'LBL_SSL_DESC'			=> 'Falls Ihr Mailserver SSL-Verbindungen unterstützt, werden beim Importieren der E-Mails SSL-Verbindungen erzwungen.',
	'LBL_ASSIGN_TO_TEAM_DESC' => 'Das ausgewählte Team hat Zugang zu dem E-Mail-Konto.',
	'LBL_SSL'				=> 'SSL verwenden',
	'LBL_STATUS'			=> 'Status',
	'LBL_SYSTEM_DEFAULT'	=> 'Systemstandard',
	'LBL_TEST_BUTTON_KEY'	=> 't',
	'LBL_TEST_BUTTON_TITLE'	=> 'Testliste',
	'LBL_TEST_SETTINGS'		=> 'Einstellungen testen',
	'LBL_TEST_SUCCESSFUL'	=> 'Verbindung erfolgreich hergestellt.',
	'LBL_TEST_WAIT_MESSAGE'	=> 'Einen Moment bitte...',
	'LBL_TLS_DESC'			=> 'TLS beim Verbinden zum Mailserver verwenden - Wählen Sie diese Option nur dann, wenn Ihr Mailserver dieses Protokoll unterstützt.',
	'LBL_TLS'				=> 'TLS verwenden',
	'LBL_WARN_IMAP_TITLE'	=> 'Eingehende E-Mails deaktiviert',
	'LBL_WARN_IMAP'			=> 'Warnungen:',
	'LBL_WARN_NO_IMAP'		=> 'Eingehende E-Mails <b>können nicht</b> funktionieren, ohne dass die IMAP C-Client-Bibliotheken im PHP-Modul integriert/aktiviert wurden. Bitte kontaktieren Sie den Administrator zur Lösung dieses Problems.',

	'LNK_CREATE_GROUP'		=> 'Neue Gruppe',
	'LNK_LIST_CREATE_NEW_GROUP'	 => 'Neues E-Mail-Konto für Gruppe',
	'LNK_LIST_CREATE_NEW_BOUNCE' => 'Neues Bounce-Konto',
	'LNK_LIST_MAILBOXES'	=> 'Alle E-Mail-Konten',
	'LNK_LIST_QUEUES'		=> 'Alle Warteschlangen',
	'LNK_LIST_SCHEDULER'	=> 'Zeitplaner',
	'LNK_LIST_TEST_IMPORT'	=> 'E-Mail-Import testen',
	'LNK_NEW_QUEUES'		=> 'Neue Warteschlange',
	'LNK_SEED_QUEUES'		=> 'Seed-Warteschlangen der Teams',
	'LBL_GROUPFOLDER_ID'	=> 'Gruppenordner-ID',
	'LBL_ASSIGN_TO_GROUP_FOLDER' => 'An Gruppenordner zuweisen',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Erlaubt es den Benutzern, E-Mails mit dem "von"-Name und der "von"-Adresse als Antwort-an-Adresse zu senden',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Durch diese Option werden der "von"-Name und die "von"-Adresse, die mit diesem Gruppen-E-Mail-Konto verknüpft sind, als Option für das "von"-Feld angezeigt, wenn E-Mails für Benutzer verfasst werden, die Zugriff auf das Gruppen-E-Mail-Konto haben.',
    'LBL_STATUS_ACTIVE'     => 'Aktiv',
    'LBL_STATUS_INACTIVE'   => 'Inaktiv',
    'LBL_IS_PERSONAL' => 'persönlich',
    'LBL_IS_GROUP' => 'Gruppe',
    'LBL_ENABLE_AUTO_IMPORT' => 'E-Mails automatisch importieren',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Warnung: Sie modifizieren ihre automatische Import-Einstellung, was zu Datenverlust führen kann.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Warnung: Auto-Import muss aktiviert sein, wenn Tickets automatisch erstellt werden sollen.',
	'LBL_EDIT_LAYOUT' => 'Layout bearbeiten' /*for 508 compliance fix*/,
);
?>
