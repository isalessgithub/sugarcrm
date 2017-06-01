({
    extendsFrom: 'BaseEmailsComposeView',

    render: function (options) {

        // introduce reference to this
        var self = this;

        // call parent
        self._super('render', [options]);
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
    // saveModel: function (status, pendingMessage, successMessage, errorMessage) {
    //
    //     var self = this;
    //
    //     var myURL;
    //     var sendModel = this.initializeSendEmailModel();
    //
    //     this.setMainButtonsDisabled(true);
    //
    //     app.alert.show('mail_call_status', {
    //         level: 'process',
    //         title: pendingMessage
    //     });
    //
    //     sendModel.set('status', status);
    //
    //     myURL = app.api.buildURL('EontekMail/send-email');
    //
    //     app.api.call('create', myURL, sendModel, {
    //
    //         success: function () {
    //
    //             app.alert.dismiss('mail_call_status');
    //
    //             app.alert.show('mail_call_status', {
    //                     autoClose: true,
    //                     level: 'success',
    //                     messages: successMessage
    //                 }
    //             );
    //             app.drawer.close(sendModel);
    //
    //             var email_id = self.model.get('parent_id')
    //
    //             // fire click event to re-render email detail view
    //             $('div[data-email-id=' + email_id + ']').click();
    //
    //         },
    //         error: function (error) {
    //             var msg = {level: 'error'};
    //             if (error && _.isString(error.message)) {
    //                 msg.messages = error.message;
    //             }
    //             app.alert.dismiss('mail_call_status');
    //             app.alert.show('mail_call_status', msg);
    //         },
    //         complete: _.bind(function () {
    //             if (!this.disposed) {
    //                 this.setMainButtonsDisabled(false);
    //             }
    //         }, this)
    //     });
    // },


})
