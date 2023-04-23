@extends('layouts.back')

@section('title')
    &vert; Km log
@endsection

@section('content')
    <?php
    
    ?>
    <form id="myForm" method="POST" action="{{ route('back.kmlogs.update', $kmlog->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container mt-4">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="row">
                            <div id="myToolTip" class="col">Km log - modificare filiala: {{ $department_name }}</div>

                            <div class="col fs-5 text-end">
                                <img src="{{ asset('img/buttons/delivery-030.png') }}" />
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row mb-2">
                            <label for="km" class="col-md-2 col-form-label">Km - index</label>

                            <div class="col-md-3">
                                <input autocomplete="on" id="km" name="km" type="text"
                                    class="form-control @error('km') is-invalid @enderror"
                                    value="{{ old('km') ? old('km') : $kmlog->km }}">

                                @error('km')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="stat_id" class="col-md-2 col-form-label">Status</label>

                            <div class="col-md-4">
                                <select name="stat_id" id="stat_select" data-deptid="1" data-userid="1" data-carid="1"
                                    class="form-select">
                                    <option value="">Alege ...</option>
                                    @foreach ($stats as $stat)
                                        <option
                                            {{ (old('stat_id') ? old('stat_id') == $stat['id'] : $stat->id == $stat['id']) ? 'selected' : '' }}
                                            value="{{ $stat['id'] }}">{{ $stat['name'] }}</option>
                                    @endforeach
                                </select>
                                @error('stat_id')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="picture" class="col-md-2 col-form-label">Poza bord</label>
                            <div class="col-md-8">
                                <img id="my_picture" class="img-fluid" src="/storage/pictures{{ $kmlog->picture }}">
                            </div>

                            <div class="col-md-3">
                                <input autocomplete="on" id="picture" name="picture" type="file"
                                    class="form-control @error('picture') is-invalid @enderror"
                                    value="{{ old('picture') ? old('picture') : $kmlog->picture }}">

                                @error('picture')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="department_id" class="col-md-2 col-form-label">Filiala</label>
    
                            <div class="col-md-4">
                                <select name="department_id" id="department_select" data-deptid="1" data-userid="1"  data-carid="1"  class="form-select">
                                    <option value="">Alege ...</option>
                                    @foreach ($departments as $department)
                                        <option {{(old('department_id') ? old('department_id') == $department->id : $kmlog->department_id == $department->id) ? 'selected' : ''}} value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach
                                </select>
                                @error('department_id')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="car_id" class="col-md-2 col-form-label">Masina</label>

                            <div class="col-md-4">
                                <select name="car_id" id="car_select" data-deptid="1" data-userid="1" class="form-select">
                                    <option value="">Alege ...</option>
                                    @foreach ($cars as $car)
                                        <option
                                            {{ (old('car_id') ? old('car_id') == $car->id : $kmlog->car_id == $car->id) ? 'selected' : '' }}
                                            value="{{ $car->id }}">{{ $car->numar }}</option>
                                    @endforeach
                                </select>
                                @error('car_id')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="user_id" class="col-md-2 col-form-label">Utilizatorul</label>

                            <div class="col-md-4">
                                <select name="user_id" id="user_select" data-deptid="1" data-userid="1" class="form-select">
                                    <option value="">Alege ...</option>
                                    @foreach ($users as $user)
                                        <option
                                            {{ (old('user_id') ? old('user_id') == $user->id : $kmlog->user_id == $user->id) ? 'selected' : '' }}
                                            value="{{ $user->id }}">{{ $user['name'] }}</option>
                                    @endforeach
                                </select>
                                @error('user_id')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="observatii" class="col-md-2 col-form-label">Observatii</label>

                            <div class="col-md-5">
                                <input autocomplete="on" id="observatii" name="observatii" type="text"
                                    class="form-control @error('observatii') is-invalid @enderror"
                                    value="{{ old('observatii') ? old('observatii') : $kmlog->observatii }}">

                                @error('observatii')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>




                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <a class="btn btn-secondary text-white btn-sm" href="{{ route('back.kmlogs.index') }}"
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
    <script src="{{ asset('js/me/get_department_cars_and_users.js') }}"></script>
    <script>
        jQuery(document).ready(function($) {
            $('#name').focus();
            $('#my-nav-bar').addClass('d-none'); //ascunde bara de navigare cand sunt pe create car
            $('#picture').change(function(){
                const file = this.files[0];
                console.log (file);
                if (file){
                    let reader = new FileReader();
                    reader.onload = function(event){
                        console.log(event.target.result);
                        $('#my_picture').attr('src', event.target.result);
                    }
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
@endsection
