@extends('layout.app')
@section('title', 'Homepage')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img src="{{$dettaglio->thumb}}" class="card-img-top" alt="...">
                <div class="card-body">
                <h4 class="card-text">{{$dettaglio->title}}</h4>
                </div>
            </div>
        </div>

        <div class="col-8">
            <h1>{{$dettaglio->title}}</h1>
            <h4>{{$dettaglio->series}}</h4>
            <p>{{$dettaglio->description}}</p>
            <p>{{$dettaglio->sale_date}}</p>
            <p>{{$dettaglio->price}}</p>
        </div>
    </div>
</div>
@endsection