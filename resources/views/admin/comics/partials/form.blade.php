<form action="{{ route($route, $comic->id) }}" method="POST" class="form-control row justify-content-center d-flex">
    @csrf
    @method($method)
    <div class="col-10">
        {{-- Title --}}
        <label for="inputTitle" class="form-label">Title</label>
        <input type="text" id="inputTitle" class="form-control" name="title" value="{{$comic->title }}">
        {{-- Description --}}
        <label for="inputDescription" class="form-label">Description</label>
        <textarea id="inputDesscription" class="form-control" name="description">{{$comic->description}}</textarea>

        {{-- Image Path --}}
        <label for="inputPath" class="form-label">Image Link</label>
        <input type="text" id="inputPath" class="form-control" name="img_path" value="{{$comic->img_path}}">
    </div>
    <div class="col-5">
        {{-- Price --}}
        <label for="inputPrice" class="form-label">Price</label>
        <input type="text" id="inputPrice" class="form-control" name="price" value="{{$comic->price}}">
    </div>
    <div class="col-5">
        {{-- SaleDate --}}
        <label for="inputDate" class="form-label">Sale Date</label>
        <input type="text" id="inputDate" class="form-control" name="sale_date" value="{{$comic->sale_date}}">
    </div>
    <div class="col-10">
        {{-- Series --}}
        <label for="inputSeries" class="form-label">Series</label>
        <input type="text" id="inputSeries" class="form-control" name="series" value="{{$comic->series}}">
        {{-- Type --}}
        <label for="inputType" class="form-label">Type</label>
        <input type="text" id="inputType" class="form-control" name="type" value="{{$comic->type}}">
        <button type="submit" class="btn btn-secondary mt-2" >Submit</button>
    </div>
</form>