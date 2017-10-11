<?php

    class repLogic
    {
        function setRepEmail($bean, $event, $arguments)
        {
            if(!empty($bean->atc_clientsalesreps_id_c) && empty(clientrep_email2_c)){
               $rep=BeanFactory::retrieveBean("ATC_ClientSalesReps",$bean->atc_clientsalesreps_id_c);
               $bean->clientrep_email2_c=$rep->email1;
            }

            if(!empty($bean->atc_clientsalesreps_atc_appointmentsatc_clientsalesreps_ida) && empty(clientrep_email1_c)){
               $rep=BeanFactory::retrieveBean("ATC_ClientSalesReps",$bean->atc_clientsalesreps_atc_appointmentsatc_clientsalesreps_ida);
               $bean->clientrep_email1_c=$rep->email1;
            }
        }
    }
?>
