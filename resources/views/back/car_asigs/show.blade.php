@extends('layouts.back')

@section('title')
    &vert; CarAsigs
@endsection

@section('content')
    <?php
    /*  Php header placeholder */
    ?>

    <div class="container mt-4">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="row">
                        <div id="myToolTip" class="col">CarAsigs</div>

                        <div class="col fs-5 text-end">
                            <img src="{{ asset('img/icons/check.png') }}" />
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    
					 <div class="row mb-2">
						 <label for="observatii" class="col-md-2 col-form-label">Observatii :</label>

						 <div class="col-md-8">
							 <input id="observatii" name="observatii" type="text" readonly class="form-control-plaintext"
								 value="{{ $carAsig->observatii }}">
						 </div>
					 </div>
					 <div class="row mb-2">
						 <label for="poza_amenda" class="col-md-2 col-form-label">Poza_amenda :</label>

						 <div class="col-md-8">
							 <input id="poza_amenda" name="poza_amenda" type="text" readonly class="form-control-plaintext"
								 value="{{ $carAsig->poza_amenda }}">
						 </div>
					 </div>
					 <div class="row mb-2">
						 <label for="car_asig_value_id" class="col-md-2 col-form-label">Car_asig_value_id :</label>

						 <div class="col-md-8">
							 <input id="car_asig_value_id" name="car_asig_value_id" type="text" readonly class="form-control-plaintext"
								 value="{{ $carAsig->car_asig_value_id }}">
						 </div>
					 </div>
					 <div class="row mb-2">
						 <label for="interval_id" class="col-md-2 col-form-label">Interval_id :</label>

						 <div class="col-md-8">
							 <input id="interval_id" name="interval_id" type="text" readonly class="form-control-plaintext"
								 value="{{ $carAsig->interval_id }}">
						 </div>
					 </div>
					 <div class="row mb-2">
						 <label for="car_id" class="col-md-2 col-form-label">Car_id :</label>

						 <div class="col-md-8">
							 <input id="car_id" name="car_id" type="text" readonly class="form-control-plaintext"
								 value="{{ $carAsig->car_id }}">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {{-- Scripts placeholder --}}
    <style>
        /* Style placeholder */
    </style>
@endsection
