//Aduce utilizatorii filialei selectate si daca exista user_id selecteaza aceasta masina
//trece pe aici la fiecare refresh de pagina
//daca vine din edit vom gasi in user_id id-ul utilizatorului si in department_id id-ul filialei
//daca vine din create sau register user_id si department_id sunt 1
let user_id = $("#department_select").data('userid');
let department_id = $("#department_select").data('deptid');
//get_department_users(department_id, user_id);//completare la intrarea in pagina (refresh)
//cand se selecteaza filiala trebuie schimbate utilizatorii si daca exista user_id face si selectia utilizatorului pe filiala selectata
$("#department_select").change(function () {
	var department_id = $(this).val();
	get_department_users(department_id, user_id);
});


//incarca utilizatorii filialei
function get_department_users( department_id, user_id) {
	let url = siteUrl + '/back/departments/get-users' + '/' + department_id  
	//ajax http request

	axios.get(url)
		.then(function (res) {
			//sterge utilizatorii din select pentru a-i aduce pe cei ai filialei selectate
			$("#user_select").empty();
			//afla lungimea vectorului cu useri pentru a-i itera
			console.log(res.data);
			var len = res.data.length;
			//itereaza vectorul cu useri
				$("#user_select").append("<option value='0'>Alege...</option>");
			for (var i = 0; i < len; i++)
			{
				//scoate id-ul si numele utilizatorului curent
				//$departments[0]['users'][1]['numar']
				var id = res.data[i]['id'];
				var nume = res.data[i]['name'];
				var culoare = res.data[i]['culoare'];
				//pune 'selected' pentru userul cu id-ul user_id
				var sel = ((id == user_id) ? 'selected' : '');
				//adauga userul in caseta (select) cu useri
				$("#user_select").append("<option style=\"color: " + culoare + "\" data-color=\""+ culoare +"\"" + sel + " value='" + id + "'>" + nume + "</option>");
			}
		})
}
