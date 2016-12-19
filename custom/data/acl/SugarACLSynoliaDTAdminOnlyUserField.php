<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (â€œMSAâ€), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2014 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

require_once 'data/SugarACLStrategy.php';

/**
 * This class is used to enforce ACLs on modules that are ReadOnly export for some users.
 */
class SugarACLSynoliaDTAdminOnlyUserField extends SugarACLStrategy
{
    /**
     * Only allow access to users in list
     * @param  string    $module
     * @param  string    $view
     * @param  array     $context
     * @return bool|void
     */
    public function checkAccess($module, $view, $context)
    {
        if ($view == 'team_security') {
            // Let the other modules decide
            return true;
        }

        $currentUsr = $this->getCurrentUser($context);

        if( !empty($context) && 
            !empty($context['field']) && 
            $context['field'] == 'synodt_roles_c' && 
            $module == 'Users' && 
            !empty($currentUsr) && 
            !$currentUsr->isAdmin()) {
            return false;
        }
        return true;
    }
}