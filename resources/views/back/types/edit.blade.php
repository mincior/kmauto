@extends('layouts.back')

@section('title')
&vert; Masini marca
@endsection

@section('content')
<?php
    //folosite la memorarea introducerii la eroare pentru a nu introduce din nou aceleasi valori
    $old_users = @\App\Http\Controllers\Back\DepartmentController::getUsers(old('department_id'));
    $old_types = @\App\Models\Brand::with('types')->where('id', '=', (old('type_id')))->get()[0]['types'];
?>
<form id="myForm" method="POST" action="{{ route('back.types.update', [$type->id])  }}" enctype="multipart/form-data" wire:submit.prevent="savePersonalData" onkeydown="return event.key != 'Enter';">
    @csrf
    @method('PUT')
    <div class="container mt-4">
        <div class="col">
            <div class="typed mb-3">
                <div class="typed-header">
                    <div class="row">
                        <div id="myToolTip" class="col">Masini - modificare model, marca: {{  $type->brand->name }}</div>

                        <div class="col fs-5 text-end">
                            <img src="{{ asset('img/icons/car.png') }}" />
                        </div>
                    </div>
                </div>

                <div class="typed-body">

                    <div class="row mb-2">
                        <label for="name" class="col-md-2 col-form-label"> Model</label>

                        <div class="col-md-3">
                            <input autocomplete="on" id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') ? old('name') : $type->name }}">

                            @error('name')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>



                <div class="typed-footer">
                    <div class="row">
                        <div class="col">
                            <a class="btn btn-secondary text-white btn-sm" href="{{ route('back.types.index') }}" role=" button" tabindex="-1">
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
    <script>
    jQuery(document).ready(function ($) {
        $('#name').focus();
        $('#my-nav-bar').addClass('d-none');//ascunde bara de navigare cand sunt pe create car
    });
    </script>
@endsection

