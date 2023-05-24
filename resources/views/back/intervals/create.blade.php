@extends('layouts.back')

@section('title')
    &vert; Intervale
@endsection

@section('content')
    <?php
    ?>
    <form id="myForm" method="POST" action="{{ route('back.intervals.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="container mt-4">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="row">
                            <div id="myToolTip" class="col">Intervale adaugare</div>

                            <div class="col fs-5 text-end">
                                <img src="{{ asset('img/icons/task.png') }}" />
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row mb-2">
                            <label for="month_id" class="col-md-2 col-form-label">Luna :</label>

                            <div class="col-md-4">
                                <select name="month_id" id="month_select" data-deptid="1" data-userid="1"  class="form-select">
                                    <option value="">Alege ...</option>
                                    @foreach ($months as $month)
                                        <option {{ old('month_id') ==  $month['id']  ? "selected" : "" }}  value="{{ $month['id'] }}">{{ $month['anul_luna'] }}</option>
                                    @endforeach
                                </select>
                                @error('month_id')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="data_inceput" class="col-md-2 col-form-label">Data inceput :</label>

                            <div class="col-md-3">
                                <input autocomplete="on" id="data_inceput" name="data_inceput" type="text"
                                    class="datepicker form-control @error('data_inceput') is-invalid @enderror"
                                    value="{{ old('data_inceput')}}">

                                @error('data_inceput')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="data_sfarsit" class="col-md-2 col-form-label">Data sfarsit :</label>

                            <div class="col-md-3">
                                <input autocomplete="on" id="data_sfarsit" name="data_sfarsit" type="text"
                                    class="datepicker form-control @error('data_sfarsit') is-invalid @enderror"
                                    value="{{ old('data_sfarsit')}}">

                                @error('data_sfarsit')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="interval" class="col-md-2 col-form-label">Interval :</label>

                            <div class="col-md-3">
                                <input autocomplete="on" id="interval" name="interval" type="text"
                                    class="form-control @error('interval') is-invalid @enderror"
                                    value="{{ old('interval')}}">

                                @error('interval')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="select" class="col-md-2 col-form-label">Selectat :</label>
    
                            <div class="col-md-3">
                                <select name="select" id="select_select" class="form-select">
                                    <option value="">Alege ...</option>
                                    <option  {{ old('select') == "1"? "selected" : "" }}  value="1">Da</option>
                                    <option  {{ old('select') == "0"? "selected" : "" }}  value="0">Nu</option>
                                </select>
                            </div>
                        </div>      

                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <a class="btn btn-secondary text-white btn-sm" href="{{ route('back.intervals.index') }}"
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
    jQuery(document).ready(function ($) {
        $('#name').focus();
        $('#my-nav-bar').addClass('d-none');//ascunde bara de navigare cand sunt pe create car
        $(".datepicker").datepicker({
                dateFormat: 'yy-mm-dd',
                // changeMonth: true,
                // changeYear: true
            });
            
            function dateChange(e){
            const data = $(e).val();
            const v = data.split('-');
            //console.log(v[1]);
            $('#anul_luna').val(  luni[Number(v[1])-1] +  ' ' + v[0]);
        }
        });
    </script>
@endsection
