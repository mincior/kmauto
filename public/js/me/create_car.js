function salveazaConsumuriMedii() {
	let valoare = $('#consum_mediu').val();
	if (valoare) {
		let url = siteUrl + '/back/car_fuels/save-car_fuels'
		var consumuri_medii = [];

		bootbox.confirm({
			title: 'Adaugare consum mediu',
			message: 'Salvati noua valoare in baza de date?',
			buttons: {
				confirm: {
					label: 'Da',
					className: 'btn-success'
				},
				cancel: {
					label: 'Nu',
					className: 'btn-danger'
				}
			},
			callback: function (confirmed) {
				if (confirmed) {
					axios.post(url, { valoare: valoare })
						.then(function (response) {
							if (response.data == 'Valoarea exista deja.') {
								bootbox.alert(response.data);
							}
						})
				}
			}
		});

	}

}

// //autocompletare pentru consumuri medii
// let url = siteUrl + '/back/car_fuels/get-car_fuels' 
// var consumuri_medii = [];
// axios.get(url)
// .then(function (res) {
// 	var len = res.data.length;
// 	for (var i = 0; i < len; i++)
// 	{
// 		var id = res.data[i]['id'];
// 		var numar = res.data[i]['valoare'];
// 		consumuri_medii[i] = numar;
// 		}
// })
// autocomplete(document.getElementById("consum_mediu"), consumuri_medii);

//cand se completeaza numarul masinii scrie cu litere mari si inlocuieste spatiul cu liniuta
function prelucrare_numar_masina(el) {
	let up = el.value.toUpperCase();//scrie cu litere mari
	el.value = up.replace(" ", "-");//inlocuieste spatiul cu liniuta
}

jQuery(document).ready(function ($) {
	$('#numar').focus();
	$('.my-select2').select2();
	$('#my-nav-bar').addClass('d-none');//ascunde bara de navigare cand sunt pe create car
	$("#consum_mediu").autocomplete({
		source: function (request, response) {
			$.ajax({
				url: siteUrl + '/back/cars/' + "autocomplete",
				data: {
					term: request.term
				},
				dataType: "json",
				success: function (data) {
					var resp = $.map(data, function (obj) {
						return obj.valoare;
					});

					console.log(resp);
					response(resp);
				}
			});
		},
		minLength: 1
	});
});
