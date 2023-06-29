@extends('layouts.app')

@section('title')
    WORKS | Create
@endsection

@section('content')
    <div class="container">
        <h2 class="text-center">CREATE!</h2>

        <form action="{{route('works.store')}}" method="POST">

            @csrf

            <div class="form-group my-2">
                <label class="form-label" for="">TITLE</label>
                <input class="form-control" type="text" name="title">
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="">LENGUAGES</label>
                <input class="form-control" type="text" name="lenguages">
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="">DESCRIPTION</label>
                <textarea class="form-control" name="description" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="">URL IMAGE</label>
                <input class="form-control" type="text" name="image">
            </div>

            {{-- ONE-TO-MANY --}}
            <div class="form-group my-2">
                <label class="form-label" for="">SELECT CATEGORY</label>
                <select class="form-select" aria-label="Disabled select example" name="category_id">
                    <option selected value="">Open this select menu</option>
                    @foreach ($categories as $elem)
                        <option value="{{$elem->id}}">{{$elem->name}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary my-3">MAKE PROJECT</button>
        </form>    
    </div>
    
@endsection