<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once 'include/Dashlets/DashletGeneric.php';
require_once 'modules/SYNO_DashboardTemplates/SYNO_DashboardTemplates.php';

class SYNO_DashboardTemplatesDashlet extends DashletGeneric
{
    public function SYNO_DashboardTemplatesDashlet($id, $def = null)
    {
        global $current_user, $app_strings;
        require 'modules/SYNO_DashboardTemplates/metadata/dashletviewdefs.php';

        parent::__construct($id, $def);

        if (empty($def['title'])) {
            $this->title = translate('LBL_HOMEPAGE_TITLE', 'SYNO_DashboardTemplates');
        }

        $this->searchFields = $dashletData['SYNO_DashboardTemplatesDashlet']['searchFields'];
        $this->columns = $dashletData['SYNO_DashboardTemplatesDashlet']['columns'];

        $this->seedBean = new SYNO_DashboardTemplates();
    }
}
