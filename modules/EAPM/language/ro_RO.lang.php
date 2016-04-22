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
  'LBL_CONNECT_BUTTON_TITLE' => 'Conecteaza-te',
  'LBL_NOTE' => 'Nota: ( defined in ./modules/Notes/language/ro_RO.lang.php )',
  'LBL_CONNECTED' => 'Conectare<br />Validare Acces ( defined in ./modules/EAPM/language/ro_RO.lang.php )',
  'LBL_DISCONNECTED' => 'Neconectat',
  'LBL_ERR_POPUPS_DISABLED' => 'Vă rugăm să activaţi ferestrele browser-ului pop-up sau pentru a adăuga o excepţie pentru site-ul "{0}" la lista de excepţii, în scopul de a conecta.',
  'LBL_ID' => 'ID',
  'LBL_URL' => 'URL',
  'LBL_API_DATA' => 'API Data',
  'LBL_API_OAUTHTOKEN' => 'OAuth Token',
  'LBL_OAUTH_NAME' => '%s',
  'LBL_REAUTHENTICATE_KEY' => 'a',
  'LBL_ASSIGNED_TO_ID' => 'Atribuit ID Utilizator',
  'LBL_ASSIGNED_TO_NAME' => 'Atrbuit lui',
  'LBL_DATE_ENTERED' => 'Data Crearii',
  'LBL_DATE_MODIFIED' => 'Data Modificarii',
  'LBL_MODIFIED' => 'Modificat de:',
  'LBL_MODIFIED_ID' => 'Modificata de ID',
  'LBL_MODIFIED_NAME' => 'Modificata de Nume',
  'LBL_CREATED' => 'Creat de',
  'LBL_CREATED_ID' => 'Creata de ID',
  'LBL_DESCRIPTION' => 'Descriere',
  'LBL_DELETED' => 'Sters',
  'LBL_NAME' => 'Nume Utilizator App',
  'LBL_CREATED_USER' => 'Creeata de Utilizator',
  'LBL_MODIFIED_USER' => 'Modificata de Utilizator',
  'LBL_LIST_NAME' => 'Nume',
  'LBL_TEAM' => 'Echipe',
  'LBL_TEAMS' => 'Echipe',
  'LBL_TEAM_ID' => 'ID Echipa:',
  'LBL_LIST_FORM_TITLE' => 'Lista Conturi Externe',
  'LBL_MODULE_NAME' => 'Cont extern',
  'LBL_MODULE_TITLE' => 'Conturi externe',
  'LBL_HOMEPAGE_TITLE' => 'Conturile Mele Externe',
  'LNK_NEW_RECORD' => 'Creeaza Conturi externe',
  'LNK_LIST' => 'Notificari',
  'LNK_IMPORT_SUGAR_EAPM' => 'Import Conturi externe',
  'LBL_SEARCH_FORM_TITLE' => 'Cautare Sursa externa',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Vizualizare Istoric',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activitati',
  'LBL_SUGAR_EAPM_SUBPANEL_TITLE' => 'Conturi externe',
  'LBL_NEW_FORM_TITLE' => 'Cont EXtern nou',
  'LBL_PASSWORD' => 'Parola:',
  'LBL_USER_NAME' => 'Nume Utilizator',
  'LBL_APPLICATION' => 'Aplicatie',
  'LBL_API_TYPE' => 'Tip Login',
  'LBL_API_CONSKEY' => 'Cheia OAuth Consum',
  'LBL_API_CONSSECRET' => 'Cheia OAuth Consum Secret',
  'LBL_AUTH_UNSUPPORTED' => 'Această metodă de autorizare nu este susţinută de aplicatie',
  'LBL_AUTH_ERROR' => 'Încercarea de a autentifica în contul extern a eşuat.',
  'LBL_VALIDATED' => 'Validare Acces',
  'LBL_ACTIVE' => 'Activ',
  'LBL_SUGAR_USER_NAME' => 'Utilizator Sugar',
  'LBL_DISPLAY_PROPERTIES' => 'Proprietati Afisare',
  'LBL_ERR_NO_AUTHINFO' => 'Nu există informaţii de autentificare pentru acest cont.',
  'LBL_ERR_NO_TOKEN' => 'Nu există jetoane valabile login pentru acest cont.',
  'LBL_ERR_FAILED_QUICKCHECK' => 'Pt moment nu sunteti conectat la contul dvs.Clic OK pt reconectare la cont si activati contul extern',
  'LBL_MEET_NOW_BUTTON' => 'Intalnire Acum',
  'LBL_VIEW_LOTUS_LIVE_MEETINGS' => 'Vezi viitoare LotusLive Întâlniri ™',
  'LBL_TITLE_LOTUS_LIVE_MEETINGS' => 'Viitoare LotusLive Întâlniri ™',
  'LBL_VIEW_LOTUS_LIVE_DOCUMENTS' => 'Vezi documente LotusLive',
  'LBL_TITLE_LOTUS_LIVE_DOCUMENTS' => 'LotusLive ™ Documente',
  'LBL_REAUTHENTICATE_LABEL' => 'Reautentificati',
  'LBL_APPLICATION_FOUND_NOTICE' => 'Un cont pentru această aplicaţie există deja. Ne-am repus cont existent.',
  'LBL_OMIT_URL' => '(Omit http:// sau https://)',
  'LBL_OAUTH_SAVE_NOTICE' => 'Faceţi clic pe Salvare pentru a crea înregistrare cont extern. Veţi fi direcţionat către o pagină pentru a introduce informaţiile dvs. de cont pentru a autoriza accesul cu Sugar. După ce introduceţi informaţiile dvs. de cont, ve-ţi fi direcţionat înapoi la Sugar.',
  'LBL_BASIC_SAVE_NOTICE' => 'Faceţi clic pe Salvare pentru a crea înregistrare cont extern. Sugar va valida apoi acreditările.',
  'LBL_ERR_FACEBOOK' => 'Facebook a returnat o eroare, iar  feed-ul nu poate fi afişat',
  'LBL_ERR_NO_RESPONSE' => 'A apărut o eroare atunci când încearcă să salveze în contul extern.',
  'LBL_ERR_TWITTER' => 'Twitter a returnat o eroare, şi feed-ul nu poate fi afişat.',
);

