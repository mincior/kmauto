@extends('layouts.back')

@section('title')
    &vert; Expires
@endsection

@section('content')
    <?php
    /*  Php header placeholder */
    ?>
    
    <form id="myForm" method="POST" action="{{ route('back.expires.update', [$expire->id]) }}" enctype="multipart/form-data">
        @csrf
        <div class="container mt-4">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="row">
                            <div id="myToolTip" class="col">Expire modificare</div>

                            <div class="col fs-5 text-end">
                                <img src="{{ asset('img/icons/check.png') }}" />
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        
						 <div class="row mb-2">
							 <label for="casco" class="col-md-2 col-form-label">Casco :</label>

							 <div class="col-md-3">
								 <input autocomplete="on" id="casco" name="casco" type="text" 
									 class="form-control @error('casco') is-invalid @enderror" 
									 value="{{ old('casco') ? old('casco') : $expire->casco }}" >

								 @error('casco')
									 <span class="invalid-feedback" role="alert">{{ $message }}</span>
								 @enderror
							 </div>
						 </div>
						 <div class="row mb-2">
							 <label for="rca" class="col-md-2 col-form-label">Rca :</label>

							 <div class="col-md-3">
								 <input autocomplete="on" id="rca" name="rca" type="text" 
									 class="form-control @error('rca') is-invalid @enderror" 
									 value="{{ old('rca') ? old('rca') : $expire->rca }}" >

								 @error('rca')
									 <span class="invalid-feedback" role="alert">{{ $message }}</span>
								 @enderror
							 </div>
						 </div>
						 <div class="row mb-2">
							 <label for="rovinieta" class="col-md-2 col-form-label">Rovinieta :</label>

							 <div class="col-md-3">
								 <input autocomplete="on" id="rovinieta" name="rovinieta" type="text" 
									 class="form-control @error('rovinieta') is-invalid @enderror" 
									 value="{{ old('rovinieta') ? old('rovinieta') : $expire->rovinieta }}" >

								 @error('rovinieta')
									 <span class="invalid-feedback" role="alert">{{ $message }}</span>
								 @enderror
							 </div>
						 </div>
						 <div class="row mb-2">
							 <label for="itp" class="col-md-2 col-form-label">Itp :</label>

							 <div class="col-md-3">
								 <input autocomplete="on" id="itp" name="itp" type="text" 
									 class="form-control @error('itp') is-invalid @enderror" 
									 value="{{ old('itp') ? old('itp') : $expire->itp }}" >

								 @error('itp')
									 <span class="invalid-feedback" role="alert">{{ $message }}</span>
								 @enderror
							 </div>
						 </div>
						 <div class="row mb-2">
							 <label for="final_leasing" class="col-md-2 col-form-label">Final_leasing :</label>

							 <div class="col-md-3">
								 <input autocomplete="on" id="final_leasing" name="final_leasing" type="text" 
									 class="form-control @error('final_leasing') is-invalid @enderror" 
									 value="{{ old('final_leasing') ? old('final_leasing') : $expire->final_leasing }}" >

								 @error('final_leasing')
									 <span class="invalid-feedback" role="alert">{{ $message }}</span>
								 @enderror
							 </div>
						 </div>
						 <div class="row mb-2">
							 <label for="car_id" class="col-md-2 col-form-label">Car_id :</label>

							 <div class="col-md-3">
								 <input autocomplete="on" id="car_id" name="car_id" type="text" 
									 class="form-control @error('car_id') is-invalid @enderror" 
									 value="{{ old('car_id') ? old('car_id') : $expire->car_id }}" >

								 @error('car_id')
									 <span class="invalid-feedback" role="alert">{{ $message }}</span>
								 @enderror
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
