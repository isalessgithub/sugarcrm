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

require_once('include/SugarFields/Fields/Base/SugarFieldBase.php');

class SugarFieldImage extends SugarFieldBase {

    function getEditViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex, $searchView = false) {
    	$displayParams['bean_id']='id';
    	$this->setup($parentFieldArray, $vardef, $displayParams, $tabindex);
		return $this->fetch($this->findTemplate('EditView'));
    }

	function getDetailViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex, $searchView = false) {
		$displayParams['bean_id']='id';
		$this->setup($parentFieldArray, $vardef, $displayParams, $tabindex);
		return $this->fetch($this->findTemplate('DetailView'));
	}

    function getUserEditView($parentFieldArray, $vardef, $displayParams, $tabindex, $searchView = false) {
    	$displayParams['bean_id']='id';
    	$this->setup($parentFieldArray, $vardef, $displayParams, $tabindex, false);
		return $this->fetch($this->findTemplate('UserEditView'));
    }

    function getUserDetailView($parentFieldArray, $vardef, $displayParams, $tabindex, $searchView = false) {
    	$displayParams['bean_id']='id';
    	$this->setup($parentFieldArray, $vardef, $displayParams, $tabindex, false);
		return $this->fetch($this->findTemplate('UserDetailView'));
    }

	public function save(&$bean, $params, $field, $properties, $prefix = ''){
		require_once('include/upload_file.php');
		$upload_file = new UploadFile($field);

		//remove file
		if (isset($_REQUEST['remove_imagefile_' . $field]) && $_REQUEST['remove_imagefile_' . $field] == 1)
		{
			$upload_file->unlink_file($bean->$field);
			$bean->$field="";
		}

		//uploadfile
		if (isset($_FILES[$field]))
		{
			//confirm only image file type can be uploaded
			$imgType = array('image/gif', 'image/png', 'image/bmp', 'image/jpeg', 'image/jpg', 'image/pjpeg');
			if (in_array($_FILES[$field]["type"], $imgType))
			{
                //only move from temp directory if it is a confirmed uploaded image
                if($upload_file->confirm_upload() && verify_image_file($_FILES[$field]['tmp_name'])) {
                     $bean->$field = create_guid();
                    $upload_file->final_move($bean->$field);

                }
            }
		}

		//Check if we have the duplicate value set and use it if $bean->$field is empty
		if(empty($bean->$field) && !empty($_REQUEST[$field . '_duplicate'])) {
           $bean->$field = $_REQUEST[$field . '_duplicate'];
		}
	}


}
?>
