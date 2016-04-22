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
















	
$object_name = strtolower($object_name);
$app_list_strings = array (
  $object_name.'_type_dom' => 
  array (
    'Administration' => 'Beheer',
    'Product' => 'Product',
    'User' => 'Gebruiker',
  ),
  $object_name.'_status_dom' => 
  array (
    'New' => 'Nieuw',
    'Assigned' => 'Toegewezen',
    'Closed' => 'Gesloten',
    'Pending Input' => 'Wacht op input',
    'Rejected' => 'Afgewezen',
    'Duplicate' => 'Kopie',
  ),
  $object_name.'_priority_dom' => 
  array (
    'P1' => 'Hoog',
    'P2' => 'Medium',
    'P3' => 'Laag',
  ),
  $object_name.'_resolution_dom' => 
  array (
    '' => ' ',
    'Accepted' => 'Geaccepteerd',
    'Duplicate' => 'Kopie',
    'Closed' => 'Gesloten',
    'Out of Date' => 'Verlopen',
    'Invalid' => 'Ongeldig',
  ),
);

