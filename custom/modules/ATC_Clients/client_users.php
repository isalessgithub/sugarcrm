<?php
class linkUsersCampaigns {
        function usersCampaigns($bean,$event,$arguments){
		//load the cp_clientusers and atc_isscampaigns
                $bean->load_relationship('cp_client_users_atc_clients');
                $users = $bean->cp_client_users_atc_clients->getBeans();
		$bean->load_relationship('atc_clients_atc_isscampaigns');
		$campaigns = $bean->atc_clients_atc_isscampaigns->getBeans();

		//now we're going to loop through the campaigns, for each campaign loop through usersr and relate them directly.
                if($users != null && $campaigns != null){
                        foreach($campaigns  as $campaign){
				$campaign->load_relationship('atc_isscampaigns_cp_client_users_1');
                                foreach($users as $user){
					$campaign->atc_isscampaigns_cp_client_users_1->add($user->id);
					$campaign->save(false);
				}
                        }
			$bean->ownership = '1';
                }
		else{
			$bean->ownership = '2';
		}
        }
}
?>