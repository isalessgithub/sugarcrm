<?php
 // created: 2018-06-29 10:54:26
$dictionary['ISS2_Campaign_Assignment']['fields']['team_target_rem_c']['duplicate_merge_dom_value']=0;
$dictionary['ISS2_Campaign_Assignment']['fields']['team_target_rem_c']['labelValue']='Team Target (Remaining)';
$dictionary['ISS2_Campaign_Assignment']['fields']['team_target_rem_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['ISS2_Campaign_Assignment']['fields']['team_target_rem_c']['calculated']='true';
$dictionary['ISS2_Campaign_Assignment']['fields']['team_target_rem_c']['formula']='subtract($team_target_c,$team_completed_c)';
$dictionary['ISS2_Campaign_Assignment']['fields']['team_target_rem_c']['enforced']='true';
$dictionary['ISS2_Campaign_Assignment']['fields']['team_target_rem_c']['dependency']='';

 ?>