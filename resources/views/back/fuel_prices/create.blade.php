@extends('layouts.back')

@section('title')
    &vert; Carburanti
@endsection

@section('content')
    <?php
    ?>
    <form id="myForm" method="POST" action="{{ route('back.fuel-prices.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="container mt-4">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="row">
                            <div id="myToolTip" class="col">Preturi combustibili - adaugare</div>

                            <div class="col fs-5 text-end">
                                <img src="{{ asset('img/icons/car.png') }}" />
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row mb-2">
                            <label for="fuel_id" class="col-md-2 col-form-label">Combustibil :</label>
    
                            <div class="col-md-3">
                                <select name="fuel_id" id="fuel_select" class="form-select" data-fuelid="1" data-typeid="1">
                                    <option value="">Alege ...</option>
                                    @foreach ($fuels as $fuel)
                                    <option  {{ old('fuel_id') ==  $fuel->id  ? "selected" : "" }} value="{{ $fuel->id }}">{{ $fuel->name }}</option>
                                    @endforeach
                                </select>
                                @error('fuel_id')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
    
                        <div class="row mb-2">
                            <label for="uel-price" class="col-md-2 col-form-label">Valoare :</label>

                            <div class="col-md-3">
                                <input autocomplete="on" id="valoare" name="valoare" type="text"
                                    class="form-control @error('valoare') is-invalid @enderror"
                                    value="{{ old('valoare')}}">

                                @error('valoare')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="uel-price" class="col-md-2 col-form-label">Observatii :</label>

                            <div class="col-md-3">
                                <input autocomplete="on" id="observatii" name="observatii" type="text"
                                    class="form-control @error('observatii') is-invalid @enderror"
                                    value="{{ old('observatii')}}">

                                @error('observatii')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>



                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <a class="btn btn-secondary text-white btn-sm" href="{{ route('back.fuel-prices.index') }}"
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
<script> 
jQuery(document).ready(function ($) {
	$('#name').focus();
	$('#my-nav-bar').addClass('d-none');//ascunde bara de navigare cand sunt pe create car
});
</script>
@endsection
