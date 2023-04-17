@extends('layouts.back')

@section('title')
    &vert; Combustibili
@endsection
<?php
//dd($type_name, $fuel-price_name, $fuel-price->name, $user_name);
?>
@section('content')
    <div class="container mt-4">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col">Preturi combustibili: </div>

                        <div id="myToolTip" class="col"><strong style="color: red;"> {{ $month_interval }} </strong></div>

                        <div class="col fs-5 text-end">
                            <img src="{{ asset('img/icons/car.png') }}" />
                        </div>
                    </div>
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
                        <label for="valoare" class="col-md-3 col-form-label">
                            Valoare :
                        </label>

                        <div class="col-md-6">
                            <input id="valoare" name="valoare" type="text" readonly
                                class="form-control-plaintext" value="{{ $fuel_price->valoare }}">
                        </div>

                    </div>
                    <div class="row mb-2">
                        <label for="combustibil" class="col-md-3 col-form-label">
                            Observatii :
                        </label>

                        <div class="col-md-6">
                            <input id="combustibil" name="combustibil" type="text" readonly
                                class="form-control-plaintext" value="{{ $fuel_price->observatii }}">
                        </div>

                    </div>

                </div>

            </div>

            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <a class="btn btn-secondary text-white btn-sm" href="{{ route('back.fuel-prices.index') }}" role=" button"
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
    jQuery(document).ready(function ($) {
        $('#name').focus();
        $('#my-nav-bar').addClass('d-none');//ascunde bara de navigare cand sunt pe create car
    });
    </script>
    @endsection
