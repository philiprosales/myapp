@extends('layouts.app')

@section('content')
    <a href="/portfolios" class="btn btn-primary">Go Back</a>
    <h1>{{$portfolio->thumbnails}}</h1>
    <div>
        <h2>{{$portfolio->title}}</h2>
        <h2>{{$portfolio->description}}</h2>
        <h2>{{$portfolio->embed_code}}</h2>
        <h2>{{$portfolio->url}}</h2>
    </div>
    <hr>
    <small>Written on {{$portfolio->created_at}}</small>
    <hr>
    <a href="/portfolios/{{$portfolio->id}}/edit" class="btn btn-default">Edit</a>

    <form method="POST" class="pull-right" action="{{action('PortfoliosController@destroy', $portfolio->id)}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">  
        <div class="form-group">
            <input type="hidden" name="_method" value="Delete"/>
            <input type="submit" name="delete" value="Delete" class="btn btn-danger">
        </div>
    </form>
@endsection
