<?php

   require_once('include/MVC/View/views/view.edit.php');
   
   class ATC_AppointmentsViewEdit extends ViewEdit {
         public function __construct() {
           parent::ViewEdit();
           $this->useForSubpanel = true; // this variable specifies that these changes should work for subpanel
           $this->useModuleQuickCreateTemplate = true; // quick create template too
         }

         function display() {
        
             global $mod_strings;
             //JS to make field mendatory 
             $jsscript = <<<EOQ
                   <script>
                       // Change blog_status_c to the field of your module
                       $('#appointment_status').change(function() {
                            makerequired(); // onchange call function to mark the field required
                       });
                     function makerequired()
                     {
                        var status = $('#appointment_status').val(); // get current value of the field 
                         if(status == 'Attended' || status== 'DC_Appt_Attended' || status=='Attended_Policy'){ // check if it matches the condition: if true,
                                addToValidate('EditView','clientrep_email1_c','varchar',true,'{$mod_strings['LBL_CLIENTREP_EMAIL1']}');    // mark Description field required
                                $('#clientrep_email1_c_label_label').html('{$mod_strings['LBL_CLIENTREP_EMAIL1']}: <font color="red">*</font>'); // with red * sign next to label

                                addToValidate('EditView','clientrep_email2_c','varchar',true,'{$mod_strings['LBL_CLIENTREP_EMAIL2']}');    // mark Description field required
                                $('#clientrep_email2_c_label_label').html('{$mod_strings['LBL_CLIENTREP_EMAIL2']}: <font color="red">*</font>'); // with red * sign next to label

                         }
                         else{
                                removeFromValidate('EditView','clientrep_email1_c');                        // else remove the validtion applied
                                $('#clientrep_email1_c_label').html('{$mod_strings['LBL_CLIENTREP_EMAIL1']}: '); // and give the normal label back 
                         
                                removeFromValidate('EditView','clientrep_email2_c');                        // else remove the validtion applied
                                $('#clientrep_email2_c_label').html('{$mod_strings['LBL_CLIENTREP_EMAIL2']}: '); // and give the normal label back

                         }
                    }
                    makerequired(); //Call at onload while editing a Published blog record
                </script>
EOQ;
         parent::display();
          echo $jsscript;     //echo the script
      }
   }

?>
