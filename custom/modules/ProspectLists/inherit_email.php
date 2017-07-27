<?php

class inheritEmail{
	function inheritCampaignEmail($bean,$event,$arguments){
		if(($bean->from_address_c == ''|| !isset($bean->from_address_c)) && ($bean->from_name_c == '' || !isset($bean->from_name_c))){
			$bean->load_relationship('atc_isscampaigns_prospectlists_1');

			if($bean->atc_isscampaigns_prospectlists_1->getBeans()){
				foreach($bean->atc_isscampaigns_prospectlists_1->getBeans() as $campaign){
					$bean->from_address_c = $campaign->from_address_c;
					$bean->from_name_c = $campaign->from_name_c;
				}

			}
		}
	}
}
?>
