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
  'LBL_CONNECT_BUTTON_TITLE' => 'Prisijungti',
  'LBL_NOTE' => 'Pastaba:',
  'LBL_CONNECTED' => 'Prisijungimas patvirtintas',
  'LBL_DISCONNECTED' => 'Neprisijungta',
  'LBL_ERR_POPUPS_DISABLED' => 'Please enable browser popup windows or add an exception for website "{0}" to the exceptions list in order to connect.',
  'LBL_ID' => 'ID',
  'LBL_API_OAUTHTOKEN' => 'OAuth Token',
  'LBL_OAUTH_NAME' => '%s',
  'LBL_ERR_NO_TOKEN' => 'There are no valid login tokens for this account.',
  'LBL_REAUTHENTICATE_KEY' => 'a',
  'LBL_OMIT_URL' => '(Omit http:// or https://)',
  'LBL_ASSIGNED_TO_ID' => 'Atsakingo Id',
  'LBL_ASSIGNED_TO_NAME' => 'Sugar vartotojas',
  'LBL_DATE_ENTERED' => 'Sukūrimo data',
  'LBL_DATE_MODIFIED' => 'Redagavimo data',
  'LBL_MODIFIED' => 'Redagavo',
  'LBL_MODIFIED_ID' => 'Redaguotojo Id',
  'LBL_MODIFIED_NAME' => 'Redaguotojo vardas',
  'LBL_CREATED' => 'Sukūrė',
  'LBL_CREATED_ID' => 'Sukūrėjo Id',
  'LBL_DESCRIPTION' => 'Aprašymas',
  'LBL_DELETED' => 'Ištrintas',
  'LBL_NAME' => 'Pavadinimas',
  'LBL_CREATED_USER' => 'Sukūrė',
  'LBL_MODIFIED_USER' => 'Redagavo',
  'LBL_LIST_NAME' => 'Pavadinimas',
  'LBL_TEAM' => 'Komandos',
  'LBL_TEAMS' => 'Komandos',
  'LBL_TEAM_ID' => 'Komandos Id',
  'LBL_LIST_FORM_TITLE' => 'Išorinių prisijungimų sąrašas',
  'LBL_MODULE_NAME' => 'Išorinis prisijungimas',
  'LBL_MODULE_TITLE' => 'Išoriniai prisijungimai',
  'LBL_HOMEPAGE_TITLE' => 'Mano išoriniai prisijungimai',
  'LNK_NEW_RECORD' => 'Sukurti išorinį prisijungimą',
  'LNK_LIST' => 'Išoriniai prisijungimai',
  'LNK_IMPORT_SUGAR_EAPM' => 'Importuoti išorinius prisijungimus',
  'LBL_SEARCH_FORM_TITLE' => 'Ieškoti išorinių šaltinių',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Rodyti istoriją',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Priminimai',
  'LBL_SUGAR_EAPM_SUBPANEL_TITLE' => 'Išoriniai prisijungimai',
  'LBL_NEW_FORM_TITLE' => 'Naujas išorinis prisijungimas',
  'LBL_PASSWORD' => 'Slaptažodis',
  'LBL_USER_NAME' => 'Pavadinimas',
  'LBL_URL' => 'Nuoroda',
  'LBL_APPLICATION' => 'Aplikacija',
  'LBL_API_DATA' => 'API duomenys',
  'LBL_API_TYPE' => 'Prisijungimo tipas',
  'LBL_API_CONSKEY' => 'Vartotojo raktas',
  'LBL_API_CONSSECRET' => 'Vartotojo slaptas raktas',
  'LBL_AUTH_UNSUPPORTED' => 'Šis autentifikacijos metodas nepalaikomas',
  'LBL_AUTH_ERROR' => 'Klaida prisijungimo metu: %s',
  'LBL_VALIDATED' => 'Prisijungimas patvirtintas',
  'LBL_ACTIVE' => 'Aktyvus',
  'LBL_SUGAR_USER_NAME' => 'Sugar vartotojas',
  'LBL_DISPLAY_PROPERTIES' => 'Rodymo nustatymai',
  'LBL_ERR_NO_AUTHINFO' => 'Nėra autentifikavimo informacijos šiam prisijungimui.',
  'LBL_ERR_FAILED_QUICKCHECK' => 'Jūs nesate prisijungęs {0} . Paspauskite "Gerai" norėdami dar kartą prisijungti ir aktyvuoti išorinį prisijungimą.',
  'LBL_MEET_NOW_BUTTON' => 'Susipažinkite dabar',
  'LBL_VIEW_LOTUS_LIVE_MEETINGS' => 'Žiūrėti būsimus LotusLive&trade; susitikimus',
  'LBL_TITLE_LOTUS_LIVE_MEETINGS' => 'Būsimi LotusLive&trade; susitikimai',
  'LBL_VIEW_LOTUS_LIVE_DOCUMENTS' => 'LotusLive&trade; dokumentai',
  'LBL_TITLE_LOTUS_LIVE_DOCUMENTS' => 'LotusLive&trade; dokumentai',
  'LBL_REAUTHENTICATE_LABEL' => 'Pakartotinis patikrinimas',
  'LBL_APPLICATION_FOUND_NOTICE' => 'Šiai aplikacijai prisijungimas buvo atkurtas.',
  'LBL_OAUTH_SAVE_NOTICE' => 'Paspauskite Saugoti norėdami sukurti išorinį prisijungimą. Jūs turėsite suvesti prisijungimo duomenis į Sugar.',
  'LBL_BASIC_SAVE_NOTICE' => 'Paspauskite Saugoti norėdami sukurti išorinį prisijungimą. SugarCRM patikrins prisijungimo duomenis.',
  'LBL_ERR_FACEBOOK' => 'Klaida iš Facebook, naujienos negali būti rodomos.',
  'LBL_ERR_NO_RESPONSE' => 'Klaida saugant išorinį prisijungimą',
  'LBL_ERR_TWITTER' => 'Klaida iš Twitter, naujienos negali būti rodomos.',
);

