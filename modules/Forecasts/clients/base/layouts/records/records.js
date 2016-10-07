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
({isDirty:false,worksheetType:'',navigationMessage:"",initOptions:undefined,initialize:function(options){this.initOptions=options;var acls=app.user.getAcls().Forecasts,hasAccess=(!_.has(acls,'access')||acls.access=='yes');if(hasAccess){if(app.utils.checkForecastConfig()){this.syncInitData();}else{this.codeBlockForecasts('LBL_FORECASTS_MISSING_STAGE_TITLE','LBL_FORECASTS_MISSING_SALES_STAGE_VALUES');}}else{this.codeBlockForecasts('LBL_FORECASTS_ACLS_NO_ACCESS_TITLE','LBL_FORECASTS_ACLS_NO_ACCESS_MSG');}},codeBlockForecasts:function(title,msg){var alert=app.alert.show('no_access_to_forecasts',{level:'error',title:app.lang.get(title,'Forecasts')+':',messages:[app.lang.get(msg,'Forecasts')]});var $close=alert.getCloseSelector();$close.on('click',function(){$close.off();app.router.navigate('#Home',{trigger:true});});app.accessibility.run($close,'click');},loadData:function(){},bindDataChange:function(){if(!_.isUndefined(this.model)){this.collection.on('reset',function(){var lastCommit=_.first(this.collection.models);var commitDate=undefined;if(lastCommit instanceof Backbone.Model&&lastCommit.has('date_modified')){commitDate=lastCommit.get('date_modified');}
this.context.set({'currentForecastCommitDate':commitDate});},this);this.context.on('change:selectedUser',function(model,changed){var update={'selectedUserId':changed.id,'forecastType':app.utils.getForecastType(changed.is_manager,changed.showOpps)}
this.model.set(update);},this);this.model.on('change',function(){this.context.set({'currentForecastCommitDate':null},{silent:true});this.collection.fetch();},this);this.context.on('change:selectedTimePeriod',function(){this.context.set({'currentForecastCommitDate':null},{silent:true});this.collection.fetch();},this);this.context.on('forecasts:worksheet:commit',function(user,worksheet_type,forecast_totals){this.commitForecast(user,worksheet_type,forecast_totals);},this);this.context.on("forecasts:worksheet:dirty",function(type,isDirty){this.isDirty=isDirty;this.worksheetType=type;},this);this.context.on("forecasts:worksheet:navigationMessage",function(message){this.navigationMessage=message;},this);this.context.on("forecasts:user:changed",function(selectedUser,context){if(this.isDirty){app.alert.show('leave_confirmation',{level:'confirmation',messages:app.lang.get(this.navigationMessage,'Forecasts').split('<br>'),onConfirm:_.bind(function(){app.utils.getSelectedUsersReportees(selectedUser,context);},this),onCancel:_.bind(function(){this.context.trigger('forecasts:user:canceled');},this)});}else{app.utils.getSelectedUsersReportees(selectedUser,context);}},this);this.context.on('forecasts:timeperiod:changed',function(model,startEndDates){var onSuccess=_.bind(function(){this.context.set('selectedTimePeriod',model.get('selectedTimePeriod'));this._saveTimePeriodStatEndDates(startEndDates['start'],startEndDates['end']);},this);if(this.isDirty){app.alert.show('leave_confirmation',{level:'confirmation',messages:app.lang.get(this.navigationMessage,'Forecasts').split('<br>'),onConfirm:onSuccess,onCancel:_.bind(function(){this.context.trigger('forecasts:timeperiod:canceled');},this)});}else{onSuccess();}},this);}},_saveTimePeriodStatEndDates:function(startDate,endDate,doSilent)
{if(_.isUndefined(doSilent)||!_.isBoolean(doSilent)){doSilent=false;}
var userPref=app.date.convertFormat(app.user.getPreference('datepref')),systemPref='YYYY-MM-DD',dateObj={start:app.date(startDate,[userPref,systemPref]).format(systemPref),end:app.date(endDate,[userPref,systemPref]).format(systemPref)};if(!_.isUndefined(this.context)){this.context.set('selectedTimePeriodStartEnd',dateObj,{silent:doSilent});}
return dateObj;},openConfigDrawer:function(){if(app.drawer._components.length==0){app.router.navigate('Forecasts/config',{replace:true,trigger:true});}},syncInitData:function(options){var callbacks,url;options=options||{};options.success=_.bind(function(model,data,options){app.user.set(data.initData.userData);if(data.initData.forecasts_setup===0){this.openConfigDrawer();}else{this.initForecastsModule(data,options);}},this);var model=this.initOptions.context.get('model');callbacks=app.data.getSyncCallbacks('read',model,options);this.trigger("data:sync:start",'read',model,options);url=app.api.buildURL("Forecasts/init",null,null,options.params);app.api.call("read",url,null,callbacks);},initForecastsModule:function(data,options){var ctx=this.initOptions.context;ctx.once('change:selectedUser',this._onceInitSelectedUser,this);var ranges_key=app.user.lastState.buildKey('worksheet-filter','filter','ForecastWorksheets'),default_selection=app.user.lastState.get(ranges_key)||data.defaultSelections.ranges;ctx.set({currentForecastCommitDate:null,selectedTimePeriod:data.defaultSelections.timeperiod_id.id,selectedRanges:default_selection,selectedTimePeriodStartEnd:this._saveTimePeriodStatEndDates(data.defaultSelections.timeperiod_id.start,data.defaultSelections.timeperiod_id.end,true)},{silent:true});ctx.get('model').set({'selectedTimePeriod':data.defaultSelections.timeperiod_id.id},{silent:true});app.utils.getSelectedUsersReportees(app.user.toJSON(),ctx);},_onceInitSelectedUser:function(model,change){app.view.Layout.prototype.initialize.call(this,this.initOptions);this.model.set('selectedUserId',change.id,{silent:true});this.model.set('forecastType',app.utils.getForecastType(change.is_manager,change.showOpps));this.collection.sync=_.bind(this.sync,this);app.view.Layout.prototype.loadData.call(this);this.bindDataChange();if(!this.disposed)this.render();},sync:function(method,model,options){var callbacks,url;options=options||{};options.params=options.params||{};var args_filter=[],filter=null;if(this.context.has('selectedTimePeriod')){args_filter.push({"timeperiod_id":this.context.get('selectedTimePeriod')});}
if(this.model.has('selectedUserId')){args_filter.push({"user_id":this.model.get('selectedUserId')});args_filter.push({"forecast_type":this.model.get('forecastType')});}
if(!_.isEmpty(args_filter)){filter={"filter":args_filter};}
options.params.order_by='date_entered:DESC'
options=app.data.parseOptionsForSync(method,model,options);options.success=_.bind(function(model,data,options){if(!this.disposed){this.collection.reset(data);}},this);callbacks=app.data.getSyncCallbacks(method,model,options);this.collection.trigger("data:sync:start",method,model,options);url=app.api.buildURL("Forecasts/filter",null,null,options.params);app.api.call("create",url,filter,callbacks);},commitForecast:function(user,worksheet_type,forecast_totals){var forecast=new this.collection.model(),forecastType=app.utils.getForecastType(user.is_manager,user.showOpps),forecastData={};forecastData.commit_type=worksheet_type;forecastData.timeperiod_id=forecast_totals.timeperiod_id||this.context.get('selectedTimePeriod');forecastData.forecast_type=forecastType;forecast.save(forecastData,{success:_.bind(function(model,response){if(!this.disposed){this.collection.fetch();this.context.trigger("forecasts:worksheet:committed",worksheet_type,response);var msg,managerName;if(worksheet_type==='sales_rep'){if(user.is_manager){managerName=user.full_name;}else{managerName=user.reports_to_name;}}else{if(user.reports_to_id){managerName=user.reports_to_name;}}
if(managerName){msg=Handlebars.compile(app.lang.get('LBL_FORECASTS_WORKSHEET_COMMIT_SUCCESS_TO','Forecasts'))({manager:managerName});}else{msg=Handlebars.compile(app.lang.get('LBL_FORECASTS_WORKSHEET_COMMIT_SUCCESS','Forecasts'))();}
app.alert.show('success',{level:'success',autoClose:true,autoCloseDelay:10000,title:app.lang.get('LBL_FORECASTS_WIZARD_SUCCESS_TITLE','Forecasts')+':',messages:[msg]});}},this),silent:true,alerts:{'success':false}});}})