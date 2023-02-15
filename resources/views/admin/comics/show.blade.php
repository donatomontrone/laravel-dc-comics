
@extends('layouts.app')

@section('title', 'DC | ' . $comic->title)
@section('main-content')
    <main>
        <div class="container">
            <div class="row">
                @if (session('info-message'))
                <div class="col-12">
                    <div class="alert alert-{{session('alert')}}">
                        {{session('info-message')}}
                    </div>
                </div>
                @endif
                <div class="col-6 text-center mt-4">
                    <img src="{{$comic->img_path}}" alt="{{$comic->title}}" class="img-fluid d-inline-block mb-sm-3">
                    <h6 class="mb-5">{{$comic->price}}&euro; - {{$comic->sale_date}}</h6>
                    <a href="{{route('admin.comics.index')}}" class="btn btn-secondary">Back</a>
                </div>
                <div class="col-6">
                    <h2>    {{$comic->title}}</h2>
                    <h5>{{$comic->series}} - {{$comic->type}}</h5>
                    <p>{{$comic->description}}</p>
                    <a href="{{route('admin.comics.edit', $comic->id)}}" class="btn btn-warning">Edit</a>
                                <form action="{{route('admin.comics.destroy', $comic->id)}}" method="post" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger ">Delete</button>
                                </form>
                </div>
            </div>
        </div>
    </main>

@endsection