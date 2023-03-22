@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Masina</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('cars.index') }}"> Inapoi</a>
            </div>
        </div>
    </div>


    <div class="row">    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Numar:</strong>
                {{ $car->numar }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Filiala:</strong>
                {{ $car->department_id }}
            </div>
        </div>        

    </div>

    <p class="text-left text-primary"><small>2023@Consolihgt -  Dep Auto Petrica Ilie, Dep. IT Mincior Vicentiu, Razvan Duinea</small></p>

    @endsection

