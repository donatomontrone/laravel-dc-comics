@extends('layouts.guests')

@section('main-content')
<main>
    <div class="jumbotron">
    </div>
    <section class="current-comic">
        <div class="image-container">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <div class="img-info">
                            <div class="comic-type">
                                <p class="text-uppercase m-0">{{$comic->type}}</p>
                            </div>
                            <img src="{{$comic->img_path}}" alt="{{$comic->title}}" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="comic-info mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <h2>{{$comic->title}}</h2>
                        <div class="green-price">
                            <h6 class="p-0 m-0">Price: <span>&euro;{{$comic->price}}</span></h6>
                        </div>
                        <div class="description">
                            <p>{{$comic->description}}</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <img src="{{Vite::asset('resources/assets/img/adv.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection