<?php
 // created: 2017-10-14 14:37:54
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
$dictionary['Task']['fields']['name']['formula']='related($accounts,"name")';
$dictionary['Task']['fields']['name']['enforced']=true;

 ?>
