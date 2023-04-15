@extends('layouts.back')

@section('title')
    &vert; Filiala
@endsection
<?php
//dd($type_name, $email, $department->name, $responsabil);
?>
@section('content')
    <div class="container mt-4">
        <div class="col-12">
            <div class="departmentd mb-3">
                <div class="departmentd-header">
                    <div class="row">
                        <div class="col">Nume: </div>

                        <div class="col text-center">
                            <strong>{{ $department->id . ' : ' . $department->name }}</strong>
                        </div>

                        <div class="col fs-5 text-end">
                            <img src="{{ asset('img/icons/categorisatie.png') }}" />
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="email" class="col-md-3 col-form-label">Email :</label>

                        <div class="col-md-8">
                            <input id="email" name="email" type="text" readonly
                                class="form-control-plaintext" value="{{ $department->email }}">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="responsabil" class="col-md-3 col-form-label">Responsabil :</label>

                        <div class="col-md-8">
                            <input id="responsabil" name="responsabil" type="text" readonly class="form-control-plaintext"
                                value="{{ $department->responsabil }}">
                        </div>
                    </div>

                </div>

            </div>

            <div class="departmentd-footer">
                <div class="row">
                    <div class="col">
                        <a class="btn btn-secondary text-white btn-sm" href="{{ route('back.departments.index') }}" role=" button"
                            tabindex="-1">
                            <i class="bi bi-arrow-left-short"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        jQuery(document).ready(function($) {
            $('#my-nav-bar').addClass('d-none'); //ascunde bara de navigare cand sunt pe create department
        });
    </script>
@endsection
