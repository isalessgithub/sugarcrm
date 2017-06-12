// introduce a flag that prevents multiple send email drawers from opening
var opening_drawer = false;

/**
 * Opens 'Send Email' drawer for a contact in calling mode list
 *
 * @param contact_id
 * @param prospect_list_id
 * @constructor
 */
function SendEmail(contact_id, prospect_list_id) {

    // prevent opening multiple drawers
    if (opening_drawer) {
        return;
    }

    // set the flag
    opening_drawer = true;

    // introduce the app object
    var app = window.parent.SUGAR.App;

    // show loader
    app.alert.show('open_send_email_drawer', {level: 'process'});

    // introduce the contact that email should be sent to
    var contact = app.data.createBean('Contacts', {id: contact_id});

    // retrieve the contact
    contact.fetch({

        // introduce on success callback
        success: function (contact) {

            // introduce the current user
            var user = app.data.createBean('Users', {id: app.user.get('id')});

            // fetch the user
            user.fetch({

                // introduce on success callback
                success: function (user) {

                    // close the loader
                    app.alert.dismiss('open_send_email_drawer');

                    // introduce the prepopulate email data
                    var data = {
                        to_addresses: contact,
                        related: contact,
                        bcc_addresses: user
                    };

                    // open up a 'create email' drawer
                    app.drawer.open({
                        layout: 'ms-compose',
                        context: {
                            create: true,
                            module: 'Emails',
                            prepopulate: data,
                            prospect_list_id: prospect_list_id
                        }
                    });

                    // reset the flag
                    opening_drawer = false;
                }
            });
        },

        // introduce on error callback
        error: function (error) {

            app.alert.dismiss('open_send_email_drawer');

            // display error message
            app.alert.show('send_email_drawer_error', {
                level: 'error',
                messages: 'An error occurred while retrieving contact. Please refresh the page and try again.'
            });

            console.log(error);
        }
    });

}
