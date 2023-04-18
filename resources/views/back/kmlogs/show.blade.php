@extends('layouts.back')

@section('title')
    &vert; Car
@endsection
<?php
//dd($type_name, $kmlog_name, $kmlog->name, $user_name);
?>
@section('content')
    <div class="container mt-4">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col">Marca: </div>

                        <div class="col text-center">
                            <strong>{{ $kmlog->id . ' : ' . $kmlog->name }}</strong>
                        </div>

                        <div class="col fs-5 text-end">
                            <img src="{{ asset('img/icons/delivery-030.png') }}" />
                        </div>
                    </div>
                </div>

            </div>

            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <a class="btn btn-secondary text-white btn-sm" href="{{ route('back.kmlogs.index') }}" role=" button"
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
            $('#my-nav-bar').addClass('d-none'); //ascunde bara de navigare cand sunt pe create kmlog
        });
    </script>
@endsection
