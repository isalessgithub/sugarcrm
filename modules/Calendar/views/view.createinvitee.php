<?php
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

require_once('include/MVC/View/views/view.ajax.php');
require_once('include/EditView/EditView2.php');


class CalendarViewCreateInvitee extends SugarView 
{
   
    public function preDisplay()
    {
        global $beanFiles, $beanList;

        $module = empty($_REQUEST['inviteeModule']) ? '' : $_REQUEST['inviteeModule'];

        if (!in_array($module, array('Leads', 'Contacts')) || empty($beanList[$module])) {
            $this->returnNoAccess($module);
        }

        require_once($beanFiles[$beanList[$module]]);
        $this->bean = new $beanList[$module]();
       
        if ($this->bean->ACLAccess('save')) {
            require_once('include/formbase.php');
            $this->bean = populateFromPost("", $this->bean);
            $this->bean->save();
        } else {
            $this->returnNoAccess($this->bean->object_name);
        }
    }
    
    public function display()
    {
        $sendbackArr = array(
            'module' => $this->bean->object_name,
            'fields' => array(),
        );
        foreach ($_REQUEST['fieldList'] as $field) {
            $sendbackArr['fields'][$field] = $this->bean->$field;
        }
            
        ob_clean();
        echo json_encode($sendbackArr);
    }

    /**
     * return no access answer and die
     * @param string $module
     */
    protected function returnNoAccess($module)
    {
        echo json_encode(array(
            'noAccess' => true,
            'module' => $module,
        ));
        sugar_cleanup(true);
    }
}

