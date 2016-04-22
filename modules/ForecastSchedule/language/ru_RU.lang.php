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
  'ERR_FORECAST_AMOUNT' => 'Необходимо внести сумму прогноза в виде числа.',
  'LBL_BEST_CASE' => 'Оптимистичный прогноз:',
  'LBL_COMMIT_HEADER' => 'Дата прогноза',
  'LBL_COMMIT_MESSAGE' => 'Вы хотите внести эти суммы в прогноз?',
  'LBL_COMMIT_NOTE' => 'Введите суммы, которые Вы хотите внести в прогноз за выбранный Период отчета:',
  'LBL_CREATED_BY' => 'Создано',
  'LBL_DATE_COMMITTED' => 'Дата прогноза',
  'LBL_DATE_ENTERED' => 'Дата создания',
  'LBL_DATE_MODIFIED' => 'Дата изменения',
  'LBL_DELETED' => 'Удалено',
  'LBL_DV_FORECAST_OPPORTUNITY' => 'Сделки по прогнозу',
  'LBL_DV_FORECAST_PERIOD' => 'Период прогноза',
  'LBL_DV_FORECAST_ROLLUP' => 'Сдвиг прогноза',
  'LBL_DV_HEADER' => 'Прогнозы: Планшет',
  'LBL_DV_LAST_COMMIT_AMOUNT' => 'Последние ожидаемые суммы:',
  'LBL_DV_LAST_COMMIT_DATE' => 'Дата последнего прогноза:',
  'LBL_DV_MY_FORECASTS' => 'Мои прогнозы',
  'LBL_DV_MY_TEAM' => 'Прогнозы моей команды',
  'LBL_DV_TIMEPERIOD' => 'Период отчета:',
  'LBL_DV_TIMEPERIODS' => 'Отчетные периоды:',
  'LBL_DV_TIMPERIOD_DATES' => 'Диапазон дат:',
  'LBL_EDIT_LAYOUT' => 'Правка расположения',
  'LBL_FC_START_DATE' => 'Дата начала',
  'LBL_FC_USER' => 'Назначить для',
  'LBL_FDR_ADJ_AMOUNT' => 'Скорректированная сумма',
  'LBL_FDR_COMMIT' => 'Ожидаемая стоимость',
  'LBL_FDR_C_BEST_CASE' => 'Оптимистичный прогноз:',
  'LBL_FDR_C_LIKELY_CASE' => 'Реалистичный прогноз:',
  'LBL_FDR_C_WORST_CASE' => 'Пессимистичный прогноз:',
  'LBL_FDR_DATE_COMMIT' => 'Дата прогноза',
  'LBL_FDR_OPPORTUNITIES' => 'Сделки в прогнозе',
  'LBL_FDR_USER_NAME' => 'Прямой отчет',
  'LBL_FDR_WEIGH' => 'Средняя стоимость сделок:',
  'LBL_FDR_WK_BEST_CASE' => 'Прогноз: оптимистичный',
  'LBL_FDR_WK_LIKELY_CASE' => 'Прогноз: реалистичный',
  'LBL_FDR_WK_WORST_CASE' => 'Прогноз: пессимистичный',
  'LBL_FORECAST_HISTORY' => 'Прогнозы: история',
  'LBL_FORECAST_HISTORY_TITLE' => 'Прогнозы: история',
  'LBL_FORECAST_ID' => 'ID',
  'LBL_FORECAST_OPP_BEST_CASE' => 'Оптимистичный прогноз:',
  'LBL_FORECAST_OPP_COMMIT' => 'Реалистичный прогноз:',
  'LBL_FORECAST_OPP_COUNT' => 'Сделки',
  'LBL_FORECAST_OPP_WEIGH' => 'Средняя стоимость',
  'LBL_FORECAST_OPP_WORST' => 'Пессимистичный прогноз:',
  'LBL_FORECAST_TIME_ID' => 'ID промежутка премени',
  'LBL_FORECAST_TYPE' => 'Тип прогноза',
  'LBL_FORECAST_USER' => 'Пользователь',
  'LBL_FS_CASCADE' => 'Каскадом?',
  'LBL_FS_CREATED_BY' => 'Создано',
  'LBL_FS_DATE_ENTERED' => 'Дата создания',
  'LBL_FS_DATE_MODIFIED' => 'Дата изменения',
  'LBL_FS_DELETED' => 'Удалено',
  'LBL_FS_END_DATE' => 'Дата окончания',
  'LBL_FS_FORECAST_FOR' => 'Назначить для:',
  'LBL_FS_FORECAST_START_DATE' => 'Дата начала прогноза',
  'LBL_FS_MODULE_NAME' => 'Расписание прогноза',
  'LBL_FS_START_DATE' => 'Дата начала',
  'LBL_FS_STATUS' => 'Статус',
  'LBL_FS_TIMEPERIOD' => 'Период отчета',
  'LBL_FS_TIMEPERIOD_ID' => 'ID промежутка премени',
  'LBL_FS_USER_ID' => 'ID пользователя',
  'LBL_LIKELY_CASE' => 'Реалистичный прогноз:',
  'LBL_LIST_FORM_TITLE' => 'Сохранённые прогнозы',
  'LBL_LV_COMMIT' => 'Ожидаемая сумма',
  'LBL_LV_COMMIT_DATE' => 'Дата последнего прогноза:',
  'LBL_LV_OPPORTUNITIES' => 'Сделки',
  'LBL_LV_TIMPERIOD' => 'Период отчета',
  'LBL_LV_TIMPERIOD_END_DATE' => 'Дата окончания',
  'LBL_LV_TIMPERIOD_START_DATE' => 'Дата начала',
  'LBL_LV_TYPE' => 'Тип прогноза',
  'LBL_LV_WEIGH' => 'Средняя стоимость',
  'LBL_MODULE_NAME' => 'Прогнозы',
  'LBL_MODULE_TITLE' => 'Прогнозы',
  'LBL_NO_ACTIVE_TIMEPERIOD' => 'Нет активных периодов отчета для прогнозирования.',
  'LBL_OW_ACCOUNTNAME' => 'Контрагент',
  'LBL_OW_DESCRIPTION' => 'Описание',
  'LBL_OW_MODULE_TITLE' => 'Планшет сделки',
  'LBL_OW_NEXT_STEP' => 'Следующий шаг',
  'LBL_OW_OPPORTUNITIES' => 'Сделка',
  'LBL_OW_PROBABILITY' => 'Вероятность',
  'LBL_OW_REVENUE' => 'Сумма',
  'LBL_OW_TYPE' => 'Тип',
  'LBL_OW_WEIGHTED' => 'Средняя стоимость',
  'LBL_QC_COMMIT_BEST_CASE' => 'Сумма последнего прогноза (оптимистичный):',
  'LBL_QC_COMMIT_BUTTON' => 'Подтвердить',
  'LBL_QC_COMMIT_LIKELY_CASE' => 'Сумма прогноза (реалистичный):',
  'LBL_QC_COMMIT_VALUE' => 'Ожидаемая стоимость:',
  'LBL_QC_COMMIT_WORST_CASE' => 'Сумма прогноза (пессимистичный):',
  'LBL_QC_DIRECT_FORECAST' => 'Мой прямой прогноз:',
  'LBL_QC_HEADER_DELIM' => 'Кому:',
  'LBL_QC_LAST_BEST_CASE' => 'Сумма последнего прогноза (оптимистичный):',
  'LBL_QC_LAST_COMMIT_VALUE' => 'Последняя сумма прогноза:',
  'LBL_QC_LAST_DATE_COMMITTED' => 'Дата последнего прогноза:',
  'LBL_QC_LAST_LIKELY_CASE' => 'Сумма последнего прогноза (реалистичный):',
  'LBL_QC_LAST_WORST_CASE' => 'Сумма последнего прогноза (пессимистичный):',
  'LBL_QC_OPPORTUNITY_COUNT' => 'Количество сделок:',
  'LBL_QC_ROLLUP_FORECAST' => 'Мой групповой прогноз:',
  'LBL_QC_ROLL_BEST_VALUE' => 'Смещение суммы прогноза (оптимистичный):',
  'LBL_QC_ROLL_COMMIT_VALUE' => 'Смещение суммы прогноза:',
  'LBL_QC_ROLL_LIKELY_VALUE' => 'Смещение суммы прогноза (реалистичный):',
  'LBL_QC_ROLL_WORST_VALUE' => 'Смещение суммы прогноза (пессимистичный):',
  'LBL_QC_TIME_PERIOD' => 'Период отчета:',
  'LBL_QC_UPCOMING_FORECASTS' => 'Мои прогнозы',
  'LBL_QC_WEIGHT_VALUE' => 'Средняя стоимость:',
  'LBL_QC_WORKSHEET_BUTTON' => 'Планшет',
  'LBL_REPORTS_TO_USER_NAME' => 'Руководитель',
  'LBL_RESET_CHECK' => 'Все данные планшета для выбранного периода отчета и авторизованного пользователя будут удалены. Продолжить?',
  'LBL_RESET_WOKSHEET' => 'Сброс планшета',
  'LBL_SAVE_WOKSHEET' => 'Сохранить планшет',
  'LBL_SEARCH' => 'Выбрать',
  'LBL_SEARCH_LABEL' => 'Выбрать',
  'LBL_SVFS_CASCADE' => 'Каскадировать в отчеты?',
  'LBL_SVFS_FORECASTDATE' => 'Назначить дату начала',
  'LBL_SVFS_HEADER' => 'Расписание прогноза',
  'LBL_SVFS_STATUS' => 'Статус',
  'LBL_SVFS_USER' => 'Для',
  'LBL_TIMEPERIOD_NAME' => 'Период отчета',
  'LBL_USER_NAME' => 'Имя пользователя',
  'LBL_WORST_CASE' => 'Пессимистичный прогноз:',
  'LB_FS_BEST_CASE' => 'Оптимистичный прогноз',
  'LB_FS_KEY' => 'ID',
  'LB_FS_LIKELY_CASE' => 'Реалистичный прогноз',
  'LB_FS_WORST_CASE' => 'Пессимистичный прогноз',
  'LNK_FORECAST_LIST' => 'История прогноза',
  'LNK_NEW_OPPORTUNITY' => 'Новая сделка',
  'LNK_NEW_TIMEPERIOD' => 'Создать период отчета',
  'LNK_QUOTA' => 'Квоты',
  'LNK_TIMEPERIOD_LIST' => 'Обзор периодов отчета',
  'LNK_UPD_FORECAST' => 'Планшет прогнозов',
);

