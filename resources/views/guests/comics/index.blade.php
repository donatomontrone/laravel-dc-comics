@extends('layouts.guests')

@section('main-content')
<main>
    <div class="jumbotron">
    </div>
    <section class="current-series pb-3">
        <div class="container">
            <div class="row">
            <h4 class="series-title"> CURRENT SERIES </h4>
            @foreach ($comics as $comic)
                <div class="col-6 col-md-3 col-lg-2">
                    <div class="my-card">
                        <a href="{{route('guests.comics.show', $comic->id)}}">
                        <img src="{{$comic->img_path}}" alt="{{$comic->title}}" class="img-fluid"></a>
                        <p class="text-white"> {{$comic->title}}</p>
                    </div>
                </div>
            @endforeach
            </div>
            <a href="#" class="button"> LOAD MORE </a>
        </div>
    </section>
</main>
@endsection