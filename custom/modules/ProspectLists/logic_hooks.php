<?php
$hook_version = 1;
$hook_array = Array();
$hook_array['before_relationship_add'] = Array();
$hook_array['before_relationship_add'][] = Array(
    1,
    'Hook description',
    'custom/modules/ProspectLists/addFromTargetList.php',
    'AddFromTargetList',
    'addFromTargetListMethod'
);

$hook_array['before_relationship_delete'] = Array();
$hook_array['before_relationship_delete'][] = Array(
    1,
    'Hook description',
    'custom/modules/ProspectLists/addFromTargetList.php',
    'DeleteFromTargetList',
    'deleteFromTargetListMethod'
);

$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(
    1,
    'Split target list into a couple of smaller ones',
    'custom/modules/ProspectLists/SplitTargetList.php',
    'SplitTargetList',
    'doSplitTargetList',
);



