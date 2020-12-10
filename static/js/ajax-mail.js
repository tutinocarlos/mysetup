$(function() {
	
	setTimeout(myFunction, 5000);
	

	// Get the form.
	var form = $('#contact-form');

	// Get the messages div.

	// Set up an event listener for the contact form.
	$(form).submit(function(e) {
		
		// Stop the browser from submitting the form.
		e.preventDefault();
		var error = false;
		var mensaje = "Campo requerido";
		if($("#full_name").val() == ''  ){
			error = true;
			$("#full_name").addClass("is-invalid");
			$("#error_full_name").html("Campo requerido");
		}else{
			$("#error_full_name").html('');
			$("#full_name").addClass("is-valid").removeClass("is-invalid");
		}
		
		if($("#email").val() == ''){
			error = true;
			$("#email").addClass("is-invalid");
			$("#error_email").html("Campo requerido");
		}else{
			$("#error_email").html('');
			$("#email").addClass("is-valid").removeClass("is-invalid");
		}		
		 var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
		if (caract.test($("#email").val()) == false){
			$("#email").addClass("is-invalid");
			$("#error_email").html("Ingrese email válido");
		}
		
		if($("#telefono").val() == ''){
			error = true;
			$("#telefono").addClass("is-invalid");
			$("#error_telefono").html("Campo requerido");
		}else{
			$("#error_telefono").html('');
				$("#telefono").addClass("is-valid").removeClass("is-invalid");
		}
		if($("#dominio").val()  == ''){
			error = true;
			$("#dominio").addClass("is-invalid");
			$("#error_dominio").html("Campo requerido");
		}else{
			$("#error_dominio").html('');
			$("#dominio").addClass("is-valid").removeClass("is-invalid");
		}
		if($("#plan").val()  == ''){
			error = true;
			$("#plan").addClass("is-invalid");
			$("#error_plan").html("Campo requerido");
		}else{
			$("#plan").addClass("is-valid").removeClass("is-invalid");
			$("#error_plan").html('');
		}
		
		if ($('#registro').prop('checked') || $('#delegacion').prop('checked')) {
    	$("#error_dns").html("");
}else{
	
	error = true;
    	$("#error_dns").html("Seleccione una opción");
}
		
//		$('.form-check-input:checked').each(
//    function() {
//        alert("El checkbox con valor " + $(this).val() + " está seleccionado");
//    }
//);
		
		if(error){
			 return false;
		 }
		// Serialize the form data.
		var formData = $(form).serialize();

//		alert(formData);
		// Submit the form using AJAX.
		$.ajax({
			dataType: 'json',
			type: 'POST',
			url: $(form).attr('action'),
			data: formData,
			beforeSend: function(  ) {
    		$("#enviar_contrato").html('Enviando !!!').prop('disabled', true);
  }
		})

		.done(function(response) {
			console.log('response');
			console.log(response);
			if(!response.error ){
				$('#contact-form')[0].reset();
				$("section#contratar").html("");
				$("section#contratar").html(response.html);
			}else{
				$("p.form-messege").addClass('error').html('Error interno PHP7.5');
			}

			// Clear the form.
		})
		.fail(function(data) {
			console.log('data');
			console.log(data);
			// Make sure that the formMessages div has the 'error' class.
			$("p.form-messege").addClass('error').html(data);

			// Set the message text.
			if (data.responseText !== '') {
				$(formMessages).text(data.responseText);
			} else {
				$(formMessages).text('Oops! An error occured and your message could not be sent.');
			}
		});
	});

});

function myFunction(){
//	$("div.floating-wpp-popup").addClass('active');
}
