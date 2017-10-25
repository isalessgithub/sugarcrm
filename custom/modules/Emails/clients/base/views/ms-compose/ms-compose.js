({
    extendsFrom: 'BaseEmailsComposeView',

    render: function (options) {

        // introduce reference to this
        var self = this;

        // call parent
        self._super('render', [options]);

        // make BCC addresses field visible
        // (it's hidden initially)
        self.toggleSenderOption('bcc_addresses', true);
    },

    /**
     * Overridden!
     *
     *
     * Build the backbone model to be sent to the Mail API with the appropriate status
     * Also display the appropriate alerts to give user indication of what is happening.
     *
     * @param {string} status (draft or ready)
     * @param {string} pendingMessage message to display while Mail API is being called
     * @param {string} successMessage message to display when a successful Mail API response has been received
     * @param {string} errorMessage message to display when Mail API call fails
     */
    saveModel: function (status, pendingMessage, successMessage, errorMessage) {

        var myURL;
        var sendModel = this.initializeSendEmailModel();

        if (this._hasInvalidRecipients(sendModel)) {
            app.alert.show('mail_invalid_recipients', {
                level: 'error',
                messages: app.lang.get('ERR_INVALID_RECIPIENTS', this.module)
            });
            this.setMainButtonsDisabled(false);
            return;
        }

        this.setMainButtonsDisabled(true);

        app.alert.show('mail_call_status', {
            level: 'process',
            title: pendingMessage
        });


        var ms_from_name = this.context.get('ms_from_name');
        var ms_from_address = this.context.get('ms_from_address');

        sendModel.set('status', status);

        sendModel.set('ms_from_name', ms_from_name);
        sendModel.set('ms_from_address', ms_from_address);

        myURL = app.api.buildURL('mastersolve/send-email');

	console.log(myURL);
	console.log(sendModel);

        app.api.call('create', myURL, sendModel, {

            success: function () {

                app.alert.dismiss('mail_call_status');

                app.alert.show('mail_call_status', {
                        autoClose: true,
                        level: 'success',
                        messages: successMessage
                    }
                );

                app.drawer.close(sendModel);

            },
            error: function (error) {
                var msg = {level: 'error'};
                if (error && _.isString(error.message)) {
                    msg.messages = error.message;
                }
                app.alert.dismiss('mail_call_status');
                app.alert.show('mail_call_status', msg);
            },
            complete: _.bind(function () {
                if (!this.disposed) {
                    this.setMainButtonsDisabled(false);
                }
            }, this)
        });
    },


})
