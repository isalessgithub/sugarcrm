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
  'DEF_CREATE_LOG' => 'Document Aangemaakt',
  'ERR_DELETE_CONFIRM' => 'Wilt u deze versie van het document verwijderen?',
  'ERR_DELETE_LATEST_VERSION' => 'Het is niet toegestaan de laatste versie van een document te verwijderen.',
  'ERR_DOC_ACTIVE_DATE' => 'Publicatiedatum',
  'ERR_DOC_EXP_DATE' => 'Expiratiedatum',
  'ERR_DOC_NAME' => 'Documentnaam',
  'ERR_DOC_VERSION' => 'Documentversie',
  'ERR_FILENAME' => 'Bestandsnaam',
  'ERR_INVALID_EXTERNAL_API_ACCESS' => 'De gebruiker probeerde toegang te krijgen tot een ongeldige externe API ({0})',
  'ERR_INVALID_EXTERNAL_API_LOGIN' => 'De aanmelding voor de externe API ({0}) is mislukt',
  'ERR_MISSING_FILE' => 'Dit document mist een bestand, waarschijnlijk vanwege een fout tijdens het uploaden. Probeert u aub nogmaals het bestand te uploaden of neem contact op met uw beheerder.',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Organisaties',
  'LBL_ACTIVE_DATE' => 'Publicatiedatum',
  'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan:',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Defecten',
  'LBL_CASES_SUBPANEL_TITLE' => 'Cases',
  'LBL_CATEGORY' => 'Categorie',
  'LBL_CATEGORY_VALUE' => 'Productcategorie',
  'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Ongespecificeerd',
  'LBL_CHANGE_LOG' => 'Wijzigingslog',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Personen',
  'LBL_CONTRACTS' => 'Contracten',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Gerelateerde Contracten',
  'LBL_CONTRACT_NAME' => 'Contractnaam:',
  'LBL_CONTRACT_STATUS' => 'Contract status',
  'LBL_CREATED' => 'Gemaakt door',
  'LBL_CREATED_BY' => 'Gemaakt door',
  'LBL_CREATED_USER' => 'Aangemaakte Gebruiker',
  'LBL_DATE_ENTERED' => 'Datum ingevoerd',
  'LBL_DATE_MODIFIED' => 'Laatste wijziging',
  'LBL_DELETED' => 'Verwijderd',
  'LBL_DESCRIPTION' => 'Beschrijving',
  'LBL_DET_IS_TEMPLATE' => 'Sjabloon? :',
  'LBL_DET_RELATED_DOCUMENT' => 'Gerelateerd Document:',
  'LBL_DET_RELATED_DOCUMENT_VERSION' => 'Gerelateerde Documentversie:',
  'LBL_DET_TEMPLATE_TYPE' => 'Documenttype:',
  'LBL_DOCUMENT' => 'Gerelateerd Document',
  'LBL_DOCUMENT_ID' => 'Document Id',
  'LBL_DOCUMENT_INFORMATION' => 'Document Overzicht',
  'LBL_DOC_ACTIVE_DATE' => 'Publicatiedatum:',
  'LBL_DOC_DESCRIPTION' => 'Beschrijving:',
  'LBL_DOC_EXP_DATE' => 'Expiratiedatum:',
  'LBL_DOC_ID' => 'Document Bron ID',
  'LBL_DOC_NAME' => 'Documentnaam:',
  'LBL_DOC_REV_HEADER' => 'Document Revisie',
  'LBL_DOC_STATUS' => 'Status:',
  'LBL_DOC_TYPE' => 'Bron',
  'LBL_DOC_TYPE_POPUP' => 'Selecteer een bron waarnaar dit document wordt geüpload en vanwaar het beschikbaar zal zijn.',
  'LBL_DOC_URL' => 'Document Bron URL',
  'LBL_DOC_VERSION' => 'Revisie:',
  'LBL_DOWNNLOAD_FILE' => 'Download Bestand:',
  'LBL_EXPIRATION_DATE' => 'Expiratiedatum',
  'LBL_EXTERNAL_DOCUMENT_NOTE' => 'De eerste 20 meest recent gewijzigde bestanden worden in aflopende volgorde weergegeven in de lijst hieronder. Gebruik de zoekfunctie om andere bestanden te vinden.',
  'LBL_FILENAME' => 'Bestandsnaam:',
  'LBL_FILE_EXTENSION' => 'Bestandsextensie',
  'LBL_FILE_UPLOAD' => 'Bestand:',
  'LBL_FILE_URL' => 'Bestands URL',
  'LBL_HOMEPAGE_TITLE' => 'Mijn Documenten',
  'LBL_IS_TEMPLATE' => 'Is een Sjabloon',
  'LBL_LASTEST_REVISION_NAME' => 'Laatste Revisie Naam:',
  'LBL_LAST_REV_CREATE_DATE' => 'Laatste Versie Datum ingevoerd',
  'LBL_LAST_REV_CREATOR' => 'Revisie gemaakte door:',
  'LBL_LAST_REV_DATE' => 'Revisie datum:',
  'LBL_LAST_REV_MIME_TYPE' => 'Laatste Revisie - Mime type',
  'LBL_LATEST_REVISION' => 'Laatste Versie',
  'LBL_LATEST_REVISION_ID' => 'Laatste Revisie ID',
  'LBL_LINKED_ID' => 'Gerelateerde ID',
  'LBL_LIST_ACTIVE_DATE' => 'Publicatiedatum',
  'LBL_LIST_CATEGORY' => 'Categorie',
  'LBL_LIST_DOCUMENT' => 'Document',
  'LBL_LIST_DOCUMENT_NAME' => 'Documentnaam',
  'LBL_LIST_DOC_TYPE' => 'Bron',
  'LBL_LIST_DOWNLOAD' => 'Download',
  'LBL_LIST_EXP_DATE' => 'Expiratiedatum',
  'LBL_LIST_EXT_DOCUMENT_NAME' => 'Bestandsnaam',
  'LBL_LIST_FILENAME' => 'Bestandsnaam',
  'LBL_LIST_FORM_TITLE' => 'Documentenlijst',
  'LBL_LIST_IS_TEMPLATE' => 'Sjabloon?',
  'LBL_LIST_LAST_REV_CREATOR' => 'Gepubliceerd door',
  'LBL_LIST_LAST_REV_DATE' => 'Versiedatum',
  'LBL_LIST_LATEST_REVISION' => 'Laatste Versie',
  'LBL_LIST_REVISION' => 'Versie',
  'LBL_LIST_SELECTED_REVISION' => 'Geselecteerde Versie',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_LIST_SUBCATEGORY' => 'Sub-categorie',
  'LBL_LIST_TEMPLATE_TYPE' => 'Documenttype',
  'LBL_LIST_VIEW_DOCUMENT' => 'Bekijk',
  'LBL_MAIL_MERGE_DOCUMENT' => 'Documentsjabloon:',
  'LBL_MIME' => 'Mime type',
  'LBL_MODIFIED' => 'Gewijzigd door',
  'LBL_MODIFIED_USER' => 'Gewijzigd Door:',
  'LBL_MODULE_NAME' => 'Documenten',
  'LBL_MODULE_TITLE' => 'Documenten: Start',
  'LBL_NAME' => 'Document Naam',
  'LBL_NEW_FORM_TITLE' => 'Nieuw Document',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Opportunities',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Producten',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Offertes',
  'LBL_RELATED_DOCUMENT_ID' => 'Gerelateerd Document ID',
  'LBL_RELATED_DOCUMENT_REVISION_ID' => 'Gerelateerd Document Versie ID',
  'LBL_REVISION' => 'Versie',
  'LBL_REVISIONS' => 'Versies',
  'LBL_REVISIONS_PANEL' => 'Revisie Details',
  'LBL_REVISIONS_SUBPANEL' => 'Revisies',
  'LBL_REVISION_NAME' => 'Versienummer',
  'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Document Naam:',
  'LBL_SEARCH_FORM_TITLE' => 'Documenten Zoeken',
  'LBL_SELECTED_REVISION_FILENAME' => 'Geskozen Revisie Bestandsnaam',
  'LBL_SELECTED_REVISION_ID' => 'Gekozen Revisie ID',
  'LBL_SELECTED_REVISION_NAME' => 'Gekozen Revisie Naam',
  'LBL_SF_ACTIVE_DATE' => 'Publicatiedatum:',
  'LBL_SF_CATEGORY' => 'Productcategorie',
  'LBL_SF_DOCUMENT' => 'Documentnaam:',
  'LBL_SF_EXP_DATE' => 'Expiratiedatum:',
  'LBL_SF_SUBCATEGORY' => 'Sub-categorie:',
  'LBL_STATUS' => 'Status',
  'LBL_SUBCATEGORY' => 'Sub-categorie',
  'LBL_SUBCATEGORY_VALUE' => 'Sub-categorie:',
  'LBL_TEAM' => 'Team:',
  'LBL_TEMPLATE_TYPE' => 'Documenttype',
  'LBL_THEREVISIONS_SUBPANEL_TITLE' => 'Versies',
  'LBL_TREE_TITLE' => 'Documenten',
  'LNK_DOCUMENT_LIST' => 'Toon Documenten',
  'LNK_NEW_DOCUMENT' => 'Nieuw Document',
  'LNK_NEW_MAIL_MERGE' => 'Email Samenvoegen',
);

