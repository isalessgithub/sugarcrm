<?php
class leftCompany{
	function leftCompany($bean,$event,$arguments){
		 if($bean->call_outcome_c == 'Left company' && $bean->parent_type == 'Contacts' && !empty($bean->parent_id)){
			$contact = BeanFactory::getBean('Contacts', $bean->parent_id);
			if(!empty($contact)){
				if(!empty($contact->account_id)){
					$account = BeanFactory::getBean('Accounts', $contact->account_id);
					//$GLOBALS['log']->fatal($contact->id);
					//$GLOBALS['log']->fatal($account->id);
					$account->load_relationship('contacts');
					$account->contacts->delete($acount->id,$contact->id);
					//$account->save();
				}
			}
		}
	}
}

?>
