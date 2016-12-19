({
    // CustomDashboard-headerpane View (base) 

    extendsFrom: 'DashboardHeaderpaneView',

     initialize: function(options) {
          this._super('initialize', [options]);
     },

    /**
     * Show/hide buttons depending on the state defined for each buttons in the metadata
     * @param state
     */
    setButtonStates: function(state) {

        this.currentState = state;
        var self = this;

        var user = app.data.createBean('Users', {id: app.user.id});
        user.fetch({
                showAlerts: false,
                success: function(userLoaded) {
                    self.checkBlockUser(userLoaded, state);
                }
            });

        this._super('setButtonStates', ['synoHidden']);
    },
    checkBlockUser: function(user, state){
        // BOF SYNOLIA
        if (!_.isUndefined(user.get('synodt_block_dashboards_c')) && user.get('synodt_block_dashboards_c') === 'bool_true') {
            _.each(this.buttons, function(field) {
                field.hide();
            }, this);
        } else {
            // EOF SYNOLIA
            _.each(this.buttons, function(field) {
                var showOn = field.def.showOn;
                if (_.isUndefined(showOn) || (showOn === state)) {
                    field.show();
                } else {
                    field.hide();
                }
            }, this);
            // BOF SYNOLIA
        }
        // EOF SYNOLIA
    }
})
