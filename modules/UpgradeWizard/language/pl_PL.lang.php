<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
$mod_strings = array(
	'DESC_MODULES_INSTALLED'					=> 'Zainstalowano następujące moduły:',
	'DESC_MODULES_QUEUED'						=> 'Następujące moduły są przygotowane do Instalacji:',

	'ERR_UW_CANNOT_DETERMINE_GROUP'				=> 'Nie można określić grupy',
	'ERR_UW_CANNOT_DETERMINE_USER'				=> 'NIe można określić właściciela',
	'ERR_UW_CONFIG_WRITE'						=> 'Błąd uaktualnienia informacji odnośnie nowej wersji w pliku config.php.',
	'ERR_UW_CONFIG'								=> 'Ustaw możliwość zapisu w pliku config.php i załaduj ponownie tę stronę.',
	'ERR_UW_DIR_NOT_WRITABLE'					=> 'Katalog uniemożliwia zapis',
	'ERR_UW_FILE_NOT_COPIED'					=> 'Plik nie został skopiowany',
	'ERR_UW_FILE_NOT_DELETED'					=> 'Problem z usunięciem pakietu',
	'ERR_UW_FILE_NOT_READABLE'					=> 'Nie można odczytać pliku.',
	'ERR_UW_FILE_NOT_WRITABLE'					=> 'Nie można przenieść ani zapisać pliku',
	'ERR_UW_FLAVOR_2'							=> 'Uaktualnij edycję: ',
	'ERR_UW_FLAVOR'								=> 'Edycja systemu SugarCRM: ',
	'ERR_UW_LOG_FILE_UNWRITABLE'				=> 'Plik ./upgradeWizard.log nie mógł zostać utworzony/zapisany. Popraw uprawnienia w Twoim katalogu SugarCRM.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD'				=> 'Funkcja mbstring.func_overload ma ustawioną wartość większą niż 1. <br/>Zmień ją w pliku php.ini i przeładuj serwer sieciowy.',
	'ERR_UW_MYSQL_VERSION'						=> 'SugarCRM wymaga wersji MySQL  4.1.2 lub wyższej. Znaleziono:',
	'ERR_UW_OCI8_VERSION'				        => 'Twoja wersja Oracle nie jest obsługiwana przez Sugar. Musisz zainstalować wersję, która będzie kompatybilna z systemem SugarCRM. Zweryfikuj macierz zgodności (Compatibility Matrix) i informacje o wydaniu (Release Notes) pod kątem obsługiwanych wersji Oracle: ',
	'ERR_UW_NO_FILE_UPLOADED'					=> 'Podaj nazwę pliku i spróbuj ponownie!',
	'ERR_UW_NO_FILES'							=> 'Wykryto błąd. Nie znaleziono plików do sprawdzenia.',
	'ERR_UW_NO_MANIFEST'						=> 'Archiwum zip nie zawiera pliku manifest.php. Nie można kontynuować.',
	'ERR_UW_NO_VIEW'							=> 'Określono nieprawidłowy widok.',
	'ERR_UW_NO_VIEW2'							=> 'Widok nie został zdefiniowany. Idź do głównej strony panelu administracyjnego, aby przejść do tej strony.',
	'ERR_UW_NOT_VALID_UPLOAD'					=> 'Nieprawidłowy plik do załadownia.',
	'ERR_UW_NO_CREATE_TMP_DIR'					=> 'Nie można utworzyć katalogu tymczasowego. Sprawdź prawa do plików.',
	'ERR_UW_ONLY_PATCHES'						=> 'Tylko na tej stronie możesz załadować poprawki.',
    'ERR_UW_PREFLIGHT_ERRORS'					=> 'Znaleziono błędy podzczas wstępnej weryfikacji',
	'ERR_UW_UPLOAD_ERR'							=> 'Wystąpił problem podczas załadowania pliku. Spróbuj jeszcze raz!<br>\n',
	'ERR_UW_VERSION'							=> 'Wersja systemu SugarCRM:',
    'ERR_UW_WRONG_TYPE'							=> 'Nie można uruchomić tej strony ',
	'ERR_UW_PHP_FILE_ERRORS'					=> array(
													1 => 'Ładowane pliki przekraczają dopuszczalną wielkość, określoną w dyrektywie upload_max_filesize w pliku php.ini.',
													2 => 'Ładowane pliki przekraczają dopuszczalną wielkość, określoną w dyrektywie MAX_FILE_SIZE w formularzu HTML.',
													3 => 'Pliki zostały załadowane częściowo.',
													4 => 'Żadne pliki nie zostały załadowane.',
													5 => 'Nieznany błąd.',
													6 => 'Brak foldera tymczasowego.',
													7 => 'Nie można zapisać pliku na dysku.',
													8 => 'Ładowanie pliku zatrzymane z powodu rozszerzenia.',
),

    'ERROR_HT_NO_WRITE'                         => 'Nie można zapisać do pliku: %s',
    'ERROR_MANIFEST_TYPE'                       => 'Plik Manifest musi określać typ pakietu.',
    'ERROR_PACKAGE_TYPE'                        => 'Plik Manifest wskazuje niesklasyfikowany typ pakietu: %s',
    'ERROR_VERSION_INCOMPATIBLE'                => 'Dodany plik nie jest kompatybilny z wersją aplikacji Sugar: %s',
    'ERROR_FLAVOR_INCOMPATIBLE'                 => 'Dodany plik nie jest kompatybilny z edycją (Community, Professional lub Enterprise) aplikacji Sugar: %s',

    'ERROR_UW_CONFIG_DB'                        => 'Błąd zapisywania zmiennej konfiguracji %s do bazy danych (klucz %s, wartość %s).',
    'ERR_NOT_ADMIN'                             => "Nieautoryzowany dostęp do modułu administracyjnego.",
    'ERR_NO_VIEW_ACCESS_REASON'                 => 'Nie posiadasz uprawnień dostępu do tej strony.',

    'LBL_BUTTON_BACK'							=> '< Powrót',
	'LBL_BUTTON_CANCEL'							=> 'Anuluj',
	'LBL_BUTTON_DELETE'							=> 'Usuń pakiet',
	'LBL_BUTTON_DONE'							=> 'Zrobione',
	'LBL_BUTTON_EXIT'							=> 'Wyjdź',
	'LBL_BUTTON_INSTALL'						=> 'Wstępne uaktualnienie',
	'LBL_BUTTON_NEXT'							=> 'Dalej >',
	'LBL_BUTTON_RECHECK'						=> 'Sprawdź ponownie',
	'LBL_BUTTON_RESTART'						=> 'Restartuj',

	'LBL_UPLOAD_UPGRADE'						=> 'Załaduj poprawkę',
	'LBL_UPLOAD_FILE_NOT_FOUND'					=> 'Nie znaleziono wczytanego pliku',
	'LBL_UW_BACKUP_FILES_EXIST_TITLE'			=> 'Kopia zapasowa pliku',
	'LBL_UW_BACKUP_FILES_EXIST'					=> 'Pliki kopii zapasowej z tego uaktualnienia znajdują się w',
	'LBL_UW_BACKUP'								=> 'Kopia zapasowa pliku',
	'LBL_UW_CANCEL_DESC'						=> 'Proces aktualizacji został zatrzymany. Wszystkie pliki tymczasowe i załadowanie archiwa zip zostały usunięte.',
	'LBL_UW_CHARSET_SCHEMA_CHANGE'				=> 'Zmiany schematu kodowania znaków',
	'LBL_UW_CHECK_ALL'							=> 'Sprawdź wszystko',
	'LBL_UW_CHECKLIST'							=> 'Kroki uaktualniania',
	'LBL_UW_COMMIT_ADD_TASK_DESC_1'				=> "Kopie bezpieczeństwa nadpisanych plików znajdują się w następującym katalogu: \n",
	'LBL_UW_COMMIT_ADD_TASK_DESC_2'				=> "Połącz ręcznie następujące pliki: \n",
	'LBL_UW_COMMIT_ADD_TASK_NAME'				=> 'Proces aktualizacji: Manualne łączenie plików',
	'LBL_UW_COMMIT_ADD_TASK_OVERVIEW'			=> 'Użyj najlepszej dla siebie metody porównania plików podczas scalania. Do czasu zakończenia procesu aktualizacji Twoja instalacja będzie niestabilna, a proces pozostanie niezakończony.',
	'LBL_UW_COMPLETE'							=> 'Zakończono',
	'LBL_UW_CONTINUE_CONFIRMATION'              => 'Nowa wersja Sugar zawiera nową umowę licencyjną. Czy chcesz kontynuować?',
	'LBL_UW_COMPLIANCE_ALL_OK'					=> 'Wszystkie wymagane ustawienia systemowe są właściwe',
	'LBL_UW_COMPLIANCE_CALLTIME'				=> 'Ustawienia PHP: Call Time Pass By Reference',
	'LBL_UW_COMPLIANCE_CURL'					=> 'Moduł cURL',
	'LBL_UW_COMPLIANCE_IMAP'					=> 'Moduł IMAP',
	'LBL_UW_COMPLIANCE_MBSTRING'				=> 'Moduł MBStrings',
	'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD'	=> 'Parametr MBStrings mbstring.func_overload',
	'LBL_UW_COMPLIANCE_MEMORY'					=> 'Ustawienie PHP: Limit pamięci',
    'LBL_UW_COMPLIANCE_STREAM'                  => 'Ustawienie PHP: Przesyłanie strumieniowe',
	'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES'		=> 'MS SQL Server i PHP Magic Quotes GPC',
	'LBL_UW_COMPLIANCE_MYSQL'					=> 'Minimalna wersja MySQL',
    'LBL_UW_COMPLIANCE_DB'                      => 'Minimalna wersja bazy danych',
	'LBL_UW_COMPLIANCE_PHP_INI'					=> 'Położenie pliku php.ini',
	'LBL_UW_COMPLIANCE_PHP_VERSION'				=> 'Minimalna wersja PHP',
	'LBL_UW_COMPLIANCE_SAFEMODE'				=> 'Ustawienia PHP: Tryb bezpieczny',
	'LBL_UW_COMPLIANCE_TITLE'					=> 'Sprawdzenie ustawień serwera',
	'LBL_UW_COMPLIANCE_TITLE2'					=> 'Wykryte ustawienia',
	'LBL_UW_COMPLIANCE_XML'						=> 'Parser XML',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE'				=> 'Obsługa ZIP',

	'LBL_UW_COPIED_FILES_TITLE'					=> 'Pliki zostały skopiowane pomyślnie',
	'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE'			=> 'Zmiany dostosowywanych schematów tabeli',

	'LBL_UW_DB_CHOICE1'							=> 'Kreator aktualizacji wywołuje SQL',
	'LBL_UW_DB_CHOICE2'							=> 'Ręczne zapytania SQL',
	'LBL_UW_DB_INSERT_FAILED'					=> 'Operacja INSERT nie powiodła się — wyniki porównania róznią się',
	'LBL_UW_DB_ISSUES_PERMS'					=> 'Brak uprawnień',
	'LBL_UW_DB_ISSUES'							=> 'Problemy z bazą danych',
	'LBL_UW_DB_METHOD'							=> 'Metoda aktualizacji bazy danych',
	'LBL_UW_DB_NO_ADD_COLUMN'					=> 'ALTER TABLE [table] ADD COLUMN [column]',
	'LBL_UW_DB_NO_CHANGE_COLUMN'				=> 'ALTER TABLE [table] CHANGE COLUMN [column]',
	'LBL_UW_DB_NO_CREATE'						=> 'CREATE TABLE [table]',
	'LBL_UW_DB_NO_DELETE'						=> 'DELETE FROM [table]',
	'LBL_UW_DB_NO_DROP_COLUMN'					=> 'ALTER TABLE [table] DROP COLUMN [column]',
	'LBL_UW_DB_NO_DROP_TABLE'					=> 'DROP TABLE [table]',
	'LBL_UW_DB_NO_ERRORS'						=> 'Nie stwierdzono braku uprawnień',
	'LBL_UW_DB_NO_INSERT'						=> 'INSERT INTO [table]',
	'LBL_UW_DB_NO_SELECT'						=> 'SELECT [x] FROM [table]',
	'LBL_UW_DB_NO_UPDATE'						=> 'UPDATE [table]',
	'LBL_UW_DB_PERMS'							=> 'Niezbędne uprawnienia',

	'LBL_UW_DESC_MODULES_INSTALLED'				=> 'Zainstalowano następujące pakiety aktualizacyjne:',
	'LBL_UW_END_DESC'							=> 'Twój system został zaktualizwoany.',
	'LBL_UW_END_DESC2'							=> 'Jeżeli wybrano ręczne wykonanie kroków, takich jak łączenie plików lub zapytania SQL, należy zrobić to teraz. System będzie niestabilny, dopóki nie przeprowadzisz tych kroków.',
	'LBL_UW_END_LOGOUT_PRE'						=> 'Aktualizacja została zakończona.',
	'LBL_UW_END_LOGOUT_PRE2'					=> 'Wybierz Zrobione, aby wyjść z Kreatora uaktualnień.',
	'LBL_UW_END_LOGOUT'							=> 'Jeżeli planujesz zastosować kolejny pakiet uaktualnień przy użyciu Kreatora uaktualnień, zanim to zrobisz, wyloguj się i zaloguj się ponownie.',
	'LBL_UW_END_LOGOUT2'						=> 'Wyloguj',
	'LBL_UW_REPAIR_INDEX'						=> 'W celu zwiększenia wydajności bazy danych, wykonaj skrypt <a href="index.php?module=Administration&action=RepairIndex" target="_blank">Przebuduj indeksy</a>.',

	'LBL_UW_FILE_DELETED'						=> "został usunięty.<br>",
	'LBL_UW_FILE_GROUP'							=> 'Grupa',
	'LBL_UW_FILE_ISSUES_PERMS'					=> 'Prawa dostępu dla pliku',
	'LBL_UW_FILE_ISSUES'						=> 'Problemy z plikiem',
	'LBL_UW_FILE_NEEDS_DIFF'					=> 'Plik wymaga ręcznego porównania',
	'LBL_UW_FILE_NO_ERRORS'						=> '<b>Wszystkie pliki zapisywalne</b>',
	'LBL_UW_FILE_OWNER'							=> 'Właściciel',
	'LBL_UW_FILE_PERMS'							=> 'Prawa dostępu',
	'LBL_UW_FILE_UPLOADED'						=> 'został załadowany',
	'LBL_UW_FILE'								=> 'Nazwa pliku',
	'LBL_UW_FILES_QUEUED'						=> 'Następujące pakiety uaktualnień są przygotowane do instalacji:',
	'LBL_UW_FILES_REMOVED'						=> "Następujące pliki zostaną usunięte z systemu:<br>\n",
	'LBL_UW_NEXT_TO_UPLOAD'						=> "<b>Wybierz Dalej, aby załadować pakiety uaktualnień.</b>",
	'LBL_UW_FROZEN'								=> 'Załaduj pakiet przed kontynuacją.',
	'LBL_UW_HIDE_DETAILS'						=> 'Ukryj szczegóły',
	'LBL_UW_IN_PROGRESS'						=> 'W trakcie',
	'LBL_UW_INCLUDING'							=> 'Włączając',
	'LBL_UW_INCOMPLETE'							=> 'Niekompletny',
	'LBL_UW_INSTALL'							=> 'INSTALACJA pliku',
	'LBL_UW_MANUAL_MERGE'						=> 'Ręczne scalanie',
	'LBL_UW_MODULE_READY_UNINSTALL'				=> "Moduł gotowy do odinstalowania.  Kliknij Wykonaj, aby kontynuować odinstalowywanie.<br>\n",
	'LBL_UW_MODULE_READY'						=> "Moduł jest gotowy do instalacji. Kliknij Wykonaj, aby kontynuować instalację.",
	'LBL_UW_NO_INSTALLED_UPGRADES'				=> 'Nie wykryto zapisanych aktualizacji.',
	'LBL_UW_NONE'								=> 'Brak',
	'LBL_UW_NOT_AVAILABLE'						=> 'Niedostępne',
	'LBL_UW_OVERWRITE_DESC'						=> "Wszystkie zmieniane pliki zostaną nadpisane, łącznie z modyfikacjami w kodzie oraz szablonach. Czy na pewno chcesz kontynuować?",
	'LBL_UW_OVERWRITE_FILES_CHOICE1'			=> 'Nadpisz wszystkie pliki',
	'LBL_UW_OVERWRITE_FILES_CHOICE2'			=> 'Ręczne łączenie — zachowaj wszystko',
	'LBL_UW_OVERWRITE_FILES'					=> 'Metoda łączenia',
	'LBL_UW_PATCH_READY'						=> 'Poprawka jest gotowa do instalacji. Kliknij poniższy klawisz Wykonaj, aby kontynuować proces uaktualniania.',
	'LBL_UW_PATCH_READY2'						=> '<h2>Uwaga: znaleziono zmodyfikowane układy</h2><br />Następujące pliki zawierają nowe pola lub modyfikacje układów ekranu wykonane przez Sugar Studio. Poprawka, która chcesz zainstalować, również zawiera modyfikacje plików. Dla <u>każdego pliku </u> możesz:<br><ul><li>[<b>Domyślne</b>] Zachować swoje wersje, pozostawiając puste pole wyboru. Zmiany zawarte w poprawce zostaną zignorowane. </li>lub<li>Zatwierdzić zmiany z plików poprawki przez zaznaczenie pola wyboru. Wtedy Twoje zmiany będą wymagały ponownego załadowania poprzez Sugar Studio.</li></ul>',

	'LBL_UW_PREFLIGHT_ADD_TASK'					=> 'Utworzyć zadanie dla łączenia ręcznego?',
	'LBL_UW_PREFLIGHT_COMPLETE'					=> 'Wstępne sprawdzanie',
	'LBL_UW_PREFLIGHT_DIFF'						=> 'Różniące się',
	'LBL_UW_PREFLIGHT_EMAIL_REMINDER'			=> 'Czy wysłać wiadomość e-mail przypominającą o ręcznym scaleniu?',
	'LBL_UW_PREFLIGHT_FILES_DESC'				=> 'Pliki wyminenione poniżej zostały zmodfikowane. Odznacz elementy, które wymagają ręcznego scalenia. <i>Wszystkie wykryte zmiany widoku zostaną automatycznie odznaczone; wszystkie zaznaczone zostaną nadpisane.',
	'LBL_UW_PREFLIGHT_NO_DIFFS'					=> 'Nie jest wymagane ręczne scalanie.',
	'LBL_UW_PREFLIGHT_NOT_NEEDED'				=> 'Niewymagane.',
	'LBL_UW_PREFLIGHT_PRESERVE_FILES'			=> 'Automatycznie zabezpieczone Pliki:',
	'LBL_UW_PREFLIGHT_TESTS_PASSED'				=> 'Wszystkie testy wstępnego sprawdzania zostały wykonane poprawnie.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED2'			=> 'Naciśnij Dalej, aby skopiować zaktualizowane pliki do systemu.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED3'			=> '<b>Uwaga: </b> pozostała część procesu uaktualniania jest wymagana i naciśnięcie Dalej wymusi dokończenie procesu. Kliknij Anuluj, aby zakończyć proces.',
	'LBL_UW_PREFLIGHT_TOGGLE_ALL'				=> 'Przełącz zaznaczenie wszystkich plików',

	'LBL_UW_REBUILD_TITLE'						=> 'Przebuduj rezultaty',
	'LBL_UW_SCHEMA_CHANGE'						=> 'Schemat zmian',

	'LBL_UW_SHOW_COMPLIANCE'					=> 'Pokaż wykryte ustawienia',
	'LBL_UW_SHOW_DB_PERMS'						=> 'Pokaż brakujące prawa dostępu do bazy danych',
	'LBL_UW_SHOW_DETAILS'						=> 'Pokaż szczegóły',
	'LBL_UW_SHOW_DIFFS'							=> 'Pokaż pliki wymagające ręcznego scalenia',
	'LBL_UW_SHOW_NW_FILES'						=> 'Pokaż pliki z niewłaściwymi prawami dostępu',
	'LBL_UW_SHOW_SCHEMA'						=> 'Pokaż skrypt zmian',
	'LBL_UW_SHOW_SQL_ERRORS'					=> 'Pokaż błędne zapytania',
	'LBL_UW_SHOW'								=> 'Pokaż',

	'LBL_UW_SKIPPED_FILES_TITLE'				=> 'Pominięte pliki',
	'LBL_UW_SKIPPING_FILE_OVERWRITE'			=> 'Pomijanie kroku nadpisywania plików — wybrano ręczne scalanie.',
	'LBL_UW_SQL_RUN'							=> 'Sprawdź, kiedy SQL był uruchomiony ręcznie',
	'LBL_UW_START_DESC'							=> 'Kreator pomoże Ci podczas uaktualniania instancji systemu Sugar.',
	'LBL_UW_START_DESC2'						=> 'Uwaga: przed przeprowadzeniem uaktualnienia zalecamy wykonanie kopii zapasowej bazy danych Sugar oraz plików systemowych (wszystkie pliki z folderu systemu SugarCRM). Zdecydowanie zalecamy wcześniejsze wykonanie testowego procesu uaktualniania na kopii instancji produkcyjnej.',
	'LBL_UW_START_DESC3'						=> 'Kliknij Dalej w celu sprawdzenia systemu pod względem przygotowania na uaktualnienie. Sprawdzenie uwzględnia uprawnienia systemu plików, bazy danych oraz ustawienia serwera.',
	'LBL_UW_START_UPGRADED_UW_DESC'				=> 'Nowy Kreator uaktualniania podsumuje teraz proces uaktualnienia. Kontynuuj.',
	'LBL_UW_START_UPGRADED_UW_TITLE'			=> 'Witamy w nowym Kreatorze uaktualniania',

	'LBL_UW_SYSTEM_CHECK_CHECKING'				=> 'Trwa sprawdzanie, poczekaj. Może to potrwać do 30 sekund.',
	'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START'		=> 'Znajdowanie wszystkich plików spełniających warunki.',
	'LBL_UW_SYSTEM_CHECK_FILES'					=> 'Plików',
	'LBL_UW_SYSTEM_CHECK_FOUND'					=> 'Znaleziono',

	'LBL_UW_TITLE_CANCEL'						=> 'Usuń',
	'LBL_UW_TITLE_COMMIT'						=> 'Wykonaj aktualizację',
	'LBL_UW_TITLE_END'							=> 'Sprawozdanie',
	'LBL_UW_TITLE_PREFLIGHT'					=> 'Sprawdzanie wstępne',
	'LBL_UW_TITLE_START'						=> 'Start',
	'LBL_UW_TITLE_SYSTEM_CHECK'					=> 'Sprawdzanie systemu',
	'LBL_UW_TITLE_UPLOAD'						=> 'Załaduj pakiet',
	'LBL_UW_TITLE'								=> 'Kreator uaktualniania',
	'LBL_UW_UNINSTALL'							=> 'Odinstaluj',
	//500 upgrade labels
	'LBL_UW_ACCEPT_THE_LICENSE' 				=> 'Zaakceptuj licencję',
	'LBL_UW_CONVERT_THE_LICENSE' 				=> 'Przekształć licencję',
	'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES'     => 'Uaktualnione/dostosowane moduły',
	'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED'       => 'Następujące moduły wykryto jako dostosowane i zabezpieczone',
	'LBL_UW_FOLLOWING_MODULES_UPGRADED'         => 'Następujące moduły są dostosowane przez Sugar Studio i zostały uaktualnione.',

	'LBL_START_UPGRADE_IN_PROGRESS'             => 'Trwa rozpoczynanie',
	'LBL_SYSTEM_CHECKS_IN_PROGRESS'             => 'Sprawdzanie systemu w toku',
	'LBL_LICENSE_CHECK_IN_PROGRESS'             => 'Sprawdzanie licencji w toku',
	'LBL_PREFLIGHT_CHECK_IN_PROGRESS'           => 'Testowanie wstępne w toku',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS'       => 'Kopiowanie plików w toku',
	'LBL_COMMIT_UPGRADE_IN_PROGRESS'            => 'Trwa wykonywanie aktualizacji',
    'LBL_UW_COMMIT_DESC'						=> 'Wybierz Dalej, aby uruchomić dodatkowe skrypty uaktualniania.',
	'LBL_UPGRADE_SCRIPTS_IN_PROGRESS'			=> 'Trwa wykonywanie skryptów uaktualniania',
	'LBL_UPGRADE_SUMMARY_IN_PROGRESS'			=> 'Tworzone jest podsumowanie uaktualniania',
	'LBL_UPGRADE_IN_PROGRESS'                   => 'w toku',
	'LBL_UPGRADE_TIME_ELAPSED'                  => 'Czas, który upłynął',
	'LBL_UPGRADE_CANCEL_IN_PROGRESS'			=> 'Trwa zatrzymywanie uaktualniania i czyszczenie',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE'      => 'Uaktualnianie może zająć trochę czasu',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS'           => 'Trwa kontrola wczytywania',
	'LBL_UPLOADING_UPGRADE_PACKAGE'      		=> 'Trwa wczytywanie pakietów uaktualnień ',
    'LBL_UW_DORP_THE_OLD_SCHMEA' 				=> 'Czy chcesz, aby nieaktualne schematy 451 zostały pominięte w systemie Sugar?',
	'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD'			=> 'Kreator uaktualniania pomija stare schematy 451',
	'LBL_UW_DROP_SCHEMA_MANUAL'					=> 'Ręczne usunięcie starych schematów po instalacji',
	'LBL_UW_DROP_SCHEMA_METHOD'					=> 'Metoda usunięcia starych schematów',
	'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP'			=> 'Pokaż stare schematy, które mogą zostać usunięte',
	'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST'      => 'Pominięte zapytania',
	'LBL_INCOMPATIBLE_PHP_VERSION'              => 'PHP w wersji nie niższej niż 5 jest wymagane',
	'ERR_CHECKSYS_PHP_INVALID_VER'      => 'Twoja wersja PHP nie jest obsługiwana przez SugarCRM. Należy zainstalować wersję, która jest kompatybilna z aplikacją Sugar.  Sprawdź Macierz kompatybilności w Notatkach o wydaniu (Release Notes) w celu sprawdzenia, które wersje for PHP są obsługiwane. Twoja wersja to ',
	'LBL_BACKWARD_COMPATIBILITY_ON' 			=> 'Tryb wstecznej kompatybilności php jest włączony. Ustaw dyrektywę zend.ze1_compatibility_mode na wartość Off, aby kontynuować',
	//including some strings from moduleinstall that are used in Upgrade
	'LBL_ML_ACTION' => 'Akcja',
    'LBL_ML_CANCEL'             => 'Anuluj',
    'LBL_ML_COMMIT'=>'Wykonaj',
    'LBL_ML_DESCRIPTION' => 'Opis',
    'LBL_ML_INSTALLED' => 'Data instalacji',
    'LBL_ML_NAME' => 'Nazwa',
    'LBL_ML_PUBLISHED' => 'Data publikacji',
    'LBL_ML_TYPE' => 'Typ',
    'LBL_ML_UNINSTALLABLE' => 'Odinstalowywalny',
    'LBL_ML_VERSION' => 'Wersja',
	'LBL_ML_INSTALL'=>'Zainstaluj',
	//adding the string used in tracker. copying from homepage
	'LBL_HOME_PAGE_4_NAME' => 'Śledzenie',
	'LBL_CURRENT_PHP_VERSION' => '(Twoja aktualna wersja PHP to',
	'LBL_RECOMMENDED_PHP_VERSION' => '. Zalecamy wersję PHP 5.2.1 lub nowszą)',
	'LBL_MODULE_NAME' => 'Kreator uaktualniania',
	'LBL_MODULE_NAME_SINGULAR' => 'Kreator uaktualniania',
	'LBL_UPLOAD_SUCCESS' => 'Pakiet uaktualnień pomyślnie załadowany. Kliknij Dalej w celu przeprowadzenia ostatecznego sprawdzenia.',
	'LBL_UW_TITLE_LAYOUTS' => 'Zatwierdzanie układów',
	'LBL_LAYOUT_MODULE_TITLE' => 'Układy',
	'LBL_LAYOUT_MERGE_DESC' => 'Dostępne są nowe pola, które zostały dodane jako część uaktualnienia i mogą zostać automatycznie uwzględnione w aktualnych układach modułów. Aby dowiedzieć się więcej o nowych polach przeczytaj Release Notes dla wersji, dla której przeprowadzasz uaktualnienie.<br><br>Jeśli nie chcesz dodawać nowych pól, odznacz moduł, a układy pozostaną niezmienione. Pola będą dostępne w Studio po zakończeniu procesu uaktualnienia. <br><br>',
	'LBL_LAYOUT_MERGE_TITLE' => 'Kliknij Dalej, aby potwierdzić zmiany i dokończyć uaktualnienie.',
	'LBL_LAYOUT_MERGE_TITLE2' => 'Kliknij Dalej, aby dokończyć uaktualnienie.',
	'LBL_UW_CONFIRM_LAYOUTS' => 'Zatwierdź układy',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Zatwierdź wyniki układów',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Następujące układy zostały scalone:',
	'LBL_SELECT_FILE' => 'Wybierz plik:',
	'LBL_LANGPACKS' => 'Pakiety językowe' /*for 508 compliance fix*/,
	'LBL_MODULELOADER' => 'Zarządzanie modułami' /*for 508 compliance fix*/,
	'LBL_PATCHUPGRADES' => 'Poprawki' /*for 508 compliance fix*/,
	'LBL_THEMES' => 'Motywy' /*for 508 compliance fix*/,
	'LBL_WORKFLOW' => 'Workflow' /*for 508 compliance fix*/,
	'LBL_UPGRADE' => 'Uaktualnienie' /*for 508 compliance fix*/,
	'LBL_PROCESSING' => 'Przetwarzanie' /*for 508 compliance fix*/,
    'LBL_GLOBAL_TEAM_DESC'                      => 'Widoczne dla wszystkich',
);
