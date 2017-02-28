<?php

$hook_array['after_ui_frame'][] = array(
    99,
    'Add SynoGerateDoc Button on Detail View',
    'custom/Synolia/SynoGenerateDoc/SynoGenerateDocUtils.php',
    'SynoGenerateDocUtils',
    'setModuleButton',
);
