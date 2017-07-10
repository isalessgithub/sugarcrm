/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/**
 * @class View.Fields.Base.Emails.SenderField
 * @alias SUGAR.App.view.fields.BaseEmailsSenderField
 * @extends View.Fields.Base.BaseField
 */
({
    fieldTag: 'input.select2',

    /**
     * @inheritdoc
     */
    initialize: function (options) {

        this._super('initialize', [options]);
        this.endpoint = this.def.endpoint;
    },

    _render: function () {

        var self = this;

        var result = app.view.Field.prototype._render.call(this);

        if (this.tplName === 'edit') {

            // introduce the prospect list's id
            var prospect_list_id = self.context.get('prospect_list_id')

            // introduce the prospect list bean
            var prospect_list = app.data.createBean('ProspectLists', {id: prospect_list_id});

            // show loader
            app.alert.show('fetch_from_data', {level: 'process'});

            // retrieve the prospect list bean
            prospect_list.fetch({

                // introduce on success callback
                success: function (prospect_list) {

                    // introduce the from name and address
                    var from_name = prospect_list.get('from_name_c');
                    var from_address = prospect_list.get('from_address_c');

                    // close the loader
                    app.alert.dismiss('fetch_from_data');

                    // make sure that email params are set
                    if (from_name == '' || from_address == '') {

                        // show the alert
                        app.alert.show('no_email_data', {
                            level: 'warning',
                            messages: "'From' Name and 'From' Address are not set on target list",
                            autoClose: false
                        });

                        return;
                    }

                    var results = [{
                        default: true,
                        display: from_name + ' (' + from_address + ')',
                        id: '123', // OE id needs to be set
                        type: 'system'
                    }];

                    // populate 'from' data
                    self.populateValues(results);

                    // set the from data to the context for later use
                    self.context.set('ms_from_name', from_name);
                    self.context.set('ms_from_address', from_address);
                },

                // introduce on error callback
                error: function (error) {

                    app.alert.dismiss('fetch_from_data');

                    // display error message
                    app.alert.show('send_email_drawer_error', {
                        level: 'error',
                        messages: 'An error occurred while retrieving target list. Please refresh the page and try again.'
                    });

                    console.log(error);
                }
            });


        }

        return result;
    },

    populateValues: function (results) {
        var self = this,
            defaultResult,
            defaultValue = {};

        if (this.disposed === true) {
            return; //if field is already disposed, bail out
        }

        if (!_.isEmpty(results)) {
            defaultResult = _.find(results, function (result) {
                return result.default;
            });

            defaultValue = (defaultResult) ? defaultResult : results[0];

            if (!this.model.has(this.name)) {
                this.model.set(this.name, defaultValue.id);
            }
        }

        var format = function (item) {
            return item.display;
        };

        this.$(this.fieldTag).select2({
            data: {results: results, text: 'display'},
            formatSelection: format,
            formatResult: format,
            width: '100%',
            placeholder: app.lang.get('LBL_SELECT_FROM_SENDER', this.module),
            initSelection: function (el, callback) {
                if (!_.isEmpty(defaultValue)) {
                    callback(defaultValue);
                }
            }
        }).on("change", function (e) {
            if (self.model.get(self.name) !== e.val) {
                self.model.set(self.name, e.val, {silent: true});
            }
        });
    },

    /**
     * @inheritdoc
     *
     * We need this empty so it won't affect refresh the select2 plugin
     */
    bindDomChange: function () {
    }
})
