<?php
class ATC_ParentAccountC
{
    function ATC_ParentAccountF($bean, $event, $args){
        if(!empty($bean->account_id))
        {
            $oAccount = BeanFactory::getBean('Accounts', $bean->account_id);
            $oAccount->add_to_target_list_c = '';
            $oAccount->save();
        }
    }
}
