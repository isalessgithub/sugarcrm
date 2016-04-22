<?php

require_once('include/utils.php');
require_once('include/utils/file_utils.php');
require_once('config.php');
require_once('include/MVC/Controller/SugarController.php');
require_once('modules/ModuleBuilder/controller.php');
require_once('modules/ModuleBuilder/parsers/ParserFactory.php');

/**
$mh = new MetadataHelper();
$mh->add_field_to_list_view($module,$fielddef[,$add_before=''])
$mh->remove_field_from_list_view($module,$field_name)
$mh->add_field_to_detail_view($module,$field_name[,$new_panel=true])
$mh->remove_field_from_detail_view($module,$field_name[,$remove_panel_if_empty=true])
$mh->add_field_to_edit_view($module,$field_name[,$new_panel=true])
$mh->remove_field_from_edit_view($module,$field_name[,$remove_panel_if_empty=true])
$mh->add_field_to_subpanel_view($module,$subpanel,$fielddef[,$add_before='edit_button'])
$mh->remove_field_from_subpanel_view($module,$subpanel,$field_name)
$mh->add_javascript_to_detail_view($module,$file)
$mh->remove_javascript_from_detail_view($module,$file)
$mh->add_javascript_edit_view($module,$file)
$mh->remove_javascript_from_edit_view($module,$file)
*/

class MetadataHelper
{
    function __construct(){}
    
    // add_field_to_detail_view('Accounts','log_call_c'); 
    // if $new_panel = true, the field will be added to a new panel
    public function add_field_to_detail_view($module=null,$field_name=null,$new_panel=true)
    {
        if (empty($module) || empty($field_name))
        {
            echo "<p>module and field_name are required.</p>";
            return false;
        }
        return $this->add_field_to_view('detailview',$module,$field_name,$new_panel);
    }

    // remove_field_from_detail_view('Accounts','log_call_c'); 
    // if $remove_panel_if_empty = true, any empty panels will be removed
    public function remove_field_from_detail_view($module=null,$field_name=null,$remove_panel_if_empty=true)
    {
        if (empty($module) || empty($field_name))
        {
            echo "<p>module and field_name are required.</p>";
            return false;
        }
        return $this->remove_field_from_view('detailview',$module,$field_name,$remove_panel_if_empty);
    }

    // add_field_to_edit_view('Accounts','log_call_c'); 
    // if $new_panel = true, the field will be added to a new panel
    public function add_field_to_edit_view($module=null,$field_name=null,$new_panel=true)
    {
        if (empty($module) || empty($field_name))
        {
            echo "<p>module and field_name are required.</p>";
            return false;
        }
        return $this->add_field_to_view('editview',$module,$field_name,$new_panel);
    }

    // remove_field_from_edit_view('Accounts','log_call_c'); 
    // if $remove_panel_if_empty = true, any empty panels will be removed
    public function remove_field_from_edit_view($module=null,$field_name=null,$remove_panel_if_empty=true)
    {
        if (empty($module) || empty($field_name))
        {
            echo "<p>module and field_name are required.</p>";
            return false;
        }
        return $this->remove_field_from_view('editview',$module,$field_name,$remove_panel_if_empty);
    }

    // add_javascript_to_detail_view('Contacts','modules/ATC_Teleseller/javascript/ATC_JS/call_logging.js');
    public function add_javascript_to_detail_view($module=null,$file=null)
    {
        if (empty($module) || empty($file))
        {
            echo "<p>file parameter is required.</p>";
            return false;
        }
        return $this->add_javascript_to_detail_view('detailview',$module,$file);
    }

    // remove_javascript_from_detail_view('Contacts','modules/ATC_Teleseller/javascript/ATC_JS/call_logging.js');
    public function remove_javascript_from_detail_view($module=null,$file=null)
    {
        if (empty($module) || empty($file))
        {
            echo "<p>file parameter is required.</p>";
            return false;
        }
        return $this->remove_javascript_from_view('detailview',$module,$file);
    }

    // add_javascript_to_edit_view('Contacts','modules/ATC_Teleseller/javascript/ATC_JS/call_logging.js');
    public function add_javascript_to_edit_view($module=null,$file=null)
    {
        if (empty($module) || empty($file))
        {
            echo "<p>file parameter is required.</p>";
            return false;
        }
        return $this->add_javascript_to_detail_view('editview',$module,$file);
    }

    // remove_javascript_from_edit_view('Contacts','modules/ATC_Teleseller/javascript/ATC_JS/call_logging.js');
    public function remove_javascript_from_edit_view($module=null,$file=null)
    {
        if (empty($module) || empty($file))
        {
            echo "<p>file parameter is required.</p>";
            return false;
        }
        return $this->remove_javascript_from_view('editview',$module,$file);
    }
    
    // $fielddef = array(
    //     'log_call_c' => array(
    //         'label' => 'LBL_NAME',
    //         'width' => '20%',
    //         'default' => true,
    //     )
    // );
    // add_field_to_list_view('Accounts',$fielddef);
    // if add_before is set, it'll add the new field before a field already on the list view, otherwise it'll tack it to the end
    public function add_field_to_list_view($module=null,$fielddef=null,$add_before='')
    {
        if (empty($module) || empty($fielddef) || !is_array($fielddef))
        {
            echo "<p>module and fielddef are required.</p>";
            return false;
        }

        $parser = ParserFactory::getParser('listview',$module);
        if (empty($parser->_viewdefs) || !is_array($parser->_viewdefs))
        {
            echo "<p>The listview parser could not be used for this module.</p>";
            return false;
        }

        if (empty($add_before))
        {
            // just add it to the end
            echo "<p>Adding new field to the end of the list view</p>";
            $parser->_viewdefs += $fielddef;
        }
        else
        {
            // check if the add_before key exists
            if (array_key_exists($add_before,$parser->_viewdefs))
            {
                $offset = 0;
                foreach ($parser->_viewdefs as $key => $value)
                {
                    if ($key==$add_before)
                    {
                        break;
                    }
                    $offset++;
                }

                // add before the given element
                $beginning = array_slice($parser->_viewdefs, 0, $offset, true);
                $middle = $fielddef;
                $end = array_slice($parser->_viewdefs, $offset, NULL, true);

                echo "<p>adding field before the '$add_before' field.</p>";
                $parser->_viewdefs = $beginning + $middle + $end;
            }
            else
            {
                // if it doesn't, just add at the end
                echo "<p>The '$add_before' field doesn't exist, so adding field to the end of the list view.</p>";
                $parser->_viewdefs += $fielddef;
            }
        }

        $parser->handleSave(false);
        return true;
    }

    // remove_field_from_list_view('Accounts','log_call_c');
    public function remove_field_from_list_view($module=null,$field_name=null)
    {
        if (empty($module) || empty($field_name))
        {
            echo "<p>module and field_name are required.</p>";
            return false;
        }

        $parser = ParserFactory::getParser('listview',$module);
        if (empty($parser->_viewdefs) || !is_array($parser->_viewdefs))
        {
            echo "<p>The listview parser could not be used for this module.</p>";
            return false;
        }

        if (!array_key_exists($field_name,$parser->_viewdefs))
        {
            echo "<p>'$field_name' is already missing from this list view.</p>";
            return true;
        }

        unset($parser->_viewdefs[$field_name]);

        $parser->handleSave(false);

        return true;
    }

    // $new_field = array('phone_mobile' => array(
    //     'name' => 'phone_mobile',
    //     'vname' => 'LBL_PHONE_MOBILE',
    //     'width' => '20%',
    //     'default' => true,
    // ));
    // add_field_to_subpanel_view('Accounts','contacts',$new_field,'name');
    public function add_field_to_subpanel_view($module=null,$subpanel=null,$fielddef=null,$add_before='edit_button')
    {
        if (empty($module) || empty($subpanel) || empty($fielddef) || !is_array($fielddef))
        {
            echo "<p>module, subpanel and a fielddef is required.</p>";
            return false;
        }

        // get the parser to edit the subpanels metadata
        $parser = ParserFactory::getParser('listview',$module,null,$subpanel);

        if (empty($parser->_viewdefs))
        {
            // you've got the wrong module or subpanel name
            echo "<p>'$subpanel' is not a valid subpanel.</p>";
            return false;
        }

        if (empty($add_before))
        {
            // add to the end
            echo "<p>Adding field to the end of the subpanel.</p>";
            $parser->_viewdefs += $fielddef;
        }
        else
        {
            // check if the add_before key exists
            if (array_key_exists($add_before,$parser->_viewdefs))
            {
                $offset = 0;
                foreach ($parser->_viewdefs as $key => $value)
                {
                    if ($key==$add_before)
                    {
                        break;
                    }
                    $offset++;
                }

                // add before the given element
                $beginning = array_slice($parser->_viewdefs, 0, $offset, true);
                $middle = $fielddef;
                $end = array_slice($parser->_viewdefs, $offset, NULL, true);

                echo "<p>adding field before the '$add_before' field.</p>";
                $parser->_viewdefs = $beginning + $middle + $end;
            }
            else
            {
                // if it doesn't, just add at the end
                echo "<p>The '$add_before' field doesn't exist, so adding field to the end of the subpanel.</p>";
                $parser->_viewdefs += $fielddef;
            }
        }

        // save it
        $parser->handleSave(false);

        return true;
    }

    // remove_field_from_subpanel_view('Accounts','contacts','phone_mobile');
    public function remove_field_from_subpanel_view($module=null,$subpanel=null,$field_name=null)
    {
        if (empty($module) || empty($subpanel) || empty($field_name))
        {
            echo "<p>module, subpanel and a field_name is required.</p>";
            return false;
        }

        // get the parser to edit the subpanels metadata
        $parser = ParserFactory::getParser('listview',$module,null,$subpanel);

        if (empty($parser->_viewdefs))
        {
            // you've got the wrong module or subpanel name
            echo "<p>'$subpanel' is not a valid subpanel.</p>";
            return false;
        }

        if (!array_key_exists($field_name,$parser->_viewdefs))
        {
            // the field doesn't exist
            echo "<p>'$field_name' does not exist</p>";
            return false;
        }

        // remove the reference
        unset($parser->_viewdefs[$field_name]);

        // save it
        $parser->handleSave(false);

        return true;
    }

    // generalized for both detail and edit views
    protected function add_field_to_view($view=null,$module=null,$field_name=null,$new_panel=true)
    {
        if (empty($view) || empty($module) || empty($field_name))
        {
            echo "<p>view, module and field_name is required.</p>";
            return false;
        }

        $parser = ParserFactory::getParser($view,$module);

        if (!is_array($parser->_viewdefs) || !array_key_exists('panels',$parser->_viewdefs))
        {
            echo "<p>something went wrong grabbing the parser. the array that we need isn't available.";
            return false;
        }

        if ($new_panel===true)
        {
            // create new panel, add field to new panel, append panel
            echo "<p>Creating new panel for '$field_name' and adding it to the end of '$view'.</p>";
            $new_panel = array(
                array($field_name,null)
            );
            $parser->_viewdefs['panels'] []= $new_panel;
        }
        else
        {
            // add the field to the last panel in the array
            echo "<p>Adding '$field_name' to the end of the last panel on the '$view'.</p>";
            end($parser->_viewdefs['panels']);
            $last_panel_key = key($parser->_viewdefs['panels']);
            $parser->_viewdefs['panels'][$last_panel_key] []= array($field_name,null);
        }

        // save the viewdefs
        $parser->handleSave(false);

        return true;

    }

    // generalized for both detail and edit views
    protected function remove_field_from_view($view=null,$module=null,$field_name=null,$remove_panel_if_empty=true)
    {
        if (empty($view) || empty($module) || empty($field_name))
        {
            echo "<p>view, module and a field_name is required.</p>";
            return false;
        }

        // get the parser to edit the subpanels metadata
        $parser = ParserFactory::getParser($view,$module);

        if (empty($parser->_viewdefs) || !array_key_exists('panels',$parser->_viewdefs) || !is_array($parser->_viewdefs['panels']))
        {
            // you've got the wrong module
            echo "<p>'$view' for '$module' could not be loaded.</p>";
            return false;
        }

        $found = false;
        $panels_found_with_field_name = array();
        foreach ($parser->_viewdefs['panels'] as $panel_key => $panel)
        {
            foreach ($panel as $row_key => $row)
            {
                foreach ($row as $cell_key => $cell)
                {
                    if ($field_name==$cell)
                    {
                        // set the fields spot to null
                        echo "<p>found a match - $panel_key : $row_key : $cell_key</p>";
                        $found = true;
                        $panels_found_with_field_name []= $panel_key;
                        unset($parser->_viewdefs['panels'][$panel_key][$row_key][$cell_key]);
                    }
                }
            }
        }

        if ($found===true && $remove_panel_if_empty===true)
        {
            foreach ($panels_found_with_field_name as $panel_key)
            {
                if ($this->_is_panel_empty($parser->_viewdefs['panels'][$panel_key]))
                {
                    echo "<p>removing panel with key '$panel_key' as it's an empty panel and 'remove_panel_if_empty' is set to true.</p>";
                    unset($parser->_viewdefs['panels'][$panel_key]);
                }
            }
        }

        if ($found===true)
        {
            // changes were made, save it
            $parser->handleSave(false);
        }
        else
        {
            echo "<p>Never found '$field_name' in '$view' so we did nothing. It may have already been removed.</p>";
        }

        // either way, return true
        return true;
    }

    // generalized for both detail and edit views
    protected function add_javascript_to_view($view=null,$module=null,$file=null)
    {
        if (empty($view) || empty($module) || empty($file))
        {
            echo "<p>view, module and file is required.</p>";
            return false;
        }

        $parser = ParserFactory::getParser($view,$module);

        if (!is_array($parser->_viewdefs) || !array_key_exists('templateMeta',$parser->_viewdefs) && !array_key_exists('includes',$parser->_viewdefs['templateMeta']))
        {
            echo "<p>something went wrong grabbing the parser. the array that we need isn't available.";
            return false;
        }

        // check if file already exists
        $found = false;
        foreach ($parser->_viewdefs['templateMeta']['includes'] as $file_array)
        {
            if (is_array($file_array) && array_key_exists('file',$file_array) && $file_array['file']==$file)
            {
                $found = true;
            }
        }

        if ($found)
        {
            // file is already included, return
            echo "<p>$file is already added to the includes.</p>";
            return true;
        }

        // add new file
        $parser->_viewdefs['templateMeta']['includes'] []= array("file" => $file);

        // save the viewdefs
        $parser->handleSave(false);

        return true;
    }

    // generalized for both detail and edit views
    protected function remove_javascript_from_view($view=null,$module=null,$file=null)
    {
        if (empty($view) || empty($module) || empty($file))
        {
            echo "<p>view, module and file is required.</p>";
            return false;
        }

        $parser = ParserFactory::getParser($view,$module);

        if (!is_array($parser->_viewdefs) || !array_key_exists('templateMeta',$parser->_viewdefs) && !array_key_exists('includes',$parser->_viewdefs['templateMeta']))
        {
            echo "<p>something went wrong grabbing the parser. the array that we need isn't available.";
            return false;
        }

        $includes = array();

        // loop through includes, find non-matching files
        foreach ($parser->_viewdefs['templateMeta']['includes'] as $file_array)
        {
            if (is_array($file_array) && array_key_exists('file',$file_array) && $file_array['file']!=$file)
            {
                $includes []= array('file'=>$file_array['file']);
            }
        }

        // add non-matching files
        $parser->_viewdefs['templateMeta']['includes'] = $includes;

        // save the viewdefs
        $parser->handleSave(false);

        return true;
    }

    // helper method to determine if panel is empty or not
    private function _is_panel_empty($panel=null)
    {
        if (empty($panel) || !is_array($panel))
        {
            // panel array is required
            return false;
        }

        foreach ($panel as $row_key => $row)
        {
            if (is_array($row))
            {
                foreach ($row as $cell_key => $cell)
                {
                    if (!empty($cell) && $cell!='(empty)')
                    {
                        // it's not empty, return false
                        return false;
                    }
                }
            }
        }

        return true;
    }

}


?>