<?php
if(!defined('sugarEntry'))define('sugarEntry', true);
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

require_once('service/v2/registry.php');

class registry_SynoGenerateDoc extends registry {
    
    public function __construct($serviceClass) {
        parent::__construct($serviceClass);
    } // fn
            
    
    /**
     * This mehtod registers all the functions on the service class
     *
     */
    protected function registerFunction() {
        // START OF REGISTER FUNCTIONS

        $GLOBALS['log']->info('Begin: registry_2_1->registerFunction');
    
        parent::registerFunction();        
             
        $this->serviceClass->registerFunction(
            'get_syno_generate_doc',
            array('session'=>'xsd:string', 'document_id'=>'xsd:string', 'module_name'=>'xsd:string', 'module_id'=>'xsd:string'),
            array('return'=>'tns:new_return_syno_generate_doc'));
            
        // END OF REGISTER FUNCTIONS
    } // fn    

    /**
     * This method registers all the complex types
     *
     */
    protected function registerTypes() {
        
        // START OF REGISTER COMPLEX TYPES
        
        $GLOBALS['log']->info('Begin: registry->registerTypes');

        parent::registerTypes();

        $this->serviceClass->registerType(
            'new_syno_generate_doc',
            'complexType',
            'struct',
            'all',
            '',
            array(
                "module_name" => array('name'=>"module_name",'type'=>'xsd:string'),
                "module_id" => array('name'=>"module_id",'type'=>'xsd:string'),
                "filename" => array('name'=>"filename",'type'=>'xsd:string'),
                "file" => array('name'=>"file",'type'=>'xsd:string'),
            )
        );

        $this->serviceClass->registerType(
            'new_return_syno_generate_doc',
            'complexType',
            'struct',
            'all',
            '',
            array(
                "syno_generate_doc"=>array('name'=>'syno_generate_doc', 'type'=>'tns:new_syno_generate_doc'),
            )
        );        

        $GLOBALS['log']->info('End: registry->registerTypes');

        // END OF REGISTER COMPLEX TYPES
    } // fn
} // clazz