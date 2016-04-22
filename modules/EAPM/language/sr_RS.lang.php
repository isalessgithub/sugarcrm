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
  'LBL_URL' => 'URL',
  'LBL_API_OAUTHTOKEN' => 'OAuth Token',
  'LBL_OAUTH_NAME' => '%s',
  'LBL_REAUTHENTICATE_KEY' => 'a',
  'LBL_ASSIGNED_TO_ID' => 'ID broj dodeljenog korisnika',
  'LBL_ASSIGNED_TO_NAME' => 'Sugar korisnik',
  'LBL_ID' => 'ID broj',
  'LBL_DATE_ENTERED' => 'Datum kreiranja',
  'LBL_DATE_MODIFIED' => 'Datum izmene',
  'LBL_MODIFIED' => 'Promenio',
  'LBL_MODIFIED_ID' => 'ID broj korisnika koji je promenio',
  'LBL_MODIFIED_NAME' => 'Ime korisnika koji je promenio',
  'LBL_CREATED' => 'Autor',
  'LBL_CREATED_ID' => 'ID broj korisnika koji je kreirao',
  'LBL_DESCRIPTION' => 'Opis',
  'LBL_DELETED' => 'Obrisan',
  'LBL_NAME' => 'Korisničko ime aplikacije',
  'LBL_CREATED_USER' => 'Kreirao korisnik',
  'LBL_MODIFIED_USER' => 'Promenio korisnik',
  'LBL_LIST_NAME' => 'Naziv',
  'LBL_TEAM' => 'Timovi',
  'LBL_TEAMS' => 'Timovi',
  'LBL_TEAM_ID' => 'ID broj tima',
  'LBL_LIST_FORM_TITLE' => 'Lista spoljnih naloga',
  'LBL_MODULE_NAME' => 'Spoljni nalog',
  'LBL_MODULE_TITLE' => 'Spoljni nalozi',
  'LBL_HOMEPAGE_TITLE' => 'Moji spoljni nalozi',
  'LNK_NEW_RECORD' => 'Kreiraj spoljni nalog',
  'LNK_LIST' => 'Pregled spoljnih naloga',
  'LNK_IMPORT_SUGAR_EAPM' => 'Uvezi spoljne naloge',
  'LBL_SEARCH_FORM_TITLE' => 'Pretraga spoljnih naloga',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Pregled istorije',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
  'LBL_SUGAR_EAPM_SUBPANEL_TITLE' => 'Spoljni nalozi',
  'LBL_NEW_FORM_TITLE' => 'Novi spoljni nalog',
  'LBL_PASSWORD' => 'Lozinka aplikacije',
  'LBL_USER_NAME' => 'Kornisničko ime aplikacije',
  'LBL_APPLICATION' => 'Aplikacija',
  'LBL_API_DATA' => 'API podaci',
  'LBL_API_TYPE' => 'Tip prijave',
  'LBL_API_CONSKEY' => 'Potrošački ključ',
  'LBL_API_CONSSECRET' => 'Potrošačka tajna',
  'LBL_AUTH_UNSUPPORTED' => 'Aplikacija ne podržava metod autorizacije',
  'LBL_AUTH_ERROR' => 'Neuspeo pokušaj konektovanja na ovaj nalog.',
  'LBL_VALIDATED' => 'Konektovan',
  'LBL_ACTIVE' => 'Aktivan',
  'LBL_SUGAR_USER_NAME' => 'Sugar Korisnik',
  'LBL_DISPLAY_PROPERTIES' => 'Prikaži svojstva',
  'LBL_CONNECT_BUTTON_TITLE' => 'Konektuj',
  'LBL_NOTE' => 'Molim zabeležite',
  'LBL_CONNECTED' => 'Konektovan',
  'LBL_DISCONNECTED' => 'Nije konektovan',
  'LBL_ERR_NO_AUTHINFO' => 'Za ovaj nalog ne postoje informacije o autentifikaciji',
  'LBL_ERR_NO_TOKEN' => 'Za ovaj nalog nema validnih tokena za prijavu',
  'LBL_ERR_FAILED_QUICKCHECK' => 'Trenutno niste konektovani na svoj {0} nalog. Kliknite OK da bi ste se prijavili na svoj nalog i ponovo aktivirali konekciju.',
  'LBL_MEET_NOW_BUTTON' => 'Sastani sada',
  'LBL_VIEW_LOTUS_LIVE_MEETINGS' => 'Pregled dolaznih LotusLive&trade; sastanaka',
  'LBL_TITLE_LOTUS_LIVE_MEETINGS' => 'Doalzni LotusLive&trade; sastanci',
  'LBL_VIEW_LOTUS_LIVE_DOCUMENTS' => 'Pregled LotusLive&trade; fajlova',
  'LBL_TITLE_LOTUS_LIVE_DOCUMENTS' => 'LotusLive&trade; fajlovi',
  'LBL_REAUTHENTICATE_LABEL' => 'Ponovo autentifikuj',
  'LBL_APPLICATION_FOUND_NOTICE' => 'Nalog za ovu aplikaciju već postoji. Onovili smo postojeći nalog.',
  'LBL_OMIT_URL' => '(Izostavite http:// ili https://)',
  'LBL_OAUTH_SAVE_NOTICE' => 'Kliknite <b>Konektuj</b> da bi ste bili preusmereni na stranicu sa informacijama o vašem nalogu i da bi autorizovali Sugar-u pristup nalogu. Nakon konektovanja, bicete preusmereni nazad na Sugar.',
  'LBL_BASIC_SAVE_NOTICE' => 'Kliknite <b>Konektuj</b> da bi ste konektovali ovaj nalog na Sugar.',
  'LBL_ERR_FACEBOOK' => 'Facebook je vratio grešku, i feed se ne može prikazati.',
  'LBL_ERR_NO_RESPONSE' => 'Dogodila se greška pri pokušaju konektovanja na ovaj nalog.',
  'LBL_ERR_TWITTER' => 'Twitter je vratio grešku, i feed se ne može prikazati.',
  'LBL_ERR_POPUPS_DISABLED' => 'Molim omogućite popup prozore pregledača ili dodajte izuzetak za sajt "{0} ", na listu izuzetaka da bi ste se konektovali.',
);

