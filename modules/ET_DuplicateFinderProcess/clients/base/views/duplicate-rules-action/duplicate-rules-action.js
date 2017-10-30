({
    className: 'duplicate-rules-action',

    extendsFrom: 'BaseView',

    /**
     * Contains proccess module
     */
    process_module: '',

    /**
     * Contains json string
     */
    process_configuration_string: '',

    /**
     * Contains configuration
     */
    process_configuration: [],

    config_fields: [],

    render_fields: {},

    list_of_fields: [],

    values_to_add: [],

    processBean: null,

    processId: '',

    licenseValid: false,

    // introduce 'parent' view - action buttons
    that: null,

    // object that will hold rule views
    rules: {},

    events: {
        'click a[name="cancel_button"]': 'duplicateRulesCancel',
        'click a[name="add_new_rule"]': 'addRule',
        'click .rule-remove': 'removeRule',
        'click a[name="save_button"]': 'saveConfiguration'
    },

    /**
     * Initialize method
     *
     * @param options
     */
    initialize: function (options) {

        var self = this;

        self.rules = {};

        // for some strange reason
        self.values_to_add = [];

        self.context = options.context;

        // make sure that model is set
        if (_.isUndefined(self.model)) {
            self.model = options.context.get('model');
        }

        // introduce 'that' view (process actions - field with action buttons)
        self.that = options.context.get('this');

        // make sure that model was passed
        if (self.model.get('id').length > 0) {

            // get process module (we will need this to fetch fields dropdown)
            self.process_module = this.model.get('eontek_module_name');

            // get existing configuration
            self.process_configuration_string = this.model.get('rules_configuration');
        }

        // make sure that we have configuration
        if (!_.isUndefined(self.process_configuration_string) && self.process_configuration_string.length > 0) {

            // parse json
            self.process_configuration = JSON.parse(self.process_configuration_string);
        }


        self.options.meta = _.extend({}, app.metadata.getView(null, 'duplicate-rules-action'), options.meta);

        self._super('initialize', [options]);

        self.buttons = self.options.meta.buttons;
    },

    /**
     * Closes the drawer
     */
    duplicateRulesCancel: function () {

        this.values_to_add = [];

        // close drawer
        app.drawer.close();
    },

    /**
     * Fetches existing configuration and populates drawer
     */
    populateExistingData: function () {
        var self = this;

        self.config_fields = [];

        // go trough each config
        if (this.process_configuration !== "") {

            var eontekBean = app.data.createBean(self.model.get('eontek_module_name'), {});

            $.each(this.process_configuration, function (config_index, configuration) {
                self.config_fields[config_index] = [];


                var field = Object.keys(configuration)[0];
                var operation = Object.keys(configuration[field])[0];
                var value = configuration[field][operation];

                if (eontekBean.fields[Object.keys(configuration)[0]].dbType == "id") {

                    var fieldName = eontekBean.fields[Object.keys(configuration)[0]].group;

                    var relatedToEontekBean = app.data.createBean(eontekBean.fields[fieldName].module, {id: value});
                    relatedToEontekBean.fetch({
                        success: function (relatedModel) {
                            var valueName = relatedModel.get('name');
                            var rule = {
                                eontek_module_name: self.model.get('eontek_module_name'),
                                eontek_field: {fieldId: field, fieldName: fieldName},
                                eontek_operation: operation,
                                eontek_value: {valueId: value, valueName: valueName}
                            };

                            self.addRuleView(Date.now(), rule);
                        }
                    });

                }
                else {

                    var rule = {
                        eontek_module_name: self.model.get('eontek_module_name'),
                        eontek_field: field,
                        eontek_operation: operation,
                        eontek_value: value
                    };

                    self.addRuleView(Date.now(), rule);

                }


            });
        }
        else {
            var rule = {
                eontek_module_name: self.model.get('eontek_module_name'),
                eontek_field: '',
                eontek_operation: '',
                eontek_value: ''
            };

            self.addRuleView(Date.now(), rule);
        }
    },

    loadData: function () {
        var self = this;

        // call check license function that returns promise
        self.checkLicense().then(function (response) {

            var that = this;

            // check the status of report
            if (response.status) {
                that.render();
                that.populateExistingData();
            }
            else {
                // initialise empty variable that will hold message block
                var invalidLicenseMsg = $();
                // initialise counter
                var counter = 5;
                // add title to message object
                invalidLicenseMsg = invalidLicenseMsg.add($('<h3></h3>').text(response.msg.title));
                // add description to message object
                invalidLicenseMsg = invalidLicenseMsg.add($('<p></p>').text(response.msg.description));
                // add countdown to message object
                invalidLicenseMsg = invalidLicenseMsg.add($('<p class="lead"></p>').text(response.msg.countdown).append($('<strong class="redirect-counter"> ' + counter + '</strong>')));
                // append message block to div
                that.$('.invalid-license').append(invalidLicenseMsg);
                // start counter
                var counterInterval = setInterval(function () {
                    // decrement counter
                    counter--;
                    // check if the counter has reached 0
                    if (counter == 0) {
                        // clear interval function
                        clearInterval(counterInterval);
                        // redirect user to license validation page
                        window.location = '#bwc/index.php?module=ET_DuplicateFinderProcess&action=license';
                    }
                    else {
                        // set the value of the counter
                        $('.redirect-counter').text(' ' + counter);
                    }
                }, 1000);
            }

            // bind 'self' to the anonymous function so that the view can be available inside of it
        }.bind(self)).catch(function () {
            // handle error
        }.bind(self));
    },

    addRule: function (event) {

        var rule = {
            eontek_module_name: this.model.get('eontek_module_name'),
            eontek_field: '',
            eontek_operation: '',
            eontek_value: ''
        };

        this.addRuleView(Date.now(), rule);
    },

    addRuleView: function (ruleIndex, rule) {
        var self = this;

        // create rule
        self.rules[ruleIndex] = app.view.createView({
            name: 'rule',
            meta: {
                rule: rule,
                ruleIndex: ruleIndex
            }
        });
        self.$('#rules').append(self.rules[ruleIndex].$el);
        self.rules[ruleIndex].render();
    },

    // Remove rule from the configuration
    removeRule: function (event) {
        // get id of rule that is about to be deleted
        var ruleIndex = event.target.getAttribute("data-rule-index");
        // remove it from the DOM
        this.$('[data-rule-id="' + ruleIndex + '"]').remove();
        // delete it from the object
        delete this.rules[ruleIndex];
    },

    // Save entered configuration
    saveConfiguration: function (event) {

        var self = this;

        // configuration can't be saved if there are no rules
        if (_.isEmpty(self.rules)) {
            return;
        }

        // display message that configuration is being saved
        app.alert.show('configuration-saving', {
            level: 'process',
            title: app.lang.get('LBL_CONFIGURATION_IS_BEING_SAVED', 'ET_DuplicateFinderProcess')
        });

        // error flag
        var errors = false;

        // introduce array that will store rules
        var rules = [];

        // go trough all rules
        $.each(this.rules, function (key, val) {
            // returned rule object
            var ruleObj = val.getRuleValues();

            // if rule has errors change error flag
            if (ruleObj == false) {
                errors = true;
            } else {
                // add rule to the array of rules
                rules.push(ruleObj);
            }
        }.bind(self));

        if (errors) {
            // dismiss configuration saving message
            app.alert.dismiss('configuration-saving');
            // display invalid configuration error
            app.alert.show('configuration-saving-error', {
                level: 'error',
                title: app.lang.get('LBL_CONFIGURATION_NOT_FILLED_OUT', 'ET_DuplicateFinderProcess'),
                autoClose: true
            });
        }
        else {

            // check if there is bean
            if (self.processBean === null) {
                // create bean in case bean does not exists
                var bean = app.data.createBean('ET_DuplicateFinderProcess', {id: self.model.id});
                // fetch bean data
                bean.fetch({
                    success: function (processModel) {
                        self.processBean = processModel;
                        // call saving bean function
                        self.saveProcessBean(rules);
                    }
                });
            }
            else {
                // call saving bean function
                self.saveProcessBean(rules);
            }

        }
    },

    saveProcessBean: function (rules) {
        var self = this;

        // convert configuration to json string
        self.processBean.set('rules_configuration', JSON.stringify(rules));

        self.processBean.save({}, {
            success: function (record) {
                // dismiss configuration saving message
                app.alert.dismiss('configuration-saving');
                app.alert.show('configuration-saved', {
                    level: 'success',
                    messages: app.lang.get('LBL_CONFIGURATION_WAS_SAVED', 'ET_DuplicateFinderProcess'),
                    autoClose: true
                });

                // debugger;
                //
                // self.that.model.attributes.active = 'no';

                // close the drawer and pass the just saved process bean
                app.drawer.close(record, self.that);
            },
            error: function (error) {
                // dismiss configuration saving message
                app.alert.dismiss('configuration-saving-bean-error');
                // display saving bean error
                app.alert.show("server-error", {
                    level: 'error',
                    messages: 'ERR_GENERIC_SERVER_ERROR',
                    autoClose: false
                });

                // "Handles http errors returned from AJAX calls."
                app.error.handleHttpError(error);
            }
        });
    },

    checkLicense: function () {

        var self = this;

        // define promise that will be returned
        return new Promise(function (resolve, reject) {
            // send get request to custom endpoint that is used for checking license validity
            app.api.call('get', app.api.buildURL('ET_DuplicateFinderProcess', 'checkLicense'), null, {
                // if the call was successful
                success: function (response) {
                    // check if the license is valid
                    if (response.success) {
                        // set flag to true
                        self.licenseValid = true;
                        // resolve
                        resolve({status: true});
                    }
                    else {
                        // set flag to false
                        self.licenseValid = false;
                        // return resolve with error messages
                        resolve({status: false, msg: response.message});
                    }
                },
                error: function (error) {
                    // display sugar error
                    app.alert.show("server-error", {
                        level: 'error',
                        messages: 'ERR_GENERIC_SERVER_ERROR',
                        autoCLose: false
                    });
                    app.error.handleHttpError(error);
                    // set license flag to false
                    self.licenseValid = false;
                    // return resolve with status false
                    resolve({status: false});
                }
            });
        });

    }

})