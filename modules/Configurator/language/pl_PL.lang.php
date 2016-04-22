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
  'ADVANCED' => 'Zaawansowane',
  'CURRENT_LOGO' => 'Aktualne logo:',
  'CURRENT_LOGO_HELP' => 'To logo jest wyświetlane w lewym rogu stopki aplikacji Sugar.',
  'DEFAULT_CURRENCY' => 'Waluta domyślna',
  'DEFAULT_CURRENCY_ISO4217' => 'Symbol waluty wg ISO 4217',
  'DEFAULT_CURRENCY_NAME' => 'Nazwa waluty',
  'DEFAULT_CURRENCY_SYMBOL' => 'Symbol waluty',
  'DEFAULT_DATE_FORMAT' => 'Domyślny format daty',
  'DEFAULT_DECIMAL_SEP' => 'Symbol dziesiętny',
  'DEFAULT_LANGUAGE' => 'Domyślny język',
  'DEFAULT_NUMBER_GROUPING_SEP' => 'Separator tysięcy',
  'DEFAULT_OC_STATUS' => 'Włączaj domyślnie klienta Offline',
  'DEFAULT_SYSTEM_SETTINGS' => 'Interfejs użytkownika',
  'DEFAULT_THEME' => 'Domyślny motyw',
  'DEFAULT_TIME_FORMAT' => 'Domyślny format czasu',
  'DEVELOPER_MODE' => 'Tryb deweloperski',
  'DISPLAY_RESPONSE_TIME' => 'Wyświetlaj czas odpowiedzi serwera',
  'ERR_ALERT_FILE_UPLOAD' => 'Błąd podczas ładowania obrazka.',
  'ERR_DELETE_CORE_FILE' => 'BŁĄD: Nie jest możliwe usunięcie podstawowej czcionki.',
  'ERR_EZPDF_DISABLE' => 'Ostrzeżenie: Klasa EZPDF jest wyłączona w tabeli config a jest ustawiona, jako klasa PDF. Proszę nacisną guzik "Zapisz", aby ustawić TCPDF, jako klasę PDF i powrócić do stanu stabilnego.',
  'ERR_FONT_ALREADY_EXIST' => 'BŁĄD: Ta czcionka już istnieje. Cofam zmiany...',
  'ERR_FONT_EMPTYFILE' => 'BŁĄD: Pusta nazwa pliku!',
  'ERR_FONT_FILE_DO_NOT_EXIST' => 'nie istnieje.',
  'ERR_FONT_MAKEFONT' => 'BŁĄD: Błąd przy tworzeniu czcionki',
  'ERR_FONT_NOT_WRITABLE' => 'niemożliwa do zapisania.',
  'ERR_FONT_UNKNOW_TYPE' => 'BŁĄD: Nieznany typ',
  'ERR_LOADFONTFILE' => 'BŁĄD: Błąd ładowania pliku czcionki!',
  'ERR_MISSING_CIDINFO' => 'Pola Informacje CID nie może być puste.',
  'ERR_NO_CUSTOM_FONT_PATH' => 'BŁĄD: Niedostępna ścieżka własnej czcionki!',
  'ERR_NO_FONT_PATH' => 'BŁĄD: Ścieżka czcionki jest niedostępna!',
  'ERR_PDF_NO_UPLOAD' => 'Błąd podczas przesyłania czcionki lub pliku metryki.',
  'HEAD_MAGNIFICATION' => 'Powiększenie nagłówka',
  'HEAD_MAGNIFICATION_INFO' => 'Powiększenie nagłówka.',
  'IMAGES' => 'Loga',
  'JS_ALERT_PDF_WRONG_EXTENSION' => 'Złe rozszerzenie pliku.',
  'K_CELL_HEIGHT_RATIO' => 'Współczynnik wysokości komórki',
  'K_CELL_HEIGHT_RATIO_INFO' => 'Jeżeli wysokość komórki jest mniejsza niż (Wysokość czcionki x Współczynnik wysokości komórki), to (Wysokość czcionki x Współczynnik wysokości komórki) jest używane jako wysokość komórki.<br>(Wysokość czcionki x Współczynnik wysokości komórki) jest także używane, jako wysokość komórki w przypadku, gdy wysokość nie jest zdefiniowana.',
  'K_SMALL_RATIO' => 'Zmniejszenie czcionki',
  'K_SMALL_RATIO_INFO' => 'Zmniejszenie rozmiaru czcionki.',
  'K_TITLE_MAGNIFICATION' => 'Powiększenie tytułu',
  'K_TITLE_MAGNIFICATION_INFO' => 'Powiększenie tytułu uwzględnia główny rozmiar czcionki.',
  'LBL_ADDFONTRESULT_TITLE' => 'Wynik procesu dodawania czcionki',
  'LBL_ADDFONT_TITLE' => 'Dodaj czcionkę PDF',
  'LBL_ADD_FONT' => 'Dodaj czcionkę',
  'LBL_ADD_FONT_BUTTON' => 'Dodaj',
  'LBL_ADMIN_WIZARD' => 'Kreator administracyjny',
  'LBL_ALERT_JPG_IMAGE' => 'Formatem pliku obrazka musi być typu JPEG.  Prześlij nowy plik z rozszerzeniem .jpg.',
  'LBL_ALERT_SIZE_RATIO' => 'Proporcje obrazka powinny wynosić od 1:1 do 10:1.  Obrazek zostanie przeskalowany.',
  'LBL_ALERT_SIZE_RATIO_QUOTES' => 'Proporcje obrazka powinny wynosić od 3:1 do 20:1.  Prześlij nowy plik z takimi parametrami.',
  'LBL_ALERT_TYPE_IMAGE' => 'Formatem pliku obrazka musi być typu JPEG lub PNG.  Prześlij nowy plik z rozszerzeniem .jpg lub .png.',
  'LBL_ALL' => 'Wszystko',
  'LBL_ALLOW_DEFAULT_SELECTION' => 'Zezwól użytkownikom na używanie tego konta do korespondencji wychodzącej:',
  'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Kiedy ta opcja jest zaznaczona, wszyscy użytkownicy będą mogli wysyłać wiadomości e-mail z tego samego konta używanego do wysyłania powiadomień i przypomnień.  Jeśli ta opcja nie jest zaznaczona, użytkownicy nadal będą mogli używać serwera poczty wychodzącej po podaniu ich własnych informacji o koncie.',
  'LBL_ALLOW_USER_TABS' => 'Zezwól użytkownikom na ukrywanie zakładek',
  'LBL_BACK' => 'Wstecz',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'Wybierz dostawcę usług e-mail:',
  'LBL_CONFIGURE_SETTINGS_TITLE' => 'Ustawienia systemowe',
  'LBL_CONFIG_AJAX' => 'Konfiguruj interfejs użytkownika AJAX',
  'LBL_CONFIG_AJAX_DESC' => 'Włącz lub wyłącz interfejs AJAX dla wybranych modułów.',
  'LBL_DELETE' => 'Usuń',
  'LBL_DISALBE_CONVERT_LEAD' => 'Wyłącz opcję przekształcania namiaru dla namiarów już przekształconych',
  'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Jeśli namiar został już przekształcony, włączenie tej opcji usunie czynność przekształcania namiaru.',
  'LBL_DISPLAYING_LOG' => 'Wyświetl log',
  'LBL_ENABLE_ACTION_MENU' => 'Wyświetl działania w menu',
  'LBL_ENABLE_ACTION_MENU_DESC' => 'Wybierz, aby wyświetlić działania Widoku szczegółowego i subpanelu w menu rozwijalnym. Jeśli opcja nie zostanie wybrana, działania będą wyświetlane jako osobne przyciski.',
  'LBL_ENABLE_MAILMERGE' => 'Włączyć scalanie poczty?',
  'LBL_EXCHANGE_LOGO' => 'Exchange',
  'LBL_EXCHANGE_SMTPPASS' => 'Hasło poczty Exchange:',
  'LBL_EXCHANGE_SMTPPORT' => 'Port serwera poczty Exchange:',
  'LBL_EXCHANGE_SMTPSERVER' => 'Serwer poczty Exchange:',
  'LBL_EXCHANGE_SMTPUSER' => 'Nazwa użytkownika poczty Exchange:',
  'LBL_FONTMANAGER_BUTTON' => 'Menedżer czcionek PDF',
  'LBL_FONTMANAGER_TITLE' => 'Menedżer czcionek Manager',
  'LBL_FONT_BOLD' => 'Pogrubienie',
  'LBL_FONT_BOLDITALIC' => 'Pogrubienie/Kursywa',
  'LBL_FONT_ITALIC' => 'Kursywa',
  'LBL_FONT_LIST_CIDINFO' => 'Informacje CID',
  'LBL_FONT_LIST_CIDINFO_INFO' => 'Przykład:<ul><li>Chinese Traditional :<br><pre>$enc=\\&#39;UniCNS-UTF16-H\\&#39;;<br>$cidinfo=array(\\&#39;Registry\\&#39;=>\\&#39;Adobe\\&#39;, \\&#39;Ordering\\&#39;=>\\&#39;CNS1\\&#39;,\\&#39;Supplement\\&#39;=>0);<br>include(\\&#39;include/tcpdf/fonts/uni2cid_ac15.php\\&#39;);</pre></li><li>Chinese Simplified :<br><pre>$enc=\\&#39;UniGB-UTF16-H\\&#39;;<br>$cidinfo=array(\\&#39;Registry\\&#39;=>\\&#39;Adobe\\&#39;, \\&#39;Ordering\\&#39;=>\\&#39;GB1\\&#39;,\\&#39;Supplement\\&#39;=>2);<br>include(\\&#39;include/tcpdf/fonts/uni2cid_ag15.php\\&#39;);</pre></li><li>Korean :<br><pre>$enc=\\&#39;UniKS-UTF16-H\\&#39;;<br>$cidinfo=array(\\&#39;Registry\\&#39;=>\\&#39;Adobe\\&#39;, \\&#39;Ordering\\&#39;=>\\&#39;Korea1\\&#39;,\\&#39;Supplement\\&#39;=>0);<br>include(\\&#39;include/tcpdf/fonts/uni2cid_ak12.php\\&#39;);</pre></li><li>Japanese :<br><pre>$enc=\\&#39;UniJIS-UTF16-H\\&#39;;<br>$cidinfo=array(\\&#39;Registry\\&#39;=>\\&#39;Adobe\\&#39;, \\&#39;Ordering\\&#39;=>\\&#39;Japan1\\&#39;,\\&#39;Supplement\\&#39;=>5);<br>include(\\&#39;include/tcpdf/fonts/uni2cid_aj16.php\\&#39;);</pre></li></ul>Więcej: www.tcpdf.org',
  'LBL_FONT_LIST_EMBEDDED' => 'Wbudowana',
  'LBL_FONT_LIST_EMBEDDED_INFO' => 'Zaznacz, jeżeli czcionka ma być wbudowana w plik',
  'LBL_FONT_LIST_ENC' => 'Kodowanie',
  'LBL_FONT_LIST_FILENAME' => 'Nazwa pliku',
  'LBL_FONT_LIST_FILESIZE' => 'Rozmiar czcionki (KB)',
  'LBL_FONT_LIST_NAME' => 'Nazwa',
  'LBL_FONT_LIST_STYLE' => 'Styl',
  'LBL_FONT_LIST_STYLE_INFO' => 'Styl czcionki',
  'LBL_FONT_LIST_TYPE' => 'Typ',
  'LBL_FONT_MOVE_DEFFILE' => 'Przenieś definicję czcionki do:',
  'LBL_FONT_MOVE_FILE' => 'Przenieś plik czcionki do:',
  'LBL_FONT_REGULAR' => 'Normalna',
  'LBL_FONT_TYPE_CID0' => 'CID-0',
  'LBL_FONT_TYPE_CORE' => 'Core',
  'LBL_FONT_TYPE_TRUETYPE' => 'TrueType',
  'LBL_FONT_TYPE_TRUETYPEU' => 'TrueTypeUnicode',
  'LBL_FONT_TYPE_TYPE1' => 'Type1',
  'LBL_GMAIL_LOGO' => 'Gmail Logo',
  'LBL_GMAIL_SMTPPASS' => 'Hasło poczty Gmail:',
  'LBL_GMAIL_SMTPUSER' => 'Adres e-mail poczty Gmail:',
  'LBL_IGNORE_SELF' => 'Samoczynne ignorowanie:',
  'LBL_IMG_RESIZED' => '(zmień rozmiar przy wyświetlaniu)',
  'LBL_IMPORT_MAX_RECORDS' => 'Import - maksymalna liczba wierszy:',
  'LBL_IMPORT_MAX_RECORDS_HELP' => 'Ustal liczbę wierszy dozwoloną przy imporcie z pliku. Jeśli liczba wierszy <br>w pliku będzie większa, użytkownik zostanie poinformowany. Jeśli nie wpisano<br> żadnej liczby, dozwolona będzie dowolna liczba wierszy.',
  'LBL_IT_WILL_BE_IGNORED' => 'będzie zignorowane',
  'LBL_JS_CONFIRM_DELETE_FONT' => 'Czy na pewno chcesz usunąć tę czcionkę?',
  'LBL_LDAP_ADMIN_PASSWORD' => 'Hasło:',
  'LBL_LDAP_ADMIN_USER' => 'Nazwa użytkownika:',
  'LBL_LDAP_ADMIN_USER_DESC' => 'Stosowana w celu wyszukiwania użytkowników Sugar. Możliwe jest utworzenie powiązania anonimowego.',
  'LBL_LDAP_AUTHENTICATION' => 'Uwierzytelnienie:',
  'LBL_LDAP_AUTHENTICATION_DESC' => 'Powiąż z serwerem LDAP używając określonych informacji o użytkowniku',
  'LBL_LDAP_AUTO_CREATE_USERS' => 'Automatyczne tworzenie użytkowników:',
  'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Jeżeli uwierzytelniony użytkownik nie istnieje, zostanie on utworzony w Sugar.',
  'LBL_LDAP_BIND_ATTRIBUTE' => 'Atrybut powiązania:',
  'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'Do powiązania użytkowników LDAP - przykłady:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;userPrincipalName] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid]',
  'LBL_LDAP_ENABLE' => 'Włącz uwierzytelnianie LDAP',
  'LBL_LDAP_ENC_KEY' => 'Klucz szyfrowania:',
  'LBL_LDAP_ENC_KEY_DESC' => 'Dla autentykacji SOAP, kiedy LDAP jest używany.',
  'LBL_LDAP_GROUP_ATTR' => 'Atrybut grupy:',
  'LBL_LDAP_GROUP_ATTR_DESC' => 'Atrybut grupy, który będzie stosowany do filtrowania Atrybutu użytkownika, np.: <em>memberUid</em>',
  'LBL_LDAP_GROUP_DN' => 'Grupa DN:',
  'LBL_LDAP_GROUP_DN_DESC' => 'Przykład: <em>ou=groups,dc=example,dc=com</em>',
  'LBL_LDAP_GROUP_MEMBERSHIP' => 'Przynależność do grupy:',
  'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Użytkownicy muszą należeć do określonej grupy',
  'LBL_LDAP_GROUP_NAME' => 'Nazwa grupy:',
  'LBL_LDAP_GROUP_NAME_DESC' => 'Przykład <em>cn=sugarcrm</em>',
  'LBL_LDAP_GROUP_USER_ATTR' => 'Atrybut użytkownika:',
  'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'Unikalny identyfikator osoby używany w celu sprawdzenia przynależności danej osoby do grupy, np.: <em>uid</em>',
  'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Atrybut logowania:',
  'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'Do wyszukiwania użytkowników LDAP - przykłady:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn]',
  'LBL_LDAP_SERVER_HOSTNAME' => 'Serwer:',
  'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Przykład: ldap.example.com lub ldaps://ldap.example.com dla SSL',
  'LBL_LDAP_SERVER_PORT' => 'Numer portu:',
  'LBL_LDAP_SERVER_PORT_DESC' => 'Przykład: <em>389 lub 636 dla SSL</em>',
  'LBL_LDAP_TITLE' => 'Wsparcie dla LDAP',
  'LBL_LDAP_USER_DN' => 'Użytkownik DN:',
  'LBL_LDAP_USER_DN_DESC' => 'Przykład: <em>ou=people,dc=example,dc=com</eM>',
  'LBL_LDAP_USER_FILTER' => 'Filtr użytkownika:',
  'LBL_LDAP_USER_FILTER_DESC' => 'Dowolny dodatkowy parametr stosowany w celu uwierzytelniania użytkowników, np.<em>is_sugar_user=1 or (is_sugar_user=1)(is_sales=1)</em>',
  'LBL_LEAD_CONV_OPTION' => 'Opcje konwersji namiaru',
  'LBL_LOADING' => 'Ładownie...',
  'LBL_LOGGER' => 'Ustawienia dziennika',
  'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Domyślny format daty',
  'LBL_LOGGER_FILENAME' => 'Nazwa pliku dziennika logów',
  'LBL_LOGGER_FILENAME_SUFFIX' => 'Dołącz po nazwie pliku',
  'LBL_LOGGER_FILE_EXTENSION' => 'Rozszerzenie',
  'LBL_LOGGER_LOG_LEVEL' => 'Poziom logowania',
  'LBL_LOGGER_MAX_LOGS' => 'Maksymalna liczba wpisów (przed przewinięciem)',
  'LBL_LOGGER_MAX_LOG_SIZE' => 'Maksymalna wielkość pliku dziennika',
  'LBL_LOGO' => 'Logo',
  'LBL_LOGVIEW' => 'Przeglądaj dziennik logów',
  'LBL_LOG_NOT_CHANGED' => 'Dziennik logów nie zmienił się',
  'LBL_MAILMERGE' => 'Scalanie poczty',
  'LBL_MAILMERGE_DESC' => 'Ta flaga powinna być zaznaczona tylko jeśli posiadasz wtyczkę Sugar dla Microsoft&reg; Word&reg;.',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Użyć uwierzytelnienia SMTP?',
  'LBL_MAIL_SMTPPASS' => 'Hasło SMTP:',
  'LBL_MAIL_SMTPPORT' => 'Port SMTP:',
  'LBL_MAIL_SMTPSERVER' => 'Serwer SMTP:',
  'LBL_MAIL_SMTPTYPE' => 'Typ serwera SMTP:',
  'LBL_MAIL_SMTPUSER' => 'Nazwa użytkownika SMTP:',
  'LBL_MAIL_SMTP_SETTINGS' => 'Ustawienia serwera SMTP',
  'LBL_MARKING_WHERE_START_LOGGING' => 'Zaznacz, od kiedy rozpocząć zapis dziennika',
  'LBL_MARK_POINT' => 'Punkt zaznaczenia',
  'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimalny interwał automatycznego odświeżania dashletu',
  'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'To jest minimalna wartość jaką można wybrać dla opcji automatycznego odświeżania dashletów. Ustawienie &#39;Nigdy&#39; wyłącza odświeżanie całkowicie.',
  'LBL_MOBILE_MOD_REPORTS_RESTRICTION' => '* Moduł raportów dostępny jest jedynie dla natywnych klientów Sugar Mobile',
  'LBL_MODULE_FAVICON' => 'Wyświetl ikonę modułu jako favicon',
  'LBL_MODULE_FAVICON_HELP' => 'Jeżeli jesteś w module z ikoną, użyj ikony modułu jako favicon, zamiast ikony motywu widocznej w zakładce przeglądarki.',
  'LBL_MODULE_ID' => 'Konfigurator',
  'LBL_MODULE_NAME' => 'Ustawienia systemowe',
  'LBL_MODULE_TITLE' => 'Interfejs użytkownika',
  'LBL_NEXT_' => 'Następny>>',
  'LBL_NOTIFY_FROMADDRESS' => 'Adres "Od":',
  'LBL_NOTIFY_SUBJECT' => 'Temat:',
  'LBL_OC_STATUS' => 'Domyślny status klienta Offline',
  'LBL_OC_STATUS_DESC' => 'Zaznacz to pole jeśli użytkownicy mają mieć dostęp do klienta Offline. Możesz skonfigurować dostęp indywidualnie dla każdego z użytkowników',
  'LBL_PDFMODULE_NAME' => 'Ustawienia PDF',
  'LBL_PDF_ENCODING_TABLE' => 'Tabela kodowania',
  'LBL_PDF_ENCODING_TABLE_INFO' => 'Nazwa tabeli kodowania.<br>Opcja ta jest ignorowana dla TrueType Unicode, OpenType Unicode i symboli.<br>Kodowanie określa powiązania pomiędzy kodem (od 0 do 255) a znakiem zawartym w czcionce.<br>Pierwsze 128 odpowiadają kodowi ASCII.',
  'LBL_PDF_FONT_FILE' => 'Plik czcionki',
  'LBL_PDF_FONT_FILE_INFO' => '.ttf lub .otf lub .pfb',
  'LBL_PDF_INSTRUCTIONS' => 'Instrukcje',
  'LBL_PDF_METRIC_FILE' => 'Plik metryki',
  'LBL_PDF_METRIC_FILE_INFO' => 'plik .afm lub .ufm',
  'LBL_PDF_PATCH' => 'Ścieżka',
  'LBL_PDF_PATCH_INFO' => 'Własne modyfikacje kodowania. Napisz tablicę PDF.<br>Przykład:<br>ISO-8859-1 nie zawiera symbolu euro. Aby go dodać jako pozycję 164, wpisz "array(164=>\\&#39;Euro\\&#39;)".',
  'LBL_PORTAL_ON' => 'Włącz zarządzanie użytkownikami portalu',
  'LBL_PORTAL_ON_DESC' => 'Umożliwia użytkownikom zarządzanie informacjami o użytkownikach portalu poprzez rekord kontaktu. Użytkownicy portalu mają dostęp do zadań, błędów, artykułów bazy wiedzy i innych danych poprzez aplikację portalu Sugar.',
  'LBL_PORTAL_TITLE' => 'Portal samoobsługowy klientów',
  'LBL_PROXY_AUTH' => 'Uwierzytelnienie?',
  'LBL_PROXY_HOST' => 'Proxy host',
  'LBL_PROXY_ON' => 'Użyć serwera proxy?',
  'LBL_PROXY_ON_DESC' => 'Skonfiguruj adres serwera proxy i ustawienia autoryzacji',
  'LBL_PROXY_PASSWORD' => 'Hasło',
  'LBL_PROXY_PORT' => 'Port',
  'LBL_PROXY_TITLE' => 'Ustawienia proxy',
  'LBL_PROXY_USERNAME' => 'Nazwa użytkownika',
  'LBL_REFRESH_FROM_MARK' => 'Odśwież od puntu zaznaczenia',
  'LBL_REG_EXP' => 'Zarejestrowanie wygasa:',
  'LBL_REMOVE' => 'usuń',
  'LBL_RESTORE_BUTTON_LABEL' => 'Przywróć',
  'LBL_SEARCH' => 'Wyszukiwanie:',
  'LBL_SESSION_TIMEOUT_TOOLTIP' => 'Wygaśnięcie sesji Portalu występuje w istniejących wersjach Portalu Sugar w 6.5 i starszych.',
  'LBL_SKYPEOUT_ON' => 'Włącz integrację ze SkypeOut&reg;',
  'LBL_SKYPEOUT_ON_DESC' => 'Funkcja umożliwia połączenie z wybranym numerem telefonu za pomocą SkypeOut&reg;. Aby skorzystać z tej funkcji kliknij w wybrany numer. UWAGA: prawidłowy format numeru: "+"  "Kod Kraju" "Numer", np. +48 610000000. Więcej na: <a href="http://www.skype.com/help/faq/skypeout.html#calling" target="skype">skype&reg; faq</a>',
  'LBL_SKYPEOUT_TITLE' => 'SkypeOut&reg;',
  'LBL_STATUS_FONT_ERROR' => 'BŁĄD: Czcionka nie została dodana. Informacje odnajdziesz w logu.',
  'LBL_STATUS_FONT_SUCCESS' => 'POWODZENIE: Czcionka została dodana do SugarCRM.',
  'LBL_SYSTEM_SETTINGS' => 'Ustawienia systemu',
  'LBL_USE_REAL_NAMES' => 'Pokaż pełną nazwę użytkownika',
  'LBL_USE_REAL_NAMES_DESC' => 'Wyświetl pełne imiona i nazwiska użytkowników zamiast nazw użytkowników w polach przydzielenia.',
  'LBL_VCAL_PERIOD' => 'Okres czasu uaktualniania vCal:',
  'LBL_WELCOME' => 'Witamy',
  'LBL_WIRELESS_LIST_ENTRIES' => 'Maksymalna liczba elementów listy na stronie',
  'LBL_WIRELESS_SERVER_URL' => 'Serwer usługi Sugar Mobile Plus',
  'LBL_WIRELESS_SUBPANEL_LIST_ENTRIES' => 'Maksymalna liczba subpaneli na stronie',
  'LBL_WIZARD_BACK_BUTTON' => '< Wstecz',
  'LBL_WIZARD_CONTINUE_BUTTON' => 'Kontynuuj',
  'LBL_WIZARD_FINISH' => 'Kliknij <b>Kontynuuj</b>, aby skonfigurować swoje opcje użytkownika.<br/><br /><br />Aby skonfigurować opcje systemu, kliknij <a href="index.php?module=Administration&action=index" target="_blank">tutaj</a>.',
  'LBL_WIZARD_FINISH_BUTTON' => 'Zakończ',
  'LBL_WIZARD_FINISH_TAB' => 'Zakończ',
  'LBL_WIZARD_FINISH_TITLE' => 'Wstępna konfiguracja systemu zakończona',
  'LBL_WIZARD_LOCALE_DESC' => 'Określ strefę czasową wyświetlaną w systemie. Opcje wprowadzone przez Ciebie będą domyślne dla całego systemu. Użytkownicy będą mogli zmienić swoje preferencje.',
  'LBL_WIZARD_NEXT_BUTTON' => 'Dalej >',
  'LBL_WIZARD_SKIP_BUTTON' => 'Pomiń',
  'LBL_WIZARD_SMTP_DESC' => 'Wprowadź konto e-mail, które będzie używane do wysyłania wiadomości e-mail, tj. powiadomienia o przydzieleniu oraz nowe hasła użytkownika. Użytkownicy będą otrzymywać wiadomości e-mail z systemu z adresu określonego konta.',
  'LBL_WIZARD_SYSTEM_DESC' => 'Dodaj nazwę oraz logo firmy.',
  'LBL_WIZARD_SYSTEM_TITLE' => 'Nazwa',
  'LBL_WIZARD_TITLE' => 'Kreator administratora',
  'LBL_WIZARD_WELCOME' => 'Kliknij <b>Dalej</b> aby dopasować, zlokalizować i skonfigurować Sugar. Jeżeli chcesz zrobić to potem, kliknij <b>Pomiń</b>.',
  'LBL_WIZARD_WELCOME_TAB' => 'Witamy',
  'LBL_WIZARD_WELCOME_TITLE' => 'Witamy w Sugar!',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Hasło poczty Yahoo!:',
  'LBL_YAHOOMAIL_SMTPUSER' => 'ID poczty Yahoo!:',
  'LBL_YAHOO_MAIL' => 'Yahoo Mail',
  'LBL_YOUR_IP_ADDRESS' => 'Twój adres IP to',
  'LBL_YOUR_PROCESS_ID' => 'ID Twojego procesu',
  'LDAP_ENC_KEY_NO_FUNC_DESC' => 'Rozszerzenie php_mcrypt musi być włączone w pliku php.ini.',
  'LEAD_CONV_OPT_HELP' => '<b>Kopiuj</b> - Tworzy obiekty na podstawie Namiaru oraz wiąże kopie wszystkich wydarzeń powiązanych z Namiarem z nowo powstałymi rekordami określonymi w czasie konwersji. Kopie wydarzeń są tworzone dla każdego z nowopowstałych rekordów.<br><br><b>Przenieś</b> - Przenosi powiązania ze wszystkimi wydarzeniami powiązanymi z Namiarem do nowopowstałego rekordu w czasie konwersji.<br><br><b>Nie rób nic</b> - Wydarzenia powiązane z Namiarem nie są brane pod uwagę w czasie konwersji. Pozostaną one powiązane tylko z Namiarem.',
  'LIST_ENTRIES_PER_LISTVIEW' => 'Maksymalna liczba elementów listy na stronie',
  'LIST_ENTRIES_PER_SUBPANEL' => 'Maksymalna liczba subpaneli na stronie',
  'LOCK_HOMEPAGE' => 'Wyłącz opcję dostosowania strony głównej dla użytkownika',
  'LOCK_HOMEPAGE_HELP' => 'To ustawienie zapobiega:<BR> 1) dodawaniu dashletów do strony głównej, <BR>2) zmiany położenia dashletów na stronie głównej poprzez przeciąganie i upuszczanie.',
  'LOCK_SUBPANELS' => 'Wyłącz opcję dostosowania subpaneli dla użytkownika',
  'LOG_MEMORY_USAGE' => 'Notuj użycie pamięci w dzienniku logu',
  'LOG_SLOW_QUERIES' => 'Notuj wolne zapytania do bazy danych w dzienniku logu',
  'MAX_DASHLETS' => 'Maksymalna liczba dashletów na stronie głównej',
  'NEW_LOGO' => 'Wybierz logo:',
  'NEW_LOGO_HELP' => 'Dopuszczalny format loga to .PNG lub .JPG.<BR>Maksymalna wysokość to 17 pikseli, a maksymalna szerokość to 450 pikseli. Obraz przekraczający te rozmiary zostanie zeskalowany do maksymalnych wymiarów.',
  'NEW_LOGO_HELP_NO_SPACE' => 'Obraz powinien być w formacie .jpg lub .png. Maksymalna wysokość to 17 pikseli, a szerokość to 450 pikseli. Każdy obraz przekraczający którykolwiek z wymiaraów zostanie zeskalowany do maksymalnych możliwych rozmiarów. Nazwa pliku nie może zawierać spacji.',
  'NEW_QUOTE_LOGO' => 'Załaduj nowe logo oferty',
  'NEW_QUOTE_LOGO_HELP' => 'Wymagany format pliku to .jpg.<BR>Rekomendowany rozmiar to 867x74 pikseli.',
  'PDF_ACL_ACCESS' => 'Kontrola dostępu',
  'PDF_ACL_ACCESS_INFO' => 'Domyśla kontrola dostępu generowania dokumentów PDF.',
  'PDF_AUTHOR' => 'Autor',
  'PDF_AUTHOR_INFO' => 'Autor wyświetlany w dokumencie.',
  'PDF_COMPRESSION' => 'Kompresja',
  'PDF_COMPRESSION_INFO' => 'Aktywuje/deaktywuje kompresję strony. <br>W przypadku aktywacji, wewnętrzna reprezentacja każdej strony jest skompresowana, co prowadzi do współczynnika konwersji ok. 2 w wynikowym dokumencie.',
  'PDF_CREATOR' => 'Kreator PDF',
  'PDF_CREATOR_INFO' => 'Określa kreator dokumentu. <br>Zwykle jest to nazwa aplikacji, która generuje PDF.',
  'PDF_FILENAME' => 'Domyślna nazwa pliku',
  'PDF_FILENAME_INFO' => 'Domyślna nazwa pliku dla wygenerowanych plików PDF',
  'PDF_GD_WARNING' => 'Biblioteka GD dla PHP nie jest zainstalowana. Bez zainstalowanej biblioteki GD tylko logo w formacie JPEG może zostać wyświetlony w dokumentach PDF.',
  'PDF_HEADER_LOGO' => 'PDF dla ofert',
  'PDF_HEADER_LOGO_INFO' => 'Ten obraz jest wyświetlany w domyślnym nagłówku w ofertach PDF.',
  'PDF_HEADER_LOGO_WIDTH' => 'Szerokość obrazu dla oferty',
  'PDF_HEADER_LOGO_WIDTH_INFO' => 'Zmień skalę dla załadowanego obrazu oferty. (tylko TCPDF)',
  'PDF_HEADER_STRING' => 'Nagłówek',
  'PDF_HEADER_STRING_INFO' => 'Opis nagłówka',
  'PDF_HEADER_TITLE' => 'Tytuł',
  'PDF_HEADER_TITLE_INFO' => 'Tytuł wyświetlany w dokumencie',
  'PDF_IMAGE_SCALE_RATIO' => 'Współczynnik skalowalności obrazu',
  'PDF_IMAGE_SCALE_RATIO_INFO' => 'Współczynnik skalowalności obrazu',
  'PDF_INSTRUCTIONS_ADD_FONT' => 'Czcionki wspierane przez SugarPDF :<br /><ul><br /><li>TrueTypeUnicode (UTF-8 Unicode)</li><br /><li>OpenTypeUnicode</li><br /><li>TrueType</li><br /><li>OpenType</li><br /><li>Type1</li><br /><li>CID-0</li><br /></ul><br /><br><br />Jeżeli wybierzesz opcję niewbudowywania czcionki do PDF, wygenerowany plik PDF będzie lżejszy, ale w przypadku braku danej czcionki w systemie zostanie użyty zamiennik dostępny w Twoim systemie.<br /><br><br><br />Dodanie czcionką PDF do SugarCRM wymaga postępowania wg kroków 1 i 2 dokumentacji czcionek TCPDF dostępnej w sekcji DOCS na stronie <a href="http://www.tcpdf.org" target="_blank">TCPDF</a>.<br /><br><br>Pfm2afm i ttf2ufm są dostępne w czcionkach w pakiecie TCPDF, który można pobrać z sekcji "DOWNLOAD" na stronie <a href="http://www.tcpdf.org" target="_blank">TCPDF</a>.<br /><br><br>Załaduj metrykę wygenerowaną w kroku 2 i swój plik czcionki poniżej.',
  'PDF_JPEG_QUALITY' => 'Jakość JPEG (1-100)',
  'PDF_JPEG_QUALITY_INFO' => 'Ustaw jakość kompresji JPEG (1-100)',
  'PDF_KEYWORDS' => 'Słowa kluczowe',
  'PDF_KEYWORDS_INFO' => 'Powiąż słowa kluczowe z dokumentem, zazwyczaj w formie "klucz1 klucz2..."',
  'PDF_NEW_HEADER_LOGO' => 'Wybierz nowy obraz dla ofert',
  'PDF_NEW_HEADER_LOGO_INFO' => 'Format pliku może być zarówno .jpg oraz .png. (Tylko .jpg dla EZPDF)<BR>Zalecany rozmiar to 867x74 px.',
  'PDF_NEW_SMALL_HEADER_LOGO' => 'Wybierz nowy obraz dla raportów',
  'PDF_NEW_SMALL_HEADER_LOGO_INFO' => 'Format pliku może być zarówno .jpg oraz .png. (Tylko .jpg dla EZPDF)<BR>Zalecany rozmiar to 212x40 px.',
  'PDF_OWNER_PASSWORD' => 'Hasło właściciela',
  'PDF_OWNER_PASSWORD_INFO' => 'W przypadku braku hasła dokument będzie dostępny dla innych użytkowników. <br>Jeżeli podasz hasło użytkownika, przeglądarka PDF będzie je wymagać przed wyświetleniem. <br>Hasło nadrzędne, w przypadku, gdy jest inne niż hasło użytkownika, może być stosowane w celu uzyskania pełnego dostępu.',
  'PDF_PDF_VERSION' => 'Wersja PDF',
  'PDF_PDF_VERSION_INFO' => 'Ustaw wersję PDF.',
  'PDF_PROTECTION' => 'Ochrona dokumentu',
  'PDF_PROTECTION_INFO' => 'Ustaw ochronę dokumentu<br>- kopiowanie: umożliwia kopiowanie tekstu i obrazków do schowka<br>- drukowanie: umożliwia drukowanie dokumentu<br>-modyfikowanie: umożliwia edycję dokumentu (z wyłączeniem adnotacji)<br>- adnotacje: umożliwia dodawanie adnotacji<br>Uwaga: modyfikacje są możliwe w przypadku użytkowników posiadających pełną wersję produktów Acrobat.',
  'PDF_SMALL_HEADER_LOGO' => 'Dla raportów PDF',
  'PDF_SMALL_HEADER_LOGO_INFO' => 'Ten obraz jest wyświetlany w nagłówku raportów PDF.<br> Obraz może także wyświetlany w lewym górnym rogu systemu SugarCRM.',
  'PDF_SMALL_HEADER_LOGO_WIDTH' => 'Szerokość obrazu dla raportu',
  'PDF_SMALL_HEADER_LOGO_WIDTH_INFO' => 'Zmień skalę dla załadowanego obrazu raportu. (tylko TCPDF)',
  'PDF_SUBJECT' => 'Temat',
  'PDF_SUBJECT_INFO' => 'Temat wyświetlany we właściwościach dokumentu.',
  'PDF_TITLE' => 'Tytuł',
  'PDF_TITLE_INFO' => 'Tytuł wyświetlany we właściwościach dokumentu.',
  'PDF_UNIT' => 'Jednostka',
  'PDF_UNIT_INFO' => 'Jednostka miary dokumentu',
  'PDF_USER_PASSWORD' => 'Hasło użytkownika',
  'PDF_USER_PASSWORD_INFO' => 'W przypadku braku hasła dokument będzie dostępny dla innych użytkowników. <br>Jeżeli podasz hasło użytkownika, przeglądarka PDF będzie je wymagać przed wyświetleniem. <br>Hasło nadrzędne, w przypadku gdy jest inne niż hasło użytkownika, może być stosowane w celu uzyskania pełnego dostępu.',
  'QUOTES_CURRENT_LOGO' => 'Logo ofert',
  'SESSION_TIMEOUT' => 'Limit czasu ważności sesji w Portalu klienta',
  'SESSION_TIMEOUT_UNITS' => 'sekundy',
  'SHOW_DOWNLOADS_TAB' => 'Wyświetl zakładki pobierania',
  'SHOW_DOWNLOADS_TAB_HELP' => 'Kiedy zaznaczone, zakładka pobierania pojawi się w ustawieniach użytkownika i dostarczy użytkownikom dostęp do rozszerzeń Sugar i innych dostępnych plików',
  'SLOW_QUERY_TIME_MSEC' => 'Próg czasu wykonywania określający wolne zapytania (msec)',
  'STACK_TRACE_ERRORS' => 'Wyświetlaj stos śladów błędów',
  'SUGARPDF_ADVANCED_SETTINGS' => 'Ustawienia zaawansowane',
  'SUGARPDF_BASIC_SETTINGS' => 'Właściwości dokumentu',
  'SUGARPDF_LOGO_SETTINGS' => 'Obrazy',
  'SYSTEM_NAME' => 'Nazwa systemu:',
  'SYSTEM_NAME_HELP' => 'To jest nazwa wyświetlana na pasku tytułowym Twojej przeglądarki.',
  'SYSTEM_NAME_WIZARD' => 'Nazwa:',
  'UPLOAD_MAX_SIZE' => 'Maksymalna wielkość przesyłania',
  'VERIFY_CLIENT_IP' => 'Sprawdzaj numer IP użytkownika',
  'vCAL_HELP' => 'Użyj tego ustawienia, aby określić ile miesięcy naprzód (od aktualnej daty) system będzie podawał informacje o statusie Wolny/Zajęty. Aby wyłączyć ten status, zaznacz 0. Możliwa liczba miesięcy od 1 do 12.',
);

