@extends('layouts.back')

@section('title')
    &vert; Carseconds
@endsection

@section('content')
    <?php
    /*  Php header placeholder */
    ?>
    
    <form id="myForm" method="POST" action="{{ route('back.carseconds.update', [$carsecond->id]) }}" enctype="multipart/form-data">
        @csrf
        <div class="container mt-4">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="row">
                            <div id="myToolTip" class="col">Carsecond modificare</div>

                            <div class="col fs-5 text-end">
                                <img src="{{ asset('img/icons/check.png') }}" />
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        
						 <div class="row mb-2">
							 <label for="nr_identificare" class="col-md-2 col-form-label">Nr_identificare :</label>

							 <div class="col-md-3">
								 <input autocomplete="on" id="nr_identificare" name="nr_identificare" type="text" 
									 class="form-control @error('nr_identificare') is-invalid @enderror" 
									 value="{{ old('nr_identificare') ? old('nr_identificare') : $carsecond->nr_identificare }}" >

								 @error('nr_identificare')
									 <span class="invalid-feedback" role="alert">{{ $message }}</span>
								 @enderror
							 </div>
						 </div>
						 <div class="row mb-2">
							 <label for="are_gps" class="col-md-2 col-form-label">Are_gps :</label>

							 <div class="col-md-3">
								 <input autocomplete="on" id="are_gps" name="are_gps" type="text" 
									 class="form-control @error('are_gps') is-invalid @enderror" 
									 value="{{ old('are_gps') ? old('are_gps') : $carsecond->are_gps }}" >

								 @error('are_gps')
									 <span class="invalid-feedback" role="alert">{{ $message }}</span>
								 @enderror
							 </div>
						 </div>
						 <div class="row mb-2">
							 <label for="recep_auto" class="col-md-2 col-form-label">Recep_auto :</label>

							 <div class="col-md-3">
								 <input autocomplete="on" id="recep_auto" name="recep_auto" type="text" 
									 class="form-control @error('recep_auto') is-invalid @enderror" 
									 value="{{ old('recep_auto') ? old('recep_auto') : $carsecond->recep_auto }}" >

								 @error('recep_auto')
									 <span class="invalid-feedback" role="alert">{{ $message }}</span>
								 @enderror
							 </div>
						 </div>
						 <div class="row mb-2">
							 <label for="an_fabr" class="col-md-2 col-form-label">An_fabr :</label>

							 <div class="col-md-3">
								 <input autocomplete="on" id="an_fabr" name="an_fabr" type="text" 
									 class="form-control @error('an_fabr') is-invalid @enderror" 
									 value="{{ old('an_fabr') ? old('an_fabr') : $carsecond->an_fabr }}" >

								 @error('an_fabr')
									 <span class="invalid-feedback" role="alert">{{ $message }}</span>
								 @enderror
							 </div>
						 </div>
						 <div class="row mb-2">
							 <label for="poluare" class="col-md-2 col-form-label">Poluare :</label>

							 <div class="col-md-3">
								 <input autocomplete="on" id="poluare" name="poluare" type="text" 
									 class="form-control @error('poluare') is-invalid @enderror" 
									 value="{{ old('poluare') ? old('poluare') : $carsecond->poluare }}" >

								 @error('poluare')
									 <span class="invalid-feedback" role="alert">{{ $message }}</span>
								 @enderror
							 </div>
						 </div>
						 <div class="row mb-2">
							 <label for="p_kw" class="col-md-2 col-form-label">P_kw :</label>

							 <div class="col-md-3">
								 <input autocomplete="on" id="p_kw" name="p_kw" type="text" 
									 class="form-control @error('p_kw') is-invalid @enderror" 
									 value="{{ old('p_kw') ? old('p_kw') : $carsecond->p_kw }}" >

								 @error('p_kw')
									 <span class="invalid-feedback" role="alert">{{ $message }}</span>
								 @enderror
							 </div>
						 </div>
						 <div class="row mb-2">
							 <label for="mtma" class="col-md-2 col-form-label">Mtma :</label>

							 <div class="col-md-3">
								 <input autocomplete="on" id="mtma" name="mtma" type="text" 
									 class="form-control @error('mtma') is-invalid @enderror" 
									 value="{{ old('mtma') ? old('mtma') : $carsecond->mtma }}" >

								 @error('mtma')
									 <span class="invalid-feedback" role="alert">{{ $message }}</span>
								 @enderror
							 </div>
						 </div>
						 <div class="row mb-2">
							 <label for="cap_cyl" class="col-md-2 col-form-label">Cap_cyl :</label>

							 <div class="col-md-3">
								 <input autocomplete="on" id="cap_cyl" name="cap_cyl" type="text" 
									 class="form-control @error('cap_cyl') is-invalid @enderror" 
									 value="{{ old('cap_cyl') ? old('cap_cyl') : $carsecond->cap_cyl }}" >

								 @error('cap_cyl')
									 <span class="invalid-feedback" role="alert">{{ $message }}</span>
								 @enderror
							 </div>
						 </div>
						 <div class="row mb-2">
							 <label for="cap_rez" class="col-md-2 col-form-label">Cap_rez :</label>

							 <div class="col-md-3">
								 <input autocomplete="on" id="cap_rez" name="cap_rez" type="text" 
									 class="form-control @error('cap_rez') is-invalid @enderror" 
									 value="{{ old('cap_rez') ? old('cap_rez') : $carsecond->cap_rez }}" >

								 @error('cap_rez')
									 <span class="invalid-feedback" role="alert">{{ $message }}</span>
								 @enderror
							 </div>
						 </div>
						 <div class="row mb-2">
							 <label for="auto_inloc" class="col-md-2 col-form-label">Auto_inloc :</label>

							 <div class="col-md-3">
								 <input autocomplete="on" id="auto_inloc" name="auto_inloc" type="text" 
									 class="form-control @error('auto_inloc') is-invalid @enderror" 
									 value="{{ old('auto_inloc') ? old('auto_inloc') : $carsecond->auto_inloc }}" >

								 @error('auto_inloc')
									 <span class="invalid-feedback" role="alert">{{ $message }}</span>
								 @enderror
							 </div>
						 </div>
						 <div class="row mb-2">
							 <label for="km_contract" class="col-md-2 col-form-label">Km_contract :</label>

							 <div class="col-md-3">
								 <input autocomplete="on" id="km_contract" name="km_contract" type="text" 
									 class="form-control @error('km_contract') is-invalid @enderror" 
									 value="{{ old('km_contract') ? old('km_contract') : $carsecond->km_contract }}" >

								 @error('km_contract')
									 <span class="invalid-feedback" role="alert">{{ $message }}</span>
								 @enderror
							 </div>
						 </div>
						 <div class="row mb-2">
							 <label for="caroseria" class="col-md-2 col-form-label">Caroseria :</label>

							 <div class="col-md-3">
								 <input autocomplete="on" id="caroseria" name="caroseria" type="text" 
									 class="form-control @error('caroseria') is-invalid @enderror" 
									 value="{{ old('caroseria') ? old('caroseria') : $carsecond->caroseria }}" >

								 @error('caroseria')
									 <span class="invalid-feedback" role="alert">{{ $message }}</span>
								 @enderror
							 </div>
						 </div>
						 <div class="row mb-2">
							 <label for="car_id" class="col-md-2 col-form-label">Car_id :</label>

							 <div class="col-md-3">
								 <input autocomplete="on" id="car_id" name="car_id" type="text" 
									 class="form-control @error('car_id') is-invalid @enderror" 
									 value="{{ old('car_id') ? old('car_id') : $carsecond->car_id }}" >

								 @error('car_id')
									 <span class="invalid-feedback" role="alert">{{ $message }}</span>
								 @enderror
							 </div>
						 </div>
						 <div class="row mb-2">
							 <label for="frame_id" class="col-md-2 col-form-label">Frame_id :</label>

							 <div class="col-md-3">
								 <input autocomplete="on" id="frame_id" name="frame_id" type="text" 
									 class="form-control @error('frame_id') is-invalid @enderror" 
									 value="{{ old('frame_id') ? old('frame_id') : $carsecond->frame_id }}" >

								 @error('frame_id')
									 <span class="invalid-feedback" role="alert">{{ $message }}</span>
								 @enderror
							 </div>
						 </div>

                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <a class="btn btn-secondary text-white btn-sm" href="{{ route('back.carseconds.index') }}"
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
