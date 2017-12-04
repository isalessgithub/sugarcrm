<?php
 // created: 2017-11-08 20:11:27
$dictionary['Contact']['fields']['account_phone_c']['duplicate_merge_dom_value']=0;
$dictionary['Contact']['fields']['account_phone_c']['labelValue']='Account Phone';
$dictionary['Contact']['fields']['account_phone_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['account_phone_c']['calculated']='1';
$dictionary['Contact']['fields']['account_phone_c']['formula']='related($accounts,"phone_office")';
$dictionary['Contact']['fields']['account_phone_c']['enforced']='1';
$dictionary['Contact']['fields']['account_phone_c']['dependency']='';

 ?>