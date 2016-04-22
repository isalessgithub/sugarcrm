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
  'LBL_ERROR_SYNC_USERS' => 'Ungültiger Wert beim Synchronisation nach Outlook',
  'LBL_MODULE_NAME' => 'Import',
  'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
  'LBL_ACT' => 'Act!',
  'LBL_SALESFORCE' => 'Salesforce.com',
  'LBL_NUM_1' => '1.',
  'LBL_NUM_2' => '2.',
  'LBL_NUM_3' => '3.',
  'LBL_NUM_4' => '4.',
  'LBL_NUM_5' => '5.',
  'LBL_NUM_6' => '6.',
  'LBL_NUM_7' => '7.',
  'LBL_NUM_8' => '8.',
  'LBL_NUM_9' => '9.',
  'LBL_NUM_10' => '10.',
  'LBL_NUM_11' => '11.',
  'LBL_NUM_12' => '12.',
  'LBL_' => '',
  'LBL_OK' => 'OK',
  'LBL_GOOD_FILE' => 'Importdatei erfolgreich gelesen',
  'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Datensätze wegen Fehlern ausgelassen',
  'LBL_UPDATE_SUCCESSFULLY' => 'Datensätze erstellt oder erfolgreich aktualisiert',
  'LBL_SUCCESSFULLY_IMPORTED' => 'Datensätze erfolgreich erstellt',
  'LBL_STEP_4_TITLE' => 'Schritt 4: Datei importieren',
  'LBL_STEP_5_TITLE' => 'Schritt 5: Ergebnis ansehen',
  'LBL_CUSTOM_ENCLOSURE' => 'Felder qualifiziert durch:',
  'LBL_ERROR_UNABLE_TO_PUBLISH' => 'Kann nicht publiziert werden: Es gibt eine andere Import Zuordnung mit dem selben Namen.',
  'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'Eine Zuordnung eines anderen Benutzers kann nicht aufgehoben werden. Sie haben eine Zuordnung mit dem selben Namen.',
  'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'Für diesen Modultyp sind keine Importe angelegt',
  'LBL_IMPORT_TYPE' => 'Import Aktion',
  'LBL_IMPORT_BUTTON' => 'Erstelle Datensätze',
  'LBL_UPDATE_BUTTON' => 'Erstelle und aktualisiere Datensätze',
  'LBL_CREATE_BUTTON_HELP' => 'Diese Option verwenden, um neue Datensätze anzulegen. Hinweis: Zeilen die einen bestehenden Satz-ID enthalten werden nicht importiert.',
  'LBL_UPDATE_BUTTON_HELP' => 'Diese Option verwenden, um bestehende Datensätze zu aktualisieren. Hinweis: Nur Zeilen die einen bestehenden Satz-ID enthalten werden aktualisiert.',
  'LBL_ERROR_INVALID_BOOL' => 'Ungültiger Wert (muss 1 oder 0 sein)',
  'LBL_NO_ID' => 'ID benötigt',
  'LBL_PRE_CHECK_SKIPPED' => 'Pre-Check übersprungen',
  'LBL_IMPORT_ERROR' => 'Es gibt Importfehler',
  'LBL_ERROR' => 'Fehler:',
  'LBL_NOLOCALE_NEEDED' => 'Keine Konvertierung der Ländereinstellungen notwendig',
  'LBL_FIELD_NAME' => 'Feldname',
  'LBL_VALUE' => 'Wert',
  'LBL_ROW_NUMBER' => 'Zeilennummer',
  'LBL_NONE' => 'Kein(e)',
  'LBL_REQUIRED_VALUE' => 'Benötigter Wert fehlt',
  'LBL_ID_EXISTS_ALREADY' => 'Diese ID existiert bereits in der Tabelle',
  'LBL_ASSIGNED_USER' => 'Wenn der Benutzer nicht existiert, verwenden Sie den derzeitigen Benutzer',
  'LBL_SHOW_HIDDEN' => 'Zeige Felder die normalerweise nicht importierbar sind',
  'LBL_UPDATE_RECORDS' => 'Aktualisieren von Datensätzen anstelle sie zu importieren (kann nicht rückgängig gemacht werden)',
  'LBL_TEST' => 'Testimport (Daten werden nicht gespeichert oder geändert)',
  'LBL_TRUNCATE_TABLE' => 'Tabelle vor Datenimport ausleeren (alle Datensätze löschen)',
  'LBL_RELATED_ACCOUNTS' => 'Keine verknüpften Firmen erstellen',
  'LBL_NO_DATECHECK' => 'Datumsüberprüfung überspringen (schneller, aber scheitert bei einem falschen Datum)',
  'LBL_NO_WORKFLOW' => 'Während des Imports keinen Workflow laufen lassen',
  'LBL_NO_EMAILS' => 'Während des Imports keine E-Mail Benachrichtigungen aussenden',
  'LBL_NO_PRECHECK' => 'Nativer Formatmodus',
  'LBL_STRICT_CHECKS' => 'Striktes Regelwerk verwenden (überprüfe auch E-Mail Adressen und Telefonnummern)',
  'LBL_ERROR_SELECTING_RECORD' => 'Fehler – selektieren Datensatz:',
  'LBL_ERROR_DELETING_RECORD' => 'Fehler – löschen Datensatz:',
  'LBL_NOT_SET_UP' => 'Für diesen Modultyp sind keine Importe angelegt',
  'LBL_ARE_YOU_SURE' => 'Sind Sie sicher? Das löscht alle Daten in diesem Modul.',
  'LBL_NO_RECORD' => 'Kein Datensatz mit dieser ID zum Aktualisieren',
  'LBL_NOT_SET_UP_FOR_IMPORTS' => 'Für diesen Modultyp sind keine Importe angelegt',
  'LBL_DEBUG_MODE' => 'Debug Modus einschalten',
  'LBL_ERROR_INVALID_ID' => 'Zeichenkette für dieses Feld zu lang (Maximallänge 36 Zeichen)',
  'LBL_ERROR_INVALID_PHONE' => 'Ungültige Telefonnummer',
  'LBL_ERROR_INVALID_NAME' => 'Zeichenkette für dieses Feld zu lang',
  'LBL_ERROR_INVALID_VARCHAR' => 'Zeichenkette für dieses Feld zu lang',
  'LBL_ERROR_INVALID_DATE' => 'Ungültiges Datum',
  'LBL_ERROR_INVALID_DATETIME' => 'Ungültiges Datum/Zeit',
  'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Ungültiges Datum/Zeit',
  'LBL_ERROR_INVALID_TIME' => 'Ungültige Zeit',
  'LBL_ERROR_INVALID_INT' => 'Ungültiger Integer Wert',
  'LBL_ERROR_INVALID_NUM' => 'Ungültiger numerischer Wert',
  'LBL_ERROR_INVALID_EMAIL' => 'Ungültige E-Mail Adresse',
  'LBL_ERROR_INVALID_USER' => 'Ungültiger Benutzername oder ID',
  'LBL_ERROR_INVALID_TEAM' => 'Ungültiger Team Name oder ID',
  'LBL_ERROR_INVALID_ACCOUNT' => 'Ungültiger Firmenname oder ID',
  'LBL_ERROR_INVALID_RELATE' => 'Ungültiges verknüpftes Feld',
  'LBL_ERROR_INVALID_CURRENCY' => 'Ungültiger Währungswert',
  'LBL_ERROR_INVALID_FLOAT' => 'Ungültige Kommazahl',
  'LBL_ERROR_NOT_IN_ENUM' => 'Wert nicht in Auswahlliste. Erlaubte Werte sind:',
  'LBL_NOT_MULTIENUM' => 'Kein MultiEnum',
  'LBL_IMPORT_MODULE_NO_TYPE' => 'Für diesen Modultyp sind keine Importe angelegt',
  'LBL_IMPORT_MODULE_NO_USERS' => 'ACHTUNG: Sie haben noch keine Benutzer definiert. Wenn Sie einen Import durchführen ohne vorher Benutzer definiert zu haben, werden alle Daten dem Administrator zugeordnet.',
  'LBL_IMPORT_MODULE_MAP_ERROR' => 'Kann nicht publiziert werden: Es gibt eine andere Import Zuordnung mit dem selben Namen.',
  'LBL_IMPORT_MODULE_MAP_ERROR2' => 'Eine Zuordnung eines anderen Benutzers kann nicht aufgehoben werden. Sie haben eine Zuordnung mit dem selben Namen.',
  'LBL_IMPORT_MODULE_NO_DIRECTORY' => 'Das Verzeichnis',
  'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => 'existiert nicht, oder ist nicht beschreibbar',
  'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'Das Hochladen der Datei war nicht erfolgreich. Möglicherweise ist der Parameter &#39;upload_max_filesize&#39; in Ihrer php.ini Datei zu niedrig gesetzt',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => 'Datei ist zu groß. Max:',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => 'Ändern Sie $sugar_config[&#39;upload_maxsize&#39;] in Ihrer config.php',
  'LBL_TRY_AGAIN' => 'Wiederholen',
  'LBL_START_OVER' => 'Neu starten',
  'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => 'Die Import Datei enthält {0} Zeilen. Die optimale Zeilanzahl ist {1}. Zu viele Datensätze können den Importvorgang verlangsamen. Bitte OK wählen, um weiter zu importieren. Abbrechen wählen, um die Daten in der Importdatei zu überprüfen.',
  'ERR_IMPORT_SYSTEM_ADMININSTRATOR' => 'Ein Administrator darf nicht importiert werden',
  'ERR_MULTIPLE' => 'Es wurden mehrere Spalten mit dem gleichen Feldnamen definiert.',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Erforderliche Felder fehlen:',
  'ERR_MISSING_MAP_NAME' => 'Fehlender Name für individuelle Zuordnung',
  'ERR_SELECT_FULL_NAME' => 'Wenn Vorname und Nachname ausgewählt sind, kann &#39;Ganzer Name&#39; nicht selektiert werden.',
  'ERR_SELECT_FILE' => 'Datei zum Hochladen auswählen.',
  'LBL_SELECT_FILE' => 'Datei auswählen:',
  'LBL_CUSTOM' => 'Benutzerdefiniert',
  'LBL_CUSTOM_CSV' => 'Benutzerdefinierte Komma-getrennte Datei',
  'LBL_CSV' => 'Komma-getrennte Datei',
  'LBL_EXTERNAL_SOURCE' => 'eine externe Applikation oder externer Dienst',
  'LBL_TAB' => 'Tab-getrennte Datei',
  'LBL_CUSTOM_DELIMITED' => 'Benutzerdefinierte Getrennte Datei',
  'LBL_CUSTOM_DELIMITER' => 'Felder begrenzt durch:',
  'LBL_FILE_OPTIONS' => 'Datei Optionen',
  'LBL_CUSTOM_TAB' => 'Benutzerdefinierte Tab-getrennte Datei',
  'LBL_DONT_MAP' => '-- Dieses Feld nicht zuweisen --',
  'LBL_STEP_MODULE' => 'Nach welchem Modul soll importiert werden?',
  'LBL_STEP_1_TITLE' => 'Schritt 1: Quelle und Importaktion auswählen',
  'LBL_CONFIRM_TITLE' => 'Schritt {0}: Import Dateieeigenschaften bestätigen',
  'LBL_CONFIRM_EXT_TITLE' => 'Schritt {0}: Externe Quelleneigenschaften bestätigen',
  'LBL_WHAT_IS' => 'Was ist die Datenquelle?',
  'LBL_MICROSOFT_OUTLOOK_HELP' => 'Die Zuweisungen für Microsoft Outlook setzen komma-getrennte (CSV) Dateien voraus. Wenn die Datei Tab getrennt ist, werden die Importergebnisse nicht wie erwartet.',
  'LBL_MY_SAVED' => 'Meine gespeicherten Zuordnungen:',
  'LBL_PUBLISH' => 'Publizieren',
  'LBL_DELETE' => 'Löschen',
  'LBL_PUBLISHED_SOURCES' => 'Publizierte Quellen:',
  'LBL_UNPUBLISH' => 'Publikation aufheben',
  'LBL_NEXT' => 'Weiter >',
  'LBL_BACK' => '< Zurück',
  'LBL_STEP_2_TITLE' => 'Schritt 2: Import Datei hochladen',
  'LBL_HAS_HEADER' => 'Hat Überschrift:',
  'LBL_NOTES' => 'Notizen:',
  'LBL_NOW_CHOOSE' => 'Wählen Sie jetzt die Datei für den Import:',
  'LBL_IMPORT_OUTLOOK_TITLE' => 'Microsoft Outlook 98 und 2000 können Daten im <b>Komma-getrennte Werte</b> Format ausgeben. Dieses kann verwendet werden, um Daten in das System zu importieren. Um Ihre Daten aus Outlook zu exportieren folgen Sie bitte den unten aufgeführten Schritten:',
  'LBL_OUTLOOK_NUM_1' => '<b>Outlook</b> starten',
  'LBL_OUTLOOK_NUM_2' => 'Das <b>Datei</b> Manü wählen und dann die <b>Importieren/Exportieren ...</b> Menüoption',
  'LBL_OUTLOOK_NUM_3' => '<b>Exportieren in eine Datei</b> auswählen und Weiter klicken',
  'LBL_OUTLOOK_NUM_4' => '<b>Komma-getrennte Werte (Windows)</b> auswählen und <b>Weiter</b> klicken.<br> Anmerkung: Möglicherweise werden Sie zum Installieren der Exportkomponente aufgefordert',
  'LBL_OUTLOOK_NUM_5' => 'Wählen Sie den <b>Kontakte</b> Ordner und klicken Sie <b>Weiter</b>.Sie können verschiedene Kontakte-Ordner wählen, wenn Ihre Kontakte in mehreren Ordnern gespeichert sind.',
  'LBL_OUTLOOK_NUM_6' => 'Wählen Sie einen Dateinamen und klicken Sie <b>Weiter</b>',
  'LBL_OUTLOOK_NUM_7' => 'Klicken Sie auf <b>Fertigstellen</b>',
  'LBL_IMPORT_SF_TITLE' => 'Salesforce.com kann Daten im <b>Komma-getrennte Werte</b> Format ausgeben. Dieses kann verwendet werden, um Daten in das System zu importieren. Um Ihre Daten aus Salesforce.com zu exportieren folgen Sie bitte den unten aufgeführten Schritten:',
  'LBL_SF_NUM_1' => 'Öffnen Sie Ihren Browser, gehen Sie auf http://www.salesforce.com, und melden Sie sich mit Ihrer E-Mail Adresse und Passwort an',
  'LBL_SF_NUM_2' => 'Klicken Sie auf den <b>Berichte</b> Reiter im Hauptmenü',
  'LBL_SF_NUM_3' => '<b>Zum Exportieren von Firmen:</b> Klicken Sie auf <b>Aktive Firmen</b> <br><b>Zum Exportieren von Kontakten:</b> Klicken Sie auf <b>Mailing List</b>',
  'LBL_SF_NUM_4' => 'Bei <b>Step 1: Wählen Sie den Berichtstyp</b>, wählen Sie <b>Reiter Berichte</b> und klicken Sie auf <b>Weiter</b>',
  'LBL_SF_NUM_5' => 'Bei <b>Step 2: Wählen Sie die Bericht Spalten</b>, wählen Sie die Spalten, die Sie exportieren wollen und klicken Sie auf <b>Weiter</b>',
  'LBL_SF_NUM_6' => 'Bei <b>Step 3: Select the information to summarize</b>, klicken Sie <b>Weiter</b>',
  'LBL_SF_NUM_7' => 'Bei <b>Schritt 4: Spalten sortieren</b>, klicken Sie einfach auf <b>Weiter</b>',
  'LBL_SF_NUM_8' => 'Bei <b>Step 5: Wählen Sie die Kriterien</b>, unter <b>Start Datum</b>, wählen Sie ein Datum weit genug in der Vergangenheit, so dass alle Ihre Firmen mit eingeschlossen sind. Sie können auch eine Untermenge an Firmen exportieren indem Sie erweiterte Kriterien benutzen. Wenn Sie fertig sind, klicken Sie auf <b>Bericht erstellen</b>',
  'LBL_SF_NUM_9' => 'Ein Bericht wird erstellt und es sollte angezeigt werden <b>Report Generation Status: Complete.</b> Jetzt klicken Sie auf <b>Exportieren nach Excel</b>',
  'LBL_SF_NUM_10' => 'Bei <b>Export Bericht:</b>, für <b>Export Datenformat:</b>, wählen Sie <b>Komma-getrennte .csv</b>.Klicken SIe auf <b>Export</b>.',
  'LBL_SF_NUM_11' => 'Ein Dialog erscheint, mit dem Sie die Export-Datei auf Ihrem Computer speichern können.',
  'LBL_IMPORT_ACT_TITLE' => 'Act! kann Daten im <b>Komma getrennte Werte</b> Format ausgeben. Dieses kann verwendet werden, um Daten in das System zu importieren. Um Ihre Daten aus Act! zu exportieren folgen Sie bitte den unten aufgeführten Schritten:',
  'LBL_ACT_NUM_1' => 'Rufen Sie <b>ACT!</b> auf.',
  'LBL_ACT_NUM_2' => 'Wählen Sie das <b>Datei</b> Menü, die <b>Datenaustausch</b> Menü Option, dann die <b>Export...</b> Menü Option',
  'LBL_ACT_NUM_3' => 'Wählen Sie den Dateityp <b>Text-Delimited</b>',
  'LBL_ACT_NUM_4' => 'Wählen Sie einen Dateinamen und einen Speicherort für die exportierten Daten und drücken auf <b>Weiter</b>',
  'LBL_ACT_NUM_5' => 'Wählen Sie <b>Nur Kontakte</b>',
  'LBL_ACT_NUM_6' => 'Klicken Sie auf die <b>Optionen...</b> Schaltfläche',
  'LBL_ACT_NUM_7' => 'Wählen Sie <b>Komma</b> als das Feldtrennungszeichen',
  'LBL_ACT_NUM_8' => 'Kreuzen Sie <b>Ja, Feldnamen exportieren</b> Checkbox und klicken Sie auf <b>OK</b>',
  'LBL_ACT_NUM_9' => 'Klicken Sie auf die <b>Weiter</b>',
  'LBL_ACT_NUM_10' => 'Wählen Sie <b>Alle Datensätze</b> und dann auf <b>Beenden</b>',
  'LBL_IMPORT_CUSTOM_TITLE' => 'Viele Anwendungen erlauben den Datenexport in eine <b>Komma-getrennte Textdatei (.csv)</b> indem man diesen allgemeinen Anweisungen folgt:',
  'LBL_CUSTOM_NUM_1' => 'Starten Sie das Programm und öffnen Sie die Daten-Datei',
  'LBL_CUSTOM_NUM_2' => 'Wählen Sie <b>Speichern unter...</b> oder <b>Exportieren...</b> im Menü',
  'LBL_CUSTOM_NUM_3' => 'Speichern Sie die Datei im <b>CSV</b> oder <b>Komma-getrennte Werte</b> Format',
  'LBL_IMPORT_TAB_TITLE' => 'Viele Anwendungen erlauben den Datenexport in eine <b>Tab-getrennte Textdatei (.tsv or .tab)</b> indem man diesen allgemeinen Anweisungen folgt:',
  'LBL_TAB_NUM_1' => 'Starten Sie das Programm und öffnen Sie die Daten-Datei',
  'LBL_TAB_NUM_2' => 'Wählen Sie <b>Speichern unter...</b> oder <b>Exportieren...</b> im Menü',
  'LBL_TAB_NUM_3' => 'Speichern Sie die Datei im <b>TSV</b> oder <b>Tab-getrennte Werte</b> Format',
  'LBL_STEP_3_TITLE' => 'Schritt 3: Bestätigen Sie Felder und Import',
  'LBL_STEP_DUP_TITLE' => 'Schritt {0}: Mögliche Dulpikate überprüfen',
  'LBL_SELECT_FIELDS_TO_MAP' => 'In der nachstehenden Liste wählen Sie die Felder Ihrer Importdatei, die in die einzelnen Felder im System importiert werden sollen. Wenn Sie fertig sind, klicken Sie auf <b>Jetzt importieren</b>:',
  'LBL_DATABASE_FIELD' => 'Datenbank Feld',
  'LBL_HEADER_ROW' => 'Titelzeile',
  'LBL_HEADER_ROW_OPTION_HELP' => 'Bitte auswählen, wenn die erste Zeile Spaltenname enthält',
  'LBL_ROW' => 'Zeile',
  'LBL_SAVE_AS_CUSTOM' => 'Als benutzerspezifische Zuordnung speichern:',
  'LBL_SAVE_AS_CUSTOM_NAME' => 'Benutzerspezifischer Zuordnungsname:',
  'LBL_CONTACTS_NOTE_1' => 'Entweder Nachname oder Ganzer Name müssen zugeordnet werden.',
  'LBL_CONTACTS_NOTE_2' => 'Wenn der &#39;Ganze Name&#39; zugeordnet ist, dann werden Vorname und Nachname ignoriert.',
  'LBL_CONTACTS_NOTE_3' => 'Wenn der &#39;Ganze Name&#39; zugeordnet ist, werden die Daten beim Einstellen in die Datenbank in Vorname und Nachname aufgeteilt.',
  'LBL_CONTACTS_NOTE_4' => 'Felder, die auf Adresse 2 und Adresse 3 enden, werden beim Einstellen in die Datenbank an das Haupt-Adresse Feld angehängt.',
  'LBL_ACCOUNTS_NOTE_1' => 'Felder, die auf Adresse 2 und Adresse 3 enden, werden beim Einstellen in die Datenbank an das Haupt-Adresse Feld angehängt.',
  'LBL_REQUIRED_NOTE' => 'Benötigtes Feld(er):',
  'LBL_IMPORT_NOW' => 'Jetzt importieren',
  'LBL_CANNOT_OPEN' => 'Kann die Importdatei nicht zum Lesen öffnen',
  'LBL_NOT_SAME_NUMBER' => 'Die Anzahl Felder pro Zeile in Ihrer Datei stimmt nicht überein',
  'LBL_NO_LINES' => 'Ihre Importdatei enthält keine Datensätze',
  'LBL_FILE_ALREADY_BEEN_OR' => 'Die Importdatei wurde schon verarbeitet oder existiert nicht',
  'LBL_SUCCESS' => 'Erfolg:',
  'LBL_FAILURE' => 'Import fehlgeschlagen',
  'LBL_SUCCESSFULLY' => 'Erfolgreich importiert',
  'LBL_LAST_IMPORT_UNDONE' => 'Ihr letzter Import wurde rückgängig gemacht',
  'LBL_NO_IMPORT_TO_UNDO' => 'Import rückgängig machen nicht möglich',
  'LBL_FAIL' => 'Fehler:',
  'LBL_RECORDS_SKIPPED' => 'Datensätze wurden ignoriert, weil ein oder mehrere Pflichtfelder fehlten',
  'LBL_IDS_EXISTED_OR_LONGER' => 'Datensätze wurden ignoriert, weil die IDs schon vorhanden waren oder weil sie länger waren als 36 Zeichen',
  'LBL_RESULTS' => 'Resultat',
  'LBL_CREATED_TAB' => 'Datensätze erstellt',
  'LBL_DUPLICATE_TAB' => 'Duplikate',
  'LBL_ERROR_TAB' => 'Fehler',
  'LBL_IMPORT_MORE' => 'Weitere importieren',
  'LBL_FINISHED' => 'Zurückkehren zu',
  'LBL_UNDO_LAST_IMPORT' => 'Letzten Import rückgängig machen',
  'LBL_LAST_IMPORTED' => 'Zuletzt importiert',
  'ERR_MULTIPLE_PARENTS' => 'Sie können nur eine Eltern-ID definieren',
  'LBL_DUPLICATES' => 'Dubletten gefunden',
  'LNK_DUPLICATE_LIST' => 'Liste der Dubletten herunterladen',
  'LNK_ERROR_LIST' => 'Fehlerliste herunterladen',
  'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Datensätze herunterzuladen, die nicht importiert werden konnten.',
  'LBL_UNIQUE_INDEX' => 'Index für Dublettenvergleich wählen',
  'LBL_VERIFY_DUPS' => 'Doppelte Einträge nach gewählten Indexes überprüfen',
  'LBL_INDEX_USED' => 'Verwendete Indizes',
  'LBL_INDEX_NOT_USED' => 'Nicht verwendete Indizes',
  'LBL_IMPORT_MODULE_ERROR_NO_MOVE' => 'Die Datei wurde nicht erfolgreich hochgeladen. Überprüfen Sie die Datei Berechtigungen im Cache Verzeichnis Ihrer Sugar Installation.',
  'LBL_IMPORT_FIELDDEF_ID' => 'Eindeutige ID Nummer',
  'LBL_IMPORT_FIELDDEF_RELATE' => 'Name oder ID',
  'LBL_IMPORT_FIELDDEF_PHONE' => 'Telefonnummer',
  'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'Teamname oder ID',
  'LBL_IMPORT_FIELDDEF_NAME' => 'Irgendein Text',
  'LBL_IMPORT_FIELDDEF_VARCHAR' => 'Irgendein Text',
  'LBL_IMPORT_FIELDDEF_TEXT' => 'Irgendein Text',
  'LBL_IMPORT_FIELDDEF_TIME' => 'Zeit',
  'LBL_IMPORT_FIELDDEF_DATE' => 'Datum',
  'LBL_IMPORT_FIELDDEF_DATETIME' => 'Datum/Zeit',
  'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'Benutzername oder ID',
  'LBL_IMPORT_FIELDDEF_BOOL' => '&#39;0&#39; oder &#39;1&#39;',
  'LBL_IMPORT_FIELDDEF_ENUM' => 'Liste',
  'LBL_IMPORT_FIELDDEF_EMAIL' => 'E-Mail Adresse',
  'LBL_IMPORT_FIELDDEF_INT' => 'Numerisch (keine Dezimalstellen)',
  'LBL_IMPORT_FIELDDEF_DOUBLE' => 'Numerisch (keine Dezimalstellen)',
  'LBL_IMPORT_FIELDDEF_NUM' => 'Numerisch (keine Dezimalstellen)',
  'LBL_IMPORT_FIELDDEF_CURRENCY' => 'Numerisch (Dezimalstellen erlaubt)',
  'LBL_IMPORT_FIELDDEF_FLOAT' => 'Numerisch (Dezimalstellen erlaubt)',
  'LBL_DATE_FORMAT' => 'Datumsformat:',
  'LBL_TIME_FORMAT' => 'Zeitformat:',
  'LBL_TIMEZONE' => 'Zeitzone:',
  'LBL_ADD_ROW' => 'Feld hinzufügen',
  'LBL_REMOVE_ROW' => 'Feld entfernen',
  'LBL_DEFAULT_VALUE' => 'Standardwert',
  'LBL_SHOW_ADVANCED_OPTIONS' => 'Zeige erweiterte Optionen',
  'LBL_HIDE_ADVANCED_OPTIONS' => 'Erweiterte Optionen verbergen',
  'LBL_SHOW_NOTES' => 'Notizen anzeigen',
  'LBL_HIDE_NOTES' => 'Notizen verstecken',
  'LBL_SHOW_PREVIEW_COLUMNS' => 'Zeige Vorschau Spalten',
  'LBL_HIDE_PREVIEW_COLUMNS' => 'Vorschau Spalten verbergen',
  'LBL_SAVE_MAPPING_AS' => 'Zuordnung speichern unter',
  'LBL_OPTION_ENCLOSURE_QUOTE' => 'Hochkomma (&#39;)',
  'LBL_OPTION_ENCLOSURE_DOUBLEQUOTE' => 'Doppeltes Hochkomma (\\“)',
  'LBL_OPTION_ENCLOSURE_NONE' => 'Kein(e)',
  'LBL_OPTION_ENCLOSURE_OTHER' => 'Andere:',
  'LBL_IMPORT_COMPLETE' => 'Import fertig',
  'LBL_IMPORT_COMPLETED' => 'Import fertiggestellt.',
  'LBL_IMPORT_RECORDS' => 'Importiere Datensätze',
  'LBL_IMPORT_RECORDS_OF' => 'von',
  'LBL_IMPORT_RECORDS_TO' => 'an',
  'LBL_CURRENCY' => 'Währung',
  'LBL_CURRENCY_SIG_DIGITS' => 'Währung Dezimalstellen',
  'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Beispiel',
  'LBL_NUMBER_GROUPING_SEP' => '1000er Trennzeichen',
  'LBL_DECIMAL_SEP' => 'Dezimalzeichen',
  'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Anzeigeformat Name',
  'LBL_LOCALE_NAME_FORMAT_DESC' => '<i>"s" Anrede, "f" Vorname, "l" Nachname</i>',
  'LBL_CHARSET' => 'Dateikodierung',
  'LBL_MY_SAVED_HELP' => 'Eine gespeicherte Zuordnung spezifiziert eine zuvor verwendete Kombination einer Datenquelle und einer Reihe von Datenbankfeldern die der Importdatei zugeordnet wurden. <br>Klicken Sie auf  <b>Publizieren</b> um die Zuordnung für andere Benutzer zugänglich zu machen.<br>Klicken Sie <b>Nicht publizieren</b> um andere Benutzer von der Zuordnung auszuschließen..',
  'LBL_MY_SAVED_ADMIN_HELP' => 'Diese Option verwenden, um die voreingestellte Einstellungen zu verwenden, darunter Import Eigenschaften, Zuordnungen, und Duplikatprüfwerte.<br><br><b>Veröffentlichen</b> wählen um die Zuweisungen für anderen Benutzer sichtbar zu machen.<br> <b>Nicht veröffentlichen</b> wählen um die Zuweisungen privat zu halten.<br><b>Löschen</b> wählen um die Zuweisungen für alle Benutzer zu löschen.',
  'LBL_MY_PUBLISHED_HELP' => 'Eine publizierte Zuordnung spezifiziert eine zuvor verwendete Kombination einer Datenquelle und einer Reihe von Datenbankfeldern die der Importdatei zugeordnet wurden.',
  'LBL_ENCLOSURE_HELP' => '<p>Das <b>Qualifikationszeichen</b> wird verwendet, um den Feldinhalt abzugrenzen, inklusive aller Zeichen die möglicherweise auch als Feldbegrenzer verwendet werden <br><br>Wenn der Feldbegrenzer ein Komma ist (,) und das Qualifikationszeichen ist ein doppeltes Hochkomma ("), dann wird<br><b>"Cupertino, California"</b> als ein Feld importiert und erscheint als <b>Cupertino, California</b> in der Datenbank.<br>Wenn es keine Qualifikationszeichen gibt, dann wird<br><b>"Cupertino, California"</b> als zwei Felder importiert <b>"Cupertino</b> und <b>California"</b>.<br><br>Bemerkung: Die Importdatei muss keine Qualifikationszeichen enthalten.<br>Das Standard Qualifikationszeichen für Komma- und Tab-getrennte Dateien in Excel ist ein doppeltes Hochkomma (“).</p>"),<br><b>"Cupertino, California"</b> is imported into one field in the application and appears as <b>Cupertino, California</b>.<br>If there are no qualifier characters, or if a different character is the qualifier,<br><b>"Cupertino, California"</b> is imported into two adjacent fields as <b>"Cupertino</b> and <b>Texas"</b>.<br><br>Note: The import file might not contain any qualifier characters.<br>The default qualifier character for comma- and tab- delimited files created in Excel is a quotation mark.</p>',
  'LBL_DELIMITER_COMMA_HELP' => 'Wählen Sie diese Option, wenn der Feldbegrenzer in der Importdatei ein <b>Komma</b> ist oder wenn die Dateiendung .csv lautet.',
  'LBL_DELIMITER_TAB_HELP' => 'Wählen Sie diese Option, wenn der Feldbegrenzer in der Importdatei ein <b>TAB</b> ist oder wenn die Dateiendung .txt lautet.',
  'LBL_DELIMITER_CUSTOM_HELP' => 'Wählen Sie diese Option, wenn der Feldbegrenzer in der Importdatei weder ein Tab noch ein Komma ist, und geben Sie das Zeichen in das nebenstehende Feld ein.',
  'LBL_DATABASE_FIELD_HELP' => 'Wählen Sie ein Feld aus allen für dieses Modul existierenden Felder aus.',
  'LBL_HEADER_ROW_HELP' => 'Das sind die Feldnamen in der Kopfzeile der Importdatei.',
  'LBL_DEFAULT_VALUE_HELP' => 'Geben Sie einen Wert an der für dieses Feld eingefügt werden soll, wenn die Importdatei keine Werte für dieses Feld enthält.',
  'LBL_ROW_HELP' => 'Das sind die Daten aus der ersten Zeile nach der Kopfzeile in der Importdatei.',
  'LBL_SAVE_MAPPING_HELP' => 'Geben Sie eine Namen für die oben getroffenen Zuordnungen an.<br>Die gewählten Felder, deren Reihenfolge und die ausgewählte Datenquelle im Schritt 1 werden während des Importversuchs gespeichert.<br>Die gespeicherte Zuordnung kann dann im Schritt 1 für einen anderen Import wieder selektiert werden.',
  'LBL_IMPORT_FILE_SETTINGS_HELP' => 'Spezifizieren Sie die Einstellungen in der Importdatei um sicher zu stellen, <br>dass die Daten korrekt importiert werden. Diese Einstellungen überschreiben Ihre Präferenzen nicht. <br>Die erstellten oder aktualisierten Datensätze enthalten die Einstellungen die unter “Mein Konto“ definiert wurden..',
  'LBL_IMPORT_FILE_SETTINGS' => 'Import Datei Einstellungen',
  'LBL_VERIFY_DUPLCATES_HELP' => 'Definieren Sie die Felder in der Importdatei, die für die Dublettenprüfung <br>verwendet werden sollen. Bei Übereinstimmungen werden keine Datensätze für jene Zeilen erzeugt, in denen die Übereinstimmung gefunden wurde. Die Zeilen <br>mit doppelten Feldern werden in den Importresultaten aufgeführt.',
  'LBL_IMPORT_STARTED' => 'Import gestartet:',
  'LBL_RECORD_CANNOT_BE_UPDATED' => 'Der Datensatz konnte wegen eines Berechtigungsfehlers nicht aktualisiert werden.',
  'LBL_DELETE_MAP_CONFIRMATION' => 'Wollen Sie wirklich diese Mapping löschen?',
  'LBL_THIRD_PARTY_CSV_SOURCES' => 'Wenn die Daten aus einer der folgenden Quellen exportiert waren, bitte die Anwendung auswählen',
  'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => 'Bitte das Quellsystem auswählen, um die automatische Zuweisungen zu vwenden, um den Importvorgang zu vereinfachen.',
  'LBL_EXTERNAL_SOURCE_HELP' => 'Diese Option verwenden, um Daten direkt aus eine externe Quelle zu importieren, z.B. Gmail',
  'LBL_EXAMPLE_FILE' => 'Import Dateivorlage herunterladen',
  'LBL_CONFIRM_IMPORT' => 'Die Update Option ist ausgewählt. Änderungen an Datensätze können mit dieser Option nicht rückgängig gemacht werden. Datensätze die erstellt worden sind können rückgängig gemacht werden.',
  'LBL_CONFIRM_MAP_OVERRIDE' => 'Hinweis: Sie haben bereits vordefinierte Zuweisungen ausgewählt, wollen Sie weitermachen?',
  'LBL_EXTERNAL_FIELD' => 'Externes Feld',
  'LBL_SAMPLE_URL_HELP' => 'Bitte eine Musterdatei mit Überschriften herunterladen. Diese Datei verwenden, um eine Importdateivorlage zu verwenden.',
  'LBL_AUTO_DETECT_ERROR' => 'Der Feldtrennzeichen könnte nicht identifiziert werden, Bitte die Einstellungen überprüfen.',
  'LBL_MIME_TYPE_ERROR_1' => 'Diese Datei hat anscheined keine',
  'LBL_MIME_TYPE_ERROR_2' => 'OK auswählen, um aus der ausgewählte Datei zu importieren. Um eine neue Datei zu importieren, bitte nochmals versuchen auswählen.',
  'LBL_FIELD_DELIMETED_HELP' => 'Das Feld-Trennzeichen',
  'LBL_FILE_UPLOAD_WIDGET_HELP' => 'Eine Datei mit Daten mit einem getrennten Zeichen auswählen, wie mit komma- tab oder seimkolon getrennt. Dateien mit der Endung .csv sind zu empfehlen.',
  'LBL_EXTERNAL_ERROR_NO_SOURCE' => 'Kein Zugriff auf die externe Datenquelle, bitte später erneut versuchen.',
  'LBL_EXTERNAL_ERROR_FEED_CORRUPTED' => 'Kein Zugriff auf die externe Datenquelle, bitte später erneut versuchen.',
  'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => 'Importverzeichnis kann nicht geschrieben werden',
  'LBL_ADD_FIELD_HELP' => 'Diese Option verwenden, wenn das Feld in alle Datensätze den gleichen Wert erhalten soll. Diese Fled auswählen und der Wert eintragen.',
  'LBL_MISSING_HEADER_ROW' => 'Keine Kopfzeile gefunden.',
  'LBL_CANCEL' => 'Abbrechen',
  'LBL_SELECT_DS_INSTRUCTION' => 'Bereit den Importvorgang zu starten? Wähle die Datenquelle aus, was importiert werden soll.',
  'LBL_SELECT_UPLOAD_INSTRUCTION' => 'Die Datei mit den Daten auswählen, was importiert werden soll oder eine Vorlage herunterladen um den Importvorgang zu vereinfachen.',
  'LBL_SELECT_PROPERTY_INSTRUCTION' => 'Hier werden die ersten paar zu importierenden Zeilen mit deren Eigenschaften angezeigt. Wenn eine Kopfzeile automatisch identifiziert würde, wird diese Zeile als erste Zeile angezeigt. Über die Eigenschaftenfunktoin können die ausgewählten Einstellungen angepasst werden, dann werden die Daten anders dargestellt.',
  'LBL_SELECT_MAPPING_INSTRUCTION' => 'Die Tabelle unten zeigt alle Felder in diesem Modul die mit den Feldern in der Importdatei zusammenpassen. Wenn diese Datei eine Kopfzeile hat, werden die Spalten mit den entsprechenden Feldern gekoppelt. Stelle sicher, dass diese Zuweisungen im Ordnung sind, gegebenfalls Änderungen wenn notwendig vornehmen. Zeile 1 der Daten in der Datei wird angezeigt, um die Zuordnung zu vereinfachen.',
  'LBL_SELECT_DUPLICATE_INSTRUCTION' => 'Um Duplikatsätze zu vermeiden, können Felder definiert werden, die auf Duplikatprüfung beim Import verwendet werden. Werte in existierenden Sätzen werden gegen die Datensätze in der Datei verglichen. Wenn passenden Datensätze gefunden sind, werden die Ergebnisse im Import-Ergebniss Fenster (nächste Seite) angezeigt. Die zu importierende Zeilen können ausgewählt werden.',
  'LBL_EXT_SOURCE_SIGN_IN' => 'Anmelden',
  'LBL_DUP_HELP' => 'Hier werden die Zeilen angezeigt, die nicht importiert werden können, da die Daten mögliche Duplikate enthalten. Um diese Datensätze neu zu importieren, lade die Datensätze herunter, mache die entsprechende Anpasssungen, dann ernuet importieren.',
  'LBL_DESELECT' => 'Abwählen',
  'LBL_SUMMARY' => 'Zusammenfassung',
  'LBL_ERROR_HELP' => 'Hier werden die Datensätze angezeigt, die durch Fehlzuständen nicht importiert werden können. Um diese Daten erneut zu importieren, lade die Daten herunter, passe die Daten an, und dann erneut den Importvorgang starten.',
  'LBL_EXTERNAL_MAP_HELP' => 'Die Tabelle unten zeigt alle Felder der externe Quelle und die dazu passende Sugar Felder an, die miteinander verknüpft sind. Die Verknüpfungen überprüfen und ggfs. Änderungen vornehmen. Alle Mussfelder müssen Verknüpfungen haben.',
  'LBL_EXTERNAL_MAP_NOTE' => 'Der Importvorgang versucht alls Google Kontaktgruppen zu importieren.',
  'LBL_EXTERNAL_MAP_NOTE_SUB' => 'Der Import-Benutzername beim Importvorgang ist standardmässig den vollen Google Kontaktname. Der Benutzername muss bei Bedarf nachträglich angepasst werden.',
  'LBL_EXTERNAL_MAP_SUB_HELP' => '<b>Import</b> auswählen, um den Importvorgang zu starten. Nur Sätze mit Nachnamen werden erstellt. Datensätze werden nicht erstellt, wo Duplikatsätze erstellt werden oder die E-Mail Adresse bereits existiert.',
  'LBL_EXTERNAL_FIELD_TOOLTIP' => 'Diese Spalte zeigt alle Felder aus der externe Datenquelle',
  'LBL_EXTERNAL_DEFAULT_TOOPLTIP' => 'Ein Defaultwert für dieses Feld definieren, wenn das Feld keinen Inhalt hat.',
  'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => 'Um neue Datensätze zu einem anderen Benutzer zuzuweisen, wählen einen anderen Benutzer aus-',
  'LBL_EXTERNAL_TEAM_TOOLTIP' => 'Datensätze zu einem anderen Team oder Teams zuweisen, verwende die Defaultwert Spalte, um unterschiedliche Teams auszuwählen.',
  'LBL_SIGN_IN_HELP' => 'Um diesen Dienst zu verwenden, melden Sie sich an unter dem Reiter "Externes Konto".',
);

