<?php
 // created: 2018-05-14 14:54:24
$dictionary['ATC_Appointments']['fields']['partial_amount_c']['labelValue']='Partial Comp. Amount';
$dictionary['ATC_Appointments']['fields']['partial_amount_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['ATC_Appointments']['fields']['partial_amount_c']['enforced']='';
$dictionary['ATC_Appointments']['fields']['partial_amount_c']['dependency']='equal($partial_comp_c,"yes")';

 ?>