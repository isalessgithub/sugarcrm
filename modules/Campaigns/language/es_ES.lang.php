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
  'ERR_FIX_MESSAGES' => 'Por favor, corrija los siguientes errores antes de proceder',
  'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Sólo se permiten valores enteros para el Número de emails enviados por lote',
  'ERR_MESS_DUPLICATE_FOR_LIST' => 'Se han definido múltiples mensajes de Marketing por Email para esta lista de público objetivo',
  'ERR_MESS_NOT_FOUND_FOR_LIST' => 'No se ha definido un mensaje de Marketing por Email para esta lista de público objetivo',
  'ERR_NO_EMAIL_MARKETING' => 'Debe haber al menos un mensaje de Marketing por Email asociado con la campaña.',
  'ERR_NO_MAILBOX' => 'Los siguientes mensajes de marketing no tiene una cuenta de correo asociada.<BR>Por favor, corrija este problema antes de continuar.',
  'ERR_NO_TARGET_LISTS' => 'Debe haber al menos una Lista de Público Objetivo asociada con la campaña.',
  'ERR_NO_TEST_TARGET_LISTS' => 'Debe haber al menos una Lista de Público Objetivo de tipo Pruebas asociada con la campaña.',
  'ERR_SENDING_NOW' => 'Los mensajes están siendo enviados, por favor inténtelo de nuevo más tarde.',
  'LBL_ACCOUNTS' => 'Cuentas',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Cuentas',
  'LBL_ADD_TARGET' => 'Añadir',
  'LBL_ADD_TRACKER' => 'Nuevo Seguimiento',
  'LBL_ALERT' => 'Alerta',
  'LBL_ALL_PROSPECT_LISTS' => 'Todas las Listas de Público Objetivo en la Campaña.',
  'LBL_ALREADY_SUBSCRIBED_HEADER' => 'Boletines de Noticias Suscritos',
  'LBL_AMOUNT_IN' => 'Cantidad en',
  'LBL_ASSIGNED_TO' => 'Asignada a:',
  'LBL_ASSIGNED_TO_ID' => 'Asignada a:',
  'LBL_ASSIGNED_TO_NAME' => 'Asignada a:',
  'LBL_AVALAIBLE_FIELDS_HEADER' => 'Campos Disponibles',
  'LBL_BACK_TO_CAMPAIGNS' => 'Volver a Campañas',
  'LBL_BLOCKED_SUBPANEL_TITLE' => 'Bloqueado',
  'LBL_CAMPAIGN' => 'Campaña:',
  'LBL_CAMPAIGN_ACCOUNTS_SUBPANEL_TITLE' => 'Cuentas',
  'LBL_CAMPAIGN_ACTUAL_COST' => 'Coste Real:',
  'LBL_CAMPAIGN_BUDGET' => 'Presupuesto:',
  'LBL_CAMPAIGN_CONTENT' => 'Descripción:',
  'LBL_CAMPAIGN_COST_PER_CLICK_THROUGH' => 'Coste Por Clic en Banner:',
  'LBL_CAMPAIGN_COST_PER_IMPRESSION' => 'Coste Por Impresión:',
  'LBL_CAMPAIGN_DAYS_REMAIN' => 'Días Restantes',
  'LBL_CAMPAIGN_DIAGNOSTICS' => 'Diagnósticos de Campaña',
  'LBL_CAMPAIGN_END_DATE' => 'Fecha Fin:',
  'LBL_CAMPAIGN_EXPECTED_COST' => 'Coste Esperado:',
  'LBL_CAMPAIGN_EXPECTED_REVENUE' => 'Ingresos Esperados:',
  'LBL_CAMPAIGN_FREQUENCY' => 'Frecuencia:',
  'LBL_CAMPAIGN_IMPRESSIONS' => 'Impresiones:',
  'LBL_CAMPAIGN_INFORMATION' => 'Visión General',
  'LBL_CAMPAIGN_LEAD_SUBPANEL_TITLE' => 'Clientes Potenciales',
  'LBL_CAMPAIGN_NAME' => 'Nombre:',
  'LBL_CAMPAIGN_NOT_SELECTED' => 'Seleccione y asocie una campaña:',
  'LBL_CAMPAIGN_OBJECTIVE' => 'Objetivo:',
  'LBL_CAMPAIGN_OPPORTUNITIES_WON' => 'Oportunidades Ganadas:',
  'LBL_CAMPAIGN_RESPONSE_BY_RECIPIENT_ACTIVITY' => 'Respuesta a la Campaña por Actividad del Destinatario',
  'LBL_CAMPAIGN_RETURN_ON_INVESTMENT' => 'Retorno de Inversión de la Campaña',
  'LBL_CAMPAIGN_START_DATE' => 'Fecha Inicio:',
  'LBL_CAMPAIGN_STATUS' => 'Estado:',
  'LBL_CAMPAIGN_TYPE' => 'Tipo:',
  'LBL_CAMPAIGN_WIZARD' => 'Asistente de Campañas',
  'LBL_CAMPAIGN_WIZARD_START_TITLE' => 'Editar Campaña:',
  'LBL_CAMP_MESSAGE_COPY' => 'Guardar copias de los mensajes de la campaña:',
  'LBL_CAMP_MESSAGE_COPY_DESC' => '¿Desea guardar copias completas de <bold>CADA</bold> mensaje de email enviado durante todas las campañas?  <bold>Se recomienda el valor por defecto de no hacerlo</bold>.  Si elige no, sólo se guardará la plantilla enviada y las variables para recrear el mensaje individual.',
  'LBL_CHARSET_NOTICE' => 'NOTA: Por favor, asegúrese de que la página que contiene el formulario web-to-lead tiene las siguientes líneas en la sección <head>:',
  'LBL_CHOOSE_CAMPAIGN_TYPE' => 'Tipo de Campaña',
  'LBL_CHOOSE_NEXT_STEP' => 'Elija su siguiente paso',
  'LBL_CONFIRM' => 'Iniciar',
  'LBL_CONFIRM_CAMPAIGN_SAVE_CONTINUE' => 'Guardar el trabajo y proceder con el Email de Marketing',
  'LBL_CONFIRM_CAMPAIGN_SAVE_EXIT' => '¿Desea guardar toda la información y salir?',
  'LBL_CONFIRM_CAMPAIGN_SAVE_OPTIONS' => 'Guardar Opciones',
  'LBL_CONFIRM_SEND_SAVE' => 'Está a punto de terminar y proceder con la página de Envío de Email de Campaña.  ¿Desea guardar los cambios y continuar?',
  'LBL_CONTACTS' => 'Contactos',
  'LBL_CONTACT_SUBPANEL_TITLE' => 'Contacto',
  'LBL_COPY_AND_PASTE_CODE' => 'O copiar y pegar el siguiente código HTML en una página existente',
  'LBL_COPY_OF' => 'Copia de',
  'LBL_CREATED' => 'Creada por:',
  'LBL_CREATED_BY' => 'Creada por:',
  'LBL_CREATED_USER' => 'Usuario Creado',
  'LBL_CREATE_EMAIL_TEMPLATE' => 'Crear',
  'LBL_CREATE_MAILBOX' => 'Crear Nueva Cuenta de Correo',
  'LBL_CREATE_NEWSLETTER' => 'Nuevo Boletín de Noticias',
  'LBL_CREATE_NEW_MARKETING_EMAIL' => 'Crear Nuevo Email de Marketing',
  'LBL_CREATE_TARGET' => 'Crear',
  'LBL_CREATE_WEB_TO_LEAD_FORM' => 'CreateWebToLeadForm',
  'LBL_CURRENCY' => 'Moneda:',
  'LBL_CURRENCY_ID' => 'ID Moneda',
  'LBL_CUSTOM_LOCATION' => 'Definida por el Usuario',
  'LBL_DATE_CREATED' => 'Fecha Creación:',
  'LBL_DATE_ENTERED' => 'Fecha Creación',
  'LBL_DATE_LAST_MODIFIED' => 'Fecha Modificación:',
  'LBL_DATE_MODIFIED' => 'Fecha Modificación',
  'LBL_DATE_START' => 'Fecha de Inicio',
  'LBL_DAY' => 'Día',
  'LBL_DEFAULT' => 'Todas las Listas de Público Objetivo',
  'LBL_DEFAULT_FROM_ADDR' => 'Por defecto:',
  'LBL_DEFAULT_LEAD_SUBMIT' => 'Enviar',
  'LBL_DEFAULT_LIST_ENTRIES_NOT_FOUND' => 'No se han encontrado entradas',
  'LBL_DEFAULT_LIST_ENTRIES_WERE_PROCESSED' => 'Las entradas han sido procesadas',
  'LBL_DEFAULT_LIST_NOT_FOUND' => 'Lista de público objetivo por defecto no encontrada',
  'LBL_DEFAULT_LOCATION' => 'Por Defecto',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Campañas',
  'LBL_DEFINE_LEAD_HEADER' => 'Cabecera del Formulario:',
  'LBL_DEFINE_LEAD_POST_URL' => 'URL de Envío (Post):',
  'LBL_DEFINE_LEAD_REDIRECT_URL' => 'URL de Redirección:',
  'LBL_DEFINE_LEAD_SUBMIT' => 'Etiqueta del Botón de Envío:',
  'LBL_DELETE' => 'Quitar',
  'LBL_DELETE_INLINE' => 'Eliminar',
  'LBL_DESCRIPTION_LEAD_FORM' => 'Descripción del Formulario:',
  'LBL_DESCRIPTION_TEXT_LEAD_FORM' => 'Al enviar este formulario se creará un cliente potencial vinculado con la campaña',
  'LBL_DIAGNOSTIC' => 'Diagnóstico',
  'LBL_DIAGNOSTIC_WIZARD' => 'Ver Diagnósticos',
  'LBL_DOWNLOAD_TEXT_WEB_TO_LEAD_FORM' => 'Por favor, descargue su formulario Web a Cliente potencial',
  'LBL_DOWNLOAD_WEB_TO_LEAD_FORM' => 'Formulario Web A Cliente Potencial',
  'LBL_DRAG_DROP_COLUMNS' => 'Arrastre y suelte los campos del cliente potencial en las columnas 1 y 2',
  'LBL_EDIT_EMAIL_TEMPLATE' => 'Editar',
  'LBL_EDIT_EXISTING' => 'Editar Campaña',
  'LBL_EDIT_INLINE' => 'Editar',
  'LBL_EDIT_LAYOUT' => 'Editar diseño',
  'LBL_EDIT_LEAD_POST_URL' => '¿Editar URL de Envío (Post)?',
  'LBL_EDIT_OPT_OUT' => 'Enlace para rehusar:',
  'LBL_EDIT_OPT_OUT_' => '¿Enlace para rehusar?',
  'LBL_EDIT_TARGET_LIST' => 'Editar Lista de Público Objetivo',
  'LBL_EDIT_TRACKER_NAME' => 'Nombre de Seguimiento:',
  'LBL_EDIT_TRACKER_URL' => 'URL de Seguimiento:',
  'LBL_ELECTED_TO_OPTOUT' => 'Ha elegido optar por no recibir emails.',
  'LBL_EMAIL' => 'Email',
  'LBL_EMAILMARKETING_SUBPANEL_TITLE' => 'Email Marketing',
  'LBL_EMAILS_PER_RUN' => 'Número de emails enviados por lote:',
  'LBL_EMAILS_SCHEDULED' => 'Emails Planificados',
  'LBL_EMAIL_CAMPAIGNS_TITLE' => 'Campañas por Email',
  'LBL_EMAIL_COMPONENTS' => 'Componentes de Email',
  'LBL_EMAIL_MARKETING_SUBPANEL_TITLE' => 'Marketing por EMail',
  'LBL_EMAIL_SETUP_DESC' => 'Rellene el siguiente formulario para modificar su configuración del sistema de forma que puedan enviarse los emails de la campaña.',
  'LBL_EMAIL_SETUP_WIZ' => 'Lanzar Configuración de Email',
  'LBL_EMAIL_SETUP_WIZARD' => 'Configurar Email',
  'LBL_EMAIL_SETUP_WIZARD_TITLE' => 'Configuración de Email para Campañas',
  'LBL_FILTER_CHART_BY' => 'Filtrar Gráfico Por:',
  'LBL_FINISH' => 'Finalizar',
  'LBL_FROM_ADDR' => 'Dirección del Remitente',
  'LBL_FROM_MAILBOX_NAME' => 'Usar Cuenta de Correo:',
  'LBL_FROM_NAME' => 'Nombre Remitente:',
  'LBL_HOME_START_MESSAGE' => 'Seleccione el tipo de Campaña que desea crear.',
  'LBL_IMPORT_PROSPECTS' => 'Importar Público Objetivo',
  'LBL_INVALID' => 'Invalido',
  'LBL_INVALID EMAIL_SUBPANEL_TITLE' => 'Email no Válido',
  'LBL_INVITEE' => 'Contactos',
  'LBL_LEADS' => 'Clientes Potenciales',
  'LBL_LEADS_DELETED_SINCE_CREATED' => '{0} clientes potenciales que fueron creadas a través de esta campaña han sido eliminados desde su creación.',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Clientes Potenciales',
  'LBL_LEAD_DEFAULT_HEADER' => 'Formulario Web a cliente potencial para la Campaña',
  'LBL_LEAD_FOOTER' => 'Pie del Formulario:',
  'LBL_LEAD_FORM_FIRST_HEADER' => 'Formulario de Cliente Potencial (Primera Columna)',
  'LBL_LEAD_FORM_SECOND_HEADER' => 'Formulario de Cliente Potencial (Segunda Columna)',
  'LBL_LEAD_FORM_WIZARD' => 'Asistente de Formularios para Clientes Potenciales',
  'LBL_LEAD_MODULE' => 'Clientes Potenciales',
  'LBL_LEAD_NOTIFY_CAMPAIGN' => 'Campaña Relacionada:',
  'LBL_LEAD_SUBPANEL_TITLE' => 'Cliente Potencial',
  'LBL_LINK_SUBPANEL_TITLE' => 'Enlace',
  'LBL_LIST_CAMPAIGN_NAME' => 'Campaña',
  'LBL_LIST_END_DATE' => 'Fecha Fin',
  'LBL_LIST_FORM_TITLE' => 'Lista de Campañas',
  'LBL_LIST_NAME' => 'Nombre',
  'LBL_LIST_START_DATE' => 'Fecha Inicio',
  'LBL_LIST_STATUS' => 'Estado',
  'LBL_LIST_TO_ACTIVITY' => 'Ver Estado',
  'LBL_LIST_TYPE' => 'Tipo',
  'LBL_LOCATION_TRACK' => 'Localización de los archivos de seguimiento de la campaña (como campaign_tracker.php):',
  'LBL_LOGIN' => 'Nombre de Usuario',
  'LBL_LOG_ENTRIES' => 'Entradas del Registro',
  'LBL_LOG_ENTRIES_BLOCKEDD_TITLE' => 'Excluidos por Dirección de Correo o dominio',
  'LBL_LOG_ENTRIES_CONTACT_TITLE' => 'Contactos Creados',
  'LBL_LOG_ENTRIES_INVALID_EMAIL_TITLE' => 'Mensajes Rebotados,Email no válido',
  'LBL_LOG_ENTRIES_LEAD_TITLE' => 'Clientes Portenciales Creados',
  'LBL_LOG_ENTRIES_LINK_TITLE' => 'Enlace',
  'LBL_LOG_ENTRIES_REMOVED_TITLE' => 'Descartados',
  'LBL_LOG_ENTRIES_SEND_ERROR_TITLE' => 'Mensajes Rebotados,Otras causas',
  'LBL_LOG_ENTRIES_TARGETED_TITLE' => 'Mensaje Enviado/Intentado',
  'LBL_LOG_ENTRIES_TITLE' => 'Respuestas',
  'LBL_LOG_ENTRIES_VIEWED_TITLE' => 'Mensaje Visto',
  'LBL_MAILBOX' => 'Carpeta Monitorizada',
  'LBL_MAILBOX_CHECK1_BAD' => 'No se han detectado cuentas de correo con gestión de rebote.',
  'LBL_MAILBOX_CHECK1_GOOD' => 'Cuentas de correo con gestión de rebote detectadas:',
  'LBL_MAILBOX_CHECK2_BAD' => 'Por favor, configure la dirección de email de su sistema. Las opciones de E-mail no han sido configuradas.',
  'LBL_MAILBOX_CHECK2_GOOD' => 'Las opciones de E-mail han sido configuradas:',
  'LBL_MAILBOX_CHECK_WIZ_BAD' => 'No se ha detectado ninguna cuenta de correo con gestión de rebote de correo. Por favor, cree una nueva a continuación.',
  'LBL_MAILBOX_CHECK_WIZ_GOOD' => 'Se han detectado cuentas de correo con gestión de rebote de correo.  No necesita crear una nueva, pero puede hacerlo a continuación si aun así lo desea.',
  'LBL_MAILBOX_DEFAULT' => 'INBOX',
  'LBL_MAILBOX_NAME' => 'Nombre de Cuenta de Correo:',
  'LBL_MAIL_SENDTYPE' => 'Agente de Transferencia de Correo (MTA):',
  'LBL_MAIL_SMTPAUTH_REQ' => '¿Utilizar Autenticación SMTP?',
  'LBL_MAIL_SMTPPASS' => 'Contraseña SMTP:',
  'LBL_MAIL_SMTPPORT' => 'Puerto SMTP',
  'LBL_MAIL_SMTPSERVER' => 'Servidor SMTP',
  'LBL_MAIL_SMTPUSER' => 'Usuario SMTP',
  'LBL_MANAGE_SUBSCRIPTIONS_TITLE' => 'Administrar Subscripciones',
  'LBL_MARKETING_CHECK1_BAD' => 'No Email marketing components detected, you will need to create one to mail out a campaign.',
  'LBL_MARKETING_CHECK1_GOOD' => 'Se han detectado los componentes de marketing por Email.',
  'LBL_MARKETING_CHECK2_BAD' => 'No se han detectado listas de público objetivo, tendrá que crear una de la pantalla de la campaña deseada.',
  'LBL_MARKETING_CHECK2_GOOD' => 'Se han detectado listas de público objetivo.',
  'LBL_MARK_AS_SENT' => 'Marcar Como Enviado',
  'LBL_MASS_MAILING_TITLE' => 'Opciones de Envío de Correo Masivo',
  'LBL_MESSAGE_FOR' => 'Enviar Este Mensaje A:',
  'LBL_MESSAGE_QUEUE_TITLE' => 'Cola de Mensajes',
  'LBL_MODIFIED' => 'Modificada por:',
  'LBL_MODIFIED_BY' => 'Modificada por:',
  'LBL_MODIFIED_USER' => 'Usuario Modificado',
  'LBL_MODULE_NAME' => 'Campañas',
  'LBL_MODULE_TITLE' => 'Campañas: Inicio',
  'LBL_MONTH' => 'Mes',
  'LBL_MORE_DETAILS' => 'Más Detalles',
  'LBL_MRKT_NAME' => 'Nombre',
  'LBL_NAME' => 'Nombre:',
  'LBL_NAVIGATION_MENU_GEN1' => 'Encabezado de la Campaña',
  'LBL_NAVIGATION_MENU_GEN2' => 'Presupuesto',
  'LBL_NAVIGATION_MENU_MARKETING' => 'Marketing',
  'LBL_NAVIGATION_MENU_NEW_MAILBOX' => 'Nueva Cuenta de Correo',
  'LBL_NAVIGATION_MENU_SEND_EMAIL' => 'Enviar Email',
  'LBL_NAVIGATION_MENU_SETUP' => 'Configuración de Email',
  'LBL_NAVIGATION_MENU_SUBSCRIPTIONS' => 'Subscripciones',
  'LBL_NAVIGATION_MENU_SUMMARY' => 'Resumen',
  'LBL_NAVIGATION_MENU_TRACKERS' => 'Seguimientos',
  'LBL_NEWSLETTER' => 'Boletín de Noticias',
  'LBL_NEWSLETTER WIZARD_TITLE' => 'Boletín de noticias:',
  'LBL_NEWSLETTERS' => 'Ver Boletines de Noticias',
  'LBL_NEWSLETTER_FORENTRY' => 'Boletín de Noticias',
  'LBL_NEWSLETTER_LIST_FORM_TITLE' => 'Lista de Boletines de noticias',
  'LBL_NEWSLETTER_TITLE' => 'Campañas: Boletines de noticias',
  'LBL_NEWSLETTER_WIZARD_START_TITLE' => 'Editar boletín de noticias:',
  'LBL_NEW_FORM_TITLE' => 'Nueva Campaña',
  'LBL_NO' => 'No',
  'LBL_NONE' => 'ninguna creada',
  'LBL_NON_ADMIN_ERROR_MSG' => 'Por favor, notifíqueselo a su administrador del sistema para que corrija este problema',
  'LBL_NOTIFY_TITLE' => 'Opciones de Notificación por Email',
  'LBL_NOT_VALID_EMAIL_ADDRESS' => 'No es una dirección de correo válida',
  'LBL_NO_SUBS_ENTRIES_WARNING' => 'No puede enviar un email de marketing hasta que su lista de suscriptores tenga al menos una entrada.  Puede rellenar su lista tras finalizar.',
  'LBL_NO_TARGETS_WARNING' => 'No puede enviar un email de marketing hasta que su campaña tenga al menos una lista de público objetivo.',
  'LBL_NO_TARGET_ENTRIES_WARNING' => 'No puede enviar un email de marketing hasta que su lista de público objetivo tenga al menos una entrada.  Puede rellenar su lista tras finalizar.',
  'LBL_OPPORTUNITIES' => 'Oportunidades',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunidades',
  'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Oportunidades',
  'LBL_OTHER_TYPE_CAMPAIGN' => 'Campaña no basada en email',
  'LBL_PASSWORD' => 'Contraseña',
  'LBL_PORT' => 'Puerto del Servidor de Correo',
  'LBL_PROSPECTLISTS_SUBPANEL_TITLE' => 'Lista de Público Objetivo',
  'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Lista de Público Objetivo',
  'LBL_PROVIDE_WEB_TO_LEAD_FORM_FIELDS' => 'Por favor, indique todos los campos requeridos',
  'LBL_QUEUE_BUTTON_KEY' => 'u',
  'LBL_QUEUE_BUTTON_LABEL' => 'Enviar Emails',
  'LBL_QUEUE_BUTTON_TITLE' => 'Enviar Emails',
  'LBL_RECHECK_BTN' => 'Comprobar de Nuevo',
  'LBL_REFER_URL' => 'URL de Redirección de Seguimiento:',
  'LBL_REMOVE' => 'quit',
  'LBL_REMOVED_SUBPANEL_TITLE' => 'Eliminado',
  'LBL_REPLY_ADDR' => 'Dirección de "Responder a":',
  'LBL_REPLY_NAME' => 'Nombre de "Responder a":',
  'LBL_ROI_CHART_BUDGET' => 'Presupuesto',
  'LBL_ROI_CHART_EXPECTED_REVENUE' => 'Ingresos Esperados',
  'LBL_ROI_CHART_INVESTMENT' => 'Inversión',
  'LBL_ROI_CHART_REVENUE' => 'Ingresos',
  'LBL_ROLLOVER_VIEW' => 'Mueva el cursor sobre una barra para más detalles.',
  'LBL_SAVED_SEARCH' => 'Búsquedas y Diseños Guardados',
  'LBL_SAVE_CONTINUE_BUTTON_LABEL' => 'Guardar y Continuar',
  'LBL_SAVE_EXIT_BUTTON_LABEL' => 'Finalizar',
  'LBL_SCHEDULER_CHECK1_BAD' => 'No se ha configurado el Planificador para procesar los Emails Rebotados de Campaña.',
  'LBL_SCHEDULER_CHECK2_BAD' => 'No se ha configurado el Planificador para procesar los Emails de Campaña.',
  'LBL_SCHEDULER_CHECK_BAD' => 'No se han detectado Planificadores',
  'LBL_SCHEDULER_CHECK_GOOD' => 'Se han detectado Planificadores',
  'LBL_SCHEDULER_COMPONENTS' => 'Componentes del Planificador',
  'LBL_SCHEDULER_LINK' => 'ir a la pantalla de administración del planificador.',
  'LBL_SCHEDULER_NAME' => 'Planificador',
  'LBL_SCHEDULER_STATUS' => 'Estado',
  'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de Campañas',
  'LBL_SELECT_LEAD_FIELDS' => 'Por favor, seleccione de entre los campos disponibles',
  'LBL_SELECT_REQUIRED_LEAD_FIELDS' => 'Por favor, seleccione los campos requeridos:',
  'LBL_SELECT_TARGET' => 'Usar Lista de Público Objetivo existente',
  'LBL_SEND ERROR_SUBPANEL_TITLE' => 'Error de Envío',
  'LBL_SEND_AS_TEST' => 'Enviar Marketing por Email como Pruebas',
  'LBL_SEND_EMAIL' => 'Planificar Email',
  'LBL_SERVER_TYPE' => 'Protocolo del Servidor de Correo',
  'LBL_SERVER_URL' => 'Dirección del Servidor de Correo',
  'LBL_SSL' => 'Usar SSL',
  'LBL_SSL_DESC' => 'Si su servidor de correo soporta conexiones seguras de sockets (SSL), habilitar esta opción forzará conexiones SSL al importar el correo.',
  'LBL_START' => 'Iniciar',
  'LBL_START_DATE_TIME' => 'Fecha y Hora de Inicio:',
  'LBL_STATUS_TEXT' => 'Estado:',
  'LBL_SUBSCRIPTION_LIST' => 'Lista de Suscripción',
  'LBL_SUBSCRIPTION_LIST_NAME' => 'Nombre de Lista de Suscripción:',
  'LBL_SUBSCRIPTION_TARGET_WIZARD_DESC' => 'Esto definirá la lista de público objetivo de tipo Suscripción para esta campaña.<br>  Esta lista de público objetivo se usará para enviar los emails de esta campaña.  <br>Si no ha preparado previamente una lista, el sistema creará para usted una lista vacía.',
  'LBL_SUBSCRIPTION_TYPE_NAME' => 'Suscripción',
  'LBL_TARGETED' => 'Objetivos',
  'LBL_TARGETED_SUBPANEL_TITLE' => 'Objetivos Seleccionados',
  'LBL_TARGET_LIST' => 'Lista de Público Objetivo',
  'LBL_TARGET_LISTS' => 'Listas de Público Objetivo',
  'LBL_TARGET_NAME' => 'Nombre de Lista de Público Objetivo',
  'LBL_TARGET_TYPE' => 'Tipo de Lista de Público Objetivo',
  'LBL_TEAM' => 'Equipo:',
  'LBL_TEMPLATE' => 'Plantilla de Email:',
  'LBL_TEST_BUTTON_KEY' => 'e',
  'LBL_TEST_BUTTON_LABEL' => 'Enviar Prueba',
  'LBL_TEST_BUTTON_TITLE' => 'Enviar Prueba',
  'LBL_TEST_EMAILS_SENT' => 'Probar Emails Enviados',
  'LBL_TEST_LIST' => 'Lista de Pruebas',
  'LBL_TEST_LIST_NAME' => 'Nombre de Lista de Prueba:',
  'LBL_TEST_TARGET_WIZARD_DESC' => 'Esto definirá la lista de público objetivo de tipo Pruebas para esta campaña.  <br>Esta lista de público objetivo se usará para enviar emails de pruebas para esta campaña.  <br>Si no ha preparado previamente una lista, el sistema creará para usted una lista vacía.',
  'LBL_TEST_TYPE_NAME' => 'Pruebas',
  'LBL_TIME_START' => 'Hora de Inicio',
  'LBL_TODETAIL_BUTTON_KEY' => 'T',
  'LBL_TODETAIL_BUTTON_LABEL' => 'Ver Detalles',
  'LBL_TODETAIL_BUTTON_TITLE' => 'Ver Detalles',
  'LBL_TOP_CAMPAIGNS' => 'Campañas Principales',
  'LBL_TOP_CAMPAIGNS_NAME' => 'Nombre de Campaña',
  'LBL_TOP_CAMPAIGNS_REVENUE' => 'Ingresos',
  'LBL_TOTAL_ENTRIES' => 'Entradas',
  'LBL_TOTAL_TARGETED' => 'Total Objetivos',
  'LBL_TO_WIZARD' => 'lanzar',
  'LBL_TO_WIZARD_TITLE' => 'Lanzar Asistente',
  'LBL_TRACKED_URLS' => 'URLs de Sequimiento',
  'LBL_TRACKED_URLS_SUBPANEL_TITLE' => 'URLs de Seguimiento',
  'LBL_TRACKERS' => 'Seguimientos',
  'LBL_TRACKER_COUNT' => 'Contador de Seguimiento:',
  'LBL_TRACKER_KEY' => 'Seguimiento:',
  'LBL_TRACKER_TEXT' => 'Texto de Enlace de Seguimiento:',
  'LBL_TRACKER_URL' => 'URL de Seguimiento:',
  'LBL_TRACK_BUTTON_KEY' => 'T',
  'LBL_TRACK_BUTTON_LABEL' => 'Ver Estado',
  'LBL_TRACK_BUTTON_TITLE' => 'Ver Estado',
  'LBL_TRACK_DELETE_BUTTON_KEY' => 'D',
  'LBL_TRACK_DELETE_BUTTON_LABEL' => 'Eliminar Entradas de Pruebas',
  'LBL_TRACK_DELETE_BUTTON_TITLE' => 'Eliminar Entradas de Pruebas',
  'LBL_TRACK_DELETE_CONFIRM' => 'Esta opción eliminará las entradas del registro creadas por el juego de pruebas. ¿Desea continuar?',
  'LBL_TRACK_QUEUE_SUBPANEL_TITLE' => 'Cola de Seguimiento',
  'LBL_TRACK_ROI_BUTTON_LABEL' => 'Ver ROI',
  'LBL_UNSUBSCRIBED_HEADER' => 'Boletines de Noticias Disponibles/Sin Suscripción',
  'LBL_UNSUBSCRIBED_HEADER_EXPL' => 'Al mover el boletín de noticias a la lista de Boletines de Noticias Disponibles/Sin Suscripción añadirá el contacto a la Lista de Sin Suscripción para este boletín de noticias.  El contacto no será eliminado de la Lista de Suscripción o Lista de Público Objetivo original.',
  'LBL_UNSUBSCRIPTION_LIST' => 'Lista de No suscripción',
  'LBL_UNSUBSCRIPTION_LIST_NAME' => 'Nombre de Lista de No suscripción:',
  'LBL_UNSUBSCRIPTION_TARGET_WIZARD_DESC' => 'Esto definirá la lista de público objetivo de tipo No suscripción para esta campaña.  <br>Esta lista de público objetivo contendrá los nombres de las personas que han decidido no participar en su campaña y no deberían ser contactados por email. <br>Si no ha preparado previamente una lista, el sistema creará para usted una lista vacía.',
  'LBL_UNSUBSCRIPTION_TYPE_NAME' => 'No suscripción',
  'LBL_USERS_CANNOT_OPTOUT' => 'Los Usuarios de Sistema no pueden optar por no recibir emails.',
  'LBL_USE_EXISTING' => 'Utilizar Existente',
  'LBL_VALID' => 'Válido',
  'LBL_VIEWED_SUBPANEL_TITLE' => 'Visto',
  'LBL_VIEW_INLINE' => 'Ver',
  'LBL_WEB_TO_LEAD' => 'Nuevo Formulario de Cliente Potencial',
  'LBL_WEB_TO_LEAD_FORM_TITLE1' => 'Nuevo Formulario de Cliente Potencial: Seleccione campos',
  'LBL_WEB_TO_LEAD_FORM_TITLE2' => 'Nuevo Formulario de Cliente Potencial: Propiedades del formulario',
  'LBL_WIZARD_BUDGET_MESSAGE' => 'Introduzca el presupuesto para calcular el ROI.',
  'LBL_WIZARD_FIRST_STEP_MESSAGE' => 'Ya está en el primer paso.',
  'LBL_WIZARD_HEADER_MESSAGE' => 'Rellene los campos requerido para ayudar a identificar la campaña.',
  'LBL_WIZARD_LAST_STEP_MESSAGE' => 'Ya está en el último paso.',
  'LBL_WIZARD_MARKETING_MESSAGE' => 'Rellene el siguiente formulario para crear una instancia de email para su boletín de noticias.  Esto le permitirá especificar cuándo y cómo su boletín de noticias debería ser distribuido.',
  'LBL_WIZARD_SENDMAIL_MESSAGE' => 'Éste es el último paso del proceso.  Elija si quiere enviar una prueba, planificar la distribución de su boletín de noticias, o simplemente guardar su trabajo e ir al resumen.',
  'LBL_WIZARD_SUBSCRIPTION_MESSAGE' => 'Cada boletín de noticias debe tener tres listas de público objetivo (Suscripción, No suscripción, y Pruebas). Puede asignar una lista existente de público objetivo. Si no, se creará una lista vacía al guardar el boletín de noticias.',
  'LBL_WIZARD_TARGET_MESSAGE1' => 'Seleccione o cree una lista de público objetivo para utilizar con su campaña.  Esta lista se usará para enviar emails con sus mensajes de marketing.',
  'LBL_WIZARD_TARGET_MESSAGE2' => 'O cree una nueva usando el siguiente formulario:',
  'LBL_WIZARD_TRACKER_MESSAGE' => 'Defina aquí un URL de seguimiento para utilizar con esta campaña. Debe introducir tanto el nombre como el URL para crear el seguimiento.',
  'LBL_WIZ_FROM_ADDRESS' => 'Dirección del Remitente:',
  'LBL_WIZ_FROM_NAME' => 'Nombre del Remitente:',
  'LBL_WIZ_MARKETING_TITLE' => 'Email de Marketing',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP1' => 'Encabezado de la Campaña',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP2' => 'Presupuesto de la Campaña',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP3' => 'URLs de seguimiento de la Campaña',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP4' => 'Información de Suscripción',
  'LBL_WIZ_NEWSLETTER_TITLE_SUMMARY' => 'Resumen',
  'LBL_WIZ_SENDMAIL_TITLE' => 'Enviar Email',
  'LBL_WIZ_TEST_EMAIL_TITLE' => 'Probar Email',
  'LBL_YEAR' => 'Año',
  'LBL_YES' => 'Sí',
  'LNK_CAMPAIGN_DIGNOSTIC_LINK' => 'La campaña puede no tener el comportamiento deseado y sus emails puede que no sean enviados por las siguientes razones:',
  'LNK_CAMPAIGN_LIST' => 'Ver Campañas',
  'LNK_EMAIL_TEMPLATE_LIST' => 'Ver Plantillas de Email',
  'LNK_NEW_CAMPAIGN' => 'Crear Campaña (Clásica)',
  'LNK_NEW_EMAIL_TEMPLATE' => 'Nueva Plantilla de Email',
  'LNK_NEW_PROSPECT' => 'Crear Público Objetivo',
  'LNK_NEW_PROSPECT_LIST' => 'Crear Lista de Público Objetivo',
  'LNK_PROSPECT_LIST' => 'Ver Público Objetivo',
  'LNK_PROSPECT_LIST_LIST' => 'Ver Listas de Público Objetivo',
  'LNL_NEW_CAMPAIGN_WIZARD' => 'Creación de Campaña (Asistente)',
  'NTC_DELETE_CONFIRMATION' => '¿Está seguro de que desea eliminar este registro?',
  'NTC_NO_LEGENDS' => 'Ninguno',
  'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Valor de site_url en Config.php',
);

