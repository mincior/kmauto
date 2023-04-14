@extends('layouts.back')

@section('title')
&vert; Customer
@endsection

@section('content')
<?php
    $users = @\App\Http\Controllers\Back\DepartmentController::getUsers(old('department_id'));
    $types = @\App\Models\Brand::with('types')->where('id', '=', (old('brand_id')))->get()[0]['types'];
?>
<form id="myForm" method="POST" action="{{ route('back.cars.store') }}" enctype="multipart/form-data" >
    @csrf
    <div class="container mt-4">
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
                            <input autocomplete="on" id="numar" name="numar" type="text" class="form-control @error('numar') is-invalid @enderror" value="{{ old('numar') ? old('numar') : $car->numar }}" onkeyup="prelucrare_numar_masina(this);">

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
                                    <option {{ old('department_id') ==  $department['id']  ? "selected" : "" }}  value="{{ $department['id'] }}">{{ $department['name'] }}</option>
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
                                @if (old('department_id')){
                                    @foreach ($users as $user)
                                        <option {{ old('user_id') == $user['id']? "selected" : "" }}  value="{{ $user['id'] }}">{{ $user['name'] }}</option>
                                    @endforeach
                                }
                                @endif
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
                                <option  {{ old('brand_id') ==  $brand['id']  ? "selected" : "" }} value="{{ $brand['id'] }}">{{ $brand['name'] }}</option>
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
                                @if (old('brand_id')){
                                    @foreach ($types as $type)
                                        <option {{ old('type_id') == $type['id']? "selected" : "" }}  value="{{ $type['id'] }}">{{ $type['name'] }}</option>
                                    @endforeach
                                }
                                @endif
                            </select>
                            @error('type_id')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label for="consum_mediu" class="col-md-2 col-form-label">Consum mediu :</label>

                        <div class="col-md-2 autocomplete">
                            <input id="consum_mediu" name="consum_mediu" type="text" class="form-control @error('consum_mediu') is-invalid @enderror" value="{{ old('consum_mediu') }}" onclick="autocomplete()">
    
                            @error('consum_mediu')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                                    
                    <div class="row mb-2">
                        <label for="carburant" class="col-md-2 col-form-label">Carburant :</label>

                        <div class="col-md-3">
                            <select name="carburant" id="carburant_select" class="form-select" style="width:auto">
                                <option value="">Alege ...</option>
                                <option   {{ old('carburant') == "benzina" ? "selected" : "" }}  value="benzina">Benzina</option>
                                <option   {{ old('carburant') == "motorina"? "selected" : "" }}  value="motorina">Motorina</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="activ" class="col-md-2 col-form-label">Activ :</label>

                        <div class="col-md-3">
                            <select name="activ" id="activ_select" class="form-select">
                                <option value="">Alege ...</option>
                                <option  {{ old('activ') == "1"? "selected" : "" }}  value="1">Da</option>
                                <option  {{ old('activ') == "0"? "selected" : "" }}  value="0">Nu</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="observatii" class="col-md-2 col-form-label">Observatii :</label>

                        <div class="col-md-3">
                            <input autocomplete="on" id="observatii" name="observatii" type="text" class="form-control @error('observatii') is-invalid @enderror" value="{{ old('observatii') }}" onkeyup="prelucrare_observatii_masina(this);">

                            @error('observatii')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
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

    </div>
      

</form>
@endsection

@section('scripts')
<script src="{{ asset('js/me/get_department_users.js') }}"></script>
<script src="{{ asset('js/me/get_brand_types.js') }}"></script>
<script src="{{ asset('js/me/create_or_update_car.js') }}"></script>
<script>
</script>
@endsection
