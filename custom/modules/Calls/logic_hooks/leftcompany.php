<?php
class leftCompany{
	function leftCompany($bean,$event,$arguments){
		 if($bean->call_outcome_c == 'Left company' && $bean->parent_type == 'Contacts' && !empty($bean->parent_id)){
			$contact = BeanFactory::getBean('Contacts', $bean->parent_id);
			if(!empty($contact)){
				if(!empty($contact->account_id)){
				
                                	$account = BeanFactory::getBean('Accounts', $contact->account_id);
				
					//$account->load_relationship('contacts');
					//$account->contacts->delete($acount->id,$contact->id);

                                        if($contact->left_company_c==1){
                                            // checkbox is checked
                                           $account->load_relationship('contacts');
                                           $account->contacts->delete($acount->id,$contact->id);
                                           $contact->left_company_c=0;
                                        }else{
                                           // checkbox is not checked
                                           $contact->left_company_c=1;
                                        
                                        }
                                        $contact->save();
					
				}
			}
		}
	}
}

?>
