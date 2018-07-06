<?php
 // created: 2018-06-28 13:59:20
$dictionary['ISS2_Campaign_Assignment']['fields']['campaign_target_c']['duplicate_merge_dom_value']=0;
$dictionary['ISS2_Campaign_Assignment']['fields']['campaign_target_c']['labelValue']='Campaign Target (Total)';
$dictionary['ISS2_Campaign_Assignment']['fields']['campaign_target_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['ISS2_Campaign_Assignment']['fields']['campaign_target_c']['calculated']='true';
$dictionary['ISS2_Campaign_Assignment']['fields']['campaign_target_c']['formula']='related($iss2_campaign_assignment_atc_isscampaigns,"appointment_target_campaign_c")';
$dictionary['ISS2_Campaign_Assignment']['fields']['campaign_target_c']['enforced']='true';
$dictionary['ISS2_Campaign_Assignment']['fields']['campaign_target_c']['dependency']='';

 ?>