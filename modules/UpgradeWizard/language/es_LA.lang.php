<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
$mod_strings = array(
	'DESC_MODULES_INSTALLED'					=> 'Los siguientes módulos han sido instalados:',
	'DESC_MODULES_QUEUED'						=> 'Los siguientes módulos están listos para ser instalados:',

	'ERR_UW_CANNOT_DETERMINE_GROUP'				=> 'No se ha podido determinar el Grupo',
	'ERR_UW_CANNOT_DETERMINE_USER'				=> 'No se ha podido determinar el Propietario',
	'ERR_UW_CONFIG_WRITE'						=> 'Error al actualizar config.php con la información de la nueva versión.',
	'ERR_UW_CONFIG'								=> 'Por favor, habilite los permisos de escritura para su archivo config.php, y actualice esta página.',
	'ERR_UW_DIR_NOT_WRITABLE'					=> 'No se puede escribir en el directorio',
	'ERR_UW_FILE_NOT_COPIED'					=> 'Archivo no copiado',
	'ERR_UW_FILE_NOT_DELETED'					=> 'Problema al eliminar el paquete ',
	'ERR_UW_FILE_NOT_READABLE'					=> 'El archivo no ha podido ser leído.',
	'ERR_UW_FILE_NOT_WRITABLE'					=> 'El archivo no ha podido ser movido o editado',
	'ERR_UW_FLAVOR_2'							=> 'Edición de la Actualización:',
	'ERR_UW_FLAVOR'								=> 'Edición del Sistema SugarCRM:',
	'ERR_UW_LOG_FILE_UNWRITABLE'				=> './upgradeWizard.log no ha podido ser creado/escrito.  Por favor, corrija los permisos en su directorio de SugarCRM.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD'				=> 'mbstring.func_overload está establecido a un valor mayor que 1. <br/>Por favor, cambie esto en su archivo php.ini y reinicie su servidor web.',
	'ERR_UW_MYSQL_VERSION'						=> 'SugarCRM requiere MySQL versión 4.1.2 o mayor.  Encontrada:',
	'ERR_UW_OCI8_VERSION'				        => 'La versión de Oracle no está soportada por Sugar. Necesitará instalar una versión que sea compatible con el sistema Sugar. Por favor consulte la Matriz de Compatibilidad en las Notas sobre la Versión para Versiones soportadas de Oracle. Actual versión:',
	'ERR_UW_NO_FILE_UPLOADED'					=> '¡Por favor, especifique un archivo e inténtelo de nuevo!',
	'ERR_UW_NO_FILES'							=> 'Ha ocurrido un error, no se han encontrado archivos para comprobar.',
	'ERR_UW_NO_MANIFEST'						=> 'El archivo zip no contiene un archivo manifest.php.  No se puede continuar.',
	'ERR_UW_NO_VIEW'							=> 'La vista especificada no es válida.',
	'ERR_UW_NO_VIEW2'							=> 'La vista no ha sido definida.  Por favor, vaya a la página de inicio de Administración para navegar a esta página.',
	'ERR_UW_NOT_VALID_UPLOAD'					=> 'Carga inválida.',
	'ERR_UW_NO_CREATE_TMP_DIR'					=> 'No ha podido crearse el directorio temporal. Compruebe los permisos de archivos.',
	'ERR_UW_ONLY_PATCHES'						=> 'Sólo puede cargar parches en esta página.',
    'ERR_UW_PREFLIGHT_ERRORS'					=> 'Se han encontrado errores durante la comprobación previa',
	'ERR_UW_UPLOAD_ERR'							=> '¡Ha ocurrido un error al cargar el archivo, por favor inténtelo de nuevo!<br>\n',
	'ERR_UW_VERSION'							=> 'Versión del Sistema SugarCRM:',
    'ERR_UW_WRONG_TYPE'							=> 'Esta página no es para ejecutar',
	'ERR_UW_PHP_FILE_ERRORS'					=> array(
													1 => 'El archivo subido excede el límite definido por la directiva upload_max_filesize en php.ini.',
													2 => 'El archivo subido excede el límite definido por la directiva MAX_FILE_SIZE especificada en el formulario HTML.',
													3 => 'El archivo se ha cargado solo en forma parcial.',
													4 => 'No se ha cargado ningún archivo.',
													5 => 'Error desconocido.',
													6 => 'Falta una carpeta temporal.',
													7 => 'Error al escribir el archivo en el disco.',
													8 => 'La carga del archivo se ha interrumpido debido a la extensión.',
),

    'ERROR_HT_NO_WRITE'                         => 'No se puede escribir en el archivo: %s',
    'ERROR_MANIFEST_TYPE'                       => 'El archivo de Manifiesto debe especificar el tipo de paquete.',
    'ERROR_PACKAGE_TYPE'                        => 'El archivo de Manifiesto especifica un tipo de paquete no reconocido: %s',
    'ERROR_VERSION_INCOMPATIBLE'                => 'El archivo cargado no es compatible con esta versión de Sugar: %s',
    'ERROR_FLAVOR_INCOMPATIBLE'                 => 'El archivo cargado no es compatible con esta edición (Community Edition, Professional, o Enterprise) de Sugar: %s',

    'ERROR_UW_CONFIG_DB'                        => 'Error guardado de% s config var a la db (tecla% s, el valor% s).',
    'ERR_NOT_ADMIN'                             => "Acceso a administración no autorizado.",
    'ERR_NO_VIEW_ACCESS_REASON'                 => 'No tiene permiso para acceder a esta página.',

    'LBL_BUTTON_BACK'							=> '< Atrás',
	'LBL_BUTTON_CANCEL'							=> 'Cancelar',
	'LBL_BUTTON_DELETE'							=> 'Eliminar Paquete',
	'LBL_BUTTON_DONE'							=> 'Hecho',
	'LBL_BUTTON_EXIT'							=> 'Salir',
	'LBL_BUTTON_INSTALL'						=> 'Inspección para Actualización',
	'LBL_BUTTON_NEXT'							=> 'Siguiente>',
	'LBL_BUTTON_RECHECK'						=> 'Comprobar de nuevo',
	'LBL_BUTTON_RESTART'						=> 'Reiniciar',

	'LBL_UPLOAD_UPGRADE'						=> 'Cargar un Paquete de Actualización ',
	'LBL_UPLOAD_FILE_NOT_FOUND'					=> 'Archivo de carga no encontrado',
	'LBL_UW_BACKUP_FILES_EXIST_TITLE'			=> 'Copia de seguridad',
	'LBL_UW_BACKUP_FILES_EXIST'					=> 'Las copias de seguridad de los archivos de esta actualización pueden encontrarse en',
	'LBL_UW_BACKUP'								=> 'COPIA DE SEGURIDAD del archivo',
	'LBL_UW_CANCEL_DESC'						=> 'La actualización ha sido cancelada. Todos los archivos temporales copiados y los archivos de actualización cargados han sido eliminados.',
	'LBL_UW_CHARSET_SCHEMA_CHANGE'				=> 'Cambios de Juego de Caracteres en el Esquema',
	'LBL_UW_CHECK_ALL'							=> 'Comprobar Todo',
	'LBL_UW_CHECKLIST'							=> 'Pasos de la Actualización',
	'LBL_UW_COMMIT_ADD_TASK_DESC_1'				=> "Las copias de seguridad de todos los archivos sobrescritos están en el siguiente directorio: \n",
	'LBL_UW_COMMIT_ADD_TASK_DESC_2'				=> "Combinar manualmente los siguientes archivos: \n",
	'LBL_UW_COMMIT_ADD_TASK_NAME'				=> 'Proceso de Actualización: Combinar Manualmente Archivos',
	'LBL_UW_COMMIT_ADD_TASK_OVERVIEW'			=> 'Por favor, utilice el método diff que le resulte conocido para combinar estos archivos.  Hasta que no haya completado este proceso, su instalación de SugarCRM estará en un estado incierto, y no podrá completarse.',
	'LBL_UW_COMPLETE'							=> 'Completado',
	'LBL_UW_CONTINUE_CONFIRMATION'              => 'Esta nueva versión de Sugar contiene un nuevo acuerdo de licencia. ¿Desea continuar?',
	'LBL_UW_COMPLIANCE_ALL_OK'					=> 'Todos los Requerimientos del Sistema han sido Satisfechos',
	'LBL_UW_COMPLIANCE_CALLTIME'				=> 'Configuración de PHP: Paso por Referencia en Tiempo de LLamada',
	'LBL_UW_COMPLIANCE_CURL'					=> 'Módulo cURL',
	'LBL_UW_COMPLIANCE_IMAP'					=> 'Módulo IMAP',
	'LBL_UW_COMPLIANCE_MBSTRING'				=> 'Módulo MBStrings',
	'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD'	=> 'Parámetro mbstring.func_overload de MBStrings',
	'LBL_UW_COMPLIANCE_MEMORY'					=> 'Configuración de PHP: Límite de Memoria',
    'LBL_UW_COMPLIANCE_STREAM'                  => 'Configuración PHP: Stream',
	'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES'		=> 'MS SQL Server y PHP Magic Quotes GPC',
	'LBL_UW_COMPLIANCE_MYSQL'					=> 'Versión Mínima de MySQL',
    'LBL_UW_COMPLIANCE_DB'                      => 'Versión minima de Base de Datos',
	'LBL_UW_COMPLIANCE_PHP_INI'					=> 'Ruta de php.ini',
	'LBL_UW_COMPLIANCE_PHP_VERSION'				=> 'Versión Mínima de PHP',
	'LBL_UW_COMPLIANCE_SAFEMODE'				=> 'Configuración de PHP: Modo Seguro',
	'LBL_UW_COMPLIANCE_TITLE'					=> 'Comprobación de Configuración del Servidor',
	'LBL_UW_COMPLIANCE_TITLE2'					=> 'Configuración Detectada',
	'LBL_UW_COMPLIANCE_XML'						=> 'Análisis XML',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE'				=> 'Soporte Zip',

	'LBL_UW_COPIED_FILES_TITLE'					=> 'Archivos Copiados con Éxito',
	'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE'			=> 'Cambios al Esquema en Tablas Personalizadas',

	'LBL_UW_DB_CHOICE1'							=> 'El Asistente de Actualizaciones ejecutará el SQL',
	'LBL_UW_DB_CHOICE2'							=> 'Consultas Manuales de SQL',
	'LBL_UW_DB_INSERT_FAILED'					=> 'Fallo en INSERT - los resultados comparados difieren',
	'LBL_UW_DB_ISSUES_PERMS'					=> 'Privilegios de Base de datos',
	'LBL_UW_DB_ISSUES'							=> 'Problemas de Base de datos',
	'LBL_UW_DB_METHOD'							=> 'Método de Actualización de Base de Datos',
	'LBL_UW_DB_NO_ADD_COLUMN'					=> 'MODIF. TABLA [table] AGREGAR COLUMNA [column]',
	'LBL_UW_DB_NO_CHANGE_COLUMN'				=> 'MODIF. TABLA [table] CAMBIAR COLUMNA [column]',
	'LBL_UW_DB_NO_CREATE'						=> 'CREAR TABLA [table]',
	'LBL_UW_DB_NO_DELETE'						=> 'BORRAR DESDE [table]',
	'LBL_UW_DB_NO_DROP_COLUMN'					=> 'MODIF. TABLA [table] DESPLEGAR COLUMNA [column]',
	'LBL_UW_DB_NO_DROP_TABLE'					=> 'DESPLEGAR TABLA [table]',
	'LBL_UW_DB_NO_ERRORS'						=> 'Todos los Privilegios Disponibles',
	'LBL_UW_DB_NO_INSERT'						=> 'INSERTAR EN [table]',
	'LBL_UW_DB_NO_SELECT'						=> 'SELECCIONAR [x] DESDE [table]',
	'LBL_UW_DB_NO_UPDATE'						=> 'ACTUALIZAR [table]',
	'LBL_UW_DB_PERMS'							=> 'Privilegio Necesario',

	'LBL_UW_DESC_MODULES_INSTALLED'				=> 'Los siguientes paquetes de actualización han sido instalados:',
	'LBL_UW_END_DESC'							=> 'El sistema ha sido actualizado.',
	'LBL_UW_END_DESC2'							=> 'Si ha escogido ejecutar manualmente cualquier paso como las combinaciones de archivos o las consultas SQL, por favor hágalo ahora.  Su sistema estará en un estado inestable hasta que estos pasos se hayan completado.',
	'LBL_UW_END_LOGOUT_PRE'						=> 'La actualización se ha completado.',
	'LBL_UW_END_LOGOUT_PRE2'					=> 'Haga clic en Hecho para salir del Asistente de Actualizaciones.',
	'LBL_UW_END_LOGOUT'							=> 'Si tiene previsto aplicar cualquier otro paquete de actualización utilizando el Asistente de Actualizaciones, cierre antes la sesión e iníciela de nuevo.',
	'LBL_UW_END_LOGOUT2'						=> 'Cerrar sesión',
	'LBL_UW_REPAIR_INDEX'						=> 'Para mejoras en el rendimiento de base de datos, por favor ejecute el <a href="index.php?module=Administration&action=RepairIndex" target="_blank">script de Reparación de Índices</a>.',

	'LBL_UW_FILE_DELETED'						=> "ha sido eliminado.<br>",
	'LBL_UW_FILE_GROUP'							=> 'Grupo',
	'LBL_UW_FILE_ISSUES_PERMS'					=> 'Permisos de Archivo',
	'LBL_UW_FILE_ISSUES'						=> 'Problemas con Archivos',
	'LBL_UW_FILE_NEEDS_DIFF'					=> 'El Archivo Requiere un Diff Manual',
	'LBL_UW_FILE_NO_ERRORS'						=> '<b>Todos los Archivos son Editables</b>',
	'LBL_UW_FILE_OWNER'							=> 'Propietario',
	'LBL_UW_FILE_PERMS'							=> 'Permisos',
	'LBL_UW_FILE_UPLOADED'						=> ' ha sido cargado',
	'LBL_UW_FILE'								=> 'Nombre de Archivo',
	'LBL_UW_FILES_QUEUED'						=> 'Los siguientes paquetes de actualización están listos para ser instalados:',
	'LBL_UW_FILES_REMOVED'						=> "Los siguientes archivos serán eliminados del sistema::<br>\n",
	'LBL_UW_NEXT_TO_UPLOAD'						=> "<b>Haga clic en Siguiente para cargar los paquetes de actualización.</b>",
	'LBL_UW_FROZEN'								=> 'Cargue un paquete antes de continuar.',
	'LBL_UW_HIDE_DETAILS'						=> 'Ocultar Detalles',
	'LBL_UW_IN_PROGRESS'						=> 'En Progreso',
	'LBL_UW_INCLUDING'							=> 'Incluyendo',
	'LBL_UW_INCOMPLETE'							=> 'Incompleto',
	'LBL_UW_INSTALL'							=> 'INSTALACIÓN de Archivo',
	'LBL_UW_MANUAL_MERGE'						=> 'Combinación de Archivos',
	'LBL_UW_MODULE_READY_UNINSTALL'				=> "El módulo está listo para ser desinstalado.  Haga clic en \"Proceder\" para proceder con la desinstalación.<br>\n",
	'LBL_UW_MODULE_READY'						=> "El módulo está listo para ser instalado.  Haga clic en \"Proceder\" para proceder con la instalación.",
	'LBL_UW_NO_INSTALLED_UPGRADES'				=> 'No se han detectado Actualizaciones registradas.',
	'LBL_UW_NONE'								=> 'Ninguno',
	'LBL_UW_NOT_AVAILABLE'						=> 'No disponible',
	'LBL_UW_OVERWRITE_DESC'						=> "Todos los archivos modificados serán sobrescritos, incluyendo cualquier personalización al código fuente y cambios en las plantillas que haya realizado. ¿Está seguro de que desea continuar?",
	'LBL_UW_OVERWRITE_FILES_CHOICE1'			=> 'Sobrescribir Todos los Archivos',
	'LBL_UW_OVERWRITE_FILES_CHOICE2'			=> 'Combinación Manual - Preservar Todo',
	'LBL_UW_OVERWRITE_FILES'					=> 'Método de Combinación',
	'LBL_UW_PATCH_READY'						=> 'El parche está preparado para ser procesado. Haga clic en el botón "Proceder" para completar el proceso de actualización.',
	'LBL_UW_PATCH_READY2'						=> '<h2>Aviso: Se han Encontrado Diseños Personalizados</h2><br />Los siguientes archivos tienen campos nuevos o diseños de pantalla modificados aplicados vía Studio. El parche que va a instalar también contiene cambios a los archivos. Para <u>cada archivo</u> puede:<br><ul><li>[<b>Por defecto</b>] Mantener su versión dejando en blanco la casilla de verificación. Las modificaciones contenidas en el parche serán ignoradas.</li>o<li>Acepte los archivos actualizados el seleccionar la casilla de verificación. Sus diseños necesitarán ser aplicados de nuevo vía Studio.</li></ul>',

	'LBL_UW_PREFLIGHT_ADD_TASK'					=> '¿Crear Tarea para Combinación Manual?',
	'LBL_UW_PREFLIGHT_COMPLETE'					=> 'Comprobaciones Previas',
	'LBL_UW_PREFLIGHT_DIFF'						=> 'Diferenciados',
	'LBL_UW_PREFLIGHT_EMAIL_REMINDER'			=> '¿Enviarse a uno mismo un Recordatorio por correo electrónico para la Combinación Manual?',
	'LBL_UW_PREFLIGHT_FILES_DESC'				=> 'Los siguientes archivos han sido modificados.  Desmarque los elementos que requieran una combinación manual. <i>Los cambios de diseño detectados son desmarcados automáticamente; marque los que deberían ser sobrescritos.',
	'LBL_UW_PREFLIGHT_NO_DIFFS'					=> 'No se Requiere Combinación Manual de Archivos.',
	'LBL_UW_PREFLIGHT_NOT_NEEDED'				=> 'No es necesario.',
	'LBL_UW_PREFLIGHT_PRESERVE_FILES'			=> 'Archivos Auto-preservados:',
	'LBL_UW_PREFLIGHT_TESTS_PASSED'				=> 'Todas las pruebas de inspección previa han sido satisfactorias.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED2'			=> 'Haga clic en Siguiente para copiar los archivos actualizados al sistema.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED3'			=> '<b>Nota: </b>El resto del proceso de actualización es obligatorio, y si hace clic en Siguiente deberá completar todo el proceso. Si no desea continuar, haga clic en el botón Cancelar.',
	'LBL_UW_PREFLIGHT_TOGGLE_ALL'				=> 'Cambiar Todos los Archivos',

	'LBL_UW_REBUILD_TITLE'						=> 'Reconstruir Resultado',
	'LBL_UW_SCHEMA_CHANGE'						=> 'Cambios en el Esquema',

	'LBL_UW_SHOW_COMPLIANCE'					=> 'Mostrar Configuración Detectada',
	'LBL_UW_SHOW_DB_PERMS'						=> 'Mostrar Permisos de Base de datos que Faltan',
	'LBL_UW_SHOW_DETAILS'						=> 'Mostrar Detalles',
	'LBL_UW_SHOW_DIFFS'							=> 'Mostrar Archivos que Requieren Combinanción Manual',
	'LBL_UW_SHOW_NW_FILES'						=> 'Mostrar Archivos con Permisos Incorrectos',
	'LBL_UW_SHOW_SCHEMA'						=> 'Mostrar Script de Cambios al Esquema',
	'LBL_UW_SHOW_SQL_ERRORS'					=> 'Mostrar Consultas Erróneas',
	'LBL_UW_SHOW'								=> 'Mostrar',

	'LBL_UW_SKIPPED_FILES_TITLE'				=> 'Archivos Omitidos',
	'LBL_UW_SKIPPING_FILE_OVERWRITE'			=> 'Omitiendo Sobrescritura de Archivos - Combinación Manual Seleccionada.',
	'LBL_UW_SQL_RUN'							=> 'Comprobar cuando se haya ejecutado el SQL manualmente',
	'LBL_UW_START_DESC'							=> 'Este asistente le ayudará a actualizar esta instancia de Sugar.',
	'LBL_UW_START_DESC2'						=> 'Nota: Le recomendamos que haga una copia de seguridad de la base de datos de Sugar y de los archivos del sistema (todos los archivos en la carpeta SugarCRM) antes de actualizar su sistema de producción. Le recomendamos especialmente que antes realice una prueba de actualización en una instancia clonada de su sistema de producción.',
	'LBL_UW_START_DESC3'						=> 'Haga clic en Siguiente para realizar una comprobación de su sistema y asegurar que está listo para la actualización. Las comprobaciones incluyen permisos de archivos, privilegios de base de datos, y configuración del servidor.',
	'LBL_UW_START_UPGRADED_UW_DESC'				=> 'El nuevo Asistente de Actualizaciones continuará con el proceso de instalación. Por favor, continúe con su actualización.',
	'LBL_UW_START_UPGRADED_UW_TITLE'			=> 'Bienvenido al nuevo Asistente de Actualizaciones',

	'LBL_UW_SYSTEM_CHECK_CHECKING'				=> 'Realizando comprobaciones. Espere, por favor.  Esto podría tardar unos 30 segundos.',
	'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START'		=> 'Buscando todos los archivos a comprobar.',
	'LBL_UW_SYSTEM_CHECK_FILES'					=> 'Archivos',
	'LBL_UW_SYSTEM_CHECK_FOUND'					=> 'Encontrados',

	'LBL_UW_TITLE_CANCEL'						=> 'Cancelar',
	'LBL_UW_TITLE_COMMIT'						=> 'Realizar Actualización',
	'LBL_UW_TITLE_END'							=> 'Informe',
	'LBL_UW_TITLE_PREFLIGHT'					=> 'Comprobaciones Previas',
	'LBL_UW_TITLE_START'						=> 'Bienvenido',
	'LBL_UW_TITLE_SYSTEM_CHECK'					=> 'Comprobación del Sistema',
	'LBL_UW_TITLE_UPLOAD'						=> 'Cargar Paquete',
	'LBL_UW_TITLE'								=> 'Asistente de Actualizaciones',
	'LBL_UW_UNINSTALL'							=> 'Desinstalar',
	//500 upgrade labels
	'LBL_UW_ACCEPT_THE_LICENSE' 				=> 'Aceptar Licencia',
	'LBL_UW_CONVERT_THE_LICENSE' 				=> 'Convertir Licencia',
	'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES'     => 'Módulos Actualizados/Personalizados',
	'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED'       => 'Se han detectado los siguientes módulos personalizados que serán preservados',
	'LBL_UW_FOLLOWING_MODULES_UPGRADED'         => 'Se han detectado los siguientes módulos como personalizados por Studio y han sido actualizados',

	'LBL_START_UPGRADE_IN_PROGRESS'             => 'Inicio en progreso',
	'LBL_SYSTEM_CHECKS_IN_PROGRESS'             => 'Comprobación del Sistema en Progreso',
	'LBL_LICENSE_CHECK_IN_PROGRESS'             => 'Comprobación de Licencia en progreso',
	'LBL_PREFLIGHT_CHECK_IN_PROGRESS'           => 'Comprobaciones Previas en Progreso',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS'       => 'Copia de Archivos en Proceso',
	'LBL_COMMIT_UPGRADE_IN_PROGRESS'            => 'Realización de la Actualización en Progreso',
    'LBL_UW_COMMIT_DESC'						=> 'Pulse Siguiente para ejecutar scripts de actualización adicionales.',
	'LBL_UPGRADE_SCRIPTS_IN_PROGRESS'			=> 'Scripts de Actualización en Progreso',
	'LBL_UPGRADE_SUMMARY_IN_PROGRESS'			=> 'Resumen de la Actualización en Progreso',
	'LBL_UPGRADE_IN_PROGRESS'                   => 'en progreso',
	'LBL_UPGRADE_TIME_ELAPSED'                  => 'Tiempo transcurrido',
	'LBL_UPGRADE_CANCEL_IN_PROGRESS'			=> 'Actualización Cancelada y Limpieza en Progreso',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE'      => 'La actualización puede demorar unos minutos',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS'           => 'Comprobaciones de Carga en Progreso',
	'LBL_UPLOADING_UPGRADE_PACKAGE'      		=> 'Cargando Paquete de Actualización ',
    'LBL_UW_DORP_THE_OLD_SCHMEA' 				=> '¿Desea que Sugar elimine el esquema obsoleto de la versión 4.5.1?',
	'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD'			=> 'El Asistente de Actualizaciones Eliminará el antiguo esquema 4.5.1',
	'LBL_UW_DROP_SCHEMA_MANUAL'					=> 'Eliminación Manual del Esquema Post-instalación',
	'LBL_UW_DROP_SCHEMA_METHOD'					=> 'Método de Eliminación de Antiguo Esquema',
	'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP'			=> 'Mostrar el Antiguo Esquema que podría ser eliminado',
	'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST'      => 'Consultas Omitidas',
	'LBL_INCOMPATIBLE_PHP_VERSION'              => 'Se requiere una versión de Php 5 o superior.',
	'ERR_CHECKSYS_PHP_INVALID_VER'      => 'Su versión de PHP no es soportada por Sugar.  Necesitará instalar una versión que sea compatible con la aplicación Sugar.  Por favor, consulte la Matriz de Compatibilidad en las Notas de Versión para información sobre las Versiones de PHP soportadas. Su versión es la ',
	'LBL_BACKWARD_COMPATIBILITY_ON' 			=> 'El modo de compatibilidad hacia atrás de Php está habilitado. Deshabilite zend.ze1_compatibility_mode antes de continuar',
	//including some strings from moduleinstall that are used in Upgrade
	'LBL_ML_ACTION' => 'Acción',
    'LBL_ML_CANCEL'             => 'Cancelar',
    'LBL_ML_COMMIT'=>'Proceder',
    'LBL_ML_DESCRIPTION' => 'Descripción',
    'LBL_ML_INSTALLED' => 'Fecha de Instalación',
    'LBL_ML_NAME' => 'Nombre',
    'LBL_ML_PUBLISHED' => 'Fecha de Publicación',
    'LBL_ML_TYPE' => 'Tipo',
    'LBL_ML_UNINSTALLABLE' => 'Desinstalable',
    'LBL_ML_VERSION' => 'Versión',
	'LBL_ML_INSTALL'=>'Instalar',
	//adding the string used in tracker. copying from homepage
	'LBL_HOME_PAGE_4_NAME' => 'Seguimiento',
	'LBL_CURRENT_PHP_VERSION' => '(Su versión actual de PHP es',
	'LBL_RECOMMENDED_PHP_VERSION' => '. La versión recomendada de PHP es 5.2.1 o superior)',
	'LBL_MODULE_NAME' => 'Asistente de Actualizaciones',
	'LBL_MODULE_NAME_SINGULAR' => 'Asistente de Actualizaciones',
	'LBL_UPLOAD_SUCCESS' => 'Paquete de actualización cargado con éxito. Haga clic en Siguiente para realizar una comprobación final.',
	'LBL_UW_TITLE_LAYOUTS' => 'Confirmar Diseños',
	'LBL_LAYOUT_MODULE_TITLE' => 'Diseños',
	'LBL_LAYOUT_MERGE_DESC' => 'Hay disponibles campos nuevos que se han añadido como parte de esta actualización y que pueden ser automáticamente incluidos en sus diseños de módulo actuales. Para obtener más información sobre los campos, consulte las Notas de Actualización de la esta versión a la que está actualizando sus sistema..<br><br>Si no desea añadir los nuevos campos, por favor desmarque la casilla del módulo, y sus diseño se mantendrán sin cambios. Los campos estarán disponibles en Studio tras la actualización. <br><br>',
	'LBL_LAYOUT_MERGE_TITLE' => 'Haga clic en Siguiente para confirmar los cambios y finalizar la actualización.',
	'LBL_LAYOUT_MERGE_TITLE2' => 'Haga clic en Siguiente para completar la actualización.',
	'LBL_UW_CONFIRM_LAYOUTS' => 'Confirmar Diseños',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Resultados de la Confirmación de Diseños',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Los siguientes diseños se han combinado con éxito:',
	'LBL_SELECT_FILE' => 'Seleccionar Archivo:',
	'LBL_LANGPACKS' => 'Paquetes de Lenguaje' /*for 508 compliance fix*/,
	'LBL_MODULELOADER' => 'Cargador de Módulos' /*for 508 compliance fix*/,
	'LBL_PATCHUPGRADES' => 'Parches de Actualizaciones' /*for 508 compliance fix*/,
	'LBL_THEMES' => 'Temas' /*for 508 compliance fix*/,
	'LBL_WORKFLOW' => 'Workflow' /*for 508 compliance fix*/,
	'LBL_UPGRADE' => 'Actualización:' /*for 508 compliance fix*/,
	'LBL_PROCESSING' => 'Procesando' /*for 508 compliance fix*/,
    'LBL_GLOBAL_TEAM_DESC'                      => 'Globalmente Visible',
);
