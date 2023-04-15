@extends('layouts.back')

@section('title')
    &vert; Luna
@endsection
<?php
//dd($interval_name, $month_name, $month->name, $user_name);
?>
@section('content')
    <div class="container mt-4">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col">Luna: </div>

                        <div class="col text-center">
                            <strong>{{ $month->anul_luna }}</strong>
                        </div>

                        <div class="col fs-5 text-end">
                            <img src="{{ asset('img/icons/move.png') }}" />
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="data_raportarii" class="col-md-3 col-form-label">Data raportarii :</label>

                        <div class="col-md-8">
                            <input id="data_raportarii" name="data_raportarii" type="text" readonly class="form-control-plaintext"
                                value="{{ $month->data_raportarii }}">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label for="select" class="col-md-3 col-form-label">Selectata :</label>

                        <div class="col-md-8">
                            <input id="select" name="select" type="text" readonly class="form-control-plaintext"
                                value="{{ $month->select == 1 ? 'Da' : 'Nu'}}">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label for="inchisa" class="col-md-3 col-form-label">Inchisa :</label>

                        <div class="col-md-8">
                            <input id="inchisa" name="inchisa" type="text" readonly class="form-control-plaintext"
                                value="{{ $month->inchisa == 1 ? 'Da' : 'Nu'}}">
                        </div>
                    </div>

                </div>

            </div>

            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <a class="btn btn-secondary text-white btn-sm" href="{{ route('back.months.index') }}" role=" button"
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
            $('#my-nav-bar').addClass('d-none'); //ascunde bara de navigare cand sunt pe create month
        });
    </script>
@endsection
