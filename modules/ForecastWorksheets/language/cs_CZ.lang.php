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


$mod_strings = array (
  'ERR_FORECAST_AMOUNT' => 'Částka ke schválení je povinný číselný údaj.',
  'LBL_ACCOUNT_NAME' => 'Název společnosti',
  'LBL_AMOUNT' => 'Částka',
  'LBL_BASE_RATE' => 'Základní kurz',
  'LBL_CALCULATED_LINE_ITEM_AMOUNT' => 'Počítaná částka řádku',
  'LBL_CATEGORY_NAME' => 'Kategorie',
  'LBL_COMMIT_HEADER' => 'Schválit předpověď',
  'LBL_COMMIT_MESSAGE' => 'Chcete schválit tyto částky?',
  'LBL_COMMIT_NOTE' => 'Zadejte částky, které byste chtěli schválit pro vybrané časovém období',
  'LBL_COMMIT_STAGE' => 'Fáze schválení',
  'LBL_COST_PRICE' => 'Náklady',
  'LBL_CREATED_BY' => 'Vytvořil',
  'LBL_CURRENCY' => 'Měna',
  'LBL_CURRENCY_ID' => 'ID měny',
  'LBL_CURRENCY_RATE' => 'Kurz měny',
  'LBL_DATE_CLOSED' => 'Předpokládané datum uzavření',
  'LBL_DATE_COMMITTED' => 'Datum schválení',
  'LBL_DATE_ENTERED' => 'Datum vytvoření',
  'LBL_DATE_MODIFIED' => 'Datum změny',
  'LBL_DELETED' => 'Smazáno',
  'LBL_DISCOUNT_PRICE' => 'Jedn. cena',
  'LBL_DV_FORECAST_OPPORTUNITY' => 'Předpověď příležitostí',
  'LBL_DV_FORECAST_PERIOD' => 'Časové období předpovědi',
  'LBL_DV_FORECAST_ROLLUP' => 'Kumulativní předpověď',
  'LBL_DV_HEADER' => 'Předpovědi: list',
  'LBL_DV_LAST_COMMIT_AMOUNT' => 'Poslední schválené částky:',
  'LBL_DV_LAST_COMMIT_DATE' => 'Datum posledního schválení',
  'LBL_DV_MY_FORECASTS' => 'Moje předpovědi',
  'LBL_DV_MY_TEAM' => 'Předpovědi mého týmu',
  'LBL_DV_TIMEPERIOD' => 'Časové období:',
  'LBL_DV_TIMEPERIODS' => 'Časová období:',
  'LBL_DV_TIMPERIOD_DATES' => 'Časové rozmezí',
  'LBL_EDITABLE_INVALID' => 'Neplatná hodnota pro {{field_name}}',
  'LBL_EDITABLE_INVALID_RANGE' => 'Hodnota musí být mezi {{min}} a {{max}}',
  'LBL_FC_START_DATE' => 'Datum zahájení',
  'LBL_FC_USER' => 'Plán pro',
  'LBL_FDR_ADJ_AMOUNT' => 'Upravená částka',
  'LBL_FDR_COMMIT' => 'Schválená částka',
  'LBL_FDR_DATE_COMMIT' => 'Datum schválení',
  'LBL_FDR_OPPORTUNITIES' => 'Příležitosti v předpovědi',
  'LBL_FDR_USER_NAME' => 'Přímý report',
  'LBL_FDR_WEIGH' => 'Vážená částka příležitostí',
  'LBL_FORECAST' => 'Předpověď',
  'LBL_FORECAST_HISTORY' => 'Historie předpovědi',
  'LBL_FORECAST_HISTORY_TITLE' => 'Historie',
  'LBL_FORECAST_ID' => 'ID',
  'LBL_FORECAST_OPP_COUNT' => 'Celkový počet příležitostí',
  'LBL_FORECAST_OPP_WEIGH' => 'Vážená částka',
  'LBL_FORECAST_PIPELINE_OPP_COUNT' => 'Počet příležitostí v zásobníku',
  'LBL_FORECAST_TIME_ID' => 'ID časového období',
  'LBL_FORECAST_TYPE' => 'Typ předpovědi',
  'LBL_FORECAST_USER' => 'Uživatel',
  'LBL_FS_CASCADE' => 'Kaskádovat?',
  'LBL_FS_CREATED_BY' => 'Vytvořil:',
  'LBL_FS_DATE_ENTERED' => 'Datum vytvoření',
  'LBL_FS_DATE_MODIFIED' => 'Datum změny',
  'LBL_FS_DELETED' => 'Smazáno',
  'LBL_FS_END_DATE' => 'Datum ukončení',
  'LBL_FS_FORECAST_FOR' => 'Plán pro:',
  'LBL_FS_FORECAST_START_DATE' => 'Datum začátku předpovědi',
  'LBL_FS_MODULE_NAME' => 'Plán předpovědí',
  'LBL_FS_START_DATE' => 'Datum začátku',
  'LBL_FS_STATUS' => 'Stav',
  'LBL_FS_TIMEPERIOD' => 'Časové období',
  'LBL_FS_TIMEPERIOD_ID' => 'Časové období ID',
  'LBL_FS_USER_ID' => 'ID uživatele',
  'LBL_LEAD_SOURCE' => 'Zdroj',
  'LBL_LIST_FORM_TITLE' => 'Uložené předpovědi',
  'LBL_LIST_PRICE' => 'Ceníková cena',
  'LBL_LOADING_COMMIT_HISTORY' => 'Načítám historii schválení...',
  'LBL_LV_COMMIT' => 'Schválená částka',
  'LBL_LV_COMMIT_DATE' => 'Datum schválení',
  'LBL_LV_OPPORTUNITIES' => 'Příležitosti',
  'LBL_LV_TIMPERIOD' => 'Časové období',
  'LBL_LV_TIMPERIOD_END_DATE' => 'Datum ukončení',
  'LBL_LV_TIMPERIOD_START_DATE' => 'Datum zahájení',
  'LBL_LV_TYPE' => 'Typ předpovědi',
  'LBL_LV_WEIGH' => 'Vážená částka',
  'LBL_MANAGER_NOTIFY' => 'Následující {0} {1} nebyl(a) zařazen(a) v posledním schválení poté, co byla zařazena do předchozího',
  'LBL_MODIFIED_USER_ID' => 'Upravil',
  'LBL_MODULE_NAME' => 'Listy předpovědí',
  'LBL_MODULE_NAME_SINGULAR' => 'List předpovědi',
  'LBL_MODULE_TITLE' => 'Listy předpovědí',
  'LBL_NEXT_STEP' => 'Další krok',
  'LBL_NO_ACTIVE_TIMEPERIOD' => 'Žádné aktivní období pro předpovědi',
  'LBL_OPPORTUNITY_NAME' => 'Název obchodní příležitosti',
  'LBL_OW_ACCOUNTNAME' => 'Klient',
  'LBL_OW_DESCRIPTION' => 'Popis',
  'LBL_OW_MODULE_TITLE' => 'List příležitosti',
  'LBL_OW_NEXT_STEP' => 'Další krok',
  'LBL_OW_OPPORTUNITIES' => 'Příležitost',
  'LBL_OW_PROBABILITY' => 'Pravděpodobnost',
  'LBL_OW_REVENUE' => 'Částka',
  'LBL_OW_TYPE' => 'Typ',
  'LBL_OW_WEIGHTED' => 'Vážená částka',
  'LBL_PERCENT' => 'Procento',
  'LBL_PRODUCT' => 'Produkt',
  'LBL_PRODUCT_ID' => 'ID produktu',
  'LBL_QC_COMMIT_BUTTON' => 'Schválit',
  'LBL_QC_COMMIT_VALUE' => 'Schválená částka:',
  'LBL_QC_DIRECT_FORECAST' => 'Moje přímá předpověď:',
  'LBL_QC_HEADER_DELIM' => 'Komu',
  'LBL_QC_LAST_COMMIT_VALUE' => 'Poslední schválená částka:',
  'LBL_QC_LAST_DATE_COMMITTED' => 'Datum posledního schválení:',
  'LBL_QC_OPPORTUNITY_COUNT' => 'Počet příležitostí:',
  'LBL_QC_ROLLUP_FORECAST' => 'Moje skupinová předpověď:',
  'LBL_QC_ROLL_COMMIT_VALUE' => 'Kumulativní schválená částka:',
  'LBL_QC_TIME_PERIOD' => 'Časové období:',
  'LBL_QC_UPCOMING_FORECASTS' => 'Moje předpověďi',
  'LBL_QC_WEIGHT_VALUE' => 'Vážená částka:',
  'LBL_QC_WORKSHEET_BUTTON' => 'List',
  'LBL_QUANTITY' => 'Množství',
  'LBL_QUOTA' => 'Kvóta',
  'LBL_QUOTA_ID' => 'ID kvóty',
  'LBL_REPORTS_TO_USER_NAME' => 'Nadřízený',
  'LBL_RESET_CHECK' => 'Všechna data listu pro vybrané časové období a přihlášeného uživatele budou odstraněna. Pokračovat?',
  'LBL_RESET_WOKSHEET' => 'Resetovat list',
  'LBL_REVENUELINEITEM_NAME' => 'Název řádku tržby',
  'LBL_SALES_STAGE' => 'Fáze',
  'LBL_SALES_STATUS' => 'Stav',
  'LBL_SAVE_WOKSHEET' => 'Uložit list',
  'LBL_SEARCH' => 'Vybrat',
  'LBL_SEARCH_LABEL' => 'Vybrat',
  'LBL_SHOW_CHART' => 'Zobrazit graf',
  'LBL_SVFS_CASCADE' => 'Projevit do reportů?',
  'LBL_SVFS_FORECASTDATE' => 'Naplánovat datum začátku',
  'LBL_SVFS_HEADER' => 'Plán předpovědi:',
  'LBL_SVFS_STATUS' => 'Stav',
  'LBL_SVFS_USER' => 'Pro',
  'LBL_TIMEPERIOD_NAME' => 'Časové období',
  'LBL_TOTAL_DISCOUNT_AMOUNT' => 'Celková sleva',
  'LBL_TYPE' => 'Typ',
  'LBL_USER_NAME' => 'Uživatelské jméno',
  'LBL_VERSION' => 'Verze',
  'LBL_WK_REVISION' => 'Revize',
  'LBL_WK_VERSION' => 'Verze',
  'LB_FS_KEY' => 'ID',
  'LNK_ACCOUNTS' => 'Společnost',
  'LNK_FORECAST_LIST' => 'Zobrazit historii předpovědi',
  'LNK_NEW_OPPORTUNITY' => 'Vytvořit příležitost',
  'LNK_NEW_TIMEPERIOD' => 'Vytvořit časové období',
  'LNK_OPPORTUNITY' => 'Obchod',
  'LNK_QUOTA' => 'Zobrazit kvóty',
  'LNK_TIMEPERIOD_LIST' => 'Zobrazit časová období',
  'LNK_UPD_FORECAST' => 'List předpovědi',
);

