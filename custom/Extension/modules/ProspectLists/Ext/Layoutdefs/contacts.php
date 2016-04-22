<?php

$layout_defs["ProspectLists"]["subpanel_setup"]['contacts'] = array (
                        'order' => 20,
                        'module' => 'Contacts',
                        'sort_by' => 'last_name, first_name',
                        'sort_order' => 'asc',
                        'subpanel_name' => 'default',
                        'get_subpanel_data' => 'contacts',
                        'title_key' => 'LBL_CONTACTS_SUBPANEL_TITLE',
                        'top_buttons' => array(
                                array('widget_class' => 'SubPanelTopButtonQuickCreate'),
                                array('widget_class'=>'SubPanelTopSelectButton_ProspectList','mode'=>'MultiSelect'),
                                array('widget_class'=>'SubPanelTopSelectFromReportButton'),
                        ),

);

