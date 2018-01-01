<?php

class AddFromTargetList
{
    function addFromTargetListMethod($bean, $event, $arguments)
    {
        /*
          @author Hasan Ghazzawi
            */
        // check if the related module is accounts
        if ($arguments['related_module'] == 'Accounts') {
            // don't relate all contacts from related account
            // if brought here by large lists split
           if(!empty($bean->list_splitting)){
                return;
            }
            // create an account object


            $account = BeanFactory::getBean('Accounts', $arguments['related_id']);
            $account->add_to_target_list_c = '';
            $account->save();

            // load the contacts relationship
            //$account->load_relationship('contacts');
            $contacts = $account->get_linked_beans('contacts', 'Contact');
            // load the target list

            $targetlist = BeanFactory::getBean('ProspectLists', $arguments['id']);
            foreach ($contacts as $contact) {
                $targetlist->load_relationship('contacts');
                $targetlist->contacts->add($contact->id);
            }

        }
    }
}

class DeleteFromTargetList
{
    function deleteFromTargetListMethod($bean, $event, $arguments)
    {
        /*
       @author Hasan Ghazzawi
              */
        // check if the related module is accounts
        if ($arguments['related_module'] == 'Accounts') {

            // create an account object
            $account = BeanFactory::getBean('Accounts', $arguments['related_id']);
            // load the contacts relationship
            //$account->load_relationship('contacts');
            $contacts = $account->get_linked_beans('contacts', 'Contact');
            // load the target list
            $targetlist = BeanFactory::getBean('ProspectLists', $arguments['id']);

            foreach ($contacts as $contact) {
                if ($contact->id != '') {
                    $targetlist->load_relationship('contacts');
                    $targetlist->contacts->delete($targetlist->id, $contact->id);
                }
            }
        }
    }
}

?>
