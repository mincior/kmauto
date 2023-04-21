
$(function () {
	let mesaj1, mesaj2, mesaj3;
	//javascript randare tabel months
	let url = '/back/months/addNextMonth';
	let adaugaLunaUrmatoare = {
		className: 'btn-success',
		text: 'Adauga luna',
		titleAttr: 'Add',
		enabled: true,
		url: url,
		action: function (e, dt, node, config) {
			bootbox.confirm({
				title: 'Adaugati luna urmatoare? ',
				message: "Sunteti sigur?",
				buttons: {
					confirm: {
						label: 'Da',
						className: 'btn-sm btn-primary'
					},
					cancel: {
						label: 'Nu',
						className: 'btn-sm btn-secondary'
					}
				},
				callback: function (confirmed) {
					if (confirmed) {
						$.ajax({
							method: 'POST',
							url: config.url,
							success: function (response) {
								monthOTable.draw();

								showToast({
									type: 'success',
									title: 'Adaugare luna urmatoare ...',
									message: 'Luna urmatoare a fost adaugata!',
								});
							}
						});
					}
				}
			});
		}
	}
	dtButtonsCenter.push(adaugaLunaUrmatoare)
	//let urlEsteLunaInchisa = '/back/months/esteLunaInchisa';
	let urlInchideDeschideLuna = '/back/months/inchideDeschideLuna';
	let inchideDeschideLuna = {
		className: 'btn-info',
		text: 'Inchide deschide',
		titleAttr: 'Add',
		enabled: true,
		url: urlInchideDeschideLuna,
		action: function (e, dt, node, config) {
			//daca este selectat o singura luna in tabel
			if (monthOTable.rows({ selected: true }).count() == 1) {
				//scoate randul respectiv
				let cellValue = getDataTableCellValue('inchisa', monthOTable.rows({ selected: true }).data());
				mesaj1 =(cellValue == 1 ) ? 'Deschideti ' : 'Inchideti ';
				mesaj2 =(cellValue == 1 ) ? 'Inchide ' : 'Deschide ';
				mesaj3 = (cellValue == 1) ? 'inchisa ' : 'deschisa ';
				
				bootbox.confirm({
					title: mesaj1 + 'luna? ',
					message: "Sunteti sigur?" ,
					buttons: {
						confirm: {
							label: 'Da',
							className: 'btn-sm btn-primary'
						},
						cancel: {
							label: 'Nu',
							className: 'btn-sm btn-secondary'
						}
					},
					callback: function (confirmed) {
						if (confirmed) {
							$.ajax({
								method: 'POST',
								url: config.url,
								success: function (response) {
									monthOTable.draw();
									showToast({
										type: 'success',
										title: mesaj2 + 'luna ...',
										message: 'Luna a fost ' + mesaj3,
									});
								}
							});

						}
					}
				});
			} else {
				bootbox.alert({
					message: "Selectati o singura luna din tabel",
				})
			}

		}
	}
	dtButtonsCenter.push(inchideDeschideLuna)
	// let months_create_url = '/back/months/create'
	// let monthCreateButton = {
	// 	className: 'btn-success',
	// 	text: '<i class="bi bi-plus"></i>',
	// 	titleAttr: 'Add',
	// 	enabled: true,
	// 	action: function (e, dt, node, config) {
	// 		document.location.href = months_create_url;
	// 	}
	// }
	// dtButtonsCenter.push(monthCreateButton)
	// let months_show_or_edit_url = '/back/months/'

	// let monthShowButton = {
	// 	extend: 'selectedSingle',
	// 	className: 'btn-secondary selectOne',
	// 	text: '<i class="bi bi-eye"></i>',
	// 	titleAttr: 'Show',
	// 	enabled: false,
	// 	action: function (e, dt, node, config) {
	// 		const id = dt.row({
	// 			selected: true
	// 		}).data().id;

	// 		document.location.href = months_show_or_edit_url + id;
	// 	}
	// }
	// dtButtonsCenter.push(monthShowButton)

	// let monthEditButton = {
	// 	extend: 'selectedSingle',
	// 	className: 'btn-primary selectOne',
	// 	text: '<i class="bi bi-pencil"></i>',
	// 	titleAttr: 'Edit',
	// 	enabled: false,
	// 	action: function (e, dt, node, config) {
	// 		const id = dt.row({
	// 			selected: true
	// 		}).data().id;

	// 		document.location.href = months_show_or_edit_url + id + '/edit';
	// 	}
	// }
	// dtButtonsCenter.push(monthEditButton)

	let monthClearButton = {
		className: 'btn-secondary',
		text: '<i class="bi bi-arrow-counterclockwise"></i>',
		titleAttr: 'Remove filter and sort',
		action: function (e, dt, node, config) {
			dt.state.clear();
			window.location.reload();
		}
	}
	dtButtonsRight.push(monthClearButton)

	months_destroy_url = "/back/months/massDestroy"
	let monthDeleteButton = {
		extend: 'selected',
		className: 'btn-danger selectMultiple',
		text: '<i class="bi bi-trash"></i>',
		titleAttr: 'Delete',
		enabled: false,
		url: months_destroy_url,
		action: function (e, dt, node, config) {
			if (monthOTable.rows({ selected: true }).count() == 1) {
				var ids = $.map(dt.rows({
					selected: true
				}).data(), function (entry) {
					return entry.id;
				});

				if (ids.length === 0) {
					bootbox.alert({
						title: 'Eroare ...',
						message: 'Nimic selectat'
					});
					return
				}

				bootbox.confirm({
					title: 'Stergeti lunile selectate (cu tot cu intervalele lor)? ',
					message: "Sunteti sigur?",
					buttons: {
						confirm: {
							label: 'Da',
							className: 'btn-sm btn-primary'
						},
						cancel: {
							label: 'Nu',
							className: 'btn-sm btn-secondary'
						}
					},
					callback: function (confirmed) {
						if (confirmed) {
							$.ajax({
								method: 'POST',
								url: config.url,
								data: {
									ids: ids,
									_method: 'DELETE'
								},
								success: function (response) {
									monthOTable.draw();

									showToast({
										type: 'success',
										title: 'Stergere ...',
										message: 'Luna/lunile selectate au fost sterse!',
									});
								}
							});
						}
					}
				});
			}
		}
	}
	dtButtonsRight.push(monthDeleteButton)
	/* ------------------------------------------------------------------------ */
	let month_index_url = '/back/months';
	let monthDtOverrideGlobals = {
		ajax: {
			url: month_index_url,
			data: function (d) { }
		},
		columns: [{
			data: 'id',
			name: 'id',
			searchable: false,
			className: 'text-left',
			render: function (data, type, row, meta) {
				return data.toString();
			}
		},
		{
			data: 'data_raportarii',
			name: 'data_raportarii',
		},
		{
			data: 'anul_luna',
			name: 'anul_luna',
		},
		{
			data: 'id',
			render: function (data, type, row, meta) {
				if (typeof row.select === "undefined") {
					return '';
				} else {
					return row.select == 1 ? 'Da' : 'Nu';
				}
			},
		},
		{
			data: 'id',
			render: function (data, type, row, meta) {
				if (typeof row.inchisa === "undefined") {
					return '';
				} else {
					return row.inchisa == 1 ? 'Da' : 'Nu';
				}
			},
		},
		],
		select: {
			selector: 'td:not(.no-select)',
		},
		ordering: true,
		order: [
			[1, "asc"],
		],
		preDrawCallback: function (settings) {
			monthOTable.columns.adjust();
		}
	};
	/* ------------------------------------------- */
	let monthOTable = $('#monthTable').DataTable(monthDtOverrideGlobals);
	/* ------------------------------------------------------------------------ */
	new $.fn.dataTable.Buttons(monthOTable, {
		name: 'BtnGroupLeft',
		buttons: dtButtonsLeft
	});
	new $.fn.dataTable.Buttons(monthOTable, {
		name: 'BtnGroupCenter',
		buttons: dtButtonsCenter
	});
	new $.fn.dataTable.Buttons(monthOTable, {
		name: 'BtnGroupRight',
		buttons: dtButtonsRight
	});

	//monthOTable.buttons('BtnGroupLeft', null).containers().appendTo('#ToolbarLeft');
	monthOTable.buttons('BtnGroupCenter', null).containers().appendTo('#ToolbarCenter');
	monthOTable.buttons('BtnGroupRight', null).containers().appendTo('#ToolbarRight');
	/* ------------------------------------------------------------------------ */
	monthOTable.on('select deselect', function (e, dt, type, indexes) {
		var selectedRows = monthOTable.rows({
			selected: true
		}).count();

		monthOTable.buttons('.selectOne').enable(selectedRows === 1);
		monthOTable.buttons('.selectMultiple').enable(selectedRows > 0);
	});

	// adauga javascript pentru randare tabel intervale
	let interval_index_url = '/back/months/getMonthIntervals/';
	let intervalDtOverrideGlobals = {
		ajax: {
			url: interval_index_url,
			data: function (d) { }
		},
		columns: [{
			data: 'id',
			name: 'id',
			searchable: false,
			className: 'text-left',
			render: function (data, type, row, meta) {
				return data.toString();
			}
		},
		{
			data: 'data_inceput',
			name: 'data_inceput',
		},
		{
			data: 'data_sfarsit',
			name: 'data_sfarsit',
		},
		{
			data: 'interval',
			name: 'interval',
		},
		{
			data: 'id',
			render: function (data, type, row, meta) {
				if (typeof row.select === "undefined") {
					return '';
				} else {
					return row.select == 1 ? 'Da' : 'Nu';
				}
			},
		},
		{
			data: 'id',
			render: function (data, type, row, meta) {
				if (typeof row.month === "undefined") {
					return '';
				} else {
					return row.month.anul_luna;
				}
			},
		},
		],
		select: {
			selector: 'td:not(.no-select)',
		},
		ordering: true,
		order: [
			[1, "asc"],
		],
		preDrawCallback: function (settings) {
			intervalOTable.columns.adjust();
		}
	};
	let intervalOTable = $('#intervalTable').DataTable(intervalDtOverrideGlobals);
	let IntervalCreateButton = {
		className: 'btn-success',
		text: '<i class="bi bi-plus"></i>',
		titleAttr: 'Add',
		enabled: true,
		action: function (e, dt, node, config) {
			document.location.href = months_create_url;
		}
	}
	//cand se face click in tabelul months se scrie prin ajax in tabelul Settings/monthId id-ul lunii selectate
	var table = $('#monthTable').DataTable();
	$('#monthTable').on('click', 'tr', function () {
		let month_id = table.row($(this)).data().id;
		let set_month_id_url = '/back/general/setMonthId';
		$.ajax({
			method: 'POST',
			url: set_month_id_url,
			data: { valoare: month_id },
			success: function (response) {
			}
		});

		//se reincarca datele in MonthController/GetMonthIntervals dar cu monthId citit din tabelul Settings/monthId
		//Atentie, doar pentru vizualizare. Exista meniul Intervale cu toate functiile (adaugare, modificare, etc.)
		intervalOTable.draw();
	});

	function getDataTableCellValue(cellName, object1) {

		var ids = $.map(object1, function (entry) {
			return entry[`${cellName}`];
		});
		// o alta varianta gasita de mine, mai complicata.
		// function getDataTableCellValue(cellName, object1) {
		// 	for (const [key, value] of Object.entries(object1)) {
		// 		for (const [key1, value1] of Object.entries(value)) {
		// 			// itereaza toate proprietatile obiectului - in cascada 
		// 			if (`${key1}` == cellName) {//si cand ajunge la proprietatea 'cellName'
		// 				return `${value1}`;//returneaza valoare
		// 			}
		// 		}
		// 	}
		// }
		return ids;
	}


});
