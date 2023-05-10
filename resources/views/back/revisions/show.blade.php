@extends('layouts.back')

@section('title')
    &vert; Revisions
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
                        <div id="myToolTip" class="col">Revisions</div>

                        <div class="col fs-5 text-end">
                            <img src="{{ asset('img/icons/check.png') }}" />
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    
					 <div class="row mb-2">
						 <label for="data" class="col-md-2 col-form-label">Data :</label>

						 <div class="col-md-8">
							 <input id="data" name="data" type="text" readonly class="form-control-plaintext"
								 value="{{ $revision->data }}">
						 </div>
					 </div>
					 <div class="row mb-2">
						 <label for="km" class="col-md-2 col-form-label">Km :</label>

						 <div class="col-md-8">
							 <input id="km" name="km" type="text" readonly class="form-control-plaintext"
								 value="{{ $revision->km }}">
						 </div>
					 </div>
					 <div class="row mb-2">
						 <label for="car_id" class="col-md-2 col-form-label">Car_id :</label>

						 <div class="col-md-8">
							 <input id="car_id" name="car_id" type="text" readonly class="form-control-plaintext"
								 value="{{ $revision->car_id }}">
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
