@extends('layouts.back')

@section('title')
    &vert; User
@endsection
<?php
//dd($type_name, $brand_name, $user->name, $user_name);
?>
@section('content')
    <div class="container mt-4">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col">Utilizator: </div>

                        <div class="col text-center">
                            <strong>{{ $user->name }}</strong>
                        </div>

                        <div class="col fs-5 text-end">
                            <img src="{{ asset('img/icons/person.png') }}" />
                        </div>
                    </div>
                </div>

                <div class="card-body">

                    <div class="row mb-2">
                        <label for="email" class="col-md-3 col-form-label">Email :</label>

                        <div class="col-md-8">
                            <input id="email" name="email" type="text" readonly class="form-control-plaintext"
                                value="{{ $user->email }}">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label for="department_name" class="col-md-3 col-form-label">Filiala :</label>

                        <div class="col-md-8">
                            <input id="department_name" name="department_name" type="text" readonly
                                class="form-control-plaintext" value="{{ $department_name }}">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="numar" class="col-md-3 col-form-label">Masina :</label>

                        <div class="col-md-8">
                            <input id="numar" name="numar" type="text" readonly class="form-control-plaintext"
                                value="{{ $numar }}">
                        </div>
                    </div>
                    <hr class="narrow" />

                    <div class="row mb-2">
                        <label for="telefon" class="col-md-3 col-form-label">Telefon :</label>

                        <div class="col-md-8">
                            <input id="telefon" name="telefon" type="text" readonly class="form-control-plaintext"
                                value="{{ $telefon }}">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="kmlimit" class="col-md-3 col-form-label">Limita km :</label>

                        <div class="col-md-8">
                            <input id="kmlimit" name="kmlimit" type="text" readonly class="form-control-plaintext"
                                value="{{ $kmlimit }}">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="activ" class="col-md-3 col-form-label">Activ :</label>

                        <div class="col-md-8">
                            <input id="activ" name="activ" type="text" readonly class="form-control-plaintext"
                            value="{{ $user->activ == 1 ? 'Da' : 'Nu' }} ">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="observatii" class="col-md-3 col-form-label">Observatii :</label>

                        <div class="col-md-8">
                            <input id="observatii" name="observatii" type="text" readonly class="form-control-plaintext"
                                value="{{ $user->observatii }}">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label for="calificativ" class="col-md-3 col-form-label">Calificativ :</label>

                        <div class="col-md-8">
                            <input id="calificativ" name="calificativ" type="text" readonly
                                class="form-control-plaintext" value="{{ $user->calificativ }}">
                        </div>
                    </div>
                    <hr class="narrow" />

                    <div class="row mb-2">
                        <label for="is_admin" class="col-md-3 col-form-label">Este admin:</label>

                        <div class="col-md-3">
                            <input id="activ" name="is_admin" type="text" readonly class="form-control-plaintext"
                                value="{{ $user->is_admin == 1 ? 'Da':'Nu' }} ">
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <a class="btn btn-secondary text-white btn-sm" href="{{ route('back.users.index') }}" role=" button"
                        tabindex="-1">
                        <i class="bi bi-arrow-left-short"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('scripts')
    <script>
        jQuery(document).ready(function($) {
            $('#my-nav-bar').addClass('d-none'); //ascunde bara de navigare cand sunt pe create user
        });
    </script>
@endsection
