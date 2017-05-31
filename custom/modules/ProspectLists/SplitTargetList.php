<?php


class SplitTargetList
{

    /**
     * Splits target list into a couple of smaller ones
     * based on set max list size
     *
     * @param $target_list
     * @param $event
     * @param $arguments
     */
    function doSplitTargetList($target_list, $event, $arguments)
    {
        // make sure that this is before save LH
        if ($event != 'before_save') {
            return;
        }

        // make sure that list has just been finalised
        // todo: uncomment (these conditions are ignored for now)
//        if ($target_list->client_edit_disabled_c and !$target_list->fetched_row['client_edit_disabled']) {

        // retrieve the related accounts
//        $a = $target_list->load_relationship('contacts');
//        $c = $target_list->contacts->getBeans();

        // retrieve the contacts related to this target list
        // (query is used because it's a lot faster)
        $sugarQuery = new SugarQuery();
        $sugarQuery->from(BeanFactory::newBean('Contacts'));
        $sugarQuery->select(array('id', 'account_id'));
        $sugarQuery->joinTable('prospect_lists_prospects', array('alias' => 'plp'))
            ->on()
            ->equalsField('contacts.id', 'plp.related_id')
            ->equals('plp.prospect_list_id', $target_list->id)
            ->equals('plp.related_type', 'Contacts')
            ->equals('plp.deleted', '0');

        $related_contacts = $sugarQuery->execute();

        // introduce the array of contacts sorted by account
        $contacts_by_account = array();

        // iterate trough related contacts
        foreach ($related_contacts as $contact_data) {

            // add contact to the sorted array
            $contacts_by_account[$contact_data['account_id']][] = $contact_data['id'];
        }

        // sort the array by contacts count
        uasort($contacts_by_account, function ($a, $b) {
            return count($b) - count($a);
        });

        // introduce the array of contacts sorted by max list size
        $contacts_by_max_list_size = array();

        // iterate trough contacts by account
        foreach ($contacts_by_account as $account_id => $contacts_ids) {

            $a = 1;

            if (count($contacts_ids) > $target_list->ms_max_list_size_c) {

                $contacts_by_max_list_size[$account_id] = $contacts_ids;

            } else {



            }


        }

        $a = 1;

//        }


    }
}

