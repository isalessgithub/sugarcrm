<?php
if(!defined('sugarEntry') || !sugarEntry) die ('Not a valid Entry Point');

global $current_user;

$pref = $GLOBALS['current_user']->getUserDateTimePreferences();
$cur_dt_str = date($pref['date']);



$note = new Note();
$module = $_POST['module'];
$parent_id = $_POST['parent_id'];

$note->name = $_POST['description'];


$note->assigned_user_id = $current_user->id;
//$note->assigned_user_name = $current_user->full_name;
//$note->direction = "Outbound";
//$note->status = "Held";
//$note->date_start = date('m/d/Y h:ia'); //'12/06/2010 03:03pm'; 
if($module == 'Contacts')
{
   $Contacts = new Contact();
   $Contacts->disable_row_level_security=true; 
   $Contacts->retrieve($parent_id);
   $note->parent_type = "Contacts"; 
   $note->parent_id = $parent_id;
   $note->contact_id = $parent_id;
   if(isset($note->name))
   {
    $Contacts->description .= "\n$cur_dt_str * Note created by ". $current_user->full_name ." * ".$note->name;
    $Contacts->save();
    //$note->name = "Made call to " . $Contacts->full_name;
   }
   // lets relate the call to Target list
   if(!empty($_REQUEST['target_list_id']))
        $note->prospectlists_notes_1prospectlists_ida = $_REQUEST['target_list_id'];
}
else if($module == 'Accounts')
{
   $Accounts = new Account();
   $Accounts->disable_row_level_security=true; 
   $Accounts->retrieve($parent_id);
   $note->parent_type = "Accounts"; 
   $note->parent_id = $parent_id;
   
   if(isset($note->name))
   {
       $Accounts->description .= "\n$cur_dt_str * Note created by ". $current_user->full_name ." * ".$note->name;
       $Accounts->save();
       //$note->name = "Made call to " . $Accounts->name;
   } 
}
else if($module == 'Prospects')
{
   $Prospects = new Prospect();
   $Prospects->disable_row_level_security=true; 
   $Prospects->retrieve($parent_id);
   $note->parent_type = "Prospects"; 
   $note->parent_id = $parent_id;

   if(isset($note->name))
   {
       $Prospects->description .= "\n$cur_dt_str * Note created by ". $current_user->full_name ." * ".$note->name;
       $Prospects->save();
       //$note->name = "Made call to " . $Prospects->full_name;
   }
}
else if($module == 'Leads')
{
   $Leads = new Lead();
   $Leads->disable_row_level_security=true; 
   $Leads->retrieve($parent_id);
   $note->parent_type = "Leads"; 
   $note->parent_id = $parent_id;
   if(isset($note->name))
   {
       $Leads->description .= "\n$cur_dt_str * Note created by ". $current_user->full_name ." * ".$note->description;
       $Leads->save();
       //$note->name = "Made call to " . $Leads->full_name;
   }  
}
$_SESSION['disable_workflow'] = "Yes";
$note->save();
$_SESSION['disable_workflow'] = "No";


if($note->id != "" && ${$module}->id != "")
{
    if($note->name != "No Result")
    {
        $msg = "Note Created successfully!";
    }
    else
    {
        $msg = "Note Created with No Result subject!"; 
    }
}
else
{
     $msg = "Note Creation Failed, Please try again."; 
}

$ret = array('message'=>$msg,'row_id' => $parent_id);
echo json_encode($ret);    
      
?>
