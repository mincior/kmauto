@extends('layouts.back')

@section('title')
    &vert; Logs
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
                        <div id="myToolTip" class="col">Logs</div>

                        <div class="col fs-5 text-end">
                            <img src="{{ asset('img/icons/check.png') }}" />
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    
						<div class="row mb-2">
							<label for="operatie" class="col-md-2 col-form-label">Operatie :</label>

							<div class="col-md-8">
								<input id="operatie" name="operatie" type="text" readonly class="form-control-plaintext"
									value="{{ $log->operatie }}">
							</div>
						</div>
						<div class="row mb-2">
							<label for="descriere" class="col-md-2 col-form-label">Descriere :</label>

							<div class="col-md-8">
								<input id="descriere" name="descriere" type="text" readonly class="form-control-plaintext"
									value="{{ $log->descriere }}">
							</div>
						</div>
						<div class="row mb-2">
							<label for="data" class="col-md-2 col-form-label">Data :</label>
								<textarea id="data" name="data"  rows="20" cols="120">{{ str_replace(',','',str_replace('}','',str_replace('{', '', str_replace('"', '',$log->data))))}}</textarea>

							<div class="col-md-8">
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
