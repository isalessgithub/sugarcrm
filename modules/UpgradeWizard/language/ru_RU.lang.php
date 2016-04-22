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
  'DESC_MODULES_INSTALLED' => 'Следующие модули установлены:',
  'DESC_MODULES_QUEUED' => 'Готовы к установке следующие модули:',
  'ERROR_FLAVOR_INCOMPATIBLE' => 'Загруженный файл не совместим с установленной версией Sugar (Community Edition, Professional, или Enterprise):',
  'ERROR_VERSION_INCOMPATIBLE' => 'Загружаемый файл не совместим с установленной версией Sugar :',
  'ERR_CHECKSYS_PHP_INVALID_VER' => 'Ваша версия PHP не поддерживается в Sugar. Вам необходимо будет установить версию, которая поддерживается приложением Sugar. Пожалуйста, обратитесь к Матрице Совместимости в заметках к Версии, чтобы узнать, какие версии PHP поддерживаются. Ваша текущая версия:',
  'ERR_UW_CANNOT_DETERMINE_GROUP' => 'Невозможно определить группу',
  'ERR_UW_CANNOT_DETERMINE_USER' => 'Невозможно определить владельца',
  'ERR_UW_CONFIG' => 'Сделайте файл config.php доступным для записи и перезагрузите эту страницу.',
  'ERR_UW_CONFIG_WRITE' => 'Ошибка при добавлении информации о новой версии в файл config.php.',
  'ERR_UW_DIR_NOT_WRITABLE' => 'Директория не доступна для записи',
  'ERR_UW_FILE_NOT_COPIED' => 'Файл не скопирован',
  'ERR_UW_FILE_NOT_DELETED' => 'Не удалось удалить пакет',
  'ERR_UW_FILE_NOT_READABLE' => 'Файл не может быть прочтен',
  'ERR_UW_FILE_NOT_WRITABLE' => 'Файл не может быть перемещен или записан в',
  'ERR_UW_FLAVOR' => 'Текущая версия SugarCRM:',
  'ERR_UW_FLAVOR_2' => 'Устанавливаемая версия:',
  'ERR_UW_LOG_FILE_UNWRITABLE' => './upgradeWizard.log не может быть создан/записан.  Пожалуйста, установите соответствующие права доступа на директорию SugarCRM.',
  'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'Значение параметра mbstring.func_overload больше 1. Пожалуйста, измените это значение в файле php.ini и перезагрузите веб-сервер.',
  'ERR_UW_MYSQL_VERSION' => '&#39;Необходима версия MySQL 4.1.2 или выше. Обнаружено:',
  'ERR_UW_NOT_VALID_UPLOAD' => 'Неверная загрузка.',
  'ERR_UW_NO_CREATE_TMP_DIR' => 'Невозможно создать временную директорию. Убедитесь, что для этого достаточно прав.',
  'ERR_UW_NO_FILES' => 'Ошибка: не найдены файлы для проверки.',
  'ERR_UW_NO_FILE_UPLOADED' => 'Пожалуйста, укажите файл и попробуйте еще раз!',
  'ERR_UW_NO_MANIFEST' => 'В архиве отсутствует файл manifest.php. Операция не может быть продолжена.',
  'ERR_UW_NO_VIEW' => 'Указана неверная страница.',
  'ERR_UW_NO_VIEW2' => 'Страница не определена.  Пожалуйста, перейдите в панель администратора для перехода на эту страницу.',
  'ERR_UW_OCI8_VERSION' => 'Текущая версия Oracle на поддерживается системой Sugar. Необходимо установить версию, которая будет совместима с приложением Sugar. Пожалуйста, обратите внимание на версии Oracle, которые поддерживаются, в Таблице Совместимости в Заметках о новой версии Sugar. Текущая версия:',
  'ERR_UW_ONLY_PATCHES' => 'На этой странице вы можете загружать только обновления.',
  'ERR_UW_PHP_FILE_ERRORS' => 
  array (
    1 => 'Загруженный файл больше, чем указано в upload_max_filesize в php.ini.',
    2 => 'Загруженный файл больше, чем указано в MAX_FILE_SIZE в HTML форме.',
    3 => 'Загружаемый файл был только частично загружен.',
    4 => 'Файл не был заружен.',
    5 => 'Неизвестная ошибка.',
    6 => 'Временная папка не была создана.',
    7 => 'Не удалось записать файл на диск.',
    8 => 'Загрузка файла остановлена расширением.',
  ),
  'ERR_UW_PREFLIGHT_ERRORS' => 'Обнаружены ошибки при предварительной проверке',
  'ERR_UW_UPLOAD_ERR' => 'Ошибка загрузки файла, Пожалуйста, попробуйте еще раз!<br />\\n',
  'ERR_UW_VERSION' => 'Версия SugarCRM:',
  'ERR_UW_WRONG_TYPE' => 'Неверная страница',
  'LBL_BACKWARD_COMPATIBILITY_ON' => 'В PHP включен режим обратной совместимости. Для продолжения отключите параметр zend.ze1_compatibility_mode',
  'LBL_BUTTON_BACK' => '< Назад',
  'LBL_BUTTON_CANCEL' => 'Отмена',
  'LBL_BUTTON_DELETE' => 'Удалить пакет',
  'LBL_BUTTON_DONE' => 'Готово',
  'LBL_BUTTON_EXIT' => 'Выход',
  'LBL_BUTTON_INSTALL' => 'Предварительное обновление',
  'LBL_BUTTON_NEXT' => 'Далее >',
  'LBL_BUTTON_RECHECK' => 'Отметить повторно',
  'LBL_BUTTON_RESTART' => 'Начать заново',
  'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'Выполняется основной этап обновления',
  'LBL_CURRENT_PHP_VERSION' => '(Текущая версия php',
  'LBL_HOME_PAGE_4_NAME' => 'Трекер',
  'LBL_INCOMPATIBLE_PHP_VERSION' => 'Требуется PHP версии 5 или выше.',
  'LBL_LANGPACKS' => 'Языковые пакеты',
  'LBL_LAYOUT_MERGE_DESC' => 'Доступны новые поля, которые были добавлены во время обновления и могут быть автоматически применены к существующему внешнему виду ваших модулей. Больше о новых полях можно узнать в Release Notes версии, до которой Вы обновляете систему.<br /><br />Если Вы не хотите добавлять новые поля, уберите отметку с модуля и Ваши пользовательские настройки останутся без изменений. Поля будут доступны в Студии после завершения обновления.',
  'LBL_LAYOUT_MERGE_TITLE' => 'Нажмите "продолжить", чтобы подтвердитьи изменения и закончить обновление.',
  'LBL_LAYOUT_MERGE_TITLE2' => 'Нажмите "продолжить", чтобы закончить обновление.',
  'LBL_LAYOUT_MODULE_TITLE' => 'Макеты',
  'LBL_LICENSE_CHECK_IN_PROGRESS' => 'Выполняется проверка лицензии',
  'LBL_ML_ACTION' => 'Действие',
  'LBL_ML_CANCEL' => 'Отмена',
  'LBL_ML_COMMIT' => 'Подтвердить',
  'LBL_ML_DESCRIPTION' => 'Описание',
  'LBL_ML_INSTALL' => 'Установить',
  'LBL_ML_INSTALLED' => 'Дата установки',
  'LBL_ML_NAME' => 'Название',
  'LBL_ML_PUBLISHED' => 'Дата публикации',
  'LBL_ML_TYPE' => 'Тип',
  'LBL_ML_UNINSTALLABLE' => 'Удаление',
  'LBL_ML_VERSION' => 'Версия',
  'LBL_MODULELOADER' => 'Загрузчик модулей',
  'LBL_MODULE_NAME' => 'Мастер обновления',
  'LBL_PATCHUPGRADES' => 'Обновление приложений',
  'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'Выполняется предварительная проверка',
  'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'Выполняется копирование файлов',
  'LBL_PROCESSING' => 'Обрабатывается...',
  'LBL_RECOMMENDED_PHP_VERSION' => '. Рекомендуется версия 5.2.1 или выше)',
  'LBL_SELECT_FILE' => 'Выбор файла',
  'LBL_START_UPGRADE_IN_PROGRESS' => 'Выполняется начальный этап обновления',
  'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'Выполняется проверка системы',
  'LBL_THEMES' => 'Темы',
  'LBL_UPGRADE' => 'Обновление',
  'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'Обновление отменено, выполняется очистка',
  'LBL_UPGRADE_IN_PROGRESS' => 'в процессе',
  'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'Выполняется обновление скриптов',
  'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'Выполняется заключительный этап обновления',
  'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'Обновление может занять некоторое время',
  'LBL_UPGRADE_TIME_ELAPSED' => 'Затраченное время',
  'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'Выполняется проверка загруженного пакета обновления',
  'LBL_UPLOADING_UPGRADE_PACKAGE' => 'Выполняется загрузка пакета обновления',
  'LBL_UPLOAD_FILE_NOT_FOUND' => 'Фвйл загрузки не найден',
  'LBL_UPLOAD_SUCCESS' => 'Обновление успешно загружено. Нажмите "Продолжить" для окончательной проверки.',
  'LBL_UPLOAD_UPGRADE' => 'Загрузка пакета обновления',
  'LBL_UW_ACCEPT_THE_LICENSE' => 'Принять лицензию',
  'LBL_UW_BACKUP' => 'Создание резервной копии',
  'LBL_UW_BACKUP_FILES_EXIST' => 'Резервные файлы этого обновления могут быть найдены в',
  'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'Создание резервной копии',
  'LBL_UW_CANCEL_DESC' => 'Мастер обновления был остановлен. Все временные файлы и архивы были удалены.<br /><br />Нажмите кнопку "Готово" для повторного запуска мастера.',
  'LBL_UW_CHARSET_SCHEMA_CHANGE' => 'Изменения в схеме кодировки:',
  'LBL_UW_CHECKLIST' => 'Стадии обновления',
  'LBL_UW_CHECK_ALL' => 'Отметить все',
  'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'Резервные копии перезаписываемых файлов находятся в директории:',
  'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'Необходимо вручную перезаписать следующие файлы:',
  'LBL_UW_COMMIT_ADD_TASK_NAME' => 'Обновление: перезаписать файлы вручную',
  'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'Пожалуйста, для перезаписи файлов используйте наиболее удобный для вас способ. Пока Вы этого не сделаете, система будет находиться в нестабильном состоянии и обновление не будет завершено.',
  'LBL_UW_COMMIT_DESC' => 'Нажмите "Продолжить", чтобы запустить дополнительные скрипты для обновления.',
  'LBL_UW_COMPLETE' => 'Выполнено',
  'LBL_UW_COMPLIANCE_ALL_OK' => 'Все системные требования выполнены',
  'LBL_UW_COMPLIANCE_CALLTIME' => 'Настройка PHP: Call Time Pass By Reference',
  'LBL_UW_COMPLIANCE_CURL' => 'Модуль cURL',
  'LBL_UW_COMPLIANCE_DB' => 'Минимальная версия базы данных',
  'LBL_UW_COMPLIANCE_IMAP' => 'Модуль IMAP',
  'LBL_UW_COMPLIANCE_MBSTRING' => 'Модуль MBStrings',
  'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'Параметр MBStrings mbstring.func_overload',
  'LBL_UW_COMPLIANCE_MEMORY' => 'Настройки PHP: Максимальный размер используемой памяти',
  'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES' => 'MS SQL Server & PHP Magic Quotes GPC',
  'LBL_UW_COMPLIANCE_MYSQL' => 'Минимальная версия MySQL',
  'LBL_UW_COMPLIANCE_PHP_INI' => 'Расположение php.ini',
  'LBL_UW_COMPLIANCE_PHP_VERSION' => 'Минимальная версия PHP',
  'LBL_UW_COMPLIANCE_SAFEMODE' => 'Настройки PHP: безопасный режим',
  'LBL_UW_COMPLIANCE_STREAM' => 'Настройка PHP: поток',
  'LBL_UW_COMPLIANCE_TITLE' => 'Проверка настроек сервера',
  'LBL_UW_COMPLIANCE_TITLE2' => 'Обнаруженные настройки',
  'LBL_UW_COMPLIANCE_XML' => 'XML Parsingм',
  'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Поддержка Zip',
  'LBL_UW_CONFIRM_LAYOUTS' => 'Подтвердить макеты',
  'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Подтвердить результаты макетов',
  'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Следующие макеты были успешно перезаписаны:',
  'LBL_UW_CONTINUE_CONFIRMATION' => 'Эта версия SugarCRM содержит новое лицензионное соглашение.  Хотите продолжить?',
  'LBL_UW_CONVERT_THE_LICENSE' => 'Конвертировать лицензию',
  'LBL_UW_COPIED_FILES_TITLE' => 'Успешно скопированные файлы',
  'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES' => 'Обновленные/измененные модули',
  'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE' => 'Custom Table Schema Changes',
  'LBL_UW_DB_CHOICE1' => 'Выполнение SQL-запроса мастером обновления',
  'LBL_UW_DB_CHOICE2' => 'Выполнение SQL-запроса вручную',
  'LBL_UW_DB_INSERT_FAILED' => 'ВСТАВКА не выполнена - результаты сравнения различаются',
  'LBL_UW_DB_ISSUES' => 'База данных',
  'LBL_UW_DB_ISSUES_PERMS' => 'Привилегии базы данных',
  'LBL_UW_DB_METHOD' => 'Метод обновления базы данных',
  'LBL_UW_DB_NO_ERRORS' => 'Все доступные привилегии',
  'LBL_UW_DB_PERMS' => 'Необходимая привилегия',
  'LBL_UW_DESC_MODULES_INSTALLED' => 'Были установлены следующие обновления:',
  'LBL_UW_DORP_THE_OLD_SCHMEA' => 'Вы хотите, чтобы система удалила схему 451',
  'LBL_UW_DROP_SCHEMA_MANUAL' => 'Очистить старые схемы вручную после завершения обновления',
  'LBL_UW_DROP_SCHEMA_METHOD' => 'Метод очистки старых схем',
  'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'Мастер Обновления удаляет старую схему 451',
  'LBL_UW_END_DESC' => 'Поздравляем, система успешно обновлена.',
  'LBL_UW_END_DESC2' => 'Если вы вручную выполняете такие действия как перезапись файлов или  SQL-запрос - сделайте это сейчас. Система будет нестабильна до тех пор, пока вы не закончите обновление.',
  'LBL_UW_END_LOGOUT' => 'Обновление завершено.<br /><br />Пожалуйста, выйдите и войдите в систему заново, если вы планируете в данный момент продолжить обновление используя Мастер обновления.',
  'LBL_UW_END_LOGOUT2' => 'Выйти из системы',
  'LBL_UW_END_LOGOUT_PRE' => 'Обновление завершено',
  'LBL_UW_END_LOGOUT_PRE2' => 'Нажмите на Готово для выходя из Мастера Обновления',
  'LBL_UW_FILE' => 'Имя файла',
  'LBL_UW_FILES_QUEUED' => 'Следующие обновления готовы к установке:',
  'LBL_UW_FILES_REMOVED' => 'Следующие файлы будут удалены из системы:<br>',
  'LBL_UW_FILE_DELETED' => 'был удален.',
  'LBL_UW_FILE_GROUP' => 'Группа',
  'LBL_UW_FILE_ISSUES' => 'Версии файла',
  'LBL_UW_FILE_ISSUES_PERMS' => 'Права доступа к файлам:',
  'LBL_UW_FILE_NEEDS_DIFF' => 'Для данного файла необходимо сравнение версий вручную',
  'LBL_UW_FILE_NO_ERRORS' => 'Все файлы доступны для записи',
  'LBL_UW_FILE_OWNER' => 'Владелец',
  'LBL_UW_FILE_PERMS' => 'Права доступа',
  'LBL_UW_FILE_UPLOADED' => 'было загружено',
  'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED' => 'Следующие модули были определены как настроенные пользователем и поэтому они оставлены без изменений',
  'LBL_UW_FOLLOWING_MODULES_UPGRADED' => 'Следующие модули были определены как настроенные в Студии и поэтому они были обновлены',
  'LBL_UW_FROZEN' => 'Перед тем как продолжить, необходимо выполнить следующие действия:',
  'LBL_UW_HIDE_DETAILS' => 'Скрыть подробности',
  'LBL_UW_INCLUDING' => 'Включая',
  'LBL_UW_INCOMPLETE' => 'Не закончено',
  'LBL_UW_INSTALL' => 'Установка файла',
  'LBL_UW_IN_PROGRESS' => 'В процессе',
  'LBL_UW_MANUAL_MERGE' => 'Перезапись файла:',
  'LBL_UW_MODULE_READY' => 'Модуль готов к установке. Нажмите кнопку "Завершить".',
  'LBL_UW_MODULE_READY_UNINSTALL' => 'Модуль готов к удалению. Нажмите кнопку "Завершить".',
  'LBL_UW_NEXT_TO_UPLOAD' => 'Нажмите Далее для загрузки обновлений.',
  'LBL_UW_NONE' => 'Нет',
  'LBL_UW_NOT_AVAILABLE' => 'Не доступно',
  'LBL_UW_NO_INSTALLED_UPGRADES' => 'Установленных обновлений не обнаружено.',
  'LBL_UW_OVERWRITE_DESC' => 'Все измененные файлы будут перезаписаны, включая файлы исходного кода, а также шаблоны. Продолжить?',
  'LBL_UW_OVERWRITE_FILES' => 'Метод перезаписи',
  'LBL_UW_OVERWRITE_FILES_CHOICE1' => 'Перезаписать все файлы',
  'LBL_UW_OVERWRITE_FILES_CHOICE2' => 'Ручная перезапись - сохранить все',
  'LBL_UW_PATCH_READY' => 'Обновление готово к установке. Нажмите кнопку "Завершить" для старта.',
  'LBL_UW_PATCH_READY2' => '<h2>Примечания: Найдены пользовательские макеты закладок</h2><br /><br />Следующие файлы содержат новые поля или страницы, отредактированные в Студии. Обновление, которое Вы устанавливаете, содержит другие версии файлов. Для <u>каждого файла</u> Вы можете:<br><ul><li>[<b>Default</b>] Сохранить Вашу версию файла, оставив опцию неотмеченной. Файлы из пакета обновления будут пропущены.</li>or<li>Установить обновленные версии файлов, отметив соответствующую опцию. Ваши макеты будет необходимо заново воссоздать в Студии.</li></ul>',
  'LBL_UW_PREFLIGHT_ADD_TASK' => 'Создать задачу для перезаписи вручную?',
  'LBL_UW_PREFLIGHT_COMPLETE' => 'Предварительная проверка',
  'LBL_UW_PREFLIGHT_DIFF' => 'Различаются',
  'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'Отправить себе письмо с напоминанием о перезаписи вручную?',
  'LBL_UW_PREFLIGHT_FILES_DESC' => 'Перечисленные файлы будут изменены. Снимите отметки с тех файлов, для которых будет выполнена перезапись вручную. <i>Файлы, не требующие изменения остались неотмеченными; установка отметки приведет к их перезаписи.',
  'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'Нет необходимости.',
  'LBL_UW_PREFLIGHT_NO_DIFFS' => 'Не требуется перезапись файлов вручную.',
  'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'Файлы, оставленные без изменений:',
  'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'Предварительная проверка пройдена успешно.',
  'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'Нажмите кнопку "Далее" для применения изменений.',
  'LBL_UW_PREFLIGHT_TESTS_PASSED3' => 'Пожалуйста, обратите внимание, что оставшийся процесс обновления является обязательным, и нажав на кнопку "Продолжить" вы должны будете завершить процесс. Если Вы не хотите продожлать. нажмите кнопку отмены.',
  'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'Перезаписать все файлы',
  'LBL_UW_REBUILD_TITLE' => 'Результаты обновления',
  'LBL_UW_REPAIR_INDEX' => 'Для увеличения быстродействия базы данных, пожалуйста, выполните скрипт <a href="index.php?module=Administration&action=RepairIndex" target="_blank">восстановление индексов</a>.',
  'LBL_UW_SCHEMA_CHANGE' => 'Изменения схемы',
  'LBL_UW_SHOW' => 'Показать',
  'LBL_UW_SHOW_COMPLIANCE' => 'Показать обнаруженные настройки',
  'LBL_UW_SHOW_DB_PERMS' => 'Показать отсутствующие права доступа к базе данных.',
  'LBL_UW_SHOW_DETAILS' => 'Показать подробности',
  'LBL_UW_SHOW_DIFFS' => 'Показать файлы, необходимые для перезаписи вручную',
  'LBL_UW_SHOW_NW_FILES' => 'Показать файлы с недостаточными правами доступа',
  'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'Показывать старые схемы, которые можно очистить',
  'LBL_UW_SHOW_SCHEMA' => 'Показать скрипт изменения схемы',
  'LBL_UW_SHOW_SQL_ERRORS' => 'Показать некорректные запросы',
  'LBL_UW_SKIPPED_FILES_TITLE' => 'Пропущенные файлы',
  'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'Пропущенные запросы',
  'LBL_UW_SKIPPING_FILE_OVERWRITE' => 'Пропущенные файлы перезаписаны - выбрана перезапись вручную.',
  'LBL_UW_SQL_RUN' => 'Проверять, когда запрос был выполнен вручную',
  'LBL_UW_START_DESC' => 'Добро пожаловать в мастер обновлений. Мастер создан для того, чтобы помочь администратору при обновлении системы SugarCRM.',
  'LBL_UW_START_DESC2' => 'Настоятельно рекомендуем перед обновлением системы сделать резервные копии как базы данных, так и системных файлов (всех файлов в папке SugarCRM ). Также рекомендуем вначале провести тестовое обновление на копии вашей системы.',
  'LBL_UW_START_DESC3' => 'Нажмите кнопку "Продолжить" для проверки системы, чтобы убедиться в том, что она готова к обновлению. Проверка включает в себя права доступа к файлам, привилегии баз данных и настройки сервера.',
  'LBL_UW_START_UPGRADED_UW_DESC' => 'Мастер обновления сейчас продолжит обновление системы.',
  'LBL_UW_START_UPGRADED_UW_TITLE' => 'Добро пожаловать в мастер обновления',
  'LBL_UW_SYSTEM_CHECK_CHECKING' => 'Идет проверка, пожалуйста, подождите.  Операция может занять порядка 30 секунд.',
  'LBL_UW_SYSTEM_CHECK_FILES' => 'Файлы',
  'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START' => 'Обнаружение всех необходимых файлов для проверки.',
  'LBL_UW_SYSTEM_CHECK_FOUND' => 'Найденные',
  'LBL_UW_TITLE' => 'Мастер обновления',
  'LBL_UW_TITLE_CANCEL' => 'Отмена',
  'LBL_UW_TITLE_COMMIT' => 'Выполнение обновления',
  'LBL_UW_TITLE_END' => 'Последние штрихи',
  'LBL_UW_TITLE_LAYOUTS' => 'Утвердить макеты',
  'LBL_UW_TITLE_PREFLIGHT' => 'Предварительная проверка',
  'LBL_UW_TITLE_START' => 'Добро пожаловать',
  'LBL_UW_TITLE_SYSTEM_CHECK' => 'Проверка системы',
  'LBL_UW_TITLE_UPLOAD' => 'Загрузка обновления',
  'LBL_UW_UNINSTALL' => 'Удаление',
  'LBL_WORKFLOW' => 'Бизнес процесс',
);

