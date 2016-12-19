<?PHP

/**
 * THIS CLASS IS FOR DEVELOPERS TO MAKE CUSTOMIZATIONS IN
 */
require_once 'modules/SYNO_DashboardTemplates/SYNO_DashboardTemplates_sugar.php';
/**
 * @ModuleWithTab(false)
 */
class SYNO_DashboardTemplates extends SYNO_DashboardTemplates_sugar
{
    /**
     * This is a depreciated method, please start using __construct() as this method will be removed in a future version
     *
     * @see __construct
     * @depreciated
     */
    public function SYNO_DashboardTemplates()
    {
        self::__construct();
    }

    public function __construct()
    {
        parent::__construct();
    }
}
