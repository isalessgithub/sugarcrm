({
    className: 'preview-duplicate-bean',

    extendsFrom: 'BaseView',

    duplicate_module: null,
    duplicate_bean: null,
    view_metadata: null,

    duplicate_bean_data: {},

    duplicate_bean_module: null,

    // define events
    events: {
        'click a[name="close_button"]': 'closePreview'
    },

    /**
     * Initialize method
     *
     * @param options
     */
    initialize: function (options) {

        // introduce reference to this
        var self = this;

        self.context = options.context;

        // call parent
        self._super('initialize', [options]);

        // set buttons (that are defined in view)
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

        // introduce duplicate's bean data
        self.duplicate_bean = self.context.get('duplicate_bean');

        // introduce duplicate's module
        self.duplicate_module = self.context.get('duplicate_module');

        // introduce record view metadata
        self.view_metadata = self.context.get('view_metadata');

        // iterate trough view metadata
        $.each(self.view_metadata, function (section, section_data) {

            // ignore buttons section
            if (section == 'buttons') {
                return true;
            }

            // make sure that this is panels section
            if (section == 'panels') {

                // iterate trough panels
                $.each(section_data, function (index, panel_data) {

                    // iterate trough panel's fields
                    $.each(panel_data.fields, function (index, field_data) {

                        // introduce the field's name
                        var field_name = field_data.name;

                        // make sure that field name is set
                        if (typeof field_name == 'undefined') {
                            return true;
                        }

                        // ignore some fields
                        if (['picture', 'favorite', 'follow', 'title'].indexOf(field_name) != -1) {
                            return true;
                        }

                        // introduce the value of the field
                        var value = self.duplicate_bean[field_name];

                        // make sure that field exists in bean data
                        if (typeof value == 'undefined') {
                            return true;
                        }

                        var email = '';

                        // check if the field is email
                        if (field_name == 'email') {

                            // iterate trough all emails
                            $.each(value, function (index, email_data) {

                                // append email
                                email += email_data.email_address + ' '
                            })
                        }

                        // set the field's data
                        self.duplicate_bean_data[field_name] = {
                            label: app.lang.get(field_data.label, self.duplicate_module),
                            value: email || value
                        };

                    });
                });
            }
        });

        app.alert.dismissAll();
    },

    /**
     * Closes the drawer
     */
    closePreview: function () {

        // close error notifications (if any is displayed)
        app.alert.dismissAll();

        // close drawer
        app.drawer.close();
    }

})