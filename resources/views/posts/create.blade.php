@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create Posts</h1>
            <form method="POST" enctype="multipart/form-data" action="{{action('PostsController@store')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="">Post Name</label>
                    <input type="text" name="title" class="form-control" placeholder="Posts Name">
                </div>

                <div class="form-group">
                    <label for="">Body</label>
                    <textarea name="body" id="article-ckeditor" class="form-control" placeholder="Body Text"></textarea>
                </div>

                <div class="form-group">
                    <input type="file" name="cover_image">
                </div>

                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary form-control">
                </div>
            </form>
        </div>
    </div>
@endsection
