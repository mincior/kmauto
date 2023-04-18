@extends('layouts.back')

@section('title')
    &vert; Luni
@endsection

@section('content')
    <?php
    ?>
    <form id="myForm" method="POST" action="{{ route('back.months.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="container mt-4">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="row">
                            <div id="myToolTip" class="col">Luni adaugare</div>

                            <div class="col fs-5 text-end">
                                <img src="{{ asset('img/icons/move.png') }}" />
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row mb-2">
                            <label for="select" class="col-md-2 col-form-label">Data raportarii :</label>

                            <div class="col-md-3">
                                <input data-provide="datepicker" data-date-format="yyyy-mm-dd" autocomplete="on" id="select" name="select" type="text"
                                    class="datepicker form-control @error('select') is-invalid @enderror"
                                    value="{{ old('select')}}">

                                @error('select')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="selectTime" class="col-md-2 col-form-label">ora :</label>

                            <div class="col-md-3">
                                <input autocomplete="on"  name="selectTime" type="time"
                                    class="form-control @error('select') is-invalid @enderror"
                                    value="{{ old('select')}}">

                                @error('select')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        {{-- <label for="appt">Choose a time for your meeting:</label>

                        <input type="time" id="appt" name="appt"
                               min="09:00" max="18:00" required>
                        
                        <small>Office hours are 9am to 6pm</small> --}}
                        

                        <div class="row mb-2">
                            <label for="anul_luna" class="col-md-2 col-form-label">Anul - luna :</label>

                            <div class="col-md-3">
                                <input autocomplete="on" id="anul_luna" name="anul_luna" type="text"
                                    class="form-control @error('anul_luna') is-invalid @enderror"
                                    value="{{ old('anul_luna')}}">

                                @error('anul_luna')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="select" class="col-md-2 col-form-label">Selectata :</label>
    
                            <div class="col-md-3">
                                <select name="select" id="select_select" class="form-select">
                                    <option value="">Alege ...</option>
                                    <option  {{ old('select') == "1"? "selected" : "" }}  value="1">Da</option>
                                    <option  {{ old('select') == "0"? "selected" : "" }}  value="0">Nu</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="inchisa" class="col-md-2 col-form-label">Inchisa :</label>
    
                            <div class="col-md-3">
                                <select name="inchisa" id="inchisa_select" class="form-select">
                                    <option value="">Alege ...</option>
                                    <option  {{ old('inchisa') == "1"? "selected" : "" }}  value="1">Da</option>
                                    <option  {{ old('inchisa') == "0"? "selected" : "" }}  value="0">Nu</option>
                                </select>
                            </div>
                        </div>
        
                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <a class="btn btn-secondary text-white btn-sm" href="{{ route('back.months.index') }}"
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
        });
    </script>
@endsection
