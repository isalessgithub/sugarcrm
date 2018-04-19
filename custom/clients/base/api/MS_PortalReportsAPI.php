<?php
/**
 * @author Eontek DOO <office@eontek.co>
 * @copyright (c) Eontek DOO. All rights reserved.
 */

/**
 * Class MS_PortalReportsAPI
 *
 * Handles requests (from client portal) related to generating 'reports'
 */
class MS_PortalReportsAPI extends SugarApi
{
    public function registerApiRest()
    {
        return array(
            'getAtRisk' => array(
                'reqType' => 'POST',
                'path' => array('ms-portal-reports', 'snapshot-report'),
                'pathVars' => array('endpoint', 'report'),
                'method' => 'snapshotReport',
                'noLoginRequired' => true,
            ),
        );
    }

    /**
     * Sends snapshot report
     *
     * @param $api
     * @param $args
     * @return array
     * @throws MailerException
     */
    public function snapshotReport($api, $args)
    {
//	$GLOBALS['log']->fatal(json_encode($args));
        // include dependencies
        require_once('custom/include/utils/MS_PortalReports.php');

        // make sure that portal user's ID has been passed
        if (empty($args['cp_user_id'])) {

            return ['success' => false, 'message' => 'Portal user\'s ID was not sent.'];
        }

        // introduce the portal user's bean
        
	$portal_user = BeanFactory::retrieveBean('CP_Client_Users', $args['cp_user_id']);


	$GLOBALS['log']->fatal($portal_user->id);
        // make sure that bean is valid
        if (empty($portal_user->id)) {

            return ['success' => false, 'message' => 'Portal user is not valid.'];
        }

        // send the report
        return sendSnapshotReport($args['cp_user_id']);
    }

}
