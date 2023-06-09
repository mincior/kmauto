<nav class="navbar navbar-dark bg-secondary fixed-top">
    <div class="container-fluid">
        {{-- left --}}
        <div>
            <a class="btn btn-lg btn-primary text-white me-1" href="https://www.facebook.com/yourcompany/"
                target="_blank" title="Your Company Name on Facebook" role="button" tabindex="-1">
                <i class="bi bi-facebook"></i>
            </a>

            <a class="btn btn-lg btn-light me-1" href="https://consolight.ro/website/" target="_blank"
                title="yourcompany.com" role="button" tabindex="-1">
                <img src="{{ asset('img/logo/laravel-025.png') }}" alt="consolight.ro">
            </a>
        </div>

        {{-- center --}}
        <div>

        </div>

        {{-- right --}}
        <div>
            <a class="btn btn-lg btn-success text-white me-1" href="/" title="Home" role="button" tabindex="-1">
                <i class="bi bi-house-fill"></i>
            </a>

            <a class="btn btn-lg btn-success text-white" href="{{ route('login') }}" title="Login" role="button"
                tabindex="-1">
                <i class="bi bi-person"></i>
            </a>
            <a class="btn btn-lg btn-info text-yellow" href="{{ route('register') }}" title="Register" role="button"
                tabindex="-1">
                <i class="bi bi-person-plus-fill"></i>
            </a>
        </div>
    </div>
</nav>
