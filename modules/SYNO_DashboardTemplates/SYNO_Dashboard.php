<?PHP


/**
 * THIS CLASS IS FOR DEVELOPERS TO MAKE CUSTOMIZATIONS IN
 */
require_once 'modules/Dashboards/Dashboard.php';
class SYNO_Dashboard extends Dashboard
{
    public function __construct()
    {
        parent::__construct();
        if (!empty($this->visibility)) {
            unset($this->visibility);
        }
    }

    /**
     * This overrides the default save function setting assigned_user_id
     * @see SugarBean::save()
     */
    public function save($check_notify = false)
    {
        $oldCurrentUserId = $GLOBALS['current_user']->id;
        $GLOBALS['current_user']->id = $this->assigned_user_id;
        $return = parent::save(false);
        $GLOBALS['current_user']->id = $oldCurrentUserId;

        return $return;
    }
}
