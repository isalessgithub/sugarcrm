<?php

if (isset($bwcModules) && is_array($bwcModules)) {
    $modules_to_remove = array(	'SYNO_DashboardTemplates',
        'SYNO_DashboardTemplateHistory',
        'SYNO_DashboardTemplateFilters',
        'SYNO_DashboardTemplateLines');

    foreach($modules_to_remove as $module_to_remove) {
        $position = array_search($module_to_remove, $bwcModules);

        if($position !== false && !is_null($position)) {
            unset($bwcModules[$position]);
        }
    }
}
