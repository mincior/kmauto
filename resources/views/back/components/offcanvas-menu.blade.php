<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
    <!-- application -->
        <a class="nav-link disabled" aria-current="page" href="/" style="color:beige;">Operatii</a>
    <li class="nav-item">
    </li>

    <hr class="narrow">

    <!-- developer -->
    @can('is_admin')

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Masini
            <hr class="narrow">
        </a>
        <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
            <li><a  href="{{ route('back.brands.index') }}" style="color:rgb(22, 22, 11);">Masini - marca</a></li>
            <hr class="narrow">
        </ul>
    </li>
        {{-- craft insert link placeholder --}}
        <li><a  href="{{ route('back.logs.index') }}" style="color:beige;">Log</a></li>
        		<li><a  href="{{ route('back.car-asigs.index') }}" style="color:beige;">CarAsig</a></li>
		<li><a  href="{{ route('back.car-prop-values.index') }}" style="color:beige;">CarPropValue</a></li>
		<li><a  href="{{ route('back.car-asig-values.index') }}" style="color:beige;">CarAsigValue</a></li>
		<li><a  href="{{ route('back.car-props.index') }}" style="color:beige;">CarProp</a></li>
		<li><a  href="{{ route('back.expires.index') }}" style="color:beige;">Expire</a></li>
		<li><a  href="{{ route('back.revisions.index') }}" style="color:beige;">Revision</a></li>
		<li><a  href="{{ route('back.carseconds.index') }}" style="color:beige;">Carsecond</a></li>
        <li><a  href="{{ route('view-upload-form') }}" style="color:beige;">Incarca tabele din excel</a></li>
        <li><a  href="{{ route('back.departments.index') }}" style="color:beige;">Filiale</a></li>
        <li><a  href="{{ route('back.months.index') }}" style="color:beige;">Luni</a></li>
        <li><a  href="{{ route('back.intervals.index') }}" style="color:beige;">Intervale</a></li>
        <li><a  href="{{ route('back.fuels.index') }}" style="color:beige;">Tipuri combustibil</a></li>
        <li><a  href="{{ route('back.fuel-prices.index') }}" style="color:beige;">Preturi combustibil</a></li>
        <li><a  href="{{ route('back.stats.index') }}" style="color:beige;">Statusi</a></li>
        <hr class="narrow">
        <li><a  href="{{ route('back.developer.impressum') }}" style="color:beige;">Impressum</a></li>
        <li><a  href="{{ route('back.developer.session') }}" style="color:beige;">Session</a></li>
    @endcan
</ul>
{{-- <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
    <!-- application -->
    <li class="nav-item">
        <a class="nav-link disabled" aria-current="page" href="/">Application</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('back.customers.index') }}">Customers</a>
    </li>
    <hr class="narrow">

    <!-- developer -->
    @can('is_admin')
        <li class="nav-item">
            <a class="nav-link disabled" aria-current="page" href="/">Administration</a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Developer
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                <li><a class="dropdown-item" href="{{ route('back.users.index') }}">Users</a></li>
                <li>
                    <hr class="narrow">
                </li>
                <li><a class="dropdown-item" href="{{ route('back.developer.impressum') }}">Impressum</a></li>
                <li><a class="dropdown-item" href="{{ route('back.developer.session') }}">Session</a></li>
            </ul>
        </li>
    @endcan
</ul> --}}