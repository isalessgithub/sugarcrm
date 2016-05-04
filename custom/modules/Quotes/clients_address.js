function setClientAddress(){
	//src_form = document.getElementById('EditView');
	var client = $('#atc_clients_quotes_1atc_clients_ida').val();
	var partner_client = $('#atc_clients_quotes_2atc_clients_ida').val();
	var copy_add = 0;
	if($('#shipping_checkbox').is(':checked')){copy_add = 1;}
	//console.log(document.getElementById('atc_clients_quotes_1atc_clients_ida').value);
        $add_result = {
          client_billing_address_street: 'client street',
          client_billing_address_city: 'client city',
          client_billing_address_state: 'client state',
          client_billing_address_postalcode: 'client postalcode',
          client_billing_address_country: 'client country',
          partner_billing_address_street: 'partner street',
          partner_billing_address_city: 'partner city',
          partner_billing_address_state: 'partner state',
          partner_billing_address_postalcode: 'partner postalcode',
          partner_billing_address_country: 'partner country',
        };

        if(client != ''){
          $('#billing_address_street').val($add_result['client_billing_address_street']);
          $('#billing_address_city').val($add_result['client_billing_address_city']);
          $('#billing_address_state').val($add_result['client_billing_address_state']);
          $('#billing_address_postalcode').val($add_result['client_billing_address_postalcode']);
          $('#billing_address_country').val($add_result['client_billing_address_country']);
          if(copy_add == 1){
            $('#shipping_address_street').val($add_result['client_billing_address_street']);
            $('#shipping_address_city').val($add_result['client_billing_address_city']);
            $('#shipping_address_state').val($add_result['client_billing_address_state']);
            $('#shipping_address_postalcode').val($add_result['client_billing_address_postalcode']);
            $('#shipping_address_country').val($add_result['client_billing_address_country']);
          }
        }

        if(partner_client != '' && copy_add == 0){
          $('#shipping_address_street').val($add_result['partner_billing_address_street']);
          $('#shipping_address_city').val($add_result['partner_billing_address_city']);
          $('#shipping_address_state').val($add_result['partner_billing_address_state']);
          $('#shipping_address_postalcode').val($add_result['partner_billing_address_postalcode']);
          $('#shipping_address_country').val($add_result['partner_billing_address_country']);
        }

	console.log(client);
	console.log(partner_client);
	console.log(copy_add);

}
