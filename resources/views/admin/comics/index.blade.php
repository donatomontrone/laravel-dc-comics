@extends('layouts.app')

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
                <div class="col-12 text-end">
                    <a href="{{route('admin.comics.create')}}" class="btn btn-primary btn-sm">New Comic</a>
                </div>
                <div class="col-1 border rounded">
                    <h1 class="text-center m-0 p-0">{{$count}}</h1>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th role="col">ID</th>
                            <th role="col">Title</th>
                            <th role="col">Price</th>
                            <th role="col">Sale Date</th>
                            <th role="col">Type</th>
                            <th role="col">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comics as $comic)
                        <tr>
                            <th scope="row">{{$comic->id}}</th>
                            <td>{{$comic->title}}</td>
                            <td>{{$comic->price}}&euro;</td>
                            <td>{{$comic->sale_date}}</td>
                            <td>{{$comic->type}}</td>
                            <td>
                                <a href="{{route('admin.comics.show', $comic->id)}}" class="btn btn-primary btn-sm">Show</a>
                                <a href="{{route('admin.comics.edit', $comic->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{route('admin.comics.destroy', $comic->id)}}" method="post" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                            @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
@section('scripts')
    @vite('resources/js/deleteConfirm.js')
@endsection