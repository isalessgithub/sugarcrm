<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

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

    /**
     * Genere a document for a bean
     * @param  string $synoGenerateDocId
     * @param  string $moduleName
     * @param  string $moduleId
     * @param  string $returnType
     * @return Depend of $returnType: email_id or the generated doc
     */
    public static function generateDoc($synoGenerateDocId, $moduleName, $moduleId, $returnType)
    {
        // Multiple part of a DOCX
        $templatesSubpart = array(
            '#word/header1.xml',
            '#word/header2.xml',
            '#word/header3.xml',
            '#word/footer1.xml',
            '#word/footer2.xml',
            '#word/footer3.xml',
        );
        $templatesBase = '#word/document.xml';

        $db = DBManagerFactory::getInstance();
        $synoGenerateDocId = $db->quote($synoGenerateDocId);

        // Loading template Document
        $document = BeanFactory::getBean('Documents');
        $document->disable_row_level_security = true;
        if ($document->retrieve($synoGenerateDocId) === null) {
            $GLOBALS['log']->fatal(__FILE__.' Undifend template document with ID : '.$synoGenerateDocId);
            SugarApplication::redirect('index.php');
        }

        // Loading Document Revision to retrieve extension of file
        $documentRevision = BeanFactory::getBean('DocumentRevisions');
        $documentRevision->disabled_row_level_security = true;
        if ($documentRevision->retrieve($document->document_revision_id) === null) {
            $GLOBALS['log']->fatal(__FILE__.' Undifend Revision with ID : '.$document->document_revision_id);
            SugarApplication::redirect('index.php');
        }
        // Transfert extension to TBS
        $GLOBALS['SYNO_GENERATE_DOC_EXT'] = $documentRevision->file_ext;

        // Loading template file
        $templateFile = UploadFile::realpath(UploadFile::get_upload_path($document->document_revision_id));
        if (!file_exists($templateFile)) {
            $GLOBALS['log']->fatal(__FILE__.' File dosen\'t exist : '.$templateFile);
            SugarApplication::redirect('index.php');
        }

        // Loading TBS and plugin
        require_once 'custom/Synolia/SynoGenerateDoc/tbs_us/tbs_class.php';
        require_once 'custom/Synolia/SynoGenerateDoc/tbs_us/plugins/tbs_plugin_opentbs.php';

        $TBS = new clsTinyButStrong();
        $TBS->NoErr = true;
        $TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN);

        // Load the template
        $TBS->LoadTemplate($templateFile, OPENTBS_ALREADY_UTF8);

        // Loading module
        $reqModule = BeanFactory::getBeanName($moduleName);
        $bean = BeanFactory::newBean($moduleName);
        if ($bean->retrieve($moduleId) === null) {
            $GLOBALS['log']->fatal(__FILE__.' Failed loading module '.$moduleName.' with id '.$moduleId);
            SugarApplication::redirect('index.php');
        }

        // Assign vars
        $lowerModuleName = strtolower($reqModule);
        $moduleFieldsValues = SynoGenerateDoc::getModuleFieldsValues($bean, true);
        $moduleFieldsList   = SynoGenerateDoc::getModuleFieldsList($moduleFieldsValues);

        // Merge Vars witch bloks in template
        $TBS->MergeField('module_name', $lowerModuleName);
        $TBS->MergeBlock('module', $moduleFieldsList);
        $TBS->MergeField($lowerModuleName, $moduleFieldsValues);
        // Merge Multiple part (for DOCX only
        // Merge header and footer
        if (strtolower($GLOBALS['SYNO_GENERATE_DOC_EXT']) === 'docx') {
            foreach ($templatesSubpart as $template_subpart) {
                $TBS->LoadTemplate($template_subpart, OPENTBS_ALREADY_UTF8);
                $TBS->MergeField('module_name', $lowerModuleName);
                $TBS->MergeBlock('module', $moduleFieldsList);
                $TBS->MergeField($lowerModuleName, $moduleFieldsValues);
            }
            $TBS->LoadTemplate($templatesBase, OPENTBS_ALREADY_UTF8);
        }

        if (!empty($document->syno_doc_relationships_c)) {
            $documentRelationships = unencodeMultienum($document->syno_doc_relationships_c);
            if (!empty($documentRelationships)) {
                foreach ($documentRelationships as $documentRelationship) {
                    if (!empty($documentRelationship)) {
                        $bean->load_relationship($documentRelationship);
                        $def = $bean->field_defs[$documentRelationship];

                        if (!empty($def["relationship"])) {
                            $relationName = $def["relationship"];
                        } else {
                            $relationName = $documentRelationship;
                        }

                        $linkToMerge[] = array(
                            'relationName' => $relationName,
                            'targetModule' => $bean->$documentRelationship->getRelatedModuleName(),
                            'linkName' => $documentRelationship,
                            'mergeBlockName' => $documentRelationship."_list_data",
                        );
                    }
                }
            }
        }

        if (isset($linkToMerge) && is_array($linkToMerge)) {
            foreach ($linkToMerge as $aLink) {
                if (isset($aLink['relationName']) && isset($aLink['targetModule']) && isset($aLink['linkName']) && isset($aLink['mergeBlockName'])) {
                    $bean->load_relationship($aLink['relationName']);
                    $beanList = $bean->$aLink['linkName']->getBeans();

                    $beanListData = array();
                    if (is_array($beanList)) {
                        foreach ($beanList as $target_bean) {
                            $beanListData[] = SynoGenerateDoc::getModuleFieldsValues($target_bean, false);
                            $moduleFieldsList[$aLink['linkName']] = SynoGenerateDoc::getModuleFieldsValues($target_bean, false);
                        }
                    }
                    $TBS->MergeBlock($aLink['mergeBlockName'], $beanListData);
                    // Merge Multiple part (for DOCX only
                    // Merge header and footer
                    if (strtolower($GLOBALS['SYNO_GENERATE_DOC_EXT']) === 'docx') {
                        foreach ($templatesSubpart as $template_subpart) {
                            $TBS->LoadTemplate($template_subpart, OPENTBS_ALREADY_UTF8);
                            $TBS->MergeBlock($aLink['mergeBlockName'], $beanListData);
                        }
                        $TBS->LoadTemplate($templatesBase, OPENTBS_ALREADY_UTF8);
                    }
                }
            }
        }

        if ($bean->module_name == 'Quotes') {
            $bean->load_relationship('product_bundles');
            $productBundleList = $bean->get_linked_beans('product_bundles', 'ProductBundle');
            usort($productBundleList, array('ProductBundle', 'compareProductBundlesByIndex'));
            $orderedBundleListData = array();

            foreach ($productBundleList as $orderedBundle) {
                $orderedBundleListDataItem = SynoGenerateDoc::getModuleFieldsValues($orderedBundle, false);
                $productBundleLineItems = $orderedBundle->get_product_bundle_line_items();
                foreach ($productBundleLineItems as $productBundleLineItem) {
                    $productBundleLineItem->field_defs['ext_price']['name'] = 'ext_price';
                    $productBundleLineItem->field_defs['ext_price']['vname'] = 'LBL_PDF_ITEM_EXT_PRICE';
                    $productBundleLineItem->field_defs['ext_price']['type'] = 'currency';
                    $productBundleLineItem->field_defs['ext_price']['len'] = '26,6';
                    $productBundleLineItem->field_defs['ext_price']['audited'] = '1';
                    $productBundleLineItem->field_defs['ext_price']['comment'] = '';
                    $productBundleLineItem->ext_price = 0;

                    if ($productBundleLineItem->object_name == 'Product') {
                        $productBundleLineItem->ext_price =  $productBundleLineItem->discount_usdollar * $productBundleLineItem->quantity;
                        $orderedBundleListDataItem['products'][] = SynoGenerateDoc::getModuleFieldsValues($productBundleLineItem, false);
                    } else {
                        $productBundleLineItemData = $productBundleLineItem->toArray();
                        $productBundleLineItemData['name'] = $productBundleLineItemData['description'];
                        $productBundleLineItemData['description'] = '';
                        $tmpProducts = BeanFactory::newBean("Products");
                        $tmpProducts->loadFromRow($productBundleLineItemData);

                        $orderedBundleListDataItem['products'][] = SynoGenerateDoc::getModuleFieldsValues($tmpProducts, false);
                    }
                }
                $orderedBundleListData[] = $orderedBundleListDataItem;
            }

            $TBS->MergeBlock('ordered_bundle_list_data', $orderedBundleListData);
            // Merge Multiple part (for DOCX only
            // Merge header and footer
            if (strtolower($GLOBALS['SYNO_GENERATE_DOC_EXT']) === 'docx') {
                foreach ($templatesSubpart as $template_subpart) {
                    $TBS->LoadTemplate($template_subpart, OPENTBS_ALREADY_UTF8);
                    $TBS->MergeBlock('ordered_bundle_list_data', $orderedBundleListData);
                }
                $TBS->LoadTemplate($templatesBase, OPENTBS_ALREADY_UTF8);
            }
        }

        // Define the name of the output file
        $tempFile = utf8_decode(html_entity_decode($bean->name, ENT_QUOTES, 'ISO-8859-1'));
        $tempFile = strtr($tempFile, "ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ", "AAAAAAaaaaaaOOOOOOooooooEEEEeeeeCcIIIIiiiiUUUUuuuuyNn");
        $tempFile = substr(preg_replace("#[^A-Z0-9\-_\.]#i", "_", $tempFile), 0, 100);
        $tempFile = str_replace(array('_-_', '__'), array('-', '_'), $tempFile).".".$GLOBALS['SYNO_GENERATE_DOC_EXT'];

        switch ($returnType) {
            case self::RETURN_FILE:
                $synoGenerateDocFilename = 'upload://'.$tempFile;
                sugar_touch($synoGenerateDocFilename);
                $TBS->Show(OPENTBS_FILE, $synoGenerateDocFilename);

                return $synoGenerateDocFilename;
                break;
            case self::RETURN_EMAIL:
                $synoGenerateDocFilename = 'upload://'.$tempFile;
                sugar_touch($synoGenerateDocFilename);

                $TBS->Show(OPENTBS_FILE, $synoGenerateDocFilename);

                $emailId = SynoGenerateDoc::generateEmail($tempFile, $bean);

                if ($emailId == "") {
                    unlink($synoGenerateDocFilename);
                } else {
                    SugarApplication::redirect("index.php?module=Emails&action=Compose&record=".$emailId."&replyForward=true&reply=");
                }
                break;
            case self::RETURN_FILE:
            default:
                // Output as a download file (some automatic fields are merged here)
                $TBS->Show(OPENTBS_DOWNLOAD, $tempFile);
                sugar_cleanup(true);
                exit;
                break;
        }
    }

    /**
     * Make array from bean
     *
     * @param  array   $bean      -- Instance of module
     * @param  boolean $recursive -- If TRUE parse related one-to-many fields
     * @return array   -- key    : field Name
     *                           value  : field Value
     */
    public static function getModuleFieldsValues($bean, $recursive = false)
    {
        global $app_list_strings;

        // On prépare un tableau contenant les champs du module pour faciliter la vie des utilisateurs
        $fieldsModule = array();
        foreach ($bean->toArray() as $name => $value) {
            if (isset($bean->field_defs[$name]['type']) &&
                ($bean->field_defs[$name]['type'] == 'enum' || $bean->field_defs[$name]['type'] == 'radio') &&
                isset($bean->field_defs[$name]['options']) &&
                isset($app_list_strings[$bean->field_defs[$name]['options']]) &&
                isset($app_list_strings[$bean->field_defs[$name]['options']][$value])
               ) {
                $fieldsModule[$name] = $app_list_strings[$bean->field_defs[$name]['options']][$value];
                $fieldsModule[$name] = str_replace(array('&#39;', '&#039;'), "'", $fieldsModule[$name]);
            } elseif (isset($bean->field_defs[$name]['type']) &&
                $bean->field_defs[$name]['type'] == 'multienum' &&
                isset($bean->field_defs[$name]['options']) &&
                isset($app_list_strings[$bean->field_defs[$name]['options']])
               ) {
                $multienums = unencodeMultienum($value);
                $multienumsValue = array();
                foreach ($multienums as $multienum) {
                    if (isset($app_list_strings[$bean->field_defs[$name]['options']][$multienum])) {
                        $multienumsValue[] = $app_list_strings[$bean->field_defs[$name]['options']][$multienum];
                    } else {
                        $multienumsValue[] = $multienum;
                    }
                }
                $fieldsModule[$name] = implode(', ', $multienumsValue);
                $fieldsModule[$name] = str_replace(array('&#39;', '&#039;'), "'", $fieldsModule[$name]);
            } elseif ($recursive &&
                isset($bean->field_defs[$name]['type']) &&
                $bean->field_defs[$name]['type'] == 'link' &&
                $bean->load_relationship($name) &&
                is_object($bean->$name) &&
                is_object($bean->$name->_relationship) &&
                (
                    (isset($bean->field_defs[$name]['link_type']) && $bean->field_defs[$name]['link_type'] == 'one') ||
                    (isset($bean->field_defs[$name]['link-type']) && $bean->field_defs[$name]['link-type'] == 'one') ||
                    ($bean->$name->_relationship->relationship_type == 'one-to-one') ||
                    ($bean->$name->_relationship->relationship_type == 'one-to-many' && !$bean->$name->_get_bean_position()) ||
                    ($bean->$name->_relationship->relationship_type == 'many-to-one' && $bean->$name->_get_bean_position()) ||
                    ($bean->$name->_relationship->relationship_type == 'many-to-many' && !isset($bean->field_defs[$name]['side']) && $bean->$name->_get_link_table_definition($bean->$name->_relationship_name, 'true_relationship_type') == 'one-to-many' && !$bean->$name->_get_bean_position()) ||
                    ($bean->$name->_relationship->relationship_type == 'many-to-many' && !isset($bean->field_defs[$name]['side']) && $bean->$name->_get_link_table_definition($bean->$name->_relationship_name, 'true_relationship_type') == 'many-to-one' && $bean->$name->_get_bean_position())
                ) &&
                count($bean->$name->get()) == 1
               ) {
                $relatedModule = $bean->$name->getRelatedModuleName();
                $relatedBean = BeanFactory::newBean($relatedModule);
                $relatedBeanId = $bean->$name->get();
                if ($relatedBean->retrieve($relatedBeanId[0]) === null) {
                    $GLOBALS['log']->fatal(__FILE__.' Failed loading module '.$relatedModule.' with id '.$relatedBeanId[0]);
                }

                $fieldsModule[$name] = SynoGenerateDoc::getModuleFieldsValues($relatedBean, false);
            } elseif (isset($bean->field_defs[$name]['type']) && $bean->field_defs[$name]['type'] == 'currency' &&
                !empty($bean->currency_id)) {
                global $locale;
                $formatNumberArray = array(
                      'currency_symbol' => true,
                      'currency_id' => $bean->currency_id,
                );
                $fieldsModule[$name] = format_number(
                    $bean->$name,
                    $locale->getPrecision(),
                    $locale->getPrecision(),
                    $formatNumberArray
                );
            } elseif (isset($bean->field_defs[$name]['type']) && ($bean->field_defs[$name]['type'] == 'decimal')) {
                global $locale;
                $formatNumberArray = array(
                    'convert' => false,
                );
                $fieldsModule[$name] = format_number(
                    $bean->$name,
                    $locale->getPrecision(),
                    $locale->getPrecision(),
                    $formatNumberArray
                );
            } elseif (isset($bean->field_defs[$name]['type']) && ($bean->field_defs[$name]['type'] == 'image')) {
                $fieldsModule[$name] = 'upload://'.$value;
            } elseif (is_string($value)) {
                $fieldsModule[$name] = htmlspecialchars_decode(stripslashes($value), ENT_QUOTES);
            }
        }

        return $fieldsModule;
    }

    /**
     * Make array to generate possible vars available for this module
     *
     * @param  array  $moduleFieldsValues -- Fields of module
     * @param  string $prefixe            -- Prefix of the fields
     * @return array
     */
    public static function getModuleFieldsList($moduleFieldsValues, $prefixe = '')
    {
        $moduleFieldsList = array();
        foreach ($moduleFieldsValues as $key => $val) {
            if (is_array($val)) {
                $moduleFieldsList = array_merge($moduleFieldsList, SynoGenerateDoc::getModuleFieldsList($val, $prefixe.$key.'.'));
            } else {
                $moduleFieldsList[] = array(
                    'field_name'  =>  $prefixe.$key,
                    'field_value' => $val,
                );
            }
        }

        return $moduleFieldsList;
    }

    /**
     * Generate an Email bean with the generated doc has attachment
     * @param  string    $filename
     * @param  SugarBean $focus
     * @return string    email generated ID
     */
    public static function generateEmail($filename, $focus)
    {
        global $mod_strings;
        global $app_strings;
        global $layouts;

        //First Create e-mail draft
        $email = BeanFactory::newBean("Emails");
        // set the id for relationships
        $email->id = create_guid();
        $email->new_with_id = true;

        //subject
        $email->name = $focus->name;
        //body
        $email->description_html = sprintf($app_strings['SYNO_GENERATE_DOC_EMAIL_DESCRIPTION'], $filename);
        $email->description = html_entity_decode($email->description_html, ENT_COMPAT, 'UTF-8');

        //parent type, id
        $email->parent_type = $focus->module_dir;
        $email->parent_id = $focus->id;
        //type is draft
        $email->type = "draft";
        $email->status = "draft";

        $email->to_addrs_ids = $focus->id;
        $email->to_addrs_names = $focus->name.";";

        if (isset($focus->emailAddress)) {
            $toAddrs = $focus->emailAddress->getPrimaryAddress($focus);
            $email->to_addrs_emails = $toAddrs.";";
            $email->to_addrs = $focus->name." <".$toAddrs.">";
        }

        if (isset($email->team_id)) {
            $email->team_id  = $GLOBALS['current_user']->getPrivateTeamID();
        }
        if (isset($email->team_set_id)) {
            $teamSet = BeanFactory::getBean('TeamSets');
            $teamIdsArray = array($GLOBALS['current_user']->getPrivateTeamID());
            $email->team_set_id = $teamSet->addTeams($teamIdsArray);
        }

        $email->assigned_user_id = $GLOBALS['current_user']->id;
        //Save the email object
        $email->date_start = $GLOBALS['timedate']->to_display_date_time(gmdate($GLOBALS['timedate']->get_db_date_time_format()));
        $email->save(false);
        $emailId = $email->id;

        //Handle Attachment
        $note = BeanFactory::newBean("Notes");
        $note->filename = $filename;
        if (isset($email->team_id)) {
            $note->team_id = $email->team_id;
        }
        if (isset($email->team_set_id)) {
            $note->team_set_id = $email->team_set_id;
        }

        $note->file_mime_type = $email->email2GetMime('upload://'.$filename);
        $note->name = $filename;

        //save the pdf attachment note
        $note->parent_id = $email->id;
        $note->parent_type = $email->module_dir;
        $note->save();
        $noteId = $note->id;

        $source = 'upload://'.$filename;
        $destination = 'upload://'.$noteId;

        if (!copy($source, $destination)) {
            $msg = str_replace('$destination', $destination, $mod_strings['LBL_RENAME_ERROR']);
            die($msg);
        }
        @unlink($source);

        return $emailId;
    }
}
