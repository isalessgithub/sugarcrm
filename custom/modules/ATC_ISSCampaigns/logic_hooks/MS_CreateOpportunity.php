<?php
/**
 * @author Eontek DOO <office@eontek.co>
 * @copyright (c) Eontek DOO. All rights reserved.
 */

/**
 * Class MS_CreateOpportunity
 *
 * Handles creating related opportunity
 */
class  MS_CreateOpportunity
{
    /**
     * Created opportunity
     *
     * @param $campaign_bean
     * @param $event
     * @param $arguments
     */
    function createOpportunity($bean, $event, $arguments)
    {
	$campaign_bean = BeanFactory::retrieveBean("ATC_ISSCampaigns", $bean->id, array('disable_row_level_security' => true));

	$GLOBALS['log']->fatal($campaign_bean->name." ".$campaign_bean->id);
	$GLOBALS['log']->fatal("num related opps");
	$GLOBALS['log']->fatal(count($campaign_bean->get_linked_beans('atc_isscampaigns_opportunities_1', 'Opportunities')));

	$continue = 0;
	if($campaign_bean->load_relationship('atc_isscampaigns_opportunities_1')){
		foreach($campaign_bean->atc_isscampaigns_opportunities_1->getBeans() as $tl){
			$continue = 1;
		}
	}
	else{
		$continue = 0;
	}

       //if(count($campaign_bean->get_linked_beans('atc_isscampaigns_opportunities_1', 'Opportunities')) == 0){
	if($continue == 1){
	$GLOBALS['log']->fatal("Creating new opp");
	// load relationship between campaign and opportunities
        $campaign_bean->load_relationship('atc_isscampaigns_opportunities_1');
	

        // make sure that this is an after save LH
        if ($event != 'after_save') {
            return;
        }

        // introduce new opportunity
        $opportunity_bean = BeanFactory::newBean('Opportunities');

        // name the new opportunity
        $opportunity_bean->name = $campaign_bean->name . ' Opportunity';

        // save the opportunity
        $opportunity_bean->save();




        // relate campaign and opportunity
        $campaign_bean->atc_isscampaigns_opportunities_1->add($opportunity_bean->id);

        // load relationship between campaign and clients
        $campaign_bean->load_relationship('atc_clients_atc_isscampaigns');

        // retrieve related client(s)
        $clients_array = $campaign_bean->atc_clients_atc_isscampaigns->getBeans();

        // make sure that campaign has related client
        if ($clients_array) {

            // introduce the client bean
            $client_bean = reset($clients_array);

            // load relationship between clients and opportunities
            $client_bean->load_relationship('atc_clients_opportunities_1');

            // relate client and opportunity
            $client_bean->atc_clients_opportunities_1->add($opportunity_bean->id);
        }
	//end if
	}
    }

}


