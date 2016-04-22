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
  'LBL_LINK_TYPE_Link' => 'Link',
  'LBL_TEAM' => 'Csoport',
  'LBL_TEAM_ID' => 'Csoport azonosító',
  'LBL_ASSIGNED_TO_ID' => 'Felelős felhasználó azonosító',
  'LBL_ASSIGNED_TO_NAME' => 'Hozzárendelve',
  'LBL_ID' => 'Azonosító',
  'LBL_DATE_ENTERED' => 'Létrehozás dátuma',
  'LBL_DATE_MODIFIED' => 'Módosítás dátuma',
  'LBL_MODIFIED' => 'Módosította',
  'LBL_MODIFIED_ID' => 'Módosítói azonosító',
  'LBL_MODIFIED_NAME' => 'Módosító neve',
  'LBL_CREATED' => 'Létrehozta',
  'LBL_CREATED_ID' => 'Létrehozói azonosító',
  'LBL_DESCRIPTION' => 'Leírás',
  'LBL_DELETED' => 'Törölve',
  'LBL_NAME' => 'Név',
  'LBL_SAVING' => 'Mentés...',
  'LBL_SAVED' => 'Mentve',
  'LBL_CREATED_USER' => 'Felhasználó által létrehozva',
  'LBL_MODIFIED_USER' => 'Felhasználó által módosítva',
  'LBL_LIST_FORM_TITLE' => 'Sugar-hírcsatorna lista',
  'LBL_MODULE_NAME' => 'Sugar-hírcsatorna',
  'LBL_MODULE_TITLE' => 'Sugar-hírcsatorna',
  'LBL_DASHLET_DISABLED' => 'Figyelem: a Sugar-hírcsatorna rendszer tiltva van, új bejegyzés nem olvasható, amíg nem aktív.',
  'LBL_ADMIN_SETTINGS' => 'Sugar-hírcsatorna beállítások',
  'LBL_RECORDS_DELETED' => 'Minden korábbi Sugar-hírcsatorna bejegyzés eltávolításra került. Ha a hírcsatorna engedélyezve van, az új bejegyzések automatikusan generálódnak.',
  'LBL_CONFIRM_DELETE_RECORDS' => 'Biztosan törölni akarja a Sugar-hírcsatorna bejegyzéseket?',
  'LBL_FLUSH_RECORDS' => 'Hírcsatorna bejegyzések törlése',
  'LBL_ENABLE_FEED' => 'Sugar-hírcsatorna engedélyezése',
  'LBL_ENABLE_MODULE_LIST' => 'Betöltés aktiválása a(z)',
  'LBL_HOMEPAGE_TITLE' => 'Sugar-hírcsatornáim',
  'LNK_NEW_RECORD' => 'Sugar-hírcsatorna létrehozása',
  'LNK_LIST' => 'Sugar-hírcsatorna',
  'LBL_SEARCH_FORM_TITLE' => 'Sugar-hírcsatorna keresése',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Előzmények megtekintése',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Tevékenységek',
  'LBL_SUGAR_FEED_SUBPANEL_TITLE' => 'Sugar-hírcsatorna',
  'LBL_NEW_FORM_TITLE' => 'Új Sugar-hírcsatorna',
  'LBL_ALL' => 'Mind',
  'LBL_USER_FEED' => 'Felhasználói hírcsatorna',
  'LBL_ENABLE_USER_FEED' => 'Felhasználói hírcsatorna aktiválása',
  'LBL_TO' => 'Látható a csoport részéről',
  'LBL_IS' => 'van',
  'LBL_DONE' => 'Kész',
  'LBL_TITLE' => 'Cím',
  'LBL_ROWS' => 'Sorok',
  'LBL_MY_FAVORITES_ONLY' => 'Kedvenceim',
  'LBL_ENABLE_EXTERNAL_CONNECTORS' => 'Figyelmeztetés: a Facebook és Twitter hírek megtekintésének engedélyezéséhez menjen az Összetevők menüpontba, ahol beállíthatja ezt az opciót.',
  'LBL_CATEGORIES' => 'Modulok',
  'LBL_TIME_LAST_WEEK' => 'Múlt hét',
  'LBL_TIME_WEEKS' => 'Hetek',
  'LBL_TIME_DAYS' => 'Napok',
  'LBL_TIME_YESTERDAY' => 'Tegnap',
  'LBL_TIME_HOURS' => 'Óra',
  'LBL_TIME_HOUR' => 'Óra',
  'LBL_TIME_MINUTES' => 'Perc',
  'LBL_TIME_MINUTE' => 'Perc',
  'LBL_TIME_SECONDS' => 'Másodperc',
  'LBL_TIME_SECOND' => 'Másodperc',
  'LBL_TIME_AGO' => 'ezelőtt',
  'CREATED_CONTACT' => 'egy új {0} lett létrehozva',
  'CREATED_OPPORTUNITY' => 'egy új {0} lett létrehozva',
  'CREATED_CASE' => 'egy új {0} lett létrehozva',
  'CREATED_LEAD' => 'egy új {0} lett létrehozva',
  'FOR' => 'részére',
  'CLOSED_CASE' => 'lezárt {0}',
  'CONVERTED_LEAD' => 'konvertált {0}',
  'WON_OPPORTUNITY' => 'megnyert {0}',
  'WITH' => '(-val)',
  'LBL_LINK_TYPE_Image' => 'Kép',
  'LBL_LINK_TYPE_YouTube' => 'YouTube™',
  'LBL_SELECT' => 'Válassza ki',
  'LBL_POST' => 'Hozzászólás',
  'LBL_EXTERNAL_PREFIX' => 'Külső:',
  'LBL_EXTERNAL_WARNING' => 'A "külső" címkéjű elemhez egy külső fiókkal kell rendelkeznie.',
  'LBL_AUTHENTICATE' => 'Hitelesít',
  'LBL_AUTHENTICATION_PENDING' => 'Az Ön által kijelölt külső fiókok között van olyan, amely nem hitelesített. Kattintson a Mégse gombra az Opciók ablakba való visszatéréshez, ahol a fiókok hitelesíthetők, vagy kattintson az Ok gombra a hitelesítés nélküli folytatáshoz.',
  'LBL_ADVANCED_SEARCH' => 'Részletes keresés',
  'LBL_BASICSEARCH' => 'Egyszerű keresés',
  'LBL_SHOW_MORE_OPTIONS' => 'Több lehetőség mutatása',
  'LBL_HIDE_OPTIONS' => 'Lehetőségek elrejtése',
  'LBL_VIEW' => 'Megtekintés',
  'LBL_POST_TITLE' => 'Bejegyzés frissítése',
  'LBL_URL_LINK_TITLE' => 'Használt URL link',
  'LBL_TEAM_VISIBILITY_TITLE' => 'A bejegyzést látható csoportok',
);

