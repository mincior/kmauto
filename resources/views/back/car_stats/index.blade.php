@extends('layouts.back')

@section('title')
    &vert; CarStats
@endsection

@section('content')
    <div class="card">
        <div class="card-header d-print-none">
            <div class="row">
                <div class="col">CarStats</div>

                <div class="col fs-5 text-end">
                    <img src="{{ asset('img/icons/check.png') }}" />
                </div>
            </div>
        </div>

        <div class="card-body p-1">
            <div class="d-flex justify-content-between mb-1">
                <div id="ToolbarLeft"></div>
                <div id="ToolbarCenter"></div>
                <div id="ToolbarRight"></div>
            </div>

            <table id="car_statTable" class="table table-bordered table-striped table-hover table-sm dataTable">
                <thead class="table-success">
                    <tr>
                        
							 <th scope="col"> Observatii</th>
							 <th scope="col"> Interval_id</th>
							 <th scope="col"> Car_id</th>
							 <th scope="col"> CarStatValue Name</th>

                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

@section('scripts')
    @parent

    @include('back.components.datatables-js')

    <script type="text/javascript">
        $(function() {

            let createButton = {
                className: 'btn-success',
                text: '<i class="bi bi-plus"></i>',
                titleAttr: 'Add',
                enabled: true,
                action: function(e, dt, node, config) {
                    document.location.href = '{{ route('back.car-stats.create') }}';
                }
            }
            dtButtonsCenter.push(createButton)

            let showButton = {
                extend: 'selectedSingle',
                className: 'btn-secondary selectOne',
                text: '<i class="bi bi-eye"></i>',
                titleAttr: 'Show',
                enabled: false,
                action: function(e, dt, node, config) {
                    const id = dt.row({
                        selected: true
                    }).data().id;

                    document.location.href = '{{ route('back.car-stats.show', 'id') }}'.replace("id", id);
                }
            }
            dtButtonsCenter.push(showButton)

            let editButton = {
                extend: 'selectedSingle',
                className: 'btn-primary selectOne',
                text: '<i class="bi bi-pencil"></i>',
                titleAttr: 'Edit',
                enabled: false,
                action: function(e, dt, node, config) {
                    const id = dt.row({
                        selected: true
                    }).data().id;

                    document.location.href = '{{ route('back.car-stats.edit', 'id') }}'.replace("id", id);
                }
            }
            dtButtonsCenter.push(editButton)

            let clearButton = {
                className: 'btn-secondary',
                text: '<i class="bi bi-arrow-counterclockwise"></i>',
                titleAttr: 'Remove filter and sort',
                action: function(e, dt, node, config) {
                    dt.state.clear();
                    window.location.reload();
                }
            }
            dtButtonsRight.push(clearButton)

            let deleteButton = {
                extend: 'selected',
                className: 'btn-danger selectMultiple',
                text: '<i class="bi bi-trash"></i>',
                titleAttr: 'Delete',
                enabled: false,
                url: "{{ route('back.car-stats.massDestroy') }}",
                action: function(e, dt, node, config) {
                    var ids = $.map(dt.rows({
                        selected: true
                    }).data(), function(entry) {
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
                        title: "Stergeti randurile selectate?",
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
                        callback: function(confirmed) {
                            if (confirmed) {
                                $.ajax({
                                    method: 'POST',
                                    url: config.url,
                                    data: {
                                        ids: ids,
                                        _method: 'DELETE'
                                    },
                                    success: function(response) {
                                        oTable.draw();

                                        showToast({
                                            type: 'success',
                                            title: 'Stergere ...',
                                            message: "Randurile selectate au fost sterse",
                                        });
                                    }
                                });
                            }
                        }
                    });
                }
            }
            dtButtonsRight.push(deleteButton)
            /* ------------------------------------------------------------------------ */
            let dtOverrideGlobals = {
                ajax: {
                    url: "{{ route('back.car-stats.index') }}",
                    data: function(d) {}
                },
                columns: [
                    
					{
						 data: 'observatii',
						 name: 'observatii',
					},
					{
						 data: 'interval_id',
						 name: 'interval_id',
					},
					{
						 data: 'car_id',
						 name: 'car_id',
					},
					{
						 data: 'car_stat_value_id',
						 
						render: function(data, type, row, meta) {
							if ( typeof row.car_stat_value.name === 'undefined'){
								return '';
							}else{
								return row.car_stat_value.name;
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
                    oTable.columns.adjust();
                }
            };
            /* ------------------------------------------- */
            let oTable = $('#car_statTable').DataTable(dtOverrideGlobals);
            /* ------------------------------------------------------------------------ */
            new $.fn.dataTable.Buttons(oTable, {
                name: 'BtnGroupLeft',
                buttons: dtButtonsLeft1
            });
            new $.fn.dataTable.Buttons(oTable, {
                name: 'BtnGroupCenter',
                buttons: dtButtonsCenter
            });
            new $.fn.dataTable.Buttons(oTable, {
                name: 'BtnGroupRight',
                buttons: dtButtonsRight
            });

            //oTable.buttons('BtnGroupLeft', null).containers().appendTo('#ToolbarLeft');
            oTable.buttons('BtnGroupCenter', null).containers().appendTo('#ToolbarCenter');
            oTable.buttons('BtnGroupRight', null).containers().appendTo('#ToolbarRight');
            /* ------------------------------------------------------------------------ */
            oTable.on('select deselect', function(e, dt, type, indexes) {
                var selectedRows = oTable.rows({
                    selected: true
                }).count();

                oTable.buttons('.selectOne').enable(selectedRows === 1);
                oTable.buttons('.selectMultiple').enable(selectedRows > 0);
            });

            // var table = $('#car_statTable').DataTable();
            // $('#car_statTable').on('click', 'tr', function() {
            //     let department_id = table.row($(this)).data().id;
            //     let set_department_id_url = '/back/general/setDepartmentId';
            //     $.ajax({
            //         method: 'POST',
            //         url: set_department_id_url,
            //         data: {
            //             valoare: department_id
            //         },
            //         success: function(response) {}
            //     });
            // });
        });
    </script>
@endsection

@section('styles')
    @parent

    @include('back.components.datatables-css')
@endsection
