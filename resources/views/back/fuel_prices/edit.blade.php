@extends('layouts.back')

@section('title')
&vert; Combustibili
@endsection

@section('content')
<form id="myForm" method="POST" action="{{ route('back.fuel-prices.update', [$fuel_price->id])  }}" enctype="multipart/form-data" wire:submit.prevent="savePersonalData" onkeydown="return event.key != 'Enter';">
    @csrf
    @method('PUT')
    <div class="container mt-4">
        <div class="col">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="row">
                        <div id="myToolTip" class="col">Preturi combustibili - modificare:<strong style="color: red;"> {{ $month_interval }} </strong></div>

                        <div class="col fs-5 text-end">
                            <img src="{{ asset('img/icons/car.png') }}" />
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row mb-2">
                        <label for="fuel_id" class="col-md-2 col-form-label">Combustibil</label>

                        <div class="col-md-3">
                            <h4>{{ old('fuel_id') ? old('fuel_id') : $fuel_name }} </h4>

                            @error('fuel_id')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label for="valoare" class="col-md-2 col-form-label">Pret</label>

                        <div class="col-md-3">
                            <input autocomplete="on" id="valoare" name="valoare" type="text" class="form-control @error('valoare') is-invalid @enderror" value="{{ old('valoare') ? old('valoare') : $fuel_price->valoare }}">

                            @error('valoare')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label for="observatii" class="col-md-2 col-form-label">Observatii</label>

                        <div class="col-md-3">
                            <input autocomplete="on" id="observatii" name="observatii" type="text" class="form-control @error('observatii') is-invalid @enderror" value="{{ old('observatii') ? old('observatii') : $fuel_price->observatii }}" onkeyup="prelucrare_observatii_masina(this);">

                            @error('observatii')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>



                <div class="card-footer">
                    <div class="row">
                        <div class="col">
                            <a class="btn btn-secondary text-white btn-sm" href="{{ route('back.fuel-prices.index') }}" role=" button" tabindex="-1">
                                <i class="bi bi-arrow-left-short"></i>
                            </a>
                        </div>

                        <div class="col text-end">
                            <button type="submit" class="btn btn-primary text-white btn-sm" tabindex="-1">Salveaza</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</form>
@endsection

@section('scripts')
<script> 
jQuery(document).ready(function ($) {
	$('#valoare').focus();
	$('#my-nav-bar').addClass('d-none');//ascunde bara de navigare cand sunt pe create car
});
</script>

@endsection
