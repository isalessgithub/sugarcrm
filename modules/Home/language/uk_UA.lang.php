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
/*********************************************************************************

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
    'TPL_BROWSER_SUGAR7_RECORD_TITLE' => '{{#if name}}{{str name}} &raquo; {{/if}}{{module}} &raquo; {{appId}}',
    'TPL_BROWSER_SUGAR7_ABOUT_TITLE' => 'Про &raquo; {{appId}}',
  'LBL_MODULE_NAME' => 'Головна',
  'LBL_MODULE_NAME_SINGULAR' => 'Головна',
  'LBL_MODULES_TO_SEARCH' => 'Модулі для пошуку',
  'LBL_NEW_FORM_TITLE' => 'Новий контакт',
  'LBL_FIRST_NAME' => 'Ім&#39;я:',
  'LBL_LAST_NAME' => 'Прізвище:',
  'LBL_LIST_LAST_NAME' => 'Прізвище',
  'LBL_PHONE' => 'Телефон:',
  'LBL_EMAIL_ADDRESS' => 'Адреса Email:',
  'LBL_MY_PIPELINE_FORM_TITLE' => 'Моя воронка продажів',
  'LBL_PIPELINE_FORM_TITLE' => 'Діаграма стадій загальних продажів',
  'LBL_CAMPAIGN_ROI_FORM_TITLE' => 'ROI Маркетингової кампанії',
  'LBL_MY_CLOSED_OPPORTUNITIES_GAUGE' => 'Обсяг моїх успішно закритих угод',
  'LNK_NEW_CONTACT' => 'Створити контакт',
  'LNK_NEW_ACCOUNT' => 'Створити контрагент',
  'LNK_NEW_OPPORTUNITY' => 'Створити угоду',
  'LNK_NEW_QUOTE' => 'Створити комерційну пропозицію',
    'LBL_SOURCE_JQUERY' => 'jQuery - jQuery швидка і стисла JavaScript-бібліотека, яка спрощує обхід HTML-документів, роботу з подіями, анімацію, і Ajax-інтеракцію для швидкої веб-розробки.',
    'LBL_SOURCE_PLACEHOLDER' => 'jQuery-Placeholder - плагін, який активує підтримку заповнювача HTML5 для діючих браузерів.',
    'LBL_SOURCE_JQUERYUI' => 'jQuery UI - офіційна бібліотека для користувача інтерфейсу jQuery.',
    'LBL_SOURCE_LESSPHP' => 'lessphp - компілятор LESS, написаний на PHP.',
    'LBL_SOURCE_BACKBONE' => 'Backbone.js - фреймворк MVC для "важких" Javascript додатків.',
    'LBL_SOURCE_CHOSEN' => 'Chosen - бібліотека, яка допомагає зробити довгі, громіздкі вікна вибору більш зручними.',
    'LBL_SOURCE_HANDLEBARS' => 'Handlebars - шаблон двигуна для ефективної побудувати семантичних шаблонів.',
    'LBL_SOURCE_JASMINE' => 'Jasmine - фреймворк для розробки для тестування JavaScript-коду',
    'LBL_SOURCE_JQUERY_IFRAME' => 'jquery.iframe-transport.js - jQuery Ajax плагін транспортування, який підтримує завантаження файлу через прихований iframe.',
    'LBL_SOURCE_SINON' => 'sinon.js - Автономні тестові шпигуни, заглушки і мок-об&#39;єкти для JavaScript.',
    'LBL_SOURCE_STASH' => 'Stash - бібліотека для JavaScript, яка полегшує використання автономного зовнішнього запам&#39;ятовуючого пристрою.',
    'LBL_SOURCE_BOOTSTRAP' => 'Twitterbootstrap - HTML, CSS, і JS інструментарій від Twitter.',
    'LBL_SOURCE_ASYNC' => 'Async - Async утиліти для вузла і браузера.',
    'LBL_SOURCE_PHPEXCEL' => 'PHPExcel - чиста PHP бібліотека для читання і запису табличних файлів.', 
  'LNK_NEW_LEAD' => 'Створити інтерес',
  'LNK_NEW_CASE' => 'Створити звернення',
  'LNK_NEW_NOTE' => 'Створити примітку або вкладення',
  'LNK_NEW_CALL' => 'Зареєструвати дзвінок',
  'LNK_NEW_EMAIL' => 'Архівувати Email-повідомлення',
  'LNK_COMPOSE_EMAIL' => 'Написати Email-повідомлення',
  'LNK_NEW_MEETING' => 'Запланувати зустріч',
  'LNK_NEW_TASK' => 'Створити задачу',
  'LNK_NEW_BUG' => 'Звітувати про помилку',
  'LBL_ADD_BUSINESSCARD' => 'Ввести візитну картку',
  'ERR_ONE_CHAR' => 'Будь ласка, введіть принаймні одну букву або цифру для пошуку...',
  'LBL_OPEN_TASKS' => 'Мої відкриті задачі',
  'LBL_SEARCH_RESULTS_IN' => 'в',
  'LNK_NEW_SEND_EMAIL' => 'Написати Email-повідомлення',
  'LBL_NO_ACCESS' => 'Ви не маєте прав доступу до цієї сторінки. Зверніться до системного адміністратора, щоб отримати відповідні права.',
  'LBL_NO_RESULTS_IN_MODULE' => '-- Немає результатів --',
  'LBL_NO_RESULTS' => '<h2>Результатів не знайдено. Будь ласка, повторіть пошук.</h2><br>',
  'LBL_NO_RESULTS_TIPS' => '<h3> Підказка при пошуку: </h3> <ul> <li> Переконайтеся, що ви обрали необхідні категорії. </li> <li> Вкажіть більш докладні умови пошуку. </li> <li> Якщо ви все ще нічого не знайшли - спробуйте скористатися закладкою "Розширений пошук" відповідного модуля. </li> </ul>',

  'LBL_RELOAD_PAGE' => 'Будь ласка, <a href="javascript: window.location.reload()"> обновіть сторінку </a>, щоб побачити дашлет Sugar ..',
  'LBL_ADD_DASHLETS' => 'Додати розділи Sugar',
  'LBL_ADD_PAGE' => 'Додати сторінку',
  'LBL_DEL_PAGE' => 'Видалити сторінку',
  'LBL_WEBSITE_TITLE' => 'Веб-сторінка',
  'LBL_RSS_TITLE' => 'Стрічка новин',
  'LBL_DELETE_PAGE' => 'Видалити сторінку',
  'LBL_CHANGE_LAYOUT' => 'Змінити розташування',
  'LBL_RENAME_PAGE' => 'Перейменувати сторінку',
  'LBL_CLOSE_DASHLETS' => 'Закрити',
  'LBL_OPTIONS' => 'Параметри',
  // dashlet search fields
  'LBL_TODAY'=>'Сьогодні',
  'LBL_YESTERDAY' => 'Вчора',
  'LBL_TOMORROW'=>'Завтра',
  'LBL_LAST_WEEK'=>'Минулого тижня',
  'LBL_NEXT_WEEK'=>'Наступного тижня',
  'LBL_LAST_7_DAYS'=>'Минулі 7 днів',
  'LBL_NEXT_7_DAYS'=>'Наступні 7 днів',
  'LBL_LAST_MONTH'=>'Минулого місяця',
  'LBL_NEXT_MONTH'=>'Наступного місяця',
  'LBL_LAST_QUARTER'=>'Минулої чверті',
  'LBL_THIS_QUARTER'=>'Цієї чверті',
  'LBL_LAST_YEAR'=>'Минулого року',
  'LBL_NEXT_YEAR'=>'Наступного року',
  'LBL_LAST_30_DAYS' => 'Минулі 30 днів',
  'LBL_NEXT_30_DAYS' => 'Наступні 30 днів',
  'LBL_THIS_MONTH' => 'Цього місяця',
  'LBL_THIS_YEAR' => 'Цього року',

  'LBL_MODULES' => 'Модулі',
  'LBL_CHARTS' => 'Графіки',
  'LBL_TOOLS' => 'Інструменти',
  'LBL_WEB' => 'Веб',
  'LBL_SEARCH_RESULTS' => 'Результати пошуку',

  // Dashlet Categories
  'dashlet_categories_dom' => array(
      'Module Views' => 'Перегляди модуля',
      'Portal' => 'Портал',
      'Charts' => 'Графіки',
      'Tools' => 'Інструменти',
      'Miscellaneous' => 'Різне'),
  'LBL_MAX_DASHLETS_REACHED' => 'Ви додали максимальну кількість дашлетів Sugar, встановлену адміністратором. Будь ласка, видаліть один з існуючих дашлетів для додавання нового.',
  'LBL_ADDING_DASHLET' => 'Додавання розділу Sugar ...',
  'LBL_ADDED_DASHLET' => 'Розділ Sugar доданий',
  'LBL_DASHBOARD_LAYOUT_CONFIRM' => 'Дашлети будуть перекомпоніровани, ви точно хочете змінити зовнішній вигляд колонки?',
  'LBL_REMOVE_DASHLET_CONFIRM' => 'Ви дійсно бажаєте видалити розділ Sugar?',
  'LBL_REMOVING_DASHLET' => 'Видалення розділу Sugar ...',
  'LBL_REMOVED_DASHLET' => 'Розділ Sugar видалений',
  'LBL_DASHLET_CONFIGURE_GENERAL' => 'Загальні налаштування',
  'LBL_DASHLET_CONFIGURE_FILTERS' => 'Фільтри',
  'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Тільки мої записи',
  'LBL_DASHLET_CONFIGURE_TITLE' => 'Посада',
  'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Відобразити ряди',
  'LBL_NO_DASHBOARD_CONFIGURED' => 'Робочий стіл не налаштований.',
  'LBL_CREATE_DASHBOARD_LINK' => 'Створити інформаційну панель',

  'LBL_DASHLET_WEBPAGE_NAME' => 'Веб-сторінка',
  'LBL_DASHLET_WEBPAGE_DESC' => 'Веб-сторінка',
  'LBL_DASHLET_WEBPAGE_URL' => 'URL',
  'LBL_DASHLET_WEBPAGE_URL_HELP' => 'Деякі сайти можуть не завантажитися з причини небезпечного вмісту або політики безпеки.',

  'LBL_DASHLET_ADD' => 'Додати розділ Sugar®',
  'LBL_DASHLET_DELETE' => 'Видалити розділ Sugar',
  'LBL_DASHLET_REFRESH' => 'Оновити розділ Sugar',
  'LBL_DASHLET_EDIT' => 'Редагувати розділ Sugar',
  'LBL_DASHBOARD_TITLE' => 'Заголовок інформаційної панелі',
  'LBL_CREATE_DASHBOARD_MENU' => 'Створити інформаційну панель',
  'LBL_DASHBOARD_EDIT' => 'Редагувати інформаційну панель',
  'LBL_DASHBOARD_ADD_ROW' => 'Додати ряд',
  'LBL_DASHBOARD_ADD_1_COLUMN' => '+ 1 колонка',
  'LBL_DASHBOARD_ADD_2_COLUMNS' => '+ 2 колонки',
  'LBL_DASHBOARD_ADD_3_COLUMNS' => '+ 3 колонки',
  'LBL_DASHBOARD_1_COLUMN_LAYOUT' => 'зовнішній вигляд колонки 1',
  'LBL_DASHBOARD_2_COLUMN_LAYOUT' => 'зовнішній вигляд колонки 2',
  'LBL_DASHBOARD_3_COLUMN_LAYOUT' => 'зовнішній вигляд колонки 3',

  'LBL_TRAINING_TITLE' => 'Навчання',
  'LBL_SEARCH_DASHLET' => 'Пошук розділів',
  'LBL_CREATING_NEW_PAGE' => 'Створення нової сторінки...',
  'LBL_NEW_PAGE_FEEDBACK' => 'Ви створили нову сторінку. Ви можете наповнити її новим вмістом, скориставшись опцією Додати Дашлети Sugar.',
  'LBL_DELETE_PAGE_CONFIRM' => 'Ви дійсно бажаєте видалити цю сторінку?',
  'LBL_DELETE_DASHBOARD_CONFIRM' => 'Ви дійсно бажаєте видалити цю інформаційну панель?',
  'LBL_DELETE_DASHBOARD_SUCCESS' => 'Інформаційна панель "{{name}}" була видалена.',
  'LBL_SAVING_PAGE_TITLE' => 'Збереження заголовка сторінки ...',
  'LBL_RETRIEVING_PAGE' => 'Пошук сторінки ...',

  // Default out-of-box names for tabs
  'LBL_HOME_PAGE_1_NAME' => 'Мій Sugar',
  'LBL_HOME_PAGE_2_NAME' => 'Продажі',
  'LBL_HOME_PAGE_3_NAME' => 'Підтримка',
  'LBL_HOME_PAGE_6_NAME' => 'Маркетингові кампанії',//bug 16510, separate the support and marketing page from each other
  'LBL_HOME_PAGE_4_NAME' => 'Трекер',
  'LBL_CLOSE_SITEMAP' =>'Закрити',

  'LBL_SEARCH' => 'Пошук',
  'LBL_CLEAR' => 'Очистити',

  'LBL_BASIC_CHARTS' => 'Основні графіки',
  'LBL_REPORT_CHARTS' => 'Графіки звітів',

  'LBL_MY_FAVORITE_REPORT_CHARTS' => 'Мої обрані звіти',
  'LBL_GLOBAL_REPORT_CHARTS' => 'Загальні звіти команди',
  'LBL_MY_TEAM_REPORT_CHARTS' => 'Звіти моєї команди',
  'LBL_MY_SAVED_REPORT_CHARTS' => 'Мої збережені звіти',

  'LBL_DASHLET_SEARCH' => 'Знайти розділ Sugar',

//ABOUT page
  'LBL_VERSION' => 'Версія',
  'LBL_BUILD' => 'Збірка',
    'TPL_ABOUT' => 'Про {{product_name}}, Версія {{version}} (Побудувати {{build}}{{#if custom_version}} - {{custom_version}}{{/if}})',
    'LBL_RESOURCES' => 'Ресурси',
    'LBL_RESOURCES_DOCUMENTATION' => 'Документація',
    'LBL_RESOURCES_DEVELOPERS' => 'Розробники',
    'LBL_RESOURCES_SUGAR_INFO' => 'Відомості про компанію SugarCRM',
    'LBL_LANGUAGE_PACKS' => 'Мовні пакети',
    'TPL_LANGUAGE_PACKS_PROVIDED_BY' => 'Надано {{{link}}}',
    'LBL_SUGAR_VERSION' => 'версія',
    'LBL_SUGAR_SOURCECODE_DESC' => 'Додаток автоматизації Salesforce',
    'LBL_THIRD_PARTY_SOFTWARE_TITLE' => 'Програмне забезпечення третіх сторін',
    'LBL_THIRD_PARTY_SOURCECODE' => 'Інформація код, створений третьою стороною, що використовується в цьому продукті, включаючи пов&#39;язані умови ліцензії, доступна на',
  'LBL_SUGAR_COMMUNITY_EDITION' => 'Sugar Community Edition',
  'LBL_SUGAR_PROFESSIONAL' => "Sugar Professional",
  'LBL_SUGAR_ENTERPRISE' => "Sugar Enterprise",
  'LBL_AND' => "та",
  'LBL_ARE' => "є",
  'LBL_TRADEMARKS' => 'торговельні марки',
  'LBL_OF' => 'з',
  'LBL_FOUNDERS' => 'Засновники',
  'LBL_DEVELOPERS' => 'Розробники',
  'LBL_JOIN_SUGAR_COMMUNITY' => 'Приєднайтесь до товариства Sugar',
  'LBL_DETAILS_SUGARFORGE' => 'Співпрацюйте з іншими і створюйте розширення Sugar',
  'LBL_DETAILS_SUGAREXCHANGE' => 'Купуйте й продавайте сертифіковані розширення Sugar',
  'LBL_TRAINING' => 'Навчання',
  'LBL_DETAILS_TRAINING' => 'Дізнайтеся більше про використання Sugar в режимі онлайн і про інтерактивні навчальні матеріали',
  'LBL_FORUMS' => 'Форуми',
  'LBL_DETAILS_FORUMS' => 'Обговорюйте Sugar з спільнотою експертів - як з користувачами, так і з розробниками',
  'LBL_WIKI' => 'Вікі',
  'LBL_DETAILS_WIKI' => 'Використовуйте базу знань для пошуку тем користувачів і розробників',
  'LBL_DEVSITE' => 'Сайт розробників',
  'LBL_DETAILS_DEVSITE' => 'Знаходьте джерела, керівництва та корисні посилання. щоб бути в курсі останніх розробок Sugar',
  'LBL_GET_SUGARCRM_RSS' => 'Підписатися на RSS SugarCRM',
  'LBL_SUGARCRM_NEWS' => 'Новини SugarCRM',
  'LBL_SUGARCRM_TRAINING_NEWS' => 'Новини навчання від SugarCRM',
  'LBL_SUGARCRM_FORUMS' => 'Форуми SugarCRM',
  'LBL_SUGARFORGE_NEWS' => 'Новини SugarForge',
  'LBL_ALL_NEWS' => 'Всі новини',
  'LBL_LINK_CURRENT_CONTRIBUTORS' => 'Пройдіть за цим посиланням і перегляньте поточний список приймаючих участь в розробці та розвитку SugarCRM!',
  'LBL_SOURCE_CODE' => 'Вихідний код',
  'LBL_SOURCE_SUGAR' => 'SugarCRM - найпопулярніший у світі додаток з автоматизації процесу продажів, створений компанією SugarCRM Inc.',
  'LBL_SOURCE_XTEMPLATE' => 'XTemplate - шаблонний двигун для PHP створений Barnabás Debreceni',
  'LBL_SOURCE_NUSOAP' => 'NuSOAP - Набір PHP класів, які дають можливість розробникам створювати і користуватися веб-сервісами, створеними корпораціями NuSphere і Dietrich Ayala',
  'LBL_SOURCE_JSCALENDAR' => 'JS Calenda - Календар для введення дат, автор:  Mihai Bazon',
  'LBL_SOURCE_PHPPDF' => 'PHP PDF - бібліотека для створення PDF-документів, автор: Wayne Munro',
  'LBL_SOURCE_HTTP_WEBDAV_SERVER' => 'HTTP_WebDAV_Server - Реалізація сервера WebDAV в PHP.',
  'LBL_SOURCE_PCLZIP' => 'PclZip - бібліотека, яка пропонує стискання і отримання функцій для архівів формату Zip, автор: Vincent Blavet',
  'LBL_SOURCE_SMARTY' => 'Smarty - шаблонний двигун для PHP.',
  'LBL_SOURCE_YAHOO_UI_LIB' => 'Yahoo! User Interface Library - Властивості UI Library полегшують застосування клієнтських властивостей.',
  'LBL_SOURCE_PHPMAILER' => 'PHPMailer - Повнофункціональний клас пересилання e-mail для PHP',
  'LBL_SOURCE_JSHRINK' => 'JShrink - мінімізатор Javascript, написаний на PHP',
  'LBL_SOURCE_CRYPT_BLOWFISH' => 'Crypt_Blowfish - Дає можливість швидкого двостороннього шифрування blowfish без запитів розширення MCrypt PHP.',
  'LBL_SOURCE_XML_HTMLSAX3' => 'XML_HTMLSax3 - синтаксичний аналізатор SAX для HTML та інших погано сформованих XML-документів.',
  'LBL_SOURCE_YAHOO_UI_LIB_EXT' => 'Yahoo! UI Extensions Library - Розширення  бібліотеки інтерфейсу користувача, автор: Jack Slocum',
  'LBL_SOURCE_SWFOBJECT' => 'SWFObject - скрипт для виявлення і зупинки Javascript Flash Player.',
  'LBL_SOURCE_TINYMCE' => 'TinyMCE - WYSIWYG editor control для веб-браузерів, який дає користувачеві можливість редагувати вміст HTML',
  'LBL_SOURCE_EXT' => 'Ext - клієнтський JavaScript фреймворк для створення веб-додатків.',
  'LBL_SOURCE_RECAPTCHA' => 'reCAPTCHA - безкоштовний сервіс CAPTCHA, який допомагає цифрувати книги, газети і старі випуски радіопередач.',
  'LBL_SOURCE_TCPDF' => 'TCPDF - PHP-клас для генерування PDF-документів.',
  'LBL_SOURCE_CSSMIN' => 'CssMin - A css parser and minifier.',
  'LBL_SOURCE_PHPSAML' => 'PHP-SAML - Простий SAML-інструментарій для PHP.',
  'LBL_SOURCE_ISCROLL' => 'iScroll - Можливість overflow: scroll для мобільного інструментарію. Основна прокрутка всередині елементів, фіксованих по довжині / ширині.',
  'LBL_SOURCE_FLASHCANVAS' => 'FlashCanvas - це бібліотека JavaScript, для підтримки HTML5 Canvas в Internet Explorer. Він надає форми і зображення за допомогою Flash drawing API. Підтримує більшість Canvas API а в багатьох випадках працює швидше, ніж інші аналогічні бібліотеки, що використовують VML або Silverlight.',
  'LBL_SOURCE_JIT' => 'JavaScript InfoVis Toolkit - це інструментарій для створення інтерактивних візуалізацій даних для розміщення в мережі Інтернет.',
  'LBL_SOURCE_ZEND' => 'Zend Framework - фреймворк веб-додатку з відкритим кодом для PHP5.',
  'LBL_SOURCE_PARSECSV' => 'parseCSV - аналізатор даних з CSV для PHP',
  'LBL_SOURCE_PHPJS' => 'php.js - Використовуйте функції PHP в JavaScript',
  'LBL_SOURCE_PHPSQL' => 'PHP SQL Parser',
  'LBL_SOURCE_HTMLPURIFIER' => 'HTML Purifier - Відповідна стандартам бібліотека фільтрації HTML.',
  'LBL_SOURCE_XHPROF' => 'XHProf - ієрархічний профайлер для PHP',
  'LBL_DASHLET_TITLE' => 'Мої сайти',
  'LBL_DASHLET_OPT_TITLE' => 'Посада',
  'LBL_DASHLET_OPT_URL' => 'Адреса веб-сайту',
  'LBL_DASHLET_OPT_HEIGHT' => 'Висота розділу (в пікселях)',
  'LBL_DASHLET_SUGAR_NEWS' => 'Новини Sugar',
  'LBL_DASHLET_DISCOVER_SUGAR_PRO' => 'Відкрийте для себе Sugar',
	'LBL_POWERED_BY_SUGAR' => 'Надано SugarCRM' /*for 508 compliance fix*/,
	'LBL_MORE_DETAIL' => 'Детальніше' /*for 508 compliance fix*/,
	'LBL_BASIC_SEARCH' => 'Базовий пошук' /*for 508 compliance fix*/,
	'LBL_ADVANCED_SEARCH' => 'Розширений пошук' /*for 508 compliance fix*/,

  'LBL_MOST_ACTIVE_COLLEAGUES' => 'Активний',
  'LBL_MOST_ACTIVE_COLLEAGUES_DESC' => 'Відображає поточних користувачів',
  'LBL_MOST_CALLS_MADE' => 'зроблено {{count}} дзвінків',
  'LBL_MOST_EMAILS_SENT' => 'надіслано {{count}} email-повідомлень',
  'LBL_MOST_EMAILS_RECEIVED' => 'отримано {{count}} email-повідомлень',
  'LBL_MOST_MEETING_HELD' => 'проведено {{count}} зустрічей',

    'LBL_SUGAR_CUBE_ALT' => 'SugarCRM',


    // Record View Help Text
    'LBL_HELP_RECORD_TITLE' => 'Ласкаво просимо в панель Довідки Sugar 7',
    'LBL_HELP_RECORD' => 'Довідка відображає конкретну інформацію про модуль, яку Ви переглядаєте, відображає детальні кроки для виконання деяких дій у модулі і вказує шлях для отримання більш повної інформації та підтримки. Довідкова панель залишається відкритою для того, щоб Ви переглядали кроки тоді, коли Ви проходите ці кроки в модулі. Довідкова панель доступна для всіх модулів Sugar 7 і може перемикатися на "відкриту" та "закриту" натисканням на кнопку "Допомога" у нижньому колонтитулі програми.',

    'LBL_FACETS_DASHBOARD_TITLE' => 'Фільтр',
);
