@extends('layouts.back')

@section('title')
&vert; Masini
@endsection

@section('content')
<?php
//foreach ($cars as $car){
    //echo($car['department']['name']. PHP_EOL);
//}


//dd($cars[8]['department']['email']);

?>
<form method="POST" action="{{ route('back.customers.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-7">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col">Adaugare masina</div>

                        <div class="col fs-5 text-end">
                            <img src="{{ asset('img/buttons/car.png') }}" />
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="customer_last_name" class="col-md-3 col-form-label">Last name :</label>

                    <div class="col-md-8">
                        <input id="customer_last_name" name="customer_last_name" type="text" class="form-control @error('customer_last_name') is-invalid @enderror"
                            value="{{ old('customer_last_name') }}" autofocus>

                        @error('customer_last_name')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-2">
                    <label for="customer_first_name" class="col-md-3 col-form-label">First name :</label>

                    <div class="col-md-8">
                        <input id="customer_first_name" name="customer_first_name" type="text" class="form-control @error('customer_first_name') is-invalid @enderror"
                            value="{{ old('customer_first_name') }}">

                        @error('customer_first_name')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <hr class="narrow" />


                <div class="card-body">
                    <div class="row mb-4">
                        <label for="department_id" class="col-md-2 col-form-label">
                            Filiala :
                        </label>

                        <div class="col-md-3">
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

                        <label for="department_id" class="col-md-2 col-form-label">
                            Masina :
                        </label>

                        <div class="col-md-2">
                            <select name="car_id" id="car_select" class="form-select">
                                <option value="">Alege ...</option>
                            </select>
                            @error('car_id')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="brand_id" class="col-md-2 col-form-label">
                            Brand, type :
                        </label>

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

                        <div class="col-md-2">
                            <select name="type_id" id="type_select" class="form-select">
                                <option value="">Alege ...</option>
                            </select>
                            @error('type_id')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    {{-- <div class="row mb-2">
                        <label for="brand" class="col-md-3 col-form-label">Brand, type :</label>

                        <div class="col-md-4">
                            <input id="brand" name="brand" type="text" class="form-control @error('brand') is-invalid @enderror" value="{{ old('brand') }}">

                            @error('brand')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <input id="type" name="type" type="text" class="form-control @error('type') is-invalid @enderror" value="{{ old('type') }}">

                            @error('type')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                    </div> --}}
                    <hr class="narrow" />

                    <div class="row mb-2">
                        <label for="type" class="col-md-3 col-form-label">Model :</label>

                    </div>

                    <div class="row mb-2">
                        <label for="consum_mediu" class="col-md-3 col-form-label">Consum mediu :</label>

                        <div class="col-md-8">
                            <input id="consum_mediu" name="consum_mediu" type="text" class="form-control @error('consum_mediu') is-invalid @enderror" value="{{ old('consum_mediu') }}">

                            @error('consum_mediu')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <hr class="narrow" />

                    <div class="row mb-2">
                        <label for="carburant" class="col-md-3 col-form-label">Carburant :</label>

                        <div class="col-md-8">
                            <input id="carburant" name="carburant" type="text" class="form-control @error('carburant') is-invalid @enderror" value="{{ old('carburant') }}">

                            @error('carburant')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>



                    {{-- <hr class="narrow" />

                        <div class="row mb-2">
                            <label for="phone" class="col-md-3 col-form-label">Phone :</label>

                            <div class="col-md-8">
                                <div class="input-group">
                                    <input id="phone" name="phone" type="text" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}">
                    <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                </div>

                @error('phone')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="row">
            <label for="email" class="col-md-3 col-form-label">E-mail :</label>

            <div class="col-md-8">
                <div class="input-group">
                    <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                </div>

                @error('email')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>

    <div class="card-footer">
        <div class="row">
            <div class="col">
                <a class="btn btn-secondary text-white btn-sm" href="{{ route('back.customers.index') }}"" role=" button" tabindex="-1">
                    <i class="bi bi-arrow-left-short"></i>
                </a>
            </div>

            <div class="col text-end">
                <button type="submit" class="btn btn-primary text-white btn-sm" tabindex="-1">send</button>
            </div>
        </div>
    </div>
    </div>

    <div class="card mb-3">
        <div class="card-header">
            <div class="row">
                <div class="col">Delivery address</div>

                <div class="col text-center">
                    <button type="button" class="btn btn-outline-secondary btn-sm me-3" id="btnClear" name="btnClear" title="Clear delivery address" tabindex="-1">
                        <i class="bi bi-trash"></i>
                    </button>

                    <button type="button" class="btn btn-outline-secondary btn-sm" id="btnCopy" name="btnCopy" title="Copy delivery address" tabindex="-1">
                        <i class="bi bi-clipboard-plus"></i>
                    </button>
                </div>

                <div class="col fs-5 text-end">
                    <img src="{{ asset('img/icons/delivery.png') }}" />
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="row mb-2">
                <label for="delivery_address_street" class="col-md-3 col-form-label">
                    Street, number :
                </label>

                <div class="col-md-6">
                    <input id="delivery_address_street" name="delivery_address_street" type="text" class="form-control @error('delivery_address_street') is-invalid @enderror" value="{{ old('delivery_address_street') }}">

                    @error('delivery_address_street')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-2">
                    <input id="delivery_address_number" name="delivery_address_number" type="text" class="form-control @error('delivery_address_number') is-invalid @enderror" value="{{ old('delivery_address_number') }}">

                    @error('delivery_address_number')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="row mb-2">
                <label for="delivery_address_country" class="col-md-3 col-form-label">
                    Country, postal code, place :
                </label>

                <div class="col-md-2">
                    <select name="delivery_address_country" id="delivery_address_country" class="form-select">
                        <option value="">Choose ...</option>
                        @foreach ($countries as $country)
                        <option value="{{ $country->iso2 }}">{{ $country->name }}</option>
                        @endforeach
                    </select>
                    @error('delivery_address_country')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-2">
                    <input id="delivery_address_postal_code" name="delivery_address_postal_code" type="text" class="form-control @error('delivery_address_postal_code') is-invalid @enderror" value="{{ old('delivery_address_postal_code') }}">

                    @error('delivery_address_postal_code')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-4">
                    <input id="delivery_address_place" name="delivery_address_place" type="text" class="form-control @error('delivery_address_place') is-invalid @enderror" value="{{ old('delivery_address_place') }}">

                    @error('delivery_address_place')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-1">
                    <button type="button" class="btn btn-outline-secondary btn-sm" id="btnMapLevering" name="btnMapLevering" title="Show address on map" tabindex="-1">
                        <img src="{{ asset('img/icons/google-maps-location.png') }}" class="img-fluid mx-auto d-block" />
                    </button>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <small>Delivery address should only be used if different from facturation address above.</small>
        </div> --}}
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
