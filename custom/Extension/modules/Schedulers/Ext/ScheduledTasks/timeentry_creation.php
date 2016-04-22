 <?php
 array_push($job_strings, 'timeentry_creation');
 function timeentry_creation(){
 	$db = DBManagerFactory::GetInstance();
	global $timedate;

	$timeentry_query = "SELECT users.id as 'user_id', users.user_name as 'user', X.first_action as 'first_action', Y.last_action as 'last_action', 
						X.action_count as 'action_count', round(time_to_sec(timediff(last_action, first_action))/3600,1) as 'calculated_hours'
						from users
						join(	select user_id, DATE_SUB(min(date_modified), INTERVAL 5 HOUR) as 'first_action', count(id) as 'action_count' 
								from tracker where date(date_SUB(date_modified, interval 5 HOUR)) = date(DATE_SUB(now(), INTERVAL 1 DAY)) group by user_id) as X
						on X.user_id = users.id
						join(	select user_id, DATE_SUB(max(date_modified), INTERVAL 5 HOUR) as 'last_action' 
								from tracker where date(date_SUB(date_modified, interval 5 HOUR)) = date(DATE_SUB(now(), INTERVAL 1 DAY)) group by user_id) as Y 
						on Y.user_id = users.id;";

	$result = $db->query($timeentry_query);
	while ($obj = $db->fetchRow($result)){
		$bean = BeanFactory::newBean('TE_TimeEntries');
		$bean->name = $obj['user'].$obj['first_action'];
		$bean->first_action = $obj['first_action'];
		$bean->last_action = $obj['last_action'];
		$bean->calculated_hours = $obj['calculated_hours'];
		$bean->assigned_user_id = $obj['user_id'];
		$bean->action_count = $obj['action_count'];
		$bean->save();
	}
return true;
}
