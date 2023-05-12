@extends('layouts.back')

@section('title')
    &vert; CarStats
@endsection

@section('content')
    <?php
    /*  Php header placeholder */
    ?>
    
    <form id="myForm" method="POST" action="{{ route('back.car-stats.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="container mt-4">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="row">
                            <div id="myToolTip" class="col">CarStat adaugare</div>

                            <div class="col fs-5 text-end">
                                <img src="{{ asset('img/icons/check.png') }}" />
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        
						 <div class="row mb-2">
							 <label for="observatii" class="col-md-2 col-form-label">Observatii :</label>

							 <div class="col-md-3">
								 <input autocomplete="on" id="observatii" name="observatii" type="text"
								 class="form-control @error('observatii') is-invalid @enderror" value="{{ old('observatii') }}">

								 @error('observatii')
								 <span class="invalid-feedback" role="alert">{{ $message }}</span>
								 @enderror
							 </div>
						 </div>
						 <div class="row mb-2">
							 <label for="interval_id" class="col-md-2 col-form-label">Interval_id :</label>

							 <div class="col-md-3">
								 <input autocomplete="on" id="interval_id" name="interval_id" type="text"
								 class="form-control @error('interval_id') is-invalid @enderror" value="{{ old('interval_id') }}">

								 @error('interval_id')
								 <span class="invalid-feedback" role="alert">{{ $message }}</span>
								 @enderror
							 </div>
						 </div>
						 <div class="row mb-2">
							 <label for="car_id" class="col-md-2 col-form-label">Car_id :</label>

							 <div class="col-md-3">
								 <input autocomplete="on" id="car_id" name="car_id" type="text"
								 class="form-control @error('car_id') is-invalid @enderror" value="{{ old('car_id') }}">

								 @error('car_id')
								 <span class="invalid-feedback" role="alert">{{ $message }}</span>
								 @enderror
							 </div>
						 </div>
						 <div class="row mb-2">
							 <label for="car_stat_value_id" class="col-md-2 col-form-label">Car_stat_value_id :</label>

							 <div class="col-md-3">
								 <input autocomplete="on" id="car_stat_value_id" name="car_stat_value_id" type="text"
								 class="form-control @error('car_stat_value_id') is-invalid @enderror" value="{{ old('car_stat_value_id') }}">

								 @error('car_stat_value_id')
								 <span class="invalid-feedback" role="alert">{{ $message }}</span>
								 @enderror
							 </div>
						 </div>

                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <a class="btn btn-secondary text-white btn-sm" href="{{ route('back.car-stats.index') }}"
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
