<form action="{{ route($route, $comic->id) }}" method="POST" class="form-control row justify-content-center d-flex needs-validation">
    @csrf
    @method($method)
    <div class="col-10">
        {{-- Title --}}
        <div class="col-md-12 position-relative">
            <label for="inputTitle" class="form-label">Title</label>
            <input type="text" id="inputTitle" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $comic->title) }}">
            <div class="invalid-tooltip">
                @error('title')
                    {{$message}}
                @enderror
            </div>
        </div>
        {{-- Description --}}
        <div class="col-12 position-relative">
            <label for="inputDescription" class="form-label">Description</label>
            <textarea id="inputDesscription" rows="6" class="form-control @error('description') is-invalid @enderror" name="description">{{  old('description',  $comic->description) }}</textarea>
            <div class="invalid-tooltip">
                @error('description')
                    {{$message}}
                @enderror
            </div>
        </div>
        {{-- Image Path --}}
        <div class="col-12 position-relative">
            <label for="inputPath" class="form-label">Image Link</label>
            <input type="text" id="inputPath" class="form-control @error('img_path') is-invalid @enderror" name="img_path" value="{{ old('img_path', $comic->img_path) }}">
            <div class="invalid-tooltip">
                @error('img_path')
                    {{$message}}
                @enderror
            </div>
        </div>
    </div>
    <div class="col-5">
        {{-- Price --}}
        <div class="col-12 position-relative">
            <label for="inputPrice" class="form-label">Price</label>
            <input type="text" id="inputPrice" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price', $comic->price) }}">
            <div class="invalid-tooltip">
                @error('price')
                    {{$message}}
                @enderror
            </div>
        </div>
    </div>
    <div class="col-5">
        {{-- SaleDate --}}
        <div class="col-12 position-relative">
            <label for="inputDate" class="form-label">Sale Date</label>
            <input type="text" id="inputDate" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" value="{{ old('sale_date', $comic->sale_date)}}">
            <div class="invalid-tooltip">
                @error('sale_date')
                    {{$message}}
                @enderror
            </div>
        </div>
    </div>
    <div class="col-10">
        {{-- Series --}}
        <div class="col-12">
            <label for="inputSeries" class="form-label">Series</label>
            <input type="text" id="inputSeries" class="form-control @error('series') is-invalid @enderror" name="series" value="{{ old('series', $comic->series)}}">
            <div class="invalid-tooltip">
                @error('series')
                    {{$message}}
                @enderror
            </div>
        </div>
        {{-- Type --}}
        <div class="col-12 position-relative">
            <label for="inputType" class="form-label">Type</label>
            <input type="text" id="inputType" class="form-control @error('type') is-invalid @enderror" name="type" value="{{  old('type',  $comic->type)}}">
            <div class="invalid-tooltip">
                @error('type')
                    {{$message}}
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-secondary mt-2" >Submit</button>
    </div>
</form>