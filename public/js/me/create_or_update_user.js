
//cand se completeaza numarul masinii scrie cu litere mari si inlocuieste spatiul cu liniuta
function prelucrare_nume_utilizator(el) {
	const str = el.value;
	const arr = str.split(" ");
	for (var i = 0; i < arr.length; i++) {
		arr[i] = arr[i].charAt(0).toUpperCase() + arr[i].slice(1);
	}
	const str2 = arr.join(" ");
	el.value = str2;
}

jQuery(document).ready(function ($) {
	$('#name').focus();
	$('.my-select2').select2();
	$('#my-nav-bar').addClass('d-none');//ascunde bara de navigare cand sunt pe create car
});
