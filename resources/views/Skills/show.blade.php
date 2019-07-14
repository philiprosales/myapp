@extends('layouts.app')

@section('content')
    <a href="/skills" class="btn btn-default">Go Back</a>
    <h1>{{$skill->confidencelvl}}</h1>
    <div>
        {{$skill->skill_icon}}
    </div>
    <hr>
    <small>Written on {{$skill->created_at}}</small>
    <hr>
    <a href="/skills/{{$skill->id}}/edit" class="btn btn-default">Edit</a>

    <form method="POST" class="pull-right" action="{{action('SkillsController@destroy', $skill->id)}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">  
        <div class="form-group">
            <input type="hidden" name="_method" value="Delete"/>
            <input type="submit" name="Delete" value="Delete" class="btn btn-danger">
        </div>
    </form>
@endsection