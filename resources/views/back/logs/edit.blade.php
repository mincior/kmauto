@extends('layouts.back')

@section('title')
    &vert; Logs
@endsection

@section('content')
    <?php
    /*  Php header placeholder */
    ?>
    
    <form id="myForm" method="POST" action="{{ route('back.logs.update', [$log->id]) }}" enctype="multipart/form-data"
        onsubmit="return validateForm()">
        @csrf
        @method('PUT')
        <div class="container mt-4">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="row">
                            <div id="myToolTip" class="col">Log modificare</div>

                            <div class="col fs-5 text-end">
                                <img src="{{ asset('img/icons/check.png') }}" />
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        
							<div class="row mb-2">
								<label for="operatie" class="col-md-2 col-form-label">Operatie :</label>

								<div class="col-md-4">
									<input autocomplete="on" id="operatie" name="operatie" type="text" 
										class="form-control @error('operatie') is-invalid @enderror" 
										value="{{ old('operatie') ? old('operatie') : $log->operatie }}" >

									@error('operatie')
										<span class="invalid-feedback" role="alert">{{ $message }}</span>
									@enderror
								</div>
							</div>
							<div class="row mb-2">
								<label for="descriere" class="col-md-2 col-form-label">Descriere :</label>

								<div class="col-md-4">
									<input autocomplete="on" id="descriere" name="descriere" type="text" 
										class="form-control @error('descriere') is-invalid @enderror" 
										value="{{ old('descriere') ? old('descriere') : $log->descriere }}" >

									@error('descriere')
										<span class="invalid-feedback" role="alert">{{ $message }}</span>
									@enderror
								</div>
							</div>
							<div class="row mb-2">
								<label for="data" class="col-md-2 col-form-label">Data :</label>

								<div class="col-md-4">
									<input autocomplete="on" id="data" name="data" type="text" 
										class="form-control @error('data') is-invalid @enderror" 
										value="{{ old('data') ? old('data') : $log->data }}" >

									@error('data')
										<span class="invalid-feedback" role="alert">{{ $message }}</span>
									@enderror
								</div>
							</div>
						<div class="row mb-2">
							<label for="user" class="col-md-2 col-form-label">User name :</label>

							<div class="col-md-4">
								<select name="user_id" id="users_select" class="form-select">
									<option value="0">Alege ...</option>
									<@foreach ($users as $user)
										<option {{ (old('user') ? (old('user') == $user->id) : ($log->user_id == $user->id)) ? "selected" : "" }} value="{{ $user->id }}">{{ $user->name }}</option>
									<@endforeach
								</select>
								@error('user')
									<span class="invalid-feedback" role="alert">{{ $message }}</span>
								@enderror
							</div>
						</div>

                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <a class="btn btn-secondary text-white btn-sm" href="{{ route('back.logs.index') }}"
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

    
            });
    
            function validateForm() {
                return true;
            }
        </script>
    
@endsection