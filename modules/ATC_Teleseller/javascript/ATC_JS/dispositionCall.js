var dialog;

function changeStatus(id, status) {
    openDialog();
    var callback = {
        success : function(r) {
            try {
                //update status div here
                //document.getElementById('status'+id).innerHTML = status;
                document.getElementById('status').innerHTML = status;
                //alert('Callback success');
            } catch (err) {
                closeDlg();
                alert(err);
            }
            closeDlg();
        }// success
    }

    postData = '&ID=' + id + '&status=' + status;
    
    //alert('Called javascript');
    YAHOO.util.Connect.asyncRequest('POST', 'index.php?entryPoint=ATC_dispositionCall',
            callback, postData);
}

function openDialog() {

    // First dialog is to show checking for duplicates
    var _content = '<p>Updating status...</p>';
    dialog = new YAHOO.widget.Dialog("dupeSelector", {
        width : "240px",
        height : "100px",
        fixedcenter : true,
        close : false,
        draggable : false,
        zindex : 4,
        modal : true,
        visible : false
    });
    dialog.setHeader("Updating Call Status");
    dialog.setBody(_content);
    dialog.render(document.body);
    dialog.show();
    // window.setTimeout(closeDlg,1500);
}

function closeDlg() {
    dialog.cancel();
}

