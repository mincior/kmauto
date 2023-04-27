@extends('layouts.back')

@section('title')
    &vert; Km log
@endsection
<?php
$selected_interval = \App\MyHelpers\AppHelper::getSelectedInterval();
$selected_interval_id = $selected_interval->id;
$Toate = $selected_interval->arr_ids ? true : false;//selected_interval este obiect si daca are arr_ids inseamna ca e selectat 'Toate' la intervale

$selected_department_id = \App\Models\Setting::where('nume', 'departmentId')
    ->where('interval_id', 1)
    ->first()->valoare;
$selected_user_id = \App\Models\Setting::where('nume', 'userId')
    ->where('interval_id', 1)
    ->first()->valoare;
$selected_car_id = \App\Models\Setting::where('nume', 'carId')
    ->where('interval_id', 1)
    ->first()->valoare;
$departments = \App\Models\Department::get();

$arr_users_with_user_activ = @array_keys(\App\MyHelpers\AppHelper::get_last_target_values_array('user_id', 'id', 'availableusers', $selected_interval_id, 'valoare = 1'));
$arr_users_with_department = AppHelper::get_last_target_values_array('user_id', 'department_id', 'user_deps', $selected_interval_id, "department_id = $selected_department_id");
$arr_users_with_departments = array_keys($arr_users_with_department );

$arr_cars_with_car_activ = @array_keys(\App\MyHelpers\AppHelper::get_last_target_values_array('car_id', 'id', 'availablecars', $selected_interval_id, 'valoare = 1'));
$arr_cars_with_department = AppHelper::get_last_target_values_array('car_id', 'department_id', 'car_deps', $selected_interval_id, "department_id = $selected_department_id");
$arr_cars_with_departments = array_keys($arr_cars_with_department);
$cars = \App\Models\Car::whereIn('id', $arr_cars_with_car_activ);
if($selected_department_id >0){
    $cars = $cars->wherein('id', $arr_cars_with_departments);
}
$cars = $cars->get();

$users = \App\Models\User::whereIn('id', $arr_users_with_user_activ);
if($selected_department_id >0){
    $users = $users->wherein('id', $arr_users_with_departments);
}
$users = $users->get();


?>
@section('content')
    <div class="card">
        <div class="card-header d-print-none">
            <div class="row">
                <div class="col">Km log</div>
                <div class="row mb-1">

                    <div class="col-md-2">
                        <select name="department_id" id="department_select" data-deptid="1" data-userid="1" class="form-select">
                            <option value="0">Alege filiala...</option>
                            @foreach ($departments as $department)
                            <option {{ $department->id == $selected_department_id ? 'selected' : '' }} value="{{ $department->id }}">
                                {{ $department['name'] }}</option>
                                @endforeach
                        </select>
                        @error('department_id')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-2">
                        <select name="car_id" id="car_select" data-deptid="1" data-userid="1" class="form-select">
                            <option value="0">Alege masina...</option>
                            @foreach ($cars as $car)
                                <option {{ $car->id == $selected_car_id ? 'selected' : '' }} value="{{ $car->id }}">
                                    {{ $car['numar'] }}</option>
                            @endforeach
                        </select>
                        @error('car_id')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <select name="user_id" id="user_select" data-deptid="1" data-userid="1" class="form-select">
                            <option value="0">Alege utilizatorul...</option>
                            @foreach ($users as $user)
                                <option {{ $user->id == $selected_user_id ? 'selected' : '' }} value="{{ $user->id }}">
                                    {{ $user['name'] }}</option>
                            @endforeach
                        </select>
                        @error('user_id')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="btn btn-success" onclick="puneSelecturilePeChoose()">Tot</button>
                    </div>
                </div>

                <div class="col fs-5 text-end">
                    <img src="{{ asset('img/buttons/delivery-030.png') }}" />
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
                        <th scope="col">Masina</th>
                        <th scope="col">Utilizator</th>
                        <th scope="col">Km</th>
                        <th scope="col">Status</th>
                        <th scope="col">Poza</th>
                        <th scope="col">Observatii</th>
                        <th scope="col">Filiala</th>
                        <th scope="col">Luna</th>
                        <th scope="col">Interval</th>
                        <th scope="col">Creat la</th>
                        <th scope="col">Modificat la</th>
                        <th scope="col" width="4%">Ord</th>
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
            let mutaInSus = {
                extend: 'selectedSingle',
                className: 'btn-secondary moveup',
                text: '<i class="bi bi-chevron-double-up"></i>',
                enabled: false,
                url: "{{ route('back.kmlogs.muta') }}",

                action: function(e, dt, node, config) {
                    var selected_ids = $.map(dt.rows({
                        selected: true
                    }).data(), function(entry) {
                        return entry.id;
                    });
                    var all_ids = $.map(dt.rows().data(), function(entry) {
                        return entry.id;
                    });
                    $.ajax({
                        method: 'POST',
                        url: config.url,
                        data: {
                            selected_id: selected_ids[0],
                            all_ids: all_ids,
                            sens: 'up'
                        },
                        success: function(response) {
                            oTable.draw();
                        }
                    })
                }
            }
            dtButtonsLeft1.push(mutaInSus)

            let mutaInJos = {
                extend: 'selectedSingle',
                className: 'btn-secondary movedown',
                text: '<i class="bi bi-chevron-double-down"></i>',
                enabled: false,
                url: "{{ route('back.kmlogs.muta') }}",

                action: function(e, dt, node, config) {
                    var selected_ids = $.map(dt.rows({
                        selected: true
                    }).data(), function(entry) {
                        return entry.id;
                    });
                    var all_ids = $.map(dt.rows().data(), function(entry) {
                        return entry.id;
                    });
                    $.ajax({
                        method: 'POST',
                        url: config.url,
                        data: {
                            selected_id: selected_ids[0],
                            all_ids: all_ids,
                            sens: 'down'
                        },
                        success: function(response) {
                            oTable.draw();
                        }
                    })
                }
            }
            dtButtonsLeft1.push(mutaInJos)

            /* ------------------------------------------------------------------------ */
            let createButton = {
                className: 'btn-success external externalCreate',
                text: '+',
                titleAttr: 'Add',
                enabled: false,
                action: function(e, dt, node, config) {
                    document.location.href = '{{ route('back.kmlogs.create') }}';
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

                    document.location.href = '{{ route('back.kmlogs.show', 'id') }}'.replace("id", id);
                }
            }
            dtButtonsCenter.push(showButton)

            let editButton = {
                extend: 'selectedSingle',
                className: 'btn-primary selectOne external externalEdit',
                text: '<i class="bi bi-pencil"></i>',
                titleAttr: 'Edit',
                enabled: false,
                action: function(e, dt, node, config) {
                    const id = dt.row({
                        selected: true
                    }).data().id;

                    document.location.href = '{{ route('back.kmlogs.edit', 'id') }}'.replace("id", id);
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
                extend: 'selectedSingle',
                className: 'btn-danger  selectOne',
                text: '<i class="bi bi-trash"></i>',
                titleAttr: 'Delete',
                enabled: false,
                url: "{{ route('back.kmlogs.massDestroy') }}",
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
                        title: 'Stergeti marcile selectate? ',
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
                                            message: 'inregistrarile de km selectate au fost sterse!',
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
                searching: false,
                paging: false,
                info: false,
                ajax: {
                    url: "{{ route('back.kmlogs.index') }}",
                    data: function(d) {}
                },
                columns: [{
                        data: 'id',
                        render: function(data, type, row, meta) {
                            if (typeof row.car === "undefined") {
                                return '';
                            } else {
                                return row.car.numar;
                            }
                        },
                    },
                    {
                        data: 'id',
                        render: function(data, type, row, meta) {
                            if (typeof row.user === "undefined") {
                                return '';
                            } else {
                                return row.user.name;
                            }
                        },
                    },
                    {
                        data: 'km',
                        name: 'km',
                    },
                    {
                        data: 'id',
                        render: function(data, type, row, meta) {
                            if (typeof row.stat === "undefined") {
                                return '';
                            } else {
                                return row.stat.name;
                            }
                        },
                    },
                    {
                        data: 'id',
                        render: function(data, type, row, meta) {
                            if (String(row.picture) == 'null') {
                                return ''
                            } else {
                                if (typeof row.picture === "undefined") {
                                    return '';
                                } else {
                                    if (row.picture.includes("/")) {
                                        return row.picture.substring(1, row.picture.lastIndexOf("/"));
                                    } else {
                                        return row.picture.substring(1, 45);

                                    }
                                }
                            }
                        },
                    },
                    {
                        data: 'observatii',
                        name: 'observatii',
                    },
                    {
                        data: 'id',
                        render: function(data, type, row, meta) {
                            if (typeof row.department === "undefined") {
                                return '';
                            } else {
                                return row.department.name;
                            }
                        },
                    },
                    {
                        data: 'id',
                        render: function(data, type, row, meta) {
                            if (typeof row.month === "undefined") {
                                return '';
                            } else {
                                return row.month.anul_luna;
                            }
                        },
                    },
                    {
                        data: 'id',
                        render: function(data, type, row, meta) {
                            if (row.interval === null) {
                                return '';
                            } else {
                                return row.interval.interval;
                            }
                        },
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                    },
                    {
                        data: 'updated_at',
                        name: 'updated_at',
                    },
                    {
                        data: 'ordine',
                        name: 'ordine',
                        searchable: false,
                        className: 'text-left',
                        render: function(data, type, row, meta) {
                            return data.toString();
                        }
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
                ordering: false,
                preDrawCallback: function(settings) {
                    oTable.columns.adjust();
                }
            };
            /* ------------------------------------------- */
            let oTable = $('#sqltable').DataTable(dtOverrideGlobals);
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

            oTable.buttons('BtnGroupLeft', null).containers().appendTo('#ToolbarLeft');
            oTable.buttons('BtnGroupCenter', null).containers().appendTo('#ToolbarCenter');
            oTable.buttons('BtnGroupRight', null).containers().appendTo('#ToolbarRight');

            /* ------------------------------------------------------------------------ */
            oTable.on('select deselect', function(e, dt, type, indexes) {
                var selectedRows = oTable.rows({
                    selected: true
                }).count();
                var all_ids = $.map(dt.rows().data(), function(entry) {
                    return entry.id;
                });
                var all_ids_count = oTable.rows().count();
                var selected_id = $.map(dt.rows({
                    selected: true
                }).data(), function(entry) {
                    return entry.id;
                });
                console.log(selectedRows, all_ids, selected_id[0]);
                oTable.buttons('.moveup').enable(selected_id[0] != all_ids[0]);
                oTable.buttons('.movedown').enable(selected_id[0] != all_ids[all_ids_count - 1]);
                oTable.buttons('.selectOne').enable(selectedRows === 1);
                oTable.buttons('.selectMultiple').enable(selectedRows > 0);
            });

            //butonul de adaugare nu trebuie sa fie activ daca intervalul selectat este 'Toate'
            oTable.buttons('.external').enable({{ $Toate == 1 ? 'false' : 'true' }});
            if ('{{ $Toate }}' == 1) {
                oTable.buttons('.externalCreate').text("Deselectati 'Toate' pentru adaugare");
                oTable.buttons('.externalEdit').text("Deselectati 'Toate' pentru modificare");
            }

        });

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
                    window.location.reload();
                }
            });
        });

        $('#car_select').change(function() {
            var car_id = $(this).find(":selected").val();
            let set_car_id_url = '/back/general/setCarId';
            $.ajax({
                method: 'POST',
                url: set_car_id_url,
                data: {
                    valoare: car_id
                },
                success: function(response) {
                    $('#sqltable').DataTable().draw();
                    if (car_id > 0) {
                        $('#user_select option[value="0"]').prop('selected', 'selected').change();
                    }
                }
            });
        });

        $('#user_select').change(function() {
            var user_id = $(this).find(":selected").val();
            let set_user_id_url = '/back/general/setUserId';
            $.ajax({
                method: 'POST',
                url: set_user_id_url,
                data: {
                    valoare: user_id
                },
                success: function(response) {
                    $('#sqltable').DataTable().draw();


                    if (user_id > 0) {
                        $('#car_select option[value="0"]').prop('selected', 'selected').change();
                    }
                }
            });
        });

        function puneSelecturilePeChoose() {
            $('#user_select option[value="0"]').prop('selected', 'selected').change();
            $('#car_select option[value="0"]').prop('selected', 'selected').change();
        }
    </script>
@endsection

@section('styles')
    @parent

    @include('back.components.datatables-css')
@endsection
