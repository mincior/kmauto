@extends('layouts.back')

@section('title')
    &vert; Cars
@endsection

@section('content')
    <div class="card">
        <div class="card-header d-print-none">
            <div class="row">
                <div class="col">Cars</div>

                <div class="col fs-5 text-end">
                    <img src="{{ asset('img/icons/car.png') }}" />
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
                        <th scope="col" width="4%">ID</th>
                        <th scope="col">Numar</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Model</th>
                        <th scope="col">Consum mediu</th>
                        <th scope="col">Carburant</th>
                        <th scope="col">Filiala</th>
                        <th scope="col">Utilizator</th>
                        <th scope="col" class="text-danger">Activ ?</th>
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
                columns: [{
                        data: 'id',
                        name: 'id',
                        className: 'text-left',
                        render: function(data, type, row, meta) {
                            return data.toString();
                        }
                    },
                    {
                        data: 'numar',
                        name: 'numar',
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
                        data: 'consum_mediu',
                        name: 'consum_mediu',
                        width: '2'
                    },
                    {
                        data: 'carburant',
                        name: 'carburant',
                        className: 'text-center',
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
                            if ( typeof row.users[0] === "undefined"){
                                return '';
                            }else{
                                return row.users[0].name;
                            }
                        },
                    },
                    {
                        data: 'activ',
                        name: 'activ',
                        searchable: false,
                        className: "text-center no-select toggleSendActiv",
                        render: function(data, type, row, meta) {
                            if (data == 1) {
                                return 'Da&nbsp;';
                            } else {
                                return 'Nu&nbsp;';
                            }
                        },
                    }
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
            /* ------------------------------------------------------------------------ */
            /* DATATABLE - CELL - Action					   						    */
            /* ------------------------------------------------------------------------ */
            $('#sqltable tbody').on('click', 'td.toggleSendActiv', function() {
                var table = 'cars';
                var id = oTable.row($(this).closest("tr")).data().DT_RowId;
                var key = 'activ';
                var value = oTable.cell(this).data();

                bootbox.confirm({
                    title: 'Edit ...',
                    message: MyItem(id, key, value),
                    onEscape: true,
                    backdrop: true,
                    buttons: {
                        confirm: {
                            label: 'Yes',
                            className: 'btn-success'
                        },
                        cancel: {
                            label: 'No',
                            className: 'btn-secondary'
                        }
                    },
                    callback: function(confirmed) {
                        if (confirmed) {
                            value = value == 0 ? 1 : 0;

                            setValue(table, id, key, value);
                        }
                    }
                });
            });
            /* ------------------------------------------------------------------------ */
            /* FUNCTIONS - MyItem, setValue         			            		    */
            /* ------------------------------------------------------------------------ */
            function MyItem(id, key, value) {
                var aRow = oTable.row('#' + id).data();

                if (value == 1) {
                    from = 'Da';
                    to = 'Nu';
                } else {
                    from = 'Nu';
                    to = 'Da';
                }

                var strHTML = '';
                strHTML += '<table class="table table-bordered table-sm mytable">';
                strHTML += '<thead class="table-success">';
                strHTML +=
                    '<tr><th>Numar</th><th class="text-center">Activ ?</th></tr>';
                strHTML += '</thead>';
                strHTML += '<tbody>';
                strHTML += '<tr>';
                strHTML += '<td>';
                if (aRow['numar'] == null) {
                    strHTML += '&nbsp;';
                } else {
                    strHTML += aRow['numar'];
                }
                strHTML += '</td>';
                strHTML += '<td class="text-center">';
                strHTML += from + ' <i class="bi bi-arrow-right"></i> ' + to;
                strHTML += '</td>';
                strHTML += '</tr>';
                strHTML += '</tbody>';
                strHTML += '</table>';
                strHTML += '<div>Esti sigur ca vrei sa modifici randul de mai sus?</div>';
                return strHTML;
            };
            /* ------------------------------------------- */
            function setValue(table, id, key, value) {
                $.ajax({
                    method: 'POST',
                    url: "{{ route('back.general.setValueDB') }}",
                    data: {
                        table: table,
                        id: id,
                        key: key,
                        value: value,
                    },
                    success: function(response) {
                        oTable.rows(id).invalidate().draw(false);

                        showToast(response);
                    }
                });
            };
            /* ------------------------------------------------------------------------ */
        });
    </script>
@endsection

@section('styles')
    @parent

    @include('back.components.datatables-css')
@endsection
