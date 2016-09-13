var last_call_modal_id = '';
//function CreateCall(module, parent_record)
var submitCall = function () {
  var callback = {
    success: function (r) {
      // enable save button because we disabled it before doing save
      $("#" + last_call_modal_id).find("button:contains('Save')").removeAttr('disabled');
      try {
        if (window.ActiveXObject)
          ie = true;
        else
          ie = false;

        if (r.responseText) {
          if ((r.responseText == '') || (r.responseText == null)) {
            alert("There was an error processing your request.");
            err = true;
          } else {
            // We have a return value.
            var ret = JSON.parse(r.responseText);
            logCallConfigureDlg[ret.row_id].cancel();
            if (ret.call_outcome != '')
              document.getElementById('reloadVal_' + ret.row_id).innerHTML = ret.call_outcome;
            //Check for error messages
            //alert(ret.message);
          }
        }

      }
      catch (err) {
        console.log(err);
        logCallConfigureDlg.cancel();
      }
    }
  };

  last_call_modal_id = this.id;
  $("#" + this.id).find("button:contains('Save')").attr('disabled','disabled');

  var module = document.getElementById('module_name').value;
  var parent_record = document.getElementById('parent_id').value;
  var description = document.getElementById('description_call').value;
  var call_outcome_c = document.getElementById('call_outcome_c').value;
  var phone_other = document.getElementById('phone_other').value;
  var target_list_id_val = '';
  if (document.getElementById('target_list_id'))
    target_list_id_val = document.getElementById('target_list_id').value;
  postData = '&module=' + module + '&parent_id=' + parent_record + '&description=' + description +
      '&call_outcome_c=' + call_outcome_c + '&target_list_id=' + target_list_id_val + '&phone_other=' + phone_other;
postData += '&save_only_followup_call=' + $('#save_only_followup_call').prop('checked');
postData += '&reminder_checked=' + $('#reminder_checked').prop('checked');
postData += '&reminder_time=' + document.getElementById('reminder_time').value;
postData += '&start_date=' + $("input[name=follow_date]").val();
  YAHOO.util.Connect.asyncRequest('POST', 'index.php?entryPoint=createCall',
      callback, postData);

  //Clar out the cached overlibs
  if (typeof SUGAR.util.additionalDetailsCache[parent_record] != 'undefined')
    delete SUGAR.util.additionalDetailsCache[parent_record];
}


var submitScheduleCall = function () {
  var callback = {
    success: function (r) {
      try {
        if (window.ActiveXObject)
          ie = true;
        else
          ie = false;

        if (r.responseText) {
          if ((r.responseText == '') || (r.responseText == null)) {
            alert("There was an error processing your request.");
            err = true;
          } else {
            // We have a return value.
            var ret = JSON.parse(r.responseText);
            scheduleCallConfigureDlg[ret.row_id].cancel();
            //Check for error messages
            if (ret == false) {
              alert("We were unable to create that call");
            }
          }
        }
      }
      catch (err) {
        console.log(err);
        alert("There was an error sending the data");
      }
    }
  };

  var module = document.getElementById('module_name').value;
  var parent_record = document.getElementById('parent_id').value;
  var description = document.getElementById('description_call').value;
  var date_start = document.getElementById('date_start').value;
  var date_start_hours = document.getElementById('date_start_hours').value;
  var date_start_minutes = document.getElementById('date_start_minutes').value;

  //Make sure the data is filled-in
  if (description == '') {
    alert("Please enter a value in the Note field");
    return;
  }

  if (date_start == '') {
    alert("Please enter a value in Date field");
    return;
  }


  postData = '&module=' + module + '&parent_id=' + parent_record + '&description=' + description +
      "&date_start_hours=" + date_start_hours + "&date_start=" + date_start + "&date_start_minutes=" + date_start_minutes;


  YAHOO.util.Connect.asyncRequest('POST', 'index.php?entryPoint=scheduleCall',
      callback, postData);

  //Clar out the cached overlibs
  if (typeof SUGAR.util.additionalDetailsCache[parent_record] != 'undefined')
    delete SUGAR.util.additionalDetailsCache[parent_record];
}

var last_note_modal_id = '';
var submitNote = function () {
  var callback = {
    success: function (r) {
      // enable save button because we disabled it before doing save
      $("#" + last_note_modal_id).find("button:contains('Save')").removeAttr('disabled');
      try {
        if (window.ActiveXObject)
          ie = true;
        else
          ie = false;

        if (r.responseText) {
          if ((r.responseText == '') || (r.responseText == null)) {
            alert("There was an error processing your request.");
            err = true;
          } else {
            // We have a return value.
            var ret = JSON.parse(r.responseText);
            createNoteConfigureDlg[ret.row_id].cancel();
            //Check for error messages
            //alert(ret.message);
          }
        }
      }
      catch (err) {
        alert(err);
        createNoteConfigureDlg.cancel();
      }
    }
  };

  last_note_modal_id = this.id;
  $("#" + this.id).find("button:contains('Save')").attr('disabled','disabled');

  var module = document.getElementById('module_name').value;
  var parent_record = document.getElementById('parent_id').value;
  var description = document.getElementById('note_subject').value;
  var target_list_id_val = '';
  if (document.getElementById('target_list_id'))
    target_list_id_val = document.getElementById('target_list_id').value;
  //Make sure the data is filled-in
  if (description == '') {
    alert("Please enter a value in the Note field");
    return;
  }

  postData = '&module=' + module + '&parent_id=' + parent_record + '&description=' + description + '&target_list_id=' + target_list_id_val;


  YAHOO.util.Connect.asyncRequest('POST', 'index.php?entryPoint=createNote',
      callback, postData);

  //Clar out the cached overlibs
  if (typeof SUGAR.util.additionalDetailsCache[parent_record] != 'undefined')
    delete SUGAR.util.additionalDetailsCache[parent_record];
}

var logCallConfigureDlg = [];
var combo_follow_date;
function LogCall(module,parent_record,history,phone_other,contact_name,account_name){
  if (history != 'null') {
    var obj = JSON.parse(history);
  }
  //contact_name = contact_name.replace(/'/g, "\\'");
  //account_name = account_name.replace(/'/g, "\\'");
  if (typeof(logCallConfigureDlg[parent_record]) == 'undefined') {
    logCallConfigureDlg[parent_record] = new YAHOO.widget.SimpleDialog("dlgLogCall_" + parent_record,
        {
          visible: false,
          width: "auto",
          height: "600px",
          fixedcenter: true,
          modal: true,
          draggable: false,
          buttons: [
            {
              text: "Cancel", handler: function () {
              this.cancel();
            }
            },
            {
              text: "Save", handler: submitCall, isDefault: true
            }
          ]
        }
    );
  }
  var call_outcome_dom = "<select name= 'call_outcome_c' id='call_outcome_c'>";
  var calloutcome = SUGAR.language.languages.app_list_strings['call_outcome_dom'];
  for (var key in calloutcome) {
    call_outcome_dom += '<option value="' + key + '">' + calloutcome[key] + '</option>';
  }
  call_outcome_dom += "</select>";

  var top = '<input type="hidden" name="module_name" id="module_name" value="' + module + '"><input type="hidden" name="parent_id" id="parent_id" value="' + parent_record + '">';
  top += '<table><tr><td width="10%">Name:</td><td width="40%" style="padding-left:10px; background-color:LightGrey;">'+ contact_name +'</td><td width="10%">Company:</td><td width="40%" style="padding-left:10px;background-color:LightGrey;">' + account_name  + '</td></tr></table>';
  top += '<table>' +
      '<tr>' +
      '<td valign="top" id=\'description_label\' width=\'12.5%\' scope="row">Call Outcome:</td><td valign="top" width=\'37.5%\' colspan=\'3\'>' + call_outcome_dom + '</td></tr>'+
            '<tr><td valign="top" id=\'description_label\' width=\'12.5%\' scope="row">Call Outcome Description:</td><td valign="top" width=\'37.5%\' colspan=\'3\'><textarea  id=\'description_call\' name=\'description_call\'rows="6" cols="80" title=\'\' tabindex="106" ></textarea></td>\
            </tr>\
            <tr>\
            <td valign="top" id=\'phone_other_label\' width=\'12.5%\' scope="row">Direct Line:</td><td valign="top" width=\'37.5%\' colspan=\'3\'><input type=\'text\' id=\'phone_other\' name=\'phone_other\' value=\'' + phone_other + '\'></td>\
            </tr>'+
			'<tr>' +
      '<td>Follow-up Date:</td>' +
   '<td nowrap=""><input autocomplete="off" type="text" id="follow_date_date" value="" size="11" maxlength="10" title="" tabindex="0" onblur="combo_follow_date.update();" onchange="handleReminder();combo_follow_date.update();">    <span alt="Enter Date" style="position:relative; top:6px" border="0" id="follow_date_trigger" onclick="showDateDiv()" data-orig="jscalendar.gif" class="spr_980451b001c99954db1c26b8603af06a"></span>&nbsp;</td><td nowrap=""><div id="follow_date_time_section"><span style="position:relative; top:6px;"><select class="datetimecombo_time" size="1" id="follow_date_hours" tabindex="0" onchange="SugarWidgetScheduler.update_time();combo_follow_date.update(); "><option></option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select>&nbsp;:&nbsp;<select class="datetimecombo_time" size="1" id="follow_date_minutes" tabindex="0" onchange="combo_follow_date.update();SugarWidgetScheduler.update_time(); "><option></option><option value="00">00</option><option value="15">15</option><option value="30">30</option><option value="45">45</option></select>&nbsp;<select class="datetimecombo_time" size="1" id="follow_date_meridiem" tabindex="0" onchange="combo_follow_date.update();SugarWidgetScheduler.update_time(); "><option></option><option value="am">am</option><option value="pm">pm</option></select></span></div>' +
      '<input type="hidden" class="DateTimeCombo" id="follow_date" name="follow_date" value="">'+
	  '</tr>' +
	  '<tr><td width="12.5%" valign="top" scope="col" style="display: none" id="save_only_followup_call_label">Save only Follow-Up Call:</td><td><input type="checkbox" class="checkbox" id="save_only_followup_call" style="display: none" name="save_only_followup_call"></td></tr>'
	  +
				  '<tr>' + 
'<td width="12.5%" valign="top" scope="col" style="display: none" id="reminder_time_label">'+
'Reminders:</td><td width="37.5%" valign="top" colspan="3"><div>'+
'<input type="checkbox" class="checkbox" onclick="toggleReminder(this,\'reminder\');" id="reminder_checked" style="display: none" name="reminder_checked">'+
'<div id="popup_label" style="display: none; width: 111px;padding-left: 5px;">Popup</div>'+
'<div style="display: none" id="reminder_list">'+
'<select name="reminder_time" tabindex="0" id="reminder_time">'+
'<option value="60" label="1 minute prior">1 minute prior</option>'+
'<option value="300" label="5 minutes prior">5 minutes prior</option>'+
'<option value="600" label="10 minutes prior">10 minutes prior</option>'+
'<option value="900" label="15 minutes prior">15 minutes prior</option>'+
'<option value="1800" label="30 minutes prior">30 minutes prior</option>'+
'<option value="3600" label="1 hour prior">1 hour prior</option>'+
'<option value="7200" label="2 hours prior">2 hours prior</option>'+
'<option value="10800" label="3 hours prior">3 hours prior</option>'+
'<option value="18000" label="5 hours prior">5 hours prior</option>'+
'<option value="86400" label="1 day prior">1 day prior</option>'+
'</select>'+
'</div>'+
'</div>'+
'</td></tr>'+
            '</table>';

  if (history != 'null') {
    top += '<h2>Call History</h2><table style="overflow: auto;"><tr><th valign="top" style = "text-align : left ! important;" width="20%" scope="row">Target List:</th><th valign="top" style = "text-align : left ! important;" width="30%" scope="row">Description:</th><th width="10%">Outcome</th><th valign="top" style = "text-align : left ! important;" width="20%" scope="row">Date Created:</th></tr>';
    for (var i = 0; i < obj.length; i++) {
      top += '<tr  class="odd"><td valign="top">' + obj[i].TLName + '</td>';
      top += '<td valign="top">' + obj[i].Description + '</td>';
      top += '<td valign="top">' + obj[i].Outcome + '</td>';
      top += '<td valign="top" class="datetimecombo_time">' + obj[i].Create_Date + '</td></tr>';

    }

    top += '</table>';
  }
  
  logCallConfigureDlg[parent_record].setHeader("Call Log");
  logCallConfigureDlg[parent_record].setBody(top);

  logCallConfigureDlg[parent_record].render(document.body);
  logCallConfigureDlg[parent_record].show();
   combo_follow_date = new Datetimecombo("", "follow_date", "11:00pm", "0", '', false, true);
//Render the remaining widget fields
  text = combo_follow_date.html('');
  document.getElementById('follow_date_time_section').innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
  eval(combo_follow_date.jsscript(''));
 addToValidateBinaryDependency('EditView',"follow_date_hours", 'alpha', false, "Missing required field: Hours" ,"follow_date_date");
  addToValidateBinaryDependency('EditView', "follow_date_minutes", 'alpha', false, "Missing required field: Minutes" ,"follow_date_date");
  addToValidateBinaryDependency('EditView', "follow_date_meridiem", 'alpha', false, "Missing required field: Meridiem","follow_date_date");
  Calendar.setup ({
	  onClose : update_follow_date,
      inputField : "follow_date_date",
      ifFormat : "%m/%d/%Y %I:%M%P",
      daFormat : "%m/%d/%Y %I:%M%P",
      button : "follow_date_trigger",
      singleClick : true,
      step : 1,
      weekNumbers: false,
      startWeekday: 0,
      comboObject: combo_follow_date
    });
	combo_follow_date.update(false);
}
var handleCancel = function () {
  this.cancel();
};
function handleReminder(){
	$("#reminder_checked").show();
	$("#reminder_time_label").show();
	$("#save_only_followup_call").show();
	$("#save_only_followup_call_label").show();
	$("#popup_label").css("display","inline");
	$("#container_follow_date_trigger_c").css("display", "none");
}
function showDateDiv(){
	$("#container_follow_date_trigger_c").css("display","block");
}
function NoResultCall(module, parent_record) {
  var callback = {
    success: function (r) {
      try {
        if (window.ActiveXObject)
          ie = true;
        else
          ie = false;

        if (r.responseText) {
          if ((r.responseText == '') || (r.responseText == null)) {
            alert("There was an error processing your request.");
            err = true;
          } else {
            // We have a return value.
            var ret = JSON.parse(r.responseText);
            if (ret.call_outcome != '')
              document.getElementById('reloadVal_' + ret.row_id).innerHTML = ret.call_outcome;
            //Check for error messages
            //alert(ret.message);
          }
        }
      }
      catch (err) {
        alert(err);
      }
    }
  };

  //var module = document.getElementById('module_name').value;
  //var parent_record = document.getElementById('parent_id').value;
  var target_list_id_val = '';
  if (document.getElementById('target_list_id'))
    target_list_id_val = document.getElementById('target_list_id').value;
  var call_outcome_c = 'Not Interested'; // NOTE : CHANGE VALUE IF NEEDED
  postData = '&module=' + module + '&parent_id=' + parent_record + '&target_list_id=' + target_list_id_val + '&call_outcome_c=' + call_outcome_c;


  YAHOO.util.Connect.asyncRequest('POST', 'index.php?entryPoint=createCall',
      callback, postData);

  //Clar out the cached overlibs
  if (typeof SUGAR.util.additionalDetailsCache[parent_record] != 'undefined')
    delete SUGAR.util.additionalDetailsCache[parent_record];
}

function lvg_dtails2(module, id) {
  return SUGAR.util.getAdditionalDetails(module, id, 'adspan_' + id);
}

var createNoteConfigureDlg = [];
function CreateNote(module, parent_record, history) {
  if (history != 'null') {
    var obj = JSON.parse(history);
  }
  if (typeof(createNoteConfigureDlg[parent_record]) == 'undefined') {
    createNoteConfigureDlg[parent_record] = new YAHOO.widget.SimpleDialog("dlgCreateNote_" + parent_record,
        {
          visible: false,
          width: "800px",
          height: "600px",
          fixedcenter: true,
          modal: true,
          draggable: false,
          buttons: [
            {
              text: "Cancel", handler: function () {
              this.cancel();
            }
            },
            {
              text: "Save", handler: submitNote, isDefault: true
            }
          ]
        }
    );
  }
  var desc = this.SUGAR.language.get(module, "LBL_DESCRIPTION");
  var top = '<input type="hidden" name="module_name" id="module_name" value="' + module + '"><input type="hidden" name="parent_id" id="parent_id" value="' + parent_record + '">';
  top += '<table><tr><td valign="top" id=\'description_label\' width=\'12.5%\' scope="row">Note:</td><td valign="top" width=\'37.5%\' colspan=\'3\'><input id=\'note_subject\' name=\'note_subject\' size="55" title=\'\' tabindex="106" ></input></td></tr></table>';

  if (history != 'null') {
    top += '<h2>Note History</h2><table><tr><th valign="top" style = "text-align : left ! important;" width="50%" scope="row">Subject:</th><th valign="top" style = "text-align : left ! important;" width="20%" scope="row">Date Created:</th></tr>';
    for (var i = 0; i < obj.length; i++) {
      top += '<tr  class="odd"><td valign="top">' + obj[i].name + '</td>';
      top += '<td valign="top" class="datetimecombo_time">' + obj[i].Create_Date + '</td></tr>';

    }

    top += '</table>';
  }
  createNoteConfigureDlg[parent_record].setHeader("Create Note");
  createNoteConfigureDlg[parent_record].setBody(top);

  createNoteConfigureDlg[parent_record].render(document.body);
  createNoteConfigureDlg[parent_record].show();

}


var scheduleCallConfigureDlg = [];

function ScheduleCall(module, parent_record) {

  var currentTime = new Date()
  var month = currentTime.getMonth() + 1
  var day = currentTime.getDate()
  var year = currentTime.getFullYear()

  var dtStr = month + '/' + day + '/' + year;
  if (typeof(scheduleCallConfigureDlg[parent_record]) == 'undefined') {
    scheduleCallConfigureDlg[parent_record] = new YAHOO.widget.SimpleDialog("dlgScheduleCall_" + parent_record,
        {
          visible: false,
          width: "360px",
          height: "140px",
          fixedcenter: true,
          modal: true,
          draggable: false,
          buttons: [
            {
              text: "Cancel", handler: function () {
              this.cancel();
            }
            },
            {
              text: "Save", handler: submitScheduleCall, isDefault: true
            }
          ]
        }
    );
  }
  var desc = this.SUGAR.language.get(module, "LBL_DESCRIPTION");
  var top = '<input type="hidden" name="module_name" id="module_name" value="' + module + '">' +
      '<input type="hidden" name="parent_id" id="parent_id" value="' + parent_record + '">';

  top += '<table>';

  var desc = '<tr><td valign="top" id=\'description_label\' width=\'25%\' scope="row">Subject:</td><td valign="top" width=\'75%\' colspan=\'3\'><input  id=\'description_call\' name=\'description_call\'size="40"  title=\'\' tabindex="106" ></input></td></tr>';

  var DtTM = '<tr valign="middle"><td width="25%" valign="top" scope="row" id="date_start_label">Call Date:<span class="required">*</span></td><td nowrap=""><input type="text"  tabindex="102" title="" maxlength="10" size="11" value="' + dtStr + '" name="date_start" id="date_start" autocomplete="off"><img border="0" align="absmiddle" id="date_start_trigger" alt="Enter Date" src=themes/Sugar/images/jscalendar.png?">&nbsp;</td><td nowrap=""><div id="date_start_time_section"><select tabindex="102" id="date_start_hours" size="1" class="datetimecombo_time"><option></option><option value="00">00</option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option selected="" value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option></select>&nbsp;:&nbsp;<select onchange tabindex="102" id="date_start_minutes" size="1" class "datetimecombo_time"><option></option><option value="00">00</option><option selected="" value="15">15</option><option value="30">30</option><option value="45">45</option></select></div></td></tr>';

  top += DtTM + desc + '</table>';

  scheduleCallConfigureDlg[parent_record].setHeader("Call Log");
  scheduleCallConfigureDlg[parent_record].setBody(top);

  scheduleCallConfigureDlg[parent_record].render(document.body);
  scheduleCallConfigureDlg[parent_record].show();


  Calendar.setup({
        inputField: "date_start",
        daFormat: "%m/%d/%Y %I:%M%P",
        button: "date_start_trigger",
        singleClick: true,
        dateStr: dtStr,
        step: 1,
        weekNumbers: false
      }
  );


}
var manageAppointmentsConfigureDlg = [];
var workingAppointmentContactId;
var combo_appointment_date;
function ManageAppointments(module, parent_record, email_address, contact_name, account_name) {

  if (typeof(manageAppointmentsConfigureDlg[parent_record]) == 'undefined') {
    workingAppointmentContactId = parent_record;
    manageAppointmentsConfigureDlg[parent_record] = new YAHOO.widget.SimpleDialog("dlgManageAppointments_" + parent_record,
        {
          visible: false,
          width: "1000px",
          height: "600px",
          fixedcenter: true,
          modal: true,
          draggable: false,
          buttons: [
            {
              text: "Cancel", handler: function () {
              this.cancel();
            }
            },
            {
              text: "Save", handler: createAppointment, isDefault: true
            }
          ]
        }
    );
  }
  // set current time
  var currentTime = new Date()
  var month = currentTime.getMonth() + 1
  var day = currentTime.getDate()
  var year = currentTime.getFullYear()
  var dtStr = month + '/' + day + '/' + year;

  var desc = this.SUGAR.language.get(module, "LBL_DESCRIPTION");
  var top = '<form name="ScheduleAppointment" id="ScheduleAppointmentForm"> ' +
      '<input type="hidden" name="module_name" id="module_name" value="' + module + '"><input type="hidden" name="parent_id" id="parent_id" value="' + parent_record + '">' +
      '<input type="hidden" name="appointment_id" id="appointment_id" value="">';
  top += '<table><tr><td width="10%">Name:</td><td width="40%" style="padding-left:10px; background-color:LightGrey;">'+ contact_name +'</td><td width="10%">Company:</td><td width="40%" style="padding-left:10px;background-color:LightGrey;">' + account_name  + '</td></tr></table>';
  top += '<table>' +
      /*'<tr>' +
      '<td valign="top" id=\'description_label\' width=\'12.5%\' scope="row">Name:</td>' +
      '<td valign="top" width=\'37.5%\' colspan=\'3\'><input id=\'appointment_name\' name=\'appointment_name\' size="55" title=\'\' tabindex="106" ></td>' +
      '<td></td>' +
      '</tr>' +*/
      '<tr>' +
      '<td>Appointment Status:</td>' +
      '<td><select name="appointment_status">' +
      '<option label="" value=""></option>' +
      '<option label="Attended" value="Attended">Attended</option>' +
      '<option label="Canceled" value="Canceled">Canceled</option>' +
      '<option label="Accepted" value="Accepted">Accepted</option>' +
      '<option label="Reschedule" value="Reschedule">Reschedule</option>' +
      '</select></td>' +
      '<td></td>' +
      '</tr>' +
      '<tr>' +
      '<td>Appointment Place:</td>' +
      '<td><select name="appointment_place">' +
      '<option label="" value=""></option>' +
      '<option label="Face To Face" value="Face To Face">Face To Face</option>' +
      '<option label="Web Meeting" value="Web Meeting">Web Meeting</option>' +
      '<option label="Conference Call" value="Conference Call">Conference Call</option>' +
      '</select></td>' +
      '<td></td>' +
      '</tr>' +
      '<tr>' +
      '<td>Appointment Date [EST]:</td>' +
      '<td nowrap=""><input autocomplete="off" type="text" id="appointment_date_date" value="" size="11" maxlength="10" title="" tabindex="0" onblur="combo_appointment_date.update();" onchange="combo_appointment_date.update(); ">    <span alt="Enter Date" style="position:relative; top:6px" border="0" id="appointment_date_trigger" data-orig="jscalendar.gif" class="spr_980451b001c99954db1c26b8603af06a"></span>&nbsp;</td><td nowrap=""><div id="appointment_date_time_section"><span style="position:relative; top:6px;"><select class="datetimecombo_time" size="1" id="appointment_date_hours" tabindex="0" onchange="combo_appointment_date.update(); "><option></option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select>&nbsp;:&nbsp;<select class="datetimecombo_time" size="1" id="appointment_date_minutes" tabindex="0" onchange="combo_appointment_date.update(); "><option></option><option value="00">00</option><option value="15">15</option><option value="30">30</option><option value="45">45</option></select>&nbsp;<select class="datetimecombo_time" size="1" id="appointment_date_meridiem" tabindex="0" onchange="combo_appointment_date.update(); "><option></option><option value="am">am</option><option value="pm">pm</option></select></span></div>' +
      '<input type="hidden" class="DateTimeCombo" id="appointment_date" name="appointment_date" value="">' +
      '</td>' +
      '</tr>' +
      '<tr>' +
      '<td>Contact Email Address:</td>' +
      '<td><input type="text" id="contact_email" name="contact_email" value="'+ email_address +
      '"></td>' +
      '<td></td>' +
      '</tr>' +
      '<tr>' +
      '<td>Appointment Duration:</td>' +
      '<td style="display: none;"><select name="appointment_duration_hours"> ' +
      '<option label="0" value="0">0</option>' +
      '<option label="1" value="1">1</option>' +
      '<option label="2" value="2">2</option>' +
      '<option label="3" value="3">3</option>' +
      '<option label="4" value="4">4</option>' +
      '<option label="5" value="5">5</option>' +
      '<option label="6" value="6">6</option>' +
      '<option label="7" value="7">7</option>' +
      '<option label="8" value="8">8</option>' +
      '</select> Hours</td>' +
      '<td><select name="appointment_duration_minutes">' +
      '<option label="30" value="30">30</option>' +
      '<option label="60" value="60">60</option>' +
      '</select> Minutes</td>' +
      '</tr>' +
      '<tr>' + 
'<td width="12.5%" valign="top" scope="col" id="reminder_time_label">'+
'Reminders:</td><td width="37.5%" valign="top" colspan="3"><div>'+
'<input type="checkbox" class="checkbox" onclick="toggleReminder(this,\'reminder\');" id="reminder_checked" name="reminder_checked">'+
'<div style="display: inline-block; width: 111px;padding-left: 5px;">Popup</div>'+
'<div style="display: none" id="reminder_list">'+
'<select name="reminder_time" tabindex="0">'+
'<option value="60" label="1 minute prior">1 minute prior</option>'+
'<option value="300" label="5 minutes prior">5 minutes prior</option>'+
'<option value="600" label="10 minutes prior">10 minutes prior</option>'+
'<option value="900" label="15 minutes prior">15 minutes prior</option>'+
'<option value="1800" label="30 minutes prior">30 minutes prior</option>'+
'<option value="3600" label="1 hour prior">1 hour prior</option>'+
'<option value="7200" label="2 hours prior">2 hours prior</option>'+
'<option value="10800" label="3 hours prior">3 hours prior</option>'+
'<option value="18000" label="5 hours prior">5 hours prior</option>'+
'<option value="86400" label="1 day prior">1 day prior</option>'+
'</select>'+
'</div>'+
'</div>'+
'</td></tr><tr>'+
      '<td>Client Sales Rep:</td>' +
      '<td><input type="text" name="atc_clientsalesreps_atc_appointments_name" class="sqsEnabled yui-ac-input" tabindex="0" id="atc_clientsalesreps_atc_appointments_name" size="" value="" title="" autocomplete="off"><div id="EditView_atc_clientsalesreps_atc_appointments_name_results" class="yui-ac-container"><div class="yui-ac-content" style="display: none;"><div class="yui-ac-hd" style="display: none;"></div><div class="yui-ac-bd"><ul><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li></ul></div><div class="yui-ac-ft" style="display: none;"></div></div></div><input type="hidden" name="atc_clientsalesreps_atc_appointmentsatc_clientsalesreps_ida" id="atc_clientsalesreps_atc_appointmentsatc_clientsalesreps_ida" value=""><span class="id-ff multiple"><button type="button" name="btn_atc_clientsalesreps_atc_appointments_name" id="btn_atc_clientsalesreps_atc_appointments_name" tabindex="0" title="Select" class="button firstChild" value="Select" onclick="open_popup(\'ATC_ClientSalesReps\',600,400,\'\',true,false,{\'call_back_function\':\'set_return\',\'form_name\':\'ScheduleAppointment\',\'field_to_name_array\':{\'id\':\'atc_clientsalesreps_atc_appointmentsatc_clientsalesreps_ida\',\'name\':\'atc_clientsalesreps_atc_appointments_name\'}},\'single\',true);"><img src="themes/default/images/id-ff-select.png?v=4EzbG695t9PXTCsh7Rfh1Q"></button><button type="button" name="btn_clr_atc_clientsalesreps_atc_appointments_name" id="btn_clr_atc_clientsalesreps_atc_appointments_name" tabindex="0" title="Clear Selection" class="button lastChild" onclick="SUGAR.clearRelateField(this.form, \'atc_clientsalesreps_atc_appointments_name\', \'atc_clientsalesreps_atc_appointmentsatc_clientsalesreps_ida\');" value="Clear Selection"><img src="themes/default/images/id-ff-clear.png?v=4EzbG695t9PXTCsh7Rfh1Q"></button></span></td>' +
      '<td></td>' +
      '</tr>' +
      '<tr>' +
      '<td>Appointment Note:</td>' +
      '<td><textarea rows="5" cols="40" name="appointment_note"></textarea></td>' +
      '<td></td>' +
      '</tr>' +
      '</table>' +
      '</form>';

    top += '<h2>Scheduled Appointments</h2>' +
        '<table style="width: 100%;border-collapse: collapse;border-spacing: 0;" id="table_appointments">' +
        '<thead>' +
        '<tr>' +
        /*'<th valign="top" style = "padding: 3px;text-align : left ! important;" width="20%" scope="row">Name</th>' +*/
        '<th valign="top" style = "padding: 3px;text-align : left ! important;" width="20%" scope="row">Appoint. Date [EST]</th>' +
        /*'<th valign="top" style = "padding: 3px;text-align : left ! important;" width="20%" scope="row">Appoint. Date Orig.</th>' +*/
        '<th valign="top" style = "padding: 3px;text-align : left ! important;" width="20%" scope="row">Appoint. Num.</th>' +
        '<th valign="top" style = "padding: 3px;text-align : left ! important;" width="20%" scope="row">Appoint. Status</th>' +
        '<th valign="top" style = "padding: 3px;text-align : left ! important;" width="20%" scope="row">Appoint. Place</th>' +
        '<th valign="top" style = "padding: 3px;text-align : left ! important;" width="20%" scope="row">Client Sales Rep</th>' +
        '<th valign="top" style = "padding: 3px;text-align : left ! important;" width="20%" scope="row">Action</th>' +
        '</tr>' +
        '</thead>' +
        '<tbody>' +
        '</tbody>';
    top += '</table>';
  manageAppointmentsConfigureDlg[parent_record].setHeader("Schedule Appointment");
  manageAppointmentsConfigureDlg[parent_record].setBody(top);

  manageAppointmentsConfigureDlg[parent_record].render(document.body);
  manageAppointmentsConfigureDlg[parent_record].show();

  combo_appointment_date = new Datetimecombo("", "appointment_date", "11:00pm", "0", '', false, true);
//Render the remaining widget fields
  text = combo_appointment_date.html('');
  document.getElementById('appointment_date_time_section').innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
  eval(combo_appointment_date.jsscript(''));

//bug 47718: this causes too many addToValidates to be called, resulting in the error messages being displayed multiple times
//    removing it here to mirror the Datetime SugarField, where the validation is not added at this level
//addToValidate('EditView',"appointment_date_date",'date',false,"appointment_date");
  addToValidateBinaryDependency('EditView',"appointment_date_hours", 'alpha', false, "Missing required field: Hours" ,"appointment_date_date");
  addToValidateBinaryDependency('EditView', "appointment_date_minutes", 'alpha', false, "Missing required field: Minutes" ,"appointment_date_date");
  addToValidateBinaryDependency('EditView', "appointment_date_meridiem", 'alpha', false, "Missing required field: Meridiem","appointment_date_date");


    Calendar.setup ({
      onClose : update_appointment_date,
      inputField : "appointment_date_date",
      ifFormat : "%m/%d/%Y %I:%M%P",
      daFormat : "%m/%d/%Y %I:%M%P",
      button : "appointment_date_trigger",
      singleClick : true,
      step : 1,
      weekNumbers: false,
      startWeekday: 0,
      comboObject: combo_appointment_date
    });
	

    //Call update for first time to round hours and minute values
    combo_appointment_date.update(false);

  // load current appointment
  var target_list_id_val = document.getElementById('target_list_id').value;
  $.ajax({
    data: {module:"ATC_Appointments",entryPoint:"get_appointments",contact_id:parent_record,target_list_id:target_list_id_val},
    dataType: "json",
    url: "index.php",
    success: function(data){
      var result = data;
      if(result.error == true){
        alert(result.error_message);
        if(result.error_message == "Campaign not associated with Target List")
          manageAppointmentsConfigureDlg[workingAppointmentContactId].cancel();
        return;
      }
      for(var i = 0; i < result.result.length; i++){
        $("#table_appointments tbody").append("" +
            "<tr id='scheduled_appointment_" + i + "'>" +
            /*"<td style='padding: 3px;border-bottom: 1px solid'>"+result.result[i]['name']+"</td>" +*/
            "<td style='padding: 3px;border-bottom: 1px solid'>"+result.result[i]['appointment_date']+"</td>" +
            /*"<td style='padding: 3px;border-bottom: 1px solid'>"+result.result[i]['appointment_date_original']+"</td>" +*/
            "<td style='padding: 3px;border-bottom: 1px solid'>"+result.result[i]['appointment_number']+"</td>" +
            "<td style='padding: 3px;border-bottom: 1px solid'>"+result.result[i]['appointment_status']+"</td>" +
            "<td style='padding: 3px;border-bottom: 1px solid'>"+result.result[i]['appointment_place']+"</td>" +
            "<td style='padding: 3px;border-bottom: 1px solid'>"+result.result[i]['client_sales_rep']+"</td>" +
            "<td style='padding: 3px;border-bottom: 1px solid'><input type='button' value='Edit' onclick=\"edit_appointment('"+i+"')\">" +
            "<input type='hidden' name='name' value='"+result.result[i]['name']+"'>" +
            "<input type='hidden' name='appointment_date' value='"+result.result[i]['appointment_date']+"'>" +
            "<input type='hidden' name='appointment_date_original' value='"+result.result[i]['appointment_date_original']+"'>" +
            "<input type='hidden' name='appointment_number' value='"+result.result[i]['appointment_number']+"'>" +
            "<input type='hidden' name='appointment_place' value='"+result.result[i]['appointment_place']+"'>" +
            "<input type='hidden' name='client_sales_rep' value='"+result.result[i]['client_sales_rep']+"'>" +
            "<input type='hidden' name='client_sales_rep_id' value='"+result.result[i]['client_sales_rep_id']+"'>" +
            "<input type='hidden' name='date_string' value='"+result.result[i]['date_string']+"'>" +
            "<input type='hidden' name='h' value='"+result.result[i]['h']+"'>" +
            "<input type='hidden' name='m' value='"+result.result[i]['m']+"'>" +
            "<input type='hidden' name='s' value='"+result.result[i]['s']+"'>" +
            "<input type='hidden' name='a' value='"+result.result[i]['a']+"'>" +
            "<input type='hidden' name='description' value='"+result.result[i]['description']+"'>" +
            "<input type='hidden' name='appointment_status' value='"+result.result[i]['appointment_status']+"'>" +
            "<input type='hidden' name='appointment_id' value='"+result.result[i]['appointment_id']+"'>" +
            "<input type='hidden' name='appointment_duration_hours' value='"+result.result[i]['appointment_duration_hours']+"'>" +
            "<input type='hidden' name='appointment_duration_minutes' value='"+result.result[i]['appointment_duration_minutes']+"'>" +
            "</td>" +
            "</tr>" +
            "")
      }

    },
    error: function(jqXHR,error_message){

    }
  });
}

function edit_appointment(appointment_row_id){
  var appointment_row = $("#scheduled_appointment_"+appointment_row_id);
  //0 name,1 appointment_date,2 appointment_date_original,3 appointment_number, 4 appointment_place, 5 client_sales_rep,6 client_sales_rep_id,7 date_string,8 h,9 m,10 s,11 a,12 description,13 status,14 id, 15 appointment_duration_hours, 16 appointment_duration_minutes
  var hidden_inputs = $(appointment_row).find("input:hidden");

  /*$("#ScheduleAppointmentForm").find("input[name=appointment_name]").val($(hidden_inputs[0]).val());*/
  $("#ScheduleAppointmentForm").find("input[id=appointment_date_date]").val($(hidden_inputs[7]).val());
  // set hours
  $("#ScheduleAppointmentForm").find("#appointment_date_hours option[value="+$(hidden_inputs[8]).val()+"]").attr("selected","selected");
  // set minutes
  $("#ScheduleAppointmentForm").find("#appointment_date_minutes option[value="+$(hidden_inputs[9]).val()+"]").attr("selected","selected");
  // set am/pm
  $("#ScheduleAppointmentForm").find("#appointment_date_meridiem option[value="+$(hidden_inputs[11]).val()+"]").attr("selected","selected");

  $("#ScheduleAppointmentForm").find("input[name=appointment_date]").val($(hidden_inputs[1]).val());

  /*$("#ScheduleAppointmentForm").find("input[name=appointment_date_original]").val($(hidden_inputs[2]).val());*/

  $("#ScheduleAppointmentForm").find("input[name=atc_clientsalesreps_atc_appointments_name]").val($(hidden_inputs[5]).val());
  $("#ScheduleAppointmentForm").find("input[name=atc_clientsalesreps_atc_appointmentsatc_clientsalesreps_ida]").val($(hidden_inputs[6]).val());

  $("#ScheduleAppointmentForm").find("textarea[name=appointment_note]").html($(hidden_inputs[12]).val());
  $("#ScheduleAppointmentForm").find("select[name=appointment_place]").find("option[value='"+$(hidden_inputs[4]).val()+"']").attr("selected","selected");
  $("#ScheduleAppointmentForm").find("select[name=appointment_status]").find("option[value='"+$(hidden_inputs[13]).val()+"']").attr("selected","selected");
  $("#ScheduleAppointmentForm").find("input[name=appointment_id]").val($(hidden_inputs[14]).val());
  $("#ScheduleAppointmentForm").find("select[name=appointment_duration_hours]").find("option[value='"+$(hidden_inputs[15]).val()+"']").attr("selected","selected");
  $("#ScheduleAppointmentForm").find("select[name=appointment_duration_minutes]").find("option[value='"+$(hidden_inputs[16]).val()+"']").attr("selected","selected");



}
var last_appointment_modal_id = '';
var createAppointment = function () {
  var callback = {
    success: function (r) {
      // enable save button because we disabled it before doing save
      $("#" + last_appointment_modal_id).find("button:contains('Save')").removeAttr('disabled');
      try {
        if (window.ActiveXObject)
          ie = true;
        else
          ie = false;

        if (r.responseText) {
          if ((r.responseText == '') || (r.responseText == null)) {
            alert("There was an error processing your request.");
            err = true;
          } else {
            // We have a return value.
            var ret = JSON.parse(r.responseText);
            if(ret.error !== undefined){
              alert(ret.error);
              manageAppointmentsConfigureDlg[workingAppointmentContactId].cancel();
            }else{
              alert(ret.message);
              manageAppointmentsConfigureDlg[workingAppointmentContactId].cancel();
            }
            //Check for error messages
            //alert(ret.message);
          }
        }
      }
      catch (err) {
        alert(err);
        manageAppointmentsConfigureDlg[workingAppointmentContactId].cancel();
      }
    }
  };

  var module = document.getElementById('module_name').value; // should be Contacts
  var parent_record = document.getElementById('parent_id').value; // id of Contact
  var target_list_id_val = ''; // id of target List
  if (document.getElementById('target_list_id'))
    target_list_id_val = document.getElementById('target_list_id').value;
  //Make sure the data is filled-in
  if ($("#ScheduleAppointmentForm").find("#appointment_name").val() == '') {
    alert("Please enter a value in the Name field");
    return;
  }

  last_appointment_modal_id = this.id;
  $("#" + this.id).find("button:contains('Save')").attr('disabled','disabled');

  var postData;
  postData = '&module=ATC_Appointments&save_module=' + module + '&parent_id=' + parent_record + '&target_list_id=' + target_list_id_val;

  // add fields for saving
  postData += '&appointment_id=' + $("#ScheduleAppointmentForm").find("input[name=appointment_id]").val();
  /*postData += '&appointment_name=' + $("#ScheduleAppointmentForm").find("input[name=appointment_name]").val();*/
  postData += '&appointment_status=' + $("#ScheduleAppointmentForm").find("select[name=appointment_status] option:selected").val();
  postData += '&appointment_place=' + $("#ScheduleAppointmentForm").find("select[name=appointment_place] option:selected").val();
  postData += '&contact_email=' + $("#ScheduleAppointmentForm").find("input[name=contact_email]").val();
window.alert($("#ScheduleAppointmentForm").find("input[name=contact_email]").val());
  postData += '&appointment_duration_hours=' + $("#ScheduleAppointmentForm").find("select[name=appointment_duration_hours] option:selected").val();
  postData += '&appointment_duration_minutes=' + $("#ScheduleAppointmentForm").find("select[name=appointment_duration_minutes] option:selected").val();
  postData += '&appointment_date=' + $("#ScheduleAppointmentForm").find("input[name=appointment_date]").val();
  /*postData += '&appointment_date_original=' + $("#ScheduleAppointmentForm").find("input[name=appointment_date_original]").val();*/
  postData += '&atc_clientsalesreps_atc_appointments_name=' + $("#ScheduleAppointmentForm").find("input[name=atc_clientsalesreps_atc_appointments_name]").val();
  postData += '&atc_clientsalesreps_atc_appointmentsatc_clientsalesreps_ida=' + $("#ScheduleAppointmentForm").find("input[name=atc_clientsalesreps_atc_appointmentsatc_clientsalesreps_ida]").val();
  postData += '&appointment_note=' + $("#ScheduleAppointmentForm").find("textarea[name=appointment_note]").val();
  postData += '&reminder_checked=' + $("#ScheduleAppointmentForm").find("input[name=reminder_checked]").prop('checked');postData += '&reminder_time=' + $("#ScheduleAppointmentForm").find("select[name=reminder_time]").val();


  YAHOO.util.Connect.asyncRequest('POST', 'index.php?entryPoint=create_appointment',
      callback, postData);

  //Clar out the cached overlibs
  if (typeof SUGAR.util.additionalDetailsCache[parent_record] != 'undefined')
    delete SUGAR.util.additionalDetailsCache[parent_record];
}

function toggleReminder(el,field){
	if(el.checked){
		document.getElementById(field + "_list").style.display = "inline";
	}else{
		document.getElementById(field + "_list").style.display = "none";
	}
}
