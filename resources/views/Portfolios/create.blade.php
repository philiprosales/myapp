@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create Portfolios</h1>
            <form method="POST" action="{{action('PortfoliosController@store')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="">Thumbnails</label>
                    <input type="text" name="thumbnails" class="form-control" placeholder="Thumbnails">
                </div>

                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Title Name">
                </div>

                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" name="description" class="form-control" placeholder="Description">
                </div>

                <div class="form-group">
                    <label for="">Embed</label>
                    <input type="text" name="embed_code" class="form-control" placeholder="Embed Code">
                </div>

                <div class="form-group">
                    <label for="">URL</label>
                    <input type="text" name="url" class="form-control" placeholder="URL">
                </div>

                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary form-control">
                </div>
            </form>
        </div>
    </div>
@endsection
