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


/*********************************************************************************
 * pl_pl.lang.php for SugarCRM 6.5.0
 * Translator: eVolpe
 * All Rights Reserved.
 * Any bugs report welcome: support@evolpe.pl
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (

  //module strings.
  'LBL_MODULE_NAME' => 'Prognozy',
  'LNK_NEW_OPPORTUNITY' => 'Utwórz szansę',
  'LBL_MODULE_TITLE' => 'Prognozy',
  'LBL_LIST_FORM_TITLE' => 'Wykonane prognozy',
  'LNK_UPD_FORECAST' => 'Arkusz prognoz',
  'LNK_QUOTA' => 'Kwoty',
  'LNK_FORECAST_LIST' => 'Historia prognoz',
  'LBL_FORECAST_HISTORY' => 'Prognozy: Historia',
  'LBL_FORECAST_HISTORY_TITLE' => 'Prognozy: Historia',
  
  //var defs
  'LBL_TIMEPERIOD_NAME' => 'Okres czasu',
  'LBL_USER_NAME' => 'Nazwa użytkownika',
  'LBL_REPORTS_TO_USER_NAME' => 'Zwierzchnik',
  
  //forecast table
  'LBL_FORECAST_ID' => 'ID',
  'LBL_FORECAST_TIME_ID' => 'ID okresu czasu',
  'LBL_FORECAST_TYPE' => 'Typ prognozy',
  'LBL_FORECAST_OPP_COUNT' => 'Szanse',
  'LBL_FORECAST_OPP_WEIGH'=> 'Ważona kwota',
  'LBL_FORECAST_OPP_COMMIT' => 'Prawdopodobny przypadek',
  'LBL_FORECAST_OPP_BEST_CASE'=>'Najlepszy przypadek',
  'LBL_FORECAST_OPP_WORST'=>'Najgorszy przypadek',
  'LBL_FORECAST_USER' => 'Użytkownik',
  'LBL_DATE_COMMITTED'=> 'Data wykonania',
  'LBL_DATE_ENTERED' => 'Data wprowadzenia',
  'LBL_DATE_MODIFIED' => 'Data modyfikacji',
  'LBL_CREATED_BY' => 'Utworzone przez',
  'LBL_DELETED' => 'Usunięto',
  
   //Quick Commit labels.
  'LBL_QC_TIME_PERIOD' => 'Okres czasu:',
  'LBL_QC_OPPORTUNITY_COUNT' => 'Liczba szans:',
  'LBL_QC_WEIGHT_VALUE' => 'Ważona kwota:',
  'LBL_QC_COMMIT_VALUE' => 'Wykonana prognoza:',
  'LBL_QC_COMMIT_BUTTON' => 'Wykonaj',
  'LBL_QC_WORKSHEET_BUTTON' => 'Roboczy arkusz',
  'LBL_QC_ROLL_COMMIT_VALUE' => 'Wykonaj prognozę:',
  'LBL_QC_DIRECT_FORECAST' => 'Moje bezpośrednie prognozy:',
  'LBL_QC_ROLLUP_FORECAST' => 'Moje grupowe prognozy:',
  'LBL_QC_UPCOMING_FORECASTS' => 'Moje prognozy',
  'LBL_QC_LAST_DATE_COMMITTED' => 'Data ostatniego wykonania:',
  'LBL_QC_LAST_COMMIT_VALUE' => 'Ostatnia wykonana prognoza:',
  'LBL_QC_HEADER_DELIM'=> 'Do',
  
  //opportunity worksheet list view labels
  'LBL_OW_OPPORTUNITIES' => 'Szansa',
  'LBL_OW_ACCOUNTNAME' => 'Kontrahent',
  'LBL_OW_REVENUE' => 'Kwota',
  'LBL_OW_WEIGHTED' => 'Ważona kwota',
  'LBL_OW_MODULE_TITLE'=> 'Arkusz roboczy szansy',
  'LBL_OW_PROBABILITY'=>'Prawdopodobieństwo',
  'LBL_OW_NEXT_STEP'=>'Następny krok',
  'LBL_OW_DESCRIPTION'=>'Opis',
  'LBL_OW_TYPE'=>'Typ',

  //forecast schedule shortcuts
  'LNK_NEW_TIMEPERIOD' => 'Utwórz okres czasu',
  'LNK_TIMEPERIOD_LIST' => 'Przedziały czasu',
  
  //Forecast schedule sub panel list view.
  'LBL_SVFS_FORECASTDATE' => 'Zaplanuj datę rozpoczęcia',
  'LBL_SVFS_STATUS' => 'Status',
  'LBL_SVFS_USER' => 'Dla',
  'LBL_SVFS_CASCADE' => 'Dołączyć do raportów?',
  'LBL_SVFS_HEADER' => 'Harmonogram prognoz:',
  
  //Forecast Schedule detail; view.....
   'LB_FS_KEY' => 'ID',
   'LBL_FS_TIMEPERIOD_ID' => 'ID okresu czasu',
   'LBL_FS_USER_ID' => 'ID użytkownika',
   'LBL_FS_TIMEPERIOD' => 'Okres czasu',   
   'LBL_FS_START_DATE' => 'Data rozpoczęcia',
   'LBL_FS_END_DATE' => 'Data zakończenia',
   'LBL_FS_FORECAST_START_DATE' => 'Data rozpoczęcia prognozy',
   'LBL_FS_STATUS' => 'Status',
   'LBL_FS_FORECAST_FOR' => 'Zaplanuj dla:',
   'LBL_FS_CASCADE' =>'Kaskadowo',  
   'LBL_FS_MODULE_NAME' => 'Harmonogram prognoz',
   'LBL_FS_CREATED_BY' =>'Utworzone przez',
   'LBL_FS_DATE_ENTERED' => 'Data wprowadzenia',
   'LBL_FS_DATE_MODIFIED' => 'Data modyfikacji',
   'LBL_FS_DELETED' => 'Usunięto',
    
  //forecast worksheet direct reports forecast
  'LBL_FDR_USER_NAME'=>'Zwierzchnik',
  'LBL_FDR_OPPORTUNITIES'=>'Prognozowane szanse:',
  'LBL_FDR_WEIGH'=>'Ważona kwota szans:',
  'LBL_FDR_COMMIT'=>'Wykonana prognoza',
  'LBL_FDR_DATE_COMMIT'=>'Data wykonania',
  
  //detail view.
  'LBL_DV_HEADER' => 'Prognozy: Arkusz roboczy',
  'LBL_DV_MY_FORECASTS' => 'Moje prognozy',
  'LBL_DV_MY_TEAM' => "Prognozy mojego zespołu" ,
  'LBL_DV_TIMEPERIODS' => 'Przedziały czasu:',
  'LBL_DV_FORECAST_PERIOD' => 'Okres trwania prognozy',
  'LBL_DV_FORECAST_OPPORTUNITY' => 'Prognoza szans',
  'LBL_SEARCH' => 'Wybierz',
  'LBL_SEARCH_LABEL' => 'Wybierz',
  'LBL_COMMIT_HEADER' => 'Wykonaj prognozę',
  'LBL_DV_LAST_COMMIT_DATE' =>'Data ostatniego wykonania:',
  'LBL_DV_LAST_COMMIT_AMOUNT' =>'Ostatnio wykonana prognoza:',
  'LBL_DV_FORECAST_ROLLUP' => 'Rozwiń prognozę',
  'LBL_DV_TIMEPERIOD' => 'Okres czasu:',
  'LBL_DV_TIMPERIOD_DATES' => 'Zakres dat:',
  
  //list view
  'LBL_LV_TIMPERIOD'=> 'Okres czasu',
  'LBL_LV_TIMPERIOD_START_DATE'=> 'Data rozpoczęcia',
  'LBL_LV_TIMPERIOD_END_DATE'=> 'Data zakończenia',
  'LBL_LV_TYPE'=> 'Typ prognozy',
  'LBL_LV_COMMIT_DATE'=> 'Data wykonania',
  'LBL_LV_OPPORTUNITIES'=> 'Szanse',
  'LBL_LV_WEIGH'=> 'Ważona kwota',
  'LBL_LV_COMMIT'=> 'Wykonana prognoza',
  
  'LBL_COMMIT_NOTE'=> 'Wprowadź kwotę, którą chcesz dodać dla wybranego okresu czasu:',
  
  'LBL_COMMIT_MESSAGE'=> 'Czy chcesz dodać te kwoty?',
  'ERR_FORECAST_AMOUNT' => 'Zatwierdzenie kwoty jest konieczne. Kwota powinna być liczbą.',

  // js error strings
  'LBL_FC_START_DATE' => 'Data rozpoczęcia',
  'LBL_FC_USER' => 'Harmonogram dla',

  'LBL_NO_ACTIVE_TIMEPERIOD'=>'Nie ma aktywnych przedziałów czasowych dla prognozowania.',
  'LBL_FDR_ADJ_AMOUNT'=>'Skorygowana kwota',
  'LBL_SAVE_WOKSHEET'=>'Zapisz arkusz roboczy',
  'LBL_RESET_WOKSHEET'=>'Resetuj arkusz roboczy',
  'LBL_RESET_CHECK'=>'Wszystkie dane arkuszy dla wybranych przedziałów czasowych  i zalogowanych użytkowników zostaną usunięte. Czy kontynuować?',
  
  'LB_FS_LIKELY_CASE'=>'Prawdopodobny przypadek',
  'LB_FS_WORST_CASE'=>'Najgorszy przypadek',
  'LB_FS_BEST_CASE'=>'Najlepszy przypadek',
  'LBL_FDR_WK_LIKELY_CASE'=>'Spodziewany prawdopodobny przypadek',
  'LBL_FDR_WK_BEST_CASE'=> 'Spodziewany najlepszy przypadek',
  'LBL_FDR_WK_WORST_CASE'=>'Spodziewany najgorszy przypadek',
  'LBL_BEST_CASE'=>'Najlepszy przypadek:',
  'LBL_LIKELY_CASE'=>'Prawdopodobny przypadek:',
  'LBL_WORST_CASE'=>'Najgorszy przypadek:',
  'LBL_FDR_C_BEST_CASE'=>'Najlepszy przypadek',
  'LBL_FDR_C_WORST_CASE'=>'Najgorszy przypadek',
  'LBL_FDR_C_LIKELY_CASE'=>'Prawdopodobny przypadek',
  'LBL_QC_LAST_BEST_CASE'=>'Ostatnio wykonana prognoza (najlepszy przypadek):',
  'LBL_QC_LAST_LIKELY_CASE'=>'Ostatnio wykonana prognoza (prawdopodobny przypadek):',
  'LBL_QC_LAST_WORST_CASE'=>'Ostatnio wykonana prognoza (najgorszy przypadek):',
  'LBL_QC_ROLL_BEST_VALUE'=>'Rozwiń wykonaną prognozę (najlepszy przypadek):',
  'LBL_QC_ROLL_LIKELY_VALUE'=>'Rozwiń wykonaną prognozę (prawdopodobny przypadek):',
  'LBL_QC_ROLL_WORST_VALUE'=>'Rozwiń wykonaną prognozę (najgorszy przypadek):',  
  'LBL_QC_COMMIT_BEST_CASE'=>'Wykonaj prognozę(najlepszy przypadek):',
  'LBL_QC_COMMIT_LIKELY_CASE'=>'Wykonaj prognozę (prawdopodobny przypadek):',
  'LBL_QC_COMMIT_WORST_CASE'=>'Wykonaj prognozę (najgorszy przypadek):',
  	'LBL_EDIT_LAYOUT' => 'Edytuj widok' /*for 508 compliance fix*/,

);


?>
