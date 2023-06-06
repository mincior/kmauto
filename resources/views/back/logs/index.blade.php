@extends('layouts.back')

@section('title')
    &vert; Logs
@endsection

@section('content')
    <div class="card">
        <div class="row">
            <div class="card-header d-print-none">
                <div class="row">
                    <div class="col">Logs</div>

                    <div class="col fs-5 text-end">
                        <img src="{{ asset('img/icons/check.png') }}" />
                    </div>
                </div>
            </div>

            <div class="col-sm-8">
                <div class="d-flex justify-content-between mb-1">
                    <div id="ToolbarLeft"></div>
                    <div id="ToolbarCenter"></div>
                    <div id="ToolbarRight"></div>
                </div>

                <table id="logTable" class="table table-bordered table-striped table-hover table-sm dataTable">
                    <thead class="table-success">
                        <tr>

                            <th scope="col"> Operatie</th>
                            <th scope="col"> Descriere</th>
                            <th scope="col"> Data crearii</th>
                            <th scope="col"> Data modificarii</th>
                            <th scope="col"> Data</th>
                            <th scope="col"> User Name</th>

                            <th scope="col"> Id</th>

                        </tr>
                    </thead>
                </table>
            </div>
            <div class="col-sm-4">
                <div class="row mb-2">
                    <textarea id="datax" name="datax"  rows="20" cols="140">data:</textarea>

                    <div class="col-md-8">
                    </div>
                </div>
    </div>
        </div>
    </div>
@endsection

@section('scripts')
    @parent

    @include('back.components.datatables-js')

    <script type="text/javascript">
        $(function() {

            // let createButton = {
            //     className: 'btn-success',
            //     text: '<i class="bi bi-plus"></i>',
            //     titleAttr: 'Add',
            //     enabled: true,
            //     action: function(e, dt, node, config) {
            //         document.location.href = '{{ route('back.logs.create') }}';
            //     }
            // }
            // dtButtonsCenter.push(createButton)

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

                    document.location.href = '{{ route('back.logs.show', 'id') }}'.replace("id", id);
                }
            }
            dtButtonsCenter.push(showButton)

            // let editButton = {
            //     extend: 'selectedSingle',
            //     className: 'btn-primary selectOne',
            //     text: '<i class="bi bi-pencil"></i>',
            //     titleAttr: 'Edit',
            //     enabled: false,
            //     action: function(e, dt, node, config) {
            //         const id = dt.row({
            //             selected: true
            //         }).data().id;

            //         document.location.href = '{{ route('back.logs.edit', 'id') }}'.replace("id", id);
            //     }
            // }
            // dtButtonsCenter.push(editButton)

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

            // let deleteButton = {
            //     extend: 'selected',
            //     className: 'btn-danger selectMultiple',
            //     text: '<i class="bi bi-trash"></i>',
            //     titleAttr: 'Delete',
            //     enabled: false,
            //     url: "{{ route('back.logs.massDestroy') }}",
            //     action: function(e, dt, node, config) {
            //         var ids = $.map(dt.rows({
            //             selected: true
            //         }).data(), function(entry) {
            //             return entry.id;
            //         });

            //         if (ids.length === 0) {
            //             bootbox.alert({
            //                 title: 'Eroare ...',
            //                 message: 'Nimic selectat'
            //             });
            //             return
            //         }

            //         bootbox.confirm({
            //             title: "Stergeti randurile selectate?",
            //             message: "Sunteti sigur?",
            //             buttons: {
            //                 confirm: {
            //                     label: 'Da',
            //                     className: 'btn-sm btn-primary'
            //                 },
            //                 cancel: {
            //                     label: 'Nu',
            //                     className: 'btn-sm btn-secondary'
            //                 }
            //             },
            //             callback: function(confirmed) {
            //                 if (confirmed) {
            //                     $.ajax({
            //                         method: 'POST',
            //                         url: config.url,
            //                         data: {
            //                             ids: ids,
            //                             _method: 'DELETE'
            //                         },
            //                         success: function(response) {
            //                             oTable.draw();

            //                             showToast({
            //                                 type: 'success',
            //                                 title: 'Stergere ...',
            //                                 message: "Randurile selectate au fost sterse",
            //                             });
            //                         }
            //                     });
            //                 }
            //             }
            //         });
            //     }
            // }
            // dtButtonsRight.push(deleteButton)
            /* ------------------------------------------------------------------------ */
            let dtOverrideGlobals = {
                ajax: {
                    url: "{{ route('back.logs.index') }}",
                    data: function(d) {}
                },
                columns: [

                    {
                        data: 'operatie',
                        name: 'operatie',
                    },
                    {
                        data: 'descriere',
                        name: 'descriere',
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
                        data: 'data',
                        name: 'data',
                    },
                    {
                        data: 'user_id',

                        render: function(data, type, row, meta) {
                            if (row.user === null) {
                                return '';
                            } else {
                                return row.user.name;
                            }
                        },

                    },

                    {
                        data: 'id',
                        name: 'id',
                    },

                ],
                select: {
                    selector: 'td:not(.no-select)',
                },
                ordering: true,
                order: [
                    [0, "asc"],
                ],
                preDrawCallback: function(settings) {
                    oTable.columns.adjust();
                }
            };
            /* ------------------------------------------- */
            let oTable = $('#logTable').DataTable(dtOverrideGlobals);
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

            var table = $('#logTable').DataTable();
            $('#logTable').on('click', 'tr', function() {
                let datax = table.row($(this)).data().data;
                $('#datax').html(datax);
            });
        });
    </script>
@endsection

@section('styles')
    @parent

    @include('back.components.datatables-css')
@endsection