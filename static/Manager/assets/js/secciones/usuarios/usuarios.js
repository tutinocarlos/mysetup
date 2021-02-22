
var Suscriptores_Module = {
	attrs: {
		suscriptores: [],

	},
	methods: function () {



		function checkAvailableListSuscriptores(id) {
			return Suscriptores_Module.attrs.suscriptores.includes(id) ? false : true;
		}

		function getAll() {
			return Suscriptores_Module.attrs.suscriptores;
		}

		function countList() {
			return Suscriptores_Module.attrs.suscriptores.length;
		}

		function display() {
			$('.suscriptores_seleccionados').text(this.countList());
			console.log('[array suscriptores] - Lista de ids', this.getAll());
		}

		function onChangeNumberTextSelect() {
			$('.suscriptores_seleccionados').text(this.countList());
		}

		function actionsButtons() {

			$('.remove-all-Suscriptores').click(function (e) {
				e.preventDefault();

				swal({
					title: 'Eliminar suscriptor',
					text: "¿Esta seguro desea eliminar la(s) persona(s) seleccionada(s)?",
					type: 'error',
					showCancelButton: true,
					confirmButtonText: 'Si, eliminar',
					cancelButtonText: 'No, cancelar!',
					confirmButtonClass: 'btn btn-success',
					cancelButtonClass: 'btn btn-danger m-l-10',
					buttonsStyling: false
				}).then(function () {

					Suscriptores_Module.methods().multiDeletes();
				}, function () {
					swal("Cancelado!", "Operación cancelada por el usuario!", "error");
				});
			});
		}



		function insert(id) {

			if (this.checkAvailableListSuscriptores(id)) {
				Suscriptores_Module.attrs.suscriptores.push(id);
			}

			this.display();
			this.refresh();
		}

		function remove(id) {

			Suscriptores_Module.attrs.suscriptores.splice(Suscriptores_Module.attrs.suscriptores.indexOf(id), 1);

			this.display();
			this.refresh();
		}

		function refresh() {

			if (Suscriptores_Module.attrs.suscriptores.length) {

				this.onChangeNumberTextSelect();
			} else {

			}

			$('.suscriptores_seleccionados').html(this.countList());
		}

		function clearAll() {
			Suscriptores_Module.attrs.suscriptores = [];
			this.display();
		}

		function clearAndRefresh() {
			Suscriptores_Module.methods().clearAll();

			Suscriptores_Module.methods().refresh();
		}

		function onAllSelectionSuscriptores() {
			this.clearAll();

		}

		function fetchIds(ids) {
			this.clearAndRefresh();

			$('.suscriptores_seleccionados').html("");

			ids.map(r => Suscriptores_Module.methods().insert(r));
		}

		return {
			fetchIds: fetchIds,
			insert: insert,
			remove: remove,
			getAll: getAll,
			display: display,
			refresh: refresh,
			countList: countList,
			clearAll: clearAll,
			clearAndRefresh: clearAndRefresh,


			checkAvailableListSuscriptores: checkAvailableListSuscriptores,
			onChangeNumberTextSelect: onChangeNumberTextSelect,
			onAllSelectionSuscriptores: onAllSelectionSuscriptores
		};
	},
	init: function () {
		console.log('Module Suscriptores Loaded');

	}
};



$(document).ready(function () {
var base_url = $('body').data('base_url');

	var dataTable_suscriptores = $('#dataTable_suscriptores').DataTable({

		'dom': '<"top"fi>rt<"bottom"lp><"clear">',
		'createdRow': function (row, data, dataIndex) {
			// agrego el atributo id al td 0 
			console.log('data');
			console.log(data);
			$(row).attr('id', data[5]);
			$(row).find('td:eq(0)').attr('id', data[5]);
		},
		'rowId': 'id',
		'select': true,
		'columnDefs': [{
			'width': "10px",
			'orderable': false,
			'className': 'select-checkbox',
			'targets': 0,

	},
 	{orderable:false,targets:[0,1,2,3,4]},
 	{
			'visible': false,
			'targets':5,
	}],
		'select': {
			'style': 'multi',
			'selector': 'td:first-child'
		},
		'order': [[1, 'asc']],
		'language': {

			'select': {
				rows: "%d Registros seleccionados"
			},
			url: $("body").data('base_url') + 'static/Manager/global_assets/datatables/spanish.json'
		},
		"pageLength": 10,

		"ajax": {
			"url": $("body").data('base_url') + "Manager/Usuarios",
			"type": "POST",
			"data": {
				// envio tipo de tabla para reutilizar la funcion del controlador de Post_Model
				"tipo_tabla": 'suscriptores'
			},
		}
	});
	
$("#selectAllSuscriptores").on("click", function (e) {

		if ($(this).is(":checked")) {

			dataTable_suscriptores.rows().select();

			dataTable_suscriptores.rows().iterator('row', function (context, index) {

				$(this.row(index).node()).hasClass('selected');
				var id = $(this.row(index).node()).attr('id');
				console.table('->' + $(this.row(index).node()).attr('id'));

				Suscriptores_Module.methods().insert(parseInt(id));

			});


		} else {
			dataTable_suscriptores.rows().deselect();
			Suscriptores_Module.methods().clearAndRefresh();
			Suscriptores_Module.methods().countList();
		}
	});
	
$('.datatable-basic').DataTable({
	language: {
		url: $("body").data('base_url') + 'static/Manager/global_assets/datatables/spanish.json'
	},
	contentType: false,
	dataType: 'json',
	processData: false,
	"serverSide": true,
	"pageLength": 1,
	"ajax": {
		"url": $("body").data('base_url') + "Manager/Usuarios",
		"type": "POST"
	},columnDefs: [
        { targets: [0], visible: true, title: 'Apellido'},
        { targets: [1], visible: true, title: 'Nombre'},
       
    ],
		"success":function(data){
			console.log(data);
		
	},
	error: function (xhr, errmsg, err) {
				console.log(xhr.status + ": " + xhr.responseText);
			}
});
});