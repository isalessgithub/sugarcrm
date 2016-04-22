<?php
    /*********************************************************************************
    * The contents of this file are subject to the Atcore Systems Sugar2Prod Subscription
    * Agreement ("License") which can be viewed at
    * http://www.atcoresystems.com/products/sugar-sugar2prod-eula.html
    * By installing or using this file, You have unconditionally agreed to the
    * terms and conditions of the License, and You may not use this file except in
    * compliance with the License.  Under the terms of the license, You shall not,
    * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
    * or otherwise transfer Your rights to the Software, and 2) use the Software
    * for timesharing or service bureau purposes such as hosting the Software for
    * commercial gain and/or for the benefit of a third party.  Use of the Software
    * may be subject to applicable fees and any use of the Software without first
    * paying applicable fees is strictly prohibited.  You do not have the right to
    * remove Atcore Systems copyrights from the source code or user interface.
    *
    * All copies of the Covered Code must include on the user interface screen:
    *  (i) the "Powered by Atcore Systems" logo and
    *  (ii) the Atcore Systems copyright notice
    * in the same form as they appear in the distribution.  See full license for
    * requirements.
    *
    * Your Warranty, Limitations of liability and Indemnity are expressly stated
    * in the License.  Please refer to the License for the specific language
    * governing these rights and limitations under the License.  Portions created
    * by Atcore Systems are Copyright (C) 2010 Atcore Systems; All Rights Reserved.
    ********************************************************************************/
global $current_user;

if (!is_admin($current_user)) sugar_die("Unauthorized access to administration.");

global $sugar_config;

require_once("modules/Configurator/Configurator.php");
$config = new Configurator;
$config->saveConfig();

//Save the values to the config file.

header("Location: index.php?action={$_POST['return_action']}&module={$_POST['return_module']}");

?>