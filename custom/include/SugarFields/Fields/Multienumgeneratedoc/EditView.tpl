{*
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

*}
    <input  type="hidden" 
            id="{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}_selected" 
            name="{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}_selected" 
            value="{{sugarvar key='value'}}">
	<input  type="hidden" 
            id="{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}_multiselect" 
            name="{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}_multiselect" 
            value="true">
	{multienum_to_array string={{sugarvar key='value' string=true}} default={{sugarvar key='default' string=true}} assign="values"}
	<select id="{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}"
            name="{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}[]"
            multiple="true" 
            size='{{$displayParams.size|default:6}}' 
            style="width:150" 
            title='{{$vardef.help}}' 
            tabindex="{{$tabindex}}" {{$displayParams.field}} 
            {{if !empty($displayParams.accesskey)}} accesskey='{{$displayParams.accesskey}}' {{/if}}
            {{if isset($displayParams.javascript)}}{{$displayParams.javascript}}{{/if}}>
            {html_options options={{sugarvar key='options' string=true}} selected=$values}
	</select>

    
    <script>
        {literal}
        var template_module = $('#syno_doc_template_c').val() ;
        {/literal}
            
        {multienum_to_array string={{sugarvar key='value' string=true}} assign="vals"}

        {literal}

        var selected_value = {/literal}{$vals|@json_encode}{literal} ;

        setRelationshipsForTemplate(template_module , selected_value);

        $("#syno_doc_template_c").change(function () {
            var str = "";
            setRelationshipsForTemplate($('#syno_doc_template_c').val() , null)    ;
        });

        function setRelationshipsForTemplate(template_module , selected_value ) {
            
            $.getJSON("./index.php",
                {
                entryPoint: "getLinksForModule",
                module: template_module,
                },
                function(data) {
                    
                    $('#syno_doc_relationships_c').empty();
                    $('#syno_doc_relationships_c').append( $('<option></option>').val(0).html("") )
                    
                    $.each(
                            data, 
                            function(i,item){
                                $('#syno_doc_relationships_c').append( $('<option></option>').val(i).html(item['label']) );
                                if ( jQuery.inArray( i, selected_value ) >= 0 ) {
                                    $("#syno_doc_relationships_c option[value='" + i + "']").prop("selected", true);
                                }
                            }
                    );
                }
            );
        }
    {/literal}
    </script>
