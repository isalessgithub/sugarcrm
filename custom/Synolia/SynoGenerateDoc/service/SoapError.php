<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Public License Version
 * 1.1.3 ("License"); You may not use this file except in compliance with the
 * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL
 * Software distributed under the License is distributed on an "AS IS" basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied.  See the License
 * for the specific language governing rights and limitations under the
 * License.
 * All copies of the Covered Code must include on each user interface screen:
 *    (i) the "Powered by SugarCRM" logo and
 *    (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2006 SugarCRM, Inc.; All Rights Reserved.
 *
 * Portions created by SYNOLIA are Copyright (C) 2004-2010 SYNOLIA. You do not
 * have the right to remove SYNOLIA copyrights from the source code or user
 * interface.
 *
 * All Rights Reserved. For more information and to sublicense, resell,rent,
 * lease, redistribute, assign or otherwise transfer Your rights to the Software
 * contact SYNOLIA at contact@synolia.com
***********************************************************************************/
/**********************************************************************************
 * The Original Code is:    SYNOGENERATEDOC by SYNOLIA
 *                          www.synolia.com - sugar@synolia.com
 * Contributor(s):          ______________________________________.
 * Description :            ______________________________________.
 **********************************************************************************/

require_once('soap/SoapError.php');

require_once('custom/Synolia/SynoGenerateDoc/service/SoapErrorDefinitions.php');

class SoapError_SynoGenerateDoc extends SoapError {

  function SoapError_SynoGenerateDoc() {
        parent::SoapError();
    }

    function set_error($error_name){
    global $error_defs_SynoGenerateDoc;

        if(isset($error_defs_SynoGenerateDoc[$error_name])){
            $this->name = $error_defs_SynoGenerateDoc[$error_name]['name'];
            $this->number = $error_defs_SynoGenerateDoc[$error_name]['number'];
            $this->description = $error_defs_SynoGenerateDoc[$error_name]['description'];
        }else{
            parent::set_error($error_name);
        }
    }

}

