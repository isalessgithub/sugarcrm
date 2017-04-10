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
/*********************************************************************************
 * $Id$
 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
 
global $app_strings;

$dashletMeta['MS_Campaign_Results_MonthlyDashlet'] = array('module'		=> 'MS_Campaign_Results_Monthly',
										  'title'       => translate('LBL_HOMEPAGE_TITLE', 'MS_Campaign_Results_Monthly'), 
                                          'description' => 'A customizable view into MS_Campaign_Results_Monthly',
                                          'icon'        => 'icon_MS_Campaign_Results_Monthly_32.gif',
                                          'category'    => 'Module Views');