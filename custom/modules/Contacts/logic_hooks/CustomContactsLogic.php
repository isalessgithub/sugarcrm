<?php
/**
 * @author: Miloš Mirić aka eitrix
 */

class CustomContactsLogic {

  /**
   * Check if TargetList is related to campaign
   * If it is, then find out account from Contact we are adding to TargetList
   * Add Account to Campaign
   * @param $bean
   * @param $event
   * @param $arguments
   */
  function relate_account_to_campaign($bean,$event,$arguments){
    if($arguments['module'] == "Contacts" && $arguments['related_module'] == "ProspectLists"){
      if(!empty($bean->id)){
        //$arguments['id'] - Contact Id
        //$arguments['related_id'] - TargetList Id
        $target_list = BeanFactory::getBean("ProspectLists",$arguments['related_id']);
        if(!empty($target_list->atc_isscampaigns_prospectlists_1atc_isscampaigns_ida)){
          // we have related campaign, find account from Contact and add it to campaign
          $iss_campaign = BeanFactory::getBean("ATC_ISSCampaigns",$target_list->atc_isscampaigns_prospectlists_1atc_isscampaigns_ida);
          $iss_campaign->load_relationship("atc_isscampaigns_accounts");
          $iss_campaign->atc_isscampaigns_accounts->add($bean->account_id);
          //$iss_campaign->load_relationship("atc_isscampaigns_contacts");
          //$iss_campaign->atc_isscampaigns_contacts->add($bean->id);
        }
      }
    }
  }
  function delete_contact_left_company($bean,$event,$arguments) {
    if ($bean->call_outcome_c == "Left company")
    {
	$bean->deleted = 1;
    }
  }
  function update_contactcount($bean, $event, $arguments){
	if(isset($bean->account_id)){
	   
	   $account = BeanFactory::getBean('Accounts', $bean->account_id);
	   if($account->load_relationship('contacts')){
		$contacts = $account->contacts->getBeans();
		$account->contact_count_c = count($contacts);
		$account->save(false);

	   }
  	}
  }
}
