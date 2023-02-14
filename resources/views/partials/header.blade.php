<header class="mb-5">
    <nav class="navbar navbar-expand bg-body-tertiary">
        <div class="container-fluid justify-content-start">
            <a class="navbar-brand" href="#">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/DC_Comics_logo.svg/600px-DC_Comics_logo.svg.png" alt="Logo" width="50" height="50" class="d-inline-block">
            </a>
            <div class="navbar-nav">
                <a class="nav-link {{ Route::currentRouteName() == 'admin.home' ? 'active' : '' }}" href="{{route('admin.home')}}">Home</a>
                <a class="nav-link {{Route::currentRouteName() == 'admin.comics.index' ? 'active' : '' }}" href="{{route('admin.comics.index')}}">Comics</a>
            </div>
        </div>
    </nav>
</header>