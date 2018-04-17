<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class GetAppointmentListsAPI extends SugarApi
{
    public function registerApiRest()
    {
        return array(
            //GET
            'MyAppointmentLists' => array(
                //request type
                'reqType' => 'GET',

                //set authentication
                'noLoginRequired' => false,

                //endpoint path
                'path' => array('GetAppointmentLists', '?'),

                //endpoint variables
                'pathVars' => array('', 'account_id'),

                //method to call
                'method' => 'GetAppointmentLists',

                //short help string to be displayed in the help documentation
                'shortHelp' => 'An example of a GET endpoint',

                //long help to be displayed in the help documentation
                'longHelp' => 'custom/clients/base/api/help/MyEndPoint_MyGetEndPoint_help.html',
            ),
        );
    }

    /**
     * Method to be used for my MyEndpoint/GetExample endpoint
     */
    public function GetAppointmentLists($api, $args)
    {
        //custom logic

        global $db;
       
        $sql="select distinct atc_appointments.id as app_id,
                atc_appointments.appointment_date as app_date,
                atc_appointments.appointment_status as app_status,
                atc_appointments.appointment_number as app_number,
                atc_isscampaigns.id as campaign_id, 
                atc_isscampaigns.name as campaign_name
from atc_isscampaigns 
inner join atc_isscampaigns_cstm on atc_isscampaigns.id = atc_isscampaigns_cstm.id_c and atc_isscampaigns.deleted=0 
AND (atc_isscampaigns_cstm.campaign_finish_date_c = '' OR atc_isscampaigns_cstm.campaign_finish_date_c is null) AND (atc_isscampaigns_cstm.campaign_start_date_c is not null AND atc_isscampaigns_cstm.campaign_start_date_c != '')
inner join atc_isscampaigns_atc_appointments_c on atc_isscampaigns_atc_appointmentsatc_isscampaigns_ida = atc_isscampaigns_cstm.id_c AND atc_isscampaigns_atc_appointments_c.deleted=0
inner join atc_appointments on atc_isscampaigns_atc_appointments_c.atc_isscampaigns_atc_appointmentsatc_appointments_idb=atc_appointments.id
inner join atc_appointments_contacts_c on atc_appointments.id=atc_appointments_contactsatc_appointments_idb 
inner join accounts_contacts on atc_appointments_contacts_c.atc_appointments_contactscontacts_ida=accounts_contacts.contact_id

where account_id='{$args['account_id']}'";
       
       $tlists=array();

       $result=$db->query($sql);
       while ($row=$db->fetchByAssoc($result)){
          $tlists[$row['app_id']]['app_id']=$row['app_id'];
          $tlists[$row['app_id']]['app_date']=date("Y-m-d",strtotime($row['app_date']));
          $tlists[$row['app_id']]['app_status']=$row['app_status'];
          $tlists[$row['app_id']]['app_number']=$row['app_number'];
          $tlists[$row['app_id']]['campaign_id']=$row['campaign_id'];
          $tlists[$row['app_id']]['campaign_name']=$row['campaign_name'];
          //$tlists[$row['target_list_id']]['target_list_description']=$row['target_list_description'];
       }

       return $tlists;
    }

}

?>
