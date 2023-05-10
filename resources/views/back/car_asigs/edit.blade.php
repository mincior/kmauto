@extends('layouts.back')

@section('title')
    &vert; CarAsigs
@endsection

@section('content')
    <?php
    /*  Php header placeholder */
    ?>
    
    <form id="myForm" method="POST" action="{{ route('back.car-asigs.update', [$car_asig->id]) }}" enctype="multipart/form-data">
        @csrf
        <div class="container mt-4">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="row">
                            <div id="myToolTip" class="col">CarAsig modificare</div>

                            <div class="col fs-5 text-end">
                                <img src="{{ asset('img/icons/check.png') }}" />
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        
						 <div class="row mb-2">
							 <label for="valoare" class="col-md-2 col-form-label">Valoare :</label>

							 <div class="col-md-3">
								 <input autocomplete="on" id="valoare" name="valoare" type="text" 
									 class="form-control @error('valoare') is-invalid @enderror" 
									 value="{{ old('valoare') ? old('valoare') : $car_asig->valoare }}" >

								 @error('valoare')
									 <span class="invalid-feedback" role="alert">{{ $message }}</span>
								 @enderror
							 </div>
						 </div>
						 <div class="row mb-2">
							 <label for="interval_id" class="col-md-2 col-form-label">Interval_id :</label>

							 <div class="col-md-3">
								 <input autocomplete="on" id="interval_id" name="interval_id" type="text" 
									 class="form-control @error('interval_id') is-invalid @enderror" 
									 value="{{ old('interval_id') ? old('interval_id') : $car_asig->interval_id }}" >

								 @error('interval_id')
									 <span class="invalid-feedback" role="alert">{{ $message }}</span>
								 @enderror
							 </div>
						 </div>
						 <div class="row mb-2">
							 <label for="car_id" class="col-md-2 col-form-label">Car_id :</label>

							 <div class="col-md-3">
								 <input autocomplete="on" id="car_id" name="car_id" type="text" 
									 class="form-control @error('car_id') is-invalid @enderror" 
									 value="{{ old('car_id') ? old('car_id') : $car_asig->car_id }}" >

								 @error('car_id')
									 <span class="invalid-feedback" role="alert">{{ $message }}</span>
								 @enderror
							 </div>
						 </div>

                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <a class="btn btn-secondary text-white btn-sm" href="{{ route('back.car-asigs.index') }}"
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
    {{-- Scripts placeholder --}}
    <style>
        /* Style placeholder */
    </style>
@endsection
