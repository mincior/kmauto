@extends('layouts.back')

@section('title')
    &vert; Km log
@endsection
<?php
$selected_interval = \App\MyHelpers\AppHelper::getSelectedInterval();
$selected_interval_id = $selected_interval->id;
$Toate = $selected_interval->arr_ids ? true : false;
$arr_cars_with_car_activ = @array_keys(\App\MyHelpers\AppHelper::get_last_target_values_array('car_id', 'id', 'availablecars', $selected_interval_id, 'valoare = 1'));
$arr_users_with_user_activ = @array_keys(\App\MyHelpers\AppHelper::get_last_target_values_array('user_id', 'id', 'availableusers', $selected_interval_id, 'valoare = 1'));
$cars = \App\Models\Car::whereIn('id', $arr_cars_with_car_activ)->get();
$users = \App\Models\User::whereIn('id', $arr_users_with_user_activ)->get();
$selected_user_id = \App\Models\Setting::where('nume', 'userId')
    ->where('interval_id', 1)
    ->first()->valoare;
$selected_car_id = \App\Models\Setting::where('nume', 'carId')
    ->where('interval_id', 1)
    ->first()->valoare;

//dd($arr_cars_with_car_activ, $arr_users_with_user_activ );

?>
@section('content')
    <div class="card">
        <div class="card-header d-print-none">
            <div class="row">
                <div class="col">Km log</div>
                <div class="row mb-1">

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
            let createButton = {
                className: 'btn-success myclass',
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
                className: 'btn-primary selectOne',
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
                        data: 'picture',
                        render: function(data, type, row, meta) {
                            if (typeof row.picture === "undefined") {
                                return '';
                            } else {
                                return row.picture;
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

                oTable.buttons('.selectOne').enable(selectedRows === 1);
                oTable.buttons('.selectMultiple').enable(selectedRows > 0);
            });

            oTable.buttons('.myclass').enable({{ $Toate == 1 ? 'false' : 'true' }});
            if ('{{$Toate}}' == 1) {
                oTable.buttons('.myclass').text("Deselectati 'Toate' pentru adaugare");
            } 

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
