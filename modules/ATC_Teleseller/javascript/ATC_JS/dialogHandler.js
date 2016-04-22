function closeDialog(){
    dialog.cancel();
}
        
function openDialog(header,msg) {

   //Show a dialog that the call was logged which will close upon success
   dialog = new YAHOO.widget.Dialog("workingDlg", {
            width : "240px",
            height : "100px",
            fixedcenter : true,
            close : false,
            draggable : false,
            zindex : 4,
            modal : true,
            visible : false
    });
    dialog.setHeader(header);
    dialog.setBody(msg);
    dialog.render(document.body);
    dialog.show();
}

function openOkDialog(header,msg) {

   //Show a dialog that the call was logged which will close upon success
   dialog = new YAHOO.widget.Dialog("workingDlg", {
            width : "240px",
            height : "100px",
            fixedcenter : true,
            close : false,
            draggable : false,
            zindex : 4,
            modal : true,
            visible : false,
            buttons : [ { text:"OK", handler:closeDialog, isDefault:true }]
    });

    dialog.setHeader(header);
    dialog.setBody(msg);
    dialog.render(document.body);
    dialog.show();
    
}