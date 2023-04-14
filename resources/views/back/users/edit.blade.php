@extends('layouts.back')

@section('title')
    &vert; Utilizatori
@endsection

@section('content')
    <?php
    //folosite la memorarea introducerii la eroare pentru a nu introduce din nou aceleasi valori
    $old_cars = @\App\Models\Department::with('cars')
        ->where('id', '=', old('department_id'))
        ->get()[0]['cars'];
    ?>
    <form id="myForm" method="POST" action="{{ route('back.users.update', [$user->id]) }}" enctype="multipart/form-data"
        wire:submit.prevent="savePersonalData" onkeydown="return event.key != 'Enter';">
        @csrf
        @method('PUT')
        <input type="hidden" name="selected_interval" value="{{ $selectedInterval }}">
        <div class="container mt-4">
            <div class="col">
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="row">
                            <div id="myToolTip" class="col">Utilizatori - modificare</div>

                            <div class="col fs-5 text-end">
                                <img src="{{ asset('img/icons/person.png') }}" />
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row mb-2">
                            <label for="name" class="col-md-2 col-form-label">Nume :</label>
    
                            <div class="col-md-3">
                                <input autocomplete="on" id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') ? old('name') : $user->name }}" onkeyup="prelucrare_nume_utilizator(this);">
    
                                @error('name')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
    
                        <div class="row mb-2">
                            <label for="email" class="col-md-2 col-form-label">Email :</label>

                            <div class="col-md-3">
                                <input autocomplete="on" id="email" email="email" type="text"
                                    class="form-control @error('email') is-invalid @enderror" value="{{ old('email') ? old('email') : $user->email }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="department_id" class="col-md-2 col-form-label">Filiala :</label>

                            <div class="col-md-4">
                                <select name="department_id" id="department_select" data-deptid="1" data-userid="1"
                                    class="form-select">
                                    <option value="">Alege ...</option>
                                    @foreach ($departments as $department)
                                        <option
                                            {{ (old('department_id') ? old('department_id') == $department['id'] : $dep_id == $department['id']) ? 'selected' : '' }}
                                            value="{{ $department['id'] }}">{{ $department['name'] }}</option>
                                    @endforeach
                                </select>
                                @error('department_id')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="car_id" class="col-md-2 col-form-label">Masina :</label>

                            <div class="col-md-4">
                                <select name="car_id" id="car_select" class="form-select my-select2">
                                    <option value="0">Choose ...</option>
                                    @if (old('department_id'))
                                        {
                                        @foreach ($old_cars as $car)
                                            <option {{ old('car_id') == $car['id'] ? 'selected' : '' }}
                                                value="{{ $car['id'] }}">{{ $car['numar'] }}</option>
                                        @endforeach
                                        }
                                    @else{
                                        @foreach ($cars as $car)
                                            <option {{ $car->id == $car['id'] ? 'selected' : '' }}
                                                value="{{ $car['id'] }}">{{ $car['numar'] }}</option>
                                        @endforeach

                                        }
                                    @endif
                                </select>
                                @error('car_id')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <hr class="narrow" />
                        <div class="row mb-2">
                            <label for="telefon" class="col-md-2 col-form-label">Telefon :</label>

                            <div class="col-md-3">
                                <input autocomplete="on" id="telefon" name="telefon" type="text"
                                    class="form-control @error('telefon') is-invalid @enderror"
                                    value="{{ old('telefon') ? old('telefon') : $telefon }}">

                                @error('telefon')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="kmlimit" class="col-md-2 col-form-label">Limita km :</label>

                            <div class="col-md-3">
                                <input autocomplete="on" id="kmlimit" name="kmlimit" type="text"
                                    class="form-control @error('kmlimit') is-invalid @enderror"
                                    value="{{ old('kmlimit') ? old('kmlimit') : $kmlimit }}">

                                @error('kmlimit')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="activ" class="col-md-2 col-form-label">Activ :</label>

                            <div class="col-md-3">
                                <select name="activ" id="activ_select" class="form-select">
                                    <option value="">Alege ...</option>
                                    <option
                                        {{ (old('activ') ? old('activ') == '1' : $user->activ == 1) ? 'selected' : '' }}
                                        value="1">Da</option>
                                    <option
                                        {{ (old('activ') ? old('activ') == '0' : $user->activ == 0) ? 'selected' : '' }}
                                        value="0">Nu</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="observatii" class="col-md-2 col-form-label">Observatii :</label>

                            <div class="col-md-3">
                                <input autocomplete="on" id="observatii" observatii="observatii" type="text"
                                    class="form-control @error('observatii') is-invalid @enderror"
                                    value="{{old('observatii') ? old('observatii') : $user->observatii }}">

                                @error('observatii')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="calificativ" class="col-md-2 col-form-label">Calificativ :</label>

                            <div class="col-md-3">
                                <input autocomplete="on" id="calificativ" calificativ="calificativ" type="text"
                                    class="form-control @error('calificativ') is-invalid @enderror"
                                    value="{{ old('calificativ') ? old('calificativ') : $user->calificativ }}">

                                @error('calificativ')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="is_admin" class="col-md-2 col-form-label">Este admin :</label>

                            <div class="col-md-3">
                                <select name="is_admin" id="is_admin_select" class="form-select">
                                    <option value="">Alege ...</option>
                                    <option
                                        {{ (old('is_admin') ? old('is_admin') == '1' : $user->is_admin == 1) ? 'selected' : '' }}
                                        value="1">Da</option>
                                    <option
                                        {{ (old('is_admin') ? old('is_admin') == '0' : $user->is_admin == 0) ? 'selected' : '' }}
                                        value="0">Nu</option>
                                </select>
                            </div>
                        </div>
                    </div>



                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <a class="btn btn-secondary text-white btn-sm" href="{{ route('back.users.index') }}"
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
    <script src="{{ asset('js/me/get_department_cars.js') }}"></script>
    <script src="{{ asset('js/me/create_or_update_user.js') }}"></script>
@endsection
