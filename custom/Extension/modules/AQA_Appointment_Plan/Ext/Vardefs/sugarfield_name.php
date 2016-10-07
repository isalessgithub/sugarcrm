<?php
 // created: 2016-10-07 12:36:24
$dictionary['AQA_Appointment_Plan']['fields']['name']['importable'] = 'false';
$dictionary['AQA_Appointment_Plan']['fields']['name']['duplicate_merge'] = 'disabled';
$dictionary['AQA_Appointment_Plan']['fields']['name']['duplicate_merge_dom_value'] = 0;
$dictionary['AQA_Appointment_Plan']['fields']['name']['merge_filter'] = 'disabled';
$dictionary['AQA_Appointment_Plan']['fields']['name']['unified_search'] = false;
$dictionary['AQA_Appointment_Plan']['fields']['name']['calculated'] = 'true';
$dictionary['AQA_Appointment_Plan']['fields']['name']['formula'] = 'concat(related($assigned_user_link,"name")," - ",related($aqa_appointment_plan_atc_isscampaigns,"name")," - ",monthofyear($month_start_date))';
$dictionary['AQA_Appointment_Plan']['fields']['name']['enforced'] = true;
$dictionary['AQA_Appointment_Plan']['fields']['name']['full_text_search']['enabled'] = true;
$dictionary['AQA_Appointment_Plan']['fields']['name']['full_text_search']['searchable'] = true;
$dictionary['AQA_Appointment_Plan']['fields']['name']['full_text_search']['boost'] = 1.55;

