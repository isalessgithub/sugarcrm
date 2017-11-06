({

    extendsFrom: 'RecordView',

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

        // check if appointment has any of required statuses
        if ($.inArray(status, ['Attended', 'DC_Appt_Attended', 'Attended_Policy']) !== -1) {

            // todo: set the right field
            // legacy logic was marking clientrep_email1_c as required
            fieldsToValidate.clientrep_email1_c.required = true;

        } else {

            fieldsToValidate.clientrep_email1_c.required = false;
        }

        this.model.doValidate(fieldsToValidate, _.bind(this.validationComplete, this));
    },


})