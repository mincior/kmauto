@extends('layouts.back')

@section('title')
    &vert; Masini
@endsection
<?php
//dd($type_name, $brand_name, $car->numar, $user_name);
?>
@section('content')
    <div class="container mt-4">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col">Masina: </div>

                        <div class="col text-center">
                            <strong>{{ $car->numar }}</strong>
                        </div>

                        <div class="col fs-5 text-end">
                            <img src="{{ asset('img/icons/car.png') }}" />
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row mb-2">
                        <label for="department_name" class="col-md-3 col-form-label">Filiala :</label>

                        <div class="col-md-8">
                            <input id="department_name" name="department_name" type="text" readonly
                                class="form-control-plaintext" value="{{ $department_name }}">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="user_name" class="col-md-3 col-form-label">Utilizator :</label>

                        <div class="col-md-8">
                            <input id="user_name" name="user_name" type="text" readonly class="form-control-plaintext"
                                value="{{ $user_name }}">
                        </div>
                    </div>

                    <hr class="narrow" />

                    <div class="row mb-2">
                        <label for="brand_name" class="col-md-3 col-form-label">Marca :</label>

                        <div class="col-md-8">
                            <input id="brand_name" name="brand_name" type="text" readonly class="form-control-plaintext"
                                value="{{ $brand_name }}">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label for="type_name" class="col-md-3 col-form-label">Model :</label>

                        <div class="col-md-8">
                            <input id="type_name" name="type_name" type="text" readonly class="form-control-plaintext"
                                value="{{ $type_name }}">
                        </div>
                    </div>
                    <hr class="narrow" />

                    <div class="row mb-2">
                        <label for="combustibil" class="col-md-3 col-form-label">
                            Combustibil :
                        </label>

                        <div class="col-md-6">
                            <input id="combustibil" name="combustibil" type="text" readonly
                                class="form-control-plaintext" value="{{ $fuel_name }}">
                        </div>

                    </div>
                    <div class="row mb-2">
                        <label for="consum_mediu" class="col-md-3 col-form-label">
                            Consum mediu:
                        </label>

                        <div class="col-md-3">
                            <input id="activ" name="consum_mediu" type="text" readonly class="form-control-plaintext"
                                value="{{ $consum_mediu }} litri/100km">
                        </div>
                        <label for="activ" class="col-md-3 col-form-label">
                            Activ:
                        </label>
                        <div class="col-md-2">
                            <input id="activ" name="activ" type="text" readonly class="form-control-plaintext"
                                value="{{ $activ == 1 ? 'Da' : 'Nu' }} ">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <a class="btn btn-secondary text-white btn-sm" href="{{ route('back.cars.index') }}" role=" button"
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
            $('#my-nav-bar').addClass('d-none'); //ascunde bara de navigare cand sunt pe create car
        });
    </script>
@endsection
