@extends('layouts.back')

@section('title')
    &vert; Tipuri combustibil
@endsection

@section('content')
    <?php
    ?>
    <form id="myForm" method="POST" action="{{ route('back.fuels.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="container mt-4">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="row">
                            <div id="myToolTip" class="col">Tipuri combustibili - adaugare</div>

                            <div class="col fs-5 text-end">
                                <img src="{{ asset('img/icons/car.png') }}" />
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row mb-2">
                            <label for="name" class="col-md-2 col-form-label">Nume :</label>

                            <div class="col-md-3">
                                <input autocomplete="on" id="name" name="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name')}}">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>



                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <a class="btn btn-secondary text-white btn-sm" href="{{ route('back.fuels.index') }}"
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
    });
    </script>
@endsection
