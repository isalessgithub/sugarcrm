<?php

/**
 * Custom filtered link
 */
class YourNewLink extends Link2
{
    /**
     * DB
     *
     * @var DBManager
     */
    protected $db;

    public function __construct($linkName, $bean, $linkDef = false)
    {
        $this->focus = $bean;
        $this->name = $linkName;
        $this->db = DBManagerFactory::getInstance();
        if (empty($linkDef)) {
            $this->def = $bean->field_defs[$linkName];
        } else {
            $this->def = $linkDef;
        }
    }

    /**
     * Returns false if no relationship was found for this link
     *
     * @return bool
     */
    public function loadedSuccesfully()
    {
        // this link always loads successfully
        return true;
    }

    /**
     * @see Link2::getRelatedModuleName()
     */
    public function getRelatedModuleName()
    {
        return 'ProspectLists';
    }

    /**
     *
     * @see Link2::buildJoinSugarQuery()
     */
    public function buildJoinSugarQuery($sugar_query, $options = array())
    {
        $joinParams = array('joinType' => isset($options['joinType']) ? $options['joinType'] : 'INNER');
        $jta = 'all_target_lists';
        if (!empty($options['joinTableAlias'])) {
            $jta = $joinParams['alias'] = $options['joinTableAlias'];
        }

        $sugar_query->joinTable($this->getCustomJoin($options), $joinParams);
        return $sugar_query->join[$jta];
    }

    /**
     * Builds main join subpanel
     * @param string $params
     * @return string JOIN clause
     */
    protected function getCustomJoin($params = array())
    {
        
        $bean_id = $this->db->quoted($this->focus->id);
        $sql = " INNER JOIN(";
        $sql .= "SELECT call_result.prospect_list_id as call_result FROM prospect_lists_prospects where related_id={$bean_id}"; // This is essentially a select statement that will return a set of ids that you can match with the existing sugar_query
        $sql .= ") call_result  on call_result.related_id = prospectlists.id";
        return $sql;
    }
}
