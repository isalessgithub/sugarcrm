function setClientAddress(popup_reply_data){
	//src_form = document.getElementById('EditView');
	var client = $('#atc_clients_quotes_1atc_clients_ida').val();
	var partner_client = $('#atc_clients_quotes_2atc_clients_ida').val();
	var copy_add = 0;
console.log(popup_reply_data);
	if($('#shipping_checkbox').is(':checked')){copy_add = 1;}


	$.ajax({
		url:"index.php?entryPoint=clients_address",
		type: "POST",
		datatype: "json",
		data: {'client':client,'partner':partner_client},
		success: function(add_result){
			var rr = $.parseJSON(add_result)
        if(rr.client_name != ''){
          $('#billing_address_street').val(rr.client_billing_address_street);
          $('#billing_address_city').val(rr.client_billing_address_city);
          $('#billing_address_state').val(rr.client_billing_address_state);
          $('#billing_address_postalcode').val(rr.client_billing_address_postalcode);
          $('#billing_address_country').val(rr.client_billing_address_country);
          if(copy_add == 1){
            $('#shipping_address_street').val(rr.client_billing_address_street);
            $('#shipping_address_city').val(rr.client_billing_address_city);
            $('#shipping_address_state').val(rr.client_billing_address_state);
            $('#shipping_address_postalcode').val(rr.client_billing_address_postalcode);
            $('#shipping_address_country').val(rr.client_billing_address_country);
          }
        }
        if(rr.partner_name != '' && copy_add == 0){
          $('#shipping_address_street').val(rr.partner_name+"\n"+rr.partner_billing_address_street);
          $('#shipping_address_city').val(rr.partner_billing_address_city);
          $('#shipping_address_state').val(rr.partner_billing_address_state);
          $('#shipping_address_postalcode').val(rr.partner_billing_address_postalcode);
          $('#shipping_address_country').val(rr.partner_billing_address_country);
        }
		}
	});
}
