<?php


$hook_array['before_delete'][] = Array(
    //Processing index. For sorting the array.
    22,

    //Label. A string value to identify the hook.
    'deletes related records (for deleted record)',

    //The PHP file where your class is located.
    'modules/ET_DuplicateFinderProcess/DeDupitBeforeDelete.php',

    //The class the method is in.
    'DeDupitBeforeDelete',

    //The method to call.
    'deleteRelatedDedupitRecords'
);

$hook_array['after_save'][] = Array(
    //Processing index. For sorting the array.
    22,

    //Label. A string value to identify the hook.
    'check for duplicates (for saved record)',

    //The PHP file where your class is located.
    'modules/ET_DuplicateFinderProcess/DeDupitAfterSave.php',

    //The class the method is in.
    'DeDupitAfterSave',

    //The method to call.
    'checkForDuplicates'
);
