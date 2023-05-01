@extends('layouts.back')

@section('title')
    &vert; Km log
@endsection
<?php
//intervale
$selected_interval = \App\MyHelpers\AppHelper::getSelectedInterval();
$selected_interval_id = $selected_interval->id;
$Toate = $selected_interval->arr_ids ? true : false; //selected_interval este obiect si daca are arr_ids inseamna ca e selectat 'Toate' la intervale

//departamente
$departments = \App\Models\Department::get();
$selected_department_id = \App\Models\Setting::where('nume', 'departmentId')
    ->where('interval_id', 1)
    ->first()->valoare;

//masini
$selected_car_id = \App\Models\Setting::where('nume', 'carId')
    ->where('interval_id', 1)
    ->first()->valoare;
$arr_cars_with_car_activ = @array_keys(\App\MyHelpers\AppHelper::get_last_target_values_array('car_id', 'id', 'availablecars', $selected_interval_id, 'valoare = 1'));
$arr_cars_with_department = AppHelper::get_last_target_values_array('car_id', 'department_id', 'car_deps', $selected_interval_id, "department_id = $selected_department_id");
$arr_cars_with_departments = array_keys($arr_cars_with_department);
$cars = \App\Models\Car::whereIn('id', $arr_cars_with_car_activ); //ia doar masinile active la data intervalului curent
if ($selected_department_id > 0) {
    //face si selectia dupa departament daca este cazul
    $cars = $cars->wherein('id', $arr_cars_with_departments);
}
$cars = $cars->get();

//utilizatori
$selected_user_id = \App\Models\Setting::where('nume', 'userId')
    ->where('interval_id', 1)
    ->first()->valoare;
$arr_users_with_user_activ = @array_keys(\App\MyHelpers\AppHelper::get_last_target_values_array('user_id', 'id', 'availableusers', $selected_interval_id, 'valoare = 1'));
$arr_users_with_department = AppHelper::get_last_target_values_array('user_id', 'department_id', 'user_deps', $selected_interval_id, "department_id = $selected_department_id");
$arr_users_with_departments = array_keys($arr_users_with_department);
$users = \App\Models\User::whereIn('id', $arr_users_with_user_activ); //ia doar userii activi la data intervalului curent
if ($selected_department_id > 0) {
    //face si selectia dupa departament daca este cazul
    $users = $users->wherein('id', $arr_users_with_departments);
}
$users = $users->get();

//daca exista o asociere intre masina si user in UserCar, sel_user_id si sel_car_id vor fi ambele diferite de zero
//daca una din ele este zero inseamna ca nu exista asociere si se va invita la crearea acesteia fie in cars fie in users
$department_id = 0;
$sel_car_id = 0;
$sel_user_id = 0;
if ($selected_user_id != '0') {
    $department_id = \App\Models\UserDep::where('user_id', $selected_user_id)
        ->where('interval_id', '<=', $selected_interval->id)
        ->orderby('interval_id', 'desc')
        ->first()->department_id;
    $sel_car_id = @\App\Models\UserCar::where('user_id', $selected_user_id)
        ->where('interval_id', '<=', $selected_interval->id)
        ->orderby('interval_id', 'desc')
        ->first()->car_id;
} else {
    if ($selected_car_id != '0') {
        $department_id = \App\Models\CarDep::where('car_id', $selected_car_id)
            ->where('interval_id', '<=', $selected_interval->id)
            ->orderby('interval_id', 'desc')
            ->first()->department_id;
        $sel_user_id = @\App\Models\UserCar::where('car_id', $selected_car_id)
            ->where('interval_id', '<=', $selected_interval->id)
            ->orderby('interval_id', 'desc')
            ->first()->user_id;
    }
}
// dd($selected_car_id, $selected_user_id, $sel_user_id, $sel_car_id);
// var_dump( $sel_user_id, $sel_car_id);
?>
@section('content')
    <div class="card">
        <div class="card-header d-print-none">
            <div class="row">
                <div id="title_bar" class="col">Km log</div>
                <div class="row mb-1">
                    @if ($selected_department_id > 0)
                        <div style="width: 5%" class="col-md-1">
                        </div>
                    @endif
                    @if ($selected_car_id > 0 || $selected_user_id > 0)
                        <div class="col-md-2">
                            <button type="button" class="btn btn-success"
                                onclick="puneUserSiCarPeChoose()">{{ $selected_department_id > 0 ? 'Toata filiala' : 'Tot' }}
                            </button>
                        </div>
                    @endif
                    <div class="col-md-2">
                        <select style="width: 110%" name="department_id" id="department_select" data-deptid="1"
                            data-userid="1" class="form-select">
                            <option value="0">Alege filiala...</option>
                            @foreach ($departments as $department)
                                <option {{ $department->id == $selected_department_id ? 'selected' : '' }}
                                    value="{{ $department->id }}">
                                    {{ $department['name'] }}</option>
                            @endforeach
                        </select>
                        @error('department_id')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-2">
                        <select style="width: 110%" name="car_id" id="car_select" data-deptid="1" data-userid="1"
                            class="form-select">
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
                        <select style="width: 100%" name="user_id" id="user_select" data-deptid="1" data-userid="1"
                            class="form-select">
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
                    @if ($sel_car_id === null)
                        <div class="col-md-2">
                            <a href="{{ route('back.users.edit', $selected_user_id) }}" class="btn btn-info"
                                role="button">Asociaza masina</a>
                        </div>
                    @endif
                    @if ($sel_user_id === null)
                        <div class="col-md-2">
                            <a href="{{ route('back.cars.edit', $selected_car_id) }}" class="btn btn-info"
                                role="button">Asociaza utilizatorul</a>
                        </div>
                    @endif

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
                        <th scope="col" width="4%">ID</th>
                        <th scope="col" width="4%">is_first</th>
                    </tr>
                </thead>
            </table>
            <div id="status-bar" class="col"></div>

        </div>
    </div>
@endsection

@section('scripts')
    @parent

    @include('back.components.datatables-js')

    <script type="text/javascript">
        $(function() {
            // let mutaInSus = {
            //     extend: 'selectedSingle',
            //     className: 'btn-secondary moveup',
            //     text: '<i class="bi bi-chevron-double-up"></i>',
            //     enabled: false,
            //     url: "{{ route('back.kmlogs.muta') }}",

            //     action: function(e, dt, node, config) {
            //         var selected_ids = $.map(dt.rows({
            //             selected: true
            //         }).data(), function(entry) {
            //             return entry.id;
            //         });
            //         var all_ids = $.map(dt.rows().data(), function(entry) {
            //             return entry.id;
            //         });
            //         $.ajax({
            //             method: 'POST',
            //             url: config.url,
            //             data: {
            //                 selected_id: selected_ids[0],
            //                 all_ids: all_ids,
            //                 sens: 'up'
            //             },
            //             success: function(response) {
            //                 oTable.draw();
            //             }
            //         })
            //     }
            // }
            // dtButtonsLeft1.push(mutaInSus)

            // let mutaInJos = {
            //     extend: 'selectedSingle',
            //     className: 'btn-secondary movedown',
            //     text: '<i class="bi bi-chevron-double-down"></i>',
            //     enabled: false,
            //     url: "{{ route('back.kmlogs.muta') }}",

            //     action: function(e, dt, node, config) {
            //         var selected_ids = $.map(dt.rows({
            //             selected: true
            //         }).data(), function(entry) {
            //             return entry.id;
            //         });
            //         var all_ids = $.map(dt.rows().data(), function(entry) {
            //             return entry.id;
            //         });
            //         $.ajax({
            //             method: 'POST',
            //             url: config.url,
            //             data: {
            //                 selected_id: selected_ids[0],
            //                 all_ids: all_ids,
            //                 sens: 'down'
            //             },
            //             success: function(response) {
            //                 oTable.draw();
            //             }
            //         })
            //     }
            // }
            // dtButtonsLeft1.push(mutaInJos)

            /* ------------------------------------------------------------------------ */
            let first = 0;
            let createButton = {
                className: 'btn-success externalCreate',
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
                className: 'btn-primary selectOne externalEdit',
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
                className: 'btn-danger selectMultiple',
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
                // searching: false,
                // paging: false,
                // info: false,
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
                            //console.log(row);
                            //console.log(JSON.stringify(row));
                            let interval_id = row.interval.id;
                            if (row.stat.name == 'Nu se pune la plata' && row.is_first == 1) {
                                return '<span style="color:red;">' + row.stat.name + '</span>';
                            } else {
                                return row.stat.name;

                            }

                            // oTable.on('select', function(e, dt, type, indexes) {
                            //     var all_user_ids = $.map(dt.rows({
                            //         selected: true
                            //     }).data(), function(entry) {
                            //         return [entry.user_id, entry.car_id, entry.department_id];
                            //     });
                            //     console.log(all_user_ids[2]);
                            // let res = $.map(first, function (entry){
                            //     return entry.responseText;
                            // })
                            // console.log(row.stat.name);
                            // if (typeof row.stat === "undefined") {
                            //     return '';
                            // } else {
                            //     //return row.stat.name;
                            //     if (row.stat.name == 'Nu se pune la plata') {
                            //         
                            //     } else {
                            //         return row.stat.name;
                            //     }
                            // }
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
                        data: 'id',
                        name: 'id',
                        searchable: false,
                        className: 'text-left',
                        render: function(data, type, row, meta) {
                            return data.toString();
                        }
                    },
                    {
                        data: 'is_first',
                        name: 'is_first',
                        searchable: false,
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
                buttons: dtButtonsLeft1 //daca aici punem dtButtonsLeft vom vedea butoanele implicite definite in datatables-js.blade.php
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
            // oTable.on('select', function(e, dt, type, indexes) {
            //     var all_user_ids = $.map(dt.rows({
            //         selected: true
            //     }).data(), function(entry) {
            //         return [entry.user_id, entry.car_id, entry.department_id];
            //     });
            //     console.log(all_user_ids[2]);

            // });
            oTable.on('select deselect', function(e, dt, type, indexes) {
                //console.log(indexes[0]);
                var selectedRows = oTable.rows({
                    selected: true
                }).count();

                var numar_inregistrari_selectate = oTable.rows({
                    selected: true
                }).count();
                if (numar_inregistrari_selectate == 1) {
                    var selected_status = $.map(dt.rows({
                        selected: true
                    }).data(), function(entry) {
                        return entry.stat_id;
                    });
                    var selected_is_first = $.map(dt.rows({
                        selected: true
                    }).data(), function(entry) {
                        return entry.is_first;
                    });
                    if (selected_status == 2 && selected_is_first == 1) {//afisarea de aici in status bar este prioritara
                        $('#status-bar').html(
                            'Prima inregistrare din interval (weekend) trebuie sa aiba status Normal (Este referinta ce se scade pentru a afla numarul de km parcursi.)'
                        );
                    }


                }
                // oTable.buttons('.moveup').enable(selected_id[0] != all_ids[0]);
                // oTable.buttons('.movedown').enable(selected_id[0] != all_ids[all_ids_count - 1]);
                oTable.buttons('.selectOne').enable(selectedRows === 1);
                oTable.buttons('.selectMultiple').enable(selectedRows > 0);
            });
            // oTable.buttons('.externalEdit').enable(true);
            // oTable.buttons('.externalCreate').enable(true);
            // $('#title_bar').html('Km log');

            //validari buton adaugare
            if ('{{ $Toate }}' == 1) {
                $('#title_bar').html('<span style="color:red;">Nu puteti adauga daca aveti selectat la interval "Toate"</span>');
            }

            if ('{{ $selected_car_id == 0 && $selected_user_id == 0 }}') {
                $('#title_bar').html('<span style="color:red;">Nu puteti adauga daca nu ati selectat masina sau utilizatorul</span>');
            }

            if ('{{ $sel_user_id === null || $sel_car_id === null }}') {
                $('#title_bar').html('<span style="color:red;">Nu puteti adauga daca utilizatorul sau masina selectat/a nu este asociat/a.</span>');
            }

            if (
                '{{ $Toate == 1 || ($selected_car_id == 0 && $selected_user_id == 0) || ($sel_user_id === null || $sel_car_id === null) }}'
            ) {
                oTable.buttons('.externalCreate').enable(false);

            } else {
                oTable.buttons('.externalCreate').enable(true);

            }
            var createNestedObject = function( base, names ) {
                for( var i = 0; i < names.length; i++ ) {
                    base = base[ names[i] ] = base[ names[i] ] || {};
                }
            };
            //va afisa in status bar un totalizator
            oTable.on('draw', function(e, dt, type, indexes) {
                let myData={};
                // const dynamicArray = ["2007", "2008", "2009", "2010"];
                // const obj = Object.fromEntries(
                // dynamicArray.map(year => [year, {
                //     something: "based",
                //     on: year
                // }])
                //)   
                let count = {};             
                oTable.rows().eq(0).each(function(index) {
                    //scoate toate datele din tabel (obiecte inlantuite. Sunt toate datele)
                    var row = oTable.row(index);
                    var data = row.data();

                    //creaza un contor pentru fiecare user
                    createNestedObject( count, [data.user.name], "cnt" );
                    //care se initializeaza cu zero
                    if(!count[data.user.name].cnt ){count[data.user.name].cnt = 0;}
                    //dupa care se incrementeaza pe fiecare user
                    count[data.user.name].cnt = parseInt(count[data.user.name].cnt, 10) + 1;

                    //creaza un obiect myData ce contine datele pentru fiecare user
                    createNestedObject( myData, [data.user.name, count[data.user.name].cnt, "status"] );
                    createNestedObject( myData, [data.user.name, count[data.user.name].cnt,  "km"] );
                    createNestedObject( myData, [data.user.name, count[data.user.name].cnt,  "interval"] );
                    myData[data.user.name][count[data.user.name].cnt].status = data.stat.name ;
                    myData[data.user.name][count[data.user.name].cnt].km = data.km;
                    myData[data.user.name][count[data.user.name].cnt].interval = data.interval['interval'];
                    //$('#status-bar').html($('#status-bar').html() + '<p>'  + data.user.name + ' ' + data.km  + '</p>');

                });
                console.log (count, myData);
                $('#status-bar').html(
                   '<pre>' + JSON.stringify(myData, null, 2) + '</pre>'
                );

            });
            // oTable.buttons('.externalCreate').text("Deselectati 'Toate' pentru adaugare");
            // oTable.buttons('.externalEdit').text("Deselectati 'Toate' pentru modificare");

            // oTable.on('click', 'td', function() { //sau 'mouseenter'
            //     var colIdx = oTable.cell(this).index().column;
            //     var rowIdx = oTable.cell(this).index().row;
            //     console.log(colIdx, rowIdx);
            // });

        });

        /* Formatting function for row details - modify as you need */
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
                    window.location.reload();
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
                    window.location.reload();
                }
            });
        });

        function adaugaTotal() {}

        function puneUserSiCarPeChoose() {
            $('#user_select option[value="0"]').prop('selected', 'selected').change();
            $('#car_select option[value="0"]').prop('selected', 'selected').change();
        }

        function puneToateSelecturilePeChoose() {
            $('#department_select option[value="0"]').prop('selected', 'selected').change();
            $('#user_select option[value="0"]').prop('selected', 'selected').change();
            $('#car_select option[value="0"]').prop('selected', 'selected').change();
        }
    </script>
    <style>
        .cheap {
            background-color: #933c3c !important;
            background-image: none !important;
            color: #faf6f6 !important;
        }
    </style>
@endsection

@section('styles')
    @parent

    @include('back.components.datatables-css')
@endsection
