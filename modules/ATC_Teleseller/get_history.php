<?php


$a = true;

if($_REQUEST['base_module'] == 'Calls' && $_REQUEST['module_name'] == 'Contacts'){
    echo callHistory($_REQUEST['record_id']);
    die();
}

if($_REQUEST['base_module'] == 'Notes' && $_REQUEST['module_name'] == 'Contacts'){
    echo noteHistory($_REQUEST['record_id']);
    die();
}

echo(json_encode(array(1,2,3,54)));

function callHistory($record){
    global $db;

    // Return 10 most recent calls
    $sql = "SELECT pl.name as TLName ,calls.description AS Description, CONVERT_TZ(MAX(calls.date_entered),'GMT','US/Eastern') AS Create_Date, calls_cstm.call_outcome_c AS Outcome FROM calls
	LEFT JOIN calls_contacts ON calls.id = calls_contacts.call_id
	INNER JOIN calls_cstm ON calls.id = calls_cstm.id_c
	LEFT JOIN prospectlists_calls_1_c AS plc ON plc.prospectlists_calls_1calls_idb = calls.id
	LEFT JOIN prospect_lists AS pl ON pl.id = prospectlists_calls_1prospectlists_ida
	WHERE calls_contacts.contact_id = '" . $record . "' AND calls.deleted = 0 GROUP BY TLName,Description,Outcome ORDER BY Create_Date DESC LIMIT 10";
    $history = null;
    $result = $db->query($sql, true);
    while (($rows = $db->fetchByAssoc($result)) != null) {
        // replace special characters because newline for example is not allowed in JSON
        foreach ($rows as $k => $v) {
            $rows[$k] = trim(preg_replace('/(\r\n)|\n|\t|\r|\\\\/', '', $v));
        }
        $history[] = $rows;

    }
    $json_history = json_encode($history);
//    $json_history = htmlspecialchars($json_history);

    return $json_history;
}

function noteHistory($record){
    global $db;

    // Return 10 most recent notes
    $note_sql = "SELECT notes.name AS 'NAME', CONVERT_TZ(notes.date_entered,'GMT','US/Eastern') AS Create_Date, tl.name AS 'target_list_name' FROM notes
INNER JOIN prospectlists_notes_1_c AS tln ON tln.prospectlists_notes_1notes_idb = notes.id
INNER JOIN prospect_lists AS tl ON tl.id = tln.prospectlists_notes_1prospectlists_ida
WHERE notes.contact_id = '" . $record . " ' AND notes.deleted = 0 ORDER BY notes.date_entered DESC LIMIT 10";

    $note_history = null;
    $note_result = $db->query($note_sql, true);
    while (($note_rows = $db->fetchByAssoc($note_result)) != null) {
        $note_history[] = $note_rows;
    }
    $json_notes = json_encode($note_history);
//    $json_notes = htmlspecialchars($json_notes);

    return $json_notes;
}
