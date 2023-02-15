@extends('layouts.app')
@section('title', 'DC | Edit {{$comic->title}}')
@section('main-content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Edit <span class="text-decoration-underline">{{$comic->title}}</span></h2>
            </div>
            <div class="col-10">
                @include('admin.comics.partials.form', ['route' => 'admin.comics.update', 'method' => 'PUT', 'comic' => $comic])
            </div>
        </div>
    </div>
</main>

@endsection