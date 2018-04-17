<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class GetTargetListsAPI extends SugarApi
{
    public function registerApiRest()
    {
        return array(
            //GET
            'MyTargetLists' => array(
                //request type
                'reqType' => 'GET',

                //set authentication
                'noLoginRequired' => false,

                //endpoint path
                'path' => array('GetTargetLists', '?'),

                //endpoint variables
                'pathVars' => array('', 'account_id'),

                //method to call
                'method' => 'GetTargetLists',

                //short help string to be displayed in the help documentation
                'shortHelp' => 'An example of a GET endpoint',

                //long help to be displayed in the help documentation
                'longHelp' => 'custom/clients/base/api/help/MyEndPoint_MyGetEndPoint_help.html',
            ),
        );
    }

    /**
     * Method to be used for my MyEndpoint/GetExample endpoint
     */
    public function GetTargetLists($api, $args)
    {
        //custom logic

        global $db;
       
        $sql="select distinct prospect_lists.id as target_list_id, prospect_lists.name as target_list_name, atc_isscampaigns.id as campaign_id, atc_isscampaigns.name as campaign_name, prospect_lists.description as target_list_description
from atc_isscampaigns 
inner join atc_isscampaigns_cstm on atc_isscampaigns.id = atc_isscampaigns_cstm.id_c and atc_isscampaigns.deleted=0 
AND (atc_isscampaigns_cstm.campaign_finish_date_c = '' OR atc_isscampaigns_cstm.campaign_finish_date_c is null) AND (atc_isscampaigns_cstm.campaign_start_date_c is not null AND atc_isscampaigns_cstm.campaign_start_date_c != '')
inner join atc_isscampaigns_prospectlists_1_c on atc_isscampaigns_prospectlists_1atc_isscampaigns_ida = atc_isscampaigns_cstm.id_c AND atc_isscampaigns_prospectlists_1_c.deleted=0
inner join prospect_lists_prospects on prospect_list_id = atc_isscampaigns_prospectlists_1prospectlists_idb AND prospect_lists_prospects.deleted =0
inner join prospect_lists on prospect_lists.id = prospect_list_id
where related_id = '{$args['account_id']}' AND related_type = 'Accounts'";
       
       $tlists=array();

       $result=$db->query($sql);
       while ($row=$db->fetchByAssoc($result)){
          $tlists[$row['target_list_id']]['target_list_id']=$row['target_list_id'];
          $tlists[$row['target_list_id']]['target_list_name']=$row['target_list_name'];
          $tlists[$row['target_list_id']]['campaign_id']=$row['campaign_id'];
          $tlists[$row['target_list_id']]['campaign_name']=$row['campaign_name'];
          $tlists[$row['target_list_id']]['target_list_description']=$row['target_list_description'];
       }

       return $tlists;
    }

}

?>
