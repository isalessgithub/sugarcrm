<?php

class createCallFromContactQuickCreateC {

    function createCallFromContactQuickCreateBeforeSave($bean, $action, $args) {
	if($args->isUpdate === 'false'){
        	global $current_user;
		//$GLOBALS['log']->fatal("--".json_encode($args, JSON_PRETTY_PRINT));
                $query = "SELECT prospect_list_id from prospect_lists_prospects where related_id = '{$bean->id}' AND deleted=0 order by date_modified desc limit 1";
         	$target_list_id = $GLOBALS['db']->getOne($query);
		//$GLOBALS['log']->fatal("**".$target_list_id);
        	if (!empty($target_list_id)) {
                		$bean->description .= "\n" . date('m/d/Y h:ia') . " * Call Made by " . $current_user->full_name . " * ";
	 	}
     	}
    }

    function createCallFromContactQuickCreateAfterSave($bean, $action, $args) {
//	$GLOBALS['log']->fatal("++".$bean->id);

        if ($args['isUpdate'] == false){


		$query = "SELECT prospect_list_id from prospect_lists_prospects where related_id = '{$bean->id}' AND deleted=0 order by date_modified desc limit 1";
		$target_list_id = $GLOBALS['db']->getOne($query);

            if ($target_list_id != '' && isset($target_list_id)) {
		$GLOBALS['log']->fatal('generating call related to new contact');

                global $current_user;
                $call = new Call();
                $module = 'Contacts';
                $parent_id = $bean->id;

                $call->name = "First Call";
                $call_outcome_c = $bean->call_outcome_c;

                $call->call_outcome_c = $call_outcome_c;
		$call->description = $bean->description;
                $call->assigned_user_id = $current_user->id;
                $call->assigned_user_name = $current_user->full_name;
                $call->direction = "Outbound";
                $call->status = "Held";
                $call->date_start = date('m/d/Y h:ia');
                $call->parent_type = $module;
                $call->parent_id = $parent_id;

                $call->name = "Made call to " . $bean->full_name;
                // lets relate the call to Target list
                if (!empty($target_list_id))

                $call->prospectlists_calls_1prospectlists_ida = $target_list_id;

                $_SESSION['disable_workflow'] = "Yes";
                $call->save();
                $tl = new ProspectList();
                $tl->disable_row_level_security = true;
                $tl->retrieve($target_list_id);

                $update_campaign_name_c_query = "UPDATE calls_cstm SET campaign_name_c = '{$tl->name}' WHERE id_c = '{$call->id}'";
                $GLOBALS['db']->query($update_campaign_name_c_query);

                $_SESSION['disable_workflow'] = "No";
                $columns = array("call_id" => $call->id, "contact_id" => $parent_id);
                $call->set_relationship('calls_contacts', $columns, true, false, null);
            }
        }
    }

}
