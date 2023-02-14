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
                <form action="{{route('admin.comics.store')}}" method="post" class="form-control row justify-content-center d-flex">
                    <div class="col-10">
                        {{-- Title --}}
                        <label for="inputTitle" class="form-label">Title</label>
                        <input type="text" id="inputTitle" class="form-control" name="title">
                        {{-- Description --}}
                        <label for="inputDescription" class="form-label">Description</label>
                        <input type="textarea" id="inputDesscription" class="form-control" name="description">
        
                        {{-- Image Path --}}
                        <label for="inputPath" class="form-label">Image Link</label>
                        <input type="text" id="inputPath" class="form-control" name="img_path">
                    </div>
                    <div class="col-5">
                        {{-- Price --}}
                        <label for="inputPrice" class="form-label">Price</label>
                        <input type="number" id="inputPrice" class="form-control" name="price">
                    </div>
                    <div class="col-5">
                        {{-- SaleDate --}}
                        <label for="inputDate" class="form-label">Sale Date</label>
                        <input type="text" id="inputDate" class="form-control" name="sale_date">
                    </div>
                    <div class="col-10">
                        {{-- Series --}}
                        <label for="inputSeries" class="form-label">Series</label>
                        <input type="text" id="inputSeries" class="form-control" name="series">
                        {{-- Type --}}
                        <label for="inputType" class="form-label">Type</label>
                        <input type="text" id="inputType" class="form-control" name="type">
                    </div>
                </form>
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