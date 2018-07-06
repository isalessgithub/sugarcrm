<?php
 // created: 2018-06-29 10:51:06
$dictionary['ISS2_Campaign_Assignment']['fields']['team_completed_c']['duplicate_merge_dom_value']=0;
$dictionary['ISS2_Campaign_Assignment']['fields']['team_completed_c']['labelValue']='Completed';
$dictionary['ISS2_Campaign_Assignment']['fields']['team_completed_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['ISS2_Campaign_Assignment']['fields']['team_completed_c']['calculated']='1';
$dictionary['ISS2_Campaign_Assignment']['fields']['team_completed_c']['formula']='related($iss2_campaign_assignment_atc_isscampaigns,"appointment_attended_c")';
$dictionary['ISS2_Campaign_Assignment']['fields']['team_completed_c']['enforced']='1';
$dictionary['ISS2_Campaign_Assignment']['fields']['team_completed_c']['dependency']='';

 ?>