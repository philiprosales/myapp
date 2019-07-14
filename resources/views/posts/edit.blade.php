@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Edit Posts</h1>
            <form method="POST" action="{{action('PostsController@update', $post->id)}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="">Post Name</label>
                    <input type="text" name="title" value={{$post->title}} class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Body</label>
                    <textarea type="text" name="body" id="article-ckeditor" class="form-control">{{$post->body}}</textarea>
                </div>

                <input type="hidden" name="_method" value="put"/>
    
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary form-control">
                </div>
            </form>
        </div>
    </div>
@endsection
