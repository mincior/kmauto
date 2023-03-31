<?php
$months = \App\Models\Month::Select('id', 'anul_luna', 'data_raportarii')->orderBy('data_raportarii','DESC')->take(5)->get();
$selectedMonth_id = \App\Models\Month::Select('id')->where('select', 1)->get()[0]['id'];
$selectedInterval_id = \App\Models\Interval::Select('id')->where('month_id', $selectedMonth_id)->where('select', 1)->get()[0]['id'];
// $intervale = \App\Models\Interval::where('data_raportarii', $months[0]['data_raportarii'])->get();
?>
<nav class="navbar navbar-dark bg-secondary fixed-top d-print-none">
    <div class=" container-fluid">
        {{-- left --}}
            <div>
                <button class="btn btn-lg btn-outline-dark me-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" tabindex="-1" title="Menu">
                <i class="bi bi-list"></i>
            </button>
            <a class="btn btn-lg btn-success text-white me-1" href="/" title="Home" role="button" tabindex="-1">
                <i class="bi bi-house-fill"></i>
            </a>
            {{-- <div class="btn-group me-1" role="group">
                <a class="btn btn-lg btn-outline-dark" href="" title="Filiale" role="button" tabindex="-1">
                    <img src="{{ asset('img/buttons/stock-025-wit.png') }}" class="img-fluid" />
                </a>
                <a class="btn btn-lg btn-outline-dark" href="" title="Km log" role="button" tabindex="-1">
                    <img src="{{ asset('img/buttons/delivery-025-wit.png') }}" class="img-fluid" />
                </a>
                <a class="btn btn-lg btn-outline-dark" href="" title="Orders (not implemented yet)" role="button" tabindex="-1">
                    <img src="{{ asset('img/buttons/reorder-025-wit.png') }}" class="img-fluid" />
                </a>
            </div> --}}
        </div>
        {{-- center --}}
        <div class="me-1">
            <select id="month_select" class="form-select"  style="width: 110%">
                @foreach($months as $month);
                    <option {{((string)$month['id'] == $selectedMonth_id) ? "selected": ""}} value="{{ $month['id'] }}" >
                        {{ $month['anul_luna'] }}
                    </option>'
                @endforeach
            </select>
        </div>
        <div class="me-2">
            <select id="interval_select" class="form-select"  style="width: 140%" >

            </select>
        </div>

        {{-- right --}}
        <div>


            <div class="btn-group me-1" role="group">
                <a class="btn btn-lg btn-outline-dark" href="{{ route('back.customers.index') }}" title="Customers" role="button" tabindex="-1">
                    {{-- <img src="{{ asset('img/buttons/persons-025-wit.png') }}" class="img-fluid" /> --}}
                    <img src="{{ asset('img/icons/persons.png') }}" class="img-fluid" />
                </a>
                <a class="btn btn-lg btn-light" id="car-button" href="{{ route('back.cars.index') }}" title="Masini" role="button" tabindex="-1">
                    <img src="{{ asset('img/buttons/car.png') }}" class="img-fluid" />
                </a>
            </div>

            <a class="btn btn-lg btn-danger text-white" href="{{ route('logout') }}" title="Logout" role="button" tabindex="-1"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bi bi-box-arrow-right"></i>
            </a>
                    </div>

        {{-- Offcanvas Menu --}}
        @include('back.components.offcanvas')

        {{-- logout --}}
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</nav>
@section('scripts')

@parent
<script src="{{ asset('js/me/get_month_intervals.js') }}"></script>

@endsection
