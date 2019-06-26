<style>
    .img-thumbnail{
        width: 350px!important;
        height: 280px!important;
    }
</style>
@extends('layouts.app')

@section('content')

    <h1>{{$album->name}}</h1>
    <a href="{{ url('/') }}"><button class="btn btn-default">Go Back</button></a>
    <a href="{{ url('/photo/create/'.$album->id) }}"><button class="btn btn-info">Upload Photo</button></a>

    <hr>
    @if(count($album->photo) > 0)
        @foreach($album->photo as $photo)
            <div class="col-md-4">
                <a href="{{ url('/photo/'.$photo->id) }}">
                    <img class="img-thumbnail" src="photos/{{$photo->photo}}" alt="{{$photo->title}}">
                </a>
                <br>
                <h4 class="text-center">{{$photo->title}}</h4>
            </div>
        @endforeach

    @else
        <p>No Photo To Display</p>
    @endif

@endsection