@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create Skills</h1>
            <form method="POST" action="{{action('SkillsController@store')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="">Confidence Level</label>
                    <select name="confidencelvl" class="form-control" placeholder="Confidencelevel">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Skill Icon</label>
                    <input type="file" name="skill_icon" class="form-control">
                </div>
                
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary form-control">
                </div>
            </form> 
        </div>
    </div>
@endsection
