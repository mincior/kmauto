<?php
$current_month = date_create(date('Y-m-d'));
$current_day = intval(date('d'));
$current_month = date_create(date('Y-m'));
$numarZileLunaAnterioara = intval(\App\Models\Setting::where('nume', 'numarZileLunaAnterioara')->first()->valoare);
if ($current_day < $numarZileLunaAnterioara) {
    $current_month = date_add($current_month, date_interval_create_from_date_string('-1 months'));
}
$current_month = date_format($current_month, 'Y-m-d');
$months = \App\Models\Month::Select()
    ->orderBy('data_raportarii', 'DESC')
    ->get();
$selectedMonth = @\App\Models\Month::where('select', 1)->first();
if(!$selectedMonth){
    $selectedMonth= @\App\Models\Month::orderby('id', 'desc')->first();
}
$selectedMonth_id = $selectedMonth->id;
$lunaCurentaEsteInchisa = $selectedMonth->inchisa;
$session = \App\Models\Setting::where('nume', 'butonSelectat')->first()->valoare;
$mm = json_encode($months); //test pentru transmitere array catre javascript (JSON.strignify)
?>
{{-- pune culoarea barei de navigare de sus in functie de luna si intervalul selectat. O luna daca este inchisa bara va fi rosie. Daca este deschisa 
    va fi verde daca intervalul este deschis si albastra daca nu.  --}}
<nav class="navbar navbar-dark {{ $lunaCurentaEsteInchisa == 0 ? 'bg-success' : 'bg-danger' }} fixed-top d-print-none"
    id="my-nav-bar">
    <div class=" container-fluid" id="myli">
        {{-- left --}}
        <div>
            <button class="btn btn-lg btn-outline-dark me-1  mb-2" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" tabindex="-1" title="Menu">
                <i class="bi bi-list"></i>
            </button>
            <a class="btn btn-lg {{ ($session == 'home' ? 'btn-light' : 'btn-outline-dark') }} me-1" href="/" title="Home" role="button"
                tabindex="-1" onclick="change_button(this, 'home')">
                <i class="bi bi-house-fill"></i>
            </a>
            {{-- <div class="btn-group me-1" role="group">
                <a class="btn btn-lg {{ ($session == 'filiale' ? 'btn-light' : 'btn-outline-dark') }}" 
                href="" title="Filiale" role="button" tabindex="-1" onclick="change_button(this, 'filiale')">
                    <img src="{{ asset('img/buttons/categorisatie-030.png') }}" class="img-fluid" />
                </a>
                <a class="btn btn-lg {{ ($session == 'kmlog' ? 'btn-light' : 'btn-outline-dark') }}" 
                href="" title="Km log" role="button" tabindex="-1" onclick="change_button(this, 'kmlog')">
                    <img src="{{ asset('img/buttons/delivery-030.png') }}" class="img-fluid" />
                </a>
                <a class="btn btn-lg {{ ($session == 'orders' ? 'btn-light' : 'btn-outline-dark') }}" 
                href="" title="Orders (not implemented yet)" role="button" tabindex="-1" onclick="change_button(this, 'orders')">
                    <img src="{{ asset('img/buttons/stock-030.png') }}" class="img-fluid" />
                </a>
            </div> --}}
        </div>
        {{-- center --}}
        <div>
            <div class="btn-group me-1" role="group">
                <a class="btn btn-lg {{ ($session == 'users' ? 'btn-light' : 'btn-outline-dark') }}" id="user-button" href="{{ route('back.users.index') }}" title="Utilizatori"
                    role="button" tabindex="-1" onclick="change_button(this, 'users')">
                    {{-- <img src="{{ asset('img/buttons/persons-025-wit.png') }}" class="img-fluid" /> --}}
                    <img src="{{ asset('img/icons/person.png') }}" class="img-fluid" />
                </a>
                <a class="btn btn-lg {{ ($session == 'cars' ? 'btn-light' : 'btn-outline-dark') }}" id="car-button" href="{{ route('back.cars.index') }}" title="Masini"
                    role="button" tabindex="-1" onclick="change_button(this, 'cars')">
                    <img src="{{ asset('img/buttons/car.png') }}" class="img-fluid" />
                </a>
                <a class="btn btn-lg {{ ($session == 'kmlogs' ? 'btn-light' : 'btn-outline-dark') }}" id="kmlog-button" href="{{ route('back.kmlogs.index') }}" title="Masini"
                    role="button" tabindex="-1" onclick="change_button(this, 'kmlogs')">
                    <img src="{{ asset('img/buttons/delivery-030.png') }}" class="img-fluid" />
                </a>
            </div>

            <a class="btn btn-lg btn-danger text-white" href="{{ route('logout') }}" title="Logout" role="button"
                tabindex="-1" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bi bi-box-arrow-right"></i>
            </a>
        </div>


        {{-- right --}}
        <div class="me-1">
            <select id="month_select" class="form-select" style="width: 130%" data-months="{{ $mm }}">
                @foreach ($months as $month)
                    ;
                    <option {{ (string) $month['select'] == 1 ? 'selected' : '' }} value="{{ $month['id'] }}">
                        {{ $month['anul_luna'] }}
                    </option>'
                @endforeach
            </select>
        </div>
        <div class="me-2 ">
            <select id="interval_select" class="form-select" style="width: 100%">

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
