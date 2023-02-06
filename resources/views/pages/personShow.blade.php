@extends('layouts.main-layout')


@section('content')

    <h1>
        {{ $person -> firstName }} {{ $person -> lastName }}
    </h1>
    
    Date of Birth: {{ $person -> dateOfBirth }} <br>
    Height: {{ $person -> height }}
    <br>
    <a href="{{ route('home') }}">Back</a>
    
    
@endsection