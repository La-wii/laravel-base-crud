@extends('layout.app')
@section('title', 'Homepage')
@section('content')
    <!--  start container -->
    <div class="container">
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            <th scope="col">Button</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fumetti as $fumetto)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$fumetto->title}}</td>
                    <td>{{$fumetto->series}}</td>
                    <td>{{$fumetto->type}}</td>
                    <td>
                        <a href="{{ route ('comics.show', $fumetto->id)}}" class="btn btn-primary">Show</a>
                        <a href="#" class="btn btn-success">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection