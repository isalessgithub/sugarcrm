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

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('include/Dashlets/DashletGeneric.php');
require_once('modules/TE_TimeEntries/TE_TimeEntries.php');

class TE_TimeEntriesDashlet extends DashletGeneric { 
    function TE_TimeEntriesDashlet($id, $def = null) {
		global $current_user, $app_strings;
		require('modules/TE_TimeEntries/metadata/dashletviewdefs.php');

        parent::__construct($id, $def);

        if(empty($def['title'])) $this->title = translate('LBL_HOMEPAGE_TITLE', 'TE_TimeEntries');

        $this->searchFields = $dashletData['TE_TimeEntriesDashlet']['searchFields'];
        $this->columns = $dashletData['TE_TimeEntriesDashlet']['columns'];

        $this->seedBean = new TE_TimeEntries();        
    }
}