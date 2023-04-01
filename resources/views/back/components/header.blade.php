<?php
    $current_month = date_create(date("Y-m-d"));
    $current_day = intval(date("d"));
    $current_month = date_create(date("Y-m"));
    $numarZileLunaAnterioara = intval(\App\Models\Setting::where('nume', 'numarZileLunaAnterioara')->first()->valoare);
    if($current_day<$numarZileLunaAnterioara){
        $current_month = date_add($current_month, date_interval_create_from_date_string("-1 months"));
    }
    $current_month = date_format($current_month,"Y-m-d");
    $months = \App\Models\Month::Select()->orderBy('data_raportarii','DESC')->take(5)->get();
    $selectedMonth_id = \App\Models\Month::where('select', 1)->first()->id;
    $lunaCurentaEsteInchisa = \App\Models\Month::where('select', 1)->first()->inchisa;
    $intervalulCurentEsteInchis = \App\Models\Interval::where('month_id', $selectedMonth_id)->where('select', 1)->first()->inchis;
    $mm= json_encode($months);//test pentru transmitere array catre javascript (JSON.strignify)
?>
<nav class="navbar navbar-dark {{$lunaCurentaEsteInchisa == 0 ? ($intervalulCurentEsteInchis == 0 ? 'bg-success' : 'bg-info') : 'bg-danger'}} fixed-top d-print-none" id="my-nav-bar">
    <div class=" container-fluid"  id="myli">
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


        {{-- right --}}
        <div class="me-1">
            <select id="month_select" class="form-select"  style="width: 110%" data-months="{{$mm}}">
                @foreach($months as $month);
                    <option {{((string)$month['select'] == 1) ? "selected": ""}} value="{{ $month['id'] }}" >
                        {{ $month['anul_luna'] }}
                    </option>'
                @endforeach
            </select>
        </div>
        <div class="me-2">
            <select id="interval_select" class="form-select"  style="width: 140%" >

            </select>
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
