<header class="mb-5">
    <nav class="navbar navbar-expand bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('admin.home')}}">
                <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/756ac3cf-5cef-4bfe-a74e-43e4d713903a/d7o4r4g-df7537c8-5652-4b09-9f70-3e1719e76251.png/v1/fill/w_1024,h_939,strp/dc_comics_logo_2012_by_jmk_prime_d7o4r4g-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9OTM5IiwicGF0aCI6IlwvZlwvNzU2YWMzY2YtNWNlZi00YmZlLWE3NGUtNDNlNGQ3MTM5MDNhXC9kN280cjRnLWRmNzUzN2M4LTU2NTItNGIwOS05ZjcwLTNlMTcxOWU3NjI1MS5wbmciLCJ3aWR0aCI6Ijw9MTAyNCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.29VgnxWqA8cBWu1zO5Z-xNtbmTgBNORH6VjPZuDOX5w" alt="Logo" width="50" height="50" class="d-inline-block">
            </a>
            <div class="navbar-nav">
                <a class="nav-link {{ str_starts_with(Route::currentRouteName(), 'admin.home') ? 'active' : '' }}" href="{{route('admin.home')}}">Home</a>
                <a class="nav-link {{str_starts_with(Route::currentRouteName(), 'admin.comics') ? 'active' : '' }}" href="{{route('admin.comics.index')}}">Comics</a>
            </div>
            <div class="button">
                <a href="{{route('guests.home')}}" class="btn btn-primary d-block ms-auto">DC | Comics</a>
            </div>
        </div>
    </nav>
</header>