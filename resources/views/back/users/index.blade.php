@extends('layouts.back')

@section('title')
    &vert; Users
@endsection

<?php
$departments = @\App\Models\Department::get();
?>

@section('content')
    <div class="card">
        <div class="card-header d-print-none">
            <div class="row">
                <div class="col"><img src="{{ asset('img/icons/persons.png') }}" /></div>
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
                        <th scope="col">Nume</th>
                        <th scope="col">Masina</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefon</th>
                        <th scope="col">Limita km</th>
                        <th scope="col">Observatii</th>
                        <th scope="col">Calificativ</th>
                        <th scope="col">Filiala</th>
                        <th scope="col">Is admin</th>
                        <th scope="col">Is depadmin</th>
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
                    document.location.href = '{{ route('back.users.create') }}';
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

                    document.location.href = '{{ route('back.users.show', 'id') }}'.replace("id", id);
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

                    document.location.href = '{{ route('back.users.edit', 'id') }}'.replace("id", id);
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
                url: "{{ route('back.users.massDestroy') }}",
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
                        title: 'Stergeti utilizatorii selectati? Atentie. Se vor sterge doar acei utilizatori care nu au inregistari in kmlog',
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
                                            message: 'Masina/utilizatorii selectati au fost stersi!',
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
                    url: "{{ route('back.users.index') }}",
                    data: function(d) {}
                },
                columns: [
                    {
                        data: 'name',
                        name: 'name',
                        searchable: true,

                    },
                    {
                        data: 'id',
                        render: function(data, type, row, meta) {
                            if (typeof row.cars[0] === "undefined") {
                                return '';
                            } else {
                                return row.cars[0].numar;
                            }
                        },
                        width: '80',
                        searchable: true,


                    },
                    {
                        data: 'email',
                        name: 'email',
                    },
                    {
                        data: 'id',
                        render: function(data, type, row, meta) {
                            if (typeof row.phones[0] === "undefined") {
                                return '';
                            } else {
                                return row.phones[0].valoare;
                            }
                        },
                        width: '60',
                        searchable: true,

                    },
                    {
                        data: 'id',
                        render: function(data, type, row, meta) {
                            if (typeof row.kmlimits[0] === "undefined") {
                                return '';
                            } else {
                                return row.kmlimits[0].valoare;
                            }
                        },
                        width: '00',
                        searchable: false,

                    },
                    {
                        data: 'observatii',
                        name: 'observatii',
                        searchable: false,

                    },
                    {
                        data: 'calificativ',
                        name: 'calificativ',
                        searchable: false,
                    },
                    {
                        data: 'id',
                        render: function(data, type, row, meta) {
                            if (typeof row.departments[0] === "undefined") {
                                return '';
                            } else {
                                return row.departments[0].name;
                            }
                        },
                        width: '100',
                        searchable: true,

                    },
                    {
                        data: 'is_admin',
                        name: 'is_admin',
                        searchable: false,
                        className: "text-center no-select",
                        render: function(data, type, row, meta) {
                            if (data == 1) {
                                return 'Da&nbsp;';
                            } else {
                                return '';
                            }
                        },
                    },
                    {
                        data: 'is_depadmin',
                        name: 'is_depadmin',
                        searchable: false,
                        className: "text-center no-select",
                        render: function(data, type, row, meta) {
                            if (data == 1) {
                                return 'Da&nbsp;';
                            } else {
                                return '';
                            }
                        },
                    },
                    {
                        data: 'id',
                        render: function(data, type, row, meta) {
                            if (typeof row.activ[0] === "undefined") {
                                return '';
                            } else {
                                return row.activ[0].valoare == 1 ? 'Da' : 'Nu';
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
                    [1, "asc"],
                    [2, "asc"],
                    [3, "asc"],
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
