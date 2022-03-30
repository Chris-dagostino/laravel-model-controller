@extends('layouts.base')

@section('pageTitle', 'Home Page')
    
@section('content')
    <h1>Guarda un film</h1>


    <ul>

        @foreach ($Movies as $Movie)

            <li>
                {{$Movie->id}} - {{$Movie->title}} - {{$Movie->original_title}} - {{$Movie->nazionality}} - {{$Movie->date}} - {{$Movie->vote}}
            </li>

        @endforeach
    </ul>
@endsection