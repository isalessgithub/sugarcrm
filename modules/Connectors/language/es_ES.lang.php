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
  'LBL_INFO_INLINE' => 'Información',
  'LBL_CLOSE' => 'Cerrar:',
  'LBL_DUNS' => 'DUNS',
  'LBL_ADD_MODULE' => 'Agregar',
  'LBL_ADDRCITY' => 'Ciudad',
  'LBL_ADDRCOUNTRY' => 'País',
  'LBL_ADDRCOUNTRY_ID' => 'Id País',
  'LBL_ADDRSTATEPROV' => 'Estado/Provincia',
  'LBL_ADMINISTRATION' => 'Administración de Conectores',
  'LBL_ADMINISTRATION_MAIN' => 'Configuración de Conectores',
  'LBL_AVAILABLE' => 'Disponible',
  'LBL_BACK' => '< Atrás',
  'LBL_COMPANY_ID' => 'Id Compañía',
  'LBL_CONFIRM_CONTINUE_SAVE' => 'Algunos campos requeridos se han dejado en blanco.  ¿Desea continuar y guardar los cambios?',
  'LBL_CONNECTOR' => 'Conector',
  'LBL_CONNECTOR_FIELDS' => 'Campos del Conector',
  'LBL_DATA' => 'Datos',
  'LBL_DEFAULT' => 'Por Defecto',
  'LBL_DELETE_MAPPING_ENTRY' => '¿Está seguro de que desea eliminar esta entrada?',
  'LBL_DISABLED' => 'Deshabilitado',
  'LBL_EMPTY_BEANS' => 'No se ha encontrado ninguna ocurrencia para sus criterios de búsqueda.',
  'LBL_ENABLED' => 'Habilitado',
  'LBL_EXTERNAL' => 'Permiten a los usuarios crear registros en cuentas externas.',
  'LBL_EXTERNAL_SET_PROPERTIES' => 'Para poder usar este conector, las propiedades del conector también se debe definir en la página de configuración.',
  'LBL_FINSALES' => 'Ventas Anuales',
  'LBL_MARKET_CAP' => 'Cap. Bursátil',
  'LBL_MERGE' => 'Combinar',
  'LBL_MODIFY_DISPLAY_TITLE' => 'Habilitar Conectores',
  'LBL_MODIFY_DISPLAY_DESC' => 'Seleccione qué módulos están habilitados para cada conector.',
  'LBL_MODIFY_DISPLAY_PAGE_TITLE' => 'Configuración de Conectores: Habilitar Conectores',
  'LBL_MODULE_FIELDS' => 'Campos del Módulo',
  'LBL_MODIFY_MAPPING_TITLE' => 'Mapear Campos del Conector',
  'LBL_MODIFY_MAPPING_DESC' => 'Mapear campos del conector a campos del módulo para determinar qué datos del conector pueden ser vistos y combinados junto con los registros del módulo.',
  'LBL_MODIFY_MAPPING_PAGE_TITLE' => 'Configuración de Conectores: Mapear Campos del Conector',
  'LBL_MODIFY_PROPERTIES_TITLE' => 'Establecer Propiedades del Conector',
  'LBL_MODIFY_PROPERTIES_DESC' => 'Configurar las propiedades de cada conector, incluyendo los URLs y las claves del API.',
  'LBL_MODIFY_PROPERTIES_PAGE_TITLE' => 'Configuración de Conectores: Establecer las Propiedades del Conector',
  'LBL_MODIFY_SEARCH_TITLE' => 'Administrar Búsqueda de Conectores',
  'LBL_MODIFY_SEARCH' => 'Búsqueda',
  'LBL_MODIFY_SEARCH_DESC' => 'Seleccione los campos del conector a utilizar para la búsqueda de datos de cada módulo.',
  'LBL_MODIFY_SEARCH_PAGE_TITLE' => 'Configuración de Conectores: Administrar Búsqueda de Conectores',
  'LBL_MODULE_NAME' => 'Conectores',
  'LBL_NO_PROPERTIES' => 'No hay propiedades configurables para este conector.',
  'LBL_PARENT_DUNS' => 'DUNS Padres',
  'LBL_PREVIOUS' => '< Atrás',
  'LBL_QUOTE' => 'Presupuesto',
  'LBL_RECNAME' => 'Nombre de Compañía',
  'LBL_RESET_TO_DEFAULT' => 'Restablecer valores Por Defecto',
  'LBL_RESET_TO_DEFAULT_CONFIRM' => '¿Está seguro de que desea restablecer la configuración por defecto?',
  'LBL_RESET_BUTTON_TITLE' => 'Restablecer [Alt+R]',
  'LBL_RESULT_LIST' => 'Lista de Datos',
  'LBL_RUN_WIZARD' => 'Ejecutar Asistente',
  'LBL_SAVE' => 'Guardar',
  'LBL_SEARCHING_BUTTON_LABEL' => 'Buscando...',
  'LBL_SHOW_IN_LISTVIEW' => 'Mostrar en Vista de Lista de Combinación',
  'LBL_SMART_COPY' => 'Copia Inteligente',
  'LBL_SUMMARY' => 'Resumen',
  'LBL_STEP1' => 'Buscar y Ver Datos',
  'LBL_STEP2' => 'Combinar Registros con',
  'LBL_TEST_SOURCE' => 'Prueba de Conector',
  'LBL_TEST_SOURCE_FAILED' => 'Error en Prueba',
  'LBL_TEST_SOURCE_RUNNING' => 'Realizando Prueba...',
  'LBL_TEST_SOURCE_SUCCESS' => 'Prueba Exitosa',
  'LBL_TITLE' => 'Combinación de Datos',
  'LBL_ULTIMATE_PARENT_DUNS' => 'DUNS Padre Final',
  'ERROR_RECORD_NOT_SELECTED' => 'Error: Por favor, seleccione un registro de la lista antes de continuar.',
  'ERROR_EMPTY_WRAPPER' => 'Error: Ha sido imposible recuperar la instancia adaptadora (wrapper) para el origen [{$source_id}]',
  'ERROR_EMPTY_SOURCE_ID' => 'Error: El Id de origen no ha sido especificado o está vacío.',
  'ERROR_EMPTY_RECORD_ID' => 'Error: El Id de registro no ha sido especificado o está vacío.',
  'ERROR_NO_ADDITIONAL_DETAIL' => 'Error: No se han encontrado más detalles para el registro.',
  'ERROR_NO_SEARCHDEFS_DEFINED' => 'No se han habilitado módulos para este conector.  Seleccione un módulo para este conector en la página Habilitar Conectores.',
  'ERROR_NO_SEARCHDEFS_MAPPED' => 'Error: No hay ningún conector habilitado con campos de búsqueda definidos.',
  'ERROR_NO_SOURCEDEFS_FILE' => 'Error: No se ha encontrado ningún archivo sourcedefs.php.',
  'ERROR_NO_SOURCEDEFS_SPECIFIED' => 'Error: No se han especificado orígenes desde los que obtener datos.',
  'ERROR_NO_CONNECTOR_DISPLAY_CONFIG_FILE' => 'Error: No se han mapeado conectores a este módulo.',
  'ERROR_NO_SEARCHDEFS_MAPPING' => 'Error: No se han definido campos de búsqueda para el módulo y el conector.  Por favor, póngase en contacto con el administrador del sistema.',
  'ERROR_NO_FIELDS_MAPPED' => 'Error: Debe mapear por lo menos un campo del Conector a un campo de módulo para cada entrada de módulo.',
  'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => 'Error: No se ha mapeado ningún campo de módulo para ser mostrado como parte de los resultados.  Por favor, póngase en contacto con el administrador del sistema.',
);

