@extends('layouts.back')

@section('title')
    &vert; Masini detalii
@endsection
<?php
    $departments = @\App\Models\Department::get();
?>

@section('content')
    <div class="card">
        <div class="card-header d-print-none">
            <div class="row">
                <div class="col"><img src="{{ asset('img/icons/taxi-front-fill.png') }}" /></div>
                <div class="row mb-2">
                    <label for="department_id" class="col-md-2 col-form-label">Masini detalii - Filiala :</label>

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
                        <th scope="col">Numar masina</th>
                        <th scope="col">Numar identificare</th>
                        <th scope="col">Caroseria</th>
                        <th scope="col">Are gps?</th>
                        <th scope="col">Receptie auto</th>
                        <th scope="col">An fabricatie</th>
                        <th scope="col">Poluare</th>
                        <th scope="col">Putere KW</th>
                        <th scope="col">MTMA</th>
                        <th scope="col">Cap. cilindrica</th>
                        <th scope="col">Cap. rezervor</th>
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
                        title: 'Stergeti detaliile selectate? ',
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
                                            message: 'Detaliul/detaliile au fost sterse!',
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
                        data: 'car_id',
                        name: 'car_id',
                    },
                    {
                        data: 'nr_identificare',
                        name: 'nr_identificare',
                    },
                    {
                        data: 'caroseria',
                        name: 'caroseria',
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
                    [1, "asc"],
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
@endsection

@section('styles')
    @parent

    @include('back.components.datatables-css')
@endsection
