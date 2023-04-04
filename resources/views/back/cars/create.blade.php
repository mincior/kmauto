@extends('layouts.back')

@section('title')
&vert; Customer
@endsection

@section('content')
<?php
    $selectedMonth = \App\Models\Month::where('select', 1)->first();
    $selectedInterval = \App\Models\Interval::where('month_id', $selectedMonth->id)->where('select', 1)->first();
?>
<form id="myForm" method="POST" action="{{ route('back.cars.store') }}" enctype="multipart/form-data" wire:submit.prevent="savePersonalData" onkeydown="return event.key != 'Enter';">
    @csrf
    <input type="hidden" name="selected_interval" value="{{$selectedInterval->id}}">
    <div class="row">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="row">
                        <div id="myToolTip" class="col">Masini - adaugare</div>

                        <div class="col fs-5 text-end">
                            <img src="{{ asset('img/icons/person.png') }}" />
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row mb-2">
                        <label for="numar" class="col-md-2 col-form-label">Numar :</label>

                        <div class="col-md-3">
                            <input autocomplete="on" id="numar" name="numar" type="text" class="form-control @error('numar') is-invalid @enderror" value="{{ old('numar') }}" onkeyup="prelucrare_numar_masina(this);">

                            @error('numar')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="row mb-2">
                        <label for="department_id" class="col-md-2 col-form-label">Filiala :</label>

                        <div class="col-md-4">
                            <select name="department_id" id="department_select" data-deptid="1" data-userid="1"  class="form-select">
                                <option value="">Alege ...</option>
                                @foreach ($departments as $department)
                                    <option value="{{ $department['id'] }}">{{ $department['name'] }}</option>
                                @endforeach
                            </select>
                            @error('department_id')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label for="user_id" class="col-md-2 col-form-label">Utilizatorul :</label>

                        <div class="col-md-4">
                            <select name="user_id" id="user_select" class="form-select my-select2">
                                <option value="0">Choose ...</option>
                                {{-- @foreach ($users as $user)

                                <option value="{{ $user['id'] }}">{{ $user['name'] }}</option>
                                @endforeach --}}
                            </select>
                            @error('user_id')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <hr class="narrow" />

                    <div class="row mb-2">
                        <label for="brand_id" class="col-md-2 col-form-label">Marca :</label>

                        <div class="col-md-3">
                            <select name="brand_id" id="brand_select" class="form-select" data-brandid="1" data-typeid="1">
                                <option value="">Alege ...</option>
                                @foreach ($brands as $brand)
                                <option value="{{ $brand['id'] }}">{{ $brand['name'] }}</option>
                                @endforeach
                            </select>
                            @error('brand_id')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label for="type_id" class="col-md-2 col-form-label">Model :</label>

                        <div class="col-md-3">
                            <select name="type_id" id="type_select" class="form-select">
                                <option value="">Alege ...</option>
                            </select>
                            @error('type_id')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    {{-- <div class="autocomplete" style="width:300px;">
                        <input id="myInput" type="text" name="myCountry" placeholder="Country">
                    </div> --}}

                    <div class="row mb-2">
                        <label for="consum_mediu" class="col-md-2 col-form-label">Consum mediu :</label>

                        <div class="col-md-2 autocomplete">
                            <input id="consum_mediu" name="consum_mediu" type="text" class="form-control @error('consum_mediu') is-invalid @enderror" value="{{ old('consum_mediu') }}">
    
                            @error('consum_mediu')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col col-md-1">
                            <button id="save_fuel" class="btn btn-primary text-white btn-sm" tabindex="-1" onclick="event.preventDefault(); salveazaConsumuriMedii();">Salveaza</button>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label for="carburant" class="col-md-2 col-form-label">Carburant :</label>

                        <div class="col-md-3">
                            <select name="carburant" id="carburant_select" class="form-select" style="width:auto">
                                <option value="">Alege ...</option>
                                <option value="benzina">Benzina</option>
                                <option value="motorina">Motorina</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="activ" class="col-md-2 col-form-label">Activ :</label>

                        <div class="col-md-3">
                            <select name="activ" id="activ_select" class="form-select">
                                <option value="">Alege ...</option>
                                <option value="1">Da</option>
                                <option value="0">Nu</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="row">
                        <div class="col">
                            <a class="btn btn-secondary text-white btn-sm" href="{{ route('back.cars.index') }}" role=" button" tabindex="-1">
                                <i class="bi bi-arrow-left-short"></i>
                            </a>
                        </div>

                        <div class="col text-end">
                            <button type="submit" class="btn btn-primary text-white btn-sm" tabindex="-1">Salveaza</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-12">
            <div class="card mb-3">
                <div class="card-header bg-info text-white">
                    <div class="row">
                        <div class="col">Help</div>

                        <div class="col fs-5 text-end"><i class="bi bi-question"></i></div>
                    </div>
                </div>

                <div class="card-body">
                    <ul>
                        <li>Specify the values.</li>
                        <li>Click the <strong>Send</strong> button to save.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

@section('scripts')
<script src="{{ asset('js/me/get_department_users.js') }}"></script>
<script src="{{ asset('js/me/get_brand_types.js') }}"></script>

{{-- autocompletare casete text cu valori dintr-un array --}}
<script src="{{ asset('js/me/create_car.js') }}"></script>

@endsection
