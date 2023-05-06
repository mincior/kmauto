@extends('layouts.back')

@section('title')
    &vert; Masini
@endsection

@section('content')
    <?php
    ?>
    <form id="myForm" method="POST" action="{{ route('excel-upload') }}" enctype="multipart/form-data">
        @csrf
        <div class="container mt-4">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="row">
                            <div id="myToolTip" class="col">Excel - incarcare tabele in baza de date</div>

                            <div class="col fs-5 text-end">
                                <img src="{{ asset('img/icons/person.png') }}" />
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row mb-2">
                            <label for="department_id" class="col-md-2 col-form-label">Alege :</label>

                            <div class="col-md-4">
                                <select name="action_id" id="action_select" class="form-select">
                                    <option selected value="0">masini</option>
                                    <option value="1">expirari</option>
                                    <option value="2">masini detalii</option>
                                    <option value="3">utilizatori</option>
                                </select>
                            </div>
                        </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <a class="btn btn-secondary text-white btn-sm" href="javascript:history.back()"
                                    role=" button" tabindex="-1">
                                    <i class="bi bi-arrow-left-short"></i>
                                </a>
                            </div>

                            <div class="col text-end">
                                <button type="submit" class="btn btn-primary text-white btn-sm"
                                    tabindex="-1">Incarca</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
@endsection
