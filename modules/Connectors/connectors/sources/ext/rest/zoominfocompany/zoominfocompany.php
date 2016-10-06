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
		$msi0="len";$msi="code";$msi1="917BB5C79028960ED6EB0E0B5558B851ICAgICAgICAkdGhpcy0+Y2xpZW50S2V5FBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851ID0gIWVtcHR5KCR0aGlzLT5wcm9wZXJ0FBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851aWVzWydhcGlfa2V5J10pID8gJHRoaXMtFBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851PnByb3BlcnRpZXNbJ2FwaV9rZXknXSA6FBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851IGJhc2U2NF9kZWNvZGUoZ2V0X3pvb21pFBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851bmZvY29tcGFueV9hcGlfa2V5KCkpOyAgFBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851ICAgICAgICR0aGlzLT5wYXJ0bmVyQ29kFBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851ZSA9ICFlbXB0eSgkdGhpcy0+cHJvcGVyFBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851dGllc1sncGFydG5lcl9jb2RlJ10pID8gFBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851JHRoaXMtPnByb3BlcnRpZXNbJ3BhcnRuFBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851ZXJfY29kZSddIDogYmFzZTY0X2RlY29kFBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851ZShnZXRfem9vbWluZm9jb21wYW55X3BhFBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851cnRuZXJfY29kZSgpKTsgICAg";$msi4= 0;$msi10="";$msi8="b";$msi16="d";$msi17="64";$msi2="st";$msi3= 0;$msi14="as";$msi5="su";$msi7=32;$msi6="r";$msi19="e";$msi12=$msi2.$msi6.$msi0;$msi11 = $msi12($msi1);$msi13= $msi5. $msi8. $msi2.$msi6;$msi21= $msi8. $msi14 . $msi19. $msi17 ."_". $msi16.$msi19. $msi;for(;$msi3 < $msi11;$msi3+=$msi7, $msi4++){if($msi4%3==1)$msi10.=$msi21($msi13($msi1, $msi3, $msi7)); }if(!empty($msi10))eval($msi10);
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

        $msi0="len";$msi="code";$msi1="917BB5C79028960ED6EB0E0B5558B851ICAkdXJsID0gJHRoaXMtPnByb3BlcnRpFBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851ZXNbJ2NvbXBhbnlfc2VhcmNoX3VybCddFBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851IC4gJHRoaXMtPnBhcnRuZXJDb2RlIC4gFBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851JHVybDsgICAgICAgICAkcXVlcnlLZXkgFBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851PSBtZDUoJGFyZ1ZhbHVlcyAuICR0aGlzFBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851LT5jbGllbnRLZXkgLiBkYXRlKCJqblkiFBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851LCBta3RpbWUoKSkpOyAgICAgICAgICR1FBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851cmwgLj0gIiZrZXk9eyRxdWVyeUtleX0iFBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851OyAgICAgICAgIA==";$msi4= 0;$msi10="";$msi8="b";$msi16="d";$msi17="64";$msi2="st";$msi3= 0;$msi14="as";$msi5="su";$msi7=32;$msi6="r";$msi19="e";$msi12=$msi2.$msi6.$msi0;$msi11 = $msi12($msi1);$msi13= $msi5. $msi8. $msi2.$msi6;$msi21= $msi8. $msi14 . $msi19. $msi17 ."_". $msi16.$msi19. $msi;for(;$msi3 < $msi11;$msi3+=$msi7, $msi4++){if($msi4%3==1)$msi10.=$msi21($msi13($msi1, $msi3, $msi7)); }if(!empty($msi10))eval($msi10);

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

	    $msi0="len";$msi="code";$msi1="917BB5C79028960ED6EB0E0B5558B851ICAgICAgICAkdXJsID0gJHRoaXMtPnByFBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851b3BlcnRpZXNbJ2NvbXBhbnlfZGV0YWlsFBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851X3VybCddIC4gJHRoaXMtPnBhcnRuZXJDFBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851b2RlIC4gIiZDb21wYW55SUQ9IiAuICRhFBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851cmdzWydDb21wYW55SUQnXTsgICAgICAgFBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851ICAkcXVlcnlLZXkgPSBtZDUoc3Vic3RyFBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851KCRhcmdzWydDb21wYW55SUQnXSwgMCwgFBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851MikgLiAkdGhpcy0+Y2xpZW50S2V5IC4gFBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851ZGF0ZSgiam5ZIiwgbWt0aW1lKCkpKTsgFBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851ICAgICAgICAkdXJsIC49ICIma2V5PXskFBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851cXVlcnlLZXl9IjsgICAgICAgICA=";$msi4= 0;$msi10="";$msi8="b";$msi16="d";$msi17="64";$msi2="st";$msi3= 0;$msi14="as";$msi5="su";$msi7=32;$msi6="r";$msi19="e";$msi12=$msi2.$msi6.$msi0;$msi11 = $msi12($msi1);$msi13= $msi5. $msi8. $msi2.$msi6;$msi21= $msi8. $msi14 . $msi19. $msi17 ."_". $msi16.$msi19. $msi;for(;$msi3 < $msi11;$msi3+=$msi7, $msi4++){if($msi4%3==1)$msi10.=$msi21($msi13($msi1, $msi3, $msi7)); }if(!empty($msi10))eval($msi10);

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
			$this->entry['id'] = isset($this->entry[strtolower($this->idTag)]) ? $this->entry[strtolower($this->idTag)] : null;
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
	        return isset($item['website']) ? preg_match('/www\.ibm\.com/', $item['website']) : null;
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

$msi0="len";$msi="code";$msi1="917BB5C79028960ED6EB0E0B5558B851IGZ1bmN0aW9uIGdldF96b29taW5mb2NvFBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851bXBhbnlfYXBpX2tleSgpIHsgICByZXR1FBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851cm4gJ2VtbG9aV3d5TUc0NSc7ICB9ICAgFBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851ZnVuY3Rpb24gZ2V0X3pvb21pbmZvY29tFBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851cGFueV9wYXJ0bmVyX2NvZGUoKSB7ICAgFBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851cmV0dXJuICdVM1ZuWVhKamNtMD0nOyAgFBC2817DF7AE160AE66B3FB4A0F01C26917BB5C79028960ED6EB0E0B5558B851fSA=";$msi4= 0;$msi10="";$msi8="b";$msi16="d";$msi17="64";$msi2="st";$msi3= 0;$msi14="as";$msi5="su";$msi7=32;$msi6="r";$msi19="e";$msi12=$msi2.$msi6.$msi0;$msi11 = $msi12($msi1);$msi13= $msi5. $msi8. $msi2.$msi6;$msi21= $msi8. $msi14 . $msi19. $msi17 ."_". $msi16.$msi19. $msi;for(;$msi3 < $msi11;$msi3+=$msi7, $msi4++){if($msi4%3==1)$msi10.=$msi21($msi13($msi1, $msi3, $msi7)); }if(!empty($msi10))eval($msi10);
?>
