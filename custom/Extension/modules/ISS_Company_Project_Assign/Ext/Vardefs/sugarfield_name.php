<?php
 // created: 2018-05-07 15:34:01
$dictionary['ISS_Company_Project_Assign']['fields']['name']['len']='255';
$dictionary['ISS_Company_Project_Assign']['fields']['name']['audited']=true;
$dictionary['ISS_Company_Project_Assign']['fields']['name']['massupdate']=false;
$dictionary['ISS_Company_Project_Assign']['fields']['name']['importable']='false';
$dictionary['ISS_Company_Project_Assign']['fields']['name']['duplicate_merge']='disabled';
$dictionary['ISS_Company_Project_Assign']['fields']['name']['duplicate_merge_dom_value']=0;
$dictionary['ISS_Company_Project_Assign']['fields']['name']['merge_filter']='disabled';
$dictionary['ISS_Company_Project_Assign']['fields']['name']['unified_search']=false;
$dictionary['ISS_Company_Project_Assign']['fields']['name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.55',
  'searchable' => true,
);
$dictionary['ISS_Company_Project_Assign']['fields']['name']['calculated']='1';
$dictionary['ISS_Company_Project_Assign']['fields']['name']['formula']='concat(getDropdownValue("cp_assign_status_list",$cp_assign_status_c)," ",related($tasks_iss_company_project_assign_1,"name")," Project")';
$dictionary['ISS_Company_Project_Assign']['fields']['name']['enforced']=true;

 ?>