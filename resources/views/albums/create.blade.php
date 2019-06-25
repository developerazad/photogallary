@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Create Photo Album</b></div>

                <div class="panel-body">
                    <form action="{{ url('album/store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="album_name" class="control-label">Album Name</label>
                            <input type="text" class="form-control" id="full_name_id" name="name" placeholder="Enter Album Name">
                        </div>

                        <div class="form-group">
                            <label for="city_id" class="control-label">Description</label>
                            <input type="text" class="form-control" id="city_id" name="description" placeholder="Enter Description">
                        </div>

                        <div class="form-group">
                            <label for="city_id" class="control-label">Cover Image</label>
                            <input type="file" class="form-control" id="city_id" name="cover_image" placeholder="">
                        </div>

                        <div class="form-group"> <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary pull-right">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> {{-- row--}}
@endsection