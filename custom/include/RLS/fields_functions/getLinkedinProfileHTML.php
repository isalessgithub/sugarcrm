<?php function getLinkedinProfileHTML( $V1818d506, $V06e3d36f = 'linkedin_profile', $V2063c160,
 $view = 'DetailView' ) { switch ($view) { case 'DetailView': $Vfc35fdc7 = '<span class="linkedin_profile" class="sugar_field"><a href="'
 . $V2063c160 . '" target="_blank"><img src="custom/themes/default/images/linkedin-btn-2.png"></a></span>';
break; case 'EditView' : $Vfc35fdc7 = '<input type="text" name="' . $V06e3d36f . '" id="' . $V06e3d36f
 . '" size="30" maxlength="255" value="' . $V2063c160 . '" title="" tabindex="0">'; break; default :
 $Vfc35fdc7 = ''; } return $Vfc35fdc7; } 