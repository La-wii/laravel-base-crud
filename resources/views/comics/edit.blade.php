@extends('layout.app')
@section('title', 'Homepage')
@section('content')

    <!--  start container -->
    <div class="container">
        <!--  start form -->
        <form action = "{{route('comics.update', $edit->id)}}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text"  name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$edit->title}}">
                <div id="title" class="form-text">
                </div>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Price</label>
                <input type="text" name="price" class="form-control" id="price" value="{{$edit->price}}">
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" name="thumb" class="form-control" id="thumb" value="{{$edit->thumb}}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" name="series" class="form-control" id="series" value="{{$edit->series}}">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" name="sale_date" class="form-control" id="sale_date" value="{{$edit->sale_date}}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" name="type" class="form-control" id="type" value="{{$edit->type}}">
            </div>

            <div class="form-floating">
            <textarea class="form-control" placeholder="Desciption" id="description" name="description">
                value="{{$edit->description}}">
            </textarea>
            <label for="floatingTextarea">Desciption</label>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <!--  end form -->
    </div>
    <!--  end container -->
        
@endsection