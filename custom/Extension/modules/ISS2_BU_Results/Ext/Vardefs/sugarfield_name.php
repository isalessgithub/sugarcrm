<?php
 // created: 2018-10-25 15:26:39
$dictionary['ISS2_BU_Results']['fields']['name']['len']='255';
$dictionary['ISS2_BU_Results']['fields']['name']['audited']=false;
$dictionary['ISS2_BU_Results']['fields']['name']['massupdate']=false;
$dictionary['ISS2_BU_Results']['fields']['name']['importable']='false';
$dictionary['ISS2_BU_Results']['fields']['name']['duplicate_merge']='disabled';
$dictionary['ISS2_BU_Results']['fields']['name']['duplicate_merge_dom_value']=0;
$dictionary['ISS2_BU_Results']['fields']['name']['merge_filter']='disabled';
$dictionary['ISS2_BU_Results']['fields']['name']['unified_search']=false;
$dictionary['ISS2_BU_Results']['fields']['name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.55',
  'searchable' => true,
);
$dictionary['ISS2_BU_Results']['fields']['name']['calculated']='true';
$dictionary['ISS2_BU_Results']['fields']['name']['formula']='concat(strToUpper($team_assigned_c)," Assignment - ",related($iss2_bu_results_atc_isscampaigns,"name"))';
$dictionary['ISS2_BU_Results']['fields']['name']['enforced']=true;

 ?>