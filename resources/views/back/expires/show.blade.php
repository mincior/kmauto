@extends('layouts.back')

@section('title')
    &vert; Expires
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
                        <div id="myToolTip" class="col">Expires</div>

                        <div class="col fs-5 text-end">
                            <img src="{{ asset('img/icons/check.png') }}" />
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    
					 <div class="row mb-2">
						 <label for="casco" class="col-md-2 col-form-label">Casco :</label>

						 <div class="col-md-8">
							 <input id="casco" name="casco" type="text" readonly class="form-control-plaintext"
								 value="{{ $expire->casco }}">
						 </div>
					 </div>
					 <div class="row mb-2">
						 <label for="rca" class="col-md-2 col-form-label">Rca :</label>

						 <div class="col-md-8">
							 <input id="rca" name="rca" type="text" readonly class="form-control-plaintext"
								 value="{{ $expire->rca }}">
						 </div>
					 </div>
					 <div class="row mb-2">
						 <label for="rovinieta" class="col-md-2 col-form-label">Rovinieta :</label>

						 <div class="col-md-8">
							 <input id="rovinieta" name="rovinieta" type="text" readonly class="form-control-plaintext"
								 value="{{ $expire->rovinieta }}">
						 </div>
					 </div>
					 <div class="row mb-2">
						 <label for="itp" class="col-md-2 col-form-label">Itp :</label>

						 <div class="col-md-8">
							 <input id="itp" name="itp" type="text" readonly class="form-control-plaintext"
								 value="{{ $expire->itp }}">
						 </div>
					 </div>
					 <div class="row mb-2">
						 <label for="final_leasing" class="col-md-2 col-form-label">Final_leasing :</label>

						 <div class="col-md-8">
							 <input id="final_leasing" name="final_leasing" type="text" readonly class="form-control-plaintext"
								 value="{{ $expire->final_leasing }}">
						 </div>
					 </div>
					 <div class="row mb-2">
						 <label for="car_id" class="col-md-2 col-form-label">Car_id :</label>

						 <div class="col-md-8">
							 <input id="car_id" name="car_id" type="text" readonly class="form-control-plaintext"
								 value="{{ $expire->car_id }}">
						 </div>
					 </div>

                </div>

                <div class="card-footer">
                    <div class="row">
                        <div class="col">
                            <a class="btn btn-secondary text-white btn-sm" href="{{ route('back.expires.index') }}"
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
