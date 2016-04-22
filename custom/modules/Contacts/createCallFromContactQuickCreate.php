<?php

class createCallFromContactQuickCreateC {

    function createCallFromContactQuickCreateBeforeSave($bean, $action, $args) {
        global $current_user;
        if (empty($bean->fetched_row)) {
            if (isset($_REQUEST['call_outcome_c']) && isset($_REQUEST['relate_to']) && $_REQUEST['relate_to'] == 'prospect_list_contacts') {
                $bean->description .= "\n" . date('m/d/Y h:ia') . " * Call Made by " . $current_user->full_name . " * ";
            }
        }
    }

    function createCallFromContactQuickCreateAfterSave($bean, $action, $args) {
        if (empty($bean->fetched_row)) {
            if (isset($_REQUEST['call_outcome_c']) && isset($_REQUEST['relate_to']) && $_REQUEST['relate_to'] == 'prospect_list_contacts') {
                global $current_user;
                $call = new Call();
                $module = 'Contacts';
                $parent_id = $bean->id;

                $call->name = "Left Voicemail";
                $call_outcome_c = $_REQUEST['call_outcome_c'];

                $call->call_outcome_c = $call_outcome_c;

                $call->assigned_user_id = $current_user->id;
                $call->assigned_user_name = $current_user->full_name;
                $call->direction = "Outbound";
                $call->status = "Held";
                $call->date_start = date('m/d/Y h:ia');
                $call->parent_type = $module;
                $call->parent_id = $parent_id;

                $call->name = "Made call to " . $bean->full_name;
                // lets relate the call to Target list
                if (!empty($_REQUEST['return_id']))
                    $call->prospectlists_calls_1prospectlists_ida = $_REQUEST['return_id'];
                $_SESSION['disable_workflow'] = "Yes";
                $call->save();
                $tl = new ProspectList();
                $tl->disable_row_level_security = true;
                $tl->retrieve($_REQUEST['return_id']);
                global $db;

                $update_campaign_name_c_query = "UPDATE calls_cstm SET campaign_name_c = '{$tl->name}' WHERE id_c = '{$call->id}'";
                $db->query($update_campaign_name_c_query);

                $_SESSION['disable_workflow'] = "No";
                $columns = array("call_id" => $call->id, "contact_id" => $parent_id);
                $call->set_relationship('calls_contacts', $columns, true, false, null);
            }
        }
    }

}