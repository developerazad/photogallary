
@extends('layouts.app')

@section('content')

    <h3>{{$photo->title}}</h3>
    <p>{{$photo->description}}</p>
    <a href="{{ url('/album/'.$photo->album_id) }}"><button class="btn btn-default">Back to Gallary</button></a>
    <br><br>
    <img class="img-thumbnail" src="{{ asset( '/photos/' . $photo->photo) }}" alt="{{$photo->title}}">
    <br><br>

    <form action="{{ url('/photo/'.$photo->id) }}" method="post">
        <input type="hidden" name="_method" value="delete">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" class="btn btn-danger">Delete Photo</button>
    </form>




@endsection