<header>
    <section class="header-aside">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="m-0">
                        <li>
                            <a href="#">DC POWER&#8480; VISA&#174;</a>
                        </li>
                        <li>
                            <a href="#">ADDITIONAL DC SITES</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="{{route('guests.home')}}">
                <img src="{{Vite::asset('resources/assets/img/dc-logo.png')}}" alt="Logo" class="d-block m-auto logo-img">
            </a>
            <div class="collapse navbar-collapse nav-list" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fw-bold{{str_starts_with(Route::currentRouteName(), 'guests.home') ? 'active' : '' }}" href="{{route('guests.home')}}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold{{str_starts_with(Route::currentRouteName(), 'guests.comics') ? 'active' : '' }}" href="{{route('guests.comics.index')}}">COMICS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#">MOVIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold " href="#">TV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#">GAMES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#">COLLECTIBLES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#">VIDEOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#">FANS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#">NEWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary fw-bold text-white" href="{{route('admin.home')}}">GO TO ADMIN</a>
                    </li>
                </div>
        </div>
    </nav>
</header>