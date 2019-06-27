<style>
    .img-thumbnail{
        width: 350px!important;
        height: 280px!important;
    }
</style>
@extends('layouts.app')

@section('content')
    <h4>Photo Album</h4>
    @if(count($albums) > 0)
        @foreach($albums as $album)
            <div class="col-md-4">
                <a href="{{ url('/album/'.$album->id) }}">
                    <img class="img-thumbnail" src="{{ asset( '/albums/' . $album->cover_image) }}" alt="{{$album->name}}">
                </a>
                <br>
                <h4 class="text-center">{{$album->name}}</h4>
            </div>
        @endforeach

    @else
        <p>No Albums To Display</p>
    @endif


@endsection