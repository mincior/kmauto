@extends('layouts.back')

@section('title')
    &vert; CarProps
@endsection

@section('content')
    <?php
    /*  Php header placeholder */
    ?>
    
    <form id="myForm" method="POST" action="{{ route('back.car-props.update', [$carProp->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container mt-4">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="row">
                            <div id="myToolTip" class="col">CarProp modificare</div>

                            <div class="col fs-5 text-end">
                                <img src="{{ asset('img/icons/check.png') }}" />
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        
						 <div class="row mb-2">
							 <label for="carProp" class="col-md-2 col-form-label">Observatii :</label>

							 <div class="col-md-4">
								 <input autocomplete="on" id="carProp" name="carProp" type="text" 
									 class="form-control @error('carProp') is-invalid @enderror" 
									 value="{{ old('carProp') ? old('carProp') : $carProp->carProp }}" >

								 @error('carProp')
									 <span class="invalid-feedback" role="alert">{{ $message }}</span>
								 @enderror
							 </div>
						 </div>
						 <div class="row mb-2">
							 <label for="interval" class="col-md-2 col-form-label">Interval interval :</label>

							 <div class="col-md-4">
								 <select name="interval_id" id="intervals_select" class="form-select">
									 <option value="0">Alege ...</option>
									 <@foreach ($intervals as $interval)
										 <option {{ (old('interval') ? (old('interval') == $interval->id) : ($interval_id == $interval->id)) ? "selected" : "" }} value="{{ $interval->id }}">{{ $interval->interval }}</option>
									 <@endforeach
								 </select>
								 @error('interval')
									 <span class="invalid-feedback" role="alert">{{ $message }}</span>
								 @enderror
							 </div>
						 </div>
						 <div class="row mb-2">
							 <label for="car" class="col-md-2 col-form-label">Car numar :</label>

							 <div class="col-md-4">
								 <select name="car_id" id="cars_select" class="form-select">
									 <option value="0">Alege ...</option>
									 <@foreach ($cars as $car)
										 <option {{ (old('car') ? (old('car') == $car->id) : ($car_id == $car->id)) ? "selected" : "" }} value="{{ $car->id }}">{{ $car->numar }}</option>
									 <@endforeach
								 </select>
								 @error('car')
									 <span class="invalid-feedback" role="alert">{{ $message }}</span>
								 @enderror
							 </div>
						 </div>
						 <div class="row mb-2">
							 <label for="carPropValue" class="col-md-2 col-form-label">CarPropValue name :</label>

							 <div class="col-md-4">
								 <select name="car_prop_value_id" id="car_prop_values_select" class="form-select">
									 <option value="0">Alege ...</option>
									 <@foreach ($carPropValues as $carPropValue)
										 <option {{ (old('carPropValue') ? (old('carPropValue') == $carPropValue->id) : ($carPropValue_id == $carPropValue->id)) ? "selected" : "" }} value="{{ $carPropValue->id }}">{{ $carPropValue->name }}</option>
									 <@endforeach
								 </select>
								 @error('carPropValue')
									 <span class="invalid-feedback" role="alert">{{ $message }}</span>
								 @enderror
							 </div>
						 </div>

                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <a class="btn btn-secondary text-white btn-sm" href="{{ route('back.car-props.index') }}"
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
