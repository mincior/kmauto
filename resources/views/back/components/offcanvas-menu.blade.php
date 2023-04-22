<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
    <!-- application -->
        <a class="nav-link disabled" aria-current="page" href="/" style="color:beige;">Operatii</a>
    <li class="nav-item">
    </li>

    <hr class="narrow">

    <!-- developer -->
    @can('is_admin')
        <li><a  href="{{ route('back.brands.index') }}" style="color:beige;">Masini - marca</a></li>
        <li><a  href="{{ route('back.types.index') }}" style="color:beige;">Masini - model</a></li>
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
