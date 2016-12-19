<?php

$hook_array['before_save'][] = array(
    10,
    'Add SynoGerateDoc Button on Detail View',
    'custom/Synolia/SynoGenerateDoc/SynoGenerateDocUtils.php',
    'SynoGenerateDocUtils',
    'saveRelationshipsForDocuments',
);
