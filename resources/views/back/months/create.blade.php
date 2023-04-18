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
                        {{-- <div class="row mb-2">
                            <label for="select" class="col-md-2 col-form-label">Data raportarii :</label>

                            <div class="col-md-3">
                                <input data-provide="datepicker" data-date-format="yyyy-mm-dd" autocomplete="on" id="select" name="select" type="text"
                                    class="datepicker form-control @error('select') is-invalid @enderror"
                                    value="{{ old('select')}}">

                                @error('select')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div> --}}
                        <div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
                            <input class="span2" size="16" type="text" value="12-02-2012">
                            <span class="add-on"><i class="icon-th"></i></span>
                          </div>

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
var startDate = new Date(2012,1,20);
var endDate = new Date(2012,1,25);
$('#date-start')
    .datepicker()
    .on('changeDate', function(ev){
        if (ev.date.valueOf() > endDate.valueOf()){
            $('#alert').show().find('strong').text('The start date must be before the end date.');
        } else {
            $('#alert').hide();
            startDate = new Date(ev.date);
            $('#date-start-display').text($('#date-start').data('date'));
        }
        $('#date-start').datepicker('hide');
    });
$('#date-end')
    .datepicker()
    .on('changeDate', function(ev){
        if (ev.date.valueOf() < startDate.valueOf()){
            $('#alert').show().find('strong').text('The end date must be after the start date.');
        } else {
            $('#alert').hide();
            endDate = new Date(ev.date);
            $('#date-end-display').text($('#date-end').data('date'));
        }
        $('#date-end').datepicker('hide');
    });
    jQuery(document).ready(function ($) {
        $('#name').focus();
        $('#my-nav-bar').addClass('d-none');//ascunde bara de navigare cand sunt pe create car
        $('#datepicker').datepicker('show');    });
    </script>
@endsection
