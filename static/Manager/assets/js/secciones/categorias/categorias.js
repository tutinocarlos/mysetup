
$(document).ready(function () {
$(".js-example-theme-multiple").select2({
  theme: "classic"
});	
	
var base_url = $('body').data('base_url');

	comp_categorias();
	
});

	function comp_categorias(){
	var dato = new FormData();
	dato.append('id_pais', 'id_pais');
	
	$.ajax({
		type: "POST",
		contentType: false,
		dataType: 'json',
		data: dato,
		processData: false,
		cache: false,
		beforeSend: function () {
//		$(".preloader").fadeIn();
		},
		url: $("body").data('base_url') + "Manager/Categorias/list",
		success: function (result) {
//			$(".preloader").fadeOut();
			console.log('resultado');
			console.log(result);
			$("#list_cate").append(result.categorias);
//									location.reload();
		},
		error: function (xhr, errmsg, err) {
		console.log(xhr.status + ": " + xhr.responseText);
		}
	});
		
	}