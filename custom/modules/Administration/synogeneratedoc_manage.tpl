<script type="text/javascript" src="{sugar_getjspath file='cache/include/javascript/sugar_grp_yui_widgets.js'}"></script>

<form action="index.php" method="POST" name="synogeneratedoc_manage" id="synogeneratedoc_manage">
<input type="hidden" name="module" value="Administration">
<input type="hidden" name="action" value="synogeneratedoc_manage">
<input type="hidden" name="process" value="true">
<input type="hidden" name="return_module" value="{$RETURN_MODULE}">
<input type="hidden" name="return_action" value="{$RETURN_ACTION}">
<input type="hidden" id="enabled_modules" name="enabled_modules" value="">
<input type="hidden" id="disabled_modules" name="disabled_modules" value="">

{$configTitle}
<div class="clear"></div>
<br />
<p>{$MOD.LBL_SYNOGENERATEDOC_CONFIG_DESCRIPTION}</p>
<br />
	<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary"
		   onclick="return SUGAR.saveConfigureTabs();" type="submit" name="saveButton"
		   value="{$APP.LBL_SAVE_BUTTON_LABEL}" />
	<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button"
		   onclick="this.form.action.value='index'; this.form.module.value='Administration';" type="submit" name="CancelButton"
		   value="{$APP.LBL_CANCEL_BUTTON_LABEL}"/>
		   
	<div class='add_table' style='margin-bottom:5px'>
		<table id="ConfigureTabs" class="themeSettings edit view" style='margin-bottom:0px;' border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td width='1%'>
					<div id="enabled_div" class="enabled_tab_workarea" onDragDrop="alert('test');">
					</div>
				</td>
				<td>
					<div id="disabled_div" class="disabled_tab_workarea">
					</div>
				</td>
			</tr>
		</table>
	</div>
</form>


<script type="text/javascript">
	var enabled_modules = {$enabled_mods};
	var disabled_modules = {$disabled_mods};
	var lblEnabled = '{sugar_translate label="LBL_ACTIVE_MODULES"}';
	var lblDisabled = '{sugar_translate label="LBL_DISABLED_MODULES"}';
	{literal}
	
	SUGAR.enabledModsTable = new YAHOO.SUGAR.DragDropTable(
		"enabled_div",
		[{key:"label",  label: lblEnabled, width: 200, sortable: false},
		 {key:"module", label: lblEnabled, hidden:true}, 
		 {key:"tplCount", label: lblEnabled, hidden:true}, 
		 ],
		new YAHOO.util.LocalDataSource(enabled_modules, {
			responseSchema: {
			   resultsList : "modules",
			   fields : [{key : "module"}, {key : "label"}, {key : "tplCount"}]
			}
		}), 
		{
			height: "300px",
			group: ["enabled_div", "disabled_div"]
		}
	);
	SUGAR.disabledModsTable = new YAHOO.SUGAR.DragDropTable(
		"disabled_div",
		[{key:"label",  label: lblDisabled, width: 200, sortable: false},
		 {key:"module", label: lblDisabled, hidden:true}, 
		 {key:"tplCount", label: lblEnabled, hidden:true}, ],
		new YAHOO.util.LocalDataSource(disabled_modules, {
			responseSchema: {
			   resultsList : "modules",
			   fields : [{key : "module"}, {key : "label"}, {key : "tplCount"}]
			}
		}),
		{
			height: "300px",
		 	group: ["enabled_div", "disabled_div"]
		 }
	);
	
	SUGAR.enabledModsTable.disableEmptyRows = true;
    SUGAR.disabledModsTable.disableEmptyRows = true;
    SUGAR.enabledModsTable.addRow({module: "", label: ""});
    SUGAR.disabledModsTable.addRow({module: "", label: ""});
	SUGAR.enabledModsTable.render();
	SUGAR.disabledModsTable.render();

	SUGAR.saveConfigureTabs = function()
	{
		var enabledTable = SUGAR.enabledModsTable;
		var disabledTable = SUGAR.disabledModsTable;
		var warning = new Array();
		var modules = [];
		for(var i=0; i < enabledTable.getRecordSet().getLength(); i++){
			var data = enabledTable.getRecord(i).getData();
			if (data.module && data.module != '') {
			    modules[i] = data.module;
			}
		}
		
		var cmptWarning = 0;
		for(var i=0; i < disabledTable.getRecordSet().getLength(); i++){
			var data = disabledTable.getRecord(i).getData();	
			
			if  (data.tplCount > 0 && data.module != '') {
				warning[cmptWarning] = data.label;
				cmptWarning++;
			}
		}
		
		if ( warning.length > 0 && !confirm ('{/literal}{$APP.SYNO_GENERATE_DOC_ADMIN_WARNING_1}{literal}'+warning.join(',')+'{/literal}{$APP.SYNO_GENERATE_DOC_ADMIN_WARNING_2}{literal}')) {
			return false;
		}
		
		YAHOO.util.Dom.get('enabled_modules').value = YAHOO.lang.JSON.stringify(modules);
		return true;
		
	}
{/literal}
</script>