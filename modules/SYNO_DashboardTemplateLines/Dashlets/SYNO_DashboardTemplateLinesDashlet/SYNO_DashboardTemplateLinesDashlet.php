<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once 'include/Dashlets/DashletGeneric.php';
require_once 'modules/SYNO_DashboardTemplateLines/SYNO_DashboardTemplateLines.php';

class SYNO_DashboardTemplateLinesDashlet extends DashletGeneric
{
    public function SYNO_DashboardTemplateLinesDashlet($id, $def = null)
    {
        global $current_user, $app_strings;
        require 'modules/SYNO_DashboardTemplateLines/metadata/dashletviewdefs.php';

        parent::__construct($id, $def);

        if (empty($def['title'])) {
            $this->title = translate('LBL_HOMEPAGE_TITLE', 'SYNO_DashboardTemplateLines');
        }

        $this->searchFields = $dashletData['SYNO_DashboardTemplateLinesDashlet']['searchFields'];
        $this->columns = $dashletData['SYNO_DashboardTemplateLinesDashlet']['columns'];

        $this->seedBean = new SYNO_DashboardTemplateLines();
    }
}
