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
(function(app){app.events.on('app:init',function(){app.plugins.register('SearchForMore',['field'],{addSearchForMoreButton:function($el){var $button=$('<div/>').addClass('select2-result-label').attr('name','search_for_more').html(app.lang.get('LBL_SEARCH_FOR_MORE',this.module));$el.on('select2-open',_.bind(function(){var $dropdown,$result;$dropdown=$el.select2('dropdown');if($dropdown.find('[name=search_for_more]').length===0){$result=$('<li class="select2-result">').append($button).mousedown(_.bind(function(){$el.select2('close');this.searchForMore($el);},this));$dropdown.append($('<ul class="select2-results">').append($result));}},this));},searchForMore:function($el){var layout,module,modules;if(!_.isUndefined(this.def.links)){layout='selection-list-module-switch';modules=_.chain(this.def.links).map(function(link){return app.data.getRelatedModule(this.module,link);},this).value();module=_.first(modules);}else{layout='selection-list';module=this.module;modules=[module];}
app.drawer.open({layout:layout,context:{module:module,filterList:modules}},function(model){if(model){$el.data('select2').triggerChange({added:{attributes:model}});}});}});});})(SUGAR.App);