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

@endsection