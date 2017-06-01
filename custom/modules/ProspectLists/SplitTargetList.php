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

        ////

        // retrieve from campaign? target list?
        $listsize = '';


        //for demo purposes. in reality, you'd have to calculate this based on accounts and contacts in target list, probaboly using sql.
        $accountlist = Array(
            'id1' => 10,
            'id2' => 100,
            'id3' => 30,
            'id4' => 40,
            'id5' => 20,
            'id6' => 90,
            'id7' => 50,
            'id8' => 80,
            'id9' => 60,
            'id10' => 70
        );
        //sort biggest accounts first.
        arsort($accountlist);
        echo ("number of contacts: " . (string)array_sum($accountlist)) . '<br />';
        echo ("number of lists:" . (string)ceil(array_sum($accountlist) / $listsize)) . '<br />';
        //create lists for storing the contact count, and the collection of accounts.
        $listarray = array();
        $listcollectionarray = array();
        //create target lists.
        for ($x = 1; $x <= ceil(array_sum($accountlist) / $listsize);) {
            //$list = BeanFactory::newBean('ProspectLists');
            //duplicate the relationships and values in the bean to the list, but change the name. (not sure if there is a faster way to do this)
            //$list->name = $bean->name." ".$x
            //$list->save();
            //  $listarray[$list->id] = 0;
            //  $listcollectionarray[$list->id] = Array();

            //temporary code for display
            $listarray['list' . $x] = 0;
            $listcollectionarray['list' . $x] = Array();
            //end temp code

            $x++;
        }
        //go through sorted list of accounts biggest to smallest.
        foreach ($accountlist as $key => $ac) {
            //get the target list with the least related contacts.
            $minlist = array_search(min($listarray), $listarray);
            //add teh number of contacts for this account to the list
            $listarray[$minlist] += $ac;
            $listcollectionarray[$minlist][] = $key;
            echo "contact count:" . $ac . "-- ";
            echo json_encode($listarray, JSON_PRETTY_PRINT);
            echo "<br />";
        }
        echo json_encode($listarray, JSON_PRETTY_PRINT);
        echo "<br />";
        echo json_encode($listcollectionarray, JSON_PRETTY_PRINT);


//        }


    }
}

