({
    className: 'duplicate-rules-action',

    extendsFrom: 'BaseView',

    process_configuration_string: null,

    process_configuration: null,

    process_module: null,

    // introduce 'parent' view - action buttons
    that: null,

    // introduce datetime fields array
    // (these will be used to set up auto merge rules)
    datetime_fields: [],

    // introduce auto merge rules options (older, newer)
    rules_options: [],

    // define events
    events: {
        'click a[name="cancel_button"]': 'cancelEnablingAutomerge',
        'click a[name="enable_automerge"]': 'enableAutomerge'
    },

    /**
     * Initialize method
     *
     * @param options
     */
    initialize: function (options) {

        // introduce reference to this
        var self = this;

        // set context (ET_DuplicateFinderProcess)
        self.context = options.context;

        // make sure that model is set
        if (_.isUndefined(self.model)) {

            // set passed model as this model (current ET_DuplicateFinderProcess bean)
            self.model = options.context.get('model');
        }

        // introduce 'that' view (process actions - field with action buttons)
        self.that = options.context.get('this');

        // make sure that model was passed (and set)
        if (self.model.get('id').length > 0) {

            // get process module (we will need this to fetch fields dropdown)
            self.process_module = self.model.get('eontek_module_name');

            // get existing configuration
            self.process_configuration_string = self.model.get('rules_configuration');
        }

        // make sure that we have configuration
        if (!_.isUndefined(self.process_configuration_string) && self.process_configuration_string.length > 0) {

            // parse json
            self.process_configuration = JSON.parse(self.process_configuration_string);
        }

        // set meta (?)
        self.options.meta = _.extend({}, app.metadata.getView(null, 'duplicate-rules-action'), options.meta);

        // call parent
        self._super('initialize', [options]);

        // set buttons (that are defined in view - enable-automerge-action.php)
        self.buttons = self.options.meta.buttons;
    },

    /**
     * Load data
     */
    loadData: function (options) {

        // introduce reference to this
        var self = this;

        // call parent
        self._super('loadData', [options]);

        // make sure that module is set
        if (self.process_module == null) {

            // show 'no module set' error
            app.alert.show('no-model-set', {
                level: 'error',
                messages: app.lang.get('NTF_NO_MODULE_SET', 'ET_DuplicateFinderProcess'),
                autoClose: false
            });

            // return
            return;
        }

        // reset values
        self.datetime_fields = [];
        self.rules_options = [];

        // set available rules options
        var rules_options = app.lang.getAppListStrings('automerge_rules_options');

        // introduce current automerge configuration
        var automerge_conf_string = self.model.get('automerge_configuration');

        // introduce current configuration object
        var configuration = automerge_conf_string ? JSON.parse(automerge_conf_string) : [];

        // iterate trough rules options
        $.each(rules_options, function (value, label) {

            // determine was this rule selected in previous configuration save
            var selected = automerge_conf_string ? configuration[0].rule == value ? true : false : false;

            // add to available rules
            self.rules_options.push({
                value: value,
                label: label,
                selected: selected
            });
        });

        // retrieve the module's fields
        var process_module_bean = app.data.createBean(self.process_module);

        // iterate trough module's fields
        $.each(process_module_bean.fields, function (field_name, field_data) {

            // make sure that field is of datetime type
            if (field_data.type == 'datetime') {

                // determine was this field selected in previous configuration save
                var selected = automerge_conf_string ? configuration[0].field == field_name ? true : false : false;

                // add to available datetime fields
                self.datetime_fields.push({
                    label: app.lang.get(field_data.vname, self.process_module),
                    id: field_data.name,
                    selected: selected
                });
            }
        });
    },

    /**
     * Enables auto merge records
     */
    enableAutomerge: function () {

        // introduce reference to this
        var self = this;

        // make sure that configuration exists
        if (self.process_configuration_string.length == 0) {

            // show 'can not save' error
            app.alert.show('no-configuration', {
                level: 'error',
                messages: app.lang.get('NTF_NO_CONFIGURATION', 'ET_DuplicateFinderProcess'),
                autoClose: false
            });

            // return
            return;
        }

        // display message that configuration is being saved
        app.alert.show('saving-automerge-configuration', {
            level: 'process',
            title: app.lang.get('LBL_CONFIGURATION_IS_BEING_SAVED', 'ET_DuplicateFinderProcess')
        });

        // introduce selected datetime field
        var datetime_field = $('#et_available_datetime_fields').val();

        // introduce selected rule
        var rule = $('#et_available_rules_options').val();

        // introduce automerge configuration
        var automerge_configuration = [{
            field: datetime_field,
            rule: rule
        }];

        // set auto merge configuration
        self.model.set('automerge_configuration', JSON.stringify(automerge_configuration));

        // set auto merge flag
        self.model.set('automerge', 'yes');

        // save the model (process bean)
        self.model.save({}, {

            // introduce on success callback
            success: function (process_bean) {

                // dismiss configuration saving message
                app.alert.dismiss('saving-automerge-configuration');

                // notify that config was saved
                app.alert.show('automerge-configuration-saved', {
                    level: 'success',
                    messages: app.lang.get('NTF_AUTOMERGE_CONFIGURATION_SAVED', 'ET_DuplicateFinderProcess'),
                    autoClose: true
                });

                // close the drawer
                // (pass the process bean back to the action buttons view!!!)
                app.drawer.close(process_bean, self.that);
            },

            // introduce on error callback
            error: function (error) {

                app.alert.dismissAll();
                app.alert.show("server-error", {
                    level: 'error',
                    messages: 'ERR_GENERIC_SERVER_ERROR',
                    autoClose: false
                });
                app.error.handleHttpError(error);
            }
        });
    },

    /**
     * Closes the drawer
     */
    cancelEnablingAutomerge: function () {

        // close error notifications (if any is displayed)
        app.alert.dismissAll();

        // close drawer
        app.drawer.close();
    }

})