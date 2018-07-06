<?php
 // created: 2018-06-28 15:02:11
$dictionary['ISS2_Campaign_Assignment']['fields']['name']['len']='255';
$dictionary['ISS2_Campaign_Assignment']['fields']['name']['audited']=false;
$dictionary['ISS2_Campaign_Assignment']['fields']['name']['massupdate']=false;
$dictionary['ISS2_Campaign_Assignment']['fields']['name']['importable']='false';
$dictionary['ISS2_Campaign_Assignment']['fields']['name']['duplicate_merge']='disabled';
$dictionary['ISS2_Campaign_Assignment']['fields']['name']['duplicate_merge_dom_value']=0;
$dictionary['ISS2_Campaign_Assignment']['fields']['name']['merge_filter']='disabled';
$dictionary['ISS2_Campaign_Assignment']['fields']['name']['unified_search']=false;
$dictionary['ISS2_Campaign_Assignment']['fields']['name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.55',
  'searchable' => true,
);
$dictionary['ISS2_Campaign_Assignment']['fields']['name']['calculated']='1';
$dictionary['ISS2_Campaign_Assignment']['fields']['name']['formula']='concat(getDropdownValue("business_unit_list",$team_assigned_c)," Results - ",related($iss2_campaign_assignment_atc_isscampaigns,"name"))';
$dictionary['ISS2_Campaign_Assignment']['fields']['name']['enforced']=true;

 ?>