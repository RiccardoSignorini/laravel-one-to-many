@extends('layouts.app')

@section('content')

<div class="container">

    <h2 class="text-center mt-5">My Projects!</h2> 

    <div class="d-flex flex-wrap container text-center justify-content-around p-5">
         {{-- CARD CICLATA --}}
         @foreach( $works as $elem )
             <div class="card col-lg-2 text-center mx-4 my-4">
                 <img src="{{ $elem->image }}" alt="">
                 <div class="icon my-3">
                     <h5>{{ $elem->title }}</h5>
                     <p>{{ $elem->lenguages }}</p>
                     <p>{{ $elem->data_create }}</p>
                     {{-- BUTTON EDIT --}}
                     <a class="btn btn-primary" href="{{route('works.edit', $elem)}}">Change</a>
                     <form action="{{route('works.destroy', $elem)}}" method="POST" class="d-inline">
                         @csrf
                         @method('DELETE')
                         {{-- BUTTON DELETE --}}
                         <button class="btn btn-danger" onclick="return confirmDelete()">Delete</button>    
                     </form>
                     {{-- LINK INFO --}}
                     <div class="position-relative">
                         <a href="{{route('works.show', ['work' => $elem->id])}}">More info</a>
                     </div>
                 </div>
             </div>
         @endforeach
     </div>
     
 </div>

@endsection