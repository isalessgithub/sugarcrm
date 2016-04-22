<?php

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
  'LBL_CURRENCY_NAME' => 'Währungsname',
  'LBL_CURRENCY_SYMBOL' => 'Währungssymbol',
  'LBL_LIST_SALE_NAME' => 'Name',
  'LBL_TEAM_ID' => 'Team ID',
  
  
  
  
  'LBL_MODULE_NAME' => 'Verkauf',
  'LBL_MODULE_TITLE' => 'Vertrieb: Home',
  'LBL_SEARCH_FORM_TITLE' => 'Verkauf Suche',
  'LBL_VIEW_FORM_TITLE' => 'Verkauf Ansicht',
  'LBL_LIST_FORM_TITLE' => 'Verkauf Liste',
  'LBL_SALE_NAME' => 'Verkauf Name:',
  'LBL_SALE' => 'Verkauf:',
  'LBL_NAME' => 'Verkauf Name',
  'LBL_LIST_ACCOUNT_NAME' => 'Firmenname',
  'LBL_LIST_AMOUNT' => 'Betrag',
  'LBL_LIST_DATE_CLOSED' => 'Schließen',
  'LBL_LIST_SALE_STAGE' => 'Verkaufsphase',
  'LBL_ACCOUNT_ID' => 'Firma ID',
  'LBL_CURRENCY_ID' => 'Währungs ID',
  'UPDATE' => 'Verkauf - Währungsaktualisierung',
  'UPDATE_DOLLARAMOUNTS' => 'Euro Beträge aktualisieren',
  'UPDATE_VERIFY' => 'Beträge überprüfen',
  'UPDATE_VERIFY_TXT' => 'Überprüft, ob alle angegebenen Werte gültige Dezimalwerte sind (bestehend aus den Zahlen 0 - 9 und dem Dezimaltrennzeichen)',
  'UPDATE_FIX' => 'Beträge reparieren',
  'UPDATE_FIX_TXT' => 'Versucht ungültige Beträge über das Setzen korrekter Dezimalzeichen zu korrigieren. Für jeden geänderten Betrag existiert eine Sicherungskopie im Datenbankfeld amount_backup. Falls Sie diese Funktion aufrufen und Fehler feststellen, müssen Sie vor einem erneuten Versuch erst die alten Beträge, die sich im Backup befinden, wieder herstellen, da ansonsten Ihre ursprünglichen Einträge in der Datenbank mit den fehlerhaften Beträgen überschrieben werden.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Hier werden die Beträge der Verkäufe basierend auf dem angegebenen Wechselkurs neu berechnet. Diese Werte werden für die Graphiken und die Währungstabellen genutzt.',
  'UPDATE_CREATE_CURRENCY' => 'Neue Währung:',
  'UPDATE_VERIFY_FAIL' => 'Datensatz konnte nicht verifiziert werden',
  'UPDATE_VERIFY_CURAMOUNT' => 'Aktueller Betrag:',
  'UPDATE_VERIFY_FIX' => 'Berichtigter Betrag:',
  'UPDATE_INCLUDE_CLOSE' => 'Auch abgeschlossenen Angebote überprüfen',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Neuer Betrag:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Neue Währung:',
  'UPDATE_DONE' => 'Fertig',
  'UPDATE_BUG_COUNT' => 'Gefundene Fehler, deren Behebung versucht wurde:',
  'UPDATE_BUGFOUND_COUNT' => 'Gefundene Fehler:',
  'UPDATE_COUNT' => 'Bearbeitete Einträge:',
  'UPDATE_RESTORE_COUNT' => 'Wiederhergestellte Beträge:',
  'UPDATE_RESTORE' => 'Betrag wiederherstellen',
  'UPDATE_RESTORE_TXT' => 'Stellt die Beträge wieder her, welche während der Reparatur gesichert wurden.',
  'UPDATE_FAIL' => 'Update konnte nicht durchgeführt werden -',
  'UPDATE_NULL_VALUE' => 'Betragsfeld ist leer und wird deshalb auf 0 gesetzt -',
  'UPDATE_MERGE' => 'Währungen zusammenführen',
  'UPDATE_MERGE_TXT' => 'Zusammenführen mehrerer Währungen in eine. Falls Sie feststellen, dass mehrere Einträge mit der gleichen Währung vorhanden sind, können Sie diese zusammenführen. Dies gilt analog für alle anderen Module.',
  'LBL_ACCOUNT_NAME' => 'Firmenname:',
  'LBL_AMOUNT' => 'Betrag:',
  'LBL_AMOUNT_USDOLLAR' => 'Betrag Standardwährung:',
  'LBL_CURRENCY' => 'Währung',
  'LBL_DATE_CLOSED' => 'Abschluss geplant:',
  'LBL_TYPE' => 'Typ:',
  'LBL_CAMPAIGN' => 'Kampagne:',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Interessenten',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekte',
  'LBL_NEXT_STEP' => 'Nächster Schritt:',
  'LBL_LEAD_SOURCE' => 'Quelle:',
  'LBL_SALES_STAGE' => 'Verkaufsphase:',
  'LBL_PROBABILITY' => 'Wahrscheinlichkeit (%):',
  'LBL_DESCRIPTION' => 'Beschreibung:',
  'LBL_DUPLICATE' => 'Möglicher doppelter Verkauf',
  'MSG_DUPLICATE' => 'Der Verkauf den Sie gerade erstellen, könnte eine Dublette eines bereits bestehenden Verkaufs sein. Verkäufe mit ähnlichen Namen sind unten aufgeführt.<br>Drücken Sie auf Speichern um fortzusetzen oder auf Abbrechen um zum Modul zurückzukehren ohne den Verkauf zu speichern.',
  'LBL_NEW_FORM_TITLE' => 'Verkauf erstellen',
  'LNK_NEW_SALE' => 'Verkauf erstellen',
  'LNK_SALE_LIST' => 'Verkauf',
  'ERR_DELETE_RECORD' => 'Um diesen Verkauf zu löschen, muss eine Datensatznummer angegeben werden.',
  'LBL_TOP_SALES' => 'Liste der Top-Verkäufe',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Möchten Sie diesen Kontakt wirklich aus dem Verkauf entfernen?',
  'SALE_REMOVE_PROJECT_CONFIRM' => 'Möchten Sie diesen Verkauf wirklich von diesem Projekt entfernen?',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Verkauf',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitäten',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Verlauf',
  'LBL_RAW_AMOUNT' => 'Ges. Summe',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakte',
  'LBL_ASSIGNED_TO_NAME' => 'Zugewiesen an:',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Zugew. Benutzer',
  'LBL_MY_CLOSED_SALES' => 'Meine abgeschlossenen Verkäufe',
  'LBL_TOTAL_SALES' => 'Verkäufe gesamt',
  'LBL_CLOSED_WON_SALES' => 'Geschlossene gewonnene Verkäufe',
  'LBL_ASSIGNED_TO_ID' => 'Bearbeiter',
  'LBL_CREATED_ID' => 'Ersteller',
  'LBL_MODIFIED_ID' => 'Geändert von ID',
  'LBL_MODIFIED_NAME' => 'Modifizierter Benutzer',
  'LBL_SALE_INFORMATION' => 'Verkauf Information',
);

