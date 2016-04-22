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
  'DEF_CREATE_LOG' => 'Dokument erstellt:',
  'ERR_DELETE_CONFIRM' => 'Möchten Sie diese Dokumentversion löschen?',
  'ERR_DELETE_LATEST_VERSION' => 'Die letzte Version eines Dokuments kann nicht gelöscht werden.',
  'ERR_DOC_ACTIVE_DATE' => 'Veröffentlichungsdatum',
  'ERR_DOC_EXP_DATE' => 'Ablaufdatum',
  'ERR_DOC_NAME' => 'Dokument Name',
  'ERR_DOC_VERSION' => 'Dokument-Version',
  'ERR_FILENAME' => 'Dateiname',
  'ERR_INVALID_EXTERNAL_API_ACCESS' => 'Der Benutzer versuchte auf einem ungültigen exteren API I ({0}) zuzugrifen',
  'ERR_INVALID_EXTERNAL_API_LOGIN' => 'Der Login zum externen API ({0}) ist fehlgeschlagen',
  'ERR_MISSING_FILE' => 'Es fehlt eine Datei von diesem Dokument, wahrscheinlich gab es einen Fehler beim Hochladen. Versuchen Sie erneut die Datei hochzuladen.',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Firmen',
  'LBL_ACTIVE_DATE' => 'Veröffentlichungsdatum',
  'LBL_ASSIGNED_TO_NAME' => 'Zugewiesen an:',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Fehler',
  'LBL_CASES_SUBPANEL_TITLE' => 'Tickets',
  'LBL_CATEGORY' => 'Kategorie',
  'LBL_CATEGORY_VALUE' => 'Kategorie',
  'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Unspezifisch',
  'LBL_CHANGE_LOG' => 'Änderungs-Log:',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakte',
  'LBL_CONTRACTS' => 'Verträge',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Verknüpfte Kontakte',
  'LBL_CONTRACT_NAME' => 'Vertragsname:',
  'LBL_CONTRACT_STATUS' => 'Vertragsstatus:',
  'LBL_CREATED' => 'Erstellt von:',
  'LBL_CREATED_BY' => 'Erstellt von:',
  'LBL_CREATED_USER' => 'Erstellter Benutzer',
  'LBL_DATE_ENTERED' => 'Datum erstellt',
  'LBL_DATE_MODIFIED' => 'Geändert am',
  'LBL_DELETED' => 'Gelöscht',
  'LBL_DESCRIPTION' => 'Beschreibung',
  'LBL_DET_IS_TEMPLATE' => 'Vorlage? :',
  'LBL_DET_RELATED_DOCUMENT' => 'Verknüpftes Dokument:',
  'LBL_DET_RELATED_DOCUMENT_VERSION' => 'Verknüpfte Version dieses Dokuments:',
  'LBL_DET_TEMPLATE_TYPE' => 'Dokumenttyp:',
  'LBL_DOCUMENT' => 'Verknüpftes Dokument',
  'LBL_DOCUMENT_ID' => 'Dokument ID',
  'LBL_DOCUMENT_INFORMATION' => 'Übersicht Dokumente',
  'LBL_DOCUMENT_NAME' => 'Dokument Name',
  'LBL_DOCUMENT_REVISION_ID' => 'Dokument Revisions Id',
  'LBL_DOC_ACTIVE_DATE' => 'Veröffentlichungsdatum:',
  'LBL_DOC_DESCRIPTION' => 'Beschreibung:',
  'LBL_DOC_EXP_DATE' => 'Ablaufdatum:',
  'LBL_DOC_ID' => 'Dokument Quell-ID',
  'LBL_DOC_NAME' => 'Dokument Name:',
  'LBL_DOC_REV_HEADER' => 'Dokument Versionen',
  'LBL_DOC_STATUS' => 'Status:',
  'LBL_DOC_STATUS_ID' => 'Status ID:',
  'LBL_DOC_TYPE' => 'Quelle',
  'LBL_DOC_TYPE_POPUP' => 'Ein Quelle auswählen, woher das Dokument hochgeladen werden soll.',
  'LBL_DOC_URL' => 'Dokument Quell-URL',
  'LBL_DOC_VERSION' => 'Version:',
  'LBL_DOWNNLOAD_FILE' => 'Download Datei:',
  'LBL_EXPIRATION_DATE' => 'Ablaufdatum',
  'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Die letzte 20 veränderte Dateien werden absteigend aufgelistet. Bitte die Suchfunktion verwenden, um andere Dateien zu finden.',
  'LBL_FILENAME' => 'Dateiname:',
  'LBL_FILE_EXTENSION' => 'Dateiendung',
  'LBL_FILE_UPLOAD' => 'Anhang',
  'LBL_FILE_URL' => 'Datei URL',
  'LBL_HOMEPAGE_TITLE' => 'Meine Dokumente',
  'LBL_IS_TEMPLATE' => 'Ist ein Template',
  'LBL_LASTEST_REVISION_NAME' => 'Letzter Revisionsname',
  'LBL_LAST_REV_CREATE_DATE' => 'Erstellungsdatum Letzte Version',
  'LBL_LAST_REV_CREATOR' => 'Version erstellt von:',
  'LBL_LAST_REV_DATE' => 'Versionsdatum:',
  'LBL_LAST_REV_MIME_TYPE' => 'Letzte Revision - MIME Type',
  'LBL_LATEST_REVISION' => 'Letzte Version',
  'LBL_LATEST_REVISION_ID' => 'letzte RevisionsID',
  'LBL_LINKED_ID' => 'verlinkte ID',
  'LBL_LIST_ACTIVE_DATE' => 'Veröffentlichungsdatum',
  'LBL_LIST_CATEGORY' => 'Kategorie',
  'LBL_LIST_DOCUMENT' => 'Dokument',
  'LBL_LIST_DOCUMENT_NAME' => 'Dokument Name',
  'LBL_LIST_DOC_TYPE' => 'Quelle',
  'LBL_LIST_DOWNLOAD' => 'Herunterladen',
  'LBL_LIST_EXP_DATE' => 'Ablaufdatum',
  'LBL_LIST_EXT_DOCUMENT_NAME' => 'Dateiname',
  'LBL_LIST_FILENAME' => 'Anhang',
  'LBL_LIST_FORM_TITLE' => 'Dokumente Liste',
  'LBL_LIST_IS_TEMPLATE' => 'Vorlage?',
  'LBL_LIST_LAST_REV_CREATOR' => 'Veröffentlicht von',
  'LBL_LIST_LAST_REV_DATE' => 'Versionsdatum',
  'LBL_LIST_LATEST_REVISION' => 'Letzte Version',
  'LBL_LIST_REVISION' => 'Version',
  'LBL_LIST_SELECTED_REVISION' => 'Gewählte Version',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_LIST_SUBCATEGORY' => 'Unterkategorie',
  'LBL_LIST_TEMPLATE_TYPE' => 'Dokumententyp',
  'LBL_LIST_VIEW_DOCUMENT' => 'Ansicht',
  'LBL_MAIL_MERGE_DOCUMENT' => 'Serienbrief-Vorlage:',
  'LBL_MIME' => 'Mime-Typ',
  'LBL_MODIFIED' => 'Geändert von ID',
  'LBL_MODIFIED_USER' => 'Geändert von',
  'LBL_MODULE_NAME' => 'Dokumente',
  'LBL_MODULE_TITLE' => 'Dokumente: Home',
  'LBL_NAME' => 'Dokument Name',
  'LBL_NEW_FORM_TITLE' => 'Neues Dokument',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Verkaufschancen',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Produkte',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Angebote',
  'LBL_RELATED_DOCUMENT_ID' => 'Verknüpfte Dokumenten ID',
  'LBL_RELATED_DOCUMENT_REVISION_ID' => 'Verknüpfte Dokumentversions ID',
  'LBL_REVISION' => 'Version',
  'LBL_REVISIONS' => 'Versionen',
  'LBL_REVISIONS_PANEL' => 'Revisions Details',
  'LBL_REVISIONS_SUBPANEL' => 'Versionen',
  'LBL_REVISION_NAME' => 'Versionsnummer',
  'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Dateiname',
  'LBL_SEARCH_FORM_TITLE' => 'Dokumente Suche',
  'LBL_SELECTED_REVISION_FILENAME' => 'Ausgewählter Revision Dateiname',
  'LBL_SELECTED_REVISION_ID' => 'ausgewählte RevisionsID',
  'LBL_SELECTED_REVISION_NAME' => 'Ausgewählter Revisionsname',
  'LBL_SF_ACTIVE_DATE' => 'Veröffentlichungsdatum:',
  'LBL_SF_CATEGORY' => 'Kategorie',
  'LBL_SF_DOCUMENT' => 'Dokument Name:',
  'LBL_SF_EXP_DATE' => 'Ablaufdatum:',
  'LBL_SF_SUBCATEGORY' => 'Unterkategorie:',
  'LBL_STATUS' => 'Status',
  'LBL_SUBCATEGORY' => 'Unterkategorie',
  'LBL_SUBCATEGORY_VALUE' => 'Unterkategorie:',
  'LBL_TEAM' => 'Team:',
  'LBL_TEMPLATE_TYPE' => 'Dokumententyp',
  'LBL_THEREVISIONS_SUBPANEL_TITLE' => 'Versionen',
  'LBL_TREE_TITLE' => 'Dokumente',
  'LNK_DOCUMENT_LIST' => 'Dokumente Liste',
  'LNK_NEW_DOCUMENT' => 'Neues Dokument',
  'LNK_NEW_MAIL_MERGE' => 'Serienbrief',
);

