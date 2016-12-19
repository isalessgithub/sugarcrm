function showSynoGenerateDocPanel(module, beanId) {
   
    ajaxStatus.showStatus(SUGAR.language.get('app_strings', 'LBL_LOADING_PAGE'));

    var smMarkup = '';
    var callback = {
         success:function(r) {     
                
            ajaxStatus.hideStatus();
            var newdiv = document.createElement("div");
            newdiv.innerHTML = r.responseText;
            var sCont = document.getElementById('synogeneratedocCont');
            sCont.innerHTML = "";
            sCont.appendChild(newdiv);
            document.getElementById('content').appendChild(sCont);
            with ( sCont.style ) {
                display = "block";
                position = "absolute";
                top = '185px';
                right = '5px';
            }
         } 
    } 
    postData = 'entryPoint=checkSynoDocAvailable&base_module='+module+'&base_id='+beanId;
    YAHOO.util.Connect.asyncRequest('POST', 'index.php', callback, postData);
}

var sendEmailSynoGenerateDocButton = function(formObject){
    if(formObject) {
        var successCallSynoGenerateDoc = function(data) {
            quickComposeOptions = data.responseText;

            if (quickComposeOptions.length > 0) {
                quickComposeOptions = YAHOO.lang.JSON.parse(quickComposeOptions);
                SUGAR.quickCompose.init(quickComposeOptions);
            }
        }

        YAHOO.util.Connect.setForm(formObject);
        var cObj = YAHOO.util.Connect.asyncRequest('POST', 'index.php', {success: successCallSynoGenerateDoc, failure: successCallSynoGenerateDoc});
    }
}
