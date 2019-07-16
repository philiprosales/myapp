@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <h3>My Blog Posts</h3>
                    <hr>
                    {{-- <a href="/skills/create" class="btn btn-primary">Create Skill</a>
                    <h3>My Skills</h3>
                    <hr>
                    <a href="/portfolios/create" class="btn btn-primary">Create Portfolio</a>
                    <h3>My Portfolios</h3>
                    <hr> --}}
                    @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                                    <td>
                                        <form method="POST" class="pull-right" action="{{action('PostsController@destroy', $post->id)}}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">  
                                            <div class="form-group">
                                                <input type="hidden" name="_method" value="Delete"/>
                                                <input type="submit" name="Delete" value="Delete" class="btn btn-danger">
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>No posts found</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
