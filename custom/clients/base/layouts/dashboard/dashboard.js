({
    // CustomDashboard Layout (base) 

    extendsFrom: 'DashboardLayout',

     initialize: function(options) {
          this._super('initialize', [options]);
          this.userCanEdit = false;
     },

    /**
     * Gets the empty dashboard layout template
     * and renders it to <pre><code>this.$el</code></pre>
     *
     * @private
     */
    _renderEmptyTemplate: function() {

        this.userCanEdit = false;

        var tplName = this.type || this.name,
            template = app.template.getLayout(tplName + '.dashboard-empty');
        this.$el.html(template(this));

        var self = this;

        var user = app.data.createBean('Users', {id: app.user.id});
        user.fetch({
            showAlerts: false,
            success: function(userLoaded) {
                self.userCanEdit = (_.isUndefined(userLoaded.get('synodt_block_dashboards_c')) || userLoaded.get('synodt_block_dashboards_c') !== 'bool_true');
                var tplName = self.type || self.name,
                    template = app.template.getLayout(tplName + '.dashboard-empty');
                self.$el.html(template(self));
            }
        });
    },
})
