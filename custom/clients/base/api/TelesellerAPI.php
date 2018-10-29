<?php


class TelesellerAPI extends SugarApi
{

    public function registerApiRest()
    {
        return array(
            'webServices' => array(
                'reqType' => 'GET',
                'path' => array('Teleseller', 'web-service', '?', '?', '?'),
                'pathVars' => array('module', 'action', 'configuration', 'module_name', 'view'),
                'method' => 'webService',
                'shortHelp' => 'Fetch Web Service Configuration',
                'longHelp' => 'Fetch Web Service Configuration',
            ),
            'telesalesDispositionModalData' => array(
                'reqType' => 'POST',
                'path' => array('Teleseller', 'disposition-telesales', 'send-data'),
                'pathVars' => array('module', 'field', 'action'),
                'method' => 'getTelesalesHTML',
                'shortHelp' => '',
                'longHelp' => '',
            ),
            'telesalesDispositionSave' => array(
                'reqType' => 'POST',
                'path' => array('Teleseller', 'disposition-telesales', 'save-data'),
                'pathVars' => array('module', 'field', 'action'),
                'method' => 'telesalesDispositionSave',
                'shortHelp' => '',
                'longHelp' => '',
            ),
        );
    }

    /**
     * Retrieves teleseller configuration
     *
     * @param $api
     * @param $args
     * @return array
     */
    public function webService($api, $args)
    {
        // introduce configuration (config.php)
        global $sugar_config;

        $specific_config = ($args['module_name'] === $args['view']) ? 'listview' : 'subpanel';

        $ret_conf = array();

        foreach ($sugar_config['teleseller'][$args['module_name']][$specific_config] as $config_name => $configuration) {

            if ($configuration == 'false') {
                continue;
            }

            if ($config_name == 'log_call') {

                $return_config = array(
                    'icon' => 'fa fa-phone',
                    'popup_enabled' => true,
                    'module_fields' => array(
                        'call_outcome_c',
                        'description',
                        'reminder_time',
                        'date_entered'
                    ),
                    'popup_fields' => json_encode(array(
                        'call_outcome_c',
                        'description',
                        'reminder_time',
                        'date_entered'
                    )),
                    'module' => 'Calls',
                    'name' => 'Log Call',
                    'enabled' => true
                );

                $ret_conf['telesales_disposition'][] = $return_config;
            }

            if ($config_name == 'no_result') {

                $return_config = array(
                    'icon' => 'fa fa-ban',
                    'popup_enabled' => true,
                    'module_fields' => array(),
                    'popup_fields' => json_encode(array()),
                    'module' => 'Calls',
                    'name' => 'No Result',
                    'enabled' => true
                );

                $ret_conf['telesales_disposition'][] = $return_config;
            }

            if ($config_name == 'schedule_call') {

                $return_config = array(
                    'icon' => 'fa fa-calendar',
                    'popup_enabled' => false,
                    'module_fields' => array(),
                    'popup_fields' => json_encode(array()),
                    'module' => 'Calls',
                    'name' => 'Schedule Call',
                    'enabled' => true
                );

                $ret_conf['telesales_disposition'][] = $return_config;
            }

            if ($config_name == 'create_note') {

                $return_config = array(
                    'icon' => 'fa fa-file-o',
                    'popup_enabled' => true,
                    'module_fields' => array(
                        'name',
                        'description'
                    ),
                    'popup_fields' => json_encode(array(
                        'name',
                        'description'
                    )),
                    'module' => 'Notes',
                    'name' => 'Create Note',
                    'enabled' => true
                );

                $ret_conf['telesales_disposition'][] = $return_config;
            }
        }

        // return configuration
        return $ret_conf;
    }

    public function getTelesalesHTML($api, $args)
    {

        global $current_user, $timedate, $db, $app_list_strings;
        $default_values = array();
        $html = '';
        $hidden_fields = '';
        $pref = $GLOBALS['current_user']->getUserDateTimePreferences();
        $cur_dt_str = date($pref['date']);
        if (isset($args['module_fields']) && !empty($args['module_fields'])) {
            $module_fields = json_decode($args['module_fields'], true);
        }
        if (empty($module_fields)) {
            $module_fields = array();
        }

        $popup_config = json_decode($args['popup_configuration'], true);

        $action_module_bean = BeanFactory::newBean($args['action_module']);

        $parent_module_bean = BeanFactory::getBean($args['parent_module'], $args['parent_id']);

        // check if we need to open popup
        if ($args['popup_enabled'] !== 'off' && !empty($popup_config)) {

            $field_name_map = $action_module_bean->field_name_map;

            foreach (explode(',', $args['module_fields']) as $field_name) {

                $field_def = $field_name_map[$field_name];

                $list_options = '';

                if ($field_def['type'] == 'enum') {

                    foreach ($app_list_strings[$field_def['options']] as $key => $option) {

                        $list_options .= "<option value='$key'>$option</option>";
                    }
                }

                $default_values[$field_name] = array(
                    'value' => '',
                    'type' => $field_def['type'],
                    'label' => translate($field_def['vname'], $args['action_module']),
                    'list_options' => $list_options
                );

            }

            foreach ($module_fields as $module_field_name => $module_field_value) {

                $hidden_fields .= "
                    <div class=\"control-group hide\">
                        <div class=\"controls\">
                            <input type=\"text\" id=\"{$module_field_name}\" value='{$module_field_value['value']}'>
                        </div>
                    </div>";
            }

            $html .= "
                    <div class=\"control-group hide\">
                      <div class=\"controls\">
                          <input type=\"text\" id=\"parent_module\" value='{$parent_module_bean->module_name}'>
                          <input type=\"text\" id=\"parent_id\" value='{$parent_module_bean->id}'>
                          <input type=\"text\" id=\"action_module\" value='{$action_module_bean->module_name}'>
                        </div>
                    </div>
                ";

            // TODO: add header
            $html .= "<div class=\"row-fluid panel_body\"><form class=\"form-horizontal\"><h2>{$args['title']}</h2>";

            foreach ($default_values as $field_name => $field_data) {

                switch ($field_data['type']) {
                    case "varchar":
                        $type = 'text';
                        $value = '';
                        break;
                    case 'datetimecombo':
                    case 'datetime':
                        $type = 'datetime-local';
                        $value = date("Y-m-d\TH:i:s", strtotime('now'));
                        break;
                    case 'text':
                        $type = 'textarea';
                        $value = '<textarea id="' . $field_name . '" data-type="text" class="form-control">' . $field_data['value'] . '</textarea>';
                        break;
                    case 'enum': {
                        $type = 'enum';

                        if ($field_name == 'reminder_time') {

                            $reminder_time_wrapper = "
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Set Reminder Time</label>
                                    <div class=\"controls\">
                                        <input type=\"checkbox\" id=\"show_reminder_time_checkbox\">
                                    </div>
                                </div>
                                
                                <div id='reminder_time_wrapper' class=\"control-group\" style='display: none;'>
                                    <label class=\"control-label\" for=\"reminder_time\">{$field_data['label']}</label>
                                    <div class=\"controls\">
                                        <select id='reminder_time'>
                                            {$field_data['list_options']}
                                        </select>
                                    </div>
                                </div>
                                ";
                        } else {
                            $value = "<select id='$field_name'>
                                        {$field_data['list_options']}
                                      </select>";
                        }

                        break;
                    }
                    default:
                        $type = $field_data['type'];
                        $value = '';
                }

                if ($type == 'textarea') {
                    $html .= "
                    <div class=\"control-group\">
                        <label class=\"control-label\" for=\"{$field_name}\">{$field_data['label']}</label>
                        <div class=\"controls\">
                          {$value}
                        </div>
                      </div>
                    ";
                } elseif ($type == 'enum') {

                    // check if reminder time needs to be displayed
                    if ($field_name == 'reminder_time') {

                        $html .= "$reminder_time_wrapper";

                    } else {

                        $html .= "             
                    <div class=\"control-group\">
                        <label class=\"control-label\" for=\"{$field_name}\">{$field_data['label']}</label>
                        <div class=\"controls\">
                          {$value}
                        </div>
                      </div>
                    ";
                    }


                } else {

                    if ($field_name == 'date_entered') {
                        $field_data['label'] = 'Follow-up Date';
                    }

                    $html .= "
                      <div class=\"control-group\">
                        <label class=\"control-label\" for=\"{$field_name}\">{$field_data['label']}</label>
                        <div class=\"controls\">
                          <input type=\"{$type}\" id=\"{$field_name}\" value='{$value}'>
                        </div>
                      </div>
                     ";
                }
            }

            if ($args['title'] == 'Log Call') {
                $html .= "
                            <div class=\"control-group\">
                                <label class=\"control-label\">Save only Follow-Up Call</label>
                                <div class=\"controls\">
                                    <input type=\"checkbox\" id=\"save_only_follow_up_call_checkbox\">
                                </div>
                            </div>
                     ";
            }

            $html .= $hidden_fields;

            $html .= "</form></div>";

            // TODO: add save and cancel buttons
            $html .= "<div class=\"row-fluid panel_body\">
              <a type=\"button\" class=\"btn btn-default\" name=\"close_button\">Cancel</a>
              <button type=\"button\" class=\"btn btn-primary save-telesales\">Save</button>
            </div>";

            // return drawer html
            return array('error' => false, 'data' => $html);
        }

        // TODO: we need to see if there is any additional action that needs to be saved in bean
        $action_module_bean->assigned_user_id = $current_user->id;
        $action_module_bean->assigned_user_name = $current_user->full_name;
        $name = !empty($parent_module_bean->name) ? $parent_module_bean->name : $parent_module_bean->full_name;
        $action_module_bean->name = "Made " . strtolower($action_module_bean->object_name) . " to " . $name;

        // handle specific module calls
        if ($args['action_module'] == "Calls" || $args['action_module'] == "Meetings" || $args['action_module'] == "Tasks") {

            // this values will be ovewriten if they are set
            $action_module_bean->date_start = $timedate->now();
            $action_module_bean->date_end = isset($action_module_bean->date_end) ? $timedate->now() : '';
            $action_module_bean->date_due = isset($action_module_bean->date_due) ? $timedate->now() : '';

            if (isset($default_values['date_start']['value']) && !empty($default_values['date_start']['value'])) {
                $default_values['date_start']['value'] = $timedate->asDb(new DateTime($default_values['date_start']['value']));
            }

            if (isset($default_values['date_end']['value']) && !empty($default_values['date_end']['value'])) {
                $default_values['date_end']['value'] = $timedate->asDb(new DateTime($default_values['date_end']['value']));
            }

            if (isset($default_values['date_due']['value']) && !empty($default_values['date_due']['value'])) {
                $default_values['date_due']['value'] = $timedate->asDb(new DateTime($default_values['date_due']['value']));
            }

            $action_module_bean->duration_hours = "0";
            $action_module_bean->duration_minutes = "00";

            // make sure that 'No Result' disposition button is clicked
            if ($args['action_module'] == "Calls" && $args['title'] == 'No Result') {

                $action_module_bean->direction = "Outbound";
                $action_module_bean->status = "Held";
                $action_module_bean->date_start = $timedate->now();
                $action_module_bean->call_outcome_c = "Not Interested";
                $action_module_bean->name = "Left Voicemail";
            }

        }

        foreach ($default_values as $field_name => $field_data) {
            $action_module_bean->{$field_name} = $field_data['value'];
        }

        // TODO: populate passed data!!!!
        foreach ($module_fields as $module_field_name => $module_field_value) {
            $action_module_bean->{$module_field_name} = $module_field_value['value'];
        }

        $action_module_bean->parent_type = $parent_module_bean->module_name;
        $action_module_bean->parent_id = $parent_module_bean->id;

        $action_module_bean->save();

        // cover custom relationship (for now viabl does not support this type but we will set code for the future)
        $rel = new Relationship();
        $rel_info = $rel->retrieve_by_sides($args['parent_module'], $args['action_module'], $db);
        $rel_name = $rel_info['relationship_name'];

        if ($parent_module_bean->load_relationship($rel_name)) {
            $parent_module_bean->{$rel_name}->add($action_module_bean->id);
        }

        $link_name = strtolower($action_module_bean->module_dir);

        if ($parent_module_bean->load_relationship($link_name)) {
            $parent_module_bean->{$link_name}->add($action_module_bean->id);
        }

        // mk: make sure that action should be logged in the description field
        if (!array_key_exists('settings', $args) || !array_key_exists('append_activities_to_description',
                $args['settings']) || $args['settings']['append_activities_to_description'] == '1'
        ) {

            // log 'action' to the description
            $parent_module_bean->description .= "\n$cur_dt_str * {$action_module_bean->object_name} created by " . $current_user->full_name . " * " . $action_module_bean->name;
        }

        $parent_module_bean->save();

        // we need to add new save here in order for logic to run properly
        $action_module_bean->save();

        return array('error' => false, 'message' => "{$action_module_bean->object_name} created.");
    }

    public function telesalesDispositionSave($api, $args)
    {

        global $current_user, $timedate, $db;
        $pref = $current_user->getUserDateTimePreferences();
        $cur_dt_str = date($pref['date']);

        $action_module_bean = BeanFactory::newBean($args['action_module']);

        $parent_module_bean = BeanFactory::getBean($args['parent_module'], $args['parent_id']);

        // TODO: we need to see if there is any additional action that needs to be saved in bean
        $action_module_bean->assigned_user_id = $current_user->id;
        $action_module_bean->assigned_user_name = $current_user->full_name;
        $name = !empty($parent_module_bean->name) ? $parent_module_bean->name : $parent_module_bean->full_name;
        $action_module_bean->name = "Made " . strtolower($action_module_bean->object_name) . " to " . $name;

        // handle specific module calls and meetings
        if ($args['action_module'] == "Calls" || $args['action_module'] == "Meetings" || $args['action_module'] == "Tasks") {

            // this values will be ovewriten if they are set
            $action_module_bean->date_start = $timedate->now();
            $action_module_bean->date_end = isset($action_module_bean->date_end) ? $timedate->now() : '';
            $action_module_bean->date_due = isset($action_module_bean->date_due) ? $timedate->now() : '';
            $action_module_bean->status = 'Held';

            if (isset($args['fields']['date_start']) && !empty($args['fields']['date_start'])) {
                $args['fields']['date_start'] = $timedate->asDb(new DateTime($args['fields']['date_start']));
            }

            if (isset($args['fields']['date_end']) && !empty($args['fields']['date_end'])) {
                $args['fields']['date_end'] = $timedate->asDb(new DateTime($args['fields']['date_end']));
            }

            if (isset($args['fields']['date_due']) && !empty($args['fields']['date_due'])) {
                $args['fields']['date_due'] = $timedate->asDb(new DateTime($args['fields']['date_due']));
            }

            $action_module_bean->duration_hours = "0";
            $action_module_bean->duration_minutes = "00";
        }

        // mk: make sure that action should be logged in the description field
        if (!array_key_exists('settings', $args) || !array_key_exists('append_activities_to_description',
                $args['settings']) || $args['settings']['append_activities_to_description'] == '1'
        ) {

            // log 'action' to the description
            $parent_module_bean->description .= "\n$cur_dt_str * {$action_module_bean->object_name} created by " . $current_user->full_name . " * " . $action_module_bean->name;
        }

        $parent_module_bean->save();

        foreach ($args['fields'] as $field_name => $field_data) {
            $action_module_bean->$field_name = $field_data;
        }

        $action_module_bean->parent_type = $parent_module_bean->module_name;
        $action_module_bean->parent_id = $parent_module_bean->id;

        $additional_call = clone $action_module_bean;
        $additional_call->status = 'Planned';

        $scheduled_call_datetime_timestamp = strtotime($args['fields']['date_entered']);

        $formated_start_date = date("m/d/Y h:ia", $scheduled_call_datetime_timestamp);
        $additional_call->date_start = $formated_start_date;

        $link_name = strtolower($action_module_bean->module_dir);

        if (array_key_exists('save_only_follow_up_call_checkbox', $args['fields'])
            && !$args['fields']['save_only_follow_up_call_checkbox']
        ) {

            $action_module_bean->save();

            // cover custom relationship (for now viabl does not support this type but we will set code for the future)
            $rel = new Relationship();
            $rel_info = $rel->retrieve_by_sides($args['parent_module'], $args['action_module'], $db);

            // make sure that key exists
            if (array_key_exists('relationship_name', $rel_info)) {

                $rel_name = $rel_info['relationship_name'];

                if ($parent_module_bean->load_relationship($rel_name)) {
                    $parent_module_bean->{$rel_name}->add($action_module_bean->id);
                }
            }

            if ($parent_module_bean->load_relationship($link_name)) {
                $parent_module_bean->{$link_name}->add($action_module_bean->id);
            }

        }

        $additional_call->save();

        if (in_array($args['parent_module'], array('Contacts', 'Leads'))) {
            if ($parent_module_bean->load_relationship($link_name)) {
                $parent_module_bean->{$link_name}->add($additional_call->id);
            }
        }

        return array('error' => false, 'message' => "{$action_module_bean->object_name} created.");
    }

}
