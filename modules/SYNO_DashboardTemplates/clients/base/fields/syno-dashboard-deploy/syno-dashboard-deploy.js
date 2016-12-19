({
     extendsFrom: 'RowactionField',
     initialize: function(options) {
        this._super('initialize', arguments);
        this.type = 'rowaction';

        this.model.on('sync', this._render, this);
          
     },
    _render: function() {
      if (this.model.get("flag_data")) {
        this._super('_render', arguments);
      }
    },
     rowActionSelect: function() {
        var self = this;

        app.alert.show('SYNO_DashboardTemplates_load_data', {
            level: 'confirmation',
            messages: app.utils.formatString(app.lang.get('LBL_LOAD_DATA_DEPLOY_TEXT', 'SYNO_DashboardTemplates')),
            onConfirm: function() {
              app.drawer.open({
                  layout: 'syno-deploy',
                  context: {
                      module: 'Users',
                      recLink: 'true',
                  }
              }, function(mass_collection) {
                  if (!mass_collection) {
                      return;
                  }
                  var url;
                  url = app.api.buildURL('SYNO_DashboardTemplates','deployDashboardData', null, { "record": self.model.get('id'), "users" : mass_collection.pluck('id')});
                  app.api.call('create', url, null, {
                    success: function(data) {
                        app.alert.dismiss('syno_dashboardtemplates_users_deploy_loading');
                        if (data['response'] == 'too_many_users') {
                          app.alert.show('synodashboardtemplate', {  level: 'error', 
                                                            title: app.lang.get('LBL_SYNO_DASHBOARD_TOO_MANY_USERS', 'SYNO_DashboardTemplates'), 
                                                            autoClose: false});  
                        }
                        else if(data['response'] == 'success') {
                          app.alert.show('synodashboardtemplate', {  level: 'info', 
                                                              title: app.lang.get('LBL_SYNO_DASHBOARD_DATA_DEPLOYED', 'SYNO_DashboardTemplates'), 
                                                              autoClose: true});
                          var synoPanel = _.find( self.context.children, 
                            function(child){ 
                              return child.get('isSubpanel') && child.get('link') == 'syno_dashboardtemplatehistory_syno_dashboardtemplates'; 
                            }
                          );
                          synoPanel.parent.trigger("subpanel:reload", {links:['syno_dashboardtemplatehistory_syno_dashboardtemplates']});
                        }
                    },
                    error: _.bind(function() {
                        app.alert.dismiss('syno_dashboardtemplates_users_deploy_loading');
                        app.alert.show('synodashboardtemplate', {  level: 'error', 
                                                            title: app.lang.get('LBL_SYNODASHBOARDTEMPALTES_ERROR', 'SYNO_DashboardTemplates'), 
                                                            autoClose: true});
                    }, this),
                  });
              });
            }
        });
     },
})