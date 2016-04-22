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
  'LBL_EXTERNAL_WARNING' => 'Productes etiquetats com "extern" es necessita un <a href="?module=EAPM">compte externa</a>.',
  'LBL_AUTHENTICATION_PENDING' => 'No tots els comptes externes s&#39;ha seleccionat han estat autenticats. Feu clic a "Cancel·lar" per tornar a la finestra Opcions per autenticar els comptes externes, o feu clic a "D&#39;acord" per continuar sense autenticar.',
  'LBL_ID' => 'ID',
  'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',
  'LBL_TEAM' => 'Equip',
  'LBL_TEAM_ID' => 'ID d´Equip',
  'LBL_ASSIGNED_TO_ID' => 'ID Usuari Assignat',
  'LBL_ASSIGNED_TO_NAME' => 'Assignat a',
  'LBL_DATE_ENTERED' => 'Data de Creació',
  'LBL_DATE_MODIFIED' => 'Data de Modificació',
  'LBL_MODIFIED' => 'Modificat Per',
  'LBL_MODIFIED_ID' => 'Modificat Per ID',
  'LBL_MODIFIED_NAME' => 'Modificat Per Nom',
  'LBL_CREATED' => 'Creat Per',
  'LBL_CREATED_ID' => 'Creat Per ID',
  'LBL_DESCRIPTION' => 'Descripció',
  'LBL_DELETED' => 'Eliminat',
  'LBL_NAME' => 'Nom',
  'LBL_SAVING' => 'Guardant...',
  'LBL_SAVED' => 'Guardat',
  'LBL_CREATED_USER' => 'Creat Per Usuari',
  'LBL_MODIFIED_USER' => 'Modificat Per Usuari',
  'LBL_LIST_FORM_TITLE' => 'Llista Sugar Feed',
  'LBL_MODULE_NAME' => 'Sugar Feed',
  'LBL_MODULE_TITLE' => 'Sugar Feed',
  'LBL_DASHLET_DISABLED' => 'Avis: El sistema Sugar Feed està deshabilitat, no s´enviaran noves entrades de feeds fins que sigui activat',
  'LBL_ADMIN_SETTINGS' => 'Condiguració de Sugar Feed',
  'LBL_RECORDS_DELETED' => 'Totes les entrades anteriors de Sugar Feed s´han tret, si el sistema Sugar Feed està habilitat, es generaran noves entrades automàticament.',
  'LBL_CONFIRM_DELETE_RECORDS' => 'Està segur de que vol esborrar totes les entrades de Sugar Feed?',
  'LBL_FLUSH_RECORDS' => 'Esborrar Entrades de Feed',
  'LBL_ENABLE_FEED' => 'Habilitar Sugar Feed',
  'LBL_ENABLE_MODULE_LIST' => 'Activar Feeds Per a',
  'LBL_HOMEPAGE_TITLE' => 'El Meu Sugar Feed',
  'LNK_NEW_RECORD' => 'Nou Sugar Feed',
  'LNK_LIST' => 'Sugar Feed',
  'LBL_SEARCH_FORM_TITLE' => 'Cercar Sugar Feed',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Veure Històrial',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activitats',
  'LBL_SUGAR_FEED_SUBPANEL_TITLE' => 'Sugar Feed',
  'LBL_NEW_FORM_TITLE' => 'Nou Sugar Feed',
  'LBL_ALL' => 'Tot',
  'LBL_USER_FEED' => 'Feed d´Usuari',
  'LBL_ENABLE_USER_FEED' => 'Activar Feed d´Usuari',
  'LBL_TO' => 'Enviar A',
  'LBL_IS' => 'es',
  'LBL_DONE' => 'Fet',
  'LBL_TITLE' => 'Títol',
  'LBL_ROWS' => 'Files',
  'LBL_MY_FAVORITES_ONLY' => 'Només el meus preferits',
  'LBL_ENABLE_EXTERNAL_CONNECTORS' => '<i>Nota: Per permetre als usuaris veure Facebook i Twitter, anar a la configuració de connectors per configurar els connectors de Facebook i Twitter.</i>',
  'LBL_CATEGORIES' => 'Mòduls',
  'LBL_TIME_LAST_WEEK' => 'Última Setmana',
  'LBL_TIME_WEEKS' => 'Setmanes',
  'LBL_TIME_DAYS' => 'Diess',
  'LBL_TIME_YESTERDAY' => 'Ahir',
  'LBL_TIME_HOURS' => 'Hores',
  'LBL_TIME_HOUR' => 'Hores',
  'LBL_TIME_MINUTES' => 'Minuts',
  'LBL_TIME_MINUTE' => 'Minut',
  'LBL_TIME_SECONDS' => 'Segons',
  'LBL_TIME_SECOND' => 'Segon',
  'LBL_TIME_AGO' => 'fa',
  'CREATED_CONTACT' => 'creat un <b>NOU</b> contacte',
  'CREATED_OPPORTUNITY' => 'creada una <b>NOVA</b> oportunitat',
  'CREATED_CASE' => 'creat un <b>NOU</b> cas',
  'CREATED_LEAD' => 'creat un <b>NOU</b> client potencial',
  'FOR' => 'per a',
  'CLOSED_CASE' => '<b>TANCAT</b> un cas',
  'CONVERTED_LEAD' => '<b>CONVERTIT</b> un client potencial',
  'WON_OPPORTUNITY' => 'ha <b>GUANYAT</b> una oportunitat',
  'WITH' => 'amb',
  'LBL_LINK_TYPE_Link' => 'Enllaç',
  'LBL_LINK_TYPE_Image' => 'Imatge',
  'LBL_SELECT' => 'Seleccionar',
  'LBL_POST' => 'Enviar',
  'LBL_EXTERNAL_PREFIX' => 'Extern:',
  'LBL_AUTHENTICATE' => 'Connectar-se a',
  'LBL_ADVANCED_SEARCH' => 'Recerca avançada',
  'LBL_BASICSEARCH' => 'Recerca bàsica',
  'LBL_SHOW_MORE_OPTIONS' => 'Mostra més opcions',
  'LBL_HIDE_OPTIONS' => 'Amaga les opcions',
  'LBL_VIEW' => 'Vista',
  'LBL_POST_TITLE' => 'Missatge d&#39;actualització d&#39;estat de',
  'LBL_URL_LINK_TITLE' => 'URL de l&#39;enllaç d&#39;usar',
  'LBL_TEAM_VISIBILITY_TITLE' => 'equip que pot veure aquest post',
);

