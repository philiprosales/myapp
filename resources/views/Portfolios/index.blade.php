@extends('layouts.app')

@section('content')
    <h1>Portfolios</h1>
    @if(count($portfolios) > 0)
        @foreach($portfolios as $portfolio)
            <div class="well">
                <h3><a href="/portfolios/{{$portfolio->id}}">{{$portfolio->thumbnails}}</a></h3>
                <h3>{{$portfolio->title}}</h3>
                <h3>{{$portfolio->description}}</h3>
                <h3>{{$portfolio->embed_code}}</h3>
                <h3>{{$portfolio->url}}</h3>
                <small>Written on {{$portfolio->created_at}}</small>
            </div>
        @endforeach
    @else

    @endif
    <p>No portfolios found</p>
@endsection