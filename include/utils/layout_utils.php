<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

/**
 * Contains a variety of utility functions used to display UI components such as form headers and footers.
 *
 * @todo refactor out these functions into the base UI objects as indicated
 */

/**
 * Create HTML to display formatted form title.
 *
 * @param  $form_title string to display as the title in the header
 * @param  $other_text string to next to the title.  Typically used for form buttons.
 * @param  $show_help  boolean which determines if the print and help links are shown.
 * @return string HTML
 */
function get_form_header(
    $form_title,
    $other_text,
    $show_help
    )
{
    global $sugar_version, $sugar_flavor, $server_unique_key, $current_language, $current_module, $current_action;
    global $app_strings;

    $blankImageURL = SugarThemeRegistry::current()->getImageURL('blank.gif');
    $printImageURL = SugarThemeRegistry::current()->getImageURL("print.gif");
    $helpImageURL  = SugarThemeRegistry::current()->getImageURL("help.gif");

    $is_min_max = strpos($other_text,"_search.gif");
    if($is_min_max !== false)
        $form_title = "{$other_text}&nbsp;{$form_title}";

    $the_form = <<<EOHTML
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="formHeader h3Row">
<tr>
<td nowrap><h3><span>{$form_title}</span></h3></td>
EOHTML;

    $keywords = array("/class=\"button\"/","/class='button'/","/class=button/","/<\/form>/");
    $match="";
    foreach ($keywords as $left)
        if (preg_match($left,$other_text))
            $match = true;

    if ($other_text && $match) {
        $the_form .= <<<EOHTML
<td colspan='10' width='100%'><IMG height='1' width='1' src='$blankImageURL' alt=''></td>
</tr>
<tr>
<td width='100%' align='left' valign='middle' nowrap style='padding-bottom: 2px;'>$other_text</td>
EOHTML;
        if ($show_help) {
            $the_form .= "<td align='right' nowrap>";
            $the_form .= <<<EOHTML
&nbsp;
    <a href='index.php?module=Administration&action=SupportPortal&view=documentation&version={$sugar_version}&edition={$sugar_flavor}&lang={$current_language}&help_module={$current_module}&help_action={$current_action}&key={$server_unique_key}'
       class='utilsLink' target='_blank'>
    <img src='{$helpImageURL}' alt='Help' border='0' align='absmiddle'>
    </a>&nbsp;
    <a href='index.php?module=Administration&action=SupportPortal&view=documentation&version={$sugar_version}&edition={$sugar_flavor}&lang={$current_language}&help_module={$current_module}&help_action={$current_action}&key={$server_unique_key}'
        class='utilsLink' target='_blank'>
    {$app_strings['LNK_HELP']}
    </a>
</td>
EOHTML;
        }
    } 
    else {
        if ($other_text && $is_min_max === false) {
            $the_form .= <<<EOHTML
<td width='20'><img height='1' width='20' src='$blankImageURL' alt=''></td>
<td valign='middle' nowrap width='100%'>$other_text</td>
EOHTML;
        }
        else {
            $the_form .= <<<EOHTML
<td width='100%'><IMG height='1' width='1' src='$blankImageURL' alt=''></td>
EOHTML;
        }

        if ($show_help) {
            $the_form .= "<td align='right' nowrap>";
            $the_form .= <<<EOHTML
    &nbsp;
    <a href='index.php?module=Administration&action=SupportPortal&view=documentation&version={$sugar_version}&edition={$sugar_flavor}&lang={$current_language}&help_module={$current_module}&help_action={$current_action}&key={$server_unique_key}'
       class='utilsLink' target='_blank'>
    <img src='{$helpImageURL}' alt='{$app_strings['LBL_HELP']}' border='0' align='absmiddle'>
    </a>&nbsp;
    <a href='index.php?module=Administration&action=SupportPortal&view=documentation&version={$sugar_version}&edition={$sugar_flavor}&lang={$current_language}&help_module={$current_module}&help_action={$current_action}&key={$server_unique_key}'
        class='utilsLink' target='_blank'>{$app_strings['LNK_HELP']}</a>
</td>
EOHTML;
        }
    }

    $the_form .= <<<EOHTML
</tr>
</table>
EOHTML;

    return $the_form;
}

/**
 * Wrapper function for the get_module_title function, which is mostly used for pre-MVC modules.
 *
 * @deprecated use SugarView::getModuleTitle() for MVC modules, or getClassicModuleTitle() for non-MVC modules
 *
 * @param  $module       string  to next to the title.  Typically used for form buttons.
 * @param  $module_title string  to display as the module title
 * @param  $show_help    boolean which determines if the print and help links are shown.
 * @return string HTML
 */
function get_module_title(
    $module,
    $module_title,
    $show_create,
    $count=0
    )
{
    global $sugar_version, $sugar_flavor, $server_unique_key, $current_language, $action;
    global $app_strings;

    $the_title = "<div class='moduleTitle'>\n";
    $module = preg_replace("/ /","",$module);
    $iconPath = "";
    if(is_file(SugarThemeRegistry::current()->getImageURL('icon_'.$module.'_32.png',false)))
    {
    	$iconPath = SugarThemeRegistry::current()->getImageURL('icon_'.$module.'_32.png');
    } else if (is_file(SugarThemeRegistry::current()->getImageURL('icon_'.ucfirst($module).'_32.png',false)))
    {
        $iconPath = SugarThemeRegistry::current()->getImageURL('icon_'.ucfirst($module).'_32.png');
    }
    if (!empty($iconPath)) {
        $the_title .= '<h2>';
        $breadCrumbSymbol = SugarView::staticGetBreadCrumbSymbol();
    	if (SugarThemeRegistry::current()->directionality == "ltr") {
	        $the_title .= "<a href='index.php?module={$module}&action=index'><img src='{$iconPath}' " . "alt='".$module."' title='".$module."' align='absmiddle'></a>";
            $the_title .= ($count >= 1) ? $breadCrumbSymbol : "";
	        $the_title .=  $module_title.'';
    	} else {
    		$the_title .= $module_title;
            $the_title .= ($count > 1) ? $breadCrumbSymbol : "";
    		$the_title .= "<a href='index.php?module={$module}&action=index'><img src='{$iconPath}' "  . "alt='".$module."' title='".$module."' align='absmiddle'></a>";
    	}
        $the_title .= '</h2>';
    } else {
		$the_title .="<h2> $module_title </h2>";
	}
    $the_title .= "\n";
    
    if ($show_create) {
        $the_title .= "<span class='utils'>";
        $createRecordURL = SugarThemeRegistry::current()->getImageURL('create-record.gif');
        $the_title .= <<<EOHTML
&nbsp;
<a href="index.php?module={$module}&action=EditView&return_module={$module}&return_action=DetailView" class="utilsLink">
<img src='{$createRecordURL}' alt='{$GLOBALS['app_strings']['LNK_CREATE']}'></a>
<a href="index.php?module={$module}&action=EditView&return_module={$module}&return_action=DetailView" class="utilsLink">
{$GLOBALS['app_strings']['LNK_CREATE']}
</a>
EOHTML;

        $the_title .= '</span>';
    }

    $the_title .= "</div>\n";
    return $the_title;
}

/**
 * Handles displaying the header for classic view modules
 *
 * @param $module String value of the module to create the title section for
 * @param $params Array of arguments used to create the title label.  Typically this is just the current language string label for the section
 * These should be in the form of array('label' => '<THE LABEL>', 'link' => '<HREF TO LINK TO>');
 * the first breadcrumb should be index at 0, and built from there e.g.
 * <code>
 * array(
 *    '<a href="index.php?module=Contacts&amp;action=index">Contacts</a>',
 *    '<a href="index.php?module=Contacts&amp;action=DetailView&amp;record=123">John Smith</a>',
 *    'Edit',
 *    );
 * </code>
 * would display as:
 * <a href='index.php?module=Contacts&amp;action=index'>Contacts</a> >> <a href='index.php?module=Contacts&amp;action=DetailView&amp;record=123'>John Smith</a> >> Edit
 * @param $show_create boolean flag indicating whether or not to display the create link (defaults to false)
 * @param $index_url_override String value of url to override for module index link (defaults to module's index action if none supplied)
 * @param $create_url_override String value of url to override for module create link (defaults to EditView action if none supplied)
 *
 * @return String HTML content for a classic module title section
 */
function getClassicModuleTitle($module, $params, $show_create=false, $index_url_override='', $create_url_override='')
{
	global $sugar_version, $sugar_flavor, $server_unique_key, $current_language, $action;
    global $app_strings;

	$module_title = '';
	$index = 0;

    $module = preg_replace("/ /","",$module);
    $iconPath = "";
    $the_title = "<div class='moduleTitle'>\n";

    if(is_file(SugarThemeRegistry::current()->getImageURL('icon_'.$module.'_32.png',false)))
    {
    	$iconPath = SugarThemeRegistry::current()->getImageURL('icon_'.$module.'_32.png');
    } else if (is_file(SugarThemeRegistry::current()->getImageURL('icon_'.ucfirst($module).'_32.png',false)))
    {
        $iconPath = SugarThemeRegistry::current()->getImageURL('icon_'.ucfirst($module).'_32.png');
    }
    if (!empty($iconPath)) {
    	$url = (!empty($index_url_override)) ? $index_url_override : "index.php?module={$module}&action=index";
    	array_unshift ($params,"<a href='{$url}'><img src='{$iconPath}' ". "alt='".$module."' title='".$module."' align='absmiddle'></a>");
	}

	$new_params = array_pop($params);
    if(!is_null($new_params) && ($new_params !== "")) $module_title = $new_params;
    if(!empty($module_title)){
        $the_title .= "<h2>".$module_title."</h2>\n";//removing empty H2 tag for 508 compliance
    }


    if ($show_create) {
        $the_title .= "<span class='utils'>";
        $createRecordImage = SugarThemeRegistry::current()->getImageURL('create-record.gif');
        if(empty($create_url_override))
        {
            $create_url_override = "index.php?module={$module}&action=EditView&return_module={$module}&return_action=DetailView";
        }

        $the_title .= <<<EOHTML
&nbsp;
<a href="{$create_url_override}" class="utilsLink">
<img src='{$createRecordImage}' alt='{$GLOBALS['app_strings']['LNK_CREATE']}'></a>
<a href="{$create_url_override}" class="utilsLink">
{$GLOBALS['app_strings']['LNK_CREATE']}
</a>
EOHTML;

        $the_title .= '</span>';
    }

    $the_title .= "<div class='clear'></div></div>\n";
    return $the_title;

}

/**
 * Create a header for a popup.
 *
 * @todo refactor this into the base Popup_Picker class
 *
 * @param  $theme string the name of the current theme, ignorred to use SugarThemeRegistry::current() instead.
 * @return string HTML
 */
function insert_popup_header(
    $theme = null,
    $includeJS = true
    )
{
    global $app_strings, $sugar_config;

    $themeCSS = SugarThemeRegistry::current()->getCSS();

    $langHeader = get_language_header();

    //The SugarView will insert the header now, this function should no longer do the actual head element.
    if ($includeJS)
    {
        echo <<<EOHTML
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html {$langHeader}>
<head>
EOHTML;
    }

    if (isset($sugar_config['meta_tags']) && isset($sugar_config['meta_tags']['IE_COMPAT_MODE']))
    {
        echo $sugar_config['meta_tags']['IE_COMPAT_MODE'];
    }

    echo "<title>{$app_strings['LBL_BROWSER_TITLE']}</title>" . $themeCSS;
    if ($includeJS)
    {
        $charset = isset($app_strings['LBL_CHARSET']) ? $app_strings['LBL_CHARSET'] : $sugar_config['default_charset'];
        echo '<meta http-equiv="Content-Type" content="text/html; charset="{$charset}">';
        echo '<script type="text/javascript" src="' . getJSPath('include/javascript/jquery/jquery-min.js') . '"></script>';
        echo '<script type="text/javascript" src="'
            . getJSPath('include/javascript/jquery/jquery-migrate-1.2.1.min.js') . '"></script>';
        echo '<script type="text/javascript" src="' . getJSPath('cache/include/javascript/sugar_grp1_yui.js') . '"></script>';
        echo '<script type="text/javascript" src="' . getJSPath('cache/include/javascript/sugar_grp1.js') . '"></script>';
        echo '</head>';
    }
    echo  '<body class="popupBody">';
}

/**
 * Create a footer for a popup.
 *
 * @todo refactor this into the base Popup_Picker class
 *
 * @return string HTML
 */
function insert_popup_footer()
{
    echo <<<EOQ
</body>
</html>
EOQ;
}
?>
