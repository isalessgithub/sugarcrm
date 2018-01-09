<?php
 // created: 2018-01-02 15:51:34
$dictionary['Task']['fields']['from_list_c']['duplicate_merge_dom_value']=0;
$dictionary['Task']['fields']['from_list_c']['labelValue']='From Target List';
$dictionary['Task']['fields']['from_list_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Task']['fields']['from_list_c']['calculated']='true';
$dictionary['Task']['fields']['from_list_c']['formula']='related($tasks_prospectlists_1,"name")';
$dictionary['Task']['fields']['from_list_c']['enforced']='true';
$dictionary['Task']['fields']['from_list_c']['dependency']='';

 ?>