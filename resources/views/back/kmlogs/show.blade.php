@extends('layouts.back')

@section('title')
    &vert; Km log
@endsection
<?php
?>
@section('content')
    <div class="container mt-4">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col">Km log</div>

                        <div class="col text-center">
                            <strong>{{ $department_name }}</strong>
                        </div>

                        <div class="col fs-5 text-end">
                            <img src="{{ asset('img/buttons/delivery-030.png') }}" />
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label  class="col-md-3 col-form-label">Utilizator</label>

                        <div class="col-md-8">
                            <input type="text" readonly class="form-control-plaintext" value="{{ $user_name }}">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label  class="col-md-3 col-form-label">Masina</label>

                        <div class="col-md-8">
                            <input type="text" readonly class="form-control-plaintext" value="{{ $car_numar }}">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label  class="col-md-3 col-form-label">Km</label>

                        <div class="col-md-8">
                            <input type="text" readonly class="form-control-plaintext" value="{{ $kmlog->km }}">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label  class="col-md-3 col-form-label">Status</label>

                        <div class="col-md-8">
                            <input type="text" readonly class="form-control-plaintext" value="{{ $stat_name }}">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label  class="col-md-3 col-form-label">Poza</label>

                        <div class="col-md-8">
                            <img class="img-fluid" src="/storage/pictures{{ $kmlog->picture }}">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label class="col-md-3 col-form-label">Observatii</label>

                        <div class="col-md-8">
                            <input  type="text" readonly
                                class="form-control-plaintext" value="{{ $kmlog->observatii }}">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label class="col-md-3 col-form-label">Ordine</label>

                        <div class="col-md-8">
                            <input  type="text" readonly
                                class="form-control-plaintext" value="{{ $kmlog->ordine }}">
                        </div>
                    </div>


                </div>

            </div>

            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <a class="btn btn-secondary text-white btn-sm" href="{{ route('back.kmlogs.index') }}"
                            role=" button" tabindex="-1">
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
            $('#my-nav-bar').addClass('d-none'); //ascunde bara de navigare cand sunt pe create kmlog
        });
    </script>
@endsection
