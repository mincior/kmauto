
$(function () {
	let mesaj1, mesaj2, mesaj3;
	let brands_create_url = '/back/brands/create'
	let brandCreateButton = {
		className: 'btn-success',
		text: '<i class="bi bi-plus"></i>',
		titleAttr: 'Add',
		enabled: true,
		action: function (e, dt, node, config) {
			document.location.href = brands_create_url;
		}
	}
	dtButtonsCenter.push(brandCreateButton)
	let brands_show_or_edit_url = '/back/brands/'

	let brandShowButton = {
		extend: 'selectedSingle',
		className: 'btn-secondary selectOne',
		text: '<i class="bi bi-eye"></i>',
		titleAttr: 'Show',
		enabled: false,
		action: function (e, dt, node, config) {
			const id = dt.row({
				selected: true
			}).data().id;

			document.location.href = brands_show_or_edit_url + id;
		}
	}
	dtButtonsCenter.push(brandShowButton)

	let brandEditButton = {
		extend: 'selectedSingle',
		className: 'btn-primary selectOne',
		text: '<i class="bi bi-pencil"></i>',
		titleAttr: 'Edit',
		enabled: false,
		action: function (e, dt, node, config) {
			const id = dt.row({
				selected: true
			}).data().id;

			document.location.href = brands_show_or_edit_url + id + '/edit';
		}
	}
	dtButtonsCenter.push(brandEditButton)

	let brandClearButton = {
		className: 'btn-secondary',
		text: '<i class="bi bi-arrow-counterclockwise"></i>',
		titleAttr: 'Remove filter and sort',
		action: function (e, dt, node, config) {
			dt.state.clear();
			window.location.reload();
		}
	}
	dtButtonsRight.push(brandClearButton)

	brands_destroy_url = "/back/brands/massDestroy"
	let brandDeleteButton = {
		extend: 'selected',
		className: 'btn-danger selectMultiple',
		text: '<i class="bi bi-trash"></i>',
		titleAttr: 'Delete',
		enabled: false,
		url: brands_destroy_url,
		action: function (e, dt, node, config) {
			if (brandOTable.rows({ selected: true }).count() == 1 && getDataTableCellValue('inchisa', brandOTable) == 0) {
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
					title: 'Stergeti marca selectata (cu tot cu typeele ei)? ',
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
									brandOTable.draw();

									showToast({
										type: 'success',
										title: 'Stergere ...',
										message: 'Marca selectata a fost stearsa!',
									});
									location.reload();
								}
							});
						}
					}
				});
			} else {
				bootbox.alert('Nu puteti sterge o marca inchisa');
			}
		}
	}
	dtButtonsRight.push(brandDeleteButton)
	/* ------------------------------------------------------------------------ */
	let brand_index_url = '/back/brands';
	let brandDtOverrideGlobals = {
		searching: false, paging: false, info: false,
		ajax: {
			url: brand_index_url,
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
			data: 'name',
			name: 'name',
		},
		],
		select: {
			selector: 'td:not(.no-select)',
		},
		ordering: true,
		order: [
			[0, "desc"],
		],
		preDrawCallback: function (settings) {
			brandOTable.columns.adjust();
		}
	};
	/* ------------------------------------------- */
	let brandOTable = $('#brandTable').DataTable(brandDtOverrideGlobals);
	/* ------------------------------------------------------------------------ */
	new $.fn.dataTable.Buttons(brandOTable, {
		name: 'BtnGroupLeft',
		buttons: dtButtonsLeft
	});
	new $.fn.dataTable.Buttons(brandOTable, {
		name: 'BtnGroupCenter',
		buttons: dtButtonsCenter
	});
	new $.fn.dataTable.Buttons(brandOTable, {
		name: 'BtnGroupRight',
		buttons: dtButtonsRight
	});

	//brandOTable.buttons('BtnGroupLeft', null).containers().appendTo('#ToolbarLeft');
	brandOTable.buttons('BtnGroupCenter', null).containers().appendTo('#ToolbarCenter');
	brandOTable.buttons('BtnGroupRight', null).containers().appendTo('#ToolbarRight');
	/* ------------------------------------------------------------------------ */
	brandOTable.on('select deselect', function (e, dt, type, indexes) {
		var selectedRows = brandOTable.rows({
			selected: true
		}).count();

		brandOTable.buttons('.selectOne').enable(selectedRows === 1);
		brandOTable.buttons('.selectMultiple').enable(selectedRows > 0);
	});


	//cand se face click in tabelul brands se scrie prin ajax in tabelul Settings/brandId id-ul lunii selectate
	var table = $('#brandTable').DataTable();
	$('#brandTable').on('click', 'tr', function () {
		let brand_id = table.row($(this)).data().id;
		let set_brand_id_url = '/back/general/setBrandId';
		$.ajax({
			method: 'POST',
			url: set_brand_id_url,
			data: { valoare: brand_id },
			success: function (response) {
			}
		});
		// adauga javascript pentru randare tabel typee
		let type_index_url = '/back/brands/get-brand-types1/';
		let typeDtOverrideGlobals = {
			searching: false, paging: false, info: false,
			ajax: {
				url: type_index_url,
				data: function (d) { }
			},
			columns: [{
				data: 'id',
				name: 'id',
			},
			{
				data: 'name',
				name: 'name',
			},
			],
			select: {
				selector: 'td:not(.no-select)',
			},
			ordering: true,
			order: [
				[0, "asc"],
			],
			preDrawCallback: function (settings) {
				typeOTable.columns.adjust();
			}
		};
		let typeOTable = $('#typeTable').DataTable(typeDtOverrideGlobals);
		//se reincarca datele in BrandController/GetBrandTypes dar cu brandId citit din tabelul Settings/brandId
		//Atentie, doar pentru vizualizare. Exista meniul Typee cu toate functiile (adaugare, modificare, etc.)
		typeOTable.draw();
	});

	function getDataTableCellValue(cellName, object1) {
		var ids = $.map(object1.rows({
			selected: true
		}).data(), function (entry) {
			return entry[`${cellName}`];
		});
		return ids;
	}


});
