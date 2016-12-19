<input type="hidden" class="sugar_field" id="syno_doc_relationships_c" value="syno_doc_relationships_c">

{multienum_to_array string={{sugarvar key='value' string=true}} assign="vals"}

{literal}

<span id="syno_doc_relationships_c_display" name="syno_doc_relationships_c_display" ></span>
<span id="help_html" name="help_html" style="display:none;">{/literal}{sugar_help text=$MOD.LBL_SYNOGENERATEDOC_RELATIONSHIP_HELP_FIELD}{literal}</span>
<span id="help_field_html" name="help_field_html" style="display:none;">{/literal}{sugar_help text=$MOD.LBL_SYNOGENERATEDOC_RELATIONSHIP_HELP_FIELD}{literal}</span>


<table id="syno_doc_relationships_c_display_table" name="syno_doc_relationships_c_display_table" border="0" cellspacing="1" cellpadding="0" class="" width="100%">
			    <tr>
			      <td scope='col' style="text-align: center;">{/literal}{sugar_translate label="LBL_SYNO_DOC_TEMPLATE_CODE"}{literal}</td>
			      <td scope='col' style="text-align: center;">{/literal}{sugar_translate label="LBL_SYNO_DOC_RELATIONSHIP_NAME"}{literal}</td>
			      <td scope='col' style="text-align: center;">{/literal}{sugar_translate label="LBL_SYNO_DOC_MODULE_NAME"}{literal}</td>
			      <td scope='col' style="text-align: center;"></td>
			    </tr>
</table>
<div id="table_field_html" name="table_field_html"></div>
<script type="text/javascript">

var selected_value = {/literal}{$vals|@json_encode}{literal} ;

var template_module = $('#syno_doc_template_c_value').val(); 

setRelationshipsForTemplate(template_module , selected_value);

function replaceAll(find, replace, str) {
  return str.replace(new RegExp(find, 'g'), replace);
}

function setRelationshipsForTemplate(template_module , selected_value ) {
	var str = "";
	var row = "";
	
	//Récupération des relations en fonction du type de template sélectionné
	$.getJSON("./index.php",
	    {
	    entryPoint: "getLinksForModule",
	    module: template_module,
	    },
	    function(data) {
	        
	        $.each(
	                data, 
	                function(i,item){
	                	//Nous affichons seulement les valeurs sélectionné
	                    var selected_item = jQuery.inArray( i, selected_value ) ;
	                    if ( selected_item >= 0 ) {
	                    	var replace_search_array = Array(
	                    					'\\$help_rel_name',
	                    				   	'\\$help_block_name',
	                    				   	'\\$help_module_name'
	                    				   );
	                    	var replace_value_array = Array(
	                    					i,
	                    				   	i+'_list_data',
	                    				   	item['module']
	                    				   );
	                    	//Gestion des messages d'aides au niveau des relations affichées
	                    	var help_str = $('#help_field_html').html();
	                    	//Remplacement des variables pour afficher l'aide en dynamique avec la relation associée.
	                        for ( var i = 0; i < replace_search_array.length; i++ )
							{
								help_str = replaceAll( replace_search_array[i], replace_value_array[i] , help_str);
	                        	row = '<tr> <td>'+ item["link_name"] +'_list_data</td><td>'+ item['relationship']  +'</td><td>'+ item['module'] +'</td><td>'+ help_str +'</td></tr>';
							}
							//Concaténation de la valeur de la relation et de l'aide associée
	                        //str = str + '<li style="margin-left:10px;">'+ item['label']  + help_str +'</li>';
	                        $('#syno_doc_relationships_c_display_table').append(row) ;
	                        
	                    }
	                }
	        );

	    }
	);
}

</script>
 
{/literal}