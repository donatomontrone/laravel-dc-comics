@extends('layouts.app')

@section('main-content')
    <main>
        <div class="container">
            <div class="row">
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
                                <a href="#" class="btn btn-success btn-sm">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                            @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection