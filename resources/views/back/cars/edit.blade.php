@extends('layouts.back')

@section('title')
    &vert; Customer
@endsection

@section('content')
    <form method="POST" action="{{ route('back.customers.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-7">
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">Customer - Add</div>

                            <div class="col fs-5 text-end">
                                <img src="{{ asset('img/icons/person.png') }}" />
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row mb-2">
                            <label for="department_id" class="col-md-3 col-form-label">Filiala :</label>

                            <div class="col-md-4">
                                <select name="department_id" id="department_select" class="form-select" data-deptid="1" data-carid="1">
                                    <option value="">Alege ...</option>
                                    @foreach ($departments as $department)
                                    
                                    <option value="{{ $department['id'] }}">{{ $department['name'] }}</option>
                                    @endforeach
                                </select>
                                @error('department_id')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                                </div>
                        </div>

                        <div class="row mb-2">
                            <label for="car_id" class="col-md-3 col-form-label">Masina :</label>

                            <div class="col-md-3">
                                <select name="car_id" id="car_select" class="form-select">
                                    <option value="">Alege ...</option>
                                </select>
                                @error('car_id')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                                </div>
                        </div>
                        <hr class="narrow" />

                        <div class="row mb-2">
                            <label for="brand_id" class="col-md-3 col-form-label">Marca :</label>

                            <div class="col-md-3">
                                <select name="brand_id" id="brand_select" class="form-select" data-brandid="1" data-typeid="1">
                                    <option value="">Alege ...</option>
                                    @foreach ($brands as $brand)
                                    <option value="{{ $brand['id'] }}">{{ $brand['name'] }}</option>
                                    @endforeach
                                </select>
                                @error('brand_id')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                                    </div>
                        </div>

                        <div class="row mb-2">
                            <label for="type_id" class="col-md-3 col-form-label">Model :</label>

                            <div class="col-md-3">
                                <select name="type_id" id="type_select" class="form-select">
                                    <option value="">Alege ...</option>
                                </select>
                                @error('type_id')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                                    </div>
                        </div>
                        <hr class="narrow" />


    
                        <div class="row mb-2">
                            <label for="consum_mediu" class="col-md-3 col-form-label">Consum mediu :</label>
    
                            <div class="col-md-3">
                                <input id="consum_mediu" name="consum_mediu" type="text" class="form-control @error('consum_mediu') is-invalid @enderror" value="{{ old('consum_mediu') }}">
    
                                @error('consum_mediu')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <hr class="narrow" />
    
                        <div class="row mb-2">
                            <label for="carburant" class="col-md-3 col-form-label">Carburant :</label>
    
                            <div class="col-md-3">
                                <select name="carburant" id="carburant_select" class="form-select">
                                    <option value="">Alege ...</option>
                                    <option value="1">Benzina</option>
                                    <option value="2">Motorina</option>
                                </select>
                            </div>
                        </div> 
                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <a class="btn btn-secondary text-white btn-sm" href="{{ route('back.customers.index') }}"  role=" button" tabindex="-1">
                                    <i class="bi bi-arrow-left-short"></i>
                                </a>
                            </div>

                            <div class="col text-end">
                                <button type="submit" class="btn btn-primary text-white btn-sm" tabindex="-1">send</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-5">
                <div class="card mb-3">
                    <div class="card-header bg-info text-white">
                        <div class="row">
                            <div class="col">Help</div>

                            <div class="col fs-5 text-end"><i class="bi bi-question"></i></div>
                        </div>
                    </div>

                    <div class="card-body">
                        <ul>
                            <li>Specify the values.</li>
                            <li>Click the <strong>Send</strong> button to save.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
    <script src="{{ asset('js/me/get_department_cars.js') }}"></script>
    <script src="{{ asset('js/me/get_brand_types.js') }}"></script>
@endsection
