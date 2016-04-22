
//BOF SYNOGENERATEDOC SYNOLIA

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

//EOF SYNOGENERATEDOC SYNOLIA
