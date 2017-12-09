({

    extendsFrom: 'RecordView',

    events: {
        'change select[name=country]': 'render'
    },

    // introduce a var that keeps track of initial field change
    // (that happens on first render, although the field has not been changed)
    initialFieldChange: true,

    initialize: function (options) {

        // call parent
        this._super('initialize', [options]);

        // add listener to sales rep field change
        this.model.on('change:atc_clientsalesreps_atc_appointments_name', this.setClientSalesRepEmail, this);
    },

    /**
     * Sets client sales rep's email once it's changed
     */
    setClientSalesRepEmail: function () {

        // introduce reference to this
        var self = this;

        // make sure that client sales rep was actually changed
        // (the field is 'changed' on initialisation from empty to value that it had)
        if (self.initialFieldChange) {

            // set the flag so the next change is not considered 'initial'
            self.initialFieldChange = false;

            return;
        }

        // remove the previous rep's email
        self.model.set('sales_rep_email_c', '');

        // introduce the selected rep's id
        var sales_rep_id = this.model.get('atc_clientsalesreps_atc_appointmentsatc_clientsalesreps_ida');

        // introduce the sales rep bean
        var filter_object = app.data.createBean('ATC_ClientSalesReps', {id: sales_rep_id});

        // retrieve the sales rep bean
        filter_object.fetch({

            // introduce on success callback
            success: function (sales_rep) {

                // introduce the rep's email
                var email = sales_rep.get('email1');

                // set the email to 'Sales Rep Email' field
                self.model.set('sales_rep_email_c', email);
            },

            // introduce on error callback
            error: function (error) {

                // todo
            }

        });

    },
/*
    saveClicked: function () {


        // introduce reference to this
        var self = this;

        // call parent
        self._super('saveClicked');

        // introduce the appointment status
        var status = self.model.get('appointment_status');

        // get fields that need to be validated
        var allFields = this.getFields(this.module, this.model);
        var fieldsToValidate = {};
        for (var fieldKey in allFields) {
            if (app.acl.hasAccessToModel('edit', this.model, fieldKey)) {

                _.extend(fieldsToValidate, _.pick(allFields, fieldKey));
            }
        }

        // check if appointment has any of required statuses disabled
        if ($.inArray(status, ['Attended', 'DC_Appt_Attended', 'Attended_Policy']) !== -1) {
            // todo: set the right field
            // legacy logic was marking clientrep_email1_c as required
            fieldsToValidate.clientrep_email1_c.required = true;

        } else {

            fieldsToValidate.clientrep_email1_c.required = false;
        }

        //this.model.doValidate(fieldsToValidate, _.bind(this.validationComplete, this));
    },

*/
})
