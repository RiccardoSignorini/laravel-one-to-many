@extends('layouts.app')

@section('title')
    WORKS | Edit
@endsection

@section('content')
    <div class="container">
        <h2 class="text-center">EDIT!</h2>

        <form action="{{route('works.update', $work)}}" method="POST">

            @csrf
            @method('PUT')

            <div class="form-group my-2">
                <label class="form-label" for="">TITLE</label>
                <input class="form-control" type="text" name="title" value="{{old('title') ?? $work->title}}">
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="">DESCRIPTION</label>
                <textarea class="form-control" name="description" cols="30" rows="10">{{old('description') ?? $work->description}}</textarea>
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="">LENGUAGES</label>
                <input class="form-control" type="text" name="lenguages" value="{{old('lenguages') ?? $work->lenguages}}">
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="">URL IMAGE</label>
                <input class="form-control" type="text" name="image" value="{{old('image') ?? $work->image}}">
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="">CREATION DATE</label>
                <input class="form-control" type="text" name="creation_date" value="{{old('creation_date') ?? $work->creation_date}}">
            </div>

            <button type="submit" class="btn btn-primary my-3">CHANGE PROJECT</button>
        </form>    
    </div>
    
@endsection