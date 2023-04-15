@extends('layouts.back')

@section('title')
    &vert; Filiale
@endsection

@section('content')
    <?php
    ?>
    <form id="myForm" method="POST" action="{{ route('back.departments.update', [$department->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container mt-4">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="row">
                            <div id="myToolTip" class="col">Filiale modificare</div>

                            <div class="col fs-5 text-end">
                                <img src="{{ asset('img/icons/categorisatie.png') }}" />
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row mb-2">
                            <label for="name" class="col-md-2 col-form-label">Nume :</label>

                            <div class="col-md-3">
                                <input autocomplete="on" id="name" name="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name') ? old('name')  : $department->name }}" onkeyup="prelucrare_nume_filiala(this);">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="email" class="col-md-2 col-form-label">Email :</label>

                            <div class="col-md-3">
                                <input autocomplete="on" id="email" name="email" type="text"
                                    class="form-control @error('email') is-invalid @enderror" value="{{ old('email') ? old('email') : $department->email }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="responsabil" class="col-md-2 col-form-label">Responsabil :</label>

                            <div class="col-md-3">
                                <input autocomplete="on" id="responsabil" name="responsabil" type="text"
                                    class="form-control @error('responsabil') is-invalid @enderror"
                                    value="{{ old('responsabil') ?  old('responsabil') : $department->responsabil}}">

                                @error('responsabil')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>



                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <a class="btn btn-secondary text-white btn-sm" href="{{ route('back.departments.index') }}"
                                    role=" button" tabindex="-1">
                                    <i class="bi bi-arrow-left-short"></i>
                                </a>
                            </div>

                            <div class="col text-end">
                                <button type="submit" class="btn btn-primary text-white btn-sm"
                                    tabindex="-1">Salveaza</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>


    </form>
@endsection

@section('scripts')
<script src="{{ asset('js/me/create_or_update_departments.js') }}"></script>
@endsection
