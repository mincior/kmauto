@extends('layouts.back')

@section('title')
    &vert; Cars
@endsection
<?php
    $departments = @\App\Models\Department::get();
?>

@section('content')
    <div class="card">
        <div class="card-header d-print-none">
            <div class="row">
                <div class="col"><img src="{{ asset('img/icons/car.png') }}" /></div>
                <div class="row mb-2">
                    <label for="department_id" class="col-md-2 col-form-label">Filiala :</label>

                    <div class="col-md-4">
                        <select name="department_id" id="department_select" data-deptid="1" data-userid="1"
                            class="form-select">
                            <option value="0">Alege ...</option>
                            @foreach ($departments as $department)
                                <option {{ old('department_id') == $department['id'] ? 'selected' : '' }}
                                    value="{{ $department['id'] }}">{{ $department['name'] }}</option>
                            @endforeach
                        </select>
                        @error('department_id')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col fs-5 text-end">
                    
                </div>
            </div>
        </div>

        <div class="card-body p-1">
            <div class="d-flex justify-content-between mb-1">
                <div id="ToolbarLeft"></div>
                <div id="ToolbarCenter"></div>
                <div id="ToolbarRight"></div>
            </div>

            <table id="sqltable" class="table table-bordered table-striped table-hover table-sm dataTable">
                <thead class="table-success">
                    <tr>
                        <th scope="col">Numar</th>
                        <th scope="col">Utilizator</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Model</th>
                        <th scope="col">Consum mediu</th>
                        <th scope="col">Carburant</th>
                        <th scope="col">Filiala</th>
                        <th scope="col">Activ</th>
                        <th scope="col" width="4%">ID</th>
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

            /* ------------------------------------------------------------------------ */
            let createButton = {
                className: 'btn-success',
                text: '<i class="bi bi-plus"></i>',
                titleAttr: 'Add',
                enabled: true,
                action: function(e, dt, node, config) {
                    document.location.href = '{{ route('back.cars.create') }}';
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

                    document.location.href = '{{ route('back.cars.show', 'id') }}'.replace("id", id);
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

                    document.location.href = '{{ route('back.cars.edit', 'id') }}'.replace("id", id);
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
                url: "{{ route('back.cars.massDestroy') }}",
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
                        title: 'Stergeti masinile selectate? Atentie. Se vor sterge doar acele masini care nu au inregistari in kmlog',
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
                                            message: 'Masina/masinile selectate au fost sterse!',
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
                    url: "{{ route('back.cars.index') }}",
                    data: function(d) {}
                },
                columns: [
                    {
                        data: 'numar',
                        name: 'numar',
                    },
                    {
                        data: 'id',
                        render: function(data, type, row, meta) {
                            if ( typeof row.users[0] === "undefined"){
                                return '';
                            }else{
                                return row.users[0].name;
                            }
                        },
                    },
                    {
                        data: 'brand_id',
                        render: function(data, type, row, meta) {
                            if ( typeof row.brand === "undefined"){
                                return '';
                            }else{
                                return row.brand.name;
                            }
                        },
                    },
                    {
                        data: 'type_id',
                        render: function(data, type, row, meta) {
                            if ( typeof row.type === "undefined"){
                                return '';
                            }else{
                                return row.type.name;
                            }
                        },
                    },
                    {
                        data: 'id',
                        render: function(data, type, row, meta) {
                            if ( typeof row.car_consumptions[0] === "undefined"){
                                return '';
                            }else{
                                return row.car_consumptions[0].valoare;
                            }
                        },
                        width: '2'
                    },
                    {
                        data: 'id',
                        render: function(data, type, row, meta) {
                            if ( typeof row.fuel === "undefined"){
                                return '';
                            }else{
                                return row.fuel.name;
                            }
                        },
                    },
                    {
                        data: 'id',
                        render: function(data, type, row, meta) {
                            if ( typeof row.departments[0] === "undefined"){
                                return '';
                            }else{
                                return row.departments[0].name;
                            }
                        },
                    },
                    {
                        data: 'id',
                        render: function(data, type, row, meta) {
                            if ( typeof row.activ[0] === "undefined"){
                                return '';
                            }else{
                                return row.activ[0].valoare == 1 ? 'Da': 'Nu';
                            }
                        },
                    },
                    {
                        data: 'id',
                        name: 'id',
                        searchable: false,
                        className: 'text-left',
                        render: function(data, type, row, meta) {
                            return data.toString();
                        }
                    },
                ],
                select: {
                    selector: 'td:not(.no-select)',
                },
                ordering: true,
                order: [
                    [0, "desc"],
                ],
                preDrawCallback: function(settings) {
                    oTable.columns.adjust();
                }
            };
            /* ------------------------------------------- */
            let oTable = $('#sqltable').DataTable(dtOverrideGlobals);
            /* ------------------------------------------------------------------------ */
            new $.fn.dataTable.Buttons(oTable, {
                name: 'BtnGroupLeft',
                buttons: dtButtonsLeft
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
        });
    </script>
    <script>
        $('#department_select').change(function() {
            var department_id = $(this).find(":selected").val();
            let set_department_id_url = '/back/general/setDepartmentId';
            $.ajax({
                method: 'POST',
                url: set_department_id_url,
                data: {
                    valoare: department_id
                },
                success: function(response) {
                    $('#sqltable').DataTable().draw();
                }
            });
        });
    </script>
    
@endsection

@section('styles')
    @parent

    @include('back.components.datatables-css')
@endsection
