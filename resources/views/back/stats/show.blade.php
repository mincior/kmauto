@extends('layouts.back')

@section('title')
    &vert; Statusi
@endsection
<?php
//dd($stat_name, $stat_name, $stat->name, $user_name);
?>
@section('content')
    <div class="container mt-4">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col">Denumire: </div>

                        <div class="col text-center">
                            <strong>{{ $stat->name }}</strong>
                        </div>

                        <div class="col fs-5 text-end">
                            <img src="{{ asset('img/icons/car.png') }}" />
                        </div>
                    </div>
                </div>

            </div>

            <div class="statd-footer">
                <div class="row">
                    <div class="col">
                        <a class="btn btn-secondary text-white btn-sm" href="{{ route('back.stats.index') }}" role=" button"
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
            $('#my-nav-bar').addClass('d-none'); //ascunde bara de navigare cand sunt pe create stat
        });
    </script>
@endsection
