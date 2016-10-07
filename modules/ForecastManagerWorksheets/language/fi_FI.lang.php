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
  'ERR_FORECAST_AMOUNT' => 'Commitin määrä vaaditaan, ja sen on oltava numero.',
  'LBL_AMOUNT' => 'Määrä',
  'LBL_BASE_RATE' => 'Peruskorko',
  'LBL_COMMIT_HEADER' => 'Ennusteen commit',
  'LBL_COMMIT_MESSAGE' => 'Haluatko varmasti commitoida nämä määrät?',
  'LBL_COMMIT_NOTE' => 'Syötä määrät, jotka haluat commitoida valitulle ajanjaksolle:',
  'LBL_COMMIT_STAGE' => 'Commitin vaihe',
  'LBL_CREATED_BY' => 'Luonut',
  'LBL_CURRENCY' => 'Valuutta',
  'LBL_CURRENCY_ID' => 'Valuutta-ID',
  'LBL_CURRENCY_RATE' => 'Valuuttakurssi',
  'LBL_DATE_CLOSED' => 'Odotettu sulkupäivämäärä',
  'LBL_DATE_COMMITTED' => 'Commitin päivämäärä',
  'LBL_DATE_ENTERED' => 'Syöttöpäivämäärä',
  'LBL_DATE_MODIFIED' => 'Muokattu viimeksi:',
  'LBL_DELETED' => 'Poistettu',
  'LBL_DV_FORECAST_OPPORTUNITY' => 'Ennusteen myyntimahdollisuudet',
  'LBL_DV_FORECAST_PERIOD' => 'Ennusteen ajanjakso',
  'LBL_DV_FORECAST_ROLLUP' => 'Ennuste-rollup',
  'LBL_DV_HEADER' => 'Ennusteet: Työkirja',
  'LBL_DV_LAST_COMMIT_AMOUNT' => 'Edellisen commitin määrä:',
  'LBL_DV_LAST_COMMIT_DATE' => 'Edellisen commitin päiväys:',
  'LBL_DV_MY_FORECASTS' => 'Omat ennusteet',
  'LBL_DV_MY_TEAM' => 'Tiimini ennusteet',
  'LBL_DV_TIMEPERIOD' => 'Ajanjakso:',
  'LBL_DV_TIMEPERIODS' => 'Ajanjaksot:',
  'LBL_DV_TIMPERIOD_DATES' => 'Aikaväli:',
  'LBL_EDITABLE_INVALID' => 'Kelpaamaton arvo: {{field_name}}',
  'LBL_EDITABLE_INVALID_RANGE' => 'Arvon on oltava välillä {{min}} – {{max}}',
  'LBL_FC_START_DATE' => 'Aloituspäivä',
  'LBL_FC_USER' => 'Ajoita:',
  'LBL_FDR_ADJ_AMOUNT' => 'Säädetty määrä',
  'LBL_FDR_COMMIT' => 'Commitoitu määrä',
  'LBL_FDR_DATE_COMMIT' => 'Commitin päiväys',
  'LBL_FDR_OPPORTUNITIES' => 'Myyntimahdollisuuksia ennusteessa:',
  'LBL_FDR_USER_NAME' => 'Suora raportti',
  'LBL_FDR_WEIGH' => 'Myyntimahdollisuuksien painotettu määrä:',
  'LBL_FORECAST' => 'Ennuste',
  'LBL_FORECAST_HISTORY' => 'Ennusteet: Historia',
  'LBL_FORECAST_HISTORY_TITLE' => 'Historia',
  'LBL_FORECAST_ID' => 'Ennuste-ID',
  'LBL_FORECAST_OPP_COUNT' => 'Myyntimahdollisuuksien kokonaismäärä',
  'LBL_FORECAST_OPP_WEIGH' => 'Painotettu määrä:',
  'LBL_FORECAST_PIPELINE_OPP_COUNT' => 'Suppilon myyntimahdollisuuksien määrä',
  'LBL_FORECAST_TIME_ID' => 'Ajanjakson ID',
  'LBL_FORECAST_TYPE' => 'Ennusteen tyyppi',
  'LBL_FORECAST_USER' => 'Käyttäjä',
  'LBL_FS_CASCADE' => 'Kaskadoi?',
  'LBL_FS_CREATED_BY' => 'Luonut',
  'LBL_FS_DATE_ENTERED' => 'Syöttöpäivämäärä',
  'LBL_FS_DATE_MODIFIED' => 'Muokattu viimeksi',
  'LBL_FS_DELETED' => 'Poistettu',
  'LBL_FS_END_DATE' => 'Päättymispäivä',
  'LBL_FS_FORECAST_FOR' => 'Ajoita:',
  'LBL_FS_FORECAST_START_DATE' => 'Ennusteen aloituspäivä',
  'LBL_FS_MODULE_NAME' => 'Ennusteaikataulu',
  'LBL_FS_START_DATE' => 'Aloituspäivä',
  'LBL_FS_STATUS' => 'Status',
  'LBL_FS_TIMEPERIOD' => 'Ajanjakso',
  'LBL_FS_TIMEPERIOD_ID' => 'Ajanjakson ID',
  'LBL_FS_USER_ID' => 'Käyttäjä-ID',
  'LBL_HISTORY_LOG' => 'Edellinen commit',
  'LBL_LIST_FORM_TITLE' => 'Commitoidut ennusteet',
  'LBL_LOADING_COMMIT_HISTORY' => 'Ladataan commit-historiaa...',
  'LBL_LV_COMMIT' => 'Commitoitu määrä',
  'LBL_LV_COMMIT_DATE' => 'Commitin päivämäärä',
  'LBL_LV_OPPORTUNITIES' => 'Myyntimahdollisuudet',
  'LBL_LV_TIMPERIOD' => 'Ajanjakso',
  'LBL_LV_TIMPERIOD_END_DATE' => 'Päättymispäivä',
  'LBL_LV_TIMPERIOD_START_DATE' => 'Aloituspäivä',
  'LBL_LV_TYPE' => 'Ennusteen tyyppi',
  'LBL_LV_WEIGH' => 'Painotettu määrä',
  'LBL_MANGER_SAVED' => 'Manager tallennettu',
  'LBL_MODIFIED_USER_ID' => 'Muokkaaja:',
  'LBL_MODULE_NAME' => 'Ennustehallintatyökirjat',
  'LBL_MODULE_NAME_SINGULAR' => 'Ennustehallintatyökirja',
  'LBL_MODULE_TITLE' => 'Ennustehallintatyökirjat',
  'LBL_MY_MANAGER_LINE' => '{{full_name}} (minä)',
  'LBL_NO_ACTIVE_TIMEPERIOD' => 'Ei aktiivisia ajanjaksoja ennusteita varten.',
  'LBL_NO_COMMIT' => 'Ei edellisestä committia',
  'LBL_OW_ACCOUNTNAME' => 'Asiakas',
  'LBL_OW_DESCRIPTION' => 'Kuvaus',
  'LBL_OW_MODULE_TITLE' => 'Myyntimahdollisuustyökirja',
  'LBL_OW_NEXT_STEP' => 'Seuraava vaihe',
  'LBL_OW_OPPORTUNITIES' => 'Myyntimahdollisuus',
  'LBL_OW_PROBABILITY' => 'Todennäköisyys',
  'LBL_OW_REVENUE' => 'Määrä',
  'LBL_OW_TYPE' => 'Tyyppi',
  'LBL_OW_WEIGHTED' => 'Painotettu määrä',
  'LBL_PERCENT' => 'Prosenttia',
  'LBL_PRODUCT_ID' => 'Tuotteen ID',
  'LBL_QC_COMMIT_BUTTON' => 'Commit',
  'LBL_QC_COMMIT_VALUE' => 'Commitien määrä:',
  'LBL_QC_DIRECT_FORECAST' => 'Oma suora ennuste',
  'LBL_QC_HEADER_DELIM' => 'Vastaanottaja',
  'LBL_QC_LAST_COMMIT_VALUE' => 'Edellisen commitin määrä:',
  'LBL_QC_LAST_DATE_COMMITTED' => 'Edellisen commitin päiväys:',
  'LBL_QC_OPPORTUNITY_COUNT' => 'Myyntimahdollisuuksien määrä:',
  'LBL_QC_ROLLUP_FORECAST' => 'Oma ryhmäennuste',
  'LBL_QC_ROLL_COMMIT_VALUE' => 'Rollup commit -määrä:',
  'LBL_QC_TIME_PERIOD' => 'Ajanjakso:',
  'LBL_QC_UPCOMING_FORECASTS' => 'Omat ennusteet',
  'LBL_QC_WEIGHT_VALUE' => 'Painotettu määrä:',
  'LBL_QC_WORKSHEET_BUTTON' => 'Työkirja',
  'LBL_QUOTA' => 'Tavoite',
  'LBL_QUOTA_ADJUSTED' => 'Tavoite (säädetty)',
  'LBL_QUOTA_ID' => 'Tavoitteen ID',
  'LBL_REPORTS_TO_USER_NAME' => 'Raportoi henkilölle',
  'LBL_RESET_CHECK' => 'Kaikki työkirjadata valitulle ajanjaksolle ja sisäänkirjautuneelle käyttäjälle poistetaan. Jatketaanko silti?',
  'LBL_RESET_WOKSHEET' => 'Palauta työkirja',
  'LBL_SALES_STAGE' => 'Vaihe',
  'LBL_SAVE_WOKSHEET' => 'Tallenna työkirja',
  'LBL_SEARCH' => 'Valitse',
  'LBL_SEARCH_LABEL' => 'Valitse',
  'LBL_SHOW_CHART' => 'Näytä kaavio',
  'LBL_SVFS_CASCADE' => 'Kaskadoi raportteihin?',
  'LBL_SVFS_FORECASTDATE' => 'Ajoita alkupäivämäärä',
  'LBL_SVFS_HEADER' => 'Ennusteaikataulu:',
  'LBL_SVFS_STATUS' => 'Status',
  'LBL_SVFS_USER' => 'For',
  'LBL_TIMEPERIOD_NAME' => 'Ajanjakso',
  'LBL_USER_NAME' => 'Käyttäjänimi',
  'LBL_VERSION' => 'Versio',
  'LBL_WK_REVISION' => 'Revisio',
  'LBL_WK_VERSION' => 'Versio',
  'LB_FS_KEY' => 'ID',
  'LNK_FORECAST_LIST' => 'Näytä ennustehistoria',
  'LNK_NEW_OPPORTUNITY' => 'Luo myyntimahdollisuus',
  'LNK_NEW_TIMEPERIOD' => 'Luo ajanjakso',
  'LNK_QUOTA' => 'Näytä tavoitteet',
  'LNK_TIMEPERIOD_LIST' => 'Näytä ajanjaksot',
  'LNK_UPD_FORECAST' => 'Ennustehallintatyökirja',
);

