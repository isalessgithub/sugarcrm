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
  'LBL_MODULE_TITLE' => 'Forecasts',
  'LBL_FORECAST_ID' => 'ID',
  'LBL_FORECAST_TYPE' => 'Forecast Type',
  'LBL_FORECAST_OPP_COUNT' => 'Opportunities',
  'LBL_OW_OPPORTUNITIES' => 'Opportunity',
  'LBL_OW_TYPE' => 'Type',
  'LBL_SVFS_STATUS' => 'Status',
  'LB_FS_KEY' => 'ID',
  'LBL_FS_STATUS' => 'Status',
  'LBL_DV_FORECAST_OPPORTUNITY' => 'Forecast Opportunities',
  'LBL_DV_FORECAST_ROLLUP' => 'Forecast Rollup',
  'LBL_LV_TYPE' => 'Forecast Type',
  'LBL_LV_OPPORTUNITIES' => 'Opportunities',
  'LBL_FMT_ROLLUP_FORECAST' => '(Rollup)',
  'LBL_FMT_DIRECT_FORECAST' => '(Direct)',
  'LBL_GRAPH_QUOTA_LEGEND' => 'Quota',
  'LBL_TP_QUOTA' => 'Quota:',
  'LBL_MODULE_NAME' => 'Forecast',
  'LNK_NEW_OPPORTUNITY' => 'Nieuwe Opportunity',
  'LBL_LIST_FORM_TITLE' => 'Vastgelegde Forecasts',
  'LNK_UPD_FORECAST' => 'Forecast Werkblad',
  'LNK_QUOTA' => 'Bekijk Quotas',
  'LNK_FORECAST_LIST' => 'Bekijk Forecast Historie',
  'LBL_FORECAST_HISTORY' => 'Forecasts: Historie',
  'LBL_FORECAST_HISTORY_TITLE' => 'Forecasts: Historie',
  'LBL_TIMEPERIOD_NAME' => 'Periode',
  'LBL_USER_NAME' => 'Gebruiker',
  'LBL_REPORTS_TO_USER_NAME' => 'Rapporteert Aan',
  'LBL_FORECAST_TIME_ID' => 'PeriodeId',
  'LBL_FORECAST_OPP_WEIGH' => 'Gewogen Bedrag',
  'LBL_FORECAST_OPP_COMMIT' => 'Waarschijnlijk Geval',
  'LBL_FORECAST_OPP_BEST_CASE' => 'Beste Geval',
  'LBL_FORECAST_OPP_WORST' => 'Slechtste Geval',
  'LBL_FORECAST_USER' => 'Gebruiker',
  'LBL_DATE_COMMITTED' => 'Datum Vastgelegd',
  'LBL_DATE_ENTERED' => 'Datum ingevoerd',
  'LBL_DATE_MODIFIED' => 'Laatste wijziging',
  'LBL_CREATED_BY' => 'Gemaakt door',
  'LBL_DELETED' => 'Verwijderd',
  'LBL_MODIFIED_USER_ID' => 'Gewijzigd door',
  'LBL_QC_TIME_PERIOD' => 'Periode:',
  'LBL_QC_OPPORTUNITY_COUNT' => 'Opportunity Aantal:',
  'LBL_QC_WEIGHT_VALUE' => 'Gewogen Bedrag:',
  'LBL_QC_COMMIT_VALUE' => 'Vastgelegd Bedrag:',
  'LBL_QC_COMMIT_BUTTON' => 'Vastleggen',
  'LBL_QC_WORKSHEET_BUTTON' => 'Werkblad',
  'LBL_QC_ROLL_COMMIT_VALUE' => 'Rollup Vastgelegd Bedrag:',
  'LBL_QC_DIRECT_FORECAST' => 'Mijn Directe Forecast:',
  'LBL_QC_ROLLUP_FORECAST' => 'Mijn Groepsforecast:',
  'LBL_QC_UPCOMING_FORECASTS' => 'Mijn Forecasts',
  'LBL_QC_LAST_DATE_COMMITTED' => 'Laatste datum Vastleggen:',
  'LBL_QC_LAST_COMMIT_VALUE' => 'Laatste Bedag Vastgelegd:',
  'LBL_QC_HEADER_DELIM' => 'Aan',
  'LBL_OW_ACCOUNTNAME' => 'Organisatie',
  'LBL_OW_REVENUE' => 'Bedrag',
  'LBL_OW_WEIGHTED' => 'Gewogen Bedrag',
  'LBL_OW_MODULE_TITLE' => 'Opportunity Werkblad',
  'LBL_OW_PROBABILITY' => 'Waarschijnlijkheid',
  'LBL_OW_NEXT_STEP' => 'Volgende Stap',
  'LBL_OW_DESCRIPTION' => 'Beschrijving',
  'LNK_NEW_TIMEPERIOD' => 'Nieuwe Periode',
  'LNK_TIMEPERIOD_LIST' => 'Bekijk Perioden',
  'LBL_SVFS_FORECASTDATE' => 'Plan Begindatum',
  'LBL_SVFS_USER' => 'Voor',
  'LBL_SVFS_CASCADE' => 'Uitrollen naar Rapporten?',
  'LBL_SVFS_HEADER' => 'Forecastplan:',
  'LBL_FS_TIMEPERIOD_ID' => 'Periode Id',
  'LBL_FS_USER_ID' => 'Gebruikers Id',
  'LBL_FS_TIMEPERIOD' => 'Periode',
  'LBL_FS_START_DATE' => 'Begindatum',
  'LBL_FS_END_DATE' => 'Einddatum',
  'LBL_FS_FORECAST_START_DATE' => 'Forecast Begindatum',
  'LBL_FS_FORECAST_FOR' => 'Plannen voor:',
  'LBL_FS_CASCADE' => 'Uitrollen?',
  'LBL_FS_MODULE_NAME' => 'Forecast plan',
  'LBL_FS_CREATED_BY' => 'Gemaakt door',
  'LBL_FS_DATE_ENTERED' => 'Datum Ingevoerd',
  'LBL_FS_DATE_MODIFIED' => 'Laatste wijziging',
  'LBL_FS_DELETED' => 'Verwijderd',
  'LBL_FDR_USER_NAME' => 'Rapporteerder',
  'LBL_FDR_OPPORTUNITIES' => 'Opportunites in forecast:',
  'LBL_FDR_WEIGH' => 'Gewogen bedrag opportunities:',
  'LBL_FDR_COMMIT' => 'Vastgelegd Bedrag',
  'LBL_FDR_DATE_COMMIT' => 'VastlegDatum',
  'LBL_DV_HEADER' => 'Forecasts: Werkblad',
  'LBL_DV_MY_FORECASTS' => 'Mijn Forecasts',
  'LBL_DV_MY_TEAM' => 'Mijn Teams Forecasts',
  'LBL_DV_TIMEPERIODS' => 'Perioden:',
  'LBL_DV_FORECAST_PERIOD' => 'Forecastperiode',
  'LBL_SEARCH' => 'Kies',
  'LBL_SEARCH_LABEL' => 'Kies',
  'LBL_COMMIT_HEADER' => 'Forecast Vastleggen',
  'LBL_DV_LAST_COMMIT_DATE' => 'Laatste datum Vastleggen:',
  'LBL_DV_LAST_COMMIT_AMOUNT' => 'Laatste Vastgelegde Bedrag:',
  'LBL_DV_TIMEPERIOD' => 'Periode:',
  'LBL_DV_TIMPERIOD_DATES' => 'Datum Reeks:',
  'LBL_LV_TIMPERIOD' => 'Periode',
  'LBL_LV_TIMPERIOD_START_DATE' => 'Begindatum',
  'LBL_LV_TIMPERIOD_END_DATE' => 'Einddatum',
  'LBL_LV_COMMIT_DATE' => 'Datum Vastleggen',
  'LBL_LV_WEIGH' => 'Gewogen bedrag',
  'LBL_LV_COMMIT' => 'Vastgelegd bedrag',
  'LBL_COMMIT_NOTE' => 'Geef de bedragen in die u wil gaan vastleggen voor de gekozen tijdsperiode:',
  'LBL_COMMIT_MESSAGE' => 'Wilt  u deze bedragen vastleggen?',
  'ERR_FORECAST_AMOUNT' => 'Het vast te leggen bedrag is verplicht en moet numeriek zijn.',
  'LBL_FC_START_DATE' => 'Start Datum',
  'LBL_FC_USER' => 'Gepland voor',
  'LBL_NO_ACTIVE_TIMEPERIOD' => 'Geen actieve perioden aanwezig voor forecasting',
  'LBL_FDR_ADJ_AMOUNT' => 'Aangepast Bedrag',
  'LBL_SAVE_WOKSHEET' => 'Werkblad Opslaan',
  'LBL_RESET_WOKSHEET' => 'Werkblad opnieuw instellen',
  'LBL_SHOW_CHART' => 'Bekijk Grafiek',
  'LBL_RESET_CHECK' => 'Alle werkblad data voor deze periode en gebruiker zullen worden verwijderd. Doorgaan?',
  'LB_FS_LIKELY_CASE' => 'Waarschijnlijk Geval',
  'LB_FS_WORST_CASE' => 'Slechtste Geval',
  'LB_FS_BEST_CASE' => 'Beste Geval',
  'LBL_FDR_WK_LIKELY_CASE' => 'Schatting meest waarschijnlijk',
  'LBL_FDR_WK_BEST_CASE' => 'Schatting beste geval',
  'LBL_FDR_WK_WORST_CASE' => 'Schatting slechtste geval',
  'LBL_BEST_CASE' => 'Beste geval:',
  'LBL_LIKELY_CASE' => 'Waarschijnlijk geval:',
  'LBL_WORST_CASE' => 'Slechtste geval:',
  'LBL_FDR_C_BEST_CASE' => 'Beste Geval',
  'LBL_FDR_C_WORST_CASE' => 'Slechtste Geval',
  'LBL_FDR_C_LIKELY_CASE' => 'Waarschijnlijk Geval',
  'LBL_QC_LAST_BEST_CASE' => 'Laatst Vastgelegd (Beste Geval):',
  'LBL_QC_LAST_LIKELY_CASE' => 'Laatst Vastgelegd (Waarschijnlijk Geval):',
  'LBL_QC_LAST_WORST_CASE' => 'Laatst Vastgelegd (Slechtste Geval):',
  'LBL_QC_ROLL_BEST_VALUE' => 'Rollup Vastgelegd Bedrag (Beste Geval):',
  'LBL_QC_ROLL_LIKELY_VALUE' => 'Rollup Vastgelegd Bedrag (Waarschijnlijk Geval):',
  'LBL_QC_ROLL_WORST_VALUE' => 'Rollup Vastgelegd Bedrag (Slechtste Geval):',
  'LBL_QC_COMMIT_BEST_CASE' => 'Vastgelegd Bedrag (Beste Geval):',
  'LBL_QC_COMMIT_LIKELY_CASE' => 'Vastgelegd Bedrag (Waarschijnlijk Geval):',
  'LBL_QC_COMMIT_WORST_CASE' => 'Vastgelegd Bedrag (Slechtste Geval):',
  'LBL_FORECAST_FOR' => 'Forecast Werkblad voor:',
  'LBL_GRAPH_TITLE' => 'Forecast Historie',
  'LBL_GRAPH_QUOTA_ALTTEXT' => 'Quota voor %s',
  'LBL_GRAPH_COMMIT_ALTTEXT' => 'Vastgelegd bedrag voor %s',
  'LBL_GRAPH_OPPS_ALTTEXT' => 'Waarde van gewonnen opportunities in %s',
  'LBL_GRAPH_COMMIT_LEGEND' => 'Vastgelegde Forecast',
  'LBL_GRAPH_OPPS_LEGEND' => 'Gewonnen Opportunites',
  'LBL_CHART_FOOTER' => 'Forecast Historie<br/>Quota versus Bedrag Forecast versus Gewonnen Opportunities Waarde',
  'LBL_TOTAL_VALUE' => 'Totalen:',
  'LBL_COPY_AMOUNT' => 'Totaal bedrag',
  'LBL_COPY_WEIGH_AMOUNT' => 'Totaal gewogen',
  'LBL_WORKSHEET_AMOUNT' => 'Totaal schatting',
  'LBL_COPY' => 'Kopieer Waarden',
  'LBL_COMMIT_AMOUNT' => 'Som van de vastgelegde waarden',
  'LBL_COPY_FROM' => 'Kopieer waarde van:',
  'LBL_CHART_TITLE' => 'Quota versus Vastgelegd versus Actueel',
);

