@extends('layouts.back')

@section('title')
    &vert; Carseconds
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
                        <div id="myToolTip" class="col">Carseconds</div>

                        <div class="col fs-5 text-end">
                            <img src="{{ asset('img/icons/check.png') }}" />
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    
					 <div class="row mb-2">
						 <label for="nr_identificare" class="col-md-2 col-form-label">Nr_identificare :</label>

						 <div class="col-md-8">
							 <input id="nr_identificare" name="nr_identificare" type="text" readonly class="form-control-plaintext"
								 value="{{ $carsecond->nr_identificare }}">
						 </div>
					 </div>
					 <div class="row mb-2">
						 <label for="are_gps" class="col-md-2 col-form-label">Are_gps :</label>

						 <div class="col-md-8">
							 <input id="are_gps" name="are_gps" type="text" readonly class="form-control-plaintext"
								 value="{{ $carsecond->are_gps }}">
						 </div>
					 </div>
					 <div class="row mb-2">
						 <label for="recep_auto" class="col-md-2 col-form-label">Recep_auto :</label>

						 <div class="col-md-8">
							 <input id="recep_auto" name="recep_auto" type="text" readonly class="form-control-plaintext"
								 value="{{ $carsecond->recep_auto }}">
						 </div>
					 </div>
					 <div class="row mb-2">
						 <label for="an_fabr" class="col-md-2 col-form-label">An_fabr :</label>

						 <div class="col-md-8">
							 <input id="an_fabr" name="an_fabr" type="text" readonly class="form-control-plaintext"
								 value="{{ $carsecond->an_fabr }}">
						 </div>
					 </div>
					 <div class="row mb-2">
						 <label for="poluare" class="col-md-2 col-form-label">Poluare :</label>

						 <div class="col-md-8">
							 <input id="poluare" name="poluare" type="text" readonly class="form-control-plaintext"
								 value="{{ $carsecond->poluare }}">
						 </div>
					 </div>
					 <div class="row mb-2">
						 <label for="p_kw" class="col-md-2 col-form-label">P_kw :</label>

						 <div class="col-md-8">
							 <input id="p_kw" name="p_kw" type="text" readonly class="form-control-plaintext"
								 value="{{ $carsecond->p_kw }}">
						 </div>
					 </div>
					 <div class="row mb-2">
						 <label for="mtma" class="col-md-2 col-form-label">Mtma :</label>

						 <div class="col-md-8">
							 <input id="mtma" name="mtma" type="text" readonly class="form-control-plaintext"
								 value="{{ $carsecond->mtma }}">
						 </div>
					 </div>
					 <div class="row mb-2">
						 <label for="cap_cyl" class="col-md-2 col-form-label">Cap_cyl :</label>

						 <div class="col-md-8">
							 <input id="cap_cyl" name="cap_cyl" type="text" readonly class="form-control-plaintext"
								 value="{{ $carsecond->cap_cyl }}">
						 </div>
					 </div>
					 <div class="row mb-2">
						 <label for="cap_rez" class="col-md-2 col-form-label">Cap_rez :</label>

						 <div class="col-md-8">
							 <input id="cap_rez" name="cap_rez" type="text" readonly class="form-control-plaintext"
								 value="{{ $carsecond->cap_rez }}">
						 </div>
					 </div>
					 <div class="row mb-2">
						 <label for="auto_inloc" class="col-md-2 col-form-label">Auto_inloc :</label>

						 <div class="col-md-8">
							 <input id="auto_inloc" name="auto_inloc" type="text" readonly class="form-control-plaintext"
								 value="{{ $carsecond->auto_inloc }}">
						 </div>
					 </div>
					 <div class="row mb-2">
						 <label for="km_contract" class="col-md-2 col-form-label">Km_contract :</label>

						 <div class="col-md-8">
							 <input id="km_contract" name="km_contract" type="text" readonly class="form-control-plaintext"
								 value="{{ $carsecond->km_contract }}">
						 </div>
					 </div>
					 <div class="row mb-2">
						 <label for="car_id" class="col-md-2 col-form-label">Car_id :</label>

						 <div class="col-md-8">
							 <input id="car_id" name="car_id" type="text" readonly class="form-control-plaintext"
								 value="{{ $carsecond->car_id }}">
						 </div>
					 </div>
					 <div class="row mb-2">
						 <label for="frame_id" class="col-md-2 col-form-label">Frame_id :</label>

						 <div class="col-md-8">
							 <input id="frame_id" name="frame_id" type="text" readonly class="form-control-plaintext"
								 value="{{ $carsecond->frame_id }}">
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
