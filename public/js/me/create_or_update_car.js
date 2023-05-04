
//cand se completeaza numarul masinii scrie cu litere mari si inlocuieste spatiul cu liniuta
function prelucrare_numar_masina(el) {
	let up = el.value.toUpperCase();//scrie cu litere mari
	el.value = up.replace(" ", "-");//inlocuieste spatiul cu liniuta
}
function formatState(state) {
	const option = $(state.element);
	const color = option.data("color");
  
	if (!color) {
	  return state.text;
	}
  
	return $(`<span style="color: ${color}">${state.text}</span>`);
};
  
jQuery(document).ready(function ($) {
	$('#numar').focus();
	$('.my-select2').select2({//urmatoarele doua linii permit colorarea optiunilor in select2
		templateResult: formatState,
		templateSelection: formatState,
	
	});
	
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
