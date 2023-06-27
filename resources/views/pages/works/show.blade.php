@extends('layouts.app')

@section('title')
    WORKS | Show
@endsection

@section('content')
    
    <div class="container">

        <h2 class="text-center mt-5">SHOW!</h2> 

        <div class="d-flex flex-wrap container text-center justify-content-around p-5">
            {{-- SINGOLA CARD --}}
            <div class="card col-lg-2 text-center mx-4 my-4">
                <img src="{{ $single_work->image }}" alt="">
                <div class="icon my-3">
                    <h5>{{ $single_work->title }}</h5>
                    <p>{{ $single_work->lenguages }}</p>
                    <p>{{ $single_work->data_create }}</p>
                    {{-- BUTTON EDIT --}}
                    <a class="btn btn-primary" href="{{route('works.edit', $single_work)}}">Change</a>
                    <form action="{{route('works.destroy', $single_work)}}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        {{-- BUTTON DELETE --}}
                        <button class="btn btn-danger" onclick="return confirmDelete()">Delete</button>    
                    </form>
                </div>
            </div>
        </div>
        
    </div>

    <script>

        function confirmDelete(){
            return confirm('Are you sure that you want delete?')
        } 

    </script>

@endsection