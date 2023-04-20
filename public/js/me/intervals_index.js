$(function() {

	/* ------------------------------------------------------------------------ */
	let interval_index_url =  '/back/intervals';
	// alert(interval_index_url);
	let intervalDtOverrideGlobals = {
		ajax: {
			url: interval_index_url,
			data: function(d) {}
		},
		columns: [{
			data: 'id',
			name: 'id',
			searchable: false,
			className: 'text-left',
			render: function(data, type, row, meta) {
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
			render: function(data, type, row, meta) {
				if ( typeof row.select === "undefined"){
					return '';
				}else{
					return row.select == 1 ? 'Da': 'Nu';
				}
			},
		},
		{
			data: 'id',
			render: function(data, type, row, meta) {
				if ( typeof row.inchis === "undefined"){
					return '';
				}else{
					return row.inchis == 1 ? 'Da': 'Nu';
				}
			},
		},
		{
			data: 'id',
			render: function(data, type, row, meta) {
				if ( typeof row.month.anul_luna === "undefined"){
					return '';
				}else{
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
		preDrawCallback: function(settings) {
			intervalOTable.columns.adjust();
		}
	};
	/* ------------------------------------------- */
	let intervalOTable = $('#intervalTable').DataTable(intervalDtOverrideGlobals);
});
