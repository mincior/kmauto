    <div class="card">
        <div class="card-header d-print-none">
            <div class="row">
                <div class="col">Typee</div>

                <div class="col fs-5 text-end">
                    <img src="{{ asset('img/icons/task.png') }}" />
                </div>
            </div>
        </div>

        <div class="card-body p-1">
            <div class="d-flex justify-content-between mb-1">
                <div id="ToolbarLeft"></div>
                <div id="ToolbarCenter"></div>
                <div id="ToolbarRight"></div>
            </div>

            <table id="typeTable" class="table table-bordered table-striped table-hover table-sm dataTable">
                <thead class="table-success">
                    <tr>
                        <th scope="col" width="4%">ID</th>
                        <th scope="col">Model</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
