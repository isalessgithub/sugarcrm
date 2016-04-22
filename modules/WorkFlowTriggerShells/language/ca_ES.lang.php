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
 * Description:  Defines the Catalan language pack for the base application. 

 * Source: SugarCRM 5.2.0
 * Contributor(s): Ramón Feliu (ramon@slay.es).
 ********************************************************************************/

$mod_strings = array (
  'LBL_MODULE_NAME' 					=> 'Condicions',
  'LBL_MODULE_TITLE' 					=> 'Disparadors de Workflow: Inici',
  'LBL_MODULE_SECTION_TITLE' 			=> 'Quan es compleixin aquestes condicions',
  'LBL_SEARCH_FORM_TITLE' 				=> 'Llista de Disparadors de Workflow',
  'LBL_LIST_FORM_TITLE' 				=> 'Llista de Disparadors',
  'LBL_NEW_FORM_TITLE' 					=> 'Nou Disparador',
  'LBL_LIST_NAME' 						=> 'Descripció:',
  'LBL_LIST_VALUE' 						=> 'Valor:',
  'LBL_LIST_TYPE' 						=> 'Tipus:',
  'LBL_LIST_EVAL' 						=> 'Eval:',
  'LBL_LIST_FIELD' 						=> 'Camp:',
  'LBL_NAME' 							=> 'Nom del Disparador:',
  'LBL_TYPE' 							=> 'Tipus:',
  'LBL_EVAL' 							=> 'Evaluació del Disparador:',
  'LBL_SHOW_PAST' 						=> 'Modificar Valor Anterior:',
  'LBL_SHOW' 							=> 'Mostrar',
  'LNK_NEW_TRIGGER' 					=> 'Crear Disparador',
  'LNK_TRIGGER' 						=> 'Disparadors de Workflow',
  'LBL_LIST_STATEMEMT' 					=> 'Disparar un esdeveniment basant-se en el següent: ',
  'LBL_FILTER_LIST_STATEMEMT' 			=> 'Filtrar objectes basant-se en el següent: ',
  'NTC_REMOVE_TRIGGER' 					=> 'Està segur que desitja treure aquest trigger?',
  'LNK_NEW_WORKFLOW' 					=> 'Crear Workflow',
  'LNK_WORKFLOW' 						=> 'Objetes de Workflow',
  'LBL_ALERT_TEMPLATES' 				=> 'Plantilles d´Alerta',
  'LBL_TRIGGER' 						=> 'Quan',
  'LBL_FIELD' 							=> 'camp',
  'LBL_VALUE' 							=> 'valor',
  'LBL_RECORD' 							=> 'del mòdul',
  'LBL_COMPARE_SPECIFIC_TITLE' 			=> 'Quan un camp en el mòdul objectiu canvia a 0 d´un valor especificat',
  'LBL_COMPARE_SPECIFIC_PART' 			=> 'canvia a 0 d´un valor especificat',
  'LBL_COMPARE_SPECIFIC_PART_TIME' 		=> ' ',
  'LBL_COMPARE_CHANGE_TITLE' 			=> 'Quan un camp en el mòdul objectiu canvia',
  'LBL_COMPARE_CHANGE_PART' 			=> 'canvia',
  'LBL_COMPARE_COUNT_TITLE' 			=> 'Disparar en arribar un compte específic',
  'LBL_COMPARE_ANY_TIME_TITLE' 			=> 'El camp no canvia durant un període determinat de temps',
  'LBL_COMPARE_ANY_TIME_PART2' 			=> 'no canvia durant ',
  'LBL_COMPARE_ANY_TIME_PART3' 			=> 'període especificat de temps',
  'LBL_FILTER_FIELD_TITLE' 				=> 'Quan un camp en el mòdul objectiu conté un valor especificat',
  'LBL_FILTER_FIELD_PART1' 				=> 'Filtrar per ',
  'LBL_FILTER_REL_FIELD_TITLE' 			=> 'Quan el mòdul objectiu canvia i un camp en el mòdul relacionat conté un valor específic',
  'LBL_FILTER_REL_FIELD_PART1' 			=> 'Especificar relacionat',
  'LBL_TRIGGER_RECORD_CHANGE_TITLE' 	=> 'Quan el mòdul objectiu canvia',
  'LBL_TRIGGER_RECORD_CHANGE_LIST_TITLE'=> 'Llista canvis del mòdul objectiu',
//General Labels
  'LBL_FUTURE_TRIGGER' 					=> 'Especificar nou',
  'LBL_PAST_TRIGGER' 					=> 'Especificar vell',
  'LBL_COUNT_TRIGGER1' 					=> 'Total',
  'LBL_COUNT_TRIGGER1_2' 				=> 'es compara a aquesta quantitat',
//Specific Lables
  'LBL_MODULE' 							=> 'mòdul',
  'LBL_COUNT_TRIGGER2' 					=> 'filtrar per relacionat',
  'LBL_COUNT_TRIGGER2_2' 				=> 'només',
  'LBL_COUNT_TRIGGER3' 					=> 'filtrar específicament per',
  'LBL_COUNT_TRIGGER4' 					=> 'filtrar per un segon',
  'LBL_NEW_FILTER_BUTTON_KEY' 			=> 'F',
  'LBL_NEW_FILTER_BUTTON_TITLE' 		=> 'Crear Filtre [Alt+F]',
  'LBL_NEW_FILTER_BUTTON_LABEL' 		=> 'Crear Filtre',
  'LBL_NEW_TRIGGER_BUTTON_KEY' 			=> 'T',
  'LBL_NEW_TRIGGER_BUTTON_TITLE' 		=> 'Crear Disparador [Alt+T]',
  'LBL_NEW_TRIGGER_BUTTON_LABEL' 		=> 'Crear Disparador',
  'LBL_LIST_FRAME_SEC' 					=> 'Filtre: ',
  'LBL_LIST_FRAME_PRI' 					=> 'Disparador: ',
  'LBL_TRIGGER_FILTER_TITLE' 			=> 'Filtres de Disparador',
  'LBL_TRIGGER_FORM_TITLE' 				=> 'Definir una condició per l´execució del workflow',
  'LBL_FILTER_FORM_TITLE' 				=> 'Definir una condició del workflow',
  'LBL_SPECIFIC_FIELD'					=> "'s camp específic",
  'LBL_APOSTROPHE_S'					=> "'s ",
  'LBL_WHEN_VALUE1'						=> "Quan el valor del camp es ",
  'LBL_WHEN_VALUE2'						=> "Quan el valor de ",
  'LBL_SELECT_OPTION' 					=> 'Si us plau, seleccioni una opció.',
  'LBL_SELECT_TARGET_FIELD' 			=> 'Si us plau, seleccioni un camp de destí.',
  'LBL_SELECT_TARGET_MOD' 				=> 'Si us plau, seleccioni un mòdul relacionat de destí.',
  'LBL_SPECIFIC_FIELD_LNK' 				=> 'camp especificat',
  'LBL_MUST_SELECT_VALUE' => 'Te que seleccionar un valor per aquest camp',
  'LBL_SELECT_AMOUNT' => 'Te que seleccionar la quantitat',
  'LBL_SELECT_1ST_FILTER' => 'Te que seleccionar un camp vàlid com 1er filtre',
  'LBL_SELECT_2ND_FILTER' => 'Te que seleccionar un camp vàlid com 2on filtre',
);

$mod_process_order_strings = array(
	'compare_specific' => array('1','2','3'),
	'compare_change' => array('1','2','3'),
	'compare_count' => array('1','2','3')
);

?>