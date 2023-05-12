@extends('layouts.back')

@section('title')
    &vert; Carseconds
@endsection

@section('content')
    <div class="card">
        <div class="card-header d-print-none">
            <div class="row">
                <div class="col">Carseconds</div>

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

            <table id="carsecondTable" class="table table-bordered table-striped table-hover table-sm dataTable">
                <thead class="table-success">
                    <tr>
                        
							 <th scope="col"> Nr_identificare</th>
							 <th scope="col"> Are_gps</th>
							 <th scope="col"> Recep_auto</th>
							 <th scope="col"> An_fabr</th>
							 <th scope="col"> Poluare</th>
							 <th scope="col"> P_kw</th>
							 <th scope="col"> Mtma</th>
							 <th scope="col"> Cap_cyl</th>
							 <th scope="col"> Cap_rez</th>
							 <th scope="col"> Auto_inloc</th>
							 <th scope="col"> Km_contract</th>
							 <th scope="col"> Caroseria</th>
							 <th scope="col"> Car_id</th>
							 <th scope="col"> Frame_id</th>

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
                    document.location.href = '{{ route('back.carseconds.create') }}';
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

                    document.location.href = '{{ route('back.carseconds.show', 'id') }}'.replace("id", id);
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

                    document.location.href = '{{ route('back.carseconds.edit', 'id') }}'.replace("id", id);
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
                url: "{{ route('back.carseconds.massDestroy') }}",
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
                    url: "{{ route('back.carseconds.index') }}",
                    data: function(d) {}
                },
                columns: [
                    
					{
						 data: 'nr_identificare',
						 name: 'nr_identificare',
					},
					{
						 data: 'are_gps',
						 name: 'are_gps',
					},
					{
						 data: 'recep_auto',
						 name: 'recep_auto',
					},
					{
						 data: 'an_fabr',
						 name: 'an_fabr',
					},
					{
						 data: 'poluare',
						 name: 'poluare',
					},
					{
						 data: 'p_kw',
						 name: 'p_kw',
					},
					{
						 data: 'mtma',
						 name: 'mtma',
					},
					{
						 data: 'cap_cyl',
						 name: 'cap_cyl',
					},
					{
						 data: 'cap_rez',
						 name: 'cap_rez',
					},
					{
						 data: 'auto_inloc',
						 name: 'auto_inloc',
					},
					{
						 data: 'km_contract',
						 name: 'km_contract',
					},
					{
						 data: 'caroseria',
						 name: 'caroseria',
					},
					{
						 data: 'car_id',
						 name: 'car_id',
					},
					{
						 data: 'frame_id',
						 name: 'frame_id',
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
            let oTable = $('#carsecondTable').DataTable(dtOverrideGlobals);
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

            // var table = $('#carsecondTable').DataTable();
            // $('#carsecondTable').on('click', 'tr', function() {
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
