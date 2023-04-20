@extends('layouts.back')

@section('title')
    &vert; Intervale
@endsection
<?php
//dd($interval_name, $interval_name, $interval->name, $user_name);
?>
@section('content')
    <div class="container mt-4">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col">Interval: </div>

                        <div class="col text-center">
                            <strong>{{ $interval->month->anul_luna . ' : ' . $interval->interval }}</strong>
                        </div>

                        <div class="col fs-5 text-end">
                            <img src="{{ asset('img/icons/task.png') }}" />
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="data_inceput" class="col-md-3 col-form-label">Data inceput :</label>

                        <div class="col-md-8">
                            <input id="data_inceput" name="data_inceput" type="text" readonly class="form-control-plaintext"
                                value="{{ $interval->data_inceput }}">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label for="data_sfarsit" class="col-md-3 col-form-label">Data sfarsit :</label>

                        <div class="col-md-8">
                            <input id="data_sfarsit" name="data_sfarsit" type="text" readonly class="form-control-plaintext"
                                value="{{ $interval->data_sfarsit }}">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="select" class="col-md-3 col-form-label">Selectat :</label>

                        <div class="col-md-8">
                            <input id="select" name="select" type="text" readonly class="form-control-plaintext"
                                value="{{ $interval->select == 1 ? 'Da' : 'Nu'}}">
                        </div>
                    </div>

                </div>

            </div>

            <div class="typed-footer">
                <div class="row">
                    <div class="col">
                        <a class="btn btn-secondary text-white btn-sm" href="{{ route('back.intervals.index') }}" role=" button"
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
            $('#my-nav-bar').addClass('d-none'); //ascunde bara de navigare cand sunt pe create interval
        });
    </script>
@endsection
