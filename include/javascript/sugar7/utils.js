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
(function(app){app.events.on("app:init",function(){app.utils=_.extend(app.utils,{tooltip:{initialize:function($elements,options){options=options||{};var self=this;$elements.each(function(){var data,$element;if(!self.has(this)){$element=$(this);data=$element.data();var dir=$element.attr('dir'),tooltipTemplate=Handlebars.compile('<div class="tooltip"'+'{{#if dir}} dir="{{dir}}"{{/if}}'+'><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>');options.template=tooltipTemplate({dir:dir});$element.tooltip(_.extend({container:'body',trigger:'hover'},data,options));}});return $elements;},destroy:function($tooltips){if($tooltips){_.each($tooltips,function(tooltip){var plugin;if(this.has(tooltip)){plugin=this.get(tooltip);plugin.leave(plugin);plugin.destroy();}},this);}},show:function(element){var plugin;if(this.has(element)){plugin=this.get(element);plugin.enter(plugin);}},hide:function(element){var plugin;if(this.has(element)){plugin=this.get(element);plugin.leave(plugin);}},has:function(element){return!_.isUndefined(this.get(element));},get:function(element){return $(element).data('bs.tooltip');}},createHistoryLog:function(oldestModel,newestModel){var is_first_commit=false;if(_.isEmpty(oldestModel)){oldestModel=new Backbone.Model({best_case:0,likely_case:0,worst_case:0,date_entered:''});is_first_commit=true;}
var best_difference=this.getDifference(oldestModel,newestModel,'best_case'),best_direction=this.getDirection(best_difference),likely_difference=this.getDifference(oldestModel,newestModel,'likely_case'),likely_direction=this.getDirection(likely_difference),worst_difference=this.getDifference(oldestModel,newestModel,'worst_case'),worst_direction=this.getDirection(worst_difference),args=[],best_arrow=this.getArrowDirectionSpan(best_direction),likely_arrow=this.getArrowDirectionSpan(likely_direction),worst_arrow=this.getArrowDirectionSpan(worst_direction),num_shown=0,hb=Handlebars.compile("{{{str key module args}}}"),lang_string_key='',final_args=[],labels=[],config=app.metadata.getModule('Forecasts','config'),likely_args={changed:likely_difference!=0,show:config.show_worksheet_likely},best_args={changed:best_difference!=0,show:config.show_worksheet_best},worst_args={changed:worst_difference!=0,show:config.show_worksheet_worst};likely_args.show?num_shown++:'';best_args.show?num_shown++:'';worst_args.show?num_shown++:'';lang_string_key='LBL_COMMITTED_HISTORY_'+num_shown+'_SHOWN';if(worst_args.changed&&worst_args.show){final_args.push(this.gatherLangArgsByParams(worst_direction,worst_arrow,worst_difference,newestModel,'worst_case'));}else if(worst_args.show){final_args.push([]);}
if(likely_args.changed&&likely_args.show){final_args.push(this.gatherLangArgsByParams(likely_direction,likely_arrow,likely_difference,newestModel,'likely_case'));}else if(likely_args.show){final_args.push([]);}
if(best_args.changed&&best_args.show){final_args.push(this.gatherLangArgsByParams(best_direction,best_arrow,best_difference,newestModel,'best_case'));}else if(best_args.show){final_args.push([]);}
labels=this.getCommittedHistoryLabel(best_args,likely_args,worst_args,is_first_commit);final_args=this.parseArgsAndLabels(final_args,labels);var text=hb({'key':lang_string_key,'module':"Forecasts",'args':final_args});return{'text':new Handlebars.SafeString(text)};},gatherLangArgsByParams:function(dir,arrow,diff,model,attrStr){return{'direction':new Handlebars.SafeString(app.lang.get(dir,'Forecasts')+arrow),'from':app.currency.formatAmountLocale(Math.abs(diff)),'to':app.currency.formatAmountLocale(model.get(attrStr))};},getArrowDirectionSpan:function(directionClass){return directionClass=="LBL_UP"?'&nbsp;<i class="fa fa-arrow-up font-green"></i>':directionClass=="LBL_DOWN"?'&nbsp;<i class="fa fa-arrow-down font-red"></i>':'';},getForecastType:function(isManager,showOpps){return(!showOpps&&isManager)?'Rollup':'Direct';},getCommittedHistoryLabel:function(best,likely,worst,is_first_commit){var args=[];if(is_first_commit){args.push('LBL_COMMITTED_HISTORY_SETUP_FORECAST');}else{args.push('LBL_COMMITTED_HISTORY_UPDATED_FORECAST');}
if(worst.show){if(worst.changed){args.push('LBL_COMMITTED_HISTORY_WORST_CHANGED');}else{args.push('LBL_COMMITTED_HISTORY_WORST_SAME');}}
if(likely.show){if(likely.changed){args.push('LBL_COMMITTED_HISTORY_LIKELY_CHANGED');}else{args.push('LBL_COMMITTED_HISTORY_LIKELY_SAME');}}
if(best.show){if(best.changed){args.push('LBL_COMMITTED_HISTORY_BEST_CHANGED');}else{args.push('LBL_COMMITTED_HISTORY_BEST_SAME');}}
return args;},parseArgsAndLabels:function(argsArray,labels){var retArgs={},argsKeys=['first','second','third'],hb=Handlebars.compile("{{{str key module args}}}");if((argsArray.length+1)!=labels.length){var msg='ForecastsUtils.parseArgsAndLabels() :: '
+'argsArray and labels params are not the same length';app.logger.error(msg);return null;}
retArgs.intro=hb({'key':_.first(labels),'module':'Forecasts','args':[]});labels=_.last(labels,labels.length-1);_.each(labels,function(label,index){retArgs[argsKeys[index]]=hb({'key':label,'module':'Forecasts','args':argsArray[index]});});return retArgs;},getDifference:function(oldModel,newModel,attr){return(app.math.isDifferentWithPrecision(newModel.get(attr),oldModel.get(attr)))?app.math.getDifference(newModel.get(attr),oldModel.get(attr)):0;},getDirection:function(difference){return difference>0?'LBL_UP':(difference<0?'LBL_DOWN':'');},getSubpanelList:function(module){var list={},subpanels=app.metadata.getModule(module);if(subpanels&&subpanels.layouts){subpanels=subpanels.layouts.subpanels;if(subpanels&&subpanels.meta&&subpanels.meta.components){_.each(subpanels.meta.components,function(comp){if(comp.context&&comp.context.link){list[comp.label]=comp.context.link;}else{app.logger.warning("Subpanel's subpanels.meta.components "
+"has component with no context or context.link");}});}}
return list;},isRequiredLink:function(module,link){var relatedFields=app.data.getRelateFields(module,link),requiredField=_.some(relatedFields,function(field){return field.required===true;},this);return requiredField;},_tableColumnsConfigKeyMapManager:{'likely_case':'show_worksheet_likely','likely_case_adjusted':'show_worksheet_likely','best_case':'show_worksheet_best','best_case_adjusted':'show_worksheet_best','worst_case':'show_worksheet_worst','worst_case_adjusted':'show_worksheet_worst'},_tableColumnsConfigKeyMapRep:{'likely_case':'show_worksheet_likely','best_case':'show_worksheet_best','worst_case':'show_worksheet_worst'},getColumnVisFromKeyMap:function(key,viewName){var moduleMap={'forecastsWorksheet':'rep','forecastsWorksheetTotals':'rep','forecastsWorksheetManager':'mgr','forecastsWorksheetManagerTotals':'mgr'},whichKeyMap,keyMap,returnValue;whichKeyMap=moduleMap[viewName];keyMap=(whichKeyMap==='rep')?this._tableColumnsConfigKeyMapRep:this._tableColumnsConfigKeyMapManager;returnValue=app.metadata.getModule('Forecasts','config')[keyMap[key]];if(!_.isUndefined(returnValue)){returnValue=returnValue==1}else{returnValue=true;}
return returnValue;},getSelectedUsersReportees:function(selectedUser,context){if(selectedUser.is_manager){if(_.isUndefined(selectedUser.reportees)){selectedUser.reportees=[];}
var url=app.api.buildURL('Users','filter'),post_args={"filter":[{'reports_to_id':selectedUser.id,'status':'Active'}],'fields':'full_name','max_num':1000},options={};options.success=_.bind(function(resp,status,xhr){_.each(resp.records,function(user){selectedUser.reportees.push({id:user.id,name:user.full_name});});this.set("selectedUser",selectedUser)},context);app.api.call("create",url,post_args,options);}else{context.set("selectedUser",selectedUser);}},checkForecastConfig:function(){var forecastConfigOK=true,cfg=app.metadata.getModule('Forecasts','config')||{},salesWonVals=cfg.sales_stage_won,salesLostVals=cfg.sales_stage_lost,salesWonLostVals=cfg.sales_stage_won.concat(cfg.sales_stage_lost),domVals=app.lang.getAppListStrings('sales_stage_dom');if(salesWonVals.length==0||salesLostVals.length==0||_.isEmpty(domVals)){forecastConfigOK=false;}else{forecastConfigOK=_.every(salesWonLostVals,function(val){return(val!=''&&_.has(domVals,val));},this);}
return forecastConfigOK;},isTouchDevice:function(){return Modernizr.touch;},customBuildRoute:function(moduleOrContext,id,action,inBwc){var module,moduleMeta;if(_.isEmpty(moduleOrContext)){return'';}
if(_.isString(moduleOrContext)){module=moduleOrContext;}else{module=moduleOrContext.get('module');}
if(_.isEmpty(module)||!app.bwc){return'';}
moduleMeta=app.metadata.getModule(module)||{};if(inBwc===false||(_.isUndefined(inBwc)&&!moduleMeta.isBwcEnabled)){return'';}
return app.bwc.buildRoute(module,id,app.bwc.getAction(action));},addIframeMark:function(url){var parts=url.split('?');if(parts[1]&&parts[1].indexOf('bwcFrame=1')!=-1)return url;return parts[0]+'?'+(parts[1]?parts[1]+'&bwcFrame=1':'bwcFrame=1');},rmIframeMark:function(url){var parts=url.split('?');if(!parts[1]){return url;}
return parts[0]+'?'+_.reduce(parts[1].split('&'),function(acc,item){if(item=='bwcFrame=1'){return acc;}else{return acc?acc+'&'+item:item;}},'');},getSubpanelCollection:function(ctx,module){var retCollection=undefined,mdl=_.find(ctx.children,function(child){return(child.get('module')==module);});if(mdl&&_.has(mdl.attributes,'collection')){retCollection=mdl.get('collection');}
return retCollection;},getRecordName:function(model){if(model.module==='Documents'&&model.has('document_name')){return model.get('document_name');}else if(model.has('full_name')){return model.get('full_name');}else if(model.has('first_name')&&model.has('last_name')){return model.get('first_name')+' '+model.get('last_name');}else{return model.get('name')||'';}},resolve409Conflict:function(error,model,callback){app.drawer.open({layout:'resolve-conflicts',context:{dataInDb:error.payload.record,modelToSave:model}},callback);},getForecastNotSetUpMessage:function(isAdmin){var langKey=(isAdmin)?'LBL_DASHLET_FORECAST_NOT_SETUP_ADMIN':'LBL_DASHLET_FORECAST_NOT_SETUP',msg=app.lang.get(langKey,'Forecasts');if(isAdmin){var linkText=app.lang.get('LBL_DASHLET_FORECAST_CONFIG_LINK_TEXT','Forecasts');msg+='  <a href="#Forecasts/config">'+linkText+'</a>';}
return msg;},getWindowLocationParameterByName:function(name,queryString){name=name.replace(/[\[]/,'\\[').replace(/[\]]/,'\\]');var regex=new RegExp('[\\?&]'+name+'=([^&#]*)','g'),matchResults=queryString.match(regex);if(matchResults&&matchResults.length>0){var results=regex.exec(matchResults[matchResults.length-1]);}
return(results===undefined||results===null)?'':decodeURIComponent(results[1].replace(/\+/g,' '));},isTruthy:function(value){if(_.isString(value)){value=value.toLowerCase();}
return value===true||value==='true'||value===1||value==='1'||value==='on'||value==='yes';}});});})(SUGAR.App);