<?php
if(!defined('sugarEntry') || !sugarEntry) die ('Not a valid Entry Point');

global $current_user;

$call = new Call();
$module = $_POST['module'];
$parent_id = $_POST['parent_id'];
$desc = $_POST['description'];
$date_start=$_POST['date_start'];

//Calculate the due date for the call.  If the hours and minutes are blank
//make it 9 AM

$dt_start_hours='9';
if (isset($_POST['date_start_hours']))
    $dt_start_hours=$_POST['date_start_hours'];
    
$date_start_minutes='00';
if (isset($_POST['date_start_minutes']))
    $date_start_minutes=$_POST['date_start_minutes'];
    
    
$dt = date_create_from_format('m/d/Y H:i', $date_start . ' '. $dt_start_hours . ":" .$date_start_minutes  );


//Format the date based on the user's date time preference
$pref = $GLOBALS['current_user']->getUserDateTimePreferences();
$format_string = $pref['date'] . ' ' . $pref['time'];
$call->date_start = $dt->format($format_string);
$cur_dt_str = date($pref['date']);

$call->name = $desc;


$call->assigned_user_id = $current_user->id;
$call->assigned_user_name = $current_user->full_name;
$call->direction = "Outbound";
$call->status = "Planned";

if($module == 'Contacts')
{
   $Contacts = new Contact();
   $Contacts->disable_row_level_security=true; 
   $Contacts->retrieve($parent_id);
   $call->parent_type = "Contacts"; 
   $call->parent_id = $parent_id;
   if(isset($call->name))
   {
    $Contacts->description .= "\n$cur_dt_str * Call Scheduled for ". $call->date_start . " by ". $current_user->full_name ." * ".$call->name;
    $Contacts->save();
    //$call->name = "Made call to " . $Contacts->full_name;
   } 
}
else if($module == 'Accounts')
{
   $Accounts = new Account();
   $Accounts->disable_row_level_security=true; 
   $Accounts->retrieve($parent_id);
   $call->parent_type = "Accounts"; 
   $call->parent_id = $parent_id;
   if(isset($call->name))
   {
       $Accounts->description .= "\n$cur_dt_str * Call Scheduled for ". $call->date_start . " by ". $current_user->full_name ." * ".$call->name;
       $Accounts->save();
       //$call->name = "Made call to " . $Accounts->name;
   } 
}
else if($module == 'Prospects')
{
   $Prospects = new Prospect();
   $Prospects->disable_row_level_security=true; 
   $Prospects->retrieve($parent_id);
   $call->parent_type = "Prospects"; 
   $call->parent_id = $parent_id;

   if(isset($call->name))
   {
       $Prospects->description .= "\n$cur_dt_str * Call Scheduled for ". $call->date_start . " by ". $current_user->full_name ." * ".$call->name;
       $Prospects->save();
       //$call->name = "Made call to " . $Prospects->full_name;
   }
}
else if($module == 'Leads')
{
   $Leads = new Lead();
   $Leads->disable_row_level_security=true; 
   $Leads->retrieve($parent_id);
   $call->parent_type = "Leads"; 
   $call->parent_id = $parent_id;
   if(isset($call->name))
   {
       $Leads->description .= "\n$cur_dt_str * Call Scheduled for ". $call->date_start . " by ". $current_user->full_name ." * ".$call->name;
       $Leads->save();
       //$call->name = "Made call to " . $Leads->full_name;
   }  
}
$_SESSION['disable_workflow'] = "No";
$call->save();
if($module == "Contacts")
{
    //set relationship between calls and contacts calls_contacts
    $columns = array("call_id" => $call->id, "contact_id" => $parent_id);
    $values = array($call->id, $parent_id);
    $call->set_relationship('calls_contacts',$columns,true,false,null);
   //$call->calls_contacts->add($parent_id);
    
}

if($module == "Leads")
{
    //set relationship between calls and leads calls_leads
    $columns = array("call_id" => $call->id, "lead_id" => $parent_id);
    $values = array($call->id, $parent_id);
    $call->set_relationship('calls_leads',$columns,true,false,null);    
}

if($call->id != "" && ${$module}->id != "")
{
    if($call->name != "No Result")
    {
        $msg = "Scheduled Call Created successfully!";
    }
    else
    {
        $msg = "Scheduled Call Created with No Result subject!"; 
    }
}
else
{
     $msg = "Scheduled Call Creation Failed, Please try again."; 
}

$ret = array('message'=>$msg,'row_id' => $parent_id);
echo json_encode($ret);    
      
?>
