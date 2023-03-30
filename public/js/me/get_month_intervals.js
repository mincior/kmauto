//Aduce intervalele selectate si daca exista interval_id selecteaza acest interval
//trece pe aici la fiecare refresh de pagina
//daca vine din edit vom gasi in interval_id id-ul intervalului si in month_id id-ul lunii
//daca vine din create sau register interval_id si month_id sunt 1
let month_id = $("#month_select").data('monthid');
////get_intervals(month_id);//completare la intrarea in pagina (refresh)
//cand se selecteaza filiala trebuie schimbate masinile si daca exista interval_id face si selectia masinii pe filiala selectata
$("#month_select").change(function () {
	let key = 'APP.MONTH';
	let value = $(this).val();
	console.log(value);
	// if (value != 5) {
	// 	$(this).data("select2").$container.find(".select2-selection").addClass('bg-warning bg-opacity-50');
	// } else {
	// 	$(this).data("select2").$container.find(".select2-selection").removeClass('bg-warning bg-opacity-50');
		
	// }
	var month_id = $(this).val();
	get_intervals(month_id);
	set_value_session(key, value);
});

//salveaza in sesiune luna selectata pentru a o tine minte la refresh
function set_value_session(key, value) {
	let url = window.location.origin + '/back/general/setValueSession' 
	$.ajax({
		method: 'POST',
		url: url,
		data: {
			key: key,
			value: value,
		},
		success: function(response) {
			
		}
	});

}

//incarca masinile filialei
function get_intervals( month_id) {
	let url = window.location.origin + '/back/general/get-month-intervals' + '/' + month_id
	//ajax http request
	axios.get(url)
		.then(function (res) {
			//sterge masinile din select pentru a le aduce pe cele ale filialei selectate
			$("#interval_select").empty();
			//afla lungimea vectorului cu masini pentru a le itera
			var len = res.data.length;
			//itereaza vectorul cu masini
			 $("#interval_select").append("<option value=''>Alege...</option>");
			for (var i = 0; i < len; i++)
			{
				//scoate id-ul si intervalul masinii curente
				var id = res.data[i]['id'];
				var interval = res.data[i]['interval'];
				//pune 'selected' pentru masina cu id-ul interval_id
				var sel = ((i == 0) ? 'selected' : '');
				//adauga masina in caseta (select) cu masini
				$("#interval_select").append("<option " + sel + " value='" + id + "'>" + interval + "</option>");
			}
			window.location.reload();
		})
}
