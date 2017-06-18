<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once 'include/Dashlets/DashletGeneric.php';
require_once 'modules/SYNO_DashboardTemplateFilters/SYNO_DashboardTemplateFilters.php';

class SYNO_DashboardTemplateFiltersDashlet extends DashletGeneric
{
    public function SYNO_DashboardTemplateFiltersDashlet($id, $def = null)
    {
        global $current_user, $app_strings;
        require 'modules/SYNO_DashboardTemplateFilters/metadata/dashletviewdefs.php';

        parent::DashletGeneric($id, $def);

        if (empty($def['title'])) {
            $this->title = translate('LBL_HOMEPAGE_TITLE', 'SYNO_DashboardTemplateFilters');
        }

        $this->searchFields = $dashletData['SYNO_DashboardTemplateFiltersDashlet']['searchFields'];
        $this->columns = $dashletData['SYNO_DashboardTemplateFiltersDashlet']['columns'];

        $this->seedBean = new SYNO_DashboardTemplateFilters();
    }
}
