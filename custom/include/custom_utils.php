<?php
    /**
    * Quick function for debugging which dumps a Call Stack and other information
    * @param string $identifier
    * @param array $additonal_details
    */
    function log_callstack($identifier = '',array $additonal_details = array()){
        global $current_user;
        $dt = debug_backtrace();
        $cs = '';
        foreach ($dt as $t) {
            $cs .= $t['file'] . ' line ' . $t['line'] . ' function ' . $t['function'] . "()\n";
        }
        $logInfo = array(
            'User' => $current_user->user_name,
            'User ID' => $current_user->id,
            'Request' => "[{$_SERVER['REQUEST_METHOD']}] {$_SERVER['REQUEST_URI']}{$_SERVER['PATH_INFO']}{$_SERVER['QUERY_STRING']}",
            'StackTrace' => $cs
        );
        if (!empty($additonal_details)){
            $logInfo = array_merge($logInfo,$additonal_details);
        }
        if (!empty($identifier)){
            $identifier = '-'.$identifier;
        }
        $GLOBALS['log']->fatal("[CALLSTACK$identifier] Details: ".print_r($logInfo, true));
    }
?>
