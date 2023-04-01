//trece pe aici la fiecare refresh de pagina
//In tabelul months exista campul select care va fi pe 1 doar pentru luna selectata
//astfel ca aici va sosi in $("#month_select").val() id-ul lunii selectate
//Aduce intervalele selectate si selecteaza pe primul
//incarca intervalele lunii si selecteaza pe primul
let url = window.location.origin + '/back/general/get-month-intervals' + '/' + $("#month_select").val() //
// let mon =     JSON.stringify($("#month_select").data('months'));
// console.log(mon);
axios.get(url) //ajax http request
    .then(function (res) {
        //sterge intervalele din select pentru a le aduce pe cele ale lunii selectate
		$("#interval_select").empty();
		
        //afla lungimea vectorului cu intervale pentru a le itera
		var len = res.data.length;
		
		//pune prima optiune 'Alege...'
		$("#interval_select").append("<option value=''>Alege...</option>");
		
        //itereaza vectorul cu intervale
        for (var i = 0; i < len; i++) {
            //scoate id-ul intervalului curent
            var id = res.data[i]['id'];
            var sel = res.data[i]['select'];
            var interval = res.data[i]['interval'];
            //pune 'selected' pentru masina cu id-ul interval_id
            var sel = ((sel == 1) ? 'selected' : '');
            //adauga masina in caseta (select) cu masini
            $("#interval_select").append("<option " + sel + " value='" + id + "'>" + interval + "</option>");
        }

	})
	
//cand se selecteaza luna se salveaza in months campul select dupa care se da refresh la pagina
$("#month_select").change(function () { //Atentie, la selectare nu se aduc intervalele ci doar se scrie campul select din months
	let month_id = $(this).val();
	let url = window.location.origin + '/back/general/setValueMonthSelect'
	$.ajax({
		method: 'POST',
		url: url,
		data: {
			month_id: month_id,
		},
		success: function (response) {
			window.location.reload();

		}
	});
});

//cand se selecteaza intervalul se salveaza in intervale campul select dupa care se da refresh la pagina
$("#interval_select").change(function () { 
    let month_id = $("#month_select").val();
    let interval_id = $(this).val();
    let url = window.location.origin + '/back/general/setValueIntervalSelect'
    $.ajax({
        method: 'POST',
        url: url,
        data: {
            month_id: month_id,
            interval_id: interval_id,
        },
        success: function (response) {
            window.location.reload();

        }
    });
});

