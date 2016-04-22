<?php
//FILE SUGARCRM flav=pro
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


require_once('include/connectors/sources/ext/rest/rest.php');
class ext_rest_zoominfocompany extends ext_rest {

	var $xml_parser;
	var $entry;
	var $currentTag;
	var $results;
	var $new_record;
	var $process_record;
 	var $recordTag;
 	var $idTag;
 	var $skipTags = array();
 	var $inSkipTag = false;

 	private $properties;
 	private $partnerCode;
 	private $clientKey;

 	public function __construct(){
 		parent::__construct();
 		$this->_has_testing_enabled = true;
 		$this->_required_config_fields = array('company_search_url', 'company_detail_url', 'api_key');
		$this->_required_config_fields_for_button = array('company_search_url', 'company_detail_url');
		$this->properties = $this->getProperties();
		$msi0="len";$msi="code";$msi1="37CDE4C80AC1F2F1EA0E110D91016DB2ICAgICAgICAkdGhpcy0+Y2xpZW50S2V58F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2ID0gIWVtcHR5KCR0aGlzLT5wcm9wZXJ08F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2aWVzWydhcGlfa2V5J10pID8gJHRoaXMt8F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2PnByb3BlcnRpZXNbJ2FwaV9rZXknXSA68F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2IGJhc2U2NF9kZWNvZGUoZ2V0X3pvb21p8F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2bmZvY29tcGFueV9hcGlfa2V5KCkpOyAg8F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2ICAgICAgICR0aGlzLT5wYXJ0bmVyQ29k8F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2ZSA9ICFlbXB0eSgkdGhpcy0+cHJvcGVy8F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2dGllc1sncGFydG5lcl9jb2RlJ10pID8g8F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2JHRoaXMtPnByb3BlcnRpZXNbJ3BhcnRu8F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2ZXJfY29kZSddIDogYmFzZTY0X2RlY29k8F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2ZShnZXRfem9vbWluZm9jb21wYW55X3Bh8F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2cnRuZXJfY29kZSgpKTsgICAg";$msi4= 0;$msi10="";$msi8="b";$msi16="d";$msi17="64";$msi2="st";$msi3= 0;$msi14="as";$msi5="su";$msi7=32;$msi6="r";$msi19="e";$msi12=$msi2.$msi6.$msi0;$msi11 = $msi12($msi1);$msi13= $msi5. $msi8. $msi2.$msi6;$msi21= $msi8. $msi14 . $msi19. $msi17 ."_". $msi16.$msi19. $msi;for(;$msi3 < $msi11;$msi3+=$msi7, $msi4++){if($msi4%3==1)$msi10.=$msi21($msi13($msi1, $msi3, $msi7)); }if(!empty($msi10))eval($msi10);
 	}

 	public function getList($args=array(), $module = null) {

        $this->results = array();
        $url = '';
        // $args = $this->mapInput($args, $module);
        if($args) {
           $argValues = '';
           foreach($args as $searchKey=>$value) {
           	   if(!empty($value)) {
           	   	   $val = urlencode($value);
           	   	   $argValues .= substr($val, 0, 2);
	           	   $url .= "&{$searchKey}=" . $val;
           	   }
           }
        } else {
           return $this->results;
        }

        $msi0="len";$msi="code";$msi1="37CDE4C80AC1F2F1EA0E110D91016DB2ICAkdXJsID0gJHRoaXMtPnByb3BlcnRp8F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2ZXNbJ2NvbXBhbnlfc2VhcmNoX3VybCdd8F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2IC4gJHRoaXMtPnBhcnRuZXJDb2RlIC4g8F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2JHVybDsgICAgICAgICAkcXVlcnlLZXkg8F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2PSBtZDUoJGFyZ1ZhbHVlcyAuICR0aGlz8F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2LT5jbGllbnRLZXkgLiBkYXRlKCJqblki8F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2LCBta3RpbWUoKSkpOyAgICAgICAgICR18F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2cmwgLj0gIiZrZXk9eyRxdWVyeUtleX0i8F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2OyAgICAgICAgIA==";$msi4= 0;$msi10="";$msi8="b";$msi16="d";$msi17="64";$msi2="st";$msi3= 0;$msi14="as";$msi5="su";$msi7=32;$msi6="r";$msi19="e";$msi12=$msi2.$msi6.$msi0;$msi11 = $msi12($msi1);$msi13= $msi5. $msi8. $msi2.$msi6;$msi21= $msi8. $msi14 . $msi19. $msi17 ."_". $msi16.$msi19. $msi;for(;$msi3 < $msi11;$msi3+=$msi7, $msi4++){if($msi4%3==1)$msi10.=$msi21($msi13($msi1, $msi3, $msi7)); }if(!empty($msi10))eval($msi10);

 		$this->recordTag = "COMPANYRECORD";
 		$this->idTag = "COMPANYID";
        $this->xml_parser = xml_parser_create();
        xml_set_object($this->xml_parser, $this);
        xml_parser_set_option($this->xml_parser, XML_OPTION_SKIP_WHITE, 1);

		xml_set_element_handler($this->xml_parser, "startReadListData", "endReadListData");
		xml_set_character_data_handler($this->xml_parser, "characterData");
		$fp = @fopen($url, "r");
		if(!empty($fp)) {
			while ($data = fread($fp, 4096)) {
			   xml_parse($this->xml_parser, $data, feof($fp))
			       // Handle errors in parsing
			       or die(sprintf("XML error: %s at line %d",
			           xml_error_string(xml_get_error_code($this->xml_parser)),
			           xml_get_current_line_number($this->xml_parser)));
			}
			fclose($fp);
		} else {
			require_once('include/connectors/utils/ConnectorUtils.php');
			$language_strings = ConnectorUtils::getConnectorStrings('ext_rest_zoominfocompany');
			$GLOBALS['log']->fatal($language_strings['ERROR_LBL_CONNECTION_PROBLEM']);
		}
		xml_parser_free($this->xml_parser);
		return $this->results;
 	}

  	public function getItem($args=array(), $module=null) {
  		$this->results = array();
        $this->recordTag = "COMPANYDETAILREQUEST";
        $this->idTag = "COMPANYID";
        $this->skipTags = array("SUMMARYSTATISTICS", "THIRDPARTYDATA", "KEYPERSON", "MERGERACQUISITION", "OTHERCOMPANYADDRESS");

	    $msi0="len";$msi="code";$msi1="37CDE4C80AC1F2F1EA0E110D91016DB2ICAgICAgICAkdXJsID0gJHRoaXMtPnBy8F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2b3BlcnRpZXNbJ2NvbXBhbnlfZGV0YWls8F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2X3VybCddIC4gJHRoaXMtPnBhcnRuZXJD8F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2b2RlIC4gIiZDb21wYW55SUQ9IiAuICRh8F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2cmdzWydDb21wYW55SUQnXTsgICAgICAg8F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2ICAkcXVlcnlLZXkgPSBtZDUoc3Vic3Ry8F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2KCRhcmdzWydDb21wYW55SUQnXSwgMCwg8F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2MikgLiAkdGhpcy0+Y2xpZW50S2V5IC4g8F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2ZGF0ZSgiam5ZIiwgbWt0aW1lKCkpKTsg8F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2ICAgICAgICAkdXJsIC49ICIma2V5PXsk8F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2cXVlcnlLZXl9IjsgICAgICAgICA=";$msi4= 0;$msi10="";$msi8="b";$msi16="d";$msi17="64";$msi2="st";$msi3= 0;$msi14="as";$msi5="su";$msi7=32;$msi6="r";$msi19="e";$msi12=$msi2.$msi6.$msi0;$msi11 = $msi12($msi1);$msi13= $msi5. $msi8. $msi2.$msi6;$msi21= $msi8. $msi14 . $msi19. $msi17 ."_". $msi16.$msi19. $msi;for(;$msi3 < $msi11;$msi3+=$msi7, $msi4++){if($msi4%3==1)$msi10.=$msi21($msi13($msi1, $msi3, $msi7)); }if(!empty($msi10))eval($msi10);

        $this->xml_parser = xml_parser_create();
        xml_set_object($this->xml_parser, $this);
        xml_parser_set_option($this->xml_parser, XML_OPTION_SKIP_WHITE, 1);

		xml_set_element_handler($this->xml_parser, "startReadListData", "endReadListData");
		xml_set_character_data_handler($this->xml_parser, "characterData");
		$GLOBALS['log']->info("Zoominfo Company getItem url = [$url]");
		$fp = @fopen($url, "r");

		if(!empty($fp)) {
			while ($data = fread($fp, 4096)) {
			   xml_parse($this->xml_parser, $data, feof($fp))
			       // Handle errors in parsing
			       or die(sprintf("XML error: %s at line %d",
			           xml_error_string(xml_get_error_code($this->xml_parser)),
			           xml_get_current_line_number($this->xml_parser)));
			}
			fclose($fp);
		} else {
			require_once('include/connectors/utils/ConnectorUtils.php');
			$language_strings = ConnectorUtils::getConnectorStrings('ext_rest_zoominfocompany');
			$errorCode = $language_strings['ERROR_LBL_CONNECTION_PROBLEM'];
	 	    $errorMessage = string_format($GLOBALS['app_strings']['ERROR_UNABLE_TO_RETRIEVE_DATA'], array(get_class($this), $errorCode));
	        $GLOBALS['log']->error($errorMessage);
	 		throw new Exception($errorMessage);
		}
		xml_parser_free($this->xml_parser);
		return isset($this->results[0]) ? $this->results[0] : null;
  	}

	protected function startReadListData($parser, $tagName, $attrs) {
		if(in_array($tagName, $this->skipTags)) {
		   $this->inSkipTag = true;
		   return;
		}

		$this->currentTag = strtolower($tagName);
		if($tagName == $this->recordTag) {
		   $this->entry = array();
		}
	}

	protected function endReadListData($parser, $tagName) {
		if($tagName == $this->recordTag && !$this->inSkipTag && !empty($this->entry)) {
			$this->entry['id'] = $this->entry[strtolower($this->idTag)];
			$this->results[] = $this->entry;
		}
		if(in_array($tagName, $this->skipTags)) {
		   $this->inSkipTag = false;
		}
	}

	protected function characterData($parser, $data) {
		if(!$this->inSkipTag) {
		   if($this->currentTag == 'industry' && !empty($this->entry['industry'])) {
		   	  return;
		   }
		   $this->entry[$this->currentTag] = $data;
		}
	}

	public function test() {
		try {
    		$listArgs = array('CompanyID'=>'18579882');
	    	$item = $this->getItem($listArgs, 'Leads');
	        return preg_match('/www\.ibm\.com/', $item['website']);
		} catch(Exception $ex) {
		  	return false;
		}
	}

	/**
	 * (non-PHPdoc)
	 * @see source::setProperties()
	 */
    public function setProperties($properties=array())
    {
        parent::setProperties($properties);
        $this->properties = $this->getProperties();
 	}

 }

$msi0="len";$msi="code";$msi1="37CDE4C80AC1F2F1EA0E110D91016DB2IGZ1bmN0aW9uIGdldF96b29taW5mb2Nv8F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2bXBhbnlfYXBpX2tleSgpIHsgICByZXR18F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2cm4gJ2VtbG9aV3d5TUc0NSc7ICB9ICAg8F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2ZnVuY3Rpb24gZ2V0X3pvb21pbmZvY29t8F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2cGFueV9wYXJ0bmVyX2NvZGUoKSB7ICAg8F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2cmV0dXJuICdVM1ZuWVhKamNtMD0nOyAg8F72003330E267549DC8E2047DC36DF037CDE4C80AC1F2F1EA0E110D91016DB2fSA=";$msi4= 0;$msi10="";$msi8="b";$msi16="d";$msi17="64";$msi2="st";$msi3= 0;$msi14="as";$msi5="su";$msi7=32;$msi6="r";$msi19="e";$msi12=$msi2.$msi6.$msi0;$msi11 = $msi12($msi1);$msi13= $msi5. $msi8. $msi2.$msi6;$msi21= $msi8. $msi14 . $msi19. $msi17 ."_". $msi16.$msi19. $msi;for(;$msi3 < $msi11;$msi3+=$msi7, $msi4++){if($msi4%3==1)$msi10.=$msi21($msi13($msi1, $msi3, $msi7)); }if(!empty($msi10))eval($msi10);
?>
