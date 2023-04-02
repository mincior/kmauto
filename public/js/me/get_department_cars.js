//Aduce masinile filialei selectate si daca exista car_id selecteaza aceasta masina
//trece pe aici la fiecare refresh de pagina
//daca vine din edit vom gasi in car_id id-ul masinii si in department_id id-ul filialei
//daca vine din create sau register car_id si department_id sunt 1
let car_id = $("#department_select").data('carid');
let department_id = $("#department_select").data('deptid');
//get_department_cars(department_id, car_id);//completare la intrarea in pagina (refresh)
//cand se selecteaza filiala trebuie schimbate masinile si daca exista car_id face si selectia masinii pe filiala selectata
$("#department_select").change(function () {
	var department_id = $(this).val();
	get_department_cars(department_id, car_id);
});


//incarca masinile filialei
function get_department_cars( department_id, car_id) {
	let url = window.location.origin + '/back/departments/get-cars' + '/' + department_id
	//ajax http request
	axios.get(url)
		.then(function (res) {
			//sterge masinile din select pentru a le aduce pe cele ale filialei selectate
			$("#car_select").empty();
			//afla lungimea vectorului cu masini pentru a le itera
			var len = res.data.length;
				console.log(res.data.length);
			//itereaza vectorul cu masini
				$("#car_select").append("<option value='0'>Alege...</option>");
			for (var i = 0; i < len; i++)
			{
				//scoate id-ul si numarul masinii curente
				//$departments[0]['cars'][1]['numar']
				var id = res.data[i]['id'];
				var numar = res.data[i]['numar'];
				//pune 'selected' pentru masina cu id-ul car_id
				var sel = ((id == car_id) ? 'selected' : '');
				//adauga masina in caseta (select) cu masini
				$("#car_select").append("<option " + sel + " value='" + id + "'>" + numar + "</option>");
			}
		})
}
