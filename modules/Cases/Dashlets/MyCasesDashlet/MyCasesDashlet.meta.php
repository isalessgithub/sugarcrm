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

// $Id: MyCasesDashlet.meta.php 29440 2007-11-09 20:04:52Z awu $

global $app_strings;

$dashletMeta['MyCasesDashlet'] = array('module'		=> 'Cases',
									   'title'       => translate('LBL_LIST_MY_CASES', 'Cases'), 
                                       'description' => 'A customizable view into Cases',
                                       'category'    => 'Module Views');
?>
