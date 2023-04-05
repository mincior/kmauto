@extends('layouts.back')

@section('title')
    &vert; Car
@endsection
<?php
//dd($type_name, $brand_name, $car->numar, $user_name);
?>
@section('content')
    <div class="row">
        <div class="col-7">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col">Masina: </div>

                        <div class="col text-center">
                            <strong>{{ $car->numar }}</strong>
                        </div>

                        <div class="col fs-5 text-end">
                            <img src="{{ asset('img/icons/person.png') }}" />
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row mb-2">
                        <label for="user_name" class="col-md-3 col-form-label">Utilizator :</label>

                        <div class="col-md-8">
                            <input id="user_name" name="user_name" type="text" readonly class="form-control-plaintext" value="{{ $user_name }}">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label for="department_name" class="col-md-3 col-form-label">Filiala :</label>

                        <div class="col-md-8">
                            <input id="department_name" name="department_name" type="text" readonly class="form-control-plaintext" value="{{ $department_name }}">
                        </div>
                    </div>
                    <hr class="narrow" />

                    <div class="row mb-2">
                        <label for="brand_name" class="col-md-3 col-form-label">Marca :</label>

                        <div class="col-md-8">
                            <input id="brand_name" name="brand_name" type="text" readonly class="form-control-plaintext" value="{{ $brand_name }}">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label for="type_name" class="col-md-3 col-form-label">Model :</label>

                        <div class="col-md-8">
                            <input id="type_name" name="type_name" type="text" readonly class="form-control-plaintext" value="{{ $type_name }}">
                        </div>
                    </div>
                    <hr class="narrow" />

                    <div class="row mb-2">
                        <label for="combustibil" class="col-md-3 col-form-label">
                            Combustibil :
                        </label>

                        <div class="col-md-6">
                            <input id="combustibil" name="combustibil" type="text" readonly class="form-control-plaintext" value="{{ $car->carburant }}">
                        </div>

                    </div>
                    <div class="row mb-2">
                        <label for="consum_mediu" class="col-md-3 col-form-label">
                            Consum mediu:
                        </label>


                        <div class="col-md-2">
                            <input id="consum_mediu" name="consum_mediu" type="text" readonly class="form-control-plaintext" value="{{ $car->consum_mediu }} litri/100km">
                        </div>
                    </div>

                   {{--  <div class="row mb-2">
                        <label for="address_country" class="col-md-3 col-form-label">
                            Country, postal code, place :
                        </label>

                        <div class="col-md-2">
                            <select name="address_country" id="address_country" class="form-select selectpicker" disabled>
                                <option value="">Choose ...</option>
                                @foreach ($countries as $country)
                                    @if ($country->iso2 == $car->address_country)
                                        <option value="{{ $country->iso2 }}" selected>{{ $country->name }}
                                        </option>
                                    @else
                                        <option value="{{ $country->iso2 }}">{{ $country->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-2">
                            <input id="address_postal_code" name="address_postal_code" type="text" readonly class="form-control-plaintext" value="{{ $car->address_postal_code }}">
                        </div>

                        <div class="col-md-4">
                            <input id="address_place" name="address_place" type="text" readonly class="form-control-plaintext" value="{{ $car->address_place }}">
                        </div>

                        <div class="col-md-1">
                            <button type="button" class="btn btn-outline-secondary btn-sm" id="btnMapFacturation" name="btnMapFacturation" title="Show address on map" tabindex="-1">
                                <img src="{{ asset('img/icons/google-maps-location.png') }}" class="img-fluid mx-auto d-block" />
                            </button>
                        </div>
                    </div>
                    <hr class="narrow" />

                    <div class="row mb-2">
                        <label for="phone" class="col-md-3 col-form-label">Phone :</label>

                        <div class="col-md-8">
                            <input id="phone" name="phone" type="text" readonly class="form-control-plaintext" value="{{ $car->phone }}">
                        </div>
                    </div>

                    <div class="row">
                        <label for="email" class="col-md-3 col-form-label">E-mail :</label>

                        <div class="col-md-8">
                            <input id="email" name="email" type="email" readonly class="form-control-plaintext" value="{{ $car->email }}">
                        </div>
                    </div> --}}
                </div>

                {{-- <div class="card-footer">
                    <div class="row">
                        <div class="col">
                            <a class="btn btn-secondary text-white btn-sm" href="{{ route('back.cars.index') }}"" role=" button" tabindex="-1">
                                <i class="bi bi-arrow-left-short"></i>
                            </a>
                        </div>
                    </div>
                </div> --}}
            </div>

            <div class="card mb-3">
                {{-- <div class="card-header">
                    <div class="row">
                        <div class="col">Delivery address</div>

                        <div class="col fs-5 text-end">
                            <img src="{{ asset('img/icons/delivery.png') }}" />
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row mb-2">
                        <label for="delivery_address_street" class="col-md-3 col-form-label">
                            Street, number:
                        </label>

                        <div class="col-md-6">
                            <input id="delivery_address_street" name="delivery_address_street" type="text" readonly class="form-control-plaintext"
                                value="{{ $car->delivery_address_street }}">
                        </div>

                        <div class="col-md-2">
                            <input id="delivery_address_number" name="delivery_address_number" type="text" readonly class="form-control-plaintext"
                                value="{{ $car->delivery_address_number }}">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label for="delivery_address_country" class="col-md-3 col-form-label">
                            Country, postal code, place :
                        </label>

                        <div class="col-md-2">
                            <select name="delivery_address_country" id="delivery_address_country" class="form-select selectpicker" disabled>
                                <option value="">Choose ...</option>
                                @foreach ($countries as $country)
                                    @if ($country->iso2 == $car->delivery_address_country)
                                        <option value="{{ $country->iso2 }}" selected>{{ $country->name }}
                                        </option>
                                    @else
                                        <option value="{{ $country->iso2 }}">{{ $country->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-2">
                            <input id="delivery_address_postal_code" name="delivery_address_postal_code" type="text" readonly class="form-control-plaintext"
                                value="{{ $car->delivery_address_postal_code }}">
                        </div>

                        <div class="col-md-4">
                            <input id="delivery_address_place" name="delivery_address_place" type="text" readonly class="form-control-plaintext" value="{{ $car->delivery_address_place }}">
                        </div>

                        <div class="col-md-1">
                            <button type="button" class="btn btn-outline-secondary btn-sm" id="btnMapDelivery" name="btnMapDelivery" title="Show address on map" tabindex="-1">
                                <img src="{{ asset('img/icons/google-maps-location.png') }}" class="img-fluid mx-auto d-block" />
                            </button>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>

        <div class="col-5">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col">System</div>

                        <div class="col fs-5 text-end">
                            <img src="{{ asset('img/icons/system.png') }}" />
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row mb-2">
                        <label for="created_at" class="col-md-5 col-form-label">Date created :</label>
                        <div class="col-md-6">
                            <input type="text" readonly class="form-control-plaintext" id="created_at" value="{{ $car->created_at }}">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label for="updated_at" class="col-md-5 col-form-label">Date updated :</label>
                        <div class="col-md-6">
                            <input type="text" readonly class="form-control-plaintext" id="updated_at" value="{{ $car->updated_at }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(function() {
            /* -------------------------------------------------------------------------------------------- */
            $('#btnMapFacturation').click(function() {
                var href = "https://www.google.nl/maps/place/";

                var place = [
                    ($('#address_street').val() ?? ''),
                    ($('#address_number').val() ?? '') + ',',
                    ($('#address_postal_code').val() ?? ''),
                    ($('#address_place').val() ?? '')
                ].filter(Boolean).join("+");

                if (place > ',') {
                    window.open(href + place).focus();
                } else {
                    showToast({
                        type: 'info',
                        title: 'Show address ...',
                        message: 'No address available.',
                    });
                }
            });
            /* ------------------------------------------- */
            $('#btnMapDelivery').click(function() {
                var href = "https://www.google.nl/maps/place/";

                var place = [
                    ($('#delivery_address_street').val() ?? ''),
                    ($('#delivery_address_number').val() ?? '') + ',',
                    ($('#delivery_address_postal_code').val() ?? ''),
                    ($('#delivery_address_place').val() ?? '')
                ].filter(Boolean).join("+");

                if (place > ',') {
                    window.open(href + place).focus();
                } else {
                    showToast({
                        type: 'info',
                        title: 'Show address ...',
                        message: 'No address available.',
                    });
                }
            });
            /* -------------------------------------------------------------------------------------------- */
        })
    </script>
@endsection
