@extends('layouts.app')
@section('title', 'DC | New Title')
@section('main-content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Create a new comic</h2>
            </div>
            <div class="col-10">
                @include('admin.comics.partials.form', ['route' => 'admin.comics.store','method' => 'POST', 'comic' => $comic])
            </div>
        </div>
    </div>
</main>

@endsection

{{-- 
                $newComic = new Comic();
            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];
            $newComic->img_path = $comic['thumb'];
            $newComic->price = $comic['price'];
            $newComic->series = $comic['series'];
            $newComic->sale_date = $comic['sale_date'];
            $newComic->type = $comic['type'];
            $newComic->save(); --}}