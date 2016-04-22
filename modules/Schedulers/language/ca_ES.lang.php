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
  'ERR_CRON_SYNTAX' => 'Sintaxis de Cron invàlida',
  'ERR_DELETE_RECORD' => 'Ha d´especificar un número de registre per eliminar la planificació.',
  'LBL_ADV_OPTIONS' => 'Opcions Avançades',
  'LBL_ALL' => 'Tots els dies',
  'LBL_ALWAYS' => 'Sempre',
  'LBL_AND' => 'i',
  'LBL_AT' => 'en',
  'LBL_AT_THE' => 'El',
  'LBL_BASIC_OPTIONS' => 'Configuració Bàsica',
  'LBL_CATCH_UP' => 'Executar Si Falla',
  'LBL_CATCH_UP_WARNING' => 'Desmarqui si l´execució d´aquesta tasca pot durar més d´un moment.',
  'LBL_CLEANJOBQUEUE' => 'Alliberar espai en cua de treball',
  'LBL_CRONTAB_EXAMPLES' => 'Lo a dalt mostrat utilitza notació estàndard de crontab.',
  'LBL_CRONTAB_SERVER_TIME_POST' => '). Si us plau, especifiqui el temps d&#39;execució del planificador en conseqüència',
  'LBL_CRONTAB_SERVER_TIME_PRE' => 'Les especificacions que cron s&#39;executi sobre la base de la zona horària del servidor (',
  'LBL_CRON_INSTRUCTIONS_LINUX' => 'Per configurar Crontab',
  'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Per configurar el Planificador de Windows',
  'LBL_CRON_LINUX_DESC' => 'Afegeixi aquesta línia en el seu crontab:',
  'LBL_CRON_WINDOWS_DESC' => 'Crear un arxiu de procés per lots amb els següents comandos:',
  'LBL_DATE_TIME_END' => 'Data i Hora de Fi',
  'LBL_DATE_TIME_START' => 'Data i Hora d´Inici',
  'LBL_DAY_OF_MONTH' => 'data',
  'LBL_DAY_OF_WEEK' => 'dia',
  'LBL_EVERY' => 'Cada',
  'LBL_EVERY_DAY' => 'Tots els dies',
  'LBL_EXECUTE_TIME' => 'Temps d´Execució',
  'LBL_FRI' => 'Divendres',
  'LBL_FROM' => 'Desde',
  'LBL_HOUR' => 'hores',
  'LBL_HOURS' => 'hrs',
  'LBL_HOUR_SING' => 'hora',
  'LBL_IN' => 'en',
  'LBL_INTERVAL' => 'Interval',
  'LBL_JOB' => 'Tasca',
  'LBL_JOBS_SUBPANEL_TITLE' => 'Registre de Tasques',
  'LBL_JOB_URL' => 'URL tasca',
  'LBL_LAST_RUN' => 'Última Execució Exitosa',
  'LBL_LIST_EXECUTE_TIME' => 'Será executat en:',
  'LBL_LIST_JOB_INTERVAL' => 'Interval:',
  'LBL_LIST_LIST_ORDER' => 'Planificacions:',
  'LBL_LIST_NAME' => 'Planificador:',
  'LBL_LIST_RANGE' => 'Rang:',
  'LBL_LIST_REMOVE' => 'Treure:',
  'LBL_LIST_STATUS' => 'Estat:',
  'LBL_LIST_TITLE' => 'Llista de Planificació:',
  'LBL_MINS' => 'min',
  'LBL_MINUTES' => 'minuts',
  'LBL_MIN_MARK' => 'marca per minut',
  'LBL_MODULE_NAME' => 'Planificador Sugar',
  'LBL_MODULE_TITLE' => 'Planificacions',
  'LBL_MON' => 'Dilluns',
  'LBL_MONTH' => 'mes',
  'LBL_MONTHS' => 'mes',
  'LBL_NAME' => 'Nom de Tasca',
  'LBL_NEVER' => 'Mai',
  'LBL_NEW_FORM_TITLE' => 'Nova Planificació',
  'LBL_NO_PHP_CLI' => 'Si el seu servidor no té disponibles els binaris PHP, pot utilitzar wget o curl per llançar les seves Tasques .<br>per wget: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;wget --quiet --non-verbose /cron.php > /dev/null 2>&1</b><br>per curl: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;curl --silent /cron.php > /dev/null 2>&1',
  'LBL_OFTEN' => 'Tan sovint com sigui possible.',
  'LBL_ON_THE' => 'En el',
  'LBL_OOTB_BOUNCE' => 'Executar Procés Nocturn de Correus de Campanya Rebotats',
  'LBL_OOTB_CAMPAIGN' => 'Executar Procés Nocturn de Campanyes de Correu Massiu',
  'LBL_OOTB_CLEANUP_QUEUE' => 'Netejar cua de treball',
  'LBL_OOTB_IE' => 'Comprovar Safates d´Entrada',
  'LBL_OOTB_PRUNE' => 'Truncar Base de dades al Inici del Mes',
  'LBL_OOTB_REPORTS' => 'Executar Tasques Programades de Generació d´Informes',
  'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Executar Notificacions de recordatori per correu electrònic',
  'LBL_OOTB_TRACKER' => 'Truncar Històrial d´Usuari al Inici del Mes',
  'LBL_OOTB_WORKFLOW' => 'Processar Tasques de Workflow',
  'LBL_PERENNIAL' => 'continu',
  'LBL_PERFORMFULLFTSINDEX' => 'Cerca de text complet Sistema d&#39;Índex',
  'LBL_POLLMONITOREDINBOXES' => 'Comprovar Comptes de Correu Entrant',
  'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Executar Procés Nocturn de Correus Rebotats en Campanyes',
  'LBL_PROCESSQUEUE' => 'Executar Tasques Planificades de Generació d&#39;Informes',
  'LBL_PROCESSWORKFLOW' => 'Processar Tasques de Workflow',
  'LBL_PRUNEDATABASE' => 'Truncar Base de Dades el 1º de cada Mes',
  'LBL_RANGE' => 'a',
  'LBL_REFRESHJOBS' => 'Actualitzar Treballs',
  'LBL_RUNMASSEMAILCAMPAIGN' => 'Executar campanyes de Correu Massiu Nocturnes',
  'LBL_SAT' => 'Dissabte',
  'LBL_SCHEDULER' => 'Planificador:',
  'LBL_SEARCH_FORM_TITLE' => 'Recerca de Planificació',
  'LBL_SENDEMAILREMINDERS' => 'Executar Envia recordatoris per correu electrònic',
  'LBL_STATUS' => 'Estat',
  'LBL_SUN' => 'Diumenge',
  'LBL_THU' => 'Dijous',
  'LBL_TIME_FROM' => 'Actiu Desde',
  'LBL_TIME_TO' => 'Actiu Fins a',
  'LBL_TOGGLE_ADV' => 'Opcions Avançades',
  'LBL_TOGGLE_BASIC' => 'Opcions Bàsiques',
  'LBL_TRIMTRACKER' => 'Truncar Taules de Monitorització',
  'LBL_TUE' => 'Dimarts',
  'LBL_UPDATETRACKERSESSIONS' => 'Actualitzar Taules de Sessió de Monitorització',
  'LBL_UPDATE_TRACKER_SESSIONS' => 'Actualitzar taula tracker_sessions',
  'LBL_WARN_CURL' => 'Avís:',
  'LBL_WARN_CURL_TITLE' => 'Avís cURL:',
  'LBL_WARN_NO_CURL' => 'Aquest sistema no té les llibreries cURL habilitades/compilades en el mòdul de PHP (--with-curl=/ruta/a/libreria_curl).  ﻿Si us plau, contacti amb el seu administrador per resoldre el problema. Sense la funcionalitat que proveeix cURL, el Planificador no pot utilitzar fils amb les seves tasques.',
  'LBL_WED' => 'Dimecres',
  'LNK_LIST_SCHEDULED' => 'Tasques Planificades',
  'LNK_LIST_SCHEDULER' => 'Planificacions',
  'LNK_NEW_SCHEDULER' => 'Nou Planificador',
  'NTC_DELETE_CONFIRMATION' => 'Està segur que desitja eliminar aquest registre?',
  'NTC_LIST_ORDER' => 'Estableixi l´ordre en el qual aquesta planificació apareixerà en les llistes desplegables de selecció de Planificador',
  'NTC_STATUS' => 'Estableixi l´estat a Inactiu per treure aquesta planificació de les llistes desplegables de selecció de Planificador',
  'SOCK_GREETING' => 'Aquest és l&#39;interfície d&#39;usuari per al Servei de Planificació de SugarCRM.  [ Comandos de dimoni disponibles: start|restart|shutdown|status ] Per sortir, escrigui &#39;quit&#39;.  Per parar el servei &#39;shutdown&#39;.',
);

