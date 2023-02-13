
@extends('layouts.app')

@section('title', 'DC | ' . $comic->title)
@section('main-content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-6 text-center mt-4">
                    <img src="{{$comic->img_path}}" alt="{{$comic->title}}" class="img-fluid d-inline-block mb-sm-3">
                    <h6 class="mb-5">{{$comic->price}}&euro; - {{$comic->sale_date}}</h6>
                    <a href="{{route('comics.index')}}" class="btn btn-secondary">Back</a>
                </div>
                <div class="col-6">
                    <h2>    {{$comic->title}}</h2>
                    <h5>{{$comic->series}} - {{$comic->type}}</h5>
                    <p>{{$comic->description}}</p>
                </div>
            </div>
        </div>
    </main>

@endsection