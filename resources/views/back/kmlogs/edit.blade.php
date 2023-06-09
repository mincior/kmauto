@extends('layouts.back')

@section('title')
    &vert; Km log
@endsection

@section('content')
    <?php
    
    ?>
    <form id="myForm" method="POST" action="{{ route('back.kmlogs.update', $kmlog->id) }}" enctype="multipart/form-data" 
        onsubmit="return validateForm()">
        @csrf
        @method('PUT')
        <div class="container mt-4">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="row">
                            <div id="myToolTip" class="col-md-10">Km log - modificare: 
                                <span style="color:blue">{{$department_name}} </span> - 
                                <span style="color:red">{{$car_number}}</span> - 
                                <span style="color:rgb(62, 107, 139)">{{$user_name}}</span>. Valori posibile intre: {{ $idx_ant_max . ' si ' . $idx_post_min }}
                             </div>
                             <input type="hidden" name="car_id" value="{{$car_id}}" class="form-control">
                             <input type="hidden" name="user_id" value="{{$user_id}}" class="form-control">
                             <input type="hidden" name="department_id" value="{{$department_id}}" class="form-control">

                            <div class="col-md-2 text-end">
                                <img src="{{ asset('img/buttons/delivery-030.png') }}" />
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row mb-2">
                            <label for="stat_id" class="col-md-2 col-form-label">Status</label>

                            <div class="col-md-4">
                                <select name="stat_id" id="stat_select" data-deptid="1" data-userid="1" data-carid="1"
                                    class="form-select">
                                    <option value="">Alege ...</option>
                                    @foreach ($stats as $stat)
                                        <option
                                            {{ (old('stat_id') ? old('stat_id') == $stat->id : $kmlog->stat_id == $stat->id) ? 'selected' : '' }}
                                            value="{{ $stat['id'] }}">{{ $stat['name'] }}</option>
                                    @endforeach
                                </select>
                                @error('stat_id')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="km" class="col-md-2 col-form-label">Km - index</label>

                            <div class="col-md-5">
                                <input autocomplete="on" id="km" name="km" type="text"
                                    class="form-control @error('km') is-invalid @enderror"
                                    value="{{ old('km') ? old('km') : (($idx_crt_max == 99999999) ? '' : $idx_crt_max) }}"
                                    placeholder="valori posibile intre: {{ $idx_ant_max . ' si ' . $idx_post_min }}">

                                @error('km')
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

                        <div class="row mb-2">
                            <label for="picture" class="col-md-2 col-form-label">Poza bord</label>
                            <div class="col-md-8">
                                <img id="my_picture" class="img-fluid" src="/storage/pictures{{ $kmlog->picture }}">
                            </div>

                            <div class="input-group  custom-file-button col-md-3">
                                <label class="input-group-text" for="picture">Selectati poza</label>
                                <input autocomplete="on" id="picture" name="picture" type="file"
                                    class="form-control @error('picture') is-invalid @enderror"
                                    value="{{ old('picture') }}">

                                @error('picture')
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
<style>
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

    <script src="{{ asset('js/me/get_department_cars_and_users.js') }}"></script>
    <script>
        jQuery(document).ready(function($) {
            $('#km').focus();
            $('#my-nav-bar').addClass('d-none'); //ascunde bara de navigare cand sunt pe create car
            $('#picture').change(function() {
                const file = this.files[0];
                //console.log(file);
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function(event) {
                        //console.log(event.target.result);
                        $('#my_picture').attr('src', event.target.result);
                    }
                    reader.readAsDataURL(file);
                }
            });
        });

        function validateForm() {
            let km = $('#km').val();
            let idx_crt_min = parseInt("{{ $idx_crt_min }}", 10);
            let status = $('#stat_select option:selected').text();
            if (km < idx_crt_min && status !='Normal') {
                alert("Ati introdus un index mai mic decat ati introdus ultima data (" + idx_crt_min + "). Aveti grija la status: indexul cel mai mic trebuie sa fie 'Normal'" );
            }
            return true;
        }

    </script>
@endsection
