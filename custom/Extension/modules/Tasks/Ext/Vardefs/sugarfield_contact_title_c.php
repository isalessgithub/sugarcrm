<?php
 // created: 2018-01-11 20:00:32
$dictionary['Task']['fields']['contact_title_c']['duplicate_merge_dom_value']=0;
$dictionary['Task']['fields']['contact_title_c']['labelValue']='Contact Title';
$dictionary['Task']['fields']['contact_title_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Task']['fields']['contact_title_c']['calculated']='true';
$dictionary['Task']['fields']['contact_title_c']['formula']='related($contacts,"title")';
$dictionary['Task']['fields']['contact_title_c']['enforced']='true';
$dictionary['Task']['fields']['contact_title_c']['dependency']='';

 ?>