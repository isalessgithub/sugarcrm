/*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({extendsFrom:'FlexListView',plugins:['ListColumnEllipsis','ListDisableSort','ListRemoveLinks','Pagination'],collectionSync:null,additionalTableClasses:null,initialize:function(options){var dupeListMeta=app.metadata.getView(null,'dupecheck-list')||{},moduleMeta=app.metadata.getView(options.module,'dupecheck-list')||{};options.meta=_.extend({},dupeListMeta,moduleMeta,options.meta||{});this._super('initialize',[options]);this.context.on('dupecheck:fetch:fire',this.fetchDuplicates,this);},bindDataChange:function(){this.collection.on('reset',function(){this.context.trigger('dupecheck:collection:reset');},this);this._super('bindDataChange');},_renderHtml:function(){var classesToAdd='duplicates highlight';this._super('_renderHtml');if(this.additionalTableClasses){classesToAdd=classesToAdd+' '+this.additionalTableClasses;}
this.$('table.table-striped').addClass(classesToAdd);},fetchDuplicates:function(model,options){this.collection.dupeCheckModel=model;this.collection.fetch(options);}})