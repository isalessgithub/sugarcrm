<p style="font-size:15px;margin-top:10px;padding:0px 0 10px 0;font-weight: bold;color: #666666;">TeleSeller</p>

<p style="text-align:center;color:green;">{$succMsg}</p>
<p style="text-align:center;color:red;">{$errMsg}</p>
<br />
<form name="SugarKeys" id="SugarKeys" method="post" onsubmit="if(!check_form('SugarKeys')) return false;">
    <input type="hidden" name="action" value="{$action}" />
    <input type="hidden" name="module" value="{$module}" />
    <input type="hidden" name="record" value="{$record}" />
    <input type="hidden" name="show_mode" value="{$show_mode}" />
	{if $has_return_action eq "true"}
    	<input type="hidden" name="return_action" value="{$return_action}" />
	{/if}
	{if $has_return_module eq "true"}
    	<input type="hidden" name="return_module" value="{$return_module}" />
	{/if}
        {if $has_return_record eq "true"}
    	<input type="hidden" name="return_record" value="{$return_record}" />
	{/if}
    {if $succMsg eq ""}
    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="padding-bottom:10px;">

        <tr>
            <td scope="row" >
                <input type="submit" class="button primary" title="{$app.LBL_SAVE_BUTTON_TITLE}" accessKey="{$app.LBL_SAVE_BUTTON_KEY}" value="{$app.LBL_SAVE_BUTTON_LABEL}">
                <input type="button" onclick="document.location.href='index.php?module=Administration&action=index';" class="button" title="{$app.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$app.LBL_CANCEL_BUTTON_KEY}" value="{$app.LBL_CANCEL_BUTTON_LABEL}">
            </td>
        </tr>
    </table>
    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
       <!--<tr>
               <td scope="row" width="25%">
                   {$mod.LBL_VENDORS}
               </td>
               <td width="75%">
                 <select name='strategy'>
                   {html_options values=$strategies output=$strategies selected=$strat}
                 </select>
               </td>
        </tr>-->
        <tr>
            <td scope="row" width="25%" >
               {$mod.LBL_SUGARKEYS_LICENSE}<p style="color:red;display:inline;">*</p>
            </td>
            <td width="75%">
                {if $succMsg eq ""}
                    <input type="text" name="lickey" id="lickey" value="{$licKey}" /> &nbsp;{$errImage}
                {else}
                    {$licKey} &nbsp;{$succImage}
                {/if}
            </td>
        </tr>

    </table>
    <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td scope="row" width="100%">
                <input type="submit" class="button primary" title="{$app.LBL_SAVE_BUTTON_TITLE}" accessKey="{$app.LBL_SAVE_BUTTON_KEY}" value="{$app.LBL_SAVE_BUTTON_LABEL}">&nbsp;&nbsp;
                <input type="button" onclick="document.location.href='index.php?module=Administration&action=index';" class="button" title="{$app.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$app.LBL_CANCEL_BUTTON_KEY}" value="{$app.LBL_CANCEL_BUTTON_LABEL}">
            </td>
        </tr>
    </table>
</form>
{literal}
<script type="text/javascript" language="javaScript">
    addToValidate('SugarKeys', 'lickey', 'varchar', true, 'License Key');
</script>
{/literal}
{else}

    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="padding-bottom:10px;">

        <tr>
            <td scope="row" >
                <input type="submit" class="button primary" title="{$app.LBL_EDIT_BUTTON_LABEL}" accessKey="{$app.LBL_EDIT_BUTTON_KEY}" value="{$app.LBL_EDIT_BUTTON_TITLE}">
            </td>
        </tr>
    </table>
    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
       <!--<tr>
               <td scope="row" width="25%">
                   {$mod.LBL_VENDORS}
               </td>
               <td width="75%">
                 <select name='strategy'>
                   {html_options values=$strategies output=$strategies selected=$strat}
                 </select>
               </td>
        </tr>-->
        <tr>
            <td scope="row" width="25%" >
               {$mod.LBL_SUGARKEYS_LICENSE}
            </td>
            <td width="75%">
                {$licKey} &nbsp;{$succImage}
            </td>
        </tr>
    </table>
{/if}