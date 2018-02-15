<?php

/**
 * Class ET_MergedDuplicatesApi
 */
class ET_MergedDuplicatesApi extends SugarApi
{

    public function registerApiRest()
    {
        return array(

            'getDuplicateData' => array(
                'reqType' => 'POST',
                'path' => array('ET_MergedDuplicates', 'get-duplicate-data'),
                'pathVars' => array(),
                'method' => 'getDuplicateData',
                'shortHelp' => '',
                'longHelp' => '',
            )
        );
    }

    /**
     * Retrieves duplicate's data
     * (duplicate is merged deleted record of passed module)
     * @param $api
     * @param $args
     * @return array
     */
    function getDuplicateData($api, $args)
    {
        // make sure that duplicate's module name is retrieved
        if (empty($args['duplicate_module'])) {
            return array(
                'success' => false,
                'message' => translate('NTF_DUPLICATE_MODULE_NOT_PASSED', 'ET_MergedDuplicates')
            );
        }

        // make sure that duplicate's ID is retrieved
        if (empty($args['duplicate_id'])) {
            return array(
                'success' => false,
                'message' => translate('NTF_DUPLICATE_ID_NOT_PASSED', 'ET_MergedDuplicates')
            );
        }

        // retrieve duplicate bean
        $duplicate_bean = BeanFactory::getBean($args['duplicate_module'], $args['duplicate_id'], array(), false);

        // make sure that duplicate bean was retrieved
        if (empty($duplicate_bean->id)) {

            return array(
                'success' => false,
                'message' => translate('NTF_DUPLICATE_BEAN_NOT_FOUND', 'ET_MergedDuplicates')
            );
        }

        // trick sugar into thinking that bean is valid
        // (otherwise it will not be formatted for sending back from API)
        $duplicate_bean->deleted = 0;

        // format the bean before retrieving
        // hint: json_decode throws 'recursion detected' error if bean is simply returned from API,
        // probably because sugar bean is pretty complex
        $duplicate_bean = $this->formatBean($api, $args, $duplicate_bean);

        // revert the deleted flag, just in case
        $duplicate_bean->deleted = 1;

        // respond with duplicate bean
        return array(
            'success' => true,
            'duplicate_bean' => $duplicate_bean
        );

    }

}