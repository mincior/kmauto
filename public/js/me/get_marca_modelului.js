//Aduce masinile filialei selectate si daca exista type_id selecteaza aceasta masina
//trece pe aici la fiecare refresh de pagina
//daca vine din edit vom gasi in type_id id-ul masinii si in brand_id id-ul filialei
//daca vine din create sau register type_id si brand_id sunt 1
let type_id = $("#brand_select").data('typeid');
let brand_id = $("#brand_select").data('deptid');
//get_brand_types(brand_id, type_id);//completare la intrarea in pagina (refresh)
//cand se selecteaza filiala trebuie schimbate masinile si daca exista type_id face si selectia masinii pe filiala selectata
$("#brand_select").change(function () {
	var brand_id = $(this).val();
	get_brand_types(brand_id, type_id);
});


//incarca masinile filialei
function get_brand_types( brand_id, type_id) {
	let url = siteUrl + '/back/types/get-brand-types' + '/' + brand_id
	//ajax http request
	axios.get(url)
		.then(function (res) {
			//sterge masinile din select pentru a le aduce pe cele ale filialei selectate
			$("#type_select").empty();
			//afla lungimea vectorului cu masini pentru a le itera
			var len = res.data.length;
			//itereaza vectorul cu masini
				$("#type_select").append("<option value='0'>Alege...</option>");
			for (var i = 0; i < len; i++)
			{
				//scoate id-ul si numarul masinii curente
				var id = res.data[i]['id'];
				console.log(id);
				var numar = res.data[i]['numar'];
				//pune 'selected' pentru masina cu id-ul type_id
				var sel = ((id == type_id) ? 'selected' : '');
				//adauga masina in caseta (select) cu masini
				$("#type_select").append("<option " + sel + " value='" + id + "'>" + numar + "</option>");
			}
		})
}
