({
    plugins: ['EllipsisInline'],
    configuration: [],
    currentConfiguration: '',
    location: '',
    buttons: {},
    button_data: {},
    _htmleditor: null,
    html_element: [],
    // mk: global settings (e.g. should 'action' be added to description, etc.)
    settings: [],

    events: {
        'click .telesales_disposition': 'handleTelesales',
        'click .save-telesales': 'saveTelesale'
    },

    /**
     * Initialize field
     *
     * @param options
     */
    initialize: function (options) {

        // run parent init
        this._super('initialize', [options]);

        // get context and module name
        var context = options.view.context,
            module = context.get("module");

        // fetch configuration from field definition (field types)
        if (options.def.configuration) this.configuration = options.def.webservice;
        else {
            this.configuration = this.model.fields[options.def.name].webservice;
        }
        this.location = this.model.module;

        var self = this;

        // go trough each field type
        $.each(this.configuration, function (index, configuration) {

            self.currentConfiguration = configuration;

            self.getWebService();
        });
    },

    /**
     * Fetches and caches configuration for current button type
     */
    getWebService: function () {

        var parent = (_.isEmpty(this.context.parent)) ? this.model.module : this.context.parent.attributes.module;

        // init viabl cacher
        EontekCache.sugarRequest({
            type: 'get',
            url: 'Teleseller/web-service/' + this.currentConfiguration + '/' + this.model.module + '/' + parent,
            data: null,
            success: this._successCallback,
            error: this._errorCallback,
        }, this)
    },

    /**
     * Success callback for viabl cacher
     *
     * @param response
     * @private
     */
    _successCallback: function (response) {

        // mk: set retrieved settings
        // (will be assigned after every call that fetches buttons, but there's no other way of doing this at the moment)
        this.settings = response.settings;

        // TODO: implement
        // TODO: we will need to handle each "field" separately

        this.displayButtons(response);
    },

    /**
     * Error callback for viabl cacher
     *
     * @param error
     * @private
     */
    _errorCallback: function (error) {
        // TODO: implement
    },

    _openEmailDrawer: function (event) {

        event.preventDefault();

        var element = this.html_element = $(event.target).parents('a').first();

        this.button_data = {
            template_id: element.attr('data-email-tempate-id'),
            type: element.attr('data-type'),
            module_name: this.model.module,
            record_id: this.model.get('id'),
            view: this.view.name,
        };

        var self = this;

        self._htmleditor = null;

        app.alert.show('loading', {level: 'process', messages: 'Loading...', autoClose: false});

        app.api.call('create', app.api.buildURL('VBL_Viabl/disposition-email/send-data'), this.button_data, {
            success: function (response) {

                if (!response.error) {
                    var html = response.data;

                    var modal = $(html);

                    var context = {
                        module: 'VBL_Viabl',
                        button_data: html,
                        field_controller: self,
                        element: element,
                    };


                    // modal.modal("show");
                    app.drawer.open({
                        layout: 'disposition-drawer',
                        context: context,
                    });

                    // TODO: figure out how to avoid timeout - event on shown (modal docs) is not working!
                    setTimeout(function () {

                        // set event
                        $('.send-email').on('click', function (event) {
                            self.emailDisposition(event);
                        });
                    }, 1000);
                }
            }
        });
    },

    /**
     * Placeholder function that will call secondary_indicators that will be displayed
     *
     * @param config
     */
    displayButtons: function (config) {

        // check if field type is email disposition
        if (this.inArray('telesales_disposition', this.configuration)) {

            this.displayButton(config)
        }
    },

    /**
     * Display button group
     *
     * @param config
     */
    displayButton: function (config) {
        if (!config) {
            return;
        }

        var self = this;

        // define container for buttons
        self.buttons[self.configuration] = [];

        // build each button under button type
        $.each(config[self.configuration], function (key, conf) {

            self.buttons[self.configuration].push({
                data_icon: conf.icon,
                popup_enabled: conf.popup_enabled,
                module_fields: conf.module_fields,
                popup_configuration: conf.popup_configuration,
                popup_fields: conf.popup_fields,
                module: conf.module,
                name: conf.name,
                enabled: conf.enabled,
                data_send_type: conf.style, // todo: is this used?
                class: self.currentConfiguration,
            });
        });

        // render group buttons separately
        self.button = self.buttons[self.configuration]

        self.render();
    },

    /**
     * Load Field Template
     *
     * @private
     */
    _loadTemplate: function () {
        this.template = app.template.getField(this.type, 'eontek-web-service', this.model.module);
    },

    /**
     * Helper function to check if element is in array
     *
     * @param value
     * @param array
     * @returns {boolean}
     */
    inArray: function (value, array) {
        return array.indexOf(value) > -1;
    },

    /**
     * Generate Telesales dispositin view and populate it (if popup is enabled)
     * If popup is disabled save and relate Telesales disposition record (Call, Meeting etc.)
     *
     * @param event
     */
    handleTelesales: function (event) {

        // prevent default
        event.preventDefault();

        // mk: interestingly enough, some devices will recognise the link (which wraps the image) as the event target.
        // other ones recognise the image as the target. determine the clicked element.
        if ($(event.target).parents('a').first().length == 0) {

            // since clicked element doesn't have link as parent, it's link itself (target is link)
            var element = this.html_element = $(event.target).first();
        }
        else {

            // clicked element has link as parent (target is image)
            var element = this.html_element = $(event.target).parents('a').first();
        }

        // build data
        this.button_data = {
            template_id: element.attr('data-email-tempate-id'),
            type: element.attr('data-type'),
            title: element.attr('title'),
            action_module: element.attr('data-module'),
            popup_configuration: element.attr('data-popup-configuration'),
            module_fields: element.attr('data-module-fields'),
            popup_enabled: element.attr('data-popup'),
            module_name: this.model.module,
            record_id: this.model.get('id'),
            view: this.view.name,
            parent_module: this.module,
            parent_id: this.model.get('id')
        };

        // introduce reference to this
        var self = this;

        // display processing msg
        app.alert.show('loading', {level: 'process', messages: 'Sending...', autoClose: false});

        // mk: add settings to passed data
        this.button_data.settings = this.settings;

        // call backend service
        app.api.call('create', app.api.buildURL('Teleseller/disposition-telesales/send-data'), this.button_data, {

            // introduce on success callback
            success: function (response) {

                // remove processing msg
                app.alert.dismiss('loading');

                // make sure that we did not get error
                if (!response.error) {

                    if (self.button_data.popup_enabled == 'off' || self.button_data.popup_configuration.length <= 2) {

                        // show success message
                        app.alert.show('success', {level: 'success', messages: response.message, autoClose: true});
                    }
                    else {

                        // get data
                        var html = response.data;

                        // build context
                        var context = {
                            module: 'VBL_Viabl',
                            button_data: html,
                            field_controller: self,
                            element: element,
                        };

                        // open drawer
                        app.drawer.open({
                            layout: 'disposition-drawer',
                            context: context,
                        });

                        // TODO: figure out how to avoid timeout - event on shown (modal docs) is not working!
                        setTimeout(function () {

                            // set event
                            $('.save-telesales').on('click', function (event) {
                                self.saveTelesale(event);
                            });
                        }, 1000);
                    }
                }
            }
        });
    },

    /**
     * Saves Talesales drawer data
     *
     * @param event
     */
    saveTelesale: function (event) {

        // prevent default behavior
        event.preventDefault();

        // init data var
        this.data = {};
        this.data.fields = {};

        // save this
        var self = this;

        // get all inputs from form
        var inputs = $('form').find('input');

        // get all textareas from form
        var textareas = $('form').find('textarea');

        // get hidden fields
        var hiden = $('.control-group.hide').find('input');

        // get all enums
        var enums = $('form').find('select');

        // go trough eact imput from form
        $.each(inputs, function (key, input) {

            if ($(input).attr('type') == 'checkbox') {

                self.data.fields[$(input).attr('id')] = input.checked;
            }
            else {
                // build input data
                self.data.fields[$(input).attr('id')] = $(input).val();
            }
        });

        // g troug each textare from form
        $.each(textareas, function (key, textarea) {

            // build data
            self.data.fields[$(textarea).attr('id')] = $(textarea).val();
        });

        $.each(hiden, function (key, hide_input) {

            // build data
            self.data[$(hide_input).attr('id')] = $(hide_input).val();
        });

        $.each(enums, function (key, enum_field) {

            // build data
            self.data.fields[$(enum_field).attr('id')] = $(enum_field).val();
        });

        // mk: set the settings
        self.data.settings = this.settings;

        // call backend service to save data
        app.api.call('create', app.api.buildURL('Teleseller/disposition-telesales/save-data'), self.data, {

            success: function (response) {

                // remove processing msg
                app.alert.dismiss('loading');

                // handle success or error
                if (response && response.error) {

                    // display error
                    app.alert.show('error', {level: 'error', messages: response.message, autoClose: false});
                }
                else {
                    // close drawer
                    app.drawer.close();

                    // show success message
                    app.alert.show('success', {level: 'success', messages: response.message, autoClose: true});
                }
            }
        });
    }


})
