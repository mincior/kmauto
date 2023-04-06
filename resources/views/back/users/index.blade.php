@extends('layouts.back')

@section('title')
    &vert; Users
@endsection

@section('content')
    <div class="card">
        <div class="card-header d-print-none">
            <div class="row">
                <div class="col">Users</div>

                <div class="col fs-5 text-end">
                    <img src="{{ asset('img/icons/persons.png') }}" />
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
                        <th scope="col">Nume</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefon</th>
                        <th scope="col">Limita km</th>
                        <th scope="col">Observatii</th>
                        <th scope="col">Calificativ</th>
                        <th scope="col">Is admin</th>
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
                        data: 'telefon',
                        name: 'telefon',
                    },
                    {
                        data: 'limita_km',
                        name: 'limita_km',
                        className: 'text-center',
                        width: '2'
                    },
                    {
                        data: 'observatii',
                        name: 'observatii',
                    },
                    {
                        data: 'calificativ',
                        name: 'calificativ',
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
                        data: 'activ',
                        name: 'activ',
                        searchable: false,
                        className: "text-center no-select toggleSendActiv",
                        render: function(data, type, row, meta) {
                            if (data == 1) {
                                return 'Da&nbsp;';
                            } else {
                                return '';
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
                var table = 'users';
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
                    '<tr><th>Nume</th><th class="text-center">Activ ?</th></tr>';
                strHTML += '</thead>';
                strHTML += '<tbody>';
                strHTML += '<tr>';
                strHTML += '<td>';
                if (aRow['name'] == null) {
                    strHTML += '&nbsp;';
                } else {
                    strHTML += aRow['name'];
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
