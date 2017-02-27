<?php


class CheckLicenseApi extends SugarApi
{

    public function registerApiRest()
    {
        return array(
            'checkLicense' => array(
                'reqType' => 'GET',
                'path' => array('ET_DuplicateFinderProcess', 'checkLicense'),
                'pathVars' => array('', ''),
                'method' => 'checkLicense',
                'shortHelp' => 'Check license validity api',
                'longHelp' => '',
            )
        );
    }

    function checkLicense($api, $args)
    {

        // load license validation class
        require_once('modules/ET_DuplicateFinderProcess/license/ET_DeDupitLicense.php');
        // check if the license is valid
        $licenseValid = ET_DeDupitLicense::isValid();
        // if the license is not valid return message
        if ($licenseValid !== true) {
            return array(
                'success' => false,
                'message' => array(
                    "title" => translate('LBL_INVALID_LICENSE', 'ET_DuplicateFinderProcess'),
                    "description" => translate('LBL_PLEASE_VALIDATE_YOUR_LICENSE', 'ET_DuplicateFinderProcess'),
                    "countdown" => translate('LBL_REDIRECT_TO_LICENSE_PAGE_COUNTDOWN', 'ET_DuplicateFinderProcess')
                )
            );
        } else {
            // in case the license is valid return true
            return array('success' => true);
        }
    }

}