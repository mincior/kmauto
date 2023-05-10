@extends('layouts.back')

@section('title')
    &vert; Revisions
@endsection

@section('content')
    <?php
    /*  Php header placeholder */
    ?>
    
    <form id="myForm" method="POST" action="{{ route('back.revisions.update', [$revision->id]) }}" enctype="multipart/form-data">
        @csrf
        <div class="container mt-4">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="row">
                            <div id="myToolTip" class="col">Revision modificare</div>

                            <div class="col fs-5 text-end">
                                <img src="{{ asset('img/icons/check.png') }}" />
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        
						 <div class="row mb-2">
							 <label for="data" class="col-md-2 col-form-label">Data :</label>

							 <div class="col-md-3">
								 <input autocomplete="on" id="data" name="data" type="text" 
									 class="form-control @error('data') is-invalid @enderror" 
									 value="{{ old('data') ? old('data') : $revision->data }}" >

								 @error('data')
									 <span class="invalid-feedback" role="alert">{{ $message }}</span>
								 @enderror
							 </div>
						 </div>
						 <div class="row mb-2">
							 <label for="km" class="col-md-2 col-form-label">Km :</label>

							 <div class="col-md-3">
								 <input autocomplete="on" id="km" name="km" type="text" 
									 class="form-control @error('km') is-invalid @enderror" 
									 value="{{ old('km') ? old('km') : $revision->km }}" >

								 @error('km')
									 <span class="invalid-feedback" role="alert">{{ $message }}</span>
								 @enderror
							 </div>
						 </div>
						 <div class="row mb-2">
							 <label for="car_id" class="col-md-2 col-form-label">Car_id :</label>

							 <div class="col-md-3">
								 <input autocomplete="on" id="car_id" name="car_id" type="text" 
									 class="form-control @error('car_id') is-invalid @enderror" 
									 value="{{ old('car_id') ? old('car_id') : $revision->car_id }}" >

								 @error('car_id')
									 <span class="invalid-feedback" role="alert">{{ $message }}</span>
								 @enderror
							 </div>
						 </div>

                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <a class="btn btn-secondary text-white btn-sm" href="{{ route('back.revisions.index') }}"
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
