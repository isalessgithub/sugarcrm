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
/*********************************************************************************
 * $Id: Save.php 13782 2006-06-06 17:58:55Z majed $
 * Description:  Saves an Account record and then redirects the browser to the 
 * defined return URL.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
require_once('modules/Calls/CallFormBase.php');
$formBase = new CallFormBase();
if ($formBase->prepareRecurring()) {
    if ($limit = $formBase->checkRecurringLimitExceeded()) {
        echo str_replace('$limit', $limit, $GLOBALS['mod_strings']['LBL_RECURRING_LIMIT_ERROR']);
        sugar_cleanup(true);
    }
}
$formBase->handleSave('', true, false);
?>
