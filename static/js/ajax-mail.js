$(document).ready(function(){
	
	jQuery.validator.addMethod("emailordomain", function(value, element) {
  return this.optional(element) || /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/.test(value) || /[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/.test(value);
}, "Ingrese un dominio válido");
	
	$("#contrato").validate({
		
		 rules: {
      full_name : {
        required: true,
       
      },
      dominio: {
        required: true,
        emailordomain: true
      },email:{
				required:true,
				email: true
			},
			 telefono:{
				required:true
				 
			 },
			 'servicio[]':{
				 	required: true,
					minlength: 1
		 }
    },
		
		messages: {
            'servicio[]': {
                required: "Selecciona una opción",
               minlength: "Check no more than {0} boxes"
            }
        },
		 errorPlacement: function(error, element) {
//			 console.log('element.type');
            if (element[0].type == 'checkbox') {

							
                error.appendTo(('q.error'));
            }
            else {
                error.insertAfter(element);
            }
        },
		
		    submitHandler: function(form) {
	$.ajax({
		dataType: 'json',
		type: "POST",
		url: $("body").data('base_url')+"welcome/contratar",
		data: $("form#contrato").serializeObject(),
		success: function(response) {
			console.log('enviar_contrato');
			console.log(response);
			if (response.error) {
			}
			$('form#contrato')[0].reset()
//			$('#form-contrato').find('input, textarea, button, select').attr('disabled',false);
			$("#form-messege").html(response.response);

		}

	});
    }
	});
	
	$("#senviar_contrato").click(function(e){
	e.preventDefault();


	});
	
});
$.fn.serializeObject = function()
{
   var o = {};

   var a = this.serializeArray();
   $.each(a, function() {
		 console.log(this.name);
       if (o[this.name]) {
           if (!o[this.name].push) {
               o[this.name] = [o[this.name]];
           }
           o[this.name].push(this.value || '');
       } else {
           o[this.name] = this.value || '';
       }
   });
   return o;
};
	
$(function() {
	
	setTimeout(myFunction, 5000);


});

function myFunction(){
//	$("div.floating-wpp-popup").addClass('active');
}
