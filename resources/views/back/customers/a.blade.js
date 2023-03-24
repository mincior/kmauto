@import "DataTables-1.9.4/media/css/demo_page.css";
@import "DataTables-1.9.4/media/css/jquery.dataTables.css";
@import "DataTables-1.9.4/extras/TableTools/media/css/TableTools.css";
@import "DataTables-1.9.4/extras/Editor-1.2.1/media/css/dataTables.editor.css";


Contact Type
First Name
Last Name


var editor;
//Custom field
$.fn.DataTable.Editor.fieldTypes.todo = $.extend(true, {}, $.fn.DataTable.Editor.models.fieldType, {
	"create": function (conf) {
		var that = this;
		conf._enabled = true;
		conf._input = $(
			'' +
			'' +
			'');
		return conf._input;
	},

	"get": function (conf) {
	},
	"set": function (conf, val) {
	}
});

var availableTags = [
	"ActionScript",
	"AppleScript",
	"Asp",
	"BASIC",
	"C",
	"C++",
	"Clojure",
	"COBOL",
	"ColdFusion",
	"Erlang",
	"Fortran",
	"Groovy",
	"Haskell",
	"Java",
	"JavaScript",
	"Lisp",
	"Perl",
	"PHP",
	"Python",
	"Ruby",
	"Scala",
	"Scheme"
];
$("#tags").autocomplete({
	source: availableTags
});
//end custom field

$(document).ready(function () {

	editor = new $.fn.dataTable.Editor({
		"ajaxUrl": {
			"create": "POST api/contacts/datatables",
			"edit": "PUT api/contacts/_id_/datatables",
			"remove": "DELETE api/contacts/_id_/datatables"
		},
		"ajax": function (method, url, data, successCallback, errorCallback) {
			if (data.action === 'create') {
				$.ajax({
					"type": method,
					"url": url,
					"data": JSON.stringify(data.data),
					"contentType": "application/json",
					"dataType": "json",
					"success": function (json) {
						successCallback(json);
					},
					"error": function (xhr, error, thrown) {
						errorCallback(xhr, error, thrown);
					}
				});
			} else if (data.action === 'edit') {
				$.ajax({
					"type": method,
					"url": url,
					"data": JSON.stringify(data.data),
					"contentType": "application/json",
					"dataType": "json",
					"success": function (json) {
						successCallback(json);
					},
					"error": function (xhr, error, thrown) {
						errorCallback(xhr, error, thrown);
					}
				});
			} else if (data.action === 'remove') {
				$.ajax({
					"type": method,
					"url": url,
					"data": JSON.stringify(data.data),
					"contentType": "application/json",
					"dataType": "json",
					"success": function (json) {
						successCallback(json);
					},
					"error": function (xhr, error, thrown) {
						errorCallback(xhr, error, thrown);
					}
				});
			}
		},
		"domTable": "#contacts",
		"fields": [
			{ "label": "Contact Type:", "name": "contactType.id", "type": "select" },
			{ "label": "First Name:", "name": "firstName" },
			{ "label": "Last Name:", "name": "lastName" },
			{
				"label": "Status:",
				"type": "todo" // Using the custom field type
			}
		],
	});
	$('#contacts').dataTable({
		"sDom": "Tfrtip",
		"sAjaxSource": "api/contacts/datatables",
		"aoColumns": [
			{ "mData": "contactType.name", "sDefaultContent": "" },
			{ "mData": "firstName" },
			{ "mData": "lastName" }
		],
		"oTableTools": {
			"sRowSelect": "single",
			"aButtons": [
				{ "sExtends": "editor_create", "editor": editor },
				{ "sExtends": "editor_edit", "editor": editor },
				{ "sExtends": "editor_remove", "editor": editor }
			]
		},
		"fnInitComplete": function (settings, json) {
			editor.field('contactType.id').update(json.contactType);
		}
	});


});
