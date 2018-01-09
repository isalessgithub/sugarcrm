<?php
 // created: 2018-01-03 16:42:13
$dictionary['Task']['fields']['name']['required']=false;
$dictionary['Task']['fields']['name']['audited']=true;
$dictionary['Task']['fields']['name']['massupdate']=false;
$dictionary['Task']['fields']['name']['importable']='false';
$dictionary['Task']['fields']['name']['duplicate_merge']='disabled';
$dictionary['Task']['fields']['name']['duplicate_merge_dom_value']=0;
$dictionary['Task']['fields']['name']['merge_filter']='disabled';
$dictionary['Task']['fields']['name']['unified_search']=false;
$dictionary['Task']['fields']['name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Task']['fields']['name']['calculated']='1';
$dictionary['Task']['fields']['name']['formula']='related($atc_appointments_tasks_1,"actsas_c")';
$dictionary['Task']['fields']['name']['enforced']=true;

 ?>