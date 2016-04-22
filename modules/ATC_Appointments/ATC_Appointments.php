<?PHP
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

/**
 * THIS CLASS IS FOR DEVELOPERS TO MAKE CUSTOMIZATIONS IN
 */
require_once('modules/ATC_Appointments/ATC_Appointments_sugar.php');
class ATC_Appointments extends ATC_Appointments_sugar {

  function ATC_Appointments() {
    parent::ATC_Appointments_sugar();
  }

  function save($check_notify = FALSE) {
    parent::save();

    // update name as appointment number
    $db = DBManagerFactory::getInstance();
    // get number from db
    $get_number = "SELECT appointment_number FROM atc_appointments WHERE id = '{$this->id}'";
    $number_result = $db->query($get_number);
    while ($row = $db->fetchByAssoc($number_result)) {
      $this->name = $row['appointment_number'];
      $update_sql = "UPDATE atc_appointments SET name = '" . $row['appointment_number'] . "' WHERE id = '{$this->id}'";
      $db->query($update_sql);
    }
  }

}

?>