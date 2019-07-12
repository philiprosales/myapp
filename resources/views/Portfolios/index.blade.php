@extends('layouts.app')

@section('content')
    <h1>Portfolios</h1>
    @if(count($portfolios) > 0)
        @foreach($portfolios as $portfolio)
            <div class="well">
                <h3><a href="/posts/{{$portfolio->id}}">{{$portfolio->title}}</a></h3>
                <small>Written on {{$portfolio->created_at}}</small>
            </div>
        @endforeach
        {{$portfolios->links()}}
    @else

    @endif
    <p>No posts found</p>
@endsection