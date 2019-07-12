@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create Skills</h1>
            <form method="post" action="{{action{'SkillsController@store'}}}"></form>
                <div class="form-group">
                    <label for="">Skill Name</label>
                    <input type="text" name="skillname" clear="form-control" placeholder="Skills Name">
                </div>
        </div>
    </div>
@endsection
