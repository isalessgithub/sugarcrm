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
({extendsFrom:'FieldsetField',events:{'click [data-toggle=dropdown]':'renderDropdown'},plugins:['Tooltip'],initialize:function(options){this.dropdownFields=[];this.actionDropDownTag='[data-toggle=dropdown]';this.selectDropdownTag='[data-toggle=dropdownmenu]';this.dropdownTag='[data-menu=dropdown]';this.defaultActionBtn={};this.showNoData=false;this._super('initialize',[options]);this.caretIcon=this.def.icon||'fa-caret-down';this.def.css_class=this.def.css_class?this.def.css_class+' actions':'actions';if(this.def.no_default_action){this.def.switch_on_click=false;}
app.shortcuts.register('Dropdown:More','m',function(){var $primaryDropdown=this.$('.btn-primary[data-toggle=dropdown]');if($primaryDropdown.is(':visible')&&!$primaryDropdown.hasClass('disabled')){$primaryDropdown.click();}},this);},_getChildFieldsMeta:function(){return app.utils.deepCopy(this.def.buttons);},_getChildFields:function(){if(_.isEmpty(this.fields)){var fields=this._super('_getChildFields');this._orderButtons(fields);}
return!_.isEmpty(this.defaultActionBtn)?[this.defaultActionBtn].concat(this.dropdownFields):this.dropdownFields;},_orderButtons:function(fields){var prevIsDivider=true,orderedFields=fields||this.fields;this.dropdownFields=_.filter(orderedFields,function(field){var actionHidden=(_.isFunction(field.hasAccess)&&!field.hasAccess())||(_.isFunction(field.isVisible)&&!field.isVisible());if(actionHidden||(field.type==='divider'&&prevIsDivider)){return false;}
prevIsDivider=field.type==='divider';return true;});if(!this.def.no_default_action&&!_.isEmpty(this.dropdownFields)){this._setDefaultBtn(_.first(this.dropdownFields));this.dropdownFields=_.rest(this.dropdownFields);}},_getDropdownTpl:function(){this.dropdownTpl=this.dropdownTpl||app.template.getField('actiondropdown','dropdown',this.module);return this.dropdownTpl;},renderDropdown:function(evt){var $dropdown=this.$(this.dropdownTag);if(_.isEmpty(this.dropdownFields)||this.isDisabled()||!$dropdown.is(':empty')){return;}
var dropdownTpl=this._getDropdownTpl();$dropdown.append(dropdownTpl(this));_.each(this.dropdownFields,function(field){field.setElement(this.$('span[sfuuid="'+field.sfId+'"]'));if(this.def['switch_on_click']&&!this.def['no_default_action']){field.$el.on('click.'+this.cid,_.bind(this.switchButton,this));}
field.render();},this);},_setDefaultBtn:function(button){if(!button||button.disposed){return;}
if(!_.isEmpty(this.defaultActionBtn)){this.defaultActionBtn.def.primary=this.defaultActionBtn.def.button=false;}
this.defaultActionBtn=button;this.defaultActionBtn.def.primary=this.def.primary;this.defaultActionBtn.def.button=true;},switchButton:function(evt){var sfId=parseInt(this.$(evt.currentTarget).attr('sfuuid'),10),index=-1;if(sfId===this.defaultActionBtn.sfId){return;}
var selectedField=_.find(this.dropdownFields,function(field,idx){if(field.sfId===sfId){index=idx;return true;}
return false;});if(!selectedField){return;}
this.dropdownFields.splice(index,1,this.defaultActionBtn);this._setDefaultBtn(selectedField);this.render();},_render:function(){this.$(this.dropdownTag).empty();this._super('_render');this._updateCaret();this._renderDefaultActionBtn();this.$el.toggleClass('btn-group',!_.isEmpty(this.dropdownFields));},_renderDefaultActionBtn:function(){if(_.isEmpty(this.defaultActionBtn)){return;}
if(this.defaultActionBtn.def.icon&&this.defaultActionBtn.closestComponent('subpanel')){this.defaultActionBtn.setMode('small');}
if(!this.def['switch_on_click']||this.def['no_default_action']){return;}
this.defaultActionBtn.$el.on('click.'+this.cid,_.bind(this.switchButton,this));app.accessibility.run(this.defaultActionBtn.$el,'click');},_updateCaret:function(){if(_.isEmpty(this.dropdownFields)){return;}
var caretEnabled=_.some(this.dropdownFields,function(field){if(_.isFunction(field.hasAccess)&&field.hasAccess()){if(field.def.css_class&&field.def.css_class.indexOf('disabled')>-1){return false;}else if(field.isDisabled()){return false;}else{return true;}}
return false;});this.$('.'+this.caretIcon).closest('a').toggleClass('disabled',!caretEnabled);},setDisabled:function(disable){this._super('setDisabled',[disable]);disable=_.isUndefined(disable)?true:disable;this.$(this.actionDropDownTag).toggleClass('disabled',disable);},_dispose:function(){_.each(this.fields,function(field){field.$el.off('click.'+this.cid);},this);this.defaultActionBtn=null;this.dropdownFields=null;this._super('_dispose');}})