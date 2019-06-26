@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Upload Photo</b></div>

                <div class="panel-body">
                    <form action="{{ url('photo/store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <input type="text" name="album_id" value="{{ $album_id }}" class="form-control">

                        <div class="form-group">
                            <label for="album_name" class="control-label">Title</label>
                            <input type="text" class="form-control" id="full_name_id" name="title" placeholder="Enter Photo Title">
                        </div>

                        <div class="form-group">
                            <label for="city_id" class="control-label">Description</label>
                            <input type="text" class="form-control" id="city_id" name="description" placeholder="Enter Photo Description">
                        </div>

                        <div class="form-group">
                            <label for="city_id" class="control-label">Chose Photo</label>
                            <input type="file" class="form-control" id="city_id" name="photo" placeholder="">
                        </div>

                        <div class="form-group"> <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary pull-right">Upload Photo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> {{-- row--}}
@endsection