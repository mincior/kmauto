@extends('layouts.back')

@section('title')
    &vert; Filiale
@endsection

@section('content')
    <div class="card">
        <div class="card-header d-print-none">
            <div class="row">
                <div class="col">Filiale</div>

                <div class="col fs-5 text-end">
                    <img src="{{ asset('img/icons/categorisatie.png') }}" />
                </div>
            </div>
        </div>

        <div class="card-body p-1">
            <div class="d-flex justify-content-between mb-1">
                <div id="ToolbarLeft"></div>
                <div id="ToolbarCenter"></div>
                <div id="ToolbarRight"></div>
            </div>

            <table id="departmentTable" class="table table-bordered table-striped table-hover table-sm dataTable">
                <thead class="table-success">
                    <tr>
                        <th scope="col" width="4%">ID</th>
                        <th scope="col">Nume</th>
                        <th scope="col">Email</th>
                        <th scope="col">Responsabil</th>
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
            let users_create_url = '/back/users/getDepartmentUsers'
            let userCreateButton = {
                className: 'btn-success',
                text: '<i class="bi bi-person-fill"></i>',
                titleAttr: 'Add',
                enabled: true,
                action: function(e, dt, node, config) {
                    document.location.href = users_create_url;
                }
            }
            dtButtonsLeft1.push(userCreateButton)

            let cars_create_url = '/back/cars/getDepartmentCars'
            let carCreateButton = {
                className: 'btn-success',
                text: '<i class="bi bi-car-front-fill"></i>',
                titleAttr: 'Add',
                enabled: true,
                action: function(e, dt, node, config) {
                    document.location.href = cars_create_url;
                }
            }
            dtButtonsLeft1.push(carCreateButton)

            /* ------------------------------------------------------------------------ */
            let createButton = {
                className: 'btn-success',
                text: '<i class="bi bi-plus"></i>',
                titleAttr: 'Add',
                enabled: true,
                action: function(e, dt, node, config) {
                    document.location.href = '{{ route('back.departments.create') }}';
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

                    document.location.href = '{{ route('back.departments.show', 'id') }}'.replace("id", id);
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

                    document.location.href = '{{ route('back.departments.edit', 'id') }}'.replace("id", id);
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
                url: "{{ route('back.departments.massDestroy') }}",
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
                        title: 'Stergeti filialele selectate?',
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
                                        departmentTable.draw();

                                        showToast({
                                            type: 'success',
                                            title: 'Stergere ...',
                                            message: 'Filiala/filialele selectate au fost sterse!',
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
                    url: "{{ route('back.departments.index') }}",
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
                        data: 'name',
                        name: 'name',
                    },
                    {
                        data: 'email',
                        name: 'email',
                    },
                    {
                        data: 'responsabil',
                        name: 'responsabil',
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
                    departmentTable.columns.adjust();
                }
            };
            /* ------------------------------------------- */
            let departmentTable = $('#departmentTable').DataTable(dtOverrideGlobals);
            /* ------------------------------------------------------------------------ */
            new $.fn.dataTable.Buttons(departmentTable, {
                name: 'BtnGroupLeft',
                buttons: dtButtonsLeft1
            });
            new $.fn.dataTable.Buttons(departmentTable, {
                name: 'BtnGroupCenter',
                buttons: dtButtonsCenter
            });
            new $.fn.dataTable.Buttons(departmentTable, {
                name: 'BtnGroupRight',
                buttons: dtButtonsRight
            });

            departmentTable.buttons('BtnGroupLeft', null).containers().appendTo('#ToolbarLeft');
            departmentTable.buttons('BtnGroupCenter', null).containers().appendTo('#ToolbarCenter');
            departmentTable.buttons('BtnGroupRight', null).containers().appendTo('#ToolbarRight');
            /* ------------------------------------------------------------------------ */
            departmentTable.on('select deselect', function(e, dt, type, indexes) {
                var selectedRows = departmentTable.rows({
                    selected: true
                }).count();

                departmentTable.buttons('.selectOne').enable(selectedRows === 1);
                departmentTable.buttons('.selectMultiple').enable(selectedRows > 0);
            });

            var table = $('#departmentTable').DataTable();
            $('#departmentTable').on('click', 'tr', function() {
                let department_id = table.row($(this)).data().id;
                let set_department_id_url = '/back/general/setDepartmentId';
                $.ajax({
                    method: 'POST',
                    url: set_department_id_url,
                    data: {
                        valoare: department_id
                    },
                    success: function(response) {}
                });
            });
        });
    </script>
@endsection

@section('styles')
    @parent

    @include('back.components.datatables-css')
@endsection
