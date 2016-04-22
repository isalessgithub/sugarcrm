<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

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

/**
 * This file contains the class .
 * @package SynoGenerateDoc
 */
/**
 * The class used to.
 * @package SynoGenerateDoc
 * @author  SYNOLIA
 * @copyright   SYNOLIA
 */
class SynoGenerateDoc
{

    const RETURN_FILE = 'FILE';
    const RETURN_EMAIL = 'EMAIL';
    const RETURN_DOWNLOAD = 'DOWNLOAD';

    static function generateDoc($syno_generate_doc_id, $module_name, $module_id, $return_type)
    {
        global $mod_strings, $sugar_config, $app_strings, $app_list_strings, $theme, $current_user;
        
        // Multiple part of a DOCX
        $templates_subpart = array (
            '#word/header1.xml',
            '#word/header2.xml',
            '#word/header3.xml',
            '#word/footer1.xml',
            '#word/footer2.xml',
            '#word/footer3.xml',
        );
        $templates_base = '#word/document.xml';


        $db = DBManagerFactory::getInstance();
        $syno_generate_doc_id = $db->quote($syno_generate_doc_id);

        require_once 'modules/Documents/Document.php';
        require_once 'modules/DocumentRevisions/DocumentRevision.php';

        // Loading template Document
        $document = new Document();
        $document->disable_row_level_security = true;
        if ($document->retrieve($syno_generate_doc_id) === null) {
            $GLOBALS['log']->fatal(__FILE__ . ' Undifend template document with ID : ' . $syno_generate_doc_id);
            SugarApplication::redirect('index.php');
        }

        // Loading Document Revision to retrieve extension of file
        $documentRevision = new DocumentRevision();
        $documentRevision->disabled_row_level_security = TRUE;
        if ($documentRevision->retrieve($document->document_revision_id) === null) {
            $GLOBALS['log']->fatal(__FILE__ . ' Undifend Revision with ID : ' . $document->document_revision_id);
            SugarApplication::redirect('index.php');
        }
        // Transfert extension to TBS
        $GLOBALS['SYNO_GENERATE_DOC_EXT'] = $documentRevision->file_ext;

        // Loading template file
        $template_file = UploadFile::realpath(UploadFile::get_upload_path($document->document_revision_id));
        if (!file_exists($template_file)) {
            $GLOBALS['log']->fatal(__FILE__ . ' File dosen\'t exist : ' . $template_file);
            SugarApplication::redirect('index.php');
        }

        // Loading TBS and plugin
        require_once 'custom/Synolia/SynoGenerateDoc/tbs_us/tbs_class_php5.php';
        require_once 'custom/Synolia/SynoGenerateDoc/tbs_us/plugins/tbs_plugin_opentbs.php';

        $TBS = new clsTinyButStrong;
        $TBS->NoErr = TRUE;
        $TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN);

        // Load the template
        $TBS->LoadTemplate($template_file, OPENTBS_ALREADY_UTF8);

        // Loading module
        $req_module = $GLOBALS['beanList'][$module_name];
        $inc_module_file = $GLOBALS['beanFiles'][$req_module];
        require_once $inc_module_file;
        $module_instance = new $req_module;
        if ($module_instance->retrieve($module_id) === null) {
            $GLOBALS['log']->fatal(__FILE__ . ' Failed loading module ' . $req_module . ' with id ' . $module_id);
            SugarApplication::redirect('index.php');
        }

        // Assign vars
        $lower_module_name = strtolower($req_module);
        $module_fields_values = SynoGenerateDoc::get_module_fields_values($module_instance, TRUE);
        $module_fields_list   = SynoGenerateDoc::get_module_fields_list($module_fields_values);

        // Merge Vars witch bloks in template
        $TBS->MergeField('module_name', $lower_module_name);
        $TBS->MergeBlock('module', $module_fields_list);
        $TBS->MergeField($lower_module_name, $module_fields_values);
        // Merge Multiple part (for DOCX only
        // Merge header and footer
        if (strtolower($GLOBALS['SYNO_GENERATE_DOC_EXT']) === 'docx') {
            foreach ($templates_subpart as $template_subpart) {
                $TBS->LoadTemplate($template_subpart, OPENTBS_ALREADY_UTF8);
                $TBS->MergeField('module_name', $lower_module_name);
                $TBS->MergeBlock('module', $module_fields_list);
                $TBS->MergeField($lower_module_name, $module_fields_values);
            }        
            $TBS->LoadTemplate($templates_base, OPENTBS_ALREADY_UTF8);
        }

        
        if (!empty($document->syno_doc_relationships_c)){

            $document_relationships = unencodeMultienum($document->syno_doc_relationships_c) ;
            //$module_instance;
            if( !empty($document_relationships)){

                foreach ($document_relationships as $document_relationship) {
                    if (!empty($document_relationship)){
                            
                        $module_instance->load_relationship($document_relationship) ;
                        $def = $module_instance->field_defs[$document_relationship];
                        
                        if ( !empty($def["relationship"])){
                            $relation_name = $def["relationship"];
                        }else{
                            $relation_name = $document_relationship;
                        }

                        $link_to_merge[] = array(
                                                'relation_name' => $relation_name,
                                                'target_module' => $module_instance->$document_relationship->getRelatedModuleName(),
                                                'link_name' => $document_relationship,
                                                'merge_block_name' => $document_relationship."_list_data"
                                            );                                     
                    }
                }
            }
            
        }

        if(isset($link_to_merge) && is_array($link_to_merge)) {
            foreach ($link_to_merge as $a_link) {
                if(isset($a_link['relation_name']) && isset($a_link['target_module']) && isset($a_link['link_name']) && isset($a_link['merge_block_name'])) {
                   $module_instance->load_relationship($a_link['relation_name']);
                   $bean_list = $module_instance->$a_link['link_name']->getBeans();

                    $bean_list_data = array();
                    if(is_array($bean_list)){
                      foreach ($bean_list as $target_bean) {
                            $bean_list_data[] = SynoGenerateDoc::get_module_fields_values($target_bean, FALSE);
                            $module_fields_list[$a_link['link_name']] = SynoGenerateDoc::get_module_fields_values($target_bean, FALSE);
                      }
                    }
                    $TBS->MergeBlock($a_link['merge_block_name'], $bean_list_data);
                    // Merge Multiple part (for DOCX only
                    // Merge header and footer
                    if (strtolower($GLOBALS['SYNO_GENERATE_DOC_EXT']) === 'docx') {
                        foreach ($templates_subpart as $template_subpart) {
                            $TBS->LoadTemplate($template_subpart, OPENTBS_ALREADY_UTF8);
                            $TBS->MergeBlock($a_link['merge_block_name'], $bean_list_data);
                        }
                        $TBS->LoadTemplate($templates_base, OPENTBS_ALREADY_UTF8);
                    }
                }
            }
        }



        if ($req_module == 'Quote') {

            $module_instance->load_relationship('product_bundles');
            $product_bundle_list = $module_instance->get_linked_beans('product_bundles','ProductBundle');
            if (is_array ($product_bundle_list)) {
          
              $ordered_bundle_list = array ();
              for ($cnt = 0; $cnt < count($product_bundle_list); $cnt++) {
                $index = $product_bundle_list[$cnt]->get_index($module_instance->id);
                $ordered_bundle_list[(int)$index[0]['bundle_index']] = $product_bundle_list[$cnt];
              } //for
              ksort($ordered_bundle_list);
            } //if

            $ordered_bundle_list_data = array ();

            foreach ($ordered_bundle_list as $ordered_bundle) {
                $ordered_bundle_list_data_item = SynoGenerateDoc::get_module_fields_values($ordered_bundle, FALSE);
                $product_bundle_line_items = $ordered_bundle->get_product_bundle_line_items();
                foreach ($product_bundle_line_items as $product_bundle_line_item) {
                
                    $product_bundle_line_item->field_defs['ext_price']['name'] = 'ext_price';
                    $product_bundle_line_item->field_defs['ext_price']['vname'] = 'LBL_PDF_ITEM_EXT_PRICE';
                    $product_bundle_line_item->field_defs['ext_price']['type'] = 'currency';
                    $product_bundle_line_item->field_defs['ext_price']['len'] = '26,6';
                    $product_bundle_line_item->field_defs['ext_price']['audited'] = '1';
                    $product_bundle_line_item->field_defs['ext_price']['comment'] = '';
                    $product_bundle_line_item->ext_price = 0;

                   if ($product_bundle_line_item->object_name == 'Product') {
                       $product_bundle_line_item->ext_price =  $product_bundle_line_item->discount_usdollar * $product_bundle_line_item->quantity;
                       $ordered_bundle_list_data_item['products'][] = SynoGenerateDoc::get_module_fields_values($product_bundle_line_item, FALSE);
                   } else {
                       $product_bundle_line_item_data = $product_bundle_line_item->toArray();
                       $product_bundle_line_item_data['name'] = $product_bundle_line_item_data['description'];
                       $product_bundle_line_item_data['description'] = '';
                       $tmp_products = new Product();
                       $tmp_products->loadFromRow($product_bundle_line_item_data);

                       $ordered_bundle_list_data_item['products'][] = SynoGenerateDoc::get_module_fields_values($tmp_products, FALSE);
                   }
                }
                $ordered_bundle_list_data[] = $ordered_bundle_list_data_item;
            }



            $TBS->MergeBlock('ordered_bundle_list_data', $ordered_bundle_list_data);
            // Merge Multiple part (for DOCX only
            // Merge header and footer
            if (strtolower($GLOBALS['SYNO_GENERATE_DOC_EXT']) === 'docx') {
                foreach ($templates_subpart as $template_subpart) {
                    $TBS->LoadTemplate($template_subpart, OPENTBS_ALREADY_UTF8);
                    $TBS->MergeBlock('ordered_bundle_list_data', $ordered_bundle_list_data);
                }
                $TBS->LoadTemplate($templates_base, OPENTBS_ALREADY_UTF8);
            }
        }

        // Define the name of the output file
        //unchanged changed source file.
	//$temp_file = utf8_decode(html_entity_decode($module_instance->appointment_summary_c, ENT_QUOTES, 'ISO-8859-1'));
        $temp_file = utf8_decode(html_entity_decode($module_instance->name, ENT_QUOTES, 'ISO-8859-1'));
        $temp_file = strtr($temp_file,"ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ","AAAAAAaaaaaaOOOOOOooooooEEEEeeeeCcIIIIiiiiUUUUuuuuyNn");
        $temp_file = substr(preg_replace("#[^A-Z0-9\-_\.]#i", "_", $temp_file), 0 , 100);
        $temp_file = str_replace(array ('_-_', '__'), array ('-', '_'), $temp_file) . "." . $GLOBALS['SYNO_GENERATE_DOC_EXT'];

        switch ($return_type) {
            case self::RETURN_FILE :
                $syno_generate_doc_filename = $GLOBALS['sugar_config']['upload_dir'].$temp_file;
                sugar_touch($syno_generate_doc_filename);
                $TBS->Show(OPENTBS_FILE, $syno_generate_doc_filename);
                return $syno_generate_doc_filename;
                break;
            case self::RETURN_EMAIL :
                $syno_generate_doc_filename = $GLOBALS['sugar_config']['upload_dir'].$temp_file;
                sugar_touch($syno_generate_doc_filename);
                
                $TBS->Show(OPENTBS_FILE, $syno_generate_doc_filename);
                
                $j_quickComposeOptions = SynoGenerateDoc::generate_email($temp_file, $module_instance);

                if ($j_quickComposeOptions=="") {
                    unlink($syno_generate_doc_filename);
                } else {
                  echo $j_quickComposeOptions;die;
                }
                break;
            case self::RETURN_FILE :
            default :
                // Output as a download file (some automatic fields are merged here)
                $TBS->Show(OPENTBS_DOWNLOAD, $temp_file);
                sugar_cleanup(true);
                exit;
                break;
        }
    }

    /**
     * Make array from bean
     *
     * @param array   $module_instance  -- Instance of module
     * @param boolean $recursive        -- If TRUE parse related one-to-many fields
     * @return array                    -- key    : field Name
     *                                     value  : field Value
     */
    static function get_module_fields_values($module_instance, $recursive = FALSE) {
        global $mod_strings, $sugar_config, $app_strings, $app_list_strings, $theme, $current_user;

        // On prépare un tableau contenant les champs du module pour faciliter la vie des utilisateurs
        $fields_module = array ();
        foreach ($module_instance->toArray() as $name => $value) {
              
            if (isset($module_instance->field_defs[$name]['type']) && 
                ($module_instance->field_defs[$name]['type'] == 'enum' || $module_instance->field_defs[$name]['type'] == 'radio' ) &&
                isset($module_instance->field_defs[$name]['options']) && 
                isset($app_list_strings[$module_instance->field_defs[$name]['options']]) && 
                isset($app_list_strings[$module_instance->field_defs[$name]['options']][$value]) 
               ) {
                $fields_module[$name] = $app_list_strings[$module_instance->field_defs[$name]['options']][$value];
                $fields_module[$name] = str_replace(array ('&#39;', '&#039;'), "'", $fields_module[$name]);
            } elseif (isset($module_instance->field_defs[$name]['type']) && 
                $module_instance->field_defs[$name]['type'] == 'multienum' &&
                isset($module_instance->field_defs[$name]['options']) && 
                isset($app_list_strings[$module_instance->field_defs[$name]['options']]) 
               ) {
                $multienums = unencodeMultienum($value);
                $multienums_value = array ();
                foreach ($multienums as $multienum) {
                  if (isset($app_list_strings[$module_instance->field_defs[$name]['options']][$multienum])) {
                      $multienums_value[] = $app_list_strings[$module_instance->field_defs[$name]['options']][$multienum];
                  } else {
                      $multienums_value[] = $multienum;
                  }
                }
                $fields_module[$name] = implode(', ', $multienums_value);
                $fields_module[$name] = str_replace(array ('&#39;', '&#039;'), "'", $fields_module[$name]);
            } elseif ($recursive &&
                isset($module_instance->field_defs[$name]['type']) && 
                $module_instance->field_defs[$name]['type'] == 'link' &&
                $module_instance->load_relationship($name) && 
                (
                    (isset($module_instance->field_defs[$name]['link_type']) && $module_instance->field_defs[$name]['link_type'] == 'one') ||
                    ($module_instance->$name->_relationship->relationship_type == 'one-to-one') || 
                    ($module_instance->$name->_relationship->relationship_type == 'one-to-many' && !$module_instance->$name->_get_bean_position()) || 
                    ($module_instance->$name->_relationship->relationship_type == 'many-to-one' && $module_instance->$name->_get_bean_position()) ||
                    ($module_instance->$name->_relationship->relationship_type == 'many-to-many' && !isset($module_instance->field_defs[$name]['side']) && $module_instance->$name->_get_link_table_definition($module_instance->$name->_relationship_name, 'true_relationship_type') == 'one-to-many' && !$module_instance->$name->_get_bean_position()) ||
                    ($module_instance->$name->_relationship->relationship_type == 'many-to-many' && !isset($module_instance->field_defs[$name]['side']) && $module_instance->$name->_get_link_table_definition($module_instance->$name->_relationship_name, 'true_relationship_type') == 'many-to-one' && $module_instance->$name->_get_bean_position())
                ) && 
                count($module_instance->$name->get()) == 1
               ) {
                $related_module = $module_instance->$name->getRelatedModuleName();
                $related_module = $GLOBALS['beanList'][$related_module];
                $related_file   = $GLOBALS['beanFiles'][$related_module];
                require_once $related_file;
                $related_instance = new $related_module;
                $related_instance_id = $module_instance->$name->get();
                if ($related_instance->retrieve($related_instance_id[0]) === null) {
                    $GLOBALS['log']->fatal(__FILE__ . ' Failed loading module ' . $related_module . ' with id ' . $related_instance_id[0]);
                }

                $fields_module[$name] = SynoGenerateDoc::get_module_fields_values($related_instance, FALSE);
            } elseif (
                isset($module_instance->field_defs[$name]['type']) && 
                $module_instance->field_defs[$name]['type'] == 'currency' &&
                !empty($module_instance->currency_id)
               ) {
                  global $locale;
                  $format_number_array = array (
                      'currency_symbol' => true,
                      'currency_id' => $module_instance->currency_id,
                  );
                  $fields_module[$name] = format_number($module_instance->$name, $locale->getPrecision(), $locale->getPrecision(), $format_number_array);
            } elseif (
                isset($module_instance->field_defs[$name]['type']) && 
                ($module_instance->field_defs[$name]['type'] == 'decimal')
               ) {
                  global $locale;
                  $format_number_array = array (
                      'convert' => false,
                  );
                  $fields_module[$name] = format_number($module_instance->$name, $locale->getPrecision(), $locale->getPrecision(), $format_number_array);
            } elseif (
                isset($module_instance->field_defs[$name]['type']) && 
                ($module_instance->field_defs[$name]['type'] == 'image')
               ) {
                  $fields_module[$name] = $GLOBALS['sugar_config']['upload_dir']."/".$value;
            } elseif (is_string($value)) {
                $fields_module[$name] = htmlspecialchars_decode(stripslashes($value), ENT_QUOTES);
            }
        }
        return $fields_module;
    }

    /**
     * Make array to generate possible vars available for this module
     *
     * @param array   $module_fields_values  -- Fields of module
     * @param string  $prefixe               -- Prefix of the fields
     * @return array
     */
    static function get_module_fields_list($module_fields_values, $prefixe = '') {
        $module_fields_list = array ();
        foreach ($module_fields_values as $key => $val) {
            if (is_array ($val)) {
               $module_fields_list = array_merge($module_fields_list, SynoGenerateDoc::get_module_fields_list($val,  $prefixe . $key . '.'));
            } else {
              $module_fields_list[] = array (
                  'field_name'  =>  $prefixe . $key,
                  'field_value' => $val,
              );
            }
        }
        return $module_fields_list;
    }

    static function generate_email($file_name, $focus) {
        global $log;
        global $mod_strings;
        global $app_strings;
        global $layouts;
        global $current_user;

        require_once('modules/Emails/Email.php');
        require_once('modules/Notes/Note.php');

        //First Create e-mail draft
        $email_object = new Email();
        // set the id for relationships
        $email_object->id = create_guid();
        $email_object->new_with_id = true;

        //subject
        $email_object->name = $focus->name;
        //body
        $email_object->description_html = sprintf($app_strings['SYNO_GENERATE_DOC_EMAIL_DESCRIPTION'], $file_name);
        $email_object->description = html_entity_decode($email_object->description_html,ENT_COMPAT,'UTF-8');

        //parent type, id
        $email_object->parent_type = $focus->module_dir;
        $email_object->parent_id = $focus->id;
        //type is draft
        $email_object->type = "draft";
        $email_object->status = "draft";

        $email_object->to_addrs_ids = $focus->id;
        $email_object->to_addrs_names = $focus->name.";";

        if (isset($focus->emailAddress)) {
            $to_addrs = $focus->emailAddress->getPrimaryAddress($focus);
            $email_object->to_addrs_emails = $to_addrs.";";
            $email_object->to_addrs = $focus->name." <".$to_addrs.">";
        }

        if (isset($email_object->team_id)) {
            $email_object->team_id  = $current_user->getPrivateTeamID();
        }
        if (isset($email_object->team_set_id)) {
            $teamSet = new TeamSet();
            $teamIdsArray = array ($current_user->getPrivateTeamID());
            $email_object->team_set_id = $teamSet->addTeams($teamIdsArray);
        }
        
        $email_object->assigned_user_id = $current_user->id;
        //Save the email object
        global $timedate;
        $email_object->date_start = $timedate->to_display_date_time(gmdate($GLOBALS['timedate']->get_db_date_time_format()));
        $email_object->save(FALSE);
        $email_id = $email_object->id;

        //Handle Attachment
        $note = new Note();
        $note->filename = $file_name;
        if (isset($email_object->team_id)) {
            $note->team_id = $email_object->team_id;
        }
        if (isset($email_object->team_set_id)) {
            $note->team_set_id = $email_object->team_set_id;
        }

        $note->file_mime_type = $email_object->email2GetMime($GLOBALS['sugar_config']['upload_dir'].$file_name);
        $note->name = $file_name;

        //save the pdf attachment note
        $note->parent_id = $email_object->id;
        $note->parent_type = $email_object->module_dir;
        $note->save();
        $note_id = $note->id;

        $source = $GLOBALS['sugar_config']['upload_dir'].$file_name;
        $destination = $GLOBALS['sugar_config']['upload_dir'].$note_id;

        if (!copy($source, $destination)) {
            $msg = str_replace('$destination', $destination, $mod_strings['LBL_RENAME_ERROR']);
            die($msg);
        }
        @unlink($source);

        $emailLinkUrl = "parent_id=" . $email_object->parent_id . "&parent_type=" . $email_object->parent_type;

        $composeData = explode("&",$emailLinkUrl);
        $a_composeData = array ();
        foreach ($composeData as $singleRequest) 
        {
          $tmp = explode("=",$singleRequest);
          $a_composeData[$tmp[0]] = urldecode($tmp[1]);
        }

        $composeData = $a_composeData;
        $fullLinkUrl = $emailLinkUrl;

        $namePlusEmail = $email_object->to_addrs;
        $namePlusEmail = from_html(str_replace("&nbsp;", " ", $namePlusEmail));

            if (isset($focus->full_name)) {
                $parentName = $focus->full_name;
            } else {
                $parentName = $focus->name;
            }
            $parentName = from_html($parentName);

        $attachments = array (
          array (
                    'id'            => $note->id,
                    'filename'    => $note->filename,
                ),      
        );

        $composePackage = array (
            'to_email_addrs'  => $namePlusEmail,
            'parent_type'        => $composeData['parent_type'],
            'parent_id'          => $composeData['parent_id'],
            'parent_name'     => $parentName,
            'subject'              => $email_object->name,
            'body'                  => $email_object->description_html,
            'attachments'        => $attachments,
            'email_id'            => $email_id,
        );
        //JSON object is passed into the function defined within the a href onclick event
        //which is delimeted by '.  Need to escape all single quotes, every other char is valid.
        foreach ($composePackage as $key => $singleCompose)
        {
           if (is_string($singleCompose)) 
               $composePackage[$key] = str_replace("'","&#039;",$singleCompose); 
        }
        
        $quickComposeOptions = array ('fullComposeUrl' => $fullLinkUrl,'composePackage' => $composePackage);
        
        $j_quickComposeOptions = json_encode($quickComposeOptions);
        
        return $j_quickComposeOptions;
    }
}

?>
