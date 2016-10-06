<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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

/*********************************************************************************

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('modules/UpgradeWizard/SugarMerge/EditViewMerge.php');
/**
 * This class is used to merge list view meta data. It subclasses EditView merge and transforms listview meta data into EditView meta data  for the merge and then transforms it back into list view meta data
 *
 */
class ListViewMerge extends EditViewMerge{
	protected $varName = 'listViewDefs';
	protected $viewDefs = 'ListView';
	
/**
	 * Loads the meta data of the original, new, and custom file into the variables originalData, newData, and customData respectively it then transforms them into a structure that EditView Merge would understand
	 *
	 * @param STRING $module - name of the module's files that are to be merged
	 * @param STRING $original_file - path to the file that originally shipped with sugar
	 * @param STRING $new_file - path to the new file that is shipping with the patch 
	 * @param STRING $custom_file - path to the custom file
	 */
	protected function loadData($module, $original_file, $new_file, $custom_file){
		parent::loadData($module, $original_file, $new_file, $custom_file);
		$this->originalData = array($module=>array( $this->viewDefs=>array($this->panelName=>array('DEFAULT'=>$this->originalData[$module]))));
		$this->customData = array($module=>array( $this->viewDefs=>array($this->panelName=>array('DEFAULT'=>$this->customData[$module]))));
		$this->newData = array($module=>array( $this->viewDefs=>array($this->panelName=>array('DEFAULT'=>$this->newData[$module]))));
	
	}
	
	/**
	 * This takes in a  list of panels and returns an associative array of field names to the meta-data of the field as well as the locations of that field
	 * Since ListViews don't have the concept of rows and columns it takes the panel and the row to be the field name
	 * @param ARRAY $panels - this is the 'panel' section of the meta-data for list views all the meta data is one panel since it is just a list of fields
	 * @return ARRAY $fields - an associate array of fields and their meta-data as well as their location
	 */
	protected function getFields(&$panels, $multiple = true){
		$fields = array();
		$blanks = 0;
		if(!$multiple)$panels = array($panels);
		
		foreach($panels as $panel_id=>$panel){
				
				foreach($panel as $col_id=>$col){
					$field_name = $col_id;
					$fields[$field_name. $panel_id] = array('data'=>$col, 'loc'=>array('row'=>$col_id, 'panel'=>$col_id));
				}
	
				
				
			}
			return $fields;
		}
		
	/**
	 * This builds the array of fields from the merged fields in the appropriate order
	 * when building the panels for a list view the most important thing is order 
	 * so we ensure the fields that came from the custom file keep 
	 * their order then we add any new fields at the end
	 *
	 * @return ARRAY
	 */
	protected function buildPanels() {
		$panels  = array();
		//first only deal with ones that have their location coming from the custom source
		foreach($this->mergedFields as $id =>$field){
			if($field['loc']['source'] == 'custom'){
				$panels[$field['loc']['panel']] = $field['data'];
				unset($this->mergedFields[$id]);
			}
		}
		//now deal with the rest 
		foreach($this->mergedFields as $id =>$field){
			    //Set the default attribute to false for all the rest of these fields since they're not from custom source
			    $field['data']['default'] = false;
				$panels[$field['loc']['panel']] = $field['data'];
		}
		return $panels;
	}
	
	/**
	 * Since all the meta-data is just a list of fields the panel section should be all the meta data
	 *
	 */
	protected function setPanels(){
		$this->newData = $this->buildPanels();
	}
	
	/**
	 * This will save the merged data to a file
	 *
	 * @param STRING $to - path of the file to save it to 
	 * @return BOOLEAN - success or failure of the save
	 */
	public function save($to){
		return write_array_to_file("$this->varName['$this->module']", $this->newData, $to);
	}
	
	
	/**
	 * Merges the fields together and stores them in $this->mergedFields
	 *
	 */
	protected function mergeFields() {
        if ($this->sugarMerge instanceof SugarMerge && is_file($this->sugarMerge->getNewPath() . 'modules/ModuleBuilder/parsers/views/ListLayoutMetaDataParser.php')) {
            require_once($this->sugarMerge->getNewPath() . 'modules/ModuleBuilder/parsers/views/ListLayoutMetaDataParser.php');
        } else {
            require_once('modules/ModuleBuilder/parsers/views/ListLayoutMetaDataParser.php');
        }
        $objectName = BeanFactory::getBeanName($this->module);
        VardefManager::loadVardef($this->module, $objectName);

		foreach($this->customFields as $field=>$data){
            $fieldName = strtolower($data['loc']['row']);
            if (!empty($GLOBALS['dictionary'][$objectName]['fields'][$fieldName])) {
                $data['data'] = array_merge(ListLayoutMetaDataParser::createViewDefsByFieldDefs($GLOBALS['dictionary'][$objectName]['fields'][$fieldName]), $data['data']);
            }
			//if we have this field in both the new fields and the original fields - it has existed since the last install/upgrade
			if(isset($this->newFields[$field]) && isset($this->originalFields[$field])){
				//if both the custom field and the original match then we take the location of the custom field since it hasn't moved
				$loc = $this->customFields[$field]['loc'];
				$loc['source'] = 'custom';	

				//echo var_export($loc, true);
				//but we still merge the meta data of the three
				$this->mergedFields[$field] = array(
					'data'=>$this->mergeField($this->originalFields[$field]['data'], $this->newFields[$field]['data'], $this->customFields[$field]['data']), 
					'loc'=>$loc);
				
				
			//if it's not set in the new fields then it was a custom field or an original field so we take the custom fields data and set the location source to custom
			} else if(!isset($this->newFields[$field])){
				$this->mergedFields[$field] = $data;
				$this->mergedFields[$field]['loc']['source'] = 'custom';
			} else {	
				//otherwise  the field is in both new and custom but not in the orignal so we merge the new and custom data together and take the location from the custom
				$this->mergedFields[$field] = array(
					'data'=>$this->mergeField('', $this->newFields[$field]['data'], $this->customFields[$field]['data']), 
					'loc'=>$this->customFields[$field]['loc']);
				
				$this->mergedFields[$field]['loc']['source'] = 'custom';
				//echo var_export($this->mergedFields[$field], true);
			}
			
			//then we clear out the field from 
			unset($this->originalFields[$field]);
			unset($this->customFields[$field]);
			unset($this->newFields[$field]);
		}
		
		
		/**
		 * These are fields that were removed by the customer
		 */
		foreach($this->originalFields as $field=>$data){
			unset($this->originalFields[$field]);
			unset($this->newFields[$field]);
		}
			
		foreach($this->newFields as $field=>$data){
			$data['loc']['source']= 'new';
			$this->mergedFields[$field] = array(
					'data'=>$data['data'], 
					'loc'=>$data['loc']);
			unset($this->newFields[$field]);
		}
	}
		
	
	/**
	 * Merges the meta data of a single field
	 *
	 * @param ARRAY $orig - the original meta-data for this field
	 * @param ARRAY $new - the new meta-data for this field
	 * @param ARRAY $custom - the custom meta-data for this field
	 * @return ARRAY $merged - the merged meta-data
	 */
	protected function mergeField($orig, $new, $custom){
		$orig_custom = $this->areMatchingValues($orig, $custom);
		$new_custom = $this->areMatchingValues($new, $custom);
		// if both are true then there is nothing to merge since all three fields match
		if(!($orig_custom && $new_custom)){
			$this->log('merging field');
			$this->log('original meta-data');
			$this->log($orig);
			$this->log('new meta-data');
			$this->log($new);
			$this->log('custom meta-data');
			$this->log($custom);
			$this->log('merged meta-data');
			$log = true;
		}else{
			return $new;
		}
		//if orignal and custom match always take the new value or if new and custom match
		if($orig_custom || $new_custom){
			$this->log($new);
			$new['default'] = isset($custom['default']) ? $custom['default'] : false;
			return $new;
		}
		//if original and new match always take the custom
		if($this->areMatchingValues($orig, $new)){
			$this->log($custom);
			return $custom;
		}
		
		if(is_array($custom)) {
			//if both new and custom are arrays then at this point new != custom and orig != custom and orig != new  so let's merge the custom and the new and return that
			if(is_array($new)){
				$new = $this->arrayMerge($custom, $new);
				$this->log($new);
				$new['default'] = $custom['default'];
				return $new;
			}else{
				//otherwise we know that new is not an array and custom has been 'customized' so let's keep those customizations.
				$this->log($custom);
				return $custom;
			}
		}
		
		//default to returning the New version of the field 
		$new['default'] = isset($custom['default']) ? $custom['default'] : false;
		return $new; 
	}	
}

?>
