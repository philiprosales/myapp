@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

    <form method="POST" class="pull-right" action="{{action('PostsController@destroy', $post->id)}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">  
        <div class="form-group">
            <input type="hidden" name="_method" value="Delete"/>
            <input type="submit" name="Delete" value="Delete" class="btn btn-danger">
        </div>
    </form>
@endsection