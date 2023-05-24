@extends('layouts.back')

@section('title')
    &vert; CarAsigs
@endsection

@section('content')
    <?php
    /*  Php header placeholder */
    ?>
    
    <form id="myForm" method="POST" action="{{ route('back.car-asigs.update', [$carAsig->id]) }}" enctype="multipart/form-data"
        onsubmit="return validateForm()">
        @csrf
        @method('PUT')
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
								<label for="observatii" class="col-md-2 col-form-label">Observatii :</label>

								<div class="col-md-4">
									<input autocomplete="on" id="observatii" name="observatii" type="text" 
										class="form-control @error('observatii') is-invalid @enderror" 
										value="{{ old('observatii') ? old('observatii') : $carAsig->observatii }}" >

									@error('observatii')
										<span class="invalid-feedback" role="alert">{{ $message }}</span>
									@enderror
								</div>
							</div>
						<div class="row mb-2">
							<label for="poza_amenda" class="col-md-2 col-form-label">Poza_amenda :</label>

							<div class="row md-8">
								<img id="my_pic_poza_amenda" class="img-fluid"  src="/storage/pictures{{ $carAsig->poza_amenda }}">
							</div>

							<div class="input-group  custom-file-button col-md-3">
								<label class="input-group-text" for="pic_poza_amenda">Selectati poza</label>
								<input autocomplete="on" id="pic_poza_amenda" name="poza_amenda" type="file"
									class="form-control @error('pic_poza_amenda') is-invalid @enderror"
									value="{{ old('pic_poza_amenda') }}">

								@error('pic_poza_amenda')
									<span class="invalid-feedback" role="alert">{{ $message }}</span>
								@enderror
							</div>
						</div>
						<div class="row mb-2">
							<label for="poza_sofer" class="col-md-2 col-form-label">Poza_sofer :</label>

							<div class="row md-8">
								<img id="my_pic_poza_sofer" class="img-fluid"  src="/storage/pictures{{ $carAsig->poza_sofer }}">
							</div>

							<div class="input-group  custom-file-button col-md-3">
								<label class="input-group-text" for="pic_poza_sofer">Selectati poza</label>
								<input autocomplete="on" id="pic_poza_sofer" name="poza_sofer" type="file"
									class="form-control @error('pic_poza_sofer') is-invalid @enderror"
									value="{{ old('pic_poza_sofer') }}">

								@error('pic_poza_sofer')
									<span class="invalid-feedback" role="alert">{{ $message }}</span>
								@enderror
							</div>
						</div>
						<div class="row mb-2">
							<label for="carAsigValue" class="col-md-2 col-form-label">CarAsigValue name :</label>

							<div class="col-md-4">
								<select name="car_asig_value_id" id="car_asig_values_select" class="form-select">
									<option value="0">Alege ...</option>
									<@foreach ($carAsigValues as $carAsigValue)
										<option {{ (old('carAsigValue') ? (old('carAsigValue') == $carAsigValue->id) : ($carAsig->car_asig_value_id == $carAsigValue->id)) ? "selected" : "" }} value="{{ $carAsigValue->id }}">{{ $carAsigValue->name }}</option>
									<@endforeach
								</select>
								@error('carAsigValue')
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
										<option {{ (old('interval') ? (old('interval') == $interval->id) : ($carAsig->interval_id == $interval->id)) ? "selected" : "" }} value="{{ $interval->id }}">{{ $interval->interval }}</option>
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
										<option {{ (old('car') ? (old('car') == $car->id) : ($carAsig->car_id == $car->id)) ? "selected" : "" }} value="{{ $car->id }}">{{ $car->numar }}</option>
									<@endforeach
								</select>
								@error('car')
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
        .custom-file-button input[type=file] {
            margin-left: -2px !important;
        }

        .custom-file-button input[type=file]::-webkit-file-upload-button {
            display: none;
        }

        .custom-file-button input[type=file]::file-selector-button {
            display: none;
        }

        .custom-file-button:hover label {
            background-color: #dde0e3;
            cursor: pointer;
        }
    </style>
        <script>
            jQuery(document).ready(function($) {
                $('#my-nav-bar').addClass('d-none'); /*ascunde bara de navigare cand sunt pe create car*/
                /* pictures placeholder */
				$('#pic_poza_amenda').change(function() {
					const file = this.files[0];
					if (file) {
						let reader = new FileReader();
						reader.onload = function(event) {
							$('#my_pic_poza_amenda').attr('src', event.target.result);
						}
						reader.readAsDataURL(file);
					}
				});
				$('#pic_poza_sofer').change(function() {
					const file = this.files[0];
					if (file) {
						let reader = new FileReader();
						reader.onload = function(event) {
							$('#my_pic_poza_sofer').attr('src', event.target.result);
						}
						reader.readAsDataURL(file);
					}
				});

    
            });
    
            function validateForm() {
                return true;
            }
        </script>
    
@endsection
