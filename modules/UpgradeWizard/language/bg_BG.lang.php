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
  'DESC_MODULES_INSTALLED' => 'Инсталирани са следните актуализации:',
  'DESC_MODULES_QUEUED' => 'Следните актуализации са готови за инсталация:',
  'ERROR_FLAVOR_INCOMPATIBLE' => 'Зарежданият файл е несъвместим с текущото издание (Open Source, Professional, or Enterprise) на Sugar Suite:',
  'ERROR_VERSION_INCOMPATIBLE' => 'Зарежданият файл е несъвместим с текущата версия на Sugar Suite:',
  'ERR_CHECKSYS_PHP_INVALID_VER' => 'Инсталираната версия на PHP не се поддържа от SugarCRM.  Трябва да инсталирате версия съвместима с текущата версия на SugarCRM.  За повече информация относно поддържаните версии на PHP можете да разгледате "Compatibility Matrix in the Release Notes". Инсталираната версия на PHP е:',
  'ERR_UW_CANNOT_DETERMINE_GROUP' => 'Групата не може да бъде определена',
  'ERR_UW_CANNOT_DETERMINE_USER' => 'Отговорникът не може да бъде определен',
  'ERR_UW_CONFIG' => 'Моля направате файла config.php достъпен за редактиране и презаредете страницата.',
  'ERR_UW_CONFIG_WRITE' => 'Грешка при опита за актуализация на файла config.php с информация за новата версия.',
  'ERR_UW_DIR_NOT_WRITABLE' => 'Няма права за модифициране на директорията',
  'ERR_UW_FILE_NOT_COPIED' => 'Файлът не е копиран.',
  'ERR_UW_FILE_NOT_DELETED' => 'Problem removing package',
  'ERR_UW_FILE_NOT_READABLE' => 'Файлът не може да бъде прочетен.',
  'ERR_UW_FILE_NOT_WRITABLE' => 'Файлът не може да преместен или записан в',
  'ERR_UW_FLAVOR' => 'SugarCRM System Flavor:',
  'ERR_UW_FLAVOR_2' => 'Upgrade Flavor:',
  'ERR_UW_LOG_FILE_UNWRITABLE' => './upgradeWizard.log could not be created/written to.  Please fix permissions on your SugarCRM directory.',
  'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'mbstring.func_overload set to a value higher than 1.  Please change this in your php.ini and restart the web server.',
  'ERR_UW_MYSQL_VERSION' => 'SugarCRM изисква версия на MySQL 4.1.2 или по-висока.  Открита версия:',
  'ERR_UW_NOT_VALID_UPLOAD' => 'Not valid upload.',
  'ERR_UW_NO_CREATE_TMP_DIR' => 'Не може да бъде създадена директория за временно съхранение на файловете. Проверете зададените права на достъп.',
  'ERR_UW_NO_FILES' => 'Възникна грешка. Не бяха открити файлове за проверка. An error occured, no files were found to check.',
  'ERR_UW_NO_FILE_UPLOADED' => 'Моля, изберете файл и опитайте отново!',
  'ERR_UW_NO_MANIFEST' => 'Не бе открит файла manifest.php в зареждания zip файл.  Cannot proceed.',
  'ERR_UW_NO_VIEW' => 'Посочен е невалиден изглед.',
  'ERR_UW_NO_VIEW2' => 'View not defined.  Please go to the Administration home to navigate to this page.',
  'ERR_UW_OCI8_VERSION' => 'Инсталираната версия на Oracle не се поддържа от Sugar. Трябва да инсталирате съвместима версия на базата данни. Моля консултирайте се с написаното в Release Notes относно поддържаните версии на Oracle. Текущата версия е:',
  'ERR_UW_ONLY_PATCHES' => 'You can only upload patches on this page.',
  'ERR_UW_PHP_FILE_ERRORS' => 
  array (
    1 => 'Размерът на зареждания файл надхвърля стойността на параметъра upload_max_filesize във файла php.ini.',
    2 => 'Размерът на зареждания файл надхвърля стойността на параметъра MAX_FILE_SIZE в HTML форма.',
    3 => 'Файлът беше зареден частично.',
    4 => 'Файлът не беше зареден.',
    5 => 'Неизвестна грешка.',
    6 => 'Папката за временни файл-ове липсва.',
    7 => 'Грешка при записване на файла на диск.',
    8 => 'Зареждането на файла беше спряно.',
  ),
  'ERR_UW_PREFLIGHT_ERRORS' => 'Errors Found During Preflight Check',
  'ERR_UW_UPLOAD_ERR' => 'Възникна грешка при зареждането на файла. Моля, опитайте отново!<br>n',
  'ERR_UW_VERSION' => 'Версия на системата SugarCRM:',
  'ERR_UW_WRONG_TYPE' => 'This page is not for running',
  'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php Backward Compatibility mode is turned on. Set zend.ze1_compatibility_mode to Off for proceeding further',
  'LBL_BUTTON_BACK' => 'Предишна стъпка',
  'LBL_BUTTON_CANCEL' => 'Прекрати актуализацията',
  'LBL_BUTTON_DELETE' => 'Изтрий пакета',
  'LBL_BUTTON_DONE' => 'Стартирай отново',
  'LBL_BUTTON_EXIT' => 'Изход',
  'LBL_BUTTON_INSTALL' => 'Preflight Upgrade',
  'LBL_BUTTON_NEXT' => 'Следваща стъпка',
  'LBL_BUTTON_RECHECK' => 'Изпълни стъпката отново',
  'LBL_BUTTON_RESTART' => 'Restart',
  'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'Commit Upgrade in progress',
  'LBL_CURRENT_PHP_VERSION' => '(Текущата инбсталирана версия е',
  'LBL_HOME_PAGE_4_NAME' => 'Потребителска активност',
  'LBL_INCOMPATIBLE_PHP_VERSION' => 'Изисква се версия на PHP интерпретатор по вискока от 5.',
  'LBL_LANGPACKS' => 'Language Packs',
  'LBL_LAYOUT_MERGE_DESC' => 'В резултат на актуализацията са добавени нови полета, които могат да бъдат включвани в подредбите на екрани за съществуващите модули. За да научите повече за допълнителните полета, моля прочетете "Release Notes" за версията на SugarCRM, към която извършвате актуализация.',
  'LBL_LAYOUT_MERGE_TITLE' => 'Натиснете бутона "Следваща стъпка", за да потвърдите промените и да финализирате актуализацията.',
  'LBL_LAYOUT_MERGE_TITLE2' => 'Натиснете бутона "Следваща стъпка", за да завършите актуализацията.',
  'LBL_LAYOUT_MODULE_TITLE' => 'Подредба на екрани',
  'LBL_LICENSE_CHECK_IN_PROGRESS' => 'License Check in progress',
  'LBL_ML_ACTION' => 'Действие',
  'LBL_ML_CANCEL' => 'Прекрати актуализацията',
  'LBL_ML_COMMIT' => 'Потвърди',
  'LBL_ML_DESCRIPTION' => 'Описание',
  'LBL_ML_INSTALL' => 'Инсталиране',
  'LBL_ML_INSTALLED' => 'Инсталирано на',
  'LBL_ML_NAME' => 'Име',
  'LBL_ML_PUBLISHED' => 'Публикувано на',
  'LBL_ML_TYPE' => 'Тип',
  'LBL_ML_UNINSTALLABLE' => 'Не подлежи на деинсталация',
  'LBL_ML_VERSION' => 'Версия',
  'LBL_MODULELOADER' => 'Инсталиране на модули',
  'LBL_MODULE_NAME' => 'UpgradeWizard',
  'LBL_MODULE_NAME_SINGULAR' => 'Актуализация',
  'LBL_PATCHUPGRADES' => 'Patch Upgrades',
  'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'Проверка за приложимост',
  'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'Прогрес на копиране на файла',
  'LBL_PROCESSING' => 'Processing',
  'LBL_RECOMMENDED_PHP_VERSION' => '. Препоръчва се версия на php 5.2.1 или по-висока)',
  'LBL_SELECT_FILE' => 'Избиране на файл:',
  'LBL_START_UPGRADE_IN_PROGRESS' => 'Start in progress',
  'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'Проверка на системата',
  'LBL_THEMES' => 'Теми',
  'LBL_UPGRADE' => 'Актуализация',
  'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'Прекратяване на актуализацията',
  'LBL_UPGRADE_IN_PROGRESS' => 'in progress',
  'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'Актуализация на скриптове',
  'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'Upgrade Summary in progress',
  'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'Актуализацията може да отнеме известно време',
  'LBL_UPGRADE_TIME_ELAPSED' => 'Time elapsed',
  'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'Избор на актуализация',
  'LBL_UPLOADING_UPGRADE_PACKAGE' => 'Зареждане на избраната актуализация',
  'LBL_UPLOAD_FILE_NOT_FOUND' => 'Файлът за актуализация не е намерен',
  'LBL_UPLOAD_SUCCESS' => 'Обновяването на пакета е успешно качен.<br />Натиснете бутона Следващ за извършване на окончателна проверка.',
  'LBL_UPLOAD_UPGRADE' => 'Избор на актуализация',
  'LBL_UW_ACCEPT_THE_LICENSE' => 'Accept License',
  'LBL_UW_BACKUP' => 'File BACKUP',
  'LBL_UW_BACKUP_FILES_EXIST' => 'Архивираните от тази актуализация файлове могат да бъдат намерени в',
  'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'Архивиране на файлове',
  'LBL_UW_CANCEL_DESC' => 'Актуализацията е прекратена. Всички временни файлове и качените актуализации са изтрити.<br><br>Натиснете "Стартирай отново", за да започнете процеса от начало.',
  'LBL_UW_CHARSET_SCHEMA_CHANGE' => 'Character Set Schema Changes',
  'LBL_UW_CHECKLIST' => 'Стъпки в процеса на актуализация',
  'LBL_UW_CHECK_ALL' => 'Check All',
  'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'Ресервни копия на презаписаните файлове се намират в директория:',
  'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'Manually merge the following files:',
  'LBL_UW_COMMIT_ADD_TASK_NAME' => 'Upgrade Process: Manually Merge Files',
  'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'Please use whichever diff method is most familiar to you to merge these files.  Until this is complete, your SugarCRM installation will be in an uncertain state, and the upgrade is not complete.',
  'LBL_UW_COMMIT_DESC' => 'Натиснете бутона Следващ, за да качите допълнителните надграждащи скриптове.',
  'LBL_UW_COMPLETE' => 'Завършена',
  'LBL_UW_COMPLIANCE_ALL_OK' => 'Всички изисквания към системата са удовлетворени',
  'LBL_UW_COMPLIANCE_CALLTIME' => 'PHP параметър: Call Time Pass By Reference',
  'LBL_UW_COMPLIANCE_CURL' => 'Модул cURL',
  'LBL_UW_COMPLIANCE_DB' => 'Поддържана версия на базата данни',
  'LBL_UW_COMPLIANCE_IMAP' => 'Модул IMAP',
  'LBL_UW_COMPLIANCE_MBSTRING' => 'Модул MBStrings',
  'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'MBStrings mbstring.func_overload Parameter',
  'LBL_UW_COMPLIANCE_MEMORY' => 'PHP параметър: Memory Limit',
  'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES' => 'MS SQL Server & PHP Magic Quotes GPC',
  'LBL_UW_COMPLIANCE_MYSQL' => 'Minimum MySQL Version',
  'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'Версия на PCRE',
  'LBL_UW_COMPLIANCE_PHP_INI' => 'Location of php.ini',
  'LBL_UW_COMPLIANCE_PHP_VERSION' => 'Минимална PHP версия PHP',
  'LBL_UW_COMPLIANCE_SAFEMODE' => 'PHP Setting: Safe Mode',
  'LBL_UW_COMPLIANCE_STREAM' => 'PHP настройка: Stream',
  'LBL_UW_COMPLIANCE_TITLE' => 'Настройки на сървъра',
  'LBL_UW_COMPLIANCE_TITLE2' => 'Текущи настройки',
  'LBL_UW_COMPLIANCE_XML' => 'XML Parsing',
  'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Поддръжка на ZIP архиви',
  'LBL_UW_CONFIRM_LAYOUTS' => 'Потвърждаване на подредбата на екрани.',
  'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Потвърдете резултата от Подредбата на екрани',
  'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Следните Подредби на екрани, са сляти успешно:',
  'LBL_UW_CONTINUE_CONFIRMATION' => 'This new version of Sugar contains new license agreement.  Would you like to continue?',
  'LBL_UW_CONVERT_THE_LICENSE' => 'Convert License',
  'LBL_UW_COPIED_FILES_TITLE' => 'Файловете са копирани успешно',
  'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES' => 'Upgraded/Customized Modules',
  'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE' => 'Custom Table Schema Changes',
  'LBL_UW_DB_CHOICE1' => 'Upgrade Wizard Runs SQL',
  'LBL_UW_DB_CHOICE2' => 'Manual SQL Queries',
  'LBL_UW_DB_INSERT_FAILED' => 'INSERT failed - compared results differ',
  'LBL_UW_DB_ISSUES' => 'Бази данни',
  'LBL_UW_DB_ISSUES_PERMS' => 'Права',
  'LBL_UW_DB_METHOD' => 'Database Update Method',
  'LBL_UW_DB_NO_ERRORS' => 'All Privileges Available',
  'LBL_UW_DB_PERMS' => 'Necessary Privilege',
  'LBL_UW_DESC_MODULES_INSTALLED' => 'Инсталирани са следните актуализации:',
  'LBL_UW_DORP_THE_OLD_SCHMEA' => 'Would you like Sugar to drop the depricated 451 Schema ?',
  'LBL_UW_DROP_SCHEMA_MANUAL' => 'Manual Drop Schema Post Upgrade',
  'LBL_UW_DROP_SCHEMA_METHOD' => 'Old Schema Drop Method',
  'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'Upgrade Wizard Drops old 451 schema',
  'LBL_UW_END_DESC' => 'Системата е успешно актуализирана.',
  'LBL_UW_END_DESC2' => 'Ако сте избрали да изпълните ръчно някои действия като обединение на файлове или изпълнение на SQL зявки, моля направете го сега.  Системата ще бъде в нестабилно състояние, докато тези действия се изпълнят.',
  'LBL_UW_END_LOGOUT' => 'Please log out of your account if you plan on upgrading further than this patch/upgrade level.',
  'LBL_UW_END_LOGOUT2' => 'Изход',
  'LBL_UW_END_LOGOUT_PRE' => 'Актуализацията е завършена.',
  'LBL_UW_END_LOGOUT_PRE2' => 'Натиснете бутона Стартирай отново, за да излезете от електронния помощник за актуализация.',
  'LBL_UW_FILE' => 'Име на файла',
  'LBL_UW_FILES_QUEUED' => 'Следните актуализации са готови за инсталиране:',
  'LBL_UW_FILES_REMOVED' => 'Следните файл-ове ще бъдат изтрити от системата:<br>',
  'LBL_UW_FILE_DELETED' => 'бяха изтрити.<br>',
  'LBL_UW_FILE_GROUP' => 'Група',
  'LBL_UW_FILE_ISSUES' => 'Системни файлове',
  'LBL_UW_FILE_ISSUES_PERMS' => 'Достъп',
  'LBL_UW_FILE_NEEDS_DIFF' => 'File Requires Manual Diff',
  'LBL_UW_FILE_NO_ERRORS' => '<b>Има права за редактиране на всички файлове</b>',
  'LBL_UW_FILE_OWNER' => 'Собствени записи',
  'LBL_UW_FILE_PERMS' => 'Permissions',
  'LBL_UW_FILE_UPLOADED' => 'бяха заредени',
  'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED' => 'The following modules are detected as customized and preserved',
  'LBL_UW_FOLLOWING_MODULES_UPGRADED' => 'The following modules are detected as Studio-customized and have been upgraded',
  'LBL_UW_FROZEN' => 'Трябва да изпълните изискваните действия преди процесът на актуализации да продължи.',
  'LBL_UW_HIDE_DETAILS' => 'Скриване на допълнителна информация',
  'LBL_UW_INCLUDING' => 'Including',
  'LBL_UW_INCOMPLETE' => 'Incomplete',
  'LBL_UW_INSTALL' => 'File INSTALL',
  'LBL_UW_IN_PROGRESS' => 'В процес на изпълнение',
  'LBL_UW_MANUAL_MERGE' => 'File Merge',
  'LBL_UW_MODULE_READY' => 'Модулът е готов за инсталиране.  Натиснете "Потвърди", за да продължите.',
  'LBL_UW_MODULE_READY_UNINSTALL' => 'Модулът е готов за деинсталиране.  Натиснете "Потвърди", за да продължите.<br>',
  'LBL_UW_NEXT_TO_UPLOAD' => 'Натиснете "Следваща стъпка", за да заредите пакет с актуализация на системата.',
  'LBL_UW_NONE' => 'None',
  'LBL_UW_NOT_AVAILABLE' => 'Not available',
  'LBL_UW_NO_INSTALLED_UPGRADES' => 'Не са открити регистрирани актуализации на системата.',
  'LBL_UW_OVERWRITE_DESC' => 'Променените файл-ове ще бъдат презаписани - включително code customizations и шаблони. Сигурни ли сте, че искате да продължите?',
  'LBL_UW_OVERWRITE_FILES' => 'Merge Method',
  'LBL_UW_OVERWRITE_FILES_CHOICE1' => 'Презаписване на всички файл-ове',
  'LBL_UW_OVERWRITE_FILES_CHOICE2' => 'Manual Merge - Preserve All',
  'LBL_UW_PATCH_READY' => 'The patch is ready to proceed. Click the "Commit" button below to complete the upgrade process.',
  'LBL_UW_PATCH_READY2' => '<h2>Notice: Customized Layouts Found</h2><br />The following file(s) have new fields or modified screen layouts applied via the Studio. The patch you are about to install also contains changes to the file(s). For <u>each file</u> you may:<br><ul><li>[<b>Default</b>] Retain your version by leaving the checkbox blank. The patch modifications will be ignored.</li>or<li>Accept the updated files by selecting the checkbox. Your layouts will need to be re-applied via Studio.</li></ul>',
  'LBL_UW_PREFLIGHT_ADD_TASK' => 'Create Task Item for Manual Merge?',
  'LBL_UW_PREFLIGHT_COMPLETE' => 'Preflight Check',
  'LBL_UW_PREFLIGHT_DIFF' => 'Differentiated',
  'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'Email Yourself a Reminder for Manual Merge?',
  'LBL_UW_PREFLIGHT_FILES_DESC' => 'The files listed below have been modified.  Uncheck items that require a manual merge. <i>Any detected layout changes are automatically unchecked; checkmark any that should be overwritten.',
  'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'Not needed.',
  'LBL_UW_PREFLIGHT_NO_DIFFS' => 'No Manual File Merge Required.',
  'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'Auto-preserved Files:',
  'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'Проверката за приложимост премина успешно. Натиснете "Следваща стъпка" за приложните избраната актуализация.',
  'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'Натиснете "Следваща стъпка", за да копирате актуализираните файлове в системата.',
  'LBL_UW_PREFLIGHT_TESTS_PASSED3' => 'Моля, имайте предвид, че останалата част от процеса на обновяване е задължителен.<br />Щракнете върху бутона Следващ, който ще изиска от вас да завършите процеса. Ако не желаете да продължите, щракнете върху бутона за отмяна.',
  'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'Toggle All Files',
  'LBL_UW_REBUILD_TITLE' => 'Rebuild Result',
  'LBL_UW_REPAIR_INDEX' => 'За подобрение на производителността на базата данни, моля изпълнете скрипта <a href="index.php?module=Administration&action=RepairIndex" target="_blank">Поправка на индекси</a>.',
  'LBL_UW_SCHEMA_CHANGE' => 'Schema Changes',
  'LBL_UW_SHOW' => 'Покажи',
  'LBL_UW_SHOW_COMPLIANCE' => 'Show Detected Settings',
  'LBL_UW_SHOW_DB_PERMS' => 'Show Missing Database Permissions',
  'LBL_UW_SHOW_DETAILS' => 'Показване на допълнителна информация',
  'LBL_UW_SHOW_DIFFS' => 'Show Files Requiring Manual Merge',
  'LBL_UW_SHOW_NW_FILES' => 'Show Files with Bad Permissions',
  'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'Show Old Schema that could be dropped',
  'LBL_UW_SHOW_SCHEMA' => 'Show Schema Change Script',
  'LBL_UW_SHOW_SQL_ERRORS' => 'Show Bad Queries',
  'LBL_UW_SKIPPED_FILES_TITLE' => 'Skipped Files',
  'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'Skipped Queries',
  'LBL_UW_SKIPPING_FILE_OVERWRITE' => 'Skipping File Overwrites - Manual Merge Selected.',
  'LBL_UW_SQL_RUN' => 'Check when SQL has been manually run',
  'LBL_UW_START_DESC' => 'Добре дошли в електронния помощник на SugarCRM за актуализиране на програмата. Помощникът е създаден за улеснение на администраторите в процеса на инсталиране на нови версии на SugarCRM.  Моля следвайте внимателно инструкциите.',
  'LBL_UW_START_DESC2' => 'Препоръчва се актуализация да се извършва върху предварително направено копие на системата.  Направете архив на базата данни и системните файлове (от всички папки на SugarCRM) преди да започнете процеса на актуализиране.',
  'LBL_UW_START_DESC3' => 'Натиснете бутона "Следваща стъпка" за извършване на проверка на вашата система, за да се уверите, че системата е готова за актуализация. Проверката включва: файл за достъп, база данни, настройки на сървъра.',
  'LBL_UW_START_UPGRADED_UW_DESC' => 'The new Upgrade Wizard will now resume the upgrade process. Please continue your upgrade.',
  'LBL_UW_START_UPGRADED_UW_TITLE' => 'Welcome to the new Upgrade Wizard',
  'LBL_UW_SYSTEM_CHECK_CHECKING' => 'В процес на проверка, моля, изчакайте.  Може да отнеме близо 30 секунди.',
  'LBL_UW_SYSTEM_CHECK_FILES' => 'Files',
  'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START' => 'Finding all pertinent files to check.',
  'LBL_UW_SYSTEM_CHECK_FOUND' => 'Намерен',
  'LBL_UW_TITLE' => 'Актуализиране',
  'LBL_UW_TITLE_CANCEL' => 'Прекрати актуализацията',
  'LBL_UW_TITLE_COMMIT' => 'Инсталация',
  'LBL_UW_TITLE_END' => 'Резюме на резултатите',
  'LBL_UW_TITLE_LAYOUTS' => 'Потвърждаване на подредбата на екрани.',
  'LBL_UW_TITLE_PREFLIGHT' => 'Проверка за приложимост',
  'LBL_UW_TITLE_START' => 'Начало',
  'LBL_UW_TITLE_SYSTEM_CHECK' => 'Проверка на системата',
  'LBL_UW_TITLE_UPLOAD' => 'Зареди',
  'LBL_UW_UNINSTALL' => 'Деинсталиране',
  'LBL_WORKFLOW' => 'Work Flow',
);

