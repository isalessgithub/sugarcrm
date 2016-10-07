/**
     * jQuery Watch Plugin
     *
     * @author Darcy Clarke
     * @version 2.0
     *
     * Copyright (c) 2012 Darcy Clarke
     * Dual licensed under the MIT and GPL licenses.
     *
     * ADDS:
     *
     * - $.watch()
     *
     * USES:
     *
     * - DOMAttrModified event
     *
     * FALLBACKS:
     *
     * - propertychange event
     * - setTimeout() with delay
     *
     * EXAMPLE:
     *
     * $('div').watch('width height', function(){
     *      console.log(this.style.width, this.style.height);
     * });
     *
     * $('div').animate({width:'100px',height:'200px'}, 500);
     *
     */
(function($){$.extend($.fn,{watch:function(props,options,callback){var element=document.createElement('div');var isEventSupported=function(eventName,el){eventName='on'+eventName;var supported=(eventName in el);if(!supported){el.setAttribute(eventName,'return;');supported=typeof el[eventName]=='function';}
return supported;};if(typeof(options)=='function'){callback=options;options={};}
if(typeof(callback)!='function')
callback=function(){};options=$.extend({},{throttle:10},options);var check=function(el){var data=el.data(),changed=false,temp;for(var i=0;i<data.props.length;i++){temp=el.css(data.props[i]);if(data.vals[i]!=temp){data.vals[i]=temp;changed=true;break;}}
if(changed&&data.cb)
data.cb.call(el,data);};return this.each(function(){var el=$(this),cb=function(){check.call(this,el)},data={props:props.split(','),cb:callback,vals:[]};$.each(data.props,function(i){data.vals[i]=el.css(data.props[i]);});el.data(data);if(isEventSupported('DOMAttrModified',element)){el.on('DOMAttrModified',callback);}else if(isEventSupported('propertychange',element)){el.on('propertychange',callback);}else{setInterval(cb,options.throttle);}});}});})(jQuery);