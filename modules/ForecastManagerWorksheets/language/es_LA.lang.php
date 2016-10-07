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
  'ERR_FORECAST_AMOUNT' => 'La Cantidad Realizada es un valor requerido, y debe ser numérico.',
  'LBL_AMOUNT' => 'Cantidad',
  'LBL_BASE_RATE' => 'Base de Cambio',
  'LBL_COMMIT_HEADER' => 'Realización del Pronóstico',
  'LBL_COMMIT_MESSAGE' => '¿Quiere introducir estas cantidades como realizadas?',
  'LBL_COMMIT_NOTE' => 'Introduzca las cantidades que desee realizar en el Período de Tiempo seleccionado:',
  'LBL_COMMIT_STAGE' => 'Etapa de Compromiso',
  'LBL_CREATED_BY' => 'Creado por',
  'LBL_CURRENCY' => 'Moneda:',
  'LBL_CURRENCY_ID' => 'ID Moneda',
  'LBL_CURRENCY_RATE' => 'Tipo de Moneda',
  'LBL_DATE_CLOSED' => 'Fecha de Cierre Esperada',
  'LBL_DATE_COMMITTED' => 'Fecha de Realización',
  'LBL_DATE_ENTERED' => 'Fecha Registrada',
  'LBL_DATE_MODIFIED' => 'Fecha Modificación',
  'LBL_DELETED' => 'Eliminado',
  'LBL_DV_FORECAST_OPPORTUNITY' => 'Oportunidades del Pronóstico',
  'LBL_DV_FORECAST_PERIOD' => 'Período de Tiempo del Pronóstico',
  'LBL_DV_FORECAST_ROLLUP' => 'Dinámica del Pronóstico',
  'LBL_DV_HEADER' => 'Pronósticos: Hoja de Trabajo',
  'LBL_DV_LAST_COMMIT_AMOUNT' => 'Últimas Cantidades Realizadas:',
  'LBL_DV_LAST_COMMIT_DATE' => 'Última Fecha de Realización:',
  'LBL_DV_MY_FORECASTS' => 'Mis Pronósticos',
  'LBL_DV_MY_TEAM' => 'Pronósticos de mi Equipo',
  'LBL_DV_TIMEPERIOD' => 'Período de Tiempo:',
  'LBL_DV_TIMEPERIODS' => 'Períodos de Tiempo:',
  'LBL_DV_TIMPERIOD_DATES' => 'Rango de Fechas:',
  'LBL_EDITABLE_INVALID' => 'Valor no válido para {{nombre_de_campo}}',
  'LBL_EDITABLE_INVALID_RANGE' => 'El valor debe ser entre {{min}} y {{max}}',
  'LBL_FC_START_DATE' => 'Fecha inicio:',
  'LBL_FC_USER' => 'Programar Para',
  'LBL_FDR_ADJ_AMOUNT' => 'Cantidad Ajustada',
  'LBL_FDR_COMMIT' => 'Cantidad Realizada',
  'LBL_FDR_DATE_COMMIT' => 'Fecha de Realización',
  'LBL_FDR_OPPORTUNITIES' => 'Oportunidades en Pronóstico:',
  'LBL_FDR_USER_NAME' => 'Reporte Directo',
  'LBL_FDR_WEIGH' => 'Cantidad Ponderada de Oportunidades:',
  'LBL_FORECAST' => 'Pronóstico',
  'LBL_FORECAST_HISTORY' => 'Pronósticos: Historial',
  'LBL_FORECAST_HISTORY_TITLE' => 'Historial',
  'LBL_FORECAST_ID' => 'ID de Presupestos',
  'LBL_FORECAST_OPP_COUNT' => 'Recuento Total de Oportunidades',
  'LBL_FORECAST_OPP_WEIGH' => 'Cantidad Ponderada',
  'LBL_FORECAST_PIPELINE_OPP_COUNT' => 'Recuento Total de Oportunidades en el Embudo de Ventas',
  'LBL_FORECAST_TIME_ID' => 'ID de Período de Tiempo',
  'LBL_FORECAST_TYPE' => 'Tipo de Pronóstico',
  'LBL_FORECAST_USER' => 'Usuario',
  'LBL_FS_CASCADE' => '¿En cascada?',
  'LBL_FS_CREATED_BY' => 'Creado por',
  'LBL_FS_DATE_ENTERED' => 'Fecha Registrada',
  'LBL_FS_DATE_MODIFIED' => 'Fecha de Modificación',
  'LBL_FS_DELETED' => 'Eliminado',
  'LBL_FS_END_DATE' => 'Fecha de Fin',
  'LBL_FS_FORECAST_FOR' => 'Agendar Para:',
  'LBL_FS_FORECAST_START_DATE' => 'Fecha de Incio del Pronóstico',
  'LBL_FS_MODULE_NAME' => 'Programa del Pronóstico',
  'LBL_FS_START_DATE' => 'Fecha de Inicio',
  'LBL_FS_STATUS' => 'Estado',
  'LBL_FS_TIMEPERIOD' => 'Período de Tiempo',
  'LBL_FS_TIMEPERIOD_ID' => 'ID Período de Tiempo',
  'LBL_FS_USER_ID' => 'ID de Usuario',
  'LBL_HISTORY_LOG' => 'Última Realización',
  'LBL_LIST_FORM_TITLE' => 'Pronósticos Realizado',
  'LBL_LOADING_COMMIT_HISTORY' => 'Cargando Historial Realizado...',
  'LBL_LV_COMMIT' => 'Cantidad Realizada',
  'LBL_LV_COMMIT_DATE' => 'Fecha de Realización',
  'LBL_LV_OPPORTUNITIES' => 'Oportunidades',
  'LBL_LV_TIMPERIOD' => 'Período de Tiempo',
  'LBL_LV_TIMPERIOD_END_DATE' => 'Fecha de Fin',
  'LBL_LV_TIMPERIOD_START_DATE' => 'Fecha inicio:',
  'LBL_LV_TYPE' => 'Tipo de Pronóstico',
  'LBL_LV_WEIGH' => 'Cantidad Ponderada',
  'LBL_MANGER_SAVED' => 'Gerente Guardado',
  'LBL_MODIFIED_USER_ID' => 'Modificado Por',
  'LBL_MODULE_NAME' => 'Hojas de Trabajo para Administración de Pronósticos',
  'LBL_MODULE_NAME_SINGULAR' => 'Hoja de Trabajo para Administración de Pronósticos',
  'LBL_MODULE_TITLE' => 'Hojas de Trabajo para Administración de Pronósticos',
  'LBL_MY_MANAGER_LINE' => '{{full_name}} (me)',
  'LBL_NO_ACTIVE_TIMEPERIOD' => 'No hay períodos de tiempo Activos para el módulo de Pronósticos',
  'LBL_NO_COMMIT' => 'No hay Realización Previa',
  'LBL_OW_ACCOUNTNAME' => 'Cuenta',
  'LBL_OW_DESCRIPTION' => 'Descripción',
  'LBL_OW_MODULE_TITLE' => 'Hoja de Trabajo de Oportunidades',
  'LBL_OW_NEXT_STEP' => 'Siguiente Paso',
  'LBL_OW_OPPORTUNITIES' => 'Oportunidad',
  'LBL_OW_PROBABILITY' => 'Probabilidad',
  'LBL_OW_REVENUE' => 'Monto',
  'LBL_OW_TYPE' => 'Tipo',
  'LBL_OW_WEIGHTED' => 'Cantidad Ponderada',
  'LBL_PERCENT' => 'Porcentaje',
  'LBL_PRODUCT_ID' => 'ID de Producto:',
  'LBL_QC_COMMIT_BUTTON' => 'Realizar',
  'LBL_QC_COMMIT_VALUE' => 'Cantidad Realizada:',
  'LBL_QC_DIRECT_FORECAST' => 'Mi Pronóstico Directo',
  'LBL_QC_HEADER_DELIM' => 'Para',
  'LBL_QC_LAST_COMMIT_VALUE' => 'Última Cantidad Realizada:',
  'LBL_QC_LAST_DATE_COMMITTED' => 'Última Fecha de Realización:',
  'LBL_QC_OPPORTUNITY_COUNT' => 'Cuenta de Oportunidades:',
  'LBL_QC_ROLLUP_FORECAST' => 'Mi Grupo de Pronóstico:',
  'LBL_QC_ROLL_COMMIT_VALUE' => 'Cantidad Realizada en Dinámica:',
  'LBL_QC_TIME_PERIOD' => 'Período de Tiempo:',
  'LBL_QC_UPCOMING_FORECASTS' => 'Mis Pronósticos',
  'LBL_QC_WEIGHT_VALUE' => 'Cantidad Ponderada:',
  'LBL_QC_WORKSHEET_BUTTON' => 'Hoja de Trabajo',
  'LBL_QUOTA' => 'Cotización',
  'LBL_QUOTA_ADJUSTED' => 'Cotización (Ajustado)',
  'LBL_QUOTA_ID' => 'ID de Cotización',
  'LBL_REPORTS_TO_USER_NAME' => 'Informes A',
  'LBL_RESET_CHECK' => 'Se eliminarán todos los datos de la hoja de trabajo del período de tiempo seleccionado y el usuario conectado. Desea continuar?',
  'LBL_RESET_WOKSHEET' => 'Reiniciar Hoja de Trabajo',
  'LBL_SALES_STAGE' => 'Etapa',
  'LBL_SAVE_WOKSHEET' => 'Guardar Hoja de Trabajo',
  'LBL_SEARCH' => 'Seleccionar',
  'LBL_SEARCH_LABEL' => 'Seleccionar',
  'LBL_SHOW_CHART' => 'Ver Tabla',
  'LBL_SVFS_CASCADE' => '¿Propagar Informes en cascada?',
  'LBL_SVFS_FORECASTDATE' => 'Agendar Feha de Inicio',
  'LBL_SVFS_HEADER' => 'Programa del Presupuesto',
  'LBL_SVFS_STATUS' => 'Estado',
  'LBL_SVFS_USER' => 'Para',
  'LBL_TIMEPERIOD_NAME' => 'Período de Tiempo',
  'LBL_USER_NAME' => 'Nombre de Usuario',
  'LBL_VERSION' => 'Versión',
  'LBL_WK_REVISION' => 'Revisión',
  'LBL_WK_VERSION' => 'Versión',
  'LB_FS_KEY' => 'ID',
  'LNK_FORECAST_LIST' => 'Ver Historial de Pronósticos',
  'LNK_NEW_OPPORTUNITY' => 'Crear Oportunidad',
  'LNK_NEW_TIMEPERIOD' => 'Crear Período de Tiempo',
  'LNK_QUOTA' => 'Ver Cotizaciones',
  'LNK_TIMEPERIOD_LIST' => 'Vista de Períodos de Tiempo',
  'LNK_UPD_FORECAST' => 'Hoja de Trabajo para Administración de Pronóstico',
);

