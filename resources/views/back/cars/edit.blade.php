@extends('layouts.back')

@section('title')
&vert; Masini 
@endsection

@section('content')
<?php
    //folosite la memorarea introducerii la eroare pentru a nu introduce din nou aceleasi valori
    $old_users = @\App\Http\Controllers\Back\DepartmentController::getUsers(old('department_id'));
    $old_types = @\App\Models\Brand::with('types')->where('id', '=', (old('brand_id')))->get()[0]['types'];
    $source_name = substr($edit_source, strripos($edit_source, '/') + 1);//daca este 'kmlogs' inactiveaza selectul filiale
    $permite_selectare_filiala = ($source_name=='kmlogs') ? "disabled" : "";
?>
<form id="myForm" method="POST" action="{{ route('back.cars.update', [$car->id])  }}" enctype="multipart/form-data" wire:submit.prevent="savePersonalData" onkeydown="return event.key != 'Enter';">
    @csrf
    @method('PUT')
    {{-- transmite sursa catre controller / update pentru a face redirect la cel care a trimis la editare --}}
    <input type="hidden" name ="edit_source" value ="{{$edit_source}}">
    @if($source_name=='kmlogs')
        <input type="hidden" name ="department_id" value ="{{$dep_id}}">
    @endif
    <div class="container mt-4">
        <div class="col">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="row">
                        <div id="myToolTip" class="col">Masini - modificare</div>

                        <div class="col fs-5 text-end">
                            <img src="{{ asset('img/icons/car.png') }}" />
                        </div>
                    </div>
                </div>

                <div class="card-body">

                    <div class="row mb-2">
                        <label for="numar" class="col-md-2 col-form-label">Numar :</label>

                        <div class="col-md-3">
                            <input autocomplete="on" id="numar" name="numar" type="text" 
                                class="form-control @error('numar') is-invalid @enderror" 
                                value="{{ old('numar') ? old('numar') : $car->numar }}" onkeyup="prelucrare_numar_masina(this);">

                            @error('numar')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="row mb-2">
                        <label for="department_id" class="col-md-2 col-form-label">Filiala :</label>

                        <div class="col-md-4">
                            <select name="department_id" id="department_select" data-deptid="1" data-userid="1"  class="form-select" {{$permite_selectare_filiala}}>
                                <option value="">Alege ...</option>
                                @foreach ($departments as $department)
                                    <option {{ (old('department_id') ? (old('department_id') ==  $department->id) : ($dep_id == $department->id))  ? "selected" : "" }}  value="{{ $department->id }}">{{ $department->name }}</option>
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
                                    @foreach ($old_users as $user)
                                        <option style="color: {{$user->culoare}} " data-color=" {{$user->culoare}} " {{ old('user_id') == $user->id? "selected" : "" }}  value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                }
                                @else{
                                    @if($users){
                                        @foreach ($users as $user)
                                            <option style="color: {{$user->culoare}} " data-color=" {{$user->culoare}} " {{ $usr_id == $user->id? "selected" : "" }}  value=" {{ $user->id}} ">{{ $user->name }}</option>
                                        @endforeach
                                    }
                                    @endif
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
                                <option  {{ ((old('brand_id') ==  $brand->id) || ($car->brand_id ==$brand->id))  ? "selected" : "" }} value="{{ $brand->id }}">{{ $brand->name }}</option>
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
                                    @foreach ($old_types as $type)
                                        <option {{ old('type_id') == $type->id? "selected" : "" }}  value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach
                                }
                                @else{
                                    @foreach ($types as $type)
                                        <option {{ $car->type_id == $type->id? "selected" : "" }}  value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach
                                    
                                }
                                @endif
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
                            <input id="consum_mediu" name="consum_mediu" type="text" class="form-control @error('consum_mediu') is-invalid @enderror" value="{{ old('consum_mediu') ? old('consum_mediu') : $consum_mediu}}">

                            @error('consum_mediu')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- <div class="col col-md-1">
                            <button id="save_car_consumption" class="btn btn-primary text-white btn-sm" tabindex="-1" onclick="event.preventDefault(); salveazaConsumuriMedii();">Salveaza</button>
                        </div> --}}
                    </div>

                    <div class="row mb-2">
                        <label for="fuel_id" class="col-md-2 col-form-label">Combustibil :</label>

                        <div class="col-md-3">
                            <select name="fuel_id" id="fuel_select" class="form-select" data-fuelid="1" data-typeid="1">
                                <option value="">Alege ...</option>
                                @foreach ($fuels as $fuel)
                                <option  {{ ((old('fuel_id') ==  $fuel->id) || ($car->fuel_id ==$fuel->id))  ? "selected" : "" }} value="{{ $fuel->id }}">{{ $fuel->name }}</option>
                                @endforeach
                            </select>
                            @error('fuel_id')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label for="activ" class="col-md-2 col-form-label">Activ :</label>

                        <div class="col-md-3">
                            <select name="activ" id="activ_select" class="form-select">
                                <option value="">Alege ...</option>
                                <option   {{ (old('activ') ?   (old('activ') == "1") : ($activ == 1)) ? "selected" : "" }}  value="1">Da</option>
                                <option   {{ (old('activ') ?   (old('activ') == "0") : ($activ == 0)) ? "selected" : "" }}  value="0">Nu</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="row">
                        <div class="col">
                            <a class="btn btn-secondary text-white btn-sm" href="{{$edit_source}}" role=" button" tabindex="-1">
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

{{-- autocompletare casete text cu valori dintr-un array --}}
<script src="{{ asset('js/me/create_or_update_car.js') }}"></script>

@endsection
