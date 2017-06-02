<?php

/**
 * Handles splitting large target lists once they're finalised
 *
 * Class SplitTargetList
 */
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

        // prevent infinite loop
        if (!empty($target_list->list_splitting)) {
            return;
        }

        // make sure that list has just been finalised
        if ($target_list->client_edit_disabled_c and !$target_list->fetched_row['client_edit_disabled']) {

            // retrieve the contacts related to this target list
            // (query is used because it's a lot faster than retrieving beans)
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

                // make sure that contact has a related account
                if (empty($contact_data['account_id'])) {
                    continue;
                }

                // add contact to the sorted array
                $contacts_by_account[$contact_data['account_id']][] = $contact_data['id'];
            }

            // sort the array by contacts count
            arsort($contacts_by_account);

            // introduce the array of contacts count (e.g ['<account id>' => <contacts count>, ...])
            $contacts_count_array = array();

            // iterate trough the $contacts_by_account array
            foreach ($contacts_by_account as $account_id => $contacts_ids) {

                // set the account's contacts count
                $contacts_count_array[$account_id] = count($contacts_ids);
            }

            // introduce the max list size
            $list_size = $target_list->ms_max_list_size_c;

            // make sure that max list size is set
            if (empty($list_size)) {
                return;
            }

            // introduce the array of buckets count
            // (count contains number of contacts in each bucket)
            $buckets_count = array();

            // introduce the array of buckets
            // (bucket contains account ids)
            $buckets = array();

            // copy the contacts count array
            $contacts_count_array_copy = array_merge($contacts_count_array, array());

            // introduce iterator
            // (it tells us how many accounts have more contacts than max size)
            $iterator = 0;

            // iterate trough contacts count array
            foreach ($contacts_count_array as $account_id => $contacts_count) {

                // check if account have more contacts than max size
                if ($contacts_count >= $list_size) {

                    // increment iterator
                    $iterator++;

                    // add these contacts count to bucket count
                    $buckets_count[$iterator] = $contacts_count;

                    // add this account to the bucket
                    $buckets[$iterator] = array($account_id);

                    // remove this account from array (it's already in the bucket)
                    unset($contacts_count_array_copy[$account_id]);
                }
            }

            // introduce the estimated number of list
            // (huge accounts are already in the bucket, so this number is determined based on
            // the accounts that have less contacts than max size)
            $number_of_lists = ceil(array_sum($contacts_count_array_copy) / $list_size);

            // iterate trough the number of lists
            for ($x = $iterator + 1; $x <= $number_of_lists + $iterator; $x++) {

                // initialise bucket count
                $buckets_count[$x] = 0;

                // initialise bucket
                $buckets[$x] = array();
            }

            // iterate trough the contacts count
            foreach ($contacts_count_array_copy as $account_id => $contacts_count) {

                // get the smallest bucket
                $smallest_bucket = array_search(min($buckets_count), $buckets_count);

                // increment the count
                $buckets_count[$smallest_bucket] += $contacts_count;

                // set the account in the bucket
                $buckets[$smallest_bucket][] = $account_id;
            }

            global $db;

            // iterate trough buckets
            foreach ($buckets as $bucket_number => $account_ids) {

                // introduce the new target list
                $new_target_list = $this->createNewTargetList($target_list, $bucket_number);

                // load relationship with contacts
                $new_target_list->load_relationship("contacts");

                // iterate trough accounts that are set into this bucket
                foreach ($account_ids as $account_id) {

                    // make sure that account id exists
                    if (empty($account_id)) {
                        continue;
                    }

                    // load relationship with accounts
                    $new_target_list->load_relationship("accounts");

                    // set a flag that will tell LH not to relate all the
                    // contacts from this account to target list
                    $new_target_list->list_splitting = true;

                    // relate the account to the target list
                    $new_target_list->accounts->add($account_id);

                    // introduce the contacts from the account (from this bucket)
                    $contacts = $contacts_by_account[$account_id];

                    // iterate trough all the contacts
                    foreach ($contacts as $contact_id) {

                        // introduce a new sugar id
                        $id = create_guid();

                        // introduce the query (creates relationship between contacts and target list)
                        $query = "                    
                          INSERT INTO prospect_lists_prospects (`id`, `prospect_list_id`, `related_id`, `related_type`, `date_modified`, `deleted`)
                          VALUES ('{$id}', '{$new_target_list->id}', '{$contact_id}', 'Contacts', '{$new_target_list->date_entered}', 0);
                        ";

                        // execute the query
                        $db->query($query);
                    }

                }

            }

            // delete the old list
            $target_list->mark_deleted();

            // prevent entering this same LH again
            $target_list->list_splitting = true;

            // save the list
            $target_list->save();
        }

    }

    /**
     * Copies relevant data from the old large
     * target list into one of the copies
     *
     * @param $target_list
     * @param $bucket_number
     * @return SugarBean
     */
    private function createNewTargetList($target_list, $bucket_number)
    {
        // create new list
        $new_target_list = BeanFactory::newBean('ProspectLists');

        // set the list's name
        $new_target_list->name = $target_list->name . " {$bucket_number}";

        // copy the description
        $new_target_list->description = $target_list->description;

        // copy the domain name
        $new_target_list->domain_name = $target_list->domain_name;

        // since the old one is disabled, make the new one disabled as well
        $new_target_list->client_edit_disabled_c = 1;

        // copy assigned user id
        $new_target_list->assigned_user_id = $target_list->assigned_user_id;

        // copy atc_clients_id_c from the old list
        $new_target_list->atc_clients_id_c = $target_list->atc_clients_id_c;

        // copy max list size
        $new_target_list->ms_max_list_size_c = $target_list->ms_max_list_size_c;

        // set a flag that will prevent infinite loop
        $new_target_list->list_splitting = true;

        // save the new target list
        $new_target_list->save();

        // introduce the id of campaign that is related to the old list
        $campaign_id = $target_list->atc_isscampaigns_prospectlists_1atc_isscampaigns_ida;

        // make sure that campaign was actually related
        if ($campaign_id) {

            // load relationship with campaigns
            $new_target_list->load_relationship('atc_isscampaigns_prospectlists_1');

            // relate the list with iss campaign
            $new_target_list->atc_isscampaigns_prospectlists_1->add($campaign_id);
        }

        // todo: this is 1-1 relationship
//        // introduce the id of sales rep that is related to the old list
//        $sales_rep_id = $target_list->prospectlists_atc_clientsalesreps_1atc_clientsalesreps_idb;
//
//        // make sure that sales rep was actually related
//        if ($sales_rep_id) {
//
//            // load relationship with sales reps
//            $new_target_list->load_relationship('prospectlists_atc_clientsalesreps_1');
//
//            // relate the list with sales rep
//            $new_target_list->prospectlists_atc_clientsalesreps_1->add($sales_rep_id);
//        }

        return $new_target_list;
    }


}

