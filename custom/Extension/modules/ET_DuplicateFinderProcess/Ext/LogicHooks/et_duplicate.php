<?php

$hook_array['after_save'][] = Array(
    //Processing index. For sorting the array.
    1,

    //Label. A string value to identify the hook.
    'after_save delete duplicates if the process is inactive',

    //The PHP file where your class is located.
    'modules/ET_DuplicateFinderProcess/DeDupitProcessHookLogic.php',

    //The class the method is in.
    'DeDupitProcessHookLogic',

    //The method to call.
    'deleteRelationships'
);

$hook_array['before_save'][] = Array(
    //Processing index. For sorting the array.
    1,

    //Label. A string value to identify the hook.
    'Set process as inactive if configuration has been changed',

    //The PHP file where your class is located.
    'modules/ET_DuplicateFinderProcess/DeDupitProcessHookLogic.php',

    //The class the method is in.
    'DeDupitProcessHookLogic',

    //The method to call.
    'makeProcessInactive'
);

$hook_array['before_delete'][] = Array(
    //Processing index. For sorting the array.
    1,

    //Label. A string value to identify the hook.
    'Delete et_duplicatecheck and et_duplicatecheck_et_foundduplicates records when process is deleted',

    //The PHP file where your class is located.
    'modules/ET_DuplicateFinderProcess/DeDupitProcessHookLogic.php',

    //The class the method is in.
    'DeDupitProcessHookLogic',

    //The method to call.
    'deleteRelatedRecords'
);