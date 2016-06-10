<?php
class beforeSaveRelationship
{
  function setClientEmailAddress($bean, $event, $args)
  {
    if($bean->atc_clients_quotes_1atc_clients_ida != null)
    {
      $client = new ATC_Clients();
      $email_addresses = new SugarEmailAddress;
      $client->retrieve($bean->atc_clients_quotes_1atc_clients_ida);
      $bean->client_email_address_c = ""; 
     $q = "SELECT ea.email_address, ea.email_address_caps, ea.invalid_email, ea.opt_out, ea.date_created, ea.date_modified,
                ear.id, ear.email_address_id, ear.bean_id, ear.bean_module, ear.primary_address, ear.reply_to_address, ear.deleted
                FROM email_addresses ea LEFT JOIN email_addr_bean_rel ear ON ea.id = ear.email_address_id
                WHERE ear.bean_module = 'ATC_Clients'
                AND ear.bean_id = '".$client->id."'
                AND ear.deleted = 0
                ORDER BY ear.reply_to_address, ear.primary_address DESC";
      $r = $bean->db->query($q);
      while($a = $bean->db->fetchByAssoc($r, FALSE)) 
      {
	if(count($a) == 1)
	{
  	  $bean->client_email_address_c = $a['email_address'];
	} 
	else
	{
          $bean->client_email_address_c .= $a['email_address'].", ";
	}
      }
    }
    else
    {
      $bean->client_email_address_c = "";
    }
  }
}
?>
