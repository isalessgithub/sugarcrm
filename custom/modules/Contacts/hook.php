<?php

Class afterSave
{
	function afterSave($bean, $event, $arguments)
	{
		if($bean->account_id != null)
		{
			require_once('modules/Accounts/Account.php'); 
			$account = new Account(); 
			$account->retrieve($bean->account_id); 
			    
			if($bean->fetched_row['id'] == null && $bean->primary_address_street == null)
			{  
				$bean->primary_address_street = $account->billing_address_street;
				$bean->primary_address_city = $account->billing_address_city;
				$bean->primary_address_state = $account->billing_address_state;
				$bean->primary_address_postalcode = $account->billing_address_postalcode;
				$bean->primary_address_country = $account->billing_address_country;
			}
			
			if($bean->fetched_row['id'] == null && $bean->phone_work == null)
			{
				$bean->phone_work = $account->phone_office;
			}
			
			//$bean->save();
		}
	}
}
?>
