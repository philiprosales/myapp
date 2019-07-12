@extends('layouts.app')

@section('content')
    <h1>Skills</h1>
    @if(count($skills) > 0)
        @foreach($skills as $skill)
            <div class="well">
                <h3><a href="/posts/{{$skill->id}}">{{$skill->title}}</a></h3>
                <small>Written on {{$skill->created_at}}</small>
            </div>
        @endforeach
        {{$skills->links()}}
    @else

    @endif
    <p>No posts found</p>
@endsection
