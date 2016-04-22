<?php

require_once("modules/ATC_SugarKeys/AtcoreStrat.php");
require_once("modules/ATC_SugarKeys/SugarOutfittersStrat.php");
class KeyStrategy
{
    public function is_authorized()
    {
    }
    
    public function authorize()
    {
    }

    public static function get_available_strategies()
    {
        return array('Atcore Systems', 'SugarOutfitters');
    }

    public static function pick_strategy($strategy='Atcore Systems')
    {
        $args = func_get_args();
        switch($strategy){
            case 'Atcore Systems':
                return new AtcoreStrat($args[1]);
            case 'SugarOutfitters':
                return new SugarOutfittersStrat($args[1]);
            default:
                return new AtcoreStrat($args[1]);
        }
    }

}
