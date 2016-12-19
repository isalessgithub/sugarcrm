/*
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement ("MSA"), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright  2004-2013 SugarCRM Inc.  All rights reserved.
 */
({
    extendsFrom: 'HeaderpaneView',
    initialize: function(options) {
        this._super('initialize', [options]);
    },
    _renderHtml: function() {
        var titleTemplate = Handlebars.compile(app.lang.getAppString('LBL_SEARCH_AND_SELECT')),
            moduleName = app.lang.get('LBL_MODULE_NAME', this.module);
        this.title = titleTemplate({
            module: moduleName
        });
        this._super('_renderHtml');
        this.layout.on('selection:closedrawer:fire', function() {
            app.drawer.close();
        }, this);
       this.layout.on('selection:link:fire', function() {
            app.alert.show('syno_dashboardtemplates_users_deploy_loading',{level:'process',title:app.lang.getAppString('LBL_LOADING')});
            app.drawer.close(this.context.get('mass_collection'));
       });
    },
})