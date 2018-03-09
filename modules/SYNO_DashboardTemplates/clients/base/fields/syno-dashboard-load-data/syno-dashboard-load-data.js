({
     extendsFrom: 'RowactionField',
     initialize: function(options) {

          this.type = 'rowaction';
     },
     rowActionSelect: function() {
          var self = this;


        app.alert.show('SYNO_DashboardTemplates_load_data', {
            level: 'confirmation',
            messages: app.utils.formatString(app.lang.get('LBL_LOAD_DATA_CONFIRM_TEXT', 'SYNO_DashboardTemplates')),
            onConfirm: function() {
              app.drawer.open({
                  layout: 'selection-list',
                  context: {
                      module: 'Users',
                  }
              }, function(model) {
                  if (!model) {
                      return;
                  }
                  var url;
                  url = app.api.buildURL('SYNO_DashboardTemplates','buildDashboardData', null, { "record": self.model.get('id'), "userId" : model.id});
                  app.api.call('create', url, null, {
                    success: function(data) {
                        app.alert.show('synodashboardtemplate', {  level: 'info', 
                                                            title: app.lang.get('LBL_SYNO_DASHBOARD_DATA_LOADED', 'SYNO_DashboardTemplates'), 
                                                            autoClose: true});
                       self.model.fetch();
                    },
                    error: _.bind(function() {
                        alert("error");
                    }, this),
                  });
              });
            }
        });


     },
})