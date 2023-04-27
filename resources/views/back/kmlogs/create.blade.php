@extends('layouts.back')

@section('title')
    &vert; Km log
@endsection

@section('content')
    <?php
    $k=0;
    if (old('department_id')) {
        $users = @\App\Http\Controllers\Back\DepartmentController::getUsers(old('department_id'));
        $cars = @\App\Http\Controllers\Back\DepartmentController::getCars(old('department_id'));
    } else {
        $users = @\App\Http\Controllers\Back\DepartmentController::getUsers($department_id);
        $cars = @\App\Http\Controllers\Back\DepartmentController::getCars($department_id);
    }
    //  dd($cars);
    ?>
    <form id="myForm" method="POST" action="{{ route('back.kmlogs.store') }}" enctype="multipart/form-data"
        onsubmit="return validateForm()">
        @csrf
        <div class="container mt-4">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="row">
                            <div id="myToolTip" class="col">Km log - adaugare</div>

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
                                    class="form-control @error('km') is-invalid @enderror" value="{{ old('km') }}"
                                    placeholder="ultim:{{ $idx_ant_max . '  : Referinta - ' . $idx_crt_min }}">

                                @error('km')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="stat_id" class="col-md-2 col-form-label">Status</label>

                            <div class="col-md-4">
                                <select name="stat_id" id="stat_select" data-deptid="1" data-userid="1" data-carid="1"
                                    class="form-select @error('stat_id') is-invalid @enderror">
                                    <option value="">Alege ...</option>
                                    @if ($idx_crt_min){
                                        @foreach ($stats as $stat)
                                            {{$k++;}}
                                            @if($k>1){
                                                <option {{ old('stat_id') == $stat->id ? 'selected' : '' }} value="{{ $stat->id }}">{{ $stat['name'] }}</option>
                                                }
                                            @endif
                                        @endforeach
                                        }
                                    @else{
                                        <option selected value="1">Referinta</option>
                                    }
                                    @endif
                                </select>
                                @error('stat_id')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="picture" class="col-md-2 col-form-label">Poza bord</label>
                            <div class="col-md-8">
                                <img id="my_picture" class="img-fluid">
                            </div>

                            <div class="col-md-3">
                                <input autocomplete="on" id="picture" name="picture" type="file"
                                    class="form-control @error('picture') is-invalid @enderror"
                                    value="{{ old('picture') }}">

                                @error('picture')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="observatii" class="col-md-2 col-form-label">Observatii</label>

                            <div class="col-md-5">
                                <input autocomplete="on" id="observatii" name="observatii" type="text"
                                    class="form-control @error('observatii') is-invalid @enderror"
                                    value="{{ old('observatii') }}">

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

    <script>
        jQuery(document).ready(function($) {
            $('#name').focus();
            $('#my-nav-bar').addClass('d-none'); //ascunde bara de navigare cand sunt pe create car
            $('#picture').change(function() {
                const file = this.files[0];
                console.log(file);
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function(event) {
                        console.log(event.target.result);
                        $('#my_picture').attr('src', event.target.result);
                    }
                    reader.readAsDataURL(file);
                }
            });

        });

        function validateForm() {
            let km = $('#km').val();
            let idx_ant_max = "{{ $idx_ant_max }}";
            if (km < idx_ant_max) {
                alert("Nu puteti introduce un index mai mic decat ati introdus ultima data (" + idx_ant_max + ")");
                return false;
            }
            return true;
        }
    </script>
@endsection
