@extends('layout.app')
@section('title', 'Homepage')
@section('content')
    <!--  start container -->
    <div class="container">
        <p>
            @if (session ('deleted'))
                <div class="alert alert-success">
                    {{session ('deleted')}}
                </div>
            @endif
        </p>
        <table class="table">   

        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Series</th>
            <th scope="col">Type</th>
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
                        <a href="{{ route ('comics.edit', $fumetto->id)}}" class="btn btn-success">Edit</a>
                        <form action="{{ route ('comics.destroy', $fumetto->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger">
                        </form>    
                    </td>
                </tr>   
            @endforeach
        </tbody>
    </table>

@endsection