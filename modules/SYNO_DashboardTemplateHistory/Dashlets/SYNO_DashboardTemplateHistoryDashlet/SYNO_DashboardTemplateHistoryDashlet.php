<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once 'include/Dashlets/DashletGeneric.php';
require_once 'modules/SYNO_DashboardTemplateHistory/SYNO_DashboardTemplateHistory.php';

class SYNO_DashboardTemplateHistoryDashlet extends DashletGeneric
{
    public function SYNO_DashboardTemplateHistoryDashlet($id, $def = null)
    {
        global $current_user, $app_strings;
        require 'modules/SYNO_DashboardTemplateHistory/metadata/dashletviewdefs.php';

        parent::DashletGeneric($id, $def);

        if (empty($def['title'])) {
            $this->title = translate('LBL_HOMEPAGE_TITLE', 'SYNO_DashboardTemplateHistory');
        }

        $this->searchFields = $dashletData['SYNO_DashboardTemplateHistoryDashlet']['searchFields'];
        $this->columns = $dashletData['SYNO_DashboardTemplateHistoryDashlet']['columns'];

        $this->seedBean = new SYNO_DashboardTemplateHistory();
    }
}
