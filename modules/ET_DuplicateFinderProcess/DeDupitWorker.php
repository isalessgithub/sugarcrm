<?php

require_once('include/SugarQuery/SugarQuery.php');


class DeDupitWorker
{

    /**
     * @param ET_DuplicateFinderProcess $duplicateFinderProcess
     * @param SugarBean $bean
     * @param bool $propagateCheck
     * @return bool
     */
    public static function findDuplicates(
        ET_DuplicateFinderProcess $duplicateFinderProcess,
        SugarBean $bean,
        $propagateCheck = true
    ) {

        // force bean to retrieve itself from DB
        $bean->retrieve();

        // initialise empty duplicate check bean
        $duplicateCheckBean = BeanFactory::newBean('ET_DuplicateCheck');
        // new sugar query
        $sql = new SugarQuery();
        // return only id
        $sql->select('id');
        // from duplicate check table
        $sql->from($duplicateCheckBean);

        $sql->where()
            ->equals('eontek_module_name', $duplicateFinderProcess->eontek_module_name)
            ->equals('record_id', $bean->id)
            ->equals('duplicate_finder_process_id', $duplicateFinderProcess->id);

        // execute query
        $result = $sql->execute();
        // current time in db format
        $dbDateTime = (new SugarDateTime())->asDb();

        // check if duplicate check record for the bean exists
        if (count($result) === 1) {
            // if the record exists fetch its bean
            $duplicateCheckBean = BeanFactory::getBean('ET_DuplicateCheck', $result[0]['id']);
            // update the time when the record has been processed for duplicate search
            $duplicateCheckBean->check_for_duplicates = $dbDateTime;
            // save changes
            $duplicateCheckBean->save();
        } // create record in case we do not have one
        elseif (count($result) === 0) {
            // create new one that we will use
            $duplicateCheckBean = self::createDuplicateCheckRecord($duplicateFinderProcess, $bean);
        } else {
            // handle case if something got wrong and we got more than 1
            // delete all existing and create fresh
            foreach ($result as $duplicateCheckRecordFromDB) {
                // if the record exists fetch its bean
                $duplicateCheckBean = BeanFactory::getBean('ET_DuplicateCheck', $result[0]['id']);
                $duplicateCheckBean->mark_deleted($duplicateCheckBean->id);
            }

            // create new one that we will use
            $duplicateCheckBean = self::createDuplicateCheckRecord($duplicateFinderProcess, $bean);


        }

        // parse json rules
        $rules = json_decode(htmlspecialchars_decode($duplicateFinderProcess->rules_configuration), true);

        // create rule structure that BeanDuplicateCheck accepts
        $duplicateCheckRules = array(
            'enabled' => true,
            'FilterDuplicateCheck' => array(
                'filter_template' => array(
                    array(
                        '$and' => $rules
                    )
                ),
                'ranking_fields' => array()
            )
        );

        // build ranking fields section
        foreach ($rules as $fieldDefinition) {
            foreach ($fieldDefinition as $fieldName => $fieldMatching) {
                $duplicateCheckRules['FilterDuplicateCheck']['ranking_fields'][] =
                    array(
                        'in_field_name' => $fieldName,
                        'dupe_field_name' => $fieldName,
                    );
            }
        }

        // create class that will perform duplicate check
        $duplicateCheckManager = new BeanDuplicateCheck($bean, $duplicateCheckRules);

        // find duplicates
        $duplicates = $duplicateCheckManager->findDuplicates();

        // make sure that duplicates were returned
        if(!$duplicates){
            return false;
        }

        // remove all duplicates that are with score less than maximum score since those don't have exact field match
        $maxScore = 0;
        for ($i = 1; $i <= count($rules); $i++) {
            $maxScore += pow(2, $i);
        }

        // TODO: if we add additional filter types to matching this might not be true anymore
        foreach ($duplicates['records'] as $duplicateRecordKey => $duplicateRecordValue) {
            if (isset($duplicateRecordValue['duplicate_check_rank']) && (intval($duplicateRecordValue['duplicate_check_rank']) < $maxScore)) {
                unset($duplicates['records'][$duplicateRecordKey]);
            }
        }

        // check if duplicates are returned
        if (count($duplicates['records']) < 1) {
            return false;
        }

        // iterate trough all duplicates
        foreach ($duplicates['records'] as $duplicate) {

            // initialise new bean
            $foundDuplicatesBean = BeanFactory::newBean('ET_FoundDuplicates');

            // instantiate sugar query
            $sql = new SugarQuery();

            // return only id field
            $sql->select('id');

            // fetch row with duplicate_record_id's that are the same as the record and it's duplicate
            $sql->from($foundDuplicatesBean)->where()->addRaw("
                (duplicate_record_id_1 = '{$bean->id}' AND duplicate_record_id_2 = '" . $duplicate['id'] . "') OR
                (duplicate_record_id_2 = '{$bean->id}' AND duplicate_record_id_1 = '" . $duplicate['id'] . "')
            ");

            // execute query
            $result = $sql->execute();

            // check if there is a record returned
            if (count($result) == 1) {

                // if there is a record then fetch its bean
                $foundDuplicatesBean = BeanFactory::getBean('ET_FoundDuplicates', $result[0]['id']);

                // load relationship with duplicate check
                $foundDuplicatesBean->load_relationship('et_duplicatecheck');

                // relate it to the duplicate check record
                $foundDuplicatesBean->et_duplicatecheck->add($duplicateCheckBean->id);

                // save changes
                $foundDuplicatesBean->save();

            } elseif (count($result) == 0) {

                // assign values to the bean
                $foundDuplicatesBean->duplicate_record_id_1 = $bean->id;
                $foundDuplicatesBean->duplicate_record_id_2 = $duplicate['id'];

                // save record, so that his id is available for middle table
                $foundDuplicatesBean->save();

                // load relationship with duplicate check
                $foundDuplicatesBean->load_relationship('et_duplicatecheck');

                // relate it to the duplicate check record
                $foundDuplicatesBean->et_duplicatecheck->add($duplicateCheckBean->id);

                // save changes
                $foundDuplicatesBean->save();

            } else {
                // in case there are multiple records exit from the function

                // todo: handle the error not just throwing back array!!!!!!!!!!!

            }

            // check if we need to propagate duplicate check
            if ($propagateCheck) {
                // propagate 1 level duplicate check by default
                $duplicateBean = BeanFactory::getBean($bean->module_name);

                $duplicateBean->disable_row_level_security = true;

                $duplicateBean->retrieve($duplicate['id']);

                DeDupitWorker::findDuplicates($duplicateFinderProcess, $duplicateBean, false);
            }
        }
    }


    static function autoMergeDuplicates(SugarBean $primaryBean, SugarBean $duplicateBean, $duplicate_pair_id)
    {

        // process updating of field values
        foreach ($primaryBean->column_fields as $field) {

            if (empty($primaryBean->$field)) {

                // use duplicate's value if primary is empty
                $primaryBean->$field = $duplicateBean->$field;
            }
        }

        foreach ($primaryBean->additional_column_fields as $field) {

            if (empty($primaryBean->$field)) {

                $primaryBean->$field = $duplicateBean->$field;
            }
        }

        // save the primary bean
        $primaryBean->save();

        // iterate over all relationships from duplicateBean and relate all records to primaryBean

        // get all link fields
        $linked_fields = $primaryBean->get_linked_fields();

        // todo: set the array
        $exclude = array();

        // process all links and relate back to primary
        foreach ($linked_fields as $name => $properties) {
            if ($properties['name'] == 'modified_user_link' || in_array($properties['name'], $exclude)) {
                continue;
            }
            if (isset($properties['duplicate_merge'])) {
                if ($properties['duplicate_merge'] == 'disabled' or
                    $properties['duplicate_merge'] == 'false' or
                    $properties['name'] == 'assigned_user_link'
                ) {
                    continue;
                }
            }
            if ($name == 'accounts' && $primaryBean->module_dir == 'Opportunities') {
                continue;
            }

            if ($name == 'teams') {

                // teams related fields are set in 'column_fields' iteration (at the method beginning)

                continue;
            }

            if ($duplicateBean->load_relationship($name)) {
                //check to see if loaded relationship is with email address
                $relName = $duplicateBean->$name->getRelatedModuleName();

                if (!empty($relName) and strtolower($relName) == 'EmailAddresses') {
                    //handle email address merge
                    handleEmailMerge($primaryBean, $name, $duplicateBean->$name->get());
                } else {
                    $data = $duplicateBean->$name->get();
                    if (is_array($data)) {
                        if ($primaryBean->load_relationship($name)) {
                            foreach ($data as $related_id) {

                                // make sure that relationship works
                                if (!is_object($primaryBean->$name)) {

                                    // mk: for some strange reason, if bean needs to relate many beans from duplicate,
                                    // relationship will all of a sudden appear as not loaded ($primaryBean->$name = "")
                                    // that's why it needs to bea loaded again
                                    $primaryBean->load_relationship($name);
                                }

                                //add to primary bean
                                $primaryBean->$name->add($related_id);
                            }
                        }
                    }
                }
            }
        }
        //END Bug #13826
        //delete the child bean, this action will cascade into related data too.
        $duplicateBean->mark_deleted($duplicateBean->id);

        // save information about merge operation in our merged duplicates module
        $mergedDuplicatesBean = BeanFactory::newBean('ET_MergedDuplicates');

        $mergedDuplicatesBean->primary_record_id = $primaryBean->id;
        $mergedDuplicatesBean->merged_record_id = $duplicateBean->id;
        $mergedDuplicatesBean->name = $duplicateBean->module_name;

        // todo: instead of saving merely the duplicate's module name here, in the future here we might save other fields (in case the bean gets deleted from the DB)
        $mergedDuplicatesBean->merged_record_desc = $duplicateBean->name;

        $systemUser = BeanFactory::newBean('Users');
        $systemUser->getSystemUser();

        $mergedDuplicatesBean->assigned_user_id = $systemUser->id;
        $mergedDuplicatesBean->team_id = $systemUser->team_id;
        $mergedDuplicatesBean->team_set_id = $systemUser->team_set_id;

        $mergedDuplicatesBean->save();

        // delete the duplicate pair, since pair is now merged
        $et_foundduplicates = BeanFactory::getBean(
            'ET_FoundDuplicates',
            $duplicate_pair_id,
            array('disable_row_level_security' => true)
        );

        if (!empty($et_foundduplicates->id)) {
            $et_foundduplicates->mark_deleted($et_foundduplicates->id);
        }
    }

    /**
     * @param ET_DuplicateFinderProcess $duplicateFinderProcess
     * @param SugarBean $bean
     * @param $dbDateTime
     * @return SugarBean
     */
    public static function createDuplicateCheckRecord(
        ET_DuplicateFinderProcess $duplicateFinderProcess,
        SugarBean $bean,
        $dbDateTime = null
    ) {
        if (is_null($dbDateTime)) {
            $dbDateTime = (new SugarDateTime())->asDb();
        }

        $duplicateCheckBean = BeanFactory::newBean('ET_DuplicateCheck');

        // define record that the check is for
        $duplicateCheckBean->record_id = $bean->id;
        // define for what module it is used
        $duplicateCheckBean->eontek_module_name = $bean->module_name;
        // relate it to the process record
        $duplicateCheckBean->duplicate_finder_process_id = $duplicateFinderProcess->id;
        // update the time when the record has been processed for duplicate search
        $duplicateCheckBean->check_for_duplicates = $dbDateTime;
        // save changes
        $duplicateCheckBean->save();

        return $duplicateCheckBean;
    }

    function handleEmailMerge($primaryBean, $linkFieldName, $emailAddresses)
    {
        $mrgArray = array();
        //get the email id's to merge
        $existingData = $emailAddresses;

        //make sure id's to merge exist and are in array format

        //get the existing email id's
        $primaryBean->load_relationship($linkFieldName);
        $exData = $primaryBean->$linkFieldName->get();

        if (!is_array($existingData) || empty($existingData)) {
            return;
        }
        //query email and retrieve existing email address
        $exEmailQuery = 'Select id, email_address from email_addresses where id in (';
        $first = true;
        foreach ($exData as $id) {
            if ($first) {
                $exEmailQuery .= " '$id' ";
                $first = false;
            } else {
                $exEmailQuery .= ", '$id' ";
                $first = false;
            }
        }
        $exEmailQuery .= ')';

        $exResult = $primaryBean->db->query($exEmailQuery);
        while (($row = $primaryBean->db->fetchByAssoc($exResult)) != null) {
            $existingEmails[$row['id']] = $row['email_address'];
        }


        //query email and retrieve email address to be linked.
        $newEmailQuery = 'Select id, email_address from email_addresses where id in (';
        $first = true;
        foreach ($existingData as $id) {
            if ($first) {
                $newEmailQuery .= " '$id' ";
                $first = false;
            } else {
                $newEmailQuery .= ", '$id' ";
                $first = false;
            }
        }
        $newEmailQuery .= ')';

        $newResult = $primaryBean->db->query($newEmailQuery);
        while (($row = $primaryBean->db->fetchByAssoc($newResult)) != null) {
            $newEmails[$row['id']] = $row['email_address'];
        }

        //compare the two arrays and remove duplicates
        foreach ($newEmails as $k => $n) {
            if (!in_array($n, $existingEmails)) {
                $mrgArray[$k] = $n;
            }
        }

        //add email id's.
        foreach ($mrgArray as $related_id => $related_val) {
            //add to primary bean
            $primaryBean->$linkFieldName->add($related_id);
        }
    }
}