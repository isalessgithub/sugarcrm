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

 
/*********************************************************************************
 * pl_pl.lang.php for SugarCRM 6.5.0
 * Translator: eVolpe
 * All Rights Reserved.
 * Any bugs report welcome: support@evolpe.pl
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
  'LBL_ASSIGNED_TO_ID' => 'Przydzielono do (ID)',
  'LBL_ASSIGNED_TO_NAME' => 'Przydzielono do',
  'LBL_ID' => 'ID',
  'LBL_DATE_ENTERED' => 'Data utworzenia',
  'LBL_DATE_MODIFIED' => 'Data modyfikacji',
  'LBL_MODIFIED' => 'Zmodyfikowano przez',
  'LBL_MODIFIED_ID' => 'Zmodyfikowano przez (ID)',
  'LBL_MODIFIED_NAME' => 'Zmodyfikowano przez (nazwa)',
  'LBL_CREATED' => 'Utworzone przez',
  'LBL_CREATED_ID' => 'Utworzone przez (ID)',
  'LBL_DESCRIPTION' => 'Opis',
  'LBL_DELETED' => 'Usunięto',
  'LBL_NAME' => 'Nazwa użytkownika aplikacji',
  'LBL_CREATED_USER' => 'Utworzone przez użytkownika',
  'LBL_MODIFIED_USER' => 'Zmodyfikowane przez użytkownika',
  'LBL_LIST_NAME' => 'Nazwa',
  'LBL_TEAM' => 'Zespół',
  'LBL_TEAMS' => 'Zespoły',
  'LBL_TEAM_ID' => 'ID zespołu',
  'LBL_LIST_FORM_TITLE' => 'Lista zewnętrznych kont',
  'LBL_MODULE_NAME' => 'Zewnętrzne konto',
  'LBL_MODULE_TITLE' => 'Zewnętrzne konta',
  'LBL_HOMEPAGE_TITLE' => 'Moje zewnętrzne konta',
  'LNK_NEW_RECORD' => 'Utwórz zewnętrzne konto',
  'LNK_LIST' => 'Obejrzyj zewnętrzne konta',
  'LNK_IMPORT_SUGAR_EAPM' => 'Import zewnętrznych kont',
  'LBL_SEARCH_FORM_TITLE' => 'Wyszukaj zewnętrzne źródła',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Przejrzyj historię',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Wydarzenia',
  'LBL_SUGAR_EAPM_SUBPANEL_TITLE' => 'Zewnętrzne konta',
  'LBL_NEW_FORM_TITLE' => 'Nowe zewnętrzne konto',
  'LBL_PASSWORD' => 'Hasło aplikacji',
  'LBL_USER_NAME' => 'Nazwa użytkownika aplikacji',
  'LBL_URL' => 'Łącze URL',
  'LBL_APPLICATION' => 'Aplikacja',
  'LBL_API_DATA' => 'Dane API',
  'LBL_API_TYPE' => 'Typ logowania',
  'LBL_API_CONSKEY' => 'Klucz konsumenta',
  'LBL_API_CONSSECRET' => 'Kod konsumenta',
  'LBL_API_OAUTHTOKEN' => 'Token OAuth',
  'LBL_AUTH_UNSUPPORTED' => "Ta metoda autoryzacji jest nieobsługiwana przez aplikację",
  'LBL_AUTH_ERROR' => 'Próba połączenia z kontem zakończyła się niepowodzeniem.',
  'LBL_VALIDATED' => 'Połączono',
  'LBL_ACTIVE' => 'Aktywne',
  'LBL_OAUTH_NAME' => '%s',
  'LBL_SUGAR_USER_NAME' => 'Użytkownik Sugar',
  'LBL_DISPLAY_PROPERTIES' => 'Wyświetl właściwości',
  'LBL_CONNECT_BUTTON_TITLE' => 'Połącz',
  'LBL_NOTE' => 'Zwróć uwagę',
  'LBL_CONNECTED' => 'Połączono',
  'LBL_DISCONNECTED' => 'Nie połączono',

  'LBL_ERR_NO_AUTHINFO' => 'Nie ma informacji uwierzytelniania dla tego konta.',
  'LBL_ERR_NO_TOKEN' => 'Nie ma ważnych tokenów logowania dla tego konta.',
  
  'LBL_ERR_FAILED_QUICKCHECK' => 'Nie jesteś aktualnie połączony ze swoim kontem - {0}. Kliknij OK, aby się zalogować na swoje konto i wznowić połączenie.',

  // Various strings used throughout the external account modules
  'LBL_MEET_NOW_BUTTON' => 'Zaplanuj spotkanie',
  'LBL_VIEW_LOTUS_LIVE_MEETINGS' => 'Przeglądaj nadchodzące spotkania LotusLive&trade;',
  'LBL_TITLE_LOTUS_LIVE_MEETINGS' => 'Nadchodzące spotkania LotusLive&trade;',
  'LBL_VIEW_LOTUS_LIVE_DOCUMENTS' => 'Przeglądaj pliki LotusLive&trade;',
  'LBL_TITLE_LOTUS_LIVE_DOCUMENTS' => 'Pliki LotusLive&trade;',
  'LBL_REAUTHENTICATE_LABEL' => 'Ponownie uwierzytelnij',
  'LBL_REAUTHENTICATE_KEY' => 'a',
  'LBL_APPLICATION_FOUND_NOTICE' => 'Konto dla tej aplikacji już istnieje. Dokonano ponownej aktywacji istniejęcego konta.',
  'LBL_OMIT_URL' => '(Pomiń http:// or https://)',
  'LBL_OAUTH_SAVE_NOTICE' => 'Kliknij <b>Połącz</b> w celu przeniesienia na stronę, aby podać informacje o koncie i autoryzować dostęp do konta dla Sugar. Po połączeniu nastąpi przekierowanie z powrotem do Sugar.',
  'LBL_BASIC_SAVE_NOTICE' => 'Kliknij <b>Połącz</b>, aby połączyć to konto z Sugar.',
  'LBL_ERR_FACEBOOK' => 'Facebook zwrócił błąd i wpis nie może zostać wyświetlony.',
  'LBL_ERR_NO_RESPONSE' => 'Wystąpił błąd podczas próby połączenia z tym kontem.',
  'LBL_ERR_TWITTER' => 'Twitter zwrócił błąd i wpis nie może zostać wyświetlony.',
  'LBL_ERR_POPUPS_DISABLED' => 'Włącz obsługę okien popup w przeglądarce albo dodaj wyjątek dla strony "{0}", aby umożliwić połączenie.'
);
