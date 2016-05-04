<?php

    class AddFromTargetList{
      function addFromTargetListMethod($bean, $event, $arguments){
    	  /*
       	 @author Hasan Ghazzawi
      		*/
         // check if the related module is accounts
        if ($arguments['related_module'] == 'Accounts') {	
           // create an account object
           $account = BeanFactory::getBean('Accounts', $arguments['related_id']);
          // load the contacts relationship
          //$account->load_relationship('contacts');
	  $contacts = $account->get_linked_beans('contacts','Contact');
          // load the target list
          $targetlist= BeanFactory::getBean('ProspectLists', $arguments['id']);
	  $GLOBALS['log']->fatal(var_dump($account->contacts));
          foreach($contacts as $contact){
$GLOBALS['log']->fatal("Inside foreach");
             $targetlist->load_relationship('contacts');
             $targetlist->contacts->add($contact->id);
          }
        }
      }
    }
?>

