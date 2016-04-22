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

require_once 'service/core/SugarWebServiceImpl.php';
class SugarWebServiceImpl_SynoGenerateDoc extends SugarWebServiceImpl {

    /**
    * Retrieve a single Document merged with a record.
    *
    * @param String $session -- Session ID returned by a previous call to login.
    * @param String $document_id - The ID of the document which template is based on
    * @param String $module_name -- name of the module that the record is from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..
    * @param String $module_id - The ID of the bean in the specified module_name
    * @return Array 'syno_generate_doc' -- Array
    *                                           String 'module_id' -- module id
    *                                           String 'module_name' - module name to which this note is related
    *                                           String 'filename' -- The file name of the attachment
    *                                           Binary 'file' -- The binary contents of the file.
    * @exception 'SoapFault' -- The SOAP error, if any
    */
    function get_syno_generate_doc($session, $document_id, $module_name, $module_id) {
   
        $GLOBALS['log']->info('Begin: ' . __CLASS__ . '->' . __FUNCTION__);

        $error = new SoapError_SynoGenerateDoc();

        if (!self::$helperObject->checkSessionAndModuleAccess($session, 'invalid_session', $module_name, 'read', 'no_access', $error)) {
            $error->set_error('invalid_login');
            self::$helperObject->setFaultObject($error);
            $GLOBALS['log']->fatal('invalid_login: ' . __CLASS__ . '->' . __FUNCTION__);
            return FALSE;
        } // if

        // Trying to load template Document
        $document = new Document();
        $document->disable_row_level_security = true;
        if ($document->retrieve($document_id) === null) {
            $error->set_error('syno_invalid_parameters');
            self::$helperObject->setFaultObject($error);
            $GLOBALS['log']->fatal(__CLASS__ . '->' . __FUNCTION__ . ' Undifend template document with ID : ' . $document_id);
            return FALSE;
        }
        // Trying to load module
        $req_module = $GLOBALS['beanList'][$module_name];
        $inc_module_file = $GLOBALS['beanFiles'][$req_module];
        require_once $inc_module_file;
        $module_instance = new $req_module;
        if ($module_instance->retrieve($module_id) === null) {
            $error->set_error('syno_invalid_parameters');
            self::$helperObject->setFaultObject($error);
            $GLOBALS['log']->fatal(__CLASS__ . '->' . __FUNCTION__ . ' Failed loading module ' . $req_module . ' with id ' . $module_id);
            return FALSE;
        }
        
        require_once 'custom/Synolia/SynoGenerateDoc/SynoGenerateDoc.php';

        $syno_generate_filename = SynoGenerateDoc::generateDoc($document_id, $module_name, $module_id, SynoGenerateDoc::RETURN_FILE);
        $syno_generate_file = '';
        if(file_exists($syno_generate_filename)){
            $fp = sugar_fopen($syno_generate_filename, 'rb');
            $file = fread($fp, filesize($syno_generate_filename));
            fclose($fp);
            $syno_generate_file = base64_encode($file);
            @unlink($syno_generate_filename);
        }

        $GLOBALS['log']->info('end: ' . __CLASS__ . '->' . __FUNCTION__);

        return array('syno_generate_doc' => array(
            'module_name'   => $module_name, 
            'module_id'     => $module_id, 
            'filename'      => basename($syno_generate_filename), 
            'file'          => $syno_generate_file)
        );
    }
}
