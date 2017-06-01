// introduce a flag that prevents multiple send email drawers from opening
var opening_drawer = false;

/**
 * Opens 'Send Email' drawer for a contact in calling mode list
 */
function SendEmail(contact_id) {

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

            // close the loader
            app.alert.dismiss('open_send_email_drawer');

            // introduce the prepopulate email data
            var data = {
                to_addresses: contact,
                related: contact
            };
            
            // open up a 'create email' drawer
            app.drawer.open({
                layout: 'ms-compose',
                context: {
                    create: true,
                    module: 'Emails',
                    prepopulate: data
                }
            });

            // reset the flag
            opening_drawer = false;
        },

        // introduce on error callback
        error: function (error) {

            // display error message
            app.alert.show('send_email_drawer_error', {
                level: 'error',
                messages: 'An error occurred while retrieving contact. Please refresh the page and try again.'
            });

            console.log(error);
        }
    });

}
